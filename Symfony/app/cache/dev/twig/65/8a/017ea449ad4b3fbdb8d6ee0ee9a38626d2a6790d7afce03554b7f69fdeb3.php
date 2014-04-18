<?php

/* InnovitQuestionBundle:Question:pick.html.twig */
class __TwigTemplate_658a017ea449ad4b3fbdb8d6ee0ee9a38626d2a6790d7afce03554b7f69fdeb3 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["qs"]) ? $context["qs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            // line 4
            echo "\t
\t<div id=\"q_";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"  >

\t<div id=\"img_quest_";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"img_quest\" style=\"\">
\t\t<img class=\"\" src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/png/128px/Shape 62.png"), "html", null, true);
            echo "\" style=\"width:100%\"/>
\t</div>
\t
\t<div id=\"question_";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"question\" style=\"\">\t
\t\t";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "question"), "html", null, true);
            echo "

\t</div>
\t\t
\t<div id=\"liste_rep_";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"liste_rep\" style=\"position:relative\">

\t\t<div id=\"reponse_tet_";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"reponse_tet\" style=\"\">الإجابات</div>
\t\t
\t\t<div id=\"rep1_";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"reponse rep1\" style=\"\">
\t\t\t<div id=\"\" class=\"text_rep\"   style=\"\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "rep1"), "html", null, true);
            echo "</div>
\t\t\t<div id=\"\" class=\"check_rep\"  style=\"\"> <input type=\"checkbox\" name=\"option1\" value=\"Milk\"> </div>
\t\t</div>
\t\t\t
\t\t<div id=\"rep2_";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"reponse\" style=\"\">
\t\t\t<div id=\"\" class=\"text_rep\"   style=\"\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "rep2"), "html", null, true);
            echo "</div>
\t\t\t<div id=\"\" class=\"check_rep\"  style=\"\"> <input type=\"checkbox\" name=\"option1\" value=\"Milk\"> </div>
\t\t</div>
\t\t\t
\t\t<div id=\"rep3_";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"reponse\" style=\"\">
\t\t\t<div id=\"\" class=\"text_rep\"   style=\"\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "rep3"), "html", null, true);
            echo "</div>
\t\t\t<div id=\"\" class=\"check_rep\"  style=\"\"> <input type=\"checkbox\" name=\"option1\" value=\"Milk\"> </div>
\t\t</div>
\t\t\t
\t\t<div id=\"rep4_";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"reponse\" style=\"margin-bottom:20px\">
\t\t\t<div id=\"\" class=\"text_rep\"   style=\"\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "rep4"), "html", null, true);
            echo "</div>
\t\t\t<div id=\"\" class=\"check_rep\"  style=\"\"> <input type=\"checkbox\" name=\"option1\" value=\"Milk\"> </div>
\t\t</div>
\t\t\t
\t</div>
\t\t
\t<div id=\"test_bottom_";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"test_bottom\" style=\"\">

\t\t<div id=\"progression_question_";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"  class=\"progression_question\" style=\"\">
\t\t\t<div id=\"progression_question_bar_";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"progression_question_bar\" style=\"\">\t</div>\t
\t\t</div>\t
\t\t<div id=\"span_num_quest_";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"span_num_quest\"> السؤال 0 من أصل</div>
\t</div> 

\t<div id=\"valider_";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" class=\"valider\" style=\"\" onclick=\"javascript:nextQuestion(";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ")\">التالي</div>
\t
\t</div>
\t
\t";
            // line 54
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
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
        return array (  144 => 54,  133 => 50,  127 => 47,  122 => 45,  118 => 44,  113 => 42,  104 => 36,  100 => 35,  93 => 31,  89 => 30,  82 => 26,  78 => 25,  71 => 21,  67 => 20,  62 => 18,  57 => 16,  50 => 12,  40 => 8,  36 => 7,  31 => 5,  28 => 4,  24 => 3,  22 => 2,  46 => 11,  42 => 17,  32 => 10,  19 => 1,);
    }
}
