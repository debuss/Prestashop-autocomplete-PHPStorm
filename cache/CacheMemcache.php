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

/**
 * This class require PECL Memcache extension
 */
class CacheMemcache extends Cache
{

    /**
     * @var Memcache
     */
    protected $memcache;
    /**
     * @var bool Connection status
     */
    protected $is_connected = false;

    public function __construct()
    {
    }

    /**
     * Get list of memcached servers
     *
     * @return array
     */
    public static function getMemcachedServers()
    {
    }

    /**
     * Add a memcache server
     *
     * @param string $ip
     * @param int $port
     * @param int $weight
     */
    public static function addServer($ip, $port, $weight)
    {
    }

    /**
     * Delete a memcache server
     *
     * @param int $id_server
     */
    public static function deleteServer($id_server)
    {
    }

    /**
     * Connect to memcache server
     */
    public function connect()
    {
    }

    public function __destruct()
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
     * Retrieve a data from cache
     *
     * @param string $key
     * @return mixed
     */
    public function get($key)
    {
    }

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
     * Delete one or several data from cache (* joker can be used, but avoid it !)
     *    E.g.: delete('*'); delete('my_prefix_*'); delete('my_key_name');
     *
     * @param string $key
     * @return bool
     */
    public function delete($key)
    {
    }

    /**
     * @see Cache::flush()
     */
    public function flush()
    {
    }

    /**
     * Close connection to memcache server
     *
     * @return bool
     */
    protected function close()
    {
    }

    /**
     * @see Cache::_set()
     */
    protected function _set($key, $value, $ttl = 0)
    {
    }

    /**
     * @see Cache::_get()
     */
    protected function _get($key)
    {
    }

    /**
     * @see Cache::_exists()
     */
    protected function _exists($key)
    {
    }

    /**
     * @see Cache::_delete()
     */
    protected function _delete($key)
    {
    }

    /**
     * @see Cache::_writeKeys()
     */
    protected function _writeKeys()
    {
    }
}
