<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:26:18
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/config/model/main/element_translation.js" */ ?>
<?php /*%%SmartyHeaderCode:16844489225784635a7bad25-21700406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96660a24118260010da6785307809c75390590c7' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/config/model/main/element_translation.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16844489225784635a7bad25-21700406',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5784635a7d86e0_68914250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784635a7d86e0_68914250')) {function content_5784635a7d86e0_68914250($_smarty_tpl) {?>/**
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
 * @package    Shopware_Config
 * @subpackage Config
 * @version    $Id$
 * @author shopware AG
 */

/**
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Config.model.main.ElementTranslation', {
    extend: 'Ext.data.Model',
    fields: [
		//
        { name: 'id', type: 'int', useNull: true },
        { name: 'label', type: 'string' },
        { name: 'description', type: 'string', useNull: true }
    ]
});
//
<?php }} ?>