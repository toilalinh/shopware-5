<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:25:56
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/engine/Library/ExtJs/overrides/Ext.ClassManager.js" */ ?>
<?php /*%%SmartyHeaderCode:57232605257846344295ad3-97386524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd256004bffc70382571bf174b565f7fe530b46c8' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/engine/Library/ExtJs/overrides/Ext.ClassManager.js',
      1 => 1467622778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57232605257846344295ad3-97386524',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_578463442b6ea6_51291112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578463442b6ea6_51291112')) {function content_578463442b6ea6_51291112($_smarty_tpl) {?>/**
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
;(function(Manager, global) {
    /**
     * Checks if a class has already been created.
     *
     * Overridden because Ext does not usually handle situations correctly, where namespaces and classes with the same name exist.
     * Shopware uses this feature extensively:
     *
     * @example
     * <code>
     *     Shopware.apps.Index
     *     Shopware.apps.Login
     *     Shopware.apps.Login.controller.Main
     *     ...
     * </code>
     *
     * @param { String } className
     * @return { Boolean } exist
     */
    Manager.isCreated = function(className) {
        var existCache = this.existCache,
            i, ln, part, root, parts;


        if (this.classes[className] || existCache[className]) {
            return true;
        }

        root = global;
        parts = this.parseNamespace(className);

        for (i = 0, ln = parts.length; i < ln; i++) {
            part = parts[i];

            if (typeof part != 'string') {
                root = part;
            } else {
                if (!root || !root[part]) {
                    return false;
                }

                root = root[part];
            }
        }

        // We need to on [a-z].apps.[a-z] to vertify that sub app classes are ready instead of only their namespace being present.
        if (/^.*\.apps\./.test(className) && typeof root != 'function') {
            return false;
        }

        existCache[className] = true;

        this.triggerCreated(className);

        return true;
    };

    Manager.createOverride = function(className, data, createdFn) {
        var me = this,
            overriddenClassName = data.override,
            requires = data.requires,
            uses = data.uses,
            check = true,
            classReady = function () {
                var cls, temp;

                if (requires) {
                    temp = requires;
                    requires = null; // do the real thing next time (which may be now)

                    // Since the override is going to be used (its target class is now
                    // created), we need to fetch the required classes for the override
                    // and call us back once they are loaded:
                    Ext.Loader.require(temp, classReady);
                } else {
                    // The target class and the required classes for this override are
                    // ready, so we can apply the override now:
                    cls = me.get(overriddenClassName);

                    // Check if the override want to replace the article window
                    if(data.override === 'Shopware.apps.Article.view.detail.Window') {
                        check = me.checkOverride(cls, data);
                    }

                    // We don't want to apply these:
                    delete data.override;
                    delete data.requires;
                    delete data.uses;

                    // The override check was not successful
                    if(!check) {
                        data = { '_invalidPlugin': true, '_invalidClassName': className };
                    } else {
                        data['_invalidPlugin'] = false;
                    }

                    Ext.override(cls, data);

                    // This pushes the overridding file itself into Ext.Loader.history
                    // Hence if the target class never exists, the overriding file will
                    // never be included in the build.
                    me.triggerCreated(className);

                    if (uses) {
                        Ext.Loader.addUsedClasses(uses); // get these classes too!
                    }

                    if (createdFn) {
                        createdFn.call(cls); // last but not least!
                    }
                }
            };

        me.existCache[className] = true;

        // Override the target class right after it's created
        me.onCreated(classReady, me, overriddenClassName);

        return me;
    };

    /**
     * Helper method which checks the override if it's suppports
     * the new 4.1 way to extend the product mask module.
     *
     * The method transforms all functions of the override
     * to a string and checks if one of the functions contains
     * the string "registerAdditionalTab".
     *
     * @param { Ext.Class } cls - The class which should be overridden
     * @param { Object } data - Object which contains all functions which should be
     *        merged into the class.
     * @returns { Boolean } Truthy if the override provides the new way, falsy if not.
     */
    Manager.checkOverride =  function(cls, data) {
        var match = true, fnName, fn;

        for(fnName in data) {
            fn = data[fnName].toString();
            if(fn.match(/createMainTabPanel/i)) {
                match = false;
                break;
            }
        }

        // ..alright, we found the old method to extend the product module,
        // now check if the developer supports the new way as well.
        if(!match) {
            for(fnName in data) {
                fn = data[fnName].toString();
                if(fn.match(/registerAdditionalTab/i)) {
                    match = true;
                    break;
                }
            }
        }

        return match;
    };
})(Ext.ClassManager, Ext.global);
<?php }} ?>