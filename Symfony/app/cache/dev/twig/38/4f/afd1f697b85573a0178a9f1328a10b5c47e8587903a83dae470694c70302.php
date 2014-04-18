<?php

/* InnovitQuestionBundle:Question:pick.xml.twig */
class __TwigTemplate_384fafd1f697b85573a0178a9f1328a10b5c47e8587903a83dae470694c70302 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<questions>
\t";
        // line 3
        $context["i"] = 1;
        // line 4
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["qs"]) ? $context["qs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            // line 5
            echo "\t\t<question";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ">
\t\t\t<question> ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "question"), "html", null, true);
            echo "        </question>
\t\t\t<reponse1> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "rep1"), "html", null, true);
            echo "\t\t  </reponse1>
\t\t\t<reponse2> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "rep2"), "html", null, true);
            echo "\t\t  </reponse2>
\t\t\t<reponse3> ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "rep3"), "html", null, true);
            echo "\t\t  </reponse3>
\t\t\t<reponse4> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "rep4"), "html", null, true);
            echo "\t\t  </reponse4>
\t\t\t<reponse>  ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "rep"), "html", null, true);
            echo "\t\t  </reponse>
\t\t\t<explications> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "explications"), "html", null, true);
            echo " </explications>
\t\t</question";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo ">
\t\t";
            // line 14
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 15
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</questions>";
    }

    public function getTemplateName()
    {
        return "InnovitQuestionBundle:Question:pick.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  69 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  30 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
