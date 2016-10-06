<?php
/**
 * Smarty Internal Plugin Compile Print Expression
 * Compiles any tag which will output an expression or variable
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
 */

/**
 * Smarty Internal Plugin Compile Print Expression Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Private_Print_Expression extends Smarty_Internal_CompileBase
{

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
    public $option_flags = array('nocache', 'nofilter');

    /**
     * Compiles code for generating output from any expression
     *
     * @param array $args array with attributes from parser
     * @param object $compiler compiler object
     * @param array $parameter array with compilation parameter
     * @throws SmartyException
     * @return string compiled code
     */
    public function compile($args, $compiler, $parameter)
    {
    }

    /**
     * @param object $compiler compiler object
     * @param string $name name of variable filter
     * @param string $output embedded output
     * @return string
     */
    private function compile_output_filter($compiler, $name, $output)
    {
    }
}
