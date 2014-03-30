<?php

/* InnovitProfilBundle:profil:mesprofs.html.twig */
class __TwigTemplate_26d28be6bc8ed35c9211ccb0f94a7a7a282ae3919e3a19457ee3ef55b67d11de extends Twig_Template
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
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"\" style=\"\">
\t<div class=\"entete_consl_prof\" style=\"\">
\t<div id=\"afficher_consls";
            // line 17
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"btn_affich_consl_prof\" style=\"\" onclick=\"javascript:afficherlemessage_envoyer(";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo ")\">إقرأ النصائح</div>
\t<div id=\"masquer_consls";
            // line 18
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"btn_masqu_consl_prof\" style=\"\" onclick=\"javascript:masquerlemessage_envoyer(";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
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
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"contenu_consl_prof\" style=\"\">
\t<div class=\"tri_consl_prof\" style=\"\"></div>
\t
\t
\t<div class=\"text_consl_prof\"  id=\"text_consl_prof";
            // line 27
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
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
        return array (  103 => 44,  64 => 34,  95 => 55,  82 => 24,  21 => 2,  23 => 3,  119 => 77,  73 => 37,  68 => 35,  20 => 1,  94 => 54,  83 => 38,  61 => 27,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 95,  122 => 37,  108 => 31,  102 => 60,  92 => 25,  84 => 50,  48 => 17,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 98,  127 => 84,  112 => 43,  96 => 25,  76 => 43,  71 => 23,  55 => 8,  114 => 22,  109 => 31,  106 => 20,  85 => 19,  77 => 43,  28 => 7,  39 => 15,  89 => 50,  65 => 20,  63 => 33,  58 => 15,  34 => 14,  26 => 2,  98 => 40,  88 => 55,  46 => 10,  36 => 14,  43 => 7,  50 => 28,  38 => 6,  27 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 78,  155 => 77,  152 => 55,  142 => 52,  136 => 44,  130 => 42,  100 => 34,  78 => 46,  75 => 24,  53 => 21,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  74 => 34,  72 => 33,  69 => 17,  60 => 30,  47 => 24,  40 => 6,  22 => 2,  267 => 32,  185 => 58,  182 => 57,  177 => 56,  165 => 46,  159 => 45,  148 => 42,  133 => 87,  125 => 39,  120 => 40,  117 => 36,  110 => 49,  105 => 31,  101 => 59,  87 => 25,  80 => 15,  67 => 30,  57 => 22,  54 => 14,  51 => 8,  44 => 8,  42 => 15,  35 => 6,  32 => 3,  29 => 4,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 127,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 41,  129 => 36,  124 => 35,  121 => 80,  118 => 36,  115 => 44,  111 => 32,  107 => 62,  104 => 64,  97 => 24,  93 => 18,  90 => 43,  81 => 42,  70 => 23,  66 => 13,  62 => 11,  59 => 34,  56 => 18,  52 => 21,  49 => 9,  45 => 6,  41 => 15,  37 => 7,  33 => 7,  30 => 5,);
    }
}
