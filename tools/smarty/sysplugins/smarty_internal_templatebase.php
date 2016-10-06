<?php
/**
 * Smarty Internal Plugin Smarty Template  Base
 * This file contains the basic shared methods for template handling
 *
 * @package    Smarty
 * @subpackage Template
 * @author     Uwe Tews
 */

/**
 * Class with shared template methods
 *
 * @package    Smarty
 * @subpackage Template
 */
abstract class Smarty_Internal_TemplateBase extends Smarty_Internal_Data
{

    /**
     * displays a Smarty template
     *
     * @param string $template the resource handle of the template file or template object
     * @param mixed $cache_id cache id to be used with this template
     * @param mixed $compile_id compile id to be used with this template
     * @param object $parent next higher level of Smarty variables
     */
    public function display($template = null, $cache_id = null, $compile_id = null, $parent = null)
    {
    }

    /**
     * fetches a rendered Smarty template
     *
     * @param  string $template the resource handle of the template file or template object
     * @param  mixed $cache_id cache id to be used with this template
     * @param  mixed $compile_id compile id to be used with this template
     * @param  object $parent next higher level of Smarty variables
     * @param  bool $display true: display, false: fetch
     * @param  bool $merge_tpl_vars if true parent template variables merged in to local scope
     * @param  bool $no_output_filter if true do not run output filter
     * @throws Exception
     * @throws SmartyException
     * @return string rendered template output
     */
    public function fetch($template = null, $cache_id = null, $compile_id = null, $parent = null, $display = false, $merge_tpl_vars = true, $no_output_filter = false)
    {
    }

    /**
     * test if cache is valid
     *
     * @param  string|object $template the resource handle of the template file or template object
     * @param  mixed $cache_id cache id to be used with this template
     * @param  mixed $compile_id compile id to be used with this template
     * @param  object $parent next higher level of Smarty variables
     * @return boolean       cache status
     */
    public function isCached($template = null, $cache_id = null, $compile_id = null, $parent = null)
    {
    }

    /**
     * creates a data object
     *
     * @param object $parent next higher level of Smarty variables
     * @returns Smarty_Data data object
     */
    public function createData($parent = null)
    {
    }

    /**
     * Registers plugin to be used in templates
     *
     * @param  string $type plugin type
     * @param  string $tag name of template tag
     * @param  callback $callback PHP callback to register
     * @param  boolean $cacheable if true (default) this fuction is cachable
     * @param  array $cache_attr caching attributes if any
     * @return Smarty_Internal_Templatebase current Smarty_Internal_Templatebase (or Smarty or Smarty_Internal_Template) instance for chaining
     * @throws SmartyException              when the plugin tag is invalid
     */
    public function registerPlugin($type, $tag, $callback, $cacheable = true, $cache_attr = null)
    {
    }

    /**
     * Unregister Plugin
     *
     * @param  string $type of plugin
     * @param  string $tag name of plugin
     * @return Smarty_Internal_Templatebase current Smarty_Internal_Templatebase (or Smarty or Smarty_Internal_Template) instance for chaining
     */
    public function unregisterPlugin($type, $tag)
    {
    }

    /**
     * Registers a resource to fetch a template
     *
     * @param  string $type name of resource type
     * @param  Smarty_Resource|array $callback or instance of Smarty_Resource, or array of callbacks to handle resource (deprecated)
     * @return Smarty_Internal_Templatebase current Smarty_Internal_Templatebase (or Smarty or Smarty_Internal_Template) instance for chaining
     */
    public function registerResource($type, $callback)
    {
    }

    /**
     * Unregisters a resource
     *
     * @param  string $type name of resource type
     * @return Smarty_Internal_Templatebase current Smarty_Internal_Templatebase (or Smarty or Smarty_Internal_Template) instance for chaining
     */
    public function unregisterResource($type)
    {
    }

    /**
     * Registers a cache resource to cache a template's output
     *
     * @param  string $type name of cache resource type
     * @param  Smarty_CacheResource $callback instance of Smarty_CacheResource to handle output caching
     * @return Smarty_Internal_Templatebase current Smarty_Internal_Templatebase (or Smarty or Smarty_Internal_Template) instance for chaining
     */
    public function registerCacheResource($type, Smarty_CacheResource $callback)
    {
    }

    /**
     * Unregisters a cache resource
     *
     * @param  string $type name of cache resource type
     * @return Smarty_Internal_Templatebase current Smarty_Internal_Templatebase (or Smarty or Smarty_Internal_Template) instance for chaining
     */
    public function unregisterCacheResource($type)
    {
    }

    /**
     * Registers object to be used in templates
     *
     * @param          $object_name
     * @param  object $object_impl the referenced PHP object to register
     * @param  array $allowed list of allowed methods (empty = all)
     * @param  boolean $smarty_args smarty argument format, else traditional
     * @param  array $block_methods list of block-methods
     * @throws SmartyException
     * @return Smarty_Internal_Templatebase current Smarty_Internal_Templatebase (or Smarty or Smarty_Internal_Template) instance for chaining
     */
    public function registerObject($object_name, $object_impl, $allowed = array(), $smarty_args = true, $block_methods = array())
    {
    }

    /**
     * return a reference to a registered object
     *
     * @param  string $name object name
     * @return object
     * @throws SmartyException if no such object is found
     */
    public function getRegisteredObject($name)
    {
    }

    /**
     * unregister an object
     *
     * @param  string $name object name
     * @return Smarty_Internal_Templatebase current Smarty_Internal_Templatebase (or Smarty or Smarty_Internal_Template) instance for chaining
     */
    public function unregisterObject($name)
    {
    }

    /**
     * Registers static classes to be used in templates
     *
     * @param         $class_name
     * @param  string $class_impl the referenced PHP class to register
     * @throws SmartyException
     * @return Smarty_Internal_Templatebase current Smarty_Internal_Templatebase (or Smarty or Smarty_Internal_Template) instance for chaining
     */
    public function registerClass($class_name, $class_impl)
    {
    }

    /**
     * Registers a default plugin handler
     *
     * @param  callable $callback class/method name
     * @return Smarty_Internal_Templatebase current Smarty_Internal_Templatebase (or Smarty or Smarty_Internal_Template) instance for chaining
     * @throws SmartyException              if $callback is not callable
     */
    public function registerDefaultPluginHandler($callback)
    {
    }

    /**
     * Registers a default template handler
     *
     * @param  callable $callback class/method name
     * @return Smarty_Internal_Templatebase current Smarty_Internal_Templatebase (or Smarty or Smarty_Internal_Template) instance for chaining
     * @throws SmartyException              if $callback is not callable
     */
    public function registerDefaultTemplateHandler($callback)
    {
    }

    /**
     * Registers a default template handler
     *
     * @param  callable $callback class/method name
     * @return Smarty_Internal_Templatebase current Smarty_Internal_Templatebase (or Smarty or Smarty_Internal_Template) instance for chaining
     * @throws SmartyException              if $callback is not callable
     */
    public function registerDefaultConfigHandler($callback)
    {
    }

    /**
     * Registers a filter function
     *
     * @param  string $type filter type
     * @param  callback $callback
     * @return Smarty_Internal_Templatebase current Smarty_Internal_Templatebase (or Smarty or Smarty_Internal_Template) instance for chaining
     */
    public function registerFilter($type, $callback)
    {
    }

    /**
     * Return internal filter name
     *
     * @param  callback $function_name
     * @return string   internal filter name
     */
    public function _get_filter_name($function_name)
    {
    }

    /**
     * Unregisters a filter function
     *
     * @param  string $type filter type
     * @param  callback $callback
     * @return Smarty_Internal_Templatebase current Smarty_Internal_Templatebase (or Smarty or Smarty_Internal_Template) instance for chaining
     */
    public function unregisterFilter($type, $callback)
    {
    }

    /**
     * load a filter of specified type and name
     *
     * @param  string $type filter type
     * @param  string $name filter name
     * @throws SmartyException if filter could not be loaded
     */
    public function loadFilter($type, $name)
    {
    }

    /**
     * unload a filter of specified type and name
     *
     * @param  string $type filter type
     * @param  string $name filter name
     * @return Smarty_Internal_Templatebase current Smarty_Internal_Templatebase (or Smarty or Smarty_Internal_Template) instance for chaining
     */
    public function unloadFilter($type, $name)
    {
    }

    /**
     * Handle unknown class methods
     *
     * @param string $name unknown method-name
     * @param array $args argument array
     * @throws SmartyException
     */
    public function __call($name, $args)
    {
    }

    /**
     * preg_replace callback to convert camelcase getter/setter to underscore property names
     *
     * @param  string $match match string
     * @return string replacemant
     */
    private function replaceCamelcase($match)
    {
    }
}
