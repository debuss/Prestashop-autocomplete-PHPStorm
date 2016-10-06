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

class RangePrice extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'range_price',
        'primary' => 'id_range_price',
        'fields' => array(
            'id_carrier' => array('type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => true),
            'delimiter1' => array('type' => self::TYPE_FLOAT, 'validate' => 'isUnsignedFloat', 'required' => true),
            'delimiter2' => array('type' => self::TYPE_FLOAT, 'validate' => 'isUnsignedFloat', 'required' => true),
        ),
    );
    public $id_carrier;
    public $delimiter1;
    public $delimiter2;
    protected $webserviceParameters = array(
        'objectsNodeName' => 'price_ranges',
        'objectNodeName' => 'price_range',
        'fields' => array(
            'id_carrier' => array('xlink_resource' => 'carriers'),
        )
    );

    /**
     * Get all available price ranges
     *
     * @return array Ranges
     */
    public static function getRanges($id_carrier)
    {
    }

    public static function rangeExist($id_carrier, $delimiter1, $delimiter2, $id_reference = null)
    {
    }

    public static function isOverlapping($id_carrier, $delimiter1, $delimiter2, $id_rang = null)
    {
    }

    /**
     * Override add to create delivery value for all zones
     *
     * @see classes/ObjectModelCore::add()
     * @param bool $null_values
     * @param bool $autodate
     * @return bool Insertion result
     */
    public function add($autodate = true, $null_values = false)
    {
    }
}