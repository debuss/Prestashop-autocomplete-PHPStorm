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

class AttributeGroup extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'attribute_group',
        'primary' => 'id_attribute_group',
        'multilang' => true,
        'fields' => array(
            'is_color_group' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'group_type' => array('type' => self::TYPE_STRING, 'required' => true),
            'position' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),

            // Lang fields
            'name' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'required' => true, 'size' => 64),
            'public_name' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'required' => true, 'size' => 64),
        ),
    );
    /** @var string Name */
    public $name;
    public $is_color_group;
    public $position;
    public $group_type;
    /** @var string Public Name */
    public $public_name;
    protected $webserviceParameters = array(
        'objectsNodeName' => 'product_options',
        'objectNodeName' => 'product_option',
        'fields' => array(),
        'associations' => array(
            'product_option_values' => array(
                'resource' => 'product_option_value',
                'fields' => array(
                    'id' => array()
                ),
            ),
        ),
    );

    /**
     * Get all attributes for a given language / group
     *
     * @param integer $id_lang Language id
     * @param boolean $id_attribute_group Attribute group id
     * @return array Attributes
     */
    public static function getAttributes($id_lang, $id_attribute_group)
    {
    }

    /**
     * Get all attributes groups for a given language
     *
     * @param integer $id_lang Language id
     * @return array Attributes groups
     */
    public static function getAttributesGroups($id_lang)
    {
    }

    /**
     * getHigherPosition
     * Get the higher group attribute position
     *
     * @return integer $position
     */
    public static function getHigherPosition()
    {
    }

    public static function cleanDeadCombinations()
    {
    }

    /**
     * Reorder group attribute position
     * Call it after deleting a group attribute.
     *
     * @return bool $return
     */
    public static function cleanPositions()
    {
    }

    public function add($autodate = true, $nullValues = false)
    {
    }

    public function update($nullValues = false)
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

    public function setWsProductOptionValues($values)
    {
    }

    public function getWsProductOptionValues()
    {
    }

    /**
     * Move a group attribute
     *
     * @param boolean $way Up (1)  or Down (0)
     * @param integer $position
     * @return boolean Update result
     */
    public function updatePosition($way, $position)
    {
    }
}

