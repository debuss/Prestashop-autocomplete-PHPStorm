<?php
/**
 * Smarty Internal Plugin Compile Config Load
 * Compiles the {config load} tag
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
 */

/**
 * Smarty Internal Plugin Compile Config Load Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Config_Load extends Smarty_Internal_CompileBase
{

    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $required_attributes = array('file');
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $shorttag_order = array('file', 'section');
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $optional_attributes = array('section', 'scope');

    /**
     * Compiles code for the {config_load} tag
     *
     * @param  array $args array with attributes from parser
     * @param  object $compiler compiler object
     * @return string compiled code
     */
    public function compile($args, $compiler)
    {
    }
}
