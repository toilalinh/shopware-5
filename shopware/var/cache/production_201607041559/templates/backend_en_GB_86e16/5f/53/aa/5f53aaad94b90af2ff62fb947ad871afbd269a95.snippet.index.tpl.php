<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:25:55
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203553962857846343482a24-20857929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f53aaad94b90af2ff62fb947ad871afbd269a95' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/index/index.tpl',
      1 => 1467622780,
      2 => 'file',
    ),
    '6e0523d3af59ad4d58ca19771d51b5ddada527f0' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/index.tpl',
      1 => 1467622780,
      2 => 'snippet',
    ),
    '71c933721c1aa6ab2e988da4330742e6595a7722' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/header.tpl',
      1 => 1467622780,
      2 => 'snippet',
    ),
    '002b38f04859df247c164a32b3314ad21596481d' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/index/header.tpl',
      1 => 1467622780,
      2 => 'snippet',
    ),
  ),
  'nocache_hash' => '203553962857846343482a24-20857929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463436fc7b7_36114273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463436fc7b7_36114273')) {function content_578463436fc7b7_36114273($_smarty_tpl) {?><!DOCTYPE html>
<html>


    <?php /*  Call merged included template "backend/index/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("backend/index/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '203553962857846343482a24-20857929');
content_578463435aafb7_31407565($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "backend/index/header.tpl" */?>


  <body <?php if ($_smarty_tpl->tpl_vars['product']->value){?>class="shopware-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['product']->value, 'utf-8');?>
"<?php }?>>
    
    <div class="container">

    

    </div>
    
<form id="history-form" class="x-hide-display">
    <input type="hidden" id="x-history-field" />
    <iframe id="x-history-frame"></iframe>
</form>

  </body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:25:55
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_578463434d9490_00026769')) {function content_578463434d9490_00026769($_smarty_tpl) {?>
<head>



<meta charset="UTF-8" />
<meta name="robots" content="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'meta'/'robots','default'=>'noindex,nofollow','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'meta'/'robots','default'=>'noindex,nofollow','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
noindex,nofollow<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'meta'/'robots','default'=>'noindex,nofollow','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />

<meta http-equiv="X-UA-Compatible" content="IE=Edge" />



<title></title>


    <link rel="stylesheet" type="text/css" href="/themes/Backend/ExtJs/backend/_resources/resources/css/ext-all.css?<?php echo Shopware::REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="/themes/Backend/ExtJs/backend/_resources/resources/css/core-icon-set.css?<?php echo Shopware::REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="/themes/Backend/ExtJs/backend/_resources/resources/css/core-icon-set-new.css?<?php echo Shopware::REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="/engine/Library/CodeMirror/lib/codemirror.css?<?php echo Shopware::REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="/engine/Library/CodeMirror/theme/monokai.css?<?php echo Shopware::REVISION;?>
" />


    <link rel="icon" href="/themes/Backend/ExtJs/backend/_resources/images/index/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/themes/Backend/ExtJs/backend/_resources/images/index/favicon.ico" type="image/x-icon" />



    <script type="text/javascript" src="/engine/Library/ExtJs/ext-all.js?<?php echo Shopware::REVISION;?>
"></script>
    <script type="text/javascript" src="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'script'/'ext'/'lang','default'=>'en_GB','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','default'=>'en_GB','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "en_GB";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','default'=>'en_GB','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->smarty->loadPlugin("smarty_function_flink"); echo smarty_function_flink(array("file" => "ExtJs/locale/ext-lang-".$_tmp1.".js", "fullPath" => false), $_smarty_tpl); ?>?<?php echo Shopware::REVISION;?>
"></script>
    <script type="text/javascript" src="/engine/Library/TinyMce/tiny_mce.js?<?php echo Shopware::REVISION;?>
"></script>
    <script type="text/javascript" src="/engine/Library/CodeMirror/lib/codemirror.js?<?php echo Shopware::REVISION;?>
"></script>

	
	<script type="text/javascript">
        
        Ext.editorLang = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
en_GB<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
	    Ext.shopwareRevision = '<?php echo Shopware::REVISION;?>
';
        Ext.userLanguage = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
en_GB<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
    </script>

    <?php if ($_smarty_tpl->tpl_vars['user']->value){?>
        <script type="text/javascript" src="<?php echo '/backend/base';?>?file=bootstrap&loggedIn=<?php echo time();?>
"></script>
    <?php }else{ ?>
        <script type="text/javascript" src="<?php echo '/backend/base';?>?file=bootstrap&<?php echo Shopware::REVISION;?>
"></script>
    <?php }?>

</head>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:25:55
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/index/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_578463435aafb7_31407565')) {function content_578463435aafb7_31407565($_smarty_tpl) {?>
<head>



<meta charset="UTF-8" />
<meta name="robots" content="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'meta'/'robots','default'=>'noindex,nofollow','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'meta'/'robots','default'=>'noindex,nofollow','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
noindex,nofollow<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'meta'/'robots','default'=>'noindex,nofollow','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />

<meta http-equiv="X-UA-Compatible" content="IE=Edge" />



<title>Shopware <?php echo Shopware::VERSION;?>
 <?php echo Shopware::VERSION_TEXT;?>
 (Rev. <?php echo Shopware::REVISION;?>
) - Backend (c) shopware AG</title>


    <link rel="stylesheet" type="text/css" href="/themes/Backend/ExtJs/backend/_resources/resources/css/ext-all.css?<?php echo Shopware::REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="/themes/Backend/ExtJs/backend/_resources/resources/css/core-icon-set.css?<?php echo Shopware::REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="/themes/Backend/ExtJs/backend/_resources/resources/css/core-icon-set-new.css?<?php echo Shopware::REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="/engine/Library/CodeMirror/lib/codemirror.css?<?php echo Shopware::REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="/engine/Library/CodeMirror/theme/monokai.css?<?php echo Shopware::REVISION;?>
" />

<link rel="stylesheet" type="text/css" href="/themes/Backend/ExtJs/backend/_resources/styles/growl.css" />
<style type="text/css">
iframe { border: 0 none !important; width: 100%; height: 100%; }
#nav ul { top: 26px !important }
#header li.main { height: 28px !important }
.deprecated { color: #fff; font-size: 11px; font-weight: 700; text-align: center }
</style>


    <link rel="icon" href="/themes/Backend/ExtJs/backend/_resources/images/index/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/themes/Backend/ExtJs/backend/_resources/images/index/favicon.ico" type="image/x-icon" />



    <script type="text/javascript" src="/engine/Library/ExtJs/ext-all.js?<?php echo Shopware::REVISION;?>
"></script>
    <script type="text/javascript" src="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'script'/'ext'/'lang','default'=>'en_GB','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','default'=>'en_GB','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "en_GB";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','default'=>'en_GB','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->smarty->loadPlugin("smarty_function_flink"); echo smarty_function_flink(array("file" => "ExtJs/locale/ext-lang-".$_tmp1.".js", "fullPath" => false), $_smarty_tpl); ?>?<?php echo Shopware::REVISION;?>
"></script>
    <script type="text/javascript" src="/engine/Library/TinyMce/tiny_mce.js?<?php echo Shopware::REVISION;?>
"></script>
    <script type="text/javascript" src="/engine/Library/CodeMirror/lib/codemirror.js?<?php echo Shopware::REVISION;?>
"></script>

	
	<script type="text/javascript">
        
        Ext.editorLang = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
en_GB<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
	    Ext.shopwareRevision = '<?php echo Shopware::REVISION;?>
';
        Ext.userLanguage = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
en_GB<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
    </script>

    <?php if ($_smarty_tpl->tpl_vars['user']->value){?>
        <script type="text/javascript" src="<?php echo '/backend/base';?>?file=bootstrap&loggedIn=<?php echo time();?>
"></script>
    <?php }else{ ?>
        <script type="text/javascript" src="<?php echo '/backend/base';?>?file=bootstrap&<?php echo Shopware::REVISION;?>
"></script>
    <?php }?>

<script type="text/javascript">
    var userName = '<?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
',
        maxParameterLength = '<?php echo $_smarty_tpl->tpl_vars['maxParameterLength']->value;?>
';

    Ext.define('Shopware.app.Application', {
    	extend: 'Ext.app.Application',
    	name: 'Shopware',
    	singleton: true,
        autoCreateViewport: false,
        requires: [ 'Shopware.container.Viewport' ],
        baseComponents: {
            'Shopware.container.Viewport': false,
            'Shopware.apps.Index.view.Menu': false,
            'Shopware.apps.Index.view.Footer': false
        },
        viewport: null,
        launch: function() {
            var me = this,
                preloader = Ext.create('Shopware.component.Preloader').bindEvents(Shopware.app.Application),
				errorReporter = Ext.create('Shopware.global.ErrorReporter').bindEvents(Shopware.app.Application)

            /**
             * Activates the Ext.fx.Anim class globally and
             * drives the animations our CSS 3 if supported.
             */
            Ext.enableFx = true;

            this.addEvents('baseComponentsReady', 'subAppLoaded');

            // Disable currency sign
            Ext.apply(Ext.util.Format, {
                currencySign: ''
            });
            // Fix default date format
            Ext.Date.defaultFormat = Ext.util.Format.dateFormat;

            this.callParent(arguments);
<?php if ($_smarty_tpl->tpl_vars['user']->value){?>
			this.addSubApplication({
				name: "Shopware.apps.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value, ENT_QUOTES, 'utf-8', true);?>
",
				controller: <?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
,
				params: <?php echo $_smarty_tpl->tpl_vars['params']->value;?>
,
                localizedName: 'Shopware',
                firstRunWizardEnabled: <?php echo intval($_smarty_tpl->tpl_vars['firstRunWizardEnabled']->value);?>
,
                sbpLogin: <?php echo $_smarty_tpl->tpl_vars['sbpLogin']->value;?>
,
                updateWizardStarted: <?php echo intval($_smarty_tpl->tpl_vars['updateWizardStarted']->value);?>
,
                enableInstallationFeedback: <?php echo intval($_smarty_tpl->tpl_vars['installationSurvey']->value);?>
,
                enableBetaFeedback: <?php echo intval($_smarty_tpl->tpl_vars['feedbackRequired']->value);?>

			});
<?php }else{ ?>
            this.addSubApplication({
                name: "Shopware.apps.Login",
                localizedName: 'Login'
            });
<?php }?>

			// Start preloading the icon sets
			me.iconPreloader = Ext.create('Shopware.component.IconPreloader', {
       			loadPath: "http://five.shopware.vn/themes/Backend/ExtJs/backend/_resources/resources/css"
   			});
        },

        /**
         * Checks if all base components are loaded and rendered.
         * If truthy the preloader will be triggered.
         *
         * @param cmp - Component which calls the method
         * @return void
         */
        baseComponentIsReady: function(cmp) {
            var me = this,
                allReady = true;

            me.baseComponents[cmp.$className] = true;
            Ext.iterate(me.baseComponents, function(index, item) {
                if(!item) {
                    allReady = false;
                    return false;
                }
            });

            if(allReady) {
                window.setTimeout(function() {
                    me.fireEvent('baseComponentsReady', me);
                }, 1000);
            }
        }
    });

    /** Basic loader configuration  */
    Ext.Loader.setConfig({
		enabled: true,
		disableCaching: true,
		disableCachingParam: 'no-cache',
		disableCachingValue: '1468293955<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['user']->value->locale){?>+<?php echo $_smarty_tpl->tpl_vars['user']->value->locale->getId();?>
+<?php echo $_smarty_tpl->tpl_vars['user']->value->role->getId();?>
<?php }?>'
	});
    Ext.Loader.setPath('Shopware.apps', '<?php echo '/backend';?>', '?file=app');

    Ext.onReady(function() {
        var timeField = Ext.create('Ext.form.field.Time');
        this.timeFormat = timeField.format;
    });
</script>

</head>
<?php }} ?>