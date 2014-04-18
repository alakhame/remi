<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3b68ff76c49ae1fef100be1aac60c235dfb28ffc94b95cf454e689e958101f77 extends Twig_Template
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
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  51 => 13,  35 => 8,  48 => 12,  42 => 10,  30 => 2,  26 => 12,  24 => 7,  139 => 54,  136 => 53,  128 => 74,  114 => 63,  108 => 60,  102 => 56,  84 => 42,  79 => 40,  75 => 39,  70 => 37,  65 => 35,  60 => 16,  43 => 12,  61 => 7,  53 => 13,  44 => 12,  41 => 11,  39 => 9,  34 => 7,  32 => 6,  38 => 6,  27 => 5,  23 => 3,  33 => 7,  22 => 3,  19 => 2,  103 => 28,  100 => 53,  93 => 29,  91 => 27,  87 => 25,  81 => 24,  72 => 22,  67 => 20,  62 => 19,  58 => 6,  54 => 16,  46 => 11,  40 => 11,  36 => 10,  29 => 6,  20 => 1,  31 => 6,  28 => 5,);
    }
}
