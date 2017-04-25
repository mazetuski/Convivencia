<?php

/* @WebProfiler/Collector/twig.html.twig */
class __TwigTemplate_df4dd688994debb91266a04f713077f6f92a7889eebd1e2e54dfddc296d4bace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/twig.html.twig", 1);
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
        $__internal_34f6bd8473ddda1e239a9d8b760aaf0745d1174898ac66d373e358ffcc5334ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34f6bd8473ddda1e239a9d8b760aaf0745d1174898ac66d373e358ffcc5334ca->enter($__internal_34f6bd8473ddda1e239a9d8b760aaf0745d1174898ac66d373e358ffcc5334ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $__internal_96d1c994ba4c25e1e6ce1f6de3702e2c088c9db6571c7f1f9ce85949913ff0b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d1c994ba4c25e1e6ce1f6de3702e2c088c9db6571c7f1f9ce85949913ff0b1->enter($__internal_96d1c994ba4c25e1e6ce1f6de3702e2c088c9db6571c7f1f9ce85949913ff0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34f6bd8473ddda1e239a9d8b760aaf0745d1174898ac66d373e358ffcc5334ca->leave($__internal_34f6bd8473ddda1e239a9d8b760aaf0745d1174898ac66d373e358ffcc5334ca_prof);

        
        $__internal_96d1c994ba4c25e1e6ce1f6de3702e2c088c9db6571c7f1f9ce85949913ff0b1->leave($__internal_96d1c994ba4c25e1e6ce1f6de3702e2c088c9db6571c7f1f9ce85949913ff0b1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0fa6f7b82d5134e7f1fad5e747421b63409f5dbf3a4a1c7578ee01fb39a8da87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa6f7b82d5134e7f1fad5e747421b63409f5dbf3a4a1c7578ee01fb39a8da87->enter($__internal_0fa6f7b82d5134e7f1fad5e747421b63409f5dbf3a4a1c7578ee01fb39a8da87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4f750b4f932909548286a03a9fdc7057ef62e6f2a754ba213c50e4e49e3ae117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f750b4f932909548286a03a9fdc7057ef62e6f2a754ba213c50e4e49e3ae117->enter($__internal_4f750b4f932909548286a03a9fdc7057ef62e6f2a754ba213c50e4e49e3ae117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["time"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array())) ? (sprintf("%0.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array()))) : ("n/a"));
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["time"] ?? $this->getContext($context, "time")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, ($context["time"] ?? $this->getContext($context, "time")), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))));
        echo "
";
        
        $__internal_4f750b4f932909548286a03a9fdc7057ef62e6f2a754ba213c50e4e49e3ae117->leave($__internal_4f750b4f932909548286a03a9fdc7057ef62e6f2a754ba213c50e4e49e3ae117_prof);

        
        $__internal_0fa6f7b82d5134e7f1fad5e747421b63409f5dbf3a4a1c7578ee01fb39a8da87->leave($__internal_0fa6f7b82d5134e7f1fad5e747421b63409f5dbf3a4a1c7578ee01fb39a8da87_prof);

    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3095943ea118e785091c7300f52ffb00adfb9753923fa9866f56f64e276ffaae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3095943ea118e785091c7300f52ffb00adfb9753923fa9866f56f64e276ffaae->enter($__internal_3095943ea118e785091c7300f52ffb00adfb9753923fa9866f56f64e276ffaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e9e7c0bda1113d20c8776f307f2015a8834d13b10248935858fc98e51b08b623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e7c0bda1113d20c8776f307f2015a8834d13b10248935858fc98e51b08b623->enter($__internal_e9e7c0bda1113d20c8776f307f2015a8834d13b10248935858fc98e51b08b623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 34
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 35
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "</span>
        <strong>Twig</strong>
    </span>
";
        
        $__internal_e9e7c0bda1113d20c8776f307f2015a8834d13b10248935858fc98e51b08b623->leave($__internal_e9e7c0bda1113d20c8776f307f2015a8834d13b10248935858fc98e51b08b623_prof);

        
        $__internal_3095943ea118e785091c7300f52ffb00adfb9753923fa9866f56f64e276ffaae->leave($__internal_3095943ea118e785091c7300f52ffb00adfb9753923fa9866f56f64e276ffaae_prof);

    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f22980c926bc024bb708ea4ed27d5f075722abe02134618dea340569d379635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f22980c926bc024bb708ea4ed27d5f075722abe02134618dea340569d379635->enter($__internal_9f22980c926bc024bb708ea4ed27d5f075722abe02134618dea340569d379635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_69493ba290fc12d0b5c0d2833c77f4afba355fbcf44a791105fbc27972b185d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69493ba290fc12d0b5c0d2833c77f4afba355fbcf44a791105fbc27972b185d1->enter($__internal_69493ba290fc12d0b5c0d2833c77f4afba355fbcf44a791105fbc27972b185d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        echo "    ";
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()) == 0)) {
            // line 42
            echo "        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    ";
        } else {
            // line 48
            echo "        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 52
            echo twig_escape_filter($this->env, sprintf("%0.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array())), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templates", array()));
            foreach ($context['_seq'] as $context["template"] => $context["count"]) {
                // line 87
                echo "                <tr>
                    <td>";
                // line 88
                echo twig_escape_filter($this->env, $context["template"], "html", null, true);
                echo "</td>
                    <td class=\"font-normal\">";
                // line 89
                echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "htmlcallgraph", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        
        $__internal_69493ba290fc12d0b5c0d2833c77f4afba355fbcf44a791105fbc27972b185d1->leave($__internal_69493ba290fc12d0b5c0d2833c77f4afba355fbcf44a791105fbc27972b185d1_prof);

        
        $__internal_9f22980c926bc024bb708ea4ed27d5f075722abe02134618dea340569d379635->leave($__internal_9f22980c926bc024bb708ea4ed27d5f075722abe02134618dea340569d379635_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 98,  237 => 92,  228 => 89,  224 => 88,  221 => 87,  217 => 86,  195 => 67,  187 => 62,  179 => 57,  171 => 52,  165 => 48,  157 => 42,  154 => 41,  145 => 40,  131 => 35,  128 => 34,  119 => 33,  107 => 30,  104 => 29,  98 => 26,  91 => 22,  84 => 18,  77 => 14,  73 => 12,  71 => 11,  68 => 10,  62 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set time = collector.templatecount ? '%0.0f'|format(collector.time) : 'n/a' %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/twig.svg') }}
        <span class=\"sf-toolbar-value\">{{ time }}</span>
        <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>{{ time }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.templatecount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.blockcount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.macrocount }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/twig.svg') }}</span>
        <strong>Twig</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.templatecount == 0 %}
        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    {% else %}
        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.0f'|format(collector.time) }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.templatecount }}</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.blockcount }}</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.macrocount }}</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            {% for template, count in collector.templates %}
                <tr>
                    <td>{{ template }}</td>
                    <td class=\"font-normal\">{{ count }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            {{ collector.htmlcallgraph }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/twig.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\twig.html.twig");
    }
}
