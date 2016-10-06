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

class Guest extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'guest',
        'primary' => 'id_guest',
        'fields' => array(
            'id_operating_system' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_web_browser' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'javascript' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'screen_resolution_x' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),
            'screen_resolution_y' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),
            'screen_color' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),
            'sun_java' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'adobe_flash' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'adobe_director' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'apple_quicktime' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'real_player' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'windows_media' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'accept_language' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => 8),
            'mobile_theme' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
        ),
    );
    public $id_operating_system;
    public $id_web_browser;
    public $id_customer;
    public $javascript;
    public $screen_resolution_x;
    public $screen_resolution_y;
    public $screen_color;
    public $sun_java;
    public $adobe_flash;
    public $adobe_director;
    public $apple_quicktime;
    public $real_player;
    public $windows_media;
    public $accept_language;
    public $mobile_theme;
    protected $webserviceParameters = array(
        'fields' => array(
            'id_customer' => array('xlink_resource' => 'customers'),
        ),
    );

    public static function setNewGuest($cookie)
    {
    }

    public static function getFromCustomer($id_customer)
    {
    }

    public function userAgent()
    {
    }

    public function mergeWithCustomer($id_guest, $id_customer)
    {
    }

    protected function getOs($userAgent)
    {
    }

    protected function getBrowser($userAgent)
    {
    }

    protected function getLanguage($acceptLanguage)
    {
    }
}
