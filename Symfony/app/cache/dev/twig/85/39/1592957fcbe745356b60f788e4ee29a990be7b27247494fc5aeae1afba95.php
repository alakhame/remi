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
        return array (  134 => 51,  97 => 53,  77 => 38,  226 => 179,  222 => 178,  218 => 177,  211 => 173,  207 => 172,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 233,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  63 => 33,  59 => 28,  94 => 28,  89 => 20,  85 => 25,  75 => 46,  68 => 35,  56 => 9,  21 => 2,  88 => 6,  78 => 21,  44 => 12,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  49 => 19,  25 => 3,  79 => 33,  69 => 25,  47 => 9,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 50,  123 => 71,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 35,  74 => 14,  66 => 15,  52 => 21,  209 => 82,  203 => 171,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 60,  106 => 36,  99 => 31,  95 => 50,  92 => 21,  86 => 28,  82 => 40,  80 => 19,  73 => 37,  64 => 29,  57 => 11,  45 => 21,  60 => 6,  55 => 15,  51 => 14,  43 => 8,  35 => 5,  34 => 11,  37 => 10,  32 => 4,  48 => 13,  42 => 19,  39 => 9,  30 => 7,  26 => 6,  24 => 4,  50 => 23,  41 => 7,  38 => 6,  27 => 7,  23 => 4,  33 => 13,  22 => 2,  19 => 1,  103 => 57,  100 => 27,  93 => 28,  91 => 27,  87 => 25,  81 => 24,  72 => 31,  67 => 15,  62 => 23,  58 => 31,  54 => 25,  46 => 20,  40 => 17,  36 => 5,  29 => 3,  20 => 1,  31 => 5,  28 => 7,);
    }
}
