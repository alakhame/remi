<?php

/* InnovitGeneralBundle:General:entete.html.twig */
class __TwigTemplate_4ca4f77a64dad20393f7dbaa5fa1af8ce83b5cae0c9e641b1e086be1c84a5780 extends Twig_Template
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
        return array (  23 => 3,  156 => 75,  128 => 82,  64 => 31,  20 => 1,  94 => 52,  83 => 33,  61 => 28,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 85,  131 => 42,  122 => 78,  108 => 31,  102 => 28,  92 => 25,  84 => 21,  48 => 21,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  76 => 4,  71 => 17,  55 => 15,  114 => 22,  109 => 31,  106 => 20,  85 => 22,  77 => 12,  28 => 5,  39 => 7,  89 => 16,  65 => 14,  63 => 13,  58 => 10,  34 => 5,  26 => 6,  98 => 40,  88 => 17,  46 => 19,  36 => 6,  43 => 7,  50 => 7,  38 => 9,  27 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  130 => 42,  100 => 27,  78 => 40,  75 => 24,  53 => 21,  24 => 4,  25 => 3,  19 => 1,  79 => 5,  74 => 35,  72 => 15,  69 => 33,  60 => 30,  47 => 7,  40 => 6,  22 => 2,  267 => 32,  185 => 58,  182 => 57,  177 => 56,  165 => 46,  159 => 76,  148 => 96,  133 => 43,  125 => 39,  120 => 75,  117 => 36,  110 => 20,  105 => 31,  101 => 19,  87 => 35,  80 => 15,  67 => 34,  57 => 11,  54 => 14,  51 => 13,  44 => 19,  42 => 16,  35 => 4,  32 => 3,  29 => 2,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 41,  129 => 36,  124 => 35,  121 => 73,  118 => 36,  115 => 39,  111 => 32,  107 => 62,  104 => 28,  97 => 24,  93 => 18,  90 => 48,  81 => 42,  70 => 23,  66 => 13,  62 => 11,  59 => 29,  56 => 25,  52 => 23,  49 => 9,  45 => 6,  41 => 18,  37 => 7,  33 => 7,  30 => 3,);
    }
}
