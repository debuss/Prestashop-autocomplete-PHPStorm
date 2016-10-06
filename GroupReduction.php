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

class GroupReduction extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'group_reduction',
        'primary' => 'id_group_reduction',
        'fields' => array(
            'id_group' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_category' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'reduction' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => true),
        ),
    );
    protected static $reduction_cache = array();
    public $id_group;
    public $id_category;
    public $reduction;

    public static function getGroupReductions($id_group, $id_lang)
    {
    }

    public static function getValueForProduct($id_product, $id_group)
    {
    }

    public static function doesExist($id_group, $id_category)
    {
    }

    public static function getGroupByCategoryId($id_category)
    {
    }

    public static function getGroupsReductionByCategoryId($id_category)
    {
    }

    public static function getGroupReductionByCategoryId($id_category)
    {
    }

    public static function setProductReduction($id_product, $id_group = null, $id_category, $reduction = null)
    {
    }

    public static function deleteProductReduction($id_product)
    {
    }

    public static function getGroupsByCategoryId($id_category)
    {
    }

    public static function duplicateReduction($id_product_old, $id_product)
    {
    }

    public static function deleteCategory($id_category)
    {
    }

    public function add($autodate = true, $null_values = false)
    {
    }

    public function update($null_values = false)
    {
    }

    public function delete()
    {
    }

    protected function _setCache()
    {
    }

    protected function _updateCache()
    {
    }

    protected function _clearCache()
    {
    }
}
