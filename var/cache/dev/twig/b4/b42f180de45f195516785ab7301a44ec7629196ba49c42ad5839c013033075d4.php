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
        $__internal_d1a620295bc64fcd6b9cea213fbeae9dd932bf1677fe97f086dc3dfae69f084e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a620295bc64fcd6b9cea213fbeae9dd932bf1677fe97f086dc3dfae69f084e->enter($__internal_d1a620295bc64fcd6b9cea213fbeae9dd932bf1677fe97f086dc3dfae69f084e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1bd315c1d655dd0bd1c99229c2c08e6a2f4a8f176744d4a7b97c2eb52038782a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd315c1d655dd0bd1c99229c2c08e6a2f4a8f176744d4a7b97c2eb52038782a->enter($__internal_1bd315c1d655dd0bd1c99229c2c08e6a2f4a8f176744d4a7b97c2eb52038782a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1a620295bc64fcd6b9cea213fbeae9dd932bf1677fe97f086dc3dfae69f084e->leave($__internal_d1a620295bc64fcd6b9cea213fbeae9dd932bf1677fe97f086dc3dfae69f084e_prof);

        
        $__internal_1bd315c1d655dd0bd1c99229c2c08e6a2f4a8f176744d4a7b97c2eb52038782a->leave($__internal_1bd315c1d655dd0bd1c99229c2c08e6a2f4a8f176744d4a7b97c2eb52038782a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac989a2de933c251c505757689815c797576d460766e8c2db30eaa9f8fbb90e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac989a2de933c251c505757689815c797576d460766e8c2db30eaa9f8fbb90e6->enter($__internal_ac989a2de933c251c505757689815c797576d460766e8c2db30eaa9f8fbb90e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be000f985a501ff64de72b0eda9cb5630db6e5c87493232252706886b9ae83d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be000f985a501ff64de72b0eda9cb5630db6e5c87493232252706886b9ae83d0->enter($__internal_be000f985a501ff64de72b0eda9cb5630db6e5c87493232252706886b9ae83d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_be000f985a501ff64de72b0eda9cb5630db6e5c87493232252706886b9ae83d0->leave($__internal_be000f985a501ff64de72b0eda9cb5630db6e5c87493232252706886b9ae83d0_prof);

        
        $__internal_ac989a2de933c251c505757689815c797576d460766e8c2db30eaa9f8fbb90e6->leave($__internal_ac989a2de933c251c505757689815c797576d460766e8c2db30eaa9f8fbb90e6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a3619bca58cfb51d9ff7e31c677cd7f9e69f64a034261062c87fa69b16ba9c88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3619bca58cfb51d9ff7e31c677cd7f9e69f64a034261062c87fa69b16ba9c88->enter($__internal_a3619bca58cfb51d9ff7e31c677cd7f9e69f64a034261062c87fa69b16ba9c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8baaa314f8c363dd02a388ab50fd39ae9aab8c87cdeb3349b9489cc259968bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8baaa314f8c363dd02a388ab50fd39ae9aab8c87cdeb3349b9489cc259968bb1->enter($__internal_8baaa314f8c363dd02a388ab50fd39ae9aab8c87cdeb3349b9489cc259968bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8baaa314f8c363dd02a388ab50fd39ae9aab8c87cdeb3349b9489cc259968bb1->leave($__internal_8baaa314f8c363dd02a388ab50fd39ae9aab8c87cdeb3349b9489cc259968bb1_prof);

        
        $__internal_a3619bca58cfb51d9ff7e31c677cd7f9e69f64a034261062c87fa69b16ba9c88->leave($__internal_a3619bca58cfb51d9ff7e31c677cd7f9e69f64a034261062c87fa69b16ba9c88_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b41b7041d40ab54a6a64b1b4be3a69f3424b23ee2ec9f29425ebde0e8bb19e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b41b7041d40ab54a6a64b1b4be3a69f3424b23ee2ec9f29425ebde0e8bb19e9->enter($__internal_6b41b7041d40ab54a6a64b1b4be3a69f3424b23ee2ec9f29425ebde0e8bb19e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5ec26bb1f7dcb11d88de971401dad17f9db4c09e6b6a7d208e446e1b1429570b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec26bb1f7dcb11d88de971401dad17f9db4c09e6b6a7d208e446e1b1429570b->enter($__internal_5ec26bb1f7dcb11d88de971401dad17f9db4c09e6b6a7d208e446e1b1429570b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5ec26bb1f7dcb11d88de971401dad17f9db4c09e6b6a7d208e446e1b1429570b->leave($__internal_5ec26bb1f7dcb11d88de971401dad17f9db4c09e6b6a7d208e446e1b1429570b_prof);

        
        $__internal_6b41b7041d40ab54a6a64b1b4be3a69f3424b23ee2ec9f29425ebde0e8bb19e9->leave($__internal_6b41b7041d40ab54a6a64b1b4be3a69f3424b23ee2ec9f29425ebde0e8bb19e9_prof);

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
