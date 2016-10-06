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

class Meta extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'meta',
        'primary' => 'id_meta',
        'multilang' => true,
        'multilang_shop' => true,
        'fields' => array(
            'page' => array('type' => self::TYPE_STRING, 'validate' => 'isFileName', 'required' => true, 'size' => 64),

            /* Lang fields */
            'title' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 128),
            'description' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255),
            'keywords' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255),
            'url_rewrite' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isLinkRewrite', 'size' => 255),
        ),
    );
    /** @var string Name */
    public $page;
    public $title;
    public $description;
    public $keywords;
    public $url_rewrite;

    public static function getPages($exclude_filled = false, $add_page = false)
    {
    }

    public static function getMetas()
    {
    }

    public static function getMetasByIdLang($id_lang)
    {
    }

    public static function getEquivalentUrlRewrite($new_id_lang, $id_lang, $url_rewrite)
    {
    }

    /**
     * @since 1.5.0
     */
    public static function getMetaTags($id_lang, $page_name, $title = '')
    {
    }

    /**
     * Get product meta tags
     *
     * @since 1.5.0
     * @param int $id_product
     * @param int $id_lang
     * @param string $page_name
     * @return array
     */
    public static function getProductMetas($id_product, $id_lang, $page_name)
    {
    }

    /**
     * @since 1.5.0
     */
    public static function completeMetaTags($meta_tags, $default_value, Context $context = null)
    {
    }

    /**
     * Get meta tags for a given page
     *
     * @since 1.5.0
     * @param int $id_lang
     * @param string $page_name
     * @return array Meta tags
     */
    public static function getHomeMetas($id_lang, $page_name)
    {
    }

    public static function getMetaByPage($page, $id_lang)
    {
    }

    /**
     * Get category meta tags
     *
     * @since 1.5.0
     * @param int $id_category
     * @param int $id_lang
     * @param string $page_name
     * @return array
     */
    public static function getCategoryMetas($id_category, $id_lang, $page_name, $title = '')
    {
    }

    /**
     * Get manufacturer meta tags
     *
     * @since 1.5.0
     * @param int $id_manufacturer
     * @param int $id_lang
     * @param string $page_name
     * @return array
     */
    public static function getManufacturerMetas($id_manufacturer, $id_lang, $page_name)
    {
    }

    /**
     * Get supplier meta tags
     *
     * @since 1.5.0
     * @param int $id_supplier
     * @param int $id_lang
     * @param string $page_name
     * @return array
     */
    public static function getSupplierMetas($id_supplier, $id_lang, $page_name)
    {
    }

    /**
     * Get CMS meta tags
     *
     * @since 1.5.0
     * @param int $id_cms
     * @param int $id_lang
     * @param string $page_name
     * @return array
     */
    public static function getCmsMetas($id_cms, $id_lang, $page_name)
    {
    }

    /**
     * Get CMS category meta tags
     *
     * @since 1.5.0
     * @param int $id_cms_category
     * @param int $id_lang
     * @param string $page_name
     * @return array
     */
    public static function getCmsCategoryMetas($id_cms_category, $id_lang, $page_name)
    {
    }

    public function update($null_values = false)
    {
    }

    public function deleteSelection($selection)
    {
    }

    public function delete()
    {
    }
}
