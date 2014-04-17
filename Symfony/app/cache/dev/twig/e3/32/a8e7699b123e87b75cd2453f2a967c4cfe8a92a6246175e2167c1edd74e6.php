<?php

/* DoctrineBundle:Collector:db.html.twig */
class __TwigTemplate_e332a8e7699b123e87b75cd2453f2a967c4cfe8a92a6246175e2167c1edd74e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'queries' => array($this, 'block_queries'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest")) ? ("WebProfilerBundle:Profiler:ajax_layout.html.twig") : ("WebProfilerBundle:Profiler:layout.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
        <span class=\"sf-toolbar-status";
        // line 6
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ((50 < $this->getAttribute($_collector_, "querycount"))) {
            echo " sf-toolbar-status-yellow";
        }
        echo "\">";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "querycount"), "html", null, true);
        echo "</span>
        ";
        // line 7
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (($this->getAttribute($_collector_, "querycount") > 0)) {
            // line 8
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($_collector_, "time") * 1000)), "html", null, true);
            echo " ms</span>
        ";
        }
        // line 10
        echo "        ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (($this->getAttribute($_collector_, "invalidEntityCount") > 0)) {
            // line 11
            echo "            <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\"> </span>
        ";
        }
        // line 13
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>DB Queries</b>
            <span>";
        // line 17
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "querycount"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>";
        // line 21
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($_collector_, "time") * 1000)), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Invalid entities</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 25
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo ((($this->getAttribute($_collector_, "invalidEntityCount") > 0)) ? ("red") : ("green"));
        echo "\">";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "invalidEntityCount"), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "    ";
        if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $_profiler_url_)));
    }

    // line 31
    public function block_menu($context, array $blocks = array())
    {
        // line 32
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
    <strong>Doctrine</strong>
    <span class=\"count\">
        <span>";
        // line 36
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "querycount"), "html", null, true);
        echo "</span>
        <span>";
        // line 37
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute($_collector_, "time") * 1000)), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
    }

    // line 42
    public function block_panel($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if (("explain" == $_page_)) {
            // line 44
            echo "        ";
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DoctrineBundle:Profiler:explain", array("token" => $_token_, "panel" => "db", "connectionName" => $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "connection"), "method"), "query" => $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "request"), "query"), "get", array(0 => "query"), "method"))));
            // line 49
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            $this->displayBlock("queries", $context, $blocks);
            echo "
    ";
        }
    }

    // line 55
    public function block_queries($context, array $blocks = array())
    {
        // line 56
        echo "    <h2>Queries</h2>

    ";
        // line 58
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "queries"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
            // line 59
            echo "        <h3>Connection <em>";
            if (isset($context["connection"])) { $_connection_ = $context["connection"]; } else { $_connection_ = null; }
            echo twig_escape_filter($this->env, $_connection_, "html", null, true);
            echo "</em></h3>
        ";
            // line 60
            if (isset($context["queries"])) { $_queries_ = $context["queries"]; } else { $_queries_ = null; }
            if (twig_test_empty($_queries_)) {
                // line 61
                echo "            <p>
                <em>No queries.</em>
            </p>
        ";
            } else {
                // line 65
                echo "            <ul class=\"alt\" id=\"queriesPlaceholder-";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
                echo "\">
                ";
                // line 66
                if (isset($context["queries"])) { $_queries_ = $context["queries"]; } else { $_queries_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_queries_);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 67
                    echo "                    <li class=\"";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $_i_), "html", null, true);
                    echo "\" data-extra-info=\"";
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($_query_, "executionMS") * 1000)), "html", null, true);
                    echo "\" data-target-id=\"";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "\">
                        <div style=\"margin-top: 4px\" id=\"queryNo-";
                    // line 68
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "-";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                    echo "\">
                            <div onclick=\"return expandQuery(this);\" title=\"Expand query\" data-target-id=\"code-";
                    // line 69
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "-";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                    echo "\" style=\"cursor: pointer;\">
                                <img alt=\"+\" src=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
                    echo "\" style=\"display: inline;\" />
                                <img alt=\"-\" src=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
                    echo "\" style=\"display: none;\" />
                                <span style=\"display: none\">Shrink query</span>
                                <span id=\"smallcode-";
                    // line 73
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "-";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                    echo "\">
                                    ";
                    // line 74
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    echo $this->env->getExtension('doctrine_extension')->minifyQuery($this->getAttribute($_query_, "sql"));
                    echo "
                                </span>
                            </div>
                            <code id=\"code-";
                    // line 77
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "-";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                    echo "\">
                                ";
                    // line 78
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo SqlFormatter::format($this->getAttribute($_query_, "sql"), $_i_, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"));
                    echo "
                            </code>
                            <span id=\"original-query-";
                    // line 80
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "-";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                    echo "\" style=\"display: none;\">
                                ";
                    // line 81
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    echo $this->env->getExtension('doctrine_extension')->replaceQueryParameters($this->getAttribute($_query_, "sql"), $this->getAttribute($_query_, "params"));
                    echo "
                            </span>
                            <small>
                                <strong>Parameters</strong>: ";
                    // line 84
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($_query_, "params")), "html", null, true);
                    echo " <br />
                                [<span id=\"expandParams-";
                    // line 85
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "-";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                    echo "\" onclick=\"javascript:toggleRunnableQuery(this);\" target-data-id=\"original-query-";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "-";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                    echo "\" style=\"cursor: pointer;\">Display runnable query</span>]<br/>
                                <strong>Time</strong>: ";
                    // line 86
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($_query_, "executionMS") * 1000)), "html", null, true);
                    echo " ms
                            </small>
                            ";
                    // line 88
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    if ($this->getAttribute($_query_, "explainable")) {
                        // line 89
                        echo "                                [<a href=\"";
                        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
                        if (isset($context["connection"])) { $_connection_ = $context["connection"]; } else { $_connection_ = null; }
                        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("panel" => "db", "token" => $_token_, "page" => "explain", "connection" => $_connection_, "query" => $_i_)), "html", null, true);
                        echo "\" onclick=\"return explain(this);\" style=\"text-decoration: none;\" title=\"Explains the query\" data-target-id=\"explain-";
                        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                        echo twig_escape_filter($this->env, $_i_, "html", null, true);
                        echo "-";
                        if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                        echo "\" >
                                    <img alt=\"+\" src=\"";
                        // line 90
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
                        echo "\" style=\"display: inline; width: 12px; height: 12px;\" />
                                    <img alt=\"-\" src=\"";
                        // line 91
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
                        echo "\" style=\"display: none; width: 12px; height: 12px;\" />
                                    <span style=\"vertical-align:top\">Explain query</span>
                                </a>]
                            ";
                    } else {
                        // line 95
                        echo "                                This query cannot be explained
                            ";
                    }
                    // line 97
                    echo "                        </div>
                        ";
                    // line 98
                    if (isset($context["query"])) { $_query_ = $context["query"]; } else { $_query_ = null; }
                    if ($this->getAttribute($_query_, "explainable")) {
                        // line 99
                        echo "                        <div id=\"explain-";
                        if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                        echo twig_escape_filter($this->env, $_i_, "html", null, true);
                        echo "-";
                        if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_loop_, "parent"), "loop"), "index"), "html", null, true);
                        echo "\" class=\"loading\"></div>
                        ";
                    }
                    // line 101
                    echo "                    </li>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "            </ul>
        ";
            }
            // line 105
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
    <h2>Database Connections</h2>

    ";
        // line 109
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "connections")) {
            // line 110
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($_collector_, "connections")));
            // line 111
            echo "    ";
        } else {
            // line 112
            echo "        <p>
            <em>No connections.</em>
        </p>
    ";
        }
        // line 116
        echo "
    <h2>Entity Managers</h2>

    ";
        // line 119
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "managers")) {
            // line 120
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($_collector_, "managers")));
            // line 121
            echo "    ";
        } else {
            // line 122
            echo "        <p>
            <em>No entity managers.</em>
        </p>
    ";
        }
        // line 126
        echo "
    <h2>Mapping</h2>

    ";
        // line 129
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "entities"));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 130
            echo "        <h3>Manager <em>";
            if (isset($context["manager"])) { $_manager_ = $context["manager"]; } else { $_manager_ = null; }
            echo twig_escape_filter($this->env, $_manager_, "html", null, true);
            echo "</em></h3>
        ";
            // line 131
            if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
            if (twig_test_empty($_classes_)) {
                // line 132
                echo "            <p><em>No loaded entities.</em></p>
        ";
            } else {
                // line 134
                echo "            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                    <th scope=\"col\">Mapping errors</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 142
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_classes_);
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 143
                    echo "                    <tr>
                        <td>";
                    // line 144
                    if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                    echo twig_escape_filter($this->env, $_class_, "html", null, true);
                    echo "</td>
                        <td>
                            ";
                    // line 146
                    if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                    if (isset($context["manager"])) { $_manager_ = $context["manager"]; } else { $_manager_ = null; }
                    if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($_collector_, "mappingErrors", array(), "any", false, true), $_manager_, array(), "array", false, true), $_class_, array(), "array", true, true)) {
                        // line 147
                        echo "                                <ul>
                                    ";
                        // line 148
                        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                        if (isset($context["manager"])) { $_manager_ = $context["manager"]; } else { $_manager_ = null; }
                        if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_collector_, "mappingErrors"), $_manager_, array(), "array"), $_class_, array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 149
                            echo "                                        <li>";
                            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                            echo twig_escape_filter($this->env, $_error_, "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 151
                        echo "                                </ul>
                            ";
                    } else {
                        // line 153
                        echo "                                Valid
                            ";
                    }
                    // line 155
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "                </tbody>
            </table>
        ";
            }
            // line 161
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var imgs = link.children,
                target = link.getAttribute('data-target-id');

            Sfjs.toggle(target, imgs[0], imgs[1])
                .load(
                    target,
                    link.href,
                    null,
                    function(xhr, el) {
                        el.innerHTML = 'An error occurred while loading the details';
                        Sfjs.removeClass(el, 'loading');
                    }
                );

            return false;
        }

        function expandQuery(link) {
            var sections = link.children,
                target = link.getAttribute('data-target-id'),
                targetId = target.replace('code', ''),
                queriesParameters = document.getElementById('original-query' + targetId);

            if (queriesParameters.style.display != 'none') {
                queriesParameters.style.display = 'none';
                document.getElementById('small' + target).style.display = 'inline';
                document.getElementById('expandParams' + targetId).innerHTML = 'Display runnable query';
            }

            if (document.getElementById('small' + target).style.display != 'none') {
                document.getElementById('small' + target).style.display = 'none';
                document.getElementById(target).style.display = 'inline';

                sections[0].style.display = 'none';
                sections[1].style.display = 'inline';
                sections[2].style.display = 'inline';
            } else {
                document.getElementById('small' + target).style.display = 'inline';
                document.getElementById(target).style.display = 'none';

                sections[0].style.display = 'inline';
                sections[1].style.display = 'none';
                sections[2].style.display = 'none';
            }

            return false;
        }

        function toggleRunnableQuery(target) {
            var targetId = target.getAttribute('target-data-id').replace('original-query', ''),
                targetElement = document.getElementById(target.getAttribute('target-data-id')),
                elem;

            if (targetElement.style.display != 'block') {
                targetElement.style.display = 'block';
                target.innerHTML = 'Hide runnable query';

                document.getElementById('smallcode' + targetId).style.display = 'none';
                document.getElementById('code' + targetId).style.display = 'none';

                elem = document.getElementById('code' + targetId).parentElement.children[0];

                elem.children[0].style.display = 'inline';
                elem.children[1].style.display = 'none';
                elem.children[2].style.display = 'none';

            } else {
                targetElement.style.display = 'none';
                target.innerHTML = 'Display runnable query';

                document.getElementById('smallcode' + targetId).style.display = 'inline';
            }
        }

    //]]></script>

    <style>
        h3 {
            margin-bottom: 0px;
        }

        code {
            display: none;
        }

        code pre {
            padding: 5px;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  512 => 149,  505 => 148,  497 => 146,  491 => 144,  488 => 143,  473 => 134,  466 => 131,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  420 => 111,  416 => 110,  413 => 109,  390 => 103,  375 => 101,  365 => 99,  355 => 95,  348 => 91,  330 => 89,  327 => 88,  321 => 86,  302 => 84,  287 => 80,  279 => 78,  256 => 73,  239 => 69,  231 => 68,  155 => 55,  138 => 44,  131 => 42,  84 => 21,  58 => 10,  308 => 94,  293 => 92,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  247 => 70,  237 => 73,  204 => 69,  178 => 61,  158 => 56,  150 => 54,  147 => 51,  142 => 52,  112 => 32,  109 => 31,  232 => 72,  226 => 71,  211 => 71,  202 => 68,  183 => 62,  171 => 54,  146 => 41,  124 => 35,  118 => 36,  59 => 11,  733 => 345,  728 => 344,  724 => 342,  720 => 340,  710 => 337,  705 => 336,  702 => 335,  688 => 327,  685 => 326,  682 => 325,  678 => 323,  668 => 320,  660 => 318,  646 => 310,  643 => 309,  640 => 308,  637 => 307,  633 => 305,  629 => 303,  621 => 300,  613 => 298,  609 => 296,  604 => 295,  598 => 293,  593 => 292,  590 => 291,  585 => 290,  577 => 284,  574 => 283,  570 => 281,  567 => 280,  564 => 279,  557 => 276,  551 => 272,  540 => 268,  537 => 267,  528 => 262,  522 => 151,  518 => 256,  511 => 254,  508 => 253,  502 => 147,  499 => 248,  495 => 246,  483 => 142,  479 => 238,  472 => 236,  469 => 132,  460 => 130,  454 => 226,  450 => 126,  443 => 222,  440 => 221,  432 => 215,  422 => 211,  411 => 207,  394 => 105,  387 => 195,  369 => 191,  334 => 183,  323 => 181,  315 => 179,  303 => 176,  288 => 174,  220 => 108,  168 => 90,  93 => 22,  49 => 9,  34 => 5,  31 => 4,  864 => 492,  861 => 491,  848 => 489,  843 => 488,  839 => 486,  826 => 485,  799 => 479,  796 => 478,  774 => 476,  756 => 475,  751 => 473,  746 => 472,  741 => 471,  736 => 470,  731 => 469,  726 => 468,  721 => 467,  718 => 466,  715 => 465,  697 => 334,  686 => 462,  670 => 456,  663 => 319,  658 => 453,  655 => 317,  653 => 451,  639 => 449,  634 => 446,  600 => 414,  579 => 411,  561 => 278,  558 => 409,  555 => 408,  547 => 270,  541 => 404,  269 => 136,  225 => 94,  208 => 70,  193 => 63,  190 => 85,  186 => 60,  180 => 59,  157 => 48,  154 => 74,  143 => 49,  129 => 36,  121 => 34,  103 => 45,  97 => 24,  94 => 42,  41 => 6,  28 => 3,  414 => 126,  407 => 123,  400 => 120,  391 => 197,  370 => 114,  361 => 111,  358 => 110,  354 => 109,  351 => 108,  344 => 90,  340 => 105,  336 => 104,  318 => 180,  312 => 96,  307 => 85,  295 => 81,  282 => 93,  262 => 85,  258 => 83,  251 => 71,  224 => 77,  209 => 76,  206 => 75,  175 => 95,  156 => 51,  152 => 49,  149 => 42,  144 => 45,  130 => 42,  127 => 41,  96 => 25,  64 => 11,  48 => 7,  39 => 7,  214 => 67,  196 => 64,  189 => 61,  174 => 63,  170 => 62,  162 => 58,  151 => 58,  134 => 43,  104 => 28,  100 => 27,  82 => 32,  65 => 23,  27 => 3,  95 => 33,  92 => 25,  86 => 21,  83 => 20,  76 => 17,  438 => 160,  435 => 159,  429 => 116,  426 => 213,  417 => 156,  412 => 155,  408 => 106,  405 => 152,  402 => 151,  399 => 150,  386 => 147,  383 => 146,  380 => 145,  374 => 192,  371 => 140,  367 => 113,  364 => 112,  353 => 131,  346 => 129,  343 => 128,  338 => 185,  325 => 101,  322 => 118,  314 => 114,  301 => 107,  290 => 103,  286 => 94,  283 => 100,  278 => 97,  270 => 92,  264 => 74,  261 => 81,  254 => 86,  243 => 79,  240 => 78,  236 => 78,  233 => 76,  228 => 73,  222 => 76,  215 => 73,  212 => 104,  207 => 70,  201 => 66,  194 => 64,  191 => 98,  184 => 53,  173 => 58,  167 => 43,  164 => 77,  123 => 27,  119 => 35,  116 => 47,  113 => 23,  102 => 28,  85 => 22,  81 => 19,  77 => 33,  50 => 14,  36 => 5,  79 => 25,  74 => 17,  72 => 15,  69 => 14,  66 => 13,  60 => 25,  52 => 10,  47 => 9,  45 => 7,  40 => 6,  37 => 5,  22 => 1,  185 => 58,  177 => 82,  165 => 89,  159 => 52,  148 => 42,  137 => 37,  133 => 40,  120 => 38,  117 => 36,  115 => 32,  110 => 31,  107 => 28,  101 => 27,  90 => 21,  87 => 24,  80 => 34,  70 => 15,  67 => 15,  62 => 11,  57 => 24,  54 => 12,  51 => 8,  44 => 7,  42 => 8,  32 => 4,  29 => 3,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 245,  489 => 244,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  455 => 129,  447 => 172,  439 => 168,  431 => 164,  423 => 112,  415 => 156,  403 => 205,  396 => 149,  392 => 141,  388 => 118,  381 => 137,  377 => 193,  373 => 134,  366 => 131,  362 => 98,  359 => 97,  356 => 127,  350 => 188,  347 => 107,  335 => 122,  332 => 121,  329 => 102,  320 => 113,  317 => 115,  309 => 111,  306 => 110,  300 => 175,  297 => 105,  292 => 95,  285 => 90,  275 => 96,  272 => 93,  267 => 32,  257 => 79,  253 => 77,  249 => 76,  242 => 81,  238 => 79,  234 => 78,  227 => 75,  223 => 73,  219 => 67,  216 => 106,  213 => 70,  210 => 69,  203 => 74,  198 => 65,  195 => 65,  192 => 65,  187 => 62,  182 => 57,  179 => 60,  176 => 47,  169 => 80,  166 => 51,  163 => 50,  160 => 49,  153 => 39,  145 => 54,  140 => 38,  132 => 42,  128 => 50,  125 => 49,  122 => 37,  114 => 52,  111 => 32,  108 => 31,  105 => 31,  98 => 26,  91 => 41,  88 => 40,  78 => 17,  75 => 16,  71 => 17,  68 => 24,  63 => 17,  56 => 12,  46 => 13,  43 => 7,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
