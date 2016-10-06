<?php
/**
 * Smarty Internal Plugin
 *
 * @package    Smarty
 * @subpackage Cacher
 */

/**
 * Cache Handler API
 *
 * @package    Smarty
 * @subpackage Cacher
 * @author     Rodney Rehm
 */
abstract class Smarty_CacheResource
{

    /**
     * cache for Smarty_CacheResource instances
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
    );

    /**
     * Load Cache Resource Handler
     *
     * @param Smarty $smarty Smarty object
     * @param string $type name of the cache resource
     * @throws SmartyException
     * @return Smarty_CacheResource Cache Resource Handler
     */
    public static function load(Smarty $smarty, $type = null)
    {
    }

    /**
     * Invalid Loaded Cache Files
     *
     * @param Smarty $smarty Smarty object
     */
    public static function invalidLoadedCache(Smarty $smarty)
    {
    }

    /**
     * populate Cached Object with meta data from Resource
     *
     * @param Smarty_Template_Cached $cached cached object
     * @param Smarty_Internal_Template $_template template object
     * @return void
     */
    abstract public function populate(Smarty_Template_Cached $cached, Smarty_Internal_Template $_template);

    /**
     * populate Cached Object with timestamp and exists from Resource
     *
     * @param Smarty_Template_Cached $cached
     * @return void
     */
    abstract public function populateTimestamp(Smarty_Template_Cached $cached);

    /**
     * Write the rendered template output to cache
     *
     * @param Smarty_Internal_Template $_template template object
     * @param string $content content to cache
     * @return boolean success
     */
    abstract public function writeCachedContent(Smarty_Internal_Template $_template, $content);

    /**
     * Return cached content
     *
     * @param Smarty_Internal_Template $_template template object
     * @return null|string
     */
    public function getCachedContent(Smarty_Internal_Template $_template)
    {
    }

    /**
     * Read the cached template and process header
     *
     * @param Smarty_Internal_Template $_template template object
     * @param Smarty_Template_Cached $cached cached object
     * @return boolean true or false if the cached content does not exist
     */
    abstract public function process(Smarty_Internal_Template $_template, Smarty_Template_Cached $cached = null);

    /**
     * Empty cache
     *
     * @param Smarty $smarty Smarty object
     * @param integer $exp_time expiration time (number of seconds, not timestamp)
     * @return integer number of cache files deleted
     */
    abstract public function clearAll(Smarty $smarty, $exp_time = null);

    /**
     * Empty cache for a specific template
     *
     * @param Smarty $smarty Smarty object
     * @param string $resource_name template name
     * @param string $cache_id cache id
     * @param string $compile_id compile id
     * @param integer $exp_time expiration time (number of seconds, not timestamp)
     * @return integer number of cache files deleted
     */
    abstract public function clear(Smarty $smarty, $resource_name, $cache_id, $compile_id, $exp_time);

    /**
     * @param Smarty $smarty
     * @param Smarty_Template_Cached $cached
     * @return bool|null
     */
    public function locked(Smarty $smarty, Smarty_Template_Cached $cached)
    {
    }

    /**
     * Check is cache is locked for this template
     *
     * @param Smarty $smarty
     * @param Smarty_Template_Cached $cached
     * @return bool
     */
    public function hasLock(Smarty $smarty, Smarty_Template_Cached $cached)
    {
    }

    /**
     * Lock cache for this template
     *
     * @param Smarty $smarty
     * @param Smarty_Template_Cached $cached
     * @return bool
     */
    public function acquireLock(Smarty $smarty, Smarty_Template_Cached $cached)
    {
    }

    /**
     * Unlock cache for this template
     *
     * @param Smarty $smarty
     * @param Smarty_Template_Cached $cached
     * @return bool
     */
    public function releaseLock(Smarty $smarty, Smarty_Template_Cached $cached)
    {
    }
}

/**
 * Smarty Resource Data Object
 * Cache Data Container for Template Files
 *
 * @package    Smarty
 * @subpackage TemplateResources
 * @author     Rodney Rehm
 */
class Smarty_Template_Cached
{

    /**
     * Source Filepath
     *
     * @var string
     */
    public $filepath = false;
    /**
     * Source Content
     *
     * @var string
     */
    public $content = null;
    /**
     * Source Timestamp
     *
     * @var integer
     */
    public $timestamp = false;
    /**
     * Source Existence
     *
     * @var boolean
     */
    public $exists = false;
    /**
     * Cache Is Valid
     *
     * @var boolean
     */
    public $valid = false;
    /**
     * Cache was processed
     *
     * @var boolean
     */
    public $processed = false;
    /**
     * CacheResource Handler
     *
     * @var Smarty_CacheResource
     */
    public $handler = null;
    /**
     * Template Compile Id (Smarty_Internal_Template::$compile_id)
     *
     * @var string
     */
    public $compile_id = null;
    /**
     * Template Cache Id (Smarty_Internal_Template::$cache_id)
     *
     * @var string
     */
    public $cache_id = null;
    /**
     * Id for cache locking
     *
     * @var string
     */
    public $lock_id = null;
    /**
     * flag that cache is locked by this instance
     *
     * @var bool
     */
    public $is_locked = false;
    /**
     * Source Object
     *
     * @var Smarty_Template_Source
     */
    public $source = null;

    /**
     * create Cached Object container
     *
     * @param Smarty_Internal_Template $_template template object
     */
    public function __construct(Smarty_Internal_Template $_template)
    {
    }

    /**
     * Write this cache object to handler
     *
     * @param Smarty_Internal_Template $_template template object
     * @param string $content content to cache
     * @return boolean success
     */
    public function write(Smarty_Internal_Template $_template, $content)
    {
    }
}
