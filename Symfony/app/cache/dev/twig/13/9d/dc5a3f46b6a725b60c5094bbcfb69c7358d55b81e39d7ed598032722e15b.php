<?php

/* InnovitGeneralBundle::layout.html.twig */
class __TwigTemplate_139ddc5a3f46b6a725b60c5094bbcfb69c7358d55b81e39d7ed598032722e15b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        // line 6
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 7
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\">
      ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  ";
        // line 12
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 13
        echo "  ";
    }

    public function getTemplateName()
    {
        return "InnovitGeneralBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 53,  77 => 38,  53 => 11,  137 => 54,  134 => 51,  126 => 74,  84 => 42,  65 => 35,  70 => 37,  127 => 76,  114 => 66,  104 => 59,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  63 => 33,  59 => 28,  94 => 52,  89 => 20,  85 => 4,  75 => 39,  68 => 35,  56 => 9,  21 => 2,  88 => 55,  78 => 21,  44 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 127,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  49 => 19,  25 => 3,  79 => 40,  69 => 33,  47 => 17,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 95,  123 => 71,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 53,  96 => 31,  83 => 35,  74 => 38,  66 => 15,  52 => 21,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 63,  109 => 60,  106 => 60,  99 => 31,  95 => 50,  92 => 21,  86 => 28,  82 => 40,  80 => 19,  73 => 37,  64 => 29,  57 => 11,  45 => 21,  60 => 33,  55 => 12,  51 => 14,  43 => 19,  35 => 4,  34 => 6,  37 => 7,  32 => 5,  48 => 13,  42 => 19,  39 => 7,  30 => 7,  26 => 6,  24 => 4,  50 => 23,  41 => 7,  38 => 9,  27 => 4,  23 => 3,  33 => 7,  22 => 2,  19 => 1,  103 => 57,  100 => 56,  93 => 28,  91 => 27,  87 => 25,  81 => 42,  72 => 31,  67 => 34,  62 => 13,  58 => 31,  54 => 25,  46 => 21,  40 => 18,  36 => 5,  29 => 4,  20 => 1,  31 => 3,  28 => 2,);
    }
}
