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
 * SQL query builder
 *
 * @since 1.5.0
 */
class DbQuery
{

    /**
     * @var array list of data to build the query
     */
    protected $query = array(
        'select' => array(),
        'from' => '',
        'join' => array(),
        'where' => array(),
        'group' => array(),
        'having' => array(),
        'order' => array(),
        'limit' => array('offset' => 0, 'limit' => 0),
    );

    /**
     * Add fields in query selection
     *
     * @param string $fields List of fields to concat to other fields
     * @return DbQuery
     */
    public function select($fields)
    {
    }

    /**
     * Set table for FROM clause
     *
     * @param string $table Table name
     * @return DbQuery
     */
    public function from($table, $alias = null)
    {
    }

    /**
     * Add LEFT JOIN clause
     *
     * @param string $table Table name (without prefix)
     * @param string $alias Table alias
     * @param string $on ON clause
     */
    public function leftJoin($table, $alias = null, $on = null)
    {
    }

    /**
     * Add JOIN clause
     *    E.g. $this->join('RIGHT JOIN '._DB_PREFIX_.'product p ON ...');
     *
     * @param string $join Complete string
     * @return DbQuery
     */
    public function join($join)
    {
    }

    /**
     * Add INNER JOIN clause
     *    E.g. $this->innerJoin('product p ON ...')
     *
     * @param string $table Table name (without prefix)
     * @param string $alias Table alias
     * @param string $on ON clause
     */
    public function innerJoin($table, $alias = null, $on = null)
    {
    }

    /**
     * Add LEFT OUTER JOIN clause
     *
     * @param string $table Table name (without prefix)
     * @param string $alias Table alias
     * @param string $on ON clause
     */
    public function leftOuterJoin($table, $alias = null, $on = null)
    {
    }

    /**
     * Add NATURAL JOIN clause
     *
     * @param string $table Table name (without prefix)
     * @param string $alias Table alias
     */
    public function naturalJoin($table, $alias = null)
    {
    }

    /**
     * Add a restriction in WHERE clause (each restriction will be separated by AND statement)
     *
     * @param string $restriction
     * @return DbQuery
     */
    public function where($restriction)
    {
    }

    /**
     * Add a restriction in HAVING clause (each restriction will be separated by AND statement)
     *
     * @param string $restriction
     * @return DbQuery
     */
    public function having($restriction)
    {
    }

    /**
     * Add an ORDER B restriction
     *
     * @param string $fields List of fields to sort. E.g. $this->order('myField, b.mySecondField DESC')
     * @return DbQuery
     */
    public function orderBy($fields)
    {
    }

    /**
     * Add a GROUP BY restriction
     *
     * @param string $fields List of fields to sort. E.g. $this->group('myField, b.mySecondField DESC')
     * @return DbQuery
     */
    public function groupBy($fields)
    {
    }

    /**
     * Limit results in query
     *
     * @param string $fields List of fields to sort. E.g. $this->order('myField, b.mySecondField DESC')
     * @return DbQuery
     */
    public function limit($limit, $offset = 0)
    {
    }

    public function __toString()
    {
    }

    /**
     * Generate and get the query
     *
     * @return string
     */
    public function build()
    {
    }
}

