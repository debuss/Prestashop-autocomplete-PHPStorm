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

class Chart
{

    protected static $poolId = 0;
    protected $width = 600;
    protected $height = 300;
    // Time mode
    protected $timeMode = false;
    protected $from;
    protected $to;
    protected $format;
    protected $granularity;
    protected $curves = array();

    /** @prototype void public function __construct() */
    public function __construct()
    {
    }

    /** @prototype void public static function init(void) */
    public static function init()
    {
    }

    /** @prototype void public function setSize(int $width, int $height) */
    public function setSize($width, $height)
    {
    }

    /** @prototype void public function setTimeMode($from, $to, $granularity) */
    public function setTimeMode($from, $to, $granularity)
    {
    }

    public function getCurve($i)
    {
    }

    /** @prototype void public function display() */
    public function display()
    {
    }

    public function fetch()
    {
    }
}

class Curve
{

    protected $values = array();
    protected $label;
    protected $type;

    public function getValues($time_mode = false)
    {
    }

    /** @prototype void public function setValues($values) */
    public function setValues($values)
    {
    }

    /** @prototype void public function setPoint(float $x, float $y) */
    public function setPoint($x, $y)
    {
    }

    public function setLabel($label)
    {
    }

    public function setType($type)
    {
    }

    public function getPoint($x)
    {
    }
}
