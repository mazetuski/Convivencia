<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f39563a0c23aa30a394e02113d2b35c1e002ed6bbe7161609072da9eeb8d05bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_cb53b4b67930f11dd56772c0ceedc8027855aacecc964b7aa8f4689a47b24421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb53b4b67930f11dd56772c0ceedc8027855aacecc964b7aa8f4689a47b24421->enter($__internal_cb53b4b67930f11dd56772c0ceedc8027855aacecc964b7aa8f4689a47b24421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ca7bf4ff329f8ace9f2ae047619ef3e60f403e9965c6953f331f3e5f5707d6e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7bf4ff329f8ace9f2ae047619ef3e60f403e9965c6953f331f3e5f5707d6e2->enter($__internal_ca7bf4ff329f8ace9f2ae047619ef3e60f403e9965c6953f331f3e5f5707d6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb53b4b67930f11dd56772c0ceedc8027855aacecc964b7aa8f4689a47b24421->leave($__internal_cb53b4b67930f11dd56772c0ceedc8027855aacecc964b7aa8f4689a47b24421_prof);

        
        $__internal_ca7bf4ff329f8ace9f2ae047619ef3e60f403e9965c6953f331f3e5f5707d6e2->leave($__internal_ca7bf4ff329f8ace9f2ae047619ef3e60f403e9965c6953f331f3e5f5707d6e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_df7eda652d35308413052998bf3b4690afe3c896099cc5e505429cb8f1b512fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df7eda652d35308413052998bf3b4690afe3c896099cc5e505429cb8f1b512fb->enter($__internal_df7eda652d35308413052998bf3b4690afe3c896099cc5e505429cb8f1b512fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_84aff111aeea202863c8e38fe4a124e366748c60225e8796e6d6a070dc28915b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84aff111aeea202863c8e38fe4a124e366748c60225e8796e6d6a070dc28915b->enter($__internal_84aff111aeea202863c8e38fe4a124e366748c60225e8796e6d6a070dc28915b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_84aff111aeea202863c8e38fe4a124e366748c60225e8796e6d6a070dc28915b->leave($__internal_84aff111aeea202863c8e38fe4a124e366748c60225e8796e6d6a070dc28915b_prof);

        
        $__internal_df7eda652d35308413052998bf3b4690afe3c896099cc5e505429cb8f1b512fb->leave($__internal_df7eda652d35308413052998bf3b4690afe3c896099cc5e505429cb8f1b512fb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e88d5eef839931de190d851d6ad0dba2ee49d06ff9ef4594407da0734a839238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e88d5eef839931de190d851d6ad0dba2ee49d06ff9ef4594407da0734a839238->enter($__internal_e88d5eef839931de190d851d6ad0dba2ee49d06ff9ef4594407da0734a839238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_871dd696ef749925c447f5589bbd28f79e8b9534c6cec8e74c3b8d7791696021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871dd696ef749925c447f5589bbd28f79e8b9534c6cec8e74c3b8d7791696021->enter($__internal_871dd696ef749925c447f5589bbd28f79e8b9534c6cec8e74c3b8d7791696021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_871dd696ef749925c447f5589bbd28f79e8b9534c6cec8e74c3b8d7791696021->leave($__internal_871dd696ef749925c447f5589bbd28f79e8b9534c6cec8e74c3b8d7791696021_prof);

        
        $__internal_e88d5eef839931de190d851d6ad0dba2ee49d06ff9ef4594407da0734a839238->leave($__internal_e88d5eef839931de190d851d6ad0dba2ee49d06ff9ef4594407da0734a839238_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1bc6588539d1f441034f7c41290618bbf87f792d106bd915c6e979663d16936b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc6588539d1f441034f7c41290618bbf87f792d106bd915c6e979663d16936b->enter($__internal_1bc6588539d1f441034f7c41290618bbf87f792d106bd915c6e979663d16936b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2231bd5c984818a228362b18b250a8fee1f7aae280d21d1710ef19400e6db238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2231bd5c984818a228362b18b250a8fee1f7aae280d21d1710ef19400e6db238->enter($__internal_2231bd5c984818a228362b18b250a8fee1f7aae280d21d1710ef19400e6db238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2231bd5c984818a228362b18b250a8fee1f7aae280d21d1710ef19400e6db238->leave($__internal_2231bd5c984818a228362b18b250a8fee1f7aae280d21d1710ef19400e6db238_prof);

        
        $__internal_1bc6588539d1f441034f7c41290618bbf87f792d106bd915c6e979663d16936b->leave($__internal_1bc6588539d1f441034f7c41290618bbf87f792d106bd915c6e979663d16936b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
