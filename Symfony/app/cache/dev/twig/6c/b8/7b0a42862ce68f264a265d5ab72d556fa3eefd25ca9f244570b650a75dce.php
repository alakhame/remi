<?php

/* InnovitProfilBundle:profil:messages.html.twig */
class __TwigTemplate_6cb87b0a42862ce68f264a265d5ab72d556fa3eefd25ca9f244570b650a75dce extends Twig_Template
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
<<<<<<< HEAD:Symfony/app/cache/dev/twig/a3/fc/a5acf835fb2887274242728bbd8a6891fe2da42caf987c5f28cf2053418d.php
        return array (  103 => 44,  64 => 34,  95 => 55,  82 => 24,  21 => 2,  23 => 3,  119 => 77,  73 => 37,  68 => 35,  20 => 1,  94 => 54,  83 => 38,  61 => 35,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 95,  122 => 37,  108 => 70,  102 => 60,  92 => 25,  84 => 50,  48 => 17,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 98,  127 => 84,  112 => 43,  96 => 25,  76 => 47,  71 => 23,  55 => 8,  114 => 22,  109 => 31,  106 => 20,  85 => 47,  77 => 43,  28 => 7,  39 => 15,  89 => 50,  65 => 20,  63 => 33,  58 => 31,  34 => 14,  26 => 6,  98 => 40,  88 => 55,  46 => 12,  36 => 14,  43 => 7,  50 => 23,  38 => 6,  27 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 78,  155 => 77,  152 => 55,  142 => 52,  136 => 44,  130 => 42,  100 => 65,  78 => 46,  75 => 24,  53 => 21,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  74 => 34,  72 => 33,  69 => 17,  60 => 17,  47 => 17,  40 => 6,  22 => 2,  267 => 32,  185 => 58,  182 => 57,  177 => 56,  165 => 46,  159 => 45,  148 => 42,  133 => 87,  125 => 39,  120 => 40,  117 => 36,  110 => 49,  105 => 31,  101 => 59,  87 => 25,  80 => 15,  67 => 30,  57 => 22,  54 => 14,  51 => 15,  44 => 8,  42 => 15,  35 => 6,  32 => 7,  29 => 4,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 127,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 41,  129 => 36,  124 => 35,  121 => 80,  118 => 36,  115 => 44,  111 => 32,  107 => 62,  104 => 64,  97 => 24,  93 => 18,  90 => 58,  81 => 42,  70 => 23,  66 => 13,  62 => 11,  59 => 25,  56 => 18,  52 => 21,  49 => 9,  45 => 22,  41 => 15,  37 => 14,  33 => 7,  30 => 3,);
=======
        return array (  90 => 58,  34 => 14,  100 => 65,  76 => 47,  53 => 18,  23 => 3,  165 => 82,  134 => 88,  126 => 81,  70 => 37,  65 => 35,  20 => 1,  77 => 44,  127 => 76,  114 => 66,  104 => 59,  81 => 50,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 91,  132 => 51,  128 => 84,  107 => 36,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 33,  59 => 34,  38 => 6,  94 => 55,  89 => 34,  85 => 25,  75 => 46,  68 => 14,  56 => 25,  87 => 43,  21 => 2,  26 => 6,  93 => 54,  88 => 55,  78 => 21,  46 => 8,  27 => 3,  44 => 7,  31 => 7,  28 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 127,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 23,  24 => 4,  25 => 3,  19 => 1,  79 => 40,  72 => 31,  69 => 33,  47 => 17,  40 => 8,  37 => 14,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 95,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 70,  101 => 64,  98 => 31,  96 => 44,  83 => 35,  74 => 19,  66 => 23,  55 => 22,  52 => 21,  50 => 28,  43 => 9,  41 => 11,  35 => 9,  32 => 5,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 81,  154 => 102,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 44,  109 => 43,  106 => 36,  103 => 49,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 38,  73 => 27,  64 => 29,  60 => 20,  57 => 32,  54 => 11,  51 => 21,  48 => 8,  45 => 21,  42 => 15,  39 => 9,  36 => 14,  33 => 6,  30 => 7,);
>>>>>>> d72be4b35380f578e5d74bc289ab281c213faea4:Symfony/app/cache/dev/twig/6c/b8/7b0a42862ce68f264a265d5ab72d556fa3eefd25ca9f244570b650a75dce.php
    }
}
