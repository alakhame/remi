<?php

/* InnovitProfilBundle:profil:profiletudiant.html.twig */
class __TwigTemplate_becc46169870293dd2b36535732e4be5926ebb930aa2a8de5bd712ec95f55473 extends Twig_Template
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
\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t<img id=\"icone_";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("images/png/32px/Shape" . (isset($context["i"]) ? $context["i"] : null)) . ".png")), "html", null, true);
            echo "\" class=\"icone\"/>
\t\t    </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
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
        // line 57
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
        // line 65
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
        // line 74
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
\tvar nom_page=new Array(\"evolution\",\"test\",\"test_rev\",\"demande_rejoint\",\"cours_matieres\",\"mesprofs\",\"messages\",\"paramets\",\"information\",\"\");\t\t
    \$(function() {\t\$( \"#div_droite_load\" ).load(\"http://localhost/Symfony/web/app_dev.php/profil/special/\"+nom_page[0]+\".html.twig\" );});

\tfunction affinfo(){\$(function() {\$( \"#div_droite_load\" ).load(\"http://localhost/Symfony/web/app_dev.php/profil/special/paramets.html.twig\" );});}
\t
\tfunction aff(n){\$(function() {\$( \"#div_droite_load\" ).load(\"http://localhost/Symfony/web/app_dev.php/profil/special/\"+nom_page[n]+\".html.twig\" );});}
\t</script>
\t<script  src=\"";
        // line 93
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
        return array (  113 => 47,  216 => 123,  170 => 93,  153 => 92,  129 => 73,  114 => 43,  34 => 14,  77 => 46,  65 => 35,  100 => 59,  53 => 18,  23 => 3,  148 => 74,  134 => 85,  90 => 48,  20 => 1,  76 => 37,  81 => 42,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 98,  169 => 60,  140 => 55,  132 => 51,  128 => 82,  107 => 62,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 93,  143 => 56,  135 => 53,  119 => 42,  102 => 44,  71 => 45,  67 => 30,  63 => 33,  59 => 34,  38 => 9,  94 => 41,  89 => 52,  85 => 39,  75 => 42,  68 => 35,  56 => 23,  87 => 39,  21 => 2,  26 => 2,  93 => 54,  88 => 49,  78 => 33,  46 => 19,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 101,  171 => 61,  166 => 127,  163 => 62,  158 => 67,  156 => 75,  151 => 63,  142 => 84,  138 => 54,  136 => 65,  121 => 73,  117 => 60,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 5,  72 => 31,  69 => 33,  47 => 17,  40 => 18,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 95,  123 => 47,  120 => 75,  115 => 43,  111 => 42,  108 => 36,  101 => 60,  98 => 31,  96 => 44,  83 => 38,  74 => 32,  66 => 34,  55 => 32,  52 => 21,  50 => 20,  43 => 16,  41 => 15,  35 => 4,  32 => 3,  29 => 2,  209 => 118,  203 => 78,  199 => 67,  193 => 73,  189 => 104,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 95,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 57,  122 => 78,  116 => 41,  112 => 42,  109 => 59,  106 => 36,  103 => 49,  99 => 31,  95 => 51,  92 => 21,  86 => 28,  82 => 48,  80 => 38,  73 => 36,  64 => 31,  60 => 20,  57 => 32,  54 => 25,  51 => 21,  48 => 21,  45 => 17,  42 => 15,  39 => 15,  36 => 14,  33 => 13,  30 => 7,);
    }
}
