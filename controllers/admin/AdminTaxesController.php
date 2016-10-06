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
 * @property Tax $object
 */
class AdminTaxesController extends AdminController
{

    public function __construct()
    {
    }

    public function initPageHeaderToolbar()
    {
    }

    /**
     * Display delete action link
     *
     * @param string|null $token
     * @param int $id
     * @return string
     * @throws Exception
     * @throws SmartyException
     */
    public function displayDeleteLink($token = null, $id)
    {
    }

    /**
     * Fetch the template for action enable
     *
     * @param string $token
     * @param int $id
     * @param int $value state enabled or not
     * @param string $active status
     * @param int $id_category
     * @param int $id_product
     */
    public function displayEnableLink($token, $id, $value, $active, $id_category = null, $id_product = null)
    {
    }

    public function renderForm()
    {
    }

    public function postProcess()
    {
    }

    public function updateOptionPsUseEcotax($value)
    {
    }
}
