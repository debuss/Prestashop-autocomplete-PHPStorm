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

/**
 * This class includes functions for image manipulation
 *
 * @since 1.5.0
 */
class ImageManager
{

    /**
     * Generate a cached thumbnail for object lists (eg. carrier, order states...etc)
     *
     * @param string $image Real image filename
     * @param string $cache_image Cached filename
     * @param int $size Desired size
     * @param string $image_type Image type
     * @param bool $disable_cache When turned on a timestamp will be added to the image URI to disable the HTTP cache
     * @return string
     */
    public static function thumbnail($image, $cache_image, $size, $image_type = 'jpg', $disable_cache = false)
    {
    }

    /**
     * Check if memory limit is too long or not
     *
     * @static
     * @param $image
     * @return bool
     */
    public static function checkImageMemoryLimit($image)
    {
    }

    /**
     * Resize, cut and optimize image
     *
     * @param string $src_file Image object from $_FILE
     * @param string $dst_file Destination filename
     * @param integer $dst_width Desired width (optional)
     * @param integer $dst_height Desired height (optional)
     * @param string $file_type
     * @return boolean Operation result
     */
    public static function resize($src_file, $dst_file, $dst_width = null, $dst_height = null, $file_type = 'jpg', $force_type = false)
    {
    }

    /**
     * Create an image with GD extension from a given type
     *
     * @param string $type
     * @param string $filename
     * @return resource
     */
    public static function create($type, $filename)
    {
    }

    /**
     * Generate and write image
     *
     * @param string $type
     * @param resource $resource
     * @param string $filename
     * @return bool
     */
    public static function write($type, $resource, $filename)
    {
    }

    /**
     * Validate image upload (check image type and weight)
     *
     * @param array $file Upload $_FILE value
     * @param integer $max_file_size Maximum upload size
     * @return bool|string Return false if no error encountered
     */
    public static function validateUpload($file, $max_file_size = 0)
    {
    }

    /**
     * Check if file is a real image
     *
     * @param string $filename File path to check
     * @param string $file_mime_type File known mime type (generally from $_FILES)
     * @param array $mime_type_list Allowed MIME types
     * @return bool
     */
    public static function isRealImage($filename, $file_mime_type = null, $mime_type_list = null)
    {
    }

    /**
     * Check if image file extension is correct
     *
     * @static
     * @param $filename real filename
     * @return bool true if it's correct
     */
    public static function isCorrectImageFileExt($filename)
    {
    }

    /**
     * Validate icon upload
     *
     * @param array $file Upload $_FILE value
     * @param int $max_file_size Maximum upload size
     * @return bool|string Return false if no error encountered
     */
    public static function validateIconUpload($file, $max_file_size = 0)
    {
    }

    /**
     * Cut image
     *
     * @param array $src_file Origin filename
     * @param string $dst_file Destination filename
     * @param integer $dst_width Desired width
     * @param integer $dst_height Desired height
     * @param string $file_type
     * @param int $dst_x
     * @param int $dst_y
     * @return bool Operation result
     */
    public static function cut($src_file, $dst_file, $dst_width = null, $dst_height = null, $file_type = 'jpg', $dst_x = 0, $dst_y = 0)
    {
    }

    /**
     * Create an empty image with white background
     *
     * @param int $width
     * @param int $height
     * @return resource
     */
    public static function createWhiteImage($width, $height)
    {
    }

    /**
     * Return the mime type by the file extension
     *
     * @param string $file_name
     * @return string
     */
    public static function getMimeTypeByExtension($file_name)
    {
    }
}
