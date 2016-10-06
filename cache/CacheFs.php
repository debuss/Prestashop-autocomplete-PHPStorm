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

class CacheFs extends Cache
{

    /**
     * @var int Number of subfolders to dispatch cached filenames
     */
    protected $depth;

    protected function __construct()
    {
    }

    /**
     * Delete cache directory
     */
    public static function deleteCacheDirectory()
    {
    }

    /**
     * Create cache directory
     *
     * @param int $level_depth
     * @param string $directory
     */
    public static function createCacheDirectories($level_depth, $directory = false)
    {
    }

    /**
     * @see Cache::flush()
     */
    public function flush()
    {
    }

    /**
     * Transform a key into its absolute path
     *
     * @param string $key
     * @return string
     */
    protected function getFilename($key)
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
     * @see Cache::_writeKeys()
     */
    protected function _writeKeys()
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
}
