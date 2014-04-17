<?php

/* InnovitProfilBundle:profil:test.html.twig */
class __TwigTemplate_4945c8de443804dc95c7d4c3902e47f3c62e09c76059bb1ba654762fad12388c extends Twig_Template
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
اختبار المستوى
\t</div>

\t\t<div id=\"test_niv\" class=\"\" style=\"\">
\t\t<div id=\"question_tete\" class=\"\" style=\"\">
\t\t<div id=\"question_tete_num\" style=\"\"><span id=\"num_question\">0</span> السؤال رقم </div>
\t\t\t<div id=\"img_quest\" class=\"\" style=\"\">
\t\t<img class=\"\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/png/128px/Shape 62.png"), "html", null, true);
        echo "\" style=\"width:100%\"/>
\t\t</div>
\t\t<div id=\"question\" class=\"\" style=\"\">

\t\t\t

\t\t\t ما هي اطول سورة في القرآن؟ ما هي اطول سورة في القرآن؟ما هي اطول سورة في القرآن؟

\t\t</div>
\t\t
\t
\t\t
\t\t</div>
\t\t
\t\t<div id=\"liste_rep\" class=\"\" style=\"position:relative\">

\t\t\t<div id=\"reponse_tet\" style=\"\">الإجابات</div>
\t\t\t
\t\t\t<div id=\"rep1\" class=\"reponse\" style=\"\">
\t\t\t\t<div id=\"rep1_a\" class=\"text_rep\"   style=\"\">ما هي اطول سورة في القرآن؟</div>
\t\t\t\t<div id=\"\" class=\"check_rep\"  style=\"\"> <input type=\"checkbox\" name=\"option1\" value=\"Milk\"> </div>
\t\t\t</div>
\t\t\t
\t\t\t<div id=\"rep2\" class=\"reponse\" style=\"\">
\t\t\t\t<div id=\"\" class=\"text_rep\"   style=\"\">ما هي اطول سورة في القرآن؟</div>
\t\t\t\t<div id=\"\" class=\"check_rep\"  style=\"\"> <input type=\"checkbox\" name=\"option1\" value=\"Milk\"> </div>
\t\t\t</div>
\t\t\t
\t\t\t<div id=\"rep3\" class=\"reponse\" style=\"\">
\t\t\t\t<div id=\"\" class=\"text_rep\"   style=\"\">ما هي اطول سورة في القرآن؟</div>
\t\t\t\t<div id=\"\" class=\"check_rep\"  style=\"\"> <input type=\"checkbox\" name=\"option1\" value=\"Milk\"> </div>
\t\t\t</div>
\t\t\t
\t\t\t<div id=\"rep4\" class=\"reponse\" style=\"margin-bottom:20px\">
\t\t\t\t<div id=\"\" class=\"text_rep\"   style=\"\">ما هي اطول سورة في القرآن؟</div>
\t\t\t\t<div id=\"\" class=\"check_rep\"  style=\"\"> <input type=\"checkbox\" name=\"option1\" value=\"Milk\"> </div>
\t\t\t</div>
\t\t\t


\t\t</div>
\t\t
\t\t<div id=\"test_bottom\" class=\"\" style=\"\">
\t
\t\t<div id=\"progression_question\"  style=\"\">
\t\t<div id=\"progression_question_bar\" style=\"\">\t\t</div>
\t\t<div id=\"span_num_quest\" >15 السؤال 0 من أصل</div>
\t\t</div> 
\t\t<div id=\"valider\" class=\"\" style=\"\" onclick=\"javascript:nextQuestion()\">التالي</div>
\t\t</div>
\t</div>
\t
</div>


<script  src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/xhrCreate.js"), "html", null, true);
        echo "\" > </script>
<script  src=\"";
        // line 68
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
        return array (  96 => 68,  92 => 67,  34 => 12,  19 => 1,);
    }
}
