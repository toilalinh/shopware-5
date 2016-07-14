{extends file='frontend/index/index.tpl'}

{block name='frontend_index_content_meals' prepend}

    <div id="basketInfo"></div>

    {foreach $themenu as $key=>$menu}
        <div class="menuDateContainer">
            <h2>Mittagessen für  {$menu.sWeekDate}, {$menu.sDate} </h2>
            {foreach $menu.meals as $meal}
                <div class="menu menu_warm">
                    <div>
                        <h3>
                            {$meal.supplierName}
                        </h3>
                        <div class="menu_content">
                            {$meal.description}
                        </div>
                        <div class="price " id="priceBargain_2">
                            <div>
                                <div class="menu_content">
                                    <br><span class="priceValue">{$meal.price} € *</span><br>
                                </div>
                                <div class="add_to_basket">
                                    <input type="hidden" name="url" value="{url controller=checkout action=ajaxAddArticleCart}/sAdd/{$meal.ordernumber}/sQuantity/1" />
                                    <button class="btnAddMeal lbutton" style="margin-top: 10px;">in den Warenkorb</button>
                                </div>
                                <!--<a href="{url controller=checkout action=ajaxAddArticleCart}/sAdd/{$meal.ordernumber}/sQuantity/1" class="btnAddMeal lbutton" style="margin-top: 10px;" title="in den Warenkorb">in den Warenkorb</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            {/foreach}

        </div>
    {/foreach}


{/block}

{block name='frontend_index_essen_javascript_files' append}
    <script type="text/javascript">

        $(document).ready(function(){

             $('.menuDateContainer button.btnAddMeal').click(function(){
                 var url = $(this).prev().val();
                 $.ajax({
                     url: url,
                     cache: false,
                     success: function(data){
                         $("#basketFlyout").html(data);
                         var temp = $('#sBasketQuantityFlyout').text();
                         $('#countValue').text(temp);
                     }
                 });
             });

             $('.menuDateContainer a.btnAddMeal').click(function(event){
                  event.preventDefault();
                  var url =  $(this).attr('href');
                 $.ajax({
                     url: url,
                     cache: false,
                     success: function(data){
                         $("#basketFlyout").html(data);
                         var temp = $('#sBasketQuantityFlyout').text();
                         $('#countValue').text(temp);
                     }
                 });

             });
        });


    </script>

{/block}