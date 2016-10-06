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

class ImageType extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'image_type',
        'primary' => 'id_image_type',
        'fields' => array(
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isImageTypeName', 'required' => true, 'size' => 64),
            'width' => array('type' => self::TYPE_INT, 'validate' => 'isImageSize', 'required' => true),
            'height' => array('type' => self::TYPE_INT, 'validate' => 'isImageSize', 'required' => true),
            'categories' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'products' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'manufacturers' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'suppliers' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'scenes' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'stores' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
        ),
    );
    /**
     * @var array Image types cache
     */
    protected static $images_types_cache = array();
    protected static $images_types_name_cache = array();
    public $id;
    /** @var string Name */
    public $name;
    /** @var integer Width */
    public $width;
    /** @var integer Height */
    public $height;
    /** @var boolean Apply to products */
    public $products;
    /** @var integer Apply to categories */
    public $categories;
    /** @var integer Apply to manufacturers */
    public $manufacturers;
    /** @var integer Apply to suppliers */
    public $suppliers;
    /** @var integer Apply to scenes */
    public $scenes;
    /** @var integer Apply to store */
    public $stores;
    protected $webserviceParameters = array();

    /**
     * Returns image type definitions
     *
     * @param string|null Image type
     * @return array Image type definitions
     */
    public static function getImagesTypes($type = null)
    {
    }

    /**
     * Check if type already is already registered in database
     *
     * @param string $typeName Name
     * @return integer Number of results found
     */
    public static function typeAlreadyExists($typeName)
    {
    }

    public static function getFormatedName($name)
    {
    }

    /**
     * Finds image type definition by name and type
     *
     * @param string $name
     * @param string $type
     */
    public static function getByNameNType($name, $type = null)
    {
    }
}
