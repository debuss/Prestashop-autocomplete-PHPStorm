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

class Feature extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'feature',
        'primary' => 'id_feature',
        'multilang' => true,
        'fields' => array(
            'position' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),

            // Lang fields
            'name' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'required' => true, 'size' => 128),
        ),
    );
    /** @var string Name */
    public $name;
    public $position;
    protected $webserviceParameters = array(
        'objectsNodeName' => 'product_features',
        'objectNodeName' => 'product_feature',
        'fields' => array(),
    );

    /**
     * Get a feature data for a given id_feature and id_lang
     *
     * @param integer $id_lang Language id
     * @param integer $id_feature Feature id
     * @return array Array with feature's data
     * @static
     */
    public static function getFeature($id_lang, $id_feature)
    {
    }

    /**
     * Get all features for a given language
     *
     * @param integer $id_lang Language id
     * @return array Multiple arrays with feature's data
     * @static
     */
    public static function getFeatures($id_lang, $with_shop = true)
    {
    }

    /**
     * Count number of features for a given language
     *
     * @param integer $id_lang Language id
     * @return int Number of feature
     * @static
     */
    public static function nbFeatures($id_lang)
    {
    }

    /**
     * Create a feature from import
     *
     * @param integer $id_feature Feature id
     * @param integer $id_product Product id
     * @param array $value Feature Value
     */
    public static function addFeatureImport($name, $position = false)
    {
    }

    /**
     * getHigherPosition
     * Get the higher feature position
     *
     * @return integer $position
     */
    public static function getHigherPosition()
    {
    }

    public static function getFeaturesForComparison($list_ids_product, $id_lang)
    {
    }

    /**
     * This metohd is allow to know if a feature is used or active
     *
     * @since 1.5.0.1
     * @return bool
     */
    public static function isFeatureActive()
    {
    }

    /**
     * Reorder feature position
     * Call it after deleting a feature.
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
     *
     * @param array $selection Array with items to delete
     * @return boolean Deletion result
     */
    public function deleteSelection($selection)
    {
    }

    public function delete()
    {
    }

    /**
     * Move a feature
     *
     * @param boolean $way Up (1)  or Down (0)
     * @param integer $position
     * @return boolean Update result
     */
    public function updatePosition($way, $position, $id_feature = null)
    {
    }
}

