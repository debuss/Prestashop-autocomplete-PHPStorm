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
* to license@prestashop.com so we can send you a copy 502immediately.
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

class CartRule extends ObjectModel
{

    /* Filters used when retrieving the cart rules applied to a cart of when calculating the value of a reduction */
    const FILTER_ACTION_ALL = 1;
    const FILTER_ACTION_SHIPPING = 2;
    const FILTER_ACTION_REDUCTION = 3;
    const FILTER_ACTION_GIFT = 4;
    const FILTER_ACTION_ALL_NOCAP = 5;
    const BO_ORDER_CODE_PREFIX = 'BO_ORDER_';
    /* This variable controls that a free gift is offered only once, even when multi-shippping is activated and the same product is delivered in both addresses */
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'cart_rule',
        'primary' => 'id_cart_rule',
        'multilang' => true,
        'fields' => array(
            'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'date_from' => array('type' => self::TYPE_DATE, 'validate' => 'isDate', 'required' => true),
            'date_to' => array('type' => self::TYPE_DATE, 'validate' => 'isDate', 'required' => true),
            'description' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 65534),
            'quantity' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'quantity_per_user' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'priority' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'partial_use' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'code' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 254),
            'minimum_amount' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat'),
            'minimum_amount_tax' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'minimum_amount_currency' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),
            'minimum_amount_shipping' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'country_restriction' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'carrier_restriction' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'group_restriction' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'cart_rule_restriction' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'product_restriction' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'shop_restriction' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'free_shipping' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'reduction_percent' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPercentage'),
            'reduction_amount' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat'),
            'reduction_tax' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'reduction_currency' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'reduction_product' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),
            'gift_product' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'gift_product_attribute' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'highlight' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),

            // Lang fields
            'name' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'required' => true, 'size' => 254),
        ),
    );
    protected static $only_one_gift = array();
    public $id;
    public $name;
    public $id_customer;
    public $date_from;
    public $date_to;
    public $description;
    public $quantity = 1;
    public $quantity_per_user = 1;
    public $priority = 1;
    public $partial_use = 1;
    public $code;
    public $minimum_amount;
    public $minimum_amount_tax;
    public $minimum_amount_currency;
    public $minimum_amount_shipping;
    public $country_restriction;
    public $carrier_restriction;
    public $group_restriction;
    public $cart_rule_restriction;
    public $product_restriction;
    public $shop_restriction;
    public $free_shipping;
    public $reduction_percent;
    public $reduction_amount;
    public $reduction_tax;
    public $reduction_currency;
    public $reduction_product;
    public $gift_product;
    public $gift_product_attribute;
    public $highlight;
    public $active = 1;
    public $date_add;
    public $date_upd;

    /**
     * Copy conditions from one cart rule to an other
     *
     * @static
     * @param int $id_cart_rule_source
     * @param int $id_cart_rule_destination
     */
    public static function copyConditions($id_cart_rule_source, $id_cart_rule_destination)
    {
    }

    /**
     * Retrieves the id associated to the given code
     *
     * @static
     * @param string $code
     * @return int|bool
     */
    public static function getIdByCode($code)
    {
    }

    /**
     * @static
     * @param $id_lang
     * @param $id_customer
     * @param bool $active
     * @param bool $includeGeneric
     * @param bool $inStock
     * @param Cart|null $cart
     * @return array
     */
    public static function getCustomerCartRules($id_lang, $id_customer, $active = false, $includeGeneric = true, $inStock = false, Cart $cart = null)
    {
    }

    /**
     * @static
     * @return bool
     */
    public static function isFeatureActive()
    {
    }

    /**
     * @static
     * @param $name
     * @return bool
     */
    public static function cartRuleExists($name)
    {
    }

    /**
     * @static
     * @param $id_customer
     * @return bool
     */
    public static function deleteByIdCustomer($id_customer)
    {
    }

    /**
     * Make sure caches are empty
     * Must be called before calling multiple time getContextualValue()
     */
    public static function cleanCache()
    {
    }

    public static function autoRemoveFromCart($context = null)
    {
    }

    /**
     * @static
     * @param Context|null $context
     * @return mixed
     */
    public static function autoAddToCart(Context $context = null)
    {
    }

    public static function cleanProductRuleIntegrity($type, $list)
    {
    }

    /**
     * @static
     * @param $name
     * @param $id_lang
     * @return array
     */
    public static function getCartsRuleByCode($name, $id_lang)
    {
    }

    protected static function array_uintersect($array1, $array2)
    {
    }

    protected static function array_uintersect_compare($a, $b)
    {
    }

    /**
     * @see ObjectModel::add()
     */
    public function add($autodate = true, $null_values = false)
    {
    }

    public function update($null_values = false)
    {
    }

    /**
     * @see ObjectModel::delete()
     */
    public function delete()
    {
    }

    /**
     * @param $id_customer
     * @return bool
     */
    public function usedByCustomer($id_customer)
    {
    }

    /**
     * Check if this cart rule can be applied
     *
     * @param Context $context
     * @param bool $alreadyInCart Check if the voucher is already on the cart
     * @param bool $display_error Display error
     * @return bool|mixed|string
     */
    public function checkValidity(Context $context, $alreadyInCart = false, $display_error = true)
    {
    }

    /**
     * @return array
     */
    public function getProductRuleGroups()
    {
    }

    /**
     * @param $id_product_rule_group
     * @return array ('type' => ? , 'values' => ?)
     */
    public function getProductRules($id_product_rule_group)
    {
    }

    /**
     * The reduction value is POSITIVE
     *
     * @param bool $use_tax
     * @param Context $context
     * @param boolean $use_cache Allow using cache to avoid multiple free gift using multishipping
     * @return float|int|string
     */
    public function getContextualValue($use_tax, Context $context = null, $filter = null, $package = null, $use_cache = true)
    {
    }

    public function getAssociatedRestrictions($type, $active_only, $i18n)
    {
    }

    /* When an entity associated to a product rule (product, category, attribute, supplier, manufacturer...) is deleted, the product rules must be updated */

    protected function checkProductRestrictions(Context $context, $return_products = false, $display_error = true)
    {
    }

    protected function getCartRuleCombinations()
    {
    }
}

