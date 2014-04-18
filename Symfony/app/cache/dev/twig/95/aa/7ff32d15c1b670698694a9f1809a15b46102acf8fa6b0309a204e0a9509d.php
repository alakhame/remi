<?php

/* InnovitGeneralBundle:General:general.html.twig */
class __TwigTemplate_95aa7ff32d15c1b670698694a9f1809a15b46102acf8fa6b0309a204e0a9509d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("InnovitGeneralBundle:General:Layoutgeneral.php.twig");

        $this->blocks = array(
            'corp' => array($this, 'block_corp'),
            'milieu' => array($this, 'block_milieu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "InnovitGeneralBundle:General:Layoutgeneral.php.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_corp($context, array $blocks = array())
    {
        // line 3
        echo "\t\t<div id=\"div_globale\">\t
\t\t\t";
        // line 4
        $this->displayBlock('milieu', $context, $blocks);
        // line 7
        echo "\t\t\t<div id=\"inscription\" class=\"\" style=\"\">

\t\t\t\t
\t\t\t\t<div id=\"video\" style=\"\">
\t\t\t\t   <iframe width=\"100%\" height=\"220\" src=\"//www.youtube.com/embed/Yim4--J44gk?rel=0\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t</div>\t
\t\t\t\t

\t\t\t\t\t\t\t\t
\t\t\t\t<div id=\"insc\" class=\"\" style=\"\">
\t\t\t\t\t<div id=\"insc_titre1\" style=\"\">مرحبا بك,املك حسابك الخاص الآن</div>
\t\t\t\t\t<div id=\"insc_titre2\" style=\"\">التسجيل</div>\t\t  
\t\t\t
\t\t\t\t<div id=\"inputs\" class=\"\" style=\"opacity:1\">
\t\t\t\t ";
        // line 21
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Registration:register"));
        echo "
\t\t\t\t</div>
\t\t
\t\t\t\t</div>
\t\t\t\t<div id=\"video\" style=\"\">
\t\t\t\t<img class=\"\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/video.png"), "html", null, true);
        echo "\" style=\"\"/>
\t\t\t\t</div>\t
\t\t\t\t
\t\t\t</div>\t
\t\t</div>
\t\t
\t
";
    }

    // line 4
    public function block_milieu($context, array $blocks = array())
    {
        // line 5
        echo "\t\t\t
\t\t\t";
    }

    public function getTemplateName()
    {
        return "InnovitGeneralBundle:General:general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 5,  73 => 4,  61 => 26,  53 => 21,  37 => 7,  35 => 4,  32 => 3,  29 => 2,  127 => 76,  114 => 66,  104 => 59,  94 => 52,  81 => 42,  74 => 38,  67 => 34,  60 => 30,  31 => 3,  28 => 2,);
    }
}
