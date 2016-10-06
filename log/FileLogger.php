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

class FileLogger extends AbstractLogger
{

    protected $filename = '';

    /**
     * Log the message
     *
     * @param string message
     * @param level
     */
    public function getFilename()
    {
    }

    /**
     * Check if the specified filename is writable and set the filename
     *
     * @param string $filename
     */
    public function setFilename($filename)
    {
    }

    /**
     * Write the message in the log file
     *
     * @param string message
     * @param level
     */
    protected function logMessage($message, $level)
    {
    }
}
