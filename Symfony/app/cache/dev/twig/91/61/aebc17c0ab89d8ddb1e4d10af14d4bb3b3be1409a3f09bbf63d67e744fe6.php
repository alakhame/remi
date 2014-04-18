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
        return array (  134 => 51,  131 => 50,  123 => 71,  109 => 60,  103 => 57,  97 => 53,  95 => 50,  82 => 40,  77 => 38,  73 => 37,  68 => 35,  63 => 33,  58 => 31,  45 => 21,  20 => 1,  69 => 33,  39 => 6,  34 => 4,  31 => 3,  28 => 7,);
    }
}
