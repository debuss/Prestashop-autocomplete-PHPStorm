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

class Language extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'lang',
        'primary' => 'id_lang',
        'fields' => array(
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true, 'size' => 32),
            'iso_code' => array('type' => self::TYPE_STRING, 'validate' => 'isLanguageIsoCode', 'required' => true, 'size' => 2),
            'language_code' => array('type' => self::TYPE_STRING, 'validate' => 'isLanguageCode', 'size' => 5),
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'is_rtl' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'date_format_lite' => array('type' => self::TYPE_STRING, 'validate' => 'isPhpDateFormat', 'required' => true, 'size' => 32),
            'date_format_full' => array('type' => self::TYPE_STRING, 'validate' => 'isPhpDateFormat', 'required' => true, 'size' => 32),
        ),
    );
    /** @var array Languages cache */
    protected static $_checkedLangs;
    protected static $_LANGUAGES;
    protected static $countActiveLanguages;
    protected static $_cache_language_installation = null;
    public $id;
    /** @var string Name */
    public $name;
    /** @var string 2-letter iso code */
    public $iso_code;
    /** @var string 5-letter iso code */
    public $language_code;
    /** @var string date format http://http://php.net/manual/en/function.date.php with the date only */
    public $date_format_lite = 'Y-m-d';
    /** @var string date format http://http://php.net/manual/en/function.date.php with hours and minutes */
    public $date_format_full = 'Y-m-d H:i:s';
    /** @var bool true if this language is right to left language */
    public $is_rtl = false;
    /** @var boolean Status */
    public $active = true;
    protected $webserviceParameters = array(
        'objectNodeName' => 'language',
        'objectsNodeName' => 'languages',
    );
    protected $translationsFilesAndVars = array(
        'fields' => '_FIELDS',
        'errors' => '_ERRORS',
        'admin' => '_LANGADM',
        'pdf' => '_LANGPDF',
        'tabs' => 'tabs',
    );

    public function __construct($id = null, $id_lang = null)
    {
    }

    /**
     * Return available languages
     *
     * @param boolean $active Select only active languages
     * @return array Languages
     */
    public static function getLanguages($active = true, $id_shop = false)
    {
    }

    /**
     * Load all languages in memory for caching
     */
    public static function loadLanguages()
    {
    }

    public static function getLanguage($id_lang)
    {
    }

    public static function getLanguageCodeByIso($iso_code)
    {
    }

    /**
     * Return array (id_lang, iso_code)
     *
     * @param string $iso_code Iso code
     * @return array  Language (id_lang, iso_code)
     */
    public static function getIsoIds($active = true)
    {
    }

    public static function copyLanguageData($from, $to)
    {
    }

    public static function isInstalled($iso_code)
    {
    }

    public static function downloadAndInstallLanguagePack($iso, $version = null, $params = null)
    {
    }

    public static function checkAndAddLanguage($iso_code, $lang_pack = false, $only_add = false, $params_lang = null)
    {
    }

    /**
     * Return id from iso code
     *
     * @param string $iso_code Iso code
     * @return integer Language ID
     */
    public static function getIdByIso($iso_code)
    {
    }

    /**
     * Check if more on than one language is activated
     *
     * @since 1.5.0
     * @return bool
     */
    public static function isMultiLanguageActivated()
    {
    }

    public static function countActiveLanguages()
    {
    }

    /**
     * This functions checks if every files exists for the language $iso_code.
     * Concerned files are those located in translations/$iso_code/
     * and translations/mails/$iso_code .
     *
     * @param mixed $iso_code
     * @returntrue if all files exists
     */
    public static function checkFilesWithIsoCode($iso_code)
    {
    }

    public static function getFilesList($iso_from, $theme_from, $iso_to = false, $theme_to = false, $select = false, $check = false, $modules = false)
    {
    }

    /**
     * Return iso code from id
     *
     * @param integer $id_lang Language ID
     * @return string Iso code
     */
    public static function getIsoById($id_lang)
    {
    }

    public static function recurseDeleteDir($dir)
    {
    }

    protected static function _copyNoneFlag($id)
    {
    }

    public function add($autodate = true, $nullValues = false, $only_add = false)
    {
    }

    /**
     * loadUpdateSQL will create default lang values when you create a new lang, based on default id lang
     *
     * @return boolean true if succeed
     */
    public function loadUpdateSQL()
    {
    }

    /**
     * @see ObjectModel::getFields()
     * @return array
     */
    public function getFields()
    {
    }

    /**
     * Move translations files after editiing language iso code
     */
    public function moveToIso($newIso)
    {
    }

    public function toggleStatus()
    {
    }

    public function checkFiles()
    {
    }

    public function deleteSelection($selection)
    {
    }

    public function delete()
    {
    }

    public function update($nullValues = false)
    {
    }

    /**
     * Generate translations files
     */
    protected function _generateFiles($newIso = null)
    {
    }

    /**
     * Return an array of theme
     *
     * @return array([theme dir] => array('name' => [theme name]))
     * @deprecated will be removed in 1.6
     */
    protected function _getThemesList()
    {
    }
}
