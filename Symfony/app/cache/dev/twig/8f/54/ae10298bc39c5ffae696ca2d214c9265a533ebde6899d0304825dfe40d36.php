<?php

/* InnovitProfilBundle:quest_prof:question_prof.html.twig */
class __TwigTemplate_8f54ae10298bc39c5ffae696ca2d214c9265a533ebde6899d0304825dfe40d36 extends Twig_Template
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
        echo "<div class=\"\" id=\"\" style=\"margin-bottom:20px\">
\t\t\t:أسئلتي المقترحة
\t\t</div>\t
\t\t<div class=\"\" id=\"mes_questions_pr\" style=\"\">
\t\t";
        // line 5
        $context["i"] = 0;
        // line 6
        echo "\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            echo "\t
\t<div id=\"consl_prof";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"\" style=\"width:100%\">
\t
\t<div class=\"entete_mes_questions\" style=\"\">
\t<div id=\"afficher_consls";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"btn_affich_consl_prof\" style=\"\" onclick=\"javascript:afficherlemessage_envoyer(";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ")\">السؤال</div>
\t<div id=\"masquer_consls";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"btn_masqu_consl_prof\" style=\"\" onclick=\"javascript:masquerlemessage_envoyer(";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ")\">إخفاء</div>
\t<div class=\"nom_consl_prof\" style=\"\">السادس إبتدائي</div>
\t<div class=\"image_consl_prof\" style=\"\"><img id=\"\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/question.png"), "html", null, true);
            echo "\" style=\"width:100%\"/></div>
\t<div class=\"effacer_ce_message\" title=\"Effacer ce message\" style=\"\">مسح</div>
\t</div >
\t
\t<div id=\"contenu_consl_prof";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"contenu_consl_prof\" style=\"width:100%\">
\t<div class=\"tri_consl_prof\" style=\"\"></div>
\t<div class=\"contenu_qust_prof\"  id=\"text_consl_prof";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"  style=\"\">
\t
\t\t<form action=\"http://127.0.0.1/remi/Symfony/web/app_dev.php/modifquest\" method=\"post\" >
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
\t\t<select  id=\"choix_niveau_test\" name=\"modif_choix\">
\t\t\t\t\t\t\t<option value=\"choix1\">Choix 1</option>
\t\t\t\t\t\t\t<option value=\"choix2\">Choix 2</option>
\t\t\t\t\t\t\t<option value=\"choix3\">Choix 3</option>
\t\t\t\t\t\t\t<option value=\"choix4\">Choix 4</option>
\t\t</select>
\t\t
\t\t<select  id=\"choix_matr_test\" name=\"modif_matr\">
\t\t\t\t\t\t\t<option value=\"choix1\">الرياضيات</option>
\t\t\t\t\t\t\t<option value=\"choix2\">علوم الحياة و الأرض</option>
\t\t\t\t\t\t\t<option value=\"choix3\">الفزياء و الكمياء</option>
\t\t\t\t\t\t\t<option value=\"choix4\">التاريخ</option>
\t\t\t\t\t\t\t<option value=\"choix4\">الفرنسية</option>
\t\t</select>
\t\t</div>
\t\t
\t\t\t<textarea id=\"textarea_test\"placeholder=\"السؤال\" name=\"modif_question\" class=\"textarea_test\" style=\"\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "question"), "html", null, true);
            echo "</textarea></br> 
\t\t\t<textarea id=\"textarea_test\"placeholder=\"السؤال\" name=\"modif_justi\" class=\"textarea_test\" style=\"\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "justification"), "html", null, true);
            echo "</textarea></br> 
\t\t\t<input class=\"input_test_pr\" style=\"\" name=\"modif_rep1\"  placeholder=\"الإجابة1 الصحيحة\" type=\"text\" value=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "rep1"), "html", null, true);
            echo "\"></input></br> 
\t\t\t<input class=\"input_test_pr\" style=\"\" name=\"modif_rep2\" placeholder=\"الإجابة2\" type=\"text\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "rep2"), "html", null, true);
            echo "\"></input></br> 
\t\t\t<input class=\"input_test_pr\" style=\"\" name=\"modif_rep3\" placeholder=\"الإجابة3\" type=\"text\" value=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "rep3"), "html", null, true);
            echo "\"></input></br>  
\t\t\t<input class=\"input_test_pr\" style=\"\" name=\"modif_rep4\" placeholder=\"الإجابة4\" type=\"text\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "rep4"), "html", null, true);
            echo "\"></input></br>  
\t\t\t<input class=\"input_test_pr\" style=\"display:none\" name=\"modif_id\" placeholder=\"\" type=\"text\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : null), "id"), "html", null, true);
            echo "\"></input></br> 
\t\t\t\t\t
\t\t\t<div id=\"btn_insc\" style=\"\">
\t\t\t\t<input  style=\"\" value=\"حفض التغير\"  placeholder=\"Login \" type=\"submit\" ></input>
\t\t\t</div>
\t\t</form>
\t
\t\t
\t</div>
\t</div>
\t";
            // line 68
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 69
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t
\t\t</div>";
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:quest_prof:question_prof.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 70,  140 => 69,  138 => 68,  125 => 58,  121 => 57,  117 => 56,  113 => 55,  109 => 54,  105 => 53,  101 => 52,  65 => 19,  60 => 17,  53 => 13,  46 => 11,  40 => 10,  34 => 7,  27 => 6,  25 => 5,  81 => 58,  74 => 54,  19 => 1,);
    }
}
