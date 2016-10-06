<?php
/**
 * Smarty Internal Plugin Templateparser Parsetrees
 * These are classes to build parsetrees in the template parser
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Thue Kristensen
 * @author     Uwe Tews
 */

/**
 * @package    Smarty
 * @subpackage Compiler
 * @ignore
 */
abstract class _smarty_parsetree
{

    /**
     * Parser object
     *
     * @var object
     */
    public $parser;
    /**
     * Buffer content
     *
     * @var mixed
     */
    public $data;
    /**
     * Subtree array
     *
     * @var array
     */
    public $subtrees = array();

    /**
     * Return buffer
     *
     * @return string buffer content
     */
    abstract public function to_smarty_php();
}

/**
 * A complete smarty tag.
 *
 * @package    Smarty
 * @subpackage Compiler
 * @ignore
 */
class _smarty_tag extends _smarty_parsetree
{

    /**
     * Saved block nesting level
     *
     * @var int
     */
    public $saved_block_nesting;

    /**
     * Create parse tree buffer for Smarty tag
     *
     * @param object $parser parser object
     * @param string $data content
     */
    public function __construct($parser, $data)
    {
    }

    /**
     * Return buffer content
     *
     * @return string content
     */
    public function to_smarty_php()
    {
    }

    /**
     * Return complied code that loads the evaluated output of buffer content into a temporary variable
     *
     * @return string template code
     */
    public function assign_to_var()
    {
    }
}

/**
 * Code fragment inside a tag.
 *
 * @package    Smarty
 * @subpackage Compiler
 * @ignore
 */
class _smarty_code extends _smarty_parsetree
{

    /**
     * Create parse tree buffer for code fragment
     *
     * @param object $parser parser object
     * @param string $data content
     */
    public function __construct($parser, $data)
    {
    }

    /**
     * Return buffer content in parentheses
     *
     * @return string content
     */
    public function to_smarty_php()
    {
    }
}

/**
 * Double quoted string inside a tag.
 *
 * @package    Smarty
 * @subpackage Compiler
 * @ignore
 */
class _smarty_doublequoted extends _smarty_parsetree
{

    /**
     * Create parse tree buffer for double quoted string subtrees
     *
     * @param object $parser parser object
     * @param _smarty_parsetree $subtree parsetree buffer
     */
    public function __construct($parser, _smarty_parsetree $subtree)
    {
    }

    /**
     * Append buffer to subtree
     *
     * @param _smarty_parsetree $subtree parsetree buffer
     */
    public function append_subtree(_smarty_parsetree $subtree)
    {
    }

    /**
     * Merge subtree buffer content together
     *
     * @return string compiled template code
     */
    public function to_smarty_php()
    {
    }
}

/**
 * Raw chars as part of a double quoted string.
 *
 * @package    Smarty
 * @subpackage Compiler
 * @ignore
 */
class _smarty_dq_content extends _smarty_parsetree
{

    /**
     * Create parse tree buffer with string content
     *
     * @param object $parser parser object
     * @param string $data string section
     */
    public function __construct($parser, $data)
    {
    }

    /**
     * Return content as double quoted string
     *
     * @return string doubled quoted string
     */
    public function to_smarty_php()
    {
    }
}

/**
 * Template element
 *
 * @package    Smarty
 * @subpackage Compiler
 * @ignore
 */
class _smarty_template_buffer extends _smarty_parsetree
{

    /**
     * Array of template elements
     *
     * @var array
     */
    public $subtrees = array();

    /**
     * Create root of parse tree for template elements
     *
     * @param object $parser parse object
     */
    public function __construct($parser)
    {
    }

    /**
     * Append buffer to subtree
     *
     * @param _smarty_parsetree $subtree
     */
    public function append_subtree(_smarty_parsetree $subtree)
    {
    }

    /**
     * Sanitize and merge subtree buffers together
     *
     * @return string template code content
     */
    public function to_smarty_php()
    {
    }
}

/**
 * template text
 *
 * @package    Smarty
 * @subpackage Compiler
 * @ignore
 */
class _smarty_text extends _smarty_parsetree
{

    /**
     * Create template text buffer
     *
     * @param object $parser parser object
     * @param string $data text
     */
    public function __construct($parser, $data)
    {
    }

    /**
     * Return buffer content
     *
     * @return strint text
     */
    public function to_smarty_php()
    {
    }
}

/**
 * template linebreaks
 *
 * @package    Smarty
 * @subpackage Compiler
 * @ignore
 */
class _smarty_linebreak extends _smarty_parsetree
{

    /**
     * Create buffer with linebreak content
     *
     * @param object $parser parser object
     * @param string $data linebreak string
     */
    public function __construct($parser, $data)
    {
    }

    /**
     * Return linebrak
     *
     * @return string linebreak
     */
    public function to_smarty_php()
    {
    }
}
