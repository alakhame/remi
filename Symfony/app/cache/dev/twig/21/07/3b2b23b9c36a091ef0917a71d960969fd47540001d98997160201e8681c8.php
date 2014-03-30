<?php

/* InnovitProfilBundle:Menu:evolution.html.twig */
class __TwigTemplate_21073b2b23b9c36a091ef0917a71d960969fd47540001d98997160201e8681c8 extends Twig_Template
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
        $context["i"] = 1;
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 3
            echo "\t
    <div class=\"pgormat\">
\t
\t
\t<div id=\"bar-";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"bar-main-container a0\">
\t\t
\t\t
\t\t\t\t<div id=\"bar_";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"bar a";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"  style=\"\"></div>
\t\t\t
\t\t
\t</div>
\t
\t<div class=\"bar-percentage a0\">  <span id=\"span_percentage_";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\">50</span>% ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nom"), "html", null, true);
            echo "</div>
\t</div>
\t";
            // line 17
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:Menu:evolution.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  47 => 15,  37 => 10,  31 => 7,  25 => 3,  21 => 2,  19 => 1,);
    }
}
