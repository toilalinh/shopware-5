<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:25:57
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/model/locale.js" */ ?>
<?php /*%%SmartyHeaderCode:1636501767578463456389e6-00025973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '921a567e72564458ed85c2a50941c7cc46421139' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/model/locale.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1636501767578463456389e6-00025973',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57846345654753_86862639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57846345654753_86862639')) {function content_57846345654753_86862639($_smarty_tpl) {?>/**
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
 * Shopware UI - Global Stores and Models
 *
 * The dispatch model represents a data row of the s_premium_dispatch or the
 * Shopware\Models\Dispatch\Dispatch doctrine model.
 */
//
Ext.define('Shopware.apps.Base.model.Locale', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: ['Shopware.model.Locales', 'Shopware.model.Locale'],

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Shopware.data.Model',

    /**
     * unique id
     * @int
     */
    idProperty : 'id',

	/**
    * The fields used for this model
    * @array
    */
    fields: [
		//
        { name : 'id', type : 'int' },
        { name: 'name', type: 'string', convert: function(v, record) {
            return record.data.language + ' (' + record.data.territory + ')';
        } },
        { name: 'language', type : 'string' },
        { name: 'territory', type : 'string' },
        { name: 'locale', type : 'string' }
    ]
});
//
<?php }} ?>