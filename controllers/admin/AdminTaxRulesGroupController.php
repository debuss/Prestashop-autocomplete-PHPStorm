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
 * @property TaxRulesGroup $object
 */
class AdminTaxRulesGroupController extends AdminController
{

    public $tax_rule;
    public $selected_countries = array();
    public $selected_states = array();
    public $errors_tax_rule;

    public function __construct()
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

    public function initRuleForm()
    {
    }

    public function initRulesList($id_group)
    {
    }

    public function initProcess()
    {
    }

    protected function processCreateRule()
    {
    }

    /**
     * Check if the tax rule could be added in the database
     *
     * @param TaxRule $tr
     * @return array
     */
    protected function validateTaxRule(TaxRule $tr)
    {
    }

    /**
     * @param TaxRulesGroup $object
     * @return TaxRulesGroup
     */
    protected function updateTaxRulesGroup($object)
    {
    }

    protected function processBulkDeleteTaxRules()
    {
    }

    protected function deleteTaxRule(array $id_tax_rule_list)
    {
    }

    protected function processDeleteTaxRule()
    {
    }

    protected function displayAjaxUpdateTaxRule()
    {
    }
}
