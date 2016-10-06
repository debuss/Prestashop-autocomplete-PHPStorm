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

class Notification
{

    public $types;

    public function __construct()
    {
    }

    /**
     * getLastElementsIdsByType return all the element ids to show (order, customer registration, and customer message)
     * Get all the element ids
     *
     * @param string $type contains the field name of the Employee table
     * @param integer $id_last_element contains the id of the last seen element
     * @return array containing the notifications
     */
    public static function getLastElementsIdsByType($type, $id_last_element)
    {
    }

    /**
     * getLastElements return all the notifications (new order, new customer registration, and new customer message)
     * Get all the notifications
     *
     * @return array containing the notifications
     */
    public function getLastElements()
    {
    }

    public function installDb()
    {
    }

    /**
     * updateEmployeeLastElement return 0 if the field doesn't exists in Employee table.
     * Updates the last seen element by the employee
     *
     * @param string $type contains the field name of the Employee table
     * @return boolean if type exists or not
     */
    public function updateEmployeeLastElement($type)
    {
    }
}
