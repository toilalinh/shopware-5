{block name="frontend_index_start"}{/block}
{block name="frontend_index_doctype"}
<!DOCTYPE html>
{/block}

{block name='frontend_index_html'}
<html class="no-js" lang="{s name='IndexXmlLang'}{/s}" itemscope="itemscope" itemtype="http://schema.org/WebPage">
{/block}

{block name='frontend_index_header'}
    {include file='frontend/index/header.tpl'}
{/block}

<body>

{block name='frontend_index_after_body'}{/block}

{* Message if javascript is disabled *}
    {block name="frontend_index_no_script_message"}
        <noscript class="noscript-main">
            {include file="frontend/_includes/messages.tpl" type="warning" content="{s name="IndexNoscriptNotice"}{/s}" borderRadius=false}
        </noscript>
    {/block}

    {block name='frontend_index_before_page'}{/block}

{* Shop header *}
{block name='frontend_index_navigation'}
    {block name='frontend_index_top_bar_container'}
    {/block}

    {block name='frontend_index_navigation_categories_top'}{/block}

    <div id="header">

    {block name='frontend_index_essen_login'}
        {include file="frontend/index/login.tpl"}
    {/block}

    {block name='frontend_index_header_navigation'}
        {block name='frontend_index_shop_navigation'}
            {include file="frontend/index/shop-navigation.tpl"}
        {/block}
    {/block}

    </div> <!--end of header-->
{/block}

{block name='frontend_index_emotion_loading_overlay'}{/block}

{*CONTENT MAIN*}
{block name='frontend_index_content_main'}

    {* Breadcrumb *}
    {block name='frontend_index_breadcrumb'}{/block}
    {* Content top container *}
    {block name="frontend_index_content_top"}{/block}
    {* Sidebar left *}
    {block name='frontend_index_content_left'}{/block}
    {* Main content *}
    {block name='frontend_index_content_wrapper'}{/block}
    {* Sidebar right *}
    {block name='frontend_index_content_right'}{/block}
    {* Last seen products *}
    {block name='frontend_index_left_last_articles'}{/block}

    <div id="page">
        <div id="logo">
            <a href="http://five.shopware.vn/" title="Laudert"><img src="{link file='frontend/_public/src/img/logos/logo.png'}" alt="Laudert"></a>
        </div>

        <div id="content">
            <h1 id='foodmessage'></h1>
            {block name='frontend_index_content_page'}
                    {block name='frontend_index_content_meals'}
                    {/block}

                    {block name='frontend_index_content_custom'}
                    {/block}

                    {block name='frontend_index_content_hint'}
                            <div class="hint">
                                <span class="deadline">Bestellung und Stornierungen bitte bis 09:30 Uhr des Liefertages</span><br />
                                Sollte jemand Essen bestellt haben und krank werden, kann die Bestellung bis 09:30 Uhr im Benutzerkonto unter Bestellhistorie storniert werden. Andernfalls müssen wir das Essen ganz normal abrechnen.<br /><br />
                                * Der Betrag wird am Ende des Monats von eurem Gehalt abgezogen!
                            </div>
                    {/block}
            {/block}
        </div>
    </div>



{/block}

{* Footer *}
{block name="frontend_index_footer"}
    <div id="footer">{$temp}</div>
{/block}



{block name="frontend_index_header_javascript"}
    <script type="text/javascript">

        //<![CDATA[
        {block name="frontend_index_header_javascript_inline"}
        var timeNow = {time() nocache};

        var controller = controller || {ldelim}
            'vat_check_enabled': '{config name='vatcheckendabled'}',
            'vat_check_required': '{config name='vatcheckrequired'}',
            'ajax_cart': '{url controller='checkout' action='ajaxCart'}',
            'ajax_search': '{url controller="ajax_search"}',
            'register': '{url controller="register"}',
            'checkout': '{url controller="checkout"}',
            'ajax_validate': '{url controller="register"}',
            'ajax_add_article': '{url controller="checkout" action="addArticle"}',
            'ajax_listing': '{url module="widgets" controller="Listing" action="ajaxListing"}',
            'ajax_cart_refresh': '{url controller="checkout" action="ajaxAmount"}',
            'ajax_address_selection': '{url controller="address" action="ajaxSelection" fullPath forceSecure}',
            'ajax_address_editor': '{url controller="address" action="ajaxEditor" fullPath forceSecure}'
            {rdelim};

        var snippets = snippets || {ldelim}
            'noCookiesNotice': '{s name="IndexNoCookiesNotice"}{/s}'
            {rdelim};

        var themeConfig = themeConfig || {ldelim}
            'offcanvasOverlayPage': '{$theme.offcanvasOverlayPage}'
            {rdelim};

        var lastSeenProductsConfig = lastSeenProductsConfig || {ldelim}
            'baseUrl': '{$Shop->getBaseUrl()}',
            'shopId': '{$Shop->getId()}',
            'noPicture': '{link file="frontend/_public/src/img/no-picture.jpg"}',
            'productLimit': ~~('{config name="lastarticlestoshow"}'),
            'currentArticle': {ldelim}{if $sArticle}
                {foreach $sLastArticlesConfig as $key => $value}
                '{$key}': '{$value}',
                {/foreach}
                'articleId': ~~('{$sArticle.articleID}'),
                'linkDetailsRewritten': '{$sArticle.linkDetailsRewrited}',
                'articleName': '{$sArticle.articleName|escape:"javascript"}',
                'imageTitle': '{$sArticle.image.description|escape:"javascript"}',
                'images': {ldelim}
                    {foreach $sArticle.image.thumbnails as $key => $image}
                    '{$key}': {ldelim}
                        'source': '{$image.source}',
                        'retinaSource': '{$image.retinaSource}',
                        'sourceSet': '{$image.sourceSet}'
                        {rdelim},
                    {/foreach}
                    {rdelim}
                {/if}{rdelim}
            {rdelim};

        var csrfConfig = csrfConfig || {ldelim}
            'generateUrl': '{url controller="csrftoken" fullPath=false}',
            'baseUrl': '{$Shop->getBaseUrl()}',
            'shopId': '{$Shop->getId()}'
            {rdelim};
        {/block}
        //]]>
    </script>

    {if $theme.additionalJsLibraries}
        {$theme.additionalJsLibraries}
    {/if}
{/block}

{* Include jQuery and all other javascript files at the bottom of the page *}
{block name="frontend_index_header_javascript_jquery_lib"}
    {compileJavascript timestamp={themeTimestamp} output="javascriptFiles"}
    {foreach $javascriptFiles as $file}
        <script src="{$file}"></script>
    {/foreach}
{/block}

{block name='frontend_index_essen_javascript_files'}
    <script src="{link file='frontend/_public/src/js/jquery.min.js'}"></script>
    <script src="{link file='frontend/_public/src/js/jquery-ui.min.js'}"></script>
    <script src="{link file='frontend/_public/src/js/supersized.core.3.2.1.js'}"></script>
    <script src="{link file='frontend/_public/src/js/anythingslider.js'}"></script>
    <script src="{link file='frontend/_public/src/js/hoverIntent.js'}"></script>
    <script src="{link file='frontend/_public/src/js/supersubs.js'}"></script>
    <script src="{link file='frontend/_public/src/js/superfish.js'}"></script>
    <script src="{link file='frontend/_public/src/js/oxcenterelementonhover.js'}"></script>
    <script src="{link file='frontend/_public/src/js/oxloginbox.js'}"></script>
    <script src="{link file='frontend/_public/src/js/oxmodalpopup.js'}"></script>
    <script src="{link file='frontend/_public/src/js/oxinputvalidator.js'}"></script>
    <script src="{link file='frontend/_public/src/js/oxinnerlabel.js'}"></script>
    <script src="{link file='frontend/_public/src/js/oxtopmenu.js'}"></script>
    <script src="{link file='frontend/_public/src/js/oxslider.js'}"></script>
    <script src="{link file='frontend/_public/src/js/oxequalizer.js'}"></script>

    <script type="text/javascript">
        $( '#specCatBox' ).oxCenterElementOnHover();
        $('a.js-external').attr('target', '_blank');
        $( '#loginBoxOpener' ).oxLoginBox();
        $( '#forgotPasswordOpener' ).oxModalPopup({ target: '#forgotPassword'});
        $('form.js-oxValidate').oxInputValidator();
        $( '#loginEmail' ).oxInnerLabel();
        $( '#loginPasword' ).oxInnerLabel();
        $('#navigation').oxTopMenu();
        $( '#searchParam' ).oxInnerLabel();
        $( '#promotionSlider' ).oxSlider();
    </script>

    <script src="{link file='frontend/_public/src/js/oxcountdown.js'}"></script>
    <script src="{link file='frontend/_public/src/js/oxminibasket.js'}"></script>

    <script type="text/javascript">
        $( '#miniBasket' ).oxMiniBasket();
    </script>


{/block}

{block name="frontend_index_header_javascript_jquery"}
{* Add the partner statistics widget, if configured *}
    {if !{config name=disableShopwareStatistics} }
        {include file='widgets/index/statistic_include.tpl'}
    {/if}
{/block}

</body>