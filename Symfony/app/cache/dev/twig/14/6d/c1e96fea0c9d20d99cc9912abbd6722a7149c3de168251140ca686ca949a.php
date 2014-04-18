<?php

/* InnovitProfilBundle:profil:evolution.html.twig */
class __TwigTemplate_146dc1e96fea0c9d20d99cc9912abbd6722a7149c3de168251140ca686ca949a extends Twig_Template
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
        echo "
<div id=\"div_evolution\" class=\"\" style=\"\">
<div>

\t<div id=\"\" class=\"prog_chaque_matrs\" style=\"\">التقدم</div>
    <div id=\"\"  class=\"\" style=\"margin-top:20px;margin-right:30px\">:التقدم بالنسبة للمواد</div>

\t";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("InnovitProfilBundle:Menu:evolution"));
        echo "


\t<div class=\"\" id=\"\" style=\"margin:30px\">:التقدم العام</div>
\t\t<div id=\"bar-";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
        echo "\" class=\"bar-main-container a0\">
\t\t\t<div id=\"bar_";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
        echo "\" class=\"bar a";
        echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
        echo "\" style=\"\"></div>
\t\t</div>
\t\t<div class=\"bar-percentage a0\"><span id=\"span_percentage_";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
        echo "\">50</span>% العام</div>
\t</div> 

\t
\t<div id=\"div_conseils\" class=\"\">
\t\t<div id=\"conseils\" class=\"effect2\" style=\"\">:نصائح و مقترحات</div>
\t\t<div id=\"liste_conseils\" class=\"\" style=\"\">Conseils1..</div>
\t</div>
\t
\t
</div>
\t<script  src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/script_evolution.js"), "html", null, true);
        echo "\" ></script>\t";
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:profil:evolution.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 26,  46 => 15,  39 => 13,  35 => 12,  28 => 8,  19 => 1,);
    }
}
