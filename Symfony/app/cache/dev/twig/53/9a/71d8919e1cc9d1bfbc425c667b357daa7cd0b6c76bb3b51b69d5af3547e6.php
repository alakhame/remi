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
        return array (  137 => 66,  124 => 56,  90 => 42,  65 => 35,  76 => 37,  53 => 18,  134 => 51,  97 => 44,  77 => 44,  226 => 179,  222 => 178,  218 => 177,  211 => 173,  207 => 172,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 233,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 60,  107 => 36,  61 => 32,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 38,  63 => 33,  59 => 29,  94 => 41,  89 => 34,  85 => 25,  75 => 46,  68 => 35,  56 => 25,  21 => 2,  88 => 6,  78 => 21,  44 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 94,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 77,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 47,  49 => 23,  25 => 3,  79 => 40,  69 => 37,  47 => 20,  246 => 90,  157 => 56,  145 => 46,  139 => 68,  131 => 50,  123 => 71,  120 => 40,  115 => 43,  111 => 37,  108 => 70,  101 => 43,  98 => 30,  96 => 44,  83 => 38,  74 => 14,  66 => 34,  52 => 9,  209 => 82,  203 => 171,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 99,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 75,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 50,  112 => 46,  109 => 60,  106 => 36,  99 => 31,  95 => 29,  92 => 21,  86 => 41,  82 => 40,  80 => 38,  73 => 36,  64 => 13,  57 => 32,  45 => 22,  60 => 20,  55 => 22,  51 => 21,  43 => 19,  35 => 9,  34 => 14,  37 => 14,  32 => 5,  48 => 8,  42 => 15,  39 => 7,  30 => 7,  26 => 6,  24 => 4,  50 => 28,  41 => 11,  38 => 6,  27 => 3,  23 => 3,  33 => 6,  22 => 2,  19 => 1,  103 => 49,  100 => 65,  93 => 54,  91 => 27,  87 => 39,  81 => 47,  72 => 15,  67 => 36,  62 => 13,  58 => 31,  54 => 17,  46 => 8,  40 => 8,  36 => 14,  29 => 4,  20 => 1,  31 => 3,  28 => 2,);
    }
}
