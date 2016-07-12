<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:27:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/supplier/store/supplier.js" */ ?>
<?php /*%%SmartyHeaderCode:1403214102578463aa402e64-41396001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6af8ad97767c59ae301e36726064b0e1239b582d' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/supplier/store/supplier.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1403214102578463aa402e64-41396001',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463aa4124c5_75932435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463aa4124c5_75932435')) {function content_578463aa4124c5_75932435($_smarty_tpl) {?>/**
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
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Supplier
 *
 * Backend - Management for Suppliers. Create | Modify | Delete and Logo Management.
 * Default store which keeps the supplier
 */
//
Ext.define('Shopware.apps.Supplier.store.Supplier', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend : 'Ext.data.Store',
    /**
     * Store ID for easy access to this store
     *
     * @string
     */
    storeId: 'supplierStore',
    /**
     * Auto load the store after the component
     * is initialized
     * @boolean
     */
    autoLoad : false,
    /**
     * Amount of data loaded at once
     * @integer
     */
    pageSize : 30,
    /**
     * enables the remote filter system
     * @boolen
     */
    remoteFilter: true,
    /**
     * Enables the remote sorting system
     * @boolean
     */
    remoteSort : true,

    /**
     * Define the used model for this store
     * @string
     */
    model : 'Shopware.apps.Supplier.model.Supplier'
});
//
<?php }} ?>