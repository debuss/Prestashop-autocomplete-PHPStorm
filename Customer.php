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

class Customer extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'customer',
        'primary' => 'id_customer',
        'fields' => array(
            'secure_key' => array('type' => self::TYPE_STRING, 'validate' => 'isMd5', 'copy_post' => false),
            'lastname' => array('type' => self::TYPE_STRING, 'validate' => 'isName', 'required' => true, 'size' => 32),
            'firstname' => array('type' => self::TYPE_STRING, 'validate' => 'isName', 'required' => true, 'size' => 32),
            'email' => array('type' => self::TYPE_STRING, 'validate' => 'isEmail', 'required' => true, 'size' => 128),
            'passwd' => array('type' => self::TYPE_STRING, 'validate' => 'isPasswd', 'required' => true, 'size' => 32),
            'last_passwd_gen' => array('type' => self::TYPE_STRING, 'copy_post' => false),
            'id_gender' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'birthday' => array('type' => self::TYPE_DATE, 'validate' => 'isBirthDate'),
            'newsletter' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'newsletter_date_add' => array('type' => self::TYPE_DATE, 'copy_post' => false),
            'ip_registration_newsletter' => array('type' => self::TYPE_STRING, 'copy_post' => false),
            'optin' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'website' => array('type' => self::TYPE_STRING, 'validate' => 'isUrl'),
            'company' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName'),
            'siret' => array('type' => self::TYPE_STRING, 'validate' => 'isSiret'),
            'ape' => array('type' => self::TYPE_STRING, 'validate' => 'isApe'),
            'outstanding_allow_amount' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'copy_post' => false),
            'show_public_prices' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'copy_post' => false),
            'id_risk' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'copy_post' => false),
            'max_payment_days' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'copy_post' => false),
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'copy_post' => false),
            'deleted' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'copy_post' => false),
            'note' => array('type' => self::TYPE_HTML, 'validate' => 'isCleanHtml', 'size' => 65000, 'copy_post' => false),
            'is_guest' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'copy_post' => false),
            'id_shop' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'copy_post' => false),
            'id_shop_group' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'copy_post' => false),
            'id_default_group' => array('type' => self::TYPE_INT, 'copy_post' => false),
            'id_lang' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'copy_post' => false),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate', 'copy_post' => false),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate', 'copy_post' => false),
        ),
    );
    protected static $_defaultGroupId = array();
    protected static $_customerHasAddress = array();
    protected static $_customer_groups = array();
    public $id;
    public $id_shop;
    public $id_shop_group;
    /** @var string Secure key */
    public $secure_key;
    /** @var string protected note */
    public $note;
    /** @var integer Gender ID */
    public $id_gender = 0;
    /** @var integer Default group ID */
    public $id_default_group;
    /** @var integer Current language used by the customer */
    public $id_lang;
    /** @var string Lastname */
    public $lastname;
    /** @var string Firstname */
    public $firstname;
    /** @var string Birthday (yyyy-mm-dd) */
    public $birthday = null;
    /** @var string e-mail */
    public $email;
    /** @var boolean Newsletter subscription */
    public $newsletter;
    /** @var string Newsletter ip registration */
    public $ip_registration_newsletter;
    /** @var string Newsletter ip registration */
    public $newsletter_date_add;
    /** @var boolean Opt-in subscription */
    public $optin;
    /** @var string WebSite * */
    public $website;
    /** @var string Company */
    public $company;
    /** @var string SIRET */
    public $siret;
    /** @var string APE */
    public $ape;
    /** @var float Outstanding allow amount (B2B opt) */
    public $outstanding_allow_amount = 0;
    /** @var integer Show public prices (B2B opt) */
    public $show_public_prices = 0;
    /** @var int Risk ID (B2B opt) */
    public $id_risk;
    /** @var integer Max payment day */
    public $max_payment_days = 0;
    /** @var integer Password */
    public $passwd;
    /** @var datetime Password */
    public $last_passwd_gen;
    /** @var boolean Status */
    public $active = true;
    /** @var boolean Status */
    public $is_guest = 0;
    /** @var boolean True if carrier has been deleted (staying in database as deleted) */
    public $deleted = 0;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    public $years;
    public $days;
    public $months;
    /** @var int customer id_country as determined by geolocation */
    public $geoloc_id_country;
    /** @var int customer id_state as determined by geolocation */
    public $geoloc_id_state;
    /** @var string customer postcode as determined by geolocation */
    public $geoloc_postcode;
    /** @var boolean is the customer logged in */
    public $logged = 0;
    /** @var int id_guest meaning the guest table, not the guest customer */
    public $id_guest;
    public $groupBox;
    protected $webserviceParameters = array(
        'fields' => array(
            'id_default_group' => array('xlink_resource' => 'groups'),
            'id_lang' => array('xlink_resource' => 'languages'),
            'newsletter_date_add' => array(),
            'ip_registration_newsletter' => array(),
            'last_passwd_gen' => array('setter' => null),
            'secure_key' => array('setter' => null),
            'deleted' => array(),
            'passwd' => array('setter' => 'setWsPasswd'),
        ),
        'associations' => array(
            'groups' => array('resource' => 'group'),
        )
    );

    public function __construct($id = null)
    {
    }

    /**
     * Return customers list
     *
     * @return array Customers
     */
    public static function getCustomers()
    {
    }

    /**
     * Retrieve customers by email address
     *
     * @static
     * @param $email
     * @return array
     */
    public static function getCustomersByEmail($email)
    {
    }

    /**
     * Check id the customer is active or not
     *
     * @return boolean customer validity
     */
    public static function isBanned($id_customer)
    {
    }

    /**
     * Check if e-mail is already registered in database
     *
     * @param string $email e-mail
     * @param $return_id boolean
     * @param $ignore_guest boolean, to exclude guest customer
     * @return Customer ID if found, false otherwise
     */
    public static function customerExists($email, $return_id = false, $ignore_guest = true)
    {
    }

    /**
     * Check if an address is owned by a customer
     *
     * @param integer $id_customer Customer ID
     * @param integer $id_address Address ID
     * @return boolean result
     */
    public static function customerHasAddress($id_customer, $id_address)
    {
    }

    public static function resetAddressCache($id_customer)
    {
    }

    /**
     * Count the number of addresses for a customer
     *
     * @param integer $id_customer Customer ID
     * @return integer Number of addresses
     */
    public static function getAddressesTotalById($id_customer)
    {
    }

    /**
     * Light back office search for customers
     *
     * @param string $query Searched string
     * @return array Corresponding customers
     */
    public static function searchByName($query)
    {
    }

    /**
     * Search for customers by ip address
     *
     * @param string $ip Searched string
     */
    public static function searchByIp($ip)
    {
    }

    public static function getDefaultGroupId($id_customer)
    {
    }

    public static function getCurrentCountry($id_customer, Cart $cart = null)
    {
    }

    public static function customerIdExistsStatic($id_customer)
    {
    }

    public static function getGroupsStatic($id_customer)
    {
    }

    /**
     * Check if customer password is the right one
     *
     * @param string $passwd Password
     * @return boolean result
     */
    public static function checkPassword($id_customer, $passwd)
    {
    }

    public function add($autodate = true, $null_values = true)
    {
    }

    /**
     * Update customer groups associated to the object
     *
     * @param array $list groups
     */
    public function updateGroup($list)
    {
    }

    public function cleanGroups()
    {
    }

    /*
    * Specify if a customer already in base
    *
    * @param $id_customer Customer id
    * @return boolean
    */
    // DEPRECATED

    public function addGroups($groups)
    {
    }

    public function delete()
    {
    }

    /**
     * Return customer addresses
     *
     * @param integer $id_lang Language ID
     * @return array Addresses
     */
    public function getAddresses($id_lang)
    {
    }

    /**
     * Return customer instance from its e-mail (optionnaly check password)
     *
     * @param string $email e-mail
     * @param string $passwd Password is also checked if specified
     * @return Customer instance
     */
    public function getByEmail($email, $passwd = null, $ignore_guest = true)
    {
    }

    /**
     * Return several useful statistics about customer
     *
     * @return array Stats
     */
    public function getStats()
    {
    }

    public function getLastConnections()
    {
    }

    public function customerIdExists($id_customer)
    {
    }

    public function getGroups()
    {
    }

    /**
     * @deprecated since 1.5
     */
    public function isUsed()
    {
    }

    public function getBoughtProducts()
    {
    }

    public function toggleStatus()
    {
    }

    public function transformToCustomer($id_lang, $password = null)
    {
    }

    public function isGuest()
    {
    }

    public function update($nullValues = false)
    {
    }

    public function setWsPasswd($passwd)
    {
    }

    /**
     * Check customer informations and return customer validity
     *
     * @since 1.5.0
     * @param boolean $with_guest
     * @return boolean customer validity
     */
    public function isLogged($with_guest = false)
    {
    }

    /**
     * Logout
     *
     * @since 1.5.0
     */
    public function logout()
    {
    }

    /**
     * Soft logout, delete everything links to the customer
     * but leave there affiliate's informations
     *
     * @since 1.5.0
     */
    public function mylogout()
    {
    }

    public function getLastCart($with_order = true)
    {
    }

    public function getOutstanding()
    {
    }

    public function getWsGroups()
    {
    }

    public function setWsGroups($result)
    {
    }

    /**
     * @see ObjectModel::getWebserviceObjectList()
     */
    public function getWebserviceObjectList($sql_join, $sql_filter, $sql_sort, $sql_limit)
    {
    }
}
