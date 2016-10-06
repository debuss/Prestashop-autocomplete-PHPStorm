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

if (!defined('_PS_ADMIN_DIR_')) {
    define('_PS_ADMIN_DIR_', getcwd().'/..');
}

if (Tools::getValue('token') == Tools::getAdminToken('AdminReferrers'.(int)Tab::getIdFromClassName('AdminReferrers').(int)Tools::getValue('id_employee'))) {
    if (Tools::isSubmit('ajaxProductFilter')) {
        Referrer::getAjaxProduct(
            (int)Tools::getValue('id_referrer'),
            (int)Tools::getValue('id_product'),
            new Employee((int)Tools::getValue('id_employee'))
        );
    } elseif (Tools::isSubmit('ajaxFillProducts')) {
        $json_array = array();
        $result = Db::getInstance()->executeS('
			SELECT p.id_product, pl.name
			FROM '._DB_PREFIX_.'product p
			LEFT JOIN '._DB_PREFIX_.'product_lang pl
				ON (p.id_product = pl.id_product AND pl.id_lang = '.(int)Tools::getValue('id_lang').')
			'.(Tools::getValue('filter') != 'undefined' ? 'WHERE name LIKE "%'.pSQL(Tools::getValue('filter')).'%"' : '')
        );

        foreach ($result as $row) {
            $json_array[] = '{id_product:'.(int)$row['id_product'].',name:\''.addslashes($row['name']).'\'}';
        }

        die('['.implode(',', $json_array).']');
    }
}

/**
 * @property Referrer $object
 */
class AdminReferrersController extends AdminController
{

    public function __construct()
    {
    }

    public static function displayCalendarForm($translations, $token, $action = null, $table = null, $identifier = null, $id = null)
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

    public function displayCalendar($action = null, $table = null, $identifier = null, $id = null)
    {
    }

    public function displaySettings()
    {
    }

    public function renderForm()
    {
    }

    public function postProcess()
    {
    }

    public function renderView()
    {
    }

    protected function enableCalendar()
    {
    }
}
