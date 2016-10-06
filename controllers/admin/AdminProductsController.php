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
 * @property Product $object
 */
class AdminProductsController extends AdminController
{

    /** @var int Max image size for upload
     * As of 1.5 it is recommended to not set a limit to max image size
     */
    protected $max_file_size = null;
    protected $max_image_size = null;
    protected $_category;
    /**
     * @var string name of the tab to display
     */
    protected $tab_display;
    protected $tab_display_module;
    /**
     * The order in the array decides the order in the list of tab. If an element's value is a number, it will be preloaded.
     * The tabs are preloaded from the smallest to the highest number.
     *
     * @var array Product tabs.
     */
    protected $available_tabs = array();
    protected $default_tab = 'Informations';
    protected $available_tabs_lang = array();
    protected $position_identifier = 'id_product';
    protected $submitted_tabs;
    protected $id_current_category;

    public function __construct()
    {
    }

    public static function getQuantities($echo, $tr)
    {
    }

    /**
     * Build a categories tree
     *
     * @param       $id_obj
     * @param array $indexedCategories Array with categories where product is indexed (in order to check checkbox)
     * @param array $categories Categories to list
     * @param       $current
     * @param null $id_category Current category ID
     * @param null $id_category_default
     * @param array $has_suite
     * @return string
     */
    public static function recurseCategoryForInclude($id_obj, $indexedCategories, $categories, $current, $id_category = null, $id_category_default = null, $has_suite = array())
    {
    }

    public function setMedia()
    {
    }

    public function getList($id_lang, $orderBy = null, $orderWay = null, $start = 0, $limit = null, $id_lang_shop = null)
    {
    }

    public function ajaxProcessGetCategoryTree()
    {
    }

    public function ajaxProcessGetCountriesOptions()
    {
    }

    public function ajaxProcessGetCurrenciesOptions()
    {
    }

    public function ajaxProcessGetGroupsOptions()
    {
    }

    public function processDeleteVirtualProduct()
    {
    }

    public function ajaxProcessAddAttachment()
    {
    }

    public function processDuplicate()
    {
    }

    public function processDelete()
    {
    }

    public function processImage()
    {
    }

    /**
     * This function is never called at the moment (specific prices cannot be edited)
     */
    public function processPricesModification()
    {
    }

    public function ajaxProcessDeleteSpecificPrice()
    {
    }

    public function processProductCustomization()
    {
    }

    /**
     * Overrides parent for custom redirect link
     */
    public function processPosition()
    {
    }

    public function initProcess()
    {
    }

    /**
     * postProcess handle every checks before saving products information
     *
     * @return void
     */
    public function postProcess()
    {
    }

    public function ajaxProcessDeleteProductAttribute()
    {
    }

    public function ajaxProcessDefaultProductAttribute()
    {
    }

    public function ajaxProcessEditProductAttribute()
    {
    }

    public function ajaxPreProcess()
    {
    }

    public function ajaxProcessUpdateProductImageShopAsso()
    {
    }

    public function ajaxProcessUpdateImagePosition()
    {
    }

    public function ajaxProcessUpdateCover()
    {
    }

    public function ajaxProcessDeleteProductImage()
    {
    }

    /**
     * Add or update a product image
     *
     * @param Product $product Product object to add image
     * @param string $method
     * @return int|false
     */
    public function addProductImage($product, $method = 'auto')
    {
    }

    public function checkMultishopBox($field, $context = null)
    {
    }

    /**
     * Copy a product image
     *
     * @param int $id_product Product Id for product image filename
     * @param int $id_image Image Id for product image filename
     * @param string $method
     * @return void|false
     * @throws PrestaShopException
     */
    public function copyImage($id_product, $id_image, $method = 'auto')
    {
    }

    public function processAdd()
    {
    }

    /**
     * Check that a saved product is valid
     */
    public function checkProduct()
    {
    }

    /**
     * Update product accessories
     *
     * @param object $product Product
     */
    public function updateAccessories($product)
    {
    }

    /**
     * delete all items in pack, then check if type_product value is 2.
     * if yes, add the pack items from input "inputPackItems"
     *
     * @param Product $product
     * @return bool
     */
    public function updatePackItems($product)
    {
    }

    /**
     * Update product download
     *
     * @param Product $product
     * @param int $edit
     * @return bool
     */
    public function updateDownloadProduct($product, $edit = 0)
    {
    }

    /**
     * Update product tags
     *
     * @param array $languages Array languages
     * @param object $product Product
     * @return bool Update result
     */
    public function updateTags($languages, $product)
    {
    }

    public function getPreviewUrl(Product $product)
    {
    }

    public function processStatus()
    {
    }

    /* Checking customs feature */

    public function processUpdate()
    {
    }

    /**
     * Post treatment for suppliers
     */
    public function processSuppliers()
    {
    }

    public function processFeatures()
    {
    }

    public function processProductAttribute()
    {
    }

    public function processPriceAddition()
    {
    }

    public function processSpecificPricePriorities()
    {
    }

    public function processCustomizationConfiguration()
    {
    }

    /**
     * Attach an existing attachment to the product
     *
     * @return void
     */
    public function processAttachments()
    {
    }

    public function processImageLegends()
    {
    }

    /**
     * Post treatment for warehouses
     */
    public function processWarehouses()
    {
    }

    public function initContent($token = null)
    {
    }

    public function renderKpis()
    {
    }

    public function renderList()
    {
    }

    public function ajaxProcessProductManufacturers()
    {
    }

    public function initPageHeaderToolbar()
    {
    }

    public function initToolbar()
    {
    }

    /**
     * renderForm contains all necessary initialization needed for all tabs
     *
     * @return string|void
     * @throws PrestaShopException
     */
    public function renderForm()
    {
    }

    public function getCombinationImagesJS()
    {
    }

    /**
     * @param Product $obj
     * @throws Exception
     * @throws PrestaShopException
     * @throws SmartyException
     */
    public function initFormAssociations($obj)
    {
    }

    public function haveThisAccessory($accessory_id, $accessories)
    {
    }

    /**
     * @param Product $obj
     * @throws Exception
     * @throws SmartyException
     */
    public function initFormPrices($obj)
    {
    }

    public function initFormSeo($product)
    {
    }

    /**
     * @param Product $product
     * @throws Exception
     * @throws SmartyException
     */
    public function initFormPack($product)
    {
    }

    /**
     * Get an array of pack items for display from the product object if specified, else from POST/GET values
     *
     * @param Product $product
     * @return array of pack items
     */
    public function getPackItems($product = null)
    {
    }

    public function initFormVirtualProduct($product)
    {
    }

    /**
     * @param Product $obj
     * @throws Exception
     * @throws SmartyException
     */
    public function initFormCustomization($obj)
    {
    }

    public function initFormAttachments($obj)
    {
    }

    /**
     * @param Product $product
     * @throws Exception
     * @throws SmartyException
     */
    public function initFormInformations($product)
    {
    }

    public function initFormShipping($obj)
    {
    }

    public function ajaxProcessaddProductImage()
    {
    }

    /**
     * @param Product $obj
     * @throws Exception
     * @throws SmartyException
     */
    public function initFormImages($obj)
    {
    }

    public function initFormCombinations($obj)
    {
    }

    /**
     * @param Product $product
     * @throws Exception
     * @throws SmartyException
     */
    public function initFormAttributes($product)
    {
    }

    /**
     * @param Product $product
     * @param Currency|array|int $currency
     * @return string
     */
    public function renderListAttributes($product, $currency)
    {
    }

    /**
     * @param Product $obj
     * @throws Exception
     * @throws SmartyException
     */
    public function initFormQuantities($obj)
    {
    }

    /**
     * @param Product $obj
     * @throws Exception
     * @throws SmartyException
     */
    public function initFormSuppliers($obj)
    {
    }

    /**
     * @param Product $obj
     * @throws Exception
     * @throws SmartyException
     */
    public function initFormWarehouses($obj)
    {
    }

    /**
     * @param Product $obj
     * @throws Exception
     * @throws SmartyException
     */
    public function initFormFeatures($obj)
    {
    }

    public function ajaxProcessProductQuantity()
    {
    }

    /**
     * AdminProducts display hook
     *
     * @param $obj
     * @throws PrestaShopException
     */
    public function initFormModules($obj)
    {
    }

    public function getL($key)
    {
    }

    public function ajaxProcessCheckProductName()
    {
    }

    public function ajaxProcessUpdatePositions()
    {
    }

    public function ajaxProcessPublishProduct()
    {
    }

    public function displayPreviewLink($token = null, $id, $name = null)
    {
    }

    protected function loadObject($opt = false)
    {
    }

    protected function _validateSpecificPrice($id_shop, $id_currency, $id_country, $id_group, $id_customer, $price, $from_quantity, $reduction, $reduction_type, $from, $to, $id_combination = 0)
    {
    }

    protected function isTabSubmitted($tab_name)
    {
    }

    /**
     * @param Product|ObjectModel $object
     * @param string $table
     */
    protected function copyFromPost(&$object, $table)
    {
    }

    protected function _cleanMetaKeywords($keywords)
    {
    }

    /**
     * Check if a field is edited (if the checkbox is checked)
     * This method will do something only for multishop with a context all / group
     *
     * @param string $field Name of field
     * @param int $id_lang
     * @return bool
     */
    protected function isProductFieldUpdated($field, $id_lang = null)
    {
    }

    protected function _removeTaxFromEcotax()
    {
    }

    protected function addCarriers($product = null)
    {
    }

    protected function checkFeatures($languages, $feature_id)
    {
    }

    protected function _displayDraftWarning($active)
    {
    }

    protected function initPack(Product $product)
    {
    }

    protected function _displaySpecificPriceModificationForm($defaultCurrency, $shops, $currencies, $countries, $groups)
    {
    }

    protected function _applyTaxToEcotax($product)
    {
    }

    protected function _displayLabelFields(&$obj, &$labels, $languages, $default_language, $type)
    {
    }

    protected function _getCustomizationFieldIds($labels, $alreadyGenerated, $obj)
    {
    }

    protected function _displayLabelField(&$label, $languages, $default_language, $type, $fieldIds, $id_customization_field)
    {
    }

    protected function getCarrierList()
    {
    }

    protected function processBulkDelete()
    {
    }

    protected function updateAssoShop($id_object)
    {
    }

    protected function _getFinalPrice($specific_price, $product_price, $tax_rate)
    {
    }

    protected function _displayUnavailableProductWarning()
    {
    }
}
