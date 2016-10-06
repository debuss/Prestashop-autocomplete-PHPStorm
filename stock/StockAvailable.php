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
 * Represents quantities available
 * It is either synchronized with Stock or manualy set by the seller
 *
 * @since 1.5.0
 */
class StockAvailable extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'stock_available',
        'primary' => 'id_stock_available',
        'fields' => array(
            'id_product' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_product_attribute' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_shop' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_shop_group' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'quantity' => array('type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => true),
            'depends_on_stock' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'out_of_stock' => array('type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => true),
        ),
    );
    /** @var int identifier of the current product */
    public $id_product;
    /** @var int identifier of product attribute if necessary */
    public $id_product_attribute;
    /** @var int the shop associated to the current product and corresponding quantity */
    public $id_shop;
    /** @var int the group shop associated to the current product and corresponding quantity */
    public $id_shop_group;
    /** @var int the quantity available for sale */
    public $quantity = 0;
    /** @var bool determine if the available stock value depends on physical stock */
    public $depends_on_stock = false;
    /** @var bool determine if a product is out of stock - it was previously in Product class */
    public $out_of_stock = false;
    /**
     * @see ObjectModel::$webserviceParameters
     */
    protected $webserviceParameters = array(
        'fields' => array(
            'id_product' => array('xlink_resource' => 'products'),
            'id_product_attribute' => array('xlink_resource' => 'combinations'),
            'id_shop' => array('xlink_resource' => 'shops'),
            'id_shop_group' => array('xlink_resource' => 'shop_groups'),
        ),
        'hidden_fields' => array(),
        'objectMethods' => array(
            'add' => 'addWs',
            'update' => 'updateWs',
        ),
    );

    /**
     * For a given id_product, sets if stock available depends on stock
     *
     * @param int $id_product
     * @param int $depends_on_stock Optional : true by default
     * @param int $id_shop Optional : gets context by default
     */
    public static function setProductDependsOnStock($id_product, $depends_on_stock = true, $id_shop = null, $id_product_attribute = 0)
    {
    }

    /**
     * Add sql params for shops fields - specific to StockAvailable
     *
     * @param array $params Reference to the params array
     * @param int $id_shop Optional : The shop ID
     */
    public static function addSqlShopParams(&$params, $id_shop = null)
    {
    }

    /**
     * For a given id_product, synchronizes StockAvailable::quantity with Stock::usable_quantity
     *
     * @param int $id_product
     */
    public static function synchronize($id_product, $order_id_shop = null)
    {
    }

    /**
     * For a given id_product, sets if product is available out of stocks
     *
     * @param int $id_product
     * @param int $out_of_stock Optional false by default
     * @param int $id_shop Optional gets context by default
     */
    public static function setProductOutOfStock($id_product, $out_of_stock = false, $id_shop = null, $id_product_attribute = 0)
    {
    }

    /**
     * For a given id_product and id_product_attribute, gets its stock available
     *
     * @param int $id_product
     * @param int $id_product_attribute Optional
     * @param int $id_shop Optional : gets context by default
     * @return int Quantity
     */
    public static function getQuantityAvailableByProduct($id_product = null, $id_product_attribute = null, $id_shop = null)
    {
    }

    /**
     * For a given id_product and id_product_attribute updates the quantity available
     * If $avoid_parent_pack_update is true, then packs containing the given product won't be updated
     *
     * @param int $id_product
     * @param int $id_product_attribute Optional
     * @param int $delta_quantity The delta quantity to update
     * @param int $id_shop Optional
     */
    public static function updateQuantity($id_product, $id_product_attribute, $delta_quantity, $id_shop = null)
    {
    }

    /**
     * Removes a given product from the stock available
     *
     * @param int $id_product
     * @param int|null $id_product_attribute Optional
     * @param Shop|null $shop Shop id or shop object Optional
     * @return bool
     */
    public static function removeProductFromStockAvailable($id_product, $id_product_attribute = null, $shop = null)
    {
    }

    /**
     * Removes all product quantities from all a group of shops
     * If stocks are shared, remoe all old available quantities for all shops of the group
     * Else remove all available quantities for the current group
     *
     * @param ShopGroup $shop_group the ShopGroup object
     */
    public static function resetProductFromStockAvailableByShopGroup(ShopGroup $shop_group)
    {
    }

    /**
     * Copies stock available content table
     *
     * @param int $src_shop_id
     * @param int $dst_shop_id
     * @return bool
     */
    public static function copyStockAvailableFromShopToShop($src_shop_id, $dst_shop_id)
    {
    }

    /**
     * Add an sql restriction for shops fields - specific to StockAvailable
     *
     * @param DbQuery|string|null $sql Reference to the query object
     * @param Shop|int|null $shop Optional : The shop ID
     * @param string|null $alias Optional : The current table alias
     * @return string|DbQuery DbQuery object or the sql restriction string
     */
    public static function addSqlShopRestriction($sql = null, $shop = null, $alias = null)
    {
    }

    /**
     * For a given id_product and id_product_attribute sets the quantity available
     *
     * @param int $id_product
     * @param int $id_product_attribute Optional
     * @param int $delta_quantity The delta quantity to update
     * @param int $id_shop Optional
     */
    public static function setQuantity($id_product, $id_product_attribute, $quantity, $id_shop = null)
    {
    }

    /**
     * For a given product, tells if it depends on the physical (usable) stock
     *
     * @param int $id_product
     * @param int $id_shop Optional : gets context if null @see Context::getContext()
     * @return bool : depends on stock @see $depends_on_stock
     */
    public static function dependsOnStock($id_product, $id_shop = null)
    {
    }

    public static function getStockAvailableIdByProductId($id_product, $id_product_attribute = null, $id_shop = null)
    {
    }

    /**
     * For a given product, get its "out of stock" flag
     *
     * @param int $id_product
     * @param int $id_shop Optional : gets context if null @see Context::getContext()
     * @return bool : depends on stock @see $depends_on_stock
     */
    public static function outOfStock($id_product, $id_shop = null)
    {
    }

    /**
     * For a given {id_product, id_product_attribute and id_shop}, gets the stock available id associated
     *
     * @param int $id_product
     * @param int $id_product_attribute Optional
     * @param int $id_shop Optional
     * @return int
     */

    public function updateWs()
    {
    }

    /**
     * Upgrades total_quantity_available after having update
     *
     * @see ObjectModel::update()
     */
    public function update($null_values = false)
    {
    }

    /**
     * Upgrades total_quantity_available after having saved
     *
     * @see StockAvailableCore::update()
     * @see StockAvailableCore::add()
     */
    public function postSave()
    {
    }

    /**
     * Upgrades total_quantity_available after having saved
     *
     * @see ObjectModel::add()
     */
    public function add($autodate = true, $null_values = false)
    {
    }
}
