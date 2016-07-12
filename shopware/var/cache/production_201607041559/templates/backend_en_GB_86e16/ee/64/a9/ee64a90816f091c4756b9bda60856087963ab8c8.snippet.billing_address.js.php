<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:25:57
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/model/billing_address.js" */ ?>
<?php /*%%SmartyHeaderCode:124112454157846345808168-82223911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee64a90816f091c4756b9bda60856087963ab8c8' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/model/billing_address.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124112454157846345808168-82223911',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5784634581fbb9_03047746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784634581fbb9_03047746')) {function content_5784634581fbb9_03047746($_smarty_tpl) {?>/**
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
 * The billing address model is an extension of the base address model which contains the standard fields for
 * an shopware address.
 */
//
Ext.define('Shopware.apps.Base.model.BillingAddress', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.BillingAddress',

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.apps.Base.model.Address',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
		//
        /**
         * the number field is an alias for the customer number
         */
        { name:'number', type:'string' },
        { name:'phone', type:'string' },
        { name:'vatId', type:'string' }
    ]

});
//


<?php }} ?>