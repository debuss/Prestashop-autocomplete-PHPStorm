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

class Manufacturer extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'manufacturer',
        'primary' => 'id_manufacturer',
        'multilang' => true,
        'fields' => array(
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isCatalogName', 'required' => true, 'size' => 64),
            'active' => array('type' => self::TYPE_BOOL),
            'date_add' => array('type' => self::TYPE_DATE),
            'date_upd' => array('type' => self::TYPE_DATE),

            // Lang fields
            'description' => array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isString'),
            'short_description' => array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isString', 'size' => 254),
            'meta_title' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 128),
            'meta_description' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255),
            'meta_keywords' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName'),
        ),
    );
    /**
     * Return name from id
     *
     * @param integer $id_manufacturer Manufacturer ID
     * @return string name
     */
    static protected $cacheName = array();
    public $id;
    /** @var integer manufacturer ID //FIXME is it really usefull...? */
    public $id_manufacturer;
    /** @var string Name */
    public $name;
    /** @var string A description */
    public $description;
    /** @var string A short description */
    public $short_description;
    /** @var int Address */
    public $id_address;
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
            'active' => array(),
            'link_rewrite' => array('getter' => 'getLink', 'setter' => false),
        ),
        'associations' => array(
            'addresses' => array('resource' => 'address', 'setter' => false, 'fields' => array(
                'id' => array('xlink_resource' => 'addresses'),
            )),
        ),
    );

    public function __construct($id = null, $id_lang = null)
    {
    }

    /**
     * Return manufacturers
     *
     * @param boolean $get_nb_products [optional] return products numbers for each
     * @return array Manufacturers
     */
    public static function getManufacturers($get_nb_products = false, $id_lang = 0, $active = true, $p = false,
                                            $n = false, $all_group = false)
    {
    }

    public static function getNameById($id_manufacturer)
    {
    }

    public static function getIdByName($name)
    {
    }

    public static function getProducts($id_manufacturer, $id_lang, $p, $n, $order_by = null, $order_way = null,
                                       $get_total = false, $active = true, $active_category = true, Context $context = null)
    {
    }

    public static function manufacturerExists($id_manufacturer)
    {
    }

    public function getLink()
    {
    }

    /**
     * Delete several objects from database
     * return boolean Deletion result
     */
    public function deleteSelection($selection)
    {
    }

    public function delete()
    {
    }

    public function getProductsLite($id_lang)
    {
    }

    /*
    * Specify if a manufacturer already in base
    *
    * @param $id_manufacturer Manufacturer id
    * @return boolean
    */

    public function getAddresses($id_lang)
    {
    }

    public function getWsAddresses()
    {
    }

    public function setWsAddresses($id_addresses)
    {
    }

    protected function getManufacturerAddress()
    {
    }
}
