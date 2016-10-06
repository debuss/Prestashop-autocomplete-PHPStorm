<?php

/**
 * Smarty Internal Plugin Resource PHP
 * Implements the file system as resource for PHP templates
 *
 * @package    Smarty
 * @subpackage TemplateResources
 * @author     Uwe Tews
 * @author     Rodney Rehm
 */
class Smarty_Internal_Resource_PHP extends Smarty_Resource_Uncompiled
{

    /**
     * container for short_open_tag directive's value before executing PHP templates
     *
     * @var string
     */
    protected $short_open_tag;

    /**
     * Create a new PHP Resource
     */
    public function __construct()
    {
    }

    /**
     * populate Source Object with meta data from Resource
     *
     * @param  Smarty_Template_Source $source source object
     * @param  Smarty_Internal_Template $_template template object
     * @return void
     */
    public function populate(Smarty_Template_Source $source, Smarty_Internal_Template $_template = null)
    {
    }

    /**
     * populate Source Object with timestamp and exists from Resource
     *
     * @param  Smarty_Template_Source $source source object
     * @return void
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
     * Render and output the template (without using the compiler)
     *
     * @param  Smarty_Template_Source $source source object
     * @param  Smarty_Internal_Template $_template template object
     * @return void
     * @throws SmartyException          if template cannot be loaded or allow_php_templates is disabled
     */
    public function renderUncompiled(Smarty_Template_Source $source, Smarty_Internal_Template $_template)
    {
    }
}
