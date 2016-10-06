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

class OrderSlip extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'order_slip',
        'primary' => 'id_order_slip',
        'fields' => array(
            'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_order' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'conversion_rate' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true),
            'amount' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat'),
            'shipping_cost' => array('type' => self::TYPE_INT),
            'shipping_cost_amount' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat'),
            'partial' => array('type' => self::TYPE_INT),
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
    /** @var float */
    public $conversion_rate;
    /** @var integer */
    public $amount;
    /** @var integer */
    public $shipping_cost;
    /** @var integer */
    public $shipping_cost_amount;
    /** @var integer */
    public $partial;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;

    public static function getOrdersSlip($customer_id, $order_id = false)
    {
    }

    public static function getOrdersSlipProducts($orderSlipId, $order)
    {
    }

    public static function getOrdersSlipDetail($id_order_slip = false, $id_order_detail = false)
    {
    }

    /**
     * Get refund details for one product line
     *
     * @param $id_order_detail
     */
    public static function getProductSlipDetail($id_order_detail)
    {
    }

    public static function getSlipsIdByDate($dateFrom, $dateTo)
    {
    }

    public static function createOrderSlip($order, $productList, $qtyList, $shipping_cost = false)
    {
    }

    public static function createPartialOrderSlip($order, $amount, $shipping_cost_amount, $order_detail_list)
    {
    }

    /**
     * Get resume of all refund for one product line
     *
     * @param $id_order_detail
     */
    public static function getProductSlipResume($id_order_detail)
    {
    }

    public function addSlipDetail($orderDetailList, $productQtyList)
    {
    }

    public function addPartialSlipDetail($order_detail_list)
    {
    }

    public function getProducts()
    {
    }

    public function getEcoTaxTaxesBreakdown()
    {
    }
}

