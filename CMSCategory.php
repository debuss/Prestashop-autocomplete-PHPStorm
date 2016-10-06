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

class CMSCategory extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'cms_category',
        'primary' => 'id_cms_category',
        'multilang' => true,
        'fields' => array(
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'id_parent' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'position' => array('type' => self::TYPE_INT),
            'level_depth' => array('type' => self::TYPE_INT),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),

            // Lang fields
            'name' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCatalogName', 'required' => true, 'size' => 64),
            'link_rewrite' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isLinkRewrite', 'required' => true, 'size' => 64),
            'description' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml'),
            'meta_title' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 128),
            'meta_description' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255),
            'meta_keywords' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255),
        ),
    );
    protected static $_links = array();
    public $id;
    /** @var integer CMSCategory ID */
    public $id_cms_category;
    /** @var string Name */
    public $name;
    /** @var boolean Status for display */
    public $active = 1;
    /** @var string Description */
    public $description;
    /** @var integer Parent CMSCategory ID */
    public $id_parent;
    /** @var  integer category position */
    public $position;
    /** @var integer Parents number */
    public $level_depth;
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

    public static function getRecurseCategory($id_lang = null, $current = 1, $active = 1, $links = 0, Link $link = null)
    {
    }

    public static function recurseCMSCategory($categories, $current, $id_cms_category = 1, $id_selected = 1, $is_html = 0)
    {
    }

    /**
     * Return available categories
     *
     * @param integer $id_lang Language ID
     * @param boolean $active return only active categories
     * @return array Categories
     */
    public static function getCategories($id_lang, $active = true, $order = true)
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

    public static function getChildren($id_parent, $id_lang, $active = true)
    {
    }

    /**
     * Check if CMSCategory can be moved in another one
     *
     * @param integer $id_parent Parent candidate
     * @return boolean Parent validity
     */
    public static function checkBeforeMove($id_cms_category, $id_parent)
    {
    }

    public static function getLinkRewrite($id_cms_category, $id_lang)
    {
    }

    /**
     * Light back office search for categories
     *
     * @param integer $id_lang Language ID
     * @param string $query Searched string
     * @param boolean $unrestricted allows search without lang and includes first CMSCategory and exact match
     * @return array Corresponding categories
     */
    public static function searchByName($id_lang, $query, $unrestricted = false)
    {
    }

    /**
     * Retrieve CMSCategory by name and parent CMSCategory id
     *
     * @param integer $id_lang Language ID
     * @param string $CMSCategory_name Searched CMSCategory name
     * @param integer $id_parent_CMSCategory parent CMSCategory ID
     * @return array Corresponding CMSCategory
     * @deprecated
     */
    public static function searchByNameAndParentCMSCategoryId($id_lang, $CMSCategory_name, $id_parent_CMSCategory)
    {
    }

    public static function getUrlRewriteInformations($id_category)
    {
    }

    public static function getLastPosition($id_category_parent)
    {
    }

    public static function cleanPositions($id_category_parent)
    {
    }

    /**
     * Hide CMSCategory prefix used for position
     *
     * @param string $name CMSCategory name
     * @return string Name without position
     */
    public static function hideCMSCategoryPosition($name)
    {
    }

    public function add($autodate = true, $null_values = false)
    {
    }

    /**
     * Get the number of parent categories
     *
     * @return integer Level depth
     */
    public function calcLevelDepth()
    {
    }

    public function update($null_values = false)
    {
    }

    /**
     * Recursive scan of subcategories
     *
     * @param integer $max_depth Maximum depth of the tree (i.e. 2 => 3 levels depth)
     * @param integer $currentDepth specify the current depth in the tree (don't use it, only for rucursivity!)
     * @param array $excluded_ids_array specify a list of ids to exclude of results
     * @param integer $idLang Specify the id of the language used
     * @return array Subcategories lite tree
     */
    public function recurseLiteCategTree($max_depth = 3, $currentDepth = 0, $id_lang = null, $excluded_ids_array = null, Link $link = null)
    {
    }

    /**
     * Return current CMSCategory childs
     *
     * @param integer $id_lang Language ID
     * @param boolean $active return only active categories
     * @return array Categories
     */
    public function getSubCategories($id_lang, $active = true)
    {
    }

    /**
     * Delete several categories from database
     * return boolean Deletion result
     */
    public function deleteSelection($categories)
    {
    }

    public function delete()
    {
    }

    public function getLink(Link $link = null)
    {
    }

    public function getName($id_lang = null)
    {
    }

    /**
     * Get Each parent CMSCategory of this CMSCategory until the root CMSCategory
     *
     * @param integer $id_lang Language ID
     * @return array Corresponding categories
     */
    public function getParentsCategories($id_lang = null)
    {
    }

    public function updatePosition($way, $position)
    {
    }

    /**
     * Recursively add specified CMSCategory childs to $toDelete array
     *
     * @param array &$toDelete Array reference where categories ID will be saved
     * @param array $id_cms_category Parent CMSCategory ID
     */
    protected function recursiveDelete(&$to_delete, $id_cms_category)
    {
    }
}


