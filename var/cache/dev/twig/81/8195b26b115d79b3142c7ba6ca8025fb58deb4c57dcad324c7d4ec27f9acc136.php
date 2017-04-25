<?php

/* @WebProfiler/Collector/events.html.twig */
class __TwigTemplate_1543053f374a2f1376cc7abad97447444c7d5964001330c35fa0e9a23e505a6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/events.html.twig", 1);
        $this->blocks = array(
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
        $__internal_240ea9a3541b76989792b44dbdb3249c8bd72a1bc0e7e88bb81c7218b0c40c66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240ea9a3541b76989792b44dbdb3249c8bd72a1bc0e7e88bb81c7218b0c40c66->enter($__internal_240ea9a3541b76989792b44dbdb3249c8bd72a1bc0e7e88bb81c7218b0c40c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        $__internal_ab64f8aa75a6faa8445fc44022b630a4fa4c0998ab7443e8663fc16d0be9b0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab64f8aa75a6faa8445fc44022b630a4fa4c0998ab7443e8663fc16d0be9b0b2->enter($__internal_ab64f8aa75a6faa8445fc44022b630a4fa4c0998ab7443e8663fc16d0be9b0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_240ea9a3541b76989792b44dbdb3249c8bd72a1bc0e7e88bb81c7218b0c40c66->leave($__internal_240ea9a3541b76989792b44dbdb3249c8bd72a1bc0e7e88bb81c7218b0c40c66_prof);

        
        $__internal_ab64f8aa75a6faa8445fc44022b630a4fa4c0998ab7443e8663fc16d0be9b0b2->leave($__internal_ab64f8aa75a6faa8445fc44022b630a4fa4c0998ab7443e8663fc16d0be9b0b2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f4befdf7818a98fec67493b778e6cb346162137b5fafcc3fe176589027077e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4befdf7818a98fec67493b778e6cb346162137b5fafcc3fe176589027077e9->enter($__internal_7f4befdf7818a98fec67493b778e6cb346162137b5fafcc3fe176589027077e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6837875ead543689fac2c8978fdb0d59fdcd1508e12c55ff159a9235cb625846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6837875ead543689fac2c8978fdb0d59fdcd1508e12c55ff159a9235cb625846->enter($__internal_6837875ead543689fac2c8978fdb0d59fdcd1508e12c55ff159a9235cb625846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "</span>
    <strong>Events</strong>
</span>
";
        
        $__internal_6837875ead543689fac2c8978fdb0d59fdcd1508e12c55ff159a9235cb625846->leave($__internal_6837875ead543689fac2c8978fdb0d59fdcd1508e12c55ff159a9235cb625846_prof);

        
        $__internal_7f4befdf7818a98fec67493b778e6cb346162137b5fafcc3fe176589027077e9->leave($__internal_7f4befdf7818a98fec67493b778e6cb346162137b5fafcc3fe176589027077e9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8f6898455afdbc503f8c7659a9850a8a54b9e035b04cea6abb8b2fc4f1a9b1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8f6898455afdbc503f8c7659a9850a8a54b9e035b04cea6abb8b2fc4f1a9b1f->enter($__internal_d8f6898455afdbc503f8c7659a9850a8a54b9e035b04cea6abb8b2fc4f1a9b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4acf305f54ea4d6e5a3bd9f95322c9414cbb894178e040da13443f1da289a0c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4acf305f54ea4d6e5a3bd9f95322c9414cbb894178e040da13443f1da289a0c8->enter($__internal_4acf305f54ea4d6e5a3bd9f95322c9414cbb894178e040da13443f1da289a0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    <h2>Event Dispatcher</h2>

    ";
        // line 15
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledlisteners", array()))) {
            // line 16
            echo "        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 20
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">";
            // line 22
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledlisteners", array())), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 25
            echo $context["helper"]->getrender_table($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledlisteners", array()));
            echo "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notcalledlisteners", array())), "html", null, true);
            echo "</span></h3>
                <div class=\"tab-content\">
                    ";
            // line 32
            if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notcalledlisteners", array()))) {
                // line 33
                echo "                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    ";
            } else {
                // line 44
                echo "                        ";
                echo $context["helper"]->getrender_table($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notcalledlisteners", array()));
                echo "
                    ";
            }
            // line 46
            echo "                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_4acf305f54ea4d6e5a3bd9f95322c9414cbb894178e040da13443f1da289a0c8->leave($__internal_4acf305f54ea4d6e5a3bd9f95322c9414cbb894178e040da13443f1da289a0c8_prof);

        
        $__internal_d8f6898455afdbc503f8c7659a9850a8a54b9e035b04cea6abb8b2fc4f1a9b1f->leave($__internal_d8f6898455afdbc503f8c7659a9850a8a54b9e035b04cea6abb8b2fc4f1a9b1f_prof);

    }

    // line 52
    public function getrender_table($__listeners__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "listeners" => $__listeners__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_871ae477f8f873c82686a69fd047d2af4b50768d9226e46b8c096876daa76c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_871ae477f8f873c82686a69fd047d2af4b50768d9226e46b8c096876daa76c48->enter($__internal_871ae477f8f873c82686a69fd047d2af4b50768d9226e46b8c096876daa76c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_cdefceb950779eec086d7a0ba02c60d94714a54d5c8789bf386997bd3113277c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_cdefceb950779eec086d7a0ba02c60d94714a54d5c8789bf386997bd3113277c->enter($__internal_cdefceb950779eec086d7a0ba02c60d94714a54d5c8789bf386997bd3113277c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 53
            echo "    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        ";
            // line 61
            $context["previous_event"] = $this->getAttribute(twig_first($this->env, ($context["listeners"] ?? $this->getContext($context, "listeners"))), "event", array());
            // line 62
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listeners"] ?? $this->getContext($context, "listeners")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 63
                echo "            ";
                if (($this->getAttribute($context["loop"], "first", array()) || ($this->getAttribute($context["listener"], "event", array()) != ($context["previous_event"] ?? $this->getContext($context, "previous_event"))))) {
                    // line 64
                    echo "                ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 65
                        echo "                    </tbody>
                ";
                    }
                    // line 67
                    echo "
                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "event", array()), "html", null, true);
                    echo "</th>
                    </tr>

                ";
                    // line 73
                    $context["previous_event"] = $this->getAttribute($context["listener"], "event", array());
                    // line 74
                    echo "            ";
                }
                // line 75
                echo "
            <tr>
                <td class=\"text-right\">";
                // line 77
                echo twig_escape_filter($this->env, (($this->getAttribute($context["listener"], "priority", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["listener"], "priority", array()), "-")) : ("-")), "html", null, true);
                echo "</td>
                <td class=\"font-normal\">";
                // line 78
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["listener"], "data", array())));
                echo "</td>
            </tr>

            ";
                // line 81
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 82
                    echo "                </tbody>
            ";
                }
                // line 84
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "    </table>
";
            
            $__internal_cdefceb950779eec086d7a0ba02c60d94714a54d5c8789bf386997bd3113277c->leave($__internal_cdefceb950779eec086d7a0ba02c60d94714a54d5c8789bf386997bd3113277c_prof);

            
            $__internal_871ae477f8f873c82686a69fd047d2af4b50768d9226e46b8c096876daa76c48->leave($__internal_871ae477f8f873c82686a69fd047d2af4b50768d9226e46b8c096876daa76c48_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 85,  243 => 84,  239 => 82,  237 => 81,  231 => 78,  227 => 77,  223 => 75,  220 => 74,  218 => 73,  212 => 70,  207 => 67,  203 => 65,  200 => 64,  197 => 63,  179 => 62,  177 => 61,  167 => 53,  149 => 52,  135 => 46,  129 => 44,  116 => 33,  114 => 32,  109 => 30,  101 => 25,  95 => 22,  91 => 20,  85 => 16,  83 => 15,  79 => 13,  70 => 12,  56 => 7,  53 => 6,  44 => 5,  34 => 1,  32 => 3,  11 => 1,);
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

{% import _self as helper %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/event.svg') }}</span>
    <strong>Events</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Event Dispatcher</h2>

    {% if collector.calledlisteners is empty %}
        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    {% else %}
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">{{ collector.calledlisteners|length }}</span></h3>

                <div class=\"tab-content\">
                    {{ helper.render_table(collector.calledlisteners) }}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">{{ collector.notcalledlisteners|length }}</span></h3>
                <div class=\"tab-content\">
                    {% if collector.notcalledlisteners is empty %}
                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    {% else %}
                        {{ helper.render_table(collector.notcalledlisteners) }}
                    {% endif %}
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% macro render_table(listeners) %}
    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        {% set previous_event = (listeners|first).event %}
        {% for listener in listeners %}
            {% if loop.first or listener.event != previous_event %}
                {% if not loop.first %}
                    </tbody>
                {% endif %}

                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">{{ listener.event }}</th>
                    </tr>

                {% set previous_event = listener.event %}
            {% endif %}

            <tr>
                <td class=\"text-right\">{{ listener.priority|default('-') }}</td>
                <td class=\"font-normal\">{{ profiler_dump(listener.data) }}</td>
            </tr>

            {% if loop.last %}
                </tbody>
            {% endif %}
        {% endfor %}
    </table>
{% endmacro %}
", "@WebProfiler/Collector/events.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\events.html.twig");
    }
}
