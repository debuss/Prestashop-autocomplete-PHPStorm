<?php
/**
 * Smarty Internal Plugin Compile Foreach
 * Compiles the {foreach} {foreachelse} {/foreach} tags
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
 */

/**
 * Smarty Internal Plugin Compile Foreach Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Foreach extends Smarty_Internal_CompileBase
{

    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $required_attributes = array('from', 'item');
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $optional_attributes = array('name', 'key');
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $shorttag_order = array('from', 'item', 'key', 'name');

    /**
     * Compiles code for the {foreach} tag
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
 * Smarty Internal Plugin Compile Foreachelse Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Foreachelse extends Smarty_Internal_CompileBase
{

    /**
     * Compiles code for the {foreachelse} tag
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
 * Smarty Internal Plugin Compile Foreachclose Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Foreachclose extends Smarty_Internal_CompileBase
{

    /**
     * Compiles code for the {/foreach} tag
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
