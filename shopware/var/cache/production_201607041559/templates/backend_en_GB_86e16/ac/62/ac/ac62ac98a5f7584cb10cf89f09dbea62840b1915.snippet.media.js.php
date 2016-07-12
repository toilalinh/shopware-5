<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:26:09
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/article/controller/media.js" */ ?>
<?php /*%%SmartyHeaderCode:14362640645784635108d3e9-86090024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac62ac98a5f7584cb10cf89f09dbea62840b1915' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/article/controller/media.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14362640645784635108d3e9-86090024',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463511810a2_37920341',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463511810a2_37920341')) {function content_578463511810a2_37920341($_smarty_tpl) {?>/**
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
 * @subpackage Category
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Controller - Article backend module
 */
//
//
Ext.define('Shopware.apps.Article.controller.Media', {
    /**
     * The parent class that this class extends.
     * @string
     */
    extend:'Ext.app.Controller',

    /**
     * Contains all snippets for the component.
     * @object
     */
    snippets: {
    	upload: {
	    	text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'media'/'upload'/'text','default'=>'The image was uploaded successfully.','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'media'/'upload'/'text','default'=>'The image was uploaded successfully.','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The image was uploaded successfully. Please associate the image with an item.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'media'/'upload'/'text','default'=>'The image was uploaded successfully.','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    	},
        success: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'media'/'success'/'title','default'=>'Success','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'media'/'success'/'title','default'=>'Success','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Successful<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'media'/'success'/'title','default'=>'Success','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            mapping: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'media'/'success'/'mapping','default'=>'The image mapping saved successfully','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'media'/'success'/'mapping','default'=>'The image mapping saved successfully','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The image mapping have been saved successfully.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'media'/'success'/'mapping','default'=>'The image mapping saved successfully','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        failure: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'media'/'failure'/'title','default'=>'Failure','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'media'/'failure'/'title','default'=>'Failure','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'media'/'failure'/'title','default'=>'Failure','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            mapping: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'media'/'failure'/'mapping_violation','default'=>'An error occurred while saving the image mapping:','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'media'/'failure'/'mapping_violation','default'=>'An error occurred while saving the image mapping:','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
An error occurred while attempting to save the image mapping:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'media'/'failure'/'mapping_violation','default'=>'An error occurred while saving the image mapping:','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            noIdViolation: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'media'/'failure'/'no_id_violation','default'=>'No id passed to the php controller action','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'media'/'failure'/'no_id_violation','default'=>'No id passed to the php controller action','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No ID has been sent the PHP controller action.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'media'/'failure'/'no_id_violation','default'=>'No id passed to the php controller action','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            noMoreInformation: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'media'/'failure'/'no_more_information','default'=>'No more information available.','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'media'/'failure'/'no_more_information','default'=>'No more information available.','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
No further information is available.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'media'/'failure'/'no_more_information','default'=>'No more information available.','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            onlyOneCanBeChecked: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'media'/'failure'/'only_one_node','default'=>'You can only activate one configurator option per configurator group.','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'media'/'failure'/'only_one_node','default'=>'You can only activate one configurator option per configurator group.','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Only one configurator option can be activated per configurator group.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'media'/'failure'/'only_one_node','default'=>'You can only activate one configurator option per configurator group.','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        growlMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growlMessage','default'=>'Article','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage','default'=>'Article','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Item<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growlMessage','default'=>'Article','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },
    /**
     * Set component references for easy access
     * @array
     */
    refs:[
        { ref:'mediaList', selector:'article-detail-window article-image-list dataview[name=image-listing]' },
        { ref:'mediaListComponent', selector:'article-detail-window article-image-list' },
        { ref:'previewButton', selector:'article-detail-window article-image-list button[action=previewImage]' },
        { ref:'removeButton', selector:'article-detail-window article-image-list button[action=removeImage]' },
        { ref:'mediaInfo', selector:'article-detail-window article-image-info' },
        { ref:'mediaDropZone', selector:'article-detail-window article-image-upload article-image-drop-zone' }
    ],

    /**
     * A template method that is called when your application boots.
     * It is called before the Application's launch function is executed
     * so gives a hook point to run any code before your Viewport is created.
     *
     * @params orderId - The main controller can handle a orderId parameter to open the order detail page directly
     * @return void
     */
    init:function () {
        var me = this;

        me.control({
            'article-detail-window article-image-list': {
                mediaSelect: me.onSelectMedia,
                mediaDeselect: me.onDeselectMedia,
                mediaMoved: me.onMediaMoved,
                markPreviewImage: me.onMarkPreviewImage,
                removeImage: me.onRemoveImage,
                openImageMapping: me.onOpenImageMapping,
                download: me.onDownload
            },
            'article-image-mapping-window': {
                displayNewRuleWindow: me.onDisplayNewRuleWindow,
                saveMapping: me.onSaveMapping,
                cancel: me.onMappingCancel
            },
            'article-image-rule-window': {
                nodeCheck: me.onNodeCheck,
                createImageMapping: me.onCreateImageMapping
            },
            'article-image-drop-zone html5fileupload': {
                fileUploaded: me.onFileUploaded
            },
            'article-detail-window article-image-info': {
                saveImageSettings: me.onSaveImageSettings
            },
            'article-detail-window article-image-upload': {
                mediaUpload: me.onMediaUpload
            }
        });
        me.callParent(arguments);
    },

    /**
     * Event listener function of the settings panel in the image tab.
     * Fired when the user clicks the button "save settings"
     * @param form
     * @param record
     * @return Boolean
     */
    onSaveImageSettings: function(form, record, callback) {
        var me = this;
        var info = me.getMediaInfo();
        var list = me.getMediaList();

        if (!form || !record) {
            callback();
            return false;
        }
        form.getForm().updateRecord(record);

        info.attributeForm.saveAttribute(record.get('id'), function() {
            callback();
        });

        return true;
    },

    /**
     * Event listener function of the mapping window. Fired when the user
     * clicks the cancel button. All changes will be reverted.
     */
    onMappingCancel: function(mappingWindow) {
        mappingWindow.destroy();
    },

    /**
     * Event listener function of the mapping window. Fired when the user
     * clicks the save button. First on this point the image configuration will
     * be saved to the database and the different article variant images will be created.
     *
     * @param mappingWindow
     */
    onSaveMapping: function(mappingWindow) {
        var me = this;

        //first we have to get the image record of the mapping window.
        var record = mappingWindow.record;

        //than we create a new media mapping store which used to fire the ajax request in all cases to the same backend controller function
        var mappingStore = Ext.create('Shopware.apps.Article.store.MediaMapping');

        //now we set the mapping store of the window into the associated image store.
        record.getMappingsStore =  mappingWindow.store;

        //to be sure the request will be fired, we set the dirty flag of the record
        record.setDirty();

        //now we add the image record to the new store
        mappingStore.add(record);

        //now we set the hasConfig flag for the image manually
        record.set('hasConfig', (record.getMappingsStore.getCount() > 0));

        mappingWindow.setLoading(true);
        //at least we call the sync function to send the request "saveMediaMapping"
        mappingStore.sync({
            success: function(result, operation) {
                mappingWindow.setLoading(false);
                mappingWindow.destroy();
                Shopware.Notification.createGrowlMessage(me.snippets.success.title, me.snippets.success.mapping, me.snippets.growlMessage);
            },
            failure: function(result, operation) {
                var rawData = record.getProxy().getReader().rawData,
                    message = rawData.message;

                mappingWindow.setLoading(false);
                if (Ext.isString(message) && message.length > 0) {
                    message = me.snippets.failure.mapping + '<br>' +  message;
                } else {
                    message = me.snippets.failure.mapping + '<br>' + me.snippets.failure.noMoreInformation;
                }
                Shopware.Notification.createGrowlMessage(me.snippets.failure.title, message, me.snippets.growlMessage);
            }
        });
    },

    /**
     * Event listener function of the "newRule" window. Fired when the user selects
     * some options in the tree panel and clicks the save button to save the new mapping rule.
     * The function iterates first all defined configurator groups to get all options
     * to resolve the option ids of the tree nodes with models.
     * After all options get of the global store, the function creates a new mediaMapping
     * model which each selected option as rule.
     * At least the new mapping model will be added to the mappingWindow grid store.
     *
     * @param ruleWindow
     */
    onCreateImageMapping: function(ruleWindow) {
        var me = this,
            record = ruleWindow.record,
            tree = ruleWindow.configuratorTree,
            nodes = tree.getChecked();

        if (nodes.length === 0) {
            return false;
        }

        //create new store to collect all defined configurator options.
        var allOptions = Ext.create('Ext.data.Store', { model: 'Shopware.apps.Article.model.ConfiguratorOption' });
        me.subApplication.configuratorGroupStore.each(function(group) {
            if (group instanceof Ext.data.Model &&
                    group.getConfiguratorOptions() instanceof Ext.data.Store &&
                    group.getConfiguratorOptions().getCount() > 0) {

                if (group.getConfiguratorOptions()) {
                    allOptions.add(group.getConfiguratorOptions().data.items);
                }
            }
        });

        //create a new mapping model which contains the different configurator options as single rule
        var mapping = Ext.create('Shopware.apps.Article.model.MediaMapping', {
            id: null,
            imageId: record.get('id')
        });

        //now we create a store for the selected options to collect all rules.
        var ruleStore = Ext.create('Ext.data.Store', { model: 'Shopware.apps.Article.model.MediaMappingRule' });

        //we have to iterate the nodes to resolve the configured option ids with models.
        Ext.each(nodes, function(node) {
            var option = allOptions.getById(node.get('id'));

            //the rule model has an association to an configurator option. So we have to create for extJs a new Ext.data.Store
            //to use them as association store.
            var optionStore = Ext.create('Ext.data.Store', { model: 'Shopware.apps.Article.model.ConfiguratorOption' });
            optionStore.add(option);

            //now we create a new rule with the configured option id.
            //we don't have to set the mapping id, because extJs resolve it over the association
            var rule = Ext.create('Shopware.apps.Article.model.MediaMappingRule', {
                id: null,
                optionId: node.get('id')
            });

            //at least we set the associated option store in the new mapping rule model.
            rule.getOptionStore = optionStore;
            ruleStore.add(rule);
        });
        mapping.getRulesStore = ruleStore;
        ruleWindow.store.add(mapping);
        ruleWindow.destroy();
    },

    /**
     * Event listener function of the newRule window. Fired when the user select/deselect a tree node.
     * The user can only select one node per configurator group. So we have to check
     * if the checked node is the only node in the configurator group which is checked.
     *
     * @param node
     * @param checked
     * @return Boolean
     */
    onNodeCheck: function(node, checked) {
        var me = this, onlyOneChecked = true,
            groupNode = null;

        //first we check if the checked parameter is true and the node has a parent node.
        if (checked && node && node.parentNode) {
            //if this is the case the parent node is the configurator group node.
            groupNode = node.parentNode;
            //we have to iterate the child nodes of the group node.
            Ext.each(groupNode.childNodes, function(childNode) {
                //if the queue node not equals the checked node we have to check the "checked" property
                if (childNode !== node && childNode.get('checked')) {
                    //if the checked property is set to true, an other node was already checked in the group
                    onlyOneChecked = false;
                    return false;
                }
            });
            //if the checked node isn't the only checked we have to remove the checked property.
            if (!onlyOneChecked) {
                node.set('checked', false);
                Shopware.Notification.createGrowlMessage(me.snippets.failure.title, me.snippets.failure.onlyOneCanBeChecked, me.snippets.growlMessage);
            }
        }
        return onlyOneChecked;
    },

    /**
     * Event listener function of the mapping window. Fired when the user want to define a new image mapping.
     * Opens the newRule window which contains a tree panel with all activated configurator groups and options.
     * @param window
     */
    onDisplayNewRuleWindow: function(window) {
        var me = this;

        var ruleWindow = me.getView('image.NewRule').create({
            store: window.store,
            record: window.record,
            configuratorGroupStore: me.subApplication.configuratorGroupStore
        }).show();
    },

    /**
     * Event listener function of the image listing. Fired when the user clicks the "config" button in the image listing
     * to configure image mappings.
     *
     * @return Boolean
     */
    onOpenImageMapping: function() {
        var me = this, selected = null,
            mediaList = me.getMediaList();

        if (mediaList.getSelectionModel() &&  mediaList.getSelectionModel().selected && mediaList.getSelectionModel().selected.first()) {
            selected = mediaList.getSelectionModel().selected.first();
        }

        if (!selected instanceof Ext.data.Model) {
            return false;
        }
        var mappingWindow = me.getView('image.Mapping').create({
            record: selected
        }).show();
    },

    /**
     * Event listener function of the image listing. Fired when the user selects an image which isn't defined as
     * preview image. The user want now to define the selected image as new preview image.
     * @return Boolean
     */
    onMarkPreviewImage: function() {
        var me = this,
            mediaList = me.getMediaList(),
            store = mediaList.getStore(),
            selected = null;

        if (mediaList.getSelectionModel() &&  mediaList.getSelectionModel().selected && mediaList.getSelectionModel().selected.first()) {
            selected = mediaList.getSelectionModel().selected.first();
        }

        if (!(selected instanceof Ext.data.Model)) {
            return false;
        }

        store.each(function(item) {
            item.set('main', 2);
        });
        selected.set('main', 1);
    },

    /**
     * Removes the selected image.
     *
     * @return boolean
     */
    onRemoveImage: function() {
        var me = this,
            mediaList = me.getMediaList(),
            store = mediaList.getStore(),
            changeMain,
            selected = null;

        if (mediaList.getSelectionModel() &&  mediaList.getSelectionModel().selected && mediaList.getSelectionModel().selected.first()) {
            selected = mediaList.getSelectionModel().selected.first();
        }

        if (!(selected instanceof Ext.data.Model)) {
            return false;
        }
        changeMain = (selected.get('main')===1);

        store.remove(selected);
        mediaList.getSelectionModel().select(0);
        if (!changeMain) {
            return true;
        }

        var next = store.getAt(0);
        if (next instanceof Ext.data.Model) {
            next.set('main', 1);
        }
    },

    /**
     * Event will be fired when the user want to upload images over the button on the image tab.
     *
     * @event
     * @param [object]
     */
    onMediaUpload: function(field) {
        var dropZone = this.getMediaDropZone(), me = this;

        if(Ext.isIE || Ext.isSafari) {
            var form = field.ownerCt;
            form.submit({
                success: function() {
                    Shopware.Notification.createGrowlMessage(me.snippets.growlMessage, me.snippets.upload.text);
                }
            });
        } else {
            this.uploadMedia(field, dropZone);
        }
    },

    /**
     * Internal helper function to upload article images.
     * @param field
     * @param dropZone
     */
    uploadMedia: function(field, dropZone) {
        var fileField = field.getEl().down('input[type=file]').dom;
        dropZone.mediaDropZone.iterateFiles(fileField.files);
    },

    /**
     * Event listener function which fired when the user want to download the original image.
     *
     * @param file
     */
    onDownload: function(file) {
        var me = this;

        if (!(file instanceof Ext.data.Model)) {
            return;
        }
        window.open(file.get('original'),file.get('name'),'width=1024,height=768');
    },

    /**
     * Event listener function which fired when the user select an article image
     * over the media selection or uploads images over the drag and drop zone or over
     * the file upload field.
     *
     * @param media
     */
    onFileUploaded: function(response) {
        var me = this,
            mediaList = me.getMediaList(),
            store = mediaList.getStore();

        var operation = Ext.decode(response.responseText);
        if (operation.success === true) {
            var media = Ext.create('Shopware.apps.Article.model.Media', operation.data);
            media.set('path', operation.data.name);
            media.set('original', operation.data.path);
            media.set('thumbnail', operation.data.path);
            media.set('main', 2);
            media.set('mediaId', operation.data.id);

            if (store.getCount() === 0) {
                media.set('main', 1);
            }
            media.set('id', 0);
            store.add(media);
        }
    },

    /**
     * Event will be fired when the user select an article image in the listing.
     *
     * @param [Ext.selection.DataViewModel] The selection data view model of the Ext.view.View
     * @param [Shopware.apps.Article.model.Media] The selected media
     */
    onSelectMedia: function(dataViewModel, media, previewButton, removeButton, configButton, downloadButton) {
        var me = this,
            infoView = me.getMediaInfo();

        if (!infoView.record) {
            me.loadInfoView(dataViewModel, media, previewButton, removeButton, configButton, downloadButton);
            return;
        }
        var list = me.getMediaList();

        list.setDisabled(true);
        try {
            me.onSaveImageSettings(infoView.settingsForm, infoView.record, function () {
                me.loadInfoView(dataViewModel, media, previewButton, removeButton, configButton, downloadButton, function () {
                    list.setDisabled(false);
                });
            });
        } catch (e) {
            list.setDisabled(false);
        }
    },

    loadInfoView: function(dataViewModel, media, previewButton, removeButton, configButton, downloadButton, callback) {
        var me = this;
        var infoView = me.getMediaInfo();

        callback = callback ? callback : Ext.emptyFn;

        if (media instanceof Ext.data.Model) {
            infoView.thumbnail.update(media.data);
            infoView.record = media;
            infoView.loadRecord(media);
            infoView.settingsForm.loadRecord(media);
            infoView.attributeForm.loadAttribute(media.get('id'), function() {
                callback();
            });
        }
        me.disableImageButtons(dataViewModel, previewButton, removeButton, configButton, downloadButton);
    },

    /**
     * Event will be fired when the user de select an article image in the listing.
     *
     * @param [Ext.selection.DataViewModel] The selection data view model of the Ext.view.View
     * @param [Shopware.apps.Article.model.Media] The selected media
     */
    onDeselectMedia: function(dataViewModel, media, previewButton, removeButton, configButton, downloadButton) {
        this.disableImageButtons(dataViewModel, previewButton, removeButton, configButton, downloadButton);
    },

    /**
     * Helper function to disable/enable the toolbar buttons of the image list.
     * @param dataViewModel
     * @param previewButton
     * @param removeButton
     * @param configButton
     * @param downloadButton
     */
    disableImageButtons: function(dataViewModel, previewButton, removeButton, configButton, downloadButton) {
        var me = this, selected = null,
            disabled = (dataViewModel.selected.length === 0);

        if (dataViewModel.selected && dataViewModel.selected.first()) {
            selected = dataViewModel.selected.first();
        }

        removeButton.setDisabled(disabled);
        previewButton.setDisabled(disabled);


        if (!selected || !selected.get('id') > 0 || me.subApplication.splitViewActive) {
            configButton.setDisabled(true);
            downloadButton.setDisabled(true);
        } else {
            configButton.setDisabled(disabled);
            downloadButton.setDisabled(disabled);
        }

        if (!disabled) {
            previewButton.setDisabled(selected.get('main')===1);
        }
    },

    /**
     * Event will be fired when the user move an image.
     *
     * @param [Ext.data.Store] The media store
     * @param [Shopware.apps.Article.model.Media] The dragged record
     * @param [Shopware.apps.Article.model.Media] The target record, on which the dragged record dropped
     */
    onMediaMoved: function(mediaStore, draggedRecord, targetRecord) {
        var me = this, index, indexOfDragged;

        if (!mediaStore instanceof Ext.data.Store
                || !draggedRecord instanceof Ext.data.Model
                || !targetRecord instanceof Ext.data.Model) {
            return false;
        }
        index = mediaStore.indexOf(targetRecord);
        indexOfDragged = mediaStore.indexOf(draggedRecord);
        if (index > indexOfDragged) {
            index--;
        }
        mediaStore.remove(draggedRecord);
        mediaStore.insert(index, draggedRecord);
        return true;
    }
});
//
<?php }} ?>