<?php

/* InnovitGeneralBundle:General:entete.html.twig */
class __TwigTemplate_1758f21b522d6917b37e66758b331890195a5bfdb1e2a59644f9eb089477de61 extends Twig_Template
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
        echo "<div id=\"menu\" style=\"width:100%;position:absolute;bottom:0px;background:black\">
<div  style=\"width:960px;padding-top:10px;padding-bottom:10px;position:relative;margin:auto\">\t
\t<a id=\"menu_a_1\" href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("innovit_general_homepage", array("name" => "Accueil"));
        echo "\"\"><div id=\"menu_1\" style=\"font-family:Verdana;font-size:0.8em;\" >Accueil</div></a>
\t
\t<a id=\"menu_a_2\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("innovit_general_homepage", array("name" => "qsnous"));
        echo "\"\"><div id=\"menu_2\" style=\"font-family:Verdana;font-size:0.8em;\" >Qui sommes nous?</div></a>
\t
\t<a id=\"menu_a_3\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("innovit_general_homepage", array("name" => "flashactus"));
        echo "\"\"><div id=\"menu_3\" style=\"font-family:Verdana;font-size:0.8em;\">flash Actus</div></a>
\t
\t<a id=\"menu_a_4\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("innovit_general_homepage", array("name" => "liensutiles"));
        echo "\"\"><div id=\"menu_4\" style=\"font-family:Verdana;font-size:0.8em;\" >Liens Utiles</div></a>
\t
\t<div id=\"sing_in\" style=\"font-family:Verdana;font-size:0.8em;\" onclick=\"javascript:affichersingin()\" >Sing-in</div>
\t\t
</div>

\t<div id=\"div_authentification\" >
\t<div style=\"border-bottom:8px #59407F solid;position:absolute;top:-8px;left:100px;border-right:8px transparent solid;border-left:8px transparent solid;height:0px;width:0px\"></div>
\t
\t    <div style=\"font-size:1.2em;color:white;position:relative\">
\t\tAuthentification
\t\t<div id=\"\"  style=\"width:10px;height:10px;position:absolute;right:0px;top:0px\" onclick=\"javascript:fermersingin()\">
\t    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fermer.png"), "html", null, true);
        echo "\" style=\"height:100%;width:100%\"/>
\t     </div>
\t\t</div>
\t\t<div class=\"input_authentification\">
\t\t\t<input  style=\"\" class=\"input\"  placeholder=\"Login \" type=\"text\" >
\t\t\t</input>
\t\t</div>
\t\t<div class=\"input_authentification\">
\t\t\t<input  style=\"\" class=\"input\"  placeholder=\"Mot de passe \" type=\"text\">
\t\t\t</input>
\t\t</div>
\t\t<div class=\"input_authentification\" style=\"width:100px;margin:auto;margin-top:10px\">
\t\t\t<input  style=\"\" class=\"\" value=\"Connexion\"  placeholder=\"Login \" type=\"submit\" >
\t\t\t</input>
\t\t</div>
\t\t <div style=\"font-size:0.8em;color:white;color:#FF9900;margin-top:10px\">Mot de passe oublié</div>
\t</div>
\t<script>
\tfunction affichersingin(){document.getElementById(\"div_authentification\").style.display=\"block\"}
\tfunction fermersingin() {document.getElementById(\"div_authentification\").style.display=\"none\"}</script>
</div>";
    }

    public function getTemplateName()
    {
        return "InnovitGeneralBundle:General:entete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 5,  127 => 76,  104 => 59,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  107 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  71 => 19,  63 => 15,  59 => 28,  94 => 52,  89 => 20,  85 => 25,  68 => 14,  56 => 9,  21 => 2,  88 => 6,  78 => 21,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  121 => 46,  117 => 44,  105 => 40,  49 => 19,  25 => 3,  69 => 25,  47 => 9,  37 => 7,  246 => 90,  157 => 56,  145 => 46,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 35,  74 => 38,  66 => 15,  52 => 21,  50 => 23,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 4,  64 => 29,  57 => 11,  45 => 17,  55 => 15,  51 => 14,  35 => 4,  48 => 13,  42 => 19,  30 => 7,  26 => 6,  24 => 4,  139 => 45,  136 => 56,  128 => 49,  114 => 66,  108 => 36,  102 => 32,  84 => 42,  79 => 33,  75 => 17,  70 => 37,  65 => 35,  60 => 30,  43 => 8,  61 => 26,  53 => 21,  44 => 12,  41 => 7,  39 => 9,  34 => 7,  32 => 3,  38 => 9,  27 => 4,  23 => 3,  33 => 7,  22 => 2,  19 => 1,  103 => 32,  100 => 53,  93 => 28,  91 => 27,  87 => 25,  81 => 42,  72 => 31,  67 => 34,  62 => 23,  58 => 6,  54 => 25,  46 => 21,  40 => 18,  36 => 5,  29 => 2,  20 => 1,  31 => 3,  28 => 5,);
    }
}
