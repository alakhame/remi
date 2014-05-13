<?php

/* InnovitGeneralBundle:General:login.html.twig */
class __TwigTemplate_85391592957fcbe745356b60f788e4ee29a990be7b27247494fc5aeae1afba95 extends Twig_Template
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
        // line 1
        echo "<div id=\"div_gauche\" class=\"\" style=\"\">  
\t<div id=\"div_authentification_glob\" >
\t\t<form action=\"\" method=\"post\">
\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
\t\t\t<div id=\"div_authentification\" >
\t\t
\t\t\t\t<div id=\"login_titre\">
\t\t\t\t\t<div id=\"partie_1_titre_text\">
\t\t\t\t\t\tالمرجو إدخال معلوماتك
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t<div>
\t\t\t\t\t
\t\t\t\t\t<div style=\"margin-right:5px\" class=\"input_authentification\">
\t\t\t\t\t\t<input  style=\"\" class=\"input\"  placeholder=\"كلمة السر\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\"></input>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"\" class=\"input_authentification\">
\t\t\t\t\t\t<input  style=\"\" class=\"input\"  placeholder=\"اسم التسجيل\" type=\"text\" id=\"username\" name=\"_username\" required=\"required\" ></input>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"remember_me\">
\t\t\t\t\t<label for=\"remember_me\">garder ma session active</label>
\t\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t</div>
\t\t\t\t<div  class=\"\" style=\"width:20%;margin:auto;margin-top:30px\">
\t\t\t\t\t<input id=\"entrer\" style=\"\" class=\"\" value=\"دخول\"  placeholder=\"Login \" type=\"submit\" name=\"_submit\" >
\t\t\t\t\t</input>
\t\t\t\t</div>
\t\t\t\t<div class=\"\" style=\"width:65%;margin:auto;margin-top:10px\">
\t\t\t\t\t<div id=\"mot_de_passe_oubl\"style=\"\">نسيت كلمة السر؟</div>
\t\t\t\t\t<div id=\"login_inscription\" onclick=\"javascript:aff_g(1)\" style=\"dislpay:inline-block;width:40%\"><div id=\"\" style=\"\">التسجيل من هنا</div></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>
</div>
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
        return array (  24 => 4,  19 => 1,);
    }
}
