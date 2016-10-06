<?php
/**
 * Smarty Resource Plugin
 *
 * @package    Smarty
 * @subpackage TemplateResources
 * @author     Rodney Rehm
 */

/**
 * Smarty Resource Plugin
 * Base implementation for resource plugins
 *
 * @package    Smarty
 * @subpackage TemplateResources
 */
abstract class Smarty_Resource
{

    /**
     * cache for Smarty_Template_Source instances
     *
     * @var array
     */
    public static $sources = array();
    /**
     * cache for Smarty_Template_Compiled instances
     *
     * @var array
     */
    public static $compileds = array();
    /**
     * cache for Smarty_Resource instances
     *
     * @var array
     */
    public static $resources = array();
    /**
     * resource types provided by the core
     *
     * @var array
     */
    protected static $sysplugins = array(
        'file' => true,
        'string' => true,
        'extends' => true,
        'stream' => true,
        'eval' => true,
        'php' => true
    );
    /**
     * Name of the Class to compile this resource's contents with
     *
     * @var string
     */
    public $compiler_class = 'Smarty_Internal_SmartyTemplateCompiler';
    /**
     * Name of the Class to tokenize this resource's contents with
     *
     * @var string
     */
    public $template_lexer_class = 'Smarty_Internal_Templatelexer';
    /**
     * Name of the Class to parse this resource's contents with
     *
     * @var string
     */
    public $template_parser_class = 'Smarty_Internal_Templateparser';

    /**
     * modify template_resource according to resource handlers specifications
     *
     * @param  Smarty_Internal_template $template Smarty instance
     * @param  string $template_resource template_resource to extract resource handler and name of
     * @return string unique resource name
     */
    public static function getUniqueTemplateName($template, $template_resource)
    {
    }

    /**
     * Load Resource Handler
     *
     * @param  Smarty $smarty smarty object
     * @param  string $type name of the resource
     * @throws SmartyException
     * @return Smarty_Resource Resource Handler
     */
    public static function load(Smarty $smarty, $type)
    {
    }

    /**
     * initialize Source Object for given resource
     * Either [$_template] or [$smarty, $template_resource] must be specified
     *
     * @param  Smarty_Internal_Template $_template template object
     * @param  Smarty $smarty smarty object
     * @param  string $template_resource resource identifier
     * @return Smarty_Template_Source   Source Object
     */
    public static function source(Smarty_Internal_Template $_template = null, Smarty $smarty = null, $template_resource = null)
    {
    }

    /**
     * initialize Config Source Object for given resource
     *
     * @param  Smarty_Internal_Config $_config config object
     * @throws SmartyException
     * @return Smarty_Config_Source   Source Object
     */
    public static function config(Smarty_Internal_Config $_config)
    {
    }

    /**
     * extract resource_type and resource_name from template_resource and config_resource
     * @note "C:/foo.tpl" was forced to file resource up till Smarty 3.1.3 (including).
     *
     * @param  string $resource_name template_resource or config_resource to parse
     * @param  string $default_resource the default resource_type defined in $smarty
     * @param  string &$name the parsed resource name
     * @param  string &$type the parsed resource type
     * @return void
     */
    protected static function parseResourceName($resource_name, $default_resource, &$name, &$type)
    {
    }

    /**
     * populate Source Object with meta data from Resource
     *
     * @param Smarty_Template_Source $source source object
     * @param Smarty_Internal_Template $_template template object
     */
    abstract public function populate(Smarty_Template_Source $source, Smarty_Internal_Template $_template = null);

    /**
     * Load template's source into current template object
     * {@internal The loaded source is assigned to $_template->source->content directly.}}
     *
     * @param  Smarty_Template_Source $source source object
     * @return string                 template source
     * @throws SmartyException        if source cannot be loaded
     */
    abstract public function getContent(Smarty_Template_Source $source);

    /**
     * populate Source Object with timestamp and exists from Resource
     *
     * @param Smarty_Template_Source $source source object
     */
    public function populateTimestamp(Smarty_Template_Source $source)
    {
    }

    /**
     * populate Compiled Object with compiled filepath
     *
     * @param Smarty_Template_Compiled $compiled compiled object
     * @param Smarty_Internal_Template $_template template object
     */
    public function populateCompiledFilepath(Smarty_Template_Compiled $compiled, Smarty_Internal_Template $_template)
    {
    }

    /**
     * modify resource_name according to resource handlers specifications
     *
     * @param  Smarty $smarty Smarty instance
     * @param  string $resource_name resource_name to make unique
     * @param  boolean $is_config flag for config resource
     * @return string unique resource name
     */
    protected function buildUniqueResourceName(Smarty $smarty, $resource_name, $is_config = false)
    {
    }

    /**
     * Determine basename for compiled filename
     *
     * @param  Smarty_Template_Source $source source object
     * @return string                 resource's basename
     */
    protected function getBasename(Smarty_Template_Source $source)
    {
    }

    /**
     * modify resource_name according to resource handlers specifications
     *
     * @param  Smarty $smarty Smarty instance
     * @param  string $resource_name resource_name to make unique
     * @return string unique resource name
     */

    /**
     * build template filepath by traversing the template_dir array
     *
     * @param  Smarty_Template_Source $source source object
     * @param  Smarty_Internal_Template $_template template object
     * @return string                   fully qualified filepath
     * @throws SmartyException          if default template handler is registered but not callable
     */
    protected function buildFilepath(Smarty_Template_Source $source, Smarty_Internal_Template $_template = null)
    {
    }

    /**
     * Normalize Paths "foo/../bar" to "bar"
     *
     * @param  string $_path path to normalize
     * @param  boolean $ds respect windows directory separator
     * @return string  normalized path
     */
    protected function normalizePath($_path, $ds = true)
    {
    }

    /**
     * test is file exists and save timestamp
     *
     * @param  Smarty_Template_Source $source source object
     * @param  string $file file name
     * @return bool                   true if file exists
     */
    protected function fileExists(Smarty_Template_Source $source, $file)
    {
    }
}

/**
 * Smarty Resource Data Object
 * Meta Data Container for Template Files
 *
 * @package    Smarty
 * @subpackage TemplateResources
 * @author     Rodney Rehm
 * @property integer $timestamp Source Timestamp
 * @property boolean $exists    Source Existence
 * @property boolean $template  Extended Template reference
 * @property string $content   Source Content
 */
class Smarty_Template_Source
{

    /**
     * Name of the Class to compile this resource's contents with
     *
     * @var string
     */
    public $compiler_class = null;
    /**
     * Name of the Class to tokenize this resource's contents with
     *
     * @var string
     */
    public $template_lexer_class = null;
    /**
     * Name of the Class to parse this resource's contents with
     *
     * @var string
     */
    public $template_parser_class = null;
    /**
     * Unique Template ID
     *
     * @var string
     */
    public $uid = null;
    /**
     * Template Resource (Smarty_Internal_Template::$template_resource)
     *
     * @var string
     */
    public $resource = null;
    /**
     * Resource Type
     *
     * @var string
     */
    public $type = null;
    /**
     * Resource Name
     *
     * @var string
     */
    public $name = null;
    /**
     * Unique Resource Name
     *
     * @var string
     */
    public $unique_resource = null;
    /**
     * Source Filepath
     *
     * @var string
     */
    public $filepath = null;
    /**
     * Source is bypassing compiler
     *
     * @var boolean
     */
    public $uncompiled = null;
    /**
     * Source must be recompiled on every occasion
     *
     * @var boolean
     */
    public $recompiled = null;
    /**
     * The Components an extended template is made of
     *
     * @var array
     */
    public $components = null;
    /**
     * Resource Handler
     *
     * @var Smarty_Resource
     */
    public $handler = null;
    /**
     * Smarty instance
     *
     * @var Smarty
     */
    public $smarty = null;

    /**
     * create Source Object container
     *
     * @param Smarty_Resource $handler Resource Handler this source object communicates with
     * @param Smarty $smarty Smarty instance this source object belongs to
     * @param string $resource full template_resource
     * @param string $type type of resource
     * @param string $name resource name
     * @param string $unique_resource unique resource name
     */
    public function __construct(Smarty_Resource $handler, Smarty $smarty, $resource, $type, $name, $unique_resource)
    {
    }

    /**
     * get a Compiled Object of this source
     *
     * @param  Smarty_Internal_Template|Smarty_Internal_Config $_template template object
     * @return Smarty_Template_Compiled compiled object
     */
    public function getCompiled($_template)
    {
    }

    /**
     * render the uncompiled source
     *
     * @param Smarty_Internal_Template $_template template object
     */
    public function renderUncompiled(Smarty_Internal_Template $_template)
    {
    }

    /**
     * <<magic>> Generic getter.
     *
     * @param  string $property_name valid: timestamp, exists, content
     * @return mixed
     * @throws SmartyException if $property_name is not valid
     */
    public function __get($property_name)
    {
    }

    /**
     * <<magic>> Generic Setter.
     *
     * @param  string $property_name valid: timestamp, exists, content, template
     * @param  mixed $value new value (is not checked)
     * @throws SmartyException if $property_name is not valid
     */
    public function __set($property_name, $value)
    {
    }
}

/**
 * Smarty Resource Data Object
 * Meta Data Container for Template Files
 *
 * @package    Smarty
 * @subpackage TemplateResources
 * @author     Rodney Rehm
 * @property string $content compiled content
 */
class Smarty_Template_Compiled
{

    /**
     * Compiled Filepath
     *
     * @var string
     */
    public $filepath = null;
    /**
     * Compiled Timestamp
     *
     * @var integer
     */
    public $timestamp = null;
    /**
     * Compiled Existence
     *
     * @var boolean
     */
    public $exists = false;
    /**
     * Compiled Content Loaded
     *
     * @var boolean
     */
    public $loaded = false;
    /**
     * Template was compiled
     *
     * @var boolean
     */
    public $isCompiled = false;
    /**
     * Source Object
     *
     * @var Smarty_Template_Source
     */
    public $source = null;
    /**
     * Metadata properties
     * populated by Smarty_Internal_Template::decodeProperties()
     *
     * @var array
     */
    public $_properties = null;

    /**
     * create Compiled Object container
     *
     * @param Smarty_Template_Source $source source object this compiled object belongs to
     */
    public function __construct(Smarty_Template_Source $source)
    {
    }
}
