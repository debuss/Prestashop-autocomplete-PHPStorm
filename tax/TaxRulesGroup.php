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

class TaxRulesGroup extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'tax_rules_group',
        'primary' => 'id_tax_rules_group',
        'fields' => array(
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true, 'size' => 64),
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'deleted' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
        ),
    );
    protected static $_taxes = array();
    public $name;
    /** @var bool active state */
    public $active;
    public $deleted = 0;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    protected $webserviceParameters = array(
        'objectsNodeName' => 'tax_rule_groups',
        'objectNodeName' => 'tax_rule_group',
        'fields' => array(),
    );

    /**
     * @return array an array of tax rules group formatted as $id => $name
     */
    public static function getTaxRulesGroupsForOptions()
    {
    }

    public static function getTaxRulesGroups($only_active = true)
    {
    }

    /**
     * @return array
     */
    public static function getAssociatedTaxRatesByIdCountry($id_country)
    {
    }

    /**
     * Returns the tax rules group id corresponding to the name
     *
     * @param string $name
     * @return int id of the tax rules
     */
    public static function getIdByName($name)
    {
    }

    /**
     * @deprecated since 1.5
     */
    public static function getTaxesRate($id_tax_rules_group, $id_country, $id_state, $zipcode)
    {
    }

    /**
     * Return taxes associated to this para
     *
     * @deprecated since 1.5
     */
    public static function getTaxes($id_tax_rules_group, $id_country, $id_state, $id_county)
    {
    }

    public function update($null_values = false)
    {
    }

    public function isUsed()
    {
    }

    /**
     * Save the object with the field deleted to true
     *
     * @return bool
     */
    public function historize(TaxRulesGroup $tax_rules_group)
    {
    }

    public function getIdTaxRuleGroupFromHistorizedId($id_tax_rule)
    {
    }

    public function delete()
    {
    }

    public function hasUniqueTaxRuleForCountry($id_country, $id_state, $id_tax_rule = false)
    {
    }
}
