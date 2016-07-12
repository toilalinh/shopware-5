<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:26:06
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/article/view/image/info.js" */ ?>
<?php /*%%SmartyHeaderCode:10846739045784634e978d64-47903745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed7da6b96c171910508228760c17bc16400a2978' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/article/view/image/info.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10846739045784634e978d64-47903745',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5784634e9e0e63_34143484',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784634e9e0e63_34143484')) {function content_5784634e9e0e63_34143484($_smarty_tpl) {?>/**
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
 * Shopware UI - Article detail page - Image
 * The image info component displayed on the right side in the image tab.
 * It contains a image preview to display the original image of the selected list item.
 * Additional it contains a tree panel for the assigned article components like variants or similar.
 * All events of the component handled in the media controller.
 */
//
//
Ext.define('Shopware.apps.Article.view.image.Info', {
    /**
     * Define that the category drop zone is an extension of the Ext.panel.Panel
     * @string
     */
    extend:'Ext.form.Panel',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.article-image-info',
    /**
     * Set css class for this component
     * @string
     */
    cls: Ext.baseCSSPrefix + 'article-image-info',

    /**
     * Layout for the component
     */
    layout: {
        type: 'vbox',
        align: 'stretch'
    },

    autoScroll:true,
    /**
     * Defaults for the panel items
     * @object
     */
    defaults: {
        anchor: '100%'
    },

    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image'/'info'/'title','default'=>'Image options','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'title','default'=>'Image options','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Image options<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'title','default'=>'Image options','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        imageTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'image'/'info'/'image_title','default'=>'Title','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'image_title','default'=>'Title','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Title<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'image'/'info'/'image_title','default'=>'Title','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    },

    plugins: [{
        ptype: 'translation',
        pluginId: 'translation',
        translationType: 'articleimage',
        translationMerge: false,
        translationKey: null
    }],

    /**
     * Sets the body padding value
     * @integer
     */
    bodyPadding: 10,

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
        me.title = me.snippets.title;
        me.thumbnail = me.createThumbnail();
        me.settings = me.createSettings();

        me.attributeForm = Ext.create('Shopware.attribute.Form', {
            table: 's_articles_img_attributes',
            allowTranslation: false,
            translationForm: me,
            margin: '10 0 0'
        });

        me.items = [
            me.thumbnail,
            me.settings,
            me.attributeForm
        ];
        me.registerEvents();
        me.callParent(arguments);
    },

    /**
     * Registers additional component events.
     */
    registerEvents: function() {
    	this.addEvents(
            /**
             * Event will be fired when the user wants to save the image settings.
             * @event
             * @param [object] form - Ext.form.Panel - The settings Panel
             * @param [object] record - Shopware.apps.Article.model.Media
             */
            'saveImageSettings'
    	);
    },

    /**
     * Creates the thumbnail container for the info panel.
     * @return Ext.view.View
     */
    createThumbnail: function() {
        var me = this;

        return Ext.create('Ext.view.View', {
            cls: 'outer-article-info-thumbnail',
            emptyText: 'No additional information found',
            tpl: me.createInfoPanelTemplate(),
            margin: '0 0 10',
            itemSelector: '.copy-image-path',
            autoScroll:true,
            height: 300,
            renderData: []
        });
    },

    /**
     * Creates the XTemplate for the information panel
     *
     * Note that the template has different member methods
     * which are only callable in the actual template.
     *
     * @return [object] generated Ext.XTemplate
     */
    createInfoPanelTemplate: function() {
        return new Ext.XTemplate(
            '<tpl for=".">',
                '<div class="article-thumb-wrap">',
                    // If the type is image, then show the image
                    '<div class="thumb">',
                        '<div class="inner-thumb"><img src="',
                            '<tpl if="original">',
                                '{original}',
                            '</tpl>',
                        '" /></div>',
                    '</div>',
                '</div>',
            '</tpl>',
            '<div class="x-clear"></div>'
        );
    },

    /**
     * Creates the field set for the image settings including the title text field.
     *
     * @return Ext.form.FieldSet
     */
    createSettings: function() {
        var me = this;

        me.titleField = Ext.create('Ext.form.field.Text', {
            name: 'description',
            anchor: '100%',
            fieldLabel: me.snippets.imageTitle,
            translatable: true,
            listeners: {
                change: {
                    buffer: 250,
                    fn: function() {
                        me.settingsForm.getForm().updateRecord(me.record);
                    }
                }
            }
        });

        me.settingsForm = Ext.create('Ext.form.Panel', {
            layout: 'anchor',
            border: false,
            bodyStyle: {
                background: 'transparent'
            },
            autoScroll:true,
            defaults: {
                labelWidth: 90,
                anchor: '100%'
            },
            items: [me.titleField]
        });
        return me.settingsForm;
    }
});
//




<?php }} ?>