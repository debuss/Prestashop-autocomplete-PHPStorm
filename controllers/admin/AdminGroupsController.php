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
 * @property Group $object
 */
class AdminGroupsController extends AdminController
{

    public function __construct()
    {
    }

    public function setMedia()
    {
    }

    public function initToolbar()
    {
    }

    public function initPageHeaderToolbar()
    {
    }

    public function initProcess()
    {
    }

    public function renderView()
    {
    }

    public function printOptinIcon($value, $customer)
    {
    }

    public function renderForm()
    {
    }

    public function formatModuleListAuth($id_group)
    {
    }

    public function processSave()
    {
    }

    public function ajaxProcessAddCategoryReduction()
    {
    }

    /**
     * Toggle show prices flag
     */
    public function processChangeShowPricesVal()
    {
    }

    /**
     * Print enable / disable icon for show prices option
     *
     * @param $id_group integer Group ID
     * @param $tr array Row data
     * @return string HTML link and icon
     */
    public function printShowPricesIcon($id_group, $tr)
    {
    }

    public function renderList()
    {
    }

    public function displayEditLink($token = null, $id, $name = null)
    {
    }

    protected function renderCustomersList($group)
    {
    }

    protected function formatCategoryDiscountList($id_group)
    {
    }

    protected function validateDiscount($reduction)
    {
    }

    protected function updateCategoryReduction()
    {
    }

    /**
     * Update (or create) restrictions for modules by group
     */
    protected function updateRestrictions()
    {
    }
}
