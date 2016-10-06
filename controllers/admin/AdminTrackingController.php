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
 * @property Product|Category $object
 */
class AdminTrackingController extends AdminController
{

    public $bootstrap = true;
    /** @var HelperList */
    protected $_helper_list;

    public static function getDescriptionClean($description)
    {
    }

    public function postprocess()
    {
    }

    public function initContent()
    {
    }

    public function clearListOptions()
    {
    }

    public function getCustomListCategoriesEmpty()
    {
    }

    public function renderList()
    {
    }

    public function getList($id_lang, $order_by = null, $order_way = null, $start = 0, $limit = null, $id_lang_shop = false)
    {
    }

    public function getCustomListProductsAttributesNoStock()
    {
    }

    public function getCustomListProductsNoStock()
    {
    }

    public function getCustomListProductsDisabled()
    {
    }

    public function displayEnableLink($token, $id, $value, $active, $id_category = null, $id_product = null)
    {
    }

    public function displayDeleteLink($token = null, $id, $name = null)
    {
    }

    public function displayEditLink($token = null, $id, $name = null)
    {
    }

    protected function clearFilters()
    {
    }
}
