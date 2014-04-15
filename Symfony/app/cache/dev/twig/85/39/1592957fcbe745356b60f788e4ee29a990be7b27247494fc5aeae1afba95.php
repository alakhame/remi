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
\t<div id=\"div_authentification\" >
\t\t\t
\t    <div id=\"titre_login\" style=\"\">
\t\t\tالمرجو إدخال معلوماتك
\t\t\t
\t\t</div>
\t\t<div style=\"margin-top:40px\" class=\"input_authentification\">
\t\t\t
\t\t\t<input  style=\"\" class=\"input\"  placeholder=\"\" type=\"text\" ></input>
\t\t\t<div class=\"logi\" style=\"\">اسم التسجيل</div>
\t\t</div>
\t\t<div class=\"input_authentification\">
\t\t\t
\t\t\t<input  style=\"\" class=\"input\"  placeholder=\"\" type=\"password\"></input>
\t\t\t<div class=\"logi\" style=\"\">كلمة السر</div>
\t\t</div>
\t\t<div class=\"input_authentification\" style=\"width:100px;margin:auto;margin-top:10px\">
\t\t\t<input  style=\"width:100%;text-align:center\" class=\"\" value=\"دخول\"  placeholder=\"Login \" type=\"submit\" >
\t\t\t</input>
\t\t</div>
\t\t<div class=\"\" style=\"width:65%;margin:auto;margin-top:10px\">
\t\t\t<div id=\"mot_de_passe_oubl\"style=\"\">نسيت كلمة السر؟</div>
\t\t\t<a id=\"\" href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("innovit_general_homepage", array("name" => "Accueil"));
        echo "\"><div id=\"login_inscription\" style=\"\">التسجيل من هنا</div></a>
\t\t</div>
\t</div>
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
        return array (  56 => 26,  31 => 3,  28 => 2,);
    }
}
