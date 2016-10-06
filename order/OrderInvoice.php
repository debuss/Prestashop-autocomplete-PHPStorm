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

class OrderInvoice extends ObjectModel
{

    const TAX_EXCL = 0;
    const TAX_INCL = 1;
    const DETAIL = 2;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'order_invoice',
        'primary' => 'id_order_invoice',
        'fields' => array(
            'id_order' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'number' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'delivery_number' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'delivery_date' => array('type' => self::TYPE_DATE, 'validate' => 'isDateFormat'),
            'total_discount_tax_excl' => array('type' => self::TYPE_FLOAT),
            'total_discount_tax_incl' => array('type' => self::TYPE_FLOAT),
            'total_paid_tax_excl' => array('type' => self::TYPE_FLOAT),
            'total_paid_tax_incl' => array('type' => self::TYPE_FLOAT),
            'total_products' => array('type' => self::TYPE_FLOAT),
            'total_products_wt' => array('type' => self::TYPE_FLOAT),
            'total_shipping_tax_excl' => array('type' => self::TYPE_FLOAT),
            'total_shipping_tax_incl' => array('type' => self::TYPE_FLOAT),
            'shipping_tax_computation_method' => array('type' => self::TYPE_INT),
            'total_wrapping_tax_excl' => array('type' => self::TYPE_FLOAT),
            'total_wrapping_tax_incl' => array('type' => self::TYPE_FLOAT),
            'note' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 65000),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
        ),
    );
    /** @var array Total paid cache */
    protected static $_total_paid_cache = array();
    /** @var integer */
    public $id_order;
    /** @var integer */
    public $number;
    /** @var integer */
    public $delivery_number;
    /** @var integer */
    public $delivery_date = '0000-00-00 00:00:00';
    /** @var float */
    public $total_discount_tax_excl;
    /** @var float */
    public $total_discount_tax_incl;
    /** @var float */
    public $total_paid_tax_excl;
    /** @var float */
    public $total_paid_tax_incl;
    /** @var float */
    public $total_products;
    /** @var float */
    public $total_products_wt;
    /** @var float */
    public $total_shipping_tax_excl;
    /** @var float */
    public $total_shipping_tax_incl;
    /** @var int */
    public $shipping_tax_computation_method;
    /** @var float */
    public $total_wrapping_tax_excl;
    /** @var float */
    public $total_wrapping_tax_incl;
    /** @var string note */
    public $note;
    /** @var intger */
    public $date_add;

    /**
     * Returns all the order invoice that match the date interval
     *
     * @since 1.5
     * @static
     * @param $date_from
     * @param $date_to
     * @return array collection of OrderInvoice
     */
    public static function getByDateInterval($date_from, $date_to)
    {
    }

    /**
     * @since 1.5.0.3
     * @static
     * @param $id_order_state
     * @return array collection of OrderInvoice
     */
    public static function getByStatus($id_order_state)
    {
    }

    /**
     * @since 1.5.0.3
     * @static
     * @param $date_from
     * @param $date_to
     * @return array collection of invoice
     */
    public static function getByDeliveryDateInterval($date_from, $date_to)
    {
    }

    /**
     * @since 1.5
     * @static
     * @param $id_order_invoice
     */
    public static function getCarrier($id_order_invoice)
    {
    }

    /**
     * @since 1.5
     * @static
     * @param $id_order_invoice
     */
    public static function getCarrierId($id_order_invoice)
    {
    }

    /**
     * @static
     * @param $id
     * @return OrderInvoice
     */
    public static function retrieveOneById($id)
    {
    }

    /**
     * Get order products
     *
     * @return array Products with price, quantity (with taxe and without)
     */
    public function getProducts($products = false, $selectedProducts = false, $selectedQty = false)
    {
    }

    public function getProductsDetail()
    {
    }

    /**
     * Returns the correct product taxes breakdown.
     *
     * @since 1.5
     * @return array
     */
    public function getProductTaxesBreakdown()
    {
    }

    /**
     * This method returns true if at least one order details uses the
     * One After Another tax computation method.
     *
     * @since 1.5
     * @return boolean
     */
    public function useOneAfterAnotherTaxComputationMethod()
    {
    }

    /**
     * Returns the shipping taxes breakdown
     *
     * @since 1.5
     * @return array
     */
    public function getShippingTaxesBreakdown($order)
    {
    }

    /**
     * Returns the wrapping taxes breakdown
     *
     * @todo
     * @since 1.5
     * @return array
     */
    public function getWrappingTaxesBreakdown()
    {
    }

    /**
     * Returns the ecotax taxes breakdown
     *
     * @since 1.5
     * @return array
     */
    public function getEcoTaxTaxesBreakdown()
    {
    }

    /**
     * Rest Paid
     *
     * @since 1.5.0.2
     * @return float Rest Paid
     */
    public function getRestPaid()
    {
    }

    /**
     * Return total to paid of sibling invoices
     *
     * @param int $mod TAX_EXCL, TAX_INCL, DETAIL
     * @since 1.5.0.14
     */
    public function getSiblingTotal($mod = OrderInvoice::TAX_INCL)
    {
    }

    /**
     * Amounts of payments
     *
     * @since 1.5.0.2
     * @return float Total paid
     */
    public function getTotalPaid()
    {
    }

    /**
     * Return collection of order invoice object linked to the payments of the current order invoice object
     *
     * @since 1.5.0.14
     */
    public function getSibling()
    {
    }

    /**
     * Get global rest to paid
     *    This method will return something different of the method getRestPaid if
     *    there is an other invoice linked to the payments of the current invoice
     *
     * @since 1.5.0.13
     */
    public function getGlobalRestPaid()
    {
    }

    /**
     * @since 1.5.0.2
     * @return bool Is paid ?
     */
    public function isPaid()
    {
    }

    /**
     * @since 1.5.0.2
     * @return Collection of Order payment
     */
    public function getOrderPaymentCollection()
    {
    }

    /**
     * Get the formatted number of invoice
     *
     * @since 1.5.0.2
     * @param int $id_lang for invoice_prefix
     * @return string
     */
    public function getInvoiceNumberFormatted($id_lang, $id_shop = null)
    {
    }

    public function saveCarrierTaxCalculator(array $taxes_amount)
    {
    }

    /**
     * This method allow to add image information on a product detail
     *
     * @param array &$product
     */
    protected function setProductImageInformations(&$product)
    {
    }

    /**
     * This method allow to add stock information on a product detail
     *
     * @param array &$product
     */
    protected function setProductCurrentStock(&$product)
    {
    }

    protected function setProductCustomizedDatas(&$product, $customized_datas)
    {
    }
}
