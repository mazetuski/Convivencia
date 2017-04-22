<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_603f8807dd2a1842a526dde5704f8521f2cd587674605cbabb2546c7d0ad437b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_41e8033f09153f4a8f62f0796501cf94c46d3b07e76e1c6a30693a701eab19a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e8033f09153f4a8f62f0796501cf94c46d3b07e76e1c6a30693a701eab19a1->enter($__internal_41e8033f09153f4a8f62f0796501cf94c46d3b07e76e1c6a30693a701eab19a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_451f59f34042d898dc07c9f7341942d8111f550fb29b96b520d8b99e1f541212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451f59f34042d898dc07c9f7341942d8111f550fb29b96b520d8b99e1f541212->enter($__internal_451f59f34042d898dc07c9f7341942d8111f550fb29b96b520d8b99e1f541212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41e8033f09153f4a8f62f0796501cf94c46d3b07e76e1c6a30693a701eab19a1->leave($__internal_41e8033f09153f4a8f62f0796501cf94c46d3b07e76e1c6a30693a701eab19a1_prof);

        
        $__internal_451f59f34042d898dc07c9f7341942d8111f550fb29b96b520d8b99e1f541212->leave($__internal_451f59f34042d898dc07c9f7341942d8111f550fb29b96b520d8b99e1f541212_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d90371ee64ebf4ac7888776058459da8752f96b04bdb607bd69a097b9500d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d90371ee64ebf4ac7888776058459da8752f96b04bdb607bd69a097b9500d05->enter($__internal_4d90371ee64ebf4ac7888776058459da8752f96b04bdb607bd69a097b9500d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_feb3bb480d10bb52a3f4b376598fbe8928cac70d8038f8caf85caa76731d1e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb3bb480d10bb52a3f4b376598fbe8928cac70d8038f8caf85caa76731d1e00->enter($__internal_feb3bb480d10bb52a3f4b376598fbe8928cac70d8038f8caf85caa76731d1e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_feb3bb480d10bb52a3f4b376598fbe8928cac70d8038f8caf85caa76731d1e00->leave($__internal_feb3bb480d10bb52a3f4b376598fbe8928cac70d8038f8caf85caa76731d1e00_prof);

        
        $__internal_4d90371ee64ebf4ac7888776058459da8752f96b04bdb607bd69a097b9500d05->leave($__internal_4d90371ee64ebf4ac7888776058459da8752f96b04bdb607bd69a097b9500d05_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77c3465aa04d8641541b121aa2e2a159c3700c2d1aab91d471c073fa8538eb93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c3465aa04d8641541b121aa2e2a159c3700c2d1aab91d471c073fa8538eb93->enter($__internal_77c3465aa04d8641541b121aa2e2a159c3700c2d1aab91d471c073fa8538eb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a087ce0236bc441567bbf23bfd6a1aa5df3744042498f4c969fafad69858947a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a087ce0236bc441567bbf23bfd6a1aa5df3744042498f4c969fafad69858947a->enter($__internal_a087ce0236bc441567bbf23bfd6a1aa5df3744042498f4c969fafad69858947a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a087ce0236bc441567bbf23bfd6a1aa5df3744042498f4c969fafad69858947a->leave($__internal_a087ce0236bc441567bbf23bfd6a1aa5df3744042498f4c969fafad69858947a_prof);

        
        $__internal_77c3465aa04d8641541b121aa2e2a159c3700c2d1aab91d471c073fa8538eb93->leave($__internal_77c3465aa04d8641541b121aa2e2a159c3700c2d1aab91d471c073fa8538eb93_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85dc41ff63ccf9b9f4033bfb0737e3de9d9541f0573562ca1387fa9a4d985655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85dc41ff63ccf9b9f4033bfb0737e3de9d9541f0573562ca1387fa9a4d985655->enter($__internal_85dc41ff63ccf9b9f4033bfb0737e3de9d9541f0573562ca1387fa9a4d985655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f6c2b0d81d3bc9c2b6cd2ad6e939bcdfe3ee68fce3fa0dce6bf353b53c275136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c2b0d81d3bc9c2b6cd2ad6e939bcdfe3ee68fce3fa0dce6bf353b53c275136->enter($__internal_f6c2b0d81d3bc9c2b6cd2ad6e939bcdfe3ee68fce3fa0dce6bf353b53c275136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f6c2b0d81d3bc9c2b6cd2ad6e939bcdfe3ee68fce3fa0dce6bf353b53c275136->leave($__internal_f6c2b0d81d3bc9c2b6cd2ad6e939bcdfe3ee68fce3fa0dce6bf353b53c275136_prof);

        
        $__internal_85dc41ff63ccf9b9f4033bfb0737e3de9d9541f0573562ca1387fa9a4d985655->leave($__internal_85dc41ff63ccf9b9f4033bfb0737e3de9d9541f0573562ca1387fa9a4d985655_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
