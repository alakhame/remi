<?php

/* InnovitGeneralBundle:General:accueil.html.twig */
class __TwigTemplate_e4034242263178a35039919a8348631a485cbec482ba9bb3587fbe52193f872a extends Twig_Template
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

\t<div id=\"division_slider_show_SPANS\" style=\"position:absolute;z-index:5;bottom:10px;left:230px;\">
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
\t\t\t\t\t\t\t<span style=\"color:#33CCCC\">نصائح قيمة</span><br>\t  
\t\t\t\t\t\t</div>\t\t 
\t\t\t\t\t\t<div class=\"text\" class=\"\" style=\"\">
\t\t\t\t\t\t\t<span style=\"\">
\t\t\t\t\t\t\t\tAccomljkxsg ssg sfgsf g sfh sgh sghs g h sg h sg h sg hs g h sg h s gh s h sf h sf h s h sg h sdgh  sdh  sdf h sdh  sdh s dh s gh dg h sdgh </span><br>\t  
\t\t\t\t\t\t</div>\t\t 
\t\t\t\t\t</div>       
\t\t\t\t\t<div id=\"sous_div2\" class=\"\" style=\"\">
\t\t\t\t\t\t<img class=\"icone_s_d\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/png/128px/Shape108.png"), "html", null, true);
        echo "\" style=\"\"/>
\t\t\t\t\t\t<div id=\"\" class=\"titre\" style=\"\">
\t\t\t\t\t\t\t<span style=\"color:#99CC00\"> مرافقة ذكية</span><br>\t  
\t\t\t\t\t\t</div>\t\t 
\t\t\t\t\t\t<div class=\"text\" class=\"\" style=\"\">
\t\t\t\t\t\t\t<span style=\"\">
\t\t\t\t\t\t\t\tAccomljkxsg ssg sfgsf g sfh sgh sghs g h sg h sg h sg hs g h sg h s gh s h sf h sf h s h sg h sdgh  sdh  sdf h sdh  sdh s dh s gh dg h sdgh
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"sous_div3\" class=\"\" style=\"\">
\t\t\t\t\t\t<img class=\"icone_s_d\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo_infor2.png"), "html", null, true);
        echo "\" style=\"\"/>
\t\t\t\t\t\t<div id=\"\" class=\"titre\" style=\"\">
\t\t\t\t\t\t\t<span style=\"color:#FF7F27\"> تأطير مستمر</span><br>\t  
\t\t\t\t\t\t</div>\t\t 
\t\t\t\t\t\t<div class=\"text\" class=\"\" style=\"\">
\t\t\t\t\t\t\t<span style=\"\">
\t\t\t\t\t\t\t\tAccomljkxsg ssg sfgsf g sfh sgh sghs g h sg h sg h sg hs g h sg h s gh s h sf h sf h s h sg h sdgh  sdh  sdf h sdh  sdh s dh s gh dg h sdgh\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t \t
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
        return array (  94 => 52,  83 => 33,  61 => 28,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  108 => 31,  102 => 28,  92 => 25,  84 => 21,  48 => 21,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  76 => 31,  71 => 17,  55 => 15,  114 => 22,  109 => 31,  106 => 20,  85 => 22,  77 => 12,  28 => 2,  39 => 7,  89 => 16,  65 => 14,  63 => 13,  58 => 10,  34 => 5,  26 => 6,  98 => 40,  88 => 17,  46 => 12,  36 => 6,  43 => 7,  50 => 7,  38 => 6,  27 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  130 => 42,  100 => 27,  78 => 40,  75 => 24,  53 => 19,  24 => 4,  25 => 3,  19 => 2,  79 => 21,  74 => 38,  72 => 15,  69 => 17,  60 => 30,  47 => 7,  40 => 6,  22 => 2,  267 => 32,  185 => 58,  182 => 57,  177 => 56,  165 => 46,  159 => 45,  148 => 42,  133 => 43,  125 => 39,  120 => 40,  117 => 36,  110 => 20,  105 => 31,  101 => 19,  87 => 35,  80 => 15,  67 => 34,  57 => 11,  54 => 14,  51 => 13,  44 => 19,  42 => 16,  35 => 5,  32 => 4,  29 => 3,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 41,  129 => 36,  124 => 35,  121 => 73,  118 => 36,  115 => 39,  111 => 32,  107 => 62,  104 => 28,  97 => 24,  93 => 18,  90 => 25,  81 => 42,  70 => 23,  66 => 13,  62 => 11,  59 => 15,  56 => 25,  52 => 23,  49 => 9,  45 => 6,  41 => 18,  37 => 5,  33 => 4,  30 => 3,);
    }
}