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

@ini_set('max_execution_time', 3600);

/**
 * @property Product $object
 */
class AdminAttributeGeneratorController extends AdminController
{

    protected $combinations = array();
    /** @var Product */
    protected $product;

    public function __construct()
    {
    }

    protected static function setAttributesImpacts($id_product, $tab)
    {
    }

    protected static function createCombinations($list)
    {
    }

    public function setMedia()
    {
    }

    public function initProcess()
    {
    }

    public function postProcess()
    {
    }

    public function processGenerate()
    {
    }

    public function initBreadcrumbs($tab_id = null, $tabs = null)
    {
    }

    public function initContent()
    {
    }

    public function initPageHeaderToolbar()
    {
    }

    public function initGroupTable()
    {
    }

    protected function addAttribute($attributes, $price = 0, $weight = 0)
    {
    }
}
