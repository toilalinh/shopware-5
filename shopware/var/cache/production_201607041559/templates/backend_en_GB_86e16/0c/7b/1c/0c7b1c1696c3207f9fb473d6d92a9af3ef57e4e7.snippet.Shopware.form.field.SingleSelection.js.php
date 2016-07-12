<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:25:58
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.SingleSelection.js" */ ?>
<?php /*%%SmartyHeaderCode:36277871857846346c6ade0-13705388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c7b1c1696c3207f9fb473d6d92a9af3ef57e4e7' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.SingleSelection.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36277871857846346c6ade0-13705388',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57846346c9ca22_76832709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57846346c9ca22_76832709')) {function content_57846346c9ca22_76832709($_smarty_tpl) {?>/**
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
 * @category    Shopware
 * @package     Base
 * @subpackage  Attribute
 * @version     $Id$
 * @author      shopware AG
 */

//

Ext.define('Shopware.form.field.SingleSelection', {
    extend: 'Ext.form.FieldContainer',
    alias: 'widget.shopware-form-field-single-selection',
    layout: 'anchor',
    defaults: { anchor: '100%' },
    baseBodyCls: Ext.baseCSSPrefix + 'form-item-body shopware-single-selection-form-item-body',

    mixins: {
        formField: 'Ext.form.field.Base',
        factory: 'Shopware.attribute.SelectionFactory'
    },

    initComponent: function() {
        var me = this;
        var store = me.store;
        me.store = Ext.create('Ext.data.Store', {
            model: store.model,
            proxy: store.getProxy()
        });
        me.items = me.createItems();

        me.callParent(arguments);
    },

    insertGlobeIcon: function(icon) {
        var me = this;
        icon.set({
            cls: Ext.baseCSSPrefix + 'translation-globe sprite-globe',
            style: 'position: absolute;width: 16px; height: 16px;display:block;cursor:pointer;top:6px;right:26px;'
        });
        if (me.combo && me.combo.inputEl) {
            icon.insertAfter(me.combo.inputEl);
        }
    },

    createItems: function() {
        var items = [this.createSearchField()];

        if (this.supportText) {
            items.push(this.createSupportText(this.supportText));
        }
        return items;
    },

    createSupportText: function(supportText) {
        return Ext.create('Ext.Component', {
            html: '<div>'+supportText+'</div>',
            cls: Ext.baseCSSPrefix +'form-support-text'
        });
    },

    createSearchField: function() {
        var me = this, events;
        var config = me.getComboConfig();

        var fireComboBoxEvents = function(event) {
            me.combo.on(event, function () {
                var args = [event];
                for (var i = 0; i <= arguments.length; i++) {
                    args.push(arguments[i]);
                }
                return me.fireEvent.apply(me, args);
            });
        };

        if (!config.displayField && !config.tpl) {
            config = me.addDynamicDisplayField(config);
        }

        me.combo = Ext.create('Ext.form.field.ComboBox', config);
        events = Object.keys(me.combo.events);
        Ext.each(events, fireComboBoxEvents);

        return me.combo;
    },

    addDynamicDisplayField: function(config) {
        var me = this;

        config.tpl = Ext.create('Ext.XTemplate',
            '<tpl for=".">',
                '<div class="x-boundlist-item">{[this.getRecordLabel(values)]}</div>',
            '</tpl>',
            {
                getRecordLabel: function(values) {
                    return me.getLabelOfObject(values);
                }
            }
        );

        config.displayTpl = Ext.create('Ext.XTemplate',
            '<tpl for=".">',
                '{[this.getRecordLabel(values)]}',
            '</tpl>',
            {
                getRecordLabel: function(values) {
                    return me.getLabelOfObject(values);
                }
            }
        );

        return config;
    },

    getComboConfig: function() {
        var me = this;

        return {
            helpText: me.helpText,
            helpTitle: me.helpTitle,
            valueField: 'id',
            queryMode: 'remote',
            store: me.store,
            isFormField: false,
            pageSize: me.store.pageSize,
            labelWidth: 180,
            minChars: 2
        };
    },

    getValue: function() {
        return this.combo.getValue();
    },

    setValue: function(value) {
        var me = this;

        if (value && !Ext.isObject(value)) {
            me.store.load({
                params: { ids: Ext.JSON.encode([value]) },
                callback: function(records) {
                    me.combo.setValue(records);
                }
            });
            return;
        }
        if (!value) {
            me.combo.clearValue();
        } else {
            me.combo.setValue(value);
        }
    },

    getSubmitData: function() {
        var value = { };
        value[this.name] = this.getValue();
        return value;
    }
});<?php }} ?>