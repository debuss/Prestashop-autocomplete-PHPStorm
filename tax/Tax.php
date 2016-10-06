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

class Tax extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'tax',
        'primary' => 'id_tax',
        'multilang' => true,
        'fields' => array(
            'rate' => array('type' => self::TYPE_FLOAT, 'validate' => 'isFloat', 'required' => true),
            'active' => array('type' => self::TYPE_BOOL),
            'deleted' => array('type' => self::TYPE_BOOL),
            /* Lang fields */
            'name' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'required' => true, 'size' => 32),
        ),
    );
    protected static $_product_country_tax = array();
    protected static $_product_tax_via_rules = array();
    /** @var string Name */
    public $name;
    /** @var float Rate (%) */
    public $rate;
    /** @var bool active state */
    public $active;
    /** @var bool true if the tax has been historized */
    public $deleted = 0;
    protected $webserviceParameters = array(
        'objectsNodeName' => 'taxes',
    );

    /**
     * Get all available taxes
     *
     * @return array Taxes
     */
    public static function getTaxes($id_lang = false, $active_only = true)
    {
    }

    public static function excludeTaxeOption()
    {
    }

    /**
     * Return the tax id associated to the specified name
     *
     * @param string $tax_name
     * @param bool $active (true by default)
     */
    public static function getTaxIdByName($tax_name, $active = 1)
    {
    }

    /**
     * Returns the ecotax tax rate
     *
     * @param id_address
     * @return float $tax_rate
     */
    public static function getProductEcotaxRate($id_address = null)
    {
    }

    /**
     * Returns the carrier tax rate
     *
     * @param id_address
     * @return float $tax_rate
     */
    public static function getCarrierTaxRate($id_carrier, $id_address = null)
    {
    }

    /**
     * Return the product tax rate using the tax rules system
     *
     * @param int $id_product
     * @param int $id_country
     * @return Tax
     * @deprecated since 1.5
     */
    public static function getProductTaxRateViaRules($id_product, $id_country, $id_state, $zipcode)
    {
    }

    /**
     * Returns the product tax
     *
     * @param int $id_product
     * @param int $id_country
     * @return Tax
     */
    public static function getProductTaxRate($id_product, $id_address = null, Context $context = null)
    {
    }

    public function delete()
    {
    }

    /**
     * Returns true if the tax is used in an order details
     *
     * @return bool
     */
    public function isUsed()
    {
    }

    /**
     * Save the object with the field deleted to true
     *
     * @return bool
     */
    public function historize()
    {
    }

    public function toggleStatus()
    {
    }

    public function update($null_values = false)
    {
    }

    protected function _onStatusChange()
    {
    }
}
