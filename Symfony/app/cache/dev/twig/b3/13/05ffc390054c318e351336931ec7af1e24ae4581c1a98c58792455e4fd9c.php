<?php

/* InnovitProfilBundle:profil:demande_rejoint.html.twig */
class __TwigTemplate_b31305ffc390054c318e351336931ec7af1e24ae4581c1a98c58792455e4fd9c extends Twig_Template
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
الإلتحاق بأستاذ
</div>
\t\t
\t\t<div id=\"conseils_prof\" class=\"\" style=\"\">

\t\t<div class=\"\" id=\"consls_prof\" style=\"margin-top:40px\">
\t\t
\t\t\t<div class=\"dem-rej\" class=\"\" style=\"\">
\t\t
\t\t
\t\t<div class=\"details_demande_dajout\">
\t\t<div id=\"btn_dem-rej\" style=\"\">
\t\t<input  style=\"\" value=\"أرسل\"  placeholder=\"أرسل \" style=\"\" type=\"submit\" ></input>
\t\t</div>
\t\t
\t\t<div class=\"dem-rej_inputg\" style=\"width:450px;margin-right:8px\">
\t\t<input class=\"dem-rej_input\" style=\"\"  placeholder=\"أرسل طلب الإلتحاق بأستاذ\" type=\"text\" ></input></br> 
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
\t\t
\t\t
\t\t\t";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t
\t<div id=\"consl_prof";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"\" style=\"\">
\t\t<div class=\"entete_demande_dajout\" style=\"\">
\t\t\t
\t\t\t<div class=\"details_demande_dajout\">
\t\t\t\t<div class=\"nom_demande_dajout\" style=\"color:red\">سعيد التال</div>
\t\t\t\t<div class=\"bar-percentage_pr\">السادس إبتدائي</div>
\t\t\t\t
\t\t\t\t<div class=\"\" title=\"\" style=\"\">مجموعة مدارس يحيى الكدالي</div>
\t\t\t</div>
\t\t\t<div class=\"image_demande\" style=\"\"><img id=\"\" src=\"";
            // line 44
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
        // line 55
        echo "\t\t\t
\t\t</div>
\t
\t</div>
\t
<script  src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/script_mesetudiant.js"), "html", null, true);
        echo "\" > </script>";
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:profil:demande_rejoint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 35,  76 => 43,  53 => 11,  134 => 51,  97 => 53,  77 => 44,  226 => 179,  222 => 178,  218 => 177,  211 => 173,  207 => 172,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 233,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  63 => 33,  59 => 34,  94 => 55,  89 => 34,  85 => 25,  75 => 46,  68 => 14,  56 => 9,  21 => 2,  88 => 6,  78 => 21,  44 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  49 => 19,  25 => 3,  79 => 19,  69 => 25,  47 => 15,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 50,  123 => 71,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 60,  98 => 31,  96 => 31,  83 => 35,  74 => 14,  66 => 15,  52 => 9,  209 => 82,  203 => 171,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 60,  106 => 36,  99 => 31,  95 => 50,  92 => 21,  86 => 28,  82 => 40,  80 => 19,  73 => 24,  64 => 13,  57 => 32,  45 => 21,  60 => 31,  55 => 12,  51 => 14,  43 => 9,  35 => 9,  34 => 6,  37 => 10,  32 => 5,  48 => 8,  42 => 19,  39 => 7,  30 => 7,  26 => 2,  24 => 4,  50 => 28,  41 => 11,  38 => 6,  27 => 3,  23 => 4,  33 => 6,  22 => 2,  19 => 1,  103 => 57,  100 => 59,  93 => 54,  91 => 27,  87 => 25,  81 => 24,  72 => 15,  67 => 15,  62 => 13,  58 => 31,  54 => 17,  46 => 8,  40 => 8,  36 => 6,  29 => 4,  20 => 1,  31 => 7,  28 => 4,);
    }
}
