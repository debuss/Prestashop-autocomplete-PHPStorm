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

/**
 * @property Theme $object
 */
class AdminThemesController extends AdminController
{

    const MAX_NAME_LENGTH = 128;
    /**
     * This value is used in isThemeCompatible method. only version node with an
     * higher version number will be used in [theme]/config.xml
     *
     * @since 1.4.0.11, check theme compatibility 1.4
     * @var string
     */
    public static $check_features_version = '1.4';
    /**
     * Multidimensional array used to check [theme]/config.xml values,
     * and also checks prestashop current configuration if not match.
     *
     * @var array
     */
    public static $check_features = array(
        'ccc' => array(
            'attributes' => array(
                'available' => array(
                    'value' => 'true',
                    /*
                     * accepted attribute value if value doesn't match, prestashop configuration value must have those values
                    */
                    'check_if_not_valid' => array(
                        'PS_CSS_THEME_CACHE' => 0,
                        'PS_JS_THEME_CACHE' => 0,
                        'PS_HTML_THEME_COMPRESSION' => 0,
                        'PS_JS_HTML_THEME_COMPRESSION' => 0,
                    ),
                ),
            ),
            'error' => 'This theme may not correctly use PrestaShop\'s "combine, compress and cache" options.',
            'tab' => 'AdminPerformance',
        ),
        'guest_checkout' => array(
            'attributes' => array(
                'available' => array(
                    'value' => 'true',
                    'check_if_not_valid' => array('PS_GUEST_CHECKOUT_ENABLED' => 0)
                ),
            ),
            'error' => 'This theme may not correctly use PrestaShop\'s "guest checkout" feature.',
            'tab' => 'AdminPreferences',
        ),
        'one_page_checkout' => array(
            'attributes' => array(
                'available' => array(
                    'value' => 'true',
                    'check_if_not_valid' => array('PS_ORDER_PROCESS_TYPE' => 0),
                ),
            ),
            'error' => 'This theme may not correctly use PrestaShop\'s "one-page checkout" feature.',
            'tab' => 'AdminPreferences',
        ),
        'store_locator' => array(
            'attributes' => array(
                'available' => array(
                    'value' => 'true',
                    'check_if_not_valid' => array(
                        'PS_STORES_SIMPLIFIED' => 0,
                        'PS_STORES_DISPLAY_FOOTER' => 0
                    ),
                )
            ),
            'error' => 'This theme may not correctly use PrestaShop\'s "store locator" feature.',
            'tab' => 'AdminStores',
        )
    );
    public $className = 'Theme';
    public $table = 'theme';
    protected $toolbar_scroll = false;
    private $img_error;

    public function __construct()
    {
    }

    /**
     * copy $base_theme_dir into $target_theme_dir.
     *
     * @param string $base_theme_dir relative path to base dir
     * @param string $target_theme_dir relative path to target dir
     * @return bool true if success
     */
    protected static function copyTheme($base_theme_dir, $target_theme_dir)
    {
    }

    public function init()
    {
    }

    public function downloadAddonsThemes()
    {
    }

    public function renderForm()
    {
    }

    public function renderList()
    {
    }

    public function processAdd()
    {
    }

    public function processUpdate()
    {
    }

    public function processDelete()
    {
    }

    public function processExportTheme()
    {
    }

    public function renderExportTheme()
    {
    }

    public function processImportTheme()
    {
    }

    public function renderImportTheme()
    {
    }

    public function initContent()
    {
    }

    public function initPageHeaderToolbar()
    {
    }

    public function ajaxProcessGetAddonsThemes()
    {
    }

    public function renderChooseThemeModule()
    {
    }

    public function processThemeInstall()
    {
    }

    public function renderView()
    {
    }

    /**
     * This functions make checks about AdminThemes configuration edition only.
     *
     * @since 1.4
     */
    public function postProcess()
    {
    }

    /**
     * Update PS_LOGO
     */
    public function updateOptionPsLogo()
    {
    }

    /**
     * Update PS_LOGO_MOBILE
     */
    public function updateOptionPsLogoMobile()
    {
    }

    /**
     * Update PS_LOGO_MAIL
     */
    public function updateOptionPsLogoMail()
    {
    }

    /**
     * Update PS_LOGO_INVOICE
     */
    public function updateOptionPsLogoInvoice()
    {
    }

    /**
     * Update PS_STORES_ICON
     */
    public function updateOptionPsStoresIcon()
    {
    }

    /**
     * Update PS_FAVICON
     */
    public function updateOptionPsFavicon()
    {
    }

    /**
     * Update theme for current shop
     */
    public function updateOptionThemeForShop()
    {
    }

    public function initProcess()
    {
    }

    public function printResponsiveIcon($value)
    {
    }

    public function processResponsive()
    {
    }

    public function processDefaultLeftColumn()
    {
    }

    public function processDefaultRightColumn()
    {
    }

    public function ajaxProcessLeftMeta()
    {
    }

    public function processLeftMeta()
    {
    }

    public function ajaxProcessRightMeta()
    {
    }

    public function processRightMeta()
    {
    }

    /**
     * Function used to render the options for this controller
     */
    public function renderOptions()
    {
    }

    public function setMedia()
    {
    }

    protected function extractTheme($theme_zip_file, $sandbox)
    {
    }

    protected function installTheme($theme_dir, $sandbox = false, $redirect = true)
    {
    }

    /**
     * @param SimpleXMLElement $xml
     * @param bool $theme_dir only used if the theme directory to import is already located on the shop
     * @return array|string return array of themes on success, otherwise the error as a string is returned
     */
    protected function importThemeXmlConfig(SimpleXMLElement $xml, $theme_dir = false)
    {
    }

    protected function isThemeInstalled($theme_name)
    {
    }

    /**
     * This function checks if the theme designer has thunk to make his theme compatible 1.4,
     * and noticed it on the $theme_dir/config.xml file. If not, some new functionnalities has
     * to be desactivated
     *
     * @since 1.4
     * @param string $theme_dir theme directory
     * @return bool Validity is ok or not
     */
    protected function _isThemeCompatible($theme_dir)
    {
    }

    /**
     * _checkConfigForFeatures
     *
     * @param array $arrFeatures array of feature code to check
     * @param mixed $configItem will precise the attribute which not matches. If empty, will check every attributes
     * @return bool Error message, or null if disabled
     */
    protected function _checkConfigForFeatures($arrFeatures, $configItem = array())
    {
    }

    /**
     * Generic function which allows logo upload
     *
     * @param $field_name
     * @param $logo_prefix
     * @return bool
     */
    protected function updateLogo($field_name, $logo_prefix)
    {
    }

    protected function uploadIco($name, $dest)
    {
    }

    protected function processUpdateOptions()
    {
    }

    private function checkXmlFields($xml_file)
    {
    }

    private function checkPostedDatas()
    {
    }

    private function checkVersionsAndCompatibility()
    {
    }

    private function checkNames()
    {
    }

    private function checkDocumentation()
    {
    }

    /**
     * @param int $type
     * $type = 0 both native & partner (default)
     * $type = 1 native
     * $type = 2 partner
     * @return array
     */
    private function getNativeModule($type = 0)
    {
    }

    private function checkParentClass($name)
    {
    }

    private function generateXML($theme_to_export, $metas)
    {
    }

    private function generateArchive()
    {
    }

    /**
     * @param ZipArchive $obj
     * @param string $file
     * @param string $server_path
     * @param string $archive_path
     */
    private function archiveThisFile($obj, $file, $server_path, $archive_path)
    {
    }

    private function renderExportTheme1()
    {
    }

    private function formatHelperArray($origin_arr)
    {
    }

    private function getModules($xml)
    {
    }

    private function formatHelperValuesArray($originArr)
    {
    }

    private function updateImages($xml)
    {
    }

    private function hookModule($id_module, $module_hooks, $shop)
    {
    }

    private function recurseCopy($src, $dst)
    {
    }
}
