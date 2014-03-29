<?php

/* InnovitProfilBundle:profil:profilprof.html.twig */
class __TwigTemplate_946b873677749ef8151f322b01db9e518a6b05bcbeaa43f710c07ff6c08403f8 extends Twig_Template
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
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_articles_);
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 36
            echo "\t\t";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $context["i"] = ($_i_ + 1);
            // line 37
            echo "\t\t\t<div id=\"case_liste_";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"case\" style=\"\" onclick=\"javascript:aff(";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, ($_i_ - 1), "html", null, true);
            echo ")\">        
\t\t\t\t\t<div id=\"trai_";
            // line 38
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"trai\" style=\"\"></div>
\t\t\t\t\t<div id=\"informer";
            // line 39
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"informer\">";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "
\t \t\t        </div>
\t\t\t\t\t<div id=\"titre_liste";
            // line 41
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"titre_liste_etudiant\">";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $_article_, "html", null, true);
            echo "
\t\t\t\t\t</div>\t
\t\t\t\t\t<img id=\"icone_";
            // line 43
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" src=\"";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("images/png/32px/Shape0" . $_i_) . ".png")), "html", null, true);
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
\tvar nom_page_prof=new Array(\"test_prof\",\"mesetudiants\",\"demande_ajout\",\"messages\",\"paramets\",\"information\",\"\",\"\",\"\",\"\");\t\t
    \$(function() {\t\$( \"#div_droite_load\" ).load(\"http://localhost/Symfony/web/app_dev.php/profil/special/\"+nom_page_prof[0]+\".html.twig\" );});\t\t\t
\tfunction affinfo(){\$(function() {\$( \"#div_droite_load\" ).load(\"http://localhost/Symfony/web/app_dev.php/profil/special/paramets.html.twig\" );});}\t
\tfunction aff(n){\$(function() {\$( \"#div_droite_load\" ).load(\"http://localhost/Symfony/web/app_dev.php/profil/special/\"+nom_page_prof[n]+\".html.twig\" );});}
\t</script>
\t<script  src=\"";
        // line 93
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
        return array (  135 => 56,  123 => 46,  68 => 35,  230 => 123,  223 => 118,  172 => 95,  91 => 49,  126 => 60,  95 => 40,  103 => 63,  23 => 3,  156 => 75,  128 => 82,  64 => 31,  20 => 1,  94 => 54,  83 => 49,  61 => 28,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 85,  131 => 95,  122 => 78,  108 => 31,  102 => 60,  92 => 39,  84 => 21,  48 => 21,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 65,  127 => 41,  112 => 32,  96 => 25,  76 => 4,  71 => 45,  55 => 32,  114 => 43,  109 => 31,  106 => 20,  85 => 35,  77 => 45,  28 => 2,  39 => 15,  89 => 52,  65 => 20,  63 => 33,  58 => 23,  34 => 14,  26 => 2,  98 => 41,  88 => 55,  46 => 17,  36 => 14,  43 => 16,  50 => 28,  38 => 9,  27 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 101,  192 => 72,  189 => 98,  186 => 60,  181 => 93,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 57,  130 => 42,  100 => 51,  78 => 37,  75 => 42,  53 => 21,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  74 => 36,  72 => 33,  69 => 33,  60 => 30,  47 => 17,  40 => 6,  22 => 2,  267 => 32,  185 => 58,  182 => 57,  177 => 56,  165 => 46,  159 => 74,  148 => 66,  133 => 43,  125 => 39,  120 => 75,  117 => 36,  110 => 43,  105 => 31,  101 => 41,  87 => 38,  80 => 31,  67 => 30,  57 => 22,  54 => 14,  51 => 20,  44 => 19,  42 => 15,  35 => 4,  32 => 3,  29 => 2,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 104,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 96,  171 => 54,  166 => 93,  163 => 50,  160 => 75,  157 => 48,  149 => 84,  146 => 41,  140 => 46,  137 => 41,  129 => 36,  124 => 47,  121 => 73,  118 => 36,  115 => 59,  111 => 42,  107 => 55,  104 => 42,  97 => 24,  93 => 18,  90 => 43,  81 => 42,  70 => 28,  66 => 34,  62 => 11,  59 => 34,  56 => 18,  52 => 21,  49 => 9,  45 => 6,  41 => 15,  37 => 7,  33 => 13,  30 => 3,);
    }
}
