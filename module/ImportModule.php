<?php
/*
* 2007-2013 PrestaShop
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
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

/**
 * ImportModule class, ImportModule.php
 * Import module management
 *
 * @category classes
 */
abstract class ImportModule extends Module
{

    public $server;
    public $user;
    public $passwd;
    public $database;
    /** @var string Prefix database */
    public $prefix;
    protected $_link = null;

    public static function getImportModulesOnDisk()
    {
    }

    public function __destruct()
    {
    }

    public function Execute($query)
    {
    }

    public function getValue($query)
    {
    }

    public function ExecuteS($query)
    {
    }

    abstract public function getDefaultIdLang();

    protected function initDatabaseConnection()
    {
    }
}

?>
