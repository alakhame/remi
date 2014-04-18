<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_e17ecb8d22b92d8097202792b7824706139baba4a3c1542ea6b71a2d0e0862cd extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : null))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"fos_user_resetting_reset\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  48 => 12,  42 => 9,  30 => 2,  26 => 12,  24 => 7,  139 => 54,  136 => 53,  128 => 74,  114 => 63,  108 => 60,  102 => 56,  84 => 42,  79 => 40,  75 => 39,  70 => 37,  65 => 35,  60 => 33,  43 => 12,  61 => 7,  53 => 13,  44 => 12,  41 => 11,  39 => 7,  34 => 7,  32 => 6,  38 => 6,  27 => 5,  23 => 3,  33 => 6,  22 => 3,  19 => 2,  103 => 28,  100 => 53,  93 => 29,  91 => 27,  87 => 25,  81 => 24,  72 => 21,  67 => 20,  62 => 19,  58 => 6,  54 => 16,  46 => 14,  40 => 11,  36 => 10,  29 => 6,  20 => 1,  31 => 4,  28 => 4,);
    }
}
