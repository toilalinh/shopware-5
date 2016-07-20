<?php

class Shopware_Plugins_Frontend_SwagFoodDelivery_Bootstrap extends Shopware_Components_Plugin_Bootstrap
{
    public function getVersion()
    {
        return '1.0.0';
    }

    public function getLabel()
    {
        return 'Food Delivery';
    }

    public function install()
    {
        $this->subscribeEvent(
            'Enlight_Controller_Action_PostDispatchSecure_Frontend_Index',
            'onIndexFrontendPostDispatch'
        );

        $this->registerController('frontend','personal');

        $this->subscribeEvent(
            'Enlight_Controller_Action_PostDispatchSecure_Frontend',
            'onFrontendPostDispatch'
        );

       /* $this->subscribeEvent(
            'Enlight_Controller_Action_PostDispatchSecure_Frontend_Test',
            'onTestTest'
        ); */

        //$this->createDatabase();

        return true;
    }

    public function onFrontendPostDispatch(Enlight_Event_EventArgs $args){

        $controller = $args->get('subject');
        $view = $controller->View();

        $userMail = Shopware()->Session()->offsetGet('sUserMail');
        $isLogged = false;
        if(!empty($userMail)){
            $isLogged = true;
        }

        $userData = array();
        if($isLogged){
            $userData = Shopware()->Session()->offsetGet('userData');
        }

        $firstname = count($userData)==0 ? '':$userData['additional']['user']['firstname'];
        $lastname = count($userData)==0 ? '':$userData['additional']['user']['lastname'];

        $view->assign('userData',$userData);
        $view->assign('firstname',$firstname);
        $view->assign('lastname',$lastname);
        $view->assign('userMail',$userMail);
        $view->assign('isLogged',$isLogged);
    }

    public function createDatabase(){
        $sql = "alter table s_articles_details add column expired_date datetime default null";
        Shopware()->Db()->query($sql);
    }

    //onFrontendPostDispatch
    public function onIndexFrontendPostDispatch(Enlight_Event_EventArgs $args)
    {
        /** @var \Enlight_Controller_Action $controller */
        $controller = $args->get('subject');
        $view = $controller->View();

        $view->addTemplateDir($this->Path() . 'Views/');  //load template from plugin.
        //$view->extendsTemplate('frontend/plugins/food_delivery/home.tpl');  //overwrite block

        $context = Shopware()->Container()->get('shopware_storefront.context_service')->getShopContext();
        $categoryId = $context->getShop()->getCategory()->getId();

        $resultMeals = $this->getMealsForCurWeek($categoryId);

        $view->assign('themenu', $resultMeals);
        $view->sBasketQuantity = Shopware()->Session()->sBasketQuantity;

    }

    public function getStartToEndDate(&$startDate,&$endDate){
        $currDate = date('Y-m-d H:i', time());
        $tempTime = strtotime($currDate);
        $tempStr = date('Y',$tempTime) . '-' . date('m',$tempTime) . '-' . date('d',$tempTime) . ' 9:30';
        $tempDate = date($tempStr);

        $dayofweek = array('Sunday', 'Monday', 'Tuesday', 'Wednesday','Thursday','Friday', 'Saturday');
        $nDayOfWeek = date('w',strtotime($currDate));

        if(strtotime($currDate) >= strtotime($tempDate)){
            if($nDayOfWeek == 6){
                $nDayOfWeek = 0;
            }else{
                $nDayOfWeek = $nDayOfWeek + 1;
            }
        }

        if($nDayOfWeek < 1 || $nDayOfWeek > 5){
            return -1; //current date is sar of sun.
        }elseif($nDayOfWeek == 5){
            //startDate is Friday
            $startDate = date('Y-m-d', strtotime($dayofweek[$nDayOfWeek],strtotime($currDate)));
            return 0; //no endDate
        }

        $startDate =  date('Y-m-d', strtotime($dayofweek[$nDayOfWeek],strtotime($currDate)));
        $endDate = date('Y-m-d', strtotime($dayofweek[5],strtotime($currDate)));
        return 1;

    }

    public function sortMealsByDate($startDate,$endDate,$meals){

        $dayofweek = array('Sunday', 'Monday', 'Tuesday', 'Wednesday','Thursday','Friday', 'Saturday');
        $GermanWeek = array('Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag');
        //return array('n1'=>date('Y-m-d', strtotime($dayofweek[$n1],strtotime($startDate))),'n2'=>date('Y-m-d', strtotime($dayofweek[$n2],strtotime($startDate))));

        $n1 = date('w',strtotime($startDate));
        if($endDate != null){
             $n2 = date('w',strtotime($endDate));
        }else{
            $n2 = -1;
        }

        $result = array();
        if($n2 == -1){
            $lstActiveMeals = $this->getMealsByDate($startDate,$meals);
            $result[$startDate]['meals'] = $lstActiveMeals;
            $result[$startDate]['sDate'] = date('d.M Y',strtotime($startDate));
            $result[$startDate]['sWeekDate'] = $GermanWeek[date('w',strtotime($startDate))];
            return $result;
        }

        $result[$startDate]['meals'] = $this->getMealsByDate($startDate,$meals);
        $result[$startDate]['sDate'] = date('d.M Y',strtotime($startDate));
        $result[$startDate]['sWeekDate'] = $GermanWeek[date('w',strtotime($startDate))];

        for($i=$n1+1;$i<=5;$i++){
            $tempDate =  date('Y-m-d', strtotime($dayofweek[$i],strtotime($startDate)));
            $result[$tempDate]['meals'] = $this->getMealsByDate($tempDate,$meals);
            $result[$tempDate]['sDate'] = date('d.M Y',strtotime($tempDate));
            $result[$tempDate]['sWeekDate'] = $GermanWeek[date('w',strtotime($tempDate))];
        }
        return $result;
    }

    public function getMealsByDate($theDate,$meals){
        $result = array();
        $count = 0;
        foreach($meals as $item){
            if(strtotime($theDate) == strtotime($item['sReleasedate'])){
                $result[$count] = $item;
                $count++;
            }
        }
        if($count==0){
            return array();
        }
        return $result;
    }

    public function getMealsForCurWeek($categoryId){
        $startDate = date('Y-m-d H:i', time());
        $endDate = null;
        $getMess =  $this->getStartToEndDate($startDate,$endDate);
        if($getMess == -1){
            return -1;
        }
        $queryResult = Shopware()->Modules()->Articles()->sGetArticlesByCategory($categoryId);
        $articles = $queryResult['sArticles'];
        $meals = array();
        $count = 0;
        $GermanWeek = array('Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag');
        if($getMess == 0){
            foreach($articles as $item){
                $sql = "select expired_date from s_articles_details where ordernumber = ?";
                $row = Shopware()->Db()->fetchRow($sql,array($item['ordernumber']));
                $expired_date = $row['expired_date'];
                $currentTime =  date('Y-m-d H:i', time());
                if(strtotime($item['sReleasedate']) == strtotime($startDate) && strtotime($currentTime) < strtotime($expired_date)){
                    $meals[$count]['articleID'] = $item['articleID'];
                    $meals[$count]['articleDetailsID'] = $item['articleDetailsID'];
                    $meals[$count]['ordernumber'] = $item['ordernumber'];
                    $meals[$count]['description'] = $item['description'];
                    $meals[$count]['articleName'] = $item['articleName'];
                    $meals[$count]['sReleasedate'] = $item['sReleasedate'];
                    $meals[$count]['supplierName'] = $item['supplierName'];
                    $meals[$count]['supplierID'] = $item['supplierID'];
                    $meals[$count]['price'] = $item['price'];
                    $meals[$count]['pricegroup'] = $item['pricegroup'];
                    $meals[$count]['expired_date'] = $expired_date;
                    $meals[$count]['sDate'] = date('d.M Y',strtotime($item['sReleasedate']));
                    $tempWeekDate = date('w',strtotime($item['sReleasedate']));
                    $meals[$count]['sWeekDate'] = $GermanWeek[$tempWeekDate];
                    $count++;
                }
            }
        }else{
            foreach($articles as $item){
                $sql =  $sql = "select expired_date from s_articles_details where ordernumber = ?";
                $row = Shopware()->Db()->fetchRow($sql,array($item['ordernumber']));
                $expired_date = $row['expired_date'];
                $currentTime =  date('Y-m-d H:i', time());
                if((strtotime($item['sReleasedate']) >= strtotime($startDate) && strtotime($item['sReleasedate']) <= strtotime($endDate)) && strtotime($currentTime) < strtotime($expired_date)){
                    $meals[$count]['articleID'] = $item['articleID'];
                    $meals[$count]['articleDetailsID'] = $item['articleDetailsID'];
                    $meals[$count]['ordernumber'] = $item['ordernumber'];
                    $meals[$count]['description'] = $item['description'];
                    $meals[$count]['articleName'] = $item['articleName'];
                    $meals[$count]['sReleasedate'] = $item['sReleasedate'];
                    $meals[$count]['supplierName'] = $item['supplierName'];
                    $meals[$count]['supplierID'] = $item['supplierID'];
                    $meals[$count]['price'] = $item['price'];
                    $meals[$count]['pricegroup'] = $item['pricegroup'];
                    $meals[$count]['expired_date'] = $expired_date;
                    $meals[$count]['sDate'] = date('d.M Y',strtotime($item['sReleasedate']));
                    $tempWeekDate = date('w',strtotime($item['sReleasedate']));
                    $meals[$count]['sWeekDate'] = $GermanWeek[$tempWeekDate];
                    $count++;
                }
            }
        }

        $lstMeals = $this->sortMealsByDate($startDate,$endDate,$meals);
        return $lstMeals;
    }

}
