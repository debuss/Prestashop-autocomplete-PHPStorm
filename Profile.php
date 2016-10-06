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

class Profile extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'profile',
        'primary' => 'id_profile',
        'multilang' => true,
        'fields' => array(
            // Lang fields
            'name' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'required' => true, 'size' => 32),
        ),
    );
    protected static $_cache_accesses = array();
    /** @var string Name */
    public $name;

    /**
     * Get all available profiles
     *
     * @return array Profiles
     */
    public static function getProfiles($id_lang)
    {
    }

    /**
     * Get the current profile name
     *
     * @return string Profile
     */
    public static function getProfile($id_profile, $id_lang = null)
    {
    }

    public static function getProfileAccess($id_profile, $id_tab)
    {
    }

    public static function getProfileAccesses($id_profile, $type = 'id_tab')
    {
    }

    public function add($autodate = true, $null_values = false)
    {
    }

    public function delete()
    {
    }
}


