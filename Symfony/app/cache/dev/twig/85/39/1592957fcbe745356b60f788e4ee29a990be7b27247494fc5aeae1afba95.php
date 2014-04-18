<?php

/* InnovitGeneralBundle:General:login.html.twig */
class __TwigTemplate_85391592957fcbe745356b60f788e4ee29a990be7b27247494fc5aeae1afba95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("InnovitGeneralBundle:General:Layoutprofil.php.twig");

        $this->blocks = array(
            'corp' => array($this, 'block_corp'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "InnovitGeneralBundle:General:Layoutprofil.php.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_corp($context, array $blocks = array())
    {
        // line 3
        echo "
\t<form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
\t\t<div id=\"div_authentification\" >
\t\t
\t\t\t\t
\t\t\t<div id=\"titre_login\" style=\"\">
\t\t\t\tالمرجو إدخال معلوماتك
\t\t\t</div>
\t\t\t
\t\t\t<div style=\"margin-top:40px\" class=\"input_authentification\">
\t\t\t\t<input  style=\"\" class=\"input\"  placeholder=\"\" type=\"text\" id=\"username\" name=\"_username\" required=\"required\" ></input>
\t\t\t\t<div class=\"logi\" style=\"\" >اسم التسجيل</div>
\t\t\t</div>
\t\t\t<div class=\"input_authentification\">
\t\t\t\t
\t\t\t\t<input  style=\"\" class=\"input\"  placeholder=\"\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\"></input>
\t\t\t\t<div class=\"logi\" style=\"\">كلمة السر</div>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t<label for=\"remember_me\">garder ma session active</label>
\t\t\t</div>
\t\t\t<div class=\"input_authentification\" style=\"width:100px;margin:auto;margin-top:10px\">
\t\t\t\t<input  style=\"width:100%;text-align:center\" class=\"\" value=\"دخول\"  placeholder=\"Login \" type=\"submit\" name=\"_submit\" >
\t\t\t\t</input>
\t\t\t</div>
\t\t\t<div class=\"\" style=\"width:65%;margin:auto;margin-top:10px\">
\t\t\t\t<div id=\"mot_de_passe_oubl\"style=\"\">نسيت كلمة السر؟</div>
\t\t\t\t<a id=\"\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("innovit_general_homepage", array("name" => "Accueil"));
        echo "\"><div id=\"login_inscription\" style=\"\">التسجيل من هنا</div></a>
\t\t\t</div>
\t\t</div>
\t</form>
\t

";
    }

    public function getTemplateName()
    {
        return "InnovitGeneralBundle:General:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 33,  39 => 6,  34 => 4,  31 => 3,  28 => 2,);
    }
}
