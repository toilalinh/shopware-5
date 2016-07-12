<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:26:24
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/config/model/form/cron_job.js" */ ?>
<?php /*%%SmartyHeaderCode:99296162257846360cd8e62-50328220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cb9f35b1190f5ae190f57f1dc8ae49a9fbd455a' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/config/model/form/cron_job.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99296162257846360cd8e62-50328220',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_57846360cf5625_90252383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57846360cf5625_90252383')) {function content_57846360cf5625_90252383($_smarty_tpl) {?>/**
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
 * @package    Shopware_Config
 * @subpackage Config
 * @version    $Id$
 * @author shopware AG
 */

/**
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Config.model.form.CronJob', {
    extend: 'Ext.data.Model',
    fields: [
		//
        { name: 'id', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'action', type: 'string' },
        { name: 'data', type: 'string' },
        { name: 'next', type: 'date', useNull: true },
        { name: 'start', type: 'date', useNull: true },
        { name: 'end', type: 'date', useNull: true },
        { name: 'interval', type: 'int' },
        { name: 'active', type: 'boolean' },
        { name: 'informTemplate', type: 'string' },
        { name: 'informMail', type: 'string' },
        { name: 'pluginId', type: 'int', useNull: true, defaultValue: 0 },
        { name: 'deletable', type: 'boolean', convert: function(v, r) { return r.data.pluginId !== null; } }
    ]
});
//
<?php }} ?>