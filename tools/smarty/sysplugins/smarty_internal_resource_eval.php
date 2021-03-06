<?php
/**
 * Smarty Internal Plugin Resource Eval
 *
 * @package    Smarty
 * @subpackage TemplateResources
 * @author     Uwe Tews
 * @author     Rodney Rehm
 */

/**
 * Smarty Internal Plugin Resource Eval
 * Implements the strings as resource for Smarty template
 * {@internal unlike string-resources the compiled state of eval-resources is NOT saved for subsequent access}}
 *
 * @package    Smarty
 * @subpackage TemplateResources
 */
class Smarty_Internal_Resource_Eval extends Smarty_Resource_Recompiled
{

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
     * Load template's source from $resource_name into current template object
     *
     * @uses decode() to decode base64 and urlencoded template_resources
     * @param  Smarty_Template_Source $source source object
     * @return string                 template source
     */
    public function getContent(Smarty_Template_Source $source)
    {
    }

    /**
     * decode base64 and urlencode
     *
     * @param  string $string template_resource to decode
     * @return string decoded template_resource
     */
    protected function decode($string)
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
}
