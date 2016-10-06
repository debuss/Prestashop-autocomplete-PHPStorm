<?php

/**
 * Smarty Internal Plugin Configfileparser
 * This is the config file parser.
 * It is generated from the internal.configfileparser.y file
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
 */
class TPC_yyToken implements ArrayAccess
{

    public $string = '';
    public $metadata = array();

    public function __construct($s, $m = array())
    {
    }

    public function __toString()
    {
    }

    public function offsetExists($offset)
    {
    }

    public function offsetGet($offset)
    {
    }

    public function offsetSet($offset, $value)
    {
    }

    public function offsetUnset($offset)
    {
    }
}

class TPC_yyStackEntry
{

    public $stateno; /* The state-number */
    public $major; /* The major token value.  This is the code
                     ** number for the token at this stack level */
    public $minor; /* The user-supplied minor token value.  This
                     ** is the value of the token  */
}

;

#line 12 "smarty_internal_configfileparser.y"
class Smarty_Internal_Configfileparser #line 80 "smarty_internal_configfileparser.php"
{

    #line 14 "smarty_internal_configfileparser.y"

    // states whether the parse was successful or not
    const TPC_OPENB = 1;
    const TPC_SECTION = 2;
    const TPC_CLOSEB = 3;
    const TPC_DOT = 4;
    const TPC_ID = 5;
    const TPC_EQUAL = 6;
    const TPC_FLOAT = 7;
    const TPC_INT = 8;
    const TPC_BOOL = 9;
    const TPC_SINGLE_QUOTED_STRING = 10;
    const TPC_DOUBLE_QUOTED_STRING = 11;
    const TPC_TRIPPLE_QUOTES = 12;
    const TPC_TRIPPLE_TEXT = 13;
    const TPC_TRIPPLE_QUOTES_END = 14;
    #line 174 "smarty_internal_configfileparser.php"
    const TPC_NAKED_STRING = 15;
    const TPC_OTHER = 16;
    const TPC_NEWLINE = 17;
    const TPC_COMMENTSTART = 18;
    const YY_NO_ACTION = 60;
    const YY_ACCEPT_ACTION = 59;
    const YY_ERROR_ACTION = 58;
    const YY_SZ_ACTTAB = 38;
    const YY_SHIFT_USE_DFLT = -8;
    const YY_SHIFT_MAX = 19;
    const YY_REDUCE_USE_DFLT = -21;
    const YY_REDUCE_MAX = 10;
    const YYNOCODE = 29;
    const YYSTACKDEPTH = 100;
    const YYNSTATE = 36;
    const YYNRULE = 22;
    const YYERRORSYMBOL = 19;
    const YYERRSYMDT = 'yy0';
    const YYFALLBACK = 0;
    static public $yy_action = array(
        /*     0 */
        29, 30, 34, 33, 24, 13, 19, 25, 35, 21,
        /*    10 */
        59, 8, 3, 1, 20, 12, 14, 31, 20, 12,
        /*    20 */
        15, 17, 23, 18, 27, 26, 4, 5, 6, 32,
        /*    30 */
        2, 11, 28, 22, 16, 9, 7, 10,
    );
    static public $yy_lookahead = array(
        /*     0 */
        7, 8, 9, 10, 11, 12, 5, 27, 15, 16,
        /*    10 */
        20, 21, 23, 23, 17, 18, 13, 14, 17, 18,
        /*    20 */
        15, 2, 17, 4, 25, 26, 6, 3, 3, 14,
        /*    30 */
        23, 1, 24, 17, 2, 25, 22, 25,
    );
    static public $yy_shift_ofst = array(
        /*     0 */
        -8, 1, 1, 1, -7, -3, -3, 30, -8, -8,
        /*    10 */
        -8, 19, 5, 3, 15, 16, 24, 25, 32, 20,
    );
    static public $yy_reduce_ofst = array(
        /*     0 */
        -10, -1, -1, -1, -20, 10, 12, 8, 14, 7,
        /*    10 */
        -11,
    );
    static public $yyExpectedTokens = array(
        /* 0 */
        array(),
        /* 1 */
        array(5, 17, 18,),
        /* 2 */
        array(5, 17, 18,),
        /* 3 */
        array(5, 17, 18,),
        /* 4 */
        array(7, 8, 9, 10, 11, 12, 15, 16,),
        /* 5 */
        array(17, 18,),
        /* 6 */
        array(17, 18,),
        /* 7 */
        array(1,),
        /* 8 */
        array(),
        /* 9 */
        array(),
        /* 10 */
        array(),
        /* 11 */
        array(2, 4,),
        /* 12 */
        array(15, 17,),
        /* 13 */
        array(13, 14,),
        /* 14 */
        array(14,),
        /* 15 */
        array(17,),
        /* 16 */
        array(3,),
        /* 17 */
        array(3,),
        /* 18 */
        array(2,),
        /* 19 */
        array(6,),
        /* 20 */
        array(),
        /* 21 */
        array(),
        /* 22 */
        array(),
        /* 23 */
        array(),
        /* 24 */
        array(),
        /* 25 */
        array(),
        /* 26 */
        array(),
        /* 27 */
        array(),
        /* 28 */
        array(),
        /* 29 */
        array(),
        /* 30 */
        array(),
        /* 31 */
        array(),
        /* 32 */
        array(),
        /* 33 */
        array(),
        /* 34 */
        array(),
        /* 35 */
        array(),
    );
    static public $yy_default = array(
        /*     0 */
        44, 37, 41, 40, 58, 58, 58, 36, 39, 44,
        /*    10 */
        44, 58, 58, 58, 58, 58, 58, 58, 58, 58,
        /*    20 */
        55, 54, 57, 56, 50, 45, 43, 42, 38, 46,
        /*    30 */
        47, 52, 51, 49, 48, 53,
    );
    public static $yyFallback = array();
    public static $yyRuleName = array(
        /*   0 */
        "start ::= global_vars sections",
        /*   1 */
        "global_vars ::= var_list",
        /*   2 */
        "sections ::= sections section",
        /*   3 */
        "sections ::=",
        /*   4 */
        "section ::= OPENB SECTION CLOSEB newline var_list",
        /*   5 */
        "section ::= OPENB DOT SECTION CLOSEB newline var_list",
        /*   6 */
        "var_list ::= var_list newline",
        /*   7 */
        "var_list ::= var_list var",
        /*   8 */
        "var_list ::=",
        /*   9 */
        "var ::= ID EQUAL value",
        /*  10 */
        "value ::= FLOAT",
        /*  11 */
        "value ::= INT",
        /*  12 */
        "value ::= BOOL",
        /*  13 */
        "value ::= SINGLE_QUOTED_STRING",
        /*  14 */
        "value ::= DOUBLE_QUOTED_STRING",
        /*  15 */
        "value ::= TRIPPLE_QUOTES TRIPPLE_TEXT TRIPPLE_QUOTES_END",
        /*  16 */
        "value ::= TRIPPLE_QUOTES TRIPPLE_QUOTES_END",
        /*  17 */
        "value ::= NAKED_STRING",
        /*  18 */
        "value ::= OTHER",
        /*  19 */
        "newline ::= NEWLINE",
        /*  20 */
        "newline ::= COMMENTSTART NEWLINE",
        /*  21 */
        "newline ::= COMMENTSTART NAKED_STRING NEWLINE",
    );
    public static $yyRuleInfo = array(
        array('lhs' => 20, 'rhs' => 2),
        array('lhs' => 21, 'rhs' => 1),
        array('lhs' => 22, 'rhs' => 2),
        array('lhs' => 22, 'rhs' => 0),
        array('lhs' => 24, 'rhs' => 5),
        array('lhs' => 24, 'rhs' => 6),
        array('lhs' => 23, 'rhs' => 2),
        array('lhs' => 23, 'rhs' => 2),
        array('lhs' => 23, 'rhs' => 0),
        array('lhs' => 26, 'rhs' => 3),
        array('lhs' => 27, 'rhs' => 1),
        array('lhs' => 27, 'rhs' => 1),
        array('lhs' => 27, 'rhs' => 1),
        array('lhs' => 27, 'rhs' => 1),
        array('lhs' => 27, 'rhs' => 1),
        array('lhs' => 27, 'rhs' => 3),
        array('lhs' => 27, 'rhs' => 2),
        array('lhs' => 27, 'rhs' => 1),
        array('lhs' => 27, 'rhs' => 1),
        array('lhs' => 25, 'rhs' => 1),
        array('lhs' => 25, 'rhs' => 2),
        array('lhs' => 25, 'rhs' => 3),
    );
    public static $yyReduceMap = array(
        0 => 0,
        2 => 0,
        3 => 0,
        19 => 0,
        20 => 0,
        21 => 0,
        1 => 1,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
        9 => 9,
        10 => 10,
        11 => 11,
        12 => 12,
        13 => 13,
        14 => 14,
        15 => 15,
        16 => 16,
        17 => 17,
        18 => 17,
    );
    private static $escapes_single = array('\\' => '\\',
        '\'' => '\'');
    public $successful = true;
    public $retvalue = 0;
    public $yyTraceFILE;
    public $yyTracePrompt;
    public $yyidx;
    public $yyerrcnt;
    public $yystack = array();
    public $yyTokenName = array(
        '$', 'OPENB', 'SECTION', 'CLOSEB',
        'DOT', 'ID', 'EQUAL', 'FLOAT',
        'INT', 'BOOL', 'SINGLE_QUOTED_STRING', 'DOUBLE_QUOTED_STRING',
        'TRIPPLE_QUOTES', 'TRIPPLE_TEXT', 'TRIPPLE_QUOTES_END', 'NAKED_STRING',
        'OTHER', 'NEWLINE', 'COMMENTSTART', 'error',
        'start', 'global_vars', 'sections', 'var_list',
        'section', 'newline', 'var', 'value',
    );
    private $lex;
    private $internalError = false;
    private $_retvalue;

    function __construct($lex, $compiler)
    {
    }

    public static function &instance($new_instance = null)
    {
    }

    public static function yy_destructor($yymajor, $yypminor)
    {
    }

    private static function parse_single_quoted_string($qstr)
    {
    }

    private static function parse_double_quoted_string($qstr)
    {
    }

    private static function parse_tripple_double_quoted_string($qstr)
    {
    }

    public function Trace($TraceFILE, $zTracePrompt)
    {
    }

    public function PrintTrace()
    {
    }

    public function yy_get_expected_tokens($token)
    {
    }

    public function yy_find_shift_action($iLookAhead)
    {
    }

    public function yy_find_reduce_action($stateno, $iLookAhead)
    {
    }

    function yy_r0()
    {
    }

    function yy_r1()
    {
    }

    function yy_r4()
    {
    }

    function yy_r5()
    {
    }

    function yy_r6()
    {
    }

    #line 131 "smarty_internal_configfileparser.y"

    function yy_r7()
    {
    }
    #line 675 "smarty_internal_configfileparser.php"
    #line 136 "smarty_internal_configfileparser.y"

    function yy_r8()
    {
    }
    #line 680 "smarty_internal_configfileparser.php"
    #line 149 "smarty_internal_configfileparser.y"

    function yy_r9()
    {
    }
    #line 686 "smarty_internal_configfileparser.php"
    #line 154 "smarty_internal_configfileparser.y"

    function yy_r10()
    {
    }
    #line 694 "smarty_internal_configfileparser.php"
    #line 162 "smarty_internal_configfileparser.y"

    function yy_r11()
    {
    }
    #line 699 "smarty_internal_configfileparser.php"
    #line 166 "smarty_internal_configfileparser.y"

    function yy_r12()
    {
    }
    #line 704 "smarty_internal_configfileparser.php"
    #line 170 "smarty_internal_configfileparser.y"

    function yy_r13()
    {
    }
    #line 709 "smarty_internal_configfileparser.php"
    #line 176 "smarty_internal_configfileparser.y"

    function yy_r14()
    {
    }
    #line 714 "smarty_internal_configfileparser.php"
    #line 181 "smarty_internal_configfileparser.y"

    function yy_r15()
    {
    }
    #line 719 "smarty_internal_configfileparser.php"
    #line 185 "smarty_internal_configfileparser.y"

    function yy_r16()
    {
    }
    #line 724 "smarty_internal_configfileparser.php"
    #line 189 "smarty_internal_configfileparser.y"

    function yy_r17()
    {
    }
    #line 729 "smarty_internal_configfileparser.php"
    #line 193 "smarty_internal_configfileparser.y"

    public function doParse($yymajor, $yytokenvalue)
    {
    }
    #line 734 "smarty_internal_configfileparser.php"
    #line 197 "smarty_internal_configfileparser.y"

    public function yy_is_expected_token($token)
    {
    }
    #line 739 "smarty_internal_configfileparser.php"
    #line 201 "smarty_internal_configfileparser.y"

    public function yy_shift($yyNewState, $yyMajor, $yypMinor)
    {
    }
    #line 744 "smarty_internal_configfileparser.php"
    #line 205 "smarty_internal_configfileparser.y"

    public function yy_reduce($yyruleno)
    {
    }
    #line 749 "smarty_internal_configfileparser.php"
    #line 209 "smarty_internal_configfileparser.y"

    public function yy_accept()
    {
    }

    #line 754 "smarty_internal_configfileparser.php"

    public function yy_syntax_error($yymajor, $TOKEN)
    {
    }

    public function yy_parse_failed()
    {
    }

    private function add_global_vars(Array $vars)
    {
    }

    private function set_var(Array $var, Array &$target_array)
    {
    }

    private function add_section_vars($section_name, Array $vars)
    {
    }

    private function parse_bool($str)
    {
    }
}
