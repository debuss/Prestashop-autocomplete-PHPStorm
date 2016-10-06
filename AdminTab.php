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

/**
 * @deprecated 1.5.0
 */
abstract class AdminTab
{

    public static $currentIndex;
    public static $tabParenting = array(
        'AdminCms' => 'AdminCmsContent',
        'AdminCmsCategories' => 'AdminCmsContent',
        'AdminOrdersStates' => 'AdminStatuses',
        'AdminAttributeGenerator' => 'AdminProducts',
        'AdminAttributes' => 'AdminAttributesGroups',
        'AdminFeaturesValues' => 'AdminFeatures',
        'AdminReturnStates' => 'AdminStatuses',
        'AdminStatsTab' => 'AdminStats'
    );
    /** @var integer Tab id */
    public $id = -1;
    /** @var string Associated table name */
    public $table;
    /** @var string Tab name */
    public $className;
    /** @var string Security token */
    public $token;
    /** @var boolean Automatically join language table if true */
    public $lang = false;
    /** @var boolean Tab Automatically displays edit/delete icons if true */
    public $edit = false;
    /** @var boolean Tab Automatically displays view icon if true */
    public $view = false;
    /** @var boolean Tab Automatically displays delete icon if true */
    public $delete = false;
    /** @var boolean Table records are not deleted but marked as deleted */
    public $deleted = false;
    /** @var boolean Tab Automatically displays duplicate icon if true */
    public $duplicate = false;
    /** @var boolean Content line is clickable if true */
    public $noLink = false;
    /** @var boolean select other required fields */
    public $requiredDatabase = false;
    /** @var boolean Tab Automatically displays '$color' as background color on listing if true */
    public $colorOnBackground = false;
    /** @var array Name and directory where class image are located */
    public $fieldImageSettings = array();
    /** @var string Image type */
    public $imageType = 'jpg';
    /** @var array Fields to display in list */
    public $fieldsDisplay = array();
    public $optionTitle = null;
    /** @var string shop */
    public $shopLinkType;
    /** @var bool */
    public $shopShareDatas = false;
    /** @var array Errors displayed after post processing */
    public $_errors = array();
    /** @var array tabAccess */
    public $tabAccess;
    /** @var string specificConfirmDelete */
    public $specificConfirmDelete = null;
    public $smarty;
    public $_fieldsOptions = array();
    /**
     * @since 1.5.0
     * @var array
     */
    public $optionsList = array();
    /**
     * @since 1.5.0
     * @var Context
     */
    public $context;
    public $ajax = false;
    /**
     * if true, ajax-tab will not wait 1 sec
     *
     * @var boolean
     */
    public $ignore_sleep = false;
    /** @var string Object identifier inside the associated table */
    protected $identifier = false;
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
    /** @var array Cache for query results */
    protected $_list = array();
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
    /** @var string Default ORDER BY clause when $_orderBy is not defined */
    protected $_defaultOrderBy = false;
    /** @var string Order way (ASC, DESC) determined by arrows in list header */
    protected $_orderWay;
    /** @var integer Max image size for upload
     * As of 1.5 it is recommended to not set a limit to max image size
     **/
    protected $maxImageSize;
    /** @var array Confirmations displayed after post processing */
    protected $_conf;
    /** @var object Object corresponding to the tab */
    protected $_object = false;
    protected $identifiersDnd = array('id_product' => 'id_product', 'id_category' => 'id_category_to_move', 'id_cms_category' => 'id_cms_category_to_move', 'id_cms' => 'id_cms', 'id_attribute' => 'id_attribute', 'id_attribute_group' => 'id_attribute_group', 'id_feature' => 'id_feature', 'id_carrier' => 'id_carrier');
    /** @var bool Redirect or not ater a creation */
    protected $_redirect = true;
    /** @var bool If false, don't add form tags in options forms */
    protected $formOptions = true;
    protected $_languages = null;
    protected $_defaultFormLanguage = null;
    protected $_includeObj = array();
    protected $_includeVars = false;
    protected $_includeContainer = true;

    public function __construct()
    {
    }

    protected static function getAssoShop($table, $id_object = false)
    {
    }

    /**
     * ajaxDisplay is the default ajax return sytem
     *
     * @return void
     */
    public function displayAjax()
    {
    }

    public function includeSubTab($methodname, $actions = array())
    {
    }

    /**
     * Display form
     */
    public function displayForm($firstCall = true)
    {
    }

    /**
     * Get the current objects' list form the database
     *
     * @param integer $id_lang Language used for display
     * @param string $orderBy ORDER BY clause
     * @param string $_orderWay Order way (ASC, DESC)
     * @param integer $start Offset in LIMIT clause
     * @param integer $limit Row count in LIMIT clause
     */
    public function getList($id_lang, $orderBy = null, $orderWay = null, $start = 0, $limit = null, $id_lang_shop = false)
    {
    }

    /**
     * Display list
     */
    public function displayList()
    {
    }

    public function displayTop()
    {
    }

    /**
     * Display a warning message
     *
     * @param string $warn Warning message to display
     */
    public function displayWarning($warn)
    {
    }

    /**
     * Display list header (filtering, pagination and column names)
     */
    public function displayListHeader($token = null)
    {
    }

    public function displayListContent($token = null)
    {
    }

    /**
     * Close list table and submit button
     */
    public function displayListFooter($token = null)
    {
    }

    /**
     * Options lists
     */
    public function displayOptionsList()
    {
    }

    /**
     * Can be overriden
     */
    public function displayTopOptionCategory($category, $data)
    {
    }

    /**
     * Can be overriden
     */
    public function displayBottomOptionCategory($category, $data)
    {
    }

    /**
     * Overload this method for custom checking
     *
     * @param integer $id Object id used for deleting images
     * @deprecated As of 1.5 use ObjectModel->deleteImage instead.
     */
    public function deleteImage($id)
    {
    }

    /**
     * ajaxPreProcess is a method called in ajax-tab.php before displayConf().
     *
     * @return void
     */
    public function ajaxPreProcess()
    {
    }

    /**
     * Manage page processing
     */
    public function postProcess()
    {
    }

    /**
     * Display errors
     */
    public function displayErrors()
    {
    }

    /**
     * Manage page display (form, list...)
     *
     * @param string $className Allow to validate a different class than the current one
     */
    public function validateRules($className = false)
    {
    }

    /**
     * Can be overriden
     */
    public function beforeUpdateOptions()
    {
    }

    /**
     * Display confirmations
     */
    public function displayConf()
    {
    }

    /**
     * Display image aside object form
     *
     * @param integer $id Object id
     * @param string $image Local image filepath
     * @param integer $size Image width
     * @param integer $id_image Image id (for products with several images)
     * @param string $token Employee token used in the image deletion link
     * @param boolean $disableCache When turned on a timestamp will be added to the image URI to disable the HTTP cache
     */
    public function displayImage($id, $image, $size, $id_image = null, $token = null, $disableCache = false)
    {
    }

    /**
     * Type = select
     */
    public function displayOptionTypeSelect($key, $field, $value)
    {
    }

    /**
     * Type = bool
     */
    public function displayOptionTypeBool($key, $field, $value)
    {
    }

    /**
     * Type = radio
     */
    public function displayOptionTypeRadio($key, $field, $value)
    {
    }

    /**
     * Type = password
     */
    public function displayOptionTypePassword($key, $field, $value)
    {
    }

    /**
     * Type = textarea
     */
    public function displayOptionTypeTextarea($key, $field, $value)
    {
    }

    /**
     * Type = file
     */
    public function displayOptionTypeFile($key, $field, $value)
    {
    }

    /**
     * Type = image
     */
    public function displayOptionTypeImage($key, $field, $value)
    {
    }

    /**
     * Type = textLang
     */
    public function displayOptionTypeTextLang($key, $field, $value)
    {
    }

    /**
     * Display flags in forms for translations
     *
     * @param array $languages All languages available
     * @param integer $default_language Default language id
     * @param string $ids Multilingual div ids in form
     * @param string $id Current div id]
     * @param boolean $return define the return way : false for a display, true for a return
     * @param boolean $use_vars_instead_of_ids use an js vars instead of ids seperate by "¤"
     */
    public function displayFlags($languages, $default_language, $ids, $id, $return = false, $use_vars_instead_of_ids = false)
    {
    }

    /**
     * Type = TextareaLang
     */
    public function displayOptionTypeTextareaLang($key, $field, $value)
    {
    }

    /**
     * Type = selectLang
     */
    public function displayOptionTypeSelectLang($key, $field, $value)
    {
    }

    /**
     * Type = price
     */
    public function displayOptionTypePrice($key, $field, $value)
    {
    }

    /**
     * Type = disabled
     */
    public function displayOptionTypeDisabled($key, $field, $value)
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
    public function getFieldValue($obj, $key, $id_lang = null, $id_shop = null)
    {
    }

    /**
     * Display object details
     */
    public function viewDetails()
    {
    }

    /**
     * Check for security token
     */
    public function checkToken()
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

    protected function _displayEnableLink($token, $id, $value, $active, $id_category = null, $id_product = null)
    {
    }

    protected function _displayViewLink($token = null, $id)
    {
    }

    protected function _displayEditLink($token = null, $id)
    {
    }

    protected function _displayDeleteLink($token = null, $id)
    {
    }

    protected function _displayDuplicate($token = null, $id)
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

    protected function updateAssoShop($id_object = false)
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

    protected function afterAdd($object)
    {
    }

    /**
     * Update options and preferences
     *
     * @param string $token
     */
    protected function updateOptions($token)
    {
    }

    protected function filterToField($key, $filter)
    {
    }

    protected function warnDomainName()
    {
    }

    protected function displayAssoShop()
    {
    }

    /**
     * Get current URL
     *
     * @param array $remove List of keys to remove from URL
     * @return string
     */
    protected function getCurrentUrl($remove = array())
    {
    }
}
