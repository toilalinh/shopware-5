<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:27:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/supplier/view/main.js" */ ?>
<?php /*%%SmartyHeaderCode:1881296840578463aa193ef8-85744166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b2ae40c6b502ea87735a47c210958c6d55ab587' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/supplier/view/main.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1881296840578463aa193ef8-85744166',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463aa1b1359_31802403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463aa1b1359_31802403')) {function content_578463aa1b1359_31802403($_smarty_tpl) {?>/**
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

/**
 * Shopware UI - Supplier Details
 *
 * This file represents the main window view
 */
//
Ext.define('Shopware.apps.Supplier.view.Main', {
    extend : 'Enlight.app.Window',
    layout : 'border',
    alias : 'widget.supplierGrid',
    width : 800,
    height : '90%',
    maximizable : true,
    minimizable: true,
    stateful : true,
    stateId : 'suppliersList',
    border : 0,
    title : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window_title','default'=>'Supplier management','namespace'=>'backend/supplier/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window_title','default'=>'Supplier management','namespace'=>'backend/supplier/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Manufacturer administration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window_title','default'=>'Supplier management','namespace'=>'backend/supplier/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    initComponent: function() {
        var me = this;

        me.items = [{
            xtype: 'supplier-main-toolbar',
            region: 'north'
        }, {
            xtype: 'supplier-main-list',
            region: 'center',
            supplierStore: me.supplierStore
        }, {
            xtype: 'supplier-main-detail',
            region: 'east'
        }];

        me.callParent(arguments);
    }
});
//
<?php }} ?>