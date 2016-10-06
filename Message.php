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

class Message extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'message',
        'primary' => 'id_message',
        'fields' => array(
            'message' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'required' => true, 'size' => 1600),
            'id_cart' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_order' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_employee' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'private' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
        ),
    );
    public $id;
    /** @var string message content */
    public $message;
    /** @var integer Cart ID (if applicable) */
    public $id_cart;
    /** @var integer Order ID (if applicable) */
    public $id_order;
    /** @var integer Customer ID (if applicable) */
    public $id_customer;
    /** @var integer Employee ID (if applicable) */
    public $id_employee;
    /** @var boolean Message is not displayed to the customer */
    public $private;
    /** @var string Object creation date */
    public $date_add;

    /**
     * Return the last message from cart
     *
     * @param integer $id_cart Cart ID
     * @return array Message
     */
    public static function getMessageByCartId($id_cart)
    {
    }

    /**
     * Return messages from Order ID
     *
     * @param integer $id_order Order ID
     * @param boolean $private return WITH private messages
     * @return array Messages
     */
    public static function getMessagesByOrderId($id_order, $private = false, Context $context = null)
    {
    }

    /**
     * Return messages from Cart ID
     *
     * @param integer $id_order Order ID
     * @param boolean $private return WITH private messages
     * @return array Messages
     */
    public static function getMessagesByCartId($id_cart, $private = false, Context $context = null)
    {
    }

    /**
     * Registered a message 'readed'
     *
     * @param integer $id_message Message ID
     * @param integer $id_emplyee Employee ID
     */
    public static function markAsReaded($id_message, $id_employee)
    {
    }
}


