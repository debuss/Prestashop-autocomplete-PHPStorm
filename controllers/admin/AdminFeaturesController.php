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
 * @property Feature $object
 */
class AdminFeaturesController extends AdminController
{

    public $bootstrap = true;
    protected $position_identifier = 'id_feature';
    protected $feature_name;

    public function __construct()
    {
    }

    public function initToolbarTitle()
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

    /**
     * AdminController::initToolbar() override
     *
     * @see AdminController::initToolbar()
     */
    public function initToolbar()
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

    public function renderView()
    {
    }

    /**
     * AdminController::renderForm() override
     *
     * @see AdminController::renderForm()
     */
    public function initFormFeatureValue()
    {
    }

    /**
     * AdminController::renderList() override
     *
     * @see AdminController::renderList()
     */
    public function renderList()
    {
    }

    public function initProcess()
    {
    }

    public function postProcess()
    {
    }

    /**
     * Override processAdd to change SaveAndStay button action
     *
     * @see classes/AdminControllerCore::processAdd()
     */
    public function processAdd()
    {
    }

    /**
     * Override processUpdate to change SaveAndStay button action
     *
     * @see classes/AdminControllerCore::processUpdate()
     */
    public function processUpdate()
    {
    }

    /**
     * Call the right method for creating or updating object
     *
     * @return mixed
     */
    public function processSave()
    {
    }

    /**
     * AdminController::getList() override
     *
     * @see AdminController::getList()
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

    /**
     * Change object type to feature value (use when processing a feature value)
     */
    protected function setTypeValue()
    {
    }

    /**
     * Change object type to feature (use when processing a feature)
     */
    protected function setTypeFeature()
    {
    }
}
