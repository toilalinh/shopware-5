<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:25:56
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/engine/Library/ExtJs/overrides/Ext.LoadMask.js" */ ?>
<?php /*%%SmartyHeaderCode:498417224578463443c88a8-20048523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10672a848c2a4dcdfbe07bdb2f3b4f9f43f1e6d9' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/engine/Library/ExtJs/overrides/Ext.LoadMask.js',
      1 => 1467622778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '498417224578463443c88a8-20048523',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463443e3009_98559046',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463443e3009_98559046')) {function content_578463443e3009_98559046($_smarty_tpl) {?>/**
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
 * Overrides the default behavior of the loading
 * mask to destroy the LoadMask after a given
 * delay to prevent the backend to be unusable
 * after a error was raised.
 */
Ext.define('Ext.LoadMask-Shopware', {

    override: 'Ext.LoadMask',

    /**
     * Holder property which holds the DelayedTask if a delay
     * is configured
     *
     * @private
     * @null or Ext.util.DelayedTask
     */
    _delayedTask: null,

    hideLoadingMsg: false,

    hideModal: false,

    bindComponent: function(comp){
        var me = this,
            listeners = {
                scope: this,
                resize: me.sizeMask,
                added: me.onComponentAdded,
                removed: me.onComponentRemoved
            },
            hierarchyEventSource = Ext.container.Container.hierarchyEventSource;

        me.hideLoadingMsg = comp.hideLoadingMsg || false;
        if (comp.floating) {
            listeners.move = me.sizeMask;
            me.activeOwner = comp;
        } else if (comp.ownerCt) {
            me.onComponentAdded(comp.ownerCt);
        } else {
            // if the target comp is non-floating and under a floating comp don't bring the load mask to the front of the stack
            me.preventBringToFront = true;
        }

        me.mon(comp, listeners);

        // subscribe to the observer that manages the hierarchy
        me.mon(hierarchyEventSource, {
            show: me.onContainerShow,
            hide: me.onContainerHide,
            expand: me.onContainerExpand,
            collapse: me.onContainerCollapse,
            scope: me
        });
    },

    bindStore : function(store, initial) {
        var me = this;
        me.hideLoadingMsg = me.hideLoadingMsg || false;
        if(!me.hideLoadingMsg) {
            me.mixins.bindable.bindStore.apply(me, arguments);
        }
        store = me.store;
        if (store && store.isLoading() && !me.hideLoadingMsg) {
            me.onBeforeLoad();
        }
    },

    /**
     * Checks if a delay is configured and creates a delayed task
     * to hide the Ext.LoadMask after the given delay
     *
     * @return void
     */
    initComponent: function() {
        var me = this;

        try {
            me.callOverridden(arguments);
        } catch(err) {  }
        if(me.delay && me.delay > 0) {

            me._delayedTask = new Ext.util.DelayedTask(function() {
                me.hide();
            });
            me._delayedTask.delay(me.delay);
        }
    },

    /**
     * Checks if a delayed task is configured and cancels
     * it if the hide method is fired before the delayed task
     * is fired.
     *
     * @return void
     */
    hide: function() {
        try {
            this.callOverridden(arguments);
        } catch(err) {  }
        if(this._delayedTask) {
            this._delayedTask.cancel();
            this._delayedTask = null;
        }
    },

    show: function() {
        var me = this;

        // Element support to be deprecated
        if (this.isElement) {
            this.ownerCt.mask(this.useMsg ? this.msg : '', this.msgCls);
            this.fireEvent('show', this);

            if(me.hideModal) {
                var mask = Ext.get(Ext.getBody().query('.x-mask')[0]);
                mask.hide();
            }
            return;
        }

        return this.callParent(arguments);
    }
});
<?php }} ?>