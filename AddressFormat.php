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

class AddressFormat extends ObjectModel
{

    const _CLEANING_REGEX_ = '#([^\w:_]+)#i';
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'address_format',
        'primary' => 'id_country',
        'fields' => array(
            'format' => array('type' => self::TYPE_HTML, 'validate' => 'isGenericName', 'required' => true),
            'id_country' => array('type' => self::TYPE_INT),
        ),
    );
    public static $requireFormFieldsList = array(
        'firstname',
        'name',
        'address1',
        'city',
        'postcode',
        'Country:name',
        'State:name');
    public static $forbiddenPropertyList = array(
        'deleted',
        'date_add',
        'alias',
        'secure_key',
        'note',
        'newsletter',
        'ip_registration_newsletter',
        'newsletter_date_add',
        'optin',
        'passwd',
        'last_passwd_gen',
        'active',
        'is_guest',
        'date_upd',
        'country',
        'years',
        'days',
        'months',
        'description',
        'meta_description',
        'short_description',
        'link_rewrite',
        'meta_title',
        'meta_keywords',
        'display_tax_label',
        'need_zip_code',
        'contains_states',
        'call_prefixes',
        'show_public_prices',
        'max_payment',
        'max_payment_days',
        'geoloc_postcode',
        'logged',
        'account_number',
        'groupBox',
        'ape',
        'max_payment',
        'outstanding_allow_amount',
        'call_prefix',
        'definition',
    );
    public static $forbiddenClassList = array(
        'Manufacturer',
        'Supplier');
    /** @var integer */
    public $id_address_format;
    /** @var integer */
    public $id_country;
    /** @var string */
    public $format;
    protected $_errorFormatList = array();

    /*
     * Check if the the association of the field name and a class name
     * is valide
     * @className is the name class
     * @fieldName is a property name
     * @isIdField boolean to know if we have to allowed a property name started by 'id_'
     */

    public static function generateAddressSmarty($params, &$smarty)
    {
    }

    /*
     * Verify the existence of a field name and check the availability
     * of an association between a field name and a class (ClassName:fieldName)
     * if the separator is overview
     * @patternName is the composition of the class and field name
     * @fieldsValidate contains the list of available field for the Address class
     */

    /**
     * Generates the full address text
     *
     * @param address is an instanciate object of Address class
     * @param patternrules is a defined rules array to avoid some pattern
     * @param newLine is a string containing the newLine format
     * @param separator is a string containing the separator format
     * @return string
     */
    public static function generateAddress(Address $address, $patternRules = array(), $newLine = "\r\n", $separator = ' ', $style = array())
    {
    }

    /*
     * Check if the set fields are valide
     */

    /**
     * Returns address format fields in array by country
     *
     * @param Integer PS_COUNTRY.id if null using default country
     * @return Array String field address format
     */
    public static function getOrderedAddressFields($id_country = 0, $split_all = false, $cleaned = false)
    {
    }

    /*
     * Returns the error list
     */

    /**
     * Returns address format by country if not defined using default country
     *
     * @param Integer PS_COUNTRY.id
     * @return String field address format
     */
    public static function getAddressCountryFormat($id_country = 0)
    {
    }

    /*
    ** Set the layout key with the liable value
    ** example : (firstname) => 'Presta' will result (Presta)
    **         : (firstname-lastname) => 'Presta' and 'Shop' result '(Presta-Shop)'
    */

    public static function getFormattedAddressFieldsValues($address, $addressFormat, $id_lang = null)
    {
    }

    /*
    ** Cleaned the layout set by the user
    */

    public static function cleanOrderedAddress(&$orderedAddressField)
    {
    }

    /*
     * Returns the formatted fields with associated values
     *
     * @address is an instancied Address object
     * @addressFormat is the format
     * @return double Array
     */

    /**
     * Returns selected fields required for an address in an array according to a selection hash
     *
     * @return array String values
     */
    public static function getValidateFields($className)
    {
    }

    public static function getLiableClass($className)
    {
    }

    public static function getFormattedLayoutData($address)
    {
    }

    protected static function _setOriginalDisplayFormat(&$formattedValueList, $currentLine, $currentKeyList)
    {
    }

    /*
     * Return a list of liable class of the className
     */

    /**
     * Returns address format by country
     *
     * @param Integer PS_COUNTRY.id
     * @return String field address format
     */
    public function getFormat($id_country)
    {
    }

    public function checkFormatFields()
    {
    }

    /*
    ** Return a data array containing ordered, formatedValue and object fields
    */

    public function getErrorList()
    {
    }

    protected function _getFormatDB($id_country)
    {
    }

    protected function _checkLiableAssociation($patternName, $fieldsValidate)
    {
    }

    protected function _checkValidateClassField($className, $fieldName, $isIdField)
    {
    }
}
