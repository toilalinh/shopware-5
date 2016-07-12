<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:27:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/supplier/model/supplier.js" */ ?>
<?php /*%%SmartyHeaderCode:63733481578463aa150631-28135098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '058ee64917f4c0767e05baed13ff3134b747d30b' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/supplier/model/supplier.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63733481578463aa150631-28135098',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463aa190012_42443335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463aa190012_42443335')) {function content_578463aa190012_42443335($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Supplier
 *
 * Backend - Management for Suppliers. Create | Modify | Delete and Logo Management.
 * Standard supplier model
 */
//
Ext.define('Shopware.apps.Supplier.model.Supplier', {
    /**
     * Extends the standard ExtJS 4
     * @string
     */
    extend : 'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields : [
		//
        { name : 'id', type : 'int' },
        { name : 'name', type : 'string' },
        { name : 'count', type : 'int' },
        { name : 'image', type : 'string' },
        { name : 'media-manager-selection', type: 'string' },
        { name : 'link', type : 'string'},
        { name : 'description', type : 'string' },
        { name : 'metaTitle', type : 'string' },
        { name : 'metaDescription', type : 'string' },
        { name : 'metaKeywords', type : 'string' },
        { name : 'articleCounter', type : 'int' }
    ],
    /**
     * If the name of the field is 'id' extjs assumes autmagical that
     * this field is an unique identifier.
     * @integer
     */
    idProperty : 'id',
    /**
     * Configure the data communication
     * @object
     */
    proxy : {
        type : 'ajax',
        api : {
            read : '<?php echo '/backend/supplier/getSuppliers';?>',
            create : '<?php echo '/backend/supplier/createSupplier';?>',
            update : '<?php echo '/backend/supplier/updateSupplier';?>',
            destroy : '<?php echo '/backend/supplier/deleteSupplier';?>'
        },
        reader : {
            type : 'json',
            root : 'data'
        }
    },
    /**
     * Rules to validate the input at the frontend side.
     * @array of objects
     */
    validations : [
        { field : 'name', type : 'length', min : 1 }
    ]
});
//
<?php }} ?>