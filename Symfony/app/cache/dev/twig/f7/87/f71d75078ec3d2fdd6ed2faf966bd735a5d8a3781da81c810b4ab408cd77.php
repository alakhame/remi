<?php

/* InnovitProfilBundle:profil:demande_ajout.html.twig */
class __TwigTemplate_f787f71d75078ec3d2fdd6ed2faf966bd735a5d8a3781da81c810b4ab408cd77 extends Twig_Template
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
طلب الإلتحاق
</div>
\t\t
\t\t<div id=\"conseils_prof\" class=\"\" style=\"\">
\t\t
\t\t
\t\t<div class=\"\" id=\"consls_prof\" style=\"margin-top:40px\">
\t\t\t<div class=\"dem-rej\" class=\"\" style=\"\">
\t\t
\t\t
\t\t<div class=\"details_demande_dajout\">
\t\t<div id=\"btn_dem-rej\" style=\"\">
\t\t<input  style=\"\" value=\"أرسل\"  placeholder=\"أرسل \" style=\"\" type=\"submit\" ></input>
\t\t</div>
\t\t
\t\t<div class=\"dem-rej_inputg\" style=\"width:450px;margin-right:8px\">
\t\t<input class=\"dem-rej_input\" style=\"\"  placeholder=\"أرسل طلب الإلتحاق لتلميذ\" type=\"text\" ></input></br> 
\t\t</div>
\t\t
\t\t
\t\t
\t\t</div>
\t\t<div class=\"image_demande\" style=\"\"><img id=\"\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/groupe.png"), "html", null, true);
        echo "\" style=\"width:100%\"/></div>
\t    </div>
\t\t
\t\t
\t\t\t";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t
\t<div id=\"consl_prof";
            // line 33
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"\" style=\"\">
\t\t<div class=\"entete_demande_dajout\" style=\"\">
\t\t\t
\t\t\t<div class=\"details_demande_dajout\">
\t\t\t\t<div class=\"nom_demande_dajout\" style=\"color:red\">سعيد التال</div>
\t\t\t\t<div class=\"bar-percentage_pr\">السادس إبتدائي</div>
\t\t\t\t
\t\t\t\t<div class=\"\" title=\"\" style=\"\">مجموعة مدارس يحيى الكدالي</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"image_demande\" style=\"\"><img id=\"\" src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/user_icon.png"), "html", null, true);
            echo "\" style=\"width:100%\"/></div>
\t\t    <div class=\"evolution_demande_dajout\">
\t\t\t\t<div class=\"Accepter_daj\">قبول الدعوة</div>
\t            <div class=\"Rejeter_daj\">رفض الدعوة</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t</div >
\t\t
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t
\t\t</div>
\t
\t</div>
\t
<script  src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/script_mesetudiant.js"), "html", null, true);
        echo "\" > </script>";
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:profil:demande_ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  21 => 2,  23 => 3,  119 => 77,  73 => 37,  68 => 35,  20 => 1,  94 => 54,  83 => 33,  61 => 11,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 95,  122 => 37,  108 => 31,  102 => 28,  92 => 25,  84 => 21,  48 => 9,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 98,  127 => 84,  112 => 32,  96 => 25,  76 => 4,  71 => 17,  55 => 8,  114 => 22,  109 => 31,  106 => 20,  85 => 19,  77 => 43,  28 => 3,  39 => 10,  89 => 50,  65 => 14,  63 => 33,  58 => 31,  34 => 5,  26 => 2,  98 => 40,  88 => 55,  46 => 12,  36 => 6,  43 => 7,  50 => 28,  38 => 6,  27 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 78,  155 => 77,  152 => 55,  142 => 52,  136 => 44,  130 => 42,  100 => 34,  78 => 40,  75 => 24,  53 => 21,  24 => 4,  25 => 3,  19 => 1,  79 => 5,  74 => 34,  72 => 14,  69 => 17,  60 => 17,  47 => 17,  40 => 6,  22 => 2,  267 => 32,  185 => 58,  182 => 57,  177 => 56,  165 => 46,  159 => 45,  148 => 42,  133 => 87,  125 => 39,  120 => 40,  117 => 36,  110 => 20,  105 => 31,  101 => 59,  87 => 25,  80 => 15,  67 => 30,  57 => 32,  54 => 14,  51 => 15,  44 => 8,  42 => 6,  35 => 6,  32 => 7,  29 => 4,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 127,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 41,  129 => 36,  124 => 35,  121 => 80,  118 => 36,  115 => 39,  111 => 32,  107 => 62,  104 => 28,  97 => 24,  93 => 18,  90 => 25,  81 => 42,  70 => 23,  66 => 13,  62 => 11,  59 => 24,  56 => 25,  52 => 23,  49 => 9,  45 => 6,  41 => 15,  37 => 7,  33 => 7,  30 => 3,);
    }
}
