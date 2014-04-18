<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_e375ea7179320095b891336c9b702740842c1ed7fd87bb055be070ad3076926f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  146 => 70,  113 => 55,  137 => 66,  124 => 56,  90 => 32,  134 => 51,  97 => 44,  77 => 44,  76 => 17,  127 => 28,  104 => 64,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 69,  132 => 51,  107 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  71 => 38,  63 => 13,  59 => 13,  94 => 34,  89 => 34,  85 => 25,  68 => 9,  56 => 11,  21 => 2,  88 => 31,  78 => 26,  201 => 92,  196 => 90,  183 => 82,  171 => 94,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 77,  142 => 59,  138 => 68,  121 => 57,  117 => 19,  105 => 18,  49 => 10,  25 => 3,  69 => 15,  47 => 8,  37 => 5,  246 => 90,  157 => 56,  145 => 46,  131 => 50,  123 => 71,  120 => 20,  115 => 44,  111 => 37,  101 => 52,  98 => 31,  96 => 68,  83 => 38,  74 => 54,  66 => 34,  52 => 10,  50 => 28,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 99,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 75,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 58,  122 => 43,  116 => 50,  112 => 46,  109 => 54,  106 => 36,  99 => 31,  95 => 50,  92 => 67,  86 => 41,  82 => 28,  80 => 38,  73 => 16,  64 => 13,  57 => 12,  45 => 8,  55 => 11,  51 => 10,  35 => 5,  48 => 9,  42 => 7,  30 => 3,  26 => 9,  24 => 4,  139 => 68,  136 => 56,  128 => 60,  114 => 66,  108 => 19,  102 => 17,  84 => 29,  79 => 40,  75 => 11,  70 => 37,  65 => 19,  60 => 8,  43 => 7,  61 => 12,  53 => 11,  44 => 6,  41 => 5,  39 => 7,  34 => 5,  32 => 5,  38 => 6,  27 => 6,  23 => 3,  33 => 3,  22 => 2,  19 => 1,  103 => 49,  100 => 65,  93 => 65,  91 => 27,  87 => 39,  81 => 58,  72 => 31,  67 => 14,  62 => 13,  58 => 31,  54 => 11,  46 => 8,  40 => 6,  36 => 5,  29 => 3,  20 => 1,  31 => 3,  28 => 2,);
    }
}
