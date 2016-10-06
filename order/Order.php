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
*  @license	http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class Order extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'orders',
        'primary' => 'id_order',
        'fields' => array(
            'id_address_delivery' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_address_invoice' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_cart' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_currency' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_shop_group' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_shop' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_lang' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_carrier' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'current_state' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'secure_key' => array('type' => self::TYPE_STRING, 'validate' => 'isMd5'),
            'payment' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true),
            'module' => array('type' => self::TYPE_STRING, 'validate' => 'isModuleName', 'required' => true),
            'recyclable' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'gift' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'gift_message' => array('type' => self::TYPE_STRING, 'validate' => 'isMessage'),
            'mobile_theme' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'total_discounts' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_discounts_tax_incl' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_discounts_tax_excl' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_paid' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true),
            'total_paid_tax_incl' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_paid_tax_excl' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_paid_real' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true),
            'total_products' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true),
            'total_products_wt' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true),
            'total_shipping' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_shipping_tax_incl' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_shipping_tax_excl' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'carrier_tax_rate' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat'),
            'total_wrapping' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_wrapping_tax_incl' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'total_wrapping_tax_excl' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'shipping_number' => array('type' => self::TYPE_STRING, 'validate' => 'isTrackingNumber'),
            'conversion_rate' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true),
            'invoice_number' => array('type' => self::TYPE_INT),
            'delivery_number' => array('type' => self::TYPE_INT),
            'invoice_date' => array('type' => self::TYPE_DATE),
            'delivery_date' => array('type' => self::TYPE_DATE),
            'valid' => array('type' => self::TYPE_BOOL),
            'reference' => array('type' => self::TYPE_STRING),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
        ),
    );
    protected static $_historyCache = array();
    /** @var integer Delivery address id */
    public $id_address_delivery;
    /** @var integer Invoice address id */
    public $id_address_invoice;
    public $id_shop_group;
    public $id_shop;
    /** @var integer Cart id */
    public $id_cart;
    /** @var integer Currency id */
    public $id_currency;
    /** @var integer Language id */
    public $id_lang;
    /** @var integer Customer id */
    public $id_customer;
    /** @var integer Carrier id */
    public $id_carrier;
    /** @var integer Order State id */
    public $current_state;
    /** @var string Secure key */
    public $secure_key;
    /** @var string Payment method */
    public $payment;
    /** @var string Payment module */
    public $module;
    /** @var float Currency conversion rate */
    public $conversion_rate;
    /** @var boolean Customer is ok for a recyclable package */
    public $recyclable = 1;
    /** @var boolean True if the customer wants a gift wrapping */
    public $gift = 0;
    /** @var string Gift message if specified */
    public $gift_message;
    /** @var boolean Mobile Theme */
    public $mobile_theme;
    /**
     * @var string Shipping number
     * @deprecated 1.5.0.4
     * @see OrderCarrier->tracking_number
     */
    public $shipping_number;
    /** @var float Discounts total */
    public $total_discounts;
    public $total_discounts_tax_incl;
    public $total_discounts_tax_excl;
    /** @var float Total to pay */
    public $total_paid;
    /** @var float Total to pay tax included */
    public $total_paid_tax_incl;
    /** @var float Total to pay tax excluded */
    public $total_paid_tax_excl;
    /** @var float Total really paid @deprecated 1.5.0.1 */
    public $total_paid_real;
    /** @var float Products total */
    public $total_products;
    /** @var float Products total tax included */
    public $total_products_wt;
    /** @var float Shipping total */
    public $total_shipping;
    /** @var float Shipping total tax included */
    public $total_shipping_tax_incl;
    /** @var float Shipping total tax excluded */
    public $total_shipping_tax_excl;
    /** @var float Shipping tax rate */
    public $carrier_tax_rate;
    /** @var float Wrapping total */
    public $total_wrapping;
    /** @var float Wrapping total tax included */
    public $total_wrapping_tax_incl;
    /** @var float Wrapping total tax excluded */
    public $total_wrapping_tax_excl;
    /** @var integer Invoice number */
    public $invoice_number;
    /** @var integer Delivery number */
    public $delivery_number;
    /** @var string Invoice creation date */
    public $invoice_date;
    /** @var string Delivery creation date */
    public $delivery_date;
    /** @var boolean Order validity (paid and not canceled) */
    public $valid;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    /**
     * @var string Order reference, this reference is not unique, but unique for a payment
     */
    public $reference;
    protected $webserviceParameters = array(
        'objectMethods' => array('add' => 'addWs'),
        'objectNodeName' => 'order',
        'objectsNodeName' => 'orders',
        'fields' => array(
            'id_address_delivery' => array('xlink_resource' => 'addresses'),
            'id_address_invoice' => array('xlink_resource' => 'addresses'),
            'id_cart' => array('xlink_resource' => 'carts'),
            'id_currency' => array('xlink_resource' => 'currencies'),
            'id_lang' => array('xlink_resource' => 'languages'),
            'id_customer' => array('xlink_resource' => 'customers'),
            'id_carrier' => array('xlink_resource' => 'carriers'),
            'current_state' => array('xlink_resource' => 'order_states'),
            'module' => array('required' => true),
            'invoice_number' => array(),
            'invoice_date' => array(),
            'delivery_number' => array(),
            'delivery_date' => array(),
            'valid' => array(),
            'date_add' => array(),
            'date_upd' => array(),
        ),
        'associations' => array(
            'order_rows' => array('resource' => 'order_row', 'setter' => false, 'virtual_entity' => true,
                'fields' => array(
                    'id' => array(),
                    'product_id' => array('required' => true),
                    'product_attribute_id' => array('required' => true),
                    'product_quantity' => array('required' => true),
                    'product_name' => array('setter' => false),
                    'product_price' => array('setter' => false),
                )),
        ),

    );
    protected $_taxCalculationMethod = PS_TAX_EXC;

    public function __construct($id = null, $id_lang = null)
    {
    }

    public static function getIdOrderProduct($id_customer, $id_product)
    {
    }

    public static function getDiscountsCustomer($id_customer, $id_cart_rule)
    {
    }

    /**
     * Get customer orders
     *
     * @param integer $id_customer Customer id
     * @param boolean $showHiddenStatus Display or not hidden order statuses
     * @return array Customer orders
     */
    public static function getCustomerOrders($id_customer, $showHiddenStatus = false, Context $context = null)
    {
    }

    /* Does NOT delete a product but "cancel" it (which means return/refund/delete it depending of the case) */

    public static function getOrdersIdByDate($date_from, $date_to, $id_customer = null, $type = null)
    {
    }

    public static function getOrdersWithInformations($limit = null, Context $context = null)
    {
    }

    /* DOES delete the product */

    /**
     * @deprecated since 1.5.0.2
     * @static
     * @param $date_from
     * @param $date_to
     * @param $id_customer
     * @param $type
     * @return array
     */
    public static function getOrdersIdInvoiceByDate($date_from, $date_to, $id_customer = null, $type = null)
    {
    }

    /**
     * @deprecated 1.5.0.3
     * @static
     * @param $id_order_state
     * @return array
     */
    public static function getOrderIdsByStatus($id_order_state)
    {
    }

    /**
     * Get customer orders number
     *
     * @param integer $id_customer Customer id
     * @return array Customer orders number
     */
    public static function getCustomerNbOrders($id_customer)
    {
    }

    /**
     * Get an order by its cart id
     *
     * @param integer $id_cart Cart id
     * @return array Order details
     */
    public static function getOrderByCartId($id_cart)
    {
    }

    public static function getLastInvoiceNumber()
    {
    }

    public static function getByDelivery($id_delivery)
    {
    }

    /**
     * Get a collection of orders using reference
     *
     * @since 1.5.0.14
     * @param string $reference
     * @return Collection of Order
     */
    public static function getByReference($reference)
    {
    }

    /**
     * @param int $id_invoice
     * @deprecated 1.5.0.1
     */
    public static function getInvoice($id_invoice)
    {
    }

    /**
     * @param int $id_order
     * @param int $id_customer optionnal
     * @return int id_cart
     */
    public static function getCartIdStatic($id_order, $id_customer = 0)
    {
    }

    /**
     * Gennerate a unique reference for orders generated with the same cart id
     * This references, is usefull for check payment
     *
     * @return String
     */
    public static function generateReference()
    {
    }

    /**
     * Return a unique reference like : GWJTHMZUN#2
     * With multishipping, order reference are the same for all orders made with the same cart
     * in this case this method suffix the order reference by a # and the order number
     *
     * @since 1.5.0.14
     */
    public static function getUniqReferenceOf($id_order)
    {
    }

    /**
     * @see ObjectModel::getFields()
     * @return array
     */
    public function getFields()
    {
    }

    public function add($autodate = true, $null_values = true)
    {
    }

    public function getTaxCalculationMethod()
    {
    }

    public function deleteProduct($order, $orderDetail, $quantity)
    {
    }

    /**
     * This function return products of the orders
     * It's similar to Order::getProducts but witrh similar outputs of Cart::getProducts
     *
     * @return array
     */
    public function getCartProducts()
    {
    }

    public function deleteCustomization($id_customization, $quantity, $orderDetail)
    {
    }

    /**
     * Get order history
     *
     * @param integer $id_lang Language id
     * @param integer $id_order_state Filter a specific order state
     * @param integer $no_hidden Filter no hidden status
     * @param integer $filters Flag to use specific field filter
     * @return array History entries ordered by date DESC
     */
    public function getHistory($id_lang, $id_order_state = false, $no_hidden = false, $filters = 0)
    {
    }

    public function getProductsDetail()
    {
    }

    public function getFirstMessage()
    {
    }

    /**
     * Marked as deprecated but should not throw any "deprecated" message
     * This function is used in order to keep front office backward compatibility 14 -> 1.5
     * (Order History)
     *
     * @deprecated
     */
    public function setProductPrices(&$row)
    {
    }

    /**
     * Get order products
     *
     * @return array Products with price, quantity (with taxe and without)
     */
    public function getProducts($products = false, $selectedProducts = false, $selectedQty = false)
    {
    }

    public function getTaxesAverageUsed()
    {
    }

    /**
     * Count virtual products in order
     *
     * @return int number of virtual products
     */
    public function getVirtualProducts()
    {
    }

    /**
     * Check if order contains (only) virtual products
     *
     * @param boolean $strict If false return true if there are at least one product virtual
     * @return boolean true if is a virtual order or false
     */
    public function isVirtual($strict = true)
    {
    }

    /**
     * @deprecated 1.5.0.1
     */
    public function getDiscounts($details = false)
    {
    }

    public function getCartRules()
    {
    }

    /**
     * Get current order state (eg. Awaiting payment, Delivered...)
     *
     * @return int Order state id
     */
    public function getCurrentState()
    {
    }

    /** Set current order state
     *
     * @param int $id_order_state
     * @param int $id_employee (/!\ not optional except for Webservice.
     */
    public function setCurrentState($id_order_state, $id_employee = 0)
    {
    }

    /**
     * Get current order state name (eg. Awaiting payment, Delivered...)
     *
     * @return array Order state details
     */
    public function getCurrentStateFull($id_lang)
    {
    }

    public function hasBeenDelivered()
    {
    }

    /**
     * Has products returned by the merchant or by the customer?
     */
    public function hasProductReturned()
    {
    }

    public function hasBeenPaid()
    {
    }

    public function hasBeenShipped()
    {
    }

    public function isInPreparation()
    {
    }

    /**
     * Checks if the current order state is paid and shipped
     *
     * @return bool
     */
    public function isPaidAndShipped()
    {
    }

    /**
     * Get product total without taxes
     *
     * @return Product total with taxes
     */
    public function getTotalProductsWithoutTaxes($products = false)
    {
    }

    /**
     * Get product total with taxes
     *
     * @return Product total with taxes
     */
    public function getTotalProductsWithTaxes($products = false)
    {
    }

    /**
     * Get order customer
     *
     * @return Customer $customer
     */
    public function getCustomer()
    {
    }

    /**
     * @deprecated 1.5.0.1
     * @see Order::addCartRule()
     * @param int $id_cart_rule
     * @param string $name
     * @param float $value
     * @return bool
     */
    public function addDiscount($id_cart_rule, $name, $value)
    {
    }

    /**
     * @since 1.5.0.1
     * @param int $id_cart_rule
     * @param string $name
     * @param array $values
     * @param int $id_order_invoice
     * @return bool
     */
    public function addCartRule($id_cart_rule, $name, $values, $id_order_invoice = 0, $free_shipping = null)
    {
    }

    public function getNumberOfDays()
    {
    }

    /**
     * Can this order be returned by the client?
     *
     * @return bool
     */
    public function isReturnable()
    {
    }

    /**
     * This method allows to generate first invoice of the current order
     */
    public function setInvoice($use_existing_payment = false)
    {
    }

    public function setDelivery()
    {
    }

    public function getTotalWeight()
    {
    }

    public function isAssociatedAtGuest($email)
    {
    }

    public function getWsOrderRows()
    {
    }

    public function addWs($autodate = true, $nullValues = false)
    {
    }

    public function deleteAssociations()
    {
    }

    /**
     * This method return the ID of the previous order
     *
     * @since 1.5.0.1
     * @return int
     */
    public function getPreviousOrderId()
    {
    }

    /**
     * This method return the ID of the next order
     *
     * @since 1.5.0.1
     * @return int
     */
    public function getNextOrderId()
    {
    }

    /**
     * Get the an order detail list of the current order
     *
     * @return array
     */
    public function getOrderDetailList()
    {
    }

    public function orderContainProduct($id_product)
    {
    }

    /**
     * This method returns true if at least one order details uses the
     * One After Another tax computation method.
     *
     * @since 1.5.0.1
     * @return boolean
     */
    public function useOneAfterAnotherTaxComputationMethod()
    {
    }

    /**
     * This method allows to get all Order Payment for the current order
     *
     * @since 1.5.0.1
     * @return Collection of Order Payment
     */
    public function getOrderPaymentCollection()
    {
    }

    /**
     * This method allows to add a payment to the current order
     *
     * @since 1.5.0.1
     * @param float $amount_paid
     * @param string $payment_method
     * @param string $payment_transaction_id
     * @param Currency $currency
     * @param string $date
     * @param OrderInvoice $order_invoice
     * @return bool
     */
    public function addOrderPayment($amount_paid, $payment_method = null, $payment_transaction_id = null, $currency = null, $date = null, $order_invoice = null)
    {
    }

    /**
     * Returns the correct product taxes breakdown.
     * Get all documents linked to the current order
     *
     * @since 1.5.0.1
     * @return array
     */
    public function getDocuments()
    {
    }

    public function getReturn()
    {
    }

    /**
     * @return array return all shipping method for the current order
     * state_name sql var is now deprecated - use order_state_name for the state name and carrier_name for the carrier_name
     */
    public function getShipping()
    {
    }

    /**
     * Get all order_slips for the current order
     *
     * @since 1.5.0.2
     * @return Collection of Order slip
     */
    public function getOrderSlipsCollection()
    {
    }

    /**
     * Get all invoices for the current order
     *
     * @since 1.5.0.1
     * @return Collection of Order invoice
     */
    public function getInvoicesCollection()
    {
    }

    /**
     * Get all delivery slips for the current order
     *
     * @since 1.5.0.2
     * @return Collection of Order invoice
     */
    public function getDeliverySlipsCollection()
    {
    }

    /**
     * Get all not paid invoices for the current order
     *
     * @since 1.5.0.2
     * @return Collection of Order invoice not paid
     */
    public function getNotPaidInvoicesCollection()
    {
    }

    /**
     * Get total paid
     *
     * @since 1.5.0.1
     * @param Currency $currency currency used for the total paid of the current order
     * @return float amount in the $currency
     */
    public function getTotalPaid($currency = null)
    {
    }

    /**
     * Get the sum of total_paid_tax_incl of the orders with similar reference
     *
     * @since 1.5.0.1
     * @return float
     */
    public function getOrdersTotalPaid()
    {
    }

    /**
     * This method allows to change the shipping cost of the current order
     *
     * @since 1.5.0.1
     * @param float $amount
     * @return bool
     */
    public function updateShippingCost($amount)
    {
    }

    /**
     * Returns the correct product taxes breakdown.
     *
     * @since 1.5.0.1
     * @return array
     */
    public function getProductTaxesBreakdown()
    {
    }

    /**
     * Returns the shipping taxes breakdown
     *
     * @since 1.5.0.1
     * @return array
     */
    public function getShippingTaxesBreakdown()
    {
    }

    /**
     * Returns the wrapping taxes breakdown
     *
     * @todo
     * @since 1.5.0.1
     * @return array
     */
    public function getWrappingTaxesBreakdown()
    {
    }

    /**
     * Returns the ecotax taxes breakdown
     *
     * @since 1.5.0.1
     * @return array
     */
    public function getEcoTaxTaxesBreakdown()
    {
    }

    /**
     * Has invoice return true if this order has already an invoice
     *
     * @return bool
     */
    public function hasInvoice()
    {
    }

    /**
     * Get warehouse associated to the order
     * return array List of warehouse
     */
    public function getWarehouseList()
    {
    }

    /**
     * @since 1.5.0.4
     * @return OrderState or null if Order haven't a state
     */
    public function getCurrentOrderState()
    {
    }

    /**
     * @see ObjectModel::getWebserviceObjectList()
     */
    public function getWebserviceObjectList($sql_join, $sql_filter, $sql_sort, $sql_limit)
    {
    }

    /**
     * Get all other orders with the same reference
     *
     * @since 1.5.0.13
     */
    public function getBrother()
    {
    }

    /**
     * Get a collection of order payments
     *
     * @since 1.5.0.13
     */
    public function getOrderPayments()
    {
    }

    /**
     * Return a unique reference like : GWJTHMZUN#2
     * With multishipping, order reference are the same for all orders made with the same cart
     * in this case this method suffix the order reference by a # and the order number
     *
     * @since 1.5.0.14
     */
    public function getUniqReference()
    {
    }

    protected function _deleteProduct($orderDetail, $quantity)
    {
    }

    /**
     * This method allow to add stock information on a product detail
     * If advanced stock management is active, get physical stock of this product in the warehouse associated to the ptoduct for the current order
     * Else get the available quantity of the product in fucntion of the shop associated to the order
     *
     * @param array &$product
     */
    protected function setProductCurrentStock(&$product)
    {
    }

    /**
     * This method allow to add image information on a product detail
     *
     * @param array &$product
     */
    protected function setProductImageInformations(&$product)
    {
    }
}
