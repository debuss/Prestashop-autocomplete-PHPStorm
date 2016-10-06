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

require_once(_PS_TOOL_DIR_.'tar/Archive_Tar.php');

class LocalizationPack
{

    public $name;
    public $version;
    protected $iso_code_lang;
    protected $iso_currency;
    protected $_errors = array();

    public function loadLocalisationPack($file, $selection, $install_mode = false)
    {
    }

    public function getErrors()
    {
    }

    protected function _installStates($xml)
    {
    }

    protected function _installTaxes($xml)
    {
    }

    protected function updateDefaultGroupDisplayMethod($xml)
    {
    }

    protected function _installCurrencies($xml, $install_mode = false)
    {
    }

    protected function _installUnits($xml)
    {
    }

    /**
     * Update a configuration variable from a localization file
     * <configuration>
     *    <configuration name="variable_name" value="variable_value" />
     */
    protected function installConfiguration($xml)
    {
    }

    /**
     * Install/Uninstall a module from a localization file
     * <modules>
     *    <module name="module_name" [install="0|1"] />
     */
    protected function installModules($xml)
    {
    }

    protected function _installLanguages($xml, $install_mode = false)
    {
    }
}

