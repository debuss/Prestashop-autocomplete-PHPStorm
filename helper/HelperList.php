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
class HelperList extends Helper
{

    /** @var array $cache_lang use to cache texts in current language */
    public static $cache_lang = array();
    /** @var integer Number of results in list */
    public $listTotal = 0;
    /** @var string ORDER BY clause determined by field/arrows in list header */
    public $orderBy;
    /** @var string Default ORDER BY clause when $orderBy is not defined */
    public $_defaultOrderBy = false;
    /** @var array : list of vars for button delete */
    public $tpl_delete_link_vars = array();
    /** @var string Order way (ASC, DESC) determined by arrows in list header */
    public $orderWay;
    public $identifier;
    public $is_cms = false;
    public $position_identifier;
    /** @var boolean Content line is clickable if true */
    public $no_link = false;
    /** @var array list of required actions for each list row */
    public $actions = array();
    /** @var array list of row ids associated with a given action for witch this action have to not be available */
    public $list_skip_actions = array();
    public $bulk_actions = false;
    public $specificConfirmDelete = null;
    public $colorOnBackground;
    /** @var bool If true, activates color on hover */
    public $row_hover = true;
    /** @var if not null, a title will be added on that list */
    public $title = null;
    /** @var boolean ask for simple header : no filters, no paginations and no sorting */
    public $simple_header = false;
    public $ajax_params = array();
    /** @var array Cache for query results */
    protected $_list = array();
    /** @var array WHERE clause determined by filter fields */
    protected $_filter;
    /** @var array Number of results in list per page (used in select field) */
    protected $_pagination = array(20, 50, 100, 300);
    protected $deleted = 0;
    /**
     * @var string Customize list display
     * align  : determine value alignment
     * prefix : displayed before value
     * suffix : displayed after value
     * image  : object image
     * icon   : icon determined by values
     * active : allow to toggle status
     */
    protected $fields_list;
    protected $header_tpl = 'list_header.tpl';
    protected $content_tpl = 'list_content.tpl';
    protected $footer_tpl = 'list_footer.tpl';

    public function __construct()
    {
    }

    /**
     * Return an html list given the data to fill it up
     *
     * @param array $list entries to display (rows)
     * @param array $fields_display fields (cols)
     * @return string html
     */
    public function generateList($list, $fields_display)
    {
    }

    /**
     * Display list header (filtering, pagination and column names)
     */
    public function displayListHeader()
    {
    }

    public function displayListContent()
    {
    }

    /**
     * Fetch the template for action enable
     *
     * @param string $token
     * @param int $id
     * @param int $value state enabled or not
     * @param string $active status
     * @param int $id_category
     * @param int $id_product
     * @return string
     */
    public function displayEnableLink($token, $id, $value, $active, $id_category = null, $id_product = null)
    {
    }

    /**
     * Close list table and submit button
     */
    public function displayListFooter()
    {
    }

    /**
     * Display duplicate action link
     */
    public function displayDuplicateLink($token = null, $id, $name = null)
    {
    }

    /**
     * Display action show details of a table row
     * This action need an ajax request with a return like this:
     *   {
     *     use_parent_structure: true // If false, data need to be an html
     *     data:
     *       [
     *         {field_name: 'value'}
     *       ],
     *     fields_display: // attribute $fields_list of the admin controller
     *   }
     * or somethins like this:
     *   {
     *     use_parent_structure: false // If false, data need to be an html
     *     data:
     *       '<p>My html content</p>',
     *     fields_display: // attribute $fields_list of the admin controller
     *   }
     */
    public function displayDetailsLink($token = null, $id, $name = null)
    {
    }

    /**
     * Display view action link
     */
    public function displayViewLink($token = null, $id, $name = null)
    {
    }

    /**
     * Display edit action link
     */
    public function displayEditLink($token = null, $id, $name = null)
    {
    }

    /**
     * Display delete action link
     */
    public function displayDeleteLink($token = null, $id, $name = null)
    {
    }

    /**
     * Display delete action link
     */
    public function displayDefaultLink($token = null, $id, $name = null)
    {
    }
}
