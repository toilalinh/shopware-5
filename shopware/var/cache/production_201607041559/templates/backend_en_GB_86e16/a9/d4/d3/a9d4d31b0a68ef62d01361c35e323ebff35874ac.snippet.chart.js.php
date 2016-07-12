<?php /* Smarty version Smarty-3.1.12, created on 2016-07-12 05:26:05
         compiled from "/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/customer/view/order/chart.js" */ ?>
<?php /*%%SmartyHeaderCode:12583768265784634da103f8-38270703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9d4d31b0a68ef62d01361c35e323ebff35874ac' => 
    array (
      0 => '/Users/Shared/development/projects_git/webshop/shopware-5/shopware/themes/Backend/ExtJs/backend/customer/view/order/chart.js',
      1 => 1467622780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12583768265784634da103f8-38270703',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5784634da59c12_40107887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784634da59c12_40107887')) {function content_5784634da59c12_40107887($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage Order
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware UI - Customer list backend module
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Customer.view.order.Chart', {
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.customer-list-order-chart',
    /**
     * Define that this component is a chart extension
     * @string
     */
    extend:'Ext.chart.Chart',
    /**
     * Define the chart height
     * @integer
     */
    height:275,
    /**
     * Set css class for this component
     * @string
     */
    cls: Ext.baseCSSPrefix + 'order-chart',
    /**
     * Specifies whether the floating component should be given a shadow. Set to true to automatically create an Ext.Shadow, or a string indicating the shadow's display Ext.Shadow.mode. Set to false to disable the shadow.
     * @boolean
     */
    shadow:true,
    /**
     * True for the default animation (easing: 'ease' and duration: 500) or a standard animation config object to be used for default chart animations.
     * @boolean
     */
    animate:true,
    /**
     * The chart background. This can be a gradient object, image, or color. Defaults to false for no background.
     * @object
     */
    background: {
        fill: '#fff'
    },
    /**
     * The chart needs a width, otherwise extJs throws a warning "Unexpected value undefined when parsing the attribute width".
     * @integer
     */
    width:300,
    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        yAxis:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'chart'/'y_axis','default'=>'Turnover','namespace'=>'backend/customer/view/order')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'chart'/'y_axis','default'=>'Turnover','namespace'=>'backend/customer/view/order'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Turnover<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'chart'/'y_axis','default'=>'Turnover','namespace'=>'backend/customer/view/order'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        xAxis:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'chart'/'x_axis','default'=>'Month','namespace'=>'backend/customer/view/order')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'chart'/'x_axis','default'=>'Month','namespace'=>'backend/customer/view/order'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Month<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'chart'/'x_axis','default'=>'Month','namespace'=>'backend/customer/view/order'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Component event method which fires when the component is initials.
     * Fired when the user want to edit a customer.
     * @return void
     */
    initComponent:function () {
        var me = this;
        me.createAxes();
        me.createSeries();
        me.callParent(arguments);
    },

    /**
     * Creates the line series for the order chart.
     * @return void
     */
    createSeries:function () {
        var me = this;
        me.series = [
            {
                type:'line',
                axis:['left', 'bottom'],
                xField:'date',
                yField:'amount',
                tips:{
                    trackMouse:true,
                    width:140,
                    height:28,
                    renderer:function (storeItem, item) {
                        if ( !storeItem ) {
                            return '';
                        }
                        var amount = storeItem.get('amount'),
                            date = storeItem.get('date');

                        if ( amount && date ) {
                            this.setTitle(Ext.util.Format.date(date, 'M, Y') + ' : ' + Ext.util.Format.currency(amount));
                        }
                    }
                }
            }
        ];
    },

    /**
     * Creates the time and numeric axis for the order chart
     * @return void
     */
    createAxes:function () {
        var me = this;

        me.axes = [
            {
                //To display the month sales amount a numeric axis is used.
                type:'Numeric',
                minimum:0,
                grid:true,
                position:'left',
                fields:[ 'amount' ],
                title:me.snippets.yAxis
            },
            {
                //To display the month a time axis is used.
                type:'Time',
                position:'bottom',
                fields:[ 'date' ],
                step:[ Ext.Date.MONTH, 1 ],
                title:me.snippets.xAxis,
                label:{
                    renderer:function (value) {
                        var myDate = Ext.Date.add(new Date(value), Ext.Date.DAY, 4);
                        return Ext.util.Format.date(myDate, 'M, Y');
                    },
                    rotate:{
                        degrees:300
                    }
                }
            }
        ];
    }
});
//
<?php }} ?>