<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:26:18
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/config/view/base/form.js" */ ?>
<?php /*%%SmartyHeaderCode:11515409895784635a7fc554-31666340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5f23f8082881c3a0a44567e0be83ae42eb7dbb7' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/config/view/base/form.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11515409895784635a7fc554-31666340',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5784635a860599_11888631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784635a860599_11888631')) {function content_5784635a860599_11888631($_smarty_tpl) {?>/**
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

//

//
Ext.define('Shopware.apps.Config.view.base.Form', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.config-base-form',

    layout: 'border',
    border: false,

    deletable: true,
    addable: true,

    initComponent: function() {
        var me = this;

        Ext.applyIf(me, {
            items: me.getItems()
        });

        me.addEvents(
            'delete', 'edit'
        );

        me.callParent(arguments);
    },

    getDetail: function() {
        return this.down('config-base-detail');
    },

    getTable: function() {
        return this.down('config-base-table');
    },

    getDeleteButton: function() {
        return this.down('config-base-table button[action=delete]');
    },

    getItems: function() {
		return [];
    },

    getActionColumn: function() {
        var me = this,
			items = [];
        if(me.deletable) {
        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
            items.push({
                iconCls: 'sprite-minus-circle-frame',
                action: 'delete',
                tooltip:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'form'/'delete_tooltip','default'=>'Delete (ALT + DELETE)','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'delete_tooltip','default'=>'Delete (ALT + DELETE)','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete (ALT + DELETE)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'delete_tooltip','default'=>'Delete (ALT + DELETE)','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                handler: function (view, rowIndex, colIndex, item, opts, record) {
                    me.fireEvent('delete', me, record);
                },
                getClass: function(value, metadata, record, rowIdx) {
                    if (record.get('deletable') === false)  {
                        return 'x-hidden';
                    }
                }
            });
        /* <?php }?> */
        }
        if(true) {
        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'update'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>*/
            items.push({
                iconCls: 'sprite-pencil',
                action: 'edit',
                tooltip: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'form'/'edit_tooltip','default'=>'Edit','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'edit_tooltip','default'=>'Edit','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'edit_tooltip','default'=>'Edit','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                handler: function (view, rowIndex, colIndex, item, opts, record) {
                    me.fireEvent('edit', me, record);
                }
            });
        /* <?php }?> */
        }
        return {
            xtype: 'actioncolumn',
            width: 70,
            items: items
        };
    }
});
//
<?php }} ?>