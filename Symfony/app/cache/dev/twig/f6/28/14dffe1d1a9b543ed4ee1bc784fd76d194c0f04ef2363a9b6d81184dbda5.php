<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f62814dffe1d1a9b543ed4ee1bc784fd76d194c0f04ef2363a9b6d81184dbda5 extends Twig_Template
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
        echo twig_jsonencode_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "toarray"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  121 => 46,  117 => 44,  105 => 40,  49 => 19,  25 => 3,  69 => 25,  47 => 18,  37 => 10,  246 => 32,  157 => 56,  145 => 46,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 38,  101 => 39,  98 => 32,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  52 => 21,  50 => 14,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 36,  99 => 30,  95 => 28,  92 => 29,  86 => 28,  82 => 22,  80 => 24,  73 => 19,  64 => 19,  57 => 12,  45 => 17,  55 => 16,  51 => 20,  35 => 9,  48 => 9,  42 => 16,  30 => 3,  26 => 12,  24 => 3,  139 => 45,  136 => 56,  128 => 74,  114 => 63,  108 => 37,  102 => 56,  84 => 42,  79 => 21,  75 => 39,  70 => 37,  65 => 35,  60 => 6,  43 => 9,  61 => 7,  53 => 13,  44 => 12,  41 => 8,  39 => 16,  34 => 7,  32 => 12,  38 => 6,  27 => 5,  23 => 3,  33 => 4,  22 => 2,  19 => 1,  103 => 32,  100 => 53,  93 => 29,  91 => 31,  87 => 25,  81 => 24,  72 => 13,  67 => 20,  62 => 23,  58 => 6,  54 => 21,  46 => 11,  40 => 11,  36 => 5,  29 => 6,  20 => 1,  31 => 6,  28 => 5,);
    }
}
