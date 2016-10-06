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

class Cart extends ObjectModel
{

    const ONLY_PRODUCTS = 1;
    const ONLY_DISCOUNTS = 2;
    const BOTH = 3;
    const BOTH_WITHOUT_SHIPPING = 4;
    const ONLY_SHIPPING = 5;
    const ONLY_WRAPPING = 6;
    const ONLY_PRODUCTS_WITHOUT_SHIPPING = 7;
    const ONLY_PHYSICAL_PRODUCTS_WITHOUT_SHIPPING = 8;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'cart',
        'primary' => 'id_cart',
        'fields' => array(
            'id_shop_group' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_shop' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_address_delivery' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_address_invoice' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_carrier' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_currency' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_guest' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_lang' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'recyclable' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'gift' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'gift_message' => array('type' => self::TYPE_STRING, 'validate' => 'isMessage'),
            'mobile_theme' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'delivery_option' => array('type' => self::TYPE_STRING),
            'secure_key' => array('type' => self::TYPE_STRING, 'size' => 32),
            'allow_seperated_package' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDateFormat'),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDateFormat'),
        ),
    );
    protected static $_nbProducts = array();
    protected static $_isVirtualCart = array();
    protected static $_totalWeight = array();
    protected static $_carriers = null;
    protected static $_taxes_rate = null;
    protected static $_attributesLists = array();
    public $id;
    public $id_shop_group;
    public $id_shop;
    /** @var integer Customer delivery address ID */
    public $id_address_delivery;
    /** @var integer Customer invoicing address ID */
    public $id_address_invoice;
    /** @var integer Customer currency ID */
    public $id_currency;
    /** @var integer Customer ID */
    public $id_customer;
    /** @var integer Guest ID */
    public $id_guest;
    /** @var integer Language ID */
    public $id_lang;
    /** @var boolean True if the customer wants a recycled package */
    public $recyclable = 0;
    /** @var boolean True if the customer wants a gift wrapping */
    public $gift = 0;
    /** @var string Gift message if specified */
    public $gift_message;
    /** @var boolean Mobile Theme */
    public $mobile_theme;
    /** @var string Object creation date */
    public $date_add;
    /** @var string secure_key */
    public $secure_key;
    /** @var integer Carrier ID */
    public $id_carrier = 0;
    /** @var string Object last modification date */
    public $date_upd;
    public $checkedTos = false;
    public $pictures;
    public $textFields;
    public $delivery_option;
    /** @var boolean Allow to seperate order in multiple package in order to recieve as soon as possible the available products */
    public $allow_seperated_package = false;
    protected $_products = null;
    protected $_taxCalculationMethod = PS_TAX_EXC;
    protected $webserviceParameters = array(
        'fields' => array(
            'id_address_delivery' => array('xlink_resource' => 'addresses'),
            'id_address_invoice' => array('xlink_resource' => 'addresses'),
            'id_currency' => array('xlink_resource' => 'currencies'),
            'id_customer' => array('xlink_resource' => 'customers'),
            'id_guest' => array('xlink_resource' => 'guests'),
            'id_lang' => array('xlink_resource' => 'languages'),
        ),
        'associations' => array(
            'cart_rows' => array('resource' => 'cart_row', 'virtual_entity' => true, 'fields' => array(
                'id_product' => array('required' => true, 'xlink_resource' => 'products'),
                'id_product_attribute' => array('required' => true, 'xlink_resource' => 'combinations'),
                'quantity' => array('required' => true),
            )
            ),
        ),
    );

    public function __construct($id = null, $id_lang = null)
    {
    }

    public static function getTaxesAverageUsed($id_cart)
    {
    }

    public static function cacheSomeAttributesLists($ipa_list, $id_lang)
    {
    }

    public static function getOrderTotalUsingTaxCalculationMethod($id_cart)
    {
    }

    public static function getTotalCart($id_cart, $use_tax_display = false, $type = CART::BOTH)
    {
    }

    /**
     * Sort list of option delivery by parameters define in the BO
     *
     * @param $option1
     * @param $option2
     * @return int -1 if $option 1 must be placed before and 1 if the $option1 must be placed after the $option2
     */
    public static function sortDeliveryOptionList($option1, $option2)
    {
    }

    /**
     * Translate a int option_delivery identifier (3240002000) in a string ('24,3,')
     */
    public static function desintifier($int, $delimiter = ',')
    {
    }

    public static function lastNoneOrderedCart($id_customer)
    {
    }

    /**
     * Build cart object from provided id_order
     *
     * @param int $id_order
     * @return Cart|bool
     */
    public static function getCartByOrderId($id_order)
    {
    }

    public static function getCartIdByOrderId($id_order)
    {
    }

    public static function getCustomerCarts($id_customer, $with_order = true)
    {
    }

    public static function replaceZeroByShopName($echo, $tr)
    {
    }

    /**
     * isGuestCartByCartId
     *
     * @param int $id_cart
     * @return bool true if cart has been made by a guest customer
     */
    public static function isGuestCartByCartId($id_cart)
    {
    }

    /**
     * Execute hook displayCarrierList (extraCarrier) and merge theme to the $array
     *
     * @param array $array
     */
    public static function addExtraCarriers(&$array)
    {
    }

    public static function getNbProducts($id)
    {
    }

    /**
     * Translate a string option_delivery identifier ('24,3,') in a int (3240002000)
     * The  option_delivery identifier is a list of integers separated by a ','.
     * This method replace the delimiter by a sequence of '0'.
     * The size of this sequence is fixed by the first digit of the return
     *
     * @return int
     */
    public static function intifier($string, $delimiter = ',')
    {
    }

    /**
     * Return cart products
     *
     * @result array Products
     */
    public function getProducts($refresh = false, $id_product = false, $id_country = null)
    {
    }

    /**
     * This function returns the total cart amount
     * Possible values for $type:
     * Cart::ONLY_PRODUCTS
     * Cart::ONLY_DISCOUNTS
     * Cart::BOTH
     * Cart::BOTH_WITHOUT_SHIPPING
     * Cart::ONLY_SHIPPING
     * Cart::ONLY_WRAPPING
     * Cart::ONLY_PRODUCTS_WITHOUT_SHIPPING
     * Cart::ONLY_PHYSICAL_PRODUCTS_WITHOUT_SHIPPING
     *
     * @param boolean $withTaxes With or without taxes
     * @param integer $type Total type
     * @param boolean $use_cache Allow using cache of the method CartRule::getContextualValue
     * @return float Order total
     */
    public function getOrderTotal($with_taxes = true, $type = Cart::BOTH, $products = null, $id_carrier = null, $use_cache = true)
    {
    }

    /*
    ** Customization management
    */

    /**
     * Check if cart contains only virtual products
     *
     * @return boolean true if is a virtual cart or false
     */
    public function isVirtualCart($strict = false)
    {
    }

    /**
     * Return shipping total for the cart
     *
     * @param array $delivery_option Array of the delivery option for each address
     * @param booleal $use_tax
     * @param Country $default_country
     * @return float Shipping total
     */
    public function getTotalShippingCost($delivery_option = null, $use_tax = true, Country $default_country = null)
    {
    }

    /**
     * Get the delivery option seleted, or if no delivery option was selected, the cheapest option for each address
     *
     * @return array delivery option
     */
    public function getDeliveryOption($default_country = null, $dontAutoSelectOptions = false, $use_cache = true)
    {
    }

    /**
     * Set the delivery option and id_carrier, if there is only one carrier
     */
    public function setDeliveryOption($delivery_option = null)
    {
    }

    /**
     * Get all deliveries options available for the current cart
     *
     * @param Country $default_country
     * @param boolean $flush Force flushing cache
     * @return array array(
     *                   0 => array( // First address
     *                       '12,' => array(  // First delivery option available for this address
     *                           carrier_list => array(
     *                               12 => array( // First carrier for this option
     *                                   'instance' => Carrier Object,
     *                                   'logo' => <url to the carriers logo>,
     *                                   'price_with_tax' => 12.4,
     *                                   'price_without_tax' => 12.4,
     *                                   'package_list' => array(
     *                                       1,
     *                                       3,
     *                                   ),
     *                               ),
     *                           ),
     *                           is_best_grade => true, // Does this option have the biggest grade (quick shipping) for this shipping address
     *                           is_best_price => true, // Does this option have the lower price for this shipping address
     *                           unique_carrier => true, // Does this option use a unique carrier
     *                           total_price_with_tax => 12.5,
     *                           total_price_without_tax => 12.5,
     *                           position => 5, // Average of the carrier position
     *                       ),
     *                   ),
     *               );
     *               If there are no carriers available for an address, return an empty  array
     */
    public function getDeliveryOptionList(Country $default_country = null, $flush = false)
    {
    }

    /**
     * Get products grouped by package and by addresses to be sent individualy (one package = one shipping cost).
     *
     * @return array array(
     *                   0 => array( // First address
     *                       0 => array(  // First package
     *                           'product_list' => array(...),
     *                           'carrier_list' => array(...),
     *                           'id_warehouse' => array(...),
     *                       ),
     *                   ),
     *               );
     * @todo Add avaibility check
     */
    public function getPackageList($flush = false)
    {
    }

    /**
     * Return package shipping cost
     *
     * @param integer $id_carrier Carrier ID (default : current carrier)
     * @param booleal $use_tax
     * @param Country $default_country
     * @param Array $product_list
     * @param array $product_list List of product concerned by the shipping. If null, all the product of the cart are used to calculate the shipping cost
     * @return float Shipping total
     */
    public function getPackageShippingCost($id_carrier = null, $use_tax = true, Country $default_country = null, $product_list = null, $id_zone = null)
    {
    }

    /**
     * isCarrierInRange
     * Check if the specified carrier is in range
     *
     * @id_carrier int
     * @id_zone int
     */
    public function isCarrierInRange($id_carrier, $id_zone)
    {
    }

    /**
     * Return cart weight
     *
     * @return float Cart weight
     */
    public function getTotalWeight($products = null)
    {
    }

    /**
     * Get the gift wrapping price
     *
     * @param boolean $with_taxes With or without taxes
     * @return gift wrapping price
     */
    public function getGiftWrappingPrice($with_taxes = true, $id_address = null)
    {
    }

    /**
     * Get all delivery addresses object for the current cart
     */
    public function getAddressCollection()
    {
    }

    /**
     * Update the address id of the cart
     *
     * @param int $id_address Current address id to change
     * @param int $id_address_new New address id
     */
    public function updateAddressId($id_address, $id_address_new)
    {
    }

    public function update($null_values = false)
    {
    }

    public function delete()
    {
    }

    /**
     * Check if order has already been placed
     *
     * @return boolean result
     */
    public function orderExists()
    {
    }

    /**
     * @deprecated 1.5.0, use Cart->getCartRules()
     */
    public function getDiscounts($lite = false, $refresh = false)
    {
    }

    public function getCartRules($filter = CartRule::FILTER_ACTION_ALL)
    {
    }

    public function getDiscountsCustomer($id_cart_rule)
    {
    }

    public function getLastProduct()
    {
    }

    /**
     * Return cart products quantity
     *
     * @result integer Products quantity
     */
    public function nbProducts()
    {
    }

    /**
     * @deprecated 1.5.0, use Cart->addCartRule()
     */
    public function addDiscount($id_cart_rule)
    {
    }

    public function addCartRule($id_cart_rule)
    {
    }

    /**
     * Update product quantity
     *
     * @param integer $quantity Quantity to add (or substract)
     * @param integer $id_product Product ID
     * @param integer $id_product_attribute Attribute ID if needed
     * @param string $operator Indicate if quantity must be increased or decreased
     */
    public function updateQty($quantity, $id_product, $id_product_attribute = null, $id_customization = false,
                              $operator = 'up', $id_address_delivery = 0, Shop $shop = null, $auto_add_cart_rule = true)
    {
    }

    /**
     * Delete a product from the cart
     *
     * @param integer $id_product Product ID
     * @param integer $id_product_attribute Attribute ID if needed
     * @param integer $id_customization Customization id
     * @return boolean result
     */
    public function deleteProduct($id_product, $id_product_attribute = null, $id_customization = null, $id_address_delivery = 0)
    {
    }

    public function containsProduct($id_product, $id_product_attribute = 0, $id_customization = false, $id_address_delivery = 0)
    {
    }

    /**
     * Does the cart use multiple address
     *
     * @return boolean
     */
    public function isMultiAddressDelivery()
    {
    }

    /**
     * Return custom pictures in this cart for a specified product
     *
     * @param int $id_product
     * @param int $type only return customization of this type
     * @param bool $not_in_cart only return customizations that are not in cart already
     * @return array result rows
     */
    public function getProductCustomization($id_product, $type = null, $not_in_cart = false)
    {
    }

    /**
     * @deprecated 1.5.0, use Cart->removeCartRule()
     */
    public function deleteDiscount($id_cart_rule)
    {
    }

    public function removeCartRule($id_cart_rule)
    {
    }

    /**
     * Get the number of packages
     *
     * @return int number of packages
     */
    public function getNbOfPackages()
    {
    }

    public function getPackageIdWarehouse($package, $id_carrier = null)
    {
    }

    public function carrierIsSelected($id_carrier, $id_address)
    {
    }

    /**
     * Get all deliveries options available for the current cart formated like Carriers::getCarriersForOrder
     * This method was wrote for retrocompatibility with 1.4 theme
     * New theme need to use Cart::getDeliveryOptionList() to generate carriers option in the checkout process
     *
     * @since 1.5.0
     * @param Country $default_country
     * @param boolean $flush Force flushing cache
     */
    public function simulateCarriersOutput(Country $default_country = null, $flush = false)
    {
    }

    public function simulateCarrierSelectedOutput()
    {
    }

    /**
     * Return shipping total of a specific carriers for the cart
     *
     * @param int $id_carrier
     * @param array $delivery_option Array of the delivery option for each address
     * @param booleal $useTax
     * @param Country $default_country
     * @return float Shipping total
     */
    public function getCarrierCost($id_carrier, $useTax = true, Country $default_country = null, $delivery_option = null)
    {
    }

    /**
     * @deprecated 1.5.0, use Cart->getPackageShippingCost()
     */
    public function getOrderShippingCost($id_carrier = null, $use_tax = true, Country $default_country = null, $product_list = null)
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public function checkDiscountValidity($obj, $discounts, $order_total, $products, $check_cart_discount = false)
    {
    }

    /**
     * Return useful informations for cart
     *
     * @return array Cart details
     */
    public function getSummaryDetails($id_lang = null, $refresh = false)
    {
    }

    public function checkQuantities()
    {
    }

    /**
     * Add customer's text
     *
     * @params int $id_product
     * @params int $index
     * @params int $type
     * @params string $textValue
     * @return bool Always true
     */
    public function addTextFieldToProduct($id_product, $index, $type, $text_value)
    {
    }

    /**
     * Add customization item to database
     *
     * @param int $id_product
     * @param int $id_product_attribute
     * @param int $index
     * @param int $type
     * @param string $field
     * @param int $quantity
     * @return boolean success
     */
    public function _addCustomization($id_product, $id_product_attribute, $index, $type, $field, $quantity)
    {
    }

    /**
     * Add customer's pictures
     *
     * @return bool Always true
     */
    public function addPictureToProduct($id_product, $index, $type, $file)
    {
    }

    public function deletePictureToProduct($id_product, $index)
    {
    }

    /**
     * Remove a customer's customization
     *
     * @param int $id_product
     * @param int $index
     * @return bool
     */
    public function deleteCustomizationToProduct($id_product, $index)
    {
    }

    public function duplicate()
    {
    }

    public function add($autodate = true, $null_values = false)
    {
    }

    public function getWsCartRows()
    {
    }

    public function setWsCartRows($values)
    {
    }

    public function deleteAssociations()
    {
    }

    public function setProductAddressDelivery($id_product, $id_product_attribute, $old_id_address_delivery, $new_id_address_delivery)
    {
    }

    public function duplicateProduct($id_product, $id_product_attribute, $id_address_delivery,
                                     $new_id_address_delivery, $quantity = 1, $keep_quantity = false)
    {
    }

    /**
     * Update products cart address delivery with the address delivery of the cart
     */
    public function setNoMultishipping()
    {
    }

    /**
     * Set an address to all products on the cart without address delivery
     */
    public function autosetProductAddress()
    {
    }

    /**
     * @param bool $ignore_virtual Ignore virtual product
     * @param bool $exclusive If true, the validation is exclusive : it must be present product in stock and out of stock
     * @since 1.5.0
     * @return bool false is some products from the cart are out of stock
     */
    public function isAllProductsInStock($ignore_virtual = false, $exclusive = false)
    {
    }

    /**
     * Get all the ids of the delivery addresses without carriers
     *
     * @param bool $return_collection Return a collection
     * @return array Array of address id or of address object
     */
    public function getDeliveryAddressesWithoutCarriers($return_collection = false)
    {
    }

    protected function getIdCarrierFromDeliveryOption($delivery_option)
    {
    }

    /**
     * Delete a customization from the cart. If customization is a Picture,
     * then the image is also deleted
     *
     * @param integer $id_customization
     * @return boolean result
     */
    protected function _deleteCustomization($id_customization, $id_product, $id_product_attribute, $id_address_delivery = 0)
    {
    }

    protected function _updateCustomizationQuantity($quantity, $id_customization, $id_product, $id_product_attribute, $id_address_delivery, $operator = 'up')
    {
    }
}
