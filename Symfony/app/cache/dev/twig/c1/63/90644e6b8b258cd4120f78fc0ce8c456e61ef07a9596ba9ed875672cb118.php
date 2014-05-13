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
        return array (  137 => 66,  124 => 56,  90 => 42,  65 => 35,  76 => 37,  53 => 18,  134 => 51,  97 => 44,  77 => 44,  226 => 179,  222 => 178,  218 => 177,  211 => 173,  207 => 172,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 233,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 60,  107 => 36,  61 => 32,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 38,  63 => 33,  59 => 29,  94 => 41,  89 => 64,  85 => 25,  75 => 46,  68 => 35,  56 => 25,  21 => 2,  88 => 6,  78 => 21,  44 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 94,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 77,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 47,  49 => 23,  25 => 3,  79 => 40,  69 => 37,  47 => 20,  246 => 90,  157 => 56,  145 => 46,  139 => 68,  131 => 50,  123 => 71,  120 => 40,  115 => 43,  111 => 37,  108 => 70,  101 => 43,  98 => 30,  96 => 44,  83 => 38,  74 => 54,  66 => 34,  52 => 9,  209 => 82,  203 => 171,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 99,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 75,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 50,  112 => 46,  109 => 60,  106 => 36,  99 => 31,  95 => 29,  92 => 21,  86 => 41,  82 => 40,  80 => 38,  73 => 36,  64 => 13,  57 => 32,  45 => 22,  60 => 20,  55 => 22,  51 => 21,  43 => 19,  35 => 9,  34 => 12,  37 => 14,  32 => 5,  48 => 8,  42 => 15,  39 => 7,  30 => 7,  26 => 6,  24 => 4,  50 => 28,  41 => 11,  38 => 6,  27 => 3,  23 => 3,  33 => 6,  22 => 2,  19 => 1,  103 => 49,  100 => 65,  93 => 65,  91 => 27,  87 => 39,  81 => 58,  72 => 15,  67 => 36,  62 => 13,  58 => 31,  54 => 17,  46 => 8,  40 => 8,  36 => 14,  29 => 4,  20 => 1,  31 => 3,  28 => 2,);
    }
}
