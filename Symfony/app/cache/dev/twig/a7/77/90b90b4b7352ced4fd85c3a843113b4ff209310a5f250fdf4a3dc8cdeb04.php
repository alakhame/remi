<?php

/* SdzBlogBundle:blog:index.html.twig */
class __TwigTemplate_a77790b90b4b7352ced4fd85c3a843113b4ff209310a5f250fdf4a3dc8cdeb04 extends Twig_Template
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
        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma première page avec le Site du Zéro !</title>
  </head>
  <body>
   <h1 style=\"color:red\">Hello ";
        // line 9
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["nom"]) ? $context["nom"] : null)), "html", null, true);
        echo "  !</h1>

    <p>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
\t
\t";
        // line 18
        if (($this->getAttribute((isset($context["membre"]) ? $context["membre"] : null), "age") < 12)) {
            // line 19
            echo "  Il faut avoir 12 ans pour ce film.
";
        } elseif (($this->getAttribute((isset($context["membre"]) ? $context["membre"] : null), "age") < 18)) {
            // line 21
            echo "  OK bon film.
";
        } else {
            // line 23
            echo "  Un peu vieux pour voir ce film non ?
";
        }
        // line 25
        echo "

<ul>
  ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_membres"]) ? $context["liste_membres"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 29
            echo "    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : null), "pseudo"), "html", null, true);
            echo "</li>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "    <li>Pas d'utilisateur trouvé.</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</ul>
\t
\t<footer>Responsable du site : ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : null), "html", null, true);
        echo ".</footer>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  107 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  71 => 19,  63 => 15,  59 => 28,  94 => 28,  89 => 20,  85 => 25,  68 => 14,  56 => 9,  21 => 2,  88 => 6,  78 => 21,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  121 => 46,  117 => 44,  105 => 40,  49 => 19,  25 => 3,  69 => 25,  47 => 9,  37 => 10,  246 => 90,  157 => 56,  145 => 46,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 35,  74 => 14,  66 => 15,  52 => 21,  50 => 23,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 29,  57 => 11,  45 => 17,  55 => 15,  51 => 14,  35 => 5,  48 => 13,  42 => 19,  30 => 7,  26 => 6,  24 => 4,  139 => 45,  136 => 56,  128 => 49,  114 => 63,  108 => 36,  102 => 32,  84 => 42,  79 => 33,  75 => 17,  70 => 37,  65 => 35,  60 => 6,  43 => 8,  61 => 13,  53 => 13,  44 => 12,  41 => 7,  39 => 9,  34 => 7,  32 => 4,  38 => 6,  27 => 4,  23 => 3,  33 => 4,  22 => 2,  19 => 2,  103 => 32,  100 => 53,  93 => 28,  91 => 27,  87 => 25,  81 => 24,  72 => 31,  67 => 15,  62 => 23,  58 => 6,  54 => 25,  46 => 21,  40 => 18,  36 => 5,  29 => 3,  20 => 1,  31 => 5,  28 => 9,);
    }
}
