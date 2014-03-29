<?php

/* InnovitProfilBundle:Profil:Layoutprofil.php.twig */
class __TwigTemplate_f8d8fef39cc6ade8b49675448d32044aa05577a7e1b16178d36ed4fd27b0f0dd extends Twig_Template
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
\t\t\t\t  <img id=\"\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/back1.png"), "html", null, true);
        echo "\" style=\"width:100%;height:100%\"/>
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
\t\t<div id=\"barreuser_2\"  class=\"barreuseri\" style=\"\" >رباطي</div>
\t\t<div id=\"barreuser_1\" class=\"barreuseri\" style=\"margin-right:75px\" > كريم</div>
\t\t<div id=\"img_user\" style=\"\"><img id=\"\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/user_icon.png"), "html", null, true);
        echo "\" style=\"width:100%\"/></div>
\t\t<div id=\"deconnexion\" style=\"\"  >تسجيل الخروج</div>
\t</div>\t
</div>



\t\t</div>       
\t\t<div id=\"corp\" style=\"\"> 
\t\t";
        // line 42
        $this->displayBlock('corp', $context, $blocks);
        // line 45
        echo "\t\t</div>
\t\t<div id=\"footer\" style=\"\">
\t\t<div id=\"images_footer\">
\t\t<div id=\"innovit\" class=\"footer_image\" style=\"\">
\t\t<img id=\"logo_image\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/innovIT_logo.png"), "html", null, true);
        echo "\" style=\"width:100%\"/>
        </div>
        <div id=\"inpt\" class=\"footer_image\" style=\"\">
\t\t<img id=\"logo_image\" src=\"";
        // line 52
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
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/script_accueil.js"), "html", null, true);
        echo "\" > </script>
\t\t\t\t
\t</body>
</html>";
    }

    // line 42
    public function block_corp($context, array $blocks = array())
    {
        // line 43
        echo "\t\t
\t\t";
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:Profil:Layoutprofil.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 47,  216 => 123,  170 => 93,  153 => 92,  129 => 73,  114 => 43,  34 => 14,  77 => 45,  65 => 35,  76 => 37,  100 => 59,  53 => 18,  23 => 3,  148 => 74,  134 => 85,  90 => 48,  20 => 1,  81 => 42,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 98,  169 => 60,  140 => 55,  132 => 51,  128 => 82,  107 => 62,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 93,  143 => 56,  135 => 53,  119 => 42,  102 => 44,  71 => 45,  67 => 30,  63 => 33,  59 => 34,  38 => 9,  94 => 41,  89 => 52,  85 => 39,  75 => 42,  68 => 35,  56 => 23,  87 => 39,  21 => 2,  26 => 2,  93 => 54,  88 => 49,  78 => 33,  46 => 19,  27 => 4,  44 => 12,  31 => 3,  28 => 7,  201 => 92,  196 => 90,  183 => 101,  171 => 61,  166 => 127,  163 => 62,  158 => 67,  156 => 75,  151 => 63,  142 => 84,  138 => 54,  136 => 65,  121 => 73,  117 => 60,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 4,  72 => 31,  69 => 33,  47 => 17,  40 => 18,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 95,  123 => 47,  120 => 75,  115 => 43,  111 => 42,  108 => 36,  101 => 60,  98 => 31,  96 => 44,  83 => 49,  74 => 32,  66 => 34,  55 => 32,  52 => 21,  50 => 20,  43 => 16,  41 => 15,  35 => 4,  32 => 3,  29 => 2,  209 => 118,  203 => 78,  199 => 67,  193 => 73,  189 => 104,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 95,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 57,  122 => 78,  116 => 41,  112 => 42,  109 => 59,  106 => 36,  103 => 63,  99 => 31,  95 => 51,  92 => 21,  86 => 28,  82 => 48,  80 => 38,  73 => 36,  64 => 31,  60 => 20,  57 => 32,  54 => 25,  51 => 21,  48 => 21,  45 => 17,  42 => 15,  39 => 15,  36 => 14,  33 => 13,  30 => 7,);
    }
}
