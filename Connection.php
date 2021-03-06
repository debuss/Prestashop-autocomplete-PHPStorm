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

class Connection extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'connections',
        'primary' => 'id_connections',
        'fields' => array(
            'id_guest' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_page' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'ip_address' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),
            'http_referer' => array('type' => self::TYPE_STRING, 'validate' => 'isAbsoluteUrl'),
            'id_shop' => array('type' => self::TYPE_INT, 'required' => true),
            'id_shop_group' => array('type' => self::TYPE_INT, 'required' => true),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate')
        ),
    );
    /** @var integer */
    public $id_guest;
    /** @var integer */
    public $id_page;
    /** @var string */
    public $ip_address;
    /** @var string */
    public $http_referer;
    /** @var int */
    public $id_shop;
    /** @var int */
    public $id_shop_group;
    /** @var string */
    public $date_add;

    public static function setPageConnection($cookie, $full = true)
    {
    }

    public static function setNewConnection($cookie)
    {
    }

    public static function cleanConnectionsPages()
    {
    }

    public static function setPageTime($id_connections, $id_page, $time_start, $time)
    {
    }

    /**
     * @see ObjectModel::getFields()
     * @return array
     */
    public function getFields()
    {
    }
}


