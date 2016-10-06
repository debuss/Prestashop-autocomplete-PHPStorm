<?php
/**
 * Smarty Internal Plugin Compile Object Function
 * Compiles code for registered objects as function
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
 */

/**
 * Smarty Internal Plugin Compile Object Function Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Private_Object_Function extends Smarty_Internal_CompileBase
{

    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $optional_attributes = array('_any');

    /**
     * Compiles code for the execution of function plugin
     *
     * @param  array $args array with attributes from parser
     * @param  object $compiler compiler object
     * @param  array $parameter array with compilation parameter
     * @param  string $tag name of function
     * @param  string $method name of method to call
     * @return string compiled code
     */
    public function compile($args, $compiler, $parameter, $tag, $method)
    {
    }
}
