<?php

/*
* 2007-2015 PrestaShop
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
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class PrestaShopBackupCore
{

    /** @var string default backup directory. */
    public static $backupDir = '/backups/';
    /** @var int Object id */
    public $id;
    /** @var string Last error messages */
    public $error;
    /** @var string custom backup directory. */
    public $customBackupDir = null;
    public $psBackupAll = true;
    public $psBackupDropTable = true;

    /**
     * Creates a new backup object
     *
     * @param string $filename Filename of the backup file
     */
    public function __construct($filename = null)
    {
    }

    /**
     * Get the full path of the backup file
     *
     * @param string $filename prefix of the backup file (datetime will be the second part)
     * @return string The full path of the backup file, or false if the backup file does not exists
     */
    public static function getBackupPath($filename = '')
    {
    }

    /**
     * Check if a backup file exist
     *
     * @param string $filename prefix of the backup file (datetime will be the second part)
     * @return bool true if backup file exist
     */
    public static function backupExist($filename)
    {
    }

    /**
     * get the path to use for backup (customBackupDir if specified, or default)
     *
     * @param string $filename filename to use
     * @return string full path
     */
    public function getRealBackupPath($filename = null)
    {
    }

    /**
     * you can set a different path with that function
     *
     * @TODO include the prefix name
     * @param string $dir
     * @return bool bo
     */
    public function setCustomBackupPath($dir)
    {
    }

    /**
     * Get the URL used to retrieve this backup file
     *
     * @return string The url used to request the backup file
     */
    public function getBackupURL()
    {
    }

    /**
     * Deletes a range of backup files
     *
     * @return bool True on success
     */
    public function deleteSelection($list)
    {
    }

    /**
     * Creates a new backup file
     *
     * @return bool true on successful backup
     */
    public function add()
    {
    }

    /**
     * Delete the current backup file
     *
     * @return bool Deletion result, true on success
     */
    public function delete()
    {
    }
}
