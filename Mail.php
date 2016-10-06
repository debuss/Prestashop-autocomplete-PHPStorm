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

include_once(_PS_SWIFT_DIR_.'Swift.php');
include_once(_PS_SWIFT_DIR_.'Swift/Connection/SMTP.php');
include_once(_PS_SWIFT_DIR_.'Swift/Connection/NativeMail.php');
include_once(_PS_SWIFT_DIR_.'Swift/Plugin/Decorator.php');

class Mail
{

    const TYPE_HTML = 1;
    const TYPE_TEXT = 2;
    const TYPE_BOTH = 3;

    /**
     * Send Email
     *
     * @param int $id_lang Language of the email (to translate the template)
     * @param string $template Template: the name of template not be a var but a string !
     * @param string $subject
     * @param string $template_vars
     * @param string $to
     * @param string $to_name
     * @param string $from
     * @param string $from_name
     * @param array $file_attachment Array with three parameters (content, mime and name). You can use an array of array to attach multiple files
     * @param bool $modeSMTP
     * @param string $template_path
     * @param bool $die
     */
    public static function Send($id_lang, $template, $subject, $template_vars, $to,
                                $to_name = null, $from = null, $from_name = null, $file_attachment = null, $mode_smtp = null, $template_path = _PS_MAIL_DIR_, $die = false, $id_shop = null)
    {
    }

    public static function sendMailTest($smtpChecked, $smtpServer, $content, $subject, $type, $to, $from, $smtpLogin, $smtpPassword, $smtpPort = 25, $smtpEncryption)
    {
    }

    /**
     * This method is used to get the translation for email Object.
     * For an object is forbidden to use htmlentities,
     * we have to return a sentence with accents.
     *
     * @param string $string raw sentence (write directly in file)
     */
    public static function l($string, $id_lang = null, Context $context = null)
    {
    }

    /* Rewrite of Swift_Message::generateId() without getmypid() */

    protected static function generateId($idstring = null)
    {
    }
}
