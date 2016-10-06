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

abstract class ModuleGrid extends Module
{

    protected $_employee;
    /** @var string array graph data */
    protected $_values = array();
    /** @var integer total number of values * */
    protected $_totalCount = 0;
    /**@var string graph titles */
    protected $_title;
    /**@var integer start */
    protected $_start;
    /**@var integer limit */
    protected $_limit;
    /**@var string column name on which to sort */
    protected $_sort = null;
    /**@var string sort direction DESC/ASC */
    protected $_direction = null;
    /** @var ModuleGridEngine grid engine */
    protected $_render;

    public function setEmployee($id_employee)
    {
    }

    public function create($render, $type, $width, $height, $start, $limit, $sort, $dir)
    {
    }

    public function render()
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

    public function setLang($id_lang)
    {
    }

    abstract protected function getData();

    protected function csvExport($datas)
    {
    }

    protected function _displayCsv()
    {
    }
}

