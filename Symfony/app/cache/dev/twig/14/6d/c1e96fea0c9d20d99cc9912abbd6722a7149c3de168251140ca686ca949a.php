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



<div id=\"\" class=\"prog_chaque_matrs\" style=\"\">
التقدم
</div>
<div id=\"\"  class=\"\" style=\"margin-top:20px;margin-right:30px\">
:التقدم بالنسبة للمواد
</div>
\t
\t";
        // line 14
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("InnovitProfilBundle:Menu:evolution"));
        echo "

</div>  


<div>
<div class=\"\" id=\"\" style=\"margin:30px\">
:التقدم العام
</div>
\t\t
\t<div id=\"bar-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
        echo "\" class=\"bar-main-container a0\">
\t<div id=\"bar_";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
        echo "\" class=\"bar a";
        echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
        echo "\" style=\"\"></div>
\t</div>
\t<div class=\"bar-percentage a0\"><span id=\"span_percentage_";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
        echo "\">50</span>% العام</div>
</div> 


<div>

\t<div id=\"div_conseils\" class=\"\">
\t\t<div id=\"conseils\" class=\"effect2\" style=\"\">
\t\t\t:نصائح و مقترحات
\t\t</div>
\t\t\t
\t\t<div id=\"liste_conseils\" class=\"\" style=\"\">
\t\t\tConseils1..
\t\t</div>
\t</div>
</div> 
\t
</div>
\t<script  src=\"";
        // line 45
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
        return array (  79 => 45,  58 => 27,  51 => 25,  47 => 24,  34 => 14,  19 => 1,);
    }
}
