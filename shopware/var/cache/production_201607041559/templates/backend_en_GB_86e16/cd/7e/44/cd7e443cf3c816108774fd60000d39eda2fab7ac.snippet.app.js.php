<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:27:37
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/supplier/app.js" */ ?>
<?php /*%%SmartyHeaderCode:856429076578463a9a6a548-08303193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd7e443cf3c816108774fd60000d39eda2fab7ac' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/supplier/app.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '856429076578463a9a6a548-08303193',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463a9abee43_09192998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463a9abee43_09192998')) {function content_578463a9abee43_09192998($_smarty_tpl) {?>/**
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
 * @subpackage App
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Controller - Supplier
 *
 * Backend - Management for Suppliers. Create | Modify | Delete and Logo Management.
 */
//
Ext.define('Shopware.apps.Supplier', {
    /**
     * Extends from our special controller, which handles the
     * sub-application behavior and the event bus
     * @string
     */
    extend : 'Enlight.app.SubApplication',
    /**
     * The name of the module. Used for internal purpose
     * @string
     */
    name : 'Shopware.apps.Supplier',
    /**
     * Sets the loading path for the sub-application.
     *
     * Note that you'll need a "loadAction" in your
     * controller (server-side)
     * @string
     */
    loadPath:'<?php echo '/backend/supplier/load';?>',
    /**
     * Enables the Shopware bulk loading system
     * @boolean
     */
    bulkLoad: true,

    /**
     * Requires controllers for sub-application
     * @array
     */
    controllers : [ 'Main' ],

    /**
     * Requires views for sub-application
     * @array
     */
    views: [
        'Main', 'main.List','main.Edit',
        'main.Create', 'main.Detail', 'main.Toolbar'
    ],

    /**
    * Required stores for controller
    * @array
    */
   stores : [ 'Supplier' ],
   /**
    * Required models for controller
    * @array
    */
   models : ['Supplier'],
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

        return mainController.mainWindow;
    }
});
//
<?php }} ?>