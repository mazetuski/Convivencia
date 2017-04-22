<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc0a24d7a5f9289ef39a34fb7433dbad9d0b80452e2d1799f6f5321ec87c3cd4 extends Twig_Template
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
        $__internal_b6b62d23ea3a10e662b687cb5b12a1d4ef13c6f36c81804b2684744e81c7d3e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6b62d23ea3a10e662b687cb5b12a1d4ef13c6f36c81804b2684744e81c7d3e2->enter($__internal_b6b62d23ea3a10e662b687cb5b12a1d4ef13c6f36c81804b2684744e81c7d3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_da5cd279e46de92bd7002f3f36aeb0f9720355f81bb12eb1da1a09025e175e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5cd279e46de92bd7002f3f36aeb0f9720355f81bb12eb1da1a09025e175e1a->enter($__internal_da5cd279e46de92bd7002f3f36aeb0f9720355f81bb12eb1da1a09025e175e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6b62d23ea3a10e662b687cb5b12a1d4ef13c6f36c81804b2684744e81c7d3e2->leave($__internal_b6b62d23ea3a10e662b687cb5b12a1d4ef13c6f36c81804b2684744e81c7d3e2_prof);

        
        $__internal_da5cd279e46de92bd7002f3f36aeb0f9720355f81bb12eb1da1a09025e175e1a->leave($__internal_da5cd279e46de92bd7002f3f36aeb0f9720355f81bb12eb1da1a09025e175e1a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_25c28e69b59450916cbee140b8607c4a1826e9f407f60b671565941fc5d5eb64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c28e69b59450916cbee140b8607c4a1826e9f407f60b671565941fc5d5eb64->enter($__internal_25c28e69b59450916cbee140b8607c4a1826e9f407f60b671565941fc5d5eb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_52d984935f22f944195fde383e3467f917ef62b8113c6a1b9735491dfd959e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d984935f22f944195fde383e3467f917ef62b8113c6a1b9735491dfd959e6a->enter($__internal_52d984935f22f944195fde383e3467f917ef62b8113c6a1b9735491dfd959e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_52d984935f22f944195fde383e3467f917ef62b8113c6a1b9735491dfd959e6a->leave($__internal_52d984935f22f944195fde383e3467f917ef62b8113c6a1b9735491dfd959e6a_prof);

        
        $__internal_25c28e69b59450916cbee140b8607c4a1826e9f407f60b671565941fc5d5eb64->leave($__internal_25c28e69b59450916cbee140b8607c4a1826e9f407f60b671565941fc5d5eb64_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_23ad99b5aed11b5fa1f242321f959a1a940cdbcf8448ac6859f4e6842afa03e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ad99b5aed11b5fa1f242321f959a1a940cdbcf8448ac6859f4e6842afa03e8->enter($__internal_23ad99b5aed11b5fa1f242321f959a1a940cdbcf8448ac6859f4e6842afa03e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_54c659d550357643257dd7345e7cc0f02d24a482f8ce4a6ea598529280fa96e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c659d550357643257dd7345e7cc0f02d24a482f8ce4a6ea598529280fa96e5->enter($__internal_54c659d550357643257dd7345e7cc0f02d24a482f8ce4a6ea598529280fa96e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_54c659d550357643257dd7345e7cc0f02d24a482f8ce4a6ea598529280fa96e5->leave($__internal_54c659d550357643257dd7345e7cc0f02d24a482f8ce4a6ea598529280fa96e5_prof);

        
        $__internal_23ad99b5aed11b5fa1f242321f959a1a940cdbcf8448ac6859f4e6842afa03e8->leave($__internal_23ad99b5aed11b5fa1f242321f959a1a940cdbcf8448ac6859f4e6842afa03e8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_72aa40941c4677f243df869372e5b9ab51b3dffa2b0664a71488895b5dcf3355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72aa40941c4677f243df869372e5b9ab51b3dffa2b0664a71488895b5dcf3355->enter($__internal_72aa40941c4677f243df869372e5b9ab51b3dffa2b0664a71488895b5dcf3355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_120c8f24b6d1716803aa9481278e8ba530e4c784b4869527ab2775d86808393a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120c8f24b6d1716803aa9481278e8ba530e4c784b4869527ab2775d86808393a->enter($__internal_120c8f24b6d1716803aa9481278e8ba530e4c784b4869527ab2775d86808393a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_120c8f24b6d1716803aa9481278e8ba530e4c784b4869527ab2775d86808393a->leave($__internal_120c8f24b6d1716803aa9481278e8ba530e4c784b4869527ab2775d86808393a_prof);

        
        $__internal_72aa40941c4677f243df869372e5b9ab51b3dffa2b0664a71488895b5dcf3355->leave($__internal_72aa40941c4677f243df869372e5b9ab51b3dffa2b0664a71488895b5dcf3355_prof);

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
