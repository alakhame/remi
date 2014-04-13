<?php

/* WebProfilerBundle:Collector:logger.html.twig */
<<<<<<< HEAD:Symfony/app/cache/dev/twig/f7/10/97e90c81533fc11a4f8ba3dec1363fbc5ebef714c9a2193caf630539188c.php
class __TwigTemplate_f71097e90c81533fc11a4f8ba3dec1363fbc5ebef714c9a2193caf630539188c extends Twig_Template
=======
class __TwigTemplate_2527bad3af338eff5b2bfbc9b118be454aeb7db029c2c9fed0e8b001d707dd82 extends Twig_Template
>>>>>>> d72be4b35380f578e5d74bc289ab281c213faea4:Symfony/app/cache/dev/twig/25/27/bad3af338eff5b2bfbc9b118be454aeb7db029c2c9fed0e8b001d707dd82.php
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
        // line 3
        $context["logger"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors") || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations"))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"15\" height=\"28\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==\" />
            ";
            // line 9
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors")) {
                // line 10
                echo "                ";
                $context["status_color"] = "red";
                // line 11
                echo "            ";
            } else {
                // line 12
                echo "                ";
                $context["status_color"] = "yellow";
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            $context["error_count"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors") + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations"));
            // line 15
            echo "            <span class=\"sf-toolbar-status sf-toolbar-status-";
            echo twig_escape_filter($this->env, (isset($context["status_color"]) ? $context["status_color"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : null), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors")) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Exception</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 24
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations")) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Deprecated Calls</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 31
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : null))));
            // line 32
            echo "    ";
        }
    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
        // line 36
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAgCAYAAAAMq2gFAAABjElEQVRIx2MIDw+vd3R0/GFvb/+fGtjFxeVJSUmJ1f///5nv37/PAMMMzs7OVLMEhoODgy/k5+cHJCYmagAtZAJbRG1L0DEwxCYALeOgiUXbt2+/X1NT8xTEdnd3/wi0SI4mFgHBDCBeCLXoF5BtwkCEpvNAvB8JnydCTwgQR0It+g1kWxNjUQEQOyDhAiL0gNUiWWRDjEUOyMkUZsCoRaMWjVpEvEVkFkGjFmEUqgc+fvx4hVYWIReqzi9evKileaoDslnu3LkTNLQtGk3edLPIycnpL9Bge5pb1NXVdQNosDmGRcAm7F+QgKur6783b95cBQoeRGv1kII3QPOdAoZF8+fPP4PUqnx55syZVKCEI1rLh1hsAbWEZ8aMGaUoFoFcMG3atKdIjfSPISEhawICAlaQgwMDA1f6+/sfB5rzE2Sej4/PD3C7DkjoAHHVoUOHLpSVlX3w8vL6Sa34Alr6Z8WKFaCoMARZxAHEoFZ/HBD3A/FyIF4BxMvIxCC964F4G6hZDMTxQCwJAGWE8pur5kFDAAAAAElFTkSuQmCC\" alt=\"Logger\"></span>
    <strong>Logs</strong>
    ";
        // line 39
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors") || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations"))) {
            // line 40
            echo "        ";
            $context["error_count"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "counterrors") + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countdeprecations"));
            // line 41
            echo "        <span class=\"count\">
            <span>";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : null), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 45
        echo "</span>
";
    }

    // line 48
    public function block_panel($context, array $blocks = array())
    {
        // line 49
        echo "    <h2>Logs</h2>

    ";
        // line 51
        $context["priority"] = $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "query"), "get", array(0 => "priority", 1 => 0), "method");
        // line 52
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\">
                    <label for=\"priority\">Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 62
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(100 => "DEBUG", 200 => "INFO", 250 => "NOTICE", 300 => "WARNING", 400 => "ERROR", 500 => "CRITICAL", 550 => "ALERT", 600 => "EMERGENCY", "-100" => "DEPRECATION only"));
        foreach ($context['_seq'] as $context["value"] => $context["text"]) {
            // line 63
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
            echo ((((isset($context["value"]) ? $context["value"] : null) == (isset($context["priority"]) ? $context["priority"] : null))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\">
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 74
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "logs")) {
            // line 75
            echo "        <ul class=\"alt\">
            ";
            // line 76
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "logs"));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                if (((((isset($context["priority"]) ? $context["priority"] : null) >= 0) && ($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "priority") >= (isset($context["priority"]) ? $context["priority"] : null))) || (((isset($context["priority"]) ? $context["priority"] : null) < 0) && ((($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type"), 0)) : (0)) == (isset($context["priority"]) ? $context["priority"] : null))))) {
                    // line 77
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index")), "html", null, true);
                    if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "priority") >= 400)) {
                        echo " error";
                    } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "priority") >= 300)) {
                        echo " warning";
                    }
                    echo "\">
                    ";
                    // line 78
                    echo $context["logger"]->getdisplay_message($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), (isset($context["log"]) ? $context["log"] : null));
                    echo "
                </li>
            ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            if (!$context['_iterated']) {
                // line 81
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "        </ul>
    ";
        } else {
            // line 85
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    // line 92
    public function getdisplay_message($_log_index = null, $_log = null)
    {
        $context = $this->env->mergeGlobals(array(
            "log_index" => $_log_index,
            "log" => $_log,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 93
            echo "    ";
            if ((twig_constant("Symfony\\Component\\HttpKernel\\Debug\\ErrorHandler::TYPE_DEPRECATION") == (($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type"), 0)) : (0)))) {
                // line 94
                echo "        DEPRECATION -  ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message"), "html", null, true);
                echo "
        ";
                // line 95
                $context["id"] = ("sf-call-stack-" . (isset($context["log_index"]) ? $context["log_index"] : null));
                // line 96
                echo "        <a href=\"#\" onclick=\"Sfjs.toggle('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "', document.getElementById('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "-on'), document.getElementById('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "-off')); return false;\">
            <img class=\"toggle\" id=\"";
                // line 97
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "-off\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:none\">
            <img class=\"toggle\" id=\"";
                // line 98
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "-on\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:inline\">
        </a>
        ";
                // line 100
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context"), "stack"));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (((isset($context["index"]) ? $context["index"] : null) > 1)) {
                        // line 101
                        echo "            ";
                        if (((isset($context["index"]) ? $context["index"] : null) == 2)) {
                            // line 102
                            echo "                <ul class=\"sf-call-stack\" id=\"";
                            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                            echo "\" style=\"display: none\">
            ";
                        }
                        // line 104
                        echo "            ";
                        if ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "class", array(), "any", true, true)) {
                            // line 105
                            echo "                ";
                            $context["from"] = (($this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "class")) . "::") . $this->env->getExtension('code')->abbrMethod($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "function")));
                            // line 106
                            echo "            ";
                        } elseif ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "function", array(), "any", true, true)) {
                            // line 107
                            echo "                ";
                            $context["from"] = $this->env->getExtension('code')->abbrMethod($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "function"));
                            // line 108
                            echo "            ";
                        } elseif ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "file", array(), "any", true, true)) {
                            // line 109
                            echo "                ";
                            $context["from"] = $this->getAttribute((isset($context["call"]) ? $context["call"] : null), "file");
                            // line 110
                            echo "            ";
                        } else {
                            // line 111
                            echo "                ";
                            $context["from"] = "-";
                            // line 112
                            echo "            ";
                        }
                        // line 113
                        echo "
            <li>Called from ";
                        // line 114
                        echo ((($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["call"]) ? $context["call"] : null), "line", array(), "any", true, true))) ? ($this->env->getExtension('code')->formatFile($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "file"), $this->getAttribute((isset($context["call"]) ? $context["call"] : null), "line"), (isset($context["from"]) ? $context["from"] : null))) : ((isset($context["from"]) ? $context["from"] : null)));
                        echo "</li>

            ";
                        // line 116
                        echo ((((isset($context["index"]) ? $context["index"] : null) == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context"), "stack")) - 1))) ? ("</ul>") : (""));
                        echo "
        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "    ";
            } else {
                // line 119
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "priorityName"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message"), "html", null, true);
                echo "
        ";
                // line 120
                if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context"))))) {
                    // line 121
                    echo "            <br />
            <small>
                <strong>Context</strong>: ";
                    // line 123
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context"), (64 | 256)), "html", null, true);
                    echo "
            </small>
        ";
                }
                // line 126
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD:Symfony/app/cache/dev/twig/f7/10/97e90c81533fc11a4f8ba3dec1363fbc5ebef714c9a2193caf630539188c.php
        return array (  414 => 126,  407 => 123,  400 => 120,  370 => 114,  367 => 113,  364 => 112,  361 => 111,  358 => 110,  354 => 109,  351 => 108,  340 => 105,  336 => 104,  325 => 101,  286 => 94,  282 => 93,  270 => 92,  262 => 85,  258 => 83,  236 => 78,  209 => 76,  206 => 75,  156 => 51,  144 => 45,  733 => 345,  728 => 344,  724 => 342,  720 => 340,  710 => 337,  705 => 336,  702 => 335,  697 => 334,  688 => 327,  685 => 326,  682 => 325,  678 => 323,  668 => 320,  663 => 319,  660 => 318,  655 => 317,  646 => 310,  643 => 309,  640 => 308,  637 => 307,  633 => 305,  629 => 303,  621 => 300,  613 => 298,  609 => 296,  604 => 295,  598 => 293,  593 => 292,  590 => 291,  585 => 290,  577 => 284,  574 => 283,  570 => 281,  567 => 280,  564 => 279,  561 => 278,  557 => 276,  551 => 272,  547 => 270,  540 => 268,  537 => 267,  528 => 262,  518 => 256,  511 => 254,  508 => 253,  499 => 248,  495 => 246,  479 => 238,  472 => 236,  454 => 226,  443 => 222,  440 => 221,  432 => 215,  426 => 213,  422 => 211,  411 => 207,  391 => 119,  387 => 195,  374 => 192,  369 => 191,  338 => 185,  334 => 183,  323 => 181,  318 => 100,  315 => 179,  303 => 176,  288 => 174,  220 => 108,  212 => 104,  191 => 98,  175 => 63,  168 => 90,  214 => 67,  170 => 62,  151 => 58,  116 => 47,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 245,  489 => 244,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  447 => 172,  439 => 168,  431 => 164,  415 => 156,  403 => 121,  396 => 143,  392 => 141,  388 => 118,  381 => 137,  377 => 116,  373 => 134,  366 => 131,  356 => 127,  350 => 188,  347 => 107,  335 => 122,  332 => 121,  329 => 102,  320 => 113,  317 => 112,  309 => 106,  306 => 105,  300 => 175,  297 => 101,  292 => 95,  275 => 94,  272 => 93,  242 => 81,  238 => 79,  234 => 78,  223 => 73,  216 => 106,  213 => 70,  210 => 69,  203 => 74,  179 => 60,  176 => 59,  169 => 58,  153 => 51,  132 => 42,  128 => 50,  91 => 24,  145 => 54,  99 => 41,  86 => 21,  174 => 63,  113 => 22,  135 => 61,  123 => 20,  139 => 60,  103 => 43,  64 => 15,  95 => 33,  82 => 32,  21 => 2,  23 => 3,  119 => 35,  73 => 37,  68 => 24,  20 => 1,  94 => 54,  83 => 20,  61 => 35,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 258,  512 => 149,  505 => 148,  502 => 249,  497 => 146,  491 => 144,  488 => 143,  483 => 240,  473 => 134,  469 => 235,  466 => 131,  460 => 230,  455 => 176,  450 => 224,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 214,  423 => 160,  420 => 111,  416 => 110,  413 => 109,  408 => 206,  394 => 198,  390 => 103,  375 => 101,  365 => 99,  362 => 189,  359 => 128,  355 => 95,  348 => 91,  344 => 106,  330 => 89,  327 => 88,  321 => 86,  307 => 97,  302 => 84,  295 => 96,  287 => 80,  279 => 78,  256 => 73,  251 => 81,  239 => 69,  231 => 68,  219 => 72,  201 => 102,  143 => 49,  138 => 44,  134 => 41,  131 => 95,  122 => 36,  108 => 31,  102 => 60,  92 => 24,  84 => 28,  48 => 10,  312 => 98,  308 => 94,  293 => 92,  285 => 96,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 87,  253 => 85,  249 => 84,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 68,  147 => 98,  127 => 39,  112 => 43,  96 => 25,  76 => 24,  71 => 18,  55 => 8,  114 => 32,  109 => 31,  106 => 63,  85 => 21,  77 => 18,  28 => 3,  39 => 7,  89 => 60,  65 => 23,  63 => 17,  58 => 17,  34 => 12,  26 => 9,  98 => 26,  88 => 23,  46 => 13,  36 => 5,  43 => 12,  50 => 14,  38 => 6,  27 => 3,  227 => 75,  224 => 77,  221 => 90,  207 => 70,  197 => 74,  195 => 64,  192 => 65,  189 => 64,  186 => 60,  181 => 122,  178 => 61,  173 => 58,  162 => 59,  158 => 78,  155 => 77,  152 => 49,  142 => 52,  136 => 44,  130 => 40,  100 => 27,  78 => 17,  75 => 16,  53 => 11,  24 => 4,  25 => 35,  19 => 1,  79 => 25,  74 => 17,  72 => 33,  69 => 37,  60 => 14,  47 => 9,  40 => 6,  22 => 2,  267 => 90,  185 => 58,  182 => 61,  177 => 56,  165 => 89,  159 => 52,  148 => 66,  133 => 87,  125 => 49,  120 => 19,  117 => 36,  110 => 31,  105 => 30,  101 => 27,  87 => 32,  80 => 26,  67 => 12,  57 => 13,  54 => 12,  51 => 11,  44 => 11,  42 => 8,  35 => 6,  32 => 5,  29 => 3,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 101,  193 => 63,  187 => 62,  183 => 62,  180 => 96,  171 => 54,  166 => 60,  163 => 55,  160 => 54,  157 => 48,  149 => 48,  146 => 41,  140 => 46,  137 => 42,  129 => 36,  124 => 35,  121 => 80,  118 => 36,  115 => 44,  111 => 33,  107 => 30,  104 => 39,  97 => 61,  93 => 23,  90 => 34,  81 => 19,  70 => 13,  66 => 18,  62 => 12,  59 => 13,  56 => 16,  52 => 21,  49 => 10,  45 => 9,  41 => 10,  37 => 5,  33 => 4,  30 => 3,);
=======
        return array (  363 => 126,  357 => 123,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  321 => 112,  318 => 111,  306 => 107,  291 => 102,  274 => 97,  265 => 96,  263 => 95,  255 => 93,  231 => 83,  212 => 78,  202 => 77,  190 => 76,  672 => 345,  668 => 344,  664 => 342,  660 => 340,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  629 => 326,  626 => 325,  622 => 323,  613 => 320,  609 => 319,  606 => 318,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  527 => 281,  525 => 280,  522 => 279,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 230,  418 => 224,  412 => 222,  410 => 221,  400 => 214,  397 => 213,  383 => 207,  376 => 205,  367 => 198,  353 => 121,  347 => 191,  317 => 185,  313 => 183,  304 => 181,  297 => 104,  295 => 178,  288 => 101,  205 => 108,  188 => 102,  184 => 101,  175 => 65,  161 => 63,  118 => 49,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 226,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 206,  373 => 156,  361 => 195,  351 => 120,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 188,  325 => 129,  323 => 128,  320 => 127,  315 => 110,  303 => 106,  300 => 105,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  207 => 75,  200 => 72,  197 => 104,  194 => 70,  191 => 67,  185 => 74,  181 => 65,  178 => 66,  172 => 64,  153 => 56,  150 => 55,  58 => 14,  110 => 22,  84 => 24,  174 => 65,  167 => 117,  113 => 48,  170 => 96,  137 => 66,  124 => 56,  97 => 41,  90 => 26,  34 => 12,  100 => 39,  76 => 25,  53 => 12,  23 => 3,  165 => 60,  134 => 54,  126 => 81,  70 => 19,  65 => 35,  20 => 1,  77 => 20,  127 => 60,  114 => 66,  104 => 32,  81 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 197,  362 => 110,  360 => 109,  355 => 143,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 120,  294 => 90,  285 => 175,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 58,  132 => 51,  128 => 60,  107 => 36,  61 => 15,  273 => 174,  269 => 94,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 85,  230 => 82,  227 => 81,  224 => 81,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 98,  159 => 90,  143 => 51,  135 => 62,  119 => 40,  102 => 40,  71 => 38,  67 => 20,  63 => 18,  59 => 11,  38 => 7,  94 => 34,  89 => 34,  85 => 24,  75 => 19,  68 => 35,  56 => 11,  87 => 34,  21 => 2,  26 => 9,  93 => 27,  88 => 25,  78 => 26,  46 => 10,  27 => 3,  44 => 9,  31 => 3,  28 => 3,  201 => 106,  196 => 90,  183 => 82,  171 => 61,  166 => 95,  163 => 62,  158 => 62,  156 => 62,  151 => 59,  142 => 59,  138 => 54,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 12,  49 => 11,  24 => 4,  25 => 35,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 93,  157 => 89,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 20,  115 => 43,  111 => 47,  108 => 19,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 27,  66 => 34,  55 => 13,  52 => 12,  50 => 28,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 75,  182 => 66,  176 => 63,  173 => 65,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 75,  147 => 54,  144 => 49,  141 => 51,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 45,  103 => 49,  99 => 31,  95 => 28,  92 => 27,  86 => 41,  82 => 28,  80 => 27,  73 => 24,  64 => 13,  60 => 20,  57 => 12,  54 => 11,  51 => 21,  48 => 9,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
>>>>>>> d72be4b35380f578e5d74bc289ab281c213faea4:Symfony/app/cache/dev/twig/25/27/bad3af338eff5b2bfbc9b118be454aeb7db029c2c9fed0e8b001d707dd82.php
    }
}
