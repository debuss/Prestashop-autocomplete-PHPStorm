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

/**
 * @since 1.5.0
 */
class ShopGroup extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'shop_group',
        'primary' => 'id_shop_group',
        'fields' => array(
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true, 'size' => 64),
            'share_customer' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'share_order' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'share_stock' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'deleted' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
        ),
    );
    public $name;
    public $active = true;
    public $share_customer;
    public $share_stock;
    public $share_order;
    public $deleted;

    /**
     * @return int Total of shop groups
     */
    public static function getTotalShopGroup($active = true)
    {
    }

    public static function getShopGroups($active = true)
    {
    }

    public static function getShopsFromGroup($id_group)
    {
    }

    /**
     * Return a group shop ID from group shop name
     *
     * @param string $name
     * @return int
     */
    public static function getIdByName($name)
    {
    }

    /**
     * Detect dependency with customer or orders
     *
     * @param int $id_shop_group
     * @param string $check all|customer|order
     * @return bool
     */
    public static function hasDependency($id_shop_group, $check = 'all')
    {
    }

    /**
     * @see ObjectModel::getFields()
     * @return array
     */
    public function getFields()
    {
    }

    public function haveShops()
    {
    }

    public function getTotalShops()
    {
    }
}
