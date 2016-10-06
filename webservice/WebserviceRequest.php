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
*  @author Prestashop SA <contact@prestashop.com>
*  @copyright  2007-2010 Prestashop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class WebserviceRequestCore
{

    /**
     * Save the class name for override used in getInstance()
     *
     * @var ws_current_classname
     */
    public static $ws_current_classname;
    public static $shopIDs;
    /**
     * Object instance for singleton
     *
     * @var WebserviceRequest
     */
    protected static $_instance;
    /**
     * Errors triggered at execution
     *
     * @var array
     */
    public $errors = array();
    /**
     * Base PrestaShop webservice URL
     *
     * @var string
     */
    public $wsUrl;
    /**
     * HTTP Method to support
     *
     * @var string
     */
    public $method;
    /**
     * The segment of the URL
     *
     * @var array
     */
    public $urlSegment = array();
    /**
     * The segment list of the URL after the "api" segment
     *
     * @var array
     */
    public $urlFragments = array();
    /**
     * The list of each resources manageable via web service
     *
     * @var array
     */
    public $resourceList;
    /**
     * The configuration parameters of the current resource
     *
     * @var array
     */
    public $resourceConfiguration;
    /**
     * The permissions for the current key
     *
     * @var array
     */
    public $keyPermissions;
    /**
     * The list of objects to display
     *
     * @var array
     */
    public $objects;
    /**
     * The schema to display.
     * If null, no schema have to be displayed and normal management has to be performed
     *
     * @var string
     */
    public $schemaToDisplay;
    /**
     * The fields to display. These fields will be displayed when retrieving objects
     *
     * @var string
     */
    public $fieldsToDisplay = 'minimum';
    /**
     * This is used to have a deeper tree diagram.
     *
     * @var int
     */
    public $depth = 0;
    protected $_available_languages = null;
    /**
     * Set if return should display content or not
     *
     * @var boolean
     */
    protected $_outputEnabled = true;
    /**
     * Set if the management is specific or if it is classic (entity management)
     *
     * @var boolean
     */
    protected $objectSpecificManagement = false;
    /**
     * PrestaShop Webservice Documentation URL
     *
     * @var string
     */
    protected $_docUrl = 'http://doc.prestashop.com/display/PS15/Using+the+PrestaShop+Web+Service';
    /**
     * Set if the authentication key was checked
     *
     * @var boolean
     */
    protected $_authenticated = false;
    /**
     * The time in microseconds of the start of the execution of the web service request
     *
     * @var int
     */
    protected $_startTime = 0;
    /**
     * The XML string to display if web service call succeed
     *
     * @var string
     */
    protected $specificOutput = '';
    /**
     * The current object to support, it extends the PrestaShop ObjectModel
     *
     * @var ObjectModel
     */
    protected $_object;
    /**
     * If we are in PUT or POST case, we use this attribute to store the xml string value during process
     *
     * @var string
     */
    protected $_inputXml;
    /**
     * Key used for authentication
     *
     * @var string
     */
    protected $_key;
    /**
     * Name of the output format
     *
     * @var string
     */
    protected $outputFormat = 'xml';
    /**
     * The object to build the output.
     *
     * @var WebserviceOutputBuilder
     */
    protected $objOutput;

    /**
     * Get WebserviceRequest object instance (Singleton)
     *
     * @return object WebserviceRequest instance
     */
    public static function getInstance()
    {
    }

    public static function getResources()
    {
    }

    public function getOutputEnabled()
    {
    }

    public function setOutputEnabled($bool)
    {
    }

    /**
     * This method is used for calculate the price for products on the output details
     *
     * @param $field
     * @param $entity_object
     * @param $ws_params
     * @return array field parameters.
     */
    public function getPriceForProduct($field, $entity_object, $ws_params)
    {
    }

    // @todo Check how get parameters
    // @todo : set this method out

    /**
     * This method is used for calculate the price for products on a virtual fields
     *
     * @param $entity_object
     * @param array $parameters
     * @return array
     */
    public function specificPriceForProduct($entity_object, $parameters)
    {
    }

    // @todo : set this method out

    public function specificPriceCalculation($parameters)
    {
    }

    /**
     * This method is used for calculate the price for products on a virtual fields
     *
     * @param $entity_object
     * @param array $parameters
     * @return array
     */
    public function specificPriceForCombination($entity_object, $parameters)
    {
    }

    // @todo : set this method out

    /**
     * Start Webservice request
     *    Check webservice activation
     *    Check autentication
     *    Check resource
     *    Check HTTP Method
     *    Execute the action
     *    Display the result
     *
     * @param string $key
     * @param string $method
     * @param string $url
     * @param string $params
     * @param string $inputXml
     * @return array Returns an array of results (headers, content, type of resource...)
     */
    public function fetch($key, $method, $url, $params, $bad_class_name, $inputXml = null)
    {
    }

    /**
     * Set a webservice error
     *
     * @param int $status
     * @param string $label
     * @param int $code
     * @return void
     */
    public function setError($status, $label, $code)
    {
    }

    public function filterLanguage()
    {
    }

    /**
     * Set a webservice error and propose a new value near from the available values
     *
     * @param int $num
     * @param string $label
     * @param array $value
     * @param array $values
     * @param int $code
     * @return void
     */
    public function setErrorDidYouMean($num, $label, $value, $available_values, $code)
    {
    }

    /**
     * Execute GET and HEAD requests
     * Build filter
     * Build fields display
     * Build sort
     * Build limit
     *
     * @return boolean
     */
    public function executeEntityGetAndHead()
    {
    }

    public function getFilteredObjectList()
    {
    }

    public function setFieldsToDisplay()
    {
    }

    public function getFilteredObjectDetails()
    {
    }

    /**
     * Used to replace the default PHP error handler, in order to display PHP errors in a XML format
     *
     * @param string $errno contains the level of the error raised, as an integer
     * @param array $errstr contains the error message, as a string
     * @param array $errfile errfile, which contains the filename that the error was raised in, as a string
     * @param array $errline errline, which contains the line number the error was raised at, as an integer
     * @return boolean Always return true to avoid the default PHP error handler
     */
    public function webserviceErrorHandler($errno, $errstr, $errfile, $errline)
    {
    }

    protected function getOutputObject($type)
    {
    }

    protected function webserviceChecks()
    {
    }

    /**
     * Check webservice activation
     *
     * @return boolean
     */
    protected function isActivated()
    {
    }

    /**
     * Check request authentication
     *
     * @return boolean
     */
    protected function authenticate()
    {
    }

    /**
     * Check if there is one or more error
     *
     * @return boolean
     */
    protected function hasErrors()
    {
    }

    protected function groupShopExists($params)
    {
    }

    protected function shopExists($params)
    {
    }

    protected function shopHasRight($key)
    {
    }

    /**
     * Check resource validity
     *
     * @return boolean
     */
    protected function checkResource()
    {
    }

    /**
     * Return the nearest value picked in the values list
     *
     * @param string $input
     * @param array $words
     * @return string
     */
    protected function getClosest($input, $words)
    {
    }

    /**
     * Check HTTP method
     *
     * @return boolean
     */
    protected function checkHTTPMethod()
    {
    }

    /**
     * get SQL retrieve Filter
     *
     * @param string $sqlId
     * @param string $filterValue
     * @param string $tableAlias = 'main.'
     * @return string
     */
    protected function getSQLRetrieveFilter($sqlId, $filterValue, $tableAlias = 'main.')
    {
    }

    protected function parseDisplayFields($str)
    {
    }

    /**
     * save Entity Object from XML
     *
     * @param int $successReturnCode
     * @return boolean
     */
    protected function saveEntityFromXml($successReturnCode)
    {
    }

    /**
     * Execute PUT method on a PrestaShop entity
     *
     * @return boolean
     */
    protected function executeEntityPut()
    {
    }

    /**
     * Execute DELETE method on a PrestaShop entity
     *
     * @return boolean
     */
    protected function executeEntityDelete()
    {
    }

    /**
     * Thanks to the (WebserviceOutputBuilder) WebserviceKey::objOutput
     * Method build the output depend on the WebserviceRequest::outputFormat
     * and set HTTP header parameters.
     *
     * @return array with displaying informations (used in the dispatcher).
     */
    protected function returnOutput()
    {
    }

    protected function setObjects()
    {
    }
}
