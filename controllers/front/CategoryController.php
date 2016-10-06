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

class CategoryController extends FrontController
{

    /** string Internal controller name */
    public $php_self = 'category';
    /** @var bool If set to false, customer cannot view the current category. */
    public $customer_access = true;
    /** @var Category Current category object */
    protected $category;
    /** @var int Number of products in the current page. */
    protected $nbProducts;
    /** @var array Products to be displayed in the current page . */
    protected $cat_products;

    /**
     * Sets default medias for this controller
     */
    public function setMedia()
    {
    }

    /**
     * Redirects to canonical or "Not Found" URL
     *
     * @param string $canonical_url
     */
    public function canonicalRedirection($canonical_url = '')
    {
    }

    /**
     * Initializes controller
     *
     * @see FrontController::init()
     * @throws PrestaShopException
     */
    public function init()
    {
    }

    /**
     * Initializes page content variables
     */
    public function initContent()
    {
    }

    /**
     * Assigns product list template variables
     */
    public function assignProductList()
    {
    }

    /**
     * Returns an instance of the current category
     *
     * @return Category
     */
    public function getCategory()
    {
    }

    /**
     * Assigns scenes template variables
     */
    protected function assignScenes()
    {
    }

    /**
     * Assigns subcategory templates variables
     */
    protected function assignSubcategories()
    {
    }
}
