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

class CustomerMessage extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'customer_message',
        'primary' => 'id_customer_message',
        'fields' => array(
            'id_employee' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_customer_thread' => array('type' => self::TYPE_INT),
            'ip_address' => array('type' => self::TYPE_INT, 'validate' => 'isIp2Long'),
            'message' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'required' => true, 'size' => 65000),
            'file_name' => array('type' => self::TYPE_STRING),
            'user_agent' => array('type' => self::TYPE_STRING),
            'private' => array('type' => self::TYPE_INT),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'read' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool')
        ),
    );
    public $id;
    public $id_customer_thread;
    public $id_employee;
    public $message;
    public $file_name;
    public $ip_address;
    public $user_agent;
    public $private;
    public $date_add;
    public $read;
    protected $webserviceParameters = array(
        'fields' => array(
            'id_employee' => array(
                'xlink_resource' => 'employees'
            ),
            'id_customer_thread' => array(
                'xlink_resource' => 'customer_threads'
            ),
        ),
    );

    public static function getMessagesByOrderId($id_order, $private = true)
    {
    }

    public static function getTotalCustomerMessages($where = null)
    {
    }
}

