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

class HelperUploader extends Uploader
{

    const DEFAULT_TEMPLATE_DIRECTORY = 'helpers/uploader';
    const DEFAULT_TEMPLATE = 'simple.tpl';
    const DEFAULT_AJAX_TEMPLATE = 'ajax.tpl';
    const TYPE_IMAGE = 'image';
    const TYPE_FILE = 'file';
    protected $_template;
    private $_context;
    private $_drop_zone;
    private $_id;
    private $_files;
    private $_name;
    private $_max_files;
    private $_multiple;
    private $_post_max_size;
    private $_template_directory;
    private $_title;
    private $_url;
    private $_use_ajax;

    public function setMultiple($value)
    {
    }

    public function getPostMaxSize()
    {
    }

    public function setPostMaxSize($value)
    {
    }

    public function setUseAjax($value)
    {
    }

    public function render()
    {
    }

    public function getContext()
    {
    }

    public function setContext($value)
    {
    }

    public function useAjax()
    {
    }

    public function getTemplateFile($template)
    {
    }

    public function getTemplateDirectory()
    {
    }

    public function setTemplateDirectory($value)
    {
    }

    public function getTemplate()
    {
    }

    public function setTemplate($value)
    {
    }

    public function getId()
    {
    }

    public function setId($value)
    {
    }

    public function getName()
    {
    }

    public function setName($value)
    {
    }

    public function getUrl()
    {
    }

    public function setUrl($value)
    {
    }

    public function isMultiple()
    {
    }

    public function getFiles()
    {
    }

    public function setFiles($value)
    {
    }

    public function getTitle()
    {
    }

    public function setTitle($value)
    {
    }

    public function getMaxFiles()
    {
    }

    public function setMaxFiles($value)
    {
    }

    public function getDropZone()
    {
    }

    public function setDropZone($value)
    {
    }
}
