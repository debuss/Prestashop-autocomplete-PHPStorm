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
 * @property Customer $object
 */
class AdminCustomersController extends AdminController
{

    protected static $meaning_status = array();
    protected $delete_mode;
    protected $_defaultOrderBy = 'date_add';
    protected $_defaultOrderWay = 'DESC';
    protected $can_add_customer = true;

    public function __construct()
    {
    }

    public function postProcess()
    {
    }

    public function initContent()
    {
    }

    public function initToolbar()
    {
    }

    public function getList($id_lang, $orderBy = null, $orderWay = null, $start = 0, $limit = null, $id_lang_shop = null)
    {
    }

    public function initToolbarTitle()
    {
    }

    public function initPageHeaderToolbar()
    {
    }

    public function initProcess()
    {
    }

    public function renderList()
    {
    }

    public function renderForm()
    {
    }

    public function beforeAdd($customer)
    {
    }

    public function renderKpis()
    {
    }

    public function renderView()
    {
    }

    public function processDelete()
    {
    }

    public function processAdd()
    {
    }

    public function processUpdate()
    {
    }

    public function processSave()
    {
    }

    /**
     * Transform a guest account into a registered customer account
     */
    public function processGuestToCustomer()
    {
    }

    /**
     * Toggle the newsletter flag
     */
    public function processChangeNewsletterVal()
    {
    }

    /**
     * Toggle newsletter optin flag
     */
    public function processChangeOptinVal()
    {
    }

    public function printNewsIcon($value, $customer)
    {
    }

    public function printOptinIcon($value, $customer)
    {
    }

    /**
     * @param string $token
     * @param int $id
     * @param string $name
     * @return mixed
     */
    public function displayDeleteLink($token = null, $id, $name = null)
    {
    }

    /**
     * add to $this->content the result of Customer::SearchByName
     * (encoded in json)
     *
     * @return void
     */
    public function ajaxProcessSearchCustomers()
    {
    }

    /**
     * Uodate the customer note
     *
     * @return void
     */
    public function ajaxProcessUpdateCustomerNote()
    {
    }

    protected function _setDeletedMode()
    {
    }

    protected function processBulkDelete()
    {
    }

    protected function afterDelete($object, $old_id)
    {
    }
}
