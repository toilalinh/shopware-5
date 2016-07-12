<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:27:15
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/category/app.js" */ ?>
<?php /*%%SmartyHeaderCode:6230577065784639396d769-15177484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58151a5a13f736d6583a714d7ccc1282750d5287' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/category/app.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6230577065784639396d769-15177484',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463939bfac2_91549370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463939bfac2_91549370')) {function content_578463939bfac2_91549370($_smarty_tpl) {?>/**
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
 * @subpackage Settings
 * @version    $Id$
 * @author shopware AG
 */
/*  */

/**
 * Shopware Application - Category Management Module
 * Contains the configuration for the category management backend module.
 * This component defines which controllers belong to the application and whether the bulk loading is activated or not.
 */

//
Ext.define('Shopware.apps.Category', {
    /**
     * Extends from our special controller, which handles the
     * sub-application behavior and the event bus
     * @string
     */
    extend:'Enlight.app.SubApplication',
    /**
     * The name of the module. Used for internal purpose
     * @string
     */
    name:'Shopware.apps.Category',
    /**
     * Sets the loading path for the sub-application.
     *
     * Note that you'll need a "loadAction" in your
     * controller (server-side)
     * @string
     */
    bulkLoad: true,
    /**
     * PHP Controller to use for the bulk loading
     * @string
     */
    loadPath:'<?php echo '/backend/Category/load';?>',

    /**
     * Required stores for sub-application
     * @array
     */
    stores:[ 'Detail', 'Tree', 'Template', 'CustomerGroups', 'AvailableProducts', 'AssignedProducts', 'CategoryPath' ],
    /**
     * Required views for this sub-application
     * @array
     */
    views: [
        'main.Window',
        'main.MultiRequestTasks',
        'main.DuplicateSettings',
        'main.DuplicateTasks',
        'category.Tree',
        'category.tabs.Settings',
        'category.tabs.ArticleMapping',
        'category.tabs.restriction'
    ],

    /**
     * Required models for sub-application
     * @array
     */
    models:[ 'Detail','Tree', 'Template', 'Emotion', 'ProductAssignment' ],

    /**
     * Required controllers for sub-application
     * @array
     */
    controllers:[
        'Main',
        'Tree',
        'Settings',
        'ArticleMapping',
        'MultiRequest',
        'DuplicateTasks'
    ],

    /**
     * Returns the main application window for this is expected
     * by the Enlight.app.SubApplication class.
     * The class sets a new event listener on the "destroy" event of
     * the main application window to perform the destroying of the
     * whole sub application when the user closes the main application window.
     *
     * This method will be called when all dependencies are solved and
     * all member controllers, models, views and stores are initialized.
     *
     * @private
     * @return [object] mainWindow - the main application window based on Enlight.app.Window
     */
    launch: function() {
        var me = this,
            mainController = me.getController('Main');

        return me.mainWindow = mainController.mainWindow;
    }
});
//
<?php }} ?>