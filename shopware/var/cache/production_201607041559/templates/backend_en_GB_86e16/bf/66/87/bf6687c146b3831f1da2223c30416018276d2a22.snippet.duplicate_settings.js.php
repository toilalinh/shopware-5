<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:27:16
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/category/view/main/duplicate_settings.js" */ ?>
<?php /*%%SmartyHeaderCode:5751214035784639417e925-88057192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf6687c146b3831f1da2223c30416018276d2a22' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/category/view/main/duplicate_settings.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5751214035784639417e925-88057192',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463941d1ca8_80485142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463941d1ca8_80485142')) {function content_578463941d1ca8_80485142($_smarty_tpl) {?>/**
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
 */

/*  */

//
Ext.define('Shopware.apps.Category.view.main.DuplicateSettings', {
    extend: 'Enlight.app.Window',
    alias: 'widget.duplication-settings-window',
    width: 500,
    height: 180,
    layout: 'fit',
    modal: true,

    snippets: {
        title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'duplicate'/'title','default'=>'Duplicate settings','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'duplicate'/'title','default'=>'Duplicate settings','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Duplicate settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'duplicate'/'title','default'=>'Duplicate settings','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        emptyText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'duplicate'/'emptyText','default'=>'Please select...','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'duplicate'/'emptyText','default'=>'Please select...','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please select...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'duplicate'/'emptyText','default'=>'Please select...','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        categoryName: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'duplicate'/'categoryName','default'=>'Select the destination category','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'duplicate'/'categoryName','default'=>'Select the destination category','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select the destination category<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'duplicate'/'categoryName','default'=>'Select the destination category','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        association: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'duplicate'/'association','default'=>'Copy item associations','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'duplicate'/'association','default'=>'Copy item associations','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Copy item associations<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'duplicate'/'association','default'=>'Copy item associations','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        button: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'duplicate'/'button','default'=>'Duplicate','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'duplicate'/'button','default'=>'Duplicate','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Duplicate<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'duplicate'/'button','default'=>'Duplicate','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    initComponent: function() {
        var me = this;

        me.form = me.createFormPanel();
        me.title = me.snippets.title;

        me.items = [ me.form ];
        me.dockedItems = [ me.createToolbar() ];
        me.callParent(arguments);
    },

    createFormPanel: function() {
        var me = this;

        return Ext.create('Ext.form.Panel', {
            layout: 'anchor',
            border: false,
            bodyPadding: 25,
            defaults: {
                anchor: '100%'
            },
            items: me.createFormPanelItems()
        });
    },

    createFormPanelItems: function() {
        var me = this;

        me.categoryNameField = Ext.create('Shopware.form.field.PagingComboBox', {
            name: 'categoryId',
            emptyText: me.snippets.emptyText,
            pageSize: 15,
            labelWidth: 155,
            fieldLabel: me.snippets.categoryName,
            store: Ext.create('Shopware.apps.Category.store.CategoryPath'),
            valueField: 'id',
            displayField: 'name'
        });

        me.associationField = Ext.create('Ext.form.field.Checkbox', {
            inputValue: true,
            uncheckedValue: false,
            checked: true,
            labelWidth: 155,
            name: 'reassignArticleAssociations',
            fieldLabel: me.snippets.association
        });

        return [ me.categoryNameField, me.associationField ];
    },

    createToolbar: function() {
        var me = this;

        return Ext.create('Ext.toolbar.Toolbar', {
            dock: 'bottom',
            ui: 'shopware-ui',
            cls: 'shopware-toolbar',
            items: [ '->', {
                text: me.snippets.button,
                cls: 'primary',
                handler: function() {
                    me.fireEvent('start-duplication', me, me.treeRecord);
                }
            }]
        });
    }
});
//<?php }} ?>