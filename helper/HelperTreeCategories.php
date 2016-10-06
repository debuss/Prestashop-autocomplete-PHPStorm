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

class HelperTreeCategories extends TreeCore
{

    const DEFAULT_TEMPLATE = 'tree_categories.tpl';
    const DEFAULT_NODE_FOLDER_TEMPLATE = 'tree_node_folder_radio.tpl';
    const DEFAULT_NODE_ITEM_TEMPLATE = 'tree_node_item_radio.tpl';
    private $_disabled_categories;
    private $_input_name;
    private $_lang;
    private $_root_category;
    private $_selected_categories;
    private $_full_tree = false;
    private $_shop;
    private $_use_checkbox;
    private $_use_search;
    private $_use_shop_restriction;
    private $_children_only = false;

    public function __construct($id, $title = null, $root_category = null,
                                $lang = null, $use_shop_restriction = true)
    {
    }

    public function setUseShopRestriction($value)
    {
    }

    public function setChildrenOnly($value)
    {
    }

    public function getFullTree()
    {
    }

    public function setFullTree($value)
    {
    }

    public function getTemplate()
    {
    }

    public function setUseCheckBox($value)
    {
    }

    public function setUseSearch($value)
    {
    }

    public function render($data = null)
    {
    }

    public function getData()
    {
    }

    public function getShop()
    {
    }

    public function setShop($value)
    {
    }

    public function getLang()
    {
    }

    public function setLang($value)
    {
    }

    public function getRootCategory()
    {
    }

    public function setRootCategory($value)
    {
    }

    public function useShopRestriction()
    {
    }

    public function getSelectedCategories()
    {
    }

    public function setSelectedCategories($value)
    {
    }

    public function getDisabledCategories()
    {
    }

    public function setDisabledCategories($value)
    {
    }

    public function useSearch()
    {
    }

    public function useCheckBox()
    {
    }

    public function renderNodes($data = null)
    {
    }

    public function getNodeFolderTemplate()
    {
    }

    public function getInputName()
    {
    }

    public function setInputName($value)
    {
    }

    public function getNodeItemTemplate()
    {
    }

    /* Override */

    private function fillTree(&$categories, $id_category)
    {
    }

    private function _disableCategories(&$categories, $disabled_categories = null)
    {
    }

    private function _getSelectedChildNumbers(&$categories, $selected, &$parent = null)
    {
    }
}
