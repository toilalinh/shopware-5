<?php

class Shopware_Controllers_Frontend_Personal extends Enlight_Controller_Action{

    protected $admin;

    protected $customerService;

    protected $session;

    protected $db;

    public $sSYSTEM;

    public function init()
    {
        $this->admin = Shopware()->Modules()->Admin();
        $this->session = Shopware()->Session();
        $this->db = Shopware()->Db();
        $this->sSYSTEM = Shopware()->System();
        $this->customerService = Shopware()->Container()->get('shopware_account.customer_service');
    }

     public function indexAction(){

     }

     public function checkUser($email){

         $sql = "SELECT id, customergroup, password, encoder FROM s_user WHERE email = ? AND active=1 AND accountmode != 1";

         $getUser = $this->db->fetchRow($sql, array($email));

         if(count($getUser)==0){
             return false;
         }

         $this->session->offsetSet('sUserId',$getUser['id']);
         $this->session->offsetSet('sUserMail',$email);
         $this->session->offsetSet('sUserPassword',$getUser['password']);

         $userId = $getUser['id'];
         $userMail = $email;
         $userPassword = $getUser['password'];

         if (empty($userMail) || empty($userPassword) || empty($userId)) {
             $this->session->offsetUnset('sUserMail');
             $this->session->offsetUnset('sUserPassword');
             $this->session->offsetUnset('sUserId');

             return false;
         }

         $sql = "
            SELECT * FROM s_user
            WHERE password = ? AND email = ? AND id = ?
        ";

         $getUser = $this->db->fetchRow(
             $sql,
             array(
                 $userPassword,
                 $userMail,
                 $userId
             )
         );
         $getUser = $getUser ? : array();

         if (!empty($getUser["id"])) {
             $this->sSYSTEM->sUSERGROUPDATA = $this->db->fetchRow(
                 "SELECT * FROM s_core_customergroups WHERE groupkey = ?",
                 array($getUser["customergroup"])
             );
             $this->sSYSTEM->sUSERGROUPDATA = $this->sSYSTEM->sUSERGROUPDATA ? : array();

             if ($this->sSYSTEM->sUSERGROUPDATA["mode"]) {
                 $this->sSYSTEM->sUSERGROUP = "EK";
             } else {
                 $this->sSYSTEM->sUSERGROUP = $getUser["customergroup"];
             }
             $this->sSYSTEM->sUSERGROUP = $getUser["customergroup"];

             $this->session->offsetSet('sUserGroup', $this->sSYSTEM->sUSERGROUP);
             $this->session->offsetSet('sUserGroupData', $this->sSYSTEM->sUSERGROUPDATA);

             $this->db->query(
                 "UPDATE s_user SET lastlogin = NOW(), sessionID = ? WHERE id = ?",
                 array($this->session->offsetGet('sessionId'), $getUser["id"])
             );

             return true;

         } else {
             $this->session->offsetUnset('sUserMail');
             $this->session->offsetUnset('sUserPassword');
             $this->session->offsetUnset('sUserId');

             return false;
         }
     }

     public function loginAction(){

         if ($this->Request()->isPost()) {
             $email = $this->Request()->getPost('email');
             $checkUser = $this->admin->sLogin();
             if (!empty($checkUser['sErrorMessages'])) {
                 $this->View()->sFormData = $this->Request()->getPost();
                 $this->View()->sErrorFlag = $checkUser['sErrorFlag'];
                 $this->View()->sErrorMessages = $checkUser['sErrorMessages'];
             } else {
                 Shopware()->Modules()->Basket()->sRefreshBasket();
             }
         }

         if (empty($this->View()->sErrorMessages)) {

             $userData = array();
             if($this->checkUser($email)){
                 $userData = Shopware()->Modules()->Admin()->sGetUserData();
                 $this->session->offsetSet('userData',$userData);
             }
             $this->redirect('index','index');
         }

     }

}