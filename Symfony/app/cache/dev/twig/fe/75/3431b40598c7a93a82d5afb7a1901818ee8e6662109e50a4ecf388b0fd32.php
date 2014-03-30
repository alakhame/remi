<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_fe753431b40598c7a93a82d5afb7a1901818ee8e6662109e50a4ecf388b0fd32 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        if (isset($context["logs"])) { $_logs_ = $context["logs"]; } else { $_logs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_logs_);
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if (($this->getAttribute($_log_, "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($_log_, "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_log_, "priorityName"), "html", null, true);
            echo " - ";
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_log_, "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 40,  88 => 6,  46 => 10,  36 => 7,  43 => 8,  50 => 7,  38 => 5,  27 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 82,  197 => 74,  195 => 73,  192 => 72,  189 => 71,  186 => 70,  181 => 67,  178 => 66,  173 => 63,  162 => 59,  158 => 57,  155 => 56,  152 => 55,  142 => 47,  136 => 44,  130 => 42,  100 => 28,  78 => 40,  75 => 24,  53 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 21,  74 => 14,  72 => 13,  69 => 12,  60 => 12,  47 => 6,  40 => 8,  22 => 2,  267 => 32,  185 => 58,  182 => 57,  177 => 56,  165 => 46,  159 => 45,  148 => 42,  133 => 43,  125 => 39,  120 => 40,  117 => 37,  110 => 33,  105 => 31,  101 => 29,  87 => 24,  80 => 41,  67 => 19,  57 => 11,  54 => 22,  51 => 14,  44 => 9,  42 => 16,  35 => 9,  32 => 6,  29 => 6,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 41,  129 => 36,  124 => 35,  121 => 34,  118 => 33,  115 => 39,  111 => 30,  107 => 32,  104 => 27,  97 => 24,  93 => 9,  90 => 25,  81 => 19,  70 => 23,  66 => 11,  62 => 18,  59 => 11,  56 => 20,  52 => 6,  49 => 5,  45 => 17,  41 => 6,  37 => 4,  33 => 4,  30 => 3,);
    }
}
