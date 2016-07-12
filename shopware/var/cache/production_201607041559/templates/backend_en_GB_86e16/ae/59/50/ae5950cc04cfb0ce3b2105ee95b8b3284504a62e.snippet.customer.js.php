<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:25:57
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/model/customer.js" */ ?>
<?php /*%%SmartyHeaderCode:98687793157846345824426-56777964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae5950cc04cfb0ce3b2105ee95b8b3284504a62e' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/model/customer.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98687793157846345824426-56777964',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5784634584e812_20986700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784634584e812_20986700')) {function content_5784634584e812_20986700($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Global Stores and Models
 *
 * The customer model contains all fields for a single shopware customer.
 */
//
Ext.define('Shopware.apps.Base.model.Customer', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.Customer',

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
		//
        { name:'id', type:'int' },
        { name:'groupKey', type:'string' },
        { name:'email', type:'string' },
        { name:'active', type:'boolean' },
        { name:'accountMode', type:'int' },
        { name:'confirmationKey', type:'string' },
        { name:'paymentId', type:'int', useNull: true },
        { name:'firstLogin', type:'date' },
        { name:'lastLogin', type:'date' },
        { name:'newsletter', type:'int' },
        { name:'validation', type:'int' },
        { name:'languageId', type:'int' },
        { name:'shopId', type:'int', useNull: true },
        { name:'priceGroupId', type:'int' },
        { name:'internalComment', type:'string' },
        { name:'failedLogins', type:'int' },
        { name:'referer', type:'string' },
        { name:'default_billing_address_id', type:'int', useNull: true },
        { name:'default_shipping_address_id', type:'int', useNull: true }
    ]

});
//


<?php }} ?>