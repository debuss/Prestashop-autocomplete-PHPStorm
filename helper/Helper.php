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

class Helper
{

    public $currentIndex;
    public $table;
    public $identifier;
    public $token;
    public $toolbar_btn;
    public $ps_help_context;
    public $title;
    public $show_toolbar = true;
    public $context;
    public $toolbar_scroll = false;
    /**
     * @var Module
     */
    public $module;
    /** @var string Helper tpl folder */
    public $base_folder;
    /** @var string Controller tpl folder */
    public $override_folder;
    /**
     * @var string base template name
     */
    public $base_tpl = 'content.tpl';
    public $tpl_vars = array();
    /**
     * @var smartyTemplate base template object
     */
    protected $tpl;

    public function __construct()
    {
    }

    /**
     * @deprecated 1.5.0
     */
    public static function renderAdminCategorieTree($translations,
                                                    $selected_cat = array(),
                                                    $input_name = 'categoryBox',
                                                    $use_radio = false,
                                                    $use_search = false,
                                                    $disabled_categories = array(),
                                                    $use_in_popup = false)
    {
    }

    public static function renderShopList()
    {
    }

    /**
     * @param array $root array with the name and ID of the tree root category, if null the Shop's root category will be used
     * @param type $selected_cat array of selected categories
     *                    Format
     *                        Array
     *                    (
     *                             [0] => 1
     *                         [1] => 2
     *                    )
     *                    OR
     *                    Array
     *                    (
     *                         [1] => Array
     *                              (
     *                                    [id_category] => 1
     *                                    [name] => Home page
     *                              )
     *                    )
     * @param string $input_name name of input
     * @param bool $use_radio use radio tree or checkbox tree
     * @param bool $use_search display a find category search box
     * @param array $disabled_categories
     * @param bool $use_in_popup
     * @param bool $use_shop_context
     * @return string
     */
    public function renderCategoryTree($root = null,
                                       $selected_cat = array(),
                                       $input_name = 'categoryBox',
                                       $use_radio = false,
                                       $use_search = false,
                                       $disabled_categories = array(),
                                       $use_in_popup = false,
                                       $use_shop_context = false)
    {
    }

    public function setTpl($tpl)
    {
    }

    /**
     * Create a template from the override file, else from the base file.
     *
     * @param string $tpl_name filename
     * @return Template
     */
    public function createTemplate($tpl_name)
    {
    }

    /**
     * default behaviour for helper is to return a tpl fetched
     *
     * @return void
     */
    public function generate()
    {
    }

    /**
     * Render a form with potentials required fields
     *
     * @param string $class_name
     * @param string $identifier
     * @param array $table_fields
     * @return string
     */
    public function renderRequiredFields($class_name, $identifier, $table_fields)
    {
    }

    public function renderModulesList($modules_list)
    {
    }

    /**
     * use translations files to replace english expression.
     *
     * @param mixed $string term or expression in english
     * @param string $class
     * @param boolan $addslashes if set to true, the return value will pass through addslashes(). Otherwise, stripslashes().
     * @param boolean $htmlentities if set to true(default), the return value will pass through htmlentities($string, ENT_QUOTES, 'utf-8')
     * @return string the translation if available, or the english default text.
     */
    protected function l($string, $class = 'AdminTab', $addslashes = false, $htmlentities = true)
    {
    }
}

