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

class Image extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'image',
        'primary' => 'id_image',
        'multilang' => true,
        'fields' => array(
            'id_product' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'position' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'cover' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'shop' => true),
        ),
    );
    /** @var int access rights of created folders (octal) */
    protected static $access_rights = 0775;
    protected static $_cacheGetSize = array();
    public $id;
    /** @var integer Image ID */
    public $id_image;
    /** @var integer Product ID */
    public $id_product;
    /** @var integer Position used to order images of the same product */
    public $position;
    /** @var boolean Image is cover */
    public $cover;
    /** @var string image extension */
    public $image_format = 'jpg';
    /** @var string path to index.php file to be copied to new image folders */
    public $source_index;
    /** @var string image folder */
    protected $folder;
    /** @var string image path without extension */
    protected $existing_path;

    public function __construct($id = null, $id_lang = null)
    {
    }

    /**
     * Return available images for a product
     *
     * @param integer $id_lang Language ID
     * @param integer $id_product Product ID
     * @return array Images
     */
    public static function getImages($id_lang, $id_product)
    {
    }

    /**
     * Return Images
     *
     * @return array Images
     */
    public static function getAllImages()
    {
    }

    /**
     * Return number of images for a product
     *
     * @param integer $id_product Product ID
     * @return integer number of images
     */
    public static function getImagesTotal($id_product)
    {
    }

    /**
     * Delete product cover
     *
     * @param integer $id_product Product ID
     * @return boolean result
     */
    public static function deleteCover($id_product)
    {
    }

    /**
     *Get product cover
     *
     * @param integer $id_product Product ID
     * @return boolean result
     */
    public static function getCover($id_product)
    {
    }

    /**
     * Copy images from a product to another
     *
     * @param integer $id_product_old Source product ID
     * @param boolean $id_product_new Destination product ID
     */
    public static function duplicateProductImages($id_product_old, $id_product_new, $combination_images)
    {
    }

    /**
     * Return highest position of images for a product
     *
     * @param integer $id_product Product ID
     * @return integer highest position of images
     */
    public static function getHighestPosition($id_product)
    {
    }

    /**
     * Duplicate product attribute image associations
     *
     * @param integer $id_product_attribute_old
     * @return boolean
     */
    public static function duplicateAttributeImageAssociations($combination_images)
    {
    }

    public static function getWidth($params, &$smarty)
    {
    }

    public static function getSize($type)
    {
    }

    public static function getHeight($params, &$smarty)
    {
    }

    /**
     * Clear all images in tmp dir
     */
    public static function clearTmpDir()
    {
    }

    /**
     * Recursively deletes all product images in the given folder tree and removes empty folders.
     *
     * @param string $path folder containing the product images to delete
     * @param string $format image format
     * @return bool success
     */
    public static function deleteAllImages($path, $format = 'jpg')
    {
    }

    /**
     * Move all legacy product image files from the image folder root to their subfolder in the new filesystem.
     * If max_execution_time is provided, stops before timeout and returns string "timeout".
     * If any image cannot be moved, stops and returns "false"
     *
     * @param int max_execution_time
     * @return mixed success or timeout
     */
    public static function moveToNewFileSystem($max_execution_time = 0)
    {
    }

    /**
     * Try to create and delete some folders to check if moving images to new file system will be possible
     *
     * @return boolean success
     */
    public static function testFileSystem()
    {
    }

    /**
     * Returns the path to the folder containing the image in the new filesystem
     *
     * @param mixed $id_image
     * @return string path to folder
     */
    public static function getImgFolderStatic($id_image)
    {
    }

    protected static function replaceAttributeImageAssociationId(&$combination_images, $saved_id, $id_image)
    {
    }

    public function add($autodate = true, $null_values = false)
    {
    }

    /**
     * Returns the path where a product image should be created (without file format)
     *
     * @return string path
     */
    public function getPathForCreation()
    {
    }

    /**
     * Create parent folders for the image in the new filesystem
     *
     * @return bool success
     */
    public function createImgFolder()
    {
    }

    public function delete()
    {
    }

    /**
     * Delete Image - Product attribute associations for this image
     */
    public function deleteProductAttributeImage()
    {
    }

    /**
     * Delete the product image from disk and remove the containing folder if empty
     * Handles both legacy and new image filesystems
     */
    public function deleteImage($force_delete = false)
    {
    }

    /**
     * Returns image path in the old or in the new filesystem
     * @ returns string image path
     */
    public function getExistingImgPath()
    {
    }

    /**
     * Returns the path to the image without file extension
     *
     * @return string path
     */
    public function getImgPath()
    {
    }

    /**
     * Returns the path to the folder containing the image in the new filesystem
     *
     * @return string path to folder
     */
    public function getImgFolder()
    {
    }

    /**
     * Reposition image
     *
     * @param integer $position Position
     * @param boolean $direction Direction
     * @deprecated since version 1.5.0.1 use Image::updatePosition() instead
     */
    public function positionImage($position, $direction)
    {
    }

    /**
     * Change an image position and update relative positions
     *
     * @param int $way position is moved up if 0, moved down if 1
     * @param int $position new position of the moved image
     * @return int success
     */
    public function updatePosition($way, $position)
    {
    }
}
