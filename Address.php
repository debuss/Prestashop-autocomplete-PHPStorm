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

class Address extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'address',
        'primary' => 'id_address',
        'fields' => array(
            'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId', 'copy_post' => false),
            'id_manufacturer' => array('type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId', 'copy_post' => false),
            'id_supplier' => array('type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId', 'copy_post' => false),
            'id_warehouse' => array('type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId', 'copy_post' => false),
            'id_country' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_state' => array('type' => self::TYPE_INT, 'validate' => 'isNullOrUnsignedId'),
            'alias' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true, 'size' => 32),
            'company' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => 64),
            'lastname' => array('type' => self::TYPE_STRING, 'validate' => 'isName', 'required' => true, 'size' => 32),
            'firstname' => array('type' => self::TYPE_STRING, 'validate' => 'isName', 'required' => true, 'size' => 32),
            'vat_number' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName'),
            'address1' => array('type' => self::TYPE_STRING, 'validate' => 'isAddress', 'required' => true, 'size' => 128),
            'address2' => array('type' => self::TYPE_STRING, 'validate' => 'isAddress', 'size' => 128),
            'postcode' => array('type' => self::TYPE_STRING, 'validate' => 'isPostCode', 'size' => 12),
            'city' => array('type' => self::TYPE_STRING, 'validate' => 'isCityName', 'required' => true, 'size' => 64),
            'other' => array('type' => self::TYPE_STRING, 'validate' => 'isMessage', 'size' => 300),
            'phone' => array('type' => self::TYPE_STRING, 'validate' => 'isPhoneNumber', 'size' => 32),
            'phone_mobile' => array('type' => self::TYPE_STRING, 'validate' => 'isPhoneNumber', 'size' => 32),
            'dni' => array('type' => self::TYPE_STRING, 'validate' => 'isDniLite', 'size' => 16),
            'deleted' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'copy_post' => false),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDateFormat', 'copy_post' => false),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDateFormat', 'copy_post' => false),
        ),
    );
    protected static $_idZones = array();
    protected static $_idCountries = array();
    /** @var integer Customer id which address belongs to */
    public $id_customer = null;
    /** @var integer Manufacturer id which address belongs to */
    public $id_manufacturer = null;
    /** @var integer Supplier id which address belongs to */
    public $id_supplier = null;
    /**
     * @since 1.5.0
     * @var int Warehouse id which address belongs to
     */
    public $id_warehouse = null;
    /** @var integer Country id */
    public $id_country;
    /** @var integer State id */
    public $id_state;
    /** @var string Country name */
    public $country;
    /** @var string Alias (eg. Home, Work...) */
    public $alias;
    /** @var string Company (optional) */
    public $company;
    /** @var string Lastname */
    public $lastname;
    /** @var string Firstname */
    public $firstname;
    /** @var string Address first line */
    public $address1;
    /** @var string Address second line (optional) */
    public $address2;
    /** @var string Postal code */
    public $postcode;
    /** @var string City */
    public $city;
    /** @var string Any other useful information */
    public $other;
    /** @var string Phone number */
    public $phone;
    /** @var string Mobile phone number */
    public $phone_mobile;
    /** @var string VAT number */
    public $vat_number;
    /** @var string DNI number */
    public $dni;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    /** @var boolean True if address has been deleted (staying in database as deleted) */
    public $deleted = 0;
    protected $_includeVars = array('addressType' => 'table');
    protected $_includeContainer = false;
    protected $webserviceParameters = array(
        'objectsNodeName' => 'addresses',
        'fields' => array(
            'id_customer' => array('xlink_resource' => 'customers'),
            'id_manufacturer' => array('xlink_resource' => 'manufacturers'),
            'id_supplier' => array('xlink_resource' => 'suppliers'),
            'id_warehouse' => array('xlink_resource' => 'warehouse'),
            'id_country' => array('xlink_resource' => 'countries'),
            'id_state' => array('xlink_resource' => 'states'),
        ),
    );

    /**
     * Build an address
     *
     * @param integer $id_address Existing address id in order to load object (optional)
     */
    public function __construct($id_address = null, $id_lang = null)
    {
    }

    /**
     * Returns fields required for an address in an array hash
     *
     * @return array hash values
     */
    public static function getFieldsValidate()
    {
    }

    /**
     * Get zone id for a given address
     *
     * @param integer $id_address Address id for which we want to get zone id
     * @return integer Zone id
     */
    public static function getZoneById($id_address)
    {
    }

    /**
     * Check if country is active for a given address
     *
     * @param integer $id_address Address id for which we want to get country status
     * @return integer Country status
     */
    public static function isCountryActiveById($id_address)
    {
    }

    public static function getCountryAndState($id_address)
    {
    }

    /**
     * Specify if an address is already in base
     *
     * @param $id_address Address id
     * @return boolean
     */
    public static function addressExists($id_address)
    {
    }

    public static function getFirstCustomerAddressId($id_customer, $active = true)
    {
    }

    /**
     * Initiliaze an address corresponding to the specified id address or if empty to the
     * default shop configuration
     *
     * @param int $id_address
     * @return Address address
     */
    public static function initialize($id_address = null)
    {
    }

    /**
     * Returns id_address for a given id_supplier
     *
     * @since 1.5.0
     * @param int $id_supplier
     * @return int $id_address
     */
    public static function getAddressIdBySupplierId($id_supplier)
    {
    }

    /**
     * @see ObjectModel::add()
     */
    public function add($autodate = true, $null_values = false)
    {
    }

    /**
     * @see ObjectModel::delete()
     */
    public function delete()
    {
    }

    /**
     * Check if address is used (at least one order placed)
     *
     * @return integer Order count for this address
     */
    public function isUsed()
    {
    }

    public function update($null_values = false)
    {
    }

    /**
     * @see ObjectModel::validateController()
     */
    public function validateController($htmlentities = true)
    {
    }
}

