<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:25:56
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/engine/Library/ExtJs/overrides/Ext.form.Field.js" */ ?>
<?php /*%%SmartyHeaderCode:1871824943578463443e6a08-84542778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83dd822f4d3b3efe60e12817474c569f5964a022' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/engine/Library/ExtJs/overrides/Ext.form.Field.js',
      1 => 1467622778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1871824943578463443e6a08-84542778',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463443fad83_41458318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463443fad83_41458318')) {function content_578463443fad83_41458318($_smarty_tpl) {?>/**
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
 * Overrides the Ext.button.Button to provide
 * an additional HTML5 data attribute to provide
 * a better adressing in selenium ui tests.
 *
 * @category   Enlight
 * @package    Enlight_ExtJs
 * @copyright  Copyright (c) 2012, shopware AG (http://www.shopware.de)
 * @license    http://enlight.de/license     New BSD License
 */
Ext.override(Ext.form.Field,
/** @lends Ext.form.Field# */
{
    /**
     * Support text which will be displayed under the form element.
     * @string
     */
    supportText: '',

    /**
     * Help text which will be displayed in a tool tip next to the form element.
     * @string
     */
    helpText: '',

    /**
     * Width (in pixel) for the help text tool tip.
     * @default null
     * @integer
     */
    helpWidth: null,

    /**
     * Title of the help tool tip.
     * @default null
     * @string
     */
    helpTitle: null,

    /**
     * Delay in millseconds before showing the
     * help tooltip.
     * @default 500
     * @integer
     */
    helpTooltipDelay: 250,

    /**
     * Delay in milliseconds before hiding the
     * help tooltip.
     * @default 10000
     * @integer
     */
    helpTooltipDismissDelay: 10000,

    /**
     * Property which holds of the DOM element of the support text.
     * @default null
     * @object
     */
    supportTextEl: null,

    /**
     * Property which holds of the help icon to display the help text
     * in a tool tip.
     * @default null
     * @object
     */
    helpIconEl: null,

    /**
     * Using the "afterRender()"-method we're injecting
     * the support and help texts into the form elements.
     *
     * @private
     * @return void
     */
    afterRender: function () {
        var me = this;
        me.callParent(arguments);

        if(me.helpText) {
            me.createHelp();
        }

        if(me.supportText) {
            me.createSupport();
        }
    },

    /**
     * Creates the support text and inject it into the form element.
     *
     * @public
     * @return [object] supportText - DOM element
     */
    createSupport:function () {
        var me = this,
            row = new Ext.Element(document.createElement('tr')),
            fillCell = new Ext.Element(document.createElement('td')),
            cell = new Ext.Element(document.createElement('td')),
            supportText = new Ext.Element(document.createElement('div'));

        supportText.set({
            cls: Ext.baseCSSPrefix +'form-support-text'
        });

        if(me.supportText) {
            supportText.update(me.supportText);
        }

        supportText.appendTo(cell);

        // If we're finding more than one item, just use the first one :)
        var element = me.getEl().select('tbody');
        if(element.elements.length > 1) {
            element = element.elements[0];
        }

        if(me.fieldLabel || !me.hideEmptyLabel) {
            fillCell.appendTo(row);
        }

        cell.appendTo(row);

        if(me.helpText) {
            var tmpCell = new Ext.Element(document.createElement('td'));
            tmpCell.appendTo(row);
        }

        row.appendTo(element);
        me.supportTextEl = supportText;
        return supportText;
    },

    /**
     * Creates the help text element. The method creates an new
     * image which displays a tool tip with the help text on hover.
     *
     * @public
     * @return [object] helpIcon - DOM element
     */
    createHelp:function () {
        var me = this,
            helpIcon = new Ext.Element(document.createElement('span')),
            row = new Ext.Element(document.createElement('td'));

        row.set({ width: 24, valign: 'top' });
        helpIcon.set({ cls: Ext.baseCSSPrefix + 'form-help-icon' });
        helpIcon.appendTo(row);

        Ext.tip.QuickTipManager.register({
            target:helpIcon,
            cls: Ext.baseCSSPrefix + 'form-tooltip',
            title:(me.helpTitle) ? me.helpTitle : '',
            text:me.helpText,
            width:(me.helpWidth) ? me.helpWidth : 225,
            anchorToTarget: true,
            anchor: 'right',
            anchorSize: {
                width: 24,
                height: 24
            },
            defaultAlign: 'tr',
            showDelay: me.helpTooltipDelay,
            dismissDelay: me.helpTooltipDismissDelay
        });

        row.appendTo(this.inputRow);

        this.helpIconEl = helpIcon;
        return helpIcon;
    }
});
<?php }} ?>