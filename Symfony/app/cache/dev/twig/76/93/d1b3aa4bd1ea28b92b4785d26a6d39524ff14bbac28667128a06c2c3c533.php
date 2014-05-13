<?php

/* TwigBundle:Exception:exception.xml.twig */
class __TwigTemplate_7693d1b3aa4bd1ea28b92b4785d26a6d39524ff14bbac28667128a06c2c3c533 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "\">
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "toarray"));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 5
            echo "    <exception class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "class"), "html", null, true);
            echo "\" message=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "message"), "html", null, true);
            echo "\">
";
            // line 6
            $this->env->loadTemplate("TwigBundle:Exception:traces.xml.twig")->display(array("exception" => (isset($context["e"]) ? $context["e"] : null)));
            // line 7
            echo "    </exception>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</error>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  49 => 19,  25 => 3,  79 => 21,  69 => 25,  47 => 18,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 38,  108 => 37,  101 => 39,  98 => 32,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  52 => 21,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 36,  99 => 30,  95 => 28,  92 => 29,  86 => 28,  82 => 22,  80 => 24,  73 => 19,  64 => 19,  57 => 12,  45 => 17,  60 => 6,  55 => 16,  51 => 9,  43 => 6,  35 => 5,  34 => 7,  37 => 10,  32 => 4,  48 => 9,  42 => 6,  39 => 16,  30 => 3,  26 => 12,  24 => 2,  50 => 14,  41 => 5,  38 => 8,  27 => 5,  23 => 4,  33 => 4,  22 => 2,  19 => 1,  103 => 32,  100 => 27,  93 => 29,  91 => 31,  87 => 25,  81 => 24,  72 => 13,  67 => 20,  62 => 23,  58 => 18,  54 => 21,  46 => 11,  40 => 11,  36 => 5,  29 => 6,  20 => 1,  31 => 4,  28 => 3,);
    }
}
