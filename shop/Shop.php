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
 * @since 1.5.0
 */
class Shop extends ObjectModel
{

    /**
     * There are 3 kinds of shop context : shop, group shop and general
     */
    const CONTEXT_SHOP = 1;
    const CONTEXT_GROUP = 2;
    const CONTEXT_ALL = 4;
    /**
     * Some data can be shared between shops, like customers or orders
     */
    const SHARE_CUSTOMER = 'share_customer';
    const SHARE_ORDER = 'share_order';
    const SHARE_STOCK = 'share_stock';
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'shop',
        'primary' => 'id_shop',
        'fields' => array(
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'deleted' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true, 'size' => 64),
            'id_theme' => array('type' => self::TYPE_INT, 'required' => true),
            'id_category' => array('type' => self::TYPE_INT, 'required' => true),
            'id_shop_group' => array('type' => self::TYPE_INT, 'required' => true),
        ),
    );
    /** @var array List of shops cached */
    protected static $shops;
    protected static $asso_tables = array();
    protected static $id_shop_default_tables = array();
    protected static $initialized = false;
    /** @var int Store the current context of shop (CONTEXT_ALL, CONTEXT_GROUP, CONTEXT_SHOP) */
    protected static $context;
    /** @var int ID shop in the current context (will be empty if context is not CONTEXT_SHOP) */
    protected static $context_id_shop;
    /** @var int ID shop group in the current context (will be empty if context is CONTEXT_ALL) */
    protected static $context_id_shop_group;
    /** @var int ID of shop group */
    public $id_shop_group;
    /** @var int ID of shop category */
    public $id_category;
    /** @var int ID of shop theme */
    public $id_theme;
    /** @var string Shop name */
    public $name;
    public $active = true;
    public $deleted;
    /** @var string Shop theme name (read only) */
    public $theme_name;
    /** @var string Shop theme directory (read only) */
    public $theme_directory;
    /** @var string Physical uri of main url (read only) */
    public $physical_uri;
    /** @var string Virtual uri of main url (read only) */
    public $virtual_uri;
    /** @var string Domain of main url (read only) */
    public $domain;
    /** @var string Domain SSL of main url (read only) */
    public $domain_ssl;
    /** @var ShopGroup Shop group object */
    protected $group;
    protected $webserviceParameters = array(
        'fields' => array(
            'id_shop_group' => array('xlink_resource' => 'shop_groups'),
            'id_category' => array(),
            'id_theme' => array(),
        ),
    );

    /**
     * On shop instance, get its theme and URL data too
     *
     * @param int $id
     * @param int $id_lang
     * @param int $id_shop
     */
    public function __construct($id = null, $id_lang = null, $id_shop = null)
    {
    }

    /**
     * Find the shop from current domain / uri and get an instance of this shop
     * if INSTALL_VERSION is defined, will return an empty shop object
     *
     * @return Shop
     */
    public static function initialize()
    {
    }

    public static function getCompleteListOfShopsID()
    {
    }

    /**
     * Get a collection of shops
     *
     * @param bool $active
     * @param int $id_shop_group
     * @return Collection
     */
    public static function getShopsCollection($active = true, $id_shop_group = null)
    {
    }

    /**
     * Return some informations cached for one shop
     *
     * @param int $shop_id
     * @return array
     */
    public static function getShop($shop_id)
    {
    }

    /**
     * Return a shop ID from shop name
     *
     * @param string $name
     * @return int
     */
    public static function getIdByName($name)
    {
    }

    /**
     * @param bool $active
     * @param int $id_shop_group
     * @return int Total of shops
     */
    public static function getTotalShops($active = true, $id_shop_group = null)
    {
    }

    /**
     * Return the list of shop by id
     *
     * @param int $id
     * @param string $identifier
     * @param string $table
     * @return array
     */
    public static function getShopById($id, $identifier, $table)
    {
    }

    public static function getContextShopGroup()
    {
    }

    /**
     * Add an SQL JOIN in query between a table and its associated table in multishop
     *
     * @param string $table Table name (E.g. product, module, etc.)
     * @param string $alias Alias of table
     * @param bool $inner_join Use or not INNER JOIN
     * @param string $on
     * @return string
     */
    public static function addSqlAssociation($table, $alias, $inner_join = true, $on = null, $force_not_default = false)
    {
    }

    /**
     * Get the associated table if available
     *
     * @return array
     */
    public static function getAssoTable($table)
    {
    }

    /**
     * check if the table has an id_shop_default
     *
     * @return boolean
     */
    public static function checkIdShopDefault($table)
    {
    }

    /**
     * Add a restriction on id_shop for multishop lang table
     *
     * @param string $alias
     * @param Context $context
     * @return string
     */
    public static function addSqlRestrictionOnLang($alias = null, $id_shop = null)
    {
    }

    /**
     * Get all groups and associated shops as subarrays
     *
     * @return array
     */
    public static function getTree()
    {
    }

    /**
     * @static
     * @param int $id
     * @return array
     */
    public static function getCategories($id = 0, $only_id = true)
    {
    }

    /**
     * @deprecated 1.5.0 Use shop->id
     */
    public static function getCurrentShop()
    {
    }

    /**
     * @param string $entity
     * @param int $id_shop
     * @return array|bool
     */
    public static function getEntityIds($entity, $id_shop, $active = false, $delete = false)
    {
    }

    /**
     * Check if given table is associated to shop
     *
     * @param string $table
     * @return bool
     */
    public static function isTableAssociated($table)
    {
    }

    /**
     * Load list of groups and shops, and cache it
     *
     * @param bool $refresh
     */
    public static function cacheShops($refresh = false)
    {
    }

    /**
     * Detect dependency with customer or orders
     *
     * @param int $id_shop
     * @return bool
     */
    public static function hasDependency($id_shop)
    {
    }

    /**
     * Get list of associated tables to shop
     *
     * @return array
     */
    public static function getAssoTables()
    {
    }

    /**
     * Add table associated to shop
     *
     * @param string $table_name
     * @param array $table_details
     * @return bool
     */
    public static function addTableAssociation($table_name, $table_details)
    {
    }

    /**
     * Add an sql restriction for shops fields
     *
     * @param int $share If false, dont check share datas from group. Else can take a Shop::SHARE_* constant value
     * @param string $alias
     */
    public static function addSqlRestriction($share = false, $alias = null)
    {
    }

    /**
     * Retrieve group ID of a shop
     *
     * @param int $shop_id Shop ID
     * @return int Group ID
     */
    public static function getGroupFromShop($shop_id, $as_id = true)
    {
    }

    /**
     * Get current ID of shop if context is CONTEXT_SHOP
     *
     * @return int
     */
    public static function getContextShopID($null_value_without_multishop = false)
    {
    }

    /**
     * @return bool Return true if multishop feature is active and at last 2 shops have been created
     */
    public static function isFeatureActive()
    {
    }

    /**
     * Get current context of shop
     *
     * @return int
     */
    public static function getContext()
    {
    }

    /**
     * Change the current shop context
     *
     * @param int $type Shop::CONTEXT_ALL | Shop::CONTEXT_GROUP | Shop::CONTEXT_SHOP
     * @param int $id ID shop if CONTEXT_SHOP or id shop group if CONTEXT_GROUP
     */
    public static function setContext($type, $id = null)
    {
    }

    /**
     * Get current ID of shop group if context is CONTEXT_SHOP or CONTEXT_GROUP
     *
     * @return int
     */
    public static function getContextShopGroupID($null_value_without_multishop = false)
    {
    }

    /**
     * Get a list of ID concerned by the shop context (E.g. if context is shop group, get list of children shop ID)
     *
     * @param string $share If false, dont check share datas from group. Else can take a Shop::SHARE_* constant value
     * @return array
     */
    public static function getContextListShopID($share = false)
    {
    }

    /**
     * If the shop group has the option $type activated, get all shops ID of this group, else get current shop ID
     *
     * @param int $shop_id
     * @param int $type Shop::SHARE_CUSTOMER | Shop::SHARE_ORDER
     * @return array
     */
    public static function getSharedShops($shop_id, $type)
    {
    }

    /**
     * Get shops list
     *
     * @param bool $active
     * @param int $id_shop_group
     * @param bool $get_as_list_id
     * @return array
     */
    public static function getShops($active = true, $id_shop_group = null, $get_as_list_id = false)
    {
    }

    /**
     * Initialize an array with all the multistore associations in the database
     */
    protected static function init()
    {
    }

    public function setUrl()
    {
    }

    /**
     * Get shop URI
     *
     * @return string
     */
    public function getBaseURI()
    {
    }

    /**
     * Add a shop, and clear the cache
     *
     * @param bool $autodate
     * @param bool $null_values
     * @return bool
     */
    public function add($autodate = true, $null_values = false)
    {
    }

    /**
     * Remove a shop only if it has no dependencies, and remove its associations
     *
     * @return bool
     */
    public function delete()
    {
    }

    /**
     * @return Address the current shop address
     */
    public function getAddress()
    {
    }

    /**
     * Get shop theme name
     *
     * @return string
     */
    public function getTheme()
    {
    }

    /**
     * Get shop URL
     *
     * @return string
     */
    public function getBaseURL()
    {
    }

    /**
     * Get root category of current shop
     *
     * @return int
     */
    public function getCategory()
    {
    }

    /**
     * Get list of shop's urls
     *
     * @return array
     */
    public function getUrls()
    {
    }

    /**
     * Check if current shop ID is the same as default shop in configuration
     *
     * @return bool
     */
    public function isDefaultShop()
    {
    }

    public function getUrlsSharedCart()
    {
    }

    /**
     * Get group of current shop
     *
     * @return ShopGroup
     */
    public function getGroup()
    {
    }

    public function copyShopData($old_id, $tables_import = false, $deleted = false)
    {
    }
}
