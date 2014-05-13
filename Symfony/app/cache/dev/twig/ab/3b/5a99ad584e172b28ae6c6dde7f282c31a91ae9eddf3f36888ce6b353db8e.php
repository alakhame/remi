<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ab3b5a99ad584e172b28ae6c6dde7f282c31a91ae9eddf3f36888ce6b353db8e extends Twig_Template
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
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "\".

Please e-mail us at [email] and let us know what you were doing when this
error occurred. We will fix it as soon as possible. Sorry for any
inconvenience caused.
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  79 => 21,  69 => 12,  47 => 18,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  123 => 41,  120 => 40,  115 => 39,  111 => 38,  108 => 37,  101 => 33,  98 => 32,  96 => 31,  83 => 25,  74 => 14,  66 => 11,  52 => 21,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 71,  187 => 70,  182 => 68,  176 => 64,  173 => 63,  168 => 62,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 35,  109 => 34,  106 => 36,  99 => 30,  95 => 28,  92 => 29,  86 => 24,  82 => 22,  80 => 24,  73 => 19,  64 => 19,  57 => 12,  45 => 17,  60 => 6,  55 => 16,  51 => 10,  43 => 9,  35 => 9,  34 => 7,  37 => 10,  32 => 9,  48 => 9,  42 => 16,  39 => 6,  30 => 3,  26 => 12,  24 => 4,  50 => 14,  41 => 8,  38 => 8,  27 => 5,  23 => 4,  33 => 4,  22 => 2,  19 => 1,  103 => 32,  100 => 27,  93 => 29,  91 => 27,  87 => 25,  81 => 24,  72 => 13,  67 => 20,  62 => 19,  58 => 18,  54 => 22,  46 => 11,  40 => 11,  36 => 5,  29 => 6,  20 => 1,  31 => 6,  28 => 5,);
    }
}
