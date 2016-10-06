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

class Supplier extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'supplier',
        'primary' => 'id_supplier',
        'multilang' => true,
        'fields' => array(
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isCatalogName', 'required' => true, 'size' => 64),
            'active' => array('type' => self::TYPE_BOOL),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),

            // Lang fields
            'description' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName'),
            'meta_title' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 128),
            'meta_description' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255),
            'meta_keywords' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255),
        ),
    );
    /**
     * Return name from id
     *
     * @param integer $id_supplier Supplier ID
     * @return string name
     */
    static protected $cache_name = array();
    public $id;
    /** @var integer supplier ID */
    public $id_supplier;
    /** @var string Name */
    public $name;
    /** @var string A short description for the discount */
    public $description;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    /** @var string Friendly URL */
    public $link_rewrite;
    /** @var string Meta title */
    public $meta_title;
    /** @var string Meta keywords */
    public $meta_keywords;
    /** @var string Meta description */
    public $meta_description;
    /** @var boolean active */
    public $active;
    protected $webserviceParameters = array(
        'fields' => array(
            'link_rewrite' => array('sqlId' => 'link_rewrite'),
        ),
    );

    public function __construct($id = null, $id_lang = null)
    {
    }

    /**
     * Return suppliers
     *
     * @return array Suppliers
     */
    public static function getSuppliers($get_nb_products = false, $id_lang = 0, $active = true, $p = false, $n = false, $all_groups = false)
    {
    }

    public static function getNameById($id_supplier)
    {
    }

    public static function getIdByName($name)
    {
    }

    public static function getProducts($id_supplier, $id_lang, $p, $n,
                                       $order_by = null, $order_way = null, $get_total = false, $active = true, $active_category = true)
    {
    }

    public static function supplierExists($id_supplier)
    {
    }

    /**
     * Gets product informations
     *
     * @since 1.5.0
     * @param int $id_supplier
     * @param int $id_product
     * @param int $id_product_attribute
     * @return array
     */
    public static function getProductInformationsBySupplier($id_supplier, $id_product, $id_product_attribute = 0)
    {
    }

    /*
    * Tells if a supplier exists
    *
    * @param $id_supplier Supplier id
    * @return boolean
    */

    public function getLink()
    {
    }

    public function getProductsLite($id_lang)
    {
    }

    /**
     * @see ObjectModel::delete()
     */
    public function delete()
    {
    }
}

