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
 * Create a collection of ObjectModel objects
 *
 * @since 1.5.0
 */
class Collection implements Iterator, ArrayAccess, Countable
{

    const LEFT_JOIN = 1;
    const INNER_JOIN = 2;
    const LEFT_OUTER_JOIN = 3;
    const LANG_ALIAS = 'l';
    /**
     * @var string Object class name
     */
    protected $classname;
    /**
     * @var int
     */
    protected $id_lang;
    /**
     * @var array Object definition
     */
    protected $definition = array();
    /**
     * @var DbQuery
     */
    protected $query;
    /**
     * @var array Collection of objects in an array
     */
    protected $results = array();
    /**
     * @var bool Is current collection already hydrated
     */
    protected $is_hydrated = false;
    /**
     * @var int Collection iterator
     */
    protected $iterator = 0;
    /**
     * @var int Total of elements for iteration
     */
    protected $total;
    protected $fields = array();
    protected $alias = array();
    protected $alias_iterator = 0;
    protected $join_list = array();
    protected $association_definition = array();

    /**
     * @param string $classname
     * @param int $id_lang
     */
    public function __construct($classname, $id_lang = null)
    {
    }

    /**
     * Add WHERE restriction on query using real SQL syntax
     *
     * @param string $sql
     * @return Collection
     */
    public function sqlWhere($sql)
    {
    }

    /**
     * Join current entity to an associated entity
     *
     * @param $association Association name
     * @param string $on
     * @param int $type
     * @return Collection
     */
    public function join($association, $on = '', $type = null)
    {
    }

    /**
     * Add HAVING restriction on query
     *
     * @param string $field Field name
     * @param string $operator List of operators : =, !=, <>, <, <=, >, >=, like, notlike, regexp, notregexp
     * @param mixed $value
     * @return Collection
     */
    public function having($field, $operator, $value)
    {
    }

    /**
     * Add WHERE restriction on query
     *
     * @param string $field Field name
     * @param string $operator List of operators : =, !=, <>, <, <=, >, >=, like, notlike, regexp, notregexp
     * @param mixed $value
     * @param string $type where|having
     * @return Collection
     */
    public function where($field, $operator, $value, $method = 'where')
    {
    }

    /**
     * Add HAVING restriction on query using real SQL syntax
     *
     * @param string $sql
     * @return Collection
     */
    public function sqlHaving($sql)
    {
    }

    /**
     * Add ORDER BY restriction on query
     *
     * @param string $field Field name
     * @param string $order asc|desc
     * @return Collection
     */
    public function orderBy($field, $order = 'asc')
    {
    }

    /**
     * Add ORDER BY restriction on query using real SQL syntax
     *
     * @param string $sql
     * @return Collection
     */
    public function sqlOrderBy($sql)
    {
    }

    /**
     * Add GROUP BY restriction on query
     *
     * @param string $field Field name
     * @return Collection
     */
    public function groupBy($field)
    {
    }

    /**
     * Add GROUP BY restriction on query using real SQL syntax
     *
     * @param string $sql
     * @return Collection
     */
    public function sqlGroupBy($sql)
    {
    }

    /**
     * Retrieve the first result
     *
     * @return ObjectModel
     */
    public function getFirst()
    {
    }

    /**
     * Launch sql query to create collection of objects
     *
     * @param bool $display_query If true, query will be displayed (for debug purpose)
     * @return Collection
     */
    public function getAll($display_query = false)
    {
    }

    /**
     * Get results array
     *
     * @return array
     */
    public function getResults()
    {
    }

    /**
     * This method is called when a foreach begin
     *
     * @see Iterator::rewind()
     */
    public function rewind()
    {
    }

    /**
     * Get current result
     *
     * @see Iterator::current()
     * @return ObjectModel
     */
    public function current()
    {
    }

    /**
     * Check if there is a current result
     *
     * @see Iterator::valid()
     * @return bool
     */
    public function valid()
    {
    }

    /**
     * Get current result index
     *
     * @see Iterator::key()
     * @return int
     */
    public function key()
    {
    }

    /**
     * Go to next result
     *
     * @see Iterator::next()
     */
    public function next()
    {
    }

    /**
     * Get total of results
     *
     * @see Countable::count()
     * @return int
     */
    public function count()
    {
    }

    /**
     * Check if a result exist
     *
     * @see ArrayAccess::offsetExists()
     * @param $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
    }

    /**
     * Get a result by offset
     *
     * @see ArrayAccess::offsetGet()
     * @param $offset
     * @return ObjectModel
     */
    public function offsetGet($offset)
    {
    }

    /**
     * Add an element in the collection
     *
     * @see ArrayAccess::offsetSet()
     * @param $offset
     * @param $value
     */
    public function offsetSet($offset, $value)
    {
    }

    /**
     * Delete an element from the collection
     *
     * @see ArrayAccess::offsetUnset()
     * @param $offset
     */
    public function offsetUnset($offset)
    {
    }

    /**
     * Parse all fields with {field} syntax in a string
     *
     * @param string $str
     * @return string
     */
    protected function parseFields($str)
    {
    }

    /**
     * Replace a field with its SQL version (E.g. manufacturer.name with a2.name)
     *
     * @param string $field Field name
     * @return string
     */
    protected function parseField($field)
    {
    }

    /**
     * Obtain some information on a field (alias, name, type, etc.)
     *
     * @param string $field Field name
     * @return array
     */
    protected function getFieldInfo($field)
    {
    }

    /**
     * Get definition of an association
     *
     * @param string $association
     * @return array
     */
    protected function getDefinition($association)
    {
    }

    /**
     * Generate uniq alias from association name
     *
     * @param string $association Use empty association for alias on current table
     * @return string
     */
    protected function generateAlias($association = '')
    {
    }

    /**
     * Format a value with the type of the given field
     *
     * @param mixed $value
     * @param string $field Field name
     * @return mixed
     */
    protected function formatValue($value, $field)
    {
    }
}
