<?php
/**
 * Smarty shared plugin
 *
 * @package    Smarty
 * @subpackage PluginsShared
 */

if (!function_exists('smarty_mb_wordwrap')) {

    /**
     * Wrap a string to a given number of characters
     *
     * @link   http://php.net/manual/en/function.wordwrap.php for similarity
     * @param  string $str the string to wrap
     * @param  int $width the width of the output
     * @param  string $break the character used to break the line
     * @param  boolean $cut ignored parameter, just for the sake of
     * @return string  wrapped string
     * @author Rodney Rehm
     */
    function smarty_mb_wordwrap($str, $width = 75, $break = "\n", $cut = false)
    {
    }
}
