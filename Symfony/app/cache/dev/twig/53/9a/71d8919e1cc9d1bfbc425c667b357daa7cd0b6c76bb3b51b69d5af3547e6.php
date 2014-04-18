<?php

/* InnovitProfilBundle:profil:profilprof.html.twig */
class __TwigTemplate_539a71d8919e1cc9d1bfbc425c667b357daa7cd0b6c76bb3b51b69d5af3547e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("InnovitProfilBundle:Profil:Layoutprofil.php.twig");

        $this->blocks = array(
            'corp' => array($this, 'block_corp'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "InnovitProfilBundle:Profil:Layoutprofil.php.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_corp($context, array $blocks = array())
    {
        // line 3
        echo "\t\t<script  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.js"), "html", null, true);
        echo "\" > </script>
\t\t

\t\t
\t\t\t\t\t\t\t
\t\t<div id=\"div_globale\">\t
\t\t
\t\t
\t\t<div id=\"div_droite\" class=\"\" style=\"\">\t
\t\t
\t\t<div id=\"\" class=\"rubrique\" style=\"\">
\t\t<div id=\"\" class=\"petit-tri\" style=\"\"></div>
\t\t<div id=\"\" class=\"rubrique_case\" style=\"\">
\t\tصفحة
\t\t</div>

\t\t<div id=\"\" class=\"rubrique_temp\" style=\"\">
\t\t15/06/2014 16:24
\t\t</div>
\t\t</div>\t
\t\t
\t\t<div id=\"div_droite_load\" class=\"\" style=\"\">\t
        </div>\t\t
\t\t</div>\t\t
\t\t
\t\t
\t
\t\t<div id=\"div_gauche_liste\" class=\"\" style=\"\">

        <div id=\"div_gauche_liste_profil\" class=\"\" style=\"\">
\t\t<div class=\"div_gauche_liste_profil_titre\" style=\"\">القائمة</div>
\t\t";
        // line 34
        $context["i"] = 0;
        // line 35
        echo "\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 36
            echo "\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 37
            echo "\t\t\t<div id=\"case_liste_";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"case\" style=\"\" onclick=\"javascript:aff(";
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : null) - 1), "html", null, true);
            echo ")\">        
\t\t\t\t\t<div id=\"trai_";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"trai\" style=\"\"></div>
\t\t\t\t\t<div id=\"informer";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"informer\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "
\t \t\t        </div>
\t\t\t\t\t<div id=\"titre_liste";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"titre_liste_etudiant\">";
            echo twig_escape_filter($this->env, (isset($context["article"]) ? $context["article"] : null), "html", null, true);
            echo "
\t\t\t\t\t</div>\t
\t\t\t\t\t<img id=\"icone_";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("images/png/32px/Shape0" . (isset($context["i"]) ? $context["i"] : null)) . ".png")), "html", null, true);
            echo "\" class=\"icone\"/>
\t\t    </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t
\t\t</div>
\t\t
\t\t<div id=\"div_gauche_liste_parametres\" class=\"\" style=\"\">
\t\t<div class=\"div_gauche_liste_profil_titre\" style=\"\">إعدادات</div>
\t\t\t
\t\t
\t\t
\t\t\t<div id=\"case_liste_5\" class=\"case\" style=\"\" onclick=\"javascript:aff(4)\"> 
\t\t\t\t\t<div id=\"trai_5\" class=\"trai\" style=\"\"></div>\t\t\t\t
\t\t\t\t\t<img id=\"icone_5\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/paramts.png"), "html", null, true);
        echo "\" class=\"icone\"/>
\t\t\t\t\t<div id=\"informer5\" class=\"informer\"></div>
\t\t\t\t\t<div id=\"titre_liste5\" class=\"titre_liste_etudiant\">تعديل المعلومات
\t\t\t\t\t</div>\t
\t\t\t\t\t
\t\t    </div>
\t\t\t
\t\t
\t\t\t<div id=\"case_liste_6\" class=\"case\" style=\"\" onclick=\"javascript:aff(5)\"> 
\t\t\t\t\t<div id=\"trai_6\" class=\"trai\" style=\"\"></div>
\t\t\t\t\t<img id=\"icone_6\" class=\"icone\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/notif.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t<div id=\"informer6\" class=\"informer\"></div>
\t\t\t\t\t<div id=\"titre_liste6\" class=\"titre_liste_etudiant\">معلوماتي
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t    </div>
\t\t\t
\t\t\t\t<div id=\"case_liste_7\" class=\"case\" style=\"\" onclick=\"javascript:aff(6)\"> 
\t\t\t\t\t<div id=\"trai_7\" class=\"trai\" style=\"\"></div>
\t\t\t\t\t<img id=\"icone_7\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/desac.png"), "html", null, true);
        echo "\" class=\"icone\"/>
\t\t\t\t\t<div id=\"informer7\" class=\"informer\"></div>
\t\t\t\t\t<div id=\"titre_liste7\" class=\"titre_liste_etudiant\">حذف الحساب
\t\t\t\t\t</div>
\t\t\t\t
\t\t    </div>
\t
\t\t
\t\t</div>
\t\t</div>
\t    

\t<script>
\tvar lki='http://127.0.0.1/remi/Symfony/web/app_dev.php/profil/special/';
\tvar nom_page_prof=new Array(\"test_prof\",\"mesetudiants\",\"demande_ajout\",\"messages\",\"paramets\",\"information\",\"\",\"\",\"\",\"\");\t\t
    \$(function() {\t\$( \"#div_droite_load\" ).load(lki+nom_page_prof[0]+\".html.twig\" );});\t\t\t
\tfunction affinfo(){\$(function() {\$( \"#div_droite_load\" ).load(lki+\"paramets.html.twig\" );});}\t
\tfunction aff(n){\$(function() {\$( \"#div_droite_load\" ).load(lki+nom_page_prof[n]+\".html.twig\" );});}
\t</script>
\t<script  src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/script_liste_prof.js"), "html", null, true);
        echo "\" ></script>\t

\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:profil:profilprof.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 94,  149 => 75,  137 => 66,  124 => 56,  112 => 46,  101 => 43,  94 => 41,  87 => 39,  83 => 38,  76 => 37,  73 => 36,  68 => 35,  66 => 34,  31 => 3,  28 => 2,);
    }
}
