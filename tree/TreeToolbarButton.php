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

abstract class TreeToolbarButtonCore
{

    const DEFAULT_TEMPLATE_DIRECTORY = 'helpers/tree';
    protected $_attributes;
    protected $_template;
    protected $_template_directory;
    private $_class;
    private $_context;
    private $_id;
    private $_label;
    private $_name;

    public function __construct($label, $id = null, $name = null, $class = null)
    {
    }

    public function __toString()
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

    public function getAttributes()
    {
    }

    public function setAttributes($value)
    {
    }

    public function setAttribute($name, $value)
    {
    }

    public function getClass()
    {
    }

    public function setClass($value)
    {
    }

    public function getAttribute($name)
    {
    }

    public function hasAttribute($name)
    {
    }

    public function getId()
    {
    }

    public function setId($value)
    {
    }

    public function getLabel()
    {
    }

    public function setLabel($value)
    {
    }

    public function getName()
    {
    }

    public function setName($value)
    {
    }

    private function _normalizeDirectory($directory)
    {
    }
}
