<?php

/* InnovitProfilBundle:profil:paramets.html.twig */
class __TwigTemplate_a5ac097fb690d9dc6a12e4139d3bd357abfd2cf3f6f59a85bff19a99d92fa3a4 extends Twig_Template
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
        echo "
<div id=\"parametres\" class=\"\" style=\"\">

<div id=\"\" class=\"prog_chaque_matrs\" style=\"\">
تعديل المعلومات
</div>
<div id=\"\" class=\"\" style=\"margin-top:20px;margin-right:30px\">
تغير معلوماتي
</div>
<div class=\"inputs_para\" class=\"\" style=\"opacity:1\">
\t\t\t\t\t<form action=\"\" method=\"post\" >
\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"الإسم\" type=\"text\" ></input></br> 
\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"النسب\" type=\"text\" ></input></br> 
\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"المدرسة\" type=\"text\" ></input></br> 
\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"المدينة\" type=\"text\" ></input></br>  
\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"البريد الإلكتروني\" type=\"text\" ></input></br>  
\t\t\t\t\t
\t\t\t\t\t<label id=\"label_choix_niveau\">Niveau</label> 
\t\t\t\t\t\t<select  id=\"choix_niveau\" name=\"choix\">
\t\t\t\t\t\t\t<option value=\"choix1\">Choix 1</option>
\t\t\t\t\t\t\t<option value=\"choix2\">Choix 2</option>
\t\t\t\t\t\t\t<option value=\"choix3\">Choix 3</option>
\t\t\t\t\t\t\t<option value=\"choix4\">Choix 4</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t
\t\t\t\t\t<input class=\"input_inscription Confirmation_de_mot_de_passe\" required=\"required\" id=\"\" class=\"\"  placeholder=\"التحقق من كلمة السر\" type=\"password\" ></input></br> \t
\t\t\t\t\t
\t\t\t\t\t<div id=\"btn_insc\" style=\"\">
\t\t\t\t\t\t<input  style=\"\" value=\"حفظ\"  placeholder=\"Login \" type=\"submit\" ></input>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</form>
</div>

<div id=\"\" class=\"\" style=\"margin-top:20px;margin-right:30px\">
Changer mon mot de passe:
</div>

<div class=\"inputs_para\" class=\"\" style=\"opacity:1\">
\t\t\t\t\t<form action=\"\" method=\"post\" >
\t\t\t\t\t<input class=\"input_inscription Confirmation_de_mot_de_passe\" style=\"\" required=\"required\"  placeholder=\"كلمة السر القديمة\" type=\"password\" ></input></br> 
\t\t\t\t\t<input class=\"input_inscription\"  style=\"\"  placeholder=\"كلمة السر الجديدة\" type=\"password\" ></input></br>
\t\t\t\t\t<div id=\"btn_insc\" style=\"\">
\t\t\t\t\t\t<input  style=\"\" value=\"تعديل\"  placeholder=\"Login \" type=\"submit\" ></input>
\t\t\t\t\t</div> \t\t\t\t\t
\t\t\t\t\t</form>
</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:profil:paramets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
