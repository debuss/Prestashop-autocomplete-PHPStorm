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
 * @property Carrier $object
 */
class AdminCarrierWizardController extends AdminController
{

    protected $wizard_access;

    public function __construct()
    {
    }

    public static function displayFieldName($field)
    {
    }

    public function setMedia()
    {
    }

    public function renderView()
    {
    }

    public function initWizard()
    {
    }

    public function getActualCurrency()
    {
    }

    public function renderStepOne($carrier)
    {
    }

    public function getStepOneFieldsValues($carrier)
    {
    }

    public function renderGenericForm($fields_form, $fields_value, $tpl_vars = array())
    {
    }

    public function renderStepThree($carrier)
    {
    }

    public function getStepThreeFieldsValues($carrier)
    {
    }

    /**
     * @param Carrier $carrier
     * @return string
     */
    public function renderStepFour($carrier)
    {
    }

    public function getStepFourFieldsValues($carrier)
    {
    }

    public function renderStepFive($carrier)
    {
    }

    public function getStepFiveFieldsValues($carrier)
    {
    }

    public function renderStepTwo($carrier)
    {
    }

    public function getStepTwoFieldsValues($carrier)
    {
    }

    public function initBreadcrumbs($tab_id = null, $tabs = null)
    {
    }

    public function initPageHeaderToolbar()
    {
    }

    public function ajaxProcessChangeRanges()
    {
    }

    public function ajaxProcessValidateStep()
    {
    }

    public function ajaxProcessUploadLogo()
    {
    }

    public function ajaxProcessFinishStep()
    {
    }

    public function duplicateLogo($new_id, $old_id)
    {
    }

    public function changeZones($id)
    {
    }

    public function processRanges($id_carrier)
    {
    }

    public function getValidationRules()
    {
    }

    /**
     * @param Carrier $carrier
     * @param array $tpl_vars
     * @param array $fields_value
     */
    protected function getTplRangesVarsAndValues($carrier, &$tpl_vars, &$fields_value)
    {
    }

    protected function validateForm($die = true)
    {
    }

    protected function changeGroups($id_carrier, $delete = true)
    {
    }
}
