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
 * @since 1.5.0
 */
class SupplyOrder extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'supply_order',
        'primary' => 'id_supply_order',
        'fields' => array(
            'id_supplier' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'supplier_name' => array('type' => self::TYPE_STRING, 'validate' => 'isCatalogName', 'required' => false),
            'id_lang' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_warehouse' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_supply_order_state' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_currency' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_ref_currency' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'reference' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true),
            'date_delivery_expected' => array('type' => self::TYPE_DATE, 'validate' => 'isDate', 'required' => true),
            'total_te' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_with_discount_te' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_ti' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_tax' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'discount_rate' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => false),
            'discount_value_te' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'is_template' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
        ),
    );
    /**
     * @var int Supplier
     */
    public $id_supplier;
    /**
     * @var string Supplier Name
     */
    public $supplier_name;
    /**
     * @var int The language id used on the delivery note
     */
    public $id_lang;
    /**
     * @var int Warehouse where products will be delivered
     */
    public $id_warehouse;
    /**
     * @var int Current state of the order
     */
    public $id_supply_order_state;
    /**
     * @var int Currency used for the order
     */
    public $id_currency;
    /**
     * @var int Currency used by default in main global configuration (i.e. by default for all shops)
     */
    public $id_ref_currency;
    /**
     * @var string Reference of the order
     */
    public $reference;
    /**
     * @var string Date when added
     */
    public $date_add;
    /**
     * @var string Date when updated
     */
    public $date_upd;
    /**
     * @var string Expected delivery date
     */
    public $date_delivery_expected;
    /**
     * @var float Total price without tax
     */
    public $total_te = 0;
    /**
     * @var float Total price after discount, without tax
     */
    public $total_with_discount_te = 0;
    /**
     * @var float Total price with tax
     */
    public $total_ti = 0;
    /**
     * @var float Total tax value
     */
    public $total_tax = 0;
    /**
     * @var float Supplier discount rate (for the whole order)
     */
    public $discount_rate = 0;
    /**
     * @var float Supplier discount value without tax (for the whole order)
     */
    public $discount_value_te = 0;
    /**
     * @var int Tells if this order is a template
     */
    public $is_template = 0;
    /**
     * @see ObjectModel::$webserviceParameters
     */
    protected $webserviceParameters = array(
        'fields' => array(
            'id_supplier' => array('xlink_resource' => 'suppliers'),
            'id_lang' => array('xlink_resource' => 'languages'),
            'id_warehouse' => array('xlink_resource' => 'warehouses'),
            'id_supply_order_state' => array('xlink_resource' => 'supply_order_states'),
            'id_currency' => array('xlink_resource' => 'currencies'),
        ),
        'hidden_fields' => array(
            'id_ref_currency',
        ),
        'associations' => array(
            'supply_order_details' => array(
                'resource' => 'supply_order_detail',
                'fields' => array(
                    'id' => array(),
                    'id_product' => array(),
                    'id_product_attribute' => array(),
                    'supplier_reference' => array(),
                    'product_name' => array(),
                ),
            ),
        ),
    );

    /**
     * For a given $id_warehouse, tells if it has pending supply orders
     *
     * @param int $id_warehouse
     * @return bool
     */
    public static function warehouseHasPendingOrders($id_warehouse)
    {
    }

    /**
     * For a given $id_supplier, tells if it has pending supply orders
     *
     * @param int $id_supplier Id Supplier
     * @return bool
     */
    public static function supplierHasPendingOrders($id_supplier)
    {
    }

    /**
     * For a given id or reference, tells if the supply order exists
     *
     * @param int|string $match Either the reference of the order, or the Id of the order
     * @return int SupplyOrder Id
     */
    public static function exists($match)
    {
    }

    /**
     * For a given reference, returns the corresponding supply order
     *
     * @param string $reference Reference of the order
     * @return bool|SupplyOrder
     */
    public static function getSupplyOrderByReference($reference)
    {
    }

    /**
     * Gets the reference of a given order
     *
     * @param int $id_supply_order
     * @return bool|string
     */
    public static function getReferenceById($id_supply_order)
    {
    }

    /**
     * @see ObjectModel::update()
     */
    public function update($null_values = false)
    {
    }

    /**
     * Retrieves the details entries (i.e. products) collection for the current order
     *
     * @return PrestaShopCollection Collection of SupplyOrderDetail
     */
    public function getEntriesCollection()
    {
    }

    /**
     * @see ObjectModel::add()
     */
    public function add($autodate = true, $null_values = false)
    {
    }

    /**
     * Retrieves the product entries for the current order
     *
     * @param int $id_lang Optional Id Lang - Uses Context::language::id by default
     * @return array
     */
    public function getEntries($id_lang = null)
    {
    }

    /**
     * Check if the order has entries
     *
     * @return bool Has/Has not
     */
    public function hasEntries()
    {
    }

    /**
     * Check if the current state allows to edit the current order
     *
     * @return bool
     */
    public function isEditable()
    {
    }

    /**
     * Checks if the current state allows to generate a delivery note for this order
     *
     * @return bool
     */
    public function isDeliveryNoteAvailable()
    {
    }

    /**
     * Checks if the current state allows to add products in stock
     *
     * @return bool
     */
    public function isInReceiptState()
    {
    }

    /**
     * Removes all products from the order
     */
    public function resetProducts()
    {
    }

    /**
     * @see ObjectModel::hydrate()
     */
    public function hydrate(array $data, $id_lang = null)
    {
    }

    public function getAllExpectedQuantity()
    {
    }

    public function getAllReceivedQuantity()
    {
    }

    public function getAllPendingQuantity()
    {
    }

    /**
     * Webservice : gets the ids supply_order_detail associated to this order
     *
     * @return array
     */
    public function getWsSupplyOrderDetails()
    {
    }

    /**
     * Checks all products in this order and calculate prices
     * Applies the global discount if necessary
     */
    protected function calculatePrices()
    {
    }

    /*********************************\
     * Webservices Specific Methods
     *********************************/

    /**
     * Historizes the order : its id, its state, and the employee responsible for the current action
     */
    protected function addHistory()
    {
    }
}
