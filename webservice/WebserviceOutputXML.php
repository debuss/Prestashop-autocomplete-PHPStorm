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

class WebserviceOutputXMLCore implements WebserviceOutputInterface
{

    public $docUrl = '';
    public $languages = array();
    protected $wsUrl;
    protected $schemaToDisplay;

    public function __construct($languages = array())
    {
    }

    public function getSchemaToDisplay()
    {
    }

    public function setSchemaToDisplay($schema)
    {
    }

    public function getContentType()
    {
    }

    public function setLanguages($languages)
    {
    }

    public function renderErrorsHeader()
    {
    }

    public function renderErrorsFooter()
    {
    }

    public function renderErrors($message, $code = null)
    {
    }

    public function renderField($field)
    {
    }

    public function getWsUrl()
    {
    }

    public function setWsUrl($url)
    {
    }

    public function renderNodeHeader($node_name, $params, $more_attr = null, $has_child = true)
    {
    }

    public function getNodeName($params)
    {
    }

    public function renderNodeFooter($node_name, $params)
    {
    }

    public function overrideContent($content)
    {
    }

    public function renderAssociationWrapperHeader()
    {
    }

    public function renderAssociationWrapperFooter()
    {
    }

    public function renderAssociationHeader($obj, $params, $assoc_name, $closed_tags = false)
    {
    }

    public function renderAssociationFooter($obj, $params, $assoc_name)
    {
    }
}