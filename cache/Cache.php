<?php

/*
* 2007-2016 PrestaShop
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
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

abstract class Cache
{

    /**
     * Name of keys index
     */
    const KEYS_NAME = '__keys__';
    /**
     * Name of SQL cache index
     */
    const SQL_TABLES_NAME = 'tablesCached';
    /**
     * @var Cache
     */
    protected static $instance;
    /**
     * @var array Store local cache
     */
    protected static $local = array();
    /**
     * @var array List all keys of cached data and their associated ttl
     */
    protected $keys = array();
    /**
     * @var array Store list of tables and their associated keys for SQL cache (warning: this var must not be initialized here !)
     */
    protected $sql_tables_cached;
    /**
     * @var array List of blacklisted tables for SQL cache, these tables won't be indexed
     */
    protected $blacklist = array(
        'cart',
        'cart_cart_rule',
        'cart_product',
        'connections',
        'connections_source',
        'connections_page',
        'customer',
        'customer_group',
        'customized_data',
        'guest',
        'pagenotfound',
        'page_viewed',
    );

    /**
     * @return Cache
     */
    public static function getInstance()
    {
    }

    /**
     * Unit testing purpose only
     *
     * @param $test_instance Cache
     */
    public static function setInstanceForTesting($test_instance)
    {
    }

    /**
     * Unit testing purpose only
     */
    public static function deleteTestingInstance()
    {
    }

    public static function store($key, $value)
    {
    }

    public static function retrieve($key)
    {
    }

    public static function retrieveAll()
    {
    }

    public static function isStored($key)
    {
    }

    public static function clean($key)
    {
    }

    /**
     * Clean all cached data
     *
     * @return bool
     */
    abstract public function flush();

    /**
     * Check if a data is cached
     *
     * @param string $key
     * @return bool
     */
    public function exists($key)
    {
    }

    /**
     * Store a query in cache
     *
     * @param string $query
     * @param array $result
     */
    public function setQuery($query, $result)
    {
    }

    /**
     * Retrieve a data from cache
     *
     * @param string $key
     * @return mixed
     */
    public function get($key)
    {
    }

    /**
     * Store a data in cache
     *
     * @param string $key
     * @param mixed $value
     * @param int $ttl
     * @return bool
     */
    public function set($key, $value, $ttl = 0)
    {
    }

    /**
     * Delete one or several data from cache (* joker can be used)
     *    E.g.: delete('*'); delete('my_prefix_*'); delete('my_key_name');
     *
     * @param string $key
     * @return array List of deleted keys
     */
    public function delete($key)
    {
    }

    /**
     * Delete a query from cache
     *
     * @param string $query
     */
    public function deleteQuery($query)
    {
    }

    /**
     * Check if a data is cached by key
     *
     * @param string $key
     * @return bool
     */
    abstract protected function _exists($key);

    /**
     * Check if a query contain blacklisted tables
     *
     * @param string $query
     * @return bool
     */
    protected function isBlacklist($query)
    {
    }

    /**
     * Retrieve a cached data by key
     *
     * @param string $key
     * @return mixed
     */
    abstract protected function _get($key);

    /**
     * Cache a data
     *
     * @param string $key
     * @param mixed $value
     * @param int $ttl
     * @return bool
     */
    abstract protected function _set($key, $value, $ttl = 0);

    /**
     * Write keys index
     */
    abstract protected function _writeKeys();

    protected function getTables($string)
    {
    }

    /**
     * Autoadjust the table cache size to avoid storing too big elements in the cache
     *
     * @param $table
     */
    protected function adjustTableCacheSize($table)
    {
    }

    /**
     * Delete a data from the cache by key
     *
     * @param string $key
     * @return bool
     */
    abstract protected function _delete($key);
}
