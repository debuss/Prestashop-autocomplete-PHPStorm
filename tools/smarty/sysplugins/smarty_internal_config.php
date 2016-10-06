<?php
/**
 * Smarty Internal Plugin Config
 *
 * @package    Smarty
 * @subpackage Config
 * @author     Uwe Tews
 */

/**
 * Smarty Internal Plugin Config
 * Main class for config variables
 *
 * @package    Smarty
 * @subpackage Config
 * @ignore
 */
class Smarty_Internal_Config
{

    /**
     * Smarty instance
     *
     * @var Smarty object
     */
    public $smarty = null;
    /**
     * Object of config var storage
     *
     * @var object
     */
    public $data = null;
    /**
     * Config resource
     *
     * @var string
     */
    public $config_resource = null;
    /**
     * Compiled config file
     *
     * @var string
     */
    public $compiled_config = null;
    /**
     * filepath of compiled config file
     *
     * @var string
     */
    public $compiled_filepath = null;
    /**
     * Filemtime of compiled config Filemtime
     *
     * @var int
     */
    public $compiled_timestamp = null;
    /**
     * flag if compiled config file is invalid and must be (re)compiled
     *
     * @var bool
     */
    public $mustCompile = null;
    /**
     * Config file compiler object
     *
     * @var Smarty_Internal_Config_File_Compiler object
     */
    public $compiler_object = null;

    /**
     * Constructor of config file object
     *
     * @param string $config_resource config file resource name
     * @param Smarty $smarty Smarty instance
     * @param object $data object for config vars storage
     */
    public function __construct($config_resource, $smarty, $data = null)
    {
    }

    /**
     * Returns the compiled config file
     * It checks if the config file must be compiled or just read the compiled version
     *
     * @return string the compiled config file
     */
    public function getCompiledConfig()
    {
    }

    /**
     * Returns if the current config file must be compiled
     * It does compare the timestamps of config source and the compiled config and checks the force compile configuration
     *
     * @return boolean true if the file must be compiled
     */
    public function mustCompile()
    {
    }

    /**
     * Returns the timestamp of the compiled file
     *
     * @return integer the file timestamp
     */
    public function getCompiledTimestamp()
    {
    }

    /**
     * Returns the compiled  filepath
     *
     * @return string the compiled filepath
     */
    public function getCompiledFilepath()
    {
    }

    /**
     * Get file path.
     *
     * @return string
     */
    public function buildCompiledFilepath()
    {
    }

    /**
     * Compiles the config files
     *
     * @throws Exception
     */
    public function compileConfigSource()
    {
    }

    /**
     * load config variables
     *
     * @param mixed $sections array of section names, single section or null
     * @param string $scope global,parent or local
     * @throws Exception
     */
    public function loadConfigVars($sections = null, $scope = 'local')
    {
    }

    /**
     * get Smarty property in template context
     *
     * @param  string $property_name property name
     * @return \Smarty_Config_Source|\Smarty_Template_Compiled
     * @throws SmartyException if $property_name is not valid
     */
    public function __get($property_name)
    {
    }

    /**
     * set Smarty property in template context
     *
     * @param  string $property_name property name
     * @param  mixed $value value
     * @throws SmartyException if $property_name is not valid
     */
    public function __set($property_name, $value)
    {
    }
}
