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
\t<div class=\"inputs_test_pr\" class=\"\" style=\"\">
\t\t
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
\t\t<select  id=\"choix_niveau_test\" name=\"choix\">
\t\t\t\t\t\t\t<option value=\"choix1\">Choix 1</option>
\t\t\t\t\t\t\t<option value=\"choix2\">Choix 2</option>
\t\t\t\t\t\t\t<option value=\"choix3\">Choix 3</option>
\t\t\t\t\t\t\t<option value=\"choix4\">Choix 4</option>
\t\t</select>
\t\t
\t\t<select  id=\"choix_matr_test\" name=\"choix\">
\t\t\t\t\t\t\t<option value=\"choix1\">الرياضيات</option>
\t\t\t\t\t\t\t<option value=\"choix2\">علوم الحياة و الأرض</option>
\t\t\t\t\t\t\t<option value=\"choix3\">الفزياء و الكمياء</option>
\t\t\t\t\t\t\t<option value=\"choix4\">التاريخ</option>
\t\t\t\t\t\t\t<option value=\"choix4\">الفرنسية</option>
\t\t</select>
\t\t</div>
\t\t<form action=\"\" method=\"post\" >
\t\t\t<textarea id=\"textarea_test\"placeholder=\"السؤال\" class=\"input_test_pr\" style=\"text-align:right;max-width:98%;\"></textarea></br> 
\t\t\t<input class=\"input_test_pr\" style=\"\"  placeholder=\"الإجابة1 الصحيحة\" type=\"text\" ></input></br> 
\t\t\t<input class=\"input_test_pr\" style=\"\"  placeholder=\"الإجابة2\" type=\"text\" ></input></br> 
\t\t\t<input class=\"input_test_pr\" style=\"\"  placeholder=\"الإجابة3\" type=\"text\" ></input></br>  
\t\t\t<input class=\"input_test_pr\" style=\"\"  placeholder=\"الإجابة4\" type=\"text\" ></input></br>  
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
\t\t<div class=\"\" id=\"\" style=\"margin-bottom:20px\">
\t\t\t:أسئلتي المقترحة
\t\t</div>\t
\t\t<div class=\"\" id=\"mes_questions_pr\" style=\"\">
\t\t\t";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t
\t<div id=\"consl_prof";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"\" style=\"width:100%\">
\t
\t<div class=\"entete_mes_questions\" style=\"\">
\t<div id=\"afficher_consls";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"btn_affich_consl_prof\" style=\"\" onclick=\"javascript:afficherlemessage_envoyer(";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ")\">السؤال</div>
\t<div id=\"masquer_consls";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"btn_masqu_consl_prof\" style=\"\" onclick=\"javascript:masquerlemessage_envoyer(";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ")\">إخفاء</div>
\t<div class=\"nom_consl_prof\" style=\"\">السادس إبتدائي</div>
\t<div class=\"image_consl_prof\" style=\"\"><img id=\"\" src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/question.png"), "html", null, true);
            echo "\" style=\"width:100%\"/></div>
\t<div class=\"effacer_ce_message\" title=\"Effacer ce message\" style=\"\">مسح</div>
\t</div >
\t
\t<div id=\"contenu_consl_prof";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"contenu_consl_prof\" style=\"width:100%\">
\t<div class=\"tri_consl_prof\" style=\"\"></div>
\t<div class=\"contenu_qust_prof\"  id=\"text_consl_prof";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"  style=\"\">
\t
\t\t
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
\t\t<select  id=\"choix_niveau_test\" name=\"choix\">
\t\t\t\t\t\t\t<option value=\"choix1\">Choix 1</option>
\t\t\t\t\t\t\t<option value=\"choix2\">Choix 2</option>
\t\t\t\t\t\t\t<option value=\"choix3\">Choix 3</option>
\t\t\t\t\t\t\t<option value=\"choix4\">Choix 4</option>
\t\t</select>
\t\t
\t\t<select  id=\"choix_matr_test\" name=\"choix\">
\t\t\t\t\t\t\t<option value=\"choix1\">الرياضيات</option>
\t\t\t\t\t\t\t<option value=\"choix2\">علوم الحياة و الأرض</option>
\t\t\t\t\t\t\t<option value=\"choix3\">الفزياء و الكمياء</option>
\t\t\t\t\t\t\t<option value=\"choix4\">التاريخ</option>
\t\t\t\t\t\t\t<option value=\"choix4\">الفرنسية</option>
\t\t</select>
\t\t</div>
\t\t<form action=\"\" method=\"post\" >
\t\t\t<textarea id=\"textarea_test\"placeholder=\"السؤال\" class=\"input_test_pr\" style=\"text-align:right;max-width:98%;\"></textarea></br> 
\t\t\t<input class=\"input_test_pr\" style=\"\"  placeholder=\"الإجابة1 الصحيحة\" type=\"text\" ></input></br> 
\t\t\t<input class=\"input_test_pr\" style=\"\"  placeholder=\"الإجابة2\" type=\"text\" ></input></br> 
\t\t\t<input class=\"input_test_pr\" style=\"\"  placeholder=\"الإجابة3\" type=\"text\" ></input></br>  
\t\t\t<input class=\"input_test_pr\" style=\"\"  placeholder=\"الإجابة4\" type=\"text\" ></input></br>  
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
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "\t\t\t
\t\t</div>
\t
\t</div>
\t
\t<script  src=\"";
        // line 122
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
        return array (  174 => 122,  167 => 117,  113 => 69,  170 => 93,  137 => 66,  124 => 56,  97 => 44,  104 => 64,  90 => 53,  84 => 50,  34 => 12,  65 => 35,  100 => 65,  77 => 44,  53 => 18,  23 => 3,  155 => 77,  127 => 84,  58 => 27,  20 => 1,  76 => 56,  81 => 42,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 60,  107 => 62,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 77,  102 => 32,  71 => 38,  67 => 30,  63 => 33,  59 => 34,  38 => 6,  94 => 61,  89 => 34,  85 => 25,  75 => 17,  68 => 35,  56 => 9,  87 => 39,  21 => 2,  26 => 6,  93 => 54,  88 => 60,  78 => 46,  46 => 8,  27 => 3,  44 => 7,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 127,  163 => 62,  158 => 78,  156 => 66,  151 => 77,  142 => 59,  138 => 54,  136 => 56,  121 => 80,  117 => 44,  105 => 47,  91 => 27,  62 => 23,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 40,  72 => 31,  69 => 37,  47 => 17,  40 => 8,  37 => 14,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 68,  131 => 95,  123 => 47,  120 => 40,  115 => 44,  111 => 37,  108 => 67,  101 => 63,  98 => 31,  96 => 44,  83 => 38,  74 => 34,  66 => 34,  55 => 22,  52 => 15,  50 => 28,  43 => 9,  41 => 15,  35 => 4,  32 => 5,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 99,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 75,  147 => 98,  144 => 49,  141 => 48,  133 => 87,  130 => 41,  125 => 44,  122 => 43,  116 => 50,  112 => 46,  109 => 34,  106 => 36,  103 => 49,  99 => 31,  95 => 28,  92 => 21,  86 => 41,  82 => 57,  80 => 55,  73 => 36,  64 => 34,  60 => 20,  57 => 32,  54 => 11,  51 => 21,  48 => 21,  45 => 17,  42 => 15,  39 => 15,  36 => 14,  33 => 6,  30 => 7,);
    }
}
