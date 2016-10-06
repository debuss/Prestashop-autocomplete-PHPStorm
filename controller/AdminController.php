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

class AdminController extends Controller
{

    public static $currentIndex;
    /** @var array $cache_lang cache for traduction */
    public static $cache_lang = array();
    public $path;
    public $content;
    public $warnings = array();
    public $informations = array();
    public $confirmations = array();
    public $shopShareDatas = false;
    public $_languages = array();
    public $default_form_language;
    public $allow_employee_form_lang;
    public $layout = 'layout.tpl';
    public $template = 'content.tpl';
    /** @var string Associated table name */
    public $table;
    /** @var string Tab name */
    public $className;
    /** @var array tabAccess */
    public $tabAccess;
    /** @var integer Tab id */
    public $id = -1;
    public $required_database = false;
    /** @var string Security token */
    public $token;
    /** @var string shop | group_shop */
    public $shopLinkType;
    public $tpl_form_vars = array();
    public $tpl_list_vars = array();
    public $tpl_delete_link_vars = array();
    public $tpl_option_vars = array();
    public $tpl_view_vars = array();
    public $tpl_required_fields_vars = array();
    public $base_tpl_view = null;
    public $base_tpl_form = null;
    /** @var bool if you want more fieldsets in the form */
    public $multiple_fieldsets = false;
    public $fields_value = false;
    /** @var array Errors displayed after post processing */
    public $errors = array();
    /** @var boolean Automatically join language table if true */
    public $lang = false;
    /** @var array required_fields to display in the Required Fields form */
    public $required_fields = array();
    public $tpl_folder;
    /** @var array Name and directory where class image are located */
    public $fieldImageSettings = array();
    /** @var string Image type */
    public $imageType = 'jpg';
    /**
     * @var current controller name without suffix
     */
    public $controller_name;
    public $multishop_context = -1;
    public $multishop_context_group = true;
    protected $meta_title;
    /** @var string Object identifier inside the associated table */
    protected $identifier = false;
    /** @var string Default ORDER BY clause when $_orderBy is not defined */
    protected $_defaultOrderBy = false;
    protected $_defaultOrderWay = 'ASC';
    /** @var define if the header of the list contains filter and sorting links or not */
    protected $list_simple_header;
    /** @var array list to be generated */
    protected $fields_list;
    /** @var array modules list filters */
    protected $filter_modules_list = null;
    /** @var array modules list filters */
    protected $modules_list = array();
    /** @var array edit form to be generated */
    protected $fields_form;
    /** @var override of $fields_form */
    protected $fields_form_override;
    /** @var array list of option forms to be generated */
    protected $fields_options;
    protected $shopLink;
    /** @var string SQL query */
    protected $_listsql = '';
    /** @var array Cache for query results */
    protected $_list = array();
    /** @var define if the header of the list contains filter and sorting links or not */
    protected $toolbar_title;
    /** @var array list of toolbar buttons */
    protected $toolbar_btn = null;
    /** @var boolean scrolling toolbar */
    protected $toolbar_scroll = true;
    /** @var boolean set to false to hide toolbar and page title */
    protected $show_toolbar = true;
    /** @var boolean set to true to show toolbar and page title for options */
    protected $show_toolbar_options = false;
    /** @var integer Number of results in list */
    protected $_listTotal = 0;
    /** @var array WHERE clause determined by filter fields */
    protected $_filter;
    /** @var array Temporary SQL table WHERE clause determinated by filter fields */
    protected $_tmpTableFilter = '';
    /** @var array Number of results in list per page (used in select field) */
    protected $_pagination = array(20, 50, 100, 300);
    /** @var string ORDER BY clause determined by field/arrows in list header */
    protected $_orderBy;
    /** @var string Order way (ASC, DESC) determined by arrows in list header */
    protected $_orderWay;
    /** @var array list of available actions for each list row - default actions are view, edit, delete, duplicate */
    protected $actions_available = array('view', 'edit', 'delete', 'duplicate');
    /** @var array list of required actions for each list row */
    protected $actions = array();
    /** @var array list of row ids associated with a given action for witch this action have to not be available */
    protected $list_skip_actions = array();
    /* @var boolean don't show header & footer */
    protected $lite_display = false;
    /** @var bool boolean List content lines are clickable if true */
    protected $list_no_link = false;
    protected $allow_export = false;
    /** @var Helper */
    protected $helper;
    /**
     * @var array actions to execute on multiple selections
     * Usage:
     * array(
     *        'actionName' => array(
     *            'text' => $this->l('Message displayed on the submit button (mandatory)'),
     *            'confirm' => $this->l('If set, this confirmation message will pop-up (optional)')),
     *        'anotherAction' => array(...)
     * );
     * If your action is named 'actionName', you need to have a method named bulkactionName() that will be executed when the button is clicked.
     */
    protected $bulk_actions;
    /**
     * @var array ids of the rows selected
     */
    protected $boxes;
    /** @var string Do not automatically select * anymore but select only what is necessary */
    protected $explicitSelect = false;
    /** @var string Add fields into data query to display list */
    protected $_select;
    /** @var string Join tables into data query to display list */
    protected $_join;
    /** @var string Add conditions into data query to display list */
    protected $_where;
    /** @var string Group rows into data query to display list */
    protected $_group;
    /** @var string Having rows into data query to display list */
    protected $_having;
    protected $is_cms = false;
    /** @var string    identifier to use for changing positions in lists (can be omitted if positions cannot be changed) */
    protected $position_identifier;
    /** @var boolean Table records are not deleted but marked as deleted if set to true */
    protected $deleted = false;
    /**
     * @var bool is a list filter set
     */
    protected $filter;
    protected $noLink;
    protected $specificConfirmDelete = null;
    protected $colorOnBackground;
    /** @var bool If true, activates color on hover */
    protected $row_hover = true;
    /** @string Action to perform : 'edit', 'view', 'add', ... */
    protected $action;
    protected $display;
    protected $_includeContainer = true;
    protected $tab_modules_list = array('default_list' => array(), 'slider_list' => array());
    protected $bo_theme;
    /** @var bool Redirect or not ater a creation */
    protected $_redirect = true;
    /** @var instanciation of the class associated with the AdminController */
    protected $object;
    /** @var current object ID */
    protected $id_object;
    /**
     * Current breadcrumb position as an array of tab names
     */
    protected $breadcrumbs;
    /**
     * Display modules list
     *
     * @param $module
     * @param $output_type (link or select)
     * @param $back
     * @return string
     */
    protected $translationsTab = array();

    public function __construct()
    {
    }

    public function initShopContext()
    {
    }

    /**
     * Set breadcrumbs array for the controller page
     */
    public function initBreadcrumbs()
    {
    }

    public function ajaxProcessHelpAccess()
    {
    }

    /**
     * @todo uses redirectAdmin only if !$this->ajax
     */
    public function postProcess()
    {
    }

    /**
     * Set the filters used for the list display
     */
    public function processFilter()
    {
    }

    /**
     * Object Delete images
     */
    public function processDeleteImage()
    {
    }

    public function processExport()
    {
    }

    /**
     * Get the current objects' list form the database
     *
     * @param integer $id_lang Language used for display
     * @param string $order_by ORDER BY clause
     * @param string $_orderWay Order way (ASC, DESC)
     * @param integer $start Offset in LIMIT clause
     * @param integer $limit Row count in LIMIT clause
     */
    public function getList($id_lang, $order_by = null, $order_way = null, $start = 0, $limit = null, $id_lang_shop = false)
    {
    }

    /**
     * Object Delete
     */
    public function processDelete()
    {
    }

    /**
     * Call the right method for creating or updating object
     *
     * @return mixed
     */
    public function processSave()
    {
    }

    /**
     * Object update
     */
    public function processUpdate()
    {
    }

    /**
     * Manage page display (form, list...)
     *
     * @param string $className Allow to validate a different class than the current one
     */
    public function validateRules($class_name = false)
    {
    }

    /**
     * Object creation
     */
    public function processAdd()
    {
    }

    /**
     * Change object required fields
     */
    public function processUpdateFields()
    {
    }

    /**
     * Change object status (active, inactive)
     */
    public function processStatus()
    {
    }

    /**
     * Change object position
     */
    public function processPosition()
    {
    }

    /**
     * Cancel all filters for this tab
     */
    public function processResetFilters()
    {
    }

    /**
     * Check if the token is valid, else display a warning page
     */
    public function checkAccess()
    {
    }

    /**
     * Check for security token
     */
    public function checkToken()
    {
    }

    public function displayNoSmarty()
    {
    }

    public function display()
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
     * Check rights to view the current tab
     *
     * @param bool $disable
     * @return boolean
     */
    public function viewAccess($disable = false)
    {
    }

    /**
     * Assign smarty variables for the header
     */
    public function initHeader()
    {
    }

    /**
     * Declare an action to use for each row in the list
     */
    public function addRowAction($action)
    {
    }

    /**
     * Add  an action to use for each row in the list
     */
    public function addRowActionSkipList($action, $list)
    {
    }

    /**
     * Assign smarty variables for all default views, list and form, then call other init functions
     */
    public function initContent()
    {
    }

    public function getLanguages()
    {
    }

    /**
     * assign default action in toolbar_btn smarty var, if they are not set.
     * uses override to specifically add, modify or remove items
     */
    public function initToolbar()
    {
    }

    public function isFresh($file, $timeout = 604800000)
    {
    }

    public function refresh($file_to_refresh, $external_file)
    {
    }

    /**
     * Function used to render the form for this controller
     */
    public function renderForm()
    {
    }

    /**
     * this function set various display option for helper list
     *
     * @param Helper $helper
     * @return void
     */
    public function setHelperDisplay(Helper $helper)
    {
    }

    /**
     * set default toolbar_title to admin breadcrumb
     *
     * @return void
     */
    public function initToolbarTitle()
    {
    }

    /**
     * Return the list of fields value
     *
     * @param object $obj Object
     * @return array
     */
    public function getFieldsValue($obj)
    {
    }

    /**
     * Return field value if possible (both classical and multilingual fields)
     * Case 1 : Return value if present in $_POST / $_GET
     * Case 2 : Return object value
     *
     * @param object $obj Object
     * @param string $key Field name
     * @param integer $id_lang Language id (optional)
     * @return string
     */
    public function getFieldValue($obj, $key, $id_lang = null)
    {
    }

    /**
     * Override to render the view page
     */
    public function renderView()
    {
    }

    public function renderModulesList()
    {
    }

    public function getModulesList($filter_modules_list)
    {
    }

    public function fillModuleData(&$module, $output_type = 'link', $back = null)
    {
    }

    public function displayModuleOptions($module, $output_type = 'link', $back = null)
    {
    }

    /**
     * Function used to render the list to display for this controller
     */
    public function renderList()
    {
    }

    /**
     * Function used to render the options for this controller
     */
    public function renderOptions()
    {
    }

    /**
     * prepare the view to display the required fields form
     */
    public function displayRequiredFields()
    {
    }

    /**
     * initialize the invalid doom page of death
     *
     * @return void
     */
    public function initCursedPage()
    {
    }

    /**
     * Assign smarty variables for the footer
     */
    public function initFooter()
    {
    }

    public function setMedia()
    {
    }

    /**
     * Init context and dependencies, handles POST and GET
     */
    public function init()
    {
    }

    /**
     * Retrieve GET and POST value and translate them to actions
     */
    public function initProcess()
    {
    }

    /**
     * Display object details
     */
    public function viewDetails()
    {
    }

    /**
     * Shortcut to set up a json error payload
     *
     * @param $message error message
     */
    public function jsonError($message)
    {
    }

    /**
     * Can be overriden
     */
    public function beforeUpdateOptions()
    {
    }

    /**
     * non-static method which uses AdminController::translate()
     *
     * @param mixed $string term or expression in english
     * @param string $class name of the class
     * @param boolan $addslashes if set to true, the return value will pass through addslashes(). Otherwise, stripslashes().
     * @param boolean $htmlentities if set to true(default), the return value will pass through htmlentities($string, ENT_QUOTES, 'utf-8')
     * @return string the translation if available, or the english default text.
     */
    protected function l($string, $class = 'AdminTab', $addslashes = false, $htmlentities = true)
    {
    }

    protected function filterToField($key, $filter)
    {
    }

    /**
     * Load class object using identifier in $_GET (if possible)
     * otherwise return an empty object, or die
     *
     * @param boolean $opt Return an empty object if load fail
     * @return object
     */
    protected function loadObject($opt = false)
    {
    }

    /**
     * Overload this method for custom checking
     */
    protected function _childValidation()
    {
    }

    /**
     * Copy datas from $_POST to object
     *
     * @param object &$object Object
     * @param string $table Object table
     */
    protected function copyFromPost(&$object, $table)
    {
    }

    /**
     * Called before deletion
     *
     * @param object $object Object
     * @return boolean
     */
    protected function afterDelete($object, $oldId)
    {
    }

    protected function afterUpdate($object)
    {
    }

    /**
     * Update the associations of shops
     *
     * @param int $id_object
     */
    protected function updateAssoShop($id_object)
    {
    }

    /**
     * Returns an array with selected shops and type (group or boutique shop)
     *
     * @param string $table
     * @return array
     */
    protected function getSelectedAssoShop($table)
    {
    }

    /**
     * Overload this method for custom checking
     *
     * @param integer $id Object id used for deleting images
     * @return boolean
     */
    protected function postImage($id)
    {
    }

    protected function uploadImage($id, $name, $dir, $ext = false, $width = null, $height = null)
    {
    }

    /**
     * Check rights to view the current tab
     *
     * @return boolean
     */

    protected function afterImageUpload()
    {
    }

    /**
     * Called before Add
     *
     * @param object $object Object
     * @return boolean
     */
    protected function beforeAdd($object)
    {
    }

    protected function afterAdd($object)
    {
    }

    protected function addToolBarModulesListButton()
    {
    }

    /**
     * init tab modules list and add button in toolbar
     */
    protected function initTabModuleList()
    {
    }

    /**
     * add a warning message to display at the top of the page
     *
     * @param string $msg
     */
    protected function displayWarning($msg)
    {
    }

    /**
     * Update options and preferences
     */
    protected function processUpdateOptions()
    {
    }

    protected function redirect()
    {
    }

    /**
     * add a info message to display at the top of the page
     *
     * @param string $msg
     */
    protected function displayInformation($msg)
    {
    }

    /**
     * Delete multiple items
     *
     * @return boolean true if succcess
     */
    protected function processBulkDelete()
    {
    }

    /**
     * Enable multiple items
     *
     * @return boolean true if succcess
     */
    protected function processBulkEnableSelection()
    {
    }

    /**
     * Toggle status of multiple items
     *
     * @return boolean true if succcess
     */
    protected function processBulkStatusSelection($status)
    {
    }

    /**
     * Disable multiple items
     *
     * @return boolean true if succcess
     */
    protected function processBulkDisableSelection()
    {
    }

    protected function processBulkAffectZone()
    {
    }
}