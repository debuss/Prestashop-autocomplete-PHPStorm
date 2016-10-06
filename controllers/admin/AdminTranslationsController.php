<?php

/*
* 2007-2015 PrestaShop
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
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class AdminTranslationsController extends AdminController
{

    /** Name of theme by default */
    const DEFAULT_THEME_NAME = _PS_DEFAULT_THEME_NAME_;
    const TEXTAREA_SIZED = 70;
    /** @var array : List of folder which must be ignored */
    protected static $ignore_folder = array('.', '..', '.svn', '.git', '.htaccess', 'index.php');
    /** @var string : Link which list all pack of language */
    protected $link_lang_pack = 'http://www.prestashop.com/download/lang_packs/get_each_language_pack.php';
    /** @var int : number of sentence which can be translated */
    protected $total_expression = 0;
    /** @var int : number of sentence which aren't translated */
    protected $missing_translations = 0;
    /** @var array : List of ISO code for all languages */
    protected $all_iso_lang = array();
    /** @var array */
    protected $modules_translations = array();
    /** @var array : List of theme by translation type : FRONT, BACK, ERRORS... */
    protected $translations_informations = array();
    /** @var array : List of all languages */
    protected $languages;
    /** @var array : List of all themes */
    protected $themes;
    /** @var string : Directory of selected theme */
    protected $theme_selected;
    /** @var string : Name of translations type */
    protected $type_selected;
    /** @var Language object : Language for the selected language */
    protected $lang_selected;
    /** @var bool : Is true if number of var exceed the suhosin request or post limit */
    protected $post_limit_exceed = false;

    public function __construct()
    {
    }

    /*
     * Set the type which is selected
     */

    public static function getEmailHTML($email)
    {
    }

    /**
     * Filter the translation files contained in a .gzip pack
     * and return only the ones that we want.
     * Right now the function only needs to check that
     * the modules for which we want to add translations
     * are present on the shop (installed or not).
     *
     * @param array $list Is the output of Archive_Tar::listContent()
     * @return array
     */
    public static function filterTranslationFiles($list)
    {
    }

    /**
     * Turn the list returned by
     * AdminTranslationsController::filterTranslationFiles()
     * into a list of paths that can be passed to
     * Archive_Tar::extractList()
     *
     * @param array $list
     * @return array
     */
    public static function filesListToPaths($list)
    {
    }

    public static function checkTranslationFile($content)
    {
    }

    public static function checkAndAddMailsFiles($iso_code, $files_list)
    {
    }

    /**
     * Add new translations tabs by code ISO
     *
     * @param array $iso_code
     * @param array $files
     * @return array
     */
    public static function addNewTabs($iso_code, $files)
    {
    }

    public function setTypeSelected($type_selected)
    {
    }

    /**
     * AdminController::initContent() override
     *
     * @see AdminController::initContent()
     */
    public function initContent()
    {
    }

    /**
     * This function create vars by default and call the good method for generate form
     *
     * @param $method_name
     * @return mixed Call the method $this->method_name()
     */
    public function initForm($method_name)
    {
    }

    public function displayToggleButton($closed = false)
    {
    }

    /**
     * Generate the Main page
     */
    public function initMain()
    {
    }

    public function renderKpis()
    {
    }

    /**
     * AdminController::postProcess() override
     *
     * @see AdminController::postProcess()
     */
    public function postProcess()
    {
    }

    /**
     * Get all informations on : languages, theme and the translation type.
     */
    public function getInformations()
    {
    }

    /**
     * Get all translations informations for all type of translations
     * array(
     *  'type' => array(
     *      'name' => string : title for the translation type,
     *      'var' => string : name of var for the translation file,
     *      'dir' => string : dir of translation file
     *      'file' => string : file name of translation file
     *  )
     * )
     */
    public function getTranslationsInformations()
    {
    }

    public function submitCopyLang()
    {
    }

    /**
     * Change the key translation to according it to theme name.
     *
     * @param string $path
     * @param string $theme_from
     * @param string $theme_to
     * @return bool
     */
    public function changeModulesKeyTranslation($path, $theme_from, $theme_to)
    {
    }

    public function submitExportLang()
    {
    }

    public function exportTabs()
    {
    }

    public function submitImportLang()
    {
    }

    /**
     * Move theme translations in selected themes
     *
     * @param array $files
     * @param array $themes_selected
     */
    public function checkAndAddThemesFiles($files, $themes_selected)
    {
    }

    public function submitAddLang()
    {
    }

    /**
     * Check if directory and file exist and return an list of modules
     *
     * @return array List of modules
     * @throws PrestaShopException
     */
    public function getListModules()
    {
    }

    /**
     * Clear the list of module file by type (file or directory)
     *
     * @param $files : list of files
     * @param string $type_clear (file|directory)
     * @param string $path
     * @return array : list of a good files
     */
    public function clearModuleFiles($files, $type_clear = 'file', $path = '')
    {
    }

    /**
     * This method generate the form for front translations
     */
    public function initFormFront()
    {
    }

    /**
     * Include file $dir/$file and return the var $var declared in it.
     * This create the file if not exists
     * return array : translations
     */
    public function fileExists()
    {
    }

    /**
     * Get list of files which must be parsed by directory and by type of translations
     *
     * @return array : list of files by directory
     */
    public function getFileToParseByTypeTranslation()
    {
    }

    /**
     * Recursively list files in directory $dir
     *
     * @param string $dir
     * @param array $list
     * @param string $file_ext
     * @return array
     */
    public function listFiles($dir, $list = array(), $file_ext = 'tpl')
    {
    }

    /**
     * Check in each module if contains pdf folder.
     *
     * @param bool $classes
     * @return array Array of modules which have pdf
     */
    public function getModulesHasPDF($classes = false)
    {
    }

    /**
     * Check in each module if contains mails folder.
     *
     * @param bool $with_module_name
     * @return array Array of modules which have mails
     */
    public function getModulesHasMails($with_module_name = false)
    {
    }

    /**
     * Find sentence which use %d, %s, %%, %1$d, %1$s...
     *
     * @param $key : english sentence
     * @return array|bool return list of matches
     */
    public function checkIfKeyUseSprintf($key)
    {
    }

    public function displayLimitPostWarning($count)
    {
    }

    /**
     * AdminController::initToolbar() override
     *
     * @see AdminController::initToolbar()
     */
    public function initToolbar()
    {
    }

    /**
     * This method generate the form for back translations
     */
    public function initFormBack()
    {
    }

    /**
     * This method generate the form for errors translations
     */
    public function initFormErrors()
    {
    }

    /**
     * This method generate the form for fields translations
     */
    public function initFormFields()
    {
    }

    /**
     * This method generate the form for mails translations
     *
     * @param bool $no_display
     * @return array|string
     */
    public function initFormMails($no_display = false)
    {
    }

    public function copyMailFilesForAllLanguages()
    {
    }

    /**
     * Get each informations for each mails found in the folder $dir.
     *
     * @since 1.4.0.14
     * @param string $dir
     * @param string $group_name
     * @return array : list of mails
     */
    public function getMailFiles($dir, $group_name = 'mail')
    {
    }

    /**
     * This method generate the form for modules translations
     */
    public function initFormModules()
    {
    }

    /**
     * This method generate the form for PDF translations
     */
    public function initFormPDF()
    {
    }

    /**
     * Checks if theme exists
     *
     * @param string $theme
     * @return bool
     */
    protected function theme_exists($theme)
    {
    }

    /**
     * This method is only used by AdminTranslations::submitCopyLang().
     * It try to create folder in new theme.
     * When a translation file is copied for a module, its translation key is wrong.
     * We have to change the translation key and rewrite the file.
     *
     * @param string $dest file name
     * @return bool
     */
    protected function checkDirAndCreate($dest)
    {
    }

    /**
     * This method redirect in the translation main page or in the translation page
     *
     * @param bool $save_and_stay : true if the user has clicked on the button "save and stay"
     * @param bool $conf : id of confirmation message
     */
    protected function redirect($save_and_stay = false, $conf = false)
    {
    }

    /**
     * Read the Post var and write the translation file.
     * This method overwrites the old translation file.
     *
     * @param bool $override_file Set true if this file is a override
     * @throws PrestaShopException
     */
    protected function writeTranslationFile($override_file = false)
    {
    }

    /**
     * This method is used to write translation for mails.
     * This writes subject translation files
     * (in root/mails/lang_choosen/lang.php or root/_PS_THEMES_DIR_/mails/lang_choosen/lang.php)
     * and mails files.
     */
    protected function submitTranslationsMails()
    {
    }

    protected function getMailPattern()
    {
    }

    protected function writeSubjectTranslationFile($sub, $path)
    {
    }

    /**
     * This method get translation in each translations file.
     * The file depend on $lang param.
     *
     * @param array $modules List of modules
     * @param string|null $root_dir path where it get each modules
     * @param string $lang ISO code of chosen language to translate
     * @param bool $is_default Set it if modules are located in root/prestashop/modules folder
     *                                This allow to distinguish overridden prestashop theme and original module
     * @return array
     */
    protected function getAllModuleFiles($modules, $root_dir = null, $lang, $is_default = false)
    {
    }

    /**
     * This method merge each arrays of modules translation in the array of modules translations
     */
    protected function getModuleTranslations()
    {
    }

    /**
     * This get files to translate in module directory.
     * Recursive method allow to get each files for a module no matter his depth.
     *
     * @param string $path directory path to scan
     * @param array $array_files by reference - array which saved files to parse.
     * @param string $module_name module name
     * @param string $lang_file full path of translation file
     * @param bool $is_default
     */
    protected function recursiveGetModuleFiles($path, &$array_files, $module_name, $lang_file, $is_default = false)
    {
    }

    /**
     * This method check each file (tpl or php file), get its sentences to translate,
     * compare with posted values and write in iso code translation file.
     *
     * @param string $file_name
     * @param array $files
     * @param string $theme_name
     * @param string $module_name
     * @param string|bool $dir
     * @throws PrestaShopException
     */
    protected function findAndWriteTranslationsIntoFile($file_name, $files, $theme_name, $module_name, $dir = false)
    {
    }

    /**
     * This method parse a file by type of translation and type file
     *
     * @param $content
     * @param $type_translation : front, back, errors, modules...
     * @param string|bool $type_file : (tpl|php)
     * @param string $module_name : name of the module
     * @return array
     */
    protected function userParseFile($content, $type_translation, $type_file = false, $module_name = '')
    {
    }

    /**
     * Get list of subjects of mails
     *
     * @param $dir
     * @param $file
     * @param $subject_mail
     * @return array : list of subjects of mails
     */
    protected function getSubjectMail($dir, $file, $subject_mail)
    {
    }

    /**
     * Get content of the mail file.
     *
     * @since 1.4.0.14
     * @param string $dir
     * @param string $file
     * @return array : content of file
     */
    protected function getMailContent($dir, $file)
    {
    }

    /**
     * @param $directory : name of directory
     * @return array
     */
    protected function getSubjectMailContent($directory)
    {
    }

    /**
     * Display mails in html format.
     * This was create for factorize the html displaying
     *
     * @since 1.4.0.14
     * @param array $mails
     * @param array $all_subject_mail
     * @param Language $obj_lang
     * @param string $id_html Use for set html id attribute for the block
     * @param string $title Set the title for the block
     * @param string|bool $name_for_module Is not false define add a name for distinguish mails module
     * @return string
     */
    protected function displayMailContent($mails, $all_subject_mail, $obj_lang, $id_html, $title, $name_for_module = false)
    {
    }

    /**
     * Just build the html structure for display html mails.
     *
     * @since 1.4.0.14
     * @param array $content With english and language needed contents
     * @param string $lang ISO code of the needed language
     * @param string $url for         The html page and displaying an outline
     * @param string $mail_name Name of the file to translate (same for txt and html files)
     * @param string $group_name Group name allow to distinguish each block of mail.
     * @param string|bool $name_for_module Is not false define add a name for distinguish mails module
     * @return string
     */
    protected function displayMailBlockHtml($content, $lang, $url, $mail_name, $group_name, $name_for_module = false)
    {
    }

    protected function cleanMailContent(&$content, $lang, &$title)
    {
    }

    /**
     * Just build the html structure for display txt mails
     *
     * @since 1.4.0.14
     * @param array $content With english and language needed contents
     * @param string $lang ISO code of the needed language
     * @param string $mail_name Name of the file to translate (same for txt and html files)
     * @param string $group_name Group name allow to distinguish each block of mail.
     * @param string|bool $name_for_module Is not false define add a name for distinguish mails module
     * @return string
     */
    protected function displayMailBlockTxt($content, $lang, $mail_name, $group_name, $name_for_module = false)
    {
    }

    protected function displayMailEditor($content, $lang, $url, $mail_name, $group_name, $name_for_module = false)
    {
    }

    protected function getTinyMCEForMails($iso_lang)
    {
    }

    /**
     * This method get translation for each files of a module,
     * compare with global $_MODULES array and fill AdminTranslations::modules_translations array
     * With key as English sentences and values as their iso code translations.
     *
     * @param array $files
     * @param string $theme_name
     * @param string $module_name
     * @param string|bool $dir
     */
    protected function findAndFillTranslations($files, $theme_name, $module_name, $dir = false)
    {
    }

    /**
     * Parse PDF class
     *
     * @since 1.4.5.0
     * @param string $file_path File to parse
     * @param string $file_type Type of file
     * @param array $lang_array Contains expression in the chosen language
     * @param string $tab name      To use with the md5 key
     * @param array $tabs_array
     * @param array $count_missing
     * @return array Array          Containing all datas needed for building the translation form
     */
    protected function parsePdfClass($file_path, $file_type, $lang_array, $tab, $tabs_array, &$count_missing)
    {
    }
}
