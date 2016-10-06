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
 * @property CartRule $object
 */
class AdminCartRulesController extends AdminController
{

    public function __construct()
    {
    }

    public function ajaxProcessLoadCartRules()
    {
    }

    public function setMedia()
    {
    }

    public function initPageHeaderToolbar()
    {
    }

    public function postProcess()
    {
    }

    public function processDelete()
    {
    }

    public function processAdd()
    {
    }

    public function ajaxProcess()
    {
    }

    public function getProductRuleDisplay($product_rule_group_id, $product_rule_id, $product_rule_type, $selected = array())
    {
    }

    public function getProductRuleGroupDisplay($product_rule_group_id, $product_rule_group_quantity = 1, $product_rules = null)
    {
    }

    /* Return the form for a single cart rule group either with or without product_rules set up */

    public function ajaxProcessSearchProducts()
    {
    }

    public function renderForm()
    {
    }

    /**
     * Retrieve the cart rule product rule groups in the POST data
     * if available, and in the database if there is none
     *
     * @param CartRule $cart_rule
     * @return array
     */
    public function getProductRuleGroupsDisplay($cart_rule)
    {
    }

    public function displayAjaxSearchCartRuleVouchers()
    {
    }

    protected function searchProducts($search)
    {
    }

    protected function afterUpdate($current_object)
    {
    }

    /**
     * @TODO Move this function into CartRule
     * @param ObjectModel $currentObject
     * @return void
     * @throws PrestaShopDatabaseException
     */
    protected function afterAdd($currentObject)
    {
    }
}
