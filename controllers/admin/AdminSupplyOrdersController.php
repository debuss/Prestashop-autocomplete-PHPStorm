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
 * @since 1.5.0
 * @property SupplyOrder $object
 */
class AdminSupplyOrdersController extends AdminController
{

    /**
     * @var array List of warehouses
     */
    protected $warehouses;

    public function __construct()
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

    /**
     * Assigns default actions in toolbar_btn smarty var, if they are not set.
     * uses override to specifically add, modify or remove items
     *
     * @see AdminSupplier::initToolbar()
     */
    public function initToolbar()
    {
    }

    /**
     * AdminController::renderForm() override
     *
     * @see AdminController::renderForm()
     */
    public function renderForm()
    {
    }

    /**
     * AdminController::renderList() override
     *
     * @see AdminController::renderList()
     */
    public function renderList()
    {
    }

    /**
     * AdminController::initContent() override
     *
     * @see AdminController::initContent()
     */
    public function initContent()
    {
    }

    /**
     * Init the content of change state action
     */
    public function initChangeStateContent()
    {
    }

    public function initPageHeaderToolbar()
    {
    }

    /**
     * Inits the content of 'update_receipt' action
     * Called in initContent()
     *
     * @see AdminSuppliersOrders::initContent()
     */
    public function initUpdateReceiptContent()
    {
    }

    /**
     * AdminController::getList() override
     *
     * @see AdminController::getList()
     * @param int $id_lang
     * @param string|null $order_by
     * @param string|null $order_way
     * @param int $start
     * @param int|null $limit
     * @param int|bool $id_lang_shop
     * @throws PrestaShopException
     */
    public function getList($id_lang, $order_by = null, $order_way = null, $start = 0, $limit = null, $id_lang_shop = false)
    {
    }

    /**
     * Init the content of change state action
     */
    public function initUpdateSupplyOrderContent()
    {
    }

    /**
     * AdminController::postProcess() override
     *
     * @see AdminController::postProcess()
     */
    public function postProcess()
    {
    }

    /**
     * Ths method manage associated products to the order when updating it
     */
    public function manageOrderProducts()
    {
    }

    /**
     * Display state action link
     *
     * @param string $token the token to add to the link
     * @param int $id the identifier to add to the link
     * @return string
     */
    public function displayUpdateReceiptLink($token = null, $id)
    {
    }

    /**
     * Display receipt action link
     *
     * @param string $token the token to add to the link
     * @param int $id the identifier to add to the link
     * @return string
     */
    public function displayChangestateLink($token = null, $id)
    {
    }

    /**
     * Display state action link
     *
     * @param string $token the token to add to the link
     * @param int $id the identifier to add to the link
     * @return string
     */
    public function displayCreateSupplyOrderLink($token = null, $id)
    {
    }

    public function renderDetails()
    {
    }

    /**
     * method call when ajax request is made for search product to add to the order
     *
     * @TODO - Update this method to retreive the reference, ean13, upc corresponding to a product attribute
     */
    public function ajaxProcessSearchProduct()
    {
    }

    /**
     * @see AdminController::renderView()
     */
    public function renderView()
    {
    }

    /**
     * Callback used to display custom content for a given field
     *
     * @param int $id_supply_order
     * @param string $tr
     * @return string $content
     */
    public function printExportIcons($id_supply_order, $tr)
    {
    }

    /**
     * Overrides AdminController::beforeAdd()
     *
     * @see AdminController::beforeAdd()
     * @param SupplyOrder $object
     * @return true
     */
    public function beforeAdd($object)
    {
    }

    public function initProcess()
    {
    }

    /**
     * Gets the current warehouse used
     *
     * @return int id_warehouse
     */
    protected function getCurrentWarehouse()
    {
    }

    /**
     * Gets the current filter used
     *
     * @return int status
     */
    protected function getFilterStatus()
    {
    }

    /**
     * Exports CSV
     */
    protected function renderCSV()
    {
    }

    /**
     * Loads products which quantity (hysical quantity) is equal or less than $threshold
     *
     * @param int $threshold
     */
    protected function loadProducts($threshold)
    {
    }

    /**
     * Helper function for AdminSupplyOrdersController::postProcess()
     *
     * @see AdminSupplyOrdersController::postProcess()
     */
    protected function postProcessUpdateReceipt()
    {
    }

    /**
     * Helper function for AdminSupplyOrdersController::postProcess()
     *
     * @see AdminSupplyOrdersController::postProcess()
     */
    protected function postProcessCopyFromTemplate()
    {
    }

    /**
     * Overrides AdminController::afterAdd()
     *
     * @see AdminController::afterAdd()
     * @param ObjectModel $object
     * @return bool
     */
    protected function afterAdd($object)
    {
    }
}
