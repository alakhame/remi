<?php

/* InnovitProfilBundle:profil:enteteprofil.html.twig */
class __TwigTemplate_d3b2f528ed0cd833b25e0c153eda4d8eb9e8d70f70bd208b5012043ed2c1332d extends Twig_Template
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
        echo "<div id=\"barreuser\" style=\"width:100%;position:absolute;bottom:0px;background:black\">
<div  style=\"width:920px;padding-top:10px;padding-bottom:10px;position:relative;margin:auto\">
<div id=\"\" style=\"width:80px;height:80px;position:absolute;top:-23px;border:3px black solid;display:inline-block\"><img id=\"\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/user_icon.png"), "html", null, true);
        echo "\" style=\"width:100%\"/></div>\t

    <div style=\"margin-left:90px;font-family:Verdana;color:white;display:inline-block\"> 
\t<div id=\"barreuser_1\" style=\"font-family:Verdana;font-size:0.9em;color:white;display:inline-block;margin-left:20px\" >Rhabi</div>
\t
\t<div id=\"barreuser_2\" style=\"font-family:Verdana;font-size:0.9em;color:white;display:inline-block;margin-left:20px\" >khalifa</div>
\t
\t<div id=\"barreuser_3\" style=\"font-family:Verdana;font-size:0.9em;color:white;display:inline-block;margin-left:20px\" onclick=\"javascript:afficherinformations()\">Mes informations</div>
\t
\t<div id=\"barreuser_4\" style=\"font-family:Verdana;font-size:0.9em;color:white;display:inline-block;margin-left:20px\" >Liens Utiles</div>
\t
\t</div>

\t<div id=\"\" style=\"font-family:Verdana;font-size:0.9em;color:white;display:inline-block;position:absolute;right:0px\"  >Déconnexion</div>
\t\t
</div>

\t\t<div id=\"info_du_profil\" class=\"\" style=\"display:none;position:absolute;left:310px\">
\t\t\t\t
\t\t\t\t<div id=\"donnees_de_profil1\" class=\"donnees_de_profil\">
\t\t\t\t<div class=\"titre_div_info\">Mes infos</div>
\t\t\t\t<div class=\"div_info\">RHABI khalifa</div>
\t\t\t\t<div class=\"div_info\">Yahay Elgoudali</div>
\t\t\t\t<div class=\"div_info\">3eme année du collège</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t<div id=\"donnees_de_profil2\" class=\"donnees_de_profil\">
\t\t\t\t<div class=\"titre_div_info\">Infos de visite du site</div>
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t<div id=\"donnees_de_profil3\" class=\"donnees_de_profil\">
\t\t\t\t<div class=\"titre_div_info\">Signalisation</div>
\t\t\t\t
\t\t\t\t</div>
\t\t</div>\t

\t<script>
\tfunction afficherinformations(){document.getElementById(\"info_du_profil\").style.display=\"block\"}
\t</script>
</div>";
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:profil:enteteprofil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 44,  65 => 35,  76 => 43,  100 => 59,  53 => 21,  23 => 3,  148 => 96,  134 => 85,  90 => 48,  20 => 1,  81 => 42,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 82,  107 => 62,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 76,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 30,  63 => 33,  59 => 34,  38 => 9,  94 => 55,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 2,  93 => 54,  88 => 55,  78 => 33,  46 => 19,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 127,  163 => 62,  158 => 67,  156 => 75,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 73,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 4,  72 => 31,  69 => 33,  47 => 17,  40 => 18,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 95,  123 => 47,  120 => 75,  115 => 43,  111 => 37,  108 => 36,  101 => 60,  98 => 31,  96 => 31,  83 => 35,  74 => 32,  66 => 15,  55 => 15,  52 => 21,  50 => 28,  43 => 8,  41 => 15,  35 => 4,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 78,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 41,  92 => 21,  86 => 28,  82 => 5,  80 => 19,  73 => 19,  64 => 31,  60 => 30,  57 => 32,  54 => 25,  51 => 14,  48 => 13,  45 => 17,  42 => 19,  39 => 9,  36 => 5,  33 => 7,  30 => 7,);
    }
}
