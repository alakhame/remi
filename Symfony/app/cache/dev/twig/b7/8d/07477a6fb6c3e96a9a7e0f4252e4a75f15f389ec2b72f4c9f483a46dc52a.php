<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_b78d07477a6fb6c3e96a9a7e0f4252e4a75f15f389ec2b72f4c9f483a46dc52a extends Twig_Template
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
        echo "[exception] ";
        echo twig_escape_filter($this->env, (((((isset($context["status_code"]) ? $context["status_code"] : null) . " | ") . (isset($context["status_text"]) ? $context["status_text"] : null)) . " | ") . $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class")), "html", null, true);
        echo "
[message] ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message"), "html", null, true);
        echo "
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "toarray"));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : null) + 1), "html", null, true);
            echo "] ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "class"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "message"), "html", null, true);
            echo "
";
            // line 5
            $this->env->loadTemplate("TwigBundle:Exception:traces.txt.twig")->display(array("exception" => (isset($context["e"]) ? $context["e"] : null)));
            // line 6
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  121 => 46,  117 => 44,  105 => 40,  49 => 19,  25 => 3,  69 => 25,  47 => 18,  37 => 10,  246 => 32,  157 => 56,  145 => 46,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 38,  101 => 39,  98 => 32,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  52 => 21,  50 => 14,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 36,  99 => 30,  95 => 28,  92 => 29,  86 => 28,  82 => 22,  80 => 24,  73 => 19,  64 => 19,  57 => 12,  45 => 17,  55 => 16,  51 => 20,  35 => 9,  48 => 9,  42 => 16,  30 => 3,  26 => 12,  24 => 2,  139 => 45,  136 => 56,  128 => 74,  114 => 63,  108 => 37,  102 => 56,  84 => 42,  79 => 21,  75 => 39,  70 => 37,  65 => 35,  60 => 6,  43 => 6,  61 => 7,  53 => 13,  44 => 12,  41 => 5,  39 => 16,  34 => 7,  32 => 4,  38 => 6,  27 => 5,  23 => 3,  33 => 4,  22 => 2,  19 => 1,  103 => 32,  100 => 53,  93 => 29,  91 => 31,  87 => 25,  81 => 24,  72 => 13,  67 => 20,  62 => 23,  58 => 6,  54 => 21,  46 => 11,  40 => 11,  36 => 5,  29 => 6,  20 => 1,  31 => 6,  28 => 3,);
    }
}
