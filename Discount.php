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

/**
 * @deprecated 1.5.0.1
 */
class Discount extends CartRule
{

    const PERCENT = 1;
    const AMOUNT = 2;
    const FREE_SHIPPING = 3;

    /**
     * @deprecated 1.5.0.1
     */
    public static function getIdByName($code)
    {
    }

    /**
     * @deprecated 1.5.0.1
     */
    public static function getCustomerDiscounts($id_lang, $id_customer, $active = false, $includeGenericOnes = true, $hasStock = false, Cart $cart = null)
    {
    }

    /**
     * @deprecated 1.5.0.1
     */
    public static function getVouchersToCartDisplay($id_lang, $id_customer)
    {
    }

    /**
     * @deprecated 1.5.0.1
     */
    public static function discountExists($discountName, $id_discount = 0)
    {
    }

    /**
     * @deprecated 1.5.0.1
     */
    public static function createOrderDiscount($order, $productList, $qtyList, $name, $shipping_cost = false, $id_category = 0, $subcategory = 0)
    {
    }

    /**
     * @deprecated 1.5.0.1
     */
    public static function display($value, $type, $currency = null)
    {
    }

    /**
     * @deprecated 1.5.0.1
     */
    public function add($autodate = true, $nullValues = false, $categories = null)
    {
    }

    /**
     * @deprecated 1.5.0.1
     */
    public function update($autodate = true, $nullValues = false, $categories = null)
    {
    }

    public function __get($key)
    {
    }

    public function __set($key, $value)
    {
    }

    public function __call($method, $args)
    {
    }

    /**
     * @deprecated 1.5.0.1
     */
    public function getValue($nb_discounts = 0, $order_total_products = 0, $shipping_fees = 0, $id_cart = false, $useTax = true, Currency $currency = null, Shop $shop = null)
    {
    }
}