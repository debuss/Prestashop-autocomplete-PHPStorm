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
class Dispatcher
{

    /**
     * List of available front controllers types
     */
    const FC_FRONT = 1;
    const FC_ADMIN = 2;
    const FC_MODULE = 3;
    /**
     * @var Dispatcher
     */
    public static $instance = null;
    /**
     * @var array List of default routes
     */
    public $default_routes = array(
        'category_rule' => array(
            'controller' => 'category',
            'rule' => '{id}-{rewrite}',
            'keywords' => array(
                'id' => array('regexp' => '[0-9]+', 'param' => 'id_category'),
                'rewrite' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                'meta_keywords' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                'meta_title' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
            ),
        ),
        'supplier_rule' => array(
            'controller' => 'supplier',
            'rule' => '{id}__{rewrite}',
            'keywords' => array(
                'id' => array('regexp' => '[0-9]+', 'param' => 'id_supplier'),
                'rewrite' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                'meta_keywords' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                'meta_title' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
            ),
        ),
        'manufacturer_rule' => array(
            'controller' => 'manufacturer',
            'rule' => '{id}_{rewrite}',
            'keywords' => array(
                'id' => array('regexp' => '[0-9]+', 'param' => 'id_manufacturer'),
                'rewrite' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                'meta_keywords' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                'meta_title' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
            ),
        ),
        'cms_rule' => array(
            'controller' => 'cms',
            'rule' => 'content/{id}-{rewrite}',
            'keywords' => array(
                'id' => array('regexp' => '[0-9]+', 'param' => 'id_cms'),
                'rewrite' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                'meta_keywords' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                'meta_title' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
            ),
        ),
        'cms_category_rule' => array(
            'controller' => 'cms',
            'rule' => 'content/category/{id}-{rewrite}',
            'keywords' => array(
                'id' => array('regexp' => '[0-9]+', 'param' => 'id_cms_category'),
                'rewrite' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                'meta_keywords' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                'meta_title' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
            ),
        ),
        'module' => array(
            'controller' => null,
            'rule' => 'module/{module}{/:controller}',
            'keywords' => array(
                'module' => array('regexp' => '[_a-zA-Z0-9_-]+', 'param' => 'module'),
                'controller' => array('regexp' => '[_a-zA-Z0-9_-]+', 'param' => 'controller'),
            ),
            'params' => array(
                'fc' => 'module',
            ),
        ),
        'product_rule' => array(
            'controller' => 'product',
            'rule' => '{category:/}{id}-{rewrite}{-:ean13}.html',
            'keywords' => array(
                'id' => array('regexp' => '[0-9]+', 'param' => 'id_product'),
                'rewrite' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                'ean13' => array('regexp' => '[0-9\pL]*'),
                'category' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                'categories' => array('regexp' => '[/_a-zA-Z0-9-\pL]*'),
                'reference' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                'meta_keywords' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                'meta_title' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                'manufacturer' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                'supplier' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                'price' => array('regexp' => '[0-9\.,]*'),
                'tags' => array('regexp' => '[a-zA-Z0-9-\pL]*'),
            ),
        ),
        // Must be after the product and category rules in order to avoid conflict
        'layered_rule' => array(
            'controller' => 'category',
            'rule' => '{id}-{rewrite}{/:selected_filters}',
            'keywords' => array(
                'id' => array('regexp' => '[0-9]+', 'param' => 'id_category'),
                /* Selected filters is used by the module blocklayered */
                'selected_filters' => array('regexp' => '.*', 'param' => 'selected_filters'),
                'rewrite' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                'meta_keywords' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                'meta_title' => array('regexp' => '[_a-zA-Z0-9-\pL]*'),
            ),
        ),
    );
    /**
     * @var bool If true, use routes to build URL (mod rewrite must be activated)
     */
    protected $use_routes = false;
    protected $multilang_activated = false;
    /**
     * @var array List of loaded routes
     */
    protected $routes = array();
    /**
     * @var string Current controller name
     */
    protected $controller;
    /**
     * @var string Current request uri
     */
    protected $request_uri;
    /**
     * @var array Store empty route (a route with an empty rule)
     */
    protected $empty_route;
    /**
     * @var string Set default controller, which will be used if http parameter 'controller' is empty
     */
    protected $default_controller = 'index';
    /**
     * @var string Controller to use if found controller doesn't exist
     */
    protected $controller_not_found = 'pagenotfound';
    /**
     * @var string Front controller to use
     */
    protected $front_controller = self::FC_FRONT;

    /**
     * Need to be instancied from getInstance() method
     */
    protected function __construct()
    {
    }

    /**
     * Get current instance of dispatcher (singleton)
     *
     * @return Dispatcher
     */
    public static function getInstance()
    {
    }

    /**
     * Get list of all available FO controllers
     *
     * @var mixed $dirs
     * @return array
     */
    public static function getControllers($dirs)
    {
    }

    /**
     * Get list of available controllers from the specified dir
     *
     * @param string dir directory to scan (recursively)
     * @return array
     */
    public static function getControllersInDirectory($dir)
    {
    }

    /**
     * @param string $route_id Name of the route (need to be uniq, a second route with same name will override the first)
     * @param string $rule Url rule
     * @param string $controller Controller to call if request uri match the rule
     * @param int $id_lang
     */
    public function addRoute($route_id, $rule, $controller, $id_lang = null, array $keywords = array(), array $params = array())
    {
    }

    /**
     * Find the controller and instantiate it
     */
    public function dispatch()
    {
    }

    /**
     * Retrieve the controller from url or request uri if routes are activated
     *
     * @return string
     */
    public function getController()
    {
    }

    /**
     * Check if a route exists
     *
     * @param string $route_id
     * @param int $id_lang
     * @return bool
     */
    public function hasRoute($route_id, $id_lang = null)
    {
    }

    /**
     * Check if a keyword is written in a route rule
     *
     * @param string $route_id
     * @param int $id_lang
     * @param string $keyword
     * @return bool
     */
    public function hasKeyword($route_id, $id_lang, $keyword)
    {
    }

    /**
     * Check if a route rule contain all required keywords of default route definition
     *
     * @param string $route_id
     * @param string $rule Rule to verify
     * @param array $errors List of missing keywords
     */
    public function validateRoute($route_id, $rule, &$errors = array())
    {
    }

    /**
     * Create an url from
     *
     * @param string $route_id Name the route
     * @param int $id_lang
     * @param array $params
     * @param bool $use_routes If false, don't use to create this url
     * @param string $anchor Optional anchor to add at the end of this url
     */
    public function createUrl($route_id, $id_lang = null, array $params = array(), $force_routes = false, $anchor = '')
    {
    }

    /**
     * Set request uri and iso lang
     */
    protected function setRequestUri()
    {
    }

    /**
     * Load default routes group by languages
     */
    protected function loadRoutes()
    {
    }
}
