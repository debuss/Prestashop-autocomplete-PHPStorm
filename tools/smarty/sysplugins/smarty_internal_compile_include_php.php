<?php
/**
 * Smarty Internal Plugin Compile Include PHP
 * Compiles the {include_php} tag
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
class Smarty_Internal_Compile_Include_Php extends Smarty_Internal_CompileBase
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
    public $shorttag_order = array('file');
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $optional_attributes = array('once', 'assign');

    /**
     * Compiles code for the {include_php} tag
     *
     * @param  array $args array with attributes from parser
     * @param  object $compiler compiler object
     * @throws SmartyException
     * @return string compiled code
     */
    public function compile($args, $compiler)
    {
    }
}
