<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_187194a6c98b5a176e6fed3bf953ea5512a401021f431eaa0b6c02297288acaa extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 55,  137 => 66,  124 => 56,  97 => 44,  90 => 42,  76 => 37,  53 => 13,  165 => 82,  134 => 67,  126 => 81,  70 => 37,  65 => 19,  77 => 44,  127 => 76,  114 => 66,  104 => 59,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 91,  132 => 51,  128 => 60,  107 => 36,  61 => 34,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 38,  63 => 33,  59 => 34,  94 => 41,  89 => 34,  85 => 25,  75 => 46,  68 => 35,  56 => 25,  21 => 2,  88 => 55,  78 => 21,  44 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 94,  166 => 127,  163 => 62,  158 => 67,  156 => 66,  151 => 77,  142 => 69,  138 => 54,  136 => 68,  121 => 57,  117 => 56,  105 => 53,  49 => 23,  25 => 5,  79 => 40,  69 => 37,  47 => 17,  37 => 14,  246 => 90,  157 => 56,  145 => 46,  139 => 68,  131 => 95,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 70,  101 => 52,  98 => 31,  96 => 44,  83 => 38,  74 => 19,  66 => 34,  52 => 10,  32 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 99,  173 => 65,  168 => 72,  164 => 59,  162 => 81,  154 => 102,  149 => 75,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 50,  112 => 46,  109 => 54,  106 => 36,  99 => 31,  95 => 28,  92 => 21,  86 => 41,  82 => 22,  80 => 57,  73 => 53,  64 => 29,  57 => 12,  45 => 21,  60 => 17,  55 => 22,  51 => 21,  43 => 7,  35 => 5,  34 => 7,  48 => 9,  42 => 15,  39 => 9,  30 => 7,  26 => 6,  24 => 4,  50 => 28,  41 => 11,  38 => 6,  27 => 6,  23 => 3,  33 => 6,  22 => 2,  19 => 1,  103 => 49,  100 => 65,  93 => 65,  91 => 27,  87 => 39,  81 => 50,  72 => 31,  67 => 15,  62 => 23,  58 => 18,  54 => 11,  46 => 11,  40 => 10,  36 => 14,  29 => 3,  20 => 1,  31 => 3,  28 => 2,);
    }
}
