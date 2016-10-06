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

class ProductController extends FrontController
{

    public $php_self = 'product';
    /** @var Product */
    protected $product;
    /** @var Category */
    protected $category;

    public function setMedia()
    {
    }

    /**
     * Initialize product controller
     *
     * @see FrontController::init()
     */
    public function init()
    {
    }

    public function canonicalRedirection($canonical_url = '')
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

    public function getProduct()
    {
    }

    public function getCategory()
    {
    }

    protected function transformDescriptionWithImg($desc)
    {
    }

    protected function pictureUpload()
    {
    }

    protected function textRecord()
    {
    }

    protected function formTargetFormat()
    {
    }

    /**
     * Assign template vars related to category
     */
    protected function assignCategory()
    {
    }

    /**
     * Assign price and tax to the template
     */
    protected function assignPriceAndTax()
    {
    }

    protected function formatQuantityDiscounts($specific_prices, $price, $tax_rate, $ecotax_amount)
    {
    }

    /**
     * Assign template vars related to images
     */
    protected function assignImages()
    {
    }

    /**
     * Assign template vars related to attribute groups and colors
     */
    protected function assignAttributesGroups()
    {
    }

    /**
     * Get and assign attributes combinations informations
     */
    protected function assignAttributesCombinations()
    {
    }
}
