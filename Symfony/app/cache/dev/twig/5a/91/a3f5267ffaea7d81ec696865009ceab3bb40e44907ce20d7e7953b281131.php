<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_5a91a3f5267ffaea7d81ec696865009ceab3bb40e44907ce20d7e7953b281131 extends Twig_Template
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
        return array (  174 => 122,  167 => 117,  137 => 66,  124 => 56,  113 => 72,  216 => 123,  170 => 93,  153 => 92,  129 => 73,  114 => 43,  34 => 12,  77 => 45,  65 => 35,  76 => 56,  100 => 59,  53 => 18,  23 => 3,  148 => 74,  134 => 85,  90 => 48,  20 => 1,  81 => 42,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 98,  169 => 60,  140 => 55,  132 => 51,  128 => 82,  107 => 62,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 93,  143 => 56,  135 => 53,  119 => 42,  102 => 44,  71 => 45,  67 => 30,  63 => 33,  59 => 34,  38 => 6,  94 => 61,  89 => 52,  85 => 39,  75 => 42,  68 => 35,  56 => 23,  87 => 39,  21 => 2,  26 => 2,  93 => 54,  88 => 60,  78 => 33,  46 => 19,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 101,  171 => 61,  166 => 127,  163 => 62,  158 => 67,  156 => 75,  151 => 63,  142 => 84,  138 => 54,  136 => 65,  121 => 73,  117 => 60,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 4,  72 => 31,  69 => 33,  47 => 17,  40 => 18,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 95,  123 => 47,  120 => 75,  115 => 43,  111 => 42,  108 => 67,  101 => 63,  98 => 31,  96 => 44,  83 => 38,  74 => 32,  66 => 28,  55 => 32,  52 => 10,  50 => 20,  43 => 7,  41 => 15,  35 => 5,  32 => 3,  29 => 3,  209 => 118,  203 => 78,  199 => 67,  193 => 73,  189 => 104,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 95,  162 => 57,  154 => 58,  149 => 75,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 57,  122 => 78,  116 => 41,  112 => 46,  109 => 59,  106 => 36,  103 => 63,  99 => 31,  95 => 51,  92 => 21,  86 => 28,  82 => 57,  80 => 55,  73 => 36,  64 => 31,  60 => 20,  57 => 12,  54 => 25,  51 => 21,  48 => 9,  45 => 17,  42 => 15,  39 => 15,  36 => 14,  33 => 13,  30 => 7,);
    }
}
