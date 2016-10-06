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

class Tag extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'tag',
        'primary' => 'id_tag',
        'fields' => array(
            'id_lang' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true),
        ),
    );
    /** @var integer Language id */
    public $id_lang;
    /** @var string Name */
    public $name;
    protected $webserviceParameters = array(
        'fields' => array(
            'id_lang' => array('xlink_resource' => 'languages'),
        ),
    );

    public function __construct($id = null, $name = null, $id_lang = null)
    {
    }

    /**
     * Add several tags in database and link it to a product
     *
     * @param integer $id_lang Language id
     * @param integer $id_product Product id to link tags with
     * @param string|array $tag_list List of tags, as array or as a string with comas
     * @return boolean Operation success
     */
    public static function addTags($id_lang, $id_product, $tag_list, $separator = ',')
    {
    }

    public static function getMainTags($id_lang, $nb = 10)
    {
    }

    public static function getProductTags($id_product)
    {
    }

    public static function deleteTagsForProduct($id_product)
    {
    }

    public function add($autodate = true, $null_values = false)
    {
    }

    public function setProducts($array)
    {
    }

    public function getProducts($associated = true, Context $context = null)
    {
    }
}


