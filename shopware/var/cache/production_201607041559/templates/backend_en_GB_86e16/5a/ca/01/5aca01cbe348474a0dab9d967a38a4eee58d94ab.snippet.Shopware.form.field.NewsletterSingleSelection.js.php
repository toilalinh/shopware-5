<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:25:58
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.NewsletterSingleSelection.js" */ ?>
<?php /*%%SmartyHeaderCode:112259944457846346e561b5-53083357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aca01cbe348474a0dab9d967a38a4eee58d94ab' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.NewsletterSingleSelection.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112259944457846346e561b5-53083357',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57846346e64ba0_71146306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57846346e64ba0_71146306')) {function content_57846346e64ba0_71146306($_smarty_tpl) {?>/**
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
 * @category    Shopware
 * @package     Base
 * @subpackage  Attribute
 * @version     $Id$
 * @author      shopware AG
 */

//

Ext.define('Shopware.form.field.NewsletterSingleSelection', {
    extend: 'Shopware.form.field.SingleSelection',
    alias: 'widget.shopware-form-field-newsletter-single-selection',

    getComboConfig: function() {
        var me = this;
        var config = me.callParent(arguments);

        config.tpl = Ext.create('Ext.XTemplate',
            '<tpl for=".">',
                '<tpl if="senderName">',
                    '<div class="x-boundlist-item">{subject} <i>({senderName})</i></div>',
                '<tpl else>',
                    '<div class="x-boundlist-item">{subject}</div>',
                '</tpl>',
            '</tpl>'
        );
        config.displayTpl = Ext.create('Ext.XTemplate',
            '<tpl for=".">',
                '<tpl if="senderName">',
                    '{subject} ({senderName})',
                '<tpl else>',
                    '{subject}',
                '</tpl>',
            '</tpl>'
        );
        return config;
    }
});<?php }} ?>