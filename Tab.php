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

class Tab extends ObjectModel
{

    const TAB_MODULE_LIST_URL = 'api.prestashop.com/xml/tab_modules_list.xml';
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'tab',
        'primary' => 'id_tab',
        'multilang' => true,
        'fields' => array(
            'id_parent' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),
            'position' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'module' => array('type' => self::TYPE_STRING, 'validate' => 'isTabName', 'size' => 64),
            'class_name' => array('type' => self::TYPE_STRING, 'required' => true, 'size' => 64),
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),

            // Lang fields
            'name' => array('type' => self::TYPE_STRING, 'lang' => true, 'required' => true, 'validate' => 'isGenericName', 'size' => 32),
        ),
    );
    protected static $_getIdFromClassName = null;
    /**
     * Get tabs
     *
     * @return array tabs
     */
    protected static $_cache_tabs = array();
    /** @var string Displayed name */
    public $name;
    /** @var string Class and file name */
    public $class_name;
    public $module;
    /** @var integer parent ID */
    public $id_parent;
    /** @var integer position */
    public $position;
    /** @var integer active */
    public $active = true;

    /**
     * Get tab id
     *
     * @return integer tab id
     */
    public static function getCurrentTabId()
    {
    }

    /**
     * Get tab parent id
     *
     * @return integer tab parent id
     */
    public static function getCurrentParentId()
    {
    }

    /**
     * Return the list of tab used by a module
     *
     * @static
     * @return array
     */
    public static function getModuleTabList()
    {
    }

    public static function getTabs($id_lang, $id_parent = null)
    {
    }

    /**
     * Enabling tabs for module
     *
     * @static
     * @param $module string Module Name
     * @return bool Status
     */
    public static function enablingForModule($module)
    {
    }

    /**
     * Get collection from module name
     *
     * @static
     * @param $module string Module name
     * @param null $id_lang integer Language ID
     * @return array|Collection Collection of tabs (or empty array)
     */
    public static function getCollectionFromModule($module, $id_lang = null)
    {
    }

    /**
     * Disabling tabs for module
     *
     * @static
     * @param $module string Module name
     * @return bool Status
     */
    public static function disablingForModule($module)
    {
    }

    /**
     * Get Instance from tab class name
     *
     * @param $class_name string Name of tab class
     * @return Tab Tab object (empty if bad id or class name)
     */
    public static function getInstanceFromClassName($class_name)
    {
    }

    public static function checkTabRights($id_tab)
    {
    }

    public static function recursiveTab($id_tab, $tabs)
    {
    }

    /**
     * Get tab
     *
     * @return array tab
     */
    public static function getTab($id_lang, $id_tab)
    {
    }

    public static function getTabByIdProfile($id_parent, $id_profile)
    {
    }

    public static function getTabModulesList($id_tab)
    {
    }

    /**
     * @since 1.5.0
     */
    public static function getClassNameById($id_tab)
    {
    }

    /**
     * Get tab id from name
     *
     * @param string class_name
     * @return int id_tab
     */
    public static function getIdFromClassName($class_name)
    {
    }

    /**
     * return an available position in subtab for parent $id_parent
     *
     * @param mixed $id_parent
     * @return int
     */
    public static function getNewLastPosition($id_parent)
    {
    }

    /** When creating a new tab $id_tab, this add default rights to the table access
     *
     * @todo this should not be public static but protected
     * @param int $id_tab
     * @param Context $context
     * @return boolean true if succeed
     */
    public static function initAccess($id_tab, Context $context = null)
    {
    }

    public static function getNbTabs($id_parent = null)
    {
    }

    /**
     * additionnal treatments for Tab when creating new one :
     * - generate a new position
     * - add access for admin profile
     *
     * @param boolean $autodate
     * @param boolean $null_values
     * @return int id_tab
     */
    public function add($autodate = true, $null_values = false)
    {
    }

    public function delete()
    {
    }

    public function cleanPositions($id_parent)
    {
    }

    public function move($direction)
    {
    }

    /**
     * Overrides update to set position to last when changing parent tab
     *
     * @see ObjectModel::update
     * @param bool $null_values
     * @return bool
     */
    public function update($null_values = false)
    {
    }

    public function updatePosition($way, $position)
    {
    }
}