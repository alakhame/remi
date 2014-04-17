<?php

/* InnovitProfilBundle:profil:cours_matieres.html.twig */
class __TwigTemplate_8123bdfffd6aeeab86e24acba8308abb3db487034845ef878816ff9f43bcc183 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'cours_matieres' => array($this, 'block_cours_matieres'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('cours_matieres', $context, $blocks);
    }

    public function block_cours_matieres($context, array $blocks = array())
    {
        // line 2
        echo "<div id=\"div_evolution\" class=\"\" style=\"\">

<div id=\"\" class=\"prog_chaque_matrs\" style=\"\">
إعدادات الدروس
</div>
<div>
<div id=\"matrs\">
";
        // line 9
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("InnovitProfilBundle:Menu:matCours"));
        echo "
</div> 

<div id=\"cours\">
\t<div id=\"titre_cours\" class=\"\">
    :لائحة الدروس
\t</div>


 
\t<div id=\"espace_cours\">
<div id=\"espace_cours_debut\">إختر المادة أعلاه</div>\t


</div>

</div>  




</div>
\t<script  src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/mtrs_cours.js"), "html", null, true);
        echo "\" ></script>
</div>
\t
\t<script>
\t\tvar lk2=\"http://127.0.0.1/remi/Symfony/web/app_dev.php/\";
\t</script>

\t<script>
\t\t
\t\t\tfunction charger(elt){
\t\t\t\telt++;
\t\t\t\t\$(function() {\t\$( \"#espace_cours\" ).load(lk2+\"cours/\"+elt );});\t
\t\t\t}
\t\t
\t\t/*var cours=new Array(\"evolution\",\"test\",\"test_rev\",\"demande_rejoint\",\"cours_matieres\",\"mesprofs\",\"messages\",\"paramets\",\"\",\"\",\"information\");\t\t
\t\t\$(function() {\t\$( \"#div_droite\" ).load(lk2+\"profil/special/\"+nom_page[0]+\".html.twig\" );});\t\t\t\t\t
\t\tfunction aff(n){\$(function() {\$( \"#div_droite\" ).load(lk2+\"profil/special/\"+nom_page[n]+\".html.twig\" );});} */
\t</script>



";
    }

    public function getTemplateName()
    {
        return "InnovitProfilBundle:profil:cours_matieres.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 31,  35 => 9,  26 => 2,  20 => 1,);
    }
}
