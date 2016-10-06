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
 * Wrapper Implementation for custom resource plugins
 *
 * @package    Smarty
 * @subpackage TemplateResources
 */
abstract class Smarty_Resource_Custom extends Smarty_Resource
{

    /**
     * populate Source Object with meta data from Resource
     *
     * @param Smarty_Template_Source $source source object
     * @param Smarty_Internal_Template $_template template object
     */
    public function populate(Smarty_Template_Source $source, Smarty_Internal_Template $_template = null)
    {
    }

    /**
     * Load template's source into current template object
     *
     * @param  Smarty_Template_Source $source source object
     * @return string                 template source
     * @throws SmartyException        if source cannot be loaded
     */
    public function getContent(Smarty_Template_Source $source)
    {
    }

    /**
     * Fetch template's modification timestamp from data source
     * {@internal implementing this method is optional.
     *  Only implement it if modification times can be accessed faster than loading the complete template source.}}
     *
     * @param  string $name template name
     * @return integer|boolean timestamp (epoch) the template was modified, or false if not found
     */
    protected function fetchTimestamp($name)
    {
    }

    /**
     * fetch template and its modification time from data source
     *
     * @param string $name template name
     * @param string &$source template source
     * @param integer &$mtime template modification timestamp (epoch)
     */
    abstract protected function fetch($name, &$source, &$mtime);

    /**
     * Determine basename for compiled filename
     *
     * @param  Smarty_Template_Source $source source object
     * @return string                 resource's basename
     */
    protected function getBasename(Smarty_Template_Source $source)
    {
    }
}
