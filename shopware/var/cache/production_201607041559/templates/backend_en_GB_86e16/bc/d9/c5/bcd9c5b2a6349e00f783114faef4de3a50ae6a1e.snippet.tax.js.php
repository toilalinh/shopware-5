<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:26:25
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/config/store/detail/tax.js" */ ?>
<?php /*%%SmartyHeaderCode:1764181574578463619b18e8-64701098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcd9c5b2a6349e00f783114faef4de3a50ae6a1e' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/config/store/detail/tax.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1764181574578463619b18e8-64701098',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463619ccac7_35262812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463619ccac7_35262812')) {function content_578463619ccac7_35262812($_smarty_tpl) {?>/**
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

/**
 * Shopware Backend - Tax store
 *
 * todo@all: Documentation
 */

//
Ext.define('Shopware.apps.Config.store.detail.Tax', {
	extend: 'Ext.data.Store',
	model : 'Shopware.apps.Config.model.form.Tax',
    remoteSort: true,
    remoteFilter: true,
    pageSize: 20,
    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/Config/getValues';?>?_repositoryClass=tax',
        api: {
            create: '<?php echo '/backend/Config/saveValues';?>?_repositoryClass=tax',
            update: '<?php echo '/backend/Config/saveValues';?>?_repositoryClass=tax',
            destroy: '<?php echo '/backend/Config/deleteValues';?>?_repositoryClass=tax'
        },
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>