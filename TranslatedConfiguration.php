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

class TranslatedConfiguration extends Configuration
{

    public static $definition = array(
        'table' => 'configuration',
        'primary' => 'id_configuration',
        'multilang' => true,
        'fields' => array(
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isConfigName', 'required' => true, 'size' => 32),
            'id_shop_group' => array('type' => self::TYPE_NOTHING, 'validate' => 'isUnsignedId'),
            'id_shop' => array('type' => self::TYPE_NOTHING, 'validate' => 'isUnsignedId'),
            'value' => array('type' => self::TYPE_STRING, 'lang' => true),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
        ),
    );
    protected $webserviceParameters = array(
        'objectNodeName' => 'translated_configuration',
        'objectsNodeName' => 'translated_configurations',
        'fields' => array(
            'value' => array(),
            'date_add' => array(),
            'date_upd' => array(),
        ),
    );

    public function __construct($id = null, $id_lang = null)
    {
    }

    public function add($autodate = true, $nullValues = false)
    {
    }

    public function update($nullValues = false)
    {
    }

    public function getWebserviceObjectList($sql_join, $sql_filter, $sql_sort, $sql_limit)
    {
    }
}