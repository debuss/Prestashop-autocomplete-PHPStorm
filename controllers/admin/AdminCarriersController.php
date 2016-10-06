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
class AdminCarriersController extends AdminController
{

    protected $position_identifier = 'id_carrier';

    public function __construct()
    {
    }

    public function initToolbar()
    {
    }

    public function initPageHeaderToolbar()
    {
    }

    public function renderView()
    {
    }

    public function renderList()
    {
    }

    public function renderForm()
    {
    }

    /**
     * Overload the property $fields_value
     *
     * @param object $obj
     */
    public function getFieldsValues($obj)
    {
    }

    public function postProcess()
    {
    }

    public function changeZones($id)
    {
    }

    public function processIsFree()
    {
    }

    /**
     * Modifying initial getList method to display position feature (drag and drop)
     *
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

    public function ajaxProcessUpdatePositions()
    {
    }

    public function displayEditLink($token = null, $id, $name = null)
    {
    }

    public function displayDeleteLink($token = null, $id, $name = null)
    {
    }

    protected function initTabModuleList()
    {
    }

    protected function changeGroups($id_carrier, $delete = true)
    {
    }

    /**
     * @param Carrier $object
     * @return int
     */
    protected function beforeDelete($object)
    {
    }
}
