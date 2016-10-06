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
class HelperForm extends Helper
{

    public $id;
    public $first_call = true;
    /** @var array values ​​of form fields */
    public $fields_value = array();
    public $table;
    public $name_controller = '';
    /** @var string if not null, a title will be added on that list */
    public $title = null;
    /** @var string Used to override default 'submitAdd' parameter in form action attribute */
    public $submit_action;
    public $token;
    public $languages = null;
    public $default_form_language = null;
    public $allow_employee_form_lang = null;
    /** @var array of forms fields */
    protected $fields_form = array();

    public function __construct()
    {
    }

    public function generateForm($fields_form)
    {
    }

    public function generate()
    {
    }

    /**
     * Render an area to determinate shop association
     *
     * @return string
     */
    public function renderAssoShop($disable_shared = false)
    {
    }

    /**
     * Return true if there are required fields
     */
    public function getFieldsRequired()
    {
    }
}
