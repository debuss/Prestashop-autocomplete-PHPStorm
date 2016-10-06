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

class Employee extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'employee',
        'primary' => 'id_employee',
        'fields' => array(
            'lastname' => array('type' => self::TYPE_STRING, 'validate' => 'isName', 'required' => true, 'size' => 32),
            'firstname' => array('type' => self::TYPE_STRING, 'validate' => 'isName', 'required' => true, 'size' => 32),
            'email' => array('type' => self::TYPE_STRING, 'validate' => 'isEmail', 'required' => true, 'size' => 128),
            'id_lang' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'passwd' => array('type' => self::TYPE_STRING, 'validate' => 'isPasswdAdmin', 'required' => true, 'size' => 32),
            'last_passwd_gen' => array('type' => self::TYPE_STRING),
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'id_profile' => array('type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => true),
            'bo_color' => array('type' => self::TYPE_STRING, 'validate' => 'isColor', 'size' => 32),
            'default_tab' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),
            'bo_theme' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => 32),
            'bo_width' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'bo_show_screencast' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'stats_date_from' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'stats_date_to' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
        ),
    );
    public $id;
    /** @var string Determine employee profile */
    public $id_profile;
    /** @var string employee language */
    public $id_lang;
    /** @var string Lastname */
    public $lastname;
    /** @var string Firstname */
    public $firstname;
    /** @var string e-mail */
    public $email;
    /** @var string Password */
    public $passwd;
    /** @var datetime Password */
    public $last_passwd_gen;
    public $stats_date_from;
    public $stats_date_to;
    /** @var string Display back office background in the specified color */
    public $bo_color;
    public $default_tab;
    /** @var string employee's chosen theme */
    public $bo_theme;
    /** @var integer employee desired screen width */
    public $bo_width;
    /** @var bool, true */
    public $bo_show_screencast;
    /** @var boolean Status */
    public $active = 1;
    public $remote_addr;
    protected $webserviceParameters = array(
        'fields' => array(
            'id_lang' => array('xlink_resource' => 'languages'),
            'last_passwd_gen' => array('setter' => null),
            'stats_date_from' => array('setter' => null),
            'stats_date_to' => array('setter' => null),
            'passwd' => array('setter' => 'setWsPasswd'),
        ),
    );
    protected $associated_shops = array();

    public function __construct($id = null, $id_lang = null, $id_shop = null)
    {
    }

    /**
     * Return list of employees
     */
    public static function getEmployees()
    {
    }

    public static function employeeExists($email)
    {
    }

    public static function getEmployeesByProfile($id_profile, $active_only = false)
    {
    }

    public static function countProfile($id_profile, $active_only = false)
    {
    }

    /**
     * Check if employee password is the right one
     *
     * @param string $passwd Password
     * @return boolean result
     */
    public static function checkPassword($id_employee, $passwd)
    {
    }

    /**
     * @see ObjectModel::getFields()
     * @return array
     */
    public function getFields()
    {
    }

    public function add($autodate = true, $null_values = true)
    {
    }

    /**
     * Return employee instance from its e-mail (optionnaly check password)
     *
     * @param string $email e-mail
     * @param string $passwd Password is also checked if specified
     * @return Employee instance
     */
    public function getByEmail($email, $passwd = null)
    {
    }

    public function isLastAdmin()
    {
    }

    /**
     * Check if current employee is super administrator
     *
     * @return bool
     */
    public function isSuperAdmin()
    {
    }

    public function setWsPasswd($passwd)
    {
    }

    /**
     * Check employee informations saved into cookie and return employee validity
     *
     * @return boolean employee validity
     */
    public function isLoggedBack()
    {
    }

    /**
     * Logout
     */
    public function logout()
    {
    }

    /**
     * Check if the employee is associated to a specific shop
     *
     * @since 1.5.0
     * @param int $id_shop
     * @return bool
     */
    public function hasAuthOnShop($id_shop)
    {
    }

    /**
     * Check if the employee is associated to a specific shop group
     *
     * @since 1.5.0
     * @param int $id_shop_shop
     * @return bool
     */
    public function hasAuthOnShopGroup($id_shop_group)
    {
    }

    /**
     * Get default id_shop with auth for current employee
     *
     * @since 1.5.0
     * @return int
     */
    public function getDefaultShopID()
    {
    }
}
