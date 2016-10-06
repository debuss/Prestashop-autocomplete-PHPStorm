<?php
/**
 * Smarty Internal Plugin Compile Block Plugin
 * Compiles code for the execution of block plugin
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
 */

/**
 * Smarty Internal Plugin Compile Block Plugin Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Private_Block_Plugin extends Smarty_Internal_CompileBase
{

    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $optional_attributes = array('_any');

    /**
     * Compiles code for the execution of block plugin
     *
     * @param  array $args array with attributes from parser
     * @param  object $compiler compiler object
     * @param  array $parameter array with compilation parameter
     * @param  string $tag name of block plugin
     * @param  string $function PHP function name
     * @return string compiled code
     */
    public function compile($args, $compiler, $parameter, $tag, $function)
    {
    }
}
