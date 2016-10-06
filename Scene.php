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

class Scene extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'scene',
        'primary' => 'id_scene',
        'multilang' => true,
        'fields' => array(
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),

            // Lang fields
            'name' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'required' => true, 'size' => 100),
        ),
    );
    protected static $feature_active = null;
    /** @var string Name */
    public $name;
    /** @var boolean Active Scene */
    public $active = true;
    /** @var array Zone for image map */
    public $zones = array();
    /** @var array list of category where this scene is available */
    public $categories = array();
    /** @var array Products */
    public $products;

    public function __construct($id = null, $id_lang = null, $lite_result = true, $hide_scene_position = false)
    {
    }

    /**
     * This method is allow to know if a feature is used or active
     *
     * @since 1.5.0.1
     * @return bool
     */
    public static function isFeatureActive()
    {
    }

    /**
     * Hide scene prefix used for position
     *
     * @param string $name Scene name
     * @return string Name without position
     */
    public static function hideScenePosition($name)
    {
    }

    /**
     * Get all scenes of a category
     *
     * @return array Products
     */
    public static function getScenes($id_category, $id_lang = null, $only_active = true, $lite_result = true, $hide_scene_position = true, Context $context = null)
    {
    }

    /**
     * Get categories where scene is indexed
     *
     * @param integer $id_scene Scene id
     * @return array Categories where scene is indexed
     */
    public static function getIndexedCategories($id_scene)
    {
    }

    /**
     * Get all products of this scene
     *
     * @return array Products
     */
    public function getProducts($only_active = true, $id_lang = null, $lite_result = true, Context $context = null)
    {
    }

    public function update($null_values = false)
    {
    }

    public function updateZoneProducts()
    {
    }

    public function deleteZoneProducts()
    {
    }

    public function addZoneProducts($zones)
    {
    }

    public function updateCategories()
    {
    }

    public function deleteCategories()
    {
    }

    public function addCategories($categories)
    {
    }

    public function add($autodate = true, $null_values = false)
    {
    }

    public function delete()
    {
    }

    public function deleteImage($force_delete = false)
    {
    }
}


