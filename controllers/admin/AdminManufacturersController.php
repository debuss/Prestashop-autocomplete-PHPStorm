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
 * @property Manufacturer $object
 */
class AdminManufacturersController extends AdminController
{

    public $bootstrap = true;
    /** @var array countries list */
    protected $countries_array = array();

    public function __construct()
    {
    }

    public function setMedia()
    {
    }

    public function processExport($text_delimiter = '"')
    {
    }

    /**
     * Display editaddresses action link
     *
     * @param string $token the token to add to the link
     * @param int $id the identifier to add to the link
     * @return string
     */
    public function displayEditaddressesLink($token = null, $id)
    {
    }

    public function initContent()
    {
    }

    /**
     * AdminController::initToolbar() override
     *
     * @see AdminController::initToolbar()
     */
    public function initToolbar()
    {
    }

    public function initPageHeaderToolbar()
    {
    }

    public function renderFormAddress()
    {
    }

    public function renderForm()
    {
    }

    public function renderView()
    {
    }

    public function renderList()
    {
    }

    public function initListManufacturer()
    {
    }

    public function initListManufacturerAddresses()
    {
    }

    /**
     * AdminController::init() override
     *
     * @see AdminController::init()
     */
    public function init()
    {
    }

    public function initProcess()
    {
    }

    public function processSave()
    {
    }

    protected function getAddressFieldsList()
    {
    }

    protected function afterImageUpload()
    {
    }

    protected function beforeDelete($object)
    {
    }
}
