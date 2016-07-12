<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:27:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/supplier/controller/main.js" */ ?>
<?php /*%%SmartyHeaderCode:1406534913578463aa416685-17783415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '613cc882bb10ef205b5ed3f4a31039c1a8259d6e' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/supplier/controller/main.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1406534913578463aa416685-17783415',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463aa4f8d94_70807041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463aa4f8d94_70807041')) {function content_578463aa4f8d94_70807041($_smarty_tpl) {?>/**
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
 * @package    Supplier
 * @subpackage Controller
 * @version    $Id$
 * @author shopware AG
 */

/**/

/**
 * Shopware Controller - Supplier
 *
 * Backend - Management for Suppliers. Create | Modify | Delete and Logo Management.
 * Default supplier view. Extends a grid view.
 */
// 
Ext.define('Shopware.apps.Supplier.controller.Main', {
    /**
     * Extend from the standard ExtJS 4
     * @string
     */
    extend : 'Ext.app.Controller',

    /**
     * ExtJS Shortcuts
     */
    refs : [
        /**
         * Addresses the main grid
         */
        { ref : 'grid', selector : 'supplier-main-list' },

        /**
         * Address the detail view in the main window
         */
        { ref : 'detailView', selector : 'supplier-main-detail' },

        /**
         * Image in the detailView
         */
        { ref : 'detailViewImage', selector : 'supplier-main-detail img' }
    ],

    /**
     * Contains all text messages for this controller
     * @object
     */
    messages: {
        deleteDialogMessage : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'dialog_text','default'=>'Are you sure you want to delete this supplier ([0])?','namespace'=>'backend/supplier/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'dialog_text','default'=>'Are you sure you want to delete this supplier ([0])?','namespace'=>'backend/supplier/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to delete this manufacturer ([0])?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'dialog_text','default'=>'Are you sure you want to delete this supplier ([0])?','namespace'=>'backend/supplier/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        deleteDialogMessageMulti : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'dialog_multi','default'=>'Are you sure you want to delete these suppliers ([0])?','namespace'=>'backend/supplier/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'dialog_multi','default'=>'Are you sure you want to delete these suppliers ([0])?','namespace'=>'backend/supplier/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to delete these manufacturers ([0])?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'dialog_multi','default'=>'Are you sure you want to delete these suppliers ([0])?','namespace'=>'backend/supplier/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        deleteDialogForbidden : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'delete_forbidden','default'=>'Suppliers with assigned articles can not be deleted.','namespace'=>'backend/supplier/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_forbidden','default'=>'Suppliers with assigned articles can not be deleted.','namespace'=>'backend/supplier/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Manufacturers with assigned items can not be deleted.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_forbidden','default'=>'Suppliers with assigned articles can not be deleted.','namespace'=>'backend/supplier/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        noDescriptionFound :'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'details_no_description','default'=>'No description saved','namespace'=>'backend/supplier/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'details_no_description','default'=>'No description saved','namespace'=>'backend/supplier/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No description has been saved.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'details_no_description','default'=>'No description saved','namespace'=>'backend/supplier/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        deleteDialogSuccess :'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'dialog_multi_success','default'=>'Supplier has been deleted successfully.','namespace'=>'backend/supplier/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'dialog_multi_success','default'=>'Supplier has been deleted successfully.','namespace'=>'backend/supplier/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Manufacturer has been deleted successfully.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'dialog_multi_success','default'=>'Supplier has been deleted successfully.','namespace'=>'backend/supplier/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        saveDialogSuccess :'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'dialog_save_success','default'=>'Supplier has been saved successfully.','namespace'=>'backend/supplier/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'dialog_save_success','default'=>'Supplier has been saved successfully.','namespace'=>'backend/supplier/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Manufacturer has been saved successfully.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'dialog_save_success','default'=>'Supplier has been saved successfully.','namespace'=>'backend/supplier/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        deleteDialogFailure :'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'dialog_multi_error','default'=>'Some suppliers could not be removed.','namespace'=>'backend/supplier/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'dialog_multi_error','default'=>'Some suppliers could not be removed.','namespace'=>'backend/supplier/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Some manufacturers could not be deleted.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'dialog_multi_error','default'=>'Some suppliers could not be removed.','namespace'=>'backend/supplier/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        deleteDialogTitle : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'delete_dialog_title','default'=>'Delete selected supplier','namespace'=>'backend/supplier/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_dialog_title','default'=>'Delete selected supplier','namespace'=>'backend/supplier/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete selected manufacturer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_dialog_title','default'=>'Delete selected supplier','namespace'=>'backend/supplier/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
		growlMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window_title','namespace'=>'backend/supplier/controller/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window_title','namespace'=>'backend/supplier/controller/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Manufacturer management<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window_title','namespace'=>'backend/supplier/controller/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Creates the necessary event listener for this
     * specific controller and opens a new Ext.window.Window
     * to display the sub-application
     *
     * beware: there is some controller logic in edit.js view.
     *          This is because of the special handling of the
     *          upload method.
     * @return void
     */
    init: function () {
        var me = this;

        this.control({
            // Listener for the Add a new Supplier Action
            'supplier-main-toolbar button[action=addSupplier]' : {
                'click' : function () {
                    /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'create'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
                    this.onCreateSupplier();
                    /*<?php }?> */
                }
            },
            'grid': {
                itemclick : me.onShowDetails,
                selectionchange : me.onSelectionChange
            },
            // Listener for the delete Logo button in the edit view
            'supplier-main-edit button[action=deleteLogo]' : {
                'click' : function (btn) {
                    /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'update'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>*/
                    this.onDeleteLogo(btn);
                    /* <?php }?> */
                }
            },
            // Listener for saving the supplier info
            'supplier-main-create button[action=saveSupplier]' : {
                'click' : function(btn) {
                    /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'create'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?>*/
                    this.onSupplierSave(btn);
                    /* <?php }?> */

                }
            },
            // Listener for saving the modified supplier logo
            'supplier-main-edit button[action=saveSupplier]' : {
                'click' : function(btn) {
                    /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'update'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4){?>*/
                    this.onSupplierSave(btn);
                    /* <?php }?> */
                }
            },
            // Listener for the mass delete button in default view
            'supplier-main-toolbar button[action=deleteSupplier]' : {
                /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5){?>*/
                'click' : this.onDeleteMultipleSuppliers
                /* <?php }?> */

            },
            // Listener for the default search
            'supplier-main-toolbar textfield[action=searchSupplier]' : {
                keyup : this.onSearch
            },

            // Listener for the action column in the grid
            'supplier-main-list actioncolumn': {
                render : function (view) {
                    view.scope = me;
                    view.handler = me.handleActionColumn;
                }
            }
        });

        me.mainWindow = me.getView('Main').create({
            supplierStore: me.getStore('Supplier')
        });

        /**
         * Keeps track of the current selection
         * @array
         */
        me.mainWindow.show();
    },

    /**
     * Toggles the delete button in the toolbar
     *
     * @param sm Ext.selection.Model
     * @param selection array of Ext.data.Model
     * @return void
     */
    onSelectionChange: function(sm, selection) {
        var me = this,
            deleteButton = me.mainWindow.down('button[action=deleteSupplier]'),
            allowDelete = true;

        // hide detail panel if there are more than one item selected
        if (selection.length > 1 ) {
            me.getDetailView().collapse(false);
        }

        // check for assigned articles
        Ext.each(selection, function(element) {
            if (element.get('articleCounter') !== 0) {
                // remove supplier from selection if there are still articles assigned to it
                sm.deselect(element);
            }
        });

        selection = sm.getSelection();

        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php if (!$_tmp6){?>*/
        allowDelete = false;
        /* <?php }?> */

        // show details and enable delete button
        if (selection.length > 0 ) {
            if(allowDelete) {
                deleteButton.setDisabled(false);
            }
        } else {
            deleteButton.setDisabled(true);
        }

    },

    /**
     * This method will be called if the user hits the save button either in the edit window or
     * in the add supplier window
     *
     * @param btn Ext.button.Button
     * @return void
     */
    onSupplierSave: function(btn) {
        var win     = btn.up('window'), // Get Window
            form    = win.down('form'), // Get the DOM Form used in that window
            formBasis = form.getForm(), // Extract the form from the DOM
            me      = this,             // copy the current scope to me, because the 'this' scope tends to change
            store   = me.getStore('Supplier'), // load the supplier store
            record  = form.getRecord(),   // retrieve the record
            detailViewData = me.getDetailView().dataView,   // Detail view
            detailView = me.getDetailView();                // Detail View manager

        if (!(record instanceof Ext.data.Model)){
            record = Ext.create('Shopware.apps.Supplier.model.Supplier');
        }

        formBasis.updateRecord(record);

        // Check if there the form is valid -> see model/supplier.js
        if (formBasis.isValid()) {
            record.save({
                callback: function() {
                    // save attributes
                    win.attributeForm.saveAttribute(record.getId());
                    // reload the store
                    store.load();
                    // and close the window.
                    win.close();
                    detailViewData.update(record);
                    detailView.collapse(false);
                    Shopware.Msg.createGrowlMessage('',me.messages.saveDialogSuccess, me.messages.growlMessage);
                }
            });
        }
    },

    /**
     * Event listener method which fires when the user clicks on
     * a item in the grid.
     *
     * Shows detail information about the selected item.
     *
     * @event itemclick
     * @param [object] view - Ext.grid.Panel
     * @param [object] record - Associated Ext.data.Model from the clicked iten
     * @return void
     */
    onShowDetails: function(view, record, item, rowIndex, event, options) {
        var me = this,
            detailView = me.getDetailView().dataView,
            domEl = event.getTarget(),
            element = Ext.get(domEl);

        if(!element.hasCls('x-grid-row-checker')) {
            if (!record.get('description')) {
                record.data.description = me.messages.noDescriptionFound;
            }
            detailView.update(record.data);
        }
    },

    /**
     * Deletes the logo
     *
     * @param [object] btn - Object which received the click. E.g. a delete button
     * @return void
     */
    onDeleteLogo: function (btn) {
        var win         = btn.up('window'),
            form        = win.down('form'),
            me          = this,
            formBasis   = form.getForm(),
            store   = me.getStore('Supplier'),
            detailViewData = me.getDetailView().dataView,
            detailView = me.getDetailView(),
            record      = form.getRecord();

        // remove the data from the model
        record.set('image', '');
        form.remove('supplierLogoImg');
        form.loadRecord(record);
        if (formBasis.isValid()) {
            record.save({
                scope: me,
                callback: function() {
                    // reload the store
                    store.load( );
                    win.close();
                    // refresh and reload the detail view and then hide it
                    detailViewData.update(record);
                    detailView.collapse(false);
                }
            });
        }
    },

    /**
     * Handling the search in the grid
     * @event keypressed
     * @param [object] field - Input field in which the search string has been put
     */
    onSearch : function (field) {
        var me = this,
            store = me.getStore('Supplier');

        if (field.value.length === 0) {
            store.clearFilter();
            return false;
        }
        store.filters.clear();
        store.filter('name', field.value);

        return true;
    },

    /**
     * Helper method which handles all clicks of the action column
     *
     * @param [object] view - The view
     * @param [integer] rowIndex - On which row position has been clicked
     * @param [integer] colIndex - On which column position has been clicked
     * @param [object] item - The item that has been clicked
     * @return void
     */
    handleActionColumn : function (view, rowIndex, colIndex, item) {
        var me = this.scope;

        switch (item.action) {
            case 'edit':
                me.onEditSupplier(view, item, rowIndex);
                break;
            case 'delete':
                me.onDeleteSingleSupplier(view, rowIndex);
                break;
            default:
                break;
        }
    },

    /**
     * Opens the Ext.window.window which displays
     * the Ext.form.Panel to create a new supplier
     *
     * @event click
     * @return void
     */
    onCreateSupplier: function () {
        var me = this;

        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'create'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7){?>*/
        me.getView('main.Create').create({
            mainStore: me.getStore('Supplier')
        }).show();
        /* <?php }?> */
    },

    /**
     * Opens the Ext.window.window which displays
     * the Ext.form.Panel to modify an existing supplier
     *
     * @event click
     * @param [object]  view - The view. Is needed to get the right store
     * @param [object]  item - The row which is affected
     * @param [integer] rowIndex - The row number
     * @return void
     */
    onEditSupplier : function (view, item, rowIndex) {
        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'update'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp8){?>*/
        var store = view.getStore(),
            me = this,
            record = store.getAt(rowIndex),
            newStore = Ext.create('Shopware.apps.Supplier.store.Supplier');

        newStore.load({
            id: record.getId(),
            callback: function(records, operation, success) {
                if (success) {
                    var newRecord = records[0];
                    me.getView('main.Edit').create({
                        record: newRecord,
                        mainStore: store
                    }).show();
                }
            }
        });
        /* <?php }?> */
    },

    /**
     * Event listener which deletes a single user based on the passed
     * grid (e.g. the grid store) and the row index
     *
     * @event click
     * @param [object] grid - The grid on which the event has been fired
     * @param [integer] rowIndex - Position of the event
     */
    onDeleteSingleSupplier: function (grid, rowIndex) {
        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php if ($_tmp9){?>*/
        var store = grid.getStore(),
            me = this,
            record = store.getAt(rowIndex);

        if (record.get('articleCounter') === 0) {
            // we do not just delete - we are polite and ask the user if he is sure.
            Ext.MessageBox.confirm(me.messages.deleteDialogTitle,
                 Ext.String.format(me.messages.deleteDialogMessage, record.get('name')),
                function (response) {
                    if (response !== 'yes') {
                        return false;
                    }
                record.destroy({
                    success : function () {
                        store.load();
                        Shopware.Msg.createGrowlMessage('',me.messages.deleteDialogSuccess, me.messages.growlMessage);
                    },
                    failure : function () {
                        Shopware.Msg.createGrowlMessage('', me.messages.deleteDialogFailure, me.messages.growlMessage);
                    }
                });
            });
        } else {
            Shopware.Msg.createGrowlMessage(
                me.messages.deleteDialogTitle,
                me.messages.deleteDialogForbidden,
				me.messages.growlMessage
            );
        }
        /* <?php }?> */
    },

    /**
     * Event listener method which deletes multiple suppliers
     * @event click
     * @param button Ext.button.Button
     * @return void
     */
    onDeleteMultipleSuppliers: function (button) {
        /* <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php if ($_tmp10){?> */
        var me = this,
            grid = me.getGrid(),
            selection = grid.getSelectionModel().getSelection(),
            store = grid.getStore(),
            noOfElements = selection.length,
            listOfSupplierNames = "";

        // Collect the names of the object that are marked for deletion
        for (var i = 0; i <= noOfElements - 1; i++) {
            listOfSupplierNames += selection[i].get('name');
            if (i <= noOfElements - 2) {
                listOfSupplierNames += ', ';
            }
        }
        // Get the user to confirm the delete process
        Ext.MessageBox.confirm(me.messages.deleteDialogTitle,
            Ext.String.format(me.messages.deleteDialogMessageMulti, listOfSupplierNames),
            function (response) {
                var errorOccurred = false;
                if (response !== 'yes') {
                    return false;
                }

                Ext.each(selection, function (supplier) {
                    supplier.destroy({
                        success : function () {
                            store.remove(supplier);
                        },
                        failure : function () {
                            errorOccurred = true;
                        }
                    });
                });

                if (!errorOccurred) {
                    Shopware.Msg.createGrowlMessage('', me.messages.deleteDialogSuccess, me.messages.growlMessage);
                } else {
                    Shopware.Msg.createGrowlMessage('', me.messages.deleteDialogFailure, me.messages.growlMessage);
                }
                store.load();
            });
        /* <?php }?> */
    }
});
//
<?php }} ?>