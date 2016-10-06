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
 * @todo : Create typed exception for more finer errors check
 */
class WebserviceOutputBuilderCore
{

    /**
     * @var int constant
     */
    const VIEW_LIST = 1;
    const VIEW_DETAILS = 2;
    public $objectRender;
    protected $wsUrl;
    protected $output;
    protected $wsResource;
    protected $depth = 0;
    protected $schemaToDisplay;
    protected $fieldsToDisplay;
    protected $specificFields = array();
    protected $virtualFields = array();
    protected $statusInt;
    protected $wsParamOverrides;
    // Header properties
    protected $headerParams = array(
        'Access-Time' => 0,
        'X-Powered-By' => 0,
        'PSWS-Version' => 0,
        'Content-Type' => 0,
    );
    /**
     * @var string Status header sent at return
     */
    protected $status;

    public function __construct($ws_url)
    {
    }

    /**
     * getter
     *
     * @return WebserviceOutputInterface
     */
    public function getObjectRender()
    {
    }

    /**
     * Set the render object for set the output format.
     * Set the Content-type for the http header.
     *
     * @param WebserviceOutputInterface $obj_render
     * @throw WebserviceException if the object render is not an instance of WebserviceOutputInterface
     * @return $this
     */
    public function setObjectRender(WebserviceOutputInterface $obj_render)
    {
    }

    /**
     * Need to have the resource list to get the class name for an entity,
     * To build
     *
     * @param array $resources
     * @return $this
     */
    public function setWsResources($resources)
    {
    }

    /**
     * This method return an array with each http header params for a content.
     * This check each required params.
     * If this method is overrided don't forget to check required specific params (for xml etc...)
     *
     * @return array
     */
    public function buildHeader()
    {
    }

    /**
     * @param null|string $key if null get all header params otherwise the params specified by the key
     * @throw WebserviceException if the key is corrupted (use Validate::isCleanHtml method)
     * @throw WebserviceException if the asked key does'nt exists.
     * @return array|string
     */
    public function getHeaderParams($key = null)
    {
    }

    /**
     * @param $key The normalized key expected for an http response
     * @param $value
     * @throw WebserviceException if the key or the value are corrupted
     *          (use Validate::isCleanHtml method)
     * @return $this
     */
    public function setHeaderParams($key, $value)
    {
    }

    /**
     * Delete all Header parameters previously set.
     *
     * @return $this
     */
    public function resetHeaderParams()
    {
    }

    /**
     * @return string the normalized status for http request
     */
    public function getStatus()
    {
    }

    /**
     * Set the return header status
     *
     * @param int $num the Http status code
     * @return void
     */
    public function setStatus($num)
    {
    }

    public function getStatusInt()
    {
    }

    /**
     * Build errors output using an error array
     *
     * @param array $errors
     * @return string output in the format specified by WebserviceOutputBuilder::objectRender
     */
    public function getErrors($errors)
    {
    }

    /**
     * Build the resource list in the output format specified by WebserviceOutputBuilder::objectRender
     *
     * @param $key_permissions
     * @return string
     */
    public function getResourcesList($key_permissions)
    {
    }

    public function registerOverrideWSParameters($wsrObject, $method)
    {
    }

    /**
     * Method is used for each content type
     * Different content types are :
     *        - list of entities,
     *        - tree diagram of entity details (full or minimum),
     *        - schema (synopsis & blank),
     *
     * @param array $objects each object created by entity asked
     * @see WebserviceOutputBuilder::executeEntityGetAndHead
     * @param null|string $schema_to_display if null display the entities list or entity details.
     * @param string|array $fields_to_display the fields allow for the output
     * @param int $depth depth for the tree diagram output.
     * @param int $type_of_view use the 2 constants WebserviceOutputBuilder::VIEW_LIST WebserviceOutputBuilder::VIEW_DETAILS
     * @return string in the output format specified by WebserviceOutputBuilder::objectRender
     */
    public function getContent($objects, $schema_to_display = null, $fields_to_display = 'minimum', $depth = 0, $type_of_view = self::VIEW_LIST, $override = true)
    {
    }

    public function setIndent($depth)
    {
    }

    /**
     * Create the tree diagram with no details
     *
     * @param $object create by the entity
     * @param $depth the depth for the tree diagram
     * @return string
     */
    public function renderEntityMinimum($object, $depth)
    {
    }

    /**
     * Build the entity detail.
     *
     * @param ObjectModel $object create by the entity
     * @param int $depth the depth for the tree diagram
     * @return string
     */
    public function renderEntity($object, $depth)
    {
    }

    public function addVirtualFields($entity_name, $entity_object)
    {
    }

    public function getVirtualFields()
    {
    }

    public function getSynopsisDetails($field)
    {
    }

    /**
     * @param string|object $object
     * @param string $method
     * @return $this
     */
    public function setSpecificField($object, $method, $field_name, $entity_name)
    {
    }

    public function getSpecificField()
    {
    }

    public function setVirtualField($object, $method, $entity_name, $parameters)
    {
    }

    public function setFieldsToDisplay($fields)
    {
    }

    /**
     * Build a field and use recursivity depend on the depth parameter.
     *
     * @param ObjectModel $object create by the entity
     * @param array $ws_params webserviceParams from the entity
     * @param string $field_name
     * @param array $field
     * @param int $depth
     * @return string
     */
    protected function renderField($object, $ws_params, $field_name, $field, $depth)
    {
    }

    protected function overrideSpecificField($entity_name, $field_name, $field, $entity_object, $ws_params)
    {
    }

    /**
     * @param $object
     * @param $depth
     * @param $associations
     * @param $ws_params
     * @return string
     */
    protected function renderAssociations($object, $depth, $associations, $ws_params)
    {
    }

    protected function renderFlatAssociation($object, $depth, $assoc_name, $resource_name, $fields_assoc, $object_assoc, $parent_details)
    {
    }

    /**
     * Build a schema blank or synopsis
     *
     * @param $object create by the entity
     * @param $ws_params webserviceParams from the entity
     * @return string
     */
    protected function renderSchema($object, $ws_params)
    {
    }

    protected function validateObjectAndMethod($object, $method)
    {
    }
}