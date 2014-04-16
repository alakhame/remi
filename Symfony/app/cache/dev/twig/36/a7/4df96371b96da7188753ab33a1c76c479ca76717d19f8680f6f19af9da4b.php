<?php

/* InnovitGeneralBundle:General:accueil.html.twig */
class __TwigTemplate_36a74df96371b96da7188753ab33a1c76c479ca76717d19f8680f6f19af9da4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("InnovitGeneralBundle:General:general.html.twig");

        $this->blocks = array(
            'milieu' => array($this, 'block_milieu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "InnovitGeneralBundle:General:general.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_milieu($context, array $blocks = array())
    {
        // line 3
        echo "<div id=\"div_gauche\" class=\"\" style=\"\">        
\t\t\t\t<div id=\"slider\" class=\"\" style=\"\">
\t
\t
\t<div id=\"division_slider_show\" style=\"\">

\t<div id=\"division_slider_show_SPANS\" style=\"\">
\t<div id=\"div1\" style=\"display:inline-block\">
\t1
\t</div>
\t<div id=\"div2\" style=\"margin-left:20px;display:inline-block\">
\t2
\t</div>
\t<div id=\"div3\" style=\"margin-left:20px;display:inline-block;\">
\t3
\t</div>
\t<div id=\"div4\" style=\"margin-left:20px;display:inline-block;\">
\t4
\t</div>
\t</div>
\t\t
\t\t
\t
\t
<div id=\"division_slider_show_image\" style=\"\">
\t\t
\t<div id=\"sls1\"  style=\"\">
\t<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image1.jpg"), "html", null, true);
        echo "\" style=\"height:100%;width:100%\"/>
\t</div>
\t
\t<div id=\"sls2\"  style=\"\">
\t<img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image2.jpg"), "html", null, true);
        echo "\" style=\"height:100%;width:100%\"/>
\t</div>
\t
\t<div id=\"sls3\"  style=\"\">
\t<img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image3.jpg"), "html", null, true);
        echo "\" style=\"height:100%;width:100%\"/>
\t</div>
\t
\t<div id=\"sls4\"  style=\"\">
\t<img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/image4.jpg"), "html", null, true);
        echo "\" style=\"height:100%;width:100%\"/>
\t</div>
\t\t
</div>
\t
\t</div>    
\t\t\t\t</div>\t\t 
\t\t\t\t
\t\t\t\t<div id=\"div_englobante\" class=\"\" style=\"\">
\t\t\t\t\t<div id=\"sous_div1\" class=\"\" style=\"\">
\t\t\t\t\t\t<img class=\"icone_s_d\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/png/128px/Shape42.png"), "html", null, true);
        echo "\" style=\"\"/>
\t\t\t\t\t\t<div id=\"\" class=\"titre\" style=\"\">
\t\t\t\t\t\t\t<span style=\"\">نصائح قيمة</span><br>\t  
\t\t\t\t\t\t</div>\t\t 
\t\t\t\t\t\t\t 
\t\t\t\t\t</div>       
\t\t\t\t\t<div id=\"sous_div2\" class=\"\" style=\"\">
\t\t\t\t\t\t<img class=\"icone_s_d\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/png/128px/Shape108.png"), "html", null, true);
        echo "\" style=\"\"/>
\t\t\t\t\t\t<div id=\"\" class=\"titre\" style=\"\">
\t\t\t\t\t\t\t<span style=\"\"> مرافقة ذكية</span><br>\t  
\t\t\t\t\t\t</div>\t\t 
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"sous_div3\" class=\"\" style=\"\">
\t\t\t\t\t\t<img class=\"icone_s_d\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo_infor2.png"), "html", null, true);
        echo "\" style=\"\"/>
\t\t\t\t\t\t<div id=\"\" class=\"titre\" style=\"\">
\t\t\t\t\t\t\t<span style=\"\"> تأطير مستمر</span><br>\t  
\t\t\t\t\t\t</div>\t\t 
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>\t

\t\t\t\t<div id=\"acc_desous\">
\t\t\t\t<div class=\"image_acc_desous_div\" id=\"image_acc_desous_div1\">
\t\t\t\t<img class=\"\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/tir.png"), "html", null, true);
        echo "\" style=\"\"/>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div id=\"acc_desous_titre\">\t\t
\t\t\t\tالإعلاميات و التعليم
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div id=\"acc_desous_text\">\t\t
\t\t\t يهدف هذا الموقع الى استخدام التقنيات الحديثة في مجال الإعلاميات وتكنولوجيات الاتصالات في التعليم المدرسي
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t</div>

               \t\t\t
\t\t\t</div>
";
    }

    public function getTemplateName()
    {
        return "InnovitGeneralBundle:General:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 76,  114 => 66,  104 => 59,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  63 => 15,  59 => 28,  94 => 52,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  21 => 2,  88 => 6,  78 => 21,  44 => 12,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  49 => 19,  25 => 3,  79 => 33,  69 => 25,  47 => 9,  37 => 10,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 35,  74 => 38,  66 => 15,  52 => 21,  32 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 29,  57 => 11,  45 => 17,  60 => 30,  55 => 15,  51 => 14,  43 => 8,  35 => 5,  34 => 7,  48 => 13,  42 => 19,  39 => 9,  30 => 7,  26 => 6,  24 => 4,  50 => 23,  41 => 7,  38 => 6,  27 => 4,  23 => 4,  33 => 4,  22 => 2,  19 => 2,  103 => 32,  100 => 27,  93 => 28,  91 => 27,  87 => 25,  81 => 42,  72 => 31,  67 => 34,  62 => 23,  58 => 18,  54 => 25,  46 => 21,  40 => 18,  36 => 5,  29 => 3,  20 => 1,  31 => 3,  28 => 2,);
    }
}
