<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ede22103fc4b1a9dc4602247be713caf9479adc6ee8da7ae444e2a05ad0339d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABDlBMVEU/Pz////////////////////////////////////////////////////////////////////+qqqr///////////+kpKT///////////////////////////////////+Kior///////////+Ghob///////9kZGT///////////////////////9bW1v///9aWlpZWVn////t7e3////m5ub///9cXFxZWVn////////////////////KysrNzc3///9tbW1WVlZTU1NwcHCnp6dgYGCBgYGZmZl3d3dLS0tMTEyNjY2Tk5NJSUlFRUVERERZWVlCQkJVVVVAQEBCQkJUVFRVVVU/Pz9ERER+LwjMAAAAWHRSTlMAAQIDBQYHCAkLDQ4VFhscHyAiIiMlJjAyNDY3ODk9P0BAREpMTlBdXl9rb3BzdHl6gICChIyPlaOmqKuusLm6v8HFzM3X2tzd4ePn6Onq8vb5+vv9/f3+EYS6xwAAAQFJREFUeNrN0dlSwkAQBdAbA2FTQIIsAmJEA5qIiIoim8oibigI0vz/jygFZEwIw4sP3reeOtVTdRt/G6kwHBYkDvC/EL0HOCBGP4lzwN4UHJGRrMMClOmrzsDH/oYNKBLLc0gA4MwvZtUK6MELiIeDxagvgY4MIdIzxqIVfF6F4WvSSjBpZHyQW6tBO7clIHjRNwO9dDdP5UQWAc9BfWICalSZZzfgBCBsHndNQIEl4o5Wna0s6UYZROcSO3IwMVsZVX9Xfe0CAF7VN+414N7PB68aH7xdxm2+YEXVzmJuLANWVHLbBXvAivqnID0iGqU5IPU0/npMckD49LasyTDlG31Ah7wRFiUBAAAAAElFTkSuQmCC\" alt=\"Routing\"></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => $_token_)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 160,  435 => 159,  417 => 156,  412 => 155,  405 => 152,  402 => 151,  399 => 150,  386 => 147,  383 => 146,  380 => 145,  371 => 140,  353 => 131,  346 => 129,  343 => 128,  322 => 118,  314 => 114,  301 => 107,  290 => 103,  283 => 100,  278 => 97,  254 => 86,  243 => 79,  240 => 78,  233 => 76,  228 => 73,  184 => 53,  167 => 43,  164 => 42,  414 => 126,  407 => 123,  400 => 120,  370 => 114,  367 => 139,  364 => 138,  361 => 111,  358 => 110,  354 => 109,  351 => 108,  340 => 105,  336 => 104,  325 => 119,  286 => 101,  282 => 93,  270 => 93,  262 => 85,  258 => 83,  236 => 77,  209 => 76,  206 => 75,  156 => 51,  144 => 45,  733 => 345,  728 => 344,  724 => 342,  720 => 340,  710 => 337,  705 => 336,  702 => 335,  697 => 334,  688 => 327,  685 => 326,  682 => 325,  678 => 323,  668 => 320,  663 => 319,  660 => 318,  655 => 317,  646 => 310,  643 => 309,  640 => 308,  637 => 307,  633 => 305,  629 => 303,  621 => 300,  613 => 298,  609 => 296,  604 => 295,  598 => 293,  593 => 292,  590 => 291,  585 => 290,  577 => 284,  574 => 283,  570 => 281,  567 => 280,  564 => 279,  561 => 278,  557 => 276,  551 => 272,  547 => 270,  540 => 268,  537 => 267,  528 => 262,  518 => 256,  511 => 254,  508 => 253,  499 => 248,  495 => 246,  479 => 238,  472 => 236,  454 => 226,  443 => 222,  440 => 221,  432 => 215,  426 => 157,  422 => 211,  411 => 207,  391 => 119,  387 => 195,  374 => 141,  369 => 191,  338 => 125,  334 => 183,  323 => 181,  318 => 100,  315 => 179,  303 => 176,  288 => 174,  220 => 108,  212 => 66,  191 => 56,  175 => 63,  168 => 90,  214 => 67,  170 => 62,  151 => 58,  116 => 24,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 245,  489 => 244,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  447 => 172,  439 => 168,  431 => 164,  415 => 156,  403 => 121,  396 => 149,  392 => 141,  388 => 118,  381 => 137,  377 => 116,  373 => 134,  366 => 131,  356 => 127,  350 => 130,  347 => 107,  335 => 122,  332 => 121,  329 => 120,  320 => 113,  317 => 115,  309 => 111,  306 => 110,  300 => 175,  297 => 105,  292 => 95,  275 => 96,  272 => 93,  242 => 81,  238 => 79,  234 => 78,  223 => 73,  216 => 106,  213 => 70,  210 => 69,  203 => 74,  179 => 60,  176 => 47,  169 => 58,  153 => 39,  132 => 42,  128 => 50,  91 => 19,  145 => 35,  99 => 41,  86 => 21,  174 => 63,  113 => 23,  135 => 61,  123 => 27,  139 => 60,  103 => 43,  64 => 15,  95 => 33,  82 => 32,  21 => 2,  23 => 3,  119 => 25,  73 => 37,  68 => 24,  20 => 1,  94 => 54,  83 => 20,  61 => 35,  31 => 4,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 258,  512 => 149,  505 => 148,  502 => 249,  497 => 146,  491 => 144,  488 => 143,  483 => 240,  473 => 134,  469 => 235,  466 => 131,  460 => 230,  455 => 176,  450 => 224,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 158,  423 => 160,  420 => 111,  416 => 110,  413 => 109,  408 => 153,  394 => 198,  390 => 103,  375 => 101,  365 => 99,  362 => 189,  359 => 135,  355 => 95,  348 => 91,  344 => 106,  330 => 89,  327 => 88,  321 => 86,  307 => 97,  302 => 84,  295 => 96,  287 => 80,  279 => 78,  256 => 73,  251 => 81,  239 => 69,  231 => 68,  219 => 68,  201 => 59,  143 => 49,  138 => 44,  134 => 41,  131 => 95,  122 => 36,  108 => 31,  102 => 20,  92 => 24,  84 => 28,  48 => 11,  312 => 98,  308 => 94,  293 => 92,  285 => 96,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 89,  261 => 88,  257 => 87,  253 => 85,  249 => 83,  247 => 70,  237 => 73,  204 => 69,  198 => 58,  194 => 57,  150 => 68,  147 => 98,  127 => 39,  112 => 43,  96 => 25,  76 => 24,  71 => 18,  55 => 8,  114 => 32,  109 => 31,  106 => 63,  85 => 17,  77 => 15,  28 => 3,  39 => 7,  89 => 60,  65 => 23,  63 => 17,  58 => 17,  34 => 5,  26 => 9,  98 => 26,  88 => 18,  46 => 13,  36 => 5,  43 => 12,  50 => 8,  38 => 7,  27 => 3,  227 => 75,  224 => 77,  221 => 90,  207 => 63,  197 => 74,  195 => 64,  192 => 65,  189 => 64,  186 => 60,  181 => 122,  178 => 61,  173 => 46,  162 => 59,  158 => 78,  155 => 77,  152 => 49,  142 => 52,  136 => 44,  130 => 40,  100 => 27,  78 => 17,  75 => 16,  53 => 11,  24 => 4,  25 => 35,  19 => 1,  79 => 25,  74 => 14,  72 => 33,  69 => 37,  60 => 9,  47 => 9,  40 => 6,  22 => 2,  267 => 90,  185 => 58,  182 => 61,  177 => 56,  165 => 89,  159 => 52,  148 => 66,  133 => 87,  125 => 49,  120 => 19,  117 => 36,  110 => 31,  105 => 30,  101 => 27,  87 => 32,  80 => 26,  67 => 12,  57 => 13,  54 => 12,  51 => 11,  44 => 7,  42 => 8,  35 => 6,  32 => 5,  29 => 3,  232 => 72,  226 => 71,  222 => 69,  215 => 67,  211 => 84,  208 => 70,  202 => 68,  196 => 101,  193 => 63,  187 => 54,  183 => 62,  180 => 96,  171 => 54,  166 => 60,  163 => 55,  160 => 54,  157 => 48,  149 => 48,  146 => 41,  140 => 46,  137 => 31,  129 => 36,  124 => 35,  121 => 80,  118 => 36,  115 => 44,  111 => 33,  107 => 21,  104 => 39,  97 => 61,  93 => 23,  90 => 34,  81 => 16,  70 => 13,  66 => 18,  62 => 16,  59 => 13,  56 => 16,  52 => 13,  49 => 14,  45 => 10,  41 => 10,  37 => 5,  33 => 4,  30 => 3,);
    }
}
