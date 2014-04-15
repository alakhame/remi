<?php

/* InnovitGeneralBundle:General:flashactualites.html.twig */
class __TwigTemplate_56b2115470819e0e2f8ccb066a336e6d7abac99c746f44be413bce6faa2e16f9 extends Twig_Template
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
\t\t\t<div id=\"div_gauche\" class=\"\" style=\"\">        
\t\t\t<div id=\"ruban\" class=\"titre\" style=\"\">        
\t\t\t \tFlash d'Actualités
\t\t\t</div>
\t\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "InnovitGeneralBundle:General:flashactualites.html.twig";
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
