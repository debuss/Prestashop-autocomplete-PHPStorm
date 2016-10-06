<?php
/**
 * Smarty Internal Plugin Data
 * This file contains the basic classes and methods for template and variable creation
 *
 * @package    Smarty
 * @subpackage Template
 * @author     Uwe Tews
 */

/**
 * Base class with template and variable methods
 *
 * @package    Smarty
 * @subpackage Template
 */
class Smarty_Internal_Data
{

    /**
     * name of class used for templates
     *
     * @var string
     */
    public $template_class = 'Smarty_Internal_Template';
    /**
     * template variables
     *
     * @var array
     */
    public $tpl_vars = array();
    /**
     * parent template (if any)
     *
     * @var Smarty_Internal_Template
     */
    public $parent = null;
    /**
     * configuration settings
     *
     * @var array
     */
    public $config_vars = array();

    /**
     * assigns a Smarty variable
     *
     * @param  array|string $tpl_var the template variable name(s)
     * @param  mixed $value the value to assign
     * @param  boolean $nocache if true any output of this variable will be not cached
     * @return Smarty_Internal_Data current Smarty_Internal_Data (or Smarty or Smarty_Internal_Template) instance for chaining
     */
    public function assign($tpl_var, $value = null, $nocache = false)
    {
    }

    /**
     * assigns a global Smarty variable
     *
     * @param  string $varname the global variable name
     * @param  mixed $value the value to assign
     * @param  boolean $nocache if true any output of this variable will be not cached
     * @return Smarty_Internal_Data current Smarty_Internal_Data (or Smarty or Smarty_Internal_Template) instance for chaining
     */
    public function assignGlobal($varname, $value = null, $nocache = false)
    {
    }

    /**
     * assigns values to template variables by reference
     *
     * @param string $tpl_var the template variable name
     * @param          $value
     * @param  boolean $nocache if true any output of this variable will be not cached
     * @return Smarty_Internal_Data current Smarty_Internal_Data (or Smarty or Smarty_Internal_Template) instance for chaining
     */
    public function assignByRef($tpl_var, &$value, $nocache = false)
    {
    }

    /**
     * appends values to template variables
     *
     * @param  array|string $tpl_var the template variable name(s)
     * @param  mixed $value the value to append
     * @param  boolean $merge flag if array elements shall be merged
     * @param  boolean $nocache if true any output of this variable will be not cached
     * @return Smarty_Internal_Data current Smarty_Internal_Data (or Smarty or Smarty_Internal_Template) instance for chaining
     */
    public function append($tpl_var, $value = null, $merge = false, $nocache = false)
    {
    }

    /**
     * gets the object of a Smarty variable
     *
     * @param  string $variable the name of the Smarty variable
     * @param  object $_ptr optional pointer to data object
     * @param  boolean $search_parents search also in parent data
     * @param bool $error_enable
     * @return object  the object of the variable
     */
    public function getVariable($variable, $_ptr = null, $search_parents = true, $error_enable = true)
    {
    }

    /**
     * appends values to template variables by reference
     *
     * @param  string $tpl_var the template variable name
     * @param  mixed &$value the referenced value to append
     * @param  boolean $merge flag if array elements shall be merged
     * @return Smarty_Internal_Data current Smarty_Internal_Data (or Smarty or Smarty_Internal_Template) instance for chaining
     */
    public function appendByRef($tpl_var, &$value, $merge = false)
    {
    }

    /**
     * Returns a single or all template variables
     *
     * @param  string $varname variable name or null
     * @param  object $_ptr optional pointer to data object
     * @param  boolean $search_parents include parent templates?
     * @return string  variable value or or array of variables
     */
    public function getTemplateVars($varname = null, $_ptr = null, $search_parents = true)
    {
    }

    /**
     * clear the given assigned template variable.
     *
     * @param  string|array $tpl_var the template variable(s) to clear
     * @return Smarty_Internal_Data current Smarty_Internal_Data (or Smarty or Smarty_Internal_Template) instance for chaining
     */
    public function clearAssign($tpl_var)
    {
    }

    /**
     * clear all the assigned template variables.
     *
     * @return Smarty_Internal_Data current Smarty_Internal_Data (or Smarty or Smarty_Internal_Template) instance for chaining
     */
    public function clearAllAssign()
    {
    }

    /**
     * load a config file, optionally load just selected sections
     *
     * @param  string $config_file filename
     * @param  mixed $sections array of section names, single section or null
     * @return Smarty_Internal_Data current Smarty_Internal_Data (or Smarty or Smarty_Internal_Template) instance for chaining
     */
    public function configLoad($config_file, $sections = null)
    {
    }

    /**
     * gets  a config variable
     *
     * @param  string $variable the name of the config variable
     * @param bool $error_enable
     * @return mixed  the value of the config variable
     */
    public function getConfigVariable($variable, $error_enable = true)
    {
    }

    /**
     * gets  a stream variable
     *
     * @param  string $variable the stream of the variable
     * @throws SmartyException
     * @return mixed  the value of the stream variable
     */
    public function getStreamVariable($variable)
    {
    }

    /**
     * Returns a single or all config variables
     *
     * @param  string $varname variable name or null
     * @param bool $search_parents
     * @return string variable value or or array of variables
     */
    public function getConfigVars($varname = null, $search_parents = true)
    {
    }

    /**
     * Deassigns a single or all config variables
     *
     * @param  string $varname variable name or null
     * @return Smarty_Internal_Data current Smarty_Internal_Data (or Smarty or Smarty_Internal_Template) instance for chaining
     */
    public function clearConfig($varname = null)
    {
    }
}

/**
 * class for the Smarty data object
 * The Smarty data object will hold Smarty variables in the current scope
 *
 * @package    Smarty
 * @subpackage Template
 */
class Smarty_Data extends Smarty_Internal_Data
{

    /**
     * Smarty object
     *
     * @var Smarty
     */
    public $smarty = null;

    /**
     * create Smarty data object
     *
     * @param Smarty|array $_parent parent template
     * @param Smarty|Smarty_Internal_Template $smarty global smarty instance
     * @throws SmartyException
     */
    public function __construct($_parent = null, $smarty = null)
    {
    }
}

/**
 * class for the Smarty variable object
 * This class defines the Smarty variable object
 *
 * @package    Smarty
 * @subpackage Template
 */
class Smarty_Variable
{

    /**
     * template variable
     *
     * @var mixed
     */
    public $value = null;
    /**
     * if true any output of this variable will be not cached
     *
     * @var boolean
     */
    public $nocache = false;
    /**
     * the scope the variable will have  (local,parent or root)
     *
     * @var int
     */
    public $scope = Smarty::SCOPE_LOCAL;

    /**
     * create Smarty variable object
     *
     * @param mixed $value the value to assign
     * @param boolean $nocache if true any output of this variable will be not cached
     * @param int $scope the scope the variable will have  (local,parent or root)
     */
    public function __construct($value = null, $nocache = false, $scope = Smarty::SCOPE_LOCAL)
    {
    }

    /**
     * <<magic>> String conversion
     *
     * @return string
     */
    public function __toString()
    {
    }
}

/**
 * class for undefined variable object
 * This class defines an object for undefined variable handling
 *
 * @package    Smarty
 * @subpackage Template
 */
class Undefined_Smarty_Variable
{

    /**
     * Returns FALSE for 'nocache' and NULL otherwise.
     *
     * @param  string $name
     * @return bool
     */
    public function __get($name)
    {
    }

    /**
     * Always returns an empty string.
     *
     * @return string
     */
    public function __toString()
    {
    }
}
