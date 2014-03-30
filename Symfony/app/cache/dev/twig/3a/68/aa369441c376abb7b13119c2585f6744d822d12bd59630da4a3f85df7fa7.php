<?php

/* InnovitProfilBundle:Menu:matieres_rev.html.twig */
class __TwigTemplate_3a68aa369441c376abb7b13119c2585f6744d822d12bd59630da4a3f85df7fa7 extends Twig_Template
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
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_menu_);
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            echo "\t
\t<div id=\"matiere_rev";
            // line 3
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" style=\"\" class=\"matieres_rev b\" onclick=\"javascript:afftest()\">
\t\t<div class=\"wrap\">
\t\t\t<div id=\"nom_matiere_rev";
            // line 5
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"nom_mat_rev\" > ";
            if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_m_, "nom"), "html", null, true);
            echo " </div>
\t\t</div>
\t</div>
\t";
            // line 8
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $context["i"] = ($_i_ + 1);
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
        return array (  44 => 8,  34 => 5,  28 => 3,  21 => 2,  93 => 65,  46 => 21,  35 => 13,  19 => 1,);
    }
}
