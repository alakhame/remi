<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_5600a98b83ed14ad6beed34f49f44a9ed2fb841d0a5c604ac413601568ad6360 extends Twig_Template
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
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, ("Hello " . $_name_), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, $_name_, "html", null, true);
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
        return array (  86 => 29,  174 => 117,  113 => 22,  135 => 56,  123 => 20,  139 => 60,  103 => 44,  64 => 34,  95 => 42,  82 => 57,  21 => 2,  23 => 3,  119 => 69,  73 => 37,  68 => 35,  20 => 1,  94 => 54,  83 => 38,  61 => 35,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 95,  122 => 37,  108 => 18,  102 => 60,  92 => 32,  84 => 28,  48 => 21,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 68,  147 => 98,  127 => 50,  112 => 43,  96 => 34,  76 => 56,  71 => 38,  55 => 8,  114 => 47,  109 => 31,  106 => 63,  85 => 19,  77 => 39,  28 => 2,  39 => 15,  89 => 60,  65 => 13,  63 => 33,  58 => 15,  34 => 12,  26 => 9,  98 => 40,  88 => 55,  46 => 21,  36 => 4,  43 => 7,  50 => 28,  38 => 5,  27 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 122,  178 => 61,  173 => 58,  162 => 77,  158 => 78,  155 => 77,  152 => 55,  142 => 52,  136 => 44,  130 => 28,  100 => 65,  78 => 17,  75 => 16,  53 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  74 => 36,  72 => 33,  69 => 37,  60 => 12,  47 => 8,  40 => 6,  22 => 2,  267 => 32,  185 => 58,  182 => 57,  177 => 56,  165 => 46,  159 => 45,  148 => 66,  133 => 87,  125 => 39,  120 => 19,  117 => 36,  110 => 43,  105 => 17,  101 => 41,  87 => 38,  80 => 26,  67 => 30,  57 => 22,  54 => 10,  51 => 8,  44 => 8,  42 => 15,  35 => 5,  32 => 3,  29 => 3,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 99,  183 => 62,  180 => 59,  171 => 54,  166 => 127,  163 => 50,  160 => 75,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 41,  129 => 36,  124 => 35,  121 => 80,  118 => 36,  115 => 44,  111 => 19,  107 => 62,  104 => 64,  97 => 61,  93 => 65,  90 => 31,  81 => 40,  70 => 23,  66 => 34,  62 => 12,  59 => 34,  56 => 11,  52 => 21,  49 => 9,  45 => 6,  41 => 6,  37 => 14,  33 => 3,  30 => 5,);
    }
}
