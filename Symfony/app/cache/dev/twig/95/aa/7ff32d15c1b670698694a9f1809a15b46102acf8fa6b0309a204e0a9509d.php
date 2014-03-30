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
\t\t\t\t<div id=\"video\" style=\"height:200px\">
\t\t\t\t   <iframe width=\"100%\" height=\"200\" src=\"//www.youtube.com/embed/Yim4--J44gk?rel=0\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div id=\"insc\" class=\"\" style=\"\">
\t\t\t\t\t<div id=\"insc_titre1\" style=\"\">لا تملك حسابا بعد وتريد الإشتراك</div>
\t\t\t\t\t<div id=\"insc_titre2\" style=\"\">تسجل معنا الأن</div>\t\t  
\t\t\t
\t\t\t\t<div id=\"inputs\" class=\"\" style=\"opacity:1\">
\t\t\t\t\t<form action=\"\" method=\"post\" >
\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"الإسم الشخصي\" type=\"text\" ></input></br> 
\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"الإسم العائلي\" type=\"text\" ></input></br> 
\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"كلمة السر\" type=\"password\" ></input></br>
\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"تأكيد كلمة السر\" type=\"password\" ></input></br>
\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"مدرستك\" type=\"text\" ></input></br> 
\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"مدينتك\" type=\"text\" ></input></br>  
\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"بريدك ألإلكتروني\" type=\"text\" ></input></br>  
\t\t\t\t\t<input type=\"radio\" name=\"frites\" value=\"oui\" id=\"case1\" checked=\"checked\" /> <label for=\"oui\">تلميذ</label>
\t\t\t\t\t<input type=\"radio\" name=\"frites\" value=\"non\" id=\"case2\" /> <label for=\"non\">أستاذ</label><br>
\t\t\t\t\t<label id=\"label_choix_niveau\">المستوى</label> 
\t\t\t\t\t\t<select  id=\"choix_niveau\" name=\"choix\">
\t\t\t\t\t\t\t<option value=\"choix1\">السادس إبتدائي</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t<div id=\"btn_insc\" style=\"\">
\t\t\t\t\t\t<input  style=\"\" value=\"Inscription\"  placeholder=\"تسجيل\" type=\"submit\" ></input>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t</div>\t
\t\t</div>
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
        return array (  76 => 4,  81 => 42,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 62,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 34,  63 => 15,  59 => 28,  38 => 6,  94 => 52,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 21,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 73,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 2,  79 => 5,  72 => 31,  69 => 25,  47 => 9,  40 => 18,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 35,  74 => 38,  66 => 15,  55 => 15,  52 => 21,  50 => 23,  43 => 8,  41 => 7,  35 => 4,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 29,  60 => 30,  57 => 11,  54 => 25,  51 => 14,  48 => 13,  45 => 17,  42 => 19,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
