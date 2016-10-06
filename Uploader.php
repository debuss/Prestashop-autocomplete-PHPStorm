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

class UploaderCore
{

    const DEFAULT_MAX_SIZE = 10485760;
    private $_check_file_size;
    private $_accept_types;
    private $_files;
    private $_max_size;
    private $_name;
    private $_save_path;

    public function __construct($name = null)
    {
    }

    public function setCheckFileSize($value)
    {
    }

    public function getFiles()
    {
    }

    public function process($dest = null)
    {
    }

    public function getName()
    {
    }

    public function setName($value)
    {
    }

    public function upload($file, $dest = null)
    {
    }

    public function getPostMaxSizeBytes()
    {
    }

    public function getAcceptTypes()
    {
    }

    public function setAcceptTypes($value)
    {
    }

    public function checkFileSize()
    {
    }

    public function getMaxSize()
    {
    }

    public function setMaxSize($value)
    {
    }

    public function getFilePath($file_name = null)
    {
    }

    public function getSavePath()
    {
    }

    public function setSavePath($value)
    {
    }

    public function getUniqueFileName($prefix = 'PS')
    {
    }

    protected function validate(&$file)
    {
    }

    protected function checkUploadError($error_code)
    {
    }

    protected function _getServerVars($var)
    {
    }

    protected function _normalizeDirectory($directory)
    {
    }

    protected function _getFileSize($file_path, $clear_stat_cache = false)
    {
    }
}
