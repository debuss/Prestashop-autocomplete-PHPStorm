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

class TreeToolbarCore implements ITreeToolbarCore
{

    const DEFAULT_TEMPLATE_DIRECTORY = 'helpers/tree';
    const DEFAULT_TEMPLATE = 'tree_toolbar.tpl';
    private $_actions;
    private $_context;
    private $_data;
    private $_template;
    private $_template_directory;

    public function __toString()
    {
    }

    public function render()
    {
    }

    public function getActions()
    {
    }

    public function setActions($actions)
    {
    }

    public function getData()
    {
    }

    public function setData($value)
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

    /**
     * @param ITreeToolbarButton $action
     * @return TreeToolbar
     * @throws PrestaShopException
     */
    public function addAction($action)
    {
    }

    public function removeActions()
    {
    }

    private function _normalizeDirectory($directory)
    {
    }
}
