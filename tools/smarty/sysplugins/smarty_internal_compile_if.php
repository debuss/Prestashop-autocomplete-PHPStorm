<?php
/**
 * Smarty Internal Plugin Compile If
 * Compiles the {if} {else} {elseif} {/if} tags
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
 */

/**
 * Smarty Internal Plugin Compile If Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_If extends Smarty_Internal_CompileBase
{

    /**
     * Compiles code for the {if} tag
     *
     * @param array $args array with attributes from parser
     * @param object $compiler compiler object
     * @param array $parameter array with compilation parameter
     * @return string compiled code
     */
    public function compile($args, $compiler, $parameter)
    {
    }
}

/**
 * Smarty Internal Plugin Compile Else Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Else extends Smarty_Internal_CompileBase
{

    /**
     * Compiles code for the {else} tag
     *
     * @param array $args array with attributes from parser
     * @param object $compiler compiler object
     * @param array $parameter array with compilation parameter
     * @return string compiled code
     */
    public function compile($args, $compiler, $parameter)
    {
    }
}

/**
 * Smarty Internal Plugin Compile ElseIf Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Elseif extends Smarty_Internal_CompileBase
{

    /**
     * Compiles code for the {elseif} tag
     *
     * @param array $args array with attributes from parser
     * @param object $compiler compiler object
     * @param array $parameter array with compilation parameter
     * @return string compiled code
     */
    public function compile($args, $compiler, $parameter)
    {
    }
}

/**
 * Smarty Internal Plugin Compile Ifclose Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Ifclose extends Smarty_Internal_CompileBase
{

    /**
     * Compiles code for the {/if} tag
     *
     * @param array $args array with attributes from parser
     * @param object $compiler compiler object
     * @param array $parameter array with compilation parameter
     * @return string compiled code
     */
    public function compile($args, $compiler, $parameter)
    {
    }
}
