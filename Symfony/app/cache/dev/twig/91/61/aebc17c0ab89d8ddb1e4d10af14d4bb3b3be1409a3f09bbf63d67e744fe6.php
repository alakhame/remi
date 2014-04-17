<?php

/* InnovitGeneralBundle:General:Layoutprofil.php.twig */
class __TwigTemplate_9161aebc17c0ab89d8ddb1e4d10af14d4bb3b3be1409a3f09bbf63d67e744fe6 extends Twig_Template
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
\t
\t</head>
\t 
\t<body class=\"\" style=\"\" onscroll=\"scroll();\" >
\t 
        <div id=\"Entete\" style=\"\">
\t\t<div id=\"imag_back_ground\" style=\"\">
\t\t\t\t  
\t     </div> 
\t\t
\t\t\t<div class=\"box \" style=\"\">
\t\t\t
\t\t\t\t <div id=\"logo\" style=\"\">
\t\t\t\t    <img id=\"logo_image\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" style=\"\"/>
\t\t\t     </div> 
\t\t\t\t <div id=\"grand_titre\" style=\"\">
\t\t\t\t    SELF SCHEDULE COATCHING
\t\t\t     </div>  
               \t\t\t\t 
\t\t\t</div>   
\t\t\t
<div id=\"barreuser\" style=\"\">
\t<div id=\"menu_a\" style=\"\">\t
\t<a id=\"menu_a_4\" href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("innovit_general_homepage", array("name" => "liensutiles"));
        echo "\"><div id=\"menu_4\" style=\"\" >مواقع مفيدة</div></a>
\t\t
\t<a id=\"menu_a_3\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("innovit_general_homepage", array("name" => "flashactus"));
        echo "\"><div id=\"menu_3\" style=\"\">مستجدات</div></a>
\t
\t<a id=\"menu_a_2\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("innovit_general_homepage", array("name" => "qsnous"));
        echo "\"><div id=\"menu_2\" style=\"\" >من نحن؟</div></a>
\t
\t<a id=\"menu_a_1\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("innovit_general_homepage", array("name" => "Accueil"));
        echo "\"><div id=\"menu_1\" style=\"\" > 
\t<div id=\"img_acc\" style=\"\" ><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/accueil_rond.png"), "html", null, true);
        echo "\" id=\"img_acc\" style=\"height:100%;\"/></div>
\tالرئسية</div></a>
\t<a id=\"\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("innovit_general_homepage", array("name" => "login"));
        echo "\"><div id=\"sing_in\" style=\"\" >تسجيل الدخول</div></a>
\t\t
</div>

</div>



\t\t</div>       
\t\t<div id=\"corp_profil\" style=\"\"> 
\t\t";
        // line 50
        $this->displayBlock('corp', $context, $blocks);
        // line 53
        echo "\t\t</div>
\t\t<div id=\"footer\" style=\"\">
\t\t<div id=\"images_footer\">
\t\t<div id=\"innovit\" class=\"footer_image\" style=\"\">
\t\t<img id=\"logo_image\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/innovIT_logo.png"), "html", null, true);
        echo "\" style=\"width:100%\"/>
        </div>
        <div id=\"inpt\" class=\"footer_image\" style=\"\">
\t\t<img id=\"logo_image\" src=\"";
        // line 60
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
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/script_barre.js"), "html", null, true);
        echo "\" > </script>
\t\t\t\t
\t</body>
</html>";
    }

    // line 50
    public function block_corp($context, array $blocks = array())
    {
        // line 51
        echo "\t\t
\t\t";
    }

    public function getTemplateName()
    {
        return "InnovitGeneralBundle:General:Layoutprofil.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 53,  77 => 38,  53 => 21,  137 => 54,  134 => 51,  126 => 74,  84 => 42,  65 => 35,  70 => 37,  127 => 76,  114 => 66,  104 => 59,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  63 => 33,  59 => 28,  94 => 52,  89 => 20,  85 => 4,  75 => 39,  68 => 35,  56 => 9,  21 => 2,  88 => 5,  78 => 21,  44 => 12,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  49 => 19,  25 => 3,  79 => 40,  69 => 25,  47 => 9,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 50,  123 => 71,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 53,  96 => 31,  83 => 35,  74 => 38,  66 => 15,  52 => 21,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 63,  109 => 60,  106 => 60,  99 => 31,  95 => 50,  92 => 21,  86 => 28,  82 => 40,  80 => 19,  73 => 37,  64 => 29,  57 => 11,  45 => 21,  60 => 33,  55 => 15,  51 => 14,  43 => 19,  35 => 4,  34 => 7,  37 => 7,  32 => 3,  48 => 13,  42 => 19,  39 => 9,  30 => 7,  26 => 6,  24 => 4,  50 => 23,  41 => 7,  38 => 9,  27 => 4,  23 => 3,  33 => 7,  22 => 2,  19 => 1,  103 => 57,  100 => 56,  93 => 28,  91 => 27,  87 => 25,  81 => 42,  72 => 31,  67 => 34,  62 => 23,  58 => 31,  54 => 25,  46 => 21,  40 => 18,  36 => 5,  29 => 2,  20 => 1,  31 => 3,  28 => 7,);
    }
}
