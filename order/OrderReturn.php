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

class OrderReturn extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'order_return',
        'primary' => 'id_order_return',
        'fields' => array(
            'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_order' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'question' => array('type' => self::TYPE_HTML, 'validate' => 'isCleanHtml'),
            'state' => array('type' => self::TYPE_STRING),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
        ),
    );
    /** @var integer */
    public $id;
    /** @var integer */
    public $id_customer;
    /** @var integer */
    public $id_order;
    /** @var integer */
    public $state;
    /** @var string message content */
    public $question;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;

    public static function getReturnedCustomizedProducts($id_order)
    {
    }

    public static function deleteOrderReturnDetail($id_order_return, $id_order_detail, $id_customization = 0)
    {
    }

    /**
     * Get return details for one product line
     *
     * @param $id_order_detail
     */
    public static function getProductReturnDetail($id_order_detail)
    {
    }

    /**
     * Add returned quantity to products list
     *
     * @param array $products
     * @param int $id_order
     */
    public static function addReturnedQuantity(&$products, $id_order)
    {
    }

    public static function getOrdersReturn($customer_id, $order_id = false, $no_denied = false, Context $context = null)
    {
    }

    public static function getOrdersReturnProducts($orderReturnId, $order)
    {
    }

    public static function getOrdersReturnDetail($id_order_return)
    {
    }

    public function addReturnDetail($orderDetailList, $productQtyList, $customizationIds, $customizationQtyInput)
    {
    }

    public function checkEnoughProduct($orderDetailList, $productQtyList, $customizationIds, $customizationQtyInput)
    {
    }

    public function countProduct()
    {
    }
}

