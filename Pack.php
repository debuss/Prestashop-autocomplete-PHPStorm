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

class Pack extends Product
{

    protected static $cachePackItems = array();
    protected static $cacheIsPack = array();
    protected static $cacheIsPacked = array();

    public static function noPackPrice($id_product)
    {
    }

    public static function getItems($id_product, $id_lang)
    {
    }

    /**
     * This method is allow to know if a feature is used or active
     *
     * @since 1.5.0.1
     * @return bool
     */
    public static function isFeatureActive()
    {
    }

    public static function isInStock($id_product)
    {
    }

    public static function getItemTable($id_product, $id_lang, $full = false)
    {
    }

    /**
     * Is product a pack?
     *
     * @static
     * @param $id_product
     * @return bool
     */
    public static function isPack($id_product)
    {
    }

    public static function getPacksTable($id_product, $id_lang, $full = false, $limit = null)
    {
    }

    /**
     * Is product in a pack?
     *
     * @static
     * @param $id_product
     * @return bool
     */
    public static function isPacked($id_product)
    {
    }

    public static function deleteItems($id_product)
    {
    }

    /**
     * This method is allow to know if a Pack entity is currently used
     *
     * @since 1.5.0
     * @param $table
     * @param $has_active_column
     * @return bool
     */
    public static function isCurrentlyUsed($table = null, $has_active_column = false)
    {
    }

    /**
     * Add an item to the pack
     *
     * @param integer $id_product
     * @param integer $id_item
     * @param integer $qty
     * @return boolean true if everything was fine
     */
    public static function addItem($id_product, $id_item, $qty)
    {
    }

    public static function duplicate($id_product_old, $id_product_new)
    {
    }

    /**
     * For a given pack, tells if it has at least one product using the advanced stock management
     *
     * @param int $id_product id_pack
     * @return bool
     */
    public static function usesAdvancedStockManagement($id_product)
    {
    }
}

