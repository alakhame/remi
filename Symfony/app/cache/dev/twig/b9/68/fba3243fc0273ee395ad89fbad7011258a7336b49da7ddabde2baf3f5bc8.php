<?php

/* InnovitGeneralBundle:General:Layoutgeneral.php.twig */
class __TwigTemplate_b968fba3243fc0273ee395ad89fbad7011258a7336b49da7ddabde2baf3f5bc8 extends Twig_Template
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
        echo "<!DOCTYPE html>

<html id=\"\" class=\"\" lang=\"ar\">

\t<head>
\t<meta charset=\"utf-8\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/css.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
\t</head>
\t 
\t<body id=\"body_acc\" class=\"\" style=\"\" onscroll=\"scroll();\" >
\t\t<script  src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/jquery.js"), "html", null, true);
        echo "\" > </script>
\t\t<div id=\"menu\" onmouseover=\"javascript:aff_menu_vole()\" onmouseout=\"javascript:msq_menu_vole()\" style=\"\">
\t
\t\t\t<div id=\"menu_a\" style=\"\">\t
\t\t\t<div id=\"menu_vol\" style=\"\"><div id=\"tri_vol\" style=\"\"></div></div>
\t\t\t\t<div id=\"menu_a_5\" onmouseover=\"\" onclick=\"javascript:aff_opac(5)\"><div id=\"menu_5\" style=\"\">تواصل معنا</div></div>
\t\t\t\t<div id=\"menu_a_3\" onmouseover=\"\" onclick=\"javascript:aff_actus() ;aff_opac(4)\"><div id=\"menu_3\" style=\"\">مستجدات</div></div>
\t\t\t\t<div id=\"menu_a_2\" onmouseover=\"\" onclick=\"javascript:aff_qsnous() ;aff_opac(3)\"><div id=\"menu_2\" style=\"\" >من نحن؟</div></div>
\t\t\t\t<div id=\"menu_a_4\" onmouseover=\"\" onclick=\"javascript:aff_liens() ;aff_opac(2)\"><div id=\"menu_4\" style=\"\" >مواقع مفيدة</div></div>
\t\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("innovit_homepage");
        echo "\"><div id=\"menu_a_1\" onmouseover=\"\" onclick=\"javascript:aff_opac(1)\">
\t\t\t\t\t<div id=\"menu_1\" style=\"\" > 
\t\t\t\t\t\tالرئسية 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<div id=\"\" onclick=\"javascript:aff_g(1)\"><div id=\"sing_in\" style=\"\" >تسجيل الدخول</div></div>
\t\t
\t\t\t</div>


\t\t</div>
          
\t\t<div id=\"corp_general\" style=\"\"> 
\t\t\t<div id=\"Entete_general\" style=\"\">
\t\t\t    <div id=\"acc_desous\">\t\t\t\t\t\t
\t\t\t\t\t<div id=\"video_tab\" style=\"\">
\t\t\t\t\t<iframe width=\"100%\" height=\"100%\" src=\"//www.youtube.com/embed/y9Bbk-hICmk?rel=0\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"video_tab_ret\" style=\"\">إغلاق</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t<div id=\"box_g\" onmouseover=\"javascript:aff_scd_play()\" onmouseout=\"javascript:aff_scd_logo()\" style=\"\">
\t\t\t
\t\t\t\t\t<div id=\"logo_general\" style=\"\">
\t\t\t\t\t\t<img id=\"logo_image\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" style=\"\"/>
\t\t\t\t\t</div> 
\t\t\t\t\t<div id=\"grand_titre_general\" style=\"\">
\t\t\t\t\t\tSTUDENTS COATCHING
\t\t\t\t\t</div>  
\t\t\t\t 
\t\t\t\t\t<div id=\"grand_text_general\" style=\"\">
\t\t\t\t\t\tNouvelle vision d'accompagnement des étudiants pour un avenir educatif solide.
\t\t\t\t\t</div>
\t\t\t\t 
\t\t\t\t\t<div id=\"inscription_bnt\" style=\"\">
\t\t\t\t\tالتسجيل
\t\t\t\t\t</div>
\t\t\t\t\t
               \t\t\t\t 
\t\t\t\t</div>  
                 \t\t\t
\t\t\t\t
\t\t\t</div>     
\t\t\t<div id=\"div_globale\">\t
\t\t\t\t<div id=\"div_gauche_sep\" class=\"\" style=\"\">        
\t\t\t\t\t<div id=\"div_gauche_titre\" class=\"\" style=\"\">
\t\t\t\t\t\t 
\t\t\t\t\t</div>\t\t \t
\t\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t\t<div id=\"inscription\" class=\"\" style=\"\">
\t\t\t\t
\t\t\t\t\t<div id=\"partie_1_titre\">
\t\t\t\t\t\t<div id=\"partie_1_titre_trai\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"partie_1_titre_text\">
\t\t\t\t\t\t\tحساب جديد
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"insc\" class=\"\" style=\"\">\t\t  
\t\t\t\t\t\t<div id=\"inputs\" class=\"\" style=\"opacity:1\">
\t\t\t\t\t\t<form action=\"\" method=\"post\" >
\t\t\t\t\t\t\t<div class=\"input_rs\">
\t\t\t\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"الإسم العائلي\" type=\"text\" ></input> 
\t\t\t\t\t\t\t\t<input class=\"input_inscription\" style=\"margin-top:0px\"  placeholder=\"الإسم الشخصي\" type=\"text\" ></input>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input_rs\">
\t\t\t\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"تأكيد كلمة السر\" type=\"password\" ></input>
\t\t\t\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"كلمة السر\" type=\"password\" ></input>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input_rs\">
\t\t\t\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"مدينتك\" type=\"text\" ></input>  
\t\t\t\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"مدرستك\" type=\"text\" ></input>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input_rs\">
\t\t\t\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"بريدك ألإلكتروني\" type=\"text\" ></input>
\t\t\t\t\t\t\t\t<div class=\"input_inscription inp_nn_inp\">
\t\t\t\t\t\t\t\t\t<select id=\"choix_niveau\">
\t\t\t\t\t\t\t\t\t<option class=\"options\">المستوى السادس إبتدائي</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input_rs\">
\t\t\t\t\t\t\t\t<input id=\"num_nat\" class=\"input_inscription\" \" style=\"\"  placeholder=\"الرقم الوطني/رقم التأجير\" type=\"text\" ></input>
\t\t\t\t\t\t\t\t<div id=\"choix_type\" class=\"input_inscription inp_nn_inp\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"frites\" value=\"oui\" id=\"case1\" checked=\"checked\" /> <label for=\"oui\">تلميذ</label>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"frites\" value=\"non\" id=\"case2\" /> <label for=\"non\">أستاذ</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"btn_insc\" style=\"\">
\t\t\t\t\t\t\t\t<input id=\"btn_insc_btn\"  style=\"\" value=\"التسجيل\"  placeholder=\"تسجيل\" type=\"submit\" ></input>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t\t<div id=\"div_qsnou_liens_actus\" class=\"\" style=\"\">
\t\t\t\t<div id=\"div_qsnous\" class=\"div_les_tr\" style=\"\">        
\t\t\t\t\t<div class=\"qsnous_titre\">
\t\t\t\t\t\t<div class=\"qsnous_titre_text\">
\t\t\t\t\t\tمن نحن، وماهو هدفنا؟
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"div_gauche_qsnous_text1\" class=\"div_gauche_qsnous_text\" style=\"\">    
\t\t\t\t\t\tنظرا لمجموعة من المشاكل التي تعيق التلاميذ وتحول دون التحضير والاستعداد الجيد للامتحانات والتي شكلت باستمرار مبعث استياء العديد من التلاميذ وذويهم، ووعيا منا بأهمية والدور الكبير الذي أصبحت تلعبه المواقع الإلكترونية في حياة التلميذ تم إنشاء هذا الموقع التربوي من أجل التأطير والتوجيه بعد الوقوف على نقط القوة والضعف عند التلميذ في مختلف المواد المُدرسة، وذلك بمعية أساتذة أكفاء ومتخصصين، ملتزمين بالمشاركة وتحقيق الأهداف والنتائج
\t

\t\t\t\t\t\t</br> وفي نفس الإطار دائما يسهر الموقع على تقديم مجموعة من الخدمات التربوية لفائدة التلميذ بعد القيام بعملية التسجيل واجتياز آختبار أولي، ومن بين هذه الخدمات على سبيل المثال فقط لا الحصر ما يلي 

\t\t\t\t\t\t<div class=\"liste_al\">.تسطير برنامج عمل لفائدة التلميذ بعد تحديد مستواه الحقيقي </div>
\t\t\t\t\t\t<div class=\"liste_al\">.تحسين القدرات لدى التلميذ </div>

\t\t\t\t\t\t<div class=\"liste_al\">.ربط قنوات التواصل بين التلميذ والأساتذة لما لذلك من أهمية </div>
\t\t\t\t\t\t<div class=\"liste_al\">.تقديم التأطير والمواكبة من طرف أساتذة أكفاء ومتخصصين </div>
\t\t\t\t\t\t<div class=\"liste_al\">.التتبع والتقييم </div>
\t\t\t\t\t\t<div class=\"liste_al\">.اقتراح اختبارات إضافية في مختلف المواد من اجل التمكن </div>
\t\t\t\t\t\t<div class=\"liste_al\">.اقتراح العديد من المواد التي تناسب مستوى التلميذ من اجل تقوية معارفه </div>

\t\t\t\t\t</div>
\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div id=\"div_actus\" class=\"div_les_tr\" style=\"\">        
\t\t\t\t\t<div class=\"qsnous_titre\">
\t\t\t\t\t\t<div class=\"qsnous_titre_text\">
\t\t\t\t\t\tمستجدات
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"div_actus_ctn\" class=\"div_gauche_qsnous_text\" style=\"\">    
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div id=\"div_liens\" class=\"div_les_tr\" style=\"\">        
\t\t\t\t\t<div class=\"qsnous_titre\">
\t\t\t\t\t\t<div class=\"qsnous_titre_text\">
\t\t\t\t\t\tمواقع مفيدة
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"liens_text\">
\t\t\t\t\tمواقع إلكترونية مفيدة، تهم التوجيه والتأطير المدرسي، الدروس و التقويم بالإضافة الى منتديات لتواصال وتبادل الآراء مع الآخرين
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"div_liens_ctn\" class=\"\" style=\"\">    
\t\t\t\t\t\t<div id=\"div_liens_ctn_1\" class=\"div_liens_ctn_i\"><img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/orient.png"), "html", null, true);
        echo "\" id=\"\" style=\"height:100%;width:100%;\"/></div>
\t\t\t\t\t\t<div id=\"div_liens_ctn_2\" class=\"div_liens_ctn_i\"><img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/book.png"), "html", null, true);
        echo "\" id=\"\" style=\"height:100%;width:100%;\"/></div>
\t\t\t\t\t\t<div id=\"div_liens_ctn_3\" class=\"div_liens_ctn_i\"><img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/forum.png"), "html", null, true);
        echo "\" id=\"\" style=\"height:100%;width:100%;\"/></div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div id=\"div_liens_ctn_desc_titre\" class=\"div_gauche_qsnous_text_desc_titre\" style=\"\">    
\t\t\t\t\t\t<div id=\"div_liens_ctn_1_desc_titre\" class=\"div_liens_ctn_i_desc_titre\"><span class=\"span_tit\">مواقع التوجيه</span><img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/rub.png"), "html", null, true);
        echo "\" class=\"rub\" style=\"\"/></div>
\t\t\t\t\t\t<div id=\"div_liens_ctn_2_desc_titre\" class=\"div_liens_ctn_i_desc_titre\"><span class=\"span_tit\">مواقع الدروس</span><img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/rub.png"), "html", null, true);
        echo "\" class=\"rub\" style=\"\"/></div>
\t\t\t\t\t\t<div id=\"div_liens_ctn_3_desc_titre\" class=\"div_liens_ctn_i_desc_titre\"><span class=\"span_tit\">منتديات مدرسية</span><img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/rub.png"), "html", null, true);
        echo "\" class=\"rub\" style=\"\"/></div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div id=\"glob_cercl\" style=\"\">
\t\t\t\t\t\t<div id=\"cercle1\" class=\"cercles\" style=\"\"></div>
\t\t\t\t\t\t<div id=\"cercle2\" class=\"cercles\" style=\"\"></div>
\t\t\t\t\t\t<div id=\"cercle3\" class=\"cercles\" style=\"\"></div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t</div>\t
\t\t\t
\t\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t
\t\t<div id=\"footer_g\" style=\"\">
\t\t\t<div id=\"partie_5_contactez_nous\" class=\"partie_5_ctn\">
<form action=\"traitement/traitement_message.php\" method=\"post\" enctype=\"multipart/form-data\">
<div id=\"partie_5_contactez_nous_titre\" class=\"partie_5_ctn\">
تواصل معنا
</div>
<div style=\"margin-top:20px\">
<div style=\"margin-right:2.7%\" class=\"input_authentification\">
\t<input  style=\"\" class=\"input\"  placeholder=\"الإسم الكريم\" type=\"text\" id=\"username\" name=\"nom\" required=\"required\" ></input>
</div>

<div style=\"\" class=\"input_authentification\">
\t<input  style=\"\" class=\"input\"  placeholder=\"بريدك الإلكتروني\" type=\"email\" id=\"username\" name=\"mail\" required=\"required\" ></input>
</div>
</div>
<div style=\"margin-top:30px\" class=\"\">
\t<textarea  style=\"\" class=\"input_message\"  placeholder=\"الرسالة\" type=\"text\" id=\"username\" name=\"message\" required=\"required\" ></textarea>
</div>

<div  id=\"div_btn_env\"><input id=\"btn_env\" style=\"\"  value=\"أرسل\" type=\"submit\" name=\"Evoyer\"></input></div>


<div id=\"contacter_nous_footer\">



</div>

</div>
</form>
\t<div id=\"scroll_haut_div\"><div id=\"scroll_haut\"><div id=\"tri_scroll_haut\"></div></div></div>
\t\t</div>
\t</div>
\t\t\t\t
\t</body>
\t<script  src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/script_accueil.js"), "html", null, true);
        echo "\" > </script>\t

\t<script>
\tvar lk='http://localhost/remi/Symfony/web/app_dev.php/general/special/';
\t\tvar nom_page=new Array(\"accueil\",\"login\");\t\t\t
\t\t\t\t\t\t
\t\tfunction aff_g(n){
\t\t\t\$(function() {
\t\t\t\t\$( \"#corp_general\" ).load( lk+nom_page[n]+\".html.twig\" );
\t\t\t});
\t\t}
\t</script>
</html>";
    }

    public function getTemplateName()
    {
        return "InnovitGeneralBundle:General:Layoutgeneral.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 235,  228 => 181,  224 => 180,  220 => 179,  213 => 175,  209 => 174,  205 => 173,  75 => 46,  46 => 20,  34 => 11,  27 => 7,  19 => 1,);
    }
}
