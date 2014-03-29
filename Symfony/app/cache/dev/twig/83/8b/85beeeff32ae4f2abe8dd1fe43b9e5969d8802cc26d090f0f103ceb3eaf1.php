<?php

/* @Swiftmailer/Collector/swiftmailer.html.twig */
class __TwigTemplate_838b85beeeff32ae4f2abe8dd1fe43b9e5969d8802cc26d090f0f103ceb3eaf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
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
        if ($this->getAttribute($_collector_, "messageCount")) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            <img width=\"23\" height=\"28\" alt=\"Swiftmailer\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAcCAYAAACK7SRjAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0NEOTU1MjM0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0NEOTU1MjQ0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxMEQ5OTQ5QzQ5OEMxMUUwODc3MkE1MTY4ODBDMzEzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3Q0Q5NTUyMjQ5OEUxMUUwODc3MkE1MTY4ODBDMzEzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PpkRnSAAAAJ0SURBVHjaYvz//z8DrQATAw3BqOFYAaO9vT1FBhw4cGCAXA5MipxBQUHT3r17l0AVAxkZ/wkLC89as2ZNIcjlYkALXKnlWqBZTH/+/PEDmQsynLW/v3+NoaHhN2oYDjJn8uTJK4BMNpDhPwsLCwOKiop2+fn5vafEYC8vrw8gc/Lz8wOB3B8gw/nev38vn5WV5eTg4LA/Ly/vESsrK2npmYmJITU19SnQ8L0gc4DxpwgyF2S4EEjB58+f+crLy31YWFjOt7S0XBYUFPxHjMEcHBz/6+rqboqJiZ0qKSnxBpkDlRICGc4MU/j792+2CRMm+L18+fLSxIkTDykoKPzBZ7CoqOi/np6eE8rKylvb29v9fvz4wYEkzYKRzjk5OX/LyMjcnDRpEkjjdisrK6wRraOj8wvokAMLFy788ejRoxcaGhrPCWai4ODgB8DUE3/mzBknYMToASNoMzAfvEVW4+Tk9LmhoWFbTU2NwunTpx2BjiiMjo6+hm4WCzJHUlLyz+vXrxkfP36sDOI/ffpUPikpibe7u3sLsJjQW7VqlSrQxe+Avjmanp7u9PbtWzGQOmCCkARmmu/m5uYfT548yY/V5UpKSl+2b9+uiiz26dMnIWBSDTp27NgdYGrYCIzwE7m5uR4wg2Hg/PnzSsDI/QlKOcjZ3wGUBLm5uf+DwLdv38gub4AG/xcSEvr35s0bZmCB5sgCE/z69SsjyDJKMtG/f/8YQQYD8wkoGf8H51AbG5sH1CpbQBnQ09PzBiiHgoIFFHlBQGwLxLxUMP8dqJgH4k3gIhfIkAKVYkDMTmmhCHIxEL8A4peMo02L4WU4QIABANxZAoDIQDv3AAAAAElFTkSuQmCC\" />
            <span class=\"sf-toolbar-status\">";
            // line 7
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "messageCount"), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Messages</b>
                <span>";
            // line 12
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "messageCount"), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 14
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "mailers"));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 15
                echo "                <hr>
                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                // line 17
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $_name_, "html", null, true);
                echo "</b>
                    <span>";
                // line 18
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "messageCount", array(0 => $_name_), "method"), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Is spooled ?</b>
                    <span>";
                // line 22
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                echo (($this->getAttribute($_collector_, "isSpool", array(0 => $_name_), "method")) ? ("yes") : ("no"));
                echo "</span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 27
            echo "        ";
            if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $_profiler_url_)));
            // line 28
            echo "    ";
        }
    }

    // line 31
    public function block_menu($context, array $blocks = array())
    {
        // line 32
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAYAAABaKIzgAAAEDElEQVR42u2XWUhUURjHy6isILAebO+lonpJ8qkHM3NFVFxAUVFM0RSXUKnwwdAQn3wQE0MyA1MwBEUQcxvHZTTTHNcZl9DUGqd0JBOzcsZ7+n8XJ0Z0GueOVwg68GfmnLn3O7/7Lee7s4cxZpHq6uos0bb3+Q+6DrG3u7v7RHt7u3tbW9uD5ubm8qamJnlDQ4NKIpG8HhkZOU3X7BYoD9Tb22sjk8mcWltb70ul0pcAegugBfzOjKmzs/MJ7j0kCujw8PBhADkAKAVAz+EZGYA+08bmCN79qdFo7sGmjaWg+wgIIUtoaWl5CqDmxsbGj7SJpYK3uYWFBRnsDmEfWyGg+zs6OkIBNEoGxVB9fT2bnZ1VIHff03xmZuY29rUyF9QWT6sWC5I0OTk5rVAo3unnSqXyEfa1Nhf0Kp5UKRYk8lsDD0oM1/r6+l5h32Pmgl5UqVTP5ubmlEgBHRlCobC8vDzm5eXFHB0dRZWzs/OXsLCwu5SCpkBPo4DaMVRI9rbp6Wk1vnP+/v5kaFfk4eGhAcdJU6Dn+/v7q9aTnpPL5YqVlRV5eXm5Fk+7Gx7lCgsL68Fx2RToWST7C8McQgr8yMrKWkLu/hQz/LDNIZojycnJb8BxwRTocYT8oSEoQs8bSkpK0k5MTGgiIiK4nYYMDg7mcBLIo6OjP9Ec44opUGvIF+eoTg/a1dX1x2BISMgyKncpLS1tbacgU1NT2djY2HxoaOi8fg3jhilQK+gmQvBVD4qQbzDs4+ND6bBWUFCgtRQyJyeHdwSKdcODY9zaTgu9jheMcWOgJFdXV1ZZWclqamp0bm5uQoqGVVRUrFHBuru782tCQC+hW0j/BkpCPlGXIY9wfn5+5hQN5T3dS+cz5btg0DNTU1NFpkBra2tZaWkpy8jIYOPj4ywmJmY7RcMGBwdZZmYmKykpoa7ELPGozeLiYrIetKenZ5OhuLg4ft3T05OfJyQk8LDp6el/LRq6JiUlheb8vXgzY7m5uYJBD0LeeDnRApQ8sKloqK3GxsZuWEPrYzhiWHFx8ZZFMzo6yiIjIw1DTTZ+qNXqMRcXF0GgVpADKltDoCisDcbj4+NZfn7+ll5D9fKeprYbFRXFwsPDWVVV1SodPwEBAVueEtnZ2QNIhTkhoKRrAxhb5WhRURFzcnIyGmIcX9rq6uoPq6urAzqdrresrGwIHtMZux62OOT6AD4FgZ5bXl5+DMhv6P16j/KhCwoK2vHO5O3t/SsxMfG7ENAjkAOUBUkMvMVDiiFKDSGge6Gj0CUoGmffpvwSEfg7dUch/0LtkWcdvr6+a2JDBgYG6tDt6DXPTgjoKegOVAo1QVKR1AgVQ8GQrRDQA+uw9ushuSWSyLYdQRr7K/JP6DcTwr8i7Fj8pwAAAABJRU5ErkJggg==\" alt=\"Configuration\" /></span>
    <strong>E-Mails</strong>
    <span class=\"count\">
        <span>";
        // line 36
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "messageCount"), "html", null, true);
        echo "</span>
    </span>
</span>
";
    }

    // line 41
    public function block_panel($context, array $blocks = array())
    {
        // line 42
        echo "    <h2>Messages</h2>

    <table>
        <thead>
            <tr>
                <th scope=\"col\">Mailer</th>
                <th scope=\"col\">Messages</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 52
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "mailers"));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 53
            echo "                <tr>
                    <th>";
            // line 54
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo (($this->getAttribute($_collector_, "isDefaultMailer", array(0 => $_name_), "method")) ? (" (default mailer)") : (""));
            echo "</th>
                    <td>";
            // line 55
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "messageCount", array(0 => $_name_), "method"), "html", null, true);
            echo " ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo (($this->getAttribute($_collector_, "isSpool", array(0 => $_name_), "method")) ? ("spooled") : ("sent"));
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
    </table>

    ";
        // line 61
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "mailers"));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 62
            echo "        <h3>Mailer <em>";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "</em>";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo (($this->getAttribute($_collector_, "isDefaultMailer", array(0 => $_name_), "method")) ? (" (default mailer)") : (""));
            echo "</h3>

        ";
            // line 64
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if ((!$this->getAttribute($_collector_, "messages", array(0 => $_name_), "method"))) {
                // line 65
                echo "            <p>
                <em>No message sent.</em>
            </p>
        ";
            } else {
                // line 69
                echo "            <ul class=\"alt\">
                ";
                // line 70
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "messages", array(0 => $_name_), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 71
                    echo "                    <li class=\"";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($_loop_, "index")), "html", null, true);
                    echo "\">
                        ";
                    // line 72
                    if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_message_, "headers"), "all"));
                    foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                        // line 73
                        echo "                            <pre>";
                        if (isset($context["header"])) { $_header_ = $context["header"]; } else { $_header_ = null; }
                        echo twig_escape_filter($this->env, $_header_, "html", null, true);
                        echo "</pre>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "                        <pre>";
                    // line 76
                    if (isset($context["messagePart"])) { $_messagePart_ = $context["messagePart"]; } else { $_messagePart_ = null; }
                    if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                    if (($this->getAttribute($_messagePart_, "charset", array(), "any", true, true) && $this->getAttribute($_message_, "charset"))) {
                        // line 77
                        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                        echo twig_escape_filter($this->env, twig_convert_encoding(twig_escape_filter($this->env, $this->getAttribute($_message_, "body"), "html", $this->getAttribute($_message_, "charset")), "UTF-8", $this->getAttribute($_message_, "charset")), "html", null, true);
                    } else {
                        // line 79
                        if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_message_, "body"), "html");
                    }
                    // line 81
                    echo "</pre>
                        ";
                    // line 82
                    if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_message_, "children"));
                    foreach ($context['_seq'] as $context["_key"] => $context["messagePart"]) {
                        if (isset($context["messagePart"])) { $_messagePart_ = $context["messagePart"]; } else { $_messagePart_ = null; }
                        if ((($this->getAttribute($_messagePart_, "contentType") == "text/plain") || ($this->getAttribute($_messagePart_, "contentType") == "text/html"))) {
                            // line 83
                            echo "                            <h4>Alternative part</h4>
                            <pre>";
                            // line 85
                            if (isset($context["messagePart"])) { $_messagePart_ = $context["messagePart"]; } else { $_messagePart_ = null; }
                            if ($this->getAttribute($_messagePart_, "charset")) {
                                // line 86
                                if (isset($context["messagePart"])) { $_messagePart_ = $context["messagePart"]; } else { $_messagePart_ = null; }
                                echo twig_escape_filter($this->env, twig_convert_encoding(twig_escape_filter($this->env, $this->getAttribute($_messagePart_, "body"), "html", $this->getAttribute($_messagePart_, "charset")), "UTF-8", $this->getAttribute($_messagePart_, "charset")), "html", null, true);
                            } else {
                                // line 88
                                if (isset($context["messagePart"])) { $_messagePart_ = $context["messagePart"]; } else { $_messagePart_ = null; }
                                echo twig_escape_filter($this->env, $this->getAttribute($_messagePart_, "body"), "html");
                            }
                            // line 90
                            echo "</pre>
                        ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messagePart'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "            </ul>
        ";
            }
            // line 96
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Swiftmailer/Collector/swiftmailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 94,  293 => 92,  281 => 88,  277 => 86,  274 => 85,  271 => 83,  247 => 75,  237 => 73,  204 => 69,  178 => 61,  158 => 55,  150 => 54,  147 => 53,  142 => 52,  112 => 32,  109 => 31,  232 => 72,  226 => 71,  211 => 71,  202 => 68,  183 => 62,  171 => 54,  146 => 41,  124 => 35,  118 => 36,  59 => 11,  733 => 345,  728 => 344,  724 => 342,  720 => 340,  710 => 337,  705 => 336,  702 => 335,  688 => 327,  685 => 326,  682 => 325,  678 => 323,  668 => 320,  660 => 318,  646 => 310,  643 => 309,  640 => 308,  637 => 307,  633 => 305,  629 => 303,  621 => 300,  613 => 298,  609 => 296,  604 => 295,  598 => 293,  593 => 292,  590 => 291,  585 => 290,  577 => 284,  574 => 283,  570 => 281,  567 => 280,  564 => 279,  557 => 276,  551 => 272,  540 => 268,  537 => 267,  528 => 262,  522 => 258,  518 => 256,  511 => 254,  508 => 253,  502 => 249,  499 => 248,  495 => 246,  483 => 240,  479 => 238,  472 => 236,  469 => 235,  460 => 230,  454 => 226,  450 => 224,  443 => 222,  440 => 221,  432 => 215,  422 => 211,  411 => 207,  394 => 198,  387 => 195,  369 => 191,  334 => 183,  323 => 181,  315 => 179,  303 => 176,  288 => 174,  220 => 108,  168 => 90,  93 => 22,  49 => 9,  34 => 5,  31 => 4,  864 => 492,  861 => 491,  848 => 489,  843 => 488,  839 => 486,  826 => 485,  799 => 479,  796 => 478,  774 => 476,  756 => 475,  751 => 473,  746 => 472,  741 => 471,  736 => 470,  731 => 469,  726 => 468,  721 => 467,  718 => 466,  715 => 465,  697 => 334,  686 => 462,  670 => 456,  663 => 319,  658 => 453,  655 => 317,  653 => 451,  639 => 449,  634 => 446,  600 => 414,  579 => 411,  561 => 278,  558 => 409,  555 => 408,  547 => 270,  541 => 404,  269 => 136,  225 => 94,  208 => 70,  193 => 63,  190 => 85,  186 => 84,  180 => 59,  157 => 48,  154 => 74,  143 => 71,  129 => 36,  121 => 34,  103 => 45,  97 => 24,  94 => 42,  41 => 6,  28 => 3,  414 => 126,  407 => 123,  400 => 120,  391 => 197,  370 => 114,  361 => 111,  358 => 110,  354 => 109,  351 => 108,  344 => 106,  340 => 105,  336 => 104,  318 => 180,  312 => 96,  307 => 97,  295 => 96,  282 => 93,  262 => 85,  258 => 83,  251 => 81,  224 => 77,  209 => 76,  206 => 75,  175 => 95,  156 => 51,  152 => 49,  149 => 42,  144 => 45,  130 => 42,  127 => 41,  96 => 25,  64 => 11,  48 => 11,  39 => 7,  214 => 67,  196 => 64,  189 => 64,  174 => 63,  170 => 62,  162 => 59,  151 => 58,  134 => 41,  104 => 28,  100 => 27,  82 => 32,  65 => 23,  27 => 3,  95 => 33,  92 => 24,  86 => 21,  83 => 20,  76 => 18,  438 => 160,  435 => 159,  429 => 214,  426 => 213,  417 => 156,  412 => 155,  408 => 206,  405 => 152,  402 => 151,  399 => 150,  386 => 147,  383 => 146,  380 => 145,  374 => 192,  371 => 140,  367 => 113,  364 => 112,  353 => 131,  346 => 129,  343 => 128,  338 => 185,  325 => 101,  322 => 118,  314 => 114,  301 => 107,  290 => 103,  286 => 94,  283 => 100,  278 => 97,  270 => 92,  264 => 82,  261 => 81,  254 => 86,  243 => 79,  240 => 78,  236 => 78,  233 => 76,  228 => 73,  222 => 76,  215 => 73,  212 => 104,  207 => 70,  201 => 102,  194 => 64,  191 => 98,  184 => 53,  173 => 58,  167 => 43,  164 => 77,  123 => 27,  119 => 35,  116 => 47,  113 => 23,  102 => 20,  85 => 22,  81 => 19,  77 => 33,  50 => 14,  36 => 5,  79 => 25,  74 => 17,  72 => 13,  69 => 12,  66 => 13,  60 => 25,  52 => 10,  47 => 9,  45 => 7,  40 => 6,  37 => 5,  22 => 1,  185 => 58,  177 => 82,  165 => 89,  159 => 52,  148 => 42,  137 => 37,  133 => 40,  120 => 38,  117 => 37,  115 => 32,  110 => 31,  107 => 28,  101 => 27,  90 => 21,  87 => 24,  80 => 34,  70 => 15,  67 => 15,  62 => 14,  57 => 24,  54 => 12,  51 => 22,  44 => 7,  42 => 8,  32 => 5,  29 => 6,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 245,  489 => 244,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  455 => 176,  447 => 172,  439 => 168,  431 => 164,  423 => 160,  415 => 156,  403 => 205,  396 => 149,  392 => 141,  388 => 118,  381 => 137,  377 => 193,  373 => 134,  366 => 131,  362 => 189,  359 => 135,  356 => 127,  350 => 188,  347 => 107,  335 => 122,  332 => 121,  329 => 102,  320 => 113,  317 => 115,  309 => 111,  306 => 110,  300 => 175,  297 => 105,  292 => 95,  285 => 90,  275 => 96,  272 => 93,  267 => 32,  257 => 79,  253 => 77,  249 => 76,  242 => 81,  238 => 79,  234 => 78,  227 => 75,  223 => 73,  219 => 92,  216 => 106,  213 => 70,  210 => 69,  203 => 74,  198 => 65,  195 => 64,  192 => 65,  187 => 62,  182 => 57,  179 => 60,  176 => 47,  169 => 80,  166 => 51,  163 => 50,  160 => 49,  153 => 39,  145 => 54,  140 => 38,  132 => 42,  128 => 50,  125 => 49,  122 => 36,  114 => 52,  111 => 30,  108 => 31,  105 => 31,  98 => 26,  91 => 41,  88 => 40,  78 => 17,  75 => 16,  71 => 17,  68 => 24,  63 => 17,  56 => 12,  46 => 13,  43 => 7,  38 => 7,  35 => 6,  33 => 4,  30 => 3,);
    }
}
