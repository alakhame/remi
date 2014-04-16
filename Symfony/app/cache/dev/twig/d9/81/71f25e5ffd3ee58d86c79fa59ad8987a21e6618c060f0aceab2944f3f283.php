<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_d98171f25e5ffd3ee58d86c79fa59ad8987a21e6618c060f0aceab2944f3f283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : null)), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  146 => 70,  113 => 55,  124 => 56,  90 => 32,  76 => 17,  97 => 44,  77 => 44,  53 => 10,  137 => 66,  134 => 51,  126 => 74,  84 => 29,  65 => 19,  70 => 37,  127 => 28,  114 => 66,  104 => 59,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 69,  132 => 51,  128 => 60,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 17,  71 => 38,  63 => 33,  59 => 34,  94 => 34,  89 => 34,  85 => 25,  75 => 46,  68 => 35,  56 => 11,  21 => 2,  88 => 31,  78 => 26,  44 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 94,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 77,  142 => 59,  138 => 68,  136 => 56,  121 => 57,  117 => 19,  105 => 18,  49 => 23,  25 => 5,  79 => 40,  69 => 37,  47 => 8,  37 => 5,  246 => 90,  157 => 56,  145 => 46,  139 => 68,  131 => 50,  123 => 71,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 52,  98 => 53,  96 => 44,  83 => 38,  74 => 54,  66 => 34,  52 => 10,  32 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 99,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 75,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 58,  122 => 43,  116 => 50,  112 => 46,  109 => 54,  106 => 60,  99 => 31,  95 => 50,  92 => 21,  86 => 41,  82 => 28,  80 => 55,  73 => 16,  64 => 13,  57 => 12,  45 => 21,  60 => 17,  55 => 22,  51 => 21,  43 => 7,  35 => 5,  34 => 7,  48 => 9,  42 => 15,  39 => 9,  30 => 7,  26 => 9,  24 => 4,  50 => 28,  41 => 5,  38 => 6,  27 => 6,  23 => 3,  33 => 3,  22 => 2,  19 => 1,  103 => 49,  100 => 65,  93 => 65,  91 => 27,  87 => 39,  81 => 58,  72 => 31,  67 => 15,  62 => 23,  58 => 31,  54 => 11,  46 => 11,  40 => 6,  36 => 4,  29 => 3,  20 => 1,  31 => 3,  28 => 2,);
    }
}
