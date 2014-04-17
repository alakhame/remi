<?php

/* InnovitProfilBundle:profil:profiletudiant.html.twig */
class __TwigTemplate_95a083f4d01b253a9b91b6193a300f03517906997dc92fac06ff23f54cff76d3 extends Twig_Template
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
\t\t<script>
\t\t\tvar lk='http://127.0.0.1/remi/Symfony/web/app_dev.php/profil/special/';
\t\t</script>

\t\t
\t\t\t\t\t\t\t
\t\t<div id=\"div_globale\">\t
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
\t\t</div>\t
\t\t
\t\t
\t\t<div id=\"div_gauche_liste\" class=\"\" style=\"\">
\t\t
\t\t
\t\t
        <div id=\"div_gauche_liste_profil\" class=\"\" style=\"\">
\t\t<div class=\"div_gauche_liste_profil_titre\" style=\"\">القائمة</div>
\t\t";
        // line 37
        $context["i"] = 0;
        // line 38
        echo "\t\t";
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_articles_);
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 39
            echo "\t\t";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $context["i"] = ($_i_ + 1);
            // line 40
            echo "\t\t\t<div id=\"case_liste_";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"case\" style=\"\" onclick=\"javascript:aff(";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, ($_i_ - 1), "html", null, true);
            echo ")\">        
\t\t\t\t\t<div id=\"trai_";
            // line 41
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"trai\" style=\"\"></div>
\t\t\t\t\t<div id=\"informer";
            // line 42
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"informer\">";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "
\t \t\t        </div>
\t\t\t\t\t<div id=\"titre_liste";
            // line 44
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"titre_liste_etudiant\">";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $_article_, "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t<img id=\"icone_";
            // line 47
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" src=\"";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("images/png/32px/Shape" . $_i_) . ".png")), "html", null, true);
            echo "\" class=\"icone\"/>
\t\t    </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t
\t\t</div>
\t\t
\t\t<div id=\"div_gauche_liste_parametres\" class=\"\" style=\"\">
\t\t<div class=\"div_gauche_liste_profil_titre\" style=\"\">إعدادات</div>
\t\t\t
\t\t
\t\t
\t\t\t<div id=\"case_liste_8\" class=\"case\" style=\"\" onclick=\"javascript:aff(7)\"> 
\t\t\t\t\t<div id=\"trai_8\" class=\"trai\" style=\"\"></div>
\t\t\t\t\t<img id=\"icone_8\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/paramts.png"), "html", null, true);
        echo "\" class=\"icone\"/>
\t\t\t\t\t<div id=\"titre_liste8\" class=\"titre_liste_etudiant\">تعديل المعلومات
\t\t\t\t\t</div>\t
\t\t\t\t\t<div id=\"informer8\" class=\"informer\"></div>
\t\t    </div>
\t\t\t
\t\t\t<div id=\"case_liste_9\" class=\"case\" style=\"\" onclick=\"javascript:aff(8)\"> 
\t\t\t\t\t<div id=\"trai_9\" class=\"trai\" style=\"\"></div>
\t\t\t\t\t<img id=\"icone_9\" class=\"icone\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/notif.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t<div id=\"titre_liste9\" class=\"titre_liste_etudiant\">معلوماتي
\t\t\t\t\t</div>\t
\t\t\t\t\t<div id=\"informer9\" class=\"informer\"></div>
\t\t    </div>
\t\t\t
\t\t\t
\t\t\t<div id=\"case_liste_10\" class=\"case\" style=\"\" onclick=\"javascript:aff(1)\"> 
\t\t\t\t\t<div id=\"trai_10\" class=\"trai\" style=\"\"></div>
\t\t\t\t\t<img id=\"icone_10\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/desac.png"), "html", null, true);
        echo "\" class=\"icone\"/>
\t\t\t\t\t<div id=\"titre_liste10\" class=\"titre_liste_etudiant\">حذف الحساب
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"informer10\" class=\"informer\"></div>
\t\t    </div>
\t
\t\t
\t\t</div>
\t\t</div>
\t  \t 

\t<script>
\t\tvar nom_page=new Array(\"evolution\",\"test\",\"test_rev\",\"demande_rejoint\",\"cours_matieres\",\"mesprofs\",\"messages\",\"paramets\",\"\",\"\",\"information\");\t\t\t
\t\t\$(function() {
\t\t\t\$( \"#div_droite_load\" ).load(lk+nom_page[0]+\".html.twig\" );
\t\t});\t\t\t\t\t
\t\tfunction aff(n){
\t\t\t\$(function() {
\t\t\t\t\$( \"#div_droite_load\" ).load( lk+nom_page[n]+\".html.twig\" );
\t\t\t});
\t\t}
\t</script>
\t<script  src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/script_liste_etudiant.js"), "html", null, true);
        echo "\" ></script>\t

\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:profil:profiletudiant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 99,  162 => 77,  150 => 68,  139 => 60,  127 => 50,  114 => 47,  104 => 44,  95 => 42,  90 => 41,  81 => 40,  77 => 39,  71 => 38,  69 => 37,  31 => 3,  28 => 2,);
    }
}
