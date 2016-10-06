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

class CMS extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'cms',
        'primary' => 'id_cms',
        'multilang' => true,
        'fields' => array(
            'id_cms_category' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'position' => array('type' => self::TYPE_INT),
            'active' => array('type' => self::TYPE_BOOL),

            // Lang fields
            'meta_description' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255),
            'meta_keywords' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255),
            'meta_title' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'required' => true, 'size' => 128),
            'link_rewrite' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isLinkRewrite', 'required' => true, 'size' => 128),
            'content' => array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isString', 'size' => 3999999999999),
        ),
    );
    /** @var string Name */
    public $meta_title;
    public $meta_description;
    public $meta_keywords;
    public $content;
    public $link_rewrite;
    public $id_cms_category;
    public $position;
    public $active;
    protected $webserviceParameters = array(
        'objectNodeName' => 'content',
        'objectsNodeName' => 'content_management_system',
    );

    public static function getLinks($id_lang, $selection = null, $active = true, Link $link = null)
    {
    }

    public static function listCms($id_lang = null, $id_block = false, $active = true)
    {
    }

    public static function getCMSPages($id_lang = null, $id_cms_category = null, $active = true)
    {
    }

    public static function getUrlRewriteInformations($id_cms)
    {
    }

    public static function getLastPosition($id_category)
    {
    }

    public static function cleanPositions($id_category)
    {
    }

    public function add($autodate = true, $null_values = false)
    {
    }

    public function update($null_values = false)
    {
    }

    public function delete()
    {
    }

    public function updatePosition($way, $position)
    {
    }
}
