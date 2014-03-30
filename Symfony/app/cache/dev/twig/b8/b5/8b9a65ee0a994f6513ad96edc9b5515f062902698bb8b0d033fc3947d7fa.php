<?php

/* InnovitProfilBundle:Menu:coursById.html.twig */
class __TwigTemplate_b8b58b9a65ee0a994f6513ad96edc9b5515f062902698bb8b0d033fc3947d7fa extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) ? $context["cours"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo "\t
\t
\t<div id=\"liste_cours\" style=\"\">
\t<div id=\"check_cours_mat\" class=\"\" style=\"\"> <input type=\"checkbox\" name=\"option1\" value=\"Milk\"> </div>
\t<div id=\"titre_cours_mat\" class=\"\" style=\"\"> ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "titre"), "html", null, true);
            echo " </div>
\t<div id=\"signler_cours\" class=\"\" title=\"\" style=\"\"></div>
\t</div >
\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t";
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:Menu:coursById.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  28 => 5,  19 => 1,);
    }
}
