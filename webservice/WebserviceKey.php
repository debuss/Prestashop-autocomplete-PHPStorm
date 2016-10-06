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

class WebserviceKey extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'webservice_account',
        'primary' => 'id_webservice_account',
        'fields' => array(
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'key' => array('type' => self::TYPE_STRING, 'required' => true, 'size' => 32),
            'description' => array('type' => self::TYPE_STRING),
        ),
    );
    /** @var string Key */
    public $key;
    /** @var boolean Webservice Account statuts */
    public $active = true;
    /** @var string Webservice Account description */
    public $description;

    public static function getPermissionForAccount($auth_key)
    {
    }

    public static function isKeyActive($auth_key)
    {
    }

    public static function getClassFromKey($auth_key)
    {
    }

    public static function setPermissionForAccount($id_account, $permissions_to_set)
    {
    }

    public static function keyExists($key)
    {
    }

    public function add($autodate = true, $nullValues = false)
    {
    }

    public function delete()
    {
    }

    public function deleteAssociations()
    {
    }
}


