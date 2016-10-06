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
 * @since 1.5.0
 */
class PrestaShopException extends Exception
{

    /**
     * This method acts like an error handler, if dev mode is on, display the error else use a better silent way
     */
    public function displayMessage()
    {
    }

    /**
     * Return the content of the Exception
     *
     * @return string content of the exception
     */
    protected function getExentedMessage($html = true)
    {
    }

    /**
     * Display lines around current line
     *
     * @param string $file
     * @param int $line
     * @param string $id
     */
    protected function displayFileDebug($file, $line, $id = null)
    {
    }

    /**
     * Display arguments list of traced function
     *
     * @param array $args List of arguments
     * @param string $id ID of argument
     */
    protected function displayArgsDebug($args, $id)
    {
    }

    /**
     * Log the error on the disk
     */
    protected function logError()
    {
    }
}
