<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:25:59
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.PropertyOptionFieldHandler.js" */ ?>
<?php /*%%SmartyHeaderCode:780541521578463471657d1-72843656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '527eab5114b13a69d529c82b1fc49ce6e7d7721d' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.PropertyOptionFieldHandler.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '780541521578463471657d1-72843656',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5784634716a740_59956943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784634716a740_59956943')) {function content_5784634716a740_59956943($_smarty_tpl) {?>/**
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
 * @category    Shopware
 * @package     Base
 * @subpackage  Attribute
 * @version     $Id$
 * @author      shopware AG
 */

Ext.define('Shopware.attribute.PropertyOptionFieldHandler', {
    extend: 'Shopware.attribute.AbstractEntityFieldHandler',
    entity: "Shopware\\Models\\Property\\Value",
    singleSelectionClass: 'Shopware.form.field.PropertyOptionSingleSelection',
    multiSelectionClass: 'Shopware.form.field.PropertyOptionGrid'
});<?php }} ?>