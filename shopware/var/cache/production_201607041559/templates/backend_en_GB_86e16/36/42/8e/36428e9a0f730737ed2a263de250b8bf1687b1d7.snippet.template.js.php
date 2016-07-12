<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:27:16
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/category/store/template.js" */ ?>
<?php /*%%SmartyHeaderCode:42325344578463945d69b1-87248167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36428e9a0f730737ed2a263de250b8bf1687b1d7' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/category/store/template.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42325344578463945d69b1-87248167',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463945f48b9_80302936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463945f48b9_80302936')) {function content_578463945f48b9_80302936($_smarty_tpl) {?>/**
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
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/*  */

/**
 * Shopware Store - for the Category backend module.
 *
 * The template store loads and stores category template data
 */
//
Ext.define('Shopware.apps.Category.store.Template', {
    /**
     * Parent Object
     * @string
     */
    extend : 'Ext.data.Store',
    /**
     * Store to use
     * @string
     */
    alias : 'store.template',
    /**
     * USe remote filtering
     * @boolean
     */
    remoteFilter: true,
    /**
     * Defines if the store is loaded from the start or not
     * @boolean
     */
    autoLoad : false,
    /**
     * Default page size is 30 items
     * @integer
     */
    pageSize : 30,
    /**
     * Model to use for this store
     * @string
     */
    model : 'Shopware.apps.Category.model.Template',

    /**
     * Proxy config object.
     * @object
     */
    proxy : {
        type : 'ajax',
         /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        api : {
            read : '<?php echo '/backend/category/getTemplateSettings';?>'
        },
        /**
         * Configure the data reader
         * @object
         */
        reader : {
            type : 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>