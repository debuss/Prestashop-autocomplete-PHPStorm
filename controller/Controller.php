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
abstract class Controller
{

    /**
     * @var array list of css files
     */
    public $css_files = array();
    /**
     * @var array list of javascript files
     */
    public $js_files = array();
    /**
     * @var bool If ajax parameter is detected in request, set this flag to true
     */
    public $ajax = false;
    public $controller_type;
    /**
     * @var Context
     */
    protected $context;
    /**
     * @var bool check if header will be displayed
     */
    protected $display_header;
    /**
     * @var string template name for page content
     */
    protected $template;
    /**
     * @var string check if footer will be displayed
     */
    protected $display_footer;
    /**
     * @var string check if only content will be displayed
     */
    protected $content_only = false;
    protected $json = false;
    protected $status = '';
    protected $redirect_after = null;

    public function __construct()
    {
    }

    /**
     * Get an instance of a controller
     *
     * @param string $class_name
     * @param bool $auth
     * @param bool $ssl
     */
    public static function getController($class_name, $auth = false, $ssl = false)
    {
    }

    /**
     * Start controller process (this method shouldn't be overriden !)
     */
    public function run()
    {
    }

    /**
     * Initialize the page
     */
    public function init()
    {
    }

    /**
     * check that the controller is available for the current user/visitor
     */
    abstract public function checkAccess();

    /**
     * Set default media list for controller
     */
    abstract public function setMedia();

    /**
     * Do the page treatment : post process, ajax process, etc.
     */
    abstract public function postProcess();

    /**
     * Assign smarty variables for the page header
     */
    abstract public function initHeader();

    /**
     * check that the current user/visitor has valid view permissions
     */
    abstract public function viewAccess();

    /**
     * Assign smarty variables for the page main content
     */
    abstract public function initContent();

    /**
     * Assign smarty variables for the page footer
     */
    abstract public function initFooter();

    /**
     * Display page view
     */
    abstract public function display();

    /**
     * Assign smarty variables when access is forbidden
     */
    abstract public function initCursedPage();

    public function displayHeader($display = true)
    {
    }

    public function displayFooter($display = true)
    {
    }

    public function setTemplate($template)
    {
    }

    /**
     * Add a new javascript file in page header.
     *
     * @param mixed $js_uri
     * @return void
     */
    public function addJquery($version = null, $folder = null, $minifier = true)
    {
    }

    /**
     * Add a new javascript file in page header.
     *
     * @param mixed $js_uri
     * @return void
     */
    public function addJS($js_uri)
    {
    }

    /**
     * Add a new javascript file in page header.
     *
     * @param mixed $js_uri
     * @return void
     */
    public function addJqueryUI($component, $theme = 'base', $check_dependencies = true)
    {
    }

    /**
     * Add a new stylesheet in page header.
     *
     * @param mixed $css_uri Path to css file, or list of css files like this : array(array(uri => media_type), ...)
     * @param string $css_media_type
     * @return true
     */
    public function addCSS($css_uri, $css_media_type = 'all')
    {
    }

    /**
     * Add a new javascript file in page header.
     *
     * @param mixed $js_uri
     * @return void
     */
    public function addJqueryPlugin($name, $folder = null)
    {
    }

    /**
     * @since 1.5
     * @return bool return true if Controller is called from XmlHttpRequest
     */
    public function isXmlHttpRequest()
    {
    }

    /**
     * Redirect after process if no error
     */
    abstract protected function redirect();

    protected function smartyOutputContent($content)
    {
    }
}
