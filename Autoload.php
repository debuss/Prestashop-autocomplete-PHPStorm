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
class Autoload
{

    /**
     * File where classes index is stored
     */
    const INDEX_FILE = 'cache/class_index.php';
    /**
     * @var Autoload
     */
    protected static $instance;
    /**
     * @var array array('classname' => 'path/to/override', 'classnamecore' => 'path/to/class/core')
     */
    public $index = array();
    /**
     * @var string Root directory
     */
    protected $root_dir;

    protected function __construct()
    {
    }

    /**
     * Get instance of autoload (singleton)
     *
     * @return Autoload
     */
    public static function getInstance()
    {
    }

    /**
     * Retrieve informations about a class in classes index and load it
     *
     * @param string $classname
     */
    public function load($classname)
    {
    }

    /**
     * Generate classes index
     */
    public function generateIndex()
    {
    }

    public function getClassPath($classname)
    {
    }

    /**
     * Retrieve recursively all classes in a directory and its subdirectories
     *
     * @param string $path Relativ path from root to the directory
     * @return array
     */
    protected function getClassesFromDir($path)
    {
    }
}

