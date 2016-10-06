<?php
/**
 * Project:     Smarty: the PHP compiling template engine
 * File:        smarty_internal_utility.php
 * SVN:         $Id: $
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 * For questions, help, comments, discussion, etc., please join the
 * Smarty mailing list. Send a blank e-mail to
 * smarty-discussion-subscribe@googlegroups.com
 *
 * @link       http://www.smarty.net/
 * @copyright  2008 New Digital Group, Inc.
 * @author     Monte Ohrt <monte at ohrt dot com>
 * @author     Uwe Tews
 * @package    Smarty
 * @subpackage PluginsInternal
 * @version    3-SVN$Rev: 3286 $
 */

/**
 * Utility class
 *
 * @package    Smarty
 * @subpackage Security
 */
class Smarty_Internal_Utility
{

    /**
     * private constructor to prevent calls creation of new instances
     */
    final private function __construct()
    {
    }

    /**
     * Compile all template files
     *
     * @param  string $extension template file name extension
     * @param  bool $force_compile force all to recompile
     * @param  int $time_limit set maximum execution time
     * @param  int $max_errors set maximum allowed errors
     * @param  Smarty $smarty Smarty instance
     * @return integer number of template files compiled
     */
    public static function compileAllTemplates($extension, $force_compile, $time_limit, $max_errors, Smarty $smarty)
    {
    }

    /**
     * Compile all config files
     *
     * @param  string $extension config file name extension
     * @param  bool $force_compile force all to recompile
     * @param  int $time_limit set maximum execution time
     * @param  int $max_errors set maximum allowed errors
     * @param  Smarty $smarty Smarty instance
     * @return integer number of config files compiled
     */
    public static function compileAllConfig($extension, $force_compile, $time_limit, $max_errors, Smarty $smarty)
    {
    }

    /**
     * Delete compiled template file
     *
     * @param  string $resource_name template name
     * @param  string $compile_id compile id
     * @param  integer $exp_time expiration time
     * @param  Smarty $smarty Smarty instance
     * @return integer number of template files deleted
     */
    public static function clearCompiledTemplate($resource_name, $compile_id, $exp_time, Smarty $smarty)
    {
    }

    /**
     * Return array of tag/attributes of all tags used by an template
     *
     * @param Smarty_Internal_Template $template
     * @throws Exception
     * @throws SmartyException
     * @return array                    of tag/attributes
     */
    public static function getTags(Smarty_Internal_Template $template)
    {
    }

    /**
     * diagnose Smarty setup
     * If $errors is secified, the diagnostic report will be appended to the array, rather than being output.
     *
     * @param  Smarty $smarty Smarty instance to test
     * @param  array $errors array to push results into rather than outputting them
     * @return bool   status, true if everything is fine, false else
     */
    public static function testInstall(Smarty $smarty, &$errors = null)
    {
    }
}
