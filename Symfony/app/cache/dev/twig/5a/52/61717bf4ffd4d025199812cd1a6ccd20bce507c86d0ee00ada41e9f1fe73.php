<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_5a5261717bf4ffd4d025199812cd1a6ccd20bce507c86d0ee00ada41e9f1fe73 extends Twig_Template
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

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : null)), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  42 => 9,  30 => 2,  26 => 12,  24 => 7,  139 => 54,  136 => 53,  128 => 74,  114 => 63,  108 => 60,  102 => 56,  84 => 42,  79 => 40,  75 => 39,  70 => 37,  65 => 35,  60 => 33,  43 => 19,  61 => 7,  53 => 13,  44 => 12,  41 => 11,  39 => 7,  34 => 7,  32 => 6,  38 => 6,  27 => 4,  23 => 3,  33 => 4,  22 => 2,  19 => 1,  103 => 28,  100 => 53,  93 => 29,  91 => 27,  87 => 25,  81 => 24,  72 => 21,  67 => 20,  62 => 19,  58 => 6,  54 => 16,  46 => 14,  40 => 11,  36 => 10,  29 => 4,  20 => 1,  31 => 6,  28 => 5,);
    }
}
