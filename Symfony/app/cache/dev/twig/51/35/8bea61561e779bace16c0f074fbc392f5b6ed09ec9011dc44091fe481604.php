<?php

/* InnovitProfilBundle:profil:Layoutprofil.php.twig */
class __TwigTemplate_51358bea61561e779bace16c0f074fbc392f5b6ed09ec9011dc44091fe481604 extends Twig_Template
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
        return "InnovitProfilBundle:profil:Layoutprofil.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 60,  95 => 40,  103 => 63,  23 => 3,  156 => 75,  128 => 82,  64 => 31,  20 => 1,  94 => 54,  83 => 49,  61 => 28,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 85,  131 => 95,  122 => 78,  108 => 31,  102 => 60,  92 => 25,  84 => 21,  48 => 21,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  76 => 4,  71 => 17,  55 => 15,  114 => 43,  109 => 31,  106 => 20,  85 => 35,  77 => 45,  28 => 7,  39 => 15,  89 => 52,  65 => 35,  63 => 33,  58 => 23,  34 => 14,  26 => 2,  98 => 41,  88 => 55,  46 => 17,  36 => 15,  43 => 16,  50 => 28,  38 => 9,  27 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  130 => 42,  100 => 27,  78 => 44,  75 => 42,  53 => 21,  24 => 4,  25 => 3,  19 => 1,  79 => 33,  74 => 32,  72 => 15,  69 => 33,  60 => 30,  47 => 17,  40 => 6,  22 => 2,  267 => 32,  185 => 58,  182 => 57,  177 => 56,  165 => 46,  159 => 76,  148 => 96,  133 => 43,  125 => 39,  120 => 75,  117 => 36,  110 => 20,  105 => 31,  101 => 59,  87 => 35,  80 => 31,  67 => 30,  57 => 32,  54 => 14,  51 => 20,  44 => 19,  42 => 16,  35 => 4,  32 => 3,  29 => 2,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 127,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 41,  129 => 36,  124 => 35,  121 => 73,  118 => 36,  115 => 39,  111 => 42,  107 => 62,  104 => 42,  97 => 24,  93 => 18,  90 => 39,  81 => 42,  70 => 28,  66 => 13,  62 => 11,  59 => 34,  56 => 25,  52 => 23,  49 => 9,  45 => 6,  41 => 15,  37 => 7,  33 => 7,  30 => 3,);
    }
}
