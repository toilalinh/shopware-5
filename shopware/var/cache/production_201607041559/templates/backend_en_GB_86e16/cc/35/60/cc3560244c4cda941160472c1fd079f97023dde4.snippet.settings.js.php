<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:27:16
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/category/view/category/tabs/settings.js" */ ?>
<?php /*%%SmartyHeaderCode:211220811578463942f1c72-21950522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc3560244c4cda941160472c1fd079f97023dde4' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/category/view/category/tabs/settings.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211220811578463942f1c72-21950522',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463944bc427_87843562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463944bc427_87843562')) {function content_578463944bc427_87843562($_smarty_tpl) {?>/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category   Shopware
 * @package    Category
 * @subpackage Settings
 * @version    $Id$
 * @author shopware AG
 */

/*  */

/**
 * Shopware UI - Category Settings
 *
 * Shows all Category detail settings
 */
//
Ext.define('Shopware.apps.Category.view.category.tabs.Settings', {
   /**
    * Parent Element Ext.container.Container
    * @string
    */
    extend:'Ext.form.Panel',
    /**
     * Register the alias for this class.
     * @string
     */
    alias:'widget.category-category-tabs-settings',

    cls: 'shopware-form',
    /**
     * Title of this tab
     * @string
     */
    title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'settings_title','default'=>'Settings','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'settings_title','default'=>'Settings','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'settings_title','default'=>'Settings','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    /**
     * Specifies the border for this component. The border can be a single numeric
     * value to apply to all sides or it can be a CSS style specification for each
     * style, for example: '10 5 3 10'.
     *
     * Default: 0
     * @integer
     */
    border: 0,
    /**
     * Display the the contents of this tab immediately
     * @boolean
     */
    autoShow : true,
        /**
     * enable auto scroll
     * @boolean
     */
    autoScroll: true,
    /**
     * used layout column
     *
     * @string
     */
    layout: 'anchor',
    /**
     * Body padding
     * @integer
     */
    bodyPadding: 10,

    /**
     * Translations
     * @object
     */
    snippets : {
        noticeText : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_notice','default'=>'To move a category, please click on the requested category, keep the mouse botton pressed and drag it to the desired position.<br/><br/>Notice text - right click menu to delete and create a new category or alternative throught the lower field set.','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_notice','default'=>'To move a category, please click on the requested category, keep the mouse botton pressed and drag it to the desired position.<br/><br/>Notice text - right click menu to delete and create a new category or alternative throught the lower field set.','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To move a category, simply click and drag it to the desired position.<br/><br/>Right clicking in the menu to the left enables you to add or delete subcategories.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_notice','default'=>'To move a category, please click on the requested category, keep the mouse botton pressed and drag it to the desired position.<br/><br/>Notice text - right click menu to delete and create a new category or alternative throught the lower field set.','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        emotionNotice : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_emotion_notice','default'=>'An emotion is linked to this category','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_emotion_notice','default'=>'An emotion is linked to this category','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
This category is linked with a Shopping World.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_emotion_notice','default'=>'An emotion is linked to this category','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        createSubCategoryTitle : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_create_category_title','default'=>'Create sub category','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_create_category_title','default'=>'Create sub category','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create subcategory<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_create_category_title','default'=>'Create sub category','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        createSubCategoryLabel : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_create_category_label','default'=>'Sub category','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_create_category_label','default'=>'Sub category','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Subcategory<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_create_category_label','default'=>'Sub category','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        createSubCategoryButton: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_create_category_button','default'=>'Create sub category','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_create_category_button','default'=>'Create sub category','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create subcategory<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_create_category_button','default'=>'Create sub category','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        defaultSettingsTitleEmpty : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_title_empty','default'=>'Default settings','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_title_empty','default'=>'Default settings','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Default settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_title_empty','default'=>'Default settings','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        defaultSettingsTitle : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_title','default'=>'Default Settings - Category: [0] (System-ID: [1])','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_title','default'=>'Default Settings - Category: [0] (System-ID: [1])','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Default Settings - Category: [0] (System-ID: [1])<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_title','default'=>'Default Settings - Category: [0] (System-ID: [1])','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        defaultSettingsCategoryLabel : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_category_label','default'=>'Category','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_category_label','default'=>'Category','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Category<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_category_label','default'=>'Category','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        defaultSettingsActiveLabel : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_active_label','default'=>'Active','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_active_label','default'=>'Active','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Active<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_active_label','default'=>'Active','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        defaultSettingsBlogLabel : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_blog_label','default'=>'Blog category','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_blog_label','default'=>'Blog category','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Blog category<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_blog_label','default'=>'Blog category','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        defaultSettingsNameLabel : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_name_label','default'=>'Description','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_name_label','default'=>'Description','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_name_label','default'=>'Description','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        defaultSettingsLinkExternalPageLabel : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_link_external_page_label','default'=>'Link to an external site','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_link_external_page_label','default'=>'Link to an external site','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Link to an external site<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_link_external_page_label','default'=>'Link to an external site','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        defaultSettingsLinkExternalPageHelp : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_link_external_page_help','default'=>'The URL must begin with: http://','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_link_external_page_help','default'=>'The URL must begin with: http://','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The URL must begin with http://<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_link_external_page_help','default'=>'The URL must begin with: http://','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        defaultSettingsImageLabel : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_image_label','default'=>'Image','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_image_label','default'=>'Image','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Image<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_image_label','default'=>'Image','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        defaultSettingsImageButtonText : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_image_button_text','default'=>'Select an image','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_image_button_text','default'=>'Select an image','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select an image<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_image_button_text','default'=>'Select an image','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        defaultSettingsImageSupportText : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_image_support_text','default'=>'You can use this image for individual template changes. This includes, for instance, the illustration of your category.','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_image_support_text','default'=>'You can use this image for individual template changes. This includes, for instance, the illustration of your category.','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You can use this image for individual template changes. This includes, for instance, the illustration of your category.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_image_support_text','default'=>'You can use this image for individual template changes. This includes, for instance, the illustration of your category.','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        errorMessageWrongFileTypeTitle : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'error_message_wrong_file_type_title','default'=>'Wrong file type','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'error_message_wrong_file_type_title','default'=>'Wrong file type','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Wrong file type<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'error_message_wrong_file_type_title','default'=>'Wrong file type','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        errorMessageWrongFileType : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'error_message_wrong_file_type','default'=>'Wrong file type selected.','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'error_message_wrong_file_type','default'=>'Wrong file type selected.','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Wrong file type selected.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'error_message_wrong_file_type','default'=>'Wrong file type selected.','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        defaultSettingsTemplateLabel : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_template_label','default'=>'Individual layout','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_template_label','default'=>'Individual layout','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Individual layout<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_template_label','default'=>'Individual layout','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        defaultSettingsTemplateLabelStandard: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_template_standard','default'=>'Standard','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_template_standard','default'=>'Standard','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Standard<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_template_standard','default'=>'Standard','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        defaultSettingsTemplateNotAvailable: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_template_not_available','default'=>'Not available','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_template_not_available','default'=>'Not available','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Not available<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_template_not_available','default'=>'Not available','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        defaultSettingsHideTopLabel : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_no_top_navigation_label','default'=>'Do NOT show in top navigation.','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_no_top_navigation_label','default'=>'Do NOT show in top navigation.','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Do not display in top navigation.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_no_top_navigation_label','default'=>'Do NOT show in top navigation.','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        defaultSettingsNoDesignSwitchLabel : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_no_design_switch_label','default'=>'Do NOT switch design.','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_no_design_switch_label','default'=>'Do NOT switch design.','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Disable display switching in frontend.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_no_design_switch_label','default'=>'Do NOT switch design.','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        defaultSettingsNoFilterLabel : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_no_filter_label','default'=>'Hide filters.','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_no_filter_label','default'=>'Hide filters.','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hide filters.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_no_filter_label','default'=>'Hide filters.','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        defaultSettingsProductLayoutLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_box_layout_label','default'=>'Product layout','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_box_layout_label','default'=>'Product layout','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Product layout<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_box_layout_label','default'=>'Product layout','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        defaultSettingsProductLayoutHelp: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_box_layout_help','default'=>'Product layout allows you to control how your products are presented on the category page. Choose between three different layouts to fine-tune your product display. You can select a layout for each category or automatically adopt the settings from the parent category.','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_box_layout_help','default'=>'Product layout allows you to control how your products are presented on the category page. Choose between three different layouts to fine-tune your product display. You can select a layout for each category or automatically adopt the settings from the parent category.','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Product layout allows you to control how your products are presented on the category page. Choose between three different layouts to fine-tune your product display. You can select a layout for each category or automatically adopt the settings from the parent category.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_box_layout_help','default'=>'Product layout allows you to control how your products are presented on the category page. Choose between three different layouts to fine-tune your product display. You can select a layout for each category or automatically adopt the settings from the parent category.','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        defaultSettingsProductStream: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_box_stream_label','default'=>'Product stream','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_box_stream_label','default'=>'Product stream','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Product stream<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_box_stream_label','default'=>'Product stream','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        defaultSettingsProductStreamHelp: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_default_settings_box_stream_help','default'=>'If a product stream is selected, the items from the stream will be used instead of the assigned ones. Subcategories do not inherit items from product streams.','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_box_stream_help','default'=>'If a product stream is selected, the items from the stream will be used instead of the assigned ones. Subcategories do not inherit items from product streams.','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
If a product stream is selected, the items from the stream will be used instead of the assigned ones. Subcategories do not inherit items from product streams.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_default_settings_box_stream_help','default'=>'If a product stream is selected, the items from the stream will be used instead of the assigned ones. Subcategories do not inherit items from product streams.','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        cmsTitle : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_cms_title','default'=>'CMS functions','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_cms_title','default'=>'CMS functions','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
CMS functions<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_cms_title','default'=>'CMS functions','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        cmsHeaderLabel : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_cms_header_label','default'=>'Header','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_cms_header_label','default'=>'Header','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Header<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_cms_header_label','default'=>'Header','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        cmsTextLabel : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_cms_text_label','default'=>'Text','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_cms_text_label','default'=>'Text','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Category description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_cms_text_label','default'=>'Text','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        metaGroupTitle : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_meta_description_title','default'=>'Meta information','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_meta_description_title','default'=>'Meta information','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Meta information<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_meta_description_title','default'=>'Meta information','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        metaTitle : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_meta_title_label','default'=>'Meta title','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_meta_title_label','default'=>'Meta title','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Meta title<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_meta_title_label','default'=>'Meta title','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        metaDescription : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_meta_description_label','default'=>'Meta description','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_meta_description_label','default'=>'Meta description','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Meta description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_meta_description_label','default'=>'Meta description','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        metaKeywords : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_meta_keywords_label','default'=>'Meta keywords','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_meta_keywords_label','default'=>'Meta keywords','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Meta keywords<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_meta_keywords_label','default'=>'Meta keywords','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        attribute_title : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_attribute_title','default'=>'Free text fields','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_attribute_title','default'=>'Free text fields','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Free text fields<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_attribute_title','default'=>'Free text fields','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        categorySave : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'view'/'settings_save','default'=>'Save category','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_save','default'=>'Save category','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save category<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'view'/'settings_save','default'=>'Save category','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

        growlMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'main_title','default'=>'Category','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'main_title','default'=>'Category','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Categories<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'main_title','default'=>'Category','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },
    /**
     * Single Form elements to access them from the controller
     */
    /**
     * Form part containing the form for creating a new subcategory
     * @object [Ext.form.FieldSet]
     */
    createCategory  : null,
    /**
     * Form part containing the form with the default category settings
     * @object [Ext.form.FieldSet]
     */
    defaultSettings : null,
    /**
     * From part containing the form with CMS related settings
     * @object [Ext.form.FieldSet]
     */
    cmsSettings     : null,
    /**
     * Form part containing the form with the metadata settings
     * @object [Ext.form.FieldSet]
     */
    metaInfo        : null,
    /**
     * Form part containing the form for the six customizable fields
     * @object [Ext.form.FieldSet]
     */
    attributes       : null,

    /**
     * default field attributes
     */
    defaults: {
        anchor : '100%',
        labelWidth:155
    },

    /**
     * Initialize the Shopware.apps.Category.view.category.tabs.Settings and defines the necessary
     * default configuration
     */
    initComponent:function ()
    {
        var me = this;
        me.items = me.getItems();

        me.registerEvents();
        me.callParent(arguments);
    },
    /**
     * Creates all fields for the form
     *
     * @return array of form elements
     */
    getItems:function ()
    {
        var me = this;
        me.emotionNotice        = me.createEmotionNoticeContainer();
        me.notice               = me.getNotice();
        me.createCategory       = me.getCreateCategory();
        me.defaultSettings      = me.getDefaultFormField();
        me.cmsSettings          = me.getCmsSettings();
        me.metaInfo             = me.getMetaInfo();
        me.attributes           = me.getAttributes();
        return [
            me.emotionNotice,
            me.notice,
            me.createCategory,
            me.defaultSettings,
            me.cmsSettings,
            me.metaInfo,
            me.attributes
        ];
    },
    /**
     * Defines additional events which will be
     * fired from the component
     *
     * @return void
     */
    registerEvents: function() {
        var me = this;
        /**
             * Event will be fired when a record is loaded into the settings form.
             *
             * This event can easily be captured in the controller
             * eg.
             * <code>
             * this.control({ 'recordloaded' : function(){
             *     console.log('New recored has been loaded.');
             * }
             * </code>
             *
             * @event recordloaded
             */
        me.addEvents('recordloaded');
    },

    /**
     * Creates the notice container which is displayed on top of the detail tab panel.
     * @return <?php echo array('object');?>

     */
    createEmotionNoticeContainer: function() {
        var me = this,
            blockMessage = Shopware.Notification.createBlockMessage(me.snippets.emotionNotice, 'notice');
        blockMessage.hide();
        return blockMessage;
    },


    /**
     * Builds and returns the notice section of the form.
     *
     * @return Ext.container.Container
     */
    getNotice : function()
    {
        var me = this;
        return {
            xtype: 'container',
            html : me.snippets.noticeText,
            cls: Ext.baseCSSPrefix + 'global-notice-text'
        }
    },
    /**
     * Builds and returns the create category section of the form.
     *
     * This is a way to create a new sub category. It will look at the category tree and takes the selected node as
     * parent node and adds an new node under it. After this has been done, the new node will be selected and loaded into
     * the form.
     *
     * @return Ext.form.FieldSet
     */
    getCreateCategory : function()
    {
        var me =  this,
            addSubCategoryItems = [];

        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'create'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
        addSubCategoryItems.push(Ext.create('Ext.button.Button',{
            text : me.snippets.createSubCategoryButton,
            action: 'addCategory',
            cls: 'small primary',
            flex: 1
        }));
        /* <?php }?> */
        return Ext.create('Ext.form.FieldSet',{
            title: me.snippets.createSubCategoryTitle,
            anchor: '100%',
            defaults : me.defaults,
            disabled : true,
            items : [
                {
                    xtype : 'textfield',
                    fieldLabel : me.snippets.createSubCategoryLabel,
                    name : 'newCategoryName'
                }, {
                    xtype: 'container',
                    items: addSubCategoryItems
                }
            ]
        });
    },

    /**
     * Builds and creates the fieldset which contains the main settings for  a category.
     * Those settings are
     *  - an active flag. This flag indicates if the loaded category is active or nor.
     *  - description or name for the category (this text will be displayed in the menu)
     *  - template selection. This part will be hidden if the parent node is the root node. The data for this field
     *    can be defined in the default shop settings.
     *  - hide in top navigation flag.
     *  - do not switch the design flag.
     *  - show filter group flags.
     *  - do not show filter flag.
     *
     * @return Ext.form.FieldSet
     */
    getDefaultFormField:function () {
        var me = this;
        return Ext.create('Ext.form.FieldSet', {
            title:me.snippets.defaultSettingsTitleEmpty,
            anchor:'100%',
            defaults:me.defaults,
            disabled:true,
            items:me.getDefaultSettingItems()
        });
    },

    /**
     * Returns the Items for the Default Form Fieldset
     * @return { Array }
     */
    getDefaultSettingItems:function () {
        var me = this;
        // create the template combo box and register it in the local namespace to
        // gain access from the outside.
        me.templateComboBox = Ext.create('Ext.form.field.ComboBox', {
            fieldLabel:me.snippets.defaultSettingsTemplateLabel,
            store:me.templateStore,
            labelWidth:155,
            valueField:'template',
            displayField:'name',
            editable:true,
            allowBlank:true,
            name:'template',
            queryMode: 'local'
        });

        // add record for default value
        me.templateStore.on('load', function(store, records) {
            var record = store.model.create({
                template: '',
                name: me.snippets.defaultSettingsTemplateLabelStandard
            });
            store.insert(0, record);
        }, me);

        me.productLayoutField = Ext.create('Shopware.apps.Base.view.element.ProductBoxLayoutSelect', {
            name: 'productBoxLayout',
            labelWidth: 155,
            storeConfig: {
                displayExtendLayout: true,
                displayBasicLayout: true,
                displayMinimalLayout: true,
                displayImageLayout: true
            }
        });

        me.streamSelection = Ext.create('Shopware.form.field.ProductStreamSelection', {
            name: 'streamId',
            labelWidth: 155
        });

        return [
            {
                xtype:'checkboxgroup',
                columns:2,
                defaultType:'checkboxfield',
                margin:'3 0 0 0',
                defaults:Ext.applyIf({
                    inputValue:true,
                    uncheckedValue:false
                }, me.defaults ),
                items:[
                    {
                        boxLabel:me.snippets.defaultSettingsActiveLabel,
                        name:'active',
                        dataIndex:'active'
                    },
                    {
                        boxLabel:me.snippets.defaultSettingsBlogLabel,
                        name:'blog',
                        dataIndex:'blog'
                    }
                ]
            },
            {
                xtype:'textfield',
                fieldLabel:me.snippets.defaultSettingsNameLabel,
                dataIndex:'name',
                name:'name'
            },
            me.templateComboBox,
            me.productLayoutField,
            me.streamSelection,
            {
                xtype:'textfield',
                fieldLabel:me.snippets.defaultSettingsLinkExternalPageLabel,
                helpText:me.snippets.defaultSettingsLinkExternalPageHelp,
                dataIndex:'external',
                name:'external'
            },
            {
                xtype:'mediaselectionfield',
                fieldLabel:me.snippets.defaultSettingsImageLabel,
                buttonText:me.snippets.defaultSettingsImageButtonText,
                name:'imagePath',
                readOnly:false,
                supportText:me.snippets.defaultSettingsImageSupportText,
                multiSelect:false,
                anchor:'100%',
                validTypes:me.getAllowedExtensions(),
                validTypeErrorFunction:me.getExtensionErrorCallback()
            },
            {
                xtype:'checkboxgroup',
                columns:2,
                defaultType:'checkboxfield',
                margin:'15 0 0 0',
                defaults:Ext.applyIf({
                    inputValue:true,
                    uncheckedValue:false
                }, me.defaults),
                items: me.getSettingsCheckboxes()
            }
        ];
    },

    /**
     * Returns the category settings checkboxes for the default fieldset
     * @return { Array }
     */
    getSettingsCheckboxes : function()
    {
        var me = this;
        return [
            {
                boxLabel:me.snippets.defaultSettingsHideTopLabel,
                name:'hideTop',
                dataIndex:'hideTop'
            },
            {
                boxLabel:me.snippets.defaultSettingsNoFilterLabel,
                name:'hideFilter',
                dataIndex:'hideFilter'
            }
        ];
    },

    /**
     * Builds and retuns the CMS settings. A category can be set as blog article and the data can be defined here.
     * A blog entry contains the
     * - blog flag
     * - a headline and
     * - the text.
     *
     * @return Ext.form.FieldSet
     */
    getCmsSettings : function()
    {
        var me = this;
        return Ext.create('Ext.form.FieldSet',{
            title: me.snippets.cmsTitle,
            anchor: '100%',
            defaults : me.defaults,
            disabled : true,
            items : [
                {
                    xtype : 'textfield',
                    fieldLabel : me.snippets.cmsHeaderLabel,
                    name : 'cmsHeadline'
                } , {
                    xtype : 'tinymce',
                    fieldLabel : me.snippets.cmsTextLabel,
                    height: 100,
                    name : 'cmsText'
                }
            ]
        });
    },
    /**
     * Builds and returns the meta data section.
     * Fields
     *  - Meta Descriptions
     *  - Meta Keywords
     *
     * @return Ext.form.FieldSet
     */
    getMetaInfo : function()
    {
        var me = this;
        return Ext.create('Ext.form.FieldSet',{
            title: me.snippets.metaGroupTitle,
            anchor: '100%',
            defaults : me.defaults,
            disabled : true,
            items : [{
                    xtype : 'textfield',
                    fieldLabel  : me.snippets.metaTitle,
                    name : 'metaTitle'
                },{
                    xtype : 'textareafield',
                    fieldLabel  : me.snippets.metaDescription,
                    name : 'metaDescription'
                }, {
                    xtype : 'textfield',
                    fieldLabel : me.snippets.metaKeywords,
                    name : 'metaKeywords'
                }
            ]
        });
    },

    /**
     * Builds and returns the 6 free attributs each category may have.
     * Each of this six fields can store up to 255 chars.
     *
     * @return Ext.form.FieldSet
     */
    getAttributes : function() {
        var me = this;

        me.attributeForm = Ext.create('Shopware.attribute.Form', {
            table: 's_categories_attributes',
            allowTranslation: false,
            fieldSetPadding: 0
        });
        return me.attributeForm;
    },

    /**
     * Helper Method which returns the method which should be called if some selected image file has a wrong extension.
     *
     * @return string
     */
    getExtensionErrorCallback :  function() {
        return 'onExtensionError';
    },

    /**
     * Helper method to show an error if the user selected an wrong file type
     */
    onExtensionError : function() {
        var me = this;
        Shopware.Notification.createGrowlMessage(me.snippets.errorMessageWrongFileTypeTitle, me.snippets.errorMessageWrongFileType, me.snippets.growlMessage);
    },

    /**
     * Helper method to set the allowed file extension for the media manager
     *
     * @return array of strings
     */
    getAllowedExtensions : function() {
        return [ 'gif', 'png', 'jpeg', 'jpg' ]
    }
});
//
<?php }} ?>