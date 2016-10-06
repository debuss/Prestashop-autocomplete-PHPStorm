<?php

/**
 * Smarty Internal Plugin Compile Block
 * Compiles the {block}{/block} tags
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
 */

/**
 * Smarty Internal Plugin Compile Block Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Block extends Smarty_Internal_CompileBase
{

    const parent = '____SMARTY_BLOCK_PARENT____';
    /**
     * nested child block names
     *
     * @var array
     */
    public static $nested_block_names = array();
    /**
     * child block source buffer
     *
     * @var array
     */
    public static $block_data = array();
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $required_attributes = array('name');
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $shorttag_order = array('name');
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $option_flags = array('hide', 'append', 'prepend', 'nocache');
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $optional_attributes = array('internal_file', 'internal_uid', 'internal_line');

    /**
     * Compile saved child block source
     *
     * @param object $compiler compiler object
     * @param string $_name optional name of child block
     * @return string   compiled code of child block
     */
    static function compileChildBlock($compiler, $_name = null)
    {
    }

    /**
     * Compile $smarty.block.parent
     *
     * @param object $compiler compiler object
     * @param string $_name optional name of child block
     * @return string   compiled code of child block
     */
    static function compileParentBlock($compiler, $_name = null)
    {
    }

    /**
     * Process block source
     *
     * @param        $compiler
     * @param string $source source text
     */
    static function blockSource($compiler, $source)
    {
    }

    /**
     * Compiles code for the {block} tag
     *
     * @param array $args array with attributes from parser
     * @param object $compiler compiler object
     * @return boolean true
     */
    public function compile($args, $compiler)
    {
    }
}

/**
 * Smarty Internal Plugin Compile BlockClose Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Blockclose extends Smarty_Internal_CompileBase
{

    /**
     * Compiles code for the {/block} tag
     *
     * @param array $args array with attributes from parser
     * @param object $compiler compiler object
     * @return string compiled code
     */
    public function compile($args, $compiler)
    {
    }
}

/**
 * Smarty Internal Plugin Compile Child Block Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Private_Child_Block extends Smarty_Internal_CompileBase
{

    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $required_attributes = array('name', 'file', 'uid', 'line', 'type', 'resource');

    /**
     * Compiles code for the {private_child_block} tag
     *
     * @param array $args array with attributes from parser
     * @param object $compiler compiler object
     * @return boolean true
     */
    public function compile($args, $compiler)
    {
    }
}

/**
 * Smarty Internal Plugin Compile Child Block Close Class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Private_Child_Blockclose extends Smarty_Internal_CompileBase
{

    /**
     * Compiles code for the {/private_child_block} tag
     *
     * @param array $args array with attributes from parser
     * @param object $compiler compiler object
     * @return boolean true
     */
    public function compile($args, $compiler)
    {
    }
}
