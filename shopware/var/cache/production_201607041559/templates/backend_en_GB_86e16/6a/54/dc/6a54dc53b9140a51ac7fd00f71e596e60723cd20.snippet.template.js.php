<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:27:16
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/category/model/template.js" */ ?>
<?php /*%%SmartyHeaderCode:17566944065784639408b852-90540406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a54dc53b9140a51ac7fd00f71e596e60723cd20' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/category/model/template.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17566944065784639408b852-90540406',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5784639409d082_73491248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784639409d082_73491248')) {function content_5784639409d082_73491248($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/*  */

/**
 * Shopware Model - Template settings
 *
 * Model to access the settings for category templates aka sCATEGORYTEMPLATES
 */
//
Ext.define('Shopware.apps.Category.model.Template', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',
    /**
     * If the name of the field is 'id' extjs assumes automatically that
     * this field is an unique identifier.
     * @integer
     */
    idProperty : 'template',
    /**
     * The fields used for this model
     * @array
     */
    fields:[
		// 
        { name : 'template', type: 'string' },
        { name : 'name', type: 'string' }
    ]
});

//
<?php }} ?>