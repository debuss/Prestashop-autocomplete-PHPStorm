<?php
/**
 * Smarty Internal Plugin Templatelexer
 * This is the lexer to break the template source into tokens
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
 */

/**
 * Smarty Internal Plugin Templatelexer
 */
class Smarty_Internal_Templatelexer
{

    const TEXT = 1;
    const SMARTY = 2;
    const LITERAL = 3;
    const DOUBLEQUOTEDSTRING = 4;
    const CHILDBODY = 5;
    const CHILDBLOCK = 6;
    const CHILDLITERAL = 7;
    public $data;
    public $counter;
    public $token;
    public $value;
    public $node;
    public $line;
    public $taglineno;
    public $state = 1;
    public $yyTraceFILE;
    public $yyTracePrompt;
    public $state_name = array(1 => 'TEXT', 2 => 'SMARTY', 3 => 'LITERAL', 4 => 'DOUBLEQUOTEDSTRING', 5 => 'CHILDBODY');
    public $smarty_token_names = array( // Text for parser error messages
        'IDENTITY' => '===',
        'NONEIDENTITY' => '!==',
        'EQUALS' => '==',
        'NOTEQUALS' => '!=',
        'GREATEREQUAL' => '(>=,ge)',
        'LESSEQUAL' => '(<=,le)',
        'GREATERTHAN' => '(>,gt)',
        'LESSTHAN' => '(<,lt)',
        'MOD' => '(%,mod)',
        'NOT' => '(!,not)',
        'LAND' => '(&&,and)',
        'LOR' => '(||,or)',
        'LXOR' => 'xor',
        'OPENP' => '(',
        'CLOSEP' => ')',
        'OPENB' => '[',
        'CLOSEB' => ']',
        'PTR' => '->',
        'APTR' => '=>',
        'EQUAL' => '=',
        'NUMBER' => 'number',
        'UNIMATH' => '+" , "-',
        'MATH' => '*" , "/" , "%',
        'INCDEC' => '++" , "--',
        'SPACE' => ' ',
        'DOLLAR' => '$',
        'SEMICOLON' => ';',
        'COLON' => ':',
        'DOUBLECOLON' => '::',
        'AT' => '@',
        'HATCH' => '#',
        'QUOTE' => '"',
        'BACKTICK' => '`',
        'VERT' => '|',
        'DOT' => '.',
        'COMMA' => '","',
        'ANDSYM' => '"&"',
        'QMARK' => '"?"',
        'ID' => 'identifier',
        'TEXT' => 'text',
        'FAKEPHPSTARTTAG' => 'Fake PHP start tag',
        'PHPSTARTTAG' => 'PHP start tag',
        'PHPENDTAG' => 'PHP end tag',
        'LITERALSTART' => 'Literal start',
        'LITERALEND' => 'Literal end',
        'LDELSLASH' => 'closing tag',
        'COMMENT' => 'comment',
        'AS' => 'as',
        'TO' => 'to',
    );
    private $heredoc_id_stack = array();
    private $_yy_state = 1;
    private $_yy_stack = array(); // end function

    function __construct($data, $compiler)
    {
    }

    public function PrintTrace()
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

    function yy_r1_2($yy_subpatterns)
    {
    }

    function yy_r1_4($yy_subpatterns)
    {
    }

    function yy_r1_5($yy_subpatterns)
    {
    }

    function yy_r1_6($yy_subpatterns)
    {
    }

    public function yypushstate($state)
    {
    }

    function yy_r1_7($yy_subpatterns)
    {
    }

    function yy_r1_9($yy_subpatterns)
    {
    }

    function yy_r1_10($yy_subpatterns)
    {
    }

    function yy_r1_11($yy_subpatterns)
    {
    }

    function yy_r1_12($yy_subpatterns)
    {
    }

    function yy_r1_13($yy_subpatterns)
    {
    }

    function yy_r1_14($yy_subpatterns)
    {
    }

    function yy_r1_15($yy_subpatterns)
    {
    }

    function yy_r1_17($yy_subpatterns)
    {
    }

    function yy_r1_18($yy_subpatterns)
    {
    }

    function yy_r1_19($yy_subpatterns)
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

    function yy_r2_3($yy_subpatterns)
    {
    }

    function yy_r2_5($yy_subpatterns)
    {
    }

    function yy_r2_6($yy_subpatterns)
    {
    }

    public function yypopstate()
    {
    }

    function yy_r2_7($yy_subpatterns)
    {
    }

    function yy_r2_8($yy_subpatterns)
    {
    }

    function yy_r2_9($yy_subpatterns)
    {
    }

    function yy_r2_10($yy_subpatterns)
    {
    }

    function yy_r2_11($yy_subpatterns)
    {
    }

    function yy_r2_12($yy_subpatterns)
    {
    }

    function yy_r2_13($yy_subpatterns)
    {
    }

    function yy_r2_14($yy_subpatterns)
    {
    }

    function yy_r2_15($yy_subpatterns)
    {
    }

    function yy_r2_17($yy_subpatterns)
    {
    }

    function yy_r2_19($yy_subpatterns)
    {
    }

    function yy_r2_21($yy_subpatterns)
    {
    }

    function yy_r2_22($yy_subpatterns)
    {
    }

    function yy_r2_23($yy_subpatterns)
    {
    }

    function yy_r2_24($yy_subpatterns)
    {
    }

    function yy_r2_25($yy_subpatterns)
    {
    }

    function yy_r2_26($yy_subpatterns)
    {
    }

    function yy_r2_27($yy_subpatterns)
    {
    }

    function yy_r2_28($yy_subpatterns)
    {
    }

    function yy_r2_29($yy_subpatterns)
    {
    }

    function yy_r2_30($yy_subpatterns)
    {
    }

    function yy_r2_31($yy_subpatterns)
    {
    }

    function yy_r2_32($yy_subpatterns)
    {
    }

    function yy_r2_33($yy_subpatterns)
    {
    }

    function yy_r2_34($yy_subpatterns)
    {
    }

    function yy_r2_35($yy_subpatterns)
    {
    }

    function yy_r2_36($yy_subpatterns)
    {
    }

    function yy_r2_37($yy_subpatterns)
    {
    }

    function yy_r2_38($yy_subpatterns)
    {
    }

    function yy_r2_42($yy_subpatterns)
    {
    }

    function yy_r2_43($yy_subpatterns)
    {
    }

    function yy_r2_44($yy_subpatterns)
    {
    }

    function yy_r2_45($yy_subpatterns)
    {
    }

    function yy_r2_46($yy_subpatterns)
    {
    }

    function yy_r2_47($yy_subpatterns)
    {
    }

    function yy_r2_48($yy_subpatterns)
    {
    }

    function yy_r2_49($yy_subpatterns)
    {
    }

    function yy_r2_50($yy_subpatterns)
    {
    }

    function yy_r2_52($yy_subpatterns)
    {
    }

    function yy_r2_54($yy_subpatterns)
    {
    }

    function yy_r2_55($yy_subpatterns)
    {
    }

    function yy_r2_56($yy_subpatterns)
    {
    }

    function yy_r2_57($yy_subpatterns)
    {
    }

    function yy_r2_58($yy_subpatterns)
    {
    }

    function yy_r2_59($yy_subpatterns)
    {
    }

    function yy_r2_60($yy_subpatterns)
    {
    }

    function yy_r2_61($yy_subpatterns)
    {
    }

    function yy_r2_62($yy_subpatterns)
    {
    }

    function yy_r2_63($yy_subpatterns)
    {
    }

    function yy_r2_64($yy_subpatterns)
    {
    }

    function yy_r2_65($yy_subpatterns)
    {
    }

    function yy_r2_66($yy_subpatterns)
    {
    }

    function yy_r2_67($yy_subpatterns)
    {
    }

    function yy_r2_68($yy_subpatterns)
    {
    }

    function yy_r2_69($yy_subpatterns)
    {
    }

    function yy_r2_70($yy_subpatterns)
    {
    }

    function yy_r2_72($yy_subpatterns)
    {
    }

    function yy_r2_74($yy_subpatterns)
    {
    }

    function yy_r2_75($yy_subpatterns)
    {
    }

    function yy_r2_76($yy_subpatterns)
    {
    }

    public function yylex3()
    {
    }

    function yy_r3_1($yy_subpatterns)
    {
    }

    function yy_r3_2($yy_subpatterns)
    {
    }

    function yy_r3_3($yy_subpatterns)
    {
    }

    function yy_r3_4($yy_subpatterns)
    {
    }

    function yy_r3_6($yy_subpatterns)
    {
    }

    function yy_r3_7($yy_subpatterns)
    {
    }

    public function yylex4()
    {
    }

    function yy_r4_1($yy_subpatterns)
    {
    }

    function yy_r4_3($yy_subpatterns)
    {
    }

    function yy_r4_4($yy_subpatterns)
    {
    }

    function yy_r4_5($yy_subpatterns)
    {
    }

    function yy_r4_6($yy_subpatterns)
    {
    }

    function yy_r4_7($yy_subpatterns)
    {
    }

    function yy_r4_8($yy_subpatterns)
    {
    }

    function yy_r4_9($yy_subpatterns)
    {
    }

    function yy_r4_10($yy_subpatterns)
    {
    }

    function yy_r4_15($yy_subpatterns)
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

    function yy_r5_3($yy_subpatterns)
    {
    }

    public function yylex6()
    {
    }

    function yy_r6_1($yy_subpatterns)
    {
    }

    function yy_r6_2($yy_subpatterns)
    {
    }

    function yy_r6_3($yy_subpatterns)
    {
    }

    function yy_r6_4($yy_subpatterns)
    {
    }

    function yy_r6_6($yy_subpatterns)
    {
    }

    function yy_r7_1($yy_subpatterns)
    {
    }

    function yy_r7_2($yy_subpatterns)
    {
    }

    function yy_r7_3($yy_subpatterns)
    {
    }
}
