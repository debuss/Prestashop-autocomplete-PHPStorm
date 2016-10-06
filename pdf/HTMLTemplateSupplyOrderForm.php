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
 * @since 1.5
 */
class HTMLTemplateSupplyOrderForm extends HTMLTemplate
{

    public $supply_order;
    public $warehouse;
    public $address_warehouse;
    public $address_supplier;
    public $context;

    public function __construct(SupplyOrder $supply_order, $smarty)
    {
    }

    /**
     * @see HTMLTemplate::getContent()
     */
    public function getContent()
    {
    }

    /**
     * @see HTMLTemplate::getBulkFilename()
     */
    public function getBulkFilename()
    {
    }

    /**
     * @see HTMLTemplate::getFileName()
     */
    public function getFilename()
    {
    }

    /**
     * @see HTMLTemplate::getHeader()
     */
    public function getHeader()
    {
    }

    /**
     * @see HTMLTemplate::getFooter()
     */
    public function getFooter()
    {
    }

    /**
     * Rounds values of a SupplyOrderDetail object
     *
     * @param array $collection
     */
    protected function roundSupplyOrderDetails(&$collection)
    {
    }

    /**
     * Rounds values of a SupplyOrder object
     *
     * @param SupplyOrder $supply_order
     */
    protected function roundSupplyOrder(SupplyOrder &$supply_order)
    {
    }

    protected function getTaxOrderSummary()
    {
    }
}

