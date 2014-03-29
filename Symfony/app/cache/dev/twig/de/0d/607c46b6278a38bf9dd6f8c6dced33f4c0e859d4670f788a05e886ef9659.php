<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_de0d607c46b6278a38bf9dd6f8c6dced33f4c0e859d4670f788a05e886ef9659 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  214 => 67,  170 => 62,  151 => 58,  116 => 47,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 196,  489 => 195,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  447 => 172,  439 => 168,  431 => 164,  415 => 156,  403 => 146,  396 => 143,  392 => 141,  388 => 140,  381 => 137,  377 => 135,  373 => 134,  366 => 131,  356 => 127,  350 => 125,  347 => 124,  335 => 122,  332 => 121,  329 => 120,  320 => 113,  317 => 112,  309 => 106,  306 => 105,  300 => 102,  297 => 101,  292 => 98,  275 => 94,  272 => 93,  242 => 81,  238 => 79,  234 => 78,  216 => 71,  213 => 70,  210 => 69,  203 => 66,  179 => 60,  176 => 59,  169 => 58,  153 => 51,  132 => 42,  145 => 54,  99 => 41,  86 => 29,  174 => 63,  119 => 48,  113 => 22,  82 => 32,  135 => 61,  123 => 20,  68 => 24,  230 => 123,  223 => 73,  172 => 95,  91 => 24,  126 => 60,  95 => 40,  103 => 43,  23 => 3,  156 => 75,  128 => 50,  64 => 31,  20 => 1,  94 => 54,  83 => 49,  61 => 28,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 176,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 160,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 129,  359 => 128,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 72,  201 => 66,  143 => 49,  138 => 44,  134 => 51,  131 => 95,  122 => 38,  108 => 31,  102 => 60,  92 => 32,  84 => 28,  48 => 9,  312 => 96,  308 => 94,  293 => 92,  285 => 96,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 87,  253 => 85,  249 => 84,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 65,  127 => 41,  112 => 32,  96 => 34,  76 => 56,  71 => 18,  55 => 32,  114 => 34,  109 => 31,  106 => 63,  85 => 33,  77 => 31,  28 => 3,  39 => 15,  89 => 60,  65 => 23,  63 => 14,  58 => 17,  34 => 12,  26 => 9,  98 => 27,  88 => 23,  46 => 13,  36 => 5,  43 => 12,  50 => 14,  38 => 6,  27 => 3,  227 => 75,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 64,  192 => 65,  189 => 64,  186 => 60,  181 => 122,  178 => 61,  173 => 58,  162 => 59,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 57,  130 => 60,  100 => 37,  78 => 20,  75 => 19,  53 => 11,  24 => 4,  25 => 35,  19 => 1,  79 => 27,  74 => 36,  72 => 33,  69 => 33,  60 => 17,  47 => 8,  40 => 6,  22 => 2,  267 => 90,  185 => 58,  182 => 61,  177 => 56,  165 => 79,  159 => 74,  148 => 66,  133 => 43,  125 => 49,  120 => 19,  117 => 36,  110 => 43,  105 => 30,  101 => 41,  87 => 32,  80 => 26,  67 => 30,  57 => 22,  54 => 14,  51 => 13,  44 => 11,  42 => 7,  35 => 6,  32 => 5,  29 => 3,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 104,  196 => 66,  193 => 63,  187 => 62,  183 => 62,  180 => 96,  171 => 54,  166 => 60,  163 => 55,  160 => 54,  157 => 48,  149 => 84,  146 => 41,  140 => 46,  137 => 41,  129 => 36,  124 => 47,  121 => 73,  118 => 36,  115 => 72,  111 => 33,  107 => 40,  104 => 39,  97 => 61,  93 => 18,  90 => 34,  81 => 42,  70 => 28,  66 => 34,  62 => 12,  59 => 13,  56 => 16,  52 => 21,  49 => 10,  45 => 8,  41 => 10,  37 => 7,  33 => 4,  30 => 3,);
    }
}
