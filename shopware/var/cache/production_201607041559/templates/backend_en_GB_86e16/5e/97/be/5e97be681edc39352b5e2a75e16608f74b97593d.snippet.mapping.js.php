<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:26:06
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/article/view/image/mapping.js" */ ?>
<?php /*%%SmartyHeaderCode:5069357785784634ea35c13-54220752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e97be681edc39352b5e2a75e16608f74b97593d' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/article/view/image/mapping.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5069357785784634ea35c13-54220752',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5784634eb1f9a1_16463482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784634eb1f9a1_16463482')) {function content_5784634eb1f9a1_16463482($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage Detail
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware UI - Article Image Mapping window.
 */
//
//
Ext.define('Shopware.apps.Article.view.image.Mapping', {
    /**
     * Define that the order main window is an extension of the enlight application window
     * @string
     */
    extend:'Enlight.app.Window',
    /**
     * Set base css class prefix and module individual css class for css styling
     * @string
     */
    cls:Ext.baseCSSPrefix + 'article-image-mapping-window',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.article-image-mapping-window',
    /**
     * Set no border for the window
     * @boolean
     */
    border:false,
    /**
     * True to automatically show the component upon creation.
     * @boolean
     */
    autoShow:true,
    /**
     * Set border layout for the window
     * @string
     */
    layout:'fit',
    /**
     * Define window width
     * @integer
     */
    width:480,
    /**
     * Define window height
     * @integer
     */
    height:380,
    /**
     * True to display the 'maximize' tool button and allow the user to maximize the window, false to hide the button and disallow maximizing the window.
     * @boolean
     */
    maximizable:true,

    /**
     * True to display the 'minimize' tool button and allow the user to minimize the window, false to hide the button and disallow minimizing the window.
     * @boolean
     */
    minimizable:true,

    /**
     * A flag which causes the object to attempt to restore the state of internal properties from a saved state on startup.
     */
    stateful:true,

    /**
     * The unique id for this object to use for state management purposes.
     */
    stateId:'shopware-article-image-mapping-window',

    /**
     * Contains all snippets for this component
     * @object
     */
    snippets: {
        title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image'/'mapping'/'title','default'=>'Image mapping','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'mapping'/'title','default'=>'Image mapping','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Image mapping<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'mapping'/'title','default'=>'Image mapping','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        cancel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'cancel_button','default'=>'Cancel','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'cancel_button','default'=>'Cancel','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cancel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'cancel_button','default'=>'Cancel','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        save: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'general'/'save_button','default'=>'Save','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'general'/'save_button','default'=>'Save','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'general'/'save_button','default'=>'Save','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
	 * The initComponent template method is an important initialization step for a Component.
     * It is intended to be implemented by each subclass of Ext.Component to provide any needed constructor logic.
     * The initComponent method of the class being created is called first,
     * with each initComponent method up the hierarchy to Ext.Component being called thereafter.
     * This makes it easy to implement and, if needed, override the constructor logic of the Component at any step in the hierarchy.
     * The initComponent method must contain a call to callParent in order to ensure that the parent class' initComponent method is also called.
	 *
	 * @return void
	 */
    initComponent: function() {
        var me = this;
        me.store = me.copyStore();
        me.items = [ me.createGrid() ];
        me.dockedItems = me.createDockedItems();
        me.title = me.snippets.title;
        me.callParent(arguments);
    },

    copyStore: function() {
        var me = this;

        var store = Ext.create('Ext.data.Store', { model: 'Shopware.apps.Article.model.MediaMapping' });
        if (me.record && me.record.getMappings() instanceof Ext.data.Store && me.record.getMappings().getCount() > 0) {
            me.record.getMappings().each(function(mapping) {
                store.add(mapping);
            });
        }
        return store;
    },

    /**
     * Creates the docked items for this component
     * @return Array
     */
    createDockedItems: function() {
        var me = this;
        return [ me.createTopBar(), me.createBottomBar() ];
    },

    /**
     * Creates the grid panel which displays all defined image mappings.
     * @return Ext.grid.Panel
     */
    createGrid: function() {
        var me = this;

        me.mappingGrid = Ext.create('Ext.grid.Panel', {
            name: 'mapping-grid',
            store: me.store,
            selModel: me.getGridSelModel(),
            columns: [
                {
                    header: me.snippets.title,
                    dataIndex: 'rules',
                    flex: 1,
                    renderer: me.mappingColumnRenderer
                },
                me.createActionColumn()
            ]
        });
        return me.mappingGrid;
    },

    /**
     * Creates the grid selection model for checkboxes
     *
     * @return [Ext.selection.CheckboxModel] grid selection model
     */
    getGridSelModel:function () {
    	var me = this;

    	return Ext.create('Ext.selection.CheckboxModel', {
    		listeners:{
    			// Unlocks the save button if the user has checked at least one checkbox
    			selectionchange:function (sm, selections) {
    				if (me.deleteButton === null) {
    					return;
    				}
    				me.deleteButton.setDisabled(selections.length === 0);
    			}
    		}
    	});
    },

    /**
     * Creates the action column for the mapping grid.
     * @return Ext.grid.column.Action
     */
    createActionColumn: function() {
        var me = this;

        return Ext.create('Ext.grid.column.Action', {
            width: 30,
            items: [ me.createDeleteItem() ]
        });
    },

    /**
     * Creates the delete action column item for the mapping grid.
     * @return Object
     */
    createDeleteItem: function() {
        var me = this;

        return {
            iconCls:'sprite-minus-circle-frame',
            handler: function (view, rowIndex, colIndex, item, opts, record) {
                me.mappingGrid.getStore().remove(record);
            }
        };
    },

    /**
     * Renderer function of the mapping column. Iterates the defined
     * rules and displays the configured configurator options as string.
     * @return string
     */
    mappingColumnRenderer: function(value, metaData, record) {
        var me = this;

        if (record instanceof Ext.data.Model &&
            record.getRules() instanceof Ext.data.Store &&
            record.getRules().getCount() > 0) {

            var optionNames = [];
            record.getRules().each(function(item) {
                if (item instanceof Ext.data.Model && item.getOption() && item.getOption().first()) {
                    optionNames.push(item.getOption().first().get('name'));
                }
            });
            return optionNames.join(' > ');

        } else {
            return '';
        }
    },

    createTopBar: function() {
        var me = this;

        me.addButton = Ext.create('Ext.button.Button', {
            iconCls:'sprite-plus-circle-frame',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image'/'mapping'/'add_button','default'=>'Add mapping','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'mapping'/'add_button','default'=>'Add mapping','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add mapping<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'mapping'/'add_button','default'=>'Add mapping','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler: function() {
                me.fireEvent('displayNewRuleWindow', me);
            }
        });

        me.deleteButton = Ext.create('Ext.button.Button', {
            iconCls:'sprite-minus-circle-frame',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image'/'mapping'/'delete_button','default'=>'Delete all selected','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'mapping'/'delete_button','default'=>'Delete all selected','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete all selected<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'mapping'/'delete_button','default'=>'Delete all selected','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            disabled: true,
            handler: function() {
                var selectionModel = me.mappingGrid.getSelectionModel(),
                    records = selectionModel.getSelection();

                if (records && records.length > 0) {
                    me.mappingGrid.getStore().remove(records);
                }
            }
        });

        return Ext.create('Ext.toolbar.Toolbar', {
            dock: 'top',
            items: [  me.addButton, me.deleteButton ]
        });
    },

    /**
     * Creates the bottom bar for the mapping window.
     */
    createBottomBar: function() {
        var me = this;

        me.saveButton = Ext.create('Ext.button.Button', {
            cls: 'primary',
            text: me.snippets.save,
            handler: function() {
                me.fireEvent('saveMapping', me);
            }
        });

        me.cancelButton = Ext.create('Ext.button.Button', {
            cls: 'secondary',
            text: me.snippets.cancel,
            handler: function() {
                me.fireEvent('cancel', me);
            }
        });

        return Ext.create('Ext.toolbar.Toolbar', {
            dock: 'bottom',
            items: [ '->', me.cancelButton, me.saveButton ]
        });
    }

});
//
<?php }} ?>