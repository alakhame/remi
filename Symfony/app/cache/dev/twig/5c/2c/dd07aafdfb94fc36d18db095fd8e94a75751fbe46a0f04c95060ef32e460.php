<?php

/* InnovitProfilBundle:profil:demande_ajout.html.twig */
class __TwigTemplate_5c2cdd07aafdfb94fc36d18db095fd8e94a75751fbe46a0f04c95060ef32e460 extends Twig_Template
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
        return array (  100 => 59,  93 => 54,  76 => 43,  63 => 33,  57 => 32,  50 => 28,  19 => 1,);
    }
}
