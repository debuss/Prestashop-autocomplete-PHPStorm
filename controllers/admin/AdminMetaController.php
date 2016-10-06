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
 * @property Meta $object
 */
class AdminMetaController extends AdminController
{

    public $table = 'meta';
    public $className = 'Meta';
    public $lang = true;
    /** @var ShopUrl */
    protected $url = false;
    protected $toolbar_scroll = false;

    public function __construct()
    {
    }

    public function getRobotsContent()
    {
    }

    /**
     * Check if a file is writable
     *
     * @param string $file
     * @return bool
     */
    public function checkConfiguration($file)
    {
    }

    /**
     * Add all custom route fields to the options form
     */
    public function addAllRouteFields()
    {
    }

    public function addFieldRoute($route_id, $title)
    {
    }

    public function initPageHeaderToolbar()
    {
    }

    public function initProcess()
    {
    }

    public function setMedia()
    {
    }

    public function renderForm()
    {
    }

    public function postProcess()
    {
    }

    public function generateRobotsFile()
    {
    }

    public function getList($id_lang, $orderBy = null, $orderWay = null, $start = 0, $limit = null, $id_lang_shop = false)
    {
    }

    public function renderList()
    {
    }

    /**
     * Called when PS_REWRITING_SETTINGS option is saved
     */
    public function updateOptionPsRewritingSettings()
    {
    }

    /**
     * Update shop domain (for mono shop)
     *
     * @param string $value
     * @throws PrestaShopException
     */
    public function updateOptionDomain($value)
    {
    }

    /**
     * Update shop SSL domain (for mono shop)
     *
     * @param string $value
     * @throws PrestaShopException
     */
    public function updateOptionDomainSsl($value)
    {
    }

    /**
     * Update shop physical uri for mono shop)
     *
     * @param string $value
     * @throws PrestaShopException
     */
    public function updateOptionUri($value)
    {
    }

    public function updateOptionPsRouteProductRule()
    {
    }

    /**
     * Validate route syntax and save it in configuration
     *
     * @param string $route_id
     */
    public function checkAndUpdateRoute($route_id)
    {
    }

    public function updateOptionPsRouteCategoryRule()
    {
    }

    public function updateOptionPsRouteLayeredRule()
    {
    }

    public function updateOptionPsRouteSupplierRule()
    {
    }

    public function updateOptionPsRouteManufacturerRule()
    {
    }

    public function updateOptionPsRouteCmsRule()
    {
    }

    public function updateOptionPsRouteCmsCategoryRule()
    {
    }

    /**
     * Function used to render the options for this controller
     */
    public function renderOptions()
    {
    }
}
