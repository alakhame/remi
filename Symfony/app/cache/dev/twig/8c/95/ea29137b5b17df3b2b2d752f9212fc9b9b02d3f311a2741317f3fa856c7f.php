<?php

/* InnovitProfilBundle:profil:demande_ajout.html.twig */
class __TwigTemplate_8c95ea29137b5b17df3b2b2d752f9212fc9b9b02d3f311a2741317f3fa856c7f extends Twig_Template
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
        return array (  76 => 43,  100 => 59,  53 => 21,  23 => 3,  148 => 96,  134 => 85,  90 => 48,  20 => 1,  81 => 42,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 82,  107 => 62,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 76,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 30,  63 => 33,  59 => 24,  38 => 9,  94 => 52,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 2,  93 => 54,  88 => 55,  78 => 33,  46 => 19,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 127,  163 => 62,  158 => 67,  156 => 75,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 73,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 4,  72 => 31,  69 => 33,  47 => 17,  40 => 18,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 95,  123 => 47,  120 => 75,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 35,  74 => 32,  66 => 15,  55 => 15,  52 => 21,  50 => 28,  43 => 8,  41 => 15,  35 => 4,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 78,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 41,  92 => 21,  86 => 28,  82 => 5,  80 => 19,  73 => 19,  64 => 31,  60 => 30,  57 => 32,  54 => 25,  51 => 14,  48 => 13,  45 => 17,  42 => 19,  39 => 9,  36 => 5,  33 => 7,  30 => 7,);
    }
}
