<?php

/*
* 2007-2012 PrestaShop
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

class Media
{

    public static $jquery_ui_dependencies = array(
        'ui.core' => array('fileName' => 'jquery.ui.core.min.js', 'dependencies' => array(), 'theme' => true),
        'ui.widget' => array('fileName' => 'jquery.ui.widget.min.js', 'dependencies' => array(), 'theme' => false),
        'ui.mouse' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('ui.core', 'ui.widget'), 'theme' => false),
        'ui.position' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array(), 'theme' => false),
        'ui.draggable' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('ui.core', 'ui.widget', 'ui.mouse'), 'theme' => false),
        'ui.droppable' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('ui.core', 'ui.widget', 'ui.mouse', 'ui.draggable'), 'theme' => false),
        'ui.resizable' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('ui.core', 'ui.widget', 'ui.mouse'), 'theme' => true),
        'ui.selectable' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('ui.core', 'ui.widget', 'ui.mouse'), 'theme' => true),
        'ui.sortable' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('ui.core', 'ui.widget', 'ui.mouse'), 'theme' => true),
        'ui.accordion' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('ui.core', 'ui.widget'), 'theme' => true),
        'ui.autocomplete' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('ui.core', 'ui.widget', 'ui.position'), 'theme' => true),
        'ui.button' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('ui.core', 'ui.widget'), 'theme' => true),
        'ui.dialog' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('ui.core', 'ui.widget', 'ui.position'), 'theme' => true),
        'ui.slider' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('ui.core', 'ui.widget', 'ui.mouse'), 'theme' => true),
        'ui.tabs' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('ui.core', 'ui.widget'), 'theme' => true),
        'ui.datepicker' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('ui.core'), 'theme' => true),
        'ui.progressbar' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('ui.core', 'ui.widget'), 'theme' => true),
        'effects.core' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array(), 'theme' => false),
        'effects.blind' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('effects.core'), 'theme' => false),
        'effects.bounce' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('effects.core'), 'theme' => false),
        'effects.clip' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('effects.core'), 'theme' => false),
        'effects.drop' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('effects.core'), 'theme' => false),
        'effects.explode' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('effects.core'), 'theme' => false),
        'effects.fade' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('effects.core'), 'theme' => false),
        'effects.fold' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('effects.core'), 'theme' => false),
        'effects.highlight' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('effects.core'), 'theme' => false),
        'effects.pulsate' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('effects.core'), 'theme' => false),
        'effects.scale' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('effects.core'), 'theme' => false),
        'effects.shake' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('effects.core'), 'theme' => false),
        'effects.slide' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('effects.core'), 'theme' => false),
        'effects.transfer' => array('fileName' => 'jquery.ui.mouse.min.js', 'dependencies' => array('effects.core'), 'theme' => false)
    );

    public static function minifyHTML($html_content)
    {
    }

    public static function getBackTrackLimit()
    {
    }

    public static function minifyHTMLpregCallback($preg_matches)
    {
    }

    public static function packJSinHTML($html_content)
    {
    }

    public static function packJSinHTMLpregCallback($preg_matches)
    {
    }

    public static function packJS($js_content)
    {
    }

    /**
     * return jquery path.
     *
     * @param mixed $version
     * @return string
     */
    public static function getJqueryPath($version = null, $folder = null, $minifier = true)
    {
    }

    /**
     * addJS return javascript path
     *
     * @param mixed $js_uri
     * @return string
     */
    public static function getJSPath($js_uri)
    {
    }

    /**
     * return jqueryUI component path.
     *
     * @param mixed $component
     * @return string
     */
    public static function getJqueryUIPath($component, $theme, $check_dependencies)
    {
    }

    /**
     * addCSS return stylesheet path.
     *
     * @param mixed $css_uri
     * @param string $css_media_type
     * @return string
     */
    public static function getCSSPath($css_uri, $css_media_type = 'all')
    {
    }

    /**
     * return jquery plugin path.
     *
     * @param mixed $name
     * @return void
     */
    public static function getJqueryPluginPath($name, $folder = null)
    {
    }

    /**
     * return jquery plugin css path if exist.
     *
     * @param mixed $name
     * @return void
     */
    public static function getJqueryPluginCSSPath($name, $folder = null)
    {
    }

    /**
     * Combine Compress and Cache CSS (ccc) calls
     *
     * @param array css_files
     * @return array processed css_files
     */
    public static function cccCss($css_files)
    {
    }

    public static function minifyCSS($css_content, $fileuri = false, &$import_url = array())
    {
    }

    /**
     * Combine Compress and Cache (ccc) JS calls
     *
     * @param array js_files
     * @return array processed js_files
     */
    public static function cccJS($js_files)
    {
    }
}
