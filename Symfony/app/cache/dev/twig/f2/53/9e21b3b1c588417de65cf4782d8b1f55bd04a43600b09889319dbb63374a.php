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
        return array (  97 => 53,  77 => 38,  53 => 21,  137 => 54,  134 => 51,  126 => 74,  84 => 42,  65 => 35,  70 => 37,  127 => 76,  114 => 66,  104 => 59,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  63 => 33,  59 => 28,  94 => 52,  89 => 20,  85 => 25,  75 => 39,  68 => 35,  56 => 26,  21 => 2,  88 => 6,  78 => 21,  44 => 12,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  49 => 19,  25 => 3,  79 => 40,  69 => 25,  47 => 17,  37 => 7,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 50,  123 => 71,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 53,  96 => 31,  83 => 5,  74 => 38,  66 => 15,  52 => 21,  32 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 63,  109 => 60,  106 => 60,  99 => 31,  95 => 50,  92 => 21,  86 => 28,  82 => 40,  80 => 4,  73 => 37,  64 => 29,  57 => 11,  45 => 21,  60 => 33,  55 => 15,  51 => 14,  43 => 19,  35 => 4,  34 => 7,  48 => 13,  42 => 19,  39 => 9,  30 => 7,  26 => 6,  24 => 4,  50 => 23,  41 => 7,  38 => 9,  27 => 4,  23 => 3,  33 => 7,  22 => 2,  19 => 1,  103 => 57,  100 => 56,  93 => 28,  91 => 27,  87 => 25,  81 => 42,  72 => 31,  67 => 34,  62 => 23,  58 => 31,  54 => 25,  46 => 21,  40 => 18,  36 => 5,  29 => 2,  20 => 1,  31 => 3,  28 => 2,);
    }
}
