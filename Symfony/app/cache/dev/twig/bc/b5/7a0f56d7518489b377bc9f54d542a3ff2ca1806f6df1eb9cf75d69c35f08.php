<?php

/* InnovitProfilBundle:Message:msg.html.twig */
class __TwigTemplate_bcb57a0f56d7518489b377bc9f54d542a3ff2ca1806f6df1eb9cf75d69c35f08 extends Twig_Template
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
        if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_msg_);
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            echo "\t
\t<div id=\"message_envoyer";
            // line 3
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"message\" style=\"\">
\t<div class=\"entete_message\" style=\"\">
\t<div id=\"masquer_envoyer";
            // line 5
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"btn_masqu_ctn_mess\" style=\"\" onclick=\"javascript:masquerlemessage_envoyer(";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo ")\">إخفاء</div>
\t<div id=\"afficher_envoyer";
            // line 6
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"btn_affich_ctn_mess\" style=\"\" onclick=\"javascript:afficherlemessage_envoyer(";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo ")\">إقرء الرسالة</div>
\t<div class=\"nom_entete_message\" style=\"\">De: ";
            // line 7
            if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("InnovitProfilBundle:Message:nameById", array("id" => $this->getAttribute($_m_, "idExp"))));
            echo " </div>
\t<div class=\"image_entete_message\" style=\"\"><img id=\"\" src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/user_icon.png"), "html", null, true);
            echo "\" style=\"width:100%\"/></div>
\t<div class=\"effacer_ce_message\" title=\"Effacer ce message\" style=\"\">مسح</div>
\t</div >
\t<div id=\"contenu_message_glo_envoyer";
            // line 11
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"contenu_message_glo\" style=\"\">
\t<div class=\"tri_contenu_message_glo\" style=\"\"></div>
\t<div class=\"objet_contenu_message_glo\" style=\"\">Objet:   ";
            // line 13
            if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_m_, "objet"), "html", null, true);
            echo "</div> 
\t<div class=\"text_contenu_message_glo\"  id=\"contenu_message_envoyer";
            // line 14
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\"  style=\"\">\t
\t\t";
            // line 15
            if (isset($context["m"])) { $_m_ = $context["m"]; } else { $_m_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_m_, "contenu"), "html", null, true);
            echo "
\t</div>
\t</div>
\t</div>
\t";
            // line 19
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $context["i"] = ($_i_ + 1);
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
        return array (  85 => 19,  77 => 15,  72 => 14,  67 => 13,  55 => 8,  50 => 7,  42 => 6,  34 => 5,  28 => 3,  21 => 2,  108 => 70,  100 => 65,  90 => 58,  76 => 47,  61 => 11,  37 => 14,  26 => 6,  19 => 1,);
    }
}
