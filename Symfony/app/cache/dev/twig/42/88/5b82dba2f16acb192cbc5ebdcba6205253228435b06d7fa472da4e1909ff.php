<?php

/* WebProfilerBundle:Collector:events.html.twig */
class __TwigTemplate_42885b82dba2f16acb192cbc5ebdcba6205253228435b06d7fa472da4e1909ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_2604ea67655e53b3cc0941cd0499293514fb65dfe6b91af5e6f3622767fb1139"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAiCAQAAADragGFAAAD60lEQVR42o2UfUxbVRjGb7fy4ah2QwdECSgjEpcYUP8hmtiWljbt+Gih62zGVqBjXkqgVcYQKzNLJF1HBxt0S9YMgqHVLt1oZRqidcpcgQ1dMpkxgyVK2NSYyWTAJoPB4/1g0iLQnZub+348v3vOPe95L/FogFO+pbBMbtPmgEsEDXC1OXJbYVn5FnBoPwg4wVfVCc7J3WRToxoxIbmYRjXZJHcLzqnqTvAZkEUsSfI2iddxCHtR8LkIvBCIR0UKsNdxSOKVt1mSwGGQ87GKNk3ncO1ARdFxkU/qxMYQaKPUKfIVHR+oGK7VdCrazsdSGKJKqsW+oRqnMcu7s91Td02FuBAo7prKU7ezPcvrNA7ViH0l1Ygi/Kmiz+y2H3Tirvqj0PvLqk09ieAsfW1PYrXJXwZ9/VFx11Vda2OW159KmEvFvkkdadvunN19oEbYrXSczMD6/6D1JzOUDmH3gZrZ3dudpG1SJ/aZSwnSuqsDebIz9oZBtbC7/SDykATu0oZTXl77QWH3oNreIDuD3F0dpJXoU3sMU9nG5ku6lop8N9RIAw9ccqvGoDGQWymIR0XUqk+PVF0qNjZPZXsMfWoCKUijrky8Qt0KyuIiWtMqnBdAAOG8phXRVORFKvM6rWC0KQQiqfAG8PEUnkY8ZUVW7hdg6arcTyk2UJlnKAWfsqIRSSwfSFDeDIaUN5FAhBtIlz4IhqQPkB4eytROBEPaCWQ+xkyu3mDI1fs4Mz33dUsw9KUdieGhzVXf0GIF8hmoPIC4sNBEmuweLbbca56kn9kzI+ngrIkgosHMLqu/90c/a31oQVSYxemu0ELNDCph0E0z+3cd8WshnMAb4jlaqP/rjuwPWelt2hYtfCHFutWhJ95vXTw8v6l/yh3dNyphPJMLMatDz6rHaJHhnwsXJQ+33R/z1d6l/dxxJK+GrHMVsvOUTOdNX+ztvKycaLnORo6Vg7sy9GRVFyspnhp2wIDKs+6cGTay5wI2rQj9nbpt8dTtuzVM4gW89JVlB7V/a1QLEUeMrEBDNaDkfvHht07TrVi/eObrrStUC7H6AJ0smH848MnPWUzn5swM9qNHzyxRO4KE/1XoRoZklk5aRy/bdX8KIJ8XLwhQ+ut3H526ylbLk7OsWogy29hlkL+LKPEHd25f+WXIdJf+T7xzQ8RkjG7wljW5duRRM+yYDvThMIpQjGP+79mtWKzW8yEV8snp9wsgWzh1a64De/Ay+NiEV0HOdXw8plhgsaaKoGohxuSigxKM9cOMN7GZTSIC8ZT33vi3BczG6AOIXYKS85mj+e443kYKokO/FsnQWUeZl84OvUZX618UFpIDvqMM6gAAAABJRU5ErkJggg==\" alt=\"Events\"></span>
    <strong>Events</strong>
</span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "calledlisteners"))) {
            // line 14
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 16
            echo "        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 23
    public function block_panelContent($context, array $blocks = array())
    {
        // line 24
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Listener</th>
        </tr>
        ";
        // line 31
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "calledlisteners"));
        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
            // line 32
            echo "            <tr>
                <td><code>";
            // line 33
            if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "event"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 34
            if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
            echo $context["__internal_2604ea67655e53b3cc0941cd0499293514fb65dfe6b91af5e6f3622767fb1139"]->getdisplay_listener($_listener_);
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </table>

    ";
        // line 39
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "notcalledlisteners")) {
            // line 40
            echo "        <h2>Not Called Listeners</h2>

        <table>
            <tr>
                <th>Event name</th>
                <th>Listener</th>
            </tr>
            ";
            // line 47
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["listeners"] = $this->getAttribute($_collector_, "notcalledlisteners");
            // line 48
            echo "            ";
            if (isset($context["listeners"])) { $_listeners_ = $context["listeners"]; } else { $_listeners_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($_listeners_)));
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 49
                echo "                <tr>
                    <td><code>";
                // line 50
                if (isset($context["listeners"])) { $_listeners_ = $context["listeners"]; } else { $_listeners_ = null; }
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_listeners_, $_listener_, array(), "array"), "event"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 51
                if (isset($context["listeners"])) { $_listeners_ = $context["listeners"]; } else { $_listeners_ = null; }
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                echo $context["__internal_2604ea67655e53b3cc0941cd0499293514fb65dfe6b91af5e6f3622767fb1139"]->getdisplay_listener($this->getAttribute($_listeners_, $_listener_, array(), "array"));
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </table>
    ";
        }
    }

    // line 58
    public function getdisplay_listener($_listener = null)
    {
        $context = $this->env->mergeGlobals(array(
            "listener" => $_listener,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 59
            echo "    ";
            if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
            if (($this->getAttribute($_listener_, "type") == "Closure")) {
                // line 60
                echo "        Closure
    ";
            } elseif (($this->getAttribute($_listener_, "type") == "Function")) {
                // line 62
                echo "        ";
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($_listener_, "file"), $this->getAttribute($_listener_, "line"));
                // line 63
                echo "        ";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                if ($_link_) {
                    echo "<a href=\"";
                    if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                    echo twig_escape_filter($this->env, $_link_, "html", null, true);
                    echo "\">";
                    if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "function"), "html", null, true);
                    echo "</a>";
                } else {
                    if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "function"), "html", null, true);
                }
                // line 64
                echo "    ";
            } elseif (($this->getAttribute($_listener_, "type") == "Method")) {
                // line 65
                echo "        ";
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($_listener_, "file"), $this->getAttribute($_listener_, "line"));
                // line 66
                echo "        ";
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute($_listener_, "class"));
                echo "::";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                if ($_link_) {
                    echo "<a href=\"";
                    if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                    echo twig_escape_filter($this->env, $_link_, "html", null, true);
                    echo "\">";
                    if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "method"), "html", null, true);
                    echo "</a>";
                } else {
                    if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "method"), "html", null, true);
                }
                // line 67
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
        return "WebProfilerBundle:Collector:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 67,  170 => 62,  151 => 58,  116 => 47,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 196,  489 => 195,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  447 => 172,  439 => 168,  431 => 164,  415 => 156,  403 => 146,  396 => 143,  392 => 141,  388 => 140,  381 => 137,  377 => 135,  373 => 134,  366 => 131,  356 => 127,  350 => 125,  347 => 124,  335 => 122,  332 => 121,  329 => 120,  320 => 113,  317 => 112,  309 => 106,  306 => 105,  300 => 102,  297 => 101,  292 => 98,  275 => 94,  272 => 93,  242 => 81,  238 => 79,  234 => 78,  223 => 73,  216 => 71,  213 => 70,  210 => 69,  203 => 66,  179 => 60,  176 => 59,  169 => 58,  153 => 51,  132 => 42,  128 => 50,  91 => 24,  145 => 54,  99 => 41,  86 => 29,  174 => 63,  113 => 22,  135 => 61,  123 => 20,  139 => 60,  103 => 43,  64 => 34,  95 => 42,  82 => 32,  21 => 2,  23 => 3,  119 => 48,  73 => 37,  68 => 24,  20 => 1,  94 => 54,  83 => 38,  61 => 35,  31 => 3,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 176,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 160,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 129,  359 => 128,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 72,  201 => 66,  143 => 49,  138 => 44,  134 => 51,  131 => 95,  122 => 38,  108 => 31,  102 => 60,  92 => 32,  84 => 28,  48 => 9,  312 => 96,  308 => 94,  293 => 92,  285 => 96,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 87,  253 => 85,  249 => 84,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 68,  147 => 98,  127 => 50,  112 => 43,  96 => 34,  76 => 56,  71 => 18,  55 => 8,  114 => 34,  109 => 31,  106 => 63,  85 => 33,  77 => 31,  28 => 3,  39 => 15,  89 => 60,  65 => 23,  63 => 14,  58 => 17,  34 => 12,  26 => 9,  98 => 27,  88 => 23,  46 => 13,  36 => 5,  43 => 12,  50 => 14,  38 => 6,  27 => 3,  227 => 75,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 64,  192 => 65,  189 => 64,  186 => 60,  181 => 122,  178 => 61,  173 => 58,  162 => 59,  158 => 78,  155 => 77,  152 => 55,  142 => 52,  136 => 44,  130 => 60,  100 => 37,  78 => 20,  75 => 19,  53 => 11,  24 => 4,  25 => 35,  19 => 1,  79 => 27,  74 => 36,  72 => 33,  69 => 37,  60 => 17,  47 => 8,  40 => 6,  22 => 2,  267 => 90,  185 => 58,  182 => 61,  177 => 56,  165 => 79,  159 => 45,  148 => 66,  133 => 87,  125 => 49,  120 => 19,  117 => 36,  110 => 43,  105 => 30,  101 => 41,  87 => 32,  80 => 26,  67 => 30,  57 => 22,  54 => 14,  51 => 13,  44 => 11,  42 => 7,  35 => 6,  32 => 5,  29 => 3,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 66,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 60,  163 => 55,  160 => 54,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 41,  129 => 36,  124 => 35,  121 => 80,  118 => 36,  115 => 44,  111 => 33,  107 => 40,  104 => 39,  97 => 61,  93 => 65,  90 => 34,  81 => 40,  70 => 23,  66 => 34,  62 => 12,  59 => 13,  56 => 16,  52 => 21,  49 => 10,  45 => 8,  41 => 10,  37 => 14,  33 => 4,  30 => 3,);
    }
}
