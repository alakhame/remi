<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_b19cfae281b16a1edfa5f8c786e95acd2b24bf8fbed7a5d620761adbbb4aa03f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\" />
            <span>";
        // line 7
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($_collector_, "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($_collector_, "memory") / 1024) / 1024)), "html", null, true);
        echo " / ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo ((($this->getAttribute($_collector_, "memoryLimit") == (-1))) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($_collector_, "memoryLimit") / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 126,  407 => 123,  400 => 120,  370 => 114,  367 => 113,  364 => 112,  361 => 111,  358 => 110,  354 => 109,  351 => 108,  340 => 105,  336 => 104,  325 => 101,  286 => 94,  282 => 93,  270 => 92,  262 => 85,  258 => 83,  236 => 78,  209 => 76,  206 => 75,  156 => 51,  144 => 45,  733 => 345,  728 => 344,  724 => 342,  720 => 340,  710 => 337,  705 => 336,  702 => 335,  697 => 334,  688 => 327,  685 => 326,  682 => 325,  678 => 323,  668 => 320,  663 => 319,  660 => 318,  655 => 317,  646 => 310,  643 => 309,  640 => 308,  637 => 307,  633 => 305,  629 => 303,  621 => 300,  613 => 298,  609 => 296,  604 => 295,  598 => 293,  593 => 292,  590 => 291,  585 => 290,  577 => 284,  574 => 283,  570 => 281,  567 => 280,  564 => 279,  561 => 278,  557 => 276,  551 => 272,  547 => 270,  540 => 268,  537 => 267,  528 => 262,  518 => 256,  511 => 254,  508 => 253,  499 => 248,  495 => 246,  479 => 238,  472 => 236,  454 => 226,  443 => 222,  440 => 221,  432 => 215,  426 => 213,  422 => 211,  411 => 207,  391 => 119,  387 => 195,  374 => 192,  369 => 191,  338 => 185,  334 => 183,  323 => 181,  318 => 100,  315 => 179,  303 => 176,  288 => 174,  220 => 108,  212 => 104,  191 => 98,  175 => 63,  168 => 90,  214 => 67,  170 => 62,  151 => 58,  116 => 47,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 245,  489 => 244,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  447 => 172,  439 => 168,  431 => 164,  415 => 156,  403 => 121,  396 => 143,  392 => 141,  388 => 118,  381 => 137,  377 => 116,  373 => 134,  366 => 131,  356 => 127,  350 => 188,  347 => 107,  335 => 122,  332 => 121,  329 => 102,  320 => 113,  317 => 112,  309 => 106,  306 => 105,  300 => 175,  297 => 101,  292 => 95,  275 => 94,  272 => 93,  242 => 81,  238 => 79,  234 => 78,  223 => 73,  216 => 106,  213 => 70,  210 => 69,  203 => 74,  179 => 60,  176 => 59,  169 => 58,  153 => 51,  132 => 42,  128 => 50,  91 => 24,  145 => 54,  99 => 41,  86 => 21,  174 => 63,  113 => 22,  135 => 61,  123 => 20,  139 => 60,  103 => 43,  64 => 15,  95 => 33,  82 => 32,  21 => 2,  23 => 3,  119 => 35,  73 => 37,  68 => 24,  20 => 1,  94 => 54,  83 => 20,  61 => 35,  31 => 4,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 258,  512 => 149,  505 => 148,  502 => 249,  497 => 146,  491 => 144,  488 => 143,  483 => 240,  473 => 134,  469 => 235,  466 => 131,  460 => 230,  455 => 176,  450 => 224,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 214,  423 => 160,  420 => 111,  416 => 110,  413 => 109,  408 => 206,  394 => 198,  390 => 103,  375 => 101,  365 => 99,  362 => 189,  359 => 128,  355 => 95,  348 => 91,  344 => 106,  330 => 89,  327 => 88,  321 => 86,  307 => 97,  302 => 84,  295 => 96,  287 => 80,  279 => 78,  256 => 73,  251 => 81,  239 => 69,  231 => 68,  219 => 72,  201 => 102,  143 => 49,  138 => 44,  134 => 41,  131 => 95,  122 => 36,  108 => 31,  102 => 60,  92 => 24,  84 => 28,  48 => 11,  312 => 98,  308 => 94,  293 => 92,  285 => 96,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 87,  253 => 85,  249 => 84,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 68,  147 => 98,  127 => 39,  112 => 43,  96 => 25,  76 => 24,  71 => 18,  55 => 8,  114 => 32,  109 => 31,  106 => 63,  85 => 21,  77 => 18,  28 => 3,  39 => 7,  89 => 60,  65 => 23,  63 => 17,  58 => 17,  34 => 5,  26 => 9,  98 => 26,  88 => 23,  46 => 13,  36 => 5,  43 => 12,  50 => 14,  38 => 7,  27 => 3,  227 => 75,  224 => 77,  221 => 90,  207 => 70,  197 => 74,  195 => 64,  192 => 65,  189 => 64,  186 => 60,  181 => 122,  178 => 61,  173 => 58,  162 => 59,  158 => 78,  155 => 77,  152 => 49,  142 => 52,  136 => 44,  130 => 40,  100 => 27,  78 => 17,  75 => 16,  53 => 11,  24 => 4,  25 => 35,  19 => 1,  79 => 25,  74 => 17,  72 => 33,  69 => 37,  60 => 14,  47 => 9,  40 => 6,  22 => 2,  267 => 90,  185 => 58,  182 => 61,  177 => 56,  165 => 89,  159 => 52,  148 => 66,  133 => 87,  125 => 49,  120 => 19,  117 => 36,  110 => 31,  105 => 30,  101 => 27,  87 => 32,  80 => 26,  67 => 12,  57 => 13,  54 => 12,  51 => 11,  44 => 11,  42 => 8,  35 => 6,  32 => 5,  29 => 3,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 101,  193 => 63,  187 => 62,  183 => 62,  180 => 96,  171 => 54,  166 => 60,  163 => 55,  160 => 54,  157 => 48,  149 => 48,  146 => 41,  140 => 46,  137 => 42,  129 => 36,  124 => 35,  121 => 80,  118 => 36,  115 => 44,  111 => 33,  107 => 30,  104 => 39,  97 => 61,  93 => 23,  90 => 34,  81 => 19,  70 => 13,  66 => 18,  62 => 16,  59 => 13,  56 => 16,  52 => 13,  49 => 10,  45 => 10,  41 => 10,  37 => 5,  33 => 4,  30 => 3,);
    }
}
