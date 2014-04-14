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
\t\t\t    يهدف هذا الموقع الى استخدام التقنيات الحديثة في مجال المعلوميات والاتصال،لكونها تمكن من تقوية المؤهلات و القدرات لدى التلاميذ
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
        return array (  127 => 76,  114 => 66,  104 => 59,  94 => 52,  81 => 42,  74 => 38,  67 => 34,  60 => 30,  31 => 3,  28 => 2,);
    }
}
