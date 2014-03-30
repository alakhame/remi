<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_d425fe798d07aaaa4e8662f994373206b6126e0dcb8d141ec1bd128504691956 extends Twig_Template
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
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
        if (("normal" != $_position_)) {
            // line 3
            echo "    <div id=\"sfMiniToolbar-";
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "\" class=\"sf-minitoolbar\">
        <a href=\"javascript:void(0);\" title=\"Show Symfony toolbar\" onclick=\"
            var elem = this.parentNode;
            if (elem.style.display == 'none') {
                document.getElementById('sfToolbarMainContent-";
            // line 7
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "').style.display = 'none';
                document.getElementById('sfToolbarClearer-";
            // line 8
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "').style.display = 'none';
                elem.style.display = 'block';
            } else {
                document.getElementById('sfToolbarMainContent-";
            // line 11
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "').style.display = 'block';
                document.getElementById('sfToolbarClearer-";
            // line 12
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "').style.display = 'block';
                elem.style.display = 'none'
            }

            Sfjs.setPreference('toolbar/displayState', 'block');
        \">
            <img width=\"26\" height=\"28\" alt=\"Symfony\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC\" />
        </a>
    </div>
    <style>
        ";
            // line 22
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar.css.twig")->display(array_merge($context, array("position" => $_position_, "floatable" => true)));
            // line 23
            echo "    </style>
    <div id=\"sfToolbarClearer-";
            // line 24
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "\" style=\"clear: both; height: 38px;\"></div>
";
        }
        // line 26
        echo "
<div id=\"sfToolbarMainContent-";
        // line 27
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $_token_, "html", null, true);
        echo "\" class=\"sf-toolbarreset\">
    ";
        // line 28
        if (isset($context["templates"])) { $_templates_ = $context["templates"]; } else { $_templates_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_templates_);
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 29
            echo "        ";
            if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_template_, "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute($_profile_, "getcollector", array(0 => $_name_), "method"), "profiler_url" => $_profiler_url_, "token" => $this->getAttribute($_profile_, "token"), "name" => $_name_)), "method"), "html", null, true);
            // line 35
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    ";
        // line 38
        if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
        if (("normal" != $_position_)) {
            // line 39
            echo "        <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
            document.getElementById('sfMiniToolbar-";
            // line 43
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "').style.display = 'block';
            Sfjs.setPreference('toolbar/displayState', 'none');
        \"></a>
    ";
        }
        // line 47
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  512 => 149,  505 => 148,  497 => 146,  491 => 144,  488 => 143,  473 => 134,  466 => 131,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  420 => 111,  416 => 110,  413 => 109,  390 => 103,  375 => 101,  365 => 99,  355 => 95,  348 => 91,  330 => 89,  327 => 88,  321 => 86,  302 => 84,  287 => 80,  279 => 78,  256 => 73,  239 => 69,  231 => 68,  155 => 55,  138 => 44,  131 => 42,  84 => 21,  58 => 10,  308 => 94,  293 => 92,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  247 => 70,  237 => 73,  204 => 69,  178 => 61,  158 => 56,  150 => 54,  147 => 51,  142 => 52,  112 => 32,  109 => 31,  232 => 72,  226 => 71,  211 => 71,  202 => 68,  183 => 62,  171 => 54,  146 => 41,  124 => 47,  118 => 36,  59 => 11,  733 => 345,  728 => 344,  724 => 342,  720 => 340,  710 => 337,  705 => 336,  702 => 335,  688 => 327,  685 => 326,  682 => 325,  678 => 323,  668 => 320,  660 => 318,  646 => 310,  643 => 309,  640 => 308,  637 => 307,  633 => 305,  629 => 303,  621 => 300,  613 => 298,  609 => 296,  604 => 295,  598 => 293,  593 => 292,  590 => 291,  585 => 290,  577 => 284,  574 => 283,  570 => 281,  567 => 280,  564 => 279,  557 => 276,  551 => 272,  540 => 268,  537 => 267,  528 => 262,  522 => 151,  518 => 256,  511 => 254,  508 => 253,  502 => 147,  499 => 248,  495 => 246,  483 => 142,  479 => 238,  472 => 236,  469 => 132,  460 => 130,  454 => 226,  450 => 126,  443 => 222,  440 => 221,  432 => 215,  422 => 211,  411 => 207,  394 => 105,  387 => 195,  369 => 191,  334 => 183,  323 => 181,  315 => 179,  303 => 176,  288 => 174,  220 => 108,  168 => 90,  93 => 22,  49 => 9,  34 => 7,  31 => 4,  864 => 492,  861 => 491,  848 => 489,  843 => 488,  839 => 486,  826 => 485,  799 => 479,  796 => 478,  774 => 476,  756 => 475,  751 => 473,  746 => 472,  741 => 471,  736 => 470,  731 => 469,  726 => 468,  721 => 467,  718 => 466,  715 => 465,  697 => 334,  686 => 462,  670 => 456,  663 => 319,  658 => 453,  655 => 317,  653 => 451,  639 => 449,  634 => 446,  600 => 414,  579 => 411,  561 => 278,  558 => 409,  555 => 408,  547 => 270,  541 => 404,  269 => 136,  225 => 94,  208 => 70,  193 => 63,  190 => 85,  186 => 60,  180 => 59,  157 => 48,  154 => 74,  143 => 49,  129 => 36,  121 => 34,  103 => 45,  97 => 35,  94 => 42,  41 => 6,  28 => 3,  414 => 126,  407 => 123,  400 => 120,  391 => 197,  370 => 114,  361 => 111,  358 => 110,  354 => 109,  351 => 108,  344 => 90,  340 => 105,  336 => 104,  318 => 180,  312 => 96,  307 => 85,  295 => 81,  282 => 93,  262 => 85,  258 => 83,  251 => 71,  224 => 77,  209 => 76,  206 => 75,  175 => 95,  156 => 51,  152 => 49,  149 => 42,  144 => 45,  130 => 42,  127 => 41,  96 => 25,  64 => 11,  48 => 7,  39 => 8,  214 => 67,  196 => 64,  189 => 61,  174 => 63,  170 => 62,  162 => 58,  151 => 58,  134 => 43,  104 => 37,  100 => 27,  82 => 32,  65 => 22,  27 => 3,  95 => 33,  92 => 25,  86 => 21,  83 => 20,  76 => 17,  438 => 160,  435 => 159,  429 => 116,  426 => 213,  417 => 156,  412 => 155,  408 => 106,  405 => 152,  402 => 151,  399 => 150,  386 => 147,  383 => 146,  380 => 145,  374 => 192,  371 => 140,  367 => 113,  364 => 112,  353 => 131,  346 => 129,  343 => 128,  338 => 185,  325 => 101,  322 => 118,  314 => 114,  301 => 107,  290 => 103,  286 => 94,  283 => 100,  278 => 97,  270 => 92,  264 => 74,  261 => 81,  254 => 86,  243 => 79,  240 => 78,  236 => 78,  233 => 76,  228 => 73,  222 => 76,  215 => 73,  212 => 104,  207 => 70,  201 => 66,  194 => 64,  191 => 98,  184 => 53,  173 => 58,  167 => 43,  164 => 77,  123 => 27,  119 => 35,  116 => 43,  113 => 23,  102 => 28,  85 => 28,  81 => 19,  77 => 26,  50 => 14,  36 => 5,  79 => 25,  74 => 17,  72 => 15,  69 => 14,  66 => 13,  60 => 25,  52 => 10,  47 => 9,  45 => 7,  40 => 6,  37 => 5,  22 => 2,  185 => 58,  177 => 82,  165 => 89,  159 => 52,  148 => 42,  137 => 37,  133 => 40,  120 => 38,  117 => 36,  115 => 32,  110 => 39,  107 => 38,  101 => 27,  90 => 29,  87 => 24,  80 => 27,  70 => 15,  67 => 15,  62 => 11,  57 => 24,  54 => 12,  51 => 12,  44 => 7,  42 => 8,  32 => 4,  29 => 3,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 245,  489 => 244,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  455 => 129,  447 => 172,  439 => 168,  431 => 164,  423 => 112,  415 => 156,  403 => 205,  396 => 149,  392 => 141,  388 => 118,  381 => 137,  377 => 193,  373 => 134,  366 => 131,  362 => 98,  359 => 97,  356 => 127,  350 => 188,  347 => 107,  335 => 122,  332 => 121,  329 => 102,  320 => 113,  317 => 115,  309 => 111,  306 => 110,  300 => 175,  297 => 105,  292 => 95,  285 => 90,  275 => 96,  272 => 93,  267 => 32,  257 => 79,  253 => 77,  249 => 76,  242 => 81,  238 => 79,  234 => 78,  227 => 75,  223 => 73,  219 => 67,  216 => 106,  213 => 70,  210 => 69,  203 => 74,  198 => 65,  195 => 65,  192 => 65,  187 => 62,  182 => 57,  179 => 60,  176 => 47,  169 => 80,  166 => 51,  163 => 50,  160 => 49,  153 => 39,  145 => 54,  140 => 38,  132 => 42,  128 => 50,  125 => 49,  122 => 37,  114 => 52,  111 => 32,  108 => 31,  105 => 31,  98 => 26,  91 => 41,  88 => 40,  78 => 17,  75 => 16,  71 => 24,  68 => 23,  63 => 17,  56 => 12,  46 => 11,  43 => 7,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
