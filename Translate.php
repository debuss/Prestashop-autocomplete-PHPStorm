<?php
/*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

/**
 * @since 1.5.0
 */
class Translate
{

    /**
     * Get a translation for an admin controller
     *
     * @param $string
     * @param string $class
     * @param bool $addslashes
     * @param bool $htmlentities
     * @return string
     */
    public static function getAdminTranslation($string, $class = 'AdminTab', $addslashes = false, $htmlentities = true, $sprintf = null)
    {
    }

    /**
     * Get a translation for a module
     *
     * @param string|Module $module
     * @param string $string
     * @param string $source
     * @return string
     */
    public static function getModuleTranslation($module, $string, $source, $sprintf = null, $js = false)
    {
    }

    /**
     * Check if string use a specif syntax for sprintf and replace arguments if use it
     *
     * @param $string
     * @param $args
     * @return string
     */
    public static function checkAndReplaceArgs($string, $args)
    {
    }

    /**
     * Return the translation for a string if it exists for the base AdminController or for helpers
     *
     * @static
     * @param $string string to translate
     * @param null $key md5 key if already calculated (optional)
     * @param $lang_array global array of admin translations
     * @return string translation
     */
    public static function getGenericAdminTranslation($string, $key = null, &$lang_array)
    {
    }

    /**
     * Get a translation for a PDF
     *
     * @param string $string
     * @return string
     */
    public static function getPdfTranslation($string)
    {
    }
}

