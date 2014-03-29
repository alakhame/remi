<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_247e0d6f49ddf248a4ca80e447d919cb91572805bffb37be17f35a6302889d13 extends Twig_Template
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
        if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
        if ($this->getAttribute($_trace_, "function")) {
            // line 2
            echo "    at ";
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo (($this->getAttribute($_trace_, "class") . $this->getAttribute($_trace_, "type")) . $this->getAttribute($_trace_, "function"));
            echo "(";
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute($_trace_, "args"));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
        if (($this->getAttribute($_trace_, "file", array(), "any", true, true) && $this->getAttribute($_trace_, "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo $this->getAttribute($_trace_, "file");
            echo " line ";
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            echo $this->getAttribute($_trace_, "line");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  62 => 16,  55 => 15,  38 => 13,  24 => 4,  50 => 7,  110 => 20,  89 => 16,  65 => 14,  63 => 13,  58 => 12,  52 => 11,  49 => 10,  34 => 5,  26 => 5,  121 => 24,  114 => 22,  109 => 21,  106 => 20,  101 => 19,  85 => 16,  81 => 14,  77 => 12,  67 => 9,  59 => 8,  47 => 7,  45 => 6,  37 => 4,  28 => 4,  25 => 3,  227 => 92,  224 => 91,  221 => 90,  211 => 84,  207 => 82,  197 => 74,  195 => 73,  192 => 72,  189 => 71,  186 => 70,  181 => 67,  178 => 66,  173 => 63,  162 => 59,  158 => 57,  155 => 56,  152 => 55,  142 => 47,  140 => 46,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  115 => 39,  105 => 31,  100 => 19,  75 => 24,  70 => 23,  56 => 20,  53 => 19,  19 => 1,  98 => 40,  93 => 18,  88 => 17,  80 => 15,  78 => 25,  46 => 9,  44 => 9,  36 => 6,  32 => 4,  27 => 3,  22 => 2,  60 => 21,  57 => 11,  43 => 14,  40 => 7,  33 => 10,  30 => 4,);
    }
}
