<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:27:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/supplier/view/main/edit.js" */ ?>
<?php /*%%SmartyHeaderCode:703243901578463aa21aa16-57331053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbd799dd1dceea00c3162f369a63ad950664eab6' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/supplier/view/main/edit.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '703243901578463aa21aa16-57331053',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463aa2e28d9_80748293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463aa2e28d9_80748293')) {function content_578463aa2e28d9_80748293($_smarty_tpl) {?>/**
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
 * @subpackage View
 * @version    $Id$
 * @author shopware AG
 */

/**/

/**
 * Shopware View - Supplier
 *
 * Backend - Management for Suppliers. Create | Modify | Delete and Logo Management.
 * Create a edit supplier view
 */
//
Ext.define('Shopware.apps.Supplier.view.main.Edit', {
    extend : 'Enlight.app.Window',
    alias : 'widget.supplier-main-edit',
    layout : 'fit',
    title : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title','default'=>'Supplier - edit','namespace'=>'backend/supplier/view/edit')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title','default'=>'Supplier - edit','namespace'=>'backend/supplier/view/edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Manufacturer - edit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title','default'=>'Supplier - edit','namespace'=>'backend/supplier/view/edit'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    width : '80%',
    height : '90%',
    stateful : true,
    stateId : 'shopware-supplier-edit',

    /**
     * Initialize the component
     * @return void
     */
    initComponent : function () {
        var me = this,
            oldTitle = me.title;

        me.title = oldTitle + ': ' + me.record.get('name');

        me.logo = me.getLogo();
        me.dropZone = me.getDropZone();
        me.htmlEditor = me.getHtmlField();
        me.hiddenFields = me.getHiddenFields();
        me.topForm = me.getFormTopPart();
        me.deleteButton = me.getDeleteButton();

        me.supplierInfoForm = me.getInfoForm();
        me.supplierInfoForm.getForm().loadRecord(this.record);
        me.attributeForm.loadAttribute(this.record.getId());

        me.items = [me.supplierInfoForm];

        me.dockedItems = [{
            xtype: 'toolbar',
            dock: 'bottom',
            cls: 'shopware-toolbar',
            ui: 'shopware-ui',
            items: me.getButtons()
        }];

        //removed me.callParent(me); because chrome could not handle this call
        me.callParent(arguments);
    },
    /**
     * Returns an array of buttons. Default buttons are cancel and save
     *
     * @return array of buttons
     */
    getButtons : function()
    {
        var me = this;
        return  ['->',
            {
                text :  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'cancel','default'=>'Cancel','namespace'=>'backend/supplier/view/edit')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'cancel','default'=>'Cancel','namespace'=>'backend/supplier/view/edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cancel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'cancel','default'=>'Cancel','namespace'=>'backend/supplier/view/edit'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                cls: 'secondary',
                scope : me,
                handler : me.destroy
            },
            {
                text : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'save','default'=>'Save','namespace'=>'backend/supplier/view/edit')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'save','default'=>'Save','namespace'=>'backend/supplier/view/edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'save','default'=>'Save','namespace'=>'backend/supplier/view/edit'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                action : 'saveSupplier',
                scale : 'large',
                cls : 'primary',
                formBind: true
            }
        ];
    },
    /**
     * Returns the delete logo button
     *
     * @return Ext.buttonButton
     */
    getDeleteButton : function() {
        var me = this;

        return {
            xtype   : 'button',
            cls: 'small secondary',
            name    : 'deleteLogo',
            scope   : me,
            text    : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'delete_logo','default'=>'Delete Logo','namespace'=>'backend/supplier/view/edit')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_logo','default'=>'Delete Logo','namespace'=>'backend/supplier/view/edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete logo<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delete_logo','default'=>'Delete Logo','namespace'=>'backend/supplier/view/edit'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            action  : 'deleteLogo',
            scale   : 'small',
            style   : 'float: right; margin: 0 35px 10px 0'
        };
    },



    /**
     * Return the entire form
     *
     *  @return Ext.form.Panel
     */
    getInfoForm : function()
    {
        var me = this,
            logoArray = [];

        //logoArray.push(me.logo);
        //remove delete button when there is no logo to delete
        if (me.record.get('image') !== "") {
            logoArray.push(me.logo);
            logoArray.push(me.deleteButton);
        }

        me.formPanel = Ext.create('Ext.form.Panel', {
            collapsible : false,
            split       : false,
            region      : 'center',
            width       : '100%',
            id          : 'supplierFormPanel',
            defaults : {
                anchor      : '100%'
            },
            bodyPadding : 10,
            border : 0,
            autoScroll: true,
            plugins: [{
                ptype: 'translation',
                pluginId: 'translation',
                translationType: 'supplier',
                translationMerge: false,
                translationKey: null
            }],
            items : [
                Ext.create('Ext.form.FieldSet', {
                    alias:'widget.supplier-base-field-set',
                    cls: Ext.baseCSSPrefix + 'supplier-base-field-set',
                    title : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'panel_base','default'=>'Basic information','namespace'=>'backend/supplier/view/edit')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'panel_base','default'=>'Basic information','namespace'=>'backend/supplier/view/edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Basic information<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'panel_base','default'=>'Basic information','namespace'=>'backend/supplier/view/edit'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    layout: 'form',
                    items : [
                        {
                            xtype : 'container',
                            layout : 'column',
                            border : 1,
                            items : [
                                {
                                    xtype       : 'container',
                                    layout      : 'anchor',
                                    columnWidth : 0.8,
                                    defaults : {
                                        labelWidth  : 155
                                    },
                                    items : me.topForm
                                },
                                {
                                    xtype : 'container',
                                    layout : 'anchor',
                                    columnWidth : 0.2,
                                    items : logoArray
                                },
                                {
                                    xtype : 'container',
                                    layout : 'anchor',
                                    columnWidth : 1,
                                    defaults : {
                                        anchor : '100%'
                                    },
                                    items : [
                                        me.htmlEditor,
                                        me.dropZone
                                    ]
                                },
                                me.hiddenFields
                            ]
                        }
                    ]
                }),
                Ext.create('Ext.form.FieldSet', {
                    alias:'widget.supplier-seo-field-set',
                    cls: Ext.baseCSSPrefix + 'supplier-seo-field-set',
                    collapsible: true,
                    collapsed: true,
                    defaults : {
                        labelWidth  : 155,
                        anchor      : '100%'
                    },
                    title : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'panel_seo','default'=>'SEO information','namespace'=>'backend/supplier/view/edit')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'panel_seo','default'=>'SEO information','namespace'=>'backend/supplier/view/edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SEO information<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'panel_seo','default'=>'SEO information','namespace'=>'backend/supplier/view/edit'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    items : [
                        {
                            xtype       : 'textfield',
                            name        : 'metaDescription',
                            translatable: true,
                            fieldLabel  : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'seo_meta_description','default'=>'Description','namespace'=>'backend/supplier/view/edit')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_description','default'=>'Description','namespace'=>'backend/supplier/view/edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_description','default'=>'Description','namespace'=>'backend/supplier/view/edit'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            supportText : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'seo_meta_description_support','default'=>'Description meta tag','namespace'=>'backend/supplier/view/edit')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_description_support','default'=>'Description meta tag','namespace'=>'backend/supplier/view/edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Description meta tag<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_description_support','default'=>'Description meta tag','namespace'=>'backend/supplier/view/edit'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            allowBlank  : true
                        },
                        {
                            xtype       : 'textfield',
                            name        : 'metaKeywords',
                            translatable: true,
                            fieldLabel  : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'seo_meta_keywords','default'=>'Keywords','namespace'=>'backend/supplier/view/edit')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_keywords','default'=>'Keywords','namespace'=>'backend/supplier/view/edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Keywords<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_keywords','default'=>'Keywords','namespace'=>'backend/supplier/view/edit'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            supportText : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'seo_meta_keywords_support','default'=>'Keywords meta tag','namespace'=>'backend/supplier/view/edit')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_keywords_support','default'=>'Keywords meta tag','namespace'=>'backend/supplier/view/edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Keywords meta tag<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_keywords_support','default'=>'Keywords meta tag','namespace'=>'backend/supplier/view/edit'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            allowBlank  : true
                        }
                    ]
                })
            ]
        });

        me.attributeForm = Ext.create('Shopware.attribute.Form', {
            table: 's_articles_supplier_attributes',
            allowTranslation: false,
            translationForm: me.formPanel
        });

        me.formPanel.add(me.attributeForm);
        return me.formPanel;
    },
    /**
     * Returns the HTML editor for the description
     *
     * @return Ext.form.field.HtmlEditor
     */
    getHtmlField : function()
    {
        return Ext.create('Shopware.form.field.TinyMCE', {
            name : 'description',
            translatable: true,
            fieldLabel : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'description','default'=>'Description','namespace'=>'backend/supplier/view/edit')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'description','default'=>'Description','namespace'=>'backend/supplier/view/edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'description','default'=>'Description','namespace'=>'backend/supplier/view/edit'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            labelWidth  : 155
        });
    },
    /**
     * Returns a set of hidden fields
     * @return array of hidden fields
     */
    getHiddenFields : function()
    {
        return [{
            xtype : 'hidden',
            name : 'image',
            fieldLabel : 'image'
        }];
    },

    /**
     * Returns the two most upper form fields: name and url
     *
     * @return array of form fields
     */
    getFormTopPart : function() {
        return [
            {
                xtype : 'textfield',
                name : 'name',
                allowBlank  : false,
                anchor : '95%',
                fieldLabel  : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'name','default'=>'Supplier name','namespace'=>'backend/supplier/view/edit')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'name','default'=>'Supplier name','namespace'=>'backend/supplier/view/edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Manufacturer name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'name','default'=>'Supplier name','namespace'=>'backend/supplier/view/edit'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                supportText : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'name_support','default'=>'Name of the supplier e.g. Shopware AG','namespace'=>'backend/supplier/view/edit')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'name_support','default'=>'Name of the supplier e.g. Shopware AG','namespace'=>'backend/supplier/view/edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name of the manufacturer, e.g. shopware AG<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'name_support','default'=>'Name of the supplier e.g. Shopware AG','namespace'=>'backend/supplier/view/edit'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            },
            {
                xtype       : 'textfield',
                name        : 'metaTitle',
                translatable : true,
                anchor : '95%',
                fieldLabel  : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'seo_meta_title','default'=>'Page title','namespace'=>'backend/supplier/view/edit')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_title','default'=>'Page title','namespace'=>'backend/supplier/view/edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Page title<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_title','default'=>'Page title','namespace'=>'backend/supplier/view/edit'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                supportText : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'seo_meta_title_support','default'=>'Page title in the supplier page','namespace'=>'backend/supplier/view/edit')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_title_support','default'=>'Page title in the supplier page','namespace'=>'backend/supplier/view/edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Supplier page title<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_title_support','default'=>'Page title in the supplier page','namespace'=>'backend/supplier/view/edit'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            },
            {
                xtype : 'textfield',
                vtype : 'url',
                name : 'link',
                anchor : '95%',
                fieldLabel  : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'link','default'=>'URL','namespace'=>'backend/supplier/view/edit')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'link','default'=>'URL','namespace'=>'backend/supplier/view/edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
URL<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'link','default'=>'URL','namespace'=>'backend/supplier/view/edit'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                supportText : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'link_support','default'=>'Link to suppliers website','namespace'=>'backend/supplier/view/edit')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'link_support','default'=>'Link to suppliers website','namespace'=>'backend/supplier/view/edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Link to manufacturer website<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'link_support','default'=>'Link to suppliers website','namespace'=>'backend/supplier/view/edit'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            }
        ];
    },
    /**
     * Returns the media selector for the supplier module
     *
     * @return Shopware.MediaManager.MediaSelection
     */
    getDropZone : function()
    {
        return Ext.create('Shopware.MediaManager.MediaSelection', {
            fieldLabel      : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'form_logo','default'=>'Logo','namespace'=>'backend/supplier/view/edit')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form_logo','default'=>'Logo','namespace'=>'backend/supplier/view/edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Logo<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form_logo','default'=>'Logo','namespace'=>'backend/supplier/view/edit'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            name            : 'media-manager-selection',
            supportText     : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'logo_support','default'=>'Supplier logo selection via Media Manager. The selection is limited to one media.','namespace'=>'backend/supplier/view/edit')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'logo_support','default'=>'Supplier logo selection via Media Manager. The selection is limited to one media.','namespace'=>'backend/supplier/view/edit'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Manufacturer logo selection via the Media Manager. The selection is limited to one element.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'logo_support','default'=>'Supplier logo selection via Media Manager. The selection is limited to one media.','namespace'=>'backend/supplier/view/edit'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            multiSelect     : false,
            albumId: -12, // Default supplier albumId
            labelWidth  : 155
        });
    },

    /**
     * Returns an element which contains the logo
     *
     * @return Ext.Img
     */
    getLogo : function() {
        var me = this,
            imageUrl = me.record.get('image'),
            image = Ext.create('Ext.Img', {
                    src         : imageUrl,
                    maxWidth    : 120,
                    width       : 120,
                    maxHeight   : 80,
                    margin      : '0 auto',
                    name        : 'image',
                    itemId      : 'supplierFormPanelLogo',
                    style       : 'height: 80px; width: 120px;'
                }
            );

        return image;
    }
});
//
<?php }} ?>