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

/**
 * @deprecated since 1.5
 */
class County extends ObjectModel
{

    const USE_BOTH_TAX = 0;
    const USE_COUNTY_TAX = 1;
    const USE_STATE_TAX = 2;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'county',
        'primary' => 'id_county',
        'fields' => array(
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true, 'size' => 64),
            'id_state' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
        ),
    );
    protected static $_cache_get_counties = array();
    protected static $_cache_county_zipcode = array();
    public $id;
    public $name;
    public $id_state;
    public $active;
    protected $webserviceParameters = array(
        'fields' => array(
            'id_state' => array('xlink_resource' => 'states'),
        ),
    );

    /**
     * @deprecated since 1.5
     */
    public static function getCounties($id_state)
    {
    }

    /**
     * @deprecated since 1.5
     */
    public static function getIdCountyByZipCode($id_state, $zip_code)
    {
    }

    /**
     * @deprecated since 1.5
     */
    public static function deleteZipCodeByIdCounty($id_county)
    {
    }

    /**
     * @deprecated since 1.5
     */
    public static function getIdCountyByNameAndIdState($name, $id_state)
    {
    }

    public function delete()
    {
    }

    /**
     * @deprecated since 1.5
     */
    public function getZipCodes()
    {
    }

    /**
     * @deprecated since 1.5
     */
    public function addZipCodes($zip_codes)
    {
    }

    /**
     * @deprecated since 1.5
     */
    public function removeZipCodes($zip_codes)
    {
    }

    /**
     * @deprecated since 1.5
     */
    public function breakDownZipCode($zip_codes)
    {
    }

    /**
     * @deprecated since 1.5
     */
    public function isZipCodeRangePresent($zip_codes)
    {
    }

    /**
     * @deprecated since 1.5
     */
    public function isZipCodePresent($zip_code)
    {
    }
}

