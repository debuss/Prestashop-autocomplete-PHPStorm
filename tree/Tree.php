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

class TreeCore
{

    const DEFAULT_TEMPLATE_DIRECTORY = 'helpers/tree';
    const DEFAULT_TEMPLATE = 'tree.tpl';
    const DEFAULT_HEADER_TEMPLATE = 'tree_header.tpl';
    const DEFAULT_NODE_FOLDER_TEMPLATE = 'tree_node_folder.tpl';
    const DEFAULT_NODE_ITEM_TEMPLATE = 'tree_node_item.tpl';
    protected $_attributes;
    protected $_data;
    protected $_data_search;
    protected $_headerTemplate;
    protected $_id_tree;
    protected $_node_folder_template;
    protected $_node_item_template;
    protected $_template;
    private $_context;
    private $_id;
    /** @var string */
    private $_template_directory;
    private $_title;
    private $_no_js;
    /** @var TreeToolbar|ITreeToolbar */
    private $_toolbar;

    public function __construct($id, $data = null)
    {
    }

    public function __toString()
    {
    }

    public function render($data = null)
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

    /**
     * @return string
     */
    public function getTemplateDirectory()
    {
    }

    /**
     * @param $value
     * @return Tree
     */
    public function setTemplateDirectory($value)
    {
    }

    public function getTemplate()
    {
    }

    public function setTemplate($value)
    {
    }

    public function getTitle()
    {
    }

    public function setTitle($value)
    {
    }

    public function useToolbar()
    {
    }

    public function getHeaderTemplate()
    {
    }

    public function setHeaderTemplate($value)
    {
    }

    public function getAttributes()
    {
    }

    public function setAttributes($value)
    {
    }

    public function renderToolbar()
    {
    }

    public function getToolbar()
    {
    }

    public function setToolbar($value)
    {
    }

    public function getDataSearch()
    {
    }

    public function setDataSearch($value)
    {
    }

    public function getData()
    {
    }

    public function setData($value)
    {
    }

    public function getId()
    {
    }

    public function setId($value)
    {
    }

    public function renderNodes($data = null)
    {
    }

    public function getNodeFolderTemplate()
    {
    }

    public function setNodeFolderTemplate($value)
    {
    }

    public function getNodeItemTemplate()
    {
    }

    public function setNodeItemTemplate($value)
    {
    }

    public function getIdTree()
    {
    }

    public function setIdTree($id_tree)
    {
    }

    public function setActions($value)
    {
    }

    public function getActions()
    {
    }

    public function setAttribute($name, $value)
    {
    }

    public function getAttribute($name)
    {
    }

    public function setNoJS($value)
    {
    }

    public function addAction($action)
    {
    }

    public function removeActions()
    {
    }

    public function useInput()
    {
    }

    private function _normalizeDirectory($directory)
    {
    }
}
