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
 * @property Profile $object
 */
class AdminAccessController extends AdminController
{

    /* @var array : Black list of id_tab that do not have access */
    public $accesses_black_list = array();

    public function __construct()
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

    public function initPageHeaderToolbar()
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
     * Get the current profile id
     *
     * @return int the $_GET['profile'] if valid, else 1 (the first profile id)
     */
    public function getCurrentProfileId()
    {
    }

    public function initToolbarTitle()
    {
    }

    public function ajaxProcessUpdateAccess()
    {
    }

    public function ajaxProcessUpdateModuleAccess()
    {
    }

    private function sortModuleByName($a, $b)
    {
    }
}
