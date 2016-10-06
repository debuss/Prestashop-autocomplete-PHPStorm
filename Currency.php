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

class Currency extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'currency',
        'primary' => 'id_currency',
        'multilang_shop' => true,
        'fields' => array(
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true, 'size' => 32),
            'iso_code' => array('type' => self::TYPE_STRING, 'validate' => 'isLanguageIsoCode', 'required' => true, 'size' => 3),
            'iso_code_num' => array('type' => self::TYPE_STRING, 'validate' => 'isNumericIsoCode', 'size' => 3),
            'blank' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),
            'sign' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true, 'size' => 8),
            'format' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'decimals' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'conversion_rate' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true, 'shop' => true),
            'deleted' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
        ),
    );
    /** @var array Currency cache */
    static protected $currencies = array();
    public $id;
    /** @var string Name */
    public $name;
    /** @var string Iso code */
    public $iso_code;
    /** @var string Iso code numeric */
    public $iso_code_num;
    /** @var string Symbol for short display */
    public $sign;
    /** @var int bool used for displaying blank between sign and price */
    public $blank;
    /** @var string Conversion rate from euros */
    public $conversion_rate;
    /** @var boolean True if currency has been deleted (staying in database as deleted) */
    public $deleted = 0;
    /** @var int ID used for displaying prices */
    public $format;
    /** @var int bool Display decimals on prices */
    public $decimals;
    /** @var int bool active */
    public $active;
    /**
     * contains the sign to display before price, according to its format
     *
     * @var string
     */
    public $prefix = null;
    /**
     * contains the sign to display after price, according to its format
     *
     * @var string
     */
    public $suffix = null;
    protected $webserviceParameters = array(
        'objectsNodeName' => 'currencies',
    );

    public function __construct($id = null, $id_lang = null, $id_shop = null)
    {
    }

    public static function getCurrenciesByIdShop($id_shop = 0)
    {
    }

    public static function getPaymentCurrenciesSpecial($id_module, $id_shop = null)
    {
    }

    public static function getPaymentCurrencies($id_module, $id_shop = null)
    {
    }

    public static function checkPaymentCurrencies($id_module, $id_shop = null)
    {
    }

    public static function getCurrency($id_currency)
    {
    }

    public static function refreshCurrencies()
    {
    }

    public static function getDefaultCurrency()
    {
    }

    /**
     * Return available currencies
     *
     * @return array Currencies
     */
    public static function getCurrencies($object = false, $active = 1)
    {
    }

    public static function getCurrencyInstance($id)
    {
    }

    /**
     * Get current currency
     *
     * @deprecated as of 1.5 use $context->currency instead
     * @return Currency
     */
    public static function getCurrent()
    {
    }

    /**
     * Check if a curency already exists.
     *
     * @param int|string $iso_code int for iso code number string for iso code
     * @return boolean
     */
    public static function exists($iso_code, $iso_code_num, $id_shop = 0)
    {
    }

    /**
     * @static
     * @param $iso_code
     * @param int $id_shop
     * @return int
     */
    public static function getIdByIsoCodeNum($iso_code_num, $id_shop = 0)
    {
    }

    /**
     * @static
     * @param int $id_shop
     * @return DbQuery
     */
    public static function getIdByQuery($id_shop = 0)
    {
    }

    /**
     * @static
     * @param $iso_code
     * @param int $id_shop
     * @return int
     */
    public static function getIdByIsoCode($iso_code, $id_shop = 0)
    {
    }

    /**
     * Overriding check if currency with the same iso code already exists.
     * If it's true, currency is doesn't added.
     *
     * @see ObjectModelCore::add()
     */
    public function add($autodate = true, $nullValues = false)
    {
    }

    public function deleteSelection($selection)
    {
    }

    public function delete()
    {
    }

    /**
     * Return formated sign
     *
     * @param string $side left or right
     * @return string formated sign
     */
    public function getSign($side = null)
    {
    }

    /**
     * Refresh the currency conversion rate
     * The XML file define conversion rate for each from a default currency ($isoCodeSource).
     *
     * @param $data XML content which contains all the conversion rates
     * @param $isoCodeSource The default currency used in the XML file
     * @param $defaultCurrency The default currency object
     */
    public function refreshCurrency($data, $isoCodeSource, $defaultCurrency)
    {
    }
}

