<?php

/* InnovitGeneralBundle:General:liensutiles.html.twig */
class __TwigTemplate_09e335b2ed953451bc1977bf91af3088b1c03347ce61162a94df5ac57b7e9f7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("InnovitGeneralBundle:General:general.html.twig");

        $this->blocks = array(
            'milieu' => array($this, 'block_milieu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "InnovitGeneralBundle:General:general.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_milieu($context, array $blocks = array())
    {
        // line 3
        echo "
\t\t<div id=\"div_gauche\" class=\"\" style=\"\">        
\t\t\t<div id=\"ruban\" class=\"titre\" style=\"\">        
\t\t\t مواقع مفيدة
\t\t\t</div>
\t\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "InnovitGeneralBundle:General:liensutiles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
