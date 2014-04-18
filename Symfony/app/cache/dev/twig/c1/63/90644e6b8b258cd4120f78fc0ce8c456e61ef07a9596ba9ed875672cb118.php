<?php

/* InnovitProfilBundle:profil:test_prof.html.twig */
class __TwigTemplate_c16390644e6b8b258cd4120f78fc0ce8c456e61ef07a9596ba9ed875672cb118 extends Twig_Template
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
        echo "<div id=\"parametres\" class=\"\" style=\"\">
\t<div id=\"\" class=\"prog_chaque_matrs\" style=\"\">
\t\tإختبار
\t</div>
\t<form action=\"http://127.0.0.1/remi/Symfony/web/app_dev.php/sendquest\" method=\"post\" >
\t<div class=\"inputs_test_pr\" class=\"\" style=\"\">
\t\t\t
\t\t<div id=\"\" class=\"\" style=\"margin-bottom:20px;text-decoration:underline\">
\t\t\tإظافة سؤال جديد
\t\t</div>
\t\t<div>\t\t\t
\t\t<div id=\"\" class=\"\" style=\"width:40%;display:inline-block\">
\t\t\tإختيار المتوى
\t\t</div>
\t\t
\t\t<div id=\"\" class=\"\" style=\"width:40%;display:inline-block;margin-left:19%\">
\t\t\tإختيار المادة
\t\t</div>
\t\t
\t\t</div>
\t\t<div>
\t\t<select  id=\"choix_niveau_test\" name=\"choix_cours\">
\t\t\t\t\t\t\t<option value=\"1\">Choix 1</option>
\t\t\t\t\t\t\t<option value=\"2\">Choix 2</option>
\t\t\t\t\t\t\t<option value=\"3\">Choix 3</option>
\t\t\t\t\t\t\t<option value=\"4\">Choix 4</option>
\t\t</select>
\t\t
\t\t<select  id=\"choix_matr_test\" name=\"choix_matr\">
\t\t\t\t\t\t\t<option value=\"1\">الرياضيات</option>
\t\t\t\t\t\t\t<option value=\"2\">علوم الحياة و الأرض</option>
\t\t\t\t\t\t\t<option value=\"3\">الفزياء و الكمياء</option>
\t\t\t\t\t\t\t<option value=\"4\">التاريخ</option>
\t\t\t\t\t\t\t<option value=\"5\">الفرنسية</option>
\t\t</select>
\t\t</div>
\t
\t\t\t<textarea class=\"textarea_test\" placeholder=\"السؤال\" name=\"question\" class=\"input_test_pr\" style=\"\"></textarea></br> 
\t\t\t<textarea class=\"textarea_test\" placeholder=\"التعليل\" name=\"justification\" class=\"input_test_pr\" style=\"\"></textarea></br> 
\t\t\t<input class=\"input_test_pr\" style=\"\" name=\"rep1\"  placeholder=\"الإجابة1 الصحيحة\" type=\"text\" ></input></br> 
\t\t\t<input class=\"input_test_pr\" style=\"\" name=\"rep2\"  placeholder=\"الإجابة2\" type=\"text\" ></input></br> 
\t\t\t<input class=\"input_test_pr\" style=\"\" name=\"rep3\"  placeholder=\"الإجابة3\" type=\"text\" ></input></br>  
\t\t\t<input class=\"input_test_pr\" style=\"\" name=\"rep4\"  placeholder=\"الإجابة4\" type=\"text\" ></input></br>  
\t\t\t\t\t
\t\t\t<div id=\"btn_insc\" style=\"\">
\t\t\t\t<input  style=\"\" value=\"أضف\"  placeholder=\"Login \" type=\"submit\" ></input>
\t\t\t</div>
\t\t</form>
\t</div>
\t
\t
\t
\t\t<div id=\"mes_questions\" class=\"\" style=\"\">
\t\t";
        // line 54
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("InnovitProfilBundle:Testprof:chargerquest"));
        echo " 
\t
\t\t</div>
\t
\t<script  src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/script_quests_prof.js"), "html", null, true);
        echo "\" > </script>
</div>";
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:profil:test_prof.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 58,  74 => 54,  19 => 1,);
    }
}
