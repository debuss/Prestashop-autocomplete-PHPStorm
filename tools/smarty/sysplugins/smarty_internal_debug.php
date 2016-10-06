<?php
/**
 * Smarty Internal Plugin Debug
 * Class to collect data for the Smarty Debugging Consol
 *
 * @package    Smarty
 * @subpackage Debug
 * @author     Uwe Tews
 */

/**
 * Smarty Internal Plugin Debug Class
 *
 * @package    Smarty
 * @subpackage Debug
 */
class Smarty_Internal_Debug extends Smarty_Internal_Data
{

    /**
     * template data
     *
     * @var array
     */
    public static $template_data = array();
    /**
     * List of uid's which shall be ignored
     *
     * @var array
     */
    public static $ignore_uid = array();

    /**
     * Ignore template
     *
     * @param object $template
     */
    public static function ignore($template)
    {
    }

    /**
     * Start logging of compile time
     *
     * @param object $template
     */
    public static function start_compile($template)
    {
    }

    /**
     * End logging of compile time
     *
     * @param object $template
     */
    public static function end_compile($template)
    {
    }

    /**
     * Start logging of render time
     *
     * @param object $template
     */
    public static function start_render($template)
    {
    }

    /**
     * End logging of compile time
     *
     * @param object $template
     */
    public static function end_render($template)
    {
    }

    /**
     * Start logging of cache time
     *
     * @param object $template cached template
     */
    public static function start_cache($template)
    {
    }

    /**
     * End logging of cache time
     *
     * @param object $template cached template
     */
    public static function end_cache($template)
    {
    }

    /**
     * Opens a window for the Smarty Debugging Consol and display the data
     *
     * @param Smarty_Internal_Template|Smarty $obj object to debug
     */
    public static function display_debug($obj)
    {
    }

    /**
     * Recursively gets variables from all template/data scopes
     *
     * @param  Smarty_Internal_Template|Smarty_Data $obj object to debug
     * @return StdClass
     */
    public static function get_debug_vars($obj)
    {
    }

    /**
     * Return key into $template_data for template
     *
     * @param  object $template template object
     * @return string key into $template_data
     */
    private static function get_key($template)
    {
    }
}
