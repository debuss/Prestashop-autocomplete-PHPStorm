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

class OrderController extends ParentOrderController
{

    const STEP_SUMMARY_EMPTY_CART = -1;
    const STEP_ADDRESSES = 1;
    const STEP_DELIVERY = 2;
    const STEP_PAYMENT = 3;
    public $step;

    /**
     * Initialize order controller
     *
     * @see FrontController::init()
     */
    public function init()
    {
    }

    public function postProcess()
    {
    }

    /**
     * Assign template vars related to page content
     *
     * @see FrontController::initContent()
     */
    public function initContent()
    {
    }

    /**
     * Manage address
     */
    public function processAddress()
    {
    }

    /**
     * Order process controller
     */
    public function autoStep()
    {
    }

    public function setMedia()
    {
    }

    /**
     * Carrier step
     */
    protected function processCarrier()
    {
    }

    /**
     * Carrier step
     */
    protected function _assignCarrier()
    {
    }

    /**
     * Address step
     */
    protected function _assignAddress()
    {
    }

    protected function processAddressFormat()
    {
    }

    /**
     * Payment step
     */
    protected function _assignPayment()
    {
    }
}
