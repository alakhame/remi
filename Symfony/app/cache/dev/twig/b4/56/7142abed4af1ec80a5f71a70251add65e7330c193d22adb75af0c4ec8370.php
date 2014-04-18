<?php

/* InnovitProfilBundle:Message:msg.html.twig */
class __TwigTemplate_b4567142abed4af1ec80a5f71a70251add65e7330c193d22adb75af0c4ec8370 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["msg"]) ? $context["msg"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            echo "\t
\t<div id=\"message_envoyer";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"message\" style=\"\">
\t<div class=\"entete_message\" style=\"\">
\t<div id=\"masquer_envoyer";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"btn_masqu_ctn_mess\" style=\"\" onclick=\"javascript:masquerlemessage_envoyer(";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ")\">إخفاء</div>
\t<div id=\"afficher_envoyer";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"btn_affich_ctn_mess\" style=\"\" onclick=\"javascript:afficherlemessage_envoyer(";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ")\">إقرء الرسالة</div>
\t<div class=\"nom_entete_message\" style=\"\">De: ";
            // line 7
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("InnovitProfilBundle:Message:nameById", array("id" => $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "idExp"))));
            echo " </div>
\t<div class=\"image_entete_message\" style=\"\"><img id=\"\" src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/user_icon.png"), "html", null, true);
            echo "\" style=\"width:100%\"/></div>
\t<div class=\"effacer_ce_message\" title=\"Effacer ce message\" style=\"\">مسح</div>
\t</div >
\t<div id=\"contenu_message_glo_envoyer";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"contenu_message_glo\" style=\"\">
\t<div class=\"tri_contenu_message_glo\" style=\"\"></div>
\t<div class=\"objet_contenu_message_glo\" style=\"\">   ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "objet"), "html", null, true);
            echo " :الموضوع</div> 
\t<div class=\"text_contenu_message_glo\"  id=\"contenu_message_envoyer";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"  style=\"\">\t
\t\t";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "contenu"), "html", null, true);
            echo "
\t</div>
\t</div>
\t</div>
\t";
            // line 19
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:Message:msg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  67 => 15,  63 => 14,  59 => 13,  54 => 11,  48 => 8,  44 => 7,  38 => 6,  32 => 5,  27 => 3,  21 => 2,  108 => 70,  100 => 65,  90 => 58,  76 => 47,  61 => 35,  37 => 14,  26 => 6,  19 => 1,);
    }
}
