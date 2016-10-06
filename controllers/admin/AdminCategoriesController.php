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
 * @property Category $object
 */
class AdminCategoriesController extends AdminController
{

    /** @var bool does the product have to be removed during the delete process */
    public $remove_products = true;
    /** @var bool does the product have to be disable during the delete process */
    public $disable_products = false;
    /**
     * @var object Category() instance for navigation
     */
    protected $_category = null;
    protected $position_identifier = 'id_category_to_move';
    private $original_filter = '';

    public function __construct()
    {
    }

    public static function getDescriptionClean($description)
    {
    }

    public function init()
    {
    }

    public function initPageHeaderToolbar()
    {
    }

    public function initContent()
    {
    }

    public function setMedia()
    {
    }

    public function getList($id_lang, $order_by = null, $order_way = null, $start = 0, $limit = null, $id_lang_shop = false)
    {
    }

    public function renderView()
    {
    }

    public function initToolbar()
    {
    }

    public function renderList()
    {
    }

    public function initProcess()
    {
    }

    public function renderKpis()
    {
    }

    public function renderForm()
    {
    }

    public function postProcess()
    {
    }

    public function processForceDeleteImage()
    {
    }

    public function processForceDeleteThumb()
    {
    }

    public function processAdd()
    {
    }

    public function processDelete()
    {
    }

    public function processPosition()
    {
    }

    public function ajaxProcessUpdatePositions()
    {
    }

    public function ajaxProcessStatusCategory()
    {
    }

    public function processFatherlessProducts($id_parent)
    {
    }

    protected function processBulkDelete()
    {
    }

    protected function setDeleteMode()
    {
    }

    protected function postImage($id)
    {
    }
}
