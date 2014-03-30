<?php

/* InnovitProfilBundle:profil:cours_matieres.html.twig */
class __TwigTemplate_8123bdfffd6aeeab86e24acba8308abb3db487034845ef878816ff9f43bcc183 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'cours_matieres' => array($this, 'block_cours_matieres'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('cours_matieres', $context, $blocks);
    }

    public function block_cours_matieres($context, array $blocks = array())
    {
        // line 2
        echo "<div id=\"div_evolution\" class=\"\" style=\"\">

<div id=\"\" class=\"prog_chaque_matrs\" style=\"\">
إعدادات الدروس
</div>
<div>
 

<div id=\"cours\">
\t<div id=\"titre_cours\" class=\"\">
    :لائحة الدروس
\t</div>
\t<div id=\"espace_cours\">
";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t
\t
\t<div id=\"liste_cours\" style=\"\">
\t<div id=\"titre_cours_mat\" class=\"\" style=\"\">الجهاز التنفسي </div>
\t<div id=\"check_cours_mat\" class=\"\" style=\"\"> <input type=\"checkbox\" name=\"option1\" value=\"Milk\"> </div>
\t
\t<div class=\"signler_cours\" class=\"\" title=\"\" style=\"\"></div>
\t</div >
\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t</div>

</div>  


<div id=\"matrs\">
";
        // line 30
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("InnovitProfilBundle:Menu:matCours"));
        echo "
</div>  

</div>
\t<script  src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/mtrs_cours.js"), "html", null, true);
        echo "\" ></script>
</div>
\t
\t<script>
\t\tvar lk2=\"http://127.0.0.1/Symfony/web/app_dev.php/\";
\t</script>

\t<script>
\t\t
\t\t\tfunction charger(elt){
\t\t\t\telt++;
\t\t\t\t\$(function() {\t\$( \"#espace_cours\" ).load(lk2+\"cours/\"+elt );});\t
\t\t\t}
\t\t
\t\t/*var cours=new Array(\"evolution\",\"test\",\"test_rev\",\"demande_rejoint\",\"cours_matieres\",\"mesprofs\",\"messages\",\"paramets\",\"\",\"\",\"information\");\t\t
\t\t\$(function() {\t\$( \"#div_droite\" ).load(lk2+\"profil/special/\"+nom_page[0]+\".html.twig\" );});\t\t\t\t\t
\t\tfunction aff(n){\$(function() {\$( \"#div_droite\" ).load(lk2+\"profil/special/\"+nom_page[n]+\".html.twig\" );});} */
\t</script>



";
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:profil:cours_matieres.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  53 => 21,  23 => 3,  155 => 77,  127 => 84,  58 => 31,  20 => 1,  76 => 4,  81 => 42,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 62,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 77,  102 => 32,  71 => 19,  67 => 30,  63 => 14,  59 => 24,  38 => 6,  94 => 52,  89 => 34,  85 => 25,  75 => 17,  68 => 35,  56 => 9,  87 => 25,  21 => 2,  26 => 2,  93 => 28,  88 => 55,  78 => 21,  46 => 8,  27 => 3,  44 => 7,  31 => 3,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 127,  163 => 62,  158 => 78,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 80,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 5,  72 => 31,  69 => 25,  47 => 17,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 95,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 35,  74 => 34,  66 => 15,  55 => 15,  52 => 15,  50 => 23,  43 => 9,  41 => 15,  35 => 4,  32 => 5,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 98,  144 => 49,  141 => 48,  133 => 87,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 24,  64 => 29,  60 => 30,  57 => 11,  54 => 11,  51 => 14,  48 => 8,  45 => 17,  42 => 10,  39 => 9,  36 => 7,  33 => 6,  30 => 7,);
    }
}
