<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_d46436d62472930e42d15db5d5a3df1a4e97ffefc4086b2fd2ed36641ba5404d extends Twig_Template
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

<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
\t\t
    <div style=\"width:100px;margin:auto;margin-top:15px\">
        <input type=\"submit\" value=\"register\" />
    </div>
\t
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,  103 => 28,  93 => 29,  91 => 27,  87 => 25,  72 => 21,  62 => 19,  58 => 18,  54 => 16,  46 => 14,  40 => 11,  36 => 10,  139 => 54,  136 => 53,  128 => 74,  108 => 60,  102 => 56,  100 => 27,  84 => 42,  79 => 40,  75 => 39,  70 => 37,  65 => 35,  43 => 19,  20 => 1,  76 => 5,  73 => 4,  61 => 26,  53 => 21,  37 => 7,  35 => 4,  32 => 3,  29 => 4,  127 => 76,  114 => 63,  104 => 59,  94 => 52,  81 => 24,  74 => 38,  67 => 20,  60 => 33,  31 => 9,  28 => 3,);
    }
}
