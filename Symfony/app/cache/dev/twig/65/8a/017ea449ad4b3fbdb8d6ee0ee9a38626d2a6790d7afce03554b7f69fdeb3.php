<?php

/* InnovitQuestionBundle:Question:pick.html.twig */
class __TwigTemplate_658a017ea449ad4b3fbdb8d6ee0ee9a38626d2a6790d7afce03554b7f69fdeb3 extends Twig_Template
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
        echo "
<div id=\"qestion_p\" > ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "question"), "html", null, true);
        echo "     </div>
<div id=\"rep1_p\"    > ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "rep1"), "html", null, true);
        echo "         </div>
<div id=\"rep2_p\"    > ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "rep2"), "html", null, true);
        echo "         </div>
<div id=\"rep3_p\"    > ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "rep3"), "html", null, true);
        echo "         </div>
<div id=\"rep4_p\"    > ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "rep4"), "html", null, true);
        echo "         </div>
<div id=\"rep_p\"     > ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "rep"), "html", null, true);
        echo "          </div>
<div id=\"exp_p\"     > ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "explications"), "html", null, true);
        echo " </div>
";
    }

    public function getTemplateName()
    {
        return "InnovitQuestionBundle:Question:pick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 70,  113 => 55,  137 => 66,  124 => 56,  90 => 42,  65 => 19,  76 => 37,  53 => 13,  134 => 51,  97 => 44,  77 => 44,  226 => 179,  222 => 178,  218 => 177,  211 => 173,  207 => 172,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 233,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 69,  132 => 51,  128 => 60,  107 => 36,  61 => 32,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 38,  63 => 33,  59 => 29,  94 => 41,  89 => 64,  85 => 25,  75 => 46,  68 => 35,  56 => 25,  21 => 2,  88 => 6,  78 => 21,  44 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 94,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 77,  142 => 59,  138 => 68,  136 => 56,  121 => 57,  117 => 56,  105 => 53,  49 => 23,  25 => 5,  79 => 40,  69 => 37,  47 => 20,  246 => 90,  157 => 56,  145 => 46,  139 => 68,  131 => 50,  123 => 71,  120 => 40,  115 => 43,  111 => 37,  108 => 70,  101 => 52,  98 => 30,  96 => 44,  83 => 38,  74 => 54,  66 => 34,  52 => 9,  209 => 82,  203 => 171,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 99,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 75,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 58,  122 => 43,  116 => 50,  112 => 46,  109 => 54,  106 => 36,  99 => 31,  95 => 29,  92 => 21,  86 => 41,  82 => 40,  80 => 38,  73 => 36,  64 => 13,  57 => 32,  45 => 22,  60 => 17,  55 => 22,  51 => 21,  43 => 19,  35 => 13,  34 => 5,  37 => 14,  32 => 5,  48 => 8,  42 => 7,  39 => 7,  30 => 4,  26 => 3,  24 => 4,  50 => 28,  41 => 11,  38 => 6,  27 => 6,  23 => 3,  33 => 6,  22 => 2,  19 => 1,  103 => 49,  100 => 65,  93 => 65,  91 => 27,  87 => 39,  81 => 58,  72 => 15,  67 => 36,  62 => 13,  58 => 31,  54 => 17,  46 => 8,  40 => 10,  36 => 14,  29 => 4,  20 => 1,  31 => 3,  28 => 2,);
    }
}
