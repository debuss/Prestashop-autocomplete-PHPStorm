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

class FrontController extends Controller
{

    public static $initialized = false;
    /**
     * @deprecated Deprecated shortcuts as of 1.5 - Use $context->var instead
     */
    protected static $smarty, $cookie, $link, $cart;
    protected static $currentCustomerGroups;
    public $errors = array();
    public $iso;
    public $orderBy;
    public $orderWay;
    public $p;
    public $n;
    public $auth = false;
    public $guestAllowed = false;
    public $authRedirection = false;
    public $ssl = false;
    public $display_column_left = true;
    public $display_column_right = true;
    public $nb_items_per_page;
    protected $restrictedCountry = false;
    protected $maintenance = false;

    public function __construct()
    {
    }

    public static function getCurrentCustomerGroups()
    {
    }

    protected static function isInWhitelistForGeolocation()
    {
    }

    /**
     * @see Controller::checkAccess()
     * @return boolean
     */
    public function checkAccess()
    {
    }

    /**
     * @see Controller::viewAccess
     * @return boolean
     */
    public function viewAccess()
    {
    }

    public function postProcess()
    {
    }

    public function process()
    {
    }

    public function initHeader()
    {
    }

    /**
     * Return an array with specific logo and favicon,
     * if mobile device
     *
     * @since 1.5
     * @return array
     */
    public function initLogoAndFavicon()
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public function displayFooter($display = true)
    {
    }

    public function initCursedPage()
    {
    }

    /* Display a maintenance page if shop is closed */

    public function redirect()
    {
    }

    /* Display a specific page if the user country is not allowed */

    public function display()
    {
    }

    public function checkLiveEditAccess()
    {
    }

    public function getLiveEditFooter()
    {
    }

    /**
     * Returns the layout corresponding to the current page by using the override system
     * Ex:
     * On the url: http://localhost/index.php?id_product=1&controller=product, this method will
     * check if the layout exists in the following files (in that order), and return the first found:
     * - /themes/default/override/layout-product-1.tpl
     * - /themes/default/override/layout-product.tpl
     * - /themes/default/layout.tpl
     *
     * @since 1.5
     * @return bool|string
     */
    public function getLayout()
    {
    }

    /**
     * 1.4 retrocompatibility - will be removed in 1.6
     */
    public function displayContent()
    {
    }

    /**
     * Specific medias for mobile device.
     */
    public function setMobileMedia()
    {
    }

    /**
     * Add one or several JS files for front, checking if js files are overriden in theme/js/modules/ directory
     *
     * @see Controller::addJS()
     */
    public function addJS($js_uri)
    {
    }

    /**
     * Add one or several CSS for front, checking if css files are overriden in theme/css/modules/ directory
     *
     * @see Controller::addCSS()
     */
    public function addCSS($css_uri, $css_media_type = 'all')
    {
    }

    public function initFooter()
    {
    }

    public function productSort()
    {
    }

    public function pagination($nbProducts = 10)
    {
    }

    public function init()
    {
    }

    /**
     * Check if token is valid
     *
     * @since 1.5.0
     * @return bool
     */
    public function isTokenValid()
    {
    }

    /**
     * This is overrided to manage is behaviour
     * if a customer access to the site with mobile device.
     */
    public function setTemplate($default_template)
    {
    }

    /**
     * This checks if the template set is available for mobile themes,
     * otherwise the front template is choosen.
     */
    public function setMobileTemplate($template)
    {
    }

    /**
     * Returns the template corresponding to the current page.
     * By default this method return false but could easily be overridden in a specific controller
     *
     * @since 1.5
     * @return bool
     */
    public function getOverrideTemplate()
    {
    }

    protected function displayMaintenancePage()
    {
    }

    protected function recoverCart()
    {
    }

    protected function geolocationManagement($default_country)
    {
    }

    protected function canonicalRedirection($canonical_url = '')
    {
    }

    protected function displayRestrictedCountryPage()
    {
    }
}
