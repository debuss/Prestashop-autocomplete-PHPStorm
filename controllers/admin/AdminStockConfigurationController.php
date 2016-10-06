<?php
/**
 * 2007-2015 PrestaShop
 * NOTICE OF LICENSE
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2015 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

/**
 * @since 1.5.0
 * @property StockMvtReason $object
 */
class AdminStockConfigurationController extends AdminController
{

    /*
     * By default, we use StockMvtReason as the table / className
     */
    public function __construct()
    {
    }

    public function init()
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

    /*
     * Help function for AdminStockConfigurationController::renderList()
     * @see AdminStockConfigurationController::renderList()
     */
    public function initSupplyOrderStatusList()
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

    public function initContent()
    {
    }

    public function initProcess()
    {
    }

    public function ajaxProcessEditableSupplyOrderState()
    {
    }

    public function ajaxProcessDeliveryNoteSupplyOrderState()
    {
    }

    public function ajaxProcessPendingReceiptSupplyOrderState()
    {
    }

    public function ajaxProcessReceiptStateSupplyOrderState()
    {
    }

    public function ajaxProcessEnclosedSupplyOrderState()
    {
    }
}
