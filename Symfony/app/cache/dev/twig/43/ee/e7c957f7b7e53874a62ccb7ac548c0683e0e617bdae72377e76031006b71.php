<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_43eee7c957f7b7e53874a62ccb7ac548c0683e0e617bdae72377e76031006b71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Redirection Intercepted";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        if (isset($context["location"])) { $_location_ = $context["location"]; } else { $_location_ = null; }
        echo twig_escape_filter($this->env, $_location_, "html", null, true);
        echo "\">";
        if (isset($context["location"])) { $_location_ = $context["location"]; } else { $_location_ = null; }
        echo twig_escape_filter($this->env, $_location_, "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 329,  864 => 492,  861 => 491,  848 => 489,  843 => 488,  839 => 486,  826 => 485,  799 => 479,  796 => 478,  774 => 476,  756 => 475,  751 => 473,  746 => 472,  741 => 471,  736 => 470,  731 => 469,  726 => 468,  721 => 467,  718 => 466,  715 => 465,  686 => 462,  670 => 456,  658 => 453,  653 => 451,  639 => 449,  634 => 446,  600 => 414,  579 => 411,  558 => 409,  555 => 408,  541 => 404,  269 => 136,  225 => 94,  190 => 85,  154 => 74,  438 => 160,  435 => 159,  417 => 156,  412 => 155,  405 => 152,  402 => 151,  399 => 150,  386 => 147,  383 => 146,  380 => 145,  371 => 140,  353 => 131,  346 => 129,  343 => 128,  322 => 118,  314 => 114,  301 => 107,  290 => 103,  283 => 100,  278 => 97,  254 => 86,  243 => 79,  240 => 78,  233 => 76,  228 => 73,  184 => 53,  167 => 43,  164 => 77,  414 => 126,  407 => 123,  400 => 120,  370 => 114,  367 => 139,  364 => 138,  361 => 111,  358 => 110,  354 => 328,  351 => 327,  340 => 105,  336 => 104,  325 => 119,  286 => 101,  282 => 93,  270 => 93,  262 => 85,  258 => 83,  236 => 77,  209 => 76,  206 => 75,  156 => 51,  144 => 45,  733 => 345,  728 => 344,  724 => 342,  720 => 340,  710 => 337,  705 => 336,  702 => 335,  697 => 464,  688 => 327,  685 => 326,  682 => 325,  678 => 323,  668 => 320,  663 => 454,  660 => 318,  655 => 452,  646 => 310,  643 => 309,  640 => 308,  637 => 307,  633 => 305,  629 => 303,  621 => 300,  613 => 298,  609 => 296,  604 => 295,  598 => 293,  593 => 292,  590 => 291,  585 => 290,  577 => 284,  574 => 283,  570 => 281,  567 => 280,  564 => 279,  561 => 410,  557 => 276,  551 => 272,  547 => 406,  540 => 268,  537 => 267,  528 => 262,  518 => 256,  511 => 254,  508 => 253,  499 => 248,  495 => 246,  479 => 238,  472 => 236,  454 => 226,  443 => 222,  440 => 221,  432 => 215,  426 => 157,  422 => 211,  411 => 207,  391 => 119,  387 => 195,  374 => 141,  369 => 339,  338 => 125,  334 => 183,  323 => 181,  318 => 100,  315 => 179,  303 => 176,  288 => 174,  220 => 108,  212 => 66,  191 => 56,  175 => 63,  168 => 90,  214 => 67,  170 => 62,  151 => 58,  116 => 43,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 245,  489 => 244,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  447 => 172,  439 => 168,  431 => 164,  415 => 156,  403 => 121,  396 => 149,  392 => 141,  388 => 118,  381 => 137,  377 => 116,  373 => 134,  366 => 131,  356 => 127,  350 => 130,  347 => 107,  335 => 122,  332 => 121,  329 => 120,  320 => 113,  317 => 115,  309 => 287,  306 => 286,  300 => 175,  297 => 105,  292 => 95,  275 => 96,  272 => 93,  242 => 81,  238 => 79,  234 => 78,  223 => 73,  216 => 106,  213 => 70,  210 => 69,  203 => 74,  179 => 60,  176 => 47,  169 => 80,  153 => 39,  132 => 42,  128 => 50,  91 => 31,  145 => 35,  99 => 41,  86 => 23,  174 => 63,  113 => 23,  135 => 61,  123 => 27,  139 => 60,  103 => 34,  64 => 27,  95 => 32,  82 => 24,  21 => 2,  23 => 3,  119 => 25,  73 => 37,  68 => 23,  20 => 1,  94 => 42,  83 => 28,  61 => 16,  31 => 5,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 258,  512 => 149,  505 => 148,  502 => 249,  497 => 146,  491 => 144,  488 => 143,  483 => 240,  473 => 134,  469 => 235,  466 => 131,  460 => 230,  455 => 176,  450 => 224,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 158,  423 => 160,  420 => 111,  416 => 110,  413 => 109,  408 => 153,  394 => 198,  390 => 103,  375 => 101,  365 => 99,  362 => 189,  359 => 135,  355 => 95,  348 => 91,  344 => 106,  330 => 89,  327 => 88,  321 => 86,  307 => 97,  302 => 84,  295 => 96,  287 => 80,  279 => 78,  256 => 73,  251 => 81,  239 => 69,  231 => 68,  219 => 92,  201 => 87,  143 => 71,  138 => 44,  134 => 41,  131 => 95,  122 => 36,  108 => 31,  102 => 35,  92 => 27,  84 => 28,  48 => 21,  312 => 98,  308 => 94,  293 => 92,  285 => 96,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 89,  261 => 88,  257 => 87,  253 => 85,  249 => 83,  247 => 70,  237 => 73,  204 => 69,  198 => 58,  194 => 57,  150 => 68,  147 => 98,  127 => 39,  112 => 43,  96 => 25,  76 => 24,  71 => 24,  55 => 38,  114 => 52,  109 => 34,  106 => 63,  85 => 28,  77 => 26,  28 => 3,  39 => 8,  89 => 60,  65 => 22,  63 => 17,  58 => 17,  34 => 6,  26 => 6,  98 => 26,  88 => 29,  46 => 11,  36 => 9,  43 => 13,  50 => 8,  38 => 6,  27 => 3,  227 => 75,  224 => 77,  221 => 90,  207 => 63,  197 => 74,  195 => 64,  192 => 65,  189 => 64,  186 => 84,  181 => 122,  178 => 61,  173 => 46,  162 => 59,  158 => 78,  155 => 77,  152 => 49,  142 => 52,  136 => 44,  130 => 40,  100 => 27,  78 => 17,  75 => 16,  53 => 11,  24 => 4,  25 => 2,  19 => 1,  79 => 18,  74 => 14,  72 => 25,  69 => 21,  60 => 25,  47 => 9,  40 => 7,  22 => 2,  267 => 90,  185 => 58,  182 => 61,  177 => 82,  165 => 89,  159 => 52,  148 => 66,  133 => 87,  125 => 49,  120 => 19,  117 => 36,  110 => 39,  105 => 30,  101 => 27,  87 => 32,  80 => 27,  67 => 24,  57 => 15,  54 => 15,  51 => 12,  44 => 11,  42 => 8,  35 => 5,  32 => 4,  29 => 3,  232 => 72,  226 => 71,  222 => 93,  215 => 67,  211 => 84,  208 => 90,  202 => 68,  196 => 101,  193 => 86,  187 => 54,  183 => 62,  180 => 83,  171 => 54,  166 => 60,  163 => 55,  160 => 54,  157 => 75,  149 => 73,  146 => 41,  140 => 46,  137 => 31,  129 => 61,  124 => 47,  121 => 57,  118 => 36,  115 => 44,  111 => 51,  107 => 38,  104 => 37,  97 => 35,  93 => 30,  90 => 29,  81 => 16,  70 => 13,  66 => 18,  62 => 18,  59 => 20,  56 => 19,  52 => 13,  49 => 14,  45 => 12,  41 => 10,  37 => 6,  33 => 4,  30 => 5,);
    }
}
