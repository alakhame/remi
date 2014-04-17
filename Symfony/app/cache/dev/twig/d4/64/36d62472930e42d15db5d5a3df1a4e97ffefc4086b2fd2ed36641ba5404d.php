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
        // line 2
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
\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', array("attr" => array("class" => "input_inscription")));
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
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
        return array (  22 => 3,  19 => 2,  103 => 28,  93 => 29,  91 => 27,  87 => 25,  72 => 21,  62 => 19,  58 => 18,  54 => 16,  46 => 14,  40 => 11,  36 => 10,  137 => 54,  134 => 53,  126 => 74,  112 => 63,  106 => 60,  100 => 27,  98 => 53,  84 => 42,  79 => 40,  75 => 39,  70 => 37,  65 => 35,  43 => 19,  20 => 1,  89 => 5,  86 => 4,  66 => 34,  37 => 7,  35 => 4,  32 => 5,  29 => 8,  127 => 76,  114 => 66,  104 => 59,  94 => 52,  81 => 24,  74 => 39,  67 => 20,  60 => 33,  31 => 9,  28 => 4,);
    }
}
