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

class CompareProduct extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'compare',
        'primary' => 'id_compare',
        'fields' => array(
            'id_compare' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
        ),
    );
    public $id_compare;
    public $id_customer;
    public $date_add;
    public $date_upd;

    /**
     * Get all compare products of the customer
     *
     * @param int $id_customer
     * @return array
     */
    public static function getCompareProducts($id_compare)
    {
    }

    /**
     * Add a compare product for the customer
     *
     * @param int $id_customer , int $id_product
     * @return boolean
     */
    public static function addCompareProduct($id_compare, $id_product)
    {
    }

    /**
     * Remove a compare product for the customer
     *
     * @param int $id_compare
     * @param int $id_product
     * @return boolean
     */
    public static function removeCompareProduct($id_compare, $id_product)
    {
    }

    /**
     * Get the number of compare products of the customer
     *
     * @param int $id_compare
     * @return int
     */
    public static function getNumberProducts($id_compare)
    {
    }

    /**
     * Clean entries which are older than the period
     *
     * @param string $period
     * @return void
     */
    public static function cleanCompareProducts($period = 'week')
    {
    }

    /**
     * Get the id_compare by id_customer
     *
     * @param integer $id_customer
     * @return integer $id_compare
     */
    public static function getIdCompareByIdCustomer($id_customer)
    {
    }
}
