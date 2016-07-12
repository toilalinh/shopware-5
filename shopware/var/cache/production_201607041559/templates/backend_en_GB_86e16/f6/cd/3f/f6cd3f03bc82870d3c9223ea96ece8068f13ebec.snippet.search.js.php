<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:26:25
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/config/view/form/search.js" */ ?>
<?php /*%%SmartyHeaderCode:9304941257846361329e57-87725565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6cd3f03bc82870d3c9223ea96ece8068f13ebec' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/config/view/form/search.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9304941257846361329e57-87725565',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463613a6f80_23019444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463613a6f80_23019444')) {function content_578463613a6f80_23019444($_smarty_tpl) {?>/**
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

/**
 * todo@all: Documentation
 */

//

//
Ext.define('Shopware.apps.Config.view.form.Search', {
    extend: 'Ext.tab.Panel',
    alias: 'widget.config-form-search',

    layout: 'fit',
    activeTab: 0,
    deferredRender: false,

    initComponent:function () {
        var me = this;

        Ext.applyIf(me, {
            items: me.getItems()
        });

        me.callParent(arguments);
    },

    getItems: function() {
        var me = this;
        return [
            me.getConfigForm(),
            me.getFieldForm()
        ];
    },

    getConfigForm: function() {
        var me = this;
        return {
            xtype: 'config-main-form',
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'search'/'config'/'title','default'=>'Settings','namespace'=>'backend/config/view/search')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'config'/'title','default'=>'Settings','namespace'=>'backend/config/view/search'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Settings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'config'/'title','default'=>'Settings','namespace'=>'backend/config/view/search'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            shopStore: me.shopStore,
            formRecord: me.formRecord
        };
    },

    getFieldForm: function() {
        var me = this;
        return {
            xtype: 'config-base-form',
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'search'/'form'/'title','default'=>'Relevance / Fields','namespace'=>'backend/config/view/search')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'form'/'title','default'=>'Relevance / Fields','namespace'=>'backend/config/view/search'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Relevance/fields<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'form'/'title','default'=>'Relevance / Fields','namespace'=>'backend/config/view/search'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            items: [{
                xtype: 'config-base-table',
                region: 'center',
                border: false,
                sortableColumns: false,
                store: 'form.SearchField',
                searchField: 'name',
                columns: me.getColumns()
            },{
                xtype: 'config-base-detail',
                items: me.getFormItems()
            }]
        };
    },

    getColumns: function() {
        var me = this;
        return [{
            dataIndex: 'name',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'search'/'table'/'name_text','default'=>'Name','namespace'=>'backend/config/view/search')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'table'/'name_text','default'=>'Name','namespace'=>'backend/config/view/search'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'table'/'name_text','default'=>'Name','namespace'=>'backend/config/view/search'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            flex: 1
        }, {
            dataIndex: 'relevance',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'search'/'table'/'relevance_text','default'=>'Relevance','namespace'=>'backend/config/view/search')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'table'/'relevance_text','default'=>'Relevance','namespace'=>'backend/config/view/search'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Relevance<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'table'/'relevance_text','default'=>'Relevance','namespace'=>'backend/config/view/search'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            flex: 1
        }, {
            dataIndex: 'field',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'search'/'table'/'field_text','default'=>'Field','namespace'=>'backend/config/view/search')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'table'/'field_text','default'=>'Field','namespace'=>'backend/config/view/search'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Field<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'table'/'field_text','default'=>'Field','namespace'=>'backend/config/view/search'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            flex: 1
        }, {
            dataIndex: 'table',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'search'/'table'/'table_text','default'=>'Table','namespace'=>'backend/config/view/search')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'table'/'table_text','default'=>'Table','namespace'=>'backend/config/view/search'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Table<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'table'/'table_text','default'=>'Table','namespace'=>'backend/config/view/search'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            flex: 1
        }/*, me.getActionColumn()*/];
    },

    getFormItems: function() {
        var me = this;
        return [{
            name: 'name',
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'search'/'detail'/'name_text','default'=>'Name','namespace'=>'backend/config/view/search')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'detail'/'name_text','default'=>'Name','namespace'=>'backend/config/view/search'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'detail'/'name_text','default'=>'Name','namespace'=>'backend/config/view/search'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            allowBlank: false
        },{
            xtype: 'config-element-number',
            name: 'relevance',
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'search'/'detail'/'relevance_text','default'=>'Relevance','namespace'=>'backend/config/view/search')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'detail'/'relevance_text','default'=>'Relevance','namespace'=>'backend/config/view/search'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Relevance<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'detail'/'relevance_text','default'=>'Relevance','namespace'=>'backend/config/view/search'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },{
            name: 'field',
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'search'/'detail'/'field_text','default'=>'Table field','namespace'=>'backend/config/view/search')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'detail'/'field_text','default'=>'Table field','namespace'=>'backend/config/view/search'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Table field<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'detail'/'field_text','default'=>'Table field','namespace'=>'backend/config/view/search'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            allowBlank: false
        },{
            xtype: 'config-element-select',
            name: 'tableId',
            store: 'base.SearchTable',
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'search'/'detail'/'table_text','default'=>'Table','namespace'=>'backend/config/view/search')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'detail'/'table_text','default'=>'Table','namespace'=>'backend/config/view/search'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Table<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'detail'/'table_text','default'=>'Table','namespace'=>'backend/config/view/search'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            allowBlank: false
        }];
    }
});
//
<?php }} ?>