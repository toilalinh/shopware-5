<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:27:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/supplier/view/main/toolbar.js" */ ?>
<?php /*%%SmartyHeaderCode:471694134578463aa3bccd8-61532044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2de251478a16914c0516a285107409de4f76fe01' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/supplier/view/main/toolbar.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '471694134578463aa3bccd8-61532044',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463aa3fb1d0_54782728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463aa3fb1d0_54782728')) {function content_578463aa3fb1d0_54782728($_smarty_tpl) {?>/**
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
 * Create a new supplier view
 */
//
Ext.define('Shopware.apps.Supplier.view.main.Toolbar', {
    extend : 'Ext.toolbar.Toolbar',
    alias : 'widget.supplier-main-toolbar',
    ui: 'shopware-ui',
    items : [
        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'create'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
        {
            iconCls : 'sprite-plus-circle-frame',
            text : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'add','default'=>'Add','namespace'=>'backend/supplier/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'add','default'=>'Add','namespace'=>'backend/supplier/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'add','default'=>'Add','namespace'=>'backend/supplier/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            action : 'addSupplier'
        },
        /*<?php }?>*/
        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>*/
        {
            iconCls : 'sprite-minus-circle-frame',
            text : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'delete','default'=>'Delete selected suppliers','namespace'=>'backend/supplier/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete','default'=>'Delete selected suppliers','namespace'=>'backend/supplier/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete selected manufacturers<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete','default'=>'Delete selected suppliers','namespace'=>'backend/supplier/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            disabled : true,
            action : 'deleteSupplier'
        },
        /*<?php }?>*/
        '->',
        {
            xtype : 'textfield',
            name : 'searchfield',
            action : 'searchSupplier',
            width: 170,
            cls: 'searchfield',
            enableKeyEvents : true,
            emptyText : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'search_empty','default'=>'Search...','namespace'=>'backend/supplier/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search_empty','default'=>'Search...','namespace'=>'backend/supplier/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search_empty','default'=>'Search...','namespace'=>'backend/supplier/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }, {
            xtype: 'tbspacer',
            width: 6
        }
    ]
});
//
<?php }} ?>