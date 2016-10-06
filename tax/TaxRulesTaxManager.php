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
 * @since 1.5.0.1
 */
class TaxRulesTaxManagerCore implements TaxManagerInterface
{

    public $address;
    public $type;
    public $tax_calculator;
    /**
     * @var Core_Business_ConfigurationInterface
     */
    private $configurationManager;

    /**
     * @param Address $address
     * @param mixed $type An additional parameter for the tax manager (ex: tax rules id for TaxRuleTaxManager)
     */
    public function __construct(Address $address, $type, Core_Business_ConfigurationInterface $configurationManager = null)
    {
    }

    /**
     * Returns true if this tax manager is available for this address
     *
     * @return bool
     */
    public static function isAvailableForThisAddress(Address $address)
    {
    }

    /**
     * Return the tax calculator associated to this address
     *
     * @return TaxCalculator
     */
    public function getTaxCalculator()
    {
    }
}
