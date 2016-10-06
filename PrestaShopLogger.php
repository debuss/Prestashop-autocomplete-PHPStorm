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

class    PrestaShopLogger extends ObjectModel
{

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'log',
        'primary' => 'id_log',
        'fields' => array(
            'severity' => array('type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => true),
            'error_code' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'message' => array('type' => self::TYPE_STRING, 'validate' => 'isString', 'required' => true),
            'object_id' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'id_employee' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'object_type' => array('type' => self::TYPE_STRING, 'validate' => 'isName'),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
        ),
    );
    protected static $is_present = array();
    /** @var int Log id */
    public $id_log;
    /** @var int Log severity */
    public $severity;
    /** @var int Error code */
    public $error_code;
    /** @var string Message */
    public $message;
    /** @var string Object type (eg. Order, Customer...) */
    public $object_type;
    /** @var int Object ID */
    public $object_id;
    /** @var int Object ID */
    public $id_employee;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;

    /**
     * add a log item to the database and send a mail if configured for this $severity
     *
     * @param string $message the log message
     * @param int $severity
     * @param int $error_code
     * @param string $object_type
     * @param int $object_id
     * @param bool $allow_duplicate if set to true, can log several time the same information (not recommended)
     * @return bool true if succeed
     */
    public static function addLog($message, $severity = 1, $error_code = null, $object_type = null, $object_id = null, $allow_duplicate = false, $id_employee = null)
    {
    }

    /**
     * Send e-mail to the shop owner only if the minimal severity level has been reached
     *
     * @param Logger
     * @param PrestaShopLogger $log
     */
    public static function sendByMail($log)
    {
    }

    public static function eraseAllLogs()
    {
    }

    /**
     * this function md5($this->message.$this->severity.$this->error_code.$this->object_type.$this->object_id)
     *
     * @return string hash
     */
    public function getHash()
    {
    }

    /**
     * check if this log message already exists in database.
     *
     * @return true if exists
     */
    protected function _isPresent()
    {
    }
}
