<?php

/* InnovitProfilBundle:profil:test_prof.html.twig */
class __TwigTemplate_bddab4b61851dcd480d5e22e9fc3c39a1ffe98be2f742a98b663d98d6c1ede8f extends Twig_Template
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
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"\" style=\"width:100%\">
\t
\t<div class=\"entete_mes_questions\" style=\"\">
\t<div id=\"afficher_consls";
            // line 60
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"btn_affich_consl_prof\" style=\"\" onclick=\"javascript:afficherlemessage_envoyer(";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo ")\">السؤال</div>
\t<div id=\"masquer_consls";
            // line 61
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"btn_masqu_consl_prof\" style=\"\" onclick=\"javascript:masquerlemessage_envoyer(";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
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
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"contenu_consl_prof\" style=\"width:100%\">
\t<div class=\"tri_consl_prof\" style=\"\"></div>
\t<div class=\"contenu_qust_prof\"  id=\"text_consl_prof";
            // line 69
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
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
        return array (  174 => 117,  119 => 69,  113 => 67,  82 => 57,  135 => 56,  123 => 46,  68 => 35,  230 => 123,  223 => 118,  172 => 95,  91 => 49,  126 => 60,  95 => 40,  103 => 63,  23 => 3,  156 => 75,  128 => 82,  64 => 31,  20 => 1,  94 => 54,  83 => 49,  61 => 28,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 85,  131 => 95,  122 => 78,  108 => 31,  102 => 60,  92 => 39,  84 => 21,  48 => 21,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 65,  127 => 41,  112 => 32,  96 => 25,  76 => 56,  71 => 45,  55 => 32,  114 => 43,  109 => 31,  106 => 63,  85 => 35,  77 => 45,  28 => 2,  39 => 15,  89 => 60,  65 => 20,  63 => 33,  58 => 23,  34 => 12,  26 => 2,  98 => 41,  88 => 55,  46 => 17,  36 => 14,  43 => 16,  50 => 28,  38 => 9,  27 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 101,  192 => 72,  189 => 98,  186 => 60,  181 => 122,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 57,  130 => 42,  100 => 51,  78 => 37,  75 => 42,  53 => 21,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  74 => 36,  72 => 33,  69 => 33,  60 => 30,  47 => 17,  40 => 6,  22 => 2,  267 => 32,  185 => 58,  182 => 57,  177 => 56,  165 => 46,  159 => 74,  148 => 66,  133 => 43,  125 => 39,  120 => 75,  117 => 36,  110 => 43,  105 => 31,  101 => 41,  87 => 38,  80 => 55,  67 => 30,  57 => 22,  54 => 14,  51 => 20,  44 => 19,  42 => 15,  35 => 4,  32 => 3,  29 => 2,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 104,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 96,  171 => 54,  166 => 93,  163 => 50,  160 => 75,  157 => 48,  149 => 84,  146 => 41,  140 => 46,  137 => 41,  129 => 36,  124 => 47,  121 => 73,  118 => 36,  115 => 59,  111 => 42,  107 => 55,  104 => 42,  97 => 61,  93 => 18,  90 => 43,  81 => 42,  70 => 28,  66 => 34,  62 => 11,  59 => 34,  56 => 18,  52 => 21,  49 => 9,  45 => 6,  41 => 15,  37 => 7,  33 => 13,  30 => 3,);
    }
}