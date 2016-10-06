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
abstract class Smarty_CacheResource_Custom extends Smarty_CacheResource
{

    /**
     * populate Cached Object with meta data from Resource
     *
     * @param  Smarty_Template_Cached $cached cached object
     * @param  Smarty_Internal_Template $_template template object
     * @return void
     */
    public function populate(Smarty_Template_Cached $cached, Smarty_Internal_Template $_template)
    {
    }

    /**
     * populate Cached Object with timestamp and exists from Resource
     *
     * @param Smarty_Template_Cached $cached
     * @return void
     */
    public function populateTimestamp(Smarty_Template_Cached $cached)
    {
    }

    /**
     * Read the cached template and process the header
     *
     * @param  Smarty_Internal_Template $_template template object
     * @param  Smarty_Template_Cached $cached cached object
     * @return boolean                 true or false if the cached content does not exist
     */
    public function process(Smarty_Internal_Template $_template, Smarty_Template_Cached $cached = null)
    {
    }

    /**
     * Write the rendered template output to cache
     *
     * @param  Smarty_Internal_Template $_template template object
     * @param  string $content content to cache
     * @return boolean                  success
     */
    public function writeCachedContent(Smarty_Internal_Template $_template, $content)
    {
    }

    /**
     * Empty cache
     *
     * @param  Smarty $smarty Smarty object
     * @param  integer $exp_time expiration time (number of seconds, not timestamp)
     * @return integer number of cache files deleted
     */
    public function clearAll(Smarty $smarty, $exp_time = null)
    {
    }

    /**
     * Empty cache for a specific template
     *
     * @param  Smarty $smarty Smarty object
     * @param  string $resource_name template name
     * @param  string $cache_id cache id
     * @param  string $compile_id compile id
     * @param  integer $exp_time expiration time (number of seconds, not timestamp)
     * @return integer number of cache files deleted
     */
    public function clear(Smarty $smarty, $resource_name, $cache_id, $compile_id, $exp_time)
    {
    }

    /**
     * Check is cache is locked for this template
     *
     * @param  Smarty $smarty Smarty object
     * @param  Smarty_Template_Cached $cached cached object
     * @return boolean               true or false if cache is locked
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

    /**
     * Fetch cached content's modification timestamp from data source
     * {@internal implementing this method is optional.
     *  Only implement it if modification times can be accessed faster than loading the complete cached content.}}
     *
     * @param  string $id unique cache content identifier
     * @param  string $name template name
     * @param  string $cache_id cache id
     * @param  string $compile_id compile id
     * @return integer|boolean timestamp (epoch) the template was modified, or false if not found
     */
    protected function fetchTimestamp($id, $name, $cache_id, $compile_id)
    {
    }

    /**
     * fetch cached content and its modification time from data source
     *
     * @param  string $id unique cache content identifier
     * @param  string $name template name
     * @param  string $cache_id cache id
     * @param  string $compile_id compile id
     * @param  string $content cached content
     * @param  integer $mtime cache modification timestamp (epoch)
     * @return void
     */
    abstract protected function fetch($id, $name, $cache_id, $compile_id, &$content, &$mtime);

    /**
     * Save content to cache
     *
     * @param  string $id unique cache content identifier
     * @param  string $name template name
     * @param  string $cache_id cache id
     * @param  string $compile_id compile id
     * @param  integer|null $exp_time seconds till expiration or null
     * @param  string $content content to cache
     * @return boolean      success
     */
    abstract protected function save($id, $name, $cache_id, $compile_id, $exp_time, $content);

    /**
     * Delete content from cache
     *
     * @param  string $name template name
     * @param  string $cache_id cache id
     * @param  string $compile_id compile id
     * @param  integer|null $exp_time seconds till expiration time in seconds or null
     * @return integer      number of deleted caches
     */
    abstract protected function delete($name, $cache_id, $compile_id, $exp_time);
}
