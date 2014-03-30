<?php

/* InnovitGeneralBundle:General:Layoutgeneral.php.twig */
class __TwigTemplate_b968fba3243fc0273ee395ad89fbad7011258a7336b49da7ddabde2baf3f5bc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'corp' => array($this, 'block_corp'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html id=\"\" class=\"\" lang=\"ar\">

\t<head>
\t<meta charset=\"utf-8\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/css.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
\t</head>
\t 
\t<body class=\"\" style=\"\" onscroll=\"scroll();\" >
\t 
        <div id=\"Entete_general\" style=\"\">
\t\t\t\t
\t\t\t<div class=\"box \" style=\"\">
\t\t\t
\t\t\t\t <div id=\"logo_general\" style=\"\">
\t\t\t\t    <img id=\"logo_image\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" style=\"\"/>
\t\t\t     </div> 
\t\t\t\t <div id=\"grand_titre_general\" style=\"\">
\t\t\t\t    SELF SCHEDULE COATCHING
\t\t\t     </div>  
\t\t\t\t 
\t\t\t\t <div id=\"grand_text_general\" style=\"\">
\t\t\t\t Nouvelle vision d'accompagnement des étudiants pour un avenir educatif solide.
\t\t\t\t </div>
               \t\t\t\t 
\t\t\t</div>   
\t\t\t
\t\t\t<div id=\"menu\" style=\"\">
<div id=\"menu_a\" style=\"\">\t
\t<a id=\"menu_a_4\" href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("innovit_general_homepage", array("name" => "liensutiles"));
        echo "\"\"><div id=\"menu_4\" style=\"\" >مواقع مفيدة</div></a>
\t\t
\t<a id=\"menu_a_3\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("innovit_general_homepage", array("name" => "flashactus"));
        echo "\"\"><div id=\"menu_3\" style=\"\">مستجدات</div></a>
\t
\t<a id=\"menu_a_2\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("innovit_general_homepage", array("name" => "qsnous"));
        echo "\"\"><div id=\"menu_2\" style=\"\" >من نحن؟</div></a>
\t
\t<a id=\"menu_a_1\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("innovit_general_homepage", array("name" => "Accueil"));
        echo "\"\"><div id=\"menu_1\" style=\"\" >الرئسية</div></a>
\t<div id=\"sing_in\" style=\"\" onclick=\"javascript:affichersingin()\" >تسجيل الدخول</div>
\t\t
</div>


<div id=\"ligne_d_adaptation\" style=\"\" >
\t<div id=\"div_authentification\" >
\t<div id=\"div_authent\" style=\"\"></div>
\t
\t    <div style=\"font-size:1.2em;color:#59407F;position:relative\" onclick=\"javascript:fermersingin()\">
\t\tتعريف
\t\t<div id=\"div_fermer\"  style=\"\" onclick=\"javascript:fermersingin()\">
\t    <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fermer.png"), "html", null, true);
        echo "\" style=\"height:100%;width:100%\"/>
\t     </div>
\t\t</div>
\t\t<div class=\"input_authentification\">
\t\t\t<input  style=\"\" class=\"input\"  placeholder=\"اسم التسجيل \" type=\"text\" >
\t\t\t</input>
\t\t</div>
\t\t<div class=\"input_authentification\">
\t\t\t<input  style=\"\" class=\"input\"  placeholder=\"كلمة السر\" type=\"password\">
\t\t\t</input>
\t\t</div>
\t\t<div class=\"input_authentification\" style=\"width:100px;margin:auto;margin-top:10px\">
\t\t\t<input  style=\"\" class=\"\" value=\"دخول\"  placeholder=\"Login \" type=\"submit\" >
\t\t\t</input>
\t\t</div>
\t\t <div id=\"mot_de_passe_oubl\"style=\"\">نسيت كلمة السر</div>
\t</div>
\t<script>
\tfunction affichersingin(){document.getElementById(\"div_authentification\").style.display=\"block\"}
\tfunction fermersingin() {document.getElementById(\"div_authentification\").style.display=\"none\"}</script>
</div>
</div>


\t
\t\t</div>       
\t\t<div id=\"corp_general\" style=\"\"> 
\t\t";
        // line 77
        $this->displayBlock('corp', $context, $blocks);
        // line 80
        echo "\t\t</div>
\t\t<div id=\"footer\" style=\"\">
\t\t<div id=\"images_footer\">
\t\t<div id=\"innovit\" class=\"footer_image\" style=\"\">
\t\t<img id=\"logo_image\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/innovIT_logo.png"), "html", null, true);
        echo "\" style=\"width:100%\"/>
        </div>
        <div id=\"inpt\" class=\"footer_image\" style=\"\">
\t\t<img id=\"logo_image\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logoINPT.png"), "html", null, true);
        echo "\" style=\"width:100%\"/>
        </div>
\t\t</div>\t\t\t
\t\t
\t\t<div id=\"text_footer\">
\t\tCe site est développé dans le cadre du concours Innovit 2014<br>
\t\tEquipe de l'Institut National des Postes et télécommunication
\t\t</div>\t\t\t
\t\t
\t\t
        </div>
\t<script  src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/script_accueil.js"), "html", null, true);
        echo "\" > </script>
\t\t\t\t
\t</body>
</html>";
    }

    // line 77
    public function block_corp($context, array $blocks = array())
    {
        // line 78
        echo "\t\t
\t\t";
    }

    public function getTemplateName()
    {
        return "InnovitGeneralBundle:General:Layoutgeneral.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 77,  127 => 84,  58 => 31,  20 => 1,  76 => 4,  81 => 42,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 62,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 77,  102 => 32,  71 => 19,  67 => 34,  63 => 33,  59 => 28,  38 => 6,  94 => 52,  89 => 50,  85 => 25,  75 => 17,  68 => 35,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 21,  27 => 4,  44 => 12,  31 => 3,  28 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 78,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 80,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 2,  79 => 5,  72 => 31,  69 => 25,  47 => 9,  40 => 18,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 35,  74 => 38,  66 => 15,  55 => 15,  52 => 21,  50 => 23,  43 => 8,  41 => 17,  35 => 4,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 98,  144 => 49,  141 => 48,  133 => 87,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 37,  64 => 29,  60 => 30,  57 => 11,  54 => 25,  51 => 14,  48 => 13,  45 => 17,  42 => 19,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
