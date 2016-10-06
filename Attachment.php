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

class Attachment extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'attachment',
        'primary' => 'id_attachment',
        'multilang' => true,
        'fields' => array(
            'file' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true, 'size' => 40),
            'mime' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'required' => true, 'size' => 128),
            'file_name' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => 128),

            // Lang fields
            'name' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'required' => true, 'size' => 32),
            'description' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml'),
        ),
    );
    public $file;
    public $file_name;
    public $name;
    public $mime;
    public $description;
    /** @var integer position */
    public $position;

    public static function getAttachments($id_lang, $id_product, $include = true)
    {
    }

    /**
     * associate an array of id_attachment $array to the product $id_product
     * and remove eventual previous association
     *
     * @static
     * @param $id_product
     * @param $array
     * @return bool
     */
    public static function attachToProduct($id_product, $array)
    {
    }

    /**
     * deassociate $id_product from the current object
     *
     * @static
     * @param $id_product int
     * @return bool
     */
    public static function deleteProductAttachments($id_product)
    {
    }

    public static function getProductAttached($id_lang, $list)
    {
    }

    public function deleteSelection($attachments)
    {
    }

    public function delete()
    {
    }

    /**
     * associate $id_product to the current object.
     *
     * @param int $id_product id of the product to associate
     * @return boolean true if succed
     */
    public function attachProduct($id_product)
    {
    }
}

