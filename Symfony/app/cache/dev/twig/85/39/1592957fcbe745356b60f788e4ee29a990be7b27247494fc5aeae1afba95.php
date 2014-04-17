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
        return array (  97 => 53,  77 => 38,  53 => 21,  137 => 54,  134 => 51,  126 => 74,  84 => 42,  65 => 35,  70 => 37,  127 => 76,  114 => 66,  104 => 59,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  63 => 33,  59 => 28,  94 => 52,  89 => 20,  85 => 4,  75 => 39,  68 => 35,  56 => 9,  21 => 2,  88 => 5,  78 => 21,  44 => 12,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  49 => 19,  25 => 3,  79 => 40,  69 => 33,  47 => 9,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 50,  123 => 71,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 53,  96 => 31,  83 => 35,  74 => 38,  66 => 15,  52 => 21,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 63,  109 => 60,  106 => 60,  99 => 31,  95 => 50,  92 => 21,  86 => 28,  82 => 40,  80 => 19,  73 => 37,  64 => 29,  57 => 11,  45 => 21,  60 => 33,  55 => 15,  51 => 14,  43 => 19,  35 => 4,  34 => 4,  37 => 7,  32 => 3,  48 => 13,  42 => 19,  39 => 6,  30 => 7,  26 => 6,  24 => 4,  50 => 23,  41 => 7,  38 => 9,  27 => 4,  23 => 3,  33 => 7,  22 => 2,  19 => 1,  103 => 57,  100 => 56,  93 => 28,  91 => 27,  87 => 25,  81 => 42,  72 => 31,  67 => 34,  62 => 23,  58 => 31,  54 => 25,  46 => 21,  40 => 18,  36 => 5,  29 => 2,  20 => 1,  31 => 3,  28 => 2,);
    }
}
