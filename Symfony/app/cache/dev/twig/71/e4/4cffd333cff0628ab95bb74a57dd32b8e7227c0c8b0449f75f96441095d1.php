<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_71e44cffd333cff0628ab95bb74a57dd32b8e7227c0c8b0449f75f96441095d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 54,  136 => 53,  128 => 74,  108 => 60,  102 => 56,  100 => 53,  84 => 42,  79 => 40,  75 => 39,  70 => 37,  65 => 35,  43 => 19,  20 => 1,  76 => 5,  73 => 4,  61 => 26,  53 => 21,  37 => 7,  35 => 4,  32 => 3,  29 => 2,  127 => 76,  114 => 63,  104 => 59,  94 => 52,  81 => 42,  74 => 38,  67 => 34,  60 => 33,  31 => 4,  28 => 3,);
    }
}
