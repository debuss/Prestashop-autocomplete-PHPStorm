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
 * @property CustomerThread $object
 */
class AdminCustomerThreadsController extends AdminController
{

    public function __construct()
    {
    }

    public function renderList()
    {
    }

    /**
     * Call the IMAP synchronization during the render process.
     */
    public function renderProcessSyncImap()
    {
    }

    /**
     * Imap synchronization method.
     *
     * @return array Errors list.
     */
    public function syncImap()
    {
    }

    public function initToolbar()
    {
    }

    public function printOptinIcon($value, $customer)
    {
    }

    public function postProcess()
    {
    }

    public function initContent()
    {
    }

    public function renderKpis()
    {
    }

    public function renderView()
    {
    }

    public function getTimeline($messages, $id_order)
    {
    }

    public function renderOptions()
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

    public function updateOptionPsSavImapOpt($value)
    {
    }

    public function ajaxProcessMarkAsRead()
    {
    }

    /**
     * Call the IMAP synchronization during an AJAX process.
     *
     * @throws PrestaShopException
     */
    public function ajaxProcessSyncImap()
    {
    }

    protected function displayMessage($message, $email = false, $id_employee = null)
    {
    }

    protected function openUploadedFile()
    {
    }

    protected function displayButton($content)
    {
    }
}
