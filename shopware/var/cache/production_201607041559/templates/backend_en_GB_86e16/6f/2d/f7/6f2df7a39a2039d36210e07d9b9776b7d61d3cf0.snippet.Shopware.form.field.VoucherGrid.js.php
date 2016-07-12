<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:25:58
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.VoucherGrid.js" */ ?>
<?php /*%%SmartyHeaderCode:132474191657846346d955a5-69705160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f2df7a39a2039d36210e07d9b9776b7d61d3cf0' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.VoucherGrid.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132474191657846346d955a5-69705160',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57846346de7830_80058534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57846346de7830_80058534')) {function content_57846346de7830_80058534($_smarty_tpl) {?>/**
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

Ext.define('Shopware.form.field.VoucherGrid', {
    extend: 'Shopware.form.field.Grid',
    alias: 'widget.shopware-form-field-voucher-grid',
    createColumns: function() {
        var me = this;
        return [
            me.createSortingColumn(),
            { dataIndex: 'description', flex: 2 },
            { dataIndex: 'voucherCode', flex: 1 },
            { dataIndex: 'mode', flex: 1, renderer: me.modeRenderer },
            { dataIndex: 'numOrder', flex: 1, renderer: me.orderedRenderer},
            { dataIndex: 'value', flex: 1, renderer: me.valueRenderer },
            me.createActionColumn()
        ];
    },

    modeRenderer: function(value) {
        if (value != 1) {
            return "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'backend/attributes/fields','name'=>'list'/'render_value'/'mode'/'general','default'=>'General')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'backend/attributes/fields','name'=>'list'/'render_value'/'mode'/'general','default'=>'General'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
General<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'backend/attributes/fields','name'=>'list'/'render_value'/'mode'/'general','default'=>'General'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
";
        }
        return "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'backend/attributes/fields','name'=>'list'/'render_value'/'mode'/'individual','default'=>'Individual')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'backend/attributes/fields','name'=>'list'/'render_value'/'mode'/'individual','default'=>'Individual'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Individual<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'backend/attributes/fields','name'=>'list'/'render_value'/'mode'/'individual','default'=>'Individual'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
";
    },

    valueRenderer: function(value, meta, record) {
        value = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"voucher/grid/value_prefix",'namespace'=>'backend/attributes/fields')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"voucher/grid/value_prefix",'namespace'=>'backend/attributes/fields'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Value<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"voucher/grid/value_prefix",'namespace'=>'backend/attributes/fields'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: ' + value + '';
        if(record.get('percental')){
            return value.replace(/[.,]/, Ext.util.Format.decimalSeparator) + " %";
        }
        return value.replace(/[.,]/, Ext.util.Format.decimalSeparator);
    },

    orderedRenderer: function(value, meta, record) {
        var numberOfUnits = record.get('numberOfUnits');
        if (value < numberOfUnits) {
            return '<span style="color:green;">' + value + ' / '  + numberOfUnits +'</span>';
        }
        else {
            return '<span style="color:red;">' + value + ' / '  + numberOfUnits + '</span>';
        }
    },

    createSearchField: function() {
        return Ext.create('Shopware.form.field.VoucherSingleSelection', this.getComboConfig());
    }
});<?php }} ?>