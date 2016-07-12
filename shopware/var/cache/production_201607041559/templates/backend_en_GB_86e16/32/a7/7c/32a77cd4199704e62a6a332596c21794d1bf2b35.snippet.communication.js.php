<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:26:05
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/order/view/detail/communication.js" */ ?>
<?php /*%%SmartyHeaderCode:6787736145784634d8f1733-87212946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32a77cd4199704e62a6a332596c21794d1bf2b35' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/order/view/detail/communication.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6787736145784634d8f1733-87212946',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5784634da20d11_45024248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784634da20d11_45024248')) {function content_5784634da20d11_45024248($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage View
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware UI - Order detail page
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Order.view.detail.Communication', {

    /**
     * Define that the additional information is an Ext.panel.Panel extension
     * @string
     */
    extend:'Ext.form.Panel',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.order-communication-panel',

    /**
     * An optional extra CSS class that will be added to this component's Element.
     */
    cls: Ext.baseCSSPrefix + 'communication-panel shopware-form',

    /**
     * A shortcut for setting a padding style on the body element. The value can either be a number to be applied to all sides, or a normal css string describing padding.
     */
    bodyPadding: 10,

    /**
     * True to use overflow:'auto' on the components layout element and show scroll bars automatically when necessary, false to clip any overflowing content.
     */
    autoScroll: true,

    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'communication'/'window_title','default'=>'Communication','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'communication'/'window_title','default'=>'Communication','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Communication<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'communication'/'window_title','default'=>'Communication','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        internal: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'communication'/'internal'/'title','default'=>'Internal communication','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'communication'/'internal'/'title','default'=>'Internal communication','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Internal communication<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'communication'/'internal'/'title','default'=>'Internal communication','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'communication'/'internal'/'text','default'=>'This comment box is for internal communication. The field is not visible in the frontend and for the customer at any given time.','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'communication'/'internal'/'text','default'=>'This comment box is for internal communication. The field is not visible in the frontend and for the customer at any given time.','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
This comment box is for internal communication. The field is neither visible in the frontend nor for the customer at any given time.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'communication'/'internal'/'text','default'=>'This comment box is for internal communication. The field is not visible in the frontend and for the customer at any given time.','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            label: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'communication'/'internal'/'label','default'=>'Internal comment','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'communication'/'internal'/'label','default'=>'Internal comment','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Internal comment<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'communication'/'internal'/'label','default'=>'Internal comment','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            button: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'communication'/'internal'/'button','default'=>'Save internal comment','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'communication'/'internal'/'button','default'=>'Save internal comment','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save internal comment<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'communication'/'internal'/'button','default'=>'Save internal comment','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        external: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'communication'/'external'/'title','default'=>'Communication with the customer','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'communication'/'external'/'title','default'=>'Communication with the customer','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Communication with the customer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'communication'/'external'/'title','default'=>'Communication with the customer','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'communication'/'external'/'text','default'=>'This comment box is for internal communication. The field is not visible in the frontend and for the customer at any given time.','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'communication'/'external'/'text','default'=>'This comment box is for internal communication. The field is not visible in the frontend and for the customer at any given time.','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
These comment boxes are for external communication. Text entered in these fields will be visible to the customer.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'communication'/'external'/'text','default'=>'This comment box is for internal communication. The field is not visible in the frontend and for the customer at any given time.','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            customerLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'communication'/'external'/'customer_label','default'=>'Customer comment','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'communication'/'external'/'customer_label','default'=>'Customer comment','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Customer comment<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'communication'/'external'/'customer_label','default'=>'Customer comment','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            externalLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'communication'/'external'/'external_label','default'=>'Your comment','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'communication'/'external'/'external_label','default'=>'Your comment','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your comment<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'communication'/'external'/'external_label','default'=>'Your comment','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            button: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'communication'/'external'/'button','default'=>'Save external comments','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'communication'/'external'/'button','default'=>'Save external comments','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save external comments<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'communication'/'external'/'button','default'=>'Save external comments','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
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
    initComponent:function () {
        var me = this;

        me.registerEvents();
        me.items = [
            me.createInternalFieldSet(),
            me.createExternalFieldSet()
        ];
        me.title = me.snippets.title;
        me.callParent(arguments);
        me.loadRecord(me.record);
    },

    /**
     * Registers the custom component events.
     * @return void
     */
    registerEvents: function() {
        this.addEvents(
            /**
             * Event will be fired when the user clicks the "Save internal comment" button
             * which is placed in the communication panel at the bottom of the internal field set.
             *
             * @event
             * @param [Ext.data.Model] record - The current form record
             * @param [Ext.form.Panel] form - The communication form panel
             */
            'saveInternalComment',

            /**
             * Event will be fired when the user clicks the "Save external comment" button
             * which is placed in the communication panel at the bottom of the external field set.
             *
             * @event
             * @param [Ext.data.Model] record - The current form record
             * @param [Ext.form.Panel] form - The communication form panel
             */
            'saveExternalComment'
        );
    },

    /**
     * Creates the container for the internal communication fields
     * @return Ext.form.FieldSet
     */
    createInternalFieldSet: function() {
        var me = this;

        return Ext.create('Ext.form.FieldSet', {
            title: me.snippets.internal.title,
            defaults: {
                labelWidth: 155,
                labelStyle: 'font-weight: 700;'
            },
            layout: 'anchor',
            minWidth:250,
            items: me.createInternalElements()
        });
    },

    /**
     * Creates the container for the external communication fields
     * @return Ext.form.FieldSet
     */
    createExternalFieldSet: function() {
        var me = this;

        return Ext.create('Ext.form.FieldSet', {
            title: me.snippets.external.title,
            defaults: {
                labelWidth: 155,
                labelStyle: 'font-weight: 700;'
            },
            layout: 'anchor',
            minWidth:250,
            items: me.createExternalElements()
        });
    },

    /**
     * Creates the elements for the internal communication field set which is displayed on
     * top of the communication tab panel.
     * @return Array - Contains the description container, the text area for the internal comment and the save button.
     */
    createInternalElements: function() {
        var me = this;

        me.internalDescriptionContainer = Ext.create('Ext.container.Container', {
            style: 'color: #999; font-style: italic; margin: 0 0 15px 0;',
            html: me.snippets.internal.text
        });

        me.internalTextArea = Ext.create('Ext.form.field.TextArea', {
            name: 'internalComment',
            height: 90,
            anchor: '100%',
            cols: 4,
            allowBlank: true,
            grow: true
        });

        me.internalButton = Ext.create('Ext.button.Button', {
            style: 'margin: 8px 0;',
            cls: 'small primary',
            text: me.snippets.internal.button,
            handler: function() {
                me.record.set('internalComment', me.internalTextArea.getValue());
                me.fireEvent('saveInternalComment', me.record, me);
            }
        });

        return [me.internalDescriptionContainer, me.internalTextArea, me.internalButton];
    },

    /**
     * Creates the elements for the external communication field set which is displayed on
     * bottom of the communication tab panel.
     * @return Array - Contains the description container, the text area for the external and the customer comment and the save button.
     */
    createExternalElements: function() {
        var me = this;

        me.externalDescriptionContainer = Ext.create('Ext.container.Container', {
            style: 'color: #999; font-style: italic; margin: 0 0 15px 0;',
            html: me.snippets.external.text
        });

        me.externalTextArea = Ext.create('Ext.form.field.TextArea', {
            name: 'comment',
            height: 90,
            anchor: '100%',
            cols: 4,
            allowBlank: true,
            grow: true,
            fieldLabel: me.snippets.external.externalLabel
        });

        me.customerTextArea = Ext.create('Ext.form.field.TextArea', {
            height: 90,
            anchor: '100%',
            cols: 4,
            name: 'customerComment',
            allowBlank: true,
            grow: true,
            fieldLabel: me.snippets.external.customerLabel
        });

        me.externalButton = Ext.create('Ext.button.Button', {
            style: 'margin: 8px 0;',
            cls: 'small primary',
            text: me.snippets.external.button,
            handler: function() {
                me.record.set('customerComment', me.customerTextArea.getValue());
                me.record.set('comment', me.externalTextArea.getValue());

                me.fireEvent('saveExternalComment', me.record, me);
            }
        });

        return [me.externalDescriptionContainer, me.customerTextArea, me.externalTextArea, me.externalButton];
    }

});
//
<?php }} ?>