<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:27:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/supplier/view/main/list.js" */ ?>
<?php /*%%SmartyHeaderCode:1233842449578463aa1b5153-87834432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '496707eadbea90f463c69b59a67e74bcc31091e1' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/supplier/view/main/list.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1233842449578463aa1b5153-87834432',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463aa2145d8_44480660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463aa2145d8_44480660')) {function content_578463aa2145d8_44480660($_smarty_tpl) {?>/**
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
 * @package    Supplier
 * @subpackage View
 * @version    $Id$
 * @author shopware AG
 */

/**/

/**
 * Shopware View - Supplier
 *
 * Backend - Management for Suppliers. Create | Modify | Delete and Logo Management.
 * Default supplier view. Extends a grid view.
 */
//
Ext.define('Shopware.apps.Supplier.view.main.List', {
    extend : 'Ext.grid.Panel',
    alias : 'widget.supplier-main-list',
    autoScroll : true,
    stateful : true,
    stateId : 'shopware-supplier-list',

    /**
     * Initialize the Shopware.apps.Supplier.view.main.List and defines the necessary
     * default configuration
     *
     * @return void
     */
    initComponent : function () {
        var me = this;

        me.store = me.supplierStore;
        me.store.load();
        me.selModel = me.getSelModel();

        // Define the columns and renders
        me.columns = me.getGridColumns();

        // Adding a paging toolbar to the grid
        me.dockedItems = [{
            dock: 'bottom',
            xtype: 'pagingtoolbar',
            displayInfo: true,
            store: this.supplierStore
        }];

        me.dockedItems = Ext.clone(me.dockedItems);
        me.callParent(arguments);
    },
    /**
     * Return the selection model for this grid.
     *
     * @return Ext.selection.CheckboxModel
     */
    getSelModel : function()
    {
        return Ext.create('Ext.selection.CheckboxModel');
    },
    /**
     * Return an array of objects (grid columns)
     *
     * @return array of grid columns
     */
    getGridColumns : function()
    {
        var me = this;
        return [
            {
                header : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'grid_name','default'=>'Name','namespace'=>'backend/supplier/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid_name','default'=>'Name','namespace'=>'backend/supplier/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid_name','default'=>'Name','namespace'=>'backend/supplier/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                dataIndex : 'name',
                renderer : me.nameColumn,
                width: 125
            },
            {
                header : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'grid_articlecounter','default'=>'Article','namespace'=>'backend/supplier/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid_articlecounter','default'=>'Article','namespace'=>'backend/supplier/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid_articlecounter','default'=>'Article','namespace'=>'backend/supplier/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                dataIndex : 'articleCounter',
                width : 50,
                renderer : me.articleCountColumn
            },
            {
                header : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'grid_link','default'=>'URL','namespace'=>'backend/supplier/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid_link','default'=>'URL','namespace'=>'backend/supplier/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
URL<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid_link','default'=>'URL','namespace'=>'backend/supplier/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                dataIndex : 'link',
                width: 150,
                renderer : me.urlColumn
            },
            {
                header : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'grid_description','default'=>'Description','namespace'=>'backend/supplier/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid_description','default'=>'Description','namespace'=>'backend/supplier/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid_description','default'=>'Description','namespace'=>'backend/supplier/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                dataIndex : 'description',
                flex : 1,
                renderer : me.descriptionColumn
            },
            {
                xtype : 'actioncolumn',
                width : 60,
                items : me.getActionColumn()
            }
        ];
    },

    /**
     * Returns the an array of icons for the action column
     *
     * @return Array of buttons
     */
    getActionColumn : function()
    {
        return [
            /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
            {
                iconCls : 'sprite-minus-circle-frame',
                action : 'delete',
                tooltip : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'grid_delete_tooltip','default'=>'Delete this supplier','namespace'=>'backend/supplier/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid_delete_tooltip','default'=>'Delete this supplier','namespace'=>'backend/supplier/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete manufacturer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid_delete_tooltip','default'=>'Delete this supplier','namespace'=>'backend/supplier/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            },
            /*<?php }?>*/
            /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'update'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>*/
            {
                iconCls : 'sprite-pencil',
                action : 'edit',
                tooltip : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'grid_edit_tooltip','default'=>'Edit this supplier','namespace'=>'backend/supplier/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid_edit_tooltip','default'=>'Edit this supplier','namespace'=>'backend/supplier/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit manufacturer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid_edit_tooltip','default'=>'Edit this supplier','namespace'=>'backend/supplier/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            }
            /*<?php }?>*/
        ];
    },
    /**
     * Formats the email column
     *
     * @param [string] value - An URI to the supplier homepage
     * @return String
     */
    urlColumn : function (value) {
        return Ext.String.format('<a h'+'ref="{0}" target="_blank">{1}</a>', value, value);
    },

    /**
     * Formats the name column
     *
     * @param [string] value - Name of the supplier
     * @return String
     */
    nameColumn : function (value) {
        return Ext.String.format('<strong style="font-weight: 700">{0}</strong>', value);
    },

    /**
     * Formats the articles count column
     *
     * @param [integer] value - Count of how many articles are associated with this supplier
     * @return integer
     */
    articleCountColumn : function (value) {
        return  value;
    },

    /**
     * Formats the description column
     *
     * @param [string] value - HTML Text containing the description of the supplier
     * @return string
     */
    descriptionColumn : function (value) {
        value = Ext.util.Format.ellipsis(value, 40);
        value = Ext.util.Format.htmlEncode(value);
        return value;
    }
});
//
<?php }} ?>