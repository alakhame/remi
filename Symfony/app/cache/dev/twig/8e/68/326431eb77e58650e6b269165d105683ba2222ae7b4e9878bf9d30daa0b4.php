<?php

/* InnovitProfilBundle:enseignant:mesProfs.html.twig */
class __TwigTemplate_8e68326431eb77e58650e6b269165d105683ba2222ae7b4e9878bf9d30daa0b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["i"] = 0;
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profs"]) ? $context["profs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo "\t
\t<div id=\"consl_prof";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"\" style=\"\">
\t<div class=\"entete_consl_prof\" style=\"\">
\t<div class=\"image_consl_prof\" style=\"\"><img id=\"\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/user_icon.png"), "html", null, true);
            echo "\" style=\"width:100%\"/></div>
\t<div class=\"nom_consl_prof\" style=\"\">De: ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "nom"), "html", null, true);
            echo "</div>
\t<div id=\"afficher_consls";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"btn_affich_consl_prof\" style=\"\" onclick=\"javascript:afficherlemessage_envoyer(";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ")\">lire les conseils</div>
\t<div id=\"masquer_consls";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"btn_masqu_consl_prof\" style=\"\" onclick=\"javascript:masquerlemessage_envoyer(";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ")\">masquer</div>
\t<div class=\"effacer_ce_message\" title=\"Effacer ce message\" style=\"\">Effacer</div>
\t</div >
\t<div id=\"contenu_consl_prof";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"contenu_consl_prof\" style=\"\">
\t<div class=\"tri_consl_prof\" style=\"\"></div>
\t<div class=\"text_consl_prof\"  id=\"text_consl_prof";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"  style=\"\">
\t<span>conseils</span><br>
\tsdfgsdfhsgh
    shshfdhhhhhhhhhhhhhhhhhhhshgddf jh khkh jkh k h lk hk hk h k hk hk jh kjhk h kjh khkjhk hlkjhlkhk jh kjh lkh l h ljkh
\tsdfgsdfhsgh
    shshfdhhhhhhhhhhhhhhhhhhhshgddf jh khkh jkh k h lk hk hk h k hk hk jh kjhk h kjh khkjhk hlkjhlkhk jh kjh lkh l h ljkh
\tsdfgsdfhsgh
    shshfdhhhhhhhhhhhhhhhhhhhshgddf jh khkh jkh k h lk hk hk h k hk hk jh kjhk h kjh khkjhk hlkjhlkhk jh kjh lkh l h ljkh
\tsdfgsdfhsgh
    shshfdhhhhhhhhhhhhhhhhhhhshgddf jh khkh jkh k h lk hk hk h k hk hk jh kjhk h kjh khkjhk hlkjhlkhk jh kjh lkh l h ljkh
\t</div>
\t<div class=\"ligne_separation\" id=\"ligne_separation";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"></div>
\t<div class=\"pcs_jnts_consl_prof\"  id=\"text_consl_prof";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"  style=\"\">
\t<span>pièces jointes</span><br>
\t</div>
\t
\t
\t
\t
\t</div>
\t</div>
\t";
            // line 34
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:enseignant:mesProfs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 21,  137 => 54,  134 => 53,  126 => 74,  84 => 42,  70 => 37,  65 => 35,  77 => 25,  127 => 76,  114 => 66,  104 => 59,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 39,  71 => 19,  63 => 15,  59 => 13,  94 => 60,  89 => 34,  85 => 25,  75 => 39,  68 => 42,  56 => 26,  21 => 2,  88 => 55,  78 => 21,  44 => 12,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 127,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  49 => 19,  25 => 3,  79 => 40,  69 => 25,  47 => 17,  37 => 7,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 95,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 53,  96 => 31,  83 => 35,  74 => 46,  66 => 39,  52 => 21,  32 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 63,  109 => 34,  106 => 60,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 49,  73 => 24,  64 => 29,  57 => 11,  45 => 21,  60 => 33,  55 => 15,  51 => 14,  43 => 19,  35 => 4,  34 => 7,  48 => 13,  42 => 19,  39 => 9,  30 => 7,  26 => 6,  24 => 4,  50 => 23,  41 => 7,  38 => 9,  27 => 3,  23 => 3,  33 => 7,  22 => 2,  19 => 1,  103 => 32,  100 => 56,  93 => 28,  91 => 27,  87 => 25,  81 => 42,  72 => 31,  67 => 34,  62 => 23,  58 => 18,  54 => 11,  46 => 8,  40 => 7,  36 => 6,  29 => 2,  20 => 1,  31 => 3,  28 => 2,);
    }
}