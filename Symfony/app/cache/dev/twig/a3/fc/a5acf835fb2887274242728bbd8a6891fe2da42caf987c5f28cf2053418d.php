<?php

/* InnovitProfilBundle:profil:messages.html.twig */
class __TwigTemplate_a3fca5acf835fb2887274242728bbd8a6891fe2da42caf987c5f28cf2053418d extends Twig_Template
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
        echo "﻿\t
\t<div id=\"div_messages\" class=\"\" style=\"\">
\t<div class=\"prog_chaque_matrs\" id=\"\" style=\"\">
الرسائل
</div>
\t<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("sendNew");
        echo "\" method=\"post\"  >
\t\t<div id=\"message1\" class=\"\" style=\"\" >
\t\t\t
\t\t\t<div id=\"message_entet1\" class=\"\" style=\"\" onclick=\"javascript: toggelf(1)\">
\t\t\t\t<div id=\"titre_message1\" class=\"\" style=\"\" >
\t\t\t\t\tأرسل رسالة جديدة
\t\t\t\t</div>
\t\t\t\t<div id=\"image_message1\" class=\"\" style=\"\">
\t\t\t\t\t<img id=\"image_messagei1\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fleche2.png"), "html", null, true);
        echo "\" style=\"width:100%\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div id=\"elements_message1\" class=\"\" style=\"background:white;\">
\t\t\t\t<div style=\"width:90%;margin:auto\">
\t\t\t\t\t<input id=\"messager-nous_contenu_nom_prenom\" style=\"\"  placeholder=\"الإسم الكامل\" type=\"text\" name=\"nom\"></input>
\t\t\t\t\t<input id=\"messager-nous_contenu_objet\" style=\"\"  placeholder=\"الموضوع\" type=\"text\" name=\"objet\"></input>\t
\t\t\t\t\t<textarea id=\"messager-nous_contenu_message\" style=\"\" placeholder=\"السالة\" name=\"message\" ></textarea>
\t\t\t\t\t<input id=\"messager-nous_contenu_Envoyer\" style=\"\"  value=\"أرسل\" type=\"submit\" name=\"Evoyer\"></input>
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t</div>
\t\t
\t</form>
\t\t
\t\t<div id=\"message2\" class=\"\" style=\"\">
\t\t\t<div id=\"message_entet2\" class=\"\" style=\"\" onclick=\"javascript: toggelf(2)\">
\t\t\t\t<div id=\"image_message2\" class=\"\" style=\"\" >
\t\t\t\t\t<img id=\"image_messagei2\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fleche2.png"), "html", null, true);
        echo "\" style=\"width:100%\"/>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div id=\"titre_message2\" class=\"\" style=\"\" >
\t\t\t\t\tالرسائل الواردة
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div id=\"elements_message2\" class=\"elements_message\" style=\"\">
\t\t\t\t<div style=\"width:100%;margin:auto\">
\t\t\t\t\t";
        // line 47
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("InnovitProfilBundle:Message:recus"));
        echo " 
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t
\t<div id=\"message3\" class=\"\" style=\"\">
\t\t\t<div id=\"message_entet3\" class=\"\" style=\"\" onclick=\"javascript: toggelf(3)\">
\t\t\t\t<div id=\"titre_message3\" class=\"\" style=\"\" >
\t\t\t\t\tالرسائل المرسلة
\t\t\t\t</div>
\t\t\t\t<div id=\"image_message3\" class=\"\" style=\"\" >
\t\t\t\t\t<img id=\"image_messagei3\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fleche2.png"), "html", null, true);
        echo "\" style=\"width:100%\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div id=\"elements_message3\" class=\"elements_message\" style=\"\">
\t\t\t\t<div style=\"width:100%;margin:auto\">
\t\t\t\t\t";
        // line 65
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("InnovitProfilBundle:Message:send"));
        echo " 
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t
<script  src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/script_messages.js"), "html", null, true);
        echo "\" > </script>";
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:profil:messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 44,  64 => 34,  95 => 55,  82 => 24,  21 => 2,  23 => 3,  119 => 77,  73 => 37,  68 => 35,  20 => 1,  94 => 54,  83 => 38,  61 => 35,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 95,  122 => 37,  108 => 70,  102 => 60,  92 => 25,  84 => 50,  48 => 17,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 98,  127 => 84,  112 => 43,  96 => 25,  76 => 47,  71 => 23,  55 => 8,  114 => 22,  109 => 31,  106 => 20,  85 => 47,  77 => 43,  28 => 7,  39 => 15,  89 => 50,  65 => 20,  63 => 33,  58 => 31,  34 => 14,  26 => 6,  98 => 40,  88 => 55,  46 => 12,  36 => 14,  43 => 7,  50 => 23,  38 => 6,  27 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 78,  155 => 77,  152 => 55,  142 => 52,  136 => 44,  130 => 42,  100 => 65,  78 => 46,  75 => 24,  53 => 21,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  74 => 34,  72 => 33,  69 => 17,  60 => 17,  47 => 17,  40 => 6,  22 => 2,  267 => 32,  185 => 58,  182 => 57,  177 => 56,  165 => 46,  159 => 45,  148 => 42,  133 => 87,  125 => 39,  120 => 40,  117 => 36,  110 => 49,  105 => 31,  101 => 59,  87 => 25,  80 => 15,  67 => 30,  57 => 22,  54 => 14,  51 => 15,  44 => 8,  42 => 15,  35 => 6,  32 => 7,  29 => 4,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 127,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 41,  129 => 36,  124 => 35,  121 => 80,  118 => 36,  115 => 44,  111 => 32,  107 => 62,  104 => 64,  97 => 24,  93 => 18,  90 => 58,  81 => 42,  70 => 23,  66 => 13,  62 => 11,  59 => 25,  56 => 18,  52 => 21,  49 => 9,  45 => 22,  41 => 15,  37 => 14,  33 => 7,  30 => 3,);
    }
}
