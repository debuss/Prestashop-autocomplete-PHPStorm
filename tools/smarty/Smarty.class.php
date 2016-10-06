<?php
/**
 * Project:     Smarty: the PHP compiling template engine
 * File:        Smarty.class.php
 * SVN:         $Id: Smarty.class.php 4848 2014-06-08 18:12:09Z Uwe.Tews@googlemail.com $
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 * For questions, help, comments, discussion, etc., please join the
 * Smarty mailing list. Send a blank e-mail to
 * smarty-discussion-subscribe@googlegroups.com
 *
 * @link      http://www.smarty.net/
 * @copyright 2008 New Digital Group, Inc.
 * @author    Monte Ohrt <monte at ohrt dot com>
 * @author    Uwe Tews
 * @author    Rodney Rehm
 * @package   Smarty
 * @version   3.1.19
 */

/**
 * define shorthand directory separator constant
 */
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

/**
 * set SMARTY_DIR to absolute path to Smarty library files.
 * Sets SMARTY_DIR only if user application has not already defined it.
 */
if (!defined('SMARTY_DIR')) {
    define('SMARTY_DIR', dirname(__FILE__).DS);
}

/**
 * set SMARTY_SYSPLUGINS_DIR to absolute path to Smarty internal plugins.
 * Sets SMARTY_SYSPLUGINS_DIR only if user application has not already defined it.
 */
if (!defined('SMARTY_SYSPLUGINS_DIR')) {
    define('SMARTY_SYSPLUGINS_DIR', SMARTY_DIR.'sysplugins'.DS);
}
if (!defined('SMARTY_PLUGINS_DIR')) {
    define('SMARTY_PLUGINS_DIR', SMARTY_DIR.'plugins'.DS);
}
if (!defined('SMARTY_MBSTRING')) {
    define('SMARTY_MBSTRING', function_exists('mb_split'));
}
if (!defined('SMARTY_RESOURCE_CHAR_SET')) {
    // UTF-8 can only be done properly when mbstring is available!
    /**
     * @deprecated in favor of Smarty::$_CHARSET
     */
    define('SMARTY_RESOURCE_CHAR_SET', SMARTY_MBSTRING ? 'UTF-8' : 'ISO-8859-1');
}
if (!defined('SMARTY_RESOURCE_DATE_FORMAT')) {
    /**
     * @deprecated in favor of Smarty::$_DATE_FORMAT
     */
    define('SMARTY_RESOURCE_DATE_FORMAT', '%b %e, %Y');
}

/**
 * register the class autoloader
 */
if (!defined('SMARTY_SPL_AUTOLOAD')) {
    define('SMARTY_SPL_AUTOLOAD', 0);
}

if (SMARTY_SPL_AUTOLOAD && set_include_path(get_include_path().PATH_SEPARATOR.SMARTY_SYSPLUGINS_DIR) !== false) {
    $registeredAutoLoadFunctions = spl_autoload_functions();
    if (!isset($registeredAutoLoadFunctions['spl_autoload'])) {
        spl_autoload_register();
    }
} else {
    spl_autoload_register('smartyAutoload');
}

/**
 * Load always needed external class files
 */
include_once SMARTY_SYSPLUGINS_DIR.'smarty_internal_data.php';
include_once SMARTY_SYSPLUGINS_DIR.'smarty_internal_templatebase.php';
include_once SMARTY_SYSPLUGINS_DIR.'smarty_internal_template.php';
include_once SMARTY_SYSPLUGINS_DIR.'smarty_resource.php';
include_once SMARTY_SYSPLUGINS_DIR.'smarty_internal_resource_file.php';
include_once SMARTY_SYSPLUGINS_DIR.'smarty_cacheresource.php';
include_once SMARTY_SYSPLUGINS_DIR.'smarty_internal_cacheresource_file.php';

/**
 * This is the main Smarty class
 *
 * @package Smarty
 */
class Smarty extends Smarty_Internal_TemplateBase
{

    /**#@+
     * constant definitions
     */

    /**
     * smarty version
     */
    const SMARTY_VERSION = 'Smarty-3.1.19';
    /**
     * define variable scopes
     */
    const SCOPE_LOCAL = 0;
    const SCOPE_PARENT = 1;
    const SCOPE_ROOT = 2;
    const SCOPE_GLOBAL = 3;
    /**
     * define caching modes
     */
    const CACHING_OFF = 0;
    const CACHING_LIFETIME_CURRENT = 1;
    const CACHING_LIFETIME_SAVED = 2;
    /**
     * define constant for clearing cache files be saved expiration datees
     */
    const CLEAR_EXPIRED = -1;
    /**
     * define compile check modes
     */
    const COMPILECHECK_OFF = 0;
    const COMPILECHECK_ON = 1;
    const COMPILECHECK_CACHEMISS = 2;
    /**
     * modes for handling of "<?php ... ?>" tags in templates.
     */
    const PHP_PASSTHRU = 0; //-> print tags as plain text
    const PHP_QUOTE = 1; //-> escape tags as entities
    const PHP_REMOVE = 2; //-> escape tags as entities
    const PHP_ALLOW = 3; //-> escape tags as entities
    /**
     * filter types
     */
    const FILTER_POST = 'post';
    const FILTER_PRE = 'pre';
    const FILTER_OUTPUT = 'output';
    const FILTER_VARIABLE = 'variable';
    /**
     * plugin types
     */
    const PLUGIN_FUNCTION = 'function';
    const PLUGIN_BLOCK = 'block';
    const PLUGIN_COMPILER = 'compiler';
    const PLUGIN_MODIFIER = 'modifier';
    const PLUGIN_MODIFIERCOMPILER = 'modifiercompiler';
    /**#@-*/

    /**
     * assigned global tpl vars
     */
    public static $global_tpl_vars = array();
    /**
     * error handler returned by set_error_hanlder() in Smarty::muteExpectedErrors()
     */
    public static $_previous_error_handler = null;
    /**
     * contains directories outside of SMARTY_DIR that are to be muted by muteExpectedErrors()
     */
    public static $_muted_directories = array();
    /**
     * Flag denoting if Multibyte String functions are available
     */
    public static $_MBSTRING = SMARTY_MBSTRING;
    /**
     * The character set to adhere to (e.g. "UTF-8")
     */
    public static $_CHARSET = SMARTY_RESOURCE_CHAR_SET;
    /**
     * The date format to be used internally
     * (accepts date() and strftime())
     */
    public static $_DATE_FORMAT = SMARTY_RESOURCE_DATE_FORMAT;
    /**
     * Flag denoting if PCRE should run in UTF-8 mode
     */
    public static $_UTF8_MODIFIER = 'u';
    /**
     * Flag denoting if operating system is windows
     */
    public static $_IS_WINDOWS = false;
    /**#@+
     * variables
     */
    /**
     * global internal smarty vars
     *
     * @var array
     */
    public static $_smarty_vars = array();
    /**
     * Cache of is_file results of loadPlugin()
     *
     * @var array
     */
    public static $_is_file_cache = array();
    /**
     * auto literal on delimiters with whitspace
     *
     * @var boolean
     */
    public $auto_literal = true;
    /**
     * display error on not assigned variables
     *
     * @var boolean
     */
    public $error_unassigned = false;
    /**
     * look up relative filepaths in include_path
     *
     * @var boolean
     */
    public $use_include_path = false;
    /**
     * joined template directory string used in cache keys
     *
     * @var string
     */
    public $joined_template_dir = null;
    /**
     * joined config directory string used in cache keys
     *
     * @var string
     */
    public $joined_config_dir = null;
    /**
     * default template handler
     *
     * @var callable
     */
    public $default_template_handler_func = null;
    /**
     * default config handler
     *
     * @var callable
     */
    public $default_config_handler_func = null;
    /**
     * default plugin handler
     *
     * @var callable
     */
    public $default_plugin_handler_func = null;
    /**
     * force template compiling?
     *
     * @var boolean
     */
    public $force_compile = false;
    /**
     * check template for modifications?
     *
     * @var boolean
     */
    public $compile_check = true;
    /**
     * use sub dirs for compiled/cached files?
     *
     * @var boolean
     */
    public $use_sub_dirs = false;
    /**
     * allow ambiguous resources (that are made unique by the resource handler)
     *
     * @var boolean
     */
    public $allow_ambiguous_resources = false;
    /**
     * caching enabled
     *
     * @var boolean
     */
    public $caching = false;
    /**
     * merge compiled includes
     *
     * @var boolean
     */
    public $merge_compiled_includes = false;
    /**
     * template inheritance merge compiled includes
     *
     * @var boolean
     */
    public $inheritance_merge_compiled_includes = true;
    /**
     * cache lifetime in seconds
     *
     * @var integer
     */
    public $cache_lifetime = 3600;
    /**
     * force cache file creation
     *
     * @var boolean
     */
    public $force_cache = false;
    /**
     * Set this if you want different sets of cache files for the same
     * templates.
     *
     * @var string
     */
    public $cache_id = null;
    /**
     * Set this if you want different sets of compiled files for the same
     * templates.
     *
     * @var string
     */
    public $compile_id = null;
    /**
     * template left-delimiter
     *
     * @var string
     */
    public $left_delimiter = "{";
    /**
     * template right-delimiter
     *
     * @var string
     */
    public $right_delimiter = "}";
    /**
     * class name
     * This should be instance of Smarty_Security.
     *
     * @var string
     * @see Smarty_Security
     */
    public $security_class = 'Smarty_Security';
    /**
     * implementation of security class
     *
     * @var Smarty_Security
     */
    public $security_policy = null;
    /**
     * controls handling of PHP-blocks
     *
     * @var integer
     */
    public $php_handling = self::PHP_PASSTHRU;
    /**#@+
     * security
     */
    /**
     * controls if the php template file resource is allowed
     *
     * @var bool
     */
    public $allow_php_templates = false;
    /**
     * Should compiled-templates be prevented from being called directly?
     * {@internal
     * Currently used by Smarty_Internal_Template only.
     * }}
     *
     * @var boolean
     */
    public $direct_access_security = true;
    /**
     * debug mode
     * Setting this to true enables the debug-console.
     *
     * @var boolean
     */
    public $debugging = false;
    /**
     * This determines if debugging is enable-able from the browser.
     * <ul>
     *  <li>NONE => no debugging control allowed</li>
     *  <li>URL => enable debugging when SMARTY_DEBUG is found in the URL.</li>
     * </ul>
     *
     * @var string
     */
    public $debugging_ctrl = 'NONE';
    /**
     * Name of debugging URL-param.
     * Only used when $debugging_ctrl is set to 'URL'.
     * The name of the URL-parameter that activates debugging.
     *
     * @var type
     */
    public $smarty_debug_id = 'SMARTY_DEBUG';
    /**#@-*/
    /**
     * Path of debug template.
     *
     * @var string
     */
    public $debug_tpl = null;
    /**
     * When set, smarty uses this value as error_reporting-level.
     *
     * @var int
     */
    public $error_reporting = null;
    /**
     * Internal flag for getTags()
     *
     * @var boolean
     */
    public $get_used_tags = false;
    /**
     * Controls whether variables with the same name overwrite each other.
     *
     * @var boolean
     */
    public $config_overwrite = true;
    /**
     * Controls whether config values of on/true/yes and off/false/no get converted to boolean.
     *
     * @var boolean
     */
    public $config_booleanize = true;
    /**
     * Controls whether hidden config sections/vars are read from the file.
     *
     * @var boolean
     */
    public $config_read_hidden = false;
    /**#@+
     * config var settings
     */
    /**
     * locking concurrent compiles
     *
     * @var boolean
     */
    public $compile_locking = true;
    /**
     * Controls whether cache resources should emply locking mechanism
     *
     * @var boolean
     */
    public $cache_locking = false;
    /**
     * seconds to wait for acquiring a lock before ignoring the write lock
     *
     * @var float
     */
    public $locking_timeout = 10;
    /**#@-*/

    /**#@+
     * resource locking
     */
    /**
     * global template functions
     *
     * @var array
     */
    public $template_functions = array();
    /**
     * resource type used if none given
     * Must be an valid key of $registered_resources.
     *
     * @var string
     */
    public $default_resource_type = 'file';
    /**
     * caching type
     * Must be an element of $cache_resource_types.
     *
     * @var string
     */
    public $caching_type = 'file';
    /**#@-*/
    /**
     * internal config properties
     *
     * @var array
     */
    public $properties = array();
    /**
     * config type
     *
     * @var string
     */
    public $default_config_type = 'file';
    /**
     * cached template objects
     *
     * @var array
     */
    public $template_objects = array();
    /**
     * check If-Modified-Since headers
     *
     * @var boolean
     */
    public $cache_modified_check = false;
    /**
     * registered plugins
     *
     * @var array
     */
    public $registered_plugins = array();
    /**
     * plugin search order
     *
     * @var array
     */
    public $plugin_search_order = array('function', 'block', 'compiler', 'class');
    /**
     * registered objects
     *
     * @var array
     */
    public $registered_objects = array();
    /**
     * registered classes
     *
     * @var array
     */
    public $registered_classes = array();
    /**
     * registered filters
     *
     * @var array
     */
    public $registered_filters = array();
    /**
     * registered resources
     *
     * @var array
     */
    public $registered_resources = array();
    /**
     * resource handler cache
     *
     * @var array
     */
    public $_resource_handlers = array();
    /**
     * registered cache resources
     *
     * @var array
     */
    public $registered_cache_resources = array();
    /**
     * cache resource handler cache
     *
     * @var array
     */
    public $_cacheresource_handlers = array();
    /**
     * autoload filter
     *
     * @var array
     */
    public $autoload_filters = array();
    /**
     * default modifier
     *
     * @var array
     */
    public $default_modifiers = array();
    /**
     * autoescape variable output
     *
     * @var boolean
     */
    public $escape_html = false;
    /**
     * start time for execution time calculation
     *
     * @var int
     */
    public $start_time = 0;
    /**
     * default file permissions
     *
     * @var int
     */
    public $_file_perms = 0644;
    /**
     * default dir permissions
     *
     * @var int
     */
    public $_dir_perms = 0771;
    /**
     * block tag hierarchy
     *
     * @var array
     */
    public $_tag_stack = array();
    /**
     * self pointer to Smarty object
     *
     * @var Smarty
     */
    public $smarty;
    /**
     * required by the compiler for BC
     *
     * @var string
     */
    public $_current_file = null;
    /**
     * internal flag to enable parser debugging
     *
     * @var bool
     */
    public $_parserdebug = false;
    /**
     * Saved parameter of merged templates during compilation
     *
     * @var array
     */
    public $merged_templates_func = array();
    /**
     * template directory
     *
     * @var array
     */
    private $template_dir = array();
    /**
     * compile directory
     *
     * @var string
     */
    private $compile_dir = null;
    /**
     * plugins directory
     *
     * @var array
     */
    private $plugins_dir = array();
    /**
     * cache directory
     *
     * @var string
     */
    private $cache_dir = null;
    /**
     * config directory
     *
     * @var array
     */
    private $config_dir = array();
    /**#@-*/

    /**
     * Initialize new Smarty object
     */
    public function __construct()
    {
    }

    /**
     * Error Handler to mute expected messages
     *
     * @link http://php.net/set_error_handler
     * @param  integer $errno Error level
     * @param          $errstr
     * @param          $errfile
     * @param          $errline
     * @param          $errcontext
     * @return boolean
     */
    public static function mutingErrorHandler($errno, $errstr, $errfile, $errline, $errcontext)
    {
    }

    /**
     * Enable error handler to mute expected messages
     *
     * @return void
     */
    public static function muteExpectedErrors()
    {
    }

    /**
     * Disable error handler muting expected messages
     *
     * @return void
     */
    public static function unmuteExpectedErrors()
    {
    }

    /**
     * Class destructor
     */
    public function __destruct()
    {
    }

    /**
     * <<magic>> set selfpointer on cloned object
     */
    public function __clone()
    {
    }

    /**
     * <<magic>> Generic getter.
     * Calls the appropriate getter function.
     * Issues an E_USER_NOTICE if no valid getter is found.
     *
     * @param  string $name property name
     * @return mixed
     */
    public function __get($name)
    {
    }

    /**
     * <<magic>> Generic setter.
     * Calls the appropriate setter function.
     * Issues an E_USER_NOTICE if no valid setter is found.
     *
     * @param string $name property name
     * @param mixed $value parameter passed to setter
     */
    public function __set($name, $value)
    {
    }

    /**
     * Check if a template resource exists
     *
     * @param  string $resource_name template name
     * @return boolean status
     */
    public function templateExists($resource_name)
    {
    }

    /**
     * Returns a single or all global  variables
     *
     * @param  string $varname variable name or null
     * @return string variable value or or array of variables
     */
    public function getGlobal($varname = null)
    {
    }

    /**
     * Empty cache folder
     *
     * @param  integer $exp_time expiration time
     * @param  string $type resource type
     * @return integer number of cache files deleted
     */
    public function clearAllCache($exp_time = null, $type = null)
    {
    }

    /**
     * Empty cache for a specific template
     *
     * @param  string $template_name template name
     * @param  string $cache_id cache id
     * @param  string $compile_id compile id
     * @param  integer $exp_time expiration time
     * @param  string $type resource type
     * @return integer number of cache files deleted
     */
    public function clearCache($template_name, $cache_id = null, $compile_id = null, $exp_time = null, $type = null)
    {
    }

    /**
     * Loads security class and enables security
     *
     * @param  string|Smarty_Security $security_class if a string is used, it must be class-name
     * @return Smarty                 current Smarty instance for chaining
     * @throws SmartyException        when an invalid class name is provided
     */
    public function enableSecurity($security_class = null)
    {
    }

    /**
     * Disable security
     *
     * @return Smarty current Smarty instance for chaining
     */
    public function disableSecurity()
    {
    }

    /**
     * Add template directory(s)
     *
     * @param  string|array $template_dir directory(s) of template sources
     * @param  string $key of the array element to assign the template dir to
     * @return Smarty          current Smarty instance for chaining
     * @throws SmartyException when the given template directory is not valid
     */
    public function addTemplateDir($template_dir, $key = null)
    {
    }

    /**
     * Get template directories
     *
     * @param mixed $index index of directory to get, null to get all
     * @return array|string list of template directories, or directory of $index
     */
    public function getTemplateDir($index = null)
    {
    }

    /**
     * Set template directory
     *
     * @param  string|array $template_dir directory(s) of template sources
     * @return Smarty       current Smarty instance for chaining
     */
    public function setTemplateDir($template_dir)
    {
    }

    /**
     * Add config directory(s)
     *
     * @param string|array $config_dir directory(s) of config sources
     * @param mixed $key key of the array element to assign the config dir to
     * @return Smarty current Smarty instance for chaining
     */
    public function addConfigDir($config_dir, $key = null)
    {
    }

    /**
     * Get config directory
     *
     * @param mixed $index index of directory to get, null to get all
     * @return array|string configuration directory
     */
    public function getConfigDir($index = null)
    {
    }

    /**
     * Set config directory
     *
     * @param $config_dir
     * @return Smarty       current Smarty instance for chaining
     */
    public function setConfigDir($config_dir)
    {
    }

    /**
     * Adds directory of plugin files
     *
     * @param $plugins_dir
     * @return Smarty current Smarty instance for chaining
     */
    public function addPluginsDir($plugins_dir)
    {
    }

    /**
     * Get compiled directory
     *
     * @return string path to compiled templates
     */
    public function getCompileDir()
    {
    }

    /**
     * Set compile directory
     *
     * @param  string $compile_dir directory to store compiled templates in
     * @return Smarty current Smarty instance for chaining
     */
    public function setCompileDir($compile_dir)
    {
    }

    /**
     * Get cache directory
     *
     * @return string path of cache directory
     */
    public function getCacheDir()
    {
    }

    /**
     * Set cache directory
     *
     * @param  string $cache_dir directory to store cached templates in
     * @return Smarty current Smarty instance for chaining
     */
    public function setCacheDir($cache_dir)
    {
    }

    /**
     * Add default modifiers
     *
     * @param  array|string $modifiers modifier or list of modifiers to add
     * @return Smarty       current Smarty instance for chaining
     */
    public function addDefaultModifiers($modifiers)
    {
    }

    /**
     * Get default modifiers
     *
     * @return array list of default modifiers
     */
    public function getDefaultModifiers()
    {
    }

    /**
     * Set default modifiers
     *
     * @param  array|string $modifiers modifier or list of modifiers to set
     * @return Smarty       current Smarty instance for chaining
     */
    public function setDefaultModifiers($modifiers)
    {
    }

    /**
     * Add autoload filters
     *
     * @param  array $filters filters to load automatically
     * @param  string $type "pre", "output", … specify the filter type to set. Defaults to none treating $filters' keys as the appropriate types
     * @return Smarty current Smarty instance for chaining
     */
    public function addAutoloadFilters($filters, $type = null)
    {
    }

    /**
     * Get autoload filters
     *
     * @param  string $type type of filter to get autoloads for. Defaults to all autoload filters
     * @return array  array( 'type1' => array( 'filter1', 'filter2', … ) ) or array( 'filter1', 'filter2', …) if $type was specified
     */
    public function getAutoloadFilters($type = null)
    {
    }

    /**
     * Set autoload filters
     *
     * @param  array $filters filters to load automatically
     * @param  string $type "pre", "output", … specify the filter type to set. Defaults to none treating $filters' keys as the appropriate types
     * @return Smarty current Smarty instance for chaining
     */
    public function setAutoloadFilters($filters, $type = null)
    {
    }

    /**
     * return name of debugging template
     *
     * @return string
     */
    public function getDebugTemplate()
    {
    }

    /**
     * set the debug template
     *
     * @param  string $tpl_name
     * @return Smarty          current Smarty instance for chaining
     * @throws SmartyException if file is not readable
     */
    public function setDebugTemplate($tpl_name)
    {
    }

    /**
     * creates a template object
     *
     * @param  string $template the resource handle of the template file
     * @param  mixed $cache_id cache id to be used with this template
     * @param  mixed $compile_id compile id to be used with this template
     * @param  object $parent next higher level of Smarty variables
     * @param  boolean $do_clone flag is Smarty object shall be cloned
     * @return object  template object
     */
    public function createTemplate($template, $cache_id = null, $compile_id = null, $parent = null, $do_clone = true)
    {
    }

    /**
     * Takes unknown classes and loads plugin files for them
     * class name format: Smarty_PluginType_PluginName
     * plugin filename format: plugintype.pluginname.php
     *
     * @param  string $plugin_name class plugin name to load
     * @param  bool $check check if already loaded
     * @throws SmartyException
     * @return string |boolean filepath of loaded file or false
     */
    public function loadPlugin($plugin_name, $check = true)
    {
    }

    /**
     * Get plugin directories
     *
     * @return array list of plugin directories
     */
    public function getPluginsDir()
    {
    }

    /**
     * Set plugins directory
     *
     * @param  string|array $plugins_dir directory(s) of plugins
     * @return Smarty       current Smarty instance for chaining
     */
    public function setPluginsDir($plugins_dir)
    {
    }

    /**
     * Compile all template files
     *
     * @param  string $extension file extension
     * @param  bool $force_compile force all to recompile
     * @param  int $time_limit
     * @param  int $max_errors
     * @return integer number of template files recompiled
     */
    public function compileAllTemplates($extension = '.tpl', $force_compile = false, $time_limit = 0, $max_errors = null)
    {
    }

    /**
     * Compile all config files
     *
     * @param  string $extension file extension
     * @param  bool $force_compile force all to recompile
     * @param  int $time_limit
     * @param  int $max_errors
     * @return integer number of template files recompiled
     */
    public function compileAllConfig($extension = '.conf', $force_compile = false, $time_limit = 0, $max_errors = null)
    {
    }

    /**
     * Delete compiled template file
     *
     * @param  string $resource_name template name
     * @param  string $compile_id compile id
     * @param  integer $exp_time expiration time
     * @return integer number of template files deleted
     */
    public function clearCompiledTemplate($resource_name = null, $compile_id = null, $exp_time = null)
    {
    }

    /**
     * Return array of tag/attributes of all tags used by an template
     *
     * @param Smarty_Internal_Template $template
     * @return array  of tag/attributes
     */
    public function getTags(Smarty_Internal_Template $template)
    {
    }

    /**
     * Run installation test
     *
     * @param  array $errors Array to write errors into, rather than outputting them
     * @return boolean true if setup is fine, false if something is wrong
     */
    public function testInstall(&$errors = null)
    {
    }
}

// Check if we're running on windows
Smarty::$_IS_WINDOWS = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';

// let PCRE (preg_*) treat strings as ISO-8859-1 if we're not dealing with UTF-8
if (Smarty::$_CHARSET !== 'UTF-8') {
    Smarty::$_UTF8_MODIFIER = '';
}

/**
 * Smarty exception class
 *
 * @package Smarty
 */
class SmartyException extends Exception
{

    public static $escape = false;

    public function __toString()
    {
    }
}

/**
 * Smarty compiler exception class
 *
 * @package Smarty
 */
class SmartyCompilerException extends SmartyException
{

    /**
     * The line number of the template error
     *
     * @type int|null
     */
    public $line = null;
    /**
     * The template source snippet relating to the error
     *
     * @type string|null
     */
    public $source = null;
    /**
     * The raw text of the error message
     *
     * @type string|null
     */
    public $desc = null;
    /**
     * The resource identifier or template name
     *
     * @type string|null
     */
    public $template = null;

    public function __toString()
    {
    }
}

/**
 * Autoloader
 */
function smartyAutoload($class)
{
    $_class = strtolower($class);
    static $_classes = array(
        'smarty_config_source' => true,
        'smarty_config_compiled' => true,
        'smarty_security' => true,
        'smarty_cacheresource' => true,
        'smarty_cacheresource_custom' => true,
        'smarty_cacheresource_keyvaluestore' => true,
        'smarty_resource' => true,
        'smarty_resource_custom' => true,
        'smarty_resource_uncompiled' => true,
        'smarty_resource_recompiled' => true,
    );

    if (!strncmp($_class, 'smarty_internal_', 16) || isset($_classes[$_class])) {
        include SMARTY_SYSPLUGINS_DIR.$_class.'.php';
    }
}
