<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:27:38
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/supplier/view/main/detail.js" */ ?>
<?php /*%%SmartyHeaderCode:777851729578463aa39e929-44836640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fb9bc75ab4e99ef3618193353bc9f388ccfba81' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/supplier/view/main/detail.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '777851729578463aa39e929-44836640',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463aa3b9163_16479182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463aa3b9163_16479182')) {function content_578463aa3b9163_16479182($_smarty_tpl) {?>/**
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
 * Shopware UI - Supplier Details
 *
 * This file represents a panel which displays the detail
 * informations for a specific supplier.
 */
//
Ext.define('Shopware.apps.Supplier.view.main.Detail', {
    extend: 'Ext.panel.Panel',
    cls: 'detail-view',
    collapsed: true,
    collapsible: true,
    title: 'Details',
    region: 'east',
    width: 220,
    alias: 'widget.supplier-main-detail',

    /**
     * Init the main detail component.
     * @return void
     */
    initComponent: function() {
        var me = this;
        me.items = me.createDataView();
        me.callParent(arguments);
    },
    /**
     * Creates and returns a Ext.view.View to display detail information about an supplier.
     *
     * @return Ext.view.View
     */
    createDataView: function() {
        var me = this;

        me.dataView = Ext.create('Ext.Component', {
            tpl: me.getTemplate()
        });
        return me.dataView;
    },
    /**
     * Returns an array of strings. See ExtJS Templates
     * @return array of string
     */
    getTemplate : function() {
        return [
            '',
                // Check if we're having a logo
                '<tpl if="image">',
                    '<div class="supplier-logo">',
                        '<img src="{image}" alt="{name}" style="max-height: 200px; max-width: 150px" />',
                    '</div>',
                '</tpl>',
                '<div class="supplier-info">',
                    '<div class="supplier-desc">{description}</div>',
                    // Check if we're having a link here
                    '<tpl if="link">',
                        '<p class="action">',
                            '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'moreinfo','default'=>'More information at','namespace'=>'backend/supplier/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'moreinfo','default'=>'More information at','namespace'=>'backend/supplier/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
More information at...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'moreinfo','default'=>'More information at','namespace'=>'backend/supplier/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <a href="{link}" title="{name}">{link}</a>',
                        '</p>',
                    '</tpl>',
                '</div>',
            ''
        ];
    }
});
//
<?php }} ?>