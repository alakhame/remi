<?php

/* InnovitProfilBundle:Menu:matieres_cours.html.twig */
class __TwigTemplate_40f43bf6a76d2e7acbb30b8b375250cf3f15881191ab960514f589efc3b3046a extends Twig_Template
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
        $context["i"] = 0;
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            echo "\t
";
            // line 3
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            echo "\t\t
\t<div id=\"matiere_";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" style=\"\" class=\"matieres b\">
\t\t<div class=\"wrap\">
\t\t\t<div id=\"nom_matiere_";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"nom_mat\"  onclick=\"charger(";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ")\" > ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nom"), "html", null, true);
            echo " </div>
\t\t\t
\t\t</div>
\t\t<div id=\"triangle_";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"tri\" style=\"\"></div>
\t</div>
\t
\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:Menu:matieres_cours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  36 => 6,  31 => 4,  27 => 3,  21 => 2,  19 => 1,);
    }
}
