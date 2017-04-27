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
        $__internal_54b582c191300e9e6824ce60940cd14e750fe76700247320cc8f954c1dd9053d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b582c191300e9e6824ce60940cd14e750fe76700247320cc8f954c1dd9053d->enter($__internal_54b582c191300e9e6824ce60940cd14e750fe76700247320cc8f954c1dd9053d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5fac4e716785db3971a0d0c9ae3dd23c0416b51df02b080b46ac86a4df62f9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fac4e716785db3971a0d0c9ae3dd23c0416b51df02b080b46ac86a4df62f9c4->enter($__internal_5fac4e716785db3971a0d0c9ae3dd23c0416b51df02b080b46ac86a4df62f9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54b582c191300e9e6824ce60940cd14e750fe76700247320cc8f954c1dd9053d->leave($__internal_54b582c191300e9e6824ce60940cd14e750fe76700247320cc8f954c1dd9053d_prof);

        
        $__internal_5fac4e716785db3971a0d0c9ae3dd23c0416b51df02b080b46ac86a4df62f9c4->leave($__internal_5fac4e716785db3971a0d0c9ae3dd23c0416b51df02b080b46ac86a4df62f9c4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_53395556c7c046849c12406f34efeb15e53ae00a636a8befefd08c8e62102218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53395556c7c046849c12406f34efeb15e53ae00a636a8befefd08c8e62102218->enter($__internal_53395556c7c046849c12406f34efeb15e53ae00a636a8befefd08c8e62102218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_de9afde90ae45e3cd52664e2ca9ec1ab6c1bec12cda1dbd1e0bcca47e6fbb223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9afde90ae45e3cd52664e2ca9ec1ab6c1bec12cda1dbd1e0bcca47e6fbb223->enter($__internal_de9afde90ae45e3cd52664e2ca9ec1ab6c1bec12cda1dbd1e0bcca47e6fbb223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_de9afde90ae45e3cd52664e2ca9ec1ab6c1bec12cda1dbd1e0bcca47e6fbb223->leave($__internal_de9afde90ae45e3cd52664e2ca9ec1ab6c1bec12cda1dbd1e0bcca47e6fbb223_prof);

        
        $__internal_53395556c7c046849c12406f34efeb15e53ae00a636a8befefd08c8e62102218->leave($__internal_53395556c7c046849c12406f34efeb15e53ae00a636a8befefd08c8e62102218_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f127c37015ae45565166a2bd27588eed2657f720a00a52e0c2be4474422e7257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f127c37015ae45565166a2bd27588eed2657f720a00a52e0c2be4474422e7257->enter($__internal_f127c37015ae45565166a2bd27588eed2657f720a00a52e0c2be4474422e7257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a21fd08d8ce286e771187ec4953a55281477e09d24dc6e9054bded1a15b03d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21fd08d8ce286e771187ec4953a55281477e09d24dc6e9054bded1a15b03d9e->enter($__internal_a21fd08d8ce286e771187ec4953a55281477e09d24dc6e9054bded1a15b03d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a21fd08d8ce286e771187ec4953a55281477e09d24dc6e9054bded1a15b03d9e->leave($__internal_a21fd08d8ce286e771187ec4953a55281477e09d24dc6e9054bded1a15b03d9e_prof);

        
        $__internal_f127c37015ae45565166a2bd27588eed2657f720a00a52e0c2be4474422e7257->leave($__internal_f127c37015ae45565166a2bd27588eed2657f720a00a52e0c2be4474422e7257_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0ae539e822561779808c7cd470cbf7a7b85e043a296e84bae743e4c83cc1380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0ae539e822561779808c7cd470cbf7a7b85e043a296e84bae743e4c83cc1380->enter($__internal_b0ae539e822561779808c7cd470cbf7a7b85e043a296e84bae743e4c83cc1380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b83e613c425065ed5c5ed09159d6a5635430bbed50fb439444022e52840368ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83e613c425065ed5c5ed09159d6a5635430bbed50fb439444022e52840368ac->enter($__internal_b83e613c425065ed5c5ed09159d6a5635430bbed50fb439444022e52840368ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b83e613c425065ed5c5ed09159d6a5635430bbed50fb439444022e52840368ac->leave($__internal_b83e613c425065ed5c5ed09159d6a5635430bbed50fb439444022e52840368ac_prof);

        
        $__internal_b0ae539e822561779808c7cd470cbf7a7b85e043a296e84bae743e4c83cc1380->leave($__internal_b0ae539e822561779808c7cd470cbf7a7b85e043a296e84bae743e4c83cc1380_prof);

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
