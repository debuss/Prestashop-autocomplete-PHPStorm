<?php
/**
 * Smarty Internal Plugin Compile For
 * Compiles the {for} {forelse} {/for} tags
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
 */

/**
 * Smarty Internal Plugin Compile For Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_For extends Smarty_Internal_CompileBase
{

    /**
     * Compiles code for the {for} tag
     * Smarty 3 does implement two different syntax's:
     * - {for $var in $array}
     * For looping over arrays or iterators
     * - {for $x=0; $x<$y; $x++}
     * For general loops
     * The parser is generating different sets of attribute by which this compiler can
     * determine which syntax is used.
     *
     * @param  array $args array with attributes from parser
     * @param  object $compiler compiler object
     * @param  array $parameter array with compilation parameter
     * @return string compiled code
     */
    public function compile($args, $compiler, $parameter)
    {
    }
}

/**
 * Smarty Internal Plugin Compile Forelse Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Forelse extends Smarty_Internal_CompileBase
{

    /**
     * Compiles code for the {forelse} tag
     *
     * @param  array $args array with attributes from parser
     * @param  object $compiler compiler object
     * @param  array $parameter array with compilation parameter
     * @return string compiled code
     */
    public function compile($args, $compiler, $parameter)
    {
    }
}

/**
 * Smarty Internal Plugin Compile Forclose Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Forclose extends Smarty_Internal_CompileBase
{

    /**
     * Compiles code for the {/for} tag
     *
     * @param  array $args array with attributes from parser
     * @param  object $compiler compiler object
     * @param  array $parameter array with compilation parameter
     * @return string compiled code
     */
    public function compile($args, $compiler, $parameter)
    {
    }
}
