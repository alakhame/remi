<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_5f1ad93c3bbf9fa1fd8b7747fd9c60ba78fe069145334e4effd1c68c9a3a6880 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
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
        echo "    <h1 class=\"title\">Hello ";
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, $_name_, "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => $_name_)), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  174 => 117,  119 => 69,  113 => 22,  82 => 57,  135 => 56,  123 => 20,  68 => 28,  230 => 123,  223 => 118,  172 => 95,  91 => 49,  126 => 60,  95 => 40,  103 => 63,  23 => 3,  156 => 75,  128 => 82,  64 => 31,  20 => 1,  94 => 54,  83 => 49,  61 => 28,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 85,  131 => 95,  122 => 78,  108 => 18,  102 => 60,  92 => 32,  84 => 28,  48 => 8,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 65,  127 => 41,  112 => 32,  96 => 34,  76 => 56,  71 => 45,  55 => 32,  114 => 43,  109 => 31,  106 => 63,  85 => 35,  77 => 45,  28 => 2,  39 => 15,  89 => 60,  65 => 13,  63 => 33,  58 => 23,  34 => 12,  26 => 11,  98 => 41,  88 => 55,  46 => 17,  36 => 5,  43 => 7,  50 => 28,  38 => 5,  27 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 101,  192 => 72,  189 => 98,  186 => 60,  181 => 122,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 57,  130 => 28,  100 => 51,  78 => 17,  75 => 16,  53 => 11,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  74 => 36,  72 => 33,  69 => 33,  60 => 12,  47 => 8,  40 => 6,  22 => 2,  267 => 32,  185 => 58,  182 => 57,  177 => 56,  165 => 46,  159 => 74,  148 => 66,  133 => 43,  125 => 39,  120 => 19,  117 => 36,  110 => 43,  105 => 17,  101 => 41,  87 => 38,  80 => 26,  67 => 30,  57 => 22,  54 => 10,  51 => 20,  44 => 19,  42 => 7,  35 => 5,  32 => 3,  29 => 3,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 104,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 96,  171 => 54,  166 => 93,  163 => 50,  160 => 75,  157 => 48,  149 => 84,  146 => 41,  140 => 46,  137 => 41,  129 => 36,  124 => 47,  121 => 73,  118 => 36,  115 => 72,  111 => 19,  107 => 55,  104 => 42,  97 => 61,  93 => 18,  90 => 31,  81 => 42,  70 => 28,  66 => 34,  62 => 12,  59 => 13,  56 => 11,  52 => 21,  49 => 10,  45 => 8,  41 => 6,  37 => 7,  33 => 3,  30 => 3,);
    }
}
