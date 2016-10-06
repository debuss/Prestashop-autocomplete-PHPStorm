<?php
/**
 * Smarty Internal Plugin Compile Eval
 * Compiles the {eval} tag.
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
 */

/**
 * Smarty Internal Plugin Compile Eval Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Eval extends Smarty_Internal_CompileBase
{

    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $required_attributes = array('var');
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $optional_attributes = array('assign');
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $shorttag_order = array('var', 'assign');

    /**
     * Compiles code for the {eval} tag
     *
     * @param  array $args array with attributes from parser
     * @param  object $compiler compiler object
     * @return string compiled code
     */
    public function compile($args, $compiler)
    {
    }
}
