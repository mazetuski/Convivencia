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
        $__internal_4903ca31ef7a4af944c04e50c0bfe03cda47731f9478b6938f3826836aa44a87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4903ca31ef7a4af944c04e50c0bfe03cda47731f9478b6938f3826836aa44a87->enter($__internal_4903ca31ef7a4af944c04e50c0bfe03cda47731f9478b6938f3826836aa44a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_38f8faefc095dfa50cc3ed6b01ba58fb7cad1ebee37b7d5d9ab599485ae1c774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f8faefc095dfa50cc3ed6b01ba58fb7cad1ebee37b7d5d9ab599485ae1c774->enter($__internal_38f8faefc095dfa50cc3ed6b01ba58fb7cad1ebee37b7d5d9ab599485ae1c774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4903ca31ef7a4af944c04e50c0bfe03cda47731f9478b6938f3826836aa44a87->leave($__internal_4903ca31ef7a4af944c04e50c0bfe03cda47731f9478b6938f3826836aa44a87_prof);

        
        $__internal_38f8faefc095dfa50cc3ed6b01ba58fb7cad1ebee37b7d5d9ab599485ae1c774->leave($__internal_38f8faefc095dfa50cc3ed6b01ba58fb7cad1ebee37b7d5d9ab599485ae1c774_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_13165a2bdc4d131c842626f1cedcaa942bb0b8eecd61c929f4bc14e640de8089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13165a2bdc4d131c842626f1cedcaa942bb0b8eecd61c929f4bc14e640de8089->enter($__internal_13165a2bdc4d131c842626f1cedcaa942bb0b8eecd61c929f4bc14e640de8089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_52aaa12c1e2451356ba5f8083f596e3d7f0c8755a5fdf36cd2b03f9e79d35427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52aaa12c1e2451356ba5f8083f596e3d7f0c8755a5fdf36cd2b03f9e79d35427->enter($__internal_52aaa12c1e2451356ba5f8083f596e3d7f0c8755a5fdf36cd2b03f9e79d35427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_52aaa12c1e2451356ba5f8083f596e3d7f0c8755a5fdf36cd2b03f9e79d35427->leave($__internal_52aaa12c1e2451356ba5f8083f596e3d7f0c8755a5fdf36cd2b03f9e79d35427_prof);

        
        $__internal_13165a2bdc4d131c842626f1cedcaa942bb0b8eecd61c929f4bc14e640de8089->leave($__internal_13165a2bdc4d131c842626f1cedcaa942bb0b8eecd61c929f4bc14e640de8089_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c06b9fe7480f644b450d73fcbf9abdc7de04d486044b74d8c3791840675f0072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06b9fe7480f644b450d73fcbf9abdc7de04d486044b74d8c3791840675f0072->enter($__internal_c06b9fe7480f644b450d73fcbf9abdc7de04d486044b74d8c3791840675f0072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_68b24a26e755a4be8acb91c370a9075c0e15f857cb9aaa1b310de4e3fbbb54c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b24a26e755a4be8acb91c370a9075c0e15f857cb9aaa1b310de4e3fbbb54c1->enter($__internal_68b24a26e755a4be8acb91c370a9075c0e15f857cb9aaa1b310de4e3fbbb54c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_68b24a26e755a4be8acb91c370a9075c0e15f857cb9aaa1b310de4e3fbbb54c1->leave($__internal_68b24a26e755a4be8acb91c370a9075c0e15f857cb9aaa1b310de4e3fbbb54c1_prof);

        
        $__internal_c06b9fe7480f644b450d73fcbf9abdc7de04d486044b74d8c3791840675f0072->leave($__internal_c06b9fe7480f644b450d73fcbf9abdc7de04d486044b74d8c3791840675f0072_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_95c944663c2ac14188acebe58b2667a539c4cff286acdb92c7731b8bf7af4384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c944663c2ac14188acebe58b2667a539c4cff286acdb92c7731b8bf7af4384->enter($__internal_95c944663c2ac14188acebe58b2667a539c4cff286acdb92c7731b8bf7af4384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_802c01667d68ab985333955d708277b3e87bdc110227939b52e64e87891906ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802c01667d68ab985333955d708277b3e87bdc110227939b52e64e87891906ea->enter($__internal_802c01667d68ab985333955d708277b3e87bdc110227939b52e64e87891906ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_802c01667d68ab985333955d708277b3e87bdc110227939b52e64e87891906ea->leave($__internal_802c01667d68ab985333955d708277b3e87bdc110227939b52e64e87891906ea_prof);

        
        $__internal_95c944663c2ac14188acebe58b2667a539c4cff286acdb92c7731b8bf7af4384->leave($__internal_95c944663c2ac14188acebe58b2667a539c4cff286acdb92c7731b8bf7af4384_prof);

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
