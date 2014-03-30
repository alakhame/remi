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
        return array (  121 => 73,  107 => 62,  94 => 52,  81 => 42,  74 => 38,  67 => 34,  60 => 30,  31 => 3,  28 => 2,);
    }
}
