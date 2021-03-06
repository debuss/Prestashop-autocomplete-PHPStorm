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

class HelperTreeShops extends TreeCore
{

    const DEFAULT_TEMPLATE = 'tree_shops.tpl';
    const DEFAULT_NODE_FOLDER_TEMPLATE = 'tree_node_folder_checkbox_shops.tpl';
    const DEFAULT_NODE_ITEM_TEMPLATE = 'tree_node_item_checkbox_shops.tpl';
    private $_lang;
    private $_selected_shops;

    public function __construct($id, $title = null, $lang = null)
    {
    }

    public function getLang()
    {
    }

    public function setLang($value)
    {
    }

    public function getTemplate()
    {
    }

    public function render($data = null, $use_default_actions = true, $use_selected_shop = true)
    {
    }

    public function getData()
    {
    }

    public function getSelectedShops()
    {
    }

    public function setSelectedShops($value)
    {
    }

    public function renderNodes($data = null)
    {
    }

    public function getNodeFolderTemplate()
    {
    }

    public function getNodeItemTemplate()
    {
    }
}
