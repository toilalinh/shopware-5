<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:27:16
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/category/controller/main.js" */ ?>
<?php /*%%SmartyHeaderCode:15334220245784639466cbe8-74680318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ac699291712b2ace7034d8fab2b094a950efbdc' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/category/controller/main.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15334220245784639466cbe8-74680318',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463946aea64_72355239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463946aea64_72355239')) {function content_578463946aea64_72355239($_smarty_tpl) {?>/**
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
 * @package    Category
 * @subpackage Main
 * @version    $Id$
 * @author shopware AG
 */

/*  */

/**
 * Shopware Controller - category management controller
 *
 * The category management controller handles the initialisation of the mainWindow and takes care
 * of most of the communication to and from the server.
 */
//
Ext.define('Shopware.apps.Category.controller.Main', {
    /**
     * Extend from the standard ExtJS 4 controller
     * @string
     */
    extend: 'Ext.app.Controller',

    /**
     * Contains the main window of this sub-application.
     * @object
     */
    mainWindow: null,

    /**
     * Define references for the different parts of our application. The
     * references are parsed by ExtJS and Getter methods are automatically created.
     *
     * @array
     */
    refs: [
        { ref: 'settingsForm', selector: 'category-category-tabs-settings' }
    ],

    /**
     * Default root node ID
     * @integer
     */
    defaultRootNodeId : 1,

    /**
     * Translations
     * @Object
     */
    snippets : {
        onSaveChangesSuccess    : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'save_success','default'=>'Changes have been saved successfully.','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'save_success','default'=>'Changes have been saved successfully.','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Changes have been saved successfully.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'save_success','default'=>'Changes have been saved successfully.','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        onSaveChangesError      : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'save_error','default'=>'An error has occurred while saving the changes.','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'save_error','default'=>'An error has occurred while saving the changes.','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
An error occurred while attempting to save the changes.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'save_error','default'=>'An error has occurred while saving the changes.','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
		growlMessage			: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'main_title','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'main_title','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Categories<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'main_title','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Creates the necessary event listener for this
     * specific controller and opens a new Ext.window.Window
     * to display the subapplication
     *
     * @return void
     */
    init: function() {
        var me = this;

        me.subApplication.defaultRootNodeId = me.defaultRootNodeId;

        me.subApplication.treeStore =  me.subApplication.getStore('Tree');
        me.subApplication.custeromGroupsStore =  me.subApplication.getStore('CustomerGroups');
        me.subApplication.DetailStore =  me.subApplication.getStore('Detail');
        me.subApplication.templateStore =  me.subApplication.getStore('Template');

        // Stores for the product assignment
        me.subApplication.availableProductsStore = me.subApplication.getStore('AvailableProducts');
        me.subApplication.assignedProductsStore = me.subApplication.getStore('AssignedProducts');

        me.subApplication.treeStore.getProxy().extraParams = {
            node:me.defaultRootNodeId
        };
        me.subApplication.treeStore.load();
        me.subApplication.templateStore.load();

        me.mainWindow = me.getView('main.Window').create({
            templateStore:me.subApplication.templateStore,
            treeStore:me.subApplication.treeStore
        });

        me.control({
            // Save button
            'category-main-window':{
                'saveDetail' : me.onSaveSettings
            }
        });
    },

    /**
     * Event listener method which will be fired when the user
     * clicks the "save"-button in every window.
     *
     * @param [object] btn - pressed Ext.button.Button
     * @event click
     * @return void
     */
    onSaveSettings: function (button, event) {
        var me = this,
                form = me.getSettingsForm().getForm(),
                categoryModel = form.getRecord(),
                selectedNode = me.getController("Tree").getSelectedNode(),
                parentNode = selectedNode.parentNode || selectedNode;

        form.updateRecord(categoryModel);
        if (form.isValid()) {
            categoryModel.save({
                callback:function (self, operation) {
                    if (operation.success) {
                        me.getSettingsForm().attributeForm.saveAttribute(categoryModel.get('id'));

                        Shopware.Notification.createGrowlMessage('', me.snippets.onSaveChangesSuccess, me.snippets.growlMessage);
                        me.subApplication.treeStore.load({ node: parentNode });
                    } else {
                        var rawData = self.proxy.reader.rawData;
                        if (rawData.message) {
                            Shopware.Notification.createGrowlMessage('',me.snippets.onSaveChangesError + '<br>' +  rawData.message, me.snippets.growlMessage);
                        } else {
                            Shopware.Notification.createGrowlMessage('', me.snippets.onSaveChangesError, me.snippets.growlMessage);
                        }
                    }
                }
            });
        }
    }
});
//
<?php }} ?>