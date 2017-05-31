<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e1b5c615d8399efbe2c2d84c758153a754aa013caa0bb3430e37d6f625cd2e21 extends Twig_Template
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
        $__internal_82494e039d08c8594b860a741aa48e3d526d3d676cad821ed2e47f42ff4d487d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82494e039d08c8594b860a741aa48e3d526d3d676cad821ed2e47f42ff4d487d->enter($__internal_82494e039d08c8594b860a741aa48e3d526d3d676cad821ed2e47f42ff4d487d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_86de91c1cd29b2ab5112b92513b21ae270603a92c9a98c9b22260166807a124a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86de91c1cd29b2ab5112b92513b21ae270603a92c9a98c9b22260166807a124a->enter($__internal_86de91c1cd29b2ab5112b92513b21ae270603a92c9a98c9b22260166807a124a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82494e039d08c8594b860a741aa48e3d526d3d676cad821ed2e47f42ff4d487d->leave($__internal_82494e039d08c8594b860a741aa48e3d526d3d676cad821ed2e47f42ff4d487d_prof);

        
        $__internal_86de91c1cd29b2ab5112b92513b21ae270603a92c9a98c9b22260166807a124a->leave($__internal_86de91c1cd29b2ab5112b92513b21ae270603a92c9a98c9b22260166807a124a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b01e9927662b98dace7b2f8390ca7e74d0a6d56501ee407a264a3e94a9af2529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01e9927662b98dace7b2f8390ca7e74d0a6d56501ee407a264a3e94a9af2529->enter($__internal_b01e9927662b98dace7b2f8390ca7e74d0a6d56501ee407a264a3e94a9af2529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4093a5e34797d1beedf49620a738ab04a60672b5cffb814c6115ddb1591c3a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4093a5e34797d1beedf49620a738ab04a60672b5cffb814c6115ddb1591c3a4b->enter($__internal_4093a5e34797d1beedf49620a738ab04a60672b5cffb814c6115ddb1591c3a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4093a5e34797d1beedf49620a738ab04a60672b5cffb814c6115ddb1591c3a4b->leave($__internal_4093a5e34797d1beedf49620a738ab04a60672b5cffb814c6115ddb1591c3a4b_prof);

        
        $__internal_b01e9927662b98dace7b2f8390ca7e74d0a6d56501ee407a264a3e94a9af2529->leave($__internal_b01e9927662b98dace7b2f8390ca7e74d0a6d56501ee407a264a3e94a9af2529_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aef42512efe0b8f561fc7294b6741291ca8808a3b267920706ed9344f91df764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aef42512efe0b8f561fc7294b6741291ca8808a3b267920706ed9344f91df764->enter($__internal_aef42512efe0b8f561fc7294b6741291ca8808a3b267920706ed9344f91df764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5bc728df3ac5b9fff4a1e7055718fd5fb8bfa76ebdb73832689d855ce1ac12a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc728df3ac5b9fff4a1e7055718fd5fb8bfa76ebdb73832689d855ce1ac12a3->enter($__internal_5bc728df3ac5b9fff4a1e7055718fd5fb8bfa76ebdb73832689d855ce1ac12a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5bc728df3ac5b9fff4a1e7055718fd5fb8bfa76ebdb73832689d855ce1ac12a3->leave($__internal_5bc728df3ac5b9fff4a1e7055718fd5fb8bfa76ebdb73832689d855ce1ac12a3_prof);

        
        $__internal_aef42512efe0b8f561fc7294b6741291ca8808a3b267920706ed9344f91df764->leave($__internal_aef42512efe0b8f561fc7294b6741291ca8808a3b267920706ed9344f91df764_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e09f5fd74c493f704b520b2ced1880a46ee42f6c21bc36b1b0ce7f21293c2326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e09f5fd74c493f704b520b2ced1880a46ee42f6c21bc36b1b0ce7f21293c2326->enter($__internal_e09f5fd74c493f704b520b2ced1880a46ee42f6c21bc36b1b0ce7f21293c2326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_315cabd346991d6c06ef8507afb3b72ed1fe5e7f67e132ca983f513ce3473067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315cabd346991d6c06ef8507afb3b72ed1fe5e7f67e132ca983f513ce3473067->enter($__internal_315cabd346991d6c06ef8507afb3b72ed1fe5e7f67e132ca983f513ce3473067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_315cabd346991d6c06ef8507afb3b72ed1fe5e7f67e132ca983f513ce3473067->leave($__internal_315cabd346991d6c06ef8507afb3b72ed1fe5e7f67e132ca983f513ce3473067_prof);

        
        $__internal_e09f5fd74c493f704b520b2ced1880a46ee42f6c21bc36b1b0ce7f21293c2326->leave($__internal_e09f5fd74c493f704b520b2ced1880a46ee42f6c21bc36b1b0ce7f21293c2326_prof);

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
