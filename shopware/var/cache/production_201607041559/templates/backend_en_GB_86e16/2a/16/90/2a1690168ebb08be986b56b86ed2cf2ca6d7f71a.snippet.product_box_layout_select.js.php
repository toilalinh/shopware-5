<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:26:18
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/config/view/element/product_box_layout_select.js" */ ?>
<?php /*%%SmartyHeaderCode:17837991595784635ac1dd89-57325336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a1690168ebb08be986b56b86ed2cf2ca6d7f71a' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/config/view/element/product_box_layout_select.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17837991595784635ac1dd89-57325336',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5784635ac25b62_37058300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784635ac25b62_37058300')) {function content_5784635ac25b62_37058300($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Config.view.element.ProductBoxLayoutSelect', {
    extend: 'Shopware.apps.Base.view.element.ProductBoxLayoutSelect',
    alias: [
        'widget.config-element-product-box-layout-select'
    ],

    createStore: function() {
        this.store = Ext.create('Shopware.apps.Base.store.ProductBoxLayout', {
            displayExtendLayout: false,
            displayBasicLayout: true,
            displayMinimalLayout: true,
            displayImageLayout: true
        });
    }

});
<?php }} ?>