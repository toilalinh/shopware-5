<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:26:25
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/config/view/form/core_license.js" */ ?>
<?php /*%%SmartyHeaderCode:15852676115784636110e165-63387401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '255cdf74f93e6b968fdfd09ee266c7eecce246a3' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/config/view/form/core_license.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15852676115784636110e165-63387401',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57846361246446_14392289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57846361246446_14392289')) {function content_57846361246446_14392289($_smarty_tpl) {?>/**
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

//

/**
 * Shopware UI - Core-license management
 *
 * The customer is able to insert the shopware license data,
 * e.g. the shopware Core license key.
 *
 * If the license key is valid, the shopware backend icon is
 * switched accordingly and the license information is shown
 * to the customer.
 *
 */
//
Ext.define('Shopware.apps.Config.view.form.CoreLicense', {
    extend: 'Shopware.apps.Config.view.base.Form',
    alias: 'widget.config-form-corelicense',
    layout: 'anchor',
    bodyPadding: 20,

    /**
     * Unfilled license data object, used in case of
     * invalid license key check or license removal.
     */
    savedLicenseData: {
        'success': false,
        'message': '',
        'errorType': '',
        'licenseData': {
            'label': '',
            'module': '',
            'creation': '',
            'edition': '',
            'host': '',
            'type': '',
            'license': ''
        }
    },

    /**
     * The translatable label strings for license information.
     * Kept in seperate object to easier prevent interference with smarty compiler.
     */
    infoLabels: {
        heading: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'info'/'heading','default'=>'Add or change and validate your shopware license.','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'heading','default'=>'Add or change and validate your shopware license.','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Add or change and validate your Shopware license.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'heading','default'=>'Add or change and validate your shopware license.','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        license: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'info'/'license','default'=>'License','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'license','default'=>'License','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
License<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'license','default'=>'License','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        error: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'errors'/'common'/'heading','default'=>'Error','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'common'/'heading','default'=>'Error','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'common'/'heading','default'=>'Error','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        registeredTo: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'info'/'registeredTo','default'=>'Registered to','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'registeredTo','default'=>'Registered to','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Registered for<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'registeredTo','default'=>'Registered to','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        createdAt: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'info'/'createdAt','default'=>'Created at','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'createdAt','default'=>'Created at','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Created at<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'createdAt','default'=>'Created at','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * All known shopware edition css classes,
     * used when switching the backend icon.
     */
    editions: [
        'shopware-ce',
        'shopware-pe',
        'shopware-pp',
        'shopware-ee',
        'shopware-eb',
        'shopware-ec'
    ],

    /**
     * Used to keep the date format translatable for
     * different countries.
     */
    dateFormat: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'date_format','default'=>'m/d/Y','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'date_format','default'=>'m/d/Y','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
d/m/Y<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'date_format','default'=>'m/d/Y','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    constructor: function(config) {
        var me = this;
        me.emptyLicenseData = me.savedLicenseData;

        Ext.Ajax.request({
            url: '<?php echo '/backend/CoreLicense/loadSavedLicense';?>',
            method: 'GET',
            async  : false,
            success: function(result){
                me.savedLicenseData = Ext.decode(result.responseText);
            }
        });

        me.callParent(arguments);
    },

    getItems: function() {
        var me = this;

        me.licenseField = Ext.create('Ext.form.field.TextArea', {
            name: 'license',
            height: 250,
            width: '100%',
            anchor: '100%',
            fieldStyle: 'font: 13px monospace !important;',
            cols: 4,
            fieldLabel: '',
            supportText: ''
        });

        me.blockMessage = Shopware.Notification.createBlockMessage('', 'success');
        me.blockMessage.hide();

        /*  */
        me.licenseStatus = Ext.create('Ext.Component', {
            tpl: new Ext.XTemplate(
                '<div style="text-align:left;width:100%;">' +
                    '<p class="x-form-item-label">' +
                      me.infoLabels.heading +
                    '</p>' +
                    '<br />'+
                    '<div class="x-panel" style="width:100%;display:{display};">' +
                        '<div style="height: 100px;">'+
                            '<table style="width:400px;">' +
                                '<tr>' +
                                    '<td>' + me.infoLabels.license + ':</td>' +
                                    '<td><b>{license}</b></td>' +
                                '</tr>'+
                                '<tr>' +
                                    '<td>' + me.infoLabels.registeredTo + ':</td>' +
                                    '<td>{host}</td>' +
                                '</tr>'+
                                '<tr>' +
                                    '<td>' + me.infoLabels.createdAt + ':</td>' +
                                    '<td>{[this.formatDate(values.licenseDate)]}</td>' +
                                '</tr>'+
                            '</table>'+
                        '</div>' +
                    '</div>' +
                '</div>',
                {
                    formatDate: function(licenseDate) {
                        var dt = Ext.Date.parse(licenseDate, 'Ymd');
                        return Ext.Date.format(dt, me.dateFormat);
                    }
                }
            ),
            data: {
                license: '',
                licenseDate: '',
                host: '',
                display: 'none'
            }
        });
        /*  */

        me.showLicenseData(me.savedLicenseData);

        return [
            me.blockMessage,
            me.licenseStatus,
            {
                xtype: 'fieldset',
                title: me.infoLabels.license,
                defaults: {
                    anchor: '100%',
                    labelWidth: 250,
                    xtype: 'textfield'
                },
                items: [
                    me.licenseField
                ]
            },
            {
                xtype: 'container',
                layout: {
                    type: 'hbox',
                    pack: 'end'
                },
                items: [
                    {
                        xtype: 'button',
                        cls: 'small',
                        text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'buttons'/'uninstallLicenseLabel','default'=>'Uninstall','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'buttons'/'uninstallLicenseLabel','default'=>'Uninstall','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
uninstall license<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'buttons'/'uninstallLicenseLabel','default'=>'Uninstall','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        name: 'license-delete-button',
                        handler: Ext.bind(me.handleUninstallButtonClick, me)
                    },
                    {
                        xtype: 'button',
                        cls: 'small primary',
                        text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'buttons'/'addLicenseLabel','default'=>'Save','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'buttons'/'addLicenseLabel','default'=>'Save','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'buttons'/'addLicenseLabel','default'=>'Save','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        name: 'license-set-button',
                        handler: Ext.bind(me.setNewLicense, me)
                    }
                ]
            }
        ];
    },

    /**
     * Displays a confirmation dialog before uninstallation takes place.
     * Triggered when the uninstall button is clicked.
     */
    handleUninstallButtonClick: function(){
        var me = this,
            licenseData = me.savedLicenseData.licenseData;

        // Check if a license is present
        if (!licenseData.host || licenseData.host.length === 0) {
            return;
        }

        Ext.MessageBox.confirm(
            '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'mesagebox'/'uninstall'/'title','default'=>'Uninstallation confirmation','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'mesagebox'/'uninstall'/'title','default'=>'Uninstallation confirmation','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Uninstallation confirmation<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'mesagebox'/'uninstall'/'title','default'=>'Uninstallation confirmation','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'mesagebox'/'uninstall'/'body','default'=>'Are you sure you want to remove your license information from this shopware installation?','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'mesagebox'/'uninstall'/'body','default'=>'Are you sure you want to remove your license information from this shopware installation?','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you sure you want to remove your license information from this Shopware installation?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'mesagebox'/'uninstall'/'body','default'=>'Are you sure you want to remove your license information from this shopware installation?','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            function (response) {
                if (response !== 'yes') {
                    return;
                }

                me.uninstallLicense();
            });
    },

    /**
     * Deletes the license data from database via backend controller,
     * removes the license information content which is visible to the user
     * empty afterwards.
     */
    uninstallLicense: function () {
        var me = this,
            jsonData,
            licensePresent,
            licenseData = me.savedLicenseData.licenseData;

        Ext.Ajax.request({
            url: '<?php echo '/backend/CoreLicense/uninstallLicense';?>',
            method: 'GET',
            success: function (result) {
                jsonData = Ext.decode(result.responseText);

                licensePresent = licenseData.host && licenseData.host.length > 0;
                
                if (jsonData.success) {
                    me.savedLicenseData = me.emptyLicenseData;
                    me.switchEditionIcon('ce');
                    me.licenseField.setValue('');
                    if (licensePresent) {
                        me.licenseStatus.update({
                            license: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'info'/'license'/'unlicensed','default'=>'Not licensed','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'license'/'unlicensed','default'=>'Not licensed','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Not licensed<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'license'/'unlicensed','default'=>'Not licensed','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                            licenseDate: '',
                            host: '',
                            display: 'initial'
                        });
                    }
                    me.blockMessage.hide();
                } else {
                    Shopware.Notification.createGrowlMessage(
                        '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'errors'/'common'/'heading','default'=>'Error','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'common'/'heading','default'=>'Error','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'common'/'heading','default'=>'Error','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'errors'/'common'/'common','default'=>'An unknown error occured.','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'common'/'common','default'=>'An unknown error occured.','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
An unknown error occured.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'common'/'common','default'=>'An unknown error occured.','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'errors'/'common'/'title','default'=>'Core License','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'common'/'title','default'=>'Core License','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Core License<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'common'/'title','default'=>'Core License','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                    );
                }
            }
        });
    },

    /**
     * Tries to validate and set new license information provided
     * by the customer.
     */
    setNewLicense: function(){
        var me = this,
            license = me.licenseField.getValue().trim();

        me.licenseField.setDisabled(true);

        if(!license){
            Shopware.Notification.createGrowlMessage(
                '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'errors'/'common'/'heading','default'=>'Error','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'common'/'heading','default'=>'Error','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'common'/'heading','default'=>'Error','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'errors'/'license'/'common','default'=>'License key could not be validated','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'license'/'common','default'=>'License key could not be validated','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
License key could not be validated.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'license'/'common','default'=>'License key could not be validated','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'errors'/'common'/'title','default'=>'Core License','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'common'/'title','default'=>'Core License','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Core License<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'common'/'title','default'=>'Core License','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            );
            me.licenseField.setDisabled(false);
            return;
        }

        me.checkLicense(license);

        me.licenseField.setDisabled(false);
    },

    /**
     * Performs a license validation request and
     * updates the license information on success,
     * shows error otherwise.
     *
     * @string licenseString
     */
    checkLicense: function(licenseString){
        var me = this,
            jsonData;

        Ext.Ajax.request({
            url: '<?php echo '/backend/CoreLicense/checkLicense';?>',
            method: 'POST',
            params: {
                licenseString: licenseString
            },
            success: function (result) {
                jsonData = Ext.decode(result.responseText);
                if (jsonData.success === true) {
                    me.showLicenseData(jsonData);
                } else {
                    Shopware.Notification.createGrowlMessage(
                        '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'errors'/'common'/'heading','default'=>'Error','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'common'/'heading','default'=>'Error','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Error<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'common'/'heading','default'=>'Error','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        me.getErrorMessage(jsonData.errorType),
                        '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'errors'/'common'/'title','default'=>'Core License','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'common'/'title','default'=>'Core License','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Core License<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'common'/'title','default'=>'Core License','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                    );
                }
            }
        });
    },

    /**
     * Performs the actual task of license information display by
     * updating the ExtJs xTemplate data using the provided object.
     *
     * @object jsonData
     */
    showLicenseData: function (jsonData) {
        var me = this;

        if (jsonData.errorType && jsonData.errorType == 'LicenseHostException') {
            me.switchEditionIcon('ce');
            me.licenseStatus.update({
                license: jsonData.licenseData.label,
                licenseDate: jsonData.licenseData.creation,
                host: jsonData.licenseData.host,
                display: 'initial'
            });
            me.licenseField.setValue(jsonData.licenseData.license);
            me.setBlockMessage('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'errors'/'license'/'host','default'=>'License key is not valid for domain','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'license'/'host','default'=>'License key is not valid for domain','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
License key is not valid for domain.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'license'/'host','default'=>'License key is not valid for domain','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', 'error');
            me.blockMessage.show();
            return;
        }

        if(jsonData.success === false){
            me.savedLicenseData = me.emptyLicenseData;
            me.licenseStatus.update({
                license: '',
                licenseDate: '',
                host: '',
                display: 'none'
            });
            me.blockMessage.hide();
            return;
        }

        me.savedLicenseData = jsonData;
        me.licenseField.setValue(jsonData.licenseData.license);
        me.licenseStatus.update({
            license: jsonData.licenseData.label,
            licenseDate: jsonData.licenseData.creation,
            host: jsonData.licenseData.host,
            display: 'initial'
        });

        me.setBlockMessage('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'message'/'validLicense','default'=>'Your license was successfully validated','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'validLicense','default'=>'Your license was successfully validated','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The validation of your license was successful.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'message'/'validLicense','default'=>'Your license was successfully validated','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', 'success');
        me.blockMessage.show();

        me.switchEditionIcon(jsonData.licenseData.edition);
    },

    /**
     * Update the blockmessage content and type.
     * Doesn't change the blockmessage visibility.
     *
     * @param text
     * @param type
     */
    setBlockMessage: function (text, type) {
        var me = this,
            inner = me.blockMessage.items.first();

        inner.update({
            text: text,
            type: type
        });

        Ext.each(['notice', 'error', 'success'], function (element) {
            inner.removeCls(element);
        });
        inner.addCls(type);
    },

    /**
     * Switches the shopware icon in the backend according
     * to the string provided. If empty parameter is provided,
     * shopware community edition is assumed.
     *
     * @string edition
     */
    switchEditionIcon: function (edition) {
        var me = this,
            classes = Ext.getBody().getAttribute('class').split(" ");

        if(!edition){
            edition = 'ce';
        }

        classes.forEach(function (element) {
            if (Ext.Array.indexOf(me.editions, element) > -1) {
                Ext.getBody().removeCls(element);
                Ext.getBody().addCls('shopware-' + edition.toLowerCase());
            }
        });
    },

    /**
     * Translates an error string from the backend controller to a more
     * human readable and translatable error message.
     * 
     * @string errorType
     * @returns string
     */
    getErrorMessage: function (errorType) {
        var me= this,
            message;

        switch (errorType) {
            case 'LicenseProductKeyException':
                message = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'errors'/'license'/'product_key','default'=>'License key does not match a commercial shopware edition','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'license'/'product_key','default'=>'License key does not match a commercial shopware edition','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
License key does not match a commercial shopware edition.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'license'/'product_key','default'=>'License key does not match a commercial shopware edition','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
                break;
            case 'LicenseHostException':
                message = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'errors'/'license'/'host','default'=>'License key is not valid for domain','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'license'/'host','default'=>'License key is not valid for domain','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
License key is not valid for domain.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'license'/'host','default'=>'License key is not valid for domain','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
                break;
            default:
                message = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'errors'/'license'/'common','default'=>'License key could not be validated','namespace'=>'backend/config/view/core_license')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'license'/'common','default'=>'License key could not be validated','namespace'=>'backend/config/view/core_license'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
License key could not be validated.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errors'/'license'/'common','default'=>'License key could not be validated','namespace'=>'backend/config/view/core_license'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
        }

        return message;
    }
});
//
<?php }} ?>