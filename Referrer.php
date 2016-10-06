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

class Referrer extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'referrer',
        'primary' => 'id_referrer',
        'fields' => array(
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true, 'size' => 64),
            'passwd' => array('type' => self::TYPE_STRING, 'validate' => 'isPasswd', 'size' => 32),
            'http_referer_regexp' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 64),
            'request_uri_regexp' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 64),
            'http_referer_like' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 64),
            'request_uri_like' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 64),
            'http_referer_regexp_not' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml'),
            'request_uri_regexp_not' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml'),
            'http_referer_like_not' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml'),
            'request_uri_like_not' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml'),
            'base_fee' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat'),
            'percent_fee' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPercentage'),
            'click_fee' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat'),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
        ),
    );
    protected static $_join = '(r.http_referer_like IS NULL OR r.http_referer_like = \'\' OR cs.http_referer LIKE r.http_referer_like)
			AND (r.request_uri_like IS NULL OR r.request_uri_like = \'\' OR cs.request_uri LIKE r.request_uri_like)
			AND (r.http_referer_like_not IS NULL OR r.http_referer_like_not = \'\' OR cs.http_referer NOT LIKE r.http_referer_like_not)
			AND (r.request_uri_like_not IS NULL OR r.request_uri_like_not = \'\' OR cs.request_uri NOT LIKE r.request_uri_like_not)
			AND (r.http_referer_regexp IS NULL OR r.http_referer_regexp = \'\' OR cs.http_referer REGEXP r.http_referer_regexp)
			AND (r.request_uri_regexp IS NULL OR r.request_uri_regexp = \'\' OR cs.request_uri REGEXP r.request_uri_regexp)
			AND (r.http_referer_regexp_not IS NULL OR r.http_referer_regexp_not = \'\' OR cs.http_referer NOT REGEXP r.http_referer_regexp_not)
			AND (r.request_uri_regexp_not IS NULL OR r.request_uri_regexp_not = \'\' OR cs.request_uri NOT REGEXP r.request_uri_regexp_not)';
    public $id_shop;
    public $name;
    public $passwd;
    public $http_referer_regexp;
    public $http_referer_like;
    public $request_uri_regexp;
    public $request_uri_like;
    public $http_referer_regexp_not;
    public $http_referer_like_not;
    public $request_uri_regexp_not;
    public $request_uri_like_not;
    public $base_fee;
    public $percent_fee;
    public $click_fee;
    public $date_add;

    public static function cacheNewSource($id_connections_source)
    {
    }

    /**
     * Get list of referrers connections of a customer
     *
     * @param int $id_customer
     */
    public static function getReferrers($id_customer)
    {
    }

    public static function getAjaxProduct($id_referrer, $id_product, $employee = null)
    {
    }

    /**
     * Refresh cache data of referrer statistics in referrer_shop table
     *
     * @param array $referrers
     * @param int $employee
     */
    public static function refreshCache($referrers = null, $employee = null)
    {
    }

    /**
     * Cache liaison between connections_source data and referrers data
     *
     * @param array $referrers
     */
    public static function refreshIndex($referrers = null)
    {
    }

    public function add($autodate = true, $null_values = false)
    {
    }

    /**
     * Get some statistics on visitors connection for current referrer
     *
     * @param int $id_product
     * @param int $employee
     * @param Context $context
     */
    public function getStatsVisits($id_product, $employee)
    {
    }

    /**
     * Get some statistics on customers registrations for current referrer
     *
     * @param int $id_product
     * @param int $employee
     * @param Context $context
     */
    public function getRegistrations($id_product, $employee)
    {
    }

    /**
     * Get some statistics on orders for current referrer
     *
     * @param int $id_product
     * @param int $employee
     */
    public function getStatsSales($id_product, $employee)
    {
    }
}