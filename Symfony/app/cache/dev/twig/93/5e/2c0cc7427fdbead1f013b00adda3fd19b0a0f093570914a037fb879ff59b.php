<?php

/* InnovitProfilBundle:menu:coursById.html.twig */
class __TwigTemplate_935e2c0cc7427fdbead1f013b00adda3fd19b0a0f093570914a037fb879ff59b extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) ? $context["cours"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo "\t
\t
\t<div class=\"liste_cours\" style=\"\">
\t<div class=\"signler_cours\" class=\"\" title=\"\" style=\"\"></div>
\t<div class=\"titre_cours_mat\" class=\"\" style=\"\"> ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "titre"), "html", null, true);
            echo " </div>
\t<div class=\"check_cours_mat\" class=\"\" style=\"\"> <input type=\"checkbox\" name=\"option1\" value=\"Milk\"> </div>
\t
\t
\t</div >
\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t";
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:menu:coursById.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 53,  77 => 25,  53 => 11,  137 => 54,  134 => 51,  126 => 74,  84 => 42,  70 => 37,  65 => 35,  127 => 76,  114 => 66,  104 => 59,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  63 => 33,  59 => 13,  94 => 52,  89 => 34,  85 => 25,  75 => 39,  68 => 35,  56 => 9,  21 => 2,  88 => 6,  78 => 21,  44 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  49 => 19,  25 => 3,  79 => 40,  69 => 33,  47 => 17,  37 => 7,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 50,  123 => 71,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 53,  96 => 31,  83 => 35,  74 => 39,  66 => 34,  52 => 21,  32 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 63,  109 => 60,  106 => 60,  99 => 31,  95 => 50,  92 => 21,  86 => 4,  82 => 40,  80 => 19,  73 => 24,  64 => 29,  57 => 11,  45 => 21,  60 => 33,  55 => 12,  51 => 14,  43 => 19,  35 => 4,  34 => 6,  48 => 13,  42 => 19,  39 => 7,  30 => 7,  26 => 6,  24 => 4,  50 => 23,  41 => 11,  38 => 9,  27 => 3,  23 => 3,  33 => 7,  22 => 2,  19 => 1,  103 => 57,  100 => 56,  93 => 28,  91 => 27,  87 => 25,  81 => 42,  72 => 31,  67 => 34,  62 => 13,  58 => 31,  54 => 11,  46 => 8,  40 => 7,  36 => 6,  29 => 4,  20 => 1,  31 => 3,  28 => 5,);
    }
}
