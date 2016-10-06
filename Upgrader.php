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

class Upgrader
{

    const DEFAULT_CHECK_VERSION_DELAY_HOURS = 24;
    public $rss_version_link = 'http://api.prestashop.com/xml/upgrader.xml';
    public $rss_md5file_link_dir = 'http://api.prestashop.com/xml/md5/';
    public $version_name;
    public $version_num;
    public $version_is_modified = null;
    /**
     * @var string contains hte url where to download the file
     */
    public $link;
    public $autoupgrade;
    public $autoupgrade_module;
    public $autoupgrade_last_version;
    public $autoupgrade_module_link;
    public $changelog;
    public $md5;
    /**
     * @var boolean contains true if last version is not installed
     */
    protected $need_upgrade = false;
    protected $changed_files = array();
    protected $missing_files = array();

    public function __construct($autoload = false)
    {
    }

    /**
     * load the last version informations stocked in base
     *
     * @return $this
     */
    public function loadFromConfig()
    {
    }

    /**
     * checkPSVersion ask to prestashop.com if there is a new version. return an array if yes, false otherwise
     *
     * @return mixed
     */
    public function checkPSVersion($force = false)
    {
    }

    public function __get($var)
    {
    }

    public function isLastVersion()
    {
    }

    /**
     * downloadLast download the last version of PrestaShop and save it in $dest/$filename
     *
     * @param string $dest directory where to save the file
     * @param string $filename new filename
     * @return boolean
     * @TODO ftp if copy is not possible (safe_mode for example)
     */
    public function downloadLast($dest, $filename = 'prestashop.zip')
    {
    }

    public function isAuthenticPrestashopVersion()
    {
    }

    /**
     * return an array of files
     * that the md5file does not match to the original md5file (provided by $rss_md5file_link_dir )
     *
     * @return void
     */
    public function getChangedFilesList()
    {
    }

    protected function browseXmlAndCompare($node, &$current_path = array(), $level = 1)
    {
    }

    /** populate $this->missing_files with $path
     *
     * @param string $path filepath to add, relative to _PS_ROOT_DIR_
     */
    protected function addMissingFile($path)
    {
    }

    protected function compareChecksum($path, $original_sum)
    {
    }

    /** populate $this->changed_files with $path
     * in sub arrays  mail, translation and core items
     *
     * @param string $path filepath to add, relative to _PS_ROOT_DIR_
     */
    protected function addChangedFile($path)
    {
    }
}
