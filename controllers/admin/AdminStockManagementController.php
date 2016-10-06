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
 * @property Product $object
 */
class AdminStockManagementController extends AdminController
{

    public function __construct()
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
     * AdminController::postProcess() override
     *
     * @see AdminController::postProcess()
     */
    public function postProcess()
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

    public function renderDetails()
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
     * AdminController::initContent() override
     *
     * @see AdminController::initContent()
     */
    public function initContent()
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
     * assign default action in toolbar_btn smarty var, if they are not set.
     * uses override to specifically add, modify or remove items
     */
    public function initToolbar()
    {
    }

    public function initPageHeaderToolbar()
    {
    }

    /**
     * Display addstock action link
     *
     * @param string $token the token to add to the link
     * @param int $id the identifier to add to the link
     * @return string
     */
    public function displayAddstockLink($token = null, $id)
    {
    }

    /**
     * Display removestock action link
     *
     * @param string $token the token to add to the link
     * @param int $id the identifier to add to the link
     * @return string
     */
    public function displayRemovestockLink($token = null, $id)
    {
    }

    /**
     * Display transferstock action link
     *
     * @param string $token the token to add to the link
     * @param int $id the identifier to add to the link
     * @return string
     */
    public function displayTransferstockLink($token = null, $id)
    {
    }

    public function initProcess()
    {
    }

    /**
     * Check stock for a given product or product attribute
     * and manage available actions in consequence
     *
     * @param array $item Reference to the current item
     * @param bool $is_product_variation Specify if it's a product or a product variation
     */
    protected function skipActionByStock(&$item, $is_product_variation = false)
    {
    }
}
