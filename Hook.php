<?php

/*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class Hook extends ObjectModel
{

    /**
     * @var array List of executed hooks on this page
     */
    public static $executed_hooks = array();
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'hook',
        'primary' => 'id_hook',
        'fields' => array(
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isHookName', 'required' => true, 'size' => 64),
            'title' => array('type' => self::TYPE_STRING),
            'description' => array('type' => self::TYPE_HTML),
            'position' => array('type' => self::TYPE_BOOL),
            'live_edit' => array('type' => self::TYPE_BOOL),
        ),
    );
    /**
     * @deprecated 1.5.0
     */
    protected static $_hook_modules_cache = null;
    /**
     * @deprecated 1.5.0
     */
    protected static $_hook_modules_cache_exec = null;
    /**
     * @var string Hook name identifier
     */
    public $name;
    /**
     * @var string Hook title (displayed in BO)
     */
    public $title;
    /**
     * @var string Hook description
     */
    public $description;
    /**
     * @var bool
     */
    public $position = false;
    /**
     * @var bool Is this hook usable with live edit ?
     */
    public $live_edit = false;

    /**
     * Return Hooks List
     *
     * @param bool $position
     * @return array Hooks List
     */
    public static function getHooks($position = false)
    {
    }

    /**
     * Return Hooks List
     *
     * @since 1.5.0
     * @param int $id_hook
     * @param int $id_module
     * @return array Modules List
     */
    public static function getModulesFromHook($id_hook, $id_module = null)
    {
    }

    /**
     * Get list of all registered hooks with modules
     *
     * @since 1.5.0
     * @return array
     */
    public static function getHookModuleList()
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function updateOrderStatus($newOrderStatusId, $id_order)
    {
    }

    /**
     * Execute modules for specified hook
     *
     * @param string $hook_name Hook Name
     * @param array $hook_args Parameters for the functions
     * @param int $id_module Execute hook for this module only
     * @return string modules output
     */
    public static function exec($hook_name, $hook_args = array(), $id_module = null, $array_return = false, $check_exceptions = true)
    {
    }

    /**
     * Get list of modules we can execute per hook
     *
     * @since 1.5.0
     * @param string $hook_name Get list of modules for this hook if given
     * @return array
     */
    public static function getHookModuleExecList($hook_name = null)
    {
    }

    /**
     * Return retrocompatible hook name
     *
     * @since 1.5.0
     * @param string $hook_name Hook name
     * @return int Hook ID
     */
    public static function getRetroHookName($hook_name)
    {
    }

    /**
     * Get list of hook alias
     *
     * @since 1.5.0
     * @return array
     */
    public static function getHookAliasList()
    {
    }

    /**
     * Return hook ID from name
     *
     * @param string $hook_name Hook name
     * @return int Hook ID
     */
    public static function getIdByName($hook_name)
    {
    }

    public static function wrapLiveEdit($display, $moduleInstance, $id_hook)
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function postUpdateOrderStatus($newOrderStatusId, $id_order)
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function orderConfirmation($id_order)
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function paymentReturn($id_order, $id_module)
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function PDFInvoice($pdf, $id_order)
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function backBeforePayment($module)
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function updateCarrier($id_carrier, $carrier)
    {
    }

    /**
     * Preload hook modules cache
     *
     * @deprecated 1.5.0 use Hook::getHookModuleList() instead
     * @return boolean preload_needed
     */
    public static function preloadHookModulesCache()
    {
    }

    /**
     * Return hook ID from name
     *
     * @param string $hookName Hook name
     * @return integer Hook ID
     * @deprecated since 1.5.0 use Hook::getIdByName() instead
     */
    public static function get($hookName)
    {
    }

    /**
     * Called when quantity of a product is updated.
     *
     * @param Product
     * @param Order
     */
    public static function newOrder($cart, $order, $customer, $currency, $orderStatus)
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function updateQuantity($product, $order = null)
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function productFooter($product, $category)
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function productOutOfStock($product)
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function addProduct($product)
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function updateProduct($product)
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function deleteProduct($product)
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function updateProductAttribute($id_product_attribute)
    {
    }

    public function add($autodate = true, $null_values = false)
    {
    }
}

