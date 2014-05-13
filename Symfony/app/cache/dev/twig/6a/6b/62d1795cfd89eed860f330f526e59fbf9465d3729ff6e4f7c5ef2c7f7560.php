<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_6a6b62d1795cfd89eed860f330f526e59fbf9465d3729ff6e4f7c5ef2c7f7560 extends Twig_Template
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
        $this->env->loadTemplate("FOSUserBundle:Group:list_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  22 => 3,  19 => 2,  103 => 28,  100 => 27,  93 => 29,  91 => 27,  87 => 25,  81 => 24,  72 => 21,  67 => 20,  62 => 19,  58 => 18,  54 => 16,  46 => 14,  40 => 11,  36 => 10,  29 => 8,  20 => 1,  31 => 4,  28 => 3,);
    }
}
