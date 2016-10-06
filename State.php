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

class State extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'state',
        'primary' => 'id_state',
        'fields' => array(
            'id_country' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_zone' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'iso_code' => array('type' => self::TYPE_STRING, 'validate' => 'isStateIsoCode', 'required' => true, 'size' => 7),
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true, 'size' => 32),
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
        ),
    );
    /** @var integer Country id which state belongs */
    public $id_country;
    /** @var integer Zone id which state belongs */
    public $id_zone;
    /** @var string 2 letters iso code */
    public $iso_code;
    /** @var string Name */
    public $name;
    /** @var boolean Status for delivery */
    public $active = true;
    protected $webserviceParameters = array(
        'fields' => array(
            'id_zone' => array('xlink_resource' => 'zones'),
            'id_country' => array('xlink_resource' => 'countries')
        ),
    );

    public static function getStates($id_lang = false, $active = false)
    {
    }

    /**
     * Get a state name with its ID
     *
     * @param integer $id_state Country ID
     * @return string State name
     */
    public static function getNameById($id_state)
    {
    }

    /**
     * Get a state id with its name
     *
     * @param string $id_state Country ID
     * @return integer state id
     */
    public static function getIdByName($state)
    {
    }

    /**
     * Get a state id with its iso code
     *
     * @param string $iso_code Iso code
     * @return integer state id
     */
    public static function getIdByIso($iso_code, $id_country = null)
    {
    }

    public static function getStatesByIdCountry($id_country)
    {
    }

    public static function hasCounties($id_state)
    {
    }

    public static function getIdZone($id_state)
    {
    }

    /**
     * Delete a state only if is not in use
     *
     * @return boolean
     */
    public function delete()
    {
    }

    /**
     * Check if a state is used
     *
     * @return boolean
     */
    public function isUsed()
    {
    }

    /**
     * Returns the number of utilisation of a state
     *
     * @return integer count for this state
     */
    public function countUsed()
    {
    }

    /**
     * @param $ids_states
     * @param $id_zone
     * @return bool
     */
    public function affectZoneToSelection($ids_states, $id_zone)
    {
    }
}

