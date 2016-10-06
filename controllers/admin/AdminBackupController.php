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

@ini_set('max_execution_time', 0);

/**
 * @property PrestaShopBackup $object
 */
class AdminBackupController extends AdminController
{

    /** @var string The field we are sorting on */
    protected $sort_by = 'date';

    public function __construct()
    {
    }

    public function renderList()
    {
    }

    public function renderView()
    {
    }

    public function initViewDownload()
    {
    }

    public function initToolbar()
    {
    }

    public function initContent()
    {
    }

    public function postProcess()
    {
    }

    public function getList($id_lang, $order_by = null, $order_way = null, $start = 0, $limit = null,
                            $id_lang_shop = null)
    {
    }

    public function intSort($a, $b)
    {
    }

    public function strSort($a, $b)
    {
    }

    /**
     * Load class object using identifier in $_GET (if possible)
     * otherwise return an empty object
     * This method overrides the one in AdminTab because AdminTab assumes the id is a UnsignedInt
     * "Backups" Directory in admin directory must be writeable (CHMOD 777)
     *
     * @param bool $opt Return an empty object if load fail
     * @return object
     */
    protected function loadObject($opt = false)
    {
    }
}
