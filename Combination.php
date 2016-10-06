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

class Combination extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'product_attribute',
        'primary' => 'id_product_attribute',
        'fields' => array(
            'id_product' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'location' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => 64),
            'ean13' => array('type' => self::TYPE_STRING, 'validate' => 'isEan13', 'size' => 13),
            'upc' => array('type' => self::TYPE_STRING, 'validate' => 'isUpc', 'size' => 12),
            'quantity' => array('type' => self::TYPE_INT, 'validate' => 'isInt', 'size' => 10),
            'reference' => array('type' => self::TYPE_STRING, 'size' => 32),
            'supplier_reference' => array('type' => self::TYPE_STRING, 'size' => 32),

            /* Shop fields */
            'wholesale_price' => array('type' => self::TYPE_FLOAT, 'shop' => true, 'validate' => 'isPrice', 'size' => 27),
            'price' => array('type' => self::TYPE_FLOAT, 'shop' => true, 'validate' => 'isNegativePrice', 'size' => 20),
            'ecotax' => array('type' => self::TYPE_FLOAT, 'shop' => true, 'validate' => 'isPrice', 'size' => 20),
            'weight' => array('type' => self::TYPE_FLOAT, 'shop' => true, 'validate' => 'isFloat'),
            'unit_price_impact' => array('type' => self::TYPE_FLOAT, 'shop' => true, 'validate' => 'isNegativePrice', 'size' => 20),
            'minimal_quantity' => array('type' => self::TYPE_INT, 'shop' => true, 'validate' => 'isUnsignedId', 'required' => true),
            'default_on' => array('type' => self::TYPE_INT, 'shop' => true, 'validate' => 'isBool'),
            'available_date' => array('type' => self::TYPE_DATE, 'shop' => true, 'validate' => 'isDateFormat'),
        ),
    );
    public $id_product;
    public $reference;
    public $supplier_reference;
    public $location;
    public $ean13;
    public $upc;
    public $wholesale_price;
    public $price;
    public $unit_price_impact;
    public $ecotax;
    public $minimal_quantity = 1;
    public $quantity;
    public $weight;
    public $default_on;
    public $available_date = '0000-00-00';
    protected $webserviceParameters = array(
        'objectNodeName' => 'combination',
        'objectsNodeName' => 'combinations',
        'fields' => array(
            'id_product' => array('required' => true, 'xlink_resource' => 'products'),
        ),
        'associations' => array(
            'product_option_values' => array('resource' => 'product_option_value'),
            'images' => array('resource' => 'image'),
        ),
    );

    /**
     * This method is allow to know if a feature is active
     *
     * @since 1.5.0.1
     * @return bool
     */
    public static function isFeatureActive()
    {
    }

    /**
     * This method is allow to know if a Combination entity is currently used
     *
     * @since 1.5.0.1
     * @param $table
     * @param $has_active_column
     * @return bool
     */
    public static function isCurrentlyUsed($table = null, $has_active_column = false)
    {
    }

    /**
     * For a given product_attribute reference, returns the corresponding id
     *
     * @param int $id_product
     * @param string $reference
     * @return int id
     */
    public static function getIdByReference($id_product, $reference)
    {
    }

    /**
     * Retrive the price of combination
     *
     * @since 1.5.0
     * @param int $id_product_attribute
     * @return float mixed
     */
    public static function getPrice($id_product_attribute)
    {
    }

    public function delete()
    {
    }

    public function deleteAssociations()
    {
    }

    public function add($autodate = true, $null_values = false)
    {
    }

    public function setWsProductOptionValues($values)
    {
    }

    public function setAttributes($ids_attribute)
    {
    }

    public function getWsProductOptionValues()
    {
    }

    public function getWsImages()
    {
    }

    public function setWsImages($values)
    {
    }

    public function setImages($ids_image)
    {
    }

    public function getAttributesName($id_lang)
    {
    }
}
