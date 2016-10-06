<?php

/*
* 2007-2015 PrestaShop
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
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class ConfigurationKPI extends Configuration
{

    public static $definition_backup;

    public static function getIdByName($key, $id_shop_group = null, $id_shop = null)
    {
    }

    public static function setKpiDefinition()
    {
    }

    public static function unsetKpiDefinition()
    {
    }

    public static function loadConfiguration()
    {
    }

    public static function get($key, $id_lang = null, $id_shop_group = null, $id_shop = null)
    {
    }

    public static function getGlobalValue($key, $id_lang = null)
    {
    }

    public static function getInt($key, $id_shop_group = null, $id_shop = null)
    {
    }

    public static function getMultiple($keys, $id_lang = null, $id_shop_group = null, $id_shop = null)
    {
    }

    public static function hasKey($key, $id_lang = null, $id_shop_group = null, $id_shop = null)
    {
    }

    public static function set($key, $values, $id_shop_group = null, $id_shop = null)
    {
    }

    public static function updateGlobalValue($key, $values, $html = false)
    {
    }

    public static function updateValue($key, $values, $html = false, $id_shop_group = null, $id_shop = null)
    {
    }

    public static function deleteByName($key)
    {
    }

    public static function deleteFromContext($key)
    {
    }

    public static function hasContext($key, $id_lang, $context)
    {
    }

    public static function isOverridenByCurrentContext($key)
    {
    }

    public static function isLangKey($key)
    {
    }

    protected static function sqlRestriction($id_shop_group, $id_shop)
    {
    }
}
