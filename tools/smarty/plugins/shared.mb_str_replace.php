<?php
/**
 * Smarty shared plugin
 *
 * @package    Smarty
 * @subpackage PluginsShared
 */
if (!function_exists('smarty_mb_str_replace')) {

    /**
     * Multibyte string replace
     *
     * @param  string $search the string to be searched
     * @param  string $replace the replacement string
     * @param  string $subject the source string
     * @param  int &$count number of matches found
     * @return string replaced string
     * @author Rodney Rehm
     */
    function smarty_mb_str_replace($search, $replace, $subject, &$count = 0)
    {
    }
}
