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

class Country extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'country',
        'primary' => 'id_country',
        'multilang' => true,
        'fields' => array(
            'id_zone' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_currency' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'call_prefix' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),
            'iso_code' => array('type' => self::TYPE_STRING, 'validate' => 'isLanguageIsoCode', 'required' => true, 'size' => 3),
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'contains_states' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'need_identification_number' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'need_zip_code' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'zip_code_format' => array('type' => self::TYPE_STRING, 'validate' => 'isZipCodeFormat'),
            'display_tax_label' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),

            /* Lang fields */
            'name' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'required' => true, 'size' => 64),
        ),
        'associations' => array(
            'zone' => array('type' => self::HAS_ONE),
            'currency' => array('type' => self::HAS_ONE),
        )
    );
    protected static $_idZones = array();
    protected static $cache_iso_by_id = array();
    public $id;
    /** @var integer Zone id which country belongs */
    public $id_zone;
    /** @var integer Currency id which country belongs */
    public $id_currency;
    /** @var string 2 letters iso code */
    public $iso_code;
    /** @var integer international call prefix */
    public $call_prefix;
    /** @var string Name */
    public $name;
    /** @var boolean Contain states */
    public $contains_states;
    /** @var boolean Need identification number dni/nif/nie */
    public $need_identification_number;
    /** @var boolean Need Zip Code */
    public $need_zip_code;
    /** @var string Zip Code Format */
    public $zip_code_format;
    /** @var boolean Display or not the tax incl./tax excl. mention in the front office */
    public $display_tax_label = true;
    /** @var boolean Status for delivery */
    public $active = true;
    protected $webserviceParameters = array(
        'objectsNodeName' => 'countries',
        'fields' => array(
            'id_zone' => array('xlink_resource' => 'zones'),
            'id_currency' => array('xlink_resource' => 'currencies'),
        ),
    );

    public static function getCountriesByIdShop($id_shop, $id_lang)
    {
    }

    /**
     * Get a country ID with its iso code
     *
     * @param string $iso_code Country iso code
     * @return integer Country ID
     */
    public static function getByIso($iso_code)
    {
    }

    public static function getIdZone($id_country)
    {
    }

    /**
     * Get a country name with its ID
     *
     * @param integer $id_lang Language ID
     * @param integer $id_country Country ID
     * @return string Country name
     */
    public static function getNameById($id_lang, $id_country)
    {
    }

    /**
     * Get a country iso with its ID
     *
     * @param integer $id_country Country ID
     * @return string Country iso
     */
    public static function getIsoById($id_country)
    {
    }

    /**
     * Get a country id with its name
     *
     * @param integer $id_lang Language ID
     * @param string $country Country Name
     * @return intval Country id
     */
    public static function getIdByName($id_lang = null, $country)
    {
    }

    public static function getNeedZipCode($id_country)
    {
    }

    public static function getZipCodeFormat($id_country)
    {
    }

    /**
     * Returns the default country Id
     *
     * @deprecated as of 1.5 use $context->country->id instead
     * @return integer default country id
     */
    public static function getDefaultCountryId()
    {
    }

    public static function getCountriesByZoneId($id_zone, $id_lang)
    {
    }

    public static function containsStates($id_country)
    {
    }

    public static function addModuleRestrictions(array $shops = array(), array $countries = array(), array $modules = array())
    {
    }

    /**
     * @brief Return available countries
     * @param integer $id_lang Language ID
     * @param boolean $active return only active coutries
     * @param boolean $contain_states return only country with states
     * @param boolean $list_states Include the states list with the returned list
     * @return Array Countries and corresponding zones
     */
    public static function getCountries($id_lang, $active = false, $contain_states = false, $list_states = true)
    {
    }

    public static function isNeedDniByCountryId($id_country)
    {
    }

    public function delete()
    {
    }

    public function isNeedDni()
    {
    }

    /**
     * @param $ids_countries
     * @param $id_zone
     * @return bool
     */
    public function affectZoneToSelection($ids_countries, $id_zone)
    {
    }

    /**
     * Replace letters of zip code format And check this format on the zip code
     *
     * @param $zip_code
     * @return (bool)
     */
    public function checkZipCode($zip_code)
    {
    }
}
