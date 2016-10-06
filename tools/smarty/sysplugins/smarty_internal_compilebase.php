<?php
/**
 * Smarty Internal Plugin CompileBase
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
 */

/**
 * This class does extend all internal compile plugins
 *
 * @package    Smarty
 * @subpackage Compiler
 */
abstract class Smarty_Internal_CompileBase
{

    /**
     * Array of names of required attribute required by tag
     *
     * @var array
     */
    public $required_attributes = array();
    /**
     * Array of names of optional attribute required by tag
     * use array('_any') if there is no restriction of attributes names
     *
     * @var array
     */
    public $optional_attributes = array();
    /**
     * Shorttag attribute order defined by its names
     *
     * @var array
     */
    public $shorttag_order = array();
    /**
     * Array of names of valid option flags
     *
     * @var array
     */
    public $option_flags = array('nocache');

    /**
     * This function checks if the attributes passed are valid
     * The attributes passed for the tag to compile are checked against the list of required and
     * optional attributes. Required attributes must be present. Optional attributes are check against
     * the corresponding list. The keyword '_any' specifies that any attribute will be accepted
     * as valid
     *
     * @param  object $compiler compiler object
     * @param  array $attributes attributes applied to the tag
     * @return array  of mapped attributes for further processing
     */
    public function getAttributes($compiler, $attributes)
    {
    }

    /**
     * Push opening tag name on stack
     * Optionally additional data can be saved on stack
     *
     * @param object $compiler compiler object
     * @param string $openTag the opening tag's name
     * @param mixed $data optional data saved
     */
    public function openTag($compiler, $openTag, $data = null)
    {
    }

    /**
     * Pop closing tag
     * Raise an error if this stack-top doesn't match with expected opening tags
     *
     * @param  object $compiler compiler object
     * @param  array|string $expectedTag the expected opening tag names
     * @return mixed        any type the opening tag's name or saved data
     */
    public function closeTag($compiler, $expectedTag)
    {
    }
}
