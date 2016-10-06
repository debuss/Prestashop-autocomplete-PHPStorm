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

class FeatureValue extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'feature_value',
        'primary' => 'id_feature_value',
        'multilang' => true,
        'fields' => array(
            'id_feature' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'custom' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),

            // Lang fields
            'value' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'required' => true, 'size' => 255),
        ),
    );
    /** @var integer Group id which attribute belongs */
    public $id_feature;
    /** @var string Name */
    public $value;
    /** @var boolean Custom */
    public $custom = 0;
    protected $webserviceParameters = array(
        'objectsNodeName' => 'product_feature_values',
        'objectNodeName' => 'product_feature_value',
        'fields' => array(
            'id_feature' => array('xlink_resource' => 'product_features'),
        ),
    );

    /**
     * Get all values for a given feature
     *
     * @param boolean $id_feature Feature id
     * @return array Array with feature's values
     * @static
     */
    public static function getFeatureValues($id_feature)
    {
    }

    /**
     * Get all values for a given feature and language
     *
     * @param integer $id_lang Language id
     * @param boolean $id_feature Feature id
     * @return array Array with feature's values
     * @static
     */
    public static function getFeatureValuesWithLang($id_lang, $id_feature, $custom = false)
    {
    }

    /**
     * Get all language for a given value
     *
     * @param boolean $id_feature_value Feature value id
     * @return array Array with value's languages
     * @static
     */
    public static function getFeatureValueLang($id_feature_value)
    {
    }

    /**
     * Select the good lang in tab
     *
     * @param array $lang Array with all language
     * @param integer $id_lang Language id
     * @return string String value name selected
     * @static
     */
    public static function selectLang($lang, $id_lang)
    {
    }

    public static function addFeatureValueImport($id_feature, $name)
    {
    }

    public function add($autodate = true, $nullValues = false)
    {
    }

    public function delete()
    {
    }

    public function update($nullValues = false)
    {
    }
}
