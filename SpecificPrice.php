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

class SpecificPrice extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'specific_price',
        'primary' => 'id_specific_price',
        'fields' => array(
            'id_shop_group' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_shop' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_cart' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_product' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_product_attribute' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_currency' => array('type' => self::TYPE_INT, 'required' => true),
            'id_specific_price_rule' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_country' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_group' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'price' => array('type' => self::TYPE_FLOAT, 'validate' => 'isNegativePrice', 'required' => true),
            'from_quantity' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'reduction' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true),
            'reduction_type' => array('type' => self::TYPE_STRING, 'validate' => 'isReductionType', 'required' => true),
            'from' => array('type' => self::TYPE_DATE, 'validate' => 'isDateFormat', 'required' => true),
            'to' => array('type' => self::TYPE_DATE, 'validate' => 'isDateFormat', 'required' => true),
        ),
    );
    protected static $_specificPriceCache = array();
    protected static $_cache_priorities = array();
    public $id_product;
    public $id_specific_price_rule = 0;
    public $id_cart = 0;
    public $id_product_attribute;
    public $id_shop;
    public $id_shop_group;
    public $id_currency;
    public $id_country;
    public $id_group;
    public $id_customer;
    public $price;
    public $from_quantity;
    public $reduction;
    public $reduction_type;
    public $from;
    public $to;
    protected $webserviceParameters = array(
        'objectsNodeName' => 'specific_prices',
        'objectNodeName' => 'specific_price',
        'fields' => array(
            'id_shop_group' => array('xlink_resource' => 'shop_groups'),
            'id_shop' => array('xlink_resource' => 'shops', 'required' => true),
            'id_cart' => array('xlink_resource' => 'carts', 'required' => true),
            'id_product' => array('xlink_resource' => 'products', 'required' => true),
            'id_product_attribute' => array('xlink_resource' => 'product_attributes'),
            'id_currency' => array('xlink_resource' => 'currencies', 'required' => true),
            'id_country' => array('xlink_resource' => 'countries', 'required' => true),
            'id_group' => array('xlink_resource' => 'groups', 'required' => true),
            'id_customer' => array('xlink_resource' => 'customers', 'required' => true),
        ),
    );

    public static function getByProductId($id_product, $id_product_attribute = false, $id_cart = false)
    {
    }

    public static function deleteByIdCart($id_cart, $id_product = false, $id_product_attribute = false)
    {
    }

    public static function getIdsByProductId($id_product, $id_product_attribute = false, $id_cart = 0)
    {
    }

    public static function getSpecificPrice($id_product, $id_shop, $id_currency, $id_country, $id_group, $quantity, $id_product_attribute = null, $id_customer = 0, $id_cart = 0, $real_quantity = 0)
    {
    }

    /**
     * This method is allow to know if a feature is used or active
     *
     * @since 1.5.0.1
     * @return bool
     */
    public static function isFeatureActive()
    {
    }

    public static function getPriority($id_product)
    {
    }

    public static function setPriorities($priorities)
    {
    }

    public static function deletePriorities()
    {
    }

    public static function setSpecificPriority($id_product, $priorities)
    {
    }

    public static function getQuantityDiscounts($id_product, $id_shop, $id_currency, $id_country, $id_group, $id_product_attribute = null, $all_combinations = false, $id_customer = 0)
    {
    }

    public static function getQuantityDiscount($id_product, $id_shop, $id_currency, $id_country, $id_group, $quantity, $id_product_attribute = null, $id_customer = 0)
    {
    }

    public static function getProductIdByDate($id_shop, $id_currency, $id_country, $id_group, $beginning, $ending, $id_customer = 0, $with_combination_id = false)
    {
    }

    public static function deleteByProductId($id_product)
    {
    }

    public static function exists($id_product, $id_product_attribute, $id_shop, $id_group, $id_country, $id_currency, $id_customer, $from_quantity, $from, $to, $rule = false)
    {
    }

    /**
     * score generation for quantity discount
     */
    protected static function _getScoreQuery($id_product, $id_shop, $id_currency, $id_country, $id_group, $id_customer)
    {
    }

    public function update($null_values = false)
    {
    }

    public function delete()
    {
    }

    public function duplicate($id_product = false)
    {
    }

    public function add($autodate = true, $nullValues = false)
    {
    }
}

