<?php
/**
 * Smarty Internal Plugin Function Call Handler
 *
 * @package    Smarty
 * @subpackage PluginsInternal
 * @author     Uwe Tews
 */

/**
 * This class does call function defined with the {function} tag
 *
 * @package    Smarty
 * @subpackage PluginsInternal
 */
class Smarty_Internal_Function_Call_Handler
{

    /**
     * This function handles calls to template functions defined by {function}
     * It does create a PHP function at the first call
     *
     * @param string $_name template function name
     * @param Smarty_Internal_Template $_template template object
     * @param array $_params Smarty variables passed as call parameter
     * @param string $_hash nocache hash value
     * @param bool $_nocache nocache flag
     */
    public static function call($_name, Smarty_Internal_Template $_template, $_params, $_hash, $_nocache)
    {
    }
}
