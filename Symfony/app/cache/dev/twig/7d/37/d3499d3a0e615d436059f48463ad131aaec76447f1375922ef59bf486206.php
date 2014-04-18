<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_7d37d3499d3a0e615d436059f48463ad131aaec76447f1375922ef59bf486206 extends Twig_Template
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
        echo "        <traces>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "trace"));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : null)));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  89 => 20,  85 => 19,  68 => 14,  56 => 9,  21 => 2,  88 => 6,  78 => 40,  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  121 => 46,  117 => 44,  105 => 40,  49 => 19,  25 => 3,  69 => 25,  47 => 18,  37 => 10,  246 => 32,  157 => 56,  145 => 46,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 38,  101 => 24,  98 => 40,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  52 => 21,  50 => 8,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 36,  99 => 30,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 12,  57 => 14,  45 => 17,  55 => 13,  51 => 12,  35 => 7,  48 => 9,  42 => 6,  30 => 3,  26 => 3,  24 => 3,  139 => 45,  136 => 56,  128 => 74,  114 => 63,  108 => 37,  102 => 56,  84 => 42,  79 => 18,  75 => 17,  70 => 37,  65 => 35,  60 => 6,  43 => 8,  61 => 7,  53 => 13,  44 => 10,  41 => 7,  39 => 8,  34 => 7,  32 => 6,  38 => 6,  27 => 4,  23 => 3,  33 => 5,  22 => 2,  19 => 1,  103 => 32,  100 => 53,  93 => 9,  91 => 31,  87 => 20,  81 => 24,  72 => 16,  67 => 20,  62 => 23,  58 => 6,  54 => 11,  46 => 11,  40 => 8,  36 => 7,  29 => 4,  20 => 1,  31 => 5,  28 => 3,);
    }
}
