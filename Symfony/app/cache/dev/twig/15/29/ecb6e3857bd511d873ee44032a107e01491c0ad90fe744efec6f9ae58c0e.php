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
        return array (  79 => 5,  76 => 4,  37 => 7,  35 => 4,  32 => 3,  29 => 2,  121 => 73,  107 => 62,  94 => 52,  81 => 42,  74 => 38,  67 => 34,  60 => 30,  31 => 3,  28 => 2,);
    }
}
