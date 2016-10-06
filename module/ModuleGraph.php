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

abstract class ModuleGraph extends Module
{

    protected $_employee;
    /** @var integer array graph data */
    protected $_values = array();
    /** @var string array graph legends (X axis) */
    protected $_legend = array();
    /**@var string graph titles */
    protected $_titles = array('main' => null, 'x' => null, 'y' => null);
    /** @var ModuleGraphEngine graph engine */
    protected $_render;

    public static function getDateBetween($employee = null)
    {
    }

    protected static function getEmployee($employee = null, Context $context = null)
    {
    }

    public function create($render, $type, $width, $height, $layers)
    {
    }

    public function draw()
    {
    }

    public function engine($params)
    {
    }

    public function getDate()
    {
    }

    public function getLang()
    {
    }

    public function setEmployee($id_employee)
    {
    }

    public function setLang($id_lang)
    {
    }

    /**
     * @todo Set this method as abstracted ? Quid of module compatibility.
     */
    public function setOption($option, $layers = 1)
    {
    }

    protected function setDateGraph($layers, $legend = false)
    {
    }

    protected function csvExport($datas)
    {
    }
}


