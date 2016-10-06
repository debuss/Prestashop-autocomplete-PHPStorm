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

class RequestSql extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'request_sql',
        'primary' => 'id_request_sql',
        'fields' => array(
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isString', 'required' => true, 'size' => 200),
            'sql' => array('type' => self::TYPE_STRING, 'validate' => 'isString', 'required' => true, 'size' => 1000),
        ),
    );
    public $name;
    public $sql;
    /** @var array : List of params to tested */
    public $tested = array(
        'required' => array('SELECT', 'FROM'),
        'option' => array('WHERE', 'ORDER', 'LIMIT', 'HAVING', 'GROUP', 'UNION'),
        'operator' => array(
            'AND', '&&', 'BETWEEN', 'AND', 'BINARY', '&', '~', '|', '^', 'CASE', 'WHEN', 'END', 'DIV', '/', '<=>', '=', '>=',
            '>', 'IS', 'NOT', 'NULL', '<<', '<=', '<', 'LIKE', '-', '%', '!=', '<>', 'REGEXP', '!', '||', 'OR', '+', '>>', 'RLIKE', 'SOUNDS', '*',
            '-', 'XOR', 'IN'
        ),
        'function' => array(
            'AVG', 'SUM', 'COUNT', 'MIN', 'MAX', 'STDDEV', 'STDDEV_SAMP', 'STDDEV_POP', 'VARIANCE', 'VAR_SAMP', 'VAR_POP',
            'GROUP_CONCAT', 'BIT_AND', 'BIT_OR', 'BIT_XOR'
        ),
        'unauthorized' => array(
            'DELETE', 'ALTER', 'INSERT', 'REPLACE', 'CREATE', 'TRUNCATE', 'OPTIMIZE', 'GRANT', 'REVOKE', 'SHOW', 'HANDLER',
            'LOAD', 'ROLLBACK', 'SAVEPOINT', 'UNLOCK', 'INSTALL', 'UNINSTALL', 'ANALZYE', 'BACKUP', 'CHECK', 'CHECKSUM', 'REPAIR', 'RESTORE', 'CACHE',
            'DESCRIBE', 'EXPLAIN', 'USE', 'HELP', 'SET', 'DUPLICATE', 'VALUES', 'INTO', 'RENAME', 'CALL', 'PROCEDURE', 'FUNCTION', 'DATABASE', 'SERVER',
            'LOGFILE', 'DEFINER', 'RETURNS', 'EVENT', 'TABLESPACE', 'VIEW', 'TRIGGER', 'DATA', 'DO', 'PASSWORD', 'USER', 'PLUGIN', 'FLUSH', 'KILL',
            'RESET', 'START', 'STOP', 'PURGE', 'EXECUTE', 'PREPARE', 'DEALLOCATE', 'LOCK', 'USING', 'DROP', 'FOR', 'UPDATE', 'BEGIN', 'BY', 'ALL', 'SHARE',
            'MODE', 'TO', 'KEY', 'DISTINCTROW', 'DISTINCT', 'HIGH_PRIORITY', 'LOW_PRIORITY', 'DELAYED', 'IGNORE', 'FORCE', 'STRAIGHT_JOIN',
            'SQL_SMALL_RESULT', 'SQL_BIG_RESULT', 'QUICK', 'SQL_BUFFER_RESULT', 'SQL_CACHE', 'SQL_NO_CACHE', 'SQL_CALC_FOUND_ROWS', 'WITH'
        )
    );
    public $attributes = array(
        'passwd' => '*******************',
        'secure_key' => '*******************'
    );
    /** @var array : list of errors */
    public $error_sql = array();

    /**
     * Get list of request SQL
     *
     * @static
     * @return array|bool
     */
    public static function getRequestSql()
    {
    }

    /**
     * Get list of request SQL by id request
     *
     * @static
     * @param $id
     * @return array
     */
    public static function getRequestSqlById($id)
    {
    }

    /**
     * Call the parserSQL() method in Tools class
     * Cut the request in table for check it
     *
     * @param $sql
     * @return bool
     */
    public function parsingSql($sql)
    {
    }

    /**
     * Check if the parsing of the SQL request is good or not
     *
     * @param $tab
     * @param bool $in
     * @param $sql
     * @return bool
     */
    public function validateParser($tab, $in = false, $sql)
    {
    }

    /**
     * Cut the request for check each cutting
     *
     * @param $tab
     * @param $in
     * @param $sql
     * @return bool
     */
    public function validateSql($tab, $in, $sql)
    {
    }

    /**
     * Check if all required sentence existing
     *
     * @param $tab
     * @return bool
     */
    public function testedRequired($tab)
    {
    }

    /**
     * Check if an unauthorized existing in an array
     *
     * @param $tab
     * @return bool
     */
    public function testedUnauthorized($tab)
    {
    }

    /**
     * Check a "FROM" sentence
     *
     * @param $from
     * @return bool
     */
    public function checkedFrom($from)
    {
    }

    /**
     * Get list of all tables
     *
     * @return array
     */
    public function getTables()
    {
    }

    /**
     * Cut an join sentence
     *
     * @param $attrs
     * @param $from
     * @return array|bool
     */
    public function cutJoin($attrs, $from)
    {
    }

    /**
     * Cut an attribute with or without the alias
     *
     * @param $attr
     * @param $from
     * @return array|bool
     */
    public function cutAttribute($attr, $from)
    {
    }

    /**
     * Get name of table by alias
     *
     * @param bool $alias
     * @param $tables
     * @return array|bool
     */
    public function returnNameTable($alias = false, $tables)
    {
    }

    /**
     * Check if an attributes existe in an table
     *
     * @param $attr
     * @param $table
     * @return bool
     */
    public function attributExistInTable($attr, $table)
    {
    }

    /**
     * Get list of all attributes by an table
     *
     * @param $table
     * @return array
     */
    public function getAttributesByTable($table)
    {
    }

    /**
     * Check a "SELECT" sentence
     *
     * @param $select
     * @param $from
     * @param bool $in
     * @return bool
     */
    public function checkedSelect($select, $from, $in = false)
    {
    }

    /**
     * Check a "WHERE" sentence
     *
     * @param $where
     * @param $from
     * @param $sql
     * @return bool
     */
    public function checkedWhere($where, $from, $sql)
    {
    }

    /**
     * Check a "HAVING" sentence
     *
     * @param $having
     * @param $from
     * @return bool
     */
    public function checkedHaving($having, $from)
    {
    }

    /**
     * Check a "ORDER" sentence
     *
     * @param $order
     * @param $from
     * @return bool
     */
    public function checkedOrder($order, $from)
    {
    }

    /**
     * Check a "GROUP BY" sentence
     *
     * @param $group
     * @param $from
     * @return bool
     */
    public function checkedGroupBy($group, $from)
    {
    }

    /**
     * Check a "LIMIT" sentence
     *
     * @param $limit
     * @return bool
     */
    public function checkedLimit($limit)
    {
    }
}

