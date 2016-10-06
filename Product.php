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
define('_CUSTOMIZE_FILE_', 0);
/**
 * @deprecated 1.5.0.1
 */
define('_CUSTOMIZE_TEXTFIELD_', 1);

class Product extends ObjectModel
{

    const CUSTOMIZE_FILE = 0;
    const CUSTOMIZE_TEXTFIELD = 1;
    /**
     * Note:  prefix is "PTYPE" because TYPE_ is used in ObjectModel (definition)
     */
    const PTYPE_SIMPLE = 0;
    const PTYPE_PACK = 1;
    const PTYPE_VIRTUAL = 2;
    public static $_taxCalculationMethod = null;
    public static $definition = array(
        'table' => 'product',
        'primary' => 'id_product',
        'multilang' => true,
        'multilang_shop' => true,
        'fields' => array(
            // Classic fields
            'id_shop_default' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_manufacturer' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_supplier' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'reference' => array('type' => self::TYPE_STRING, 'validate' => 'isReference', 'size' => 32),
            'supplier_reference' => array('type' => self::TYPE_STRING, 'validate' => 'isReference', 'size' => 32),
            'location' => array('type' => self::TYPE_STRING, 'validate' => 'isReference', 'size' => 64),
            'width' => array('type' => self::TYPE_FLOAT, 'validate' => 'isUnsignedFloat'),
            'height' => array('type' => self::TYPE_FLOAT, 'validate' => 'isUnsignedFloat'),
            'depth' => array('type' => self::TYPE_FLOAT, 'validate' => 'isUnsignedFloat'),
            'weight' => array('type' => self::TYPE_FLOAT, 'validate' => 'isUnsignedFloat'),
            'quantity_discount' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'ean13' => array('type' => self::TYPE_STRING, 'validate' => 'isEan13', 'size' => 13),
            'upc' => array('type' => self::TYPE_STRING, 'validate' => 'isUpc', 'size' => 12),
            'cache_is_pack' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'cache_has_attachments' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'is_virtual' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),

            /* Shop fields */
            'id_category_default' => array('type' => self::TYPE_INT, 'shop' => true, 'validate' => 'isUnsignedId'),
            'id_tax_rules_group' => array('type' => self::TYPE_INT, 'shop' => true, 'validate' => 'isUnsignedId'),
            'on_sale' => array('type' => self::TYPE_BOOL, 'shop' => true, 'validate' => 'isBool'),
            'online_only' => array('type' => self::TYPE_BOOL, 'shop' => true, 'validate' => 'isBool'),
            'ecotax' => array('type' => self::TYPE_FLOAT, 'shop' => true, 'validate' => 'isPrice'),
            'minimal_quantity' => array('type' => self::TYPE_INT, 'shop' => true, 'validate' => 'isUnsignedInt'),
            'price' => array('type' => self::TYPE_FLOAT, 'shop' => true, 'validate' => 'isPrice', 'required' => true),
            'wholesale_price' => array('type' => self::TYPE_FLOAT, 'shop' => true, 'validate' => 'isPrice'),
            'unity' => array('type' => self::TYPE_STRING, 'shop' => true, 'validate' => 'isString'),
            'unit_price_ratio' => array('type' => self::TYPE_FLOAT, 'shop' => true),
            'additional_shipping_cost' => array('type' => self::TYPE_FLOAT, 'shop' => true, 'validate' => 'isPrice'),
            'customizable' => array('type' => self::TYPE_INT, 'shop' => true, 'validate' => 'isUnsignedInt'),
            'text_fields' => array('type' => self::TYPE_INT, 'shop' => true, 'validate' => 'isUnsignedInt'),
            'uploadable_files' => array('type' => self::TYPE_INT, 'shop' => true, 'validate' => 'isUnsignedInt'),
            'active' => array('type' => self::TYPE_BOOL, 'shop' => true, 'validate' => 'isBool'),
            'redirect_type' => array('type' => self::TYPE_STRING, 'shop' => true, 'validate' => 'isString'),
            'id_product_redirected' => array('type' => self::TYPE_INT, 'shop' => true, 'validate' => 'isUnsignedId'),
            'available_for_order' => array('type' => self::TYPE_BOOL, 'shop' => true, 'validate' => 'isBool'),
            'available_date' => array('type' => self::TYPE_DATE, 'shop' => true, 'validate' => 'isDateFormat'),
            'condition' => array('type' => self::TYPE_STRING, 'shop' => true, 'validate' => 'isGenericName', 'values' => array('new', 'used', 'refurbished'), 'default' => 'new'),
            'show_price' => array('type' => self::TYPE_BOOL, 'shop' => true, 'validate' => 'isBool'),
            'indexed' => array('type' => self::TYPE_BOOL, 'shop' => true, 'validate' => 'isBool'),
            'visibility' => array('type' => self::TYPE_STRING, 'shop' => true, 'validate' => 'isProductVisibility', 'values' => array('both', 'catalog', 'search', 'none'), 'default' => 'both'),
            'cache_default_attribute' => array('type' => self::TYPE_INT, 'shop' => true),
            'advanced_stock_management' => array('type' => self::TYPE_BOOL, 'shop' => true, 'validate' => 'isBool'),
            'date_add' => array('type' => self::TYPE_DATE, 'shop' => true, 'validate' => 'isDateFormat'),
            'date_upd' => array('type' => self::TYPE_DATE, 'shop' => true, 'validate' => 'isDateFormat'),

            /* Lang fields */
            'meta_description' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255),
            'meta_keywords' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255),
            'meta_title' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 128),
            'link_rewrite' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isLinkRewrite', 'required' => true, 'size' => 128),
            'name' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCatalogName', 'required' => true, 'size' => 128),
            'description' => array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isString'),
            'description_short' => array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isString'),
            'available_now' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255),
            'available_later' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'IsGenericName', 'size' => 255),
        ),
        'associations' => array(
            'manufacturer' => array('type' => self::HAS_ONE),
            'supplier' => array('type' => self::HAS_ONE),
            'default_category' => array('type' => self::HAS_ONE, 'field' => 'id_category_default', 'object' => 'Category'),
            'tax_rules_group' => array('type' => self::HAS_ONE),
            'categories' => array('type' => self::HAS_MANY, 'field' => 'id_category', 'object' => 'Category', 'association' => 'category_product'),
            'stock_availables' => array('type' => self::HAS_MANY, 'field' => 'id_stock_available', 'object' => 'StockAvailable', 'association' => 'stock_availables'),
        ),
    );
    protected static $_prices = array();
    protected static $_pricesLevel2 = array();
    protected static $_incat = array();
    protected static $_cart_quantity = array();
    protected static $_tax_rules_group = array();
    protected static $_cacheFeatures = array();
    protected static $_frontFeaturesCache = array();
    protected static $producPropertiesCache = array();
    /** @var array cache stock data in getStock() method */
    protected static $cacheStock = array();
    /** @var string Tax name */
    public $tax_name;
    /** @var string Tax rate */
    public $tax_rate;
    /** @var integer Manufacturer id */
    public $id_manufacturer;
    /** @var integer Supplier id */
    public $id_supplier;
    /** @var integer default Category id */
    public $id_category_default;
    /** @var integer default Shop id */
    public $id_shop_default;
    /** @var string Manufacturer name */
    public $manufacturer_name;
    /** @var string Supplier name */
    public $supplier_name;
    /** @var string Name */
    public $name;
    /** @var string Long description */
    public $description;
    /** @var string Short description */
    public $description_short;
    /** @var integer Quantity available */
    public $quantity = 0;
    /** @var integer Minimal quantity for add to cart */
    public $minimal_quantity = 1;
    /** @var string available_now */
    public $available_now;
    /** @var string available_later */
    public $available_later;
    /** @var float Price in euros */
    public $price = 0;
    /** @var float Additional shipping cost */
    public $additional_shipping_cost = 0;
    /** @var float Wholesale Price in euros */
    public $wholesale_price = 0;
    /** @var boolean on_sale */
    public $on_sale = false;
    /** @var boolean online_only */
    public $online_only = false;
    /** @var string unity */
    public $unity = null;
    /** @var float price for product's unity */
    public $unit_price;
    /** @var float price for product's unity ratio */
    public $unit_price_ratio = 0;
    /** @var float Ecotax */
    public $ecotax = 0;
    /** @var string Reference */
    public $reference;
    /** @var string Supplier Reference */
    public $supplier_reference;
    /** @var string Location */
    public $location;
    /** @var string Width in default width unit */
    public $width = 0;
    /** @var string Height in default height unit */
    public $height = 0;
    /** @var string Depth in default depth unit */
    public $depth = 0;
    /** @var string Weight in default weight unit */
    public $weight = 0;
    /** @var string Ean-13 barcode */
    public $ean13;
    /** @var string Upc barcode */
    public $upc;
    /** @var string Friendly URL */
    public $link_rewrite;
    /** @var string Meta tag description */
    public $meta_description;
    /** @var string Meta tag keywords */
    public $meta_keywords;
    /** @var string Meta tag title */
    public $meta_title;
    /** @var boolean Product statuts */
    public $quantity_discount = 0;
    /** @var boolean Product customization */
    public $customizable;
    /** @var boolean Product is new */
    public $new = null;
    /** @var integer Number of uploadable files (concerning customizable products) */
    public $uploadable_files;
    /** @var int Number of text fields */
    public $text_fields;
    /** @var boolean Product statuts */
    public $active = true;
    /** @var boolean Product statuts */
    public $redirect_type = '';
    /** @var boolean Product statuts */
    public $id_product_redirected = 0;
    /** @var boolean Product available for order */
    public $available_for_order = true;
    /** @var string Object available order date */
    public $available_date = '0000-00-00';
    /** @var enum Product condition (new, used, refurbished) */
    public $condition;
    /** @var boolean Show price of Product */
    public $show_price = true;
    /** @var boolean is the product indexed in the search index? */
    public $indexed = 0;
    /** @var string ENUM('both', 'catalog', 'search', 'none') front office visibility */
    public $visibility;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    /*** @var array Tags */
    public $tags;
    public $id_tax_rules_group = 1;
    /**
     * We keep this variable for retrocompatibility for themes
     *
     * @deprecated 1.5.0
     */
    public $id_color_default = 0;
    /**
     * @since 1.5.0
     * @var boolean Tells if the product uses the advanced stock management
     */
    public $advanced_stock_management = 0;
    public $out_of_stock;
    public $depends_on_stock;
    public $isFullyLoaded = false;
    public $cache_is_pack;
    public $cache_has_attachments;
    public $is_virtual;
    public $cache_default_attribute;
    /**
     * @var string If product is populated, this property contain the rewrite link of the default category
     */
    public $category;
    protected $webserviceParameters = array(
        'objectMethods' => array(
            'add' => 'addWs',
            'update' => 'updateWs'
        ),
        'objectNodeNames' => 'products',
        'fields' => array(
            'id_manufacturer' => array(
                'xlink_resource' => 'manufacturers'
            ),
            'id_supplier' => array(
                'xlink_resource' => 'suppliers'
            ),
            'id_category_default' => array(
                'xlink_resource' => 'categories'
            ),
            'new' => array(),
            'cache_default_attribute' => array(),
            'id_default_image' => array(
                'getter' => 'getCoverWs',
                'setter' => 'setCoverWs',
                'xlink_resource' => array(
                    'resourceName' => 'images',
                    'subResourceName' => 'products'
                )
            ),
            'id_default_combination' => array(
                'getter' => 'getWsDefaultCombination',
                'setter' => 'setWsDefaultCombination',
                'xlink_resource' => array(
                    'resourceName' => 'combinations'
                )
            ),
            'id_tax_rules_group' => array(
                'xlink_resource' => array(
                    'resourceName' => 'tax_rules_group'
                )
            ),
            'position_in_category' => array(
                'getter' => 'getWsPositionInCategory',
                'setter' => false
            ),
            'manufacturer_name' => array(
                'getter' => 'getWsManufacturerName',
                'setter' => false
            ),
            'quantity' => array(
                'getter' => false,
                'setter' => false
            ),
            'type' => array(
                'getter' => 'getWsType',
                'setter' => false,
            ),
        ),
        'associations' => array(
            'categories' => array(
                'resource' => 'category',
                'fields' => array(
                    'id' => array('required' => true),
                )
            ),
            'images' => array(
                'resource' => 'image',
                'fields' => array('id' => array())
            ),
            'combinations' => array(
                'resource' => 'combinations',
                'fields' => array(
                    'id' => array('required' => true),
                )
            ),
            'product_option_values' => array(
                'resource' => 'product_options_values',
                'fields' => array(
                    'id' => array('required' => true),
                )
            ),
            'product_features' => array(
                'resource' => 'product_feature',
                'fields' => array(
                    'id' => array('required' => true),
                    'id_feature_value' => array(
                        'required' => true,
                        'xlink_resource' => 'product_feature_values'
                    ),
                )
            ),
            'tags' => array('resource' => 'tag',
                'fields' => array(
                    'id' => array('required' => true),
                )),
            'stock_availables' => array('resource' => 'stock_available',
                'fields' => array(
                    'id' => array('required' => true),
                    'id_product_attribute' => array('required' => true),
                ),
                'setter' => false
            ),
            'accessories' => array(
                'resource' => 'product',
                'fields' => array(
                    'id' => array(
                        'required' => true,
                        'xlink_resource' => 'product'),
                )
            ),
            'product_bundle' => array(
                'resource' => 'products',
                'fields' => array(
                    'id' => array('required' => true),
                    'quantity' => array(),
                ),
            ),
        ),
    );

    public function __construct($id_product = null, $full = false, $id_lang = null, $id_shop = null, Context $context = null)
    {
    }

    /**
     * Get product price
     *
     * @param integer $id_product Product id
     * @param boolean $usetax With taxes or not (optional)
     * @param integer $id_product_attribute Product attribute id (optional).
     *    If set to false, do not apply the combination price impact. NULL does apply the default combination price impact.
     * @param integer $decimals Number of decimals (optional)
     * @param integer $divisor Useful when paying many time without fees (optional)
     * @param boolean $only_reduc Returns only the reduction amount
     * @param boolean $usereduc Set if the returned amount will include reduction
     * @param integer $quantity Required for quantity discount application (default value: 1)
     * @param boolean $forceAssociatedTax DEPRECATED - NOT USED Force to apply the associated tax. Only works when the parameter $usetax is true
     * @param integer $id_customer Customer ID (for customer group reduction)
     * @param integer $id_cart Cart ID. Required when the cookie is not accessible (e.g., inside a payment module, a cron task...)
     * @param integer $id_address Customer address ID. Required for price (tax included) calculation regarding the guest localization
     * @param variable_reference $specificPriceOutput .
     *    If a specific price applies regarding the previous parameters, this variable is filled with the corresponding SpecificPrice object
     * @param boolean $with_ecotax insert ecotax in price output.
     * @return float Product price
     */
    public static function getPriceStatic($id_product, $usetax = true, $id_product_attribute = null, $decimals = 6, $divisor = null,
                                          $only_reduc = false, $usereduc = true, $quantity = 1, $force_associated_tax = false, $id_customer = null, $id_cart = null,
                                          $id_address = null, &$specific_price_output = null, $with_ecotax = true, $use_group_reduction = true, Context $context = null,
                                          $use_customer_price = true)
    {
    }

    /**
     * Price calculation / Get product price
     *
     * @param integer $id_shop Shop id
     * @param integer $id_product Product id
     * @param integer $id_product_attribute Product attribute id
     * @param integer $id_country Country id
     * @param integer $id_state State id
     * @param integer $id_currency Currency id
     * @param integer $id_group Group id
     * @param integer $quantity Quantity Required for Specific prices : quantity discount application
     * @param boolean $use_tax with (1) or without (0) tax
     * @param integer $decimals Number of decimals returned
     * @param boolean $only_reduc Returns only the reduction amount
     * @param boolean $use_reduc Set if the returned amount will include reduction
     * @param boolean $with_ecotax insert ecotax in price output.
     * @param variable_reference $specific_price_output
     *    If a specific price applies regarding the previous parameters, this variable is filled with the corresponding SpecificPrice object
     * @return float Product price
     **/
    public static function priceCalculation($id_shop, $id_product, $id_product_attribute, $id_country, $id_state, $zipcode, $id_currency,
                                            $id_group, $quantity, $use_tax, $decimals, $only_reduc, $use_reduc, $with_ecotax, &$specific_price, $use_group_reduction,
                                            $id_customer = 0, $use_customer_price = true, $id_cart = 0, $real_quantity = 0)
    {
    }

    /**
     * Get the default attribute for a product
     *
     * @return int Attributes list
     */
    public static function getDefaultAttribute($id_product, $minimum_quantity = 0)
    {
    }

    /**
     * Create JOIN query with 'stock_available' table
     *
     * @param string $productAlias Alias of product table
     * @param string|int $productAttribute If string : alias of PA table ; if int : value of PA ; if null : nothing about PA
     * @param bool $innerJoin LEFT JOIN or INNER JOIN
     * @param Shop $shop
     * @return string
     */
    public static function sqlStock($product_alias, $product_attribute = 0, $inner_join = false, Shop $shop = null)
    {
    }

    public static function getIdTaxRulesGroupByIdProduct($id_product, Context $context = null)
    {
    }

    public static function getTaxCalculationMethod($id_customer = null)
    {
    }

    /*
     * Reorder product position in category $id_category.
     * Call it after deleting a product from a category.
     *
     * @param int $id_category
     */

    public static function initPricesComputation($id_customer = null)
    {
    }

    public static function updateIsVirtual($id_product)
    {
    }

    /**
     * Get all available products
     *
     * @param integer $id_lang Language id
     * @param integer $start Start number
     * @param integer $limit Number of products to return
     * @param string $order_by Field for ordering
     * @param string $order_way Way for ordering (ASC or DESC)
     * @return array Products details
     */
    public static function getProducts($id_lang, $start, $limit, $order_by, $order_way, $id_category = false,
                                       $only_active = false, Context $context = null)
    {
    }

    public static function getTaxesInformations($row, Context $context = null)
    {
    }

    public static function getSimpleProducts($id_lang, Context $context = null)
    {
    }

    /**
     * Get new products
     *
     * @param integer $id_lang Language id
     * @param integer $pageNumber Start from (optional)
     * @param integer $nbProducts Number of products to return (optional)
     * @return array New products
     */
    public static function getNewProducts($id_lang, $page_number = 0, $nb_products = 10,
                                          $count = false, $order_by = null, $order_way = null, Context $context = null)
    {
    }

    public static function cacheFrontFeatures($product_ids, $id_lang)
    {
    }

    public static function getProductsProperties($id_lang, $query_result)
    {
    }

    public static function getProductProperties($id_lang, $row, Context $context = null)
    {
    }

    public static function isAvailableWhenOutOfStock($out_of_stock)
    {
    }

    /**
     * @deprecated 1.5.0 Use Combination::getPrice()
     */
    public static function getProductAttributePrice($id_product_attribute)
    {
    }

    /**
     * Get available product quantities
     *
     * @param integer $id_product Product id
     * @param integer $id_product_attribute Product attribute id (optional)
     * @return integer Available quantities
     */
    public static function getQuantity($id_product, $id_product_attribute = null, $cache_is_pack = null)
    {
    }

    public static function defineProductImage($row, $id_lang)
    {
    }

    public static function getFrontFeaturesStatic($id_lang, $id_product)
    {
    }

    public static function getAttachmentsStatic($id_lang, $id_product)
    {
    }

    /**
     * Get a random special
     *
     * @param integer $id_lang Language id
     * @return array Special
     */
    public static function getRandomSpecial($id_lang, $beginning = false, $ending = false, Context $context = null)
    {
    }

    /**
     * Get prices drop
     *
     * @param integer $id_lang Language id
     * @param integer $pageNumber Start from (optional)
     * @param integer $nbProducts Number of products to return (optional)
     * @param boolean $count Only in order to get total number (optional)
     * @return array Prices drop
     */
    public static function getPricesDrop($id_lang, $page_number = 0, $nb_products = 10, $count = false,
                                         $order_by = null, $order_way = null, $beginning = false, $ending = false, Context $context = null)
    {
    }

    public static function getProductCategoriesFull($id_product = '', $id_lang = null)
    {
    }

    public static function convertAndFormatPrice($price, $currency = false, Context $context = null)
    {
    }

    public static function isDiscounted($id_product, $quantity = 1, Context $context = null)
    {
    }

    /**
     * Display price with right format and currency
     *
     * @param array $params Params
     * @param $smarty Smarty object
     * @return string Price with right format and currency
     */
    public static function convertPrice($params, &$smarty)
    {
    }

    /**
     * Convert price with currency
     *
     * @param array $params
     * @param object $smarty DEPRECATED
     * @return Ambigous <string, mixed, Ambigous <number, string>>
     */
    public static function convertPriceWithCurrency($params, &$smarty)
    {
    }

    public static function displayWtPrice($params, &$smarty)
    {
    }

    /**
     * Display WT price with currency
     *
     * @param array $params
     * @param object DEPRECATED $smarty
     * @return Ambigous <string, mixed, Ambigous <number, string>>
     */
    public static function displayWtPriceWithCurrency($params, &$smarty)
    {
    }

    /**
     * @deprecated since 1.5.0
     * It's not possible to use this method with new stockManager and stockAvailable features
     * Now this method do nothing
     * @see StockManager if you want to manage real stock
     * @see StockAvailable if you want to manage available quantities for sale on your shop(s)
     * @param array $product Array with ordered product (quantity, id_product_attribute if applicable)
     * @return mixed Query result
     */
    public static function updateQuantity()
    {
    }

    /**
     * @deprecated since 1.5.0
     * It's not possible to use this method with new stockManager and stockAvailable features
     * Now this method do nothing
     * @see StockManager if you want to manage real stock
     * @see StockAvailable if you want to manage available quantities for sale on your shop(s)
     */
    public static function reinjectQuantities()
    {
    }

    /**
     * Get product accessories (only names)
     *
     * @param integer $id_lang Language id
     * @param integer $id_product Product id
     * @return array Product accessories
     */
    public static function getAccessoriesLight($id_lang, $id_product, Context $context = null)
    {
    }

    public static function getAccessoryById($accessory_id)
    {
    }

    public static function addFeatureProductImport($id_product, $id_feature, $id_feature_value)
    {
    }

    public static function cacheProductsFeatures($product_ids)
    {
    }

    /**
     * Admin panel product search
     *
     * @param integer $id_lang Language id
     * @param string $query Search query
     * @return array Matching products
     */
    public static function searchByName($id_lang, $query, Context $context = null)
    {
    }

    /**
     * Duplicate attributes when duplicating a product
     *
     * @param integer $id_product_old Old product id
     * @param integer $id_product_new New product id
     */
    public static function duplicateAttributes($id_product_old, $id_product_new)
    {
    }

    /**
     * Get product attribute image associations
     *
     * @param integer $id_product_attribute
     * @return array
     */
    public static function _getAttributeImageAssociations($id_product_attribute)
    {
    }

    public static function duplicateAccessories($id_product_old, $id_product_new)
    {
    }

    public static function duplicateTags($id_product_old, $id_product_new)
    {
    }

    public static function duplicateDownload($id_product_old, $id_product_new)
    {
    }

    public static function duplicateAttachments($id_product_old, $id_product_new)
    {
    }

    /**
     * Duplicate features when duplicating a product
     *
     * @param integer $id_product_old Old product id
     * @param integer $id_product_old New product id
     */
    public static function duplicateFeatures($id_product_old, $id_product_new)
    {
    }

    public static function duplicateSpecificPrices($old_product_id, $product_id)
    {
    }

    public static function duplicateCustomizationFields($old_product_id, $product_id)
    {
    }

    public static function getAllCustomizedDatas($id_cart, $id_lang = null, $only_in_cart = true)
    {
    }

    public static function addCustomizationPrice(&$products, &$customized_datas)
    {
    }

    /**
     * Checks if the product is in at least one of the submited categories
     *
     * @param int $id_product
     * @param array $categories array of category arrays
     * @return boolean is the product in at least one category
     */
    public static function idIsOnCategoryId($id_product, $categories)
    {
    }

    public static function getUrlRewriteInformations($id_product)
    {
    }

    public static function resetEcoTax()
    {
    }

    /**
     * Get all product attributes ids
     *
     * @since 1.5.0
     * @param int $id_product the id of the product
     * @return array product attribute id list
     */
    public static function getProductAttributesIds($id_product, $shop_only = false)
    {
    }

    /**
     * @todo Remove existing module condition
     * @param int $id_product
     */
    public static function getAttributesInformationsByProduct($id_product)
    {
    }

    /**
     * Gets the name of a given product, in the given lang
     *
     * @since 1.5.0
     * @param int $id_product
     * @param int $id_product_attribute Optional
     * @param int $id_lang Optional
     * @return string
     */
    public static function getProductName($id_product, $id_product_attribute = null, $id_lang = null)
    {
    }

    /**
     * For a given product, returns its real quantity
     *
     * @since 1.5.0
     * @param int $id_product
     * @param int $id_product_attribute
     * @param int $id_warehouse
     * @param int $id_shop
     * @return int real_quantity
     */
    public static function getRealQuantity($id_product, $id_product_attribute = 0, $id_warehouse = 0, $id_shop = null)
    {
    }

    /**
     * For a given product, tells if it uses the advanced stock management
     *
     * @since 1.5.0
     * @param int $id_product
     * @return bool
     */
    public static function usesAdvancedStockManagement($id_product)
    {
    }

    /**
     * This method allows to flush price cache
     *
     * @static
     * @since 1.5.0
     */
    public static function flushPriceCache()
    {
    }

    public static function getIdTaxRulesGroupMostUsed()
    {
    }

    /**
     * For a given ean13 reference, returns the corresponding id
     *
     * @param string $ean13
     * @return int id
     */
    public static function getIdByEan13($ean13)
    {
    }

    public static function cleanPositions($id_category)
    {
    }

    public static function updateCacheAttachment($id_product)
    {
    }

    /**
     * getProductCategories return an array of categories which this product belongs to
     *
     * @return array of categories
     */
    public static function getProductCategories($id_product = '')
    {
    }

    public static function getShopsByProduct($id_product)
    {
    }

    public static function updateDefaultAttribute($id_product)
    {
    }

    public static function getFeaturesStatic($id_product)
    {
    }

    /**
     * Get product cover image
     *
     * @return array Product cover image
     */
    public static function getCover($id_product, Context $context = null)
    {
    }

    /**
     * Get label by lang and value by lang too
     *
     * @todo Remove existing module condition
     * @param int $id_product
     * @param int $product_attribute_id
     * @return array
     */
    public static function getAttributesParams($id_product, $id_product_attribute)
    {
    }

    protected static function _getProductIdByDate($beginning, $ending, Context $context = null, $with_combination = false)
    {
    }

    protected static function _getCustomizationFieldsNLabels($product_id)
    {
    }

    /**
     * @return the total taxes rate applied to the product
     */
    public function getTaxesRate(Address $address = null)
    {
    }

    public function isNew()
    {
    }

    /**
     * Fill the variables used for stock management
     */
    public function loadStockData()
    {
    }

    public function useAdvancedStockManagement()
    {
    }

    /**
     * @see ObjectModel::getFieldsShop()
     * @return array
     */
    public function getFieldsShop()
    {
    }

    /**
     * Move a product inside its category
     *
     * @param boolean $way Up (1)  or Down (0)
     * @param integer $position
     * return boolean Update result
     */
    public function updatePosition($way, $position)
    {
    }

    public function setAvailableDate($available_date = '0000-00-00')
    {
    }

    public function update($null_values = false)
    {
    }

    /**
     * Set Group reduction if needed
     */
    public function setGroupReduction()
    {
    }

    /**
     * @see ObjectModel::validateFieldsLang()
     */
    public function validateFieldsLang($die = true, $error_return = false)
    {
    }

    /**
     * @see ObjectModel::validateField()
     */
    public function validateField($field, $value, $id_lang = null)
    {
    }

    public function toggleStatus()
    {
    }

    public function deleteSelection($products)
    {
    }

    public function delete()
    {
    }

    /**
     * Delete product attributes
     *
     * @return array Deletion result
     */
    public function deleteProductAttributes()
    {
    }

    /**
     * Delete product images from database
     *
     * @return bool success
     */
    public function deleteImages()
    {
    }

    /**
     * Delete product in its scenes
     *
     * @return array Deletion result
     */
    public function deleteSceneProducts()
    {
    }

    /**
     * Delete all association to category where product is indexed
     *
     * @param boolean $clean_positions clean category positions after deletion
     * @return array Deletion result
     */
    public function deleteCategories($clean_positions = false)
    {
    }

    /**
     * Delete product features
     *
     * @return array Deletion result
     */
    public function deleteProductFeatures()
    {
    }

    /**
     * Delete features
     */
    public function deleteFeatures()
    {
    }

    /**
     * Delete products tags entries
     *
     * @return array Deletion result
     */
    public function deleteTags()
    {
    }

    /**
     * Delete product from cart
     *
     * @return array Deletion result
     */
    public function deleteCartProducts()
    {
    }

    /**
     * Delete product attributes impacts
     *
     * @return Deletion result
     */
    public function deleteAttributesImpacts()
    {
    }

    /**
     * Delete product attachments
     *
     * @return array Deletion result
     */
    public function deleteAttachments()
    {
    }

    /**
     * Delete product customizations
     *
     * @return array Deletion result
     */
    public function deleteCustomization()
    {
    }

    /**
     * Delete product pack details
     *
     * @return array Deletion result
     */
    public function deletePack()
    {
    }

    /**
     * Delete product sales
     *
     * @return array Deletion result
     */
    public function deleteProductSale()
    {
    }

    /**
     * Delete product indexed words
     *
     * @return array Deletion result
     */
    public function deleteSearchIndexes()
    {
    }

    /**
     * Delete product accessories
     *
     * @return mixed Deletion result
     */
    public function deleteAccessories()
    {
    }

    /**
     * Delete product from other products accessories
     *
     * @return mixed Deletion result
     */
    public function deleteFromAccessories()
    {
    }

    public function deleteFromSupplier()
    {
    }

    /**
     * Remove all downloadable files for product and its attributes
     *
     * @return bool
     */
    public function deleteDownload()
    {
    }

    public function deleteFromCartRules()
    {
    }

    /**
     * Update categories to index product into
     *
     * @param string $productCategories Categories list to index product into
     * @param boolean $keeping_current_pos (deprecated, no more used)
     * @return array Update/insertion result
     */
    public function updateCategories($categories, $keeping_current_pos = false)
    {
    }

    /**
     * deleteCategory delete this product from the category $id_category
     *
     * @param mixed $id_category
     * @param mixed $clean_positions
     * @return boolean
     */
    public function deleteCategory($id_category, $clean_positions = true)
    {
    }

    /**
     * addToCategories add this product to the category/ies if not exists.
     *
     * @param mixed $categories id_category or array of id_category
     * @return boolean true if succeed
     */
    public function addToCategories($categories = array())
    {
    }

    /**
     * getCategories return an array of categories which this product belongs to
     *
     * @return array of categories
     */
    public function getCategories()
    {
    }

    /**
     * addProductAttribute is deprecated
     * The quantity params now set StockAvailable for the current shop with the specified quantity
     * The supplier_reference params now set the supplier reference of the default supplier of the product if possible
     *
     * @see StockManager if you want to manage real stock
     * @see StockAvailable if you want to manage available quantities for sale on your shop(s)
     * @see ProductSupplier for manage supplier reference(s)
     * @deprecated since 1.5.0
     */
    public function addProductAttribute($price, $weight, $unit_impact, $ecotax, $quantity, $id_images, $reference,
                                        $id_supplier = null, $ean13, $default, $location = null, $upc = null, $minimal_quantity = 1)
    {
    }

    /**
     * Add a product attribute
     *
     * @since 1.5.0.1
     * @param float $price Additional price
     * @param float $weight Additional weight
     * @param float $ecotax Additional ecotax
     * @param integer $id_images Image ids
     * @param string $reference Reference
     * @param string $location Location
     * @param string $ean13 Ean-13 barcode
     * @param boolean $default Is default attribute for product
     * @param integer $minimal_quantity Minimal quantity to add to cart
     * @return mixed $id_product_attribute or false
     */
    public function addAttribute($price, $weight, $unit_impact, $ecotax, $id_images, $reference, $ean13,
                                 $default, $location = null, $upc = null, $minimal_quantity = 1, array $id_shop_list = array())
    {
    }

    public function hasAttributesInOtherShops()
    {
    }

    /**
     * Sets Supplier Reference
     *
     * @param int $id_supplier
     * @param int $id_product_attribute
     * @param string $supplier_reference
     * @param float $price
     * @param int $id_currency
     */
    public function addSupplierReference($id_supplier, $id_product_attribute, $supplier_reference = null, $price = null, $id_currency = null)
    {
    }

    public function generateMultipleCombinations($combinations, $attributes)
    {
    }

    public function productAttributeExists($attributes_list, $current_product_attribute = false, Context $context = null, $all_shops = false, $return_id = false)
    {
    }

    /**
     * @param integer $quantity DEPRECATED
     * @param string $supplier_reference DEPRECATED
     */
    public function addCombinationEntity($wholesale_price, $price, $weight, $unit_impact, $ecotax, $quantity,
                                         $id_images, $reference, $id_supplier, $ean13, $default, $location = null, $upc = null, $minimal_quantity = 1, array $id_shop_list = array())
    {
    }

    public function addProductAttributeMultiple($attributes, $set_default = true)
    {
    }

    /**
     * Update a product attribute
     *
     * @deprecated since 1.5
     * @see updateAttribute() to use instead
     * @see ProductSupplier for manage supplier reference(s)
     */
    public function updateProductAttribute($id_product_attribute, $wholesale_price, $price, $weight, $unit, $ecotax,
                                           $id_images, $reference, $id_supplier = null, $ean13, $default, $location = null, $upc = null, $minimal_quantity, $available_date)
    {
    }

    /**
     * Update a product attribute
     *
     * @param integer $id_product_attribute Product attribute id
     * @param float $wholesale_price Wholesale price
     * @param float $price Additional price
     * @param float $weight Additional weight
     * @param float $unit
     * @param float $ecotax Additional ecotax
     * @param integer $id_image Image id
     * @param string $reference Reference
     * @param string $ean13 Ean-13 barcode
     * @param int $default Default On
     * @param string $upc Upc barcode
     * @param string $minimal_quantity Minimal quantity
     * @return array Update result
     */
    public function updateAttribute($id_product_attribute, $wholesale_price, $price, $weight, $unit, $ecotax,
                                    $id_images, $reference, $ean13, $default, $location = null, $upc = null, $minimal_quantity = null, $available_date = null, $update_all_fields = true, array $id_shop_list = array())
    {
    }

    /**
     * @deprecated since 1.5.0
     */
    public function updateQuantityProductWithAttributeQuantity()
    {
    }

    /**
     * Add a product attributes combinaison
     *
     * @param integer $id_product_attribute Product attribute id
     * @param array $attributes Attributes to forge combinaison
     * @return array Insertion result
     * @deprecated since 1.5.0.7
     */
    public function addAttributeCombinaison($id_product_attribute, $attributes)
    {
    }

    public function addAttributeCombinationMultiple($id_attributes, $combinations)
    {
    }

    /**
     * Get all available product attributes resume
     *
     * @param integer $id_lang Language id
     * @return array Product attributes combinations
     */
    public function getAttributesResume($id_lang, $attribute_value_separator = ' - ', $attribute_separator = ', ')
    {
    }

    /**
     * Get product attribute combination by id_product_attribute
     *
     * @param integer $id_product_attribute
     * @param integer $id_lang Language id
     * @return array Product attribute combination by id_product_attribute
     */
    public function getAttributeCombinationsById($id_product_attribute, $id_lang)
    {
    }

    public function getCombinationImages($id_lang)
    {
    }

    /*
    * Select all features for a given language
    *
    * @param $id_lang Language id
    * @return array Array with feature's data
    */

    /**
     * Check if product has attributes combinations
     *
     * @return integer Attributes combinations number
     */
    public function hasAttributes()
    {
    }

    /**
     * Gets carriers assigned to the product
     */
    public function getCarriers()
    {
    }

    /**
     * Sets carriers assigned to the product
     */
    public function setCarriers($carrier_list)
    {
    }

    /**
     * Get product images and legends
     *
     * @param integer $id_lang Language id for multilingual legends
     * @return array Product images and legends
     */
    public function getImages($id_lang, Context $context = null)
    {
    }

    /*
    ** Customization management
    */

    /**
     * Get product price
     * Same as static function getPriceStatic, no need to specify product id
     *
     * @param boolean $tax With taxes or not (optional)
     * @param integer $id_product_attribute Product attribute id (optional)
     * @param integer $decimals Number of decimals (optional)
     * @param integer $divisor Util when paying many time without fees (optional)
     * @return float Product price in euros
     */
    public function getPrice($tax = true, $id_product_attribute = null, $decimals = 6,
                             $divisor = null, $only_reduc = false, $usereduc = true, $quantity = 1)
    {
    }

    public function getPublicPrice($tax = true, $id_product_attribute = null, $decimals = 6,
                                   $divisor = null, $only_reduc = false, $usereduc = true, $quantity = 1)
    {
    }

    /*
    ** Customization fields' label management
    */

    public function getIdProductAttributeMostExpensive()
    {
    }

    public function getDefaultIdProductAttribute()
    {
    }

    public function getPriceWithoutReduct($notax = false, $id_product_attribute = false)
    {
    }

    /**
     * Check product availability
     *
     * @param integer $qty Quantity desired
     * @return boolean True if product is available with this quantity
     */
    public function checkQty($qty)
    {
    }

    /**
     * Check if there is no default attribute and create it if not
     */
    public function checkDefaultAttributes()
    {
    }

    /**
     * Get all available attribute groups
     *
     * @param integer $id_lang Language id
     * @return array Attribute groups
     */
    public function getAttributesGroups($id_lang)
    {
    }

    /**
     * Get product accessories
     *
     * @param integer $id_lang Language id
     * @return array Product accessories
     */
    public function getAccessories($id_lang, $active = true, Context $context = null)
    {
    }

    /**
     * Link accessories with product
     *
     * @param array $accessories_id Accessories ids
     */
    public function changeAccessories($accessories_id)
    {
    }

    /**
     * Add new feature to product
     */
    public function addFeaturesCustomToDB($id_value, $lang, $cust)
    {
    }

    /**
     * Get the link of the product page of this product
     */
    public function getLink(Context $context = null)
    {
    }

    public function getTags($id_lang)
    {
    }

    public function getFrontFeatures($id_lang)
    {
    }

    public function getAttachments($id_lang)
    {
    }

    public function createLabels($uploadable_files, $text_fields)
    {
    }

    public function updateLabels()
    {
    }

    public function getCustomizationFields($id_lang = false)
    {
    }

    public function getCustomizationFieldIds()
    {
    }

    public function hasAllRequiredCustomizableFields(Context $context = null)
    {
    }

    public function getRequiredCustomizableFields()
    {
    }

    public function getNoPackPrice()
    {
    }

    public function checkAccess($id_customer)
    {
    }

    /**
     * Add a stock movement for current product
     * Since 1.5, this method only permit to add/remove available quantities of the current product in the current shop
     *
     * @see StockManager if you want to manage real stock
     * @see StockAvailable if you want to manage available quantities for sale on your shop(s)
     * @deprecated since 1.5.0
     * @param int $quantity
     * @param int $id_reason - useless
     * @param int $id_product_attribute
     * @param int $id_order - useless
     * @param int $id_employee - useless
     * @return bool
     */
    public function addStockMvt($quantity, $id_reason, $id_product_attribute = null, $id_order = null, $id_employee = null)
    {
    }

    /**
     * @deprecated since 1.5.0
     */
    public function getStockMvts($id_lang)
    {
    }

    public function getIdTaxRulesGroup()
    {
    }

    /**
     * Webservice getter : get product features association
     *
     * @return array
     */
    public function getWsProductFeatures()
    {
    }

    /**
     * Select all features for the object
     *
     * @return array Array with feature product's data
     */
    public function getFeatures()
    {
    }

    /**
     * Webservice setter : set product features association
     *
     * @param $productFeatures Product Feature ids
     * @return boolean
     */
    public function setWsProductFeatures($product_features)
    {
    }

    public function addFeaturesToDB($id_feature, $id_value, $cust = 0)
    {
    }

    /**
     * Webservice getter : get virtual field default combination
     *
     * @return int
     */
    public function getWsDefaultCombination()
    {
    }

    /**
     * Webservice setter : set virtual field default combination
     *
     * @param $id_combination id default combination
     */
    public function setWsDefaultCombination($id_combination)
    {
    }

    /**
     * Del all default attributes for product
     */
    public function deleteDefaultAttributes()
    {
    }

    public function setDefaultAttribute($id_product_attribute)
    {
    }

    /**
     * Webservice getter : get category ids of current product for association
     *
     * @return array
     */
    public function getWsCategories()
    {
    }

    /**
     * Webservice setter : set category ids of current product for association
     *
     * @param $category_ids category ids
     */
    public function setWsCategories($category_ids)
    {
    }

    /**
     * Webservice getter : get product accessories ids of current product for association
     *
     * @return array
     */
    public function getWsAccessories()
    {
    }

    /**
     * Webservice setter : set product accessories ids of current product for association
     *
     * @param $accessories product ids
     */
    public function setWsAccessories($accessories)
    {
    }

    /**
     * /**
     * Webservice getter : get combination ids of current product for association
     *
     * @return array
     */
    public function getWsCombinations()
    {
    }

    /**
     * Webservice setter : set combination ids of current product for association
     *
     * @param $combinations combination ids
     */
    public function setWsCombinations($combinations)
    {
    }

    /**
     * Webservice getter : get product option ids of current product for association
     *
     * @return array
     */
    public function getWsProductOptionValues()
    {
    }

    /**
     * Webservice getter : get virtual field position in category
     *
     * @return int
     */
    public function getWsPositionInCategory()
    {
    }

    /**
     * Webservice getter : get virtual field id_default_image in category
     *
     * @return int
     */
    public function getCoverWs()
    {
    }

    /**
     * Webservice setter : set virtual field id_default_image in category
     *
     * @return bool
     */
    public function setCoverWs($id_image)
    {
    }

    /**
     * Webservice getter : get image ids of current product for association
     *
     * @return array
     */
    public function getWsImages()
    {
    }

    public function getWsStockAvailables()
    {
    }

    public function getWsTags()
    {
    }

    public function getWsManufacturerName()
    {
    }

    /**
     * Checks if reference exists
     *
     * @return boolean
     */
    public function existsRefInDatabase($reference)
    {
    }

    /**
     * Get the combination url anchor of the product
     *
     * @param integer $id_product_attribute
     * @return string
     */
    public function getAnchor($id_product_attribute)
    {
    }

    public function addWs($autodate = true, $null_values = false)
    {
    }

    public function add($autodate = true, $null_values = false)
    {
    }

    /**
     * Get the product type (simple, virtual, pack)
     *
     * @since in 1.5.0
     * @return int
     */
    public function getType()
    {
    }

    public function updateWs($null_values = false)
    {
    }

    /**
     * Get list of parent categories
     *
     * @since 1.5.0
     * @param int $id_lang
     * @return array
     */
    public function getParentCategories($id_lang = null)
    {
    }

    public function setAdvancedStockManagement($value)
    {
    }

    /**
     * get the default category according to the shop
     */
    public function getDefaultCategory()
    {
    }

    /**
     * @deprecated 1.5.0.10
     * @see Product::getAttributeCombinations()
     * @param int $id_lang
     */
    public function getAttributeCombinaisons($id_lang)
    {
    }

    /**
     * Get all available product attributes combinations
     *
     * @param integer $id_lang Language id
     * @return array Product attributes combinations
     */
    public function getAttributeCombinations($id_lang)
    {
    }

    /**
     * @deprecated 1.5.0.10
     * @see Product::deleteAttributeCombination()
     * @param int $id_product_attribute
     */
    public function deleteAttributeCombinaison($id_product_attribute)
    {
    }

    /**
     * Delete a product attributes combination
     *
     * @param integer $id_product_attribute Product attribute id
     * @return array Deletion result
     */
    public function deleteAttributeCombination($id_product_attribute)
    {
    }

    public function getWsType()
    {
    }

    public function getWsProductBundle()
    {
    }

    protected function _createLabel(&$languages, $type)
    {
    }

    protected function _checkLabelField($field, $value)
    {
    }

    protected function _deleteOldLabels()
    {
    }
}

