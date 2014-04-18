<?php

/* InnovitGeneralBundle:General:qsnous.html.twig */
class __TwigTemplate_f2539e21b3b1c588417de65cf4782d8b1f55bd04a43600b09889319dbb63374a extends Twig_Template
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
        echo "
\t\t<div id=\"div_gauche\" class=\"\" style=\"\">        
\t\t\t<div id=\"ruban\" class=\"titre\" style=\"\">        
\t\t\t \tمن نحن؟
\t\t\t</div>
\t\t<div id=\"div_glob_qsnous\" style=\"\">
\t\t\t<div id=\"div_gauche_qsnous1\" class=\"div_gauche_qsnous\" style=\"\">        
\t\t\t\t<div id=\"div_gauche_qsnous_titre1\" class=\"\" style=\"\">        
\t\t\t\t\t
\t\t\t\t\t<span class=\"span_qsn\" style=\"color:#FF9900;font-size:1.2em\">
\t\t\t\t\tتعريف عام
\t\t\t\t\t</span>
\t\t\t\t\t
\t\t\t\t\t<div id=\"div_gauche_qsnous1_image\" class=\"div_gauche_qsnous_image\" style=\"\"> 
\t\t\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/png/64px/Shape 12.png"), "html", null, true);
        echo "\" style=\"width:100%\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t\t<div id=\"div_gauche_qsnous_text1\" class=\"div_gauche_qsnous_text\" style=\"\">    
\t\t\t\tنظرا لمجموعة من المشاكل التي تعيق التلاميذ وتحول دون التحضير والاستعداد الجيد للامتحانات والتي شكلت باستمرار مبعث استياء العديد من التلاميذ وذويهم، ووعيا منا بأهمية والدور الكبير الذي أصبحت تلعبه المواقع الإلكترونية في حياة التلميذ تم إنشاء هذا الموقع التربوي من أجل التأطير والتوجيه بعد الوقوف على نقط القوة والضعف عند التلميذ في مختلف المواد المُدرسة، وذلك بمعية أساتذة أكفاء ومتخصصين، ملتزمين بالمشاركة وتحقيق الأهداف والنتائج

</br> وفي نفس الإطار دائما يسهر الموقع على تقديم مجموعة من الخدمات التربوية لفائدة التلميذ بعد القيام بعملية التسجيل واجتياز آختبار أولي، ومن بين هذه الخدمات على سبيل المثال فقط لا الحصر ما يلي 

<div class=\"liste_al\">.تسطير برنامج عمل لفائدة التلميذ بعد تحديد مستواه الحقيقي </div>
<div class=\"liste_al\">.اقتراح العديد من المواد التي تناسب مستوى التلميذ من اجل تقوية معارفه </div>
<div class=\"liste_al\">.ربط قنوات التواصل بين التلميذ والأساتذة لما لذلك من أهمية </div>
<div class=\"liste_al\">.تقديم التأطير والمواكبة من طرف أساتذة أكفاء ومتخصصين </div>
<div class=\"liste_al\">.التتبع والتقييم </div>
<div class=\"liste_al\">.اقتراح اختبارات إضافية في مختلف المواد من اجل التمكن </div>
<div class=\"liste_al\">.تحسين القدرات لدى التلميذ </div>

</div>
\t\t\t
\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t
\t\t</div>
\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "InnovitGeneralBundle:General:qsnous.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 17,  31 => 3,  28 => 2,);
    }
}
