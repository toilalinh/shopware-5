<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:25:58
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.MediaGrid.js" */ ?>
<?php /*%%SmartyHeaderCode:206926186057846346ca11b2-55276908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b5287ad50fd4f49f032defb553a145aa9889cd2' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.MediaGrid.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206926186057846346ca11b2-55276908',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57846346cc8035_08607111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57846346cc8035_08607111')) {function content_57846346cc8035_08607111($_smarty_tpl) {?>/**
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

Ext.define('Shopware.form.field.MediaGrid', {
    extend: 'Shopware.form.field.GridView',
    cls: 'media-multi-selection',
    alias: 'widget.shopware-form-field-media-grid',
    baseBodyCls: Ext.baseCSSPrefix + 'form-item-body media-multi-selection-body',

    createToolbarItems: function() {
        var me = this;
        var items = me.callParent(arguments);

        if (me.helpText) {
            items.push('->');
            items.push(me.createHelp(me.helpText));
        }
        return items;
    },

    createItemTemplate: function() {
        return '' +
            '<img src="{thumbnail}" title="{name}" />' +
        '';
    },

    createSearchField: function() {
        var me = this;

        me.selectButton = Ext.create('Ext.button.Button', {
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"media/grid/select_media",'namespace'=>'backend/attributes/fields')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"media/grid/select_media",'namespace'=>'backend/attributes/fields'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Select media<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"media/grid/select_media",'namespace'=>'backend/attributes/fields'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            iconCls: 'sprite-inbox-select',
            handler: function() {
                me.openMediaManager()
            }
        });
        return me.selectButton;
    },

    openMediaManager: function() {
        var me = this;

        Shopware.app.Application.addSubApplication({
            name: 'Shopware.apps.MediaManager',
            layout: 'small',
            eventScope: me,
            mediaSelectionCallback: me.onSelectMedia,
            selectionMode: true
        });
    },

    onSelectMedia: function(button, window, selection) {
        var me = this;

        Ext.each(selection, function(record) {
            me.addItem(record);
        });

        window.close();
    },

    insertGlobeIcon: function(icon) {
        var me = this;
        icon.set({
            cls: Ext.baseCSSPrefix + 'translation-globe sprite-globe',
            style: 'position: absolute;width: 16px; height: 16px;display:block;cursor:pointer;top:6px;right:8px;'
        });
        if (me.searchField.el) {
            icon.insertAfter(me.searchField.el);
        }
    },

    createHelp:function (text) {
        var icon = Ext.create('Ext.Component', {
            html: '<span style="margin-top: 4px !important;" class="'+Ext.baseCSSPrefix + 'form-help-icon'+'"></span>',
            width: 24,
            height: 24,
            margin: '0 30 0 0'
        });

        icon.on('afterrender', function() {
            Ext.tip.QuickTipManager.register({
                target: icon.el,
                cls: Ext.baseCSSPrefix + 'form-tooltip',
                title: '',
                text: text,
                width: 225,
                anchorToTarget: true,
                anchor: 'right',
                anchorSize: {
                    width: 24,
                    height: 24
                },
                defaultAlign: 'tr',
                showDelay: 250,
                dismissDelay: 10000
            });
        });

        return icon;
    }
});<?php }} ?>