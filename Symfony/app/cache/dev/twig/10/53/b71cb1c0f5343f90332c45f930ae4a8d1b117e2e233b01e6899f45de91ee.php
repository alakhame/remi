<?php

/* @Security/Collector/security.html.twig */
class __TwigTemplate_1053b71cb1c0f5343f90332c45f930ae4a8d1b117e2e233b01e6899f45de91ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "user")) {
            // line 5
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["color_code"] = ((($this->getAttribute($_collector_, "enabled") && $this->getAttribute($_collector_, "authenticated"))) ? ("green") : ("yellow"));
            // line 6
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["authentication_color_code"] = ((($this->getAttribute($_collector_, "enabled") && $this->getAttribute($_collector_, "authenticated"))) ? ("green") : ("red"));
            // line 7
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["authentication_color_text"] = ((($this->getAttribute($_collector_, "enabled") && $this->getAttribute($_collector_, "authenticated"))) ? ("Yes") : ("No"));
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["color_code"] = (($this->getAttribute($_collector_, "enabled")) ? ("red") : ("black"));
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "user")) {
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Logged in as</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 15
            if (isset($context["color_code"])) { $_color_code_ = $context["color_code"]; } else { $_color_code_ = null; }
            echo twig_escape_filter($this->env, $_color_code_, "html", null, true);
            echo "\">";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "user"), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Authenticated</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 19
            if (isset($context["authentication_color_code"])) { $_authentication_color_code_ = $context["authentication_color_code"]; } else { $_authentication_color_code_ = null; }
            echo twig_escape_filter($this->env, $_authentication_color_code_, "html", null, true);
            echo "\">";
            if (isset($context["authentication_color_text"])) { $_authentication_color_text_ = $context["authentication_color_text"]; } else { $_authentication_color_text_ = null; }
            echo twig_escape_filter($this->env, $_authentication_color_text_, "html", null, true);
            echo "</span>
            </div>
            ";
            // line 21
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if (($this->getAttribute($_collector_, "tokenClass") != null)) {
                // line 22
                echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Token class</b>
                ";
                // line 24
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute($_collector_, "tokenClass"));
                echo "
            </div>
            ";
            }
            // line 27
            echo "        ";
        } elseif ($this->getAttribute($_collector_, "enabled")) {
            // line 28
            echo "            You are not authenticated.
        ";
        } else {
            // line 30
            echo "            The security is disabled.
        ";
        }
        // line 32
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        echo "    ";
        ob_start();
        // line 34
        echo "        <img width=\"24\" height=\"28\" alt=\"Security\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAcCAYAAAB75n/uAAAC70lEQVR42u2V3UtTYRzHu+mFwCwK+gO6CEryPlg7yiYx50vDqUwjFIZDSYUk2ZTmCysHvg9ZVggOQZiRScsR4VwXTjEwdKZWk8o6gd5UOt0mbev7g/PAkLONIOkiBx+25/v89vuc85zn2Q5Fo9F95UDwnwhS5HK5TyqVRv8m1JN6k+AiC+fn54cwbgFNIrTQ/J9IqDcJJDGBHsgDgYBSq9W6ysvLPf39/SSUUU7zsQ1yc3MjmN90OBzfRkZG1umzQqGIxPSTkIBjgdDkaGNjoza2kcFgUCE/QvMsq6io2PV6vQu1tbV8Xl7etkql2qqvr/+MbDE/Pz8s9OP2Cjhwwmw29+4R3Kec1WZnZ4fn5uamc3Jyttra2qbH8ero6JgdHh5+CvFHq9X6JZHgzODgoCVW0NPTY0N+ltU2Nzdv4GqXsYSrPp+vDw80aLFYxru6uhyQ/rDb7a8TCVJDodB1jUazTVlxcXGQ5/mbyE+z2u7u7veY38BVT3Z2djopm5qa6isrK/tQWVn5qb29fSGR4DC4PDAwMEsZHuArjGnyGKutq6v7ajQaF6urq9/MzMz0QuSemJiwQDwGkR0POhhXgILjNTU1TaWlpTxlOp1uyWQyaUjMajMzM8Nut/tJQUHBOpZppbCwkM/KytrBznuL9xDVxBMo8KXHYnu6qKjIivmrbIy67x6Px4Yd58W672ApfzY0NCyNjo7OZmRkiAv8fr+O47iwmABXtoXaG3uykF6vX7bZbF6cgZWqqiqezYkKcNtmjO+CF2AyhufgjsvlMiU7vXEF+4C4ALf9CwdrlVAqlcFkTdRqdQSHLUDgBEeSCrArAsiGwENs0XfJBE6ncxm1D8Aj/B6tigkkJSUlmxSwLYhMDeRsyyUCd+lHrWxtbe2aTCbbZTn1ZD92F0Cr8GBfgnsgDZwDt8EzMBmHMXBLqD0PDMAh9Gql3iRIESQSIAXp4CRIBZeEjIvDFZAm1J4C6UK9ROiZcvCn/+8FvwHtDdJEaRY+oQAAAABJRU5ErkJggg==\" />
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 35
        if (isset($context["color_code"])) { $_color_code_ = $context["color_code"]; } else { $_color_code_ = null; }
        echo twig_escape_filter($this->env, $_color_code_, "html", null, true);
        echo "\"></span>
        ";
        // line 36
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "user")) {
            echo "<div class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "user"), "html", null, true);
            echo "</div>";
        }
        // line 37
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "    ";
        if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => $_profiler_url_)));
    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        // line 42
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAYAAABaKIzgAAADqUlEQVR42u2YXUiTYRTHs6wbg4Toru4iI7qIrgoFv3XOj0BRpoE4U5n4AV6UOg0UhhaKwvLCr2ZeTPwIsbL50Yb5Oc0hrFU2WY55sUJB2wK3qbn+J15jvJhvay9S4MWfPe95znme357znPOOHXO73f+FjkD/OdDQ0FBf5DPo6bi4OC0Wch+WaD/a11vQyxR82KJ9vQUN2QvWarUWPE9CY4xeu1yucfqkZ5Ymyd8H0BBvQcM8gqsgAdmgqJaWlgdRUVEOgUBgLy4uHpqamhLDHsHMC8h/PwihUOiuqKhwNTU12eVyuV0mkzkSEhJ2WaBhvoAKIH/Gfi45Ofmj5+KJiYnvYQ+kwmD8BGzI0tLSzfX19ZmJiQlNa2vrbG1traGnp2fObDbPNTY22vkAZQdfjY2NdbJBpqenKWV+BOsZS6qsrLSvra31ZmVlLdFzUlKSDRnZonF0dLQTV2WEfPgGvYmUu9igSL+ITpMNKhKJtm02mzI9Pd2CNNt0Ol2P1Wp9otfrB1Qqlaazs3M4LS3ts8lkGuQb9EZeXt4q6+5tOxwOIeZOskGbm5uNdXV1wzQeGBgYWlhYaKD7nZGRYYJfaUFBwWJ4ePgOxg/xucsn6BW1Wv0Ui/4Cxam8oS8AHWeDjoyMvMzOzjbjNB2wS4uKijRkl0gkeqfTmY5r5ED/dNjtdhmzVyhfoGehXJziDtOkv+P5LnSeINmg/f39zwC1kpqa+hX2O4A2kl2j0SgxV0vjhoYGPb5sH9+p99/Y2IiLiYn5CYq79w22WOjUfqBVVVU6hUIxRWnFPb4Hyfv6+sbb29ubl5eXJR0dHaMGg0GBzsFbMfnV19efEYvFtwGn25sjgJycnOdQJHxOsEGR2q2lpaXHiLNS3y0pKXm1V/2ZmZm6wsLCWap8vtpTRHV19XUs+OWgtwpAPtTU1FyCf7inPTc314gsPAKkiR0THx+/ib76Dmvv8gF6KyUlRUdjLsFvBv5JbDtOdBG9VI6qV7e1tVm6u7st8/Pzc0aj8YVUKl2h4uQDVEIt5E9AqYrhn7ffHNqSKz8/34BTny0rK3uLwvoUGRm5zdsrtKurq436HDQKjR2gYahGqVS2UJwX8h30b3UEygXK/m3K9bvTy1j+QfE26cVcIonGHHAcsfyABqNCV3+z2AUSF5i3sbQf7estaBB0H1J5VPUgVA5dZFTO2MY4xR2rYvYL8hY0gAkKhsI8dA0KJNGYsXGLOzaY2S/g6A+II1CWfgAh4q3QhpOWjAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
    <strong>Security</strong>
</span>
";
    }

    // line 48
    public function block_panel($context, array $blocks = array())
    {
        // line 49
        echo "    <h2>Security</h2>
    ";
        // line 50
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "user")) {
            // line 51
            echo "        <table>
            <tr>
                <th>Username</th>
                <td>";
            // line 54
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "user"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Authenticated?</th>
                <td>
                    ";
            // line 59
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($_collector_, "authenticated")) {
                // line 60
                echo "                        yes
                    ";
            } else {
                // line 62
                echo "                        no ";
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                if ((!twig_length_filter($this->env, $this->getAttribute($_collector_, "roles")))) {
                    echo "<em>(probably because the user has no roles)</em>";
                }
                // line 63
                echo "                    ";
            }
            // line 64
            echo "                </td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
            // line 68
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($_collector_, "roles")), "html", null, true);
            echo "</td>
            </tr>
            ";
            // line 70
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if (($this->getAttribute($_collector_, "tokenClass") != null)) {
                // line 71
                echo "            <tr>
                <th>Token class</th>
                <td>";
                // line 73
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "tokenClass"), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            // line 76
            echo "        </table>
    ";
        } elseif ($this->getAttribute($_collector_, "enabled")) {
            // line 78
            echo "        <p>
            <em>No token</em>
        </p>
    ";
        } else {
            // line 82
            echo "        <p>
            <em>The security component is disabled</em>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@Security/Collector/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 82,  226 => 78,  211 => 71,  202 => 68,  183 => 60,  171 => 54,  146 => 41,  124 => 35,  118 => 33,  59 => 11,  733 => 345,  728 => 344,  724 => 342,  720 => 340,  710 => 337,  705 => 336,  702 => 335,  688 => 327,  685 => 326,  682 => 325,  678 => 323,  668 => 320,  660 => 318,  646 => 310,  643 => 309,  640 => 308,  637 => 307,  633 => 305,  629 => 303,  621 => 300,  613 => 298,  609 => 296,  604 => 295,  598 => 293,  593 => 292,  590 => 291,  585 => 290,  577 => 284,  574 => 283,  570 => 281,  567 => 280,  564 => 279,  557 => 276,  551 => 272,  540 => 268,  537 => 267,  528 => 262,  522 => 258,  518 => 256,  511 => 254,  508 => 253,  502 => 249,  499 => 248,  495 => 246,  483 => 240,  479 => 238,  472 => 236,  469 => 235,  460 => 230,  454 => 226,  450 => 224,  443 => 222,  440 => 221,  432 => 215,  422 => 211,  411 => 207,  394 => 198,  387 => 195,  369 => 191,  334 => 183,  323 => 181,  315 => 179,  303 => 176,  288 => 174,  220 => 108,  168 => 90,  93 => 22,  49 => 8,  34 => 5,  31 => 4,  864 => 492,  861 => 491,  848 => 489,  843 => 488,  839 => 486,  826 => 485,  799 => 479,  796 => 478,  774 => 476,  756 => 475,  751 => 473,  746 => 472,  741 => 471,  736 => 470,  731 => 469,  726 => 468,  721 => 467,  718 => 466,  715 => 465,  697 => 334,  686 => 462,  670 => 456,  663 => 319,  658 => 453,  655 => 317,  653 => 451,  639 => 449,  634 => 446,  600 => 414,  579 => 411,  561 => 278,  558 => 409,  555 => 408,  547 => 270,  541 => 404,  269 => 136,  225 => 94,  208 => 70,  193 => 63,  190 => 85,  186 => 84,  180 => 59,  157 => 48,  154 => 74,  143 => 71,  129 => 36,  121 => 34,  103 => 45,  97 => 24,  94 => 42,  41 => 6,  28 => 3,  414 => 126,  407 => 123,  400 => 120,  391 => 197,  370 => 114,  361 => 111,  358 => 110,  354 => 109,  351 => 108,  344 => 106,  340 => 105,  336 => 104,  318 => 180,  312 => 178,  307 => 97,  295 => 96,  282 => 93,  262 => 85,  258 => 83,  251 => 81,  224 => 77,  209 => 76,  206 => 75,  175 => 95,  156 => 51,  152 => 49,  149 => 42,  144 => 45,  130 => 40,  127 => 39,  96 => 25,  64 => 11,  48 => 11,  39 => 7,  214 => 67,  196 => 64,  189 => 64,  174 => 63,  170 => 62,  162 => 59,  151 => 58,  134 => 41,  104 => 27,  100 => 27,  82 => 32,  65 => 23,  27 => 3,  95 => 33,  92 => 24,  86 => 21,  83 => 20,  76 => 24,  438 => 160,  435 => 159,  429 => 214,  426 => 213,  417 => 156,  412 => 155,  408 => 206,  405 => 152,  402 => 151,  399 => 150,  386 => 147,  383 => 146,  380 => 145,  374 => 192,  371 => 140,  367 => 113,  364 => 112,  353 => 131,  346 => 129,  343 => 128,  338 => 185,  325 => 101,  322 => 118,  314 => 114,  301 => 107,  290 => 103,  286 => 94,  283 => 100,  278 => 97,  270 => 92,  264 => 89,  261 => 88,  254 => 86,  243 => 79,  240 => 78,  236 => 78,  233 => 76,  228 => 73,  222 => 76,  215 => 73,  212 => 104,  207 => 63,  201 => 102,  194 => 57,  191 => 98,  184 => 53,  173 => 46,  167 => 43,  164 => 77,  123 => 27,  119 => 35,  116 => 47,  113 => 23,  102 => 20,  85 => 21,  81 => 19,  77 => 33,  50 => 14,  36 => 5,  79 => 25,  74 => 17,  72 => 13,  69 => 12,  66 => 13,  60 => 25,  52 => 9,  47 => 9,  45 => 7,  40 => 6,  37 => 5,  22 => 1,  185 => 58,  177 => 82,  165 => 89,  159 => 52,  148 => 42,  137 => 37,  133 => 40,  120 => 38,  117 => 37,  115 => 32,  110 => 31,  107 => 28,  101 => 27,  90 => 21,  87 => 24,  80 => 34,  70 => 15,  67 => 12,  62 => 12,  57 => 24,  54 => 12,  51 => 22,  44 => 7,  42 => 8,  32 => 5,  29 => 6,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 245,  489 => 244,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  455 => 176,  447 => 172,  439 => 168,  431 => 164,  423 => 160,  415 => 156,  403 => 205,  396 => 149,  392 => 141,  388 => 118,  381 => 137,  377 => 193,  373 => 134,  366 => 131,  362 => 189,  359 => 135,  356 => 127,  350 => 188,  347 => 107,  335 => 122,  332 => 121,  329 => 102,  320 => 113,  317 => 115,  309 => 111,  306 => 110,  300 => 175,  297 => 105,  292 => 95,  285 => 96,  275 => 96,  272 => 93,  267 => 32,  257 => 87,  253 => 85,  249 => 83,  242 => 81,  238 => 79,  234 => 78,  227 => 75,  223 => 73,  219 => 92,  216 => 106,  213 => 70,  210 => 69,  203 => 74,  198 => 58,  195 => 64,  192 => 65,  187 => 62,  182 => 57,  179 => 60,  176 => 47,  169 => 80,  166 => 51,  163 => 50,  160 => 49,  153 => 39,  145 => 54,  140 => 38,  132 => 42,  128 => 50,  125 => 49,  122 => 36,  114 => 52,  111 => 30,  108 => 31,  105 => 31,  98 => 26,  91 => 41,  88 => 40,  78 => 17,  75 => 16,  71 => 30,  68 => 24,  63 => 17,  56 => 10,  46 => 13,  43 => 12,  38 => 7,  35 => 6,  33 => 4,  30 => 3,);
    }
}
