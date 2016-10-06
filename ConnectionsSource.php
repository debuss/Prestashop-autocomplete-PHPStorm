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

class ConnectionsSource extends ObjectModel
{

    public static $uri_max_size = 255;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'connections_source',
        'primary' => 'id_connections_source',
        'fields' => array(
            'id_connections' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'http_referer' => array('type' => self::TYPE_STRING, 'validate' => 'isAbsoluteUrl'),
            'request_uri' => array('type' => self::TYPE_STRING, 'validate' => 'isUrl'),
            'keywords' => array('type' => self::TYPE_STRING, 'validate' => 'isMessage'),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate', 'required' => true),
        ),
    );
    public $id_connections;
    public $http_referer;
    public $request_uri;
    public $keywords;
    public $date_add;

    public static function logHttpReferer(Cookie $cookie = null)
    {
    }

    public static function getOrderSources($id_order)
    {
    }

    public function add($autodate = true, $nullValues = false)
    {
    }
}
