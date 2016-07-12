<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:25:58
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/component/Shopware.component.IconPreloader.js" */ ?>
<?php /*%%SmartyHeaderCode:11257615055784634643b210-15988983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a357b40a93a03df0e22fb2cf84949853a48a662e' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/component/Shopware.component.IconPreloader.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11257615055784634643b210-15988983',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57846346459023_72239922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57846346459023_72239922')) {function content_57846346459023_72239922($_smarty_tpl) {?>/**
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
Ext.define('Shopware.component.IconPreloader', {

    /**
     * Defines the basic path which will be used for the preloading
     * @string
     * @default null
     */
    loadPath: null,

    /**
     * Extension of the stylesheet files
     * @string
     */
    extension: '.css',

    /**
     * The stylesheets which will be loaded by the preloader
     * @array
     */
    iconSheets: [
        'extra-icon-set-01', 'extra-icon-set-02', 'extra-icon-set-03', 'extra-icon-set-04',
        'extra-icon-set-05', 'extra-icon-set-06', 'extra-icon-set-07', 'extra-icon-set-08',
        'extra-icon-set-keys', 'extra-icon-set-devices', 'core-icon-set-new'
    ],

    /**
     * Time in milliseconds, which will be delay the preloading.
     * @Number
     */
    preloadDelay: 500,

    /**
     * Initialize the component and starts the preloading process.
     *
     * @param { Object } options - Component configuration. Needs to contain
     *        the property `loadPath` to define the basic loading path.
     * @returns { void }
     */
    constructor: function(options) {
        var me = this, task;

        if(!options.hasOwnProperty('loadPath')) {
            Ext.Error.raise({
                sourceClass: me.$className,
                sourceMethod: "constructor",
                msg: me.$className + " needs an loadPath to work correctly."
            });
        }
        me.loadPath = options.loadPath;

        // Starts the preloading after a given delay
        Ext.defer(me.startPreloading, me.preloadDelay, me);
    },

    /**
     * Returns the path which will be used to preload the defined
     * stylesheets.
     *
     * @returns { null|String } - Returns the path, otherwise `null`
     */
    getLoadPath: function() {
        return this.loadPath;
    },

    /**
     * Sets the loading path.
     *
     * @param { String } path - The new loading path
     * @returns { Boolean } Truthy if the path was setted, otherwise falsy
     */
    setLoadPath: function(path) {
        if(!path.length) {
            return false;
        }
        this.loadPath = path;
        return true;
    },

    /**
     * The starter method to trigger the preloading of the icons.
     *
     * @returns { void }
     */
    startPreloading: function() {
        var me = this;

        Ext.Array.each(me.iconSheets, function(sheet) {
            me.injectStylesheet(sheet);
        });
    },

    /**
     * Injects the stylesheets which should be preloaded. The
     * stylesheet will be injected in the `head`-node of the
     * document.
     *
     * @param { String } sheet - Name of the stylesheet
     * @returns { void }
     */
    injectStylesheet: function(sheet) {
        var me = this,
            el = document.createElement('link'),
            head = Ext.getHead(),
            basicOpts = {
                'rel': 'stylesheet',
                'type': 'text/css',
                'media': 'all'
            };

        basicOpts = Ext.apply(basicOpts, {
            'href': me.loadPath + '/' + sheet + me.extension + "?" + Ext.shopwareRevision
        });

        for(var key in basicOpts) {
            el.setAttribute(key, basicOpts[key]);
        }

        head.appendChild(el);
    }
});
<?php }} ?>