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

class Cookie
{

    /** @var array Contain cookie content in a key => value format */
    protected $_content;
    /** @var array Crypted cookie name for setcookie() */
    protected $_name;
    /** @var array expiration date for setcookie() */
    protected $_expire;
    /** @var array Website domain for setcookie() */
    protected $_domain;
    /** @var array Path for setcookie() */
    protected $_path;
    /** @var array cipher tool instance */
    protected $_cipherTool;
    /** @var array cipher tool initialization key */
    protected $_key;
    /** @var array cipher tool initilization vector */
    protected $_iv;
    protected $_modified = false;
    protected $_allow_writing;

    /**
     * Get data if the cookie exists and else initialize an new one
     *
     * @param string $name Name of cookie before encrypting
     * @param $path
     */
    public function __construct($name, $path = '', $expire = null, $shared_urls = null)
    {
    }

    /**
     * Get cookie content
     */
    public function update($nullValues = false)
    {
    }

    /**
     * Delete cookie
     * As of version 1.5 don't call this function, use Customer::logout() or Employee::logout() instead;
     */
    public function logout()
    {
    }

    public function disallowWriting()
    {
    }

    /**
     * Set expiration date
     *
     * @param integer $expire Expiration time from now
     */
    public function setExpire($expire)
    {
    }

    /**
     * Magic method wich return cookie data from _content array
     *
     * @param $key key wanted
     * @return string value corresponding to the key
     */
    public function __get($key)
    {
    }

    /**
     * Magic method wich add data into _content array
     *
     * @param $key key desired
     * @param $value value corresponding to the key
     */
    public function __set($key, $value)
    {
    }

    /**
     * Magic method which check if key exists in the cookie
     *
     * @param $key key wanted
     * @return boolean key existence
     */
    public function __isset($key)
    {
    }

    /**
     * Magic method wich delete data into _content array
     *
     * @param $key key wanted
     */
    public function __unset($key)
    {
    }

    /**
     * Check customer informations saved into cookie and return customer validity
     *
     * @deprecated as of version 1.5 use Customer::isLogged() instead
     * @return boolean customer validity
     */
    public function isLogged($withGuest = false)
    {
    }

    /**
     * Check employee informations saved into cookie and return employee validity
     *
     * @deprecated as of version 1.5 use Employee::isLoggedBack() instead
     * @return boolean employee validity
     */
    public function isLoggedBack()
    {
    }

    /**
     * Soft logout, delete everything links to the customer
     * but leave there affiliate's informations.
     * As of version 1.5 don't call this function, use Customer::mylogout() instead;
     */
    public function mylogout()
    {
    }

    public function makeNewLog()
    {
    }

    public function __destruct()
    {
    }

    /**
     * Save cookie with setcookie()
     */
    public function write()
    {
    }

    /**
     *
     */
    public function unsetFamily($origin)
    {
    }

    /**
     * Get a family of variables (e.g. "filter_")
     */
    public function getFamily($origin)
    {
    }

    /**
     * @return String name of cookie
     */
    public function getName()
    {
    }

    /**
     * Check if the cookie exists
     *
     * @since 1.5.0
     * @return bool
     */
    public function exists()
    {
    }

    protected function getDomain($shared_urls = null)
    {
    }

    /**
     * Setcookie according to php version
     */
    protected function _setcookie($cookie = null)
    {
    }
}
