<?php

/* InnovitProfilBundle:profil:paramets.html.twig */
class __TwigTemplate_3a15437cdc8cce9237e49ecfbb10b9a0b6017cc275e9ace315b6111e4911cdd7 extends Twig_Template
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
PARAMETRES
</div>
<div id=\"\" class=\"\" style=\"margin-top:20px;margin-left:30px\">
Modification de mes informations:
</div>
<div class=\"inputs_para\" class=\"\" style=\"opacity:1\">
\t\t\t\t\t<form action=\"\" method=\"post\" >
\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"nom \" type=\"text\" ></input></br> 
\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"prénom\" type=\"text\" ></input></br> 
\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"école\" type=\"text\" ></input></br> 
\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"ville\" type=\"text\" ></input></br>  
\t\t\t\t\t<input class=\"input_inscription\" style=\"\"  placeholder=\"email\" type=\"text\" ></input></br>  
\t\t\t\t\t
\t\t\t\t\t<label id=\"label_choix_niveau\">Niveau</label> 
\t\t\t\t\t\t<select  id=\"choix_niveau\" name=\"choix\">
\t\t\t\t\t\t\t<option value=\"choix1\">Choix 1</option>
\t\t\t\t\t\t\t<option value=\"choix2\">Choix 2</option>
\t\t\t\t\t\t\t<option value=\"choix3\">Choix 3</option>
\t\t\t\t\t\t\t<option value=\"choix4\">Choix 4</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t
\t\t\t\t\t<input class=\"input_inscription Confirmation_de_mot_de_passe\" required=\"required\" id=\"\" class=\"\"  placeholder=\"Confirmation de mot de passe\" type=\"password\" ></input></br> \t
\t\t\t\t\t
\t\t\t\t\t<div id=\"btn_insc\" style=\"\">
\t\t\t\t\t\t<input  style=\"\" value=\"Modifier\"  placeholder=\"Login \" type=\"submit\" ></input>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</form>
</div>

<div id=\"\" class=\"\" style=\"margin-top:20px;margin-left:30px\">
Changer mon mot de passe:
</div>

<div class=\"inputs_para\" class=\"\" style=\"opacity:1\">
\t\t\t\t\t<form action=\"\" method=\"post\" >
\t\t\t\t\t<input class=\"input_inscription Confirmation_de_mot_de_passe\" style=\"\" required=\"required\"  placeholder=\"ancien mot de passe\" type=\"password\" ></input></br> 
\t\t\t\t\t<input class=\"input_inscription\"  style=\"\"  placeholder=\"nouveau mot de passe\" type=\"password\" ></input></br>
\t\t\t\t\t<div id=\"btn_insc\" style=\"\">
\t\t\t\t\t\t<input  style=\"\" value=\"Modifier\"  placeholder=\"Login \" type=\"submit\" ></input>
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
