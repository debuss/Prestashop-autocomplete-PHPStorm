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

class Group extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'group',
        'primary' => 'id_group',
        'multilang' => true,
        'fields' => array(
            'reduction' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat'),
            'price_display_method' => array('type' => self::TYPE_INT, 'validate' => 'isPriceDisplayMethod', 'required' => true),
            'show_prices' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),

            // Lang fields
            'name' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'required' => true, 'size' => 32),
        ),
    );
    protected static $cache_reduction = array();
    protected static $group_price_display_method = array();
    public $id;
    /** @var string Lastname */
    public $name;
    /** @var string Reduction */
    public $reduction;
    /** @var int Price display method (tax inc/tax exc) */
    public $price_display_method;
    /** @var boolean Show prices */
    public $show_prices = 1;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    protected $webserviceParameters = array();

    public static function getGroups($id_lang, $id_shop = false)
    {
    }

    public static function getReduction($id_customer = null)
    {
    }

    /**
     * Return current group object
     * Use context
     *
     * @static
     * @return Group Group object
     */
    public static function getCurrent()
    {
    }

    public static function getReductionByIdGroup($id_group)
    {
    }

    public static function getDefaultPriceDisplayMethod()
    {
    }

    public static function getPriceDisplayMethod($id_group)
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
     * Truncate all restrictions by module
     *
     * @param integer id_module
     * @return boolean result
     */
    public static function truncateRestrictionsByModule($id_module)
    {
    }

    /**
     * Adding restrictions modules to the group with id $id_group
     *
     * @param $id_group
     * @param $modules
     * @param array $shops
     * @return bool
     */
    public static function addModulesRestrictions($id_group, $modules, $shops = array(1))
    {
    }

    /**
     * Add restrictions for a new module
     * We authorize every groups to the new module
     *
     * @param integer id_module
     * @param array $shops
     */
    public static function addRestrictionsForModule($id_module, $shops = array(1))
    {
    }

    /**
     * Truncate all modules restrictions for the group
     *
     * @param integer id_group
     * @return boolean result
     */
    public static function truncateModulesRestrictions($id_group)
    {
    }

    /**
     * This method is allow to know if a Discount entity is currently used
     *
     * @since 1.5.0.1
     * @param $table
     * @param $has_active_column
     * @return bool
     */
    public static function isCurrentlyUsed($table = null, $has_active_column = false)
    {
    }

    public function getCustomers($count = false, $start = 0, $limit = 0, $shop_filtering = false)
    {
    }

    public function add($autodate = true, $null_values = false)
    {
    }

    public function delete()
    {
    }
}


