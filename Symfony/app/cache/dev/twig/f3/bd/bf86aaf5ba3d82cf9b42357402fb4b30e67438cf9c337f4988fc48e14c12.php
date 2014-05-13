<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_f3bdbf86aaf5ba3d82cf9b42357402fb4b30e67438cf9c337f4988fc48e14c12 extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : null)));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  89 => 20,  85 => 19,  75 => 17,  68 => 14,  56 => 9,  21 => 2,  88 => 6,  78 => 40,  44 => 10,  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  49 => 19,  25 => 3,  79 => 18,  69 => 25,  47 => 18,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 38,  108 => 37,  101 => 24,  98 => 40,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  52 => 21,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 36,  99 => 30,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 12,  57 => 14,  45 => 17,  60 => 6,  55 => 13,  51 => 12,  43 => 8,  35 => 7,  34 => 7,  37 => 10,  32 => 6,  48 => 9,  42 => 6,  39 => 6,  30 => 3,  26 => 3,  24 => 3,  50 => 8,  41 => 7,  38 => 8,  27 => 4,  23 => 4,  33 => 5,  22 => 2,  19 => 1,  103 => 32,  100 => 27,  93 => 9,  91 => 31,  87 => 20,  81 => 24,  72 => 16,  67 => 20,  62 => 23,  58 => 18,  54 => 11,  46 => 11,  40 => 8,  36 => 7,  29 => 4,  20 => 1,  31 => 5,  28 => 3,);
    }
}
