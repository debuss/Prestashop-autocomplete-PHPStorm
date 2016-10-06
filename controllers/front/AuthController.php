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

class AuthController extends FrontController
{

    public $ssl = true;
    public $php_self = 'authentication';
    public $auth = false;
    /**
     * @var bool create_account
     */
    protected $create_account;
    protected $id_country;

    /**
     * Initialize auth controller
     *
     * @see FrontController::init()
     */
    public function init()
    {
    }

    /**
     * Set default medias for this controller
     *
     * @see FrontController::setMedia()
     */
    public function setMedia()
    {
    }

    /**
     * Run ajax process
     *
     * @see FrontController::displayAjax()
     */
    public function displayAjax()
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
     * Start forms process
     *
     * @see FrontController::postProcess()
     */
    public function postProcess()
    {
    }

    /**
     * Assign date var to smarty
     */
    protected function assignDate()
    {
    }

    /**
     * Assign countries var to smarty
     */
    protected function assignCountries()
    {
    }

    /**
     * Assign address var to smarty
     */
    protected function assignAddressFormat()
    {
    }

    /**
     * Process submit on a creation
     */
    protected function processSubmitCreate()
    {
    }

    /**
     * Process submit on an account
     */
    protected function processSubmitAccount()
    {
    }

    /**
     * Process the newsletter settings and set the customer infos.
     *
     * @param Customer $customer Reference on the customer Object.
     * @note At this point, the email has been validated.
     */
    protected function processCustomerNewsletter(&$customer)
    {
    }

    /**
     * sendConfirmationMail
     *
     * @param Customer $customer
     * @return bool
     */
    protected function sendConfirmationMail(Customer $customer)
    {
    }

    /**
     * Update context after customer creation
     *
     * @param Customer $customer Created customer
     */
    protected function updateContext(Customer $customer)
    {
    }

    /**
     * Process login
     */
    protected function processSubmitLogin()
    {
    }
}
