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

class Validate
{

    public static function isIp2Long($ip)
    {
    }

    public static function isAnything()
    {
    }

    /**
     * Check for e-mail validity
     *
     * @param string $email e-mail address to validate
     * @return boolean Validity is ok or not
     */
    public static function isEmail($email)
    {
    }

    /**
     * Check for module URL validity
     *
     * @param string $url module URL to validate
     * @param array $errors Reference array for catching errors
     * @return boolean Validity is ok or not
     */
    public static function isModuleUrl($url, &$errors)
    {
    }

    /**
     * Check for MD5 string validity
     *
     * @param string $md5 MD5 string to validate
     * @return boolean Validity is ok or not
     */
    public static function isMd5($md5)
    {
    }

    /**
     * Check for SHA1 string validity
     *
     * @param string $sha1 SHA1 string to validate
     * @return boolean Validity is ok or not
     */
    public static function isSha1($sha1)
    {
    }

    public static function isUnsignedFloat($float)
    {
    }

    /**
     * Check for a float number validity
     *
     * @param float $float Float number to validate
     * @return boolean Validity is ok or not
     */
    public static function isOptFloat($float)
    {
    }

    /**
     * Check for a float number validity
     *
     * @param float $float Float number to validate
     * @return boolean Validity is ok or not
     */
    public static function isFloat($float)
    {
    }

    /**
     * Check for a carrier name validity
     *
     * @param string $name Carrier name to validate
     * @return boolean Validity is ok or not
     */
    public static function isCarrierName($name)
    {
    }

    /**
     * Check for an image size validity
     *
     * @param string $size Image size to validate
     * @return boolean Validity is ok or not
     */
    public static function isImageSize($size)
    {
    }

    /**
     * Check for name validity
     *
     * @param string $name Name to validate
     * @return boolean Validity is ok or not
     */
    public static function isName($name)
    {
    }

    /**
     * Check for hook name validity
     *
     * @param string $hook Hook name to validate
     * @return boolean Validity is ok or not
     */
    public static function isHookName($hook)
    {
    }

    /**
     * Check for sender name validity
     *
     * @param string $mail_name Sender name to validate
     * @return boolean Validity is ok or not
     */
    public static function isMailName($mail_name)
    {
    }

    /**
     * Check for e-mail subject validity
     *
     * @param string $mail_subject e-mail subject to validate
     * @return boolean Validity is ok or not
     */
    public static function isMailSubject($mail_subject)
    {
    }

    /**
     * Check for module name validity
     *
     * @param string $module_name Module name to validate
     * @return boolean Validity is ok or not
     */
    public static function isModuleName($module_name)
    {
    }

    /**
     * Check for template name validity
     *
     * @param string $tpl_name Template name to validate
     * @return boolean Validity is ok or not
     */
    public static function isTplName($tpl_name)
    {
    }

    /**
     * Check for image type name validity
     *
     * @param string $type Image type name to validate
     * @return boolean Validity is ok or not
     */
    public static function isImageTypeName($type)
    {
    }

    /**
     * Check for price validity
     *
     * @param string $price Price to validate
     * @return boolean Validity is ok or not
     */
    public static function isPrice($price)
    {
    }

    /**
     * Check for price validity (including negative price)
     *
     * @param string $price Price to validate
     * @return boolean Validity is ok or not
     */
    public static function isNegativePrice($price)
    {
    }

    /**
     * Check for language code (ISO) validity
     *
     * @param string $iso_code Language code (ISO) to validate
     * @return boolean Validity is ok or not
     */
    public static function isLanguageIsoCode($iso_code)
    {
    }

    public static function isLanguageCode($s)
    {
    }

    public static function isStateIsoCode($iso_code)
    {
    }

    public static function isNumericIsoCode($iso_code)
    {
    }

    /**
     * Check for voucher name validity
     *
     * @param string $voucher voucher to validate
     * @return boolean Validity is ok or not
     */
    public static function isDiscountName($voucher)
    {
    }

    /**
     * Check for product or category name validity
     *
     * @param string $name Product or category name to validate
     * @return boolean Validity is ok or not
     */
    public static function isCatalogName($name)
    {
    }

    /**
     * Check for a message validity
     *
     * @param string $message Message to validate
     * @return boolean Validity is ok or not
     */
    public static function isMessage($message)
    {
    }

    /**
     * Check for a country name validity
     *
     * @param string $name Country name to validate
     * @return boolean Validity is ok or not
     */
    public static function isCountryName($name)
    {
    }

    /**
     * Check for a link (url-rewriting only) validity
     *
     * @param string $link Link to validate
     * @return boolean Validity is ok or not
     */
    public static function isLinkRewrite($link)
    {
    }

    /**
     * Check for a route pattern validity
     *
     * @param string $pattern to validate
     * @return boolean Validity is ok or not
     */
    public static function isRoutePattern($pattern)
    {
    }

    /**
     * Check for a postal address validity
     *
     * @param string $address Address to validate
     * @return boolean Validity is ok or not
     */
    public static function isAddress($address)
    {
    }

    /**
     * Check for city name validity
     *
     * @param string $city City name to validate
     * @return boolean Validity is ok or not
     */
    public static function isCityName($city)
    {
    }

    /**
     * Check for search query validity
     *
     * @param string $search Query to validate
     * @return boolean Validity is ok or not
     */
    public static function isValidSearch($search)
    {
    }

    /**
     * Check for HTML field validity (no XSS please !)
     *
     * @param string $html HTML field to validate
     * @return boolean Validity is ok or not
     */
    public static function isCleanHtml($html)
    {
    }

    /**
     * Check for product reference validity
     *
     * @param string $reference Product reference to validate
     * @return boolean Validity is ok or not
     */
    public static function isReference($reference)
    {
    }

    public static function isPasswdAdmin($passwd)
    {
    }

    /**
     * Check for password validity
     *
     * @param string $passwd Password to validate
     * @param int $size
     * @return boolean Validity is ok or not
     */
    public static function isPasswd($passwd, $size = 5)
    {
    }

    /**
     * Check for configuration key validity
     *
     * @param string $config_name Configuration key to validate
     * @return boolean Validity is ok or not
     */
    public static function isConfigName($config_name)
    {
    }

    /**
     * Check date formats like http://php.net/manual/en/function.date.php
     *
     * @param string $date_format date format to check
     * @return boolean Validity is ok or not
     */
    public static function isPhpDateFormat($date_format)
    {
    }

    /**
     * Check for date format
     *
     * @param string $date Date to validate
     * @return boolean Validity is ok or not
     */
    public static function isDateFormat($date)
    {
    }

    /**
     * Check for date validity
     *
     * @param string $date Date to validate
     * @return boolean Validity is ok or not
     */
    public static function isDate($date)
    {
    }

    /**
     * Check for birthDate validity
     *
     * @param string $date birthdate to validate
     * @return boolean Validity is ok or not
     */
    public static function isBirthDate($date)
    {
    }

    /**
     * Check for boolean validity
     *
     * @param boolean $bool Boolean to validate
     * @return boolean Validity is ok or not
     */
    public static function isBool($bool)
    {
    }

    /**
     * Check for phone number validity
     *
     * @param string $number Phone number to validate
     * @return boolean Validity is ok or not
     */
    public static function isPhoneNumber($number)
    {
    }

    /**
     * Check for barcode validity (EAN-13)
     *
     * @param string $ean13 Barcode to validate
     * @return boolean Validity is ok or not
     */
    public static function isEan13($ean13)
    {
    }

    /**
     * Check for barcode validity (UPC)
     *
     * @param string $upc Barcode to validate
     * @return boolean Validity is ok or not
     */
    public static function isUpc($upc)
    {
    }

    /**
     * Check for postal code validity
     *
     * @param string $postcode Postal code to validate
     * @return boolean Validity is ok or not
     */
    public static function isPostCode($postcode)
    {
    }

    /**
     * Check for zip code format validity
     *
     * @param string $zip_code zip code format to validate
     * @return boolean Validity is ok or not
     */
    public static function isZipCodeFormat($zip_code)
    {
    }

    /**
     * Check for table or identifier validity
     * Mostly used in database for ordering : ASC / DESC
     *
     * @param string $way Keyword to validate
     * @return boolean Validity is ok or not
     */
    public static function isOrderWay($way)
    {
    }

    /**
     * Check for table or identifier validity
     * Mostly used in database for ordering : ORDER BY field
     *
     * @param string $order Field to validate
     * @return boolean Validity is ok or not
     */
    public static function isOrderBy($order)
    {
    }

    /**
     * Check for table or identifier validity
     * Mostly used in database for table names and id_table
     *
     * @param string $table Table/identifier to validate
     * @return boolean Validity is ok or not
     */
    public static function isTableOrIdentifier($table)
    {
    }

    /**
     * @deprecated 1.5.0 You should not use list like this, please use an array when you build a SQL query
     */
    public static function isValuesList()
    {
    }

    /**
     * Check for tags list validity
     *
     * @param string $list List to validate
     * @return boolean Validity is ok or not
     */
    public static function isTagsList($list)
    {
    }

    /**
     * Check for product visibility
     *
     * @param string $s visibility to check
     * @return boolean Validity is ok or not
     */
    public static function isProductVisibility($s)
    {
    }

    /**
     * Check for an integer validity
     *
     * @param integer $value Integer to validate
     * @return boolean Validity is ok or not
     */
    public static function isInt($value)
    {
    }

    /**
     * Check for an percentage validity (between 0 and 100)
     *
     * @param float $value Float to validate
     * @return boolean Validity is ok or not
     */
    public static function isPercentage($value)
    {
    }

    public static function isNullOrUnsignedId($id)
    {
    }

    /**
     * Check for an integer validity (unsigned)
     * Mostly used in database for auto-increment
     *
     * @param integer $id Integer to validate
     * @return boolean Validity is ok or not
     */
    public static function isUnsignedId($id)
    {
    }

    /**
     * Check for an integer validity (unsigned)
     *
     * @param integer $value Integer to validate
     * @return boolean Validity is ok or not
     */
    public static function isUnsignedInt($value)
    {
    }

    /**
     * Check object validity
     *
     * @param object $object Object to validate
     * @return boolean Validity is ok or not
     */
    public static function isLoadedObject($object)
    {
    }

    /**
     * Check object validity
     *
     * @param integer $object Object to validate
     * @return boolean Validity is ok or not
     */
    public static function isColor($color)
    {
    }

    /**
     * Check tracking number validity (disallowed empty string)
     *
     * @param string $tracking_number Tracking number to validate
     * @return boolean Validity is ok or not
     */
    public static function isTrackingNumber($tracking_number)
    {
    }

    /**
     * Check url validity (allowed empty string)
     *
     * @param string $url Url to validate
     * @return boolean Validity is ok or not
     */
    public static function isUrlOrEmpty($url)
    {
    }

    /**
     * Check url validity (disallowed empty string)
     *
     * @param string $url Url to validate
     * @return boolean Validity is ok or not
     */
    public static function isUrl($url)
    {
    }

    /**
     * Check if URL is absolute
     *
     * @param string $url URL to validate
     * @return boolean Validity is ok or not
     */
    public static function isAbsoluteUrl($url)
    {
    }

    public static function isMySQLEngine($engine)
    {
    }

    public static function isUnixName($data)
    {
    }

    public static function isTablePrefix($data)
    {
    }

    /**
     * Check for standard name file validity
     *
     * @param string $name Name to validate
     * @return boolean Validity is ok or not
     */
    public static function isFileName($name)
    {
    }

    /**
     * Check for standard name directory validity
     *
     * @param string $dir Directory to validate
     * @return boolean Validity is ok or not
     */
    public static function isDirName($dir)
    {
    }

    /**
     * Check for admin panel tab name validity
     *
     * @param string $name Name to validate
     * @return boolean Validity is ok or not
     */
    public static function isTabName($name)
    {
    }

    public static function isWeightUnit($unit)
    {
    }

    /**
     * Check for standard name validity
     *
     * @param string $name Name to validate
     * @return boolean Validity is ok or not
     */
    public static function isGenericName($name)
    {
    }

    public static function isDistanceUnit($unit)
    {
    }

    public static function isSubDomainName($domain)
    {
    }

    public static function isVoucherDescription($text)
    {
    }

    /**
     * Check if the value is a sort direction value (DESC/ASC)
     *
     * @param char $value
     * @return boolean Validity is ok or not
     */
    public static function isSortDirection($value)
    {
    }

    /**
     * Customization fields' label validity
     *
     * @param string $label
     * @return boolean Validity is ok or not
     */
    public static function isLabel($label)
    {
    }

    /**
     * Price display method validity
     *
     * @param integer $data Data to validate
     * @return boolean Validity is ok or not
     */
    public static function isPriceDisplayMethod($data)
    {
    }

    /**
     * @param string $dni to validate
     * @return bool
     */
    public static function isDniLite($dni)
    {
    }

    /**
     * Check if $data is a PrestaShop cookie object
     *
     * @param mixed $data to validate
     * @return bool
     */
    public static function isCookie($data)
    {
    }

    /**
     * Price display method validity
     *
     * @param string $data Data to validate
     * @return boolean Validity is ok or not
     */
    public static function isString($data)
    {
    }

    /**
     * Check if the data is a reduction type (amout or percentage)
     *
     * @param string $data Data to validate
     * @return boolean Validity is ok or not
     */
    public static function isReductionType($data)
    {
    }

    /**
     * @deprecated 1.5.0 Use Validate::isBoolId()
     */
    public static function isBool_Id($ids)
    {
    }

    /**
     * Check for bool_id
     *
     * @param string $ids
     * @return boolean Validity is ok or not
     */
    public static function isBoolId($ids)
    {
    }

    /**
     * Check the localization pack part selected
     *
     * @param string $data Localization pack to check
     * @return boolean Validity is ok or not
     */
    public static function isLocalizationPackSelection($data)
    {
    }

    /**
     * Check for PHP serialized data
     *
     * @param string $data Serialized data to validate
     * @return boolean Validity is ok or not
     */
    public static function isSerializedArray($data)
    {
    }

    /**
     * Check for Latitude/Longitude
     *
     * @param string $data Coordinate to validate
     * @return boolean Validity is ok or not
     */
    public static function isCoordinate($data)
    {
    }

    /**
     * Check for Language Iso Code
     *
     * @param string $iso_code
     * @return boolean Validity is ok or not
     */
    public static function isLangIsoCode($iso_code)
    {
    }

    /**
     * Check for Language File Name
     *
     * @param string $file_name
     * @return boolean Validity is ok or not
     */
    public static function isLanguageFileName($file_name)
    {
    }

    /**
     * @param array $ids
     * @return boolean return true if the array contain only unsigned int value
     */
    public static function isArrayWithIds($ids)
    {
    }

    /**
     * @param array $zones
     * @return boolean return true if array contain all value required for an image map zone
     */
    public static function isSceneZones($zones)
    {
    }

    /**
     * @param array $stock_management
     * @return boolean return true if is a valide stock management
     */
    public static function isStockManagement($stock_management)
    {
    }

    /**
     * Validate SIRET Code
     *
     * @static
     * @param $siret SIRET Code
     * @return boolean Return true if is valid
     */
    public static function isSiret($siret)
    {
    }

    /**
     * Validate APE Code
     *
     * @static
     * @param $ape APE Code
     * @return boolean Return true if is valid
     */
    public static function isApe($ape)
    {
    }

    public static function isControllerName($name)
    {
    }
}

