<?php
/**
 * Smarty plugin
 *
 * @package    Smarty
 * @subpackage Security
 * @author     Uwe Tews
 */

/*
 * FIXME: Smarty_Security API
 *      - getter and setter instead of public properties would allow cultivating an internal cache properly
 *      - current implementation of isTrustedResourceDir() assumes that Smarty::$template_dir and Smarty::$config_dir are immutable
 *        the cache is killed every time either of the variables change. That means that two distinct Smarty objects with differing
 *        $template_dir or $config_dir should NOT share the same Smarty_Security instance,
 *        as this would lead to (severe) performance penalty! how should this be handled?
 */

/**
 * This class does contain the security settings
 */
class Smarty_Security
{

    /**
     * This determines how Smarty handles "<?php ... ?>" tags in templates.
     * possible values:
     * <ul>
     *   <li>Smarty::PHP_PASSTHRU -> echo PHP tags as they are</li>
     *   <li>Smarty::PHP_QUOTE    -> escape tags as entities</li>
     *   <li>Smarty::PHP_REMOVE   -> remove php tags</li>
     *   <li>Smarty::PHP_ALLOW    -> execute php tags</li>
     * </ul>
     *
     * @var integer
     */
    public $php_handling = Smarty::PHP_PASSTHRU;
    /**
     * This is the list of template directories that are considered secure.
     * $template_dir is in this list implicitly.
     *
     * @var array
     */
    public $secure_dir = array();
    /**
     * This is an array of directories where trusted php scripts reside.
     * {@link $security} is disabled during their inclusion/execution.
     *
     * @var array
     */
    public $trusted_dir = array();
    /**
     * List of regular expressions (PCRE) that include trusted URIs
     *
     * @var array
     */
    public $trusted_uri = array();
    /**
     * This is an array of trusted static classes.
     * If empty access to all static classes is allowed.
     * If set to 'none' none is allowed.
     *
     * @var array
     */
    public $static_classes = array();
    /**
     * This is an array of trusted PHP functions.
     * If empty all functions are allowed.
     * To disable all PHP functions set $php_functions = null.
     *
     * @var array
     */
    public $php_functions = array(
        'isset', 'empty',
        'count', 'sizeof',
        'in_array', 'is_array',
        'time',
        'nl2br',
    );
    /**
     * This is an array of trusted PHP modifiers.
     * If empty all modifiers are allowed.
     * To disable all modifier set $modifiers = null.
     *
     * @var array
     */
    public $php_modifiers = array(
        'escape',
        'count'
    );
    /**
     * This is an array of allowed tags.
     * If empty no restriction by allowed_tags.
     *
     * @var array
     */
    public $allowed_tags = array();
    /**
     * This is an array of disabled tags.
     * If empty no restriction by disabled_tags.
     *
     * @var array
     */
    public $disabled_tags = array();
    /**
     * This is an array of allowed modifier plugins.
     * If empty no restriction by allowed_modifiers.
     *
     * @var array
     */
    public $allowed_modifiers = array();
    /**
     * This is an array of disabled modifier plugins.
     * If empty no restriction by disabled_modifiers.
     *
     * @var array
     */
    public $disabled_modifiers = array();
    /**
     * This is an array of trusted streams.
     * If empty all streams are allowed.
     * To disable all streams set $streams = null.
     *
     * @var array
     */
    public $streams = array('file');
    /**
     * + flag if constants can be accessed from template
     *
     * @var boolean
     */
    public $allow_constants = true;
    /**
     * + flag if super globals can be accessed from template
     *
     * @var boolean
     */
    public $allow_super_globals = true;
    /**
     * Cache for $resource_dir lookup
     *
     * @var array
     */
    protected $_resource_dir = null;
    /**
     * Cache for $template_dir lookup
     *
     * @var array
     */
    protected $_template_dir = null;
    /**
     * Cache for $config_dir lookup
     *
     * @var array
     */
    protected $_config_dir = null;
    /**
     * Cache for $secure_dir lookup
     *
     * @var array
     */
    protected $_secure_dir = null;
    /**
     * Cache for $php_resource_dir lookup
     *
     * @var array
     */
    protected $_php_resource_dir = null;
    /**
     * Cache for $trusted_dir lookup
     *
     * @var array
     */
    protected $_trusted_dir = null;

    /**
     * @param Smarty $smarty
     */
    public function __construct($smarty)
    {
    }

    /**
     * Check if PHP function is trusted.
     *
     * @param  string $function_name
     * @param  object $compiler compiler object
     * @return boolean                 true if function is trusted
     * @throws SmartyCompilerException if php function is not trusted
     */
    public function isTrustedPhpFunction($function_name, $compiler)
    {
    }

    /**
     * Check if static class is trusted.
     *
     * @param  string $class_name
     * @param  object $compiler compiler object
     * @return boolean                 true if class is trusted
     * @throws SmartyCompilerException if static class is not trusted
     */
    public function isTrustedStaticClass($class_name, $compiler)
    {
    }

    /**
     * Check if PHP modifier is trusted.
     *
     * @param  string $modifier_name
     * @param  object $compiler compiler object
     * @return boolean                 true if modifier is trusted
     * @throws SmartyCompilerException if modifier is not trusted
     */
    public function isTrustedPhpModifier($modifier_name, $compiler)
    {
    }

    /**
     * Check if tag is trusted.
     *
     * @param  string $tag_name
     * @param  object $compiler compiler object
     * @return boolean                 true if tag is trusted
     * @throws SmartyCompilerException if modifier is not trusted
     */
    public function isTrustedTag($tag_name, $compiler)
    {
    }

    /**
     * Check if modifier plugin is trusted.
     *
     * @param  string $modifier_name
     * @param  object $compiler compiler object
     * @return boolean                 true if tag is trusted
     * @throws SmartyCompilerException if modifier is not trusted
     */
    public function isTrustedModifier($modifier_name, $compiler)
    {
    }

    /**
     * Check if stream is trusted.
     *
     * @param  string $stream_name
     * @return boolean         true if stream is trusted
     * @throws SmartyException if stream is not trusted
     */
    public function isTrustedStream($stream_name)
    {
    }

    /**
     * Check if directory of file resource is trusted.
     *
     * @param  string $filepath
     * @return boolean         true if directory is trusted
     * @throws SmartyException if directory is not trusted
     */
    public function isTrustedResourceDir($filepath)
    {
    }

    /**
     * Check if URI (e.g. {fetch} or {html_image}) is trusted
     * To simplify things, isTrustedUri() resolves all input to "{$PROTOCOL}://{$HOSTNAME}".
     * So "http://username:password@hello.world.example.org:8080/some-path?some=query-string"
     * is reduced to "http://hello.world.example.org" prior to applying the patters from {@link $trusted_uri}.
     *
     * @param  string $uri
     * @return boolean         true if URI is trusted
     * @throws SmartyException if URI is not trusted
     * @uses $trusted_uri for list of patterns to match against $uri
     */
    public function isTrustedUri($uri)
    {
    }

    /**
     * Check if directory of file resource is trusted.
     *
     * @param  string $filepath
     * @return boolean         true if directory is trusted
     * @throws SmartyException if PHP directory is not trusted
     */
    public function isTrustedPHPDir($filepath)
    {
    }
}
