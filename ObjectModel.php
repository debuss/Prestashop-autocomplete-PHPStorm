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

abstract class ObjectModel
{

    /**
     * List of field types
     */
    const TYPE_INT = 1;
    const TYPE_BOOL = 2;
    const TYPE_STRING = 3;
    const TYPE_FLOAT = 4;
    const TYPE_DATE = 5;
    const TYPE_HTML = 6;
    const TYPE_NOTHING = 7;
    /**
     * List of data to format
     */
    const FORMAT_COMMON = 1;
    const FORMAT_LANG = 2;
    const FORMAT_SHOP = 3;
    /**
     * List of association types
     */
    const HAS_ONE = 1;
    const HAS_MANY = 2;
    /**
     * @var array Contain object definition
     * @since 1.5.0
     */
    public static $definition = array();
    protected static $fieldsRequiredDatabase = null;
    /**
     * @var Db An instance of the db in order to avoid calling Db::getInstance() thousands of time
     */
    protected static $db = false;
    /** @var integer Object id */
    public $id;
    public $id_shop_list = null;
    /** @var integer lang id */
    protected $id_lang = null;
    protected $id_shop = null;
    protected $get_shop_from_context = true;
    /**
     * @deprecated 1.5.0 This property shouldn't be overloaded anymore in class, use static $definition['table'] property instead
     */
    protected $table;
    /**
     * @deprecated 1.5.0 This property shouldn't be overloaded anymore in class, use static $definition['primary'] property instead
     */
    protected $identifier;
    /**
     * @deprecated 1.5.0 This property shouldn't be overloaded anymore in class, use static $definition['fields'] property instead
     */
    protected $fieldsRequired = array();
    /**
     * @deprecated 1.5.0 This property shouldn't be overloaded anymore in class, use static $definition['fields'] property instead
     */
    protected $fieldsSize = array();
    /**
     * @deprecated 1.5.0 This property shouldn't be overloaded anymore in class, use static $definition['fields'] property instead
     */
    protected $fieldsValidate = array();
    /**
     * @deprecated 1.5.0 This property shouldn't be overloaded anymore in class, use static $definition['fields'] property instead
     */
    protected $fieldsRequiredLang = array();
    /**
     * @deprecated 1.5.0 This property shouldn't be overloaded anymore in class, use static $definition['fields'] property instead
     */
    protected $fieldsSizeLang = array();
    /**
     * @deprecated 1.5.0 This property shouldn't be overloaded anymore in class, use static $definition['fields'] property instead
     */
    protected $fieldsValidateLang = array();
    /**
     * @deprecated 1.5.0
     */
    protected $tables = array();
    /** @var array tables */
    protected $webserviceParameters = array();
    /** @var  string path to image directory. Used for image deletion. */
    protected $image_dir = null;
    /** @var string file type of image files. Used for image deletion. */
    protected $image_format = 'jpg';
    /**
     * @var array Contain current object definition
     */
    protected $def;
    /**
     * @var array List of specific fields to update (all fields if null)
     */
    protected $update_fields = null;

    /**
     * Build object
     *
     * @param int $id Existing object id in order to load object (optional)
     * @param int $id_lang Required if object is multilingual (optional)
     * @param int $id_shop ID shop for objects with multishop on langs
     */
    public function __construct($id = null, $id_lang = null, $id_shop = null)
    {
    }

    /**
     * Get object definition
     *
     * @param string $class Name of object
     * @param string $field Name of field if we want the definition of one field only
     * @return array
     */
    public static function getDefinition($class, $field = null)
    {
    }

    /**
     * Returns object validation rules (fields validity)
     *
     * @param string $class Child class name for static use (optional)
     * @return array Validation rules (fields validity)
     */
    public static function getValidationRules($class = __CLASS__)
    {
    }

    /**
     * Update a table and splits the common datas and the shop datas
     *
     * @since 1.5.0
     * @param string $classname
     * @param array $data
     * @param string $where
     * @param string $specific_where Only executed for common table
     * @return bool
     */
    public static function updateMultishopTable($classname, $data, $where, $specific_where = '')
    {
    }

    /**
     * Specify if an ObjectModel is already in database
     *
     * @param int $id_entity
     * @param string $table
     * @return boolean
     */
    public static function existsInDatabase($id_entity, $table)
    {
    }

    /**
     * This method is allow to know if a entity is currently used
     *
     * @since 1.5.0.1
     * @param string $table name of table linked to entity
     * @param bool $has_active_column true if the table has an active column
     * @return bool
     */
    public static function isCurrentlyUsed($table = null, $has_active_column = false)
    {
    }

    /**
     * Fill (hydrate) a list of objects in order to get a collection of these objects
     *
     * @since 1.5.0
     * @param string $class Class of objects to hydrate
     * @param array $datas List of data (multi-dimensional array)
     * @param int $id_lang
     * @return array
     */
    public static function hydrateCollection($class, array $datas, $id_lang = null)
    {
    }

    /**
     * Format a data
     *
     * @param mixed $value
     * @param int $type
     */
    public static function formatValue($value, $type, $with_quotes = false)
    {
    }

    public static function displayFieldName($field, $class = __CLASS__, $htmlentities = true, Context $context = null)
    {
    }

    public function isMultishop()
    {
    }

    public function isLangMultishop()
    {
    }

    public function getFieldsRequiredDatabase($all = false)
    {
    }

    /**
     * Save current object to database (add or update)
     *
     * @param bool $null_values
     * @param bool $autodate
     * @return boolean Insertion result
     */
    public function save($null_values = false, $autodate = true)
    {
    }

    /**
     * Update current object to database
     *
     * @param bool $null_values
     * @return boolean Update result
     */
    public function update($null_values = false)
    {
    }

    public function clearCache($all = false)
    {
    }

    /**
     * Prepare fields for ObjectModel class (add, update)
     * All fields are verified (pSQL, intval...)
     *
     * @return array All object fields
     */
    public function getFields()
    {
    }

    /**
     * Check for fields validity before database interaction
     *
     * @param bool $die
     * @param bool $error_return
     * @return bool|string
     */
    public function validateFields($die = true, $error_return = false)
    {
    }

    /**
     * Validate a single field
     *
     * @since 1.5.0
     * @param string $field Field name
     * @param mixed $value Field value
     * @param int $id_lang
     * @return bool|string
     */
    public function validateField($field, $value, $id_lang = null)
    {
    }

    /**
     * Prepare fields for multishop
     * Fields are not validated here, we considere they are already validated in getFields() method, this
     * not the best solution but this is the only one possible for retro compatibility.
     *
     * @since 1.5.0
     * @return array All object fields
     */
    public function getFieldsShop()
    {
    }

    /**
     * Prepare multilang fields
     *
     * @since 1.5.0
     * @return array
     */
    public function getFieldsLang()
    {
    }

    /**
     * Check for multilingual fields validity before database interaction
     *
     * @param bool $die
     * @param bool $error_return
     * @return bool|string
     */
    public function validateFieldsLang($die = true, $error_return = false)
    {
    }

    /**
     * Add current object to database
     *
     * @param bool $null_values
     * @param bool $autodate
     * @return boolean Insertion result
     */
    public function add($autodate = true, $null_values = false)
    {
    }

    /**
     * Duplicate current object to database
     *
     * @return new object
     */
    public function duplicateObject()
    {
    }

    /**
     * Delete several objects from database
     *
     * @param array $selection
     * @return bool Deletion result
     */
    public function deleteSelection($selection)
    {
    }

    /**
     * Delete current object from database
     *
     * @return boolean Deletion result
     */
    public function delete()
    {
    }

    /**
     * Check if there is more than one entries in associated shop table for current entity
     *
     * @since 1.5.0
     * @return bool
     */
    public function hasMultishopEntries()
    {
    }

    /**
     * Toggle object status in database
     *
     * @return boolean Update result
     */
    public function toggleStatus()
    {
    }

    /**
     * TODO: refactor rename all calls to this to validateController
     *
     * @deprecated since 1.5 use validateController instead
     */
    public function validateControler($htmlentities = true)
    {
    }

    public function validateController($htmlentities = true)
    {
    }

    public function getWebserviceParameters($ws_params_attribute_name = null)
    {
    }

    public function getWebserviceObjectList($sql_join, $sql_filter, $sql_sort, $sql_limit)
    {
    }

    public function validateFieldsRequiredDatabase($htmlentities = true)
    {
    }

    public function addFieldsRequiredDatabase($fields)
    {
    }

    /**
     * Get the list of associated id_shop
     *
     * @since 1.5.0
     * @return array
     */
    public function getAssociatedShops()
    {
    }

    /**
     * @since 1.5.0
     */
    public function duplicateShops($id)
    {
    }

    /**
     * This function associate an item to its context
     *
     * @param int|array $id_shops
     * @return boolean
     */
    public function associateTo($id_shops)
    {
    }

    /**
     * Check if current object is associated to a shop
     *
     * @since 1.5.0
     * @param int $id_shop
     * @return bool
     */
    public function isAssociatedToShop($id_shop = null)
    {
    }

    /**
     * Delete images associated with the object
     *
     * @return bool success
     */
    public function deleteImage($force_delete = false)
    {
    }

    /**
     * Fill an object with given data. Data must be an array with this syntax: array(objProperty => value, objProperty2 => value, etc.)
     *
     * @since 1.5.0
     * @param array $data
     * @param int $id_lang
     */
    public function hydrate(array $data, $id_lang = null)
    {
    }

    /**
     * Return the field value for the specified language if the field is multilang, else the field value.
     *
     * @param $field_name
     * @param null $id_lang
     * @return mixed
     * @throws PrestaShopException
     * @since 1.5
     */
    public function getFieldByLang($field_name, $id_lang = null)
    {
    }

    /**
     * Set a list of specific fields to update
     * array(field1 => true, field2 => false, langfield1 => array(1 => true, 2 => false))
     *
     * @since 1.5.0
     * @param array $fields
     */
    public function setFieldsToUpdate(array $fields)
    {
    }

    /**
     * Retrocompatibility for classes without $definition static
     * Remove this in 1.6 !
     *
     * @since 1.5.0
     */
    protected function setDefinitionRetrocompatibility()
    {
    }

    /**
     * @since 1.5.0
     * @param int $type FORMAT_COMMON or FORMAT_LANG or FORMAT_SHOP
     * @param int $id_lang If this parameter is given, only take lang fields
     * @return array
     */
    protected function formatFields($type, $id_lang = null)
    {
    }

    /**
     * @deprecated 1.5.0 (use getFieldsLang())
     */
    protected function getTranslationsFields($fields_array)
    {
    }

    /**
     * @deprecated 1.5.0
     */
    protected function makeTranslationFields(&$fields, &$fields_array, $id_language)
    {
    }
}