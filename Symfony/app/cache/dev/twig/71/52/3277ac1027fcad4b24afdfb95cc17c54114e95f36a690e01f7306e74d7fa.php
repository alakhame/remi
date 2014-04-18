<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_71523277ac1027fcad4b24afdfb95cc17c54114e95f36a690e01f7306e74d7fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : null)), "FOSUserBundle");
        echo "
";
    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : null)), "FOSUserBundle");
        echo "
";
    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  42 => 9,  30 => 2,  26 => 12,  24 => 7,  139 => 54,  136 => 53,  128 => 74,  114 => 63,  108 => 60,  102 => 56,  84 => 42,  79 => 40,  75 => 39,  70 => 37,  65 => 35,  60 => 33,  43 => 19,  61 => 7,  53 => 13,  44 => 12,  41 => 11,  39 => 7,  34 => 9,  32 => 6,  38 => 6,  27 => 4,  23 => 4,  33 => 4,  22 => 2,  19 => 2,  103 => 28,  100 => 53,  93 => 29,  91 => 27,  87 => 25,  81 => 24,  72 => 21,  67 => 20,  62 => 19,  58 => 6,  54 => 16,  46 => 14,  40 => 11,  36 => 10,  29 => 5,  20 => 1,  31 => 6,  28 => 7,);
    }
}
