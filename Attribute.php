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

class Attribute extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'attribute',
        'primary' => 'id_attribute',
        'multilang' => true,
        'fields' => array(
            'id_attribute_group' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'color' => array('type' => self::TYPE_STRING, 'validate' => 'isColor'),
            'position' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),

            'name' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'required' => true, 'size' => 64),
        )
    );
    /** @var integer Group id which attribute belongs */
    public $id_attribute_group;
    /** @var string Name */
    public $name;
    public $color;
    public $position;
    public $default;
    protected $image_dir = _PS_COL_IMG_DIR_;
    protected $webserviceParameters = array(
        'objectsNodeName' => 'product_option_values',
        'objectNodeName' => 'product_option_value',
        'fields' => array(
            'id_attribute_group' => array('xlink_resource' => 'product_options'),
        )
    );

    public function __construct($id = null, $id_lang = null, $id_shop = null)
    {
    }

    /**
     * Get all attributes for a given language
     *
     * @param integer $id_lang Language id
     * @param boolean $notNull Get only not null fields if true
     * @return array Attributes
     */
    public static function getAttributes($id_lang, $not_null = false)
    {
    }

    /**
     * Get quantity for a given attribute combination
     * Check if quantity is enough to deserve customer
     *
     * @param integer $id_product_attribute Product attribute combination id
     * @param integer $qty Quantity needed
     * @return boolean Quantity is available or not
     */
    public static function checkAttributeQty($id_product_attribute, $qty, Shop $shop = null)
    {
    }

    /**
     * Update array with veritable quantity
     *
     * @deprecated since 1.5.0
     * @param array &$arr
     * @return bool
     */
    public static function updateQtyProduct(&$arr)
    {
    }

    /**
     * @deprecated 1.5.0, use StockAvailable::getQuantityAvailableByProduct()
     */
    public static function getAttributeQty($id_product)
    {
    }

    /**
     * Get minimal quantity for product with attributes quantity
     *
     * @acces public static
     * @param integer $id_product_attribute
     * @return mixed Minimal Quantity or false
     */
    public static function getAttributeMinimalQty($id_product_attribute)
    {
    }

    /**
     * getHigherPosition
     * Get the higher attribute position from a group attribute
     *
     * @param integer $id_attribute_group
     * @return integer $position
     */
    public static function getHigherPosition($id_attribute_group)
    {
    }

    public function delete()
    {
    }

    /**
     * Reorder attribute position in group $id_attribute_group.
     * Call it after deleting an attribute from a group.
     *
     * @param int $id_attribute_group
     * @param bool $use_last_attribute
     * @return bool $return
     */
    public function cleanPositions($id_attribute_group, $use_last_attribute = true)
    {
    }

    public function update($null_values = false)
    {
    }

    public function add($autodate = true, $null_values = false)
    {
    }

    /**
     * Return true if attribute is color type
     *
     * @acces public
     * @return bool
     */
    public function isColorAttribute()
    {
    }

    /**
     * Move an attribute inside its group
     *
     * @param boolean $way Up (1)  or Down (0)
     * @param integer $position
     * @return boolean Update result
     */
    public function updatePosition($way, $position)
    {
    }
}
