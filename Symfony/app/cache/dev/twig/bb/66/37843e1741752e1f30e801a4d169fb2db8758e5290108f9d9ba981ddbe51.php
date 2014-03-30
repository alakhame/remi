<?php

/* InnovitProfilBundle:Menu:matieres_rev.html.twig */
class __TwigTemplate_bb6637843e1741752e1f30e801a4d169fb2db8758e5290108f9d9ba981ddbe51 extends Twig_Template
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
            echo "\t
\t<div id=\"matiere_rev";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" style=\"\" class=\"matieres_rev b\" onclick=\"javascript:afftest()\">
\t\t<div class=\"wrap\">
\t\t\t<div id=\"nom_matiere_rev";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"nom_mat_rev\" > ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "nom"), "html", null, true);
            echo " </div>
\t\t</div>
\t</div>
\t";
            // line 8
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:Menu:matieres_rev.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  32 => 5,  27 => 3,  21 => 2,  93 => 65,  46 => 21,  35 => 13,  19 => 1,);
    }
}
