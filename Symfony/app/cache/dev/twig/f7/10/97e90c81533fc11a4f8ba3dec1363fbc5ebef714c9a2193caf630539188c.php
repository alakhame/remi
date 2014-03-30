<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_f71097e90c81533fc11a4f8ba3dec1363fbc5ebef714c9a2193caf630539188c extends Twig_Template
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
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (($this->getAttribute($_collector_, "counterrors") || $this->getAttribute($_collector_, "countdeprecations"))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"15\" height=\"28\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==\" />
            ";
            // line 9
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($_collector_, "counterrors")) {
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
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["error_count"] = ($this->getAttribute($_collector_, "counterrors") + $this->getAttribute($_collector_, "countdeprecations"));
            // line 15
            echo "            <span class=\"sf-toolbar-status sf-toolbar-status-";
            if (isset($context["status_color"])) { $_status_color_ = $context["status_color"]; } else { $_status_color_ = null; }
            echo twig_escape_filter($this->env, $_status_color_, "html", null, true);
            echo "\">";
            if (isset($context["error_count"])) { $_error_count_ = $context["error_count"]; } else { $_error_count_ = null; }
            echo twig_escape_filter($this->env, $_error_count_, "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($_collector_, "counterrors")) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Exception</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 21
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "counterrors"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 24
            echo "            ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($_collector_, "countdeprecations")) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Deprecated Calls</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
                // line 27
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "countdeprecations"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 31
            echo "        ";
            if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => $_profiler_url_)));
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
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (($this->getAttribute($_collector_, "counterrors") || $this->getAttribute($_collector_, "countdeprecations"))) {
            // line 40
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["error_count"] = ($this->getAttribute($_collector_, "counterrors") + $this->getAttribute($_collector_, "countdeprecations"));
            // line 41
            echo "        <span class=\"count\">
            <span>";
            // line 42
            if (isset($context["error_count"])) { $_error_count_ = $context["error_count"]; } else { $_error_count_ = null; }
            echo twig_escape_filter($this->env, $_error_count_, "html", null, true);
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
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        $context["priority"] = $this->getAttribute($this->getAttribute($_request_, "query"), "get", array(0 => "priority", 1 => 0), "method");
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
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["priority"])) { $_priority_ = $context["priority"]; } else { $_priority_ = null; }
            echo ((($_value_ == $_priority_)) ? (" selected") : (""));
            echo ">";
            if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
            echo twig_escape_filter($this->env, $_text_, "html", null, true);
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
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "logs")) {
            // line 75
            echo "        <ul class=\"alt\">
            ";
            // line 76
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "logs"));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                if (isset($context["priority"])) { $_priority_ = $context["priority"]; } else { $_priority_ = null; }
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if (((($_priority_ >= 0) && ($this->getAttribute($_log_, "priority") >= $_priority_)) || (($_priority_ < 0) && ((($this->getAttribute($this->getAttribute($_log_, "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_log_, "context", array(), "any", false, true), "type"), 0)) : (0)) == $_priority_)))) {
                    // line 77
                    echo "                <li class=\"";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($_loop_, "index")), "html", null, true);
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    if (($this->getAttribute($_log_, "priority") >= 400)) {
                        echo " error";
                    } elseif (($this->getAttribute($_log_, "priority") >= 300)) {
                        echo " warning";
                    }
                    echo "\">
                    ";
                    // line 78
                    if (isset($context["logger"])) { $_logger_ = $context["logger"]; } else { $_logger_ = null; }
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo $_logger_->getdisplay_message($this->getAttribute($_loop_, "index"), $_log_);
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
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if ((twig_constant("Symfony\\Component\\HttpKernel\\Debug\\ErrorHandler::TYPE_DEPRECATION") == (($this->getAttribute($this->getAttribute($_log_, "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_log_, "context", array(), "any", false, true), "type"), 0)) : (0)))) {
                // line 94
                echo "        DEPRECATION -  ";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "message"), "html", null, true);
                echo "
        ";
                // line 95
                if (isset($context["log_index"])) { $_log_index_ = $context["log_index"]; } else { $_log_index_ = null; }
                $context["id"] = ("sf-call-stack-" . $_log_index_);
                // line 96
                echo "        <a href=\"#\" onclick=\"Sfjs.toggle('";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "', document.getElementById('";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "-on'), document.getElementById('";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "-off')); return false;\">
            <img class=\"toggle\" id=\"";
                // line 97
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "-off\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:none\">
            <img class=\"toggle\" id=\"";
                // line 98
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "-on\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:inline\">
        </a>
        ";
                // line 100
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_log_, "context"), "stack"));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
                    if (($_index_ > 1)) {
                        // line 101
                        echo "            ";
                        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
                        if (($_index_ == 2)) {
                            // line 102
                            echo "                <ul class=\"sf-call-stack\" id=\"";
                            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                            echo twig_escape_filter($this->env, $_id_, "html", null, true);
                            echo "\" style=\"display: none\">
            ";
                        }
                        // line 104
                        echo "            ";
                        if (isset($context["call"])) { $_call_ = $context["call"]; } else { $_call_ = null; }
                        if ($this->getAttribute($_call_, "class", array(), "any", true, true)) {
                            // line 105
                            echo "                ";
                            if (isset($context["call"])) { $_call_ = $context["call"]; } else { $_call_ = null; }
                            $context["from"] = (($this->env->getExtension('code')->abbrClass($this->getAttribute($_call_, "class")) . "::") . $this->env->getExtension('code')->abbrMethod($this->getAttribute($_call_, "function")));
                            // line 106
                            echo "            ";
                        } elseif ($this->getAttribute($_call_, "function", array(), "any", true, true)) {
                            // line 107
                            echo "                ";
                            if (isset($context["call"])) { $_call_ = $context["call"]; } else { $_call_ = null; }
                            $context["from"] = $this->env->getExtension('code')->abbrMethod($this->getAttribute($_call_, "function"));
                            // line 108
                            echo "            ";
                        } elseif ($this->getAttribute($_call_, "file", array(), "any", true, true)) {
                            // line 109
                            echo "                ";
                            if (isset($context["call"])) { $_call_ = $context["call"]; } else { $_call_ = null; }
                            $context["from"] = $this->getAttribute($_call_, "file");
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
                        if (isset($context["call"])) { $_call_ = $context["call"]; } else { $_call_ = null; }
                        if (isset($context["from"])) { $_from_ = $context["from"]; } else { $_from_ = null; }
                        echo ((($this->getAttribute($_call_, "file", array(), "any", true, true) && $this->getAttribute($_call_, "line", array(), "any", true, true))) ? ($this->env->getExtension('code')->formatFile($this->getAttribute($_call_, "file"), $this->getAttribute($_call_, "line"), $_from_)) : ($_from_));
                        echo "</li>

            ";
                        // line 116
                        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
                        if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                        echo ((($_index_ == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_log_, "context"), "stack")) - 1))) ? ("</ul>") : (""));
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
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "priorityName"), "html", null, true);
                echo " - ";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "message"), "html", null, true);
                echo "
        ";
                // line 120
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if (($this->getAttribute($_log_, "context", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($_log_, "context"))))) {
                    // line 121
                    echo "            <br />
            <small>
                <strong>Context</strong>: ";
                    // line 123
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($_log_, "context"), (64 | 256)), "html", null, true);
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
        return array (  414 => 126,  407 => 123,  400 => 120,  370 => 114,  367 => 113,  364 => 112,  361 => 111,  358 => 110,  354 => 109,  351 => 108,  340 => 105,  336 => 104,  325 => 101,  286 => 94,  282 => 93,  270 => 92,  262 => 85,  258 => 83,  236 => 78,  209 => 76,  206 => 75,  156 => 51,  144 => 45,  733 => 345,  728 => 344,  724 => 342,  720 => 340,  710 => 337,  705 => 336,  702 => 335,  697 => 334,  688 => 327,  685 => 326,  682 => 325,  678 => 323,  668 => 320,  663 => 319,  660 => 318,  655 => 317,  646 => 310,  643 => 309,  640 => 308,  637 => 307,  633 => 305,  629 => 303,  621 => 300,  613 => 298,  609 => 296,  604 => 295,  598 => 293,  593 => 292,  590 => 291,  585 => 290,  577 => 284,  574 => 283,  570 => 281,  567 => 280,  564 => 279,  561 => 278,  557 => 276,  551 => 272,  547 => 270,  540 => 268,  537 => 267,  528 => 262,  518 => 256,  511 => 254,  508 => 253,  499 => 248,  495 => 246,  479 => 238,  472 => 236,  454 => 226,  443 => 222,  440 => 221,  432 => 215,  426 => 213,  422 => 211,  411 => 207,  391 => 119,  387 => 195,  374 => 192,  369 => 191,  338 => 185,  334 => 183,  323 => 181,  318 => 100,  315 => 179,  303 => 176,  288 => 174,  220 => 108,  212 => 104,  191 => 98,  175 => 63,  168 => 90,  214 => 67,  170 => 62,  151 => 58,  116 => 47,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 245,  489 => 244,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  447 => 172,  439 => 168,  431 => 164,  415 => 156,  403 => 121,  396 => 143,  392 => 141,  388 => 118,  381 => 137,  377 => 116,  373 => 134,  366 => 131,  356 => 127,  350 => 188,  347 => 107,  335 => 122,  332 => 121,  329 => 102,  320 => 113,  317 => 112,  309 => 106,  306 => 105,  300 => 175,  297 => 101,  292 => 95,  275 => 94,  272 => 93,  242 => 81,  238 => 79,  234 => 78,  223 => 73,  216 => 106,  213 => 70,  210 => 69,  203 => 74,  179 => 60,  176 => 59,  169 => 58,  153 => 51,  132 => 42,  128 => 50,  91 => 24,  145 => 54,  99 => 41,  86 => 21,  174 => 63,  113 => 22,  135 => 61,  123 => 20,  139 => 60,  103 => 43,  64 => 15,  95 => 33,  82 => 32,  21 => 2,  23 => 3,  119 => 35,  73 => 37,  68 => 24,  20 => 1,  94 => 54,  83 => 20,  61 => 35,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 258,  512 => 149,  505 => 148,  502 => 249,  497 => 146,  491 => 144,  488 => 143,  483 => 240,  473 => 134,  469 => 235,  466 => 131,  460 => 230,  455 => 176,  450 => 224,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 214,  423 => 160,  420 => 111,  416 => 110,  413 => 109,  408 => 206,  394 => 198,  390 => 103,  375 => 101,  365 => 99,  362 => 189,  359 => 128,  355 => 95,  348 => 91,  344 => 106,  330 => 89,  327 => 88,  321 => 86,  307 => 97,  302 => 84,  295 => 96,  287 => 80,  279 => 78,  256 => 73,  251 => 81,  239 => 69,  231 => 68,  219 => 72,  201 => 102,  143 => 49,  138 => 44,  134 => 41,  131 => 95,  122 => 36,  108 => 31,  102 => 60,  92 => 24,  84 => 28,  48 => 10,  312 => 98,  308 => 94,  293 => 92,  285 => 96,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 87,  253 => 85,  249 => 84,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 68,  147 => 98,  127 => 39,  112 => 43,  96 => 25,  76 => 24,  71 => 18,  55 => 8,  114 => 32,  109 => 31,  106 => 63,  85 => 21,  77 => 18,  28 => 3,  39 => 7,  89 => 60,  65 => 23,  63 => 17,  58 => 17,  34 => 12,  26 => 9,  98 => 26,  88 => 23,  46 => 13,  36 => 5,  43 => 12,  50 => 14,  38 => 6,  27 => 3,  227 => 75,  224 => 77,  221 => 90,  207 => 70,  197 => 74,  195 => 64,  192 => 65,  189 => 64,  186 => 60,  181 => 122,  178 => 61,  173 => 58,  162 => 59,  158 => 78,  155 => 77,  152 => 49,  142 => 52,  136 => 44,  130 => 40,  100 => 27,  78 => 17,  75 => 16,  53 => 11,  24 => 4,  25 => 35,  19 => 1,  79 => 25,  74 => 17,  72 => 33,  69 => 37,  60 => 14,  47 => 9,  40 => 6,  22 => 2,  267 => 90,  185 => 58,  182 => 61,  177 => 56,  165 => 89,  159 => 52,  148 => 66,  133 => 87,  125 => 49,  120 => 19,  117 => 36,  110 => 31,  105 => 30,  101 => 27,  87 => 32,  80 => 26,  67 => 12,  57 => 13,  54 => 12,  51 => 11,  44 => 11,  42 => 8,  35 => 6,  32 => 5,  29 => 3,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 101,  193 => 63,  187 => 62,  183 => 62,  180 => 96,  171 => 54,  166 => 60,  163 => 55,  160 => 54,  157 => 48,  149 => 48,  146 => 41,  140 => 46,  137 => 42,  129 => 36,  124 => 35,  121 => 80,  118 => 36,  115 => 44,  111 => 33,  107 => 30,  104 => 39,  97 => 61,  93 => 23,  90 => 34,  81 => 19,  70 => 13,  66 => 18,  62 => 12,  59 => 13,  56 => 16,  52 => 21,  49 => 10,  45 => 9,  41 => 10,  37 => 5,  33 => 4,  30 => 3,);
    }
}
