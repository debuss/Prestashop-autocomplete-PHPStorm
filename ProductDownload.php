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

class ProductDownload extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'product_download',
        'primary' => 'id_product_download',
        'fields' => array(
            'id_product' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'display_filename' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => 255),
            'filename' => array('type' => self::TYPE_STRING, 'validate' => 'isSha1', 'size' => 255),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_expiration' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'nb_days_accessible' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'size' => 10),
            'nb_downloadable' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'size' => 10),
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'is_shareable' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
        ),
    );
    protected static $_productIds = array();
    /** @var integer Product id which download belongs */
    public $id_product;
    /** @var string DisplayFilename the name which appear */
    public $display_filename;
    /** @var string PhysicallyFilename the name of the file on hard disk */
    public $filename;
    /** @var string DateDeposit when the file is upload */
    public $date_add;
    /** @var string DateExpiration deadline of the file */
    public $date_expiration;
    /** @var string NbDaysAccessible how many days the customer can access to file */
    public $nb_days_accessible;
    /** @var string NbDownloadable how many time the customer can download the file */
    public $nb_downloadable;
    /** @var boolean Active if file is accessible or not */
    public $active = 1;
    /** @var boolean is_shareable indicates whether the product can be shared */
    public $is_shareable = 0;

    /**
     * Build a virtual product
     *
     * @param integer $id_product_download Existing productDownload id in order to load object (optional)
     */
    public function __construct($id_product_download = null)
    {
    }

    /**
     * Check if download repository is writable
     *
     * @return boolean
     */
    public static function checkWritableDir()
    {
    }

    /**
     * Return the id_product_download from an id_product
     *
     * @param int $id_product Product the id
     * @return integer Product the id for this virtual product
     */
    public static function getIdFromIdProduct($id_product)
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

    /**
     * Return the display filename from a physical filename
     *
     * @since 1.5.0.1
     * @param string $filename Filename physically
     * @return integer Product the id for this virtual product
     */
    public static function getIdFromFilename($filename)
    {
    }

    /**
     * Return the filename from an id_product
     *
     * @param int $id_product Product the id
     * @return string Filename the filename for this virtual product
     */
    public static function getFilenameFromIdProduct($id_product)
    {
    }

    /**
     * Return the display filename from a physical filename
     *
     * @param string $filename Filename physically
     * @return string Filename the display filename for this virtual product
     */
    public static function getFilenameFromFilename($filename)
    {
    }

    /**
     * Return a sha1 filename
     *
     * @return string Sha1 unique filename
     */
    public static function getNewFilename()
    {
    }

    /**
     * @see ObjectModel::getFields()
     * @return array
     */
    public function getFields()
    {
    }

    public function add($autodate = true, $null_values = false)
    {
    }

    public function update($null_values = false)
    {
    }

    public function delete($delete = false)
    {
    }

    /**
     * Delete the file
     *
     * @param int $id_product_download : if we need to delete a specific product attribute file
     * @return boolean
     */
    public function deleteFile($id_product_download = null)
    {
    }

    /**
     * Check if file exists
     *
     * @return boolean
     */
    public function checkFile()
    {
    }

    /**
     * Return html link
     *
     * @param string $class CSS selector
     * @param bool $admin specific to backend
     * @param bool $hash hash code in table order detail
     * @return string Html all the code for print a link to the file
     */
    public function getHtmlLink($class = false, $admin = true, $hash = false)
    {
    }

    /**
     * Return html link
     *
     * @param string $class CSS selector (optionnal)
     * @param bool $admin specific to backend (optionnal)
     * @param string $hash hash code in table order detail (optionnal)
     * @return string Html all the code for print a link to the file
     */
    public function getTextLink($admin = true, $hash = false)
    {
    }

    /**
     * Return a deadline
     *
     * @return string Datetime in SQL format
     */
    public function getDeadline()
    {
    }

    /**
     * Return a hash for control download access
     *
     * @return string Hash ready to insert in database
     */
    public function getHash()
    {
    }
}