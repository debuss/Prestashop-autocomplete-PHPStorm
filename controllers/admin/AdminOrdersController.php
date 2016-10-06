<?php

/*
* 2007-2015 PrestaShop
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
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class BoOrder extends PaymentModule
{

    public $active = 1;
    public $name = 'bo_order';

    public function __construct()
    {
    }
}

/**
 * @property Order $object
 */
class AdminOrdersController extends AdminController
{

    public $toolbar_title;
    protected $statuses_array = array();

    public function __construct()
    {
    }

    public static function setOrderCurrency($echo, $tr)
    {
    }

    public function initPageHeaderToolbar()
    {
    }

    public function renderForm()
    {
    }

    public function initToolbar()
    {
    }

    public function setMedia()
    {
    }

    public function printPDFIcons($id_order, $tr)
    {
    }

    public function printNewCustomer($id_order, $tr)
    {
    }

    public function processBulkUpdateOrderStatus()
    {
    }

    public function renderList()
    {
    }

    public function postProcess()
    {
    }

    public function renderKpis()
    {
    }

    public function renderView()
    {
    }

    public function ajaxProcessSearchProducts()
    {
    }

    public function ajaxProcessSendMailValidateOrder()
    {
    }

    public function ajaxProcessAddProductOnOrder()
    {
    }

    public function sendChangedNotification(Order $order = null)
    {
    }

    public function ajaxProcessLoadProductInformation()
    {
    }

    public function ajaxProcessEditProductOnOrder()
    {
    }

    public function ajaxProcessDeleteProductLine()
    {
    }

    public function ajaxProcessChangePaymentMethod()
    {
    }

    /**
     * @param OrderDetail $order_detail
     * @param int $qty_cancel_product
     * @param bool $delete
     */
    protected function reinjectQuantity($order_detail, $qty_cancel_product, $delete = false)
    {
    }

    /**
     * @param OrderInvoice $order_invoice
     * @param float $value_tax_incl
     * @param float $value_tax_excl
     */
    protected function applyDiscountOnInvoice($order_invoice, $value_tax_incl, $value_tax_excl)
    {
    }

    /**
     * @param Order $order
     * @return array
     */
    protected function getProducts($order)
    {
    }

    protected function doEditProductValidation(OrderDetail $order_detail, Order $order, OrderInvoice $order_invoice = null)
    {
    }

    protected function doDeleteProductLineValidation(OrderDetail $order_detail, Order $order)
    {
    }
}
