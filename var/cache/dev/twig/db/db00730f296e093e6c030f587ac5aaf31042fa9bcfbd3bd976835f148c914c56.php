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
        $__internal_e69d9a794a5fc6e87d15dbcbe256e86c7210f77e324096d32a9fa0ef377c07fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e69d9a794a5fc6e87d15dbcbe256e86c7210f77e324096d32a9fa0ef377c07fa->enter($__internal_e69d9a794a5fc6e87d15dbcbe256e86c7210f77e324096d32a9fa0ef377c07fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ec101e35f0e253e001599c0c0e4e7b2a8d0892f87ee49978efb4d3c455871558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec101e35f0e253e001599c0c0e4e7b2a8d0892f87ee49978efb4d3c455871558->enter($__internal_ec101e35f0e253e001599c0c0e4e7b2a8d0892f87ee49978efb4d3c455871558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e69d9a794a5fc6e87d15dbcbe256e86c7210f77e324096d32a9fa0ef377c07fa->leave($__internal_e69d9a794a5fc6e87d15dbcbe256e86c7210f77e324096d32a9fa0ef377c07fa_prof);

        
        $__internal_ec101e35f0e253e001599c0c0e4e7b2a8d0892f87ee49978efb4d3c455871558->leave($__internal_ec101e35f0e253e001599c0c0e4e7b2a8d0892f87ee49978efb4d3c455871558_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f0d7dd9d2a9c60663f5762865e3074a210fa9796adc51ce3ec2799ccf8bb32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f0d7dd9d2a9c60663f5762865e3074a210fa9796adc51ce3ec2799ccf8bb32d->enter($__internal_5f0d7dd9d2a9c60663f5762865e3074a210fa9796adc51ce3ec2799ccf8bb32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c720e4a95d0928d311ff0f6930a6c2f0b23c7007f3076b294a5672238b260288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c720e4a95d0928d311ff0f6930a6c2f0b23c7007f3076b294a5672238b260288->enter($__internal_c720e4a95d0928d311ff0f6930a6c2f0b23c7007f3076b294a5672238b260288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c720e4a95d0928d311ff0f6930a6c2f0b23c7007f3076b294a5672238b260288->leave($__internal_c720e4a95d0928d311ff0f6930a6c2f0b23c7007f3076b294a5672238b260288_prof);

        
        $__internal_5f0d7dd9d2a9c60663f5762865e3074a210fa9796adc51ce3ec2799ccf8bb32d->leave($__internal_5f0d7dd9d2a9c60663f5762865e3074a210fa9796adc51ce3ec2799ccf8bb32d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fcf4965041842e5b3ee319491784705d00baecb1cb7eb8a02735b3dc53f3af56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcf4965041842e5b3ee319491784705d00baecb1cb7eb8a02735b3dc53f3af56->enter($__internal_fcf4965041842e5b3ee319491784705d00baecb1cb7eb8a02735b3dc53f3af56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_23b0c1acd08a5a709de70aa3d594c48bc5a34b1edfa23e52dcb0df2f9e9e4f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b0c1acd08a5a709de70aa3d594c48bc5a34b1edfa23e52dcb0df2f9e9e4f8c->enter($__internal_23b0c1acd08a5a709de70aa3d594c48bc5a34b1edfa23e52dcb0df2f9e9e4f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_23b0c1acd08a5a709de70aa3d594c48bc5a34b1edfa23e52dcb0df2f9e9e4f8c->leave($__internal_23b0c1acd08a5a709de70aa3d594c48bc5a34b1edfa23e52dcb0df2f9e9e4f8c_prof);

        
        $__internal_fcf4965041842e5b3ee319491784705d00baecb1cb7eb8a02735b3dc53f3af56->leave($__internal_fcf4965041842e5b3ee319491784705d00baecb1cb7eb8a02735b3dc53f3af56_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b91e86bba0a03890a3f411c3532558e5f68dfba0648351b1675aba0b6633cc7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b91e86bba0a03890a3f411c3532558e5f68dfba0648351b1675aba0b6633cc7b->enter($__internal_b91e86bba0a03890a3f411c3532558e5f68dfba0648351b1675aba0b6633cc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_513cd3c4d3cdc1cd7c9665eb83766743d4f8b9a9910afab3f7564dbe7fa971a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513cd3c4d3cdc1cd7c9665eb83766743d4f8b9a9910afab3f7564dbe7fa971a4->enter($__internal_513cd3c4d3cdc1cd7c9665eb83766743d4f8b9a9910afab3f7564dbe7fa971a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_513cd3c4d3cdc1cd7c9665eb83766743d4f8b9a9910afab3f7564dbe7fa971a4->leave($__internal_513cd3c4d3cdc1cd7c9665eb83766743d4f8b9a9910afab3f7564dbe7fa971a4_prof);

        
        $__internal_b91e86bba0a03890a3f411c3532558e5f68dfba0648351b1675aba0b6633cc7b->leave($__internal_b91e86bba0a03890a3f411c3532558e5f68dfba0648351b1675aba0b6633cc7b_prof);

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
