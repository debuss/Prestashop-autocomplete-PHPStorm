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

class Zone extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'zone',
        'primary' => 'id_zone',
        'fields' => array(
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true, 'size' => 64),
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
        ),
    );
    /** @var string Name */
    public $name;
    /** @var boolean Zone status */
    public $active = true;
    protected $webserviceParameters = array();

    /**
     * Get all available geographical zones
     *
     * @param bool $active
     * @return array Zones
     */
    public static function getZones($active = false)
    {
    }

    /**
     * Get a zone ID from its default language name
     *
     * @param string $name
     * @return integer id_zone
     */
    public static function getIdByName($name)
    {
    }

    /**
     * Delete a zone
     *
     * @return boolean Deletion result
     */
    public function delete()
    {
    }
}