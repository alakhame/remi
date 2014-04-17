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
\t<body id=\"body_acc\" class=\"\" style=\"\" onscroll=\"scroll();\" >
\t 
        <div id=\"Entete_general\" style=\"\">
\t\t\t\t<div id=\"imag_back_ground\" style=\"\">
\t\t\t\t  
\t     </div> 
\t\t\t<div class=\"box \" style=\"\">
\t\t\t
\t\t\t\t <div id=\"logo_general\" style=\"\">
\t\t\t\t    <img id=\"logo_image\" src=\"";
        // line 19
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
        // line 33
        echo $this->env->getExtension('routing')->getPath("innovit_general_homepage", array("name" => "liensutiles"));
        echo "\"><div id=\"menu_4\" style=\"\" >مواقع مفيدة</div></a>
\t\t
\t<a id=\"menu_a_3\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("innovit_general_homepage", array("name" => "flashactus"));
        echo "\"><div id=\"menu_3\" style=\"\">مستجدات</div></a>
\t
\t<a id=\"menu_a_2\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("innovit_general_homepage", array("name" => "qsnous"));
        echo "\"><div id=\"menu_2\" style=\"\" >من نحن؟</div></a>
\t
\t<a id=\"menu_a_1\" href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("innovit_general_homepage", array("name" => "Accueil"));
        echo "\"><div id=\"menu_1\" style=\"\" > 
\t<div id=\"img_acc\" style=\"\" ><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/accueil_rond.png"), "html", null, true);
        echo "\" id=\"img_acc\" style=\"height:100%;\"/></div>
\tالرئسية</div></a>
\t<a id=\"\" href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("innovit_general_homepage", array("name" => "login"));
        echo "\"><div id=\"sing_in\" style=\"\" >تسجيل الدخول</div></a>
\t\t
</div>


</div>


\t
\t\t</div>       
\t\t<div id=\"corp_general\" style=\"\"> 
\t\t";
        // line 53
        $this->displayBlock('corp', $context, $blocks);
        // line 56
        echo "\t\t</div>
\t\t<div id=\"footer\" style=\"\">
\t\t<div id=\"images_footer\">
\t\t<div id=\"innovit\" class=\"footer_image\" style=\"\">
\t\t<img id=\"logo_image\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/innovIT_logo.png"), "html", null, true);
        echo "\" style=\"width:100%\"/>
        </div>
        <div id=\"inpt\" class=\"footer_image\" style=\"\">
\t\t<img id=\"logo_image\" src=\"";
        // line 63
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
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/script_accueil.js"), "html", null, true);
        echo "\" > </script>
\t\t\t\t
\t</body>
</html>";
    }

    // line 53
    public function block_corp($context, array $blocks = array())
    {
        // line 54
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
        return array (  137 => 54,  134 => 53,  126 => 74,  112 => 63,  106 => 60,  100 => 56,  98 => 53,  84 => 42,  79 => 40,  75 => 39,  70 => 37,  65 => 35,  43 => 19,  20 => 1,  89 => 5,  86 => 4,  66 => 34,  37 => 7,  35 => 4,  32 => 3,  29 => 2,  127 => 76,  114 => 66,  104 => 59,  94 => 52,  81 => 42,  74 => 39,  67 => 34,  60 => 33,  31 => 3,  28 => 7,);
    }
}
