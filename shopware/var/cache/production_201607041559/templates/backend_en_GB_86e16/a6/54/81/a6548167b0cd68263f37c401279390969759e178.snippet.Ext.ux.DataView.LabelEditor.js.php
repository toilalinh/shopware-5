<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:25:56
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/engine/Library/ExtJs/components/Ext.ux.DataView.LabelEditor.js" */ ?>
<?php /*%%SmartyHeaderCode:16878838905784634478a3e3-85660491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6548167b0cd68263f37c401279390969759e178' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/engine/Library/ExtJs/components/Ext.ux.DataView.LabelEditor.js',
      1 => 1467622778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16878838905784634478a3e3-85660491',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57846344799bb8_38251076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57846344799bb8_38251076')) {function content_57846344799bb8_38251076($_smarty_tpl) {?>/*

This file is part of Ext JS 4

Copyright (c) 2011 Sencha Inc

Contact:  http://www.sencha.com/contact

Commercial Usage
Licensees holding valid commercial licenses may use this file in accordance with the Commercial Software License Agreement provided with the Software or, alternatively, in accordance with the terms contained in a written agreement between you and Sencha.

If you are unsure which license is appropriate for your use, please contact the sales department at http://www.sencha.com/contact.

*/
/**
 * @class Ext.ux.DataView.LabelEditor
 * @extends Ext.Editor
 */
Ext.define('Ext.ux.DataView.LabelEditor', {

    extend: 'Ext.Editor',

    alignment: 'tl-tl',

    completeOnEnter: true,

    cancelOnEsc: true,

    shim: false,

    autoSize: {
        width: 'boundEl',
        height: 'field'
    },

    labelSelector: 'x-editable',

    requires: [
        'Ext.form.field.Text'
    ],

    constructor: function(config) {
        config.field = config.field || Ext.create('Ext.form.field.Text', {
            allowBlank: false,
            selectOnFocus:true
        });
        this.callParent([config]);
    },

    init: function(view) {
        this.view = view;
        this.mon(view, 'render', this.bindEvents, this);
        this.on('complete', this.onSave, this);
    },

    // initialize events
    bindEvents: function() {
        this.mon(this.view.getEl(), {
            click: {
                fn: this.onClick,
                scope: this
            }
        });
    },

    // on mousedown show editor
    onClick: function(e, target) {
        var me = this,
            item, record;

        if (Ext.fly(target).hasCls(me.labelSelector) && !me.editing && !e.ctrlKey && !e.shiftKey) {
            e.stopEvent();
            item = me.view.findItemByChild(target);
            record = me.view.store.getAt(me.view.indexOf(item));
            me.startEdit(target, record.data[me.dataIndex]);
            me.activeRecord = record;
        } else if (me.editing) {
            me.field.blur();
            e.preventDefault();
        }
    },

    // update record
    onSave: function(ed, value) {
        this.activeRecord.set(this.dataIndex, value);
    }
});<?php }} ?>