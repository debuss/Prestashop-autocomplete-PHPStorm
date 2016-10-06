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

abstract class Module
{

    const CACHE_FILE_MODULES_LIST = '/config/xml/modules_list.xml';
    const CACHE_FILE_TAB_MODULES_LIST = '/config/xml/tab_modules_list.xml';
    const CACHE_FILE_DEFAULT_COUNTRY_MODULES_LIST = '/config/xml/default_country_modules_list.xml';
    const CACHE_FILE_CUSTOMER_MODULES_LIST = '/config/xml/customer_modules_list.xml';
    const CACHE_FILE_MUST_HAVE_MODULES_LIST = '/config/xml/must_have_modules_list.xml';
    /** @var array used by AdminTab to determine which lang file to use (admin.php or module lang file) */
    public static $classInModule = array();
    /** @var protected array cache filled with modules informations */
    protected static $modules_cache;
    /** @var protected array cache filled with modules instances */
    protected static $_INSTANCE = array();
    /** @var protected boolean filled with config xml generation mode */
    protected static $_generate_config_xml_mode = false;
    /** @var protected array filled with cache translations */
    protected static $l_cache = array();
    /** @var protected array filled with cache permissions (modules / employee profiles) */
    protected static $cache_permissions = array();
    protected static $exceptionsCache = null;
    /** @var integer Module ID */
    public $id = null;
    /** @var float Version */
    public $version;
    public $database_version;
    /**
     * @since 1.5.0.1
     * @var string Registered Version in database
     */
    public $registered_version;
    public $bootstrap;
    public $module_key;
    /** @var array filled with known compliant PS versions */
    public $ps_versions_compliancy = array('min' => '1.4', 'max' => '1.6');
    /** @var array filled with modules needed for install */
    public $dependencies = array();
    /** @var string Unique name */
    public $name;
    /** @var string Human name */
    public $displayName;
    /** @var string A little description of the module */
    public $description;
    /** @var string Confirmation message of the module */
    public $confirmUninstall;
    /** @var string author of the module */
    public $author;
    /** @var int need_instance */
    public $need_instance = 1;
    /** @var string Admin tab corresponding to the module */
    public $tab = null;
    /** @var boolean Status */
    public $active = false;
    /** @var string Fill it if the module is installed but not yet set up */
    public $warning;
    /** @var array to store the limited country */
    public $limited_countries = array();
    /** @var array current language translations */
    protected $_lang = array();
    /** @var string Module web path (eg. '/shop/modules/modulename/') */
    protected $_path = null;
    /**
     * @since 1.5.0.1
     * @var string Module local path (eg. '/home/prestashop/modules/modulename/')
     */
    protected $local_path = null;
    /** @var protected array filled with module errors */
    protected $_errors = array();
    /** @var protected array filled with module success */
    protected $_confirmations = array();
    /** @var protected string main table used for modules installed */
    protected $table = 'module';
    /** @var protected string identifier of the main table */
    protected $identifier = 'id_module';
    /** @var Context */
    protected $context;
    /** @var Smarty_Data */
    protected $smarty;

    /**
     * Constructor
     *
     * @param string $name Module unique name
     * @param Context $context
     */
    public function __construct($name = null, Context $context = null)
    {
    }

    /**
     * Init the upgrade module
     *
     * @static
     * @param $module_name
     * @param $module_version
     * @return bool
     */
    public static function initUpgradeModule($module)
    {
    }

    /**
     * Check if a module need to be upgraded.
     * This method modify the module_cache adding an upgrade list file
     *
     * @static
     * @param $module_name
     * @param $module_version
     * @return bool
     */
    public static function needUpgrade($module)
    {
    }

    /**
     * Return an instance of the specified module
     *
     * @param string $module_name Module name
     * @return Module
     */
    public static function getInstanceByName($module_name)
    {
    }

    /**
     * Upgrade the registered version to a new one
     *
     * @static
     * @param $name
     * @param $version
     * @return bool
     */
    public static function upgradeModuleVersion($name, $version)
    {
    }

    /**
     * Return the status of the upgraded module
     *
     * @static
     * @param $module_name
     * @return bool
     */
    public static function getUpgradeStatus($module_name)
    {
    }

    /**
     * This function enable module $name. If an $name is an array,
     * this will enable all of them
     *
     * @param array|string $name
     * @return true if succeed
     * @since 1.4.1
     */
    public static function enableByName($name)
    {
    }

    /**
     * This function disable module $name. If an $name is an array,
     * this will disable all of them
     *
     * @param array|string $name
     * @return true if succeed
     * @since 1.4.1
     */
    public static function disableByName($name)
    {
    }

    /**
     * This function is used to determine the module name
     * of an AdminTab which belongs to a module, in order to keep translation
     * related to a module in its directory (instead of $_LANGADM)
     *
     * @param mixed $currentClass the
     * @return boolean|string if the class belongs to a module, will return the module name. Otherwise, return false.
     */
    public static function getModuleNameFromClass($currentClass)
    {
    }

    /**
     * Return an instance of the specified module
     *
     * @param integer $id_module Module ID
     * @return Module instance
     */
    public static function getInstanceById($id_module)
    {
    }

    public static function getModuleName($module)
    {
    }

    public static function configXmlStringFormat($string)
    {
    }

    /**
     * Return available modules
     *
     * @param boolean $useConfig in order to use config.xml file in module dir
     * @return array Modules
     */
    public static function getModulesOnDisk($useConfig = false, $loggedOnAddons = false, $id_employee = false)
    {
    }

    /**
     * Return modules directory list
     *
     * @return array Modules Directory List
     */
    public static function getModulesDirOnDisk()
    {
    }

    /**
     * Return non native module
     *
     * @param int $position Take only positionnables modules
     * @return array Modules
     */
    public static function getNonNativeModuleList()
    {
    }

    /**
     * Return installed modules
     *
     * @param int $position Take only positionnables modules
     * @return array Modules
     */
    public static function getModulesInstalled($position = 0)
    {
    }

    /**
     * Execute modules for specified hook
     *
     * @param string $hook_name Hook Name
     * @param array $hookArgs Parameters for the functions
     * @return string modules output
     */
    public static function hookExec($hook_name, $hookArgs = array(), $id_module = null)
    {
    }

    public static function hookExecPayment()
    {
    }

    public static function preCall($module_name)
    {
    }

    /**
     * Returns the list of the payment module associated to the current customer
     *
     * @see PaymentModule::getInstalledPaymentModules() if you don't care about the context
     * @return array module informations
     */
    public static function getPaymentModules()
    {
    }

    public static function getPaypalIgnore()
    {
    }

    /**
     * @deprecated 1.5.0 Use Translate::getModuleTranslation()
     */
    public static function findTranslation($name, $string, $source)
    {
    }

    public static function isInstalled($module_name)
    {
    }

    public static function isEnabled($module_name)
    {
    }

    /**
     * Get Unauthorized modules for a client group
     *
     * @param integer group_id
     */
    public static function getAuthorizedModules($group_id)
    {
    }

    /**
     * Get id module by name
     *
     * @param string name
     * @return integer id
     */
    public static function getModuleIdByName($name)
    {
    }

    /**
     * Check employee permission for module (static method)
     *
     * @param integer $id_module
     * @param array $variable (action)
     * @param object $employee
     * @return bool if module can be transplanted on hook
     */
    public static function getPermissionStatic($id_module, $variable, $employee = null)
    {
    }

    /**
     * Load the available list of upgrade of a specified module
     * with an associated version
     *
     * @static
     * @param $module_name
     * @param $module_version
     * @param $registered_version
     * @return bool to know directly if any files have been found
     */
    protected static function loadUpgradeVersionList($module_name, $module_version, $registered_version)
    {
    }

    protected static function _isTemplateOverloadedStatic($module_name, $template)
    {
    }

    /**
     * Insert module into datable
     */
    public function install()
    {
    }

    /**
     * Get translation for a given module text
     * Note: $specific parameter is mandatory for library files.
     * Otherwise, translation key will not match for Module library
     * when module is loaded with eval() Module::getModulesOnDisk()
     *
     * @param string $string String to translate
     * @param boolean|string $specific filename to use in translation key
     * @return string Translation
     */
    public function l($string, $specific = false)
    {
    }

    /**
     * Install overrides files for the module
     *
     * @return bool
     */
    public function installOverrides()
    {
    }

    /**
     * Get local path for module
     *
     * @since 1.5.0
     * @return string
     */
    public function getLocalPath()
    {
    }

    /**
     * Add all methods in a module override to the override class
     *
     * @param string $classname
     * @return bool
     */
    public function addOverride($classname)
    {
    }

    /**
     * Activate current module.
     *
     * @param bool $forceAll If true, enable module for all shop
     */
    public function enable($forceAll = false)
    {
    }

    /*
     * Reposition module
     *
     * @param boolean $id_hook Hook ID
     * @param boolean $way Up (1) or Down (0)
     * @param int $position
     */

    /**
     * Run the upgrade for a given module name and version
     *
     * @return array
     */
    public function runUpgradeModule()
    {
    }

    /*
     * Reorder modules position
     *
     * @param boolean $id_hook Hook ID
     * @param array $shop_list List of shop
     */

    /**
     * Desactivate current module.
     *
     * @param bool $forceAll If true, disable module for all shop
     */
    public function disable($forceAll = false)
    {
    }

    /**
     * Delete module from datable
     *
     * @return boolean result
     */
    public function uninstall()
    {
    }

    /**
     * Uninstall overrides files for the module
     *
     * @return bool
     */
    public function uninstallOverrides()
    {
    }

    /*
     * Return exceptions for module in hook
     *
     * @param int $id_hook Hook ID
     * @return array Exceptions
     */

    /**
     * Remove all methods in a module override from the override class
     *
     * @param string $classname
     * @return bool
     */
    public function removeOverride($classname)
    {
    }

    /**
     * Unregister module from hook
     *
     * @param mixed $id_hook Hook id (can be a hook name since 1.5.0)
     * @param array $shop_list List of shop
     * @return boolean result
     */
    public function unregisterHook($hook_id, $shop_list = null)
    {
    }

    public function cleanPositions($id_hook, $shop_list = null)
    {
    }

    /**
     * Unregister exceptions linked to module
     *
     * @param int $id_hook Hook id
     * @param array $shop_list List of shop
     * @return boolean result
     */
    public function unregisterExceptions($hook_id, $shop_list = null)
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

    /*
    ** Template management (display, overload, cache)
    */

    /**
     * Connect module to a hook
     *
     * @param string $hook_name Hook name
     * @param array $shop_list List of shop linked to the hook (if null, link hook to all shops)
     * @return boolean result
     */
    public function registerHook($hook_name, $shop_list = null)
    {
    }

    /**
     * Edit exceptions for module->Hook
     *
     * @param int $hookID Hook id
     * @param array $excepts List of shopID and file name
     * @return boolean result
     */
    public function editExceptions($id_hook, $excepts)
    {
    }

    /**
     * Add exceptions for module->Hook
     *
     * @param int $id_hook Hook id
     * @param array $excepts List of file name
     * @param array $shop_list List of shop
     * @return boolean result
     */
    public function registerExceptions($id_hook, $excepts, $shop_list = null)
    {
    }

    public function updatePosition($id_hook, $way, $position = null)
    {
    }

    public function displayError($error)
    {
    }

    public function displayConfirmation($string)
    {
    }

    public function getExceptions($hookID, $dispatch = false)
    {
    }

    public function isRegisteredInHook($hook)
    {
    }

    public function display($file, $template, $cacheId = null, $compileId = null)
    {
    }

    /**
     * Get realpath of a template of current module (check if template is overriden too)
     *
     * @since 1.5.0
     * @param string $template
     * @return string
     */
    public function getTemplatePath($template)
    {
    }

    public function isCached($template, $cacheId = null, $compileId = null)
    {
    }

    /**
     * Check if the module is transplantable on the hook in parameter
     *
     * @param string $hook_name
     * @return bool if module can be transplanted on hook
     */
    public function isHookableOn($hook_name)
    {
    }

    /**
     * Check employee permission for module
     *
     * @param array $variable (action)
     * @param object $employee
     * @return bool if module can be transplanted on hook
     */
    public function getPermission($variable, $employee = null)
    {
    }

    /**
     * Get module errors
     *
     * @since 1.5.0
     * @return array errors
     */
    public function getErrors()
    {
    }

    /**
     * Get module messages confirmation
     *
     * @since 1.5.0
     * @return array conf
     */
    public function getConfirmations()
    {
    }

    /**
     * Get uri path for module
     *
     * @since 1.5.0
     * @return string
     */
    public function getPathUri()
    {
    }

    public function getPosition($id_hook)
    {
    }

    /**
     * add a warning message to display at the top of the admin page
     *
     * @param string $msg
     */
    public function adminDisplayWarning($msg)
    {
    }

    /*
     * Return module position for a given hook
     *
     * @param boolean $id_hook Hook ID
     * @return integer position
     */

    /**
     * Set errors, warning or success message of a module upgrade
     *
     * @param $upgrade_detail
     */
    protected function setUpgradeMessage($upgrade_detail)
    {
    }

    protected function _isTemplateOverloaded($template)
    {
    }

    protected function getCacheId($name = null)
    {
    }

    protected function _getApplicableTemplateDir($template)
    {
    }

    protected function _clearCache($template, $cache_id = null, $compile_id = null)
    {
    }

    protected function _generateConfigXml()
    {
    }

    /**
     * add a info message to display at the top of the admin page
     *
     * @param string $msg
     */
    protected function adminDisplayInformation($msg)
    {
    }
}

function ps_module_version_sort($a, $b)
{
    return version_compare($a['version'], $b['version']);
}
