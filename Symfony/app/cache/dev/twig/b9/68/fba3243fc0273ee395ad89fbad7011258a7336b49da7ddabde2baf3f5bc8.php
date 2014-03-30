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
        return array (  158 => 78,  155 => 77,  147 => 98,  133 => 87,  127 => 84,  121 => 80,  119 => 77,  89 => 50,  73 => 37,  68 => 35,  63 => 33,  58 => 31,  41 => 17,  28 => 7,  20 => 1,);
    }
}
