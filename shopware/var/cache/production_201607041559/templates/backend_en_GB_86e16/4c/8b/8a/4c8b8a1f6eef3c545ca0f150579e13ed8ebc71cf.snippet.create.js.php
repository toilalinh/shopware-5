<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:27:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/supplier/view/main/create.js" */ ?>
<?php /*%%SmartyHeaderCode:1966029987578463aa2eae32-12632004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c8b8a1f6eef3c545ca0f150579e13ed8ebc71cf' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/supplier/view/main/create.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1966029987578463aa2eae32-12632004',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463aa3965a8_81983334',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463aa3965a8_81983334')) {function content_578463aa3965a8_81983334($_smarty_tpl) {?>/**
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
 * Create a new supplier view
 */
//
Ext.define('Shopware.apps.Supplier.view.main.Create', {
    extend : 'Enlight.app.Window',
    alias : 'widget.supplier-main-create',
    layout : 'fit',
    title : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title','default'=>'Supplier - Create','namespace'=>'backend/supplier/view/create')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title','default'=>'Supplier - Create','namespace'=>'backend/supplier/view/create'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Manufacturer - create<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title','default'=>'Supplier - Create','namespace'=>'backend/supplier/view/create'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    width : '80%',
    height : '90%',
    autoScroll: true,
    stateful : true,
    stateId : 'shopware-supplier-create',

    /**
     * Initialize the component
     * @return void
     */
    initComponent : function () {
        var me = this;
        me.items = [ me.getFormPanel() ];

        me.dockedItems = [{
            xtype: 'toolbar',
            dock: 'bottom',
            cls: 'shopware-toolbar',
            ui: 'shopware-ui',
            items: me.getButtons()
        }];

        me.callParent(arguments);
    },

    /**
     * Returns a new fieldset containing an attribute form
     * @returns Ext.form.FieldSet
     */
    createAttributeForm: function () {
        var me = this;

        me.attributeForm = Ext.create('Shopware.attribute.Form', {
            table: 's_articles_supplier_attributes',
            allowTranslation: false
        });
        return me.attributeForm;
    },

    /**
     * Returns the whole form to edit the supplier
     *
     * @returns Ext.form Panel
     */
    getFormPanel : function()
    {
        var me = this;
        return Ext.create('Ext.form.Panel', {
            collapsible : false,
            split       : false,
            region      : 'center',
            width       : '100%',
            autoScroll: true,
            defaults : {
                labelWidth  : 155,
                anchor      : '100%'
            },
            bodyPadding : 10,
            items : [
                Ext.create('Ext.form.FieldSet', {
                    alias:'widget.supplier-base-field-set',
                    title : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'panel_base','default'=>'Basic information','namespace'=>'backend/supplier/view/create')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'panel_base','default'=>'Basic information','namespace'=>'backend/supplier/view/create'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Basic information<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'panel_base','default'=>'Basic information','namespace'=>'backend/supplier/view/create'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    defaults : {
                        labelWidth  : 155,
                        anchor      : '100%'
                    },
                    items : [
                        {
                            xtype       : 'textfield',
                            name        : 'name',
                            fieldLabel  : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'name','default'=>'Supplier name','namespace'=>'backend/supplier/view/create')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'name','default'=>'Supplier name','namespace'=>'backend/supplier/view/create'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Manufacturer name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'name','default'=>'Supplier name','namespace'=>'backend/supplier/view/create'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            supportText : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'name_support','default'=>'Name of the supplier e.g. Shopware AG','namespace'=>'backend/supplier/view/create')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'name_support','default'=>'Name of the supplier e.g. Shopware AG','namespace'=>'backend/supplier/view/create'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name of the manufacturer, e.g. shopware AG<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'name_support','default'=>'Name of the supplier e.g. Shopware AG','namespace'=>'backend/supplier/view/create'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            allowBlank  : false
                        },
                        {
                            xtype       : 'textfield',
                            name        : 'metaTitle',
                            fieldLabel  : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'seo_meta_title','default'=>'Page title','namespace'=>'backend/supplier/view/create')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_title','default'=>'Page title','namespace'=>'backend/supplier/view/create'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Page title<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_title','default'=>'Page title','namespace'=>'backend/supplier/view/create'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            supportText : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'seo_meta_title_support','default'=>'Page title in the supplier page','namespace'=>'backend/supplier/view/create')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_title_support','default'=>'Page title in the supplier page','namespace'=>'backend/supplier/view/create'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Supplier page title<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_title_support','default'=>'Page title in the supplier page','namespace'=>'backend/supplier/view/create'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                        },
                        {
                            xtype       : 'textfield',
                            vtype       : 'url',
                            name        : 'link',
                            fieldLabel  : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'link','default'=>'URL','namespace'=>'backend/supplier/view/create')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'link','default'=>'URL','namespace'=>'backend/supplier/view/create'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
URL<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'link','default'=>'URL','namespace'=>'backend/supplier/view/create'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            supportText : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'link_support','default'=>'Link to suppliers website','namespace'=>'backend/supplier/view/create')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'link_support','default'=>'Link to suppliers website','namespace'=>'backend/supplier/view/create'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Link to manufacturer website<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'link_support','default'=>'Link to suppliers website','namespace'=>'backend/supplier/view/create'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                        },
                        {
                            xtype : 'container',
                            layout : 'anchor',
                            defaults : {
                                anchor : '100%'
                            },
                            items : [
                                me.getHtmlField(),
                                me.getDropZone(),
                                {
                                    xtype       : 'hidden',
                                    name        : 'image',
                                    fieldLabel  : 'image'
                                }
                            ]
                        }
                    ]
                }),
                Ext.create('Ext.form.FieldSet', {
                    alias:'widget.supplier-seo-field-set',
                    collapsible: true,
                    collapsed: true,
                    defaults : {
                        labelWidth  : 155,
                        anchor      : '100%'
                    },
                    title : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'panel_seo','default'=>'SEO information','namespace'=>'backend/supplier/view/create')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'panel_seo','default'=>'SEO information','namespace'=>'backend/supplier/view/create'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SEO information<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'panel_seo','default'=>'SEO information','namespace'=>'backend/supplier/view/create'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    items : [
                        {
                            xtype       : 'textfield',
                            name        : 'metaDescription',
                            fieldLabel  : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'seo_meta_description','default'=>'Description','namespace'=>'backend/supplier/view/create')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_description','default'=>'Description','namespace'=>'backend/supplier/view/create'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_description','default'=>'Description','namespace'=>'backend/supplier/view/create'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            supportText : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'seo_meta_description_support','default'=>'Description meta tag','namespace'=>'backend/supplier/view/create')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_description_support','default'=>'Description meta tag','namespace'=>'backend/supplier/view/create'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Description meta tag<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_description_support','default'=>'Description meta tag','namespace'=>'backend/supplier/view/create'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            allowBlank  : true
                        },
                        {
                            xtype       : 'textfield',
                            name        : 'metaKeywords',
                            fieldLabel  : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'seo_meta_keywords','default'=>'Keywords','namespace'=>'backend/supplier/view/create')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_keywords','default'=>'Keywords','namespace'=>'backend/supplier/view/create'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Keywords<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_keywords','default'=>'Keywords','namespace'=>'backend/supplier/view/create'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            supportText : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'seo_meta_keywords_support','default'=>'Keywords meta tag','namespace'=>'backend/supplier/view/create')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_keywords_support','default'=>'Keywords meta tag','namespace'=>'backend/supplier/view/create'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Keywords meta tag<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'seo_meta_keywords_support','default'=>'Keywords meta tag','namespace'=>'backend/supplier/view/create'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            allowBlank  : true
                        }
                    ]
                }),
                me.createAttributeForm()
            ]
        });
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
            fieldLabel : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'description','default'=>'Description','namespace'=>'backend/supplier/view/create')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'description','default'=>'Description','namespace'=>'backend/supplier/view/create'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'description','default'=>'Description','namespace'=>'backend/supplier/view/create'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            labelWidth: 155
        });
    },
    /**
     * Button Array - the event listener will be set in the controller control method
     *
     * @return array of objects
     */
    getButtons : function()
    {
        var me = this;
        return ['->',
            {
                text    : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'cancel','default'=>'Cancel','namespace'=>'backend/supplier/view/create')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'cancel','default'=>'Cancel','namespace'=>'backend/supplier/view/create'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'cancel','default'=>'Cancel','namespace'=>'backend/supplier/view/create'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                scope   : me,
                cls: 'secondary',
                handler : me.destroy
            },
            {
                text    : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'save','default'=>'Save','namespace'=>'backend/supplier/view/create')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'save','default'=>'Save','namespace'=>'backend/supplier/view/create'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'save','default'=>'Save','namespace'=>'backend/supplier/view/create'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                action  : 'saveSupplier',
                cls     : 'primary',
                formBind: true
            }
        ];
    },
    /**
     * Returns a media drop field.
     *
     * @return Shopware.MediaManager.MediaSelection
     */
    getDropZone : function()
    {
        return Ext.create('Shopware.MediaManager.MediaSelection', {
            fieldLabel      : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'logo','default'=>'Logo','namespace'=>'backend/supplier/view/create')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'logo','default'=>'Logo','namespace'=>'backend/supplier/view/create'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Logo<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'logo','default'=>'Logo','namespace'=>'backend/supplier/view/create'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            name            : 'media-manager-selection',
            supportText     : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'logo_support','default'=>'Supplier logo selection via Media Manager. The selection is limited to one media.','namespace'=>'backend/supplier/view/create')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'logo_support','default'=>'Supplier logo selection via Media Manager. The selection is limited to one media.','namespace'=>'backend/supplier/view/create'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Manufacturer logo selection via the Media Manager. The selection is limited to one element.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'logo_support','default'=>'Supplier logo selection via Media Manager. The selection is limited to one media.','namespace'=>'backend/supplier/view/create'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            multiSelect     : false,
            albumId: -12, // Default supplier albumId
            labelWidth: 155
        });
    }
});
//
<?php }} ?>