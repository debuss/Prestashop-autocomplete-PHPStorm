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
 * @since 1.5
 */
abstract class HTMLTemplate
{

    public $title;
    public $date;
    public $available_in_your_account = true;
    public $smarty;
    public $shop;

    /**
     * Translatation method
     *
     * @param string $string
     * @return string translated text
     */
    protected static function l($string)
    {
    }

    /**
     * Returns the template's HTML header
     *
     * @return string HTML header
     */
    public function getHeader()
    {
    }

    /**
     * Returns the template's HTML footer
     *
     * @return string HTML footer
     */
    public function getFooter()
    {
    }

    /**
     * Assign hook data
     *
     * @param $object generally the object used in the constructor
     */
    public function assignHookData($object)
    {
    }

    /**
     * Returns the template's HTML content
     *
     * @return string HTML content
     */
    abstract public function getContent();

    /**
     * Returns the template filename
     *
     * @return string filename
     */
    abstract public function getFilename();

    /**
     * Returns the template filename when using bulk rendering
     *
     * @return string filename
     */
    abstract public function getBulkFilename();

    /**
     * Returns the invoice logo
     */
    protected function getLogo()
    {
    }

    /**
     * If the template is not present in the theme directory, it will return the default template
     * in _PS_PDF_DIR_ directory
     *
     * @param $template_name
     * @return string
     */
    protected function getTemplate($template_name)
    {
    }

    /**
     * Returns the shop address
     *
     * @return string
     */
    protected function getShopAddress()
    {
    }
}

