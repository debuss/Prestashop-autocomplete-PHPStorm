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

class Category extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'category',
        'primary' => 'id_category',
        'multilang' => true,
        'multilang_shop' => true,
        'fields' => array(
            'nleft' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'nright' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'level_depth' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'id_parent' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'id_shop_default' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'is_root_category' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'position' => array('type' => self::TYPE_INT),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),

            // Lang fields
            'name' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCatalogName', 'required' => true, 'size' => 64),
            'link_rewrite' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isLinkRewrite', 'required' => true, 'size' => 64),
            'description' => array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isString'),
            'meta_title' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 128),
            'meta_description' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255),
            'meta_keywords' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255),
        ),
    );
    protected static $_links = array();
    public $id;
    /** @var integer category ID */
    public $id_category;
    /** @var string Name */
    public $name;
    /** @var boolean Status for display */
    public $active = 1;
    /** @var  integer category position */
    public $position;
    /** @var string Description */
    public $description;
    /** @var integer Parent category ID */
    public $id_parent;
    /** @var integer default Category id */
    public $id_category_default;
    /** @var integer Parents number */
    public $level_depth;
    /** @var integer Nested tree model "left" value */
    public $nleft;
    /** @var integer Nested tree model "right" value */
    public $nright;
    /** @var string string used in rewrited URL */
    public $link_rewrite;
    /** @var string Meta title */
    public $meta_title;
    /** @var string Meta keywords */
    public $meta_keywords;
    /** @var string Meta description */
    public $meta_description;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    /** @var boolean is Category Root */
    public $is_root_category;
    /** @var integer */
    public $id_shop_default;
    public $groupBox;
    /** @var string id_image is the category ID when an image exists and 'default' otherwise */
    public $id_image = 'default';
    protected $webserviceParameters = array(
        'objectsNodeName' => 'categories',
        'hidden_fields' => array('nleft', 'nright', 'groupBox'),
        'fields' => array(
            'id_parent' => array('xlink_resource' => 'categories'),
            'level_depth' => array('setter' => false),
            'nb_products_recursive' => array('getter' => 'getWsNbProductsRecursive', 'setter' => false),
        ),
        'associations' => array(
            'categories' => array('getter' => 'getChildrenWs', 'resource' => 'category',),
            'products' => array('getter' => 'getProductsWs', 'resource' => 'product',),
        ),
    );

    public function __construct($id_category = null, $id_lang = null, $id_shop = null)
    {
    }

    public static function recurseCategory($categories, $current, $id_category = 1, $id_selected = 1)
    {
    }

    /**
     * Return available categories
     *
     * @param integer $id_lang Language ID
     * @param boolean $active return only active categories
     * @return array Categories
     */
    public static function getCategories($id_lang = false, $active = true, $order = true, $sql_filter = '', $sql_sort = '', $sql_limit = '')
    {
    }

    public static function getSimpleCategories($id_lang)
    {
    }

    /**
     * Return main categories
     *
     * @param integer $id_lang Language ID
     * @param boolean $active return only active categories
     * @return array categories
     */
    public static function getHomeCategories($id_lang, $active = true)
    {
    }

    /**
     * @param int $id_parent
     * @param int $id_lang
     * @param bool $active
     * @return array
     */
    public static function getChildren($id_parent, $id_lang, $active = true, $id_shop = false)
    {
    }

    /**
     * This method allow to return children categories with the number of sub children selected for a product
     *
     * @param int $id_parent
     * @param int $id_product
     * @param int $id_lang
     * @return array
     */
    public static function getChildrenWithNbSelectedSubCat($id_parent, $selected_cat, $id_lang, Shop $shop = null, $use_shop_context = true)
    {
    }

    /**
     * Copy products from a category to another
     *
     * @param integer $id_old Source category ID
     * @param boolean $id_new Destination category ID
     * @return boolean Duplication result
     */
    public static function duplicateProductCategories($id_old, $id_new)
    {
    }

    /**
     * Check if category can be moved in another one.
     * The category cannot be moved in a child category.
     *
     * @param integer $id_category current category
     * @param integer $id_parent Parent candidate
     * @return boolean Parent validity
     */
    public static function checkBeforeMove($id_category, $id_parent)
    {
    }

    public static function getLinkRewrite($id_category, $id_lang)
    {
    }

    /**
     * Light back office search for categories
     *
     * @param integer $id_lang Language ID
     * @param string $query Searched string
     * @param boolean $unrestricted allows search without lang and includes first category and exact match
     * @return array Corresponding categories
     */
    public static function searchByName($id_lang, $query, $unrestricted = false)
    {
    }

    /**
     * Retrieve category by name and parent category id
     *
     * @param integer $id_lang Language ID
     * @param string $category_name Searched category name
     * @param integer $id_parent_category parent category ID
     * @return array Corresponding category
     */
    public static function searchByNameAndParentCategoryId($id_lang, $category_name, $id_parent_category)
    {
    }

    /**
     * Specify if a category already in base
     *
     * @param $id_category Category id
     * @return boolean
     */
    public static function categoryExists($id_category)
    {
    }

    public static function setNewGroupForHome($id_group)
    {
    }

    public static function getUrlRewriteInformations($id_category)
    {
    }

    public static function inShopStatic($id_category, Shop $shop = null)
    {
    }

    /**
     * @param Array $ids_category
     * @param int $id_lang
     * @return Array
     */
    public static function getCategoryInformations($ids_category, $id_lang = null)
    {
    }

    public static function getRootCategories($id_lang = null, $active = true)
    {
    }

    public static function getShopsByCategory($id_category)
    {
    }

    /**
     * Update categories for a shop
     *
     * @param string $categories Categories list to associate a shop
     * @param string $id_shop Categories list to associate a shop
     * @return array Update/insertion result
     */
    public static function updateFromShop($categories, $id_shop)
    {
    }

    /**
     * Delete every categories
     *
     * @return bool
     */
    public static function deleteCategoriesFromShop($id_shop)
    {
    }

    /**
     * Add some categories to a shop
     *
     * @param array $categories
     * @return bool
     */
    public static function addToShop(array $categories, $id_shop)
    {
    }

    /** this function return the number of category + 1 having $id_category_parent as parent.
     *
     * @todo rename that function to make it understandable (getNewLastPosition for example)
     * @param int $id_category_parent the parent category
     * @param int $id_shop
     * @return int
     */
    public static function getLastPosition($id_category_parent, $id_shop)
    {
    }

    /**
     * Re-calculate the values of all branches of the nested tree
     */
    public static function regenerateEntireNtree()
    {
    }

    /**
     * cleanPositions keep order of category in $id_category_parent,
     * but remove duplicate position. Should not be used if positions
     * are clean at the beginning !
     *
     * @param mixed $id_category_parent
     * @return boolean true if succeed
     */
    public static function cleanPositions($id_category_parent = null)
    {
    }

    /**
     * Allows to display the category description without HTML tags and slashes
     *
     * @return string
     */
    public static function getDescriptionClean($description)
    {
    }

    public static function getCategoriesWithoutParent()
    {
    }

    /**
     * @static
     * @param null $id_lang
     * @return Category
     */
    public static function getTopCategory($id_lang = null)
    {
    }

    public static function getRootCategory($id_lang = null, Shop $shop = null)
    {
    }

    /**
     * Return nleft and nright fields for a given category
     *
     * @since 1.5.0
     * @param int $id
     * @return array
     */
    public static function getInterval($id)
    {
    }

    protected static function _subTree(&$categories, $id_category, &$n)
    {
    }

    public function add($autodate = true, $null_values = false)
    {
    }

    /**
     * Get the depth level for the category
     *
     * @return integer Depth level
     */
    public function calcLevelDepth()
    {
    }

    public function addPosition($position, $id_shop = null)
    {
    }

    /**
     * Update customer groups associated to the object
     *
     * @param array $list groups
     */
    public function updateGroup($list)
    {
    }

    public function cleanGroups()
    {
    }

    public function addGroups($groups)
    {
    }

    /**
     * update category positions in parent
     *
     * @param mixed $null_values
     * @return void
     */
    public function update($null_values = false)
    {
    }

    /**
     * Search for another category with the same parent and the same position
     *
     * @return array first category found
     */
    public function getDuplicatePosition()
    {
    }

    /**
     * Updates level_depth for all children of the given id_category
     *
     * @param integer $id_category parent category
     */
    public function recalculateLevelDepth($id_category)
    {
    }

    /**
     * @see ObjectModel::toggleStatus()
     */
    public function toggleStatus()
    {
    }

    /**
     * Recursive scan of subcategories
     *
     * @param integer $max_depth Maximum depth of the tree (i.e. 2 => 3 levels depth)
     * @param integer $current_depth specify the current depth in the tree (don't use it, only for rucursivity!)
     * @param integer $id_lang Specify the id of the language used
     * @param array $excluded_ids_array specify a list of ids to exclude of results
     * @return array Subcategories lite tree
     */
    public function recurseLiteCategTree($max_depth = 3, $current_depth = 0, $id_lang = null, $excluded_ids_array = null)
    {
    }

    /**
     * Return current category childs
     *
     * @param integer $id_lang Language ID
     * @param boolean $active return only active categories
     * @return array Categories
     */
    public function getSubCategories($id_lang, $active = true)
    {
    }

    public function deleteLite()
    {
    }

    /**
     * Delete several categories from database
     * return boolean Deletion result
     */
    public function deleteSelection($categories)
    {
    }

    public function isRootCategoryForAShop()
    {
    }

    public function delete()
    {
    }

    /**
     * Return an array of all children of the current category
     *
     * @param int $id_lang
     * @return Collection
     */
    public function getAllChildren($id_lang = null)
    {
    }

    public function getShopID()
    {
    }

    /**
     * Return current category products
     *
     * @param integer $id_lang Language ID
     * @param integer $p Page number
     * @param integer $n Number of products per page
     * @param boolean $get_total return the number of results instead of the results themself
     * @param boolean $active return only active products
     * @param boolean $random active a random filter for returned products
     * @param int $random_number_products number of products to return if random is activated
     * @param boolean $check_access set to false to return all products (even if customer hasn't access)
     * @return mixed Products or number of products
     */
    public function getProducts($id_lang, $p, $n, $order_by = null, $order_way = null, $get_total = false, $active = true, $random = false, $random_number_products = 1, $check_access = true, Context $context = null)
    {
    }

    /**
     * checkAccess return true if id_customer is in a group allowed to see this category.
     *
     * @param mixed $id_customer
     * @access public
     * @return boolean true if access allowed for customer $id_customer
     */
    public function checkAccess($id_customer)
    {
    }

    public function getLink(Link $link = null)
    {
    }

    public function getName($id_lang = null)
    {
    }

    /**
     * Get Each parent category of this category until the root category
     *
     * @param integer $id_lang Language ID
     * @return array Corresponding categories
     */
    public function getParentsCategories($id_lang = null)
    {
    }

    public function cleanAssoProducts()
    {
    }

    public function addGroupsIfNoExist($id_group)
    {
    }

    public function getGroups()
    {
    }

    public function updatePosition($way, $position)
    {
    }

    /**
     * Check if current category is a child of shop root category
     *
     * @since 1.5.0
     * @param Shop $shop
     * @return bool
     */
    public function inShop(Shop $shop = null)
    {
    }

    public function getChildrenWs()
    {
    }

    public function getProductsWs()
    {
    }

    public function getWsNbProductsRecursive()
    {
    }

    /**
     * @param $id_shop
     * @return bool
     */
    public function isParentCategoryAvailable($id_shop)
    {
    }

    /**
     * Add association between shop and cateogries
     *
     * @param int $id_shop
     * @return bool
     */
    public function addShop($id_shop)
    {
    }

    public function existsInShop($id_shop)
    {
    }

    /**
     * Delete category from shop $id_shop
     *
     * @param int $id_shop
     * @return bool
     */
    public function deleteFromShop($id_shop)
    {
    }

    /**
     * Recursively add specified category childs to $to_delete array
     *
     * @param array &$to_delete Array reference where categories ID will be saved
     * @param array $id_category Parent category ID
     */
    protected function recursiveDelete(&$to_delete, $id_category)
    {
    }
}
