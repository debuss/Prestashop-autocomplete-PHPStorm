<?php
/**
 * Smarty Internal Plugin Resource File
 *
 * @package    Smarty
 * @subpackage TemplateResources
 * @author     Uwe Tews
 * @author     Rodney Rehm
 */

/**
 * Smarty Internal Plugin Resource File
 * Implements the file system as resource for Smarty templates
 *
 * @package    Smarty
 * @subpackage TemplateResources
 */
class Smarty_Internal_Resource_File extends Smarty_Resource
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
     * populate Source Object with timestamp and exists from Resource
     *
     * @param Smarty_Template_Source $source source object
     */
    public function populateTimestamp(Smarty_Template_Source $source)
    {
    }

    /**
     * Load template's source from file into current template object
     *
     * @param  Smarty_Template_Source $source source object
     * @return string                 template source
     * @throws SmartyException        if source cannot be loaded
     */
    public function getContent(Smarty_Template_Source $source)
    {
    }

    /**
     * Determine basename for compiled filename
     *
     * @param  Smarty_Template_Source $source source object
     * @return string                 resource's basename
     */
    public function getBasename(Smarty_Template_Source $source)
    {
    }
}
