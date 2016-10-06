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

class ShopUrl extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'shop_url',
        'primary' => 'id_shop_url',
        'fields' => array(
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'main' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'domain' => array('type' => self::TYPE_STRING, 'required' => true, 'size' => 255, 'validate' => 'isCleanHtml'),
            'domain_ssl' => array('type' => self::TYPE_STRING, 'size' => 255, 'validate' => 'isCleanHtml'),
            'id_shop' => array('type' => self::TYPE_INT, 'required' => true),
            'physical_uri' => array('type' => self::TYPE_STRING, 'size' => 64),
            'virtual_uri' => array('type' => self::TYPE_STRING, 'size' => 64),
        ),
    );
    protected static $main_domain = null;
    protected static $main_domain_ssl = null;
    public $id_shop;
    public $domain;
    public $domain_ssl;
    public $physical_uri;
    public $virtual_uri;
    public $main;
    public $active;

    /**
     * Get list of shop urls
     *
     * @param bool $id_shop
     * @return Collection
     */
    public static function getShopUrls($id_shop = false)
    {
    }

    public static function getMainShopDomain()
    {
    }

    public static function getMainShopDomainSSL()
    {
    }

    /**
     * @see ObjectModel::getFields()
     * @return array
     */
    public function getFields()
    {
    }

    public function getURL($ssl = false)
    {
    }

    public function getBaseURI()
    {
    }

    public function setMain()
    {
    }

    public function canAddThisUrl($domain, $domain_ssl, $physical_uri, $virtual_uri)
    {
    }
}
