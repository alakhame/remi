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
        return array (  146 => 70,  113 => 55,  124 => 56,  90 => 42,  76 => 37,  97 => 44,  77 => 44,  53 => 13,  137 => 66,  134 => 51,  126 => 74,  84 => 42,  65 => 19,  70 => 37,  127 => 76,  114 => 66,  104 => 59,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 69,  132 => 51,  128 => 60,  107 => 36,  61 => 34,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 38,  63 => 33,  59 => 34,  94 => 41,  89 => 34,  85 => 25,  75 => 46,  68 => 35,  56 => 25,  21 => 2,  88 => 6,  78 => 21,  44 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 94,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 77,  142 => 59,  138 => 68,  136 => 56,  121 => 57,  117 => 56,  105 => 53,  49 => 23,  25 => 5,  79 => 40,  69 => 37,  47 => 17,  37 => 14,  246 => 90,  157 => 56,  145 => 46,  139 => 68,  131 => 50,  123 => 71,  120 => 40,  115 => 43,  111 => 37,  108 => 70,  101 => 52,  98 => 53,  96 => 44,  83 => 38,  74 => 54,  66 => 34,  52 => 21,  32 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 99,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 75,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 58,  122 => 43,  116 => 50,  112 => 46,  109 => 54,  106 => 60,  99 => 31,  95 => 50,  92 => 21,  86 => 41,  82 => 40,  80 => 55,  73 => 36,  64 => 29,  57 => 32,  45 => 21,  60 => 17,  55 => 22,  51 => 21,  43 => 9,  35 => 13,  34 => 7,  48 => 8,  42 => 15,  39 => 9,  30 => 7,  26 => 6,  24 => 4,  50 => 28,  41 => 11,  38 => 6,  27 => 6,  23 => 3,  33 => 6,  22 => 2,  19 => 1,  103 => 49,  100 => 65,  93 => 65,  91 => 27,  87 => 39,  81 => 58,  72 => 31,  67 => 15,  62 => 23,  58 => 31,  54 => 11,  46 => 11,  40 => 10,  36 => 14,  29 => 2,  20 => 1,  31 => 3,  28 => 2,);
    }
}
