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

require_once(_PS_TOOL_DIR_.'tcpdf/config/lang/eng.php');
require_once(_PS_TOOL_DIR_.'tcpdf/tcpdf.php');

/**
 * @since 1.5
 */
class PDFGenerator extends TCPDF
{

    const DEFAULT_FONT = 'helvetica';
    public $header;
    public $footer;
    public $content;
    public $font;
    public $font_by_lang = array(
        'ja' => 'cid0jp',
        'bg' => 'freeserif',
        'ru' => 'freeserif',
        'uk' => 'freeserif',
        'mk' => 'freeserif',
        'el' => 'freeserif',
        'vn' => 'dejavusans',
        'pl' => 'dejavusans',
        'ar' => 'dejavusans',
        'fa' => 'dejavusans',
        'ur' => 'dejavusans',
        'az' => 'dejavusans',
        'ca' => 'dejavusans',
        'gl' => 'dejavusans',
        'hr' => 'dejavusans',
        'sr' => 'dejavusans',
        'si' => 'dejavusans',
        'cs' => 'dejavusans',
        'sk' => 'dejavusans',
        'ka' => 'dejavusans',
        'he' => 'dejavusans',
        'lo' => 'dejavusans',
        'lv' => 'dejavusans',
        'tr' => 'dejavusans',
        'ko' => 'cid0kr',
        'zh' => 'cid0cs',
        'tw' => 'cid0cs',
        'th' => 'freeserif'
    );

    public function __construct($use_cache = false)
    {
    }

    /**
     * set the PDF encoding
     *
     * @param string $encoding
     */
    public function setEncoding($encoding)
    {
    }

    /**
     * set the PDF header
     *
     * @param string $header HTML
     */
    public function createHeader($header)
    {
    }

    /**
     * set the PDF footer
     *
     * @param string $footer HTML
     */
    public function createFooter($footer)
    {
    }

    /**
     * create the PDF content
     *
     * @param string $content HTML
     */
    public function createContent($content)
    {
    }

    /**
     * Change the font
     *
     * @param string $iso_lang
     */
    public function setFontForLang($iso_lang)
    {
    }

    /**
     * @see TCPDF::Header()
     */
    public function Header()
    {
    }

    /**
     * @see TCPDF::Footer()
     */
    public function Footer()
    {
    }

    /**
     * Render the pdf file
     *
     * @param string $filename
     * @param  $display :  true:display to user, false:save, 'I','D','S' as fpdf display
     * @throws PrestaShopException
     */
    public function render($filename, $display = true)
    {
    }

    /**
     * Write a PDF page
     */
    public function writePage()
    {
    }

    /**
     * Override of TCPDF::getRandomSeed() - getmypid() is blocked on several hosting
     */
    protected function getRandomSeed($seed = '')
    {
    }
}
