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

class OrderDetail extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'order_detail',
        'primary' => 'id_order_detail',
        'fields' => array(
            'id_order' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_order_invoice' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_warehouse' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_shop' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'product_id' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'product_attribute_id' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'product_name' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true),
            'product_quantity' => array('type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => true),
            'product_quantity_in_stock' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),
            'product_quantity_return' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'product_quantity_refunded' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'product_quantity_reinjected' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'product_price' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true),
            'reduction_percent' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat'),
            'reduction_amount' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'reduction_amount_tax_incl' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'reduction_amount_tax_excl' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'group_reduction' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat'),
            'product_quantity_discount' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat'),
            'product_ean13' => array('type' => self::TYPE_STRING, 'validate' => 'isEan13'),
            'product_upc' => array('type' => self::TYPE_STRING, 'validate' => 'isUpc'),
            'product_reference' => array('type' => self::TYPE_STRING, 'validate' => 'isReference'),
            'product_supplier_reference' => array('type' => self::TYPE_STRING, 'validate' => 'isReference'),
            'product_weight' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat'),
            'tax_name' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName'),
            'tax_rate' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat'),
            'tax_computation_method' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'ecotax' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat'),
            'ecotax_tax_rate' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat'),
            'discount_quantity_applied' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),
            'download_hash' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName'),
            'download_nb' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),
            'download_deadline' => array('type' => self::TYPE_DATE, 'validate' => 'isDateFormat'),
            'unit_price_tax_incl' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'unit_price_tax_excl' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_price_tax_incl' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_price_tax_excl' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'purchase_supplier_price' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'original_product_price' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice')
        ),
    );
    /** @var integer */
    public $id_order_detail;
    /** @var integer */
    public $id_order;
    /** @var integer */
    public $id_order_invoice;
    /** @var integer */
    public $product_id;
    /** @var integer */
    public $id_shop;
    /** @var integer */
    public $product_attribute_id;
    /** @var string */
    public $product_name;
    /** @var integer */
    public $product_quantity;
    /** @var integer */
    public $product_quantity_in_stock;
    /** @var integer */
    public $product_quantity_return;
    /** @var integer */
    public $product_quantity_refunded;
    /** @var integer */
    public $product_quantity_reinjected;
    /** @var float */
    public $product_price;
    /** @var float */
    public $original_product_price;
    /** @var float */
    public $unit_price_tax_incl;
    /** @var float */
    public $unit_price_tax_excl;
    /** @var float */
    public $total_price_tax_incl;
    /** @var float */
    public $total_price_tax_excl;
    /** @var float */
    public $reduction_percent;
    /** @var float */
    public $reduction_amount;
    /** @var float */
    public $reduction_amount_tax_excl;
    /** @var float */
    public $reduction_amount_tax_incl;
    /** @var float */
    public $group_reduction;
    /** @var float */
    public $product_quantity_discount;
    /** @var string */
    public $product_ean13;
    /** @var string */
    public $product_upc;
    /** @var string */
    public $product_reference;
    /** @var string */
    public $product_supplier_reference;
    /** @var float */
    public $product_weight;
    /** @var float */
    public $ecotax;
    /** @var float */
    public $ecotax_tax_rate;
    /** @var integer */
    public $discount_quantity_applied;
    /** @var string */
    public $download_hash;
    /** @var integer */
    public $download_nb;
    /** @var date */
    public $download_deadline;
    /** @var string $tax_name * */
    public $tax_name;
    /** @var float $tax_rate * */
    public $tax_rate;
    /** @var float $tax_computation_method * */
    public $tax_computation_method;
    /** @var int Id warehouse */
    public $id_warehouse;
    /** @var float additional shipping price tax excl */
    public $total_shipping_price_tax_excl;
    /** @var float additional shipping price tax incl */
    public $total_shipping_price_tax_incl;
    /** @var float */
    public $purchase_supplier_price;
    protected $webserviceParameters = array(
        'fields' => array(
            'id_order' => array('xlink_resource' => 'orders'),
            'product_id' => array('xlink_resource' => 'products'),
            'product_attribute_id' => array('xlink_resource' => 'combinations'),
            'product_quantity_reinjected' => array(),
            'group_reduction' => array(),
            'discount_quantity_applied' => array(),
            'download_hash' => array(),
            'download_deadline' => array()
        ),
        'hidden_fields' => array('tax_rate', 'tax_name'),
        'associations' => array(
            'taxes' => array('resource' => 'tax', 'getter' => 'getWsTaxes', 'setter' => false,
                'fields' => array('id' => array(),),
            ),
        ));
    /** @var bool */
    protected $outOfStock = false;
    /** @var TaxCalculator object */
    protected $tax_calculator = null;
    /** @var Address object */
    protected $vat_address = null;
    /** @var Address object */
    protected $specificPrice = null;
    /** @var Customer object */
    protected $customer = null;
    /** @var Context object */
    protected $context = null;

    public function __construct($id = null, $id_lang = null, $context = null)
    {
    }

    public static function getDownloadFromHash($hash)
    {
    }

    public static function incrementDownload($id_order_detail, $increment = 1)
    {
    }

    /**
     * Get a detailed order list of an id_order
     *
     * @param int $id_order
     * @return array
     */
    public static function getList($id_order)
    {
    }

    /**
     * Return the tax calculator associated to this order_detail
     *
     * @since 1.5.0.1
     * @param int $id_order_detail
     * @return TaxCalculator
     */
    public static function getTaxCalculatorStatic($id_order_detail)
    {
    }

    public function delete()
    {
    }

    /**
     * Returns the tax calculator associated to this order detail.
     *
     * @since 1.5.0.1
     * @return TaxCalculator
     */
    public function getTaxCalculator()
    {
    }

    public function updateTaxAmount($order)
    {
    }

    /**
     * Save the tax calculator
     *
     * @since 1.5.0.1
     * @return boolean
     */
    public function saveTaxCalculator(Order $order, $replace = false)
    {
    }

    /**
     * Create a list of order detail for a specified id_order using cart
     *
     * @param object $order
     * @param object $cart
     * @param int $id_order_status
     * @param int $id_order_invoice
     * @param bool $use_taxes set to false if you don't want to use taxes
     */
    public function createList(Order $order, Cart $cart, $id_order_state, $product_list, $id_order_invoice = 0, $use_taxes = true, $id_warehouse = 0)
    {
    }

    /*
     * Set virtual product information
     * @param array $product
     */

    /**
     * Set the additional shipping information
     *
     * @param Order $order
     * @param $product
     */
    public function setShippingCost(Order $order, $product)
    {
    }

    /**
     * Get the state of the current stock product
     *
     * @return array
     */
    public function getStockState()
    {
    }

    public function getWsTaxes()
    {
    }

    protected function setContext($id_shop)
    {
    }

    /**
     * Create an order detail liable to an id_order
     *
     * @param object $order
     * @param object $cart
     * @param array $product
     * @param int $id_order_status
     * @param int $id_order_invoice
     * @param bool $use_taxes set to false if you don't want to use taxes
     */
    protected function create(Order $order, Cart $cart, $product, $id_order_state, $id_order_invoice, $use_taxes = true, $id_warehouse = 0)
    {
    }

    protected function setVirtualProductInformation($product)
    {
    }

    /**
     * Check the order state
     *
     * @param array $product
     * @param int $id_order_state
     */
    protected function checkProductStock($product, $id_order_state)
    {
    }

    /**
     * Apply tax to the product
     *
     * @param object $order
     * @param array $product
     */
    protected function setProductTax(Order $order, $product)
    {
    }

    /**
     * Set detailed product price to the order detail
     *
     * @param object $order
     * @param object $cart
     * @param array $product
     */
    protected function setDetailProductPrice(Order $order, Cart $cart, $product)
    {
    }

    /**
     * Set specific price of the product
     *
     * @param object $order
     */
    protected function setSpecificPrice(Order $order, $product = null)
    {
    }
}
