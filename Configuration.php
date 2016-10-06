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

class Configuration extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'configuration',
        'primary' => 'id_configuration',
        'multilang' => true,
        'fields' => array(
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isConfigName', 'required' => true, 'size' => 32),
            'id_shop_group' => array('type' => self::TYPE_NOTHING, 'validate' => 'isUnsignedId'),
            'id_shop' => array('type' => self::TYPE_NOTHING, 'validate' => 'isUnsignedId'),
            'value' => array('type' => self::TYPE_STRING),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
        ),
    );
    /** @var array Configuration cache */
    protected static $_CONF;
    /** @var array Vars types */
    protected static $types = array();
    public $id;
    /** @var string Key */
    public $name;
    public $id_shop_group;
    public $id_shop;
    /** @var string Value */
    public $value;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    protected $webserviceParameters = array(
        'fields' => array(
            'value' => array(),
        )
    );

    public static function getGlobalValue($key, $id_lang = null)
    {
    }

    /**
     * Get a single configuration value (in one language only)
     *
     * @param string $key Key wanted
     * @param integer $id_lang Language ID
     * @return string Value
     */
    public static function get($key, $id_lang = null, $id_shop_group = null, $id_shop = null)
    {
    }

    /**
     * Load all configuration data
     */
    public static function loadConfiguration()
    {
    }

    /**
     * Check if key exists in configuration
     *
     * @param string $key
     * @param int $id_lang
     * @param int $id_shop_group
     * @param int $id_shop
     * @return bool
     */
    public static function hasKey($key, $id_lang = null, $id_shop_group = null, $id_shop = null)
    {
    }

    /**
     * Get a single configuration value (in multiple languages)
     *
     * @param string $key Key wanted
     * @param int $id_shop_group
     * @param int $id_shop
     * @return array Values in multiple languages
     */
    public static function getInt($key, $id_shop_group = null, $id_shop = null)
    {
    }

    /**
     * Get several configuration values (in one language only)
     *
     * @param array $keys Keys wanted
     * @param integer $id_lang Language ID
     * @return array Values
     */
    public static function getMultiple($keys, $id_lang = null, $id_shop_group = null, $id_shop = null)
    {
    }

    /**
     * Update configuration key for global context only
     *
     * @param string $key
     * @param mixed $values
     * @param bool $html
     * @return bool
     */
    public static function updateGlobalValue($key, $values, $html = false)
    {
    }

    /**
     * Update configuration key and value into database (automatically insert if key does not exist)
     *
     * @param string $key Key
     * @param mixed $values $values is an array if the configuration is multilingual, a single string else.
     * @param boolean $html Specify if html is authorized in value
     * @param int $id_shop_group
     * @param int $id_shop
     * @return boolean Update result
     */
    public static function updateValue($key, $values, $html = false, $id_shop_group = null, $id_shop = null)
    {
    }

    /**
     * Return ID a configuration key
     *
     * @param string $key
     * @param int $id_shop_group
     * @param int $id_shop
     */
    public static function getIdByName($key, $id_shop_group = null, $id_shop = null)
    {
    }

    /**
     * Set TEMPORARY a single configuration value (in one language only)
     *
     * @param string $key Key wanted
     * @param mixed $values $values is an array if the configuration is multilingual, a single string else.
     * @param int $id_shop_group
     * @param int $id_shop
     */
    public static function set($key, $values, $id_shop_group = null, $id_shop = null)
    {
    }

    /**
     * Delete a configuration key in database (with or without language management)
     *
     * @param string $key Key to delete
     * @return boolean Deletion result
     */
    public static function deleteByName($key)
    {
    }

    /**
     * Delete configuration key from current context.
     *
     * @param string $key
     */
    public static function deleteFromContext($key)
    {
    }

    public static function isOverridenByCurrentContext($key)
    {
    }

    /**
     * Check if a key was loaded as multi lang
     *
     * @param string $key
     * @return bool
     */
    public static function isLangKey($key)
    {
    }

    /**
     * Check if configuration var is defined in given context
     *
     * @param string $key
     * @param int $id_lang
     * @param int $context
     */
    public static function hasContext($key, $id_lang, $context)
    {
    }

    /**
     * Add SQL restriction on shops for configuration table
     *
     * @param int $id_shop_group
     * @param int $id_shop
     * @return string
     */
    protected static function sqlRestriction($id_shop_group, $id_shop)
    {
    }

    /**
     * @see ObjectModel::getFieldsLang()
     * @return array Multilingual fields
     */
    public function getFieldsLang()
    {
    }

    /**
     * This method is override to allow TranslatedConfiguration entity
     *
     * @param $sql_join
     * @param $sql_filter
     * @param $sql_sort
     * @param $sql_limit
     * @return array
     */
    public function getWebserviceObjectList($sql_join, $sql_filter, $sql_sort, $sql_limit)
    {
    }
}
