<?php

/* SdzBlogBundle:blog:index.html.twig */
class __TwigTemplate_145b648c0c9ad05e9127e385ef7fb22e98a5976098832adc174cbfd7662583c8 extends Twig_Template
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
        if (isset($context["nom"])) { $_nom_ = $context["nom"]; } else { $_nom_ = null; }
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $_nom_), "html", null, true);
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
        if (isset($context["membre"])) { $_membre_ = $context["membre"]; } else { $_membre_ = null; }
        if (($this->getAttribute($_membre_, "age") < 12)) {
            // line 19
            echo "  Il faut avoir 12 ans pour ce film.
";
        } elseif (($this->getAttribute($_membre_, "age") < 18)) {
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
        if (isset($context["liste_membres"])) { $_liste_membres_ = $context["liste_membres"]; } else { $_liste_membres_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_liste_membres_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 29
            echo "    <li>";
            if (isset($context["membre"])) { $_membre_ = $context["membre"]; } else { $_membre_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_membre_, "pseudo"), "html", null, true);
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
        if (isset($context["webmaster"])) { $_webmaster_ = $context["webmaster"]; } else { $_webmaster_ = null; }
        echo twig_escape_filter($this->env, $_webmaster_, "html", null, true);
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
        return array (  83 => 33,  61 => 28,  31 => 7,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  108 => 31,  102 => 28,  92 => 25,  84 => 21,  48 => 21,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  76 => 31,  71 => 17,  55 => 15,  114 => 22,  109 => 31,  106 => 20,  85 => 22,  77 => 12,  28 => 9,  39 => 7,  89 => 16,  65 => 14,  63 => 13,  58 => 10,  34 => 5,  26 => 6,  98 => 40,  88 => 17,  46 => 12,  36 => 6,  43 => 7,  50 => 7,  38 => 6,  27 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  130 => 42,  100 => 27,  78 => 40,  75 => 24,  53 => 19,  24 => 4,  25 => 3,  19 => 2,  79 => 21,  74 => 14,  72 => 15,  69 => 17,  60 => 12,  47 => 7,  40 => 6,  22 => 2,  267 => 32,  185 => 58,  182 => 57,  177 => 56,  165 => 46,  159 => 45,  148 => 42,  133 => 43,  125 => 39,  120 => 40,  117 => 36,  110 => 20,  105 => 31,  101 => 19,  87 => 35,  80 => 15,  67 => 29,  57 => 11,  54 => 14,  51 => 13,  44 => 19,  42 => 16,  35 => 5,  32 => 4,  29 => 3,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 41,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 39,  111 => 32,  107 => 32,  104 => 28,  97 => 24,  93 => 18,  90 => 25,  81 => 14,  70 => 23,  66 => 13,  62 => 11,  59 => 15,  56 => 25,  52 => 23,  49 => 9,  45 => 6,  41 => 18,  37 => 5,  33 => 4,  30 => 3,);
    }
}
