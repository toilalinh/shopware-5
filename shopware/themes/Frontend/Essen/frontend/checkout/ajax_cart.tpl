{block name='frontend_checkout_ajax_cart'}
    {block name='frontend_checkout_ajax_cart_buttons_offcanvas'}
    {/block}

    {block name='frontend_checkout_ajax_cart_alert_box'}
    {/block}

    <p class="title">
        <strong><span id="sBasketQuantityFlyout">{$sBasket.content|count}</span> Artikel im Warenkorb:</strong>
        <img src="{link file='frontend/_public/src/img/x.png'}" alt="" class="closePop" onclick="$('#basketFlyout').hide();">
    </p>

    {block name='frontend_checkout_ajax_cart_item_container'}
        {block name='frontend_checkout_ajax_cart_item_container_inner'}
            <ul>
                {if $sBasket.content}
                    {foreach $sBasket.content as $sBasketItem}
                        <li>
                            <a title="">
                                <span class="item">{$sBasketItem.quantity} x {$sBasketItem.articlename|escape} </span>
                                <strong class="price">{$sBasketItem.amount|currency}</strong>
                            </a>
                        </li>
                    {/foreach}
                {/if}
            </ul>
        {/block}
    {/block}

    {block name='frontend_checkout_ajax_cart_prices_container'}
        {if $sBasket.content}
            <p class="totals">
                <span class="item">{s name="AjaxCartTotalAmount"}{/s}</span><strong class="price">{$sBasket.Amount|currency}</strong>
            </p>
            <hr>
        {/if}
    {/block}

    {* Basket link *}
    {block name='frontend_checkout_ajax_cart_button_container'}
        {block name='frontend_checkout_ajax_cart_button_container_inner'}
            {if !($sDispatchNoOrder && !$sDispatches)}
                {block name='frontend_checkout_ajax_cart_open_checkout'}
                    <p class="functions clear">
                        <a href="{if {config name=always_select_payment}}{url controller='checkout' action='shippingPayment'}{else}{url controller='checkout' action='confirm'}{/if}" class="lbutton"> {s name='AjaxCartLinkConfirm'}{/s}</a>
                    </p>
                {/block}
            {else}
                {block name='frontend_checkout_ajax_cart_open_checkout'}
                {/block}
            {/if}
            {block name='frontend_checkout_ajax_cart_open_basket'}
            {/block}
        {/block}

    {/block}

{/block}