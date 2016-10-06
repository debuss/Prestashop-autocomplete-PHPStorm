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

/**
 * Class FreeOrder to use PaymentModule (abstract class, cannot be instancied)
 */
class FreeOrder extends PaymentModule
{

    public $active = 1;
    public $name = 'free_order';
    public $displayName = 'free_order';
}

class ParentOrderController extends FrontController
{

    public $ssl = true;
    public $php_self = 'order';
    public $nbProducts;

    /**
     * Initialize parent order controller
     *
     * @see FrontController::init()
     */
    public function init()
    {
    }

    public function setMedia()
    {
    }

    /**
     * Set id_carrier to 0 (no shipping price)
     */
    protected function setNoCarrier()
    {
    }

    /**
     * Check if order is free
     *
     * @return bool
     */
    protected function _checkFreeOrder()
    {
    }

    protected function _updateMessage($messageContent)
    {
    }

    protected function _processCarrier()
    {
    }

    /**
     * Validate get/post param delivery option
     *
     * @param array $delivery_option
     * @return bool
     */
    protected function validateDeliveryOption($delivery_option)
    {
    }

    protected function _assignSummaryInformations()
    {
    }

    protected function _assignAddress()
    {
    }

    protected function _assignCarrier()
    {
    }

    /**
     * Decides what the default carrier is and update the cart with it
     *
     * @todo this function must be modified - id_carrier is now delivery_option
     * @param array $carriers
     * @deprecated since 1.5.0
     * @return number the id of the default carrier
     */
    protected function setDefaultCarrierSelection($carriers)
    {
    }

    protected function _assignWrappingAndTOS()
    {
    }

    protected function _assignPayment()
    {
    }

    /**
     * Decides what the default carrier is and update the cart with it
     *
     * @param array $carriers
     * @deprecated since 1.5.0
     * @return number the id of the default carrier
     */
    protected function _setDefaultCarrierSelection($carriers)
    {
    }
}
