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

abstract class PaymentModule extends Module
{

    /** @var integer Current order's id */
    public $currentOrder;
    public $currencies = true;
    public $currencies_mode = 'checkbox';

    /**
     * Allows specified payment modules to be used by a specific currency
     *
     * @since 1.4.5
     * @param int $id_currency
     * @param array $id_module_list
     * @return boolean
     */
    public static function addCurrencyPermissions($id_currency, array $id_module_list = array())
    {
    }

    /**
     * List all installed and active payment modules
     *
     * @see Module::getPaymentModules() if you need a list of module related to the user context
     * @since 1.4.5
     * @return array module informations
     */
    public static function getInstalledPaymentModules()
    {
    }

    public static function preCall($module_name)
    {
    }

    public function install()
    {
    }

    /**
     * Add checkbox currency restrictions for a new module
     *
     * @param integer id_module
     * @param array $shops
     */
    public function addCheckboxCurrencyRestrictionsForModule(array $shops = array())
    {
    }

    /**
     * Add radio currency restrictions for a new module
     *
     * @param integer id_module
     * @param array $shops
     */
    public function addRadioCurrencyRestrictionsForModule(array $shops = array())
    {
    }

    /**
     * Add checkbox country restrictions for a new module
     *
     * @param integer id_module
     * @param array $shops
     */
    public function addCheckboxCountryRestrictionsForModule(array $shops = array())
    {
    }

    public function uninstall()
    {
    }

    /**
     * Validate an order in database
     * Function called from a payment module
     *
     * @param integer $id_cart Value
     * @param integer $id_order_state Value
     * @param float $amount_paid Amount really paid by customer (in the default currency)
     * @param string $payment_method Payment method (eg. 'Credit card')
     * @param string $message Message to attach to order
     */
    public function validateOrder($id_cart, $id_order_state, $amount_paid, $payment_method = 'Unknown',
                                  $message = null, $extra_vars = array(), $currency_special = null, $dont_touch_amount = false,
                                  $secure_key = false, Shop $shop = null)
    {
    }

    public function formatProductAndVoucherForEmail($content)
    {
    }

    /**
     * @param int $id_currency : this parameter is optionnal but on 1.5 version of Prestashop, it will be REQUIRED
     * @return Currency
     */
    public function getCurrency($current_id_currency = null)
    {
    }

    /**
     * @param Object Address $the_address that needs to be txt formated
     * @return String the txt formated address block
     */

    protected function _getFormatedAddress(Address $the_address, $line_sep, $fields_style = array())
    {
    }

    /**
     * @param Object Address $the_address that needs to be txt formated
     * @return String the txt formated address block
     */
    protected function _getTxtFormatedAddress($the_address)
    {
    }
}
