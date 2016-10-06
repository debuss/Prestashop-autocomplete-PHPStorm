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

class SmartyCustom extends Smarty
{

    public function __construct()
    {
    }

    /**
     * Delete compiled template file (lazy delete if resource_name is not specified)
     *
     * @param  string $resource_name template name
     * @param  string $compile_id compile id
     * @param  int $exp_time expiration time
     * @return int number of template files deleted
     */
    public function clearCompiledTemplate($resource_name = null, $compile_id = null, $exp_time = null)
    {
    }

    /**
     * Mark all template files to be regenerated
     *
     * @param  int $exp_time expiration time
     * @param  string $type resource type
     * @return int number of cache files which needs to be updated
     */
    public function clearAllCache($exp_time = null, $type = null)
    {
    }

    /**
     * Delete the current template from the lazy cache or the whole cache if no template name is given
     *
     * @param  string $template template name
     * @param  string $cache_id cache id
     * @param  string $compile_id compile id
     * @return bool
     */
    public function delete_from_lazy_cache($template, $cache_id, $compile_id)
    {
    }

    /**
     * Mark file to be regenerated for a specific template
     *
     * @param  string $template_name template name
     * @param  string $cache_id cache id
     * @param  string $compile_id compile id
     * @param  int $exp_time expiration time
     * @param  string $type resource type
     * @return int number of cache files which needs to be updated
     */
    public function clearCache($template_name, $cache_id = null, $compile_id = null, $exp_time = null, $type = null)
    {
    }

    /**
     * {@inheritDoc}
     */
    public function fetch($template = null, $cache_id = null, $compile_id = null, $parent = null, $display = false, $merge_tpl_vars = true, $no_output_filter = false)
    {
    }

    /**
     * Check the compile cache needs to be invalidated (multi front + local cache compatible)
     */
    public function check_compile_cache_invalidation()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function createTemplate($template, $cache_id = null, $compile_id = null, $parent = null, $do_clone = true)
    {
    }

    /**
     * Handle the lazy template cache invalidation
     *
     * @param  string $template template name
     * @param  string $cache_id cache id
     * @param  string $compile_id compile id
     */
    public function check_template_invalidation($template, $cache_id, $compile_id)
    {
    }

    /**
     * Check if the current template is stored in the lazy cache
     * Entry in the lazy cache = no need to regenerate the template
     *
     * @param  string $template template name
     * @param  string $cache_id cache id
     * @param  string $compile_id compile id
     * @return bool
     */
    public function is_in_lazy_cache($template, $cache_id, $compile_id)
    {
    }

    /**
     * Insert the current template in the lazy cache
     *
     * @param  string $template template name
     * @param  string $cache_id cache id
     * @param  string $compile_id compile id
     * @return bool
     */
    public function insert_in_lazy_cache($template, $cache_id, $compile_id)
    {
    }

    /**
     * Store the cache file path
     *
     * @param  string $filepath cache file path
     * @param  string $template template name
     * @param  string $cache_id cache id
     * @param  string $compile_id compile id
     */
    public function update_filepath($filepath, $template, $cache_id, $compile_id)
    {
    }
}

class Smarty_Custom_Template extends Smarty_Internal_Template
{

    /** @var SmartyCustom|null */
    public $smarty = null;

    public function fetch($template = null, $cache_id = null, $compile_id = null, $parent = null, $display = false, $merge_tpl_vars = true, $no_output_filter = false)
    {
    }
}
