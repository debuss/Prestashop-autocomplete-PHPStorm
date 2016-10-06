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
 * @property RequestSql $object
 */
class AdminRequestSqlController extends AdminController
{

    /**
     * @var array : List of encoding type for a file
     */
    public static $encoding_file = array(
        array('value' => 1, 'name' => 'utf-8'),
        array('value' => 2, 'name' => 'iso-8859-1')
    );

    public function __construct()
    {
    }

    public function postProcess()
    {
    }

    /**
     * method call when ajax request is made with the details row action
     *
     * @see AdminController::postProcess()
     */
    public function ajaxProcess()
    {
    }

    public function _childValidation()
    {
    }

    /**
     * Display all errors
     *
     * @param $e : array of errors
     */
    public function displayError($e)
    {
    }

    /**
     * Display export action link
     *
     * @param $token
     * @param int $id
     * @return string
     * @throws Exception
     * @throws SmartyException
     */
    public function displayExportLink($token, $id)
    {
    }

    public function initProcess()
    {
    }

    public function initContent()
    {
    }

    public function initToolbar()
    {
    }

    public function initPageHeaderToolbar()
    {
    }

    public function renderForm()
    {
    }

    public function renderView()
    {
    }

    /**
     * Genrating a export file
     */
    public function generateExport()
    {
    }

    public function renderList()
    {
    }

    public function renderOptions()
    {
    }
}
