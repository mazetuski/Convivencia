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
        $__internal_f67fcdd0288a89f6a5a0446559a2e98871436e5a79eeaec6db137b3a48990ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f67fcdd0288a89f6a5a0446559a2e98871436e5a79eeaec6db137b3a48990ceb->enter($__internal_f67fcdd0288a89f6a5a0446559a2e98871436e5a79eeaec6db137b3a48990ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c75be0c51591bb305609066c034960cd58d734c3dfc939bff234a677ea437e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75be0c51591bb305609066c034960cd58d734c3dfc939bff234a677ea437e3d->enter($__internal_c75be0c51591bb305609066c034960cd58d734c3dfc939bff234a677ea437e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f67fcdd0288a89f6a5a0446559a2e98871436e5a79eeaec6db137b3a48990ceb->leave($__internal_f67fcdd0288a89f6a5a0446559a2e98871436e5a79eeaec6db137b3a48990ceb_prof);

        
        $__internal_c75be0c51591bb305609066c034960cd58d734c3dfc939bff234a677ea437e3d->leave($__internal_c75be0c51591bb305609066c034960cd58d734c3dfc939bff234a677ea437e3d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_298d2406d2be9a0ad92fe4e1e291349fe85bde4bfd7b2e9478e29688aaf965ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_298d2406d2be9a0ad92fe4e1e291349fe85bde4bfd7b2e9478e29688aaf965ac->enter($__internal_298d2406d2be9a0ad92fe4e1e291349fe85bde4bfd7b2e9478e29688aaf965ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fa177593d1bb7bb4ac0df0858ba76b47d1c67bc5d7dbb87e28dd7669e485259e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa177593d1bb7bb4ac0df0858ba76b47d1c67bc5d7dbb87e28dd7669e485259e->enter($__internal_fa177593d1bb7bb4ac0df0858ba76b47d1c67bc5d7dbb87e28dd7669e485259e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fa177593d1bb7bb4ac0df0858ba76b47d1c67bc5d7dbb87e28dd7669e485259e->leave($__internal_fa177593d1bb7bb4ac0df0858ba76b47d1c67bc5d7dbb87e28dd7669e485259e_prof);

        
        $__internal_298d2406d2be9a0ad92fe4e1e291349fe85bde4bfd7b2e9478e29688aaf965ac->leave($__internal_298d2406d2be9a0ad92fe4e1e291349fe85bde4bfd7b2e9478e29688aaf965ac_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81223d01672dfbb4e93f4c2b9de629e244b9b9a958f66c3e0c225dcf20f904ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81223d01672dfbb4e93f4c2b9de629e244b9b9a958f66c3e0c225dcf20f904ec->enter($__internal_81223d01672dfbb4e93f4c2b9de629e244b9b9a958f66c3e0c225dcf20f904ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_09f36bf146b08a2b9843af8655291717e12c988374ceaead0fe1cd18a7f69bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f36bf146b08a2b9843af8655291717e12c988374ceaead0fe1cd18a7f69bf5->enter($__internal_09f36bf146b08a2b9843af8655291717e12c988374ceaead0fe1cd18a7f69bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_09f36bf146b08a2b9843af8655291717e12c988374ceaead0fe1cd18a7f69bf5->leave($__internal_09f36bf146b08a2b9843af8655291717e12c988374ceaead0fe1cd18a7f69bf5_prof);

        
        $__internal_81223d01672dfbb4e93f4c2b9de629e244b9b9a958f66c3e0c225dcf20f904ec->leave($__internal_81223d01672dfbb4e93f4c2b9de629e244b9b9a958f66c3e0c225dcf20f904ec_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f7e7015019e65ba8f5dcac325b39f387db48e89c3fc876dbde60b97e833bb47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f7e7015019e65ba8f5dcac325b39f387db48e89c3fc876dbde60b97e833bb47->enter($__internal_7f7e7015019e65ba8f5dcac325b39f387db48e89c3fc876dbde60b97e833bb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_18f531bf9a7fac31523264e0b19c4a3f025c04b826eee632c7841d0bdc4ca260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f531bf9a7fac31523264e0b19c4a3f025c04b826eee632c7841d0bdc4ca260->enter($__internal_18f531bf9a7fac31523264e0b19c4a3f025c04b826eee632c7841d0bdc4ca260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_18f531bf9a7fac31523264e0b19c4a3f025c04b826eee632c7841d0bdc4ca260->leave($__internal_18f531bf9a7fac31523264e0b19c4a3f025c04b826eee632c7841d0bdc4ca260_prof);

        
        $__internal_7f7e7015019e65ba8f5dcac325b39f387db48e89c3fc876dbde60b97e833bb47->leave($__internal_7f7e7015019e65ba8f5dcac325b39f387db48e89c3fc876dbde60b97e833bb47_prof);

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
