<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:26:18
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/config/view/element/date_time.js" */ ?>
<?php /*%%SmartyHeaderCode:10859833315784635aae49a8-11960216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31eaa1799c85750bba703388a3f4928f401512dd' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/config/view/element/date_time.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10859833315784635aae49a8-11960216',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5784635ab2a362_58670622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784635ab2a362_58670622')) {function content_5784635ab2a362_58670622($_smarty_tpl) {?>/**
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
 * todo@all: Documentation
 */
Ext.define('Shopware.apps.Config.view.element.DateTime', {
    extend:'Ext.form.FieldContainer',
    alias: [
        'widget.config-element-datetime'
    ],

    mixins: {
        field: 'Ext.form.field.Field'
    },
    layout: 'fit',
    timePosition: 'right', // valid values:'below', 'right'
    dateCfg:{},
    timeCfg:{},
    allowBlank: true,

    initComponent: function() {
        var me = this;

        if(!me.value) {
            me.value = null;
        } else if (typeof(me.value) == 'string') {
            me.value = me.value.replace(' ', 'T');
            me.value += '+00:00';
            me.value = new Date(me.value);
            me.value = new Date((me.value.getTime() + (me.value.getTimezoneOffset() * 60 * 1000)));
        }

        me.buildField();
        me.callParent();
        me.dateField = me.down('datefield');
        me.timeField = me.down('timefield');
        me.initField();
    },

    //@private
    buildField: function() {
        var me = this,
            l,
            d;
        if (me.timePosition == 'below') {
            l = { type: 'anchor' };
            d = { anchor: '100%' };
        } else {
            l = { type: 'hbox', align: 'middle' };
            d = { flex: 1 };
        }
        this.items = {
            xtype: 'container',
            layout: l,
            defaults: d,
            items: [Ext.apply({
                xtype: 'datefield',
                //format: 'Y-m-d',
                disabled: me.disabled,
                value: me.value,
                width: me.timePosition != 'below' ? 100 : undefined,
                allowBlank: me.allowBlank,
                listeners: {
                    specialkey: me.onSpecialKey,
                    scope: me
                },
                isFormField: false // prevent submission
            }, me.dateCfg), Ext.apply({
                xtype: 'timefield',
                submitFormat: 'H:i:s',
                disabled: me.disabled,
                value: me.value,
                margin: me.timePosition != 'below' ? '0 0 0 3' : 0,
                width: me.timePosition != 'below' ? 80 : undefined,
                allowBlank: me.allowBlank,
                listeners: {
                    specialkey: me.onSpecialKey,
                    scope: me
                },
                isFormField: false // prevent submission
            }, me.timeCfg)]
        };
    },

    focus: function() {
        this.callParent();
        this.dateField.focus(false, 100);
    },

    // Handle tab events
    onSpecialKey:function(cmp, e) {
        var key = e.getKey();
        if (key === e.TAB) {
            if (cmp == this.dateField) {
                // fire event in container if we are getting out of focus from datefield
                if (e.shiftKey) {
                    this.fireEvent('specialkey', this, e);
                }
            }
            if (cmp == this.timeField) {
                if (!e.shiftKey) {
                    this.fireEvent('specialkey', this, e);
                }
            }
        } else if (this.inEditor) {
            this.fireEvent('specialkey', this, e);
        }
    },

    getValue: function() {
        var value, date = this.dateField.getSubmitValue(), time = this.timeField.getSubmitValue();
        if (date) {
            if (time) {
                var format = this.getFormat();
                value = Ext.Date.parse(date + ' ' + time, format);
            } else {
                value = this.dateField.getValue();
            }
        }
        return value
    },

    setValue: function(value) {
        this.dateField.setValue(value);
        this.timeField.setValue(value);
    },

    getSubmitData: function() {
        var value = this.getValue();
        var format = this.getFormat();
        return value ? Ext.Date.format(value, format) : null;
    },

    getFormat: function() {
        return (this.dateField.submitFormat || this.dateField.format) + " " + (this.timeField.submitFormat || this.timeField.format)
    },

    getErrors: function() {
        return this.dateField.getErrors().concat(this.timeField.getErrors());
    },

    validate: function() {
        if (this.disabled)
            return true;
        else {
            var isDateValid = this.dateField.validate();
            var isTimeValid = this.timeField.validate();
            return isDateValid && isTimeValid;
        }
    },

    reset: function() {
        this.mixins.field.reset();
        this.dateField.reset();
        this.timeField.reset();
    }
});
<?php }} ?>