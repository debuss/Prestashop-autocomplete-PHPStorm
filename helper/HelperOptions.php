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
 * Use this helper to generate preferences forms, with values stored in the configuration table
 */
class HelperOptions extends Helper
{

    public $required = false;

    public function __construct()
    {
    }

    /**
     * Generate a form for options
     *
     * @param array options
     * @return string html
     */
    public function generateOptions($option_list)
    {
    }

    public function getOptionValue($key, $field)
    {
    }

    /**
     * Type = image
     */
    public function displayOptionTypeImage($key, $field, $value)
    {
    }

    /**
     * Type = price
     */
    public function displayOptionTypePrice($key, $field, $value)
    {
    }

    /**
     * Type = disabled
     */
    public function displayOptionTypeDisabled($key, $field, $value)
    {
    }
}
