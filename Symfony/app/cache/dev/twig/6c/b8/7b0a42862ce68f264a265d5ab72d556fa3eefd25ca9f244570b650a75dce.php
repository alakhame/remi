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
        return array (  104 => 64,  90 => 58,  84 => 50,  34 => 14,  65 => 35,  100 => 65,  77 => 44,  53 => 18,  23 => 3,  155 => 77,  127 => 84,  58 => 27,  20 => 1,  76 => 47,  81 => 42,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 62,  61 => 35,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 77,  102 => 32,  71 => 19,  67 => 30,  63 => 33,  59 => 34,  38 => 6,  94 => 55,  89 => 34,  85 => 25,  75 => 17,  68 => 35,  56 => 9,  87 => 43,  21 => 2,  26 => 6,  93 => 54,  88 => 55,  78 => 46,  46 => 8,  27 => 3,  44 => 7,  31 => 3,  28 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 127,  163 => 62,  158 => 78,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 80,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 45,  72 => 31,  69 => 33,  47 => 17,  40 => 8,  37 => 14,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 95,  123 => 47,  120 => 40,  115 => 44,  111 => 37,  108 => 70,  101 => 60,  98 => 31,  96 => 44,  83 => 35,  74 => 34,  66 => 23,  55 => 22,  52 => 15,  50 => 28,  43 => 9,  41 => 15,  35 => 4,  32 => 5,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 98,  144 => 49,  141 => 48,  133 => 87,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 43,  109 => 34,  106 => 36,  103 => 49,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 38,  73 => 27,  64 => 34,  60 => 20,  57 => 32,  54 => 11,  51 => 21,  48 => 21,  45 => 17,  42 => 15,  39 => 15,  36 => 14,  33 => 6,  30 => 7,);
    }
}
