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

class OrderHistory extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'order_history',
        'primary' => 'id_order_history',
        'fields' => array(
            'id_order' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_order_state' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
            'id_employee' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
        ),
    );
    /** @var integer Order id */
    public $id_order;
    /** @var integer Order state id */
    public $id_order_state;
    /** @var integer Employee id for this history entry */
    public $id_employee;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    /**
     * @see  ObjectModel::$webserviceParameters
     */
    protected $webserviceParameters = array(
        'objectsNodeName' => 'order_histories',
        'fields' => array(
            'id_order_state' => array('required' => true, 'xlink_resource' => 'order_states'),
            'id_order' => array('xlink_resource' => 'orders'),
        ),
    );

    /**
     * Returns the last order state
     *
     * @param int $id_order
     * @return OrderState|bool
     * @deprecated 1.5.0.4
     * @see Order->current_state
     */
    public static function getLastOrderState($id_order)
    {
    }

    /**
     * Sets the new state of the given order
     *
     * @param int $new_order_state
     * @param int /object $id_order
     * @param bool $use_existing_payment
     */
    public function changeIdOrderState($new_order_state, $id_order, $use_existing_payment = false)
    {
    }

    /**
     * @return int
     */
    public function isValidated()
    {
    }

    /**
     * @param bool $autodate Optional
     * @param array $template_vars Optional
     * @param Context $context Optional
     * @return bool
     */
    public function addWithemail($autodate = true, $template_vars = false, Context $context = null)
    {
    }

    public function add($autodate = true, $null_values = false)
    {
    }
}
