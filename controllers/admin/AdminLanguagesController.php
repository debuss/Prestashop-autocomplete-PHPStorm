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
 * @property Language $object
 */
class AdminLanguagesController extends AdminController
{

    public function __construct()
    {
    }

    public function initPageHeaderToolbar()
    {
    }

    public function renderList()
    {
    }

    public function renderForm()
    {
    }

    public function processDelete()
    {
    }

    public function processStatus()
    {
    }

    public function processAdd()
    {
    }

    /**
     * Copy a no-product image
     *
     * @param string $language Language iso_code for no_picture image filename
     * @return void|false
     */
    public function copyNoPictureImage($language)
    {
    }

    public function processUpdate()
    {
    }

    public function ajaxProcessCheckLangPack()
    {
    }

    protected function checkDeletion($object)
    {
    }

    /**
     * deleteNoPictureImages will delete all default image created for the language id_language
     *
     * @param string $id_language
     * @return bool true if no error
     */
    protected function deleteNoPictureImages($id_language)
    {
    }

    protected function checkDisableStatus($object)
    {
    }

    protected function checkEmployeeIdLang($current_id_lang)
    {
    }

    protected function processBulkDelete()
    {
    }

    protected function processBulkDisableSelection()
    {
    }

    /**
     * @param Language $object
     * @param string $table
     */
    protected function copyFromPost(&$object, $table)
    {
    }

    protected function afterImageUpload()
    {
    }
}
