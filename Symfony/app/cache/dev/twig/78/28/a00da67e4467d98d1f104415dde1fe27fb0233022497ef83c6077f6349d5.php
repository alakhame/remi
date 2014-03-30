<?php

/* InnovitProfilBundle:Menu:matieres_cours.html.twig */
class __TwigTemplate_7828a00da67e4467d98d1f104415dde1fe27fb0233022497ef83c6077f6349d5 extends Twig_Template
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
        if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_menu_);
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            echo "\t
\t\t
\t<div id=\"matiere_";
            // line 4
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" style=\"\" class=\"matieres b\">
\t\t<div class=\"wrap\">
\t\t\t<div id=\"nom_matiere_";
            // line 6
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"nom_mat\"  onclick=\"charger(";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo ")\" > ";
            if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_m_, "nom"), "html", null, true);
            echo " </div>
\t\t\t
\t\t</div>
\t\t<div id=\"triangle_";
            // line 9
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"tri\" style=\"\"></div>
\t</div>
\t
\t";
            // line 12
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $context["i"] = ($_i_ + 1);
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
        return array (  55 => 12,  48 => 9,  35 => 6,  29 => 4,  21 => 2,  19 => 1,  74 => 34,  67 => 30,  59 => 24,  41 => 15,  26 => 2,  20 => 1,);
    }
}
