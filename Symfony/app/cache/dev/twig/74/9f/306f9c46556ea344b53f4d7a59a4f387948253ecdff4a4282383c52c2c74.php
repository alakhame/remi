<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_749f306f9c46556ea344b53f4d7a59a4f387948253ecdff4a4282383c52c2c74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        echo "config_done";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if (isset($context["is_writable"])) { $_is_writable_ = $context["is_writable"]; } else { $_is_writable_ = null; }
        if ($_is_writable_) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if (isset($context["is_writable"])) { $_is_writable_ = $context["is_writable"]; } else { $_is_writable_ = null; }
        if ($_is_writable_) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            if (isset($context["yml_path"])) { $_yml_path_ = $context["yml_path"]; } else { $_yml_path_ = null; }
            echo twig_escape_filter($this->env, $_yml_path_, "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            if (isset($context["yml_path"])) { $_yml_path_ = $context["yml_path"]; } else { $_yml_path_ = null; }
            echo twig_escape_filter($this->env, $_yml_path_, "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        if (isset($context["parameters"])) { $_parameters_ = $context["parameters"]; } else { $_parameters_ = null; }
        echo twig_escape_filter($this->env, $_parameters_, "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if (isset($context["welcome_url"])) { $_welcome_url_ = $context["welcome_url"]; } else { $_welcome_url_ = null; }
        if ($_welcome_url_) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            if (isset($context["welcome_url"])) { $_welcome_url_ = $context["welcome_url"]; } else { $_welcome_url_ = null; }
            echo twig_escape_filter($this->env, $_welcome_url_, "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 329,  864 => 492,  861 => 491,  848 => 489,  843 => 488,  839 => 486,  826 => 485,  799 => 479,  796 => 478,  774 => 476,  756 => 475,  751 => 473,  746 => 472,  741 => 471,  736 => 470,  731 => 469,  726 => 468,  721 => 467,  718 => 466,  715 => 465,  686 => 462,  670 => 456,  658 => 453,  653 => 451,  639 => 449,  634 => 446,  600 => 414,  579 => 411,  558 => 409,  555 => 408,  541 => 404,  269 => 136,  225 => 94,  190 => 85,  154 => 74,  438 => 160,  435 => 159,  417 => 156,  412 => 155,  405 => 152,  402 => 151,  399 => 150,  386 => 147,  383 => 146,  380 => 145,  371 => 140,  353 => 131,  346 => 129,  343 => 128,  322 => 118,  314 => 114,  301 => 107,  290 => 103,  283 => 100,  278 => 97,  254 => 86,  243 => 79,  240 => 78,  233 => 76,  228 => 73,  184 => 53,  167 => 43,  164 => 77,  414 => 126,  407 => 123,  400 => 120,  370 => 114,  367 => 139,  364 => 138,  361 => 111,  358 => 110,  354 => 328,  351 => 327,  340 => 105,  336 => 104,  325 => 119,  286 => 101,  282 => 93,  270 => 93,  262 => 85,  258 => 83,  236 => 77,  209 => 76,  206 => 75,  144 => 45,  733 => 345,  728 => 344,  724 => 342,  720 => 340,  710 => 337,  705 => 336,  702 => 335,  697 => 464,  688 => 327,  685 => 326,  682 => 325,  678 => 323,  668 => 320,  663 => 454,  660 => 318,  655 => 452,  646 => 310,  643 => 309,  640 => 308,  637 => 307,  633 => 305,  629 => 303,  621 => 300,  613 => 298,  609 => 296,  604 => 295,  598 => 293,  593 => 292,  590 => 291,  585 => 290,  577 => 284,  574 => 283,  570 => 281,  567 => 280,  564 => 279,  561 => 410,  557 => 276,  551 => 272,  547 => 406,  540 => 268,  537 => 267,  528 => 262,  518 => 256,  511 => 254,  508 => 253,  499 => 248,  495 => 246,  479 => 238,  472 => 236,  454 => 226,  443 => 222,  440 => 221,  432 => 215,  426 => 157,  422 => 211,  411 => 207,  391 => 119,  387 => 195,  374 => 141,  369 => 339,  338 => 125,  334 => 183,  323 => 181,  318 => 100,  315 => 179,  303 => 176,  288 => 174,  220 => 108,  212 => 66,  191 => 56,  175 => 63,  168 => 90,  214 => 67,  170 => 62,  151 => 58,  116 => 43,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 245,  489 => 244,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  447 => 172,  439 => 168,  431 => 164,  415 => 156,  403 => 121,  396 => 149,  392 => 141,  388 => 118,  381 => 137,  377 => 116,  373 => 134,  366 => 131,  356 => 127,  350 => 130,  347 => 107,  335 => 122,  332 => 121,  329 => 120,  320 => 113,  317 => 115,  309 => 287,  306 => 286,  300 => 175,  297 => 105,  292 => 95,  275 => 96,  272 => 93,  242 => 81,  238 => 79,  234 => 78,  216 => 106,  213 => 70,  210 => 69,  203 => 74,  179 => 60,  176 => 47,  169 => 80,  153 => 39,  132 => 42,  145 => 35,  99 => 31,  86 => 25,  174 => 63,  119 => 25,  113 => 23,  82 => 23,  135 => 61,  123 => 27,  68 => 21,  230 => 123,  223 => 73,  172 => 95,  91 => 26,  126 => 60,  95 => 32,  103 => 34,  23 => 3,  156 => 51,  128 => 50,  64 => 27,  20 => 1,  94 => 30,  83 => 28,  61 => 16,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 258,  512 => 149,  505 => 148,  502 => 249,  497 => 146,  491 => 144,  488 => 143,  483 => 240,  473 => 134,  469 => 235,  466 => 131,  460 => 230,  455 => 176,  450 => 224,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 158,  423 => 160,  420 => 111,  416 => 110,  413 => 109,  408 => 153,  394 => 198,  390 => 103,  375 => 101,  365 => 99,  362 => 189,  359 => 135,  355 => 95,  348 => 91,  344 => 106,  330 => 89,  327 => 88,  321 => 86,  307 => 97,  302 => 84,  295 => 96,  287 => 80,  279 => 78,  256 => 73,  251 => 81,  239 => 69,  231 => 68,  219 => 92,  201 => 87,  143 => 71,  138 => 44,  134 => 41,  131 => 95,  122 => 36,  108 => 31,  102 => 35,  92 => 27,  84 => 24,  48 => 14,  312 => 98,  308 => 94,  293 => 92,  285 => 96,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 89,  261 => 88,  257 => 87,  253 => 85,  249 => 83,  247 => 70,  237 => 73,  204 => 69,  198 => 58,  194 => 57,  150 => 54,  147 => 65,  127 => 40,  112 => 36,  96 => 33,  76 => 24,  71 => 22,  55 => 12,  114 => 52,  109 => 33,  106 => 63,  85 => 24,  77 => 21,  28 => 3,  39 => 7,  89 => 60,  65 => 11,  63 => 17,  58 => 13,  34 => 4,  26 => 6,  98 => 29,  88 => 25,  46 => 11,  36 => 9,  43 => 11,  50 => 10,  38 => 5,  27 => 3,  227 => 75,  224 => 77,  221 => 90,  207 => 63,  197 => 74,  195 => 64,  192 => 65,  189 => 64,  186 => 84,  181 => 122,  178 => 61,  173 => 46,  162 => 59,  158 => 56,  155 => 55,  152 => 49,  142 => 52,  136 => 57,  130 => 40,  100 => 27,  78 => 17,  75 => 16,  53 => 12,  24 => 4,  25 => 2,  19 => 1,  79 => 22,  74 => 19,  72 => 18,  69 => 17,  60 => 15,  47 => 9,  40 => 7,  22 => 2,  267 => 90,  185 => 58,  182 => 61,  177 => 82,  165 => 89,  159 => 52,  148 => 66,  133 => 43,  125 => 49,  120 => 19,  117 => 37,  110 => 39,  105 => 30,  101 => 34,  87 => 32,  80 => 22,  67 => 17,  57 => 14,  54 => 15,  51 => 15,  44 => 11,  42 => 7,  35 => 4,  32 => 7,  29 => 3,  232 => 72,  226 => 71,  222 => 93,  215 => 67,  211 => 84,  208 => 90,  202 => 104,  196 => 101,  193 => 86,  187 => 54,  183 => 62,  180 => 83,  171 => 54,  166 => 60,  163 => 55,  160 => 54,  157 => 75,  149 => 73,  146 => 41,  140 => 46,  137 => 31,  129 => 61,  124 => 40,  121 => 39,  118 => 38,  115 => 37,  111 => 51,  107 => 35,  104 => 37,  97 => 35,  93 => 30,  90 => 29,  81 => 16,  70 => 13,  66 => 16,  62 => 14,  59 => 20,  56 => 19,  52 => 12,  49 => 10,  45 => 8,  41 => 7,  37 => 6,  33 => 4,  30 => 5,);
    }
}
