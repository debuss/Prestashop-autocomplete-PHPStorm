<?php
/*
* 2007-2015 PrestaShop
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
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

/**
 * Represents one product ordered
 *
 * @since 1.5.0
 */
class SupplyOrderDetail extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'supply_order_detail',
        'primary' => 'id_supply_order_detail',
        'fields' => array(
            'id_supply_order' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_product' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_product_attribute' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'reference' => array('type' => self::TYPE_STRING, 'validate' => 'isReference'),
            'supplier_reference' => array('type' => self::TYPE_STRING, 'validate' => 'isReference'),
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true),
            'ean13' => array('type' => self::TYPE_STRING, 'validate' => 'isEan13'),
            'upc' => array('type' => self::TYPE_STRING, 'validate' => 'isUpc'),
            'id_currency' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'exchange_rate' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true),
            'unit_price_te' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true),
            'quantity_expected' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'quantity_received' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'price_te' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true),
            'discount_rate' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true),
            'discount_value_te' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true),
            'price_with_discount_te' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true),
            'tax_rate' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true),
            'tax_value' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true),
            'price_ti' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true),
            'tax_value_with_order_discount' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true),
            'price_with_order_discount_te' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true),
        ),
    );
    /**
     * @var int Supply order
     */
    public $id_supply_order;
    /**
     * @var int Product ordered
     */
    public $id_product;
    /**
     * @var int Product attribute ordered
     */
    public $id_product_attribute;
    /**
     * @var string Product reference
     */
    public $reference;
    /**
     * @var string Product supplier reference
     */
    public $supplier_reference;
    /**
     * @var int Product name
     */
    public $name;
    /**
     * @var int Product EAN13
     */
    public $ean13;
    /**
     * @var string UPC
     */
    public $upc;
    /**
     * @var int Currency used to buy this particular product
     */
    public $id_currency;
    /**
     * @var float Exchange rate between $id_currency and SupplyOrder::$id_ref_currency, at the time
     */
    public $exchange_rate;
    /**
     * @var float Unit price without discount, without tax
     */
    public $unit_price_te = 0;
    /**
     * @var int Quantity ordered
     */
    public $quantity_expected = 0;
    /**
     * @var int Quantity received
     */
    public $quantity_received = 0;
    /**
     * @var float This defines the price of the product, considering the number of units to buy.
     * ($unit_price_te * $quantity), without discount, without tax
     */
    public $price_te = 0;
    /**
     * @var float Supplier discount rate for a given product
     */
    public $discount_rate = 0;
    /**
     * @var float Supplier discount value (($discount_rate / 100) * $price_te), without tax
     */
    public $discount_value_te = 0;
    /**
     * @var float ($price_te - $discount_value_te), with discount, without tax
     */
    public $price_with_discount_te = 0;
    /**
     * @var int Tax rate for the given product
     */
    public $tax_rate = 0;
    /**
     * @var float Tax value for the given product
     */
    public $tax_value = 0;
    /**
     * @var float ($price_with_discount_te + $tax_value)
     */
    public $price_ti = 0;
    /**
     * @var float Tax value of the given product after applying the global order discount (i.e. if SupplyOrder::discount_rate is set)
     */
    public $tax_value_with_order_discount = 0;
    /**
     * @var float This is like $price_with_discount_te, considering the global order discount.
     * (i.e. if SupplyOrder::discount_rate is set)
     */
    public $price_with_order_discount_te = 0;
    /**
     * @see ObjectModel::$webserviceParameters
     */
    protected $webserviceParameters = array(
        'objectsNodeName' => 'supply_order_details',
        'objectNodeName' => 'supply_order_detail',
        'fields' => array(
            'id_supply_order' => array('xlink_resource' => 'supply_orders'),
            'id_product' => array('xlink_resource' => 'products'),
            'id_product_attribute' => array('xlink_resource' => 'combinations'),
        ),
        'hidden_fields' => array(
            'id_currency',
        ),
    );

    /**
     * @see ObjectModel::update()
     */
    public function update($null_values = false)
    {
    }

    /**
     * @see ObjectModel::add()
     */
    public function add($autodate = true, $null_values = false)
    {
    }

    /**
     * Applies a global order discount rate, for the current product (i.e detail)
     * Calls ObjectModel::update()
     *
     * @param float|int $discount_rate The discount rate in percent (Ex. 5 for 5 percents)
     */
    public function applyGlobalDiscount($discount_rate)
    {
    }

    /**
     * @see ObjectModel::validateController()
     * @param bool $htmlentities Optional
     * @return array Errors, if any..
     */
    public function validateController($htmlentities = true)
    {
    }

    /**
     * @see ObjectModel::hydrate()
     */
    public function hydrate(array $data, $id_lang = null)
    {
    }

    /**
     * Calculates all prices for this product based on its quantity and unit price
     * Applies discount if necessary
     * Calculates tax value, function of tax rate
     */
    protected function calculatePrices()
    {
    }
}
