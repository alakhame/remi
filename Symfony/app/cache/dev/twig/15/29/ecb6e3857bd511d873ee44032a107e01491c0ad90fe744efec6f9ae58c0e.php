<?php

/* InnovitGeneralBundle:General:general.html.twig */
class __TwigTemplate_1529ecb6e3857bd511d873ee44032a107e01491c0ad90fe744efec6f9ae58c0e extends Twig_Template
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
\t\t\t\t   <iframe width=\"100%\" height=\"200\"  src=\"//www.youtube.com/embed/y9Bbk-hICmk?rel=0\" frameborder=\"0\" allowfullscreen></iframe>
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
        return array (  94 => 52,  83 => 33,  61 => 28,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  108 => 31,  102 => 28,  92 => 25,  84 => 21,  48 => 21,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  76 => 4,  71 => 17,  55 => 15,  114 => 22,  109 => 31,  106 => 20,  85 => 22,  77 => 12,  28 => 2,  39 => 7,  89 => 16,  65 => 14,  63 => 13,  58 => 10,  34 => 5,  26 => 6,  98 => 40,  88 => 17,  46 => 12,  36 => 6,  43 => 7,  50 => 7,  38 => 6,  27 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  130 => 42,  100 => 27,  78 => 40,  75 => 24,  53 => 19,  24 => 4,  25 => 3,  19 => 2,  79 => 5,  74 => 38,  72 => 15,  69 => 17,  60 => 30,  47 => 7,  40 => 6,  22 => 2,  267 => 32,  185 => 58,  182 => 57,  177 => 56,  165 => 46,  159 => 45,  148 => 42,  133 => 43,  125 => 39,  120 => 40,  117 => 36,  110 => 20,  105 => 31,  101 => 19,  87 => 35,  80 => 15,  67 => 34,  57 => 11,  54 => 14,  51 => 13,  44 => 19,  42 => 16,  35 => 4,  32 => 3,  29 => 2,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 41,  129 => 36,  124 => 35,  121 => 73,  118 => 36,  115 => 39,  111 => 32,  107 => 62,  104 => 28,  97 => 24,  93 => 18,  90 => 25,  81 => 42,  70 => 23,  66 => 13,  62 => 11,  59 => 15,  56 => 25,  52 => 23,  49 => 9,  45 => 6,  41 => 18,  37 => 7,  33 => 4,  30 => 3,);
    }
}
