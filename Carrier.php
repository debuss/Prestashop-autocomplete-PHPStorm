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

class Carrier extends ObjectModel
{

    /**
     * getCarriers method filter
     */
    const PS_CARRIERS_ONLY = 1;
    const CARRIERS_MODULE = 2;
    const CARRIERS_MODULE_NEED_RANGE = 3;
    const PS_CARRIERS_AND_CARRIER_MODULES_NEED_RANGE = 4;
    const ALL_CARRIERS = 5;
    const SHIPPING_METHOD_DEFAULT = 0;
    const SHIPPING_METHOD_WEIGHT = 1;
    const SHIPPING_METHOD_PRICE = 2;
    const SHIPPING_METHOD_FREE = 3;
    const SORT_BY_PRICE = 0;
    const SORT_BY_POSITION = 1;
    const SORT_BY_ASC = 0;
    const SORT_BY_DESC = 1;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'carrier',
        'primary' => 'id_carrier',
        'multilang' => true,
        'multilang_shop' => true,
        'fields' => array(
            /* Classic fields */
            'id_reference' => array('type' => self::TYPE_INT),
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isCarrierName', 'required' => true, 'size' => 64),
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'is_free' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'url' => array('type' => self::TYPE_STRING, 'validate' => 'isAbsoluteUrl'),
            'shipping_handling' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'shipping_external' => array('type' => self::TYPE_BOOL),
            'range_behavior' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'shipping_method' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'max_width' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'max_height' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'max_depth' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'max_weight' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat'),
            'grade' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'size' => 1),
            'external_module_name' => array('type' => self::TYPE_STRING, 'size' => 64),
            'is_module' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'need_range' => array('type' => self::TYPE_BOOL),
            'position' => array('type' => self::TYPE_INT),
            'deleted' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),

            /* Lang fields */
            'delay' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'required' => true, 'size' => 128),
        ),
    );
    protected static $price_by_weight = array();
    protected static $price_by_weight2 = array();
    protected static $price_by_price = array();
    protected static $price_by_price2 = array();
    protected static $cache_tax_rule = array();
    /** @var int common id for carrier historization */
    public $id_reference;
    /** @var string Name */
    public $name;
    /** @var string URL with a '@' for */
    public $url;
    /** @var string Delay needed to deliver customer */
    public $delay;
    /** @var boolean Carrier statuts */
    public $active = true;
    /** @var boolean True if carrier has been deleted (staying in database as deleted) */
    public $deleted = 0;
    /** @var boolean Active or not the shipping handling */
    public $shipping_handling = true;
    /** @var int Behavior taken for unknown range */
    public $range_behavior;
    /** @var boolean Carrier module */
    public $is_module;
    /** @var boolean Free carrier */
    public $is_free = false;
    /** @var int shipping behavior: by weight or by price */
    public $shipping_method = 0;
    /** @var boolean Shipping external */
    public $shipping_external = 0;
    /** @var string Shipping external */
    public $external_module_name = null;
    /** @var boolean Need Range */
    public $need_range = 0;
    /** @var int Position */
    public $position;
    /** @var int maximum package width managed by the transporter */
    public $max_width;
    /** @var int maximum package height managed by the transporter */
    public $max_height;
    /** @var int maximum package deep managed by the transporter */
    public $max_depth;
    /** @var int maximum package weight managed by the transporter */
    public $max_weight;
    /** @var int grade of the shipping delay (0 for longest, 9 for shortest) */
    public $grade;
    protected $webserviceParameters = array(
        'fields' => array(
            'deleted' => array(),
            'is_module' => array(),
            'id_tax_rules_group' => array(
                'getter' => 'getIdTaxRulesGroup',
                'setter' => 'setTaxRulesGroup',
                'xlink_resource' => array(
                    'resourceName' => 'tax_rules_group'
                )
            ),
        ),
    );

    public function __construct($id = null, $id_lang = null)
    {
    }

    public static function getIdTaxRulesGroupByIdCarrier($id_carrier, Context $context = null)
    {
    }

    /**
     * Get delivery prices for a given shipping method (price/weight)
     *
     * @param string $rangeTable Table name (price or weight)
     * @return array Delivery prices
     */
    public static function getDeliveryPriceByRanges($range_table, $id_carrier)
    {
    }

    public static function getDeliveredCountries($id_lang, $active_countries = false, $active_carriers = false, $contain_states = null)
    {
    }

    /**
     * Return the default carrier to use
     *
     * @param array $carriers
     * @param array $defaultCarrier the last carrier selected
     * @return number the id of the default carrier
     */
    public static function getDefaultCarrierSelection($carriers, $default_carrier = 0)
    {
    }

    /**
     * Get carrier using the reference id
     */
    public static function getCarrierByReference($id_reference)
    {
    }

    /**
     * For a given {product, warehouse}, gets the carrier available
     *
     * @since 1.5.0
     * @param Product $product The id of the product, or an array with at least the package size and weight
     * @return array
     */
    public static function getAvailableCarrierList(Product $product, $id_warehouse, $id_address_delivery = null, $id_shop = null, $cart = null)
    {
    }

    public static function checkCarrierZone($id_carrier, $id_zone)
    {
    }

    /**
     * @param int $id_zone
     * @param Array $groups group of the customer
     * @return Array
     */
    public static function getCarriersForOrder($id_zone, $groups = null, $cart = null)
    {
    }

    /**
     * Get all carriers in a given language
     *
     * @param integer $id_lang Language id
     * @param $modules_filters , possible values:
     * PS_CARRIERS_ONLY
     * CARRIERS_MODULE
     * CARRIERS_MODULE_NEED_RANGE
     * PS_CARRIERS_AND_CARRIER_MODULES_NEED_RANGE
     * ALL_CARRIERS
     * @param boolean $active Returns only active carriers when true
     * @return array Carriers
     */
    public static function getCarriers($id_lang, $active = false, $delete = false, $id_zone = false, $ids_group = null, $modules_filters = self::PS_CARRIERS_ONLY)
    {
    }

    public static function checkDeliveryPriceByWeight($id_carrier, $total_weight, $id_zone)
    {
    }

    /**
     * Check delivery prices for a given order
     *
     * @param id_carrier
     * @param floatval $orderTotal Order total to pay
     * @param integer $id_zone Zone id (for customer delivery address)
     * @param integer $id_currency
     * @return float Delivery price
     */
    public static function checkDeliveryPriceByPrice($id_carrier, $order_total, $id_zone, $id_currency = null)
    {
    }

    /**
     * Assign one (ore more) group to all carriers
     *
     * @since 1.5.0
     * @param int|array $id_group_list group id or list of group ids
     * @param array $exception list of id carriers to ignore
     */
    public static function assignGroupToAllCarriers($id_group_list, $exception = null)
    {
    }

    /**
     * Gets the highest carrier position
     *
     * @since 1.5.0
     * @return int $position
     */
    public static function getHigherPosition()
    {
    }

    /**
     * Reorders carrier positions.
     * Called after deleting a carrier.
     *
     * @since 1.5.0
     * @return bool $return
     */
    public static function cleanPositions()
    {
    }

    /**
     * This tricky method generates a sql clause to check if ranged data are overloaded by multishop
     *
     * @since 1.5.0
     * @param string $rangeTable
     * @return string
     */
    public static function sqlDeliveryRangeShop($range_table, $alias = 'd')
    {
    }

    public function getIdTaxRulesGroup(Context $context = null)
    {
    }

    public function add($autodate = true, $null_values = false)
    {
    }

    /**
     * @since 1.5.0
     * @see ObjectModel::delete()
     */
    public function delete()
    {
    }

    public function deleteTaxRulesGroup(array $shops = null)
    {
    }

    /**
     * Change carrier id in delivery prices when updating a carrier
     *
     * @param integer $id_old Old id carrier
     */
    public function setConfiguration($id_old)
    {
    }

    /**
     * Get delivery prices for a given order
     *
     * @param floatval $totalWeight Order total weight
     * @param integer $id_zone Zone id (for customer delivery address)
     * @return float Delivery price
     */
    public function getDeliveryPriceByWeight($total_weight, $id_zone)
    {
    }

    public function getMaxDeliveryPriceByWeight($id_zone)
    {
    }

    /**
     * Get delivery prices for a given order
     *
     * @param floatval $orderTotal Order total to pay
     * @param integer $id_zone Zone id (for customer delivery address)
     * @return float Delivery price
     */
    public function getDeliveryPriceByPrice($order_total, $id_zone, $id_currency = null)
    {
    }

    public function getMaxDeliveryPriceByPrice($id_zone)
    {
    }

    /**
     * Get all zones
     *
     * @return array Zones
     */
    public function getZones()
    {
    }

    /**
     * Get a specific zones
     *
     * @return array Zone
     */
    public function getZone($id_zone)
    {
    }

    /**
     * Add zone
     */
    public function addZone($id_zone)
    {
    }

    /**
     * Delete zone
     */
    public function deleteZone($id_zone)
    {
    }

    /**
     * Gets a specific group
     *
     * @since 1.5.0
     * @return array Group
     */
    public function getGroups()
    {
    }

    /**
     * Clean delivery prices (weight/price)
     *
     * @param string $rangeTable Table name to clean (weight or price according to shipping method)
     * @return boolean Deletion result
     */
    public function deleteDeliveryPrice($range_table)
    {
    }

    /**
     * Add new delivery prices
     *
     * @param array $priceList Prices list in multiple arrays (changed to array since 1.5.0)
     * @return boolean Insertion result
     */
    public function addDeliveryPrice($price_list, $delete = false)
    {
    }

    /**
     * Copy old carrier informations when update carrier
     *
     * @param integer $oldId Old id carrier (copy from that id)
     */
    public function copyCarrierData($old_id)
    {
    }

    /**
     * Check if carrier is used (at least one order placed)
     *
     * @return integer Order count for this carrier
     */
    public function isUsed()
    {
    }

    public function getRangeTable()
    {
    }

    public function getShippingMethod()
    {
    }

    public function getRangeObject()
    {
    }

    public function getRangeSuffix($currency = null)
    {
    }

    public function setTaxRulesGroup($id_tax_rules_group, $all_shops = false)
    {
    }

    /**
     * Returns the taxes rate associated to the carrier
     *
     * @since 1.5
     * @param Address $address
     * @return
     */
    public function getTaxesRate(Address $address)
    {
    }

    /**
     * Returns the taxes calculator associated to the carrier
     *
     * @since 1.5
     * @param Address $address
     * @return
     */
    public function getTaxCalculator(Address $address)
    {
    }

    /**
     * Moves a carrier
     *
     * @since 1.5.0
     * @param boolean $way Up (1) or Down (0)
     * @param integer $position
     * @return boolean Update result
     */
    public function updatePosition($way, $position)
    {
    }
}

