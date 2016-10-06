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

class CustomerThread extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'customer_thread',
        'primary' => 'id_customer_thread',
        'fields' => array(
            'id_lang' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_contact' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_shop' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_order' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_product' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'email' => array('type' => self::TYPE_STRING, 'validate' => 'isEmail', 'size' => 254),
            'token' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true),
            'status' => array('type' => self::TYPE_STRING),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
        ),
    );
    public $id;
    public $id_shop;
    public $id_lang;
    public $id_contact;
    public $id_customer;
    public $id_order;
    public $id_product;
    public $status;
    public $email;
    public $token;
    public $date_add;
    public $date_upd;
    protected $webserviceParameters = array(
        'fields' => array(
            'id_lang' => array(
                'xlink_resource' => 'languages'
            ),
            'id_shop' => array(
                'xlink_resource' => 'shops'
            ),
            'id_customer' => array(
                'xlink_resource' => 'customers'
            ),
            'id_order' => array(
                'xlink_resource' => 'orders'
            ),
            'id_product' => array(
                'xlink_resource' => 'products'
            ),
        ),
        'associations' => array(
            'customer_messages' => array(
                'resource' => 'customer_message',
                'id' => array('required' => true)),
        )
    );

    public static function getCustomerMessages($id_customer, $read = null)
    {
    }

    public static function getIdCustomerThreadByEmailAndIdOrder($email, $id_order)
    {
    }

    public static function getContacts()
    {
    }

    public static function getTotalCustomerThreads($where = null)
    {
    }

    public static function getMessageCustomerThreads($id_customer_thread)
    {
    }

    public static function getNextThread($id_customer_thread)
    {
    }

    public function getWsCustomerMessages()
    {
    }

    public function delete()
    {
    }
}

