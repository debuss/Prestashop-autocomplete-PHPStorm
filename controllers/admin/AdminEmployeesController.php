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
 * @property Employee $object
 */
class AdminEmployeesController extends AdminController
{

    /** @var array profiles list */
    protected $profiles_array = array();
    /** @var array themes list */
    protected $themes = array();
    /** @var array tabs list */
    protected $tabs_list = array();
    protected $restrict_edition = false;

    public function __construct()
    {
    }

    public function setMedia()
    {
    }

    public function initPageHeaderToolbar()
    {
    }

    public function renderList()
    {
    }

    public function renderForm()
    {
    }

    public function processDelete()
    {
    }

    public function processStatus()
    {
    }

    public function processSave()
    {
    }

    public function validateRules($class_name = false)
    {
    }

    public function postProcess()
    {
    }

    public function initContent()
    {
    }

    public function ajaxProcessGetTabByIdProfile()
    {
    }

    protected function canModifyEmployee()
    {
    }

    protected function _childValidation()
    {
    }

    protected function processBulkDelete()
    {
    }

    /**
     * @param Employee $object
     * @return bool
     */
    protected function afterUpdate($object)
    {
    }

    protected function ajaxProcessFormLanguage()
    {
    }

    protected function ajaxProcessToggleMenu()
    {
    }
}
