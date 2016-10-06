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

class FileUploader
{

    protected $allowedExtensions = array();
    protected $file;
    protected $sizeLimit;

    public function __construct(array $allowedExtensions = array(), $sizeLimit = 10485760)
    {
    }

    /**
     * Returns array('success'=>true) or array('error'=>'error message')
     */
    public function handleUpload()
    {
    }

    protected function toBytes($str)
    {
    }
}

class QqUploadedFileForm
{

    /**
     * Save the file to the specified path
     *
     * @return boolean TRUE on success
     */
    public function save()
    {
    }

    public function copyImage($id_product, $id_image, $method = 'auto')
    {
    }

    public function getName()
    {
    }

    public function getSize()
    {
    }
}

/**
 * Handle file uploads via XMLHttpRequest
 */
class QqUploadedFileXhr
{

    public function save()
    {
    }

    public function copyImage($id_product, $id_image, $method = 'auto')
    {
    }

    /**
     * Save the file to the specified path
     *
     * @return boolean TRUE on success
     */
    public function upload($path)
    {
    }

    public function getSize()
    {
    }

    public function getName()
    {
    }
}
