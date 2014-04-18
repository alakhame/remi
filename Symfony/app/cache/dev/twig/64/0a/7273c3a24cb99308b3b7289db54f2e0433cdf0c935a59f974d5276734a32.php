<?php

/* InnovitProfilBundle:profil:Layoutprofil.php.twig */
class __TwigTemplate_640a7273c3a24cb99308b3b7289db54f2e0433cdf0c935a59f974d5276734a32 extends Twig_Template
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
\t<div  style=\"width:960px;padding-top:6px;padding-bottom:6px;position:relative;margin:auto\">
\t\t<div id=\"barreuser_3\"  class=\"barreuseri\" style=\"\" >--  حساب التلميذ  --</div>
\t\t<div id=\"barreuser_2\"  class=\"barreuseri\" style=\"\" >رباطي</div>
\t\t<div id=\"barreuser_1\" class=\"barreuseri\" style=\"margin-right:75px\" > ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : null), "html", null, true);
        echo "</div>
\t\t<div id=\"img_user\" style=\"\"><img id=\"\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/user_icon.png"), "html", null, true);
        echo "\" style=\"width:100%\"/></div>
\t\t<div id=\"deconnexion\"   >تسجيل الخروج</div>
\t</div>\t
</div>



\t\t</div>       
\t\t<div id=\"corp_profil\" style=\"\"> 
\t\t";
        // line 43
        $this->displayBlock('corp', $context, $blocks);
        // line 46
        echo "\t\t</div>
\t\t<div id=\"footer\" style=\"\">
\t\t<div id=\"images_footer\">
\t\t<div id=\"innovit\" class=\"footer_image\" style=\"\">
\t\t<img id=\"logo_image\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/innovIT_logo.png"), "html", null, true);
        echo "\" style=\"width:100%\"/>
        </div>
        <div id=\"inpt\" class=\"footer_image\" style=\"\">
\t\t<img id=\"logo_image\" src=\"";
        // line 53
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
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/script_barre.js"), "html", null, true);
        echo "\" > </script>
\t\t\t\t
\t</body>
</html>";
    }

    // line 43
    public function block_corp($context, array $blocks = array())
    {
        // line 44
        echo "\t\t
\t\t";
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:profil:Layoutprofil.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 53,  134 => 51,  97 => 53,  77 => 44,  76 => 43,  127 => 76,  104 => 64,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  107 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  71 => 19,  63 => 33,  59 => 34,  94 => 55,  89 => 34,  85 => 25,  68 => 35,  56 => 25,  21 => 2,  88 => 6,  78 => 46,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  121 => 46,  117 => 44,  105 => 40,  49 => 23,  25 => 3,  69 => 33,  47 => 15,  37 => 10,  246 => 90,  157 => 56,  145 => 46,  131 => 50,  123 => 71,  120 => 40,  115 => 44,  111 => 37,  101 => 60,  98 => 31,  96 => 31,  83 => 35,  74 => 19,  66 => 15,  52 => 21,  50 => 28,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 43,  109 => 60,  106 => 36,  99 => 31,  95 => 50,  92 => 21,  86 => 28,  82 => 40,  80 => 19,  73 => 24,  64 => 34,  57 => 32,  45 => 21,  55 => 12,  51 => 14,  35 => 9,  48 => 8,  42 => 19,  30 => 7,  26 => 2,  24 => 4,  139 => 45,  136 => 56,  128 => 49,  114 => 66,  108 => 36,  102 => 32,  84 => 50,  79 => 33,  75 => 17,  70 => 37,  65 => 35,  60 => 33,  43 => 9,  61 => 26,  53 => 11,  44 => 7,  41 => 11,  39 => 7,  34 => 14,  32 => 5,  38 => 6,  27 => 3,  23 => 3,  33 => 6,  22 => 2,  19 => 1,  103 => 57,  100 => 59,  93 => 54,  91 => 27,  87 => 25,  81 => 47,  72 => 31,  67 => 15,  62 => 13,  58 => 31,  54 => 11,  46 => 8,  40 => 8,  36 => 6,  29 => 4,  20 => 1,  31 => 7,  28 => 7,);
    }
}
