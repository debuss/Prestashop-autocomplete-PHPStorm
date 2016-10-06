<?php
/**
 * Smarty Internal Plugin Compile Registered Block
 * Compiles code for the execution of a registered block function
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
 */

/**
 * Smarty Internal Plugin Compile Registered Block Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Private_Registered_Block extends Smarty_Internal_CompileBase
{

    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $optional_attributes = array('_any');

    /**
     * Compiles code for the execution of a block function
     *
     * @param  array $args array with attributes from parser
     * @param  object $compiler compiler object
     * @param  array $parameter array with compilation parameter
     * @param  string $tag name of block function
     * @return string compiled code
     */
    public function compile($args, $compiler, $parameter, $tag)
    {
    }
}
