<?php
/**
 * Smarty Internal Plugin Nocache Insert
 * Compiles the {insert} tag into the cache file
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
 */

/**
 * Smarty Internal Plugin Compile Insert Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Nocache_Insert
{

    /**
     * Compiles code for the {insert} tag into cache file
     *
     * @param  string $_function insert function name
     * @param  array $_attr array with parameter
     * @param  Smarty_Internal_Template $_template template object
     * @param  string $_script script name to load or 'null'
     * @param  string $_assign optional variable name
     * @return string                   compiled code
     */
    public static function compile($_function, $_attr, $_template, $_script, $_assign = null)
    {
    }
}
