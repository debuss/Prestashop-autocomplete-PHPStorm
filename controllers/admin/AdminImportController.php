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

@ini_set('max_execution_time', 0);
/** No max line limit since the lines can be more than 4096. Performance impact is not significant. */
define('MAX_LINE_SIZE', 0);

/** Used for validatefields diying without user friendly error or not */
define('UNFRIENDLY_ERROR', false);

/** this value set the number of columns visible on each page */
define('MAX_COLUMNS', 6);

/** correct Mac error on eof */
@ini_set('auto_detect_line_endings', '1');

class AdminImportController extends AdminController
{

    public static $column_mask;
    public static $default_values = array();
    public static $validators = array(
        'active' => array('AdminImportController', 'getBoolean'),
        'tax_rate' => array('AdminImportController', 'getPrice'),
        /** Tax excluded */
        'price_tex' => array('AdminImportController', 'getPrice'),
        /** Tax included */
        'price_tin' => array('AdminImportController', 'getPrice'),
        'reduction_price' => array('AdminImportController', 'getPrice'),
        'reduction_percent' => array('AdminImportController', 'getPrice'),
        'wholesale_price' => array('AdminImportController', 'getPrice'),
        'ecotax' => array('AdminImportController', 'getPrice'),
        'name' => array('AdminImportController', 'createMultiLangField'),
        'description' => array('AdminImportController', 'createMultiLangField'),
        'description_short' => array('AdminImportController', 'createMultiLangField'),
        'meta_title' => array('AdminImportController', 'createMultiLangField'),
        'meta_keywords' => array('AdminImportController', 'createMultiLangField'),
        'meta_description' => array('AdminImportController', 'createMultiLangField'),
        'link_rewrite' => array('AdminImportController', 'createMultiLangField'),
        'available_now' => array('AdminImportController', 'createMultiLangField'),
        'available_later' => array('AdminImportController', 'createMultiLangField'),
        'category' => array('AdminImportController', 'split'),
        'online_only' => array('AdminImportController', 'getBoolean'),
    );
    public $entities = array();
    public $available_fields = array();
    public $required_fields = array();
    public $cache_image_deleted = array();
    public $separator;
    public $multiple_value_separator;

    public function __construct()
    {
    }

    public static function getPath($file = '')
    {
    }

    public static function setLocale()
    {
    }

    public static function getMaskedRow($row)
    {
    }

    /**
     * @param $array
     * @param $funcname
     * @param mixed $user_data
     * @return bool
     */
    public static function arrayWalk(&$array, $funcname, &$user_data = false)
    {
    }

    protected static function getBoolean($field)
    {
    }

    protected static function getPrice($field)
    {
    }

    protected static function split($field)
    {
    }

    protected static function fillInfo($infos, $key, &$entity)
    {
    }

    protected static function usortFiles($a, $b)
    {
    }

    protected static function rewindBomAware($handle)
    {
    }

    protected static function createMultiLangField($field)
    {
    }

    protected static function setDefaultValues(&$info)
    {
    }

    /**
     * copyImg copy an image located in $url and save it in a path
     * according to $entity->$id_entity .
     * $id_image is used if we need to add a watermark
     *
     * @param int $id_entity id of product or category (set in entity)
     * @param int $id_image (default null) id of the image if watermark enabled.
     * @param string $url path or url to use
     * @param string $entity 'products' or 'categories'
     * @param bool $regenerate
     * @return bool
     */
    protected static function copyImg($id_entity, $id_image = null, $url, $entity = 'products', $regenerate = true)
    {
    }

    protected static function setEntityDefaultValues(&$entity)
    {
    }

    /*
    * Return fields to be display AS piece of advise
    *
    * @param $in_array boolean
    * @return string or return array
    */

    private static function get_best_path($tgt_width, $tgt_height, $path_infos)
    {
    }

    public function setMedia()
    {
    }

    public function ajaxProcessuploadCsv()
    {
    }

    public function init()
    {
    }

    public function initContent()
    {
    }

    public function initToolbar()
    {
    }

    public function renderView()
    {
    }

    public function utf8EncodeArray($array)
    {
    }

    public function renderForm()
    {
    }

    public function getAvailableFields($in_array = false)
    {
    }

    public function productImportCreateCat($default_language_id, $category_name, $id_parent_category = null)
    {
    }

    public function postProcess()
    {
    }

    public function categoryImport()
    {
    }

    public function clearSmartyCache()
    {
    }

    public function productImport()
    {
    }

    public function customerImport()
    {
    }

    public function addressImport()
    {
    }

    public function attributeImport()
    {
    }

    public function manufacturerImport()
    {
    }

    public function supplierImport()
    {
    }

    public function aliasImport()
    {
    }

    /**
     * @since 1.5.0
     */
    public function supplyOrdersImport()
    {
    }

    public function supplyOrdersDetailsImport()
    {
    }

    public function ajaxProcessSaveImportMatchs()
    {
    }

    public function ajaxProcessLoadImportMatchs()
    {
    }

    public function ajaxProcessDeleteImportMatchs()
    {
    }

    protected function openCsvFile()
    {
    }

    protected function getNbrColumn($handle, $glue)
    {
    }

    protected function generateContentTable($current_table, $nb_column, $handle, $glue)
    {
    }

    protected function getTypeValuesOptions($nb_c)
    {
    }

    protected function truncateTables($case)
    {
    }

    protected function receiveTab()
    {
    }

    protected function closeCsvFile($handle)
    {
    }

    protected function addProductWarning($product_name, $product_id = null, $message = '')
    {
    }
}
