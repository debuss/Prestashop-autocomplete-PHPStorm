<?php
/**
 * Smarty Internal Plugin Smarty Template Compiler Base
 * This file contains the basic classes and methods for compiling Smarty templates with lexer/parser
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
 */

/**
 * @ignore
 */
include 'smarty_internal_parsetree.php';

/**
 * Class SmartyTemplateCompiler
 *
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_SmartyTemplateCompiler extends Smarty_Internal_TemplateCompilerBase
{

    /**
     * Lexer class name
     *
     * @var string
     */
    public $lexer_class;
    /**
     * Parser class name
     *
     * @var string
     */
    public $parser_class;
    /**
     * Lexer object
     *
     * @var object
     */
    public $lex;
    /**
     * Parser object
     *
     * @var object
     */
    public $parser;
    /**
     * Smarty object
     *
     * @var object
     */
    public $smarty;
    /**
     * array of vars which can be compiled in local scope
     *
     * @var array
     */
    public $local_var = array();

    /**
     * Initialize compiler
     *
     * @param string $lexer_class class name
     * @param string $parser_class class name
     * @param Smarty $smarty global instance
     */
    public function __construct($lexer_class, $parser_class, $smarty)
    {
    }

    /**
     * method to compile a Smarty template
     *
     * @param  mixed $_content template source
     * @return bool  true if compiling succeeded, false if it failed
     */
    protected function doCompile($_content)
    {
    }
}
