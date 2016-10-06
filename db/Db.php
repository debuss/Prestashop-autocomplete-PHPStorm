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

if (file_exists(dirname(__FILE__).'/../../config/settings.inc.php')) {
    include_once(dirname(__FILE__).'/../../config/settings.inc.php');
}

abstract class Db
{

    /**
     * Constants used by insert() method
     */
    const INSERT = 1;
    const INSERT_IGNORE = 2;
    const REPLACE = 3;
    /**
     * @var array List of DB instance
     */
    protected static $instance = array();
    /**
     * @var array Object instance for singleton
     */
    protected static $_servers = array(
        array('server' => _DB_SERVER_, 'user' => _DB_USER_, 'password' => _DB_PASSWD_, 'database' => _DB_NAME_), /* MySQL Master server */
        // Add here your slave(s) server(s)
        // array('server' => '192.168.0.15', 'user' => 'rep', 'password' => '123456', 'database' => 'rep'),
        // array('server' => '192.168.0.3', 'user' => 'myuser', 'password' => 'mypassword', 'database' => 'mydatabase'),
    );
    /**
     * @var string Server (eg. localhost)
     */
    protected $server;
    /**
     * @var string Database user (eg. root)
     */
    protected $user;
    /**
     * @var string Database password (eg. can be empty !)
     */
    protected $password;
    /**
     * @var string Database name
     */
    protected $database;
    /**
     * @var bool
     */
    protected $is_cache_enabled;
    /**
     * @var mixed Ressource link
     */
    protected $link;
    /**
     * @var mixed SQL cached result
     */
    protected $result;
    /**
     * Store last executed query
     *
     * @var string
     */
    protected $last_query;
    /**
     * Last cached query
     *
     * @var string
     */
    protected $last_cached;

    /**
     * Instantiate database connection
     *
     * @param string $server Server address
     * @param string $user User login
     * @param string $password User password
     * @param string $database Database name
     * @param bool $connect If false, don't connect in constructor (since 1.5.0)
     */
    public function __construct($server, $user, $password, $database, $connect = true)
    {
    }

    /**
     * Try a connection to te database
     *
     * @param string $server Server address
     * @param string $user Login for database connection
     * @param string $pwd Password for database connection
     * @param string $db Database name
     * @param bool $new_db_link
     * @param bool $engine
     * @return int
     */
    public static function checkConnection($server, $user, $pwd, $db, $new_db_link = true, $engine = null, $timeout = 5)
    {
    }

    /**
     * Try a connection to te database
     *
     * @param string $server Server address
     * @param string $user Login for database connection
     * @param string $pwd Password for database connection
     * @return int
     */
    public static function checkEncoding($server, $user, $pwd)
    {
    }

    /**
     * Try a connection to the database and check if at least one table with same prefix exists
     *
     * @param string $server Server address
     * @param string $user Login for database connection
     * @param string $pwd Password for database connection
     * @param string $db Database name
     * @param string $prefix Tables prefix
     * @return bool
     */
    public static function hasTableWithSamePrefix($server, $user, $pwd, $db, $prefix)
    {
    }

    public static function checkCreatePrivilege($server, $user, $pwd, $db, $prefix, $engine)
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function ps($sql, $use_cache = 1)
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function s($sql, $use_cache = true)
    {
    }

    /**
     * Get Db object instance
     *
     * @param bool $master Decides whether the connection to be returned by the master server or the slave server
     * @return Db instance
     */
    public static function getInstance()
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function ds($sql, $use_cache = 1)
    {
    }

    /**
     * Open a connection
     */
    abstract public function connect();

    /**
     * ExecuteS return the result of $sql as array
     *
     * @param string $sql query to execute
     * @param boolean $array return an array instead of a mysql_result object (deprecated since 1.5.0, use query method instead)
     * @param bool $use_cache if query has been already executed, use its result
     * @return array or result object
     */
    public function executeS($sql, $array = true, $use_cache = true)
    {
    }

    /* do not remove, useful for some modules */

    /**
     * Execute a query
     *
     * @param string $sql
     * @param bool $use_cache
     * @return bool
     */
    public function execute($sql, $use_cache = true)
    {
    }

    /**
     * Get the ID generated from the previous INSERT operation
     */
    abstract public function Insert_ID();

    /**
     * Get number of affected rows in previous database operation
     */
    abstract public function Affected_Rows();

    /**
     * Get database version
     *
     * @return string
     */
    abstract public function getVersion();

    abstract public function set_db($db_name);

    /**
     * Close connection to database
     */
    public function __destruct()
    {
    }

    /**
     * Close a connection
     */
    abstract public function disconnect();

    /**
     * Filter SQL query within a blacklist
     *
     * @param string $table Table where insert/update data
     * @param string $values Data to insert/update
     * @param string $type INSERT or UPDATE
     * @param string $where WHERE clause, only for UPDATE (optional)
     * @param int $limit LIMIT clause (optional)
     * @return mixed|boolean SQL query result
     */
    public function autoExecuteWithNullValues($table, $values, $type, $where = '', $limit = 0)
    {
    }

    /**
     * @deprecated 1.5.0 use insert() or update() method instead
     */
    public function autoExecute($table, $data, $type, $where = '', $limit = 0, $use_cache = true, $use_null = false)
    {
    }

    /**
     * Execute an INSERT query
     *
     * @param string $table Table name without prefix
     * @param array $data Data to insert as associative array. If $data is a list of arrays, multiple insert will be done
     * @param bool $null_values If we want to use NULL values instead of empty quotes
     * @param bool $use_cache
     * @param int $type Must be Db::INSERT or Db::INSERT_IGNORE or Db::REPLACE
     * @param bool $add_prefix Add or not _DB_PREFIX_ before table name
     * @return bool
     */
    public function insert($table, $data, $null_values = false, $use_cache = true, $type = Db::INSERT, $add_prefix = true)
    {
    }

    /**
     * Execute a query and get result ressource
     *
     * @param string $sql
     * @return mixed
     */
    public function query($sql)
    {
    }

    /**
     * Display last SQL error
     *
     * @param bool $sql
     */
    public function displayError($sql = false)
    {
    }

    /**
     * Returns the number of the error from previous database operation
     */
    abstract public function getNumberError();

    /**
     * Returns the text of the error message from previous database operation
     */
    abstract public function getMsgError();

    /**
     * @param string $table Table name without prefix
     * @param array $data Data to insert as associative array. If $data is a list of arrays, multiple insert will be done
     * @param string $where WHERE condition
     * @param int $limit
     * @param bool $null_values If we want to use NULL values instead of empty quotes
     * @param bool $use_cache
     * @param bool $add_prefix Add or not _DB_PREFIX_ before table name
     * @return bool
     */
    public function update($table, $data, $where = '', $limit = 0, $null_values = false, $use_cache = true, $add_prefix = true)
    {
    }

    /**
     * Execute a DELETE query
     *
     * @param string $table Name of the table to delete
     * @param string $where WHERE clause on query
     * @param int $limit Number max of rows to delete
     * @param bool $use_cache Use cache or not
     * @param bool $add_prefix Add or not _DB_PREFIX_ before table name
     * @return bool
     */
    public function delete($table, $where = '', $limit = 0, $use_cache = true, $add_prefix = true)
    {
    }

    /**
     * getValue return the first item of a select query.
     *
     * @param mixed $sql
     * @param bool $use_cache
     * @return mixed
     */
    public function getValue($sql, $use_cache = true)
    {
    }

    /**
     * getRow return an associative array containing the first row of the query
     * This function automatically add "limit 1" to the query
     *
     * @param mixed $sql the select query (without "LIMIT 1")
     * @param bool $use_cache find it in cache first
     * @return array associative array of (field=>value)
     */
    public function getRow($sql, $use_cache = true)
    {
    }

    /**
     * Get next row for a query which doesn't return an array
     *
     * @param mixed $result
     */
    abstract public function nextRow($result = false);

    /**
     * Get number of rows for last result
     *
     * @return int
     */
    public function numRows()
    {
    }

    /**
     * Sanitize data which will be injected into SQL query
     *
     * @param string $string SQL data which will be injected into SQL query
     * @param boolean $html_ok Does data contain HTML code ? (optional)
     * @return string Sanitized data
     */
    public function escape($string, $html_ok = false)
    {
    }

    /**
     * Protect string against SQL injections
     *
     * @param string $str
     * @return string
     */
    abstract public function _escape($str);

    /**
     * Execute a query
     *
     * @param string $sql
     * @param bool $use_cache
     * @return mixed $result
     */
    protected function q($sql, $use_cache = true)
    {
    }

    /**
     * Execute a query and get result resource
     *
     * @param string $sql
     * @return mixed
     */
    abstract protected function _query($sql);

    /**
     * Get number of rows in a result
     *
     * @param mixed $result
     */
    abstract protected function _numRows($result);
}
