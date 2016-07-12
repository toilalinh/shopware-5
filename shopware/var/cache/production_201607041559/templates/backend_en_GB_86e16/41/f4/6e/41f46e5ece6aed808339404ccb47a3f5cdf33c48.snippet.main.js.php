<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:26:05
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/customer/controller/main.js" */ ?>
<?php /*%%SmartyHeaderCode:12644761435784634decebb1-55960684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41f46e5ece6aed808339404ccb47a3f5cdf33c48' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/customer/controller/main.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12644761435784634decebb1-55960684',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5784634df07c05_46298914',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784634df07c05_46298914')) {function content_5784634df07c05_46298914($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage Controller
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware Controller - Customer list backend module
 *
 * The customer module main controller handles the initialisation of the customer backend list.
 * It is possible to pass a customer id to the module to open the detail window directly. To
 * open the detail window directly pass the customer id in the parameter "customerId"
 */
//
Ext.define('Shopware.apps.Customer.controller.Main', {

    /**
     * Extend from the standard ExtJS 4 controller
     * @string
     */
    extend:'Ext.app.Controller',

    /**
     * Class property which holds the main application if it is created
     *
     * @default null
     * @object
     */
    mainWindow: null,

    /**
     * Creates the necessary event listener for this
     * specific controller and opens a new Ext.window.Window
     * to display the sub application
     *
     * @params customerId - The main controller can handle a customerId parameter to open the customer detail page directly
     * @return void
     */
    init:function () {
        var me = this;
        if (me.subApplication.action && me.subApplication.action.toLowerCase() === 'detail') {
            if (me.subApplication.params && me.subApplication.params.customerId) {
                //open the customer detail page with the passed customer id
                var store = me.subApplication.getStore('Detail');
                store.getProxy().extraParams = {
                    customerID: me.subApplication.params.customerId
                };

                me.mainWindow = me.subApplication.getView('detail.Window').create().show();
                me.mainWindow.setLoading(true);

                store.load({
                    callback:function (records) {
                        var customer = records[0];
                        var store = Ext.create('Shopware.apps.Customer.store.Batch');
                        store.load({
                            callback:function (records) {
                                var storeData = records[0];
                                me.mainWindow.record = customer;
                                me.mainWindow.createTabPanel();
                                me.mainWindow.setLoading(false);
                                me.mainWindow.setStores(storeData);
                                me.subApplication.setAppWindow(me.mainWindow);
                            }
                        });
                    }
                });
            } else {
                var store = Ext.create('Shopware.apps.Customer.store.Batch');
                store.load({
                    callback:function (records) {
                        var storeData = records[0];

                        me.mainWindow = me.subApplication.getView('detail.Window').create().show();
                        me.mainWindow.setLoading(true);
                        me.mainWindow.record =  Ext.create('Shopware.apps.Customer.model.Customer');
                        me.mainWindow.createTabPanel();
                        me.mainWindow.setStores(storeData);
                        me.mainWindow.setLoading(false);
                    }
                });
            }
        } else {
            //open the customer listing window
            me.mainWindow = me.getView('main.Window').create({
                listStore:me.subApplication.getStore('List').load()
            });
        }

        me.callParent(arguments);
    }

});
//
<?php }} ?>