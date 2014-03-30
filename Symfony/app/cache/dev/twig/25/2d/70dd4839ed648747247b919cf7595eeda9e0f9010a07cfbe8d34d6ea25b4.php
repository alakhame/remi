<?php

/* @WebProfiler/Collector/form.html.twig */
class __TwigTemplate_252d70dd4839ed648747247b919cf7595eeda9e0f9010a07cfbe8d34d6ea25b4 extends Twig_Template
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
        $context["__internal_f4beb5d8afbedbfae2bfda82d30e18796c5ba4dc27e64c1e3c7f1425cc1477ad"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "data"))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"20\" height=\"28\" alt=\"Forms\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAYElEQVRIiWNgGHGAEZ+knZ3df2zihw4dwqmPiVIXoQMMm3C5ChdAdy0LsgH4vIIPIJtBdS9T3UAWdAFyvQ0DjKRGAiEwQsIQOdioHoYoLqRGwh514VB0IakWjsC8PAIBAMl9LomdN/ohAAAAAElFTkSuQmCC\"/>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 9
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($this->getAttribute($_collector_, "data"), "nb_errors")) {
                echo "red";
            } else {
                echo "green";
            }
            echo "\">";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($this->getAttribute($_collector_, "data"), "nb_errors")) {
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "data"), "nb_errors"), "html", null, true);
            } else {
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "data"), "forms")), "html", null, true);
            }
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => $_profiler_url_)));
            // line 13
            echo "    ";
        }
    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        // line 17
        echo "    <span class=\"label\">
        <span class=\"icon\"><img src=\"data:image/png;base64,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\" alt=\"\"/></span>
        <strong>Forms</strong>
        ";
        // line 20
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "data"), "forms"))) {
            // line 21
            echo "            <span class=\"count\"><span>";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "data"), "forms")), "html", null, true);
            echo "</span></span>
        ";
        }
        // line 23
        echo "    </span>
";
    }

    // line 26
    public function block_panel($context, array $blocks = array())
    {
        // line 27
        echo "    <style type=\"text/css\">
    .window {
        /*background: #F6F6F6;*/
        margin: -30px -40px -40px;
    }
    .tree {
        width: 230px;
        padding: 10px;
        font-size: 12px;
        float: left;
    }
    #content .tree h2 {
        font-size: 13px;
        padding: 5px 7px;
        margin: 0;
    }
    .tree li {
        margin: 0;
        padding: 0;
        width: 100%;
    }
    .tree a {
        text-decoration: none;
        display: block;
        padding: 5px 7px;
        border-radius: 6px;
        color: #313131;
    }
    .tree ul ul a {
        padding-left: 22px;
    }
    .tree ul ul ul a {
        padding-left: 37px;
    }
    .tree ul ul ul ul a {
        padding-left: 52px;
    }
    .tree ul ul ul ul ul a {
        padding-left: 67px;
    }
    .tree a:hover {
        background: #dfdfdf;
    }
    .tree a.active, a.active:hover {
        background: #dfdfdf;
        font-weight: bold;
        color: #313131;
    }
    .tree-details {
        border-left: 1px solid #dfdfdf;
        background: white;
        margin-left: 250px;
        padding: 30px 40px 40px;
    }
    .form-type {
        color: #999999;
    }
    .hidden {
        display: none;
    }
    </style>

    ";
        // line 89
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_collector_, "data"), "forms"))) {
            // line 90
            echo "        <div class=\"window\">
            <div class=\"tree\">
                <h2>Forms</h2>

                <ul>
                ";
            // line 95
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_collector_, "data"), "forms"));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 96
                echo "                    ";
                if (isset($context["formName"])) { $_formName_ = $context["formName"]; } else { $_formName_ = null; }
                if (isset($context["formData"])) { $_formData_ = $context["formData"]; } else { $_formData_ = null; }
                echo $context["__internal_f4beb5d8afbedbfae2bfda82d30e18796c5ba4dc27e64c1e3c7f1425cc1477ad"]->getform_tree_entry($_formName_, $_formData_);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                </ul>
            </div>

            ";
            // line 101
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_collector_, "data"), "forms"));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 102
                echo "                ";
                if (isset($context["formName"])) { $_formName_ = $context["formName"]; } else { $_formName_ = null; }
                if (isset($context["formData"])) { $_formData_ = $context["formData"]; } else { $_formData_ = null; }
                echo $context["__internal_f4beb5d8afbedbfae2bfda82d30e18796c5ba4dc27e64c1e3c7f1425cc1477ad"]->getform_tree_details($_formName_, $_formData_);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "        </div>
    ";
        } else {
            // line 106
            echo "        <p><em>No forms were submitted for this request.</em></p>
    ";
        }
        // line 108
        echo "
    <script>
    function TabView() {
        var _activeLink = null,
            _activeView = null;

        this.init = function () {
            var links = document.querySelectorAll('.tree a'),
                views = document.querySelectorAll('.tree-details'),
                i,
                l;

            for (i = 0, l = links.length; i < l; ++i) {
                (function () {
                    var link = links[i];

                    link.addEventListener('click', function (e) {
                        var href = link.getAttribute('href'),
                            targetId = href.substr(href.indexOf('#') + 1),
                            view = document.getElementById(targetId);

                        if (view) {
                            if (null !== _activeLink) {
                                Sfjs.removeClass(_activeLink, 'active');
                            }

                            if (null !== _activeView) {
                                Sfjs.addClass(_activeView, 'hidden');
                            }

                            Sfjs.addClass(link, 'active');
                            Sfjs.removeClass(view, 'hidden');

                            _activeLink = link;
                            _activeView = view;
                        }

                        e.preventDefault();

                        return false;
                    })
                }());
            }

            for (i = 0, l = views.length; i < l; ++i) {
                Sfjs.addClass(views[i], 'hidden');
            }

            if (links.length > 0) {
                Sfjs.addClass(links[0], 'active');
                _activeLink = links[0];

                if (views.length > 0) {
                    Sfjs.removeClass(views[0], 'hidden');
                    _activeView = views[0];
                }
            }
        }
    }

    var tabView = new TabView();

    tabView.init();
    </script>
";
    }

    // line 174
    public function getform_tree_entry($_name = null, $_data = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "data" => $_data,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 175
            echo "    <li>
        <a href=\"#details_";
            // line 176
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "</a>

        ";
            // line 178
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ((!twig_test_empty($this->getAttribute($_data_, "children")))) {
                // line 179
                echo "            <ul>
                ";
                // line 180
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "children"));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 181
                    echo "                    ";
                    if (isset($context["childName"])) { $_childName_ = $context["childName"]; } else { $_childName_ = null; }
                    if (isset($context["childData"])) { $_childData_ = $context["childData"]; } else { $_childData_ = null; }
                    echo $this->getAttribute($this, "form_tree_entry", array(0 => $_childName_, 1 => $_childData_), "method");
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 183
                echo "            </ul>
        ";
            }
            // line 185
            echo "    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 188
    public function getform_tree_details($_name = null, $_data = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "data" => $_data,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 189
            echo "    <div class=\"tree-details\" id=\"details_";
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_data_, "id"), "html", null, true);
            echo "\">
        <h2>
            ";
            // line 191
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "
            ";
            // line 192
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ($this->getAttribute($_data_, "type_class", array(), "any", true, true)) {
                // line 193
                echo "            <span class=\"form-type\">[<abbr title=\"";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "type_class"), "html", null, true);
                echo "\">";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "type"), "html", null, true);
                echo "</abbr>]</span>
            ";
            }
            // line 195
            echo "        </h2>

        ";
            // line 197
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if (($this->getAttribute($_data_, "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($_data_, "errors")) > 0))) {
                // line 198
                echo "        <h3>Errors</h3>

        <table>
            <tr>
                <th width=\"50%\">Message</th>
                <th>Cause</th>
            </tr>
            ";
                // line 205
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "errors"));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 206
                    echo "            <tr>
                <td>";
                    // line 207
                    if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_error_, "message"), "html", null, true);
                    echo "</td>
                <td><em>Unknown.</em></td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 211
                echo "        </table>
        ";
            }
            // line 213
            echo "
        ";
            // line 214
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ($this->getAttribute($_data_, "default_data", array(), "any", true, true)) {
                // line 215
                echo "        <h3>Default Data</h3>

        <table>
            <tr>
                <th width=\"180\">Model Format</th>
                <td>
                    ";
                // line 221
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                if ($this->getAttribute($this->getAttribute($_data_, "default_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                    // line 222
                    echo "                        <pre>";
                    if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "default_data"), "model"), "html", null, true);
                    echo "</pre>
                    ";
                } else {
                    // line 224
                    echo "                        <em>same as normalized format</em>
                    ";
                }
                // line 226
                echo "                </td>
            </tr>
            <tr>
                <th>Normalized Format</th>
                <td><pre>";
                // line 230
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "default_data"), "norm"), "html", null, true);
                echo "</pre></td>
            </tr>
            <tr>
                <th>View Format</th>
                <td>
                    ";
                // line 235
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                if ($this->getAttribute($this->getAttribute($_data_, "default_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                    // line 236
                    echo "                        <pre>";
                    if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "default_data"), "view"), "html", null, true);
                    echo "</pre>
                    ";
                } else {
                    // line 238
                    echo "                        <em>same as normalized format</em>
                    ";
                }
                // line 240
                echo "                </td>
            </tr>
        </table>
        ";
            }
            // line 244
            echo "
        ";
            // line 245
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ($this->getAttribute($_data_, "submitted_data", array(), "any", true, true)) {
                // line 246
                echo "        <h3>Submitted Data</h3>

        ";
                // line 248
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                if ($this->getAttribute($this->getAttribute($_data_, "submitted_data", array(), "any", false, true), "norm", array(), "any", true, true)) {
                    // line 249
                    echo "            <table>
                <tr>
                    <th width=\"180\">View Format</th>
                    <td>
                        ";
                    // line 253
                    if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                    if ($this->getAttribute($this->getAttribute($_data_, "submitted_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                        // line 254
                        echo "                            <pre>";
                        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "submitted_data"), "view"), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 256
                        echo "                            <em>same as normalized format</em>
                        ";
                    }
                    // line 258
                    echo "                    </td>
                </tr>
                <tr>
                    <th>Normalized Format</th>
                    <td><pre>";
                    // line 262
                    if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "submitted_data"), "norm"), "html", null, true);
                    echo "</pre></td>
                </tr>
                <tr>
                    <th>Model Format</th>
                    <td>
                        ";
                    // line 267
                    if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                    if ($this->getAttribute($this->getAttribute($_data_, "submitted_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                        // line 268
                        echo "                            <pre>";
                        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "submitted_data"), "model"), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 270
                        echo "                            <em>same as normalized format</em>
                        ";
                    }
                    // line 272
                    echo "                    </td>
                </tr>
            </table>
        ";
                } else {
                    // line 276
                    echo "            <p><em>This form was not submitted.</em></p>
        ";
                }
                // line 278
                echo "        ";
            }
            // line 279
            echo "
        ";
            // line 280
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ($this->getAttribute($_data_, "passed_options", array(), "any", true, true)) {
                // line 281
                echo "        <h3>Passed Options</h3>

        ";
                // line 283
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                if (twig_length_filter($this->env, $this->getAttribute($_data_, "passed_options"))) {
                    // line 284
                    echo "        <table>
            <tr>
                <th width=\"180\">Option</th>
                <th>Passed Value</th>
                <th>Resolved Value</th>
            </tr>
            ";
                    // line 290
                    if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "passed_options"));
                    foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                        // line 291
                        echo "            <tr>
                <th>";
                        // line 292
                        if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                        echo twig_escape_filter($this->env, $_option_, "html", null, true);
                        echo "</th>
                <td><pre>";
                        // line 293
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        echo twig_escape_filter($this->env, $_value_, "html", null, true);
                        echo "</pre></td>
                <td>
                    ";
                        // line 295
                        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                        if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                        if (($this->getAttribute($this->getAttribute($_data_, "resolved_options"), $_option_, array(), "array") === $_value_)) {
                            // line 296
                            echo "                        <em>same as passed value</em>
                    ";
                        } else {
                            // line 298
                            echo "                        <pre>";
                            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                            if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_data_, "resolved_options"), $_option_, array(), "array"), "html", null, true);
                            echo "</pre>
                    ";
                        }
                        // line 300
                        echo "                </td>
            </tr>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 303
                    echo "        </table>
        ";
                } else {
                    // line 305
                    echo "        <p><em>No options where passed when constructing this form.</em></p>
        ";
                }
                // line 307
                echo "        ";
            }
            // line 308
            echo "
        ";
            // line 309
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ($this->getAttribute($_data_, "resolved_options", array(), "any", true, true)) {
                // line 310
                echo "        <h3>Resolved Options</h3>

        <table>
            <tr>
                <th width=\"180\">Option</th>
                <th>Value</th>
            </tr>
            ";
                // line 317
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "resolved_options"));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 318
                    echo "            <tr>
                <th>";
                    // line 319
                    if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                    echo twig_escape_filter($this->env, $_option_, "html", null, true);
                    echo "</th>
                <td><pre>";
                    // line 320
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $_value_, "html", null, true);
                    echo "</pre></td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 323
                echo "        </table>
        ";
            }
            // line 325
            echo "
        ";
            // line 326
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            if ($this->getAttribute($_data_, "view_vars", array(), "any", true, true)) {
                // line 327
                echo "        <h3>View Variables</h3>

        <table>
            <tr>
                <th width=\"180\">Variable</th>
                <th>Value</th>
            </tr>
            ";
                // line 334
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "view_vars"));
                foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                    // line 335
                    echo "            <tr>
                <th>";
                    // line 336
                    if (isset($context["variable"])) { $_variable_ = $context["variable"]; } else { $_variable_ = null; }
                    echo twig_escape_filter($this->env, $_variable_, "html", null, true);
                    echo "</th>
                <td><pre>";
                    // line 337
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo twig_escape_filter($this->env, $_value_, "html", null, true);
                    echo "</pre></td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['variable'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 340
                echo "        </table>
        ";
            }
            // line 342
            echo "    </div>

    ";
            // line 344
            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_data_, "children"));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 345
                echo "        ";
                if (isset($context["childName"])) { $_childName_ = $context["childName"]; } else { $_childName_ = null; }
                if (isset($context["childData"])) { $_childData_ = $context["childData"]; } else { $_childData_ = null; }
                echo $this->getAttribute($this, "form_tree_details", array(0 => $_childName_, 1 => $_childData_), "method");
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  733 => 345,  728 => 344,  724 => 342,  720 => 340,  710 => 337,  705 => 336,  702 => 335,  688 => 327,  685 => 326,  682 => 325,  678 => 323,  668 => 320,  660 => 318,  646 => 310,  643 => 309,  640 => 308,  637 => 307,  633 => 305,  629 => 303,  621 => 300,  613 => 298,  609 => 296,  604 => 295,  598 => 293,  593 => 292,  590 => 291,  585 => 290,  577 => 284,  574 => 283,  570 => 281,  567 => 280,  564 => 279,  557 => 276,  551 => 272,  540 => 268,  537 => 267,  528 => 262,  522 => 258,  518 => 256,  511 => 254,  508 => 253,  502 => 249,  499 => 248,  495 => 246,  483 => 240,  479 => 238,  472 => 236,  469 => 235,  460 => 230,  454 => 226,  450 => 224,  443 => 222,  440 => 221,  432 => 215,  422 => 211,  411 => 207,  394 => 198,  387 => 195,  369 => 191,  334 => 183,  323 => 181,  315 => 179,  303 => 176,  288 => 174,  220 => 108,  168 => 90,  93 => 23,  49 => 14,  34 => 5,  31 => 4,  864 => 492,  861 => 491,  848 => 489,  843 => 488,  839 => 486,  826 => 485,  799 => 479,  796 => 478,  774 => 476,  756 => 475,  751 => 473,  746 => 472,  741 => 471,  736 => 470,  731 => 469,  726 => 468,  721 => 467,  718 => 466,  715 => 465,  697 => 334,  686 => 462,  670 => 456,  663 => 319,  658 => 453,  655 => 317,  653 => 451,  639 => 449,  634 => 446,  600 => 414,  579 => 411,  561 => 278,  558 => 409,  555 => 408,  547 => 270,  541 => 404,  269 => 136,  225 => 94,  208 => 90,  193 => 86,  190 => 85,  186 => 84,  180 => 96,  157 => 75,  154 => 74,  143 => 71,  129 => 61,  121 => 57,  103 => 45,  97 => 43,  94 => 42,  41 => 19,  28 => 3,  414 => 126,  407 => 123,  400 => 120,  391 => 197,  370 => 114,  361 => 111,  358 => 110,  354 => 109,  351 => 108,  344 => 106,  340 => 105,  336 => 104,  318 => 180,  312 => 178,  307 => 97,  295 => 96,  282 => 93,  262 => 85,  258 => 83,  251 => 81,  224 => 77,  209 => 76,  206 => 75,  175 => 95,  156 => 51,  152 => 49,  149 => 73,  144 => 45,  130 => 40,  127 => 39,  96 => 25,  64 => 11,  48 => 11,  39 => 7,  214 => 67,  196 => 101,  189 => 64,  174 => 63,  170 => 62,  162 => 59,  151 => 58,  134 => 41,  104 => 39,  100 => 27,  82 => 32,  65 => 23,  27 => 3,  95 => 33,  92 => 24,  86 => 21,  83 => 20,  76 => 24,  438 => 160,  435 => 159,  429 => 214,  426 => 213,  417 => 156,  412 => 155,  408 => 206,  405 => 152,  402 => 151,  399 => 150,  386 => 147,  383 => 146,  380 => 145,  374 => 192,  371 => 140,  367 => 113,  364 => 112,  353 => 131,  346 => 129,  343 => 128,  338 => 185,  325 => 101,  322 => 118,  314 => 114,  301 => 107,  290 => 103,  286 => 94,  283 => 100,  278 => 97,  270 => 92,  264 => 89,  261 => 88,  254 => 86,  243 => 79,  240 => 78,  236 => 78,  233 => 76,  228 => 73,  222 => 93,  215 => 67,  212 => 104,  207 => 63,  201 => 102,  194 => 57,  191 => 98,  184 => 53,  173 => 46,  167 => 43,  164 => 77,  123 => 27,  119 => 35,  116 => 47,  113 => 23,  102 => 20,  85 => 21,  81 => 19,  77 => 33,  50 => 14,  36 => 5,  79 => 25,  74 => 17,  72 => 13,  69 => 12,  66 => 18,  60 => 25,  52 => 13,  47 => 9,  45 => 9,  40 => 6,  37 => 5,  22 => 1,  185 => 58,  177 => 82,  165 => 89,  159 => 52,  148 => 42,  137 => 42,  133 => 40,  120 => 38,  117 => 37,  115 => 36,  110 => 31,  107 => 30,  101 => 27,  90 => 34,  87 => 24,  80 => 34,  70 => 13,  67 => 12,  62 => 16,  57 => 24,  54 => 12,  51 => 22,  44 => 7,  42 => 8,  32 => 5,  29 => 6,  517 => 202,  506 => 199,  501 => 198,  498 => 197,  492 => 245,  489 => 244,  481 => 189,  478 => 188,  471 => 184,  463 => 180,  455 => 176,  447 => 172,  439 => 168,  431 => 164,  423 => 160,  415 => 156,  403 => 205,  396 => 149,  392 => 141,  388 => 118,  381 => 137,  377 => 193,  373 => 134,  366 => 131,  362 => 189,  359 => 135,  356 => 127,  350 => 188,  347 => 107,  335 => 122,  332 => 121,  329 => 102,  320 => 113,  317 => 115,  309 => 111,  306 => 110,  300 => 175,  297 => 105,  292 => 95,  285 => 96,  275 => 96,  272 => 93,  267 => 32,  257 => 87,  253 => 85,  249 => 83,  242 => 81,  238 => 79,  234 => 78,  227 => 75,  223 => 73,  219 => 92,  216 => 106,  213 => 70,  210 => 69,  203 => 74,  198 => 58,  195 => 64,  192 => 65,  187 => 54,  182 => 57,  179 => 60,  176 => 47,  169 => 80,  166 => 60,  163 => 55,  160 => 54,  153 => 39,  145 => 54,  140 => 46,  132 => 42,  128 => 50,  125 => 49,  122 => 36,  114 => 52,  111 => 51,  108 => 31,  105 => 31,  98 => 26,  91 => 41,  88 => 40,  78 => 17,  75 => 16,  71 => 30,  68 => 24,  63 => 17,  56 => 16,  46 => 13,  43 => 12,  38 => 7,  35 => 6,  33 => 4,  30 => 3,);
    }
}
