<?php
/**
 * Smarty Internal Plugin CacheResource File
 *
 * @package    Smarty
 * @subpackage Cacher
 * @author     Uwe Tews
 * @author     Rodney Rehm
 */

/**
 * This class does contain all necessary methods for the HTML cache on file system
 * Implements the file system as resource for the HTML cache Version ussing nocache inserts.
 *
 * @package    Smarty
 * @subpackage Cacher
 */
class Smarty_Internal_CacheResource_File extends Smarty_CacheResource
{

    /**
     * populate Cached Object with meta data from Resource
     *
     * @param Smarty_Template_Cached $cached cached object
     * @param Smarty_Internal_Template $_template template object
     * @return void
     */
    public function populate(Smarty_Template_Cached $cached, Smarty_Internal_Template $_template)
    {
    }

    /**
     * populate Cached Object with timestamp and exists from Resource
     *
     * @param Smarty_Template_Cached $cached cached object
     * @return void
     */
    public function populateTimestamp(Smarty_Template_Cached $cached)
    {
    }

    /**
     * Read the cached template and process its header
     *
     * @param Smarty_Internal_Template $_template template object
     * @param Smarty_Template_Cached $cached cached object
     * @return booleantrue or false if the cached content does not exist
     */
    public function process(Smarty_Internal_Template $_template, Smarty_Template_Cached $cached = null)
    {
    }

    /**
     * Write the rendered template output to cache
     *
     * @param Smarty_Internal_Template $_template template object
     * @param string $content content to cache
     * @return boolean success
     */
    public function writeCachedContent(Smarty_Internal_Template $_template, $content)
    {
    }

    /**
     * Empty cache
     *
     * @param Smarty $smarty
     * @param integer $exp_time expiration time (number of seconds, not timestamp)
     * @return integer number of cache files deleted
     */
    public function clearAll(Smarty $smarty, $exp_time = null)
    {
    }

    /**
     * Empty cache for a specific template
     *
     * @param Smarty $smarty
     * @param string $resource_name template name
     * @param string $cache_id cache id
     * @param string $compile_id compile id
     * @param integer $exp_time expiration time (number of seconds, not timestamp)
     * @return integer number of cache files deleted
     */
    public function clear(Smarty $smarty, $resource_name, $cache_id, $compile_id, $exp_time)
    {
    }

    /**
     * Check is cache is locked for this template
     *
     * @param Smarty $smarty Smarty object
     * @param Smarty_Template_Cached $cached cached object
     * @return boolean true or false if cache is locked
     */
    public function hasLock(Smarty $smarty, Smarty_Template_Cached $cached)
    {
    }

    /**
     * Lock cache for this template
     *
     * @param Smarty $smarty Smarty object
     * @param Smarty_Template_Cached $cached cached object
     * @return bool|void
     */
    public function acquireLock(Smarty $smarty, Smarty_Template_Cached $cached)
    {
    }

    /**
     * Unlock cache for this template
     *
     * @param Smarty $smarty Smarty object
     * @param Smarty_Template_Cached $cached cached object
     * @return bool|void
     */
    public function releaseLock(Smarty $smarty, Smarty_Template_Cached $cached)
    {
    }
}
