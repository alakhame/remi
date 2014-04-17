<?php

/* InnovitQuestionBundle:Question:pick.html.twig */
class __TwigTemplate_80471e931c1a1c8fb5da416c675331aeddab330bf0b4218c8c151d4198f2870b extends Twig_Template
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
        echo "
";
        // line 2
        $context["i"] = 1;
        // line 3
        if (isset($context["qs"])) { $_qs_ = $context["qs"]; } else { $_qs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_qs_);
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            // line 4
            echo "\t<div id=\"question_tete_num_";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" style=\"\"><span id=\"num_question_";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\">0</span> السؤال رقم </div>

\t<div id=\"img_quest_";
            // line 6
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"\" style=\"\">
\t\t<img class=\"\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/png/128px/Shape 62.png"), "html", null, true);
            echo "\" style=\"width:100%\"/>
\t</div>
\t
\t<div id=\"question_";
            // line 10
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"\" style=\"\">\t
\t\t";
            // line 11
            if (isset($context["q"])) { $_q_ = $context["q"]; } else { $_q_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_q_, "question"), "html", null, true);
            echo "

\t</div>
\t\t
\t<div id=\"liste_rep_";
            // line 15
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"\" style=\"position:relative\">

\t\t<div id=\"reponse_tet_";
            // line 17
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" style=\"\">الإجابات</div>
\t\t
\t\t<div id=\"rep1_";
            // line 19
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"reponse\" style=\"\">
\t\t\t<div id=\"\" class=\"text_rep\"   style=\"\">";
            // line 20
            if (isset($context["q"])) { $_q_ = $context["q"]; } else { $_q_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_q_, "rep1"), "html", null, true);
            echo "</div>
\t\t\t<div id=\"\" class=\"check_rep\"  style=\"\"> <input type=\"checkbox\" name=\"option1\" value=\"Milk\"> </div>
\t\t</div>
\t\t\t
\t\t<div id=\"rep2_";
            // line 24
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"reponse\" style=\"\">
\t\t\t<div id=\"\" class=\"text_rep\"   style=\"\">";
            // line 25
            if (isset($context["q"])) { $_q_ = $context["q"]; } else { $_q_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_q_, "rep2"), "html", null, true);
            echo "</div>
\t\t\t<div id=\"\" class=\"check_rep\"  style=\"\"> <input type=\"checkbox\" name=\"option1\" value=\"Milk\"> </div>
\t\t</div>
\t\t\t
\t\t<div id=\"rep3_";
            // line 29
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"reponse\" style=\"\">
\t\t\t<div id=\"\" class=\"text_rep\"   style=\"\">";
            // line 30
            if (isset($context["q"])) { $_q_ = $context["q"]; } else { $_q_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_q_, "rep3"), "html", null, true);
            echo "</div>
\t\t\t<div id=\"\" class=\"check_rep\"  style=\"\"> <input type=\"checkbox\" name=\"option1\" value=\"Milk\"> </div>
\t\t</div>
\t\t\t
\t\t<div id=\"rep4_";
            // line 34
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"reponse\" style=\"margin-bottom:20px\">
\t\t\t<div id=\"\" class=\"text_rep\"   style=\"\">";
            // line 35
            if (isset($context["q"])) { $_q_ = $context["q"]; } else { $_q_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_q_, "rep4"), "html", null, true);
            echo "</div>
\t\t\t<div id=\"\" class=\"check_rep\"  style=\"\"> <input type=\"checkbox\" name=\"option1\" value=\"Milk\"> </div>
\t\t</div>
\t\t\t
\t</div>
\t\t
\t<div id=\"test_bottom_";
            // line 41
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"\" style=\"\">

\t\t<div id=\"progression_question_";
            // line 43
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\"  style=\"\">
\t\t\t<div id=\"progression_question_bar_";
            // line 44
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" style=\"\">\t</div>\t
\t\t</div>\t
\t\t<div id=\"span_num_quest_";
            // line 46
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" >15 السؤال 0 من أصل</div>
\t</div> 

\t<div id=\"valider_";
            // line 49
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" name=\"";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"\" style=\"\" onclick=\"javascript:nextQuestion(";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo ")\">التالي</div>
\t
\t";
            // line 51
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $context["i"] = ($_i_ + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "InnovitQuestionBundle:Question:pick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 51,  153 => 49,  146 => 46,  140 => 44,  135 => 43,  129 => 41,  119 => 35,  114 => 34,  106 => 30,  101 => 29,  93 => 25,  88 => 24,  80 => 20,  75 => 19,  69 => 17,  63 => 15,  55 => 11,  50 => 10,  44 => 7,  39 => 6,  29 => 4,  24 => 3,  22 => 2,  46 => 18,  42 => 17,  32 => 10,  19 => 1,);
    }
}
