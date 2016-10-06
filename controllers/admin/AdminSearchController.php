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

class AdminSearchController extends AdminController
{

    public function __construct()
    {
    }

    public function postProcess()
    {
    }

    /**
     * Search a feature in all store
     *
     * @params string $query String to find in the catalog
     */
    public function searchFeatures()
    {
    }

    /**
     * Search a specific string in the products and categories
     *
     * @params string $query String to find in the catalog
     */
    public function searchCatalog()
    {
    }

    /**
     * Search a specific name in the customers
     *
     * @params string $query String to find in the catalog
     */
    public function searchCustomer()
    {
    }

    public function searchIP()
    {
    }

    public function searchModule()
    {
    }

    public function setMedia()
    {
    }

    public function initToolbar()
    {
    }

    public function renderView()
    {
    }

    /* Override because we don't want any buttons */

    protected function initProductList()
    {
    }

    protected function initCustomerList()
    {
    }

    protected function initOrderList()
    {
    }
}
