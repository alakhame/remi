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
            echo "\t
\t<div id=\"q_";
            // line 5
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\"  >

\t<div id=\"img_quest_";
            // line 7
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"img_quest\" style=\"\">
\t\t<img class=\"\" src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/png/128px/Shape 62.png"), "html", null, true);
            echo "\" style=\"width:100%\"/>
\t</div>
\t
\t<div id=\"question_";
            // line 11
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"question\" style=\"\">\t
\t\t";
            // line 12
            if (isset($context["q"])) { $_q_ = $context["q"]; } else { $_q_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_q_, "question"), "html", null, true);
            echo "

\t</div>
\t\t
\t<div id=\"liste_rep_";
            // line 16
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"liste_rep\" style=\"position:relative\">

\t\t<div id=\"reponse_tet_";
            // line 18
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"reponse_tet\" style=\"\">الإجابات</div>
\t\t
\t\t<div id=\"rep1_";
            // line 20
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"reponse rep1\" style=\"\">
\t\t\t<div id=\"\" class=\"text_rep\"   style=\"\">";
            // line 21
            if (isset($context["q"])) { $_q_ = $context["q"]; } else { $_q_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_q_, "rep1"), "html", null, true);
            echo "</div>
\t\t\t<div id=\"\" class=\"check_rep\"  style=\"\"> <input type=\"checkbox\" name=\"option1\" value=\"Milk\"> </div>
\t\t</div>
\t\t\t
\t\t<div id=\"rep2_";
            // line 25
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"reponse\" style=\"\">
\t\t\t<div id=\"\" class=\"text_rep\"   style=\"\">";
            // line 26
            if (isset($context["q"])) { $_q_ = $context["q"]; } else { $_q_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_q_, "rep2"), "html", null, true);
            echo "</div>
\t\t\t<div id=\"\" class=\"check_rep\"  style=\"\"> <input type=\"checkbox\" name=\"option1\" value=\"Milk\"> </div>
\t\t</div>
\t\t\t
\t\t<div id=\"rep3_";
            // line 30
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"reponse\" style=\"\">
\t\t\t<div id=\"\" class=\"text_rep\"   style=\"\">";
            // line 31
            if (isset($context["q"])) { $_q_ = $context["q"]; } else { $_q_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_q_, "rep3"), "html", null, true);
            echo "</div>
\t\t\t<div id=\"\" class=\"check_rep\"  style=\"\"> <input type=\"checkbox\" name=\"option1\" value=\"Milk\"> </div>
\t\t</div>
\t\t\t
\t\t<div id=\"rep4_";
            // line 35
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"reponse\" style=\"margin-bottom:20px\">
\t\t\t<div id=\"\" class=\"text_rep\"   style=\"\">";
            // line 36
            if (isset($context["q"])) { $_q_ = $context["q"]; } else { $_q_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_q_, "rep4"), "html", null, true);
            echo "</div>
\t\t\t<div id=\"\" class=\"check_rep\"  style=\"\"> <input type=\"checkbox\" name=\"option1\" value=\"Milk\"> </div>
\t\t</div>
\t\t\t
\t</div>
\t\t
\t<div id=\"test_bottom_";
            // line 42
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"test_bottom\" style=\"\">

\t\t<div id=\"progression_question_";
            // line 44
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\"  class=\"progression_question\" style=\"\">
\t\t\t<div id=\"progression_question_bar_";
            // line 45
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"progression_question_bar\" style=\"\">\t</div>\t
\t\t</div>\t
\t\t<div id=\"span_num_quest_";
            // line 47
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"span_num_quest\"> السؤال 0 من أصل</div>
\t</div> 

\t<div id=\"valider_";
            // line 50
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" name=\"";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" class=\"valider\" style=\"\" onclick=\"javascript:nextQuestion(";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo ")\">التالي</div>
\t
\t</div>
\t
\t";
            // line 54
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
        return array (  166 => 54,  152 => 50,  145 => 47,  139 => 45,  134 => 44,  128 => 42,  118 => 36,  113 => 35,  105 => 31,  100 => 30,  92 => 26,  87 => 25,  79 => 21,  74 => 20,  68 => 18,  62 => 16,  54 => 12,  49 => 11,  43 => 8,  38 => 7,  32 => 5,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
