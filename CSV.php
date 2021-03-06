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
 * Simple class to output CSV data
 * Uses CollectionCore
 *
 * @since 1.5
 */
class CSV
{

    public $filename;
    public $collection;
    public $delimiter;

    /**
     * Loads objects, filename and optionnaly a delimiter.
     *
     * @param Collection $collection collection of objects / array (of non-objects)
     * @param string $filename : used later to save the file
     * @param string $delimiter Optional : delimiter used
     */
    public function __construct($collection, $filename, $delimiter = ';')
    {
    }

    /**
     * Escapes data
     *
     * @param string $data
     * @return string $data
     */
    public static function wrap($data)
    {
    }

    /**
     * Main function
     * Adds headers
     * Outputs
     */
    public function export()
    {
    }

    /**
     * Adds headers
     */
    public function headers()
    {
    }

    /**
     * Wraps data and echoes
     * Uses defined delimiter
     */
    public function output($data)
    {
    }
}

