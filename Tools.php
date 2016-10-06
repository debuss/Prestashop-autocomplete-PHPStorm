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

class Tools
{

    public static $a = 0;
    protected static $file_exists_cache = array();
    protected static $_forceCompile;
    protected static $_caching;
    protected static $_cache_nb_media_servers = null;

    /**
     * Random password generator
     *
     * @param integer $length Desired length (optional)
     * @param string $flag Output type (NUMERIC, ALPHANUMERIC, NO_NUMERIC)
     * @return string Password
     */
    public static function passwdGen($length = 8, $flag = 'ALPHANUMERIC')
    {
    }

    public static function substr($str, $start, $length = false, $encoding = 'utf-8')
    {
    }

    public static function strlen($str, $encoding = 'UTF-8')
    {
    }

    public static function copy($source, $destination, $stream_context = null)
    {
    }

    public static function file_get_contents($url, $use_include_path = false, $stream_context = null, $curl_timeout = 5)
    {
    }

    public static function strtolower($str)
    {
    }

    /**
     * Redirect user to another page
     *
     * @param string $url Desired URL
     * @param string $baseUri Base URI (optional)
     * @param Link $link
     * @param string|array $headers A list of headers to send before redirection
     */
    public static function redirect($url, $base_uri = __PS_BASE_URI__, Link $link = null, $headers = null)
    {
    }

    public static function strReplaceFirst($search, $replace, $subject, $cur = 0)
    {
    }

    /**
     * Redirect URLs already containing PS_BASE_URI
     *
     * @param string $url Desired URL
     */
    public static function redirectLink($url)
    {
    }

    /**
     * Redirect user to another admin page
     *
     * @param string $url Desired URL
     */
    public static function redirectAdmin($url)
    {
    }

    /**
     * getShopProtocol return the available protocol for the current shop in use
     * SSL if Configuration is set on and available for the server
     *
     * @static
     * @return String
     */
    public static function getShopProtocol()
    {
    }

    /**
     * getProtocol return the set protocol according to configuration (http[s])
     *
     * @param bool $use_ssl true if require ssl
     * @return String (http|https)
     */
    public static function getProtocol($use_ssl = null)
    {
    }

    /**
     * getShopDomainSsl returns domain name according to configuration and depending on ssl activation
     *
     * @param boolean $http if true, return domain name with protocol
     * @param boolean $entities if true,
     * @return string domain
     */
    public static function getShopDomainSsl($http = false, $entities = false)
    {
    }

    /**
     * getHttpHost return the <b>current</b> host used, with the protocol (http or https) if $http is true
     * This function should not be used to choose http or https domain name.
     * Use Tools::getShopDomain() or Tools::getShopDomainSsl instead
     *
     * @param boolean $http
     * @param boolean $entities
     * @return string host
     */
    public static function getHttpHost($http = false, $entities = false, $ignore_port = false)
    {
    }

    /**
     * Get the server variable REMOTE_ADDR, or the first ip of HTTP_X_FORWARDED_FOR (when using proxy)
     *
     * @return string $remote_addr ip of client
     */
    public static function getRemoteAddr()
    {
    }

    /**
     * Secure an URL referrer
     *
     * @param string $referrer URL referrer
     * @return string secured referrer
     */
    public static function secureReferrer($referrer)
    {
    }

    /**
     * Get the server variable SERVER_NAME
     *
     * @return string server name
     */
    public static function getServerName()
    {
    }

    public static function getIsset($key)
    {
    }

    /**
     * Change language in cookie while clicking on a flag
     *
     * @return string iso code
     */
    public static function setCookieLanguage($cookie = null)
    {
    }

    /**
     * Set cookie id_lang
     */
    public static function switchLanguage(Context $context = null)
    {
    }

    /**
     * Get a value from $_POST / $_GET
     * if unavailable, take a default value
     *
     * @param string $key Value key
     * @param mixed $default_value (optional)
     * @return mixed Value
     */
    public static function getValue($key, $default_value = false)
    {
    }

    /**
     * Set cookie currency from POST or default currency
     *
     * @return Currency object
     */
    public static function setCurrency($cookie)
    {
    }

    /**
     * Check if submit has been posted
     *
     * @param string $submit submit name
     */
    public static function isSubmit($submit)
    {
    }

    public static function displayPriceSmarty($params, &$smarty)
    {
    }

    /**
     * Return price with currency sign for a given product
     *
     * @param float $price Product price
     * @param object $currency Current currency (object, id_currency, NULL => context currency)
     * @return string Price correctly formated (sign, decimal separator...)
     */
    public static function displayPrice($price, $currency = null, $no_utf8 = false, Context $context = null)
    {
    }

    /**
     * returns the rounded value of $value to specified precision, according to your configuration;
     *
     * @note : PHP 5.3.0 introduce a 3rd parameter mode in round function
     * @param float $value
     * @param int $precision
     * @return float
     */
    public static function ps_round($value, $precision = 0)
    {
    }

    /**
     * returns the rounded value down of $value to specified precision
     *
     * @param float $value
     * @param int $precision
     * @return float
     */
    public static function ceilf($value, $precision = 0)
    {
    }

    /**
     * returns the rounded value up of $value to specified precision
     *
     * @param float $value
     * @param int $precision
     * @return float
     */
    public static function floorf($value, $precision = 0)
    {
    }

    /**
     * Return price converted
     *
     * @param float $price Product price
     * @param object $currency Current currency object
     * @param boolean $to_currency convert to currency or from currency to default currency
     */
    public static function convertPrice($price, $currency = null, $to_currency = true, Context $context = null)
    {
    }

    /**
     * Convert amount from a currency to an other currency automatically
     *
     * @param float $amount
     * @param Currency $currency_from if null we used the default currency
     * @param Currency $currency_to if null we used the default currency
     */
    public static function convertPriceFull($amount, Currency $currency_from = null, Currency $currency_to = null)
    {
    }

    /**
     * Display date regarding to language preferences
     *
     * @param array $params Date, format...
     * @param object $smarty Smarty object for language preferences
     * @return string Date
     */
    public static function dateFormat($params, &$smarty)
    {
    }

    /**
     * Display date regarding to language preferences
     *
     * @param string $date Date to display format UNIX
     * @param integer $id_lang Language id
     * @param boolean $full With time or not (optional)
     * @param string $separator DEPRECATED
     * @return string Date
     */
    public static function displayDate($date, $id_lang, $full = false, $separator = '-')
    {
    }

    public static function htmlentitiesDecodeUTF8($string)
    {
    }

    public static function safePostVars()
    {
    }

    /**
     * Delete directory and subdirectories
     *
     * @param string $dirname Directory name
     */
    public static function deleteDirectory($dirname, $delete_self = true)
    {
    }

    /**
     * Display a var dump in firebug console
     *
     * @param object $object Object to display
     */
    public static function fd($object, $type = 'log')
    {
    }

    /**
     * ALIAS OF dieObject() - Display an error with detailed object
     *
     * @param object $object Object to display
     */
    public static function d($object, $kill = true)
    {
    }

    /**
     * Display an error with detailed object
     *
     * @param mixed $object
     * @param boolean $kill
     * @return $object if $kill = false;
     */
    public static function dieObject($object, $kill = true)
    {
    }

    /**
     * ALIAS OF dieObject() - Display an error with detailed object but don't stop the execution
     *
     * @param object $object Object to display
     */
    public static function p($object)
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function getMetaTags($id_lang, $page_name, $title = '')
    {
    }

    /**
     * Display a warning message indicating that the method is deprecated
     */
    public static function displayAsDeprecated($message = null)
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function getHomeMetaTags($id_lang, $page_name)
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function completeMetaTags($meta_tags, $default_value, Context $context = null)
    {
    }

    /**
     * Get token to prevent CSRF
     *
     * @param string $token token to encrypt
     */
    public static function getToken($page = true, Context $context = null)
    {
    }

    /**
     * Encrypt password
     *
     * @param string $passwd String to encrypt
     */
    public static function encrypt($passwd)
    {
    }

    public static function getAdminTokenLite($tab, Context $context = null)
    {
    }

    /**
     * Tokenize a string
     *
     * @param string $string string to encript
     */
    public static function getAdminToken($string)
    {
    }

    public static function getAdminTokenLiteSmarty($params, &$smarty)
    {
    }

    /**
     * @param string [optionnal] $type_cat defined what type of categories is used (products or cms)
     */
    public static function getFullPath($id_category, $end, $type_cat = 'products', Context $context = null)
    {
    }

    /**
     * Truncate strings
     *
     * @param string $str
     * @param integer $max_length Max length
     * @param string $suffix Suffix optional
     * @return string $str truncated
     */
    /* CAUTION : Use it only on module hookEvents.
    ** For other purposes use the smarty function instead */

    /**
     * Get the user's journey
     *
     * @param integer $id_category Category ID
     * @param string $path Path end
     * @param boolean $linkOntheLastItem Put or not a link on the current category
     * @param string [optionnal] $categoryType defined what type of categories is used (products or cms)
     */
    public static function getPath($id_category, $path = '', $link_on_the_item = false, $category_type = 'products', Context $context = null)
    {
    }

    /**
     * Sanitize a string
     *
     * @param string $string String to sanitize
     * @param boolean $full String contains HTML or not (optional)
     * @return string Sanitized string
     */
    public static function safeOutput($string, $html = false)
    {
    }

    public static function htmlentitiesUTF8($string, $type = ENT_QUOTES)
    {
    }

    /**
     * Display an error according to an error code
     *
     * @param string $string Error message
     * @param boolean $htmlentities By default at true for parsing error message with htmlentities
     */
    public static function displayError($string = 'Fatal error', $htmlentities = true, Context $context = null)
    {
    }

    /**
     * Return the friendly url from the provided string
     *
     * @param string $str
     * @param bool $utf8_decode => needs to be marked as deprecated
     * @return string
     */
    public static function link_rewrite($str, $utf8_decode = false)
    {
    }

    /**
     * Return a friendly url made from the provided string
     * If the mbstring library is available, the output is the same as the js function of the same name
     *
     * @param string $str
     * @return string
     */
    public static function str2url($str)
    {
    }

    /**
     * Replace all accented chars by their equivalent non accented chars.
     *
     * @param string $str
     * @return string
     */
    public static function replaceAccentedChars($str)
    {
    }

    public static function truncate($str, $max_length, $suffix = '...')
    {
    }

    /**
     * Generate date form
     *
     * @param integer $year Year to select
     * @param integer $month Month to select
     * @param integer $day Day to select
     * @return array $tab html data with 3 cells :['days'], ['months'], ['years']
     */
    public static function dateYears()
    {
    }

    public static function dateDays()
    {
    }

    public static function dateMonths()
    {
    }

    public static function dateFrom($date)
    {
    }

    public static function hourGenerate($hours, $minutes, $seconds)
    {
    }

    public static function dateTo($date)
    {
    }

    public static function stripslashes($string)
    {
    }

    public static function ucfirst($str)
    {
    }

    public static function strtoupper($str)
    {
    }

    public static function orderbyPrice(&$array, $order_way)
    {
    }

    public static function iconv($from, $to, $string)
    {
    }

    public static function isEmpty($field)
    {
    }

    /**
     * file_exists() wrapper with cache to speedup performance
     *
     * @param string $filename File name
     * @return boolean Cached result of file_exists($filename)
     */
    public static function file_exists_cache($filename)
    {
    }

    public static function simplexml_load_file($url, $class_name = null)
    {
    }

    /**
     * @deprecated as of 1.5 use Media::minifyHTML()
     */
    public static function minifyHTML($html_content)
    {
    }

    /**
     * Translates a string with underscores into camel case (e.g. first_name -> firstName)
     *
     * @prototype string public static function toCamelCase(string $str[, bool $catapitalise_first_char = false])
     */
    public static function toCamelCase($str, $catapitalise_first_char = false)
    {
    }

    /**
     * Transform a CamelCase string to underscore_case string
     *
     * @param string $string
     * @return string
     */
    public static function toUnderscoreCase($string)
    {
    }

    public static function getBrightness($hex)
    {
    }

    /**
     * @deprecated as of 1.5 use Media::minifyHTMLpregCallback()
     */
    public static function minifyHTMLpregCallback($preg_matches)
    {
    }

    /**
     * @deprecated as of 1.5 use Media::packJSinHTML()
     */
    public static function packJSinHTML($html_content)
    {
    }

    /**
     * @deprecated as of 1.5 use Media::packJSinHTMLpregCallback()
     */
    public static function packJSinHTMLpregCallback($preg_matches)
    {
    }

    /**
     * @deprecated as of 1.5 use Media::packJS()
     */
    public static function packJS($js_content)
    {
    }

    public static function parserSQL($sql)
    {
    }

    /**
     * @deprecated as of 1.5 use Media::minifyCSS()
     */
    public static function minifyCSS($css_content, $fileuri = false)
    {
    }

    public static function replaceByAbsoluteURL($matches)
    {
    }

    /**
     * Get the current url prefix protocol (https/http)
     *
     * @return string protocol
     */
    public static function getCurrentUrlProtocolPrefix()
    {
    }

    /**
     * Check if the current page use SSL connection on not
     *
     * @return bool uses SSL
     */
    public static function usingSecureMode()
    {
    }

    public static function getMediaServer($filename)
    {
    }

    /**
     * addJS load a javascript file in the header
     *
     * @deprecated as of 1.5 use FrontController->addJS()
     * @param mixed $js_uri
     * @return void
     */
    public static function addJS($js_uri)
    {
    }

    /**
     * @deprecated as of 1.5 use FrontController->addCSS()
     */
    public static function addCSS($css_uri, $css_media_type = 'all')
    {
    }

    /**
     * @deprecated as of 1.5 use Media::cccCss()
     */
    public static function cccCss($css_files)
    {
    }

    /**
     * @deprecated as of 1.5 use Media::cccJS()
     */
    public static function cccJS($js_files)
    {
    }

    public static function generateHtaccess($path = null, $rewrite_settings = null, $cache_control = null, $specific = '', $disable_multiviews = null, $medias = false, $disable_modsec = null)
    {
    }

    public static function getDefaultIndexContent()
    {
    }

    /**
     * jsonDecode convert json string to php array / object
     *
     * @param string $json
     * @param boolean $assoc (since 1.4.2.4) if true, convert to associativ array
     * @return array
     */
    public static function jsonDecode($json, $assoc = false)
    {
    }

    /**
     * Convert an array to json string
     *
     * @param array $data
     * @return string json
     */
    public static function jsonEncode($data)
    {
    }

    /**
     * Display a warning message indicating that the parameter is deprecated
     */
    public static function displayParameterAsDeprecated($parameter)
    {
    }

    public static function displayFileAsDeprecated()
    {
    }

    public static function enableCache($level = 1, Context $context = null)
    {
    }

    public static function restoreCacheSettings(Context $context = null)
    {
    }

    public static function isCallable($function)
    {
    }

    public static function pRegexp($s, $delim)
    {
    }

    public static function str_replace_once($needle, $replace, $haystack)
    {
    }

    /**
     * Function property_exists does not exist in PHP < 5.1
     *
     * @deprecated since 1.5.0 (PHP 5.1 required, so property_exists() is now natively supported)
     * @param object or class $class
     * @param string $property
     * @return boolean
     */
    public static function property_exists($class, $property)
    {
    }

    /**
     * @desc identify the version of php
     * @return string
     */
    public static function checkPhpVersion()
    {
    }

    /**
     * @desc try to open a zip file in order to check if it's valid
     * @return bool success
     */
    public static function ZipTest($from_file)
    {
    }

    public static function getSafeModeStatus()
    {
    }

    /**
     * @desc extract a zip file to the given directory
     * @return bool success
     */
    public static function ZipExtract($from_file, $to_dir)
    {
    }

    /**
     * Get products order field name for queries.
     *
     * @param string $type by|way
     * @param string $value If no index given, use default order from admin -> pref -> products
     * @param bool|\bool(false)|string $prefix
     * @return string Order by sql clause
     */
    public static function getProductsOrder($type, $value = null, $prefix = false)
    {
    }

    public static function display404Error()
    {
    }

    /**
     * Concat $begin and $end, add ? or & between strings
     *
     * @since 1.5.0
     * @param string $begin
     * @param string $end
     * @return string
     */
    public static function url($begin, $end)
    {
    }

    /**
     * Display error and dies or silently log the error.
     *
     * @param string $msg
     * @param bool $die
     * @return bool success of logging
     */
    public static function dieOrLog($msg, $die = true)
    {
    }

    /**
     * Convert \n and \r\n and \r to <br />
     *
     * @param string $string String to transform
     * @return string New string
     */
    public static function nl2br($str)
    {
    }

    /**
     * Clear cache for Smarty
     *
     * @param Smarty $smarty
     */
    public static function clearCache($smarty = null, $tpl = false, $cache_id = null, $compile_id = null)
    {
    }

    /**
     * getMemoryLimit allow to get the memory limit in octet
     *
     * @since 1.4.5.0
     * @return int the memory limit value in octet
     */
    public static function getMemoryLimit()
    {
    }

    /**
     * getOctet allow to gets the value of a configuration option in octet
     *
     * @since 1.5.0
     * @return int the value of a configuration option in octet
     */
    public static function getOctets($option)
    {
    }

    /**
     * @return bool true if the server use 64bit arch
     */
    public static function isX86_64arch()
    {
    }

    /**
     * Get max file upload size considering server settings and optional max value
     *
     * @param int $max_size optional max file size
     * @return int max file size in bytes
     */
    public static function getMaxUploadSize($max_size = 0)
    {
    }

    /**
     * Convert a shorthand byte value from a PHP configuration directive to an integer value
     *
     * @param string $value value to convert
     * @return int
     */
    public static function convertBytes($value)
    {
    }

    /**
     * @params string $path Path to scan
     * @params string $ext Extention to filter files
     * @params string $dir Add this to prefix output for example /path/dir/*
     * @return array List of file found
     * @since 1.5.0
     */
    public static function scandir($path, $ext = 'php', $dir = '', $recursive = false)
    {
    }

    /**
     * Align version sent and use internal function
     *
     * @static
     * @param $v1
     * @param $v2
     * @param string $operator
     * @return mixed
     */
    public static function version_compare($v1, $v2, $operator = '<')
    {
    }

    /**
     * Align 2 version with the same number of sub version
     * version_compare will work better for its comparison :)
     * (Means: '1.8' to '1.9.3' will change '1.8' to '1.8.0')
     *
     * @static
     * @param $v1
     * @param $v2
     */
    public static function alignVersionNumber(&$v1, &$v2)
    {
    }

    public static function modRewriteActive()
    {
    }

    /**
     * apacheModExists return true if the apache module $name is loaded
     *
     * @TODO move this method in class Information (when it will exist)
     * Notes: This method requires either apache_get_modules or phpinfo()
     * to be available. With CGI mod, we cannot get php modules
     * @param string $name module name
     * @return boolean true if exists
     * @since 1.4.5.0
     */
    public static function apacheModExists($name)
    {
    }

    public static function unSerialize($serialized, $object = false)
    {
    }

    /**
     * Reproduce array_unique working before php version 5.2.9
     *
     * @param array $array
     * @return array
     */
    public static function arrayUnique($array)
    {
    }

    /**
     * Delete unicode class from regular expression patterns
     *
     * @param string $pattern
     * @return pattern
     */
    public static function cleanNonUnicodeSupport($pattern)
    {
    }

    public static function addonsRequest($request, $params = array())
    {
    }

    /**
     * getShopDomain returns domain name according to configuration and ignoring ssl
     *
     * @param boolean $http if true, return domain name with protocol
     * @param boolean $entities if true,
     * @return string domain
     */
    public static function getShopDomain($http = false, $entities = false)
    {
    }

    protected static function throwDeprecated($error, $message, $class)
    {
    }
}

/**
 * Compare 2 prices to sort products
 *
 * @param float $a
 * @param float $b
 * @return integer
 */
/* Externalized because of a bug in PHP 5.1.6 when inside an object */
function cmpPriceAsc($a, $b)
{
    if ((float)$a['price_tmp'] < (float)$b['price_tmp']) {
        return (-1);
    } elseif ((float)$a['price_tmp'] > (float)$b['price_tmp']) {
        return (1);
    }

    return 0;
}

function cmpPriceDesc($a, $b)
{
    if ((float)$a['price_tmp'] < (float)$b['price_tmp']) {
        return 1;
    } elseif ((float)$a['price_tmp'] > (float)$b['price_tmp']) {
        return -1;
    }

    return 0;
}