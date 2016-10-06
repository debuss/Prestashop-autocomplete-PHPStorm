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
 * @property Address $object
 */
class AdminAddressesController extends AdminController
{

    /** @var array countries list */
    protected $countries_array = array();

    public function __construct()
    {
    }

    public function initToolbar()
    {
    }

    public function initPageHeaderToolbar()
    {
    }

    public function renderForm()
    {
    }

    public function processSave()
    {
    }

    public function processAdd()
    {
    }

    /**
     * Method called when an ajax request is made
     *
     * @see AdminController::postProcess()
     */
    public function ajaxProcess()
    {
    }

    /**
     * Object Delete
     */
    public function processDelete()
    {
    }

    /**
     * Get Address formats used by the country where the address id retrieved from POST/GET is.
     *
     * @return array address formats
     */
    protected function processAddressFormat()
    {
    }

    /**
     * Delete multiple items
     *
     * @return bool true if succcess
     */
    protected function processBulkDelete()
    {
    }
}
