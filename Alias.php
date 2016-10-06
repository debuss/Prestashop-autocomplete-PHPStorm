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

class Alias extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'alias',
        'primary' => 'id_alias',
        'fields' => array(
            'search' => array('type' => self::TYPE_STRING, 'validate' => 'isValidSearch', 'required' => true, 'size' => 255),
            'alias' => array('type' => self::TYPE_STRING, 'validate' => 'isValidSearch', 'required' => true, 'size' => 255),
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
        ),
    );
    public $alias;
    public $search;
    public $active = true;

    public function __construct($id = null, $alias = null, $search = null, $id_lang = null)
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

    public function add($autodate = true, $nullValues = false)
    {
    }

    public function delete()
    {
    }

    public function getAliases()
    {
    }
}

