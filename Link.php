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

class Link
{

    public static $cache = array('page' => array());
    protected static $category_disable_rewrite = null;
    public $protocol_link;
    public $protocol_content;
    /** @var boolean Rewriting activation */
    protected $allow;
    protected $url;
    protected $ssl_enable;

    /**
     * Constructor (initialization only)
     */
    public function __construct($protocol_link = null, $protocol_content = null)
    {
    }

    /**
     * Create a link to delete a product
     *
     * @param mixed $product ID of the product OR a Product object
     * @param int $id_picture ID of the picture to delete
     * @return string
     */
    public function getProductDeletePictureLink($product, $id_picture)
    {
    }

    /**
     * Create a link to a product
     *
     * @param mixed $product Product object (can be an ID product, but deprecated)
     * @param string $alias
     * @param string $category
     * @param string $ean13
     * @param int $id_lang
     * @param int $id_shop (since 1.5.0) ID shop need to be used when we generate a product link for a product in a cart
     * @param int $ipa ID product attribute
     * @return string
     */
    public function getProductLink($product, $alias = null, $category = null, $ean13 = null, $id_lang = null, $id_shop = null, $ipa = 0, $force_routes = false)
    {
    }

    /**
     * Create a link to a module
     *
     * @since 1.5.0
     * @param string $module Module name
     * @param string $process Action name
     * @param int $id_lang
     * @return string
     */
    public function getModuleLink($module, $controller = 'default', array $params = array(), $ssl = false, $id_lang = null)
    {
    }

    /**
     * Create a simple link
     *
     * @param string $controller
     * @param bool $ssl
     * @param int $id_lang
     * @param string|array $request
     * @param bool $request_url_encode Use URL encode
     * @return string Page link
     */
    public function getPageLink($controller, $ssl = false, $id_lang = null, $request = null, $request_url_encode = false)
    {
    }

    /**
     * Use controller name to create a link
     *
     * @param string $controller
     * @param boolean $with_token include or not the token in the url
     * @return controller url
     */
    public function getAdminLink($controller, $with_token = true)
    {
    }

    /**
     * Returns a link to a product image for display
     * Note: the new image filesystem stores product images in subdirectories of img/p/
     *
     * @param string $name rewrite link of the image
     * @param string $ids id part of the image filename - can be "id_product-id_image" (legacy support, recommended) or "id_image" (new)
     * @param string $type
     */
    public function getImageLink($name, $ids, $type = null)
    {
    }

    public function getMediaLink($filepath)
    {
    }

    public function getCatImageLink($name, $id_category, $type = null)
    {
    }

    /**
     * Create link after language change, for the change language block
     *
     * @param integer $id_lang Language ID
     * @return string link
     */
    public function getLanguageLink($id_lang, Context $context = null)
    {
    }

    /**
     * Create a link to a category
     *
     * @param mixed $category Category object (can be an ID category, but deprecated)
     * @param string $alias
     * @param int $id_lang
     * @param string $selected_filters Url parameter to autocheck filters of the module blocklayered
     * @return string
     */
    public function getCategoryLink($category, $alias = null, $id_lang = null, $selected_filters = null)
    {
    }

    /**
     * Create a link to a supplier
     *
     * @param mixed $supplier Supplier object (can be an ID supplier, but deprecated)
     * @param string $alias
     * @param int $id_lang
     * @return string
     */
    public function getSupplierLink($supplier, $alias = null, $id_lang = null)
    {
    }

    /**
     * Create a link to a manufacturer
     *
     * @param mixed $manufacturer Manufacturer object (can be an ID supplier, but deprecated)
     * @param string $alias
     * @param int $id_lang
     * @return string
     */
    public function getManufacturerLink($manufacturer, $alias = null, $id_lang = null)
    {
    }

    /**
     * Create a link to a CMS page
     *
     * @param mixed $cms CMS object (can be an ID CMS, but deprecated)
     * @param string $alias
     * @param bool $ssl
     * @param int $id_lang
     * @return string
     */
    public function getCMSLink($cms, $alias = null, $ssl = false, $id_lang = null)
    {
    }

    /**
     * Create a link to a CMS category
     *
     * @param mixed $category CMSCategory object (can be an ID category, but deprecated)
     * @param string $alias
     * @param int $id_lang
     * @return string
     */
    public function getCMSCategoryLink($category, $alias = null, $id_lang = null)
    {
    }

    public function goPage($url, $p)
    {
    }

    /**
     * Get pagination link
     *
     * @param string $type Controller name
     * @param int $id_object
     * @param boolean $nb Show nb element per page attribute
     * @param boolean $sort Show sort attribute
     * @param boolean $pagination Show page number attribute
     * @param boolean $array If false return an url, if true return an array
     */
    public function getPaginationLink($type, $id_object, $nb = false, $sort = false, $pagination = false, $array = false)
    {
    }

    public function addSortDetails($url, $orderby, $orderway)
    {
    }

    protected function getLangLink($id_lang = null, Context $context = null)
    {
    }
}

