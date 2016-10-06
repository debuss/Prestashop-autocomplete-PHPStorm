<?php
/**
 * Smarty Internal Plugin Template
 * This file contains the Smarty template engine
 *
 * @package    Smarty
 * @subpackage Template
 * @author     Uwe Tews
 */

/**
 * Main class with template data structures and methods
 *
 * @package    Smarty
 * @subpackage Template
 * @property Smarty_Template_Source $source
 * @property Smarty_Template_Compiled $compiled
 * @property Smarty_Template_Cached $cached
 */
class Smarty_Internal_Template extends Smarty_Internal_TemplateBase
{

    /**
     * cache_id
     *
     * @var string
     */
    public $cache_id = null;
    /**
     * $compile_id
     * @var string
     */
    public $compile_id = null;
    /**
     * caching enabled
     *
     * @var boolean
     */
    public $caching = null;
    /**
     * cache lifetime in seconds
     *
     * @var integer
     */
    public $cache_lifetime = null;
    /**
     * Template resource
     *
     * @var string
     */
    public $template_resource = null;
    /**
     * flag if compiled template is invalid and must be (re)compiled
     *
     * @var bool
     */
    public $mustCompile = null;
    /**
     * flag if template does contain nocache code sections
     *
     * @var bool
     */
    public $has_nocache_code = false;
    /**
     * special compiled and cached template properties
     *
     * @var array
     */
    public $properties = array('file_dependency' => array(),
        'nocache_hash' => '',
        'function' => array());
    /**
     * required plugins
     *
     * @var array
     */
    public $required_plugins = array('compiled' => array(), 'nocache' => array());
    /**
     * Global smarty instance
     *
     * @var Smarty
     */
    public $smarty = null;
    /**
     * blocks for template inheritance
     *
     * @var array
     */
    public $block_data = array();
    /**
     * variable filters
     *
     * @var array
     */
    public $variable_filters = array();
    /**
     * optional log of tag/attributes
     *
     * @var array
     */
    public $used_tags = array();
    /**
     * internal flag to allow relative path in child template blocks
     *
     * @var bool
     */
    public $allow_relative_path = false;
    /**
     * internal capture runtime stack
     *
     * @var array
     */
    public $_capture_stack = array(0 => array());

    /**
     * Create template data object
     * Some of the global Smarty settings copied to template scope
     * It load the required template resources and cacher plugins
     *
     * @param string $template_resource template resource string
     * @param Smarty $smarty Smarty instance
     * @param Smarty_Internal_Template $_parent back pointer to parent object with variables or null
     * @param mixed $_cache_id cache   id or null
     * @param mixed $_compile_id compile id or null
     * @param bool $_caching use caching?
     * @param int $_cache_lifetime cache life-time in seconds
     */
    public function __construct($template_resource, $smarty, $_parent = null, $_cache_id = null, $_compile_id = null, $_caching = null, $_cache_lifetime = null)
    {
    }

    /**
     * Returns if the current template must be compiled by the Smarty compiler
     * It does compare the timestamps of template source and the compiled templates and checks the force compile configuration
     *
     * @throws SmartyException
     * @return boolean true if the template must be compiled
     */
    public function mustCompile()
    {
    }

    /**
     * Compiles the template
     * If the template is not evaluated the compiled template is saved on disk
     */
    public function compileTemplateSource()
    {
    }

    /**
     * Writes the cached template output
     *
     * @param string $content
     * @return bool
     */
    public function writeCachedContent($content)
    {
    }

    /**
     * Create code frame for compiled and cached templates
     *
     * @param  string $content optional template content
     * @param  bool $cache flag for cache file
     * @return string
     */
    public function createTemplateCodeFrame($content = '', $cache = false)
    {
    }

    /**
     * Template code runtime function to get subtemplate content
     *
     * @param string $template the resource handle of the template file
     * @param mixed $cache_id cache id to be used with this template
     * @param mixed $compile_id compile id to be used with this template
     * @param integer $caching cache mode
     * @param integer $cache_lifetime life time of cache data
     * @param         $data
     * @param int $parent_scope scope in which {include} should execute
     * @returns string template content
     */
    public function getSubTemplate($template, $cache_id, $compile_id, $caching, $cache_lifetime, $data, $parent_scope)
    {
    }

    /**
     * Get parent or root of template parent chain
     *
     * @param  int $scope pqrent or root scope
     * @return mixed object
     */
    public function getScopePointer($scope)
    {
    }

    /**
     * Template code runtime function to set up an inline subtemplate
     *
     * @param string $template the resource handle of the template file
     * @param mixed $cache_id cache id to be used with this template
     * @param mixed $compile_id compile id to be used with this template
     * @param integer $caching cache mode
     * @param integer $cache_lifetime life time of cache data
     * @param         $data
     * @param int $parent_scope scope in which {include} should execute
     * @param string $hash nocache hash code
     * @returns string template content
     */
    public function setupInlineSubTemplate($template, $cache_id, $compile_id, $caching, $cache_lifetime, $data, $parent_scope, $hash)
    {
    }

    /**
     * This function is executed automatically when a compiled or cached template file is included
     * - Decode saved properties from compiled template and cache files
     * - Check if compiled or cache file is valid
     *
     * @param  array $properties special template properties
     * @param  bool $cache flag if called from cache file
     * @return bool  flag if compiled or cache file is valid
     */
    public function decodeProperties($properties, $cache = false)
    {
    }

    /**
     * Template code runtime function to create a local Smarty variable for array assignments
     *
     * @param string $tpl_var tempate variable name
     * @param bool $nocache cache mode of variable
     * @param int $scope scope of variable
     */
    public function createLocalArrayVariable($tpl_var, $nocache = false, $scope = Smarty::SCOPE_LOCAL)
    {
    }

    /**
     * Template code runtime function to get pointer to template variable array of requested scope
     *
     * @param  int $scope requested variable scope
     * @return array array of template variables
     */
    public function &getScope($scope)
    {
    }

    /**
     * [util function] counts an array, arrayaccess/traversable or PDOStatement object
     *
     * @param  mixed $value
     * @return int   the count for arrays and objects that implement countable, 1 for other objects that don't, and 0 for empty elements
     */
    public function _count($value)
    {
    }

    /**
     * runtime error not matching capture tags
     */
    public function capture_error()
    {
    }

    /**
     * Empty cache for this template
     *
     * @param integer $exp_time expiration time
     * @return integer number of cache files deleted
     */
    public function clearCache($exp_time = null)
    {
    }

    /**
     * get Smarty property in template context
     *
     * @param string $property_name property name
     * @throws SmartyException
     */
    public function __get($property_name)
    {
    }

    /**
     * set Smarty property in template context
     *
     * @param string $property_name property name
     * @param mixed $value value
     * @throws SmartyException
     */
    public function __set($property_name, $value)
    {
    }

    /**
     * Template data object destructor
     */
    public function __destruct()
    {
    }
}
