<?php
/**
 * Smarty Internal Plugin Config File Compiler
 * This is the config file compiler class. It calls the lexer and parser to
 * perform the compiling.
 *
 * @package    Smarty
 * @subpackage Config
 * @author     Uwe Tews
 */

/**
 * Main config file compiler class
 *
 * @package    Smarty
 * @subpackage Config
 */
class Smarty_Internal_Config_File_Compiler
{

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
     * @var Smarty object
     */
    public $smarty;
    /**
     * Smarty object
     *
     * @var Smarty_Internal_Config object
     */
    public $config;
    /**
     * Compiled config data sections and variables
     *
     * @var array
     */
    public $config_data = array();

    /**
     * Initialize compiler
     *
     * @param Smarty $smarty base instance
     */
    public function __construct($smarty)
    {
    }

    /**
     * Method to compile a Smarty template.
     *
     * @param  Smarty_Internal_Config $config config object
     * @return bool                   true if compiling succeeded, false if it failed
     */
    public function compileSource(Smarty_Internal_Config $config)
    {
    }

    /**
     * display compiler error messages without dying
     * If parameter $args is empty it is a parser detected syntax error.
     * In this case the parser is called to obtain information about expected tokens.
     * If parameter $args contains a string this is used as error message
     *
     * @param string $args individual error message or null
     * @throws SmartyCompilerException
     */
    public function trigger_config_file_error($args = null)
    {
    }
}
