<?php
/**
 * Smarty Internal Plugin Filter Handler
 * Smarty filter handler class
 *
 * @package    Smarty
 * @subpackage PluginsInternal
 * @author     Uwe Tews
 */

/**
 * Class for filter processing
 *
 * @package    Smarty
 * @subpackage PluginsInternal
 */
class Smarty_Internal_Filter_Handler
{

    /**
     * Run filters over content
     * The filters will be lazy loaded if required
     * class name format: Smarty_FilterType_FilterName
     * plugin filename format: filtertype.filtername.php
     * Smarty2 filter plugins could be used
     *
     * @param  string $type the type of filter ('pre','post','output') which shall run
     * @param  string $content the content which shall be processed by the filters
     * @param  Smarty_Internal_Template $template template object
     * @throws SmartyException
     * @return string                   the filtered content
     */
    public static function runFilter($type, $content, Smarty_Internal_Template $template)
    {
    }
}
