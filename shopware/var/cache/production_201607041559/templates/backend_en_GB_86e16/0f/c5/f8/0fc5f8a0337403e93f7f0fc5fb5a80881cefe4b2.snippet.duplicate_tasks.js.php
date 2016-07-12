<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:27:16
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/category/view/main/duplicate_tasks.js" */ ?>
<?php /*%%SmartyHeaderCode:1665551231578463941d7c75-34731687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fc5f8a0337403e93f7f0fc5fb5a80881cefe4b2' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/category/view/main/duplicate_tasks.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1665551231578463941d7c75-34731687',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5784639420a406_74690451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784639420a406_74690451')) {function content_5784639420a406_74690451($_smarty_tpl) {?>/**
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

/*  */

//
Ext.define('Shopware.apps.Category.view.main.DuplicateTasks', {

    /**
     * Define that the order main window is an extension of the enlight application window
     * @string
     */
    extend: 'Enlight.app.SubWindow',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias: 'widget.category-main-duplicate-tasks',

    /**
     * Define window width
     * @integer
     */
    width: 360,

    /**
     * Define window height
     * @integer
     */
    height: 160,

    /**
     * Display no footer button for the detail window
     * @boolean
     */
    footerButton: false,

    /**
     * Set vbox layout and stretch align to display the toolbar on top and the button container
     * under the toolbar.
     * @object
     */
    layout: {
        align: 'stretch',
        type: 'vbox'
    },

    /**
     * If the modal property is set to true, the user can't change the window focus to another window.
     * @boolean
     */
    modal: true,

    /**
     * The body padding is used in order to have a smooth side clearance.
     * @integer
     */
    bodyPadding: 10,

    /**
     * Disable the close icon in the window header
     * @boolean
     */
    closable: false,

    /**
     * Disable window resize
     * @boolean
     */
    resizable: false,

    /**
     * Disables the maximize button in the window header
     * @boolean
     */
    maximizable: false,
    /**
     * Disables the minimize button in the window header
     * @boolean
     */
    minimizable: false,

    /**
     * @string
     */
    title:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'batch'/'duplicate'/'title','default'=>'Duplicate category tree','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batch'/'duplicate'/'title','default'=>'Duplicate category tree','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Duplicate category tree<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batch'/'duplicate'/'title','default'=>'Duplicate category tree','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    /**
     * Contains all snippets for the component
     * @object
     */
    snippets: {
        close:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'batch'/'cancel','default'=>'Cancel','namespace'=>'backend/category/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batch'/'cancel','default'=>'Cancel','namespace'=>'backend/category/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cancel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'batch'/'cancel','default'=>'Cancel','namespace'=>'backend/category/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
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
    initComponent: function () {
        var me = this;
        me.registerEvents();
        me.items = me.createItems();
        me.callParent(arguments);
    },

    run: function() {
        var me = this;
        me.fireEvent('duplicateTasksWindowReady', me, me.categoryId, me.parentId, me.reassignArticleAssociations, me.callback);
    },

    /**
     * Registers additional component events.
     */
    registerEvents: function() {
        this.addEvents(
            'duplicateTasksWindowReady'
        );
    },
    /**
     * Helper function to create the window items
     * @returns Array
     */
    createItems: function() {
        var me = this;

        me.duplicateCategoryProgress = me.createProgressBar();

        return [
            {
                xtype: 'container',
                padding: '10 0',
                items: [
                    me.duplicateCategoryProgress,
                ]
            },
            me.createButtons()
        ];
    },

    /**
     * Creates the progress which displays the progress status for the document creation.
     */
    createProgressBar: function() {
        var me = this;

        return Ext.create('Ext.ProgressBar', {
            animate: true,
            margin: '0 0 15',
            style: 'border-width: 1px !important;',
            cls:'left-align'
        });
    },

    /**
     * Creates the close button which allows the user to close the window. The window closing is handled over this
     * button to prevent that the user close the window while the batch process is already working.
     * So the user have to wait until the process are finish or the user can clicks the cancel button.
     * The button will enabled after the batch process are finish or the cancel event are fired and the batch process
     * successfully canceled.
     */
    createCloseButton: function() {
        var me = this;

        return Ext.create('Ext.button.Button', {
            text: me.snippets.close,
            flex: 1,
            action: 'closeWindow',
            disabled: true,
            cls: 'secondary',
            handler: function() {
                me.destroy();
            }
        });
    },

    /**
     * Creates the button container for the close and cancel button
     *
     * @return Ext.container.Container
     */
    createButtons: function() {
        var me = this;

        me.closeButton  = me.createCloseButton();

        return Ext.create('Ext.container.Container', {
            layout: 'hbox',
            items: [
                me.closeButton
            ]
        });
    }
});
//
<?php }} ?>