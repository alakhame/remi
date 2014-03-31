<?php

/* InnovitProfilBundle:profil:mesprofs.html.twig */
class __TwigTemplate_b6d7285e9184ca55a50eb3d712c0667868d6d226273cc72b2df6733a8a280ccb extends Twig_Template
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
        echo "<script  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/script_messages.js"), "html", null, true);
        echo "\" > </script>
\t
\t
\t<div id=\"div_messages\" class=\"\" style=\"\">
\t<div class=\"prog_chaque_matrs\" id=\"\" style=\"\">
أساتذتي
</div>

\t\t<div id=\"conseils_prof\" class=\"\" style=\"\">
\t\t<div class=\"\" id=\"Conseils_prof_titre\" style=\"\">
\t\t\t:نصائح أساتذتي
\t\t</div>\t
\t\t<div class=\"\" id=\"consls_prof\" style=\"\">
\t\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t
\t<div id=\"consl_prof";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"\" style=\"\">
\t<div class=\"entete_consl_prof\" style=\"\">
\t<div id=\"afficher_consls";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"btn_affich_consl_prof\" style=\"\" onclick=\"javascript:afficherlemessage_envoyer(";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ")\">إقرأ النصائح</div>
\t<div id=\"masquer_consls";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"btn_masqu_consl_prof\" style=\"\" onclick=\"javascript:masquerlemessage_envoyer(";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ")\">إخفاء</div>
\t<div class=\"nom_consl_prof\" style=\"\">محمد الفلااغ</div>
\t<div class=\"image_consl_prof\" style=\"\"><img id=\"\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/user_icon.png"), "html", null, true);
            echo "\" style=\"width:100%\"/></div>
\t<div class=\"effacer_ce_message\" title=\"Effacer ce message\" style=\"\">مسح</div>
\t</div >
\t<div id=\"contenu_consl_prof";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"contenu_consl_prof\" style=\"\">
\t<div class=\"tri_consl_prof\" style=\"\"></div>
\t
\t
\t<div class=\"text_consl_prof\"  id=\"text_consl_prof";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"  style=\"\">
\t<span>النصائح</span><br>
\tsdfgsdfhsgh
    shshfdhhhhhhhhhhhhhhhhhhhshgddf jh khkh jkh k h lk hk hk h k hk hk jh kjhk h kjh khkjhk hlkjhlkhk jh kjh lkh l h ljkh
\tsdfgsdfhsgh
    shshfdhhhhhhhhhhhhhhhhhhhshgddf jh khkh jkh k h lk hk hk h k hk hk jh kjhk h kjh khkjhk hlkjhlkhk jh kjh lkh l h ljkh
\tsdfgsdfhsgh
    shshfdhhhhhhhhhhhhhhhhhhhshgddf jh khkh jkh k h lk hk hk h k hk hk jh kjhk h kjh khkjhk hlkjhlkhk jh kjh lkh l h ljkh
\tsdfgsdfhsgh
    shshfdhhhhhhhhhhhhhhhhhhhshgddf jh khkh jkh k h lk hk hk h k hk hk jh kjhk h kjh khkjhk hlkjhlkhk jh kjh lkh l h ljkh
\t</div>
\t
\t
\t
\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t
\t\t</div>
\t
\t</div>
\t
<script  src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/script_consls_prof.js"), "html", null, true);
        echo "\" > </script>";
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:profil:mesprofs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 64,  90 => 53,  84 => 50,  34 => 14,  65 => 35,  100 => 59,  77 => 44,  53 => 18,  23 => 3,  155 => 77,  127 => 84,  58 => 31,  20 => 1,  76 => 43,  81 => 47,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 62,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 77,  102 => 32,  71 => 19,  67 => 15,  63 => 33,  59 => 34,  38 => 6,  94 => 55,  89 => 34,  85 => 25,  75 => 17,  68 => 35,  56 => 25,  87 => 43,  21 => 2,  26 => 2,  93 => 54,  88 => 55,  78 => 46,  46 => 8,  27 => 3,  44 => 7,  31 => 7,  28 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 127,  163 => 62,  158 => 78,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 80,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 23,  24 => 4,  25 => 3,  19 => 1,  79 => 5,  72 => 31,  69 => 33,  47 => 17,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 95,  123 => 47,  120 => 40,  115 => 44,  111 => 37,  108 => 36,  101 => 60,  98 => 31,  96 => 44,  83 => 35,  74 => 19,  66 => 23,  55 => 22,  52 => 21,  50 => 28,  43 => 9,  41 => 11,  35 => 9,  32 => 5,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 98,  144 => 49,  141 => 48,  133 => 87,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 43,  109 => 34,  106 => 36,  103 => 49,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 38,  73 => 27,  64 => 34,  60 => 20,  57 => 32,  54 => 11,  51 => 21,  48 => 21,  45 => 22,  42 => 15,  39 => 15,  36 => 14,  33 => 6,  30 => 7,);
    }
}
