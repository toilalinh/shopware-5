{extends file='parent:frontend/index/header.tpl'}

{* Print Stylesheets *}
{block name="frontend_index_header_css_print" append}
    <link href="{link file='frontend/_public/src/css/superfish.css'}" media="all" rel="stylesheet" type="text/css" />
    <link href="{link file='frontend/_public/src/css/anythingslider.css'}" media="all" rel="stylesheet" type="text/css" />
    <link href="{link file='frontend/_public/src/css/reset.css'}" media="all" rel="stylesheet" type="text/css" />
    <link href="{link file='frontend/_public/src/css/oxid.css'}" media="all" rel="stylesheet" type="text/css" />
    <link href="{link file='frontend/_public/src/css/laudert_essen.css'}" media="all" rel="stylesheet" type="text/css" />
    <link href="{link file='frontend/_public/src/css/supersized.css'}" media="all" rel="stylesheet" type="text/css" />

{/block}