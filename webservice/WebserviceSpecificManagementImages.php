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

class WebserviceSpecificManagementImagesCore implements WebserviceSpecificManagementInterface
{

    /**
     * @var string The file path of the image to display. If not null, the image will be displayed, even if the XML output was not empty
     */
    public $imgToDisplay = null;
    public $imageResource = null;
    protected $objOutput;
    protected $output;
    protected $wsObject;
    /**
     * @var string The extension of the image to display
     */
    protected $imgExtension;
    /**
     * @var array The type of images (general, categories, manufacturers, suppliers, stores...)
     */
    protected $imageTypes = array(
        'general' => array(
            'header' => array(),
            'mail' => array(),
            'invoice' => array(),
            'store_icon' => array(),
        ),
        'products' => array(),
        'categories' => array(),
        'manufacturers' => array(),
        'suppliers' => array(),
        'stores' => array()
    );
    /**
     * @var string The image type (product, category, general,...)
     */
    protected $imageType = null;
    /**
     * @var int The maximum size supported when uploading images, in bytes
     */
    protected $imgMaxUploadSize = 3000000;
    /**
     * @var array The list of supported mime types
     */
    protected $acceptedImgMimeTypes = array('image/gif', 'image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png');
    /**
     * @var string The product image declination id
     */
    protected $productImageDeclinationId = null;
    /**
     * @var boolean If the current image management has to manage a "default" image (i.e. "No product available")
     */
    protected $defaultImage = false;
    // ------------------------------------------------
    // GETTERS & SETTERS
    // ------------------------------------------------

    public function setObjectOutput(WebserviceOutputBuilderCore $obj)
    {
    }

    public function getObjectOutput()
    {
    }

    public function getWsObject()
    {
    }

    public function setWsObject(WebserviceRequestCore $obj)
    {
    }

    /*
    * This method need $this->imgToDisplay to be set if output don't needs to be XML
    */

    public function getContent()
    {
    }

    public function manage()
    {
    }

    /**
     * Management of images URL segment
     *
     * @return boolean
     */
    protected function manageImages()
    {
    }

    /**
     * Management of general images
     *
     * @return boolean
     */
    protected function manageGeneralImages()
    {
    }

    /**
     * Write the posted image on disk
     *
     * @param string $sreceptionPath
     * @param int $destWidth
     * @param int $destHeight
     * @param array $imageTypes
     * @param string $parentPath
     * @return boolean
     */
    protected function writePostedImageOnDisk($receptionPath, $destWidth = null, $destHeight = null, $imageTypes = null, $parentPath = null)
    {
    }

    /**
     * Write the image on disk
     *
     * @param string $basePath
     * @param string $newPath
     * @param int $destWidth
     * @param int $destHeight
     * @param array $imageTypes
     * @param string $parentPath
     * @return string
     */
    protected function writeImageOnDisk($basePath, $newPath, $destWidth = null, $destHeight = null, $imageTypes = null, $parentPath = null)
    {
    }

    /**
     * Management of normal images (as categories, suppliers, manufacturers and stores)
     *
     * @param string $directory the file path of the root of the images folder type
     * @return boolean
     */
    protected function manageDeclinatedImages($directory)
    {
    }

    protected function manageDefaultDeclinatedImages($directory, $normal_image_sizes)
    {
    }

    /**
     * Management of normal images CRUD
     *
     * @param boolean $filename_exists if the filename exists
     * @param string $filename the image path
     * @param array $imageSizes The
     * @param string $directory
     * @return boolean
     */
    protected function manageDeclinatedImagesCRUD($filename_exists, $filename, $imageSizes, $directory)
    {
    }

    /**
     *    Delete the image on disk
     *
     * @param string $filePath the image file path
     * @param array $imageTypes The differents sizes
     * @param string $parentPath The parent path
     * @return boolean
     */
    protected function deleteImageOnDisk($filePath, $imageTypes = null, $parentPath = null)
    {
    }

    protected function manageListDeclinatedImages($directory, $normal_image_sizes)
    {
    }

    protected function manageEntityDeclinatedImages($directory, $normal_image_sizes)
    {
    }

    protected function manageProductImages()
    {
    }
}
