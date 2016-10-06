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
 * This class is currently only here for tests
 *
 * @since 1.5.0
 */
class DbPDO extends Db
{

    /**
     * @see Db::hasTableWithSamePrefix()
     */
    public static function hasTableWithSamePrefix($server, $user, $pwd, $db, $prefix)
    {
    }

    public static function checkCreatePrivilege($server, $user, $pwd, $db, $prefix, $engine)
    {
    }

    /**
     * @see Db::checkConnection()
     */
    public static function tryToConnect($server, $user, $pwd, $db, $newDbLink = true, $engine = null, $timeout = 5)
    {
    }

    /**
     * @see Db::checkEncoding()
     */
    public static function tryUTF8($server, $user, $pwd)
    {
    }

    protected static function _getPDO($host, $user, $password, $dbname, $timeout = 5)
    {
    }

    /**
     * @see Db::connect()
     */
    public function connect()
    {
    }

    /**
     * @see Db::disconnect()
     */
    public function disconnect()
    {
    }

    /**
     * @see Db::nextRow()
     */
    public function nextRow($result = false)
    {
    }

    /**
     * @see Db::Insert_ID()
     */
    public function Insert_ID()
    {
    }

    /**
     * @see Db::Affected_Rows()
     */
    public function Affected_Rows()
    {
    }

    /**
     * @see Db::getMsgError()
     */
    public function getMsgError($query = false)
    {
    }

    /**
     * @see Db::getNumberError()
     */
    public function getNumberError()
    {
    }

    /**
     * @see Db::getVersion()
     */
    public function getVersion()
    {
    }

    /**
     * @see Db::_escape()
     */
    public function _escape($str)
    {
    }

    /**
     * @see Db::set_db()
     */
    public function set_db($db_name)
    {
    }

    /**
     * @see Db::_query()
     */
    protected function _query($sql)
    {
    }

    /**
     * @see Db::_numRows()
     */
    protected function _numRows($result)
    {
    }
}
