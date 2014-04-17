<?php

/* InnovitProfilBundle:profil:test.html.twig */
class __TwigTemplate_8454c4d1d20b1f713a1ec3c4997bd9d5a7e2be441cbdf07c1e8e3d3f0fe0bcc5 extends Twig_Template
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
        echo "<script  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.js"), "html", null, true);
        echo "\" > </script>
<div id=\"\" class=\"\" style=\"\">

\t<div id=\"\" class=\"prog_chaque_matrs\" style=\"\">
\t\tاختبار المستوى
\t</div>

\t\t<div id=\"test_niv\" class=\"\" style=\"\">
\t\t\t<div class=\"question_tete_num\" id=\"question_tete_num\" style=\"\"><span id=\"num_question\">0</span> السؤال رقم </div>
\t\t\t";
        // line 10
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("InnovitQuestionBundle:Question:pick"));
        echo "
\t\t
\t\t</div>
\t
</div>


<script  src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/xhrCreate.js"), "html", null, true);
        echo "\" > </script>
<script  src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/script_test.js"), "html", null, true);
        echo "\" > </script>";
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:profil:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 18,  42 => 17,  32 => 10,  19 => 1,);
    }
}
