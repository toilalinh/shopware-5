<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:26:18
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/config/view/base/search.js" */ ?>
<?php /*%%SmartyHeaderCode:12524989825784635a908bd0-11119707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a53afeabdf917fae6dadd507e5bc715d365f99f9' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/config/view/base/search.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12524989825784635a908bd0-11119707',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5784635a91ccd0_78713651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784635a91ccd0_78713651')) {function content_5784635a91ccd0_78713651($_smarty_tpl) {?>/**
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

/**
 * todo@all: Documentation
 */

//

//
Ext.define('Shopware.apps.Config.view.base.Search', {
    extend: 'Ext.form.field.Text',
    alias: 'widget.config-base-search',

    name:'searchfield',
    cls:'searchfield',
    width:100,
    emptyText:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'search'/'empty_text','default'=>'Search...','namespace'=>'backend/config/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'empty_text','default'=>'Search...','namespace'=>'backend/config/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Search...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search'/'empty_text','default'=>'Search...','namespace'=>'backend/config/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    enableKeyEvents:true,
    checkChangeBuffer:500
});
//
<?php }} ?>