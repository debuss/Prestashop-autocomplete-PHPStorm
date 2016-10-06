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
 * Main abstract compiler class
 *
 * @package    Smarty
 * @subpackage Compiler
 */
abstract class Smarty_Internal_TemplateCompilerBase
{

    /**
     * compile tag objects
     *
     * @var array
     */
    public static $_tag_objects = array();
    /**
     * suppress generation of nocache code
     *
     * @var bool
     */
    public $suppressNocacheProcessing = false;
    /**
     * suppress generation of merged template code
     *
     * @var bool
     */
    public $suppressMergedTemplates = false;
    /**
     * tag stack
     *
     * @var array
     */
    public $_tag_stack = array();
    /**
     * current template
     *
     * @var Smarty_Internal_Template
     */
    public $template = null;
    /**
     * merged templates
     *
     * @var array
     */
    public $merged_templates = array();
    /**
     * sources which must be compiled
     *
     * @var array
     */
    public $sources = array();
    /**
     * flag that we are inside {block}
     *
     * @var bool
     */
    public $inheritance = false;
    /**
     * flag when compiling inheritance child template
     *
     * @var bool
     */
    public $inheritance_child = false;
    /**
     * uid of templates called by {extends} for recursion check
     *
     * @var array
     */
    public $extends_uid = array();
    /**
     * source line offset for error messages
     *
     * @var int
     */
    public $trace_line_offset = 0;
    /**
     * trace uid
     *
     * @var string
     */
    public $trace_uid = '';
    /**
     * trace file path
     *
     * @var string
     */
    public $trace_filepath = '';
    /**
     * stack for tracing file and line of nested {block} tags
     *
     * @var array
     */
    public $trace_stack = array();
    /**
     * plugins loaded by default plugin handler
     *
     * @var array
     */
    public $default_handler_plugins = array();
    /**
     * saved preprocessed modifier list
     *
     * @var mixed
     */
    public $default_modifier_list = null;
    /**
     * force compilation of complete template as nocache
     *
     * @var boolean
     */
    public $forceNocache = false;
    /**
     * suppress Smarty header code in compiled template
     *
     * @var bool
     */
    public $suppressHeader = false;
    /**
     * suppress template property header code in compiled template
     *
     * @var bool
     */
    public $suppressTemplatePropertyHeader = false;
    /**
     * suppress pre and post filter
     *
     * @var bool
     */
    public $suppressFilter = false;
    /**
     * flag if compiled template file shall we written
     *
     * @var bool
     */
    public $write_compiled_code = true;
    /**
     * flag if currently a template function is compiled
     *
     * @var bool
     */
    public $compiles_template_function = false;
    /**
     * called subfuntions from template function
     *
     * @var array
     */
    public $called_functions = array();
    /**
     * flags for used modifier plugins
     *
     * @var array
     */
    public $modifier_plugins = array();
    /**
     * type of already compiled modifier
     *
     * @var array
     */
    public $known_modifier_type = array();
    /**
     * hash for nocache sections
     *
     * @var mixed
     */
    private $nocache_hash = null;

    /**
     * Initialize compiler
     */
    public function __construct()
    {
    }

    /**
     * Method to compile a Smarty template
     *
     * @param  Smarty_Internal_Template $template template object to compile
     * @param  bool $nocache true is shall be compiled in nocache mode
     * @return bool             true if compiling succeeded, false if it failed
     */
    public function compileTemplate(Smarty_Internal_Template $template, $nocache = false)
    {
    }

    /**
     * Compile Tag
     * This is a call back from the lexer/parser
     * It executes the required compile plugin for the Smarty tag
     *
     * @param  string $tag tag name
     * @param  array $args array with tag attributes
     * @param  array $parameter array with compilation parameter
     * @throws SmartyCompilerException
     * @throws SmartyException
     * @return string compiled code
     */
    public function compileTag($tag, $args, $parameter = array())
    {
    }

    /**
     * lazy loads internal compile plugin for tag and calls the compile method
     * compile objects cached for reuse.
     * class name format:  Smarty_Internal_Compile_TagName
     * plugin filename format: Smarty_Internal_Tagname.php
     *
     * @param  string $tag tag name
     * @param  array $args list of tag attributes
     * @param  mixed $param1 optional parameter
     * @param  mixed $param2 optional parameter
     * @param  mixed $param3 optional parameter
     * @return string compiled code
     */
    public function callTagCompiler($tag, $args, $param1 = null, $param2 = null, $param3 = null)
    {
    }

    /**
     * display compiler error messages without dying
     * If parameter $args is empty it is a parser detected syntax error.
     * In this case the parser is called to obtain information about expected tokens.
     * If parameter $args contains a string this is used as error message
     *
     * @param  string $args individual error message or null
     * @param  string $line line-number
     * @throws SmartyCompilerException when an unexpected token is found
     */
    public function trigger_template_error($args = null, $line = null)
    {
    }

    /**
     * Check for plugins and return function name
     *
     * @param         $plugin_name
     * @param  string $plugin_type type of plugin
     * @return string call name of function
     */
    public function getPlugin($plugin_name, $plugin_type)
    {
    }

    /**
     * Check for plugins by default plugin handler
     *
     * @param  string $tag name of tag
     * @param  string $plugin_type type of plugin
     * @return boolean true if found
     */
    public function getPluginFromDefaultHandler($tag, $plugin_type)
    {
    }

    /**
     * Inject inline code for nocache template sections
     * This method gets the content of each template element from the parser.
     * If the content is compiled code and it should be not cached the code is injected
     * into the rendered output.
     *
     * @param  string $content content of template element
     * @param  boolean $is_code true if content is compiled code
     * @return string  content
     */
    public function processNocacheCode($content, $is_code)
    {
    }

    /**
     *  push current file and line offset on stack for tracing {block} source lines
     *
     * @param string $file new filename
     * @param string $uid uid of file
     * @param int $line line offset to source
     * @param bool $debug false debug end_compile shall not be called
     */
    public function pushTrace($file, $uid, $line, $debug = true)
    {
    }

    /**
     *  restore file and line offset
     */
    public function popTrace()
    {
    }

    /**
     * method to compile a Smarty template
     *
     * @param  mixed $_content template source
     * @return bool  true if compiling succeeded, false if it failed
     */
    abstract protected function doCompile($_content);
}
