<?php

/* InnovitProfilBundle:profil:cours_matieres.html.twig */
class __TwigTemplate_b50b4f14540dcb27b0d80fd4ca94865086d3c7c92332c4f8149d5d03e17001ac extends Twig_Template
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
 

<div id=\"cours\">
\t<div id=\"titre_cours\" class=\"\">
    :لائحة الدروس
\t</div>
\t<div id=\"espace_cours\">
";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "\t
\t
\t<div id=\"liste_cours\" style=\"\">
\t<div id=\"titre_cours_mat\" class=\"\" style=\"\">الجهاز التنفسي </div>
\t<div id=\"check_cours_mat\" class=\"\" style=\"\"> <input type=\"checkbox\" name=\"option1\" value=\"Milk\"> </div>
\t
\t<div class=\"signler_cours\" class=\"\" title=\"\" style=\"\"></div>
\t</div >
\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t</div>

</div>  


<div id=\"matrs\">
";
        // line 30
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("InnovitProfilBundle:Menu:matCours"));
        echo "
</div>  

</div>
\t<script  src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("scripts/mtrs_cours.js"), "html", null, true);
        echo "\" ></script>
</div>
\t
\t<script>
\t\tvar lk2=\"http://127.0.0.1/Symfony/web/app_dev.php/\";
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
        return array (  74 => 34,  67 => 30,  59 => 24,  41 => 15,  26 => 2,  20 => 1,);
    }
}
