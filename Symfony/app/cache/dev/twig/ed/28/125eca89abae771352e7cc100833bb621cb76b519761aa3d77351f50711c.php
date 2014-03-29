<?php

/* InnovitProfilBundle:profil:messages.html.twig */
class __TwigTemplate_ed28125eca89abae771352e7cc100833bb621cb76b519761aa3d77351f50711c extends Twig_Template
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
        echo "﻿\t
\t<div id=\"div_messages\" class=\"\" style=\"\">
\t<div class=\"prog_chaque_matrs\" id=\"\" style=\"\">
الرسائل
</div>
\t\t<div id=\"message1\" class=\"\" style=\"\" >
\t\t\t
\t\t\t<div id=\"message_entet1\" class=\"\" style=\"\" onclick=\"javascript: toggelf(1)\">
\t\t\t\t<div id=\"titre_message1\" class=\"\" style=\"\" >
\t\t\t\t\tأرسل رسالة جديدة
\t\t\t\t</div>
\t\t\t\t<div id=\"image_message1\" class=\"\" style=\"\">
\t\t\t\t\t<img id=\"image_messagei1\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fleche2.png"), "html", null, true);
        echo "\" style=\"width:100%\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div id=\"elements_message1\" class=\"\" style=\"background:white;\">
\t\t\t\t<div style=\"width:90%;margin:auto\">
\t\t\t\t\t<input id=\"messager-nous_contenu_nom_prenom\" style=\"\"  placeholder=\"الإسم الكامل\" type=\"text\" name=\"nom\"></input>
\t\t\t\t\t<input id=\"messager-nous_contenu_objet\" style=\"\"  placeholder=\"الموضوع\" type=\"text\" name=\"objet\"></input>\t
\t\t\t\t\t<textarea id=\"messager-nous_contenu_message\" style=\"\" placeholder=\"السالة\" name=\"message\" ></textarea>
\t\t\t\t\t<input id=\"messager-nous_contenu_Envoyer\" style=\"\"  value=\"أرسل\" type=\"submit\" name=\"Evoyer\"></input>
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t</div>
\t\t
\t\t<div id=\"message2\" class=\"\" style=\"\">
\t\t\t<div id=\"message_entet2\" class=\"\" style=\"\" onclick=\"javascript: toggelf(2)\">
\t\t\t\t<div id=\"image_message2\" class=\"\" style=\"\" >
\t\t\t\t\t<img id=\"image_messagei2\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fleche2.png"), "html", null, true);
        echo "\" style=\"width:100%\"/>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div id=\"titre_message2\" class=\"\" style=\"\" >
\t\t\t\t\tالرسائل الواردة
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div id=\"elements_message2\" class=\"elements_message\" style=\"\">
\t\t\t\t<div style=\"width:100%;margin:auto\">
\t\t\t\t
\t";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t
\t<div id=\"message_envoyer";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"message\" style=\"\">
\t<div class=\"entete_message\" style=\"\">
\t<div id=\"masquer_envoyer";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"btn_masqu_ctn_mess\" style=\"\" onclick=\"javascript:masquerlemessage_envoyer(";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ")\">إخفاء</div>
\t<div id=\"afficher_envoyer";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"btn_affich_ctn_mess\" style=\"\" onclick=\"javascript:afficherlemessage_envoyer(";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ")\">إقرء الرسالة</div>
\t<div class=\"nom_entete_message\" style=\"\"><span>كريم سعيد</span></div>
\t<div class=\"image_entete_message\" style=\"\"><img id=\"\" src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/user_icon.png"), "html", null, true);
            echo "\" style=\"width:100%\"/></div>
\t
\t<div class=\"effacer_ce_message\" title=\"Effacer ce message\" style=\"\">مسح</div>
\t</div >
\t<div id=\"contenu_message_glo_envoyer";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"contenu_message_glo\" style=\"\">
\t<div class=\"tri_contenu_message_glo\" style=\"\"></div>
\t<div class=\"objet_contenu_message_glo\" style=\"\"><span>الموضوع:</span><span>درس</span></div>

\t<div class=\"text_contenu_message_glo\"  id=\"contenu_message_envoyer";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"  style=\"\">
\t
\tsdfgsdfhsgh
    shshfdhhhhhhhhhhhhhhhhhhhshgddf jh khkh jkh k h lk hk hk h k hk hk jh kjhk h kjh khkjhk hlkjhlkhk jh kjh lkh l h ljkh
\tsdfgsdfhsgh
    shshfdhhhhhhhhhhhhhhhhhhhshgddf jh khkh jkh k h lk hk hk h k hk hk jh kjhk h kjh khkjhk hlkjhlkhk jh kjh lkh l h ljkh
\tsdfgsdfhsgh
    shshfdhhhhhhhhhhhhhhhhhhhshgddf jh khkh jkh k h lk hk hk h k hk hk jh kjhk h kjh khkjhk hlkjhlkhk jh kjh lkh l h ljkh
\tsdfgsdfhsgh
    shshfdhhhhhhhhhhhhhhhhhhhshgddf jh khkh jkh k h lk hk hk h k hk hk jh kjhk h kjh khkjhk hlkjhlkhk jh kjh lkh l h ljkh
\t</div>
\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t
\t<div id=\"message3\" class=\"\" style=\"\">
\t\t\t<div id=\"message_entet3\" class=\"\" style=\"\" onclick=\"javascript: toggelf(3)\">
\t\t\t\t<div id=\"titre_message3\" class=\"\" style=\"\" >
\t\t\t\t\tالرسائل المرسلة
\t\t\t\t</div>
\t\t\t\t<div id=\"image_message3\" class=\"\" style=\"\" >
\t\t\t\t\t<img id=\"image_messagei3\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fleche2.png"), "html", null, true);
        echo "\" style=\"width:100%\"/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div id=\"elements_message3\" class=\"elements_message\" style=\"\">
\t\t\t\t<div style=\"width:100%;margin:auto\">
\t\t\t\t
\t";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t
\t<div id=\"message_recu";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"message\" style=\"\">
\t<div  class=\"entete_message\" style=\"\">
\t<div id=\"afficher_recu";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"btn_affich_ctn_mess\" style=\"\" onclick=\"javascript:afficherlemessage_recu(";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ")\">إقرء الرسالة</div>
\t<div id=\"masquer_recu";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"btn_masqu_ctn_mess\" style=\"\" onclick=\"javascript:masquerlemessage_recu(";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ")\">إخفاء</div>
\t<div class=\"nom_entete_message\" style=\"\"><span>محمد سعيد</span></div>
\t<div class=\"image_entete_message\" style=\"\"><img id=\"\" src=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/user_icon.png"), "html", null, true);
            echo "\" style=\"width:100%\"/></div>
\t<div class=\"effacer_ce_message\" title=\"Effacer ce message\" style=\"\">مسح</div>
\t</div >
\t<div id=\"contenu_message_glo_recu";
            // line 101
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"contenu_message_glo\" style=\"\">
\t<div class=\"tri_contenu_message_glo\" style=\"\"></div>
\t<div  class=\"objet_contenu_message_glo\" style=\"\"><span>الموضوع:</span><span>درس</span></div>
\t<div class=\"text_contenu_message_glo\"  id=\"contenu_message_recu";
            // line 104
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"  style=\"\">
\t
\tsdfgsdfhsgh
    shshfdhhhhhhhhhhhhhhhhhhhshgddf jh khkh jkh k h lk hk hk h k hk hk jh kjhk h kjh khkjhk hlkjhlkhk jh kjh lkh l h ljkh
\tsdfgsdfhsghمسح
    shshfdhhhhhhhhhhhhhhhhhhhshgddf jh khkh jkh k h lk hk hk h k hk hk jh kjhk h kjh khkjhk hlkjhlkhk jh kjh lkh l h ljkh
\tsdfgsdfhsgh
    shshfdhhhhhhhhhhhhhhhhhhhshgddf jh khkh jkh k h lk hk hk h k hk hk jh kjhk h kjh khkjhk hlkjhlkhk jh kjh lkh l h ljkh
\tsdfgsdfhsgh
    shshfdhhhhhhhhhhhhhhhhhhhshgddf jh khkh jkh k h lk hk hk h k hk hk jh kjhk h kjh khkjhk hlkjhlkhk jh kjh lkh l h ljkh
\t</div>
\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t
<script  src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/script_messages.js"), "html", null, true);
        echo "\" > </script>";
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:profil:messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 123,  170 => 96,  153 => 92,  129 => 73,  114 => 43,  34 => 14,  77 => 46,  65 => 35,  100 => 59,  53 => 18,  23 => 3,  148 => 96,  134 => 85,  90 => 48,  20 => 1,  76 => 43,  81 => 42,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 98,  169 => 60,  140 => 55,  132 => 51,  128 => 82,  107 => 62,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 93,  143 => 56,  135 => 53,  119 => 42,  102 => 55,  71 => 45,  67 => 30,  63 => 33,  59 => 34,  38 => 9,  94 => 55,  89 => 52,  85 => 39,  75 => 42,  68 => 14,  56 => 23,  87 => 43,  21 => 2,  26 => 2,  93 => 54,  88 => 49,  78 => 33,  46 => 19,  27 => 4,  44 => 12,  31 => 3,  28 => 7,  201 => 92,  196 => 90,  183 => 101,  171 => 61,  166 => 127,  163 => 62,  158 => 67,  156 => 75,  151 => 63,  142 => 84,  138 => 54,  136 => 56,  121 => 73,  117 => 60,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 5,  72 => 31,  69 => 33,  47 => 17,  40 => 18,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 95,  123 => 47,  120 => 75,  115 => 43,  111 => 42,  108 => 36,  101 => 60,  98 => 31,  96 => 44,  83 => 49,  74 => 32,  66 => 23,  55 => 32,  52 => 21,  50 => 20,  43 => 16,  41 => 15,  35 => 4,  32 => 3,  29 => 2,  209 => 118,  203 => 78,  199 => 67,  193 => 73,  189 => 104,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 95,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 78,  116 => 41,  112 => 42,  109 => 59,  106 => 36,  103 => 49,  99 => 31,  95 => 51,  92 => 21,  86 => 28,  82 => 48,  80 => 38,  73 => 27,  64 => 31,  60 => 20,  57 => 32,  54 => 25,  51 => 21,  48 => 21,  45 => 17,  42 => 15,  39 => 15,  36 => 14,  33 => 13,  30 => 7,);
    }
}
