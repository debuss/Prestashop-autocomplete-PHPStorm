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

class WebserviceException extends Exception
{

    const SIMPLE = 0;
    const DID_YOU_MEAN = 1;
    protected $status;
    protected $wrong_value;
    protected $available_values;
    protected $type;

    public function __construct($message, $code)
    {
    }

    public function getType()
    {
    }

    public function setType($type)
    {
    }

    public function getStatus()
    {
    }

    public function setStatus($status)
    {
    }

    public function getWrongValue()
    {
    }

    public function setDidYouMean($wrong_value, $available_values)
    {
    }

    public function getAvailableValues()
    {
    }
}