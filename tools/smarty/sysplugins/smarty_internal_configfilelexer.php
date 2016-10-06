<?php
/**
 * Smarty Internal Plugin Configfilelexer
 * This is the lexer to break the config file source into tokens
 *
 * @package    Smarty
 * @subpackage Config
 * @author     Uwe Tews
 */

/**
 * Smarty Internal Plugin Configfilelexer
 */
class Smarty_Internal_Configfilelexer
{

    const START = 1;
    const VALUE = 2;
    const NAKED_STRING_VALUE = 3;
    const COMMENT = 4;
    const SECTION = 5;
    const TRIPPLE = 6;
    public $data;
    public $counter;
    public $token;
    public $value;
    public $node;
    public $line;
    public $yyTraceFILE;
    public $yyTracePrompt;
    public $state_name = array(1 => 'START', 2 => 'VALUE', 3 => 'NAKED_STRING_VALUE', 4 => 'COMMENT', 5 => 'SECTION', 6 => 'TRIPPLE');
    public $smarty_token_names = array( // Text for parser error messages
    );
    private $state = 1;
    private $_yy_state = 1;
    private $_yy_stack = array();

    function __construct($data, $compiler)
    {
    }

    public static function &instance($new_instance = null)
    {
    }

    public function yybegin($state)
    {
    }

    public function yylex1()
    {
    }

    public function yylex()
    {
    }

    function yy_r1_1($yy_subpatterns)
    {
    }

    public function yypushstate($state)
    {
    }

    function yy_r1_2($yy_subpatterns)
    {
    }

    function yy_r1_3($yy_subpatterns)
    {
    }

    function yy_r1_4($yy_subpatterns)
    {
    }

    function yy_r1_5($yy_subpatterns)
    {
    }

    function yy_r1_7($yy_subpatterns)
    {
    }

    function yy_r1_8($yy_subpatterns)
    {
    }

    public function yylex2()
    {
    }

    function yy_r2_1($yy_subpatterns)
    {
    }

    function yy_r2_2($yy_subpatterns)
    {
    }

    public function yypopstate()
    {
    }

    function yy_r2_3($yy_subpatterns)
    {
    }

    function yy_r2_4($yy_subpatterns)
    {
    }

    function yy_r2_5($yy_subpatterns)
    {
    }

    function yy_r2_6($yy_subpatterns)
    {
    }

    function yy_r2_8($yy_subpatterns)
    {
    }

    function yy_r2_9($yy_subpatterns)
    {
    }

    function yy_r3_1($yy_subpatterns)
    {
    }

    public function yylex4()
    {
    }

    function yy_r4_1($yy_subpatterns)
    {
    }

    function yy_r4_2($yy_subpatterns)
    {
    }

    public function yylex5()
    {
    }

    function yy_r5_1($yy_subpatterns)
    {
    }

    function yy_r5_2($yy_subpatterns)
    {
    }

    function yy_r6_1($yy_subpatterns)
    {
    }

    function yy_r6_2($yy_subpatterns)
    {
    }
}
