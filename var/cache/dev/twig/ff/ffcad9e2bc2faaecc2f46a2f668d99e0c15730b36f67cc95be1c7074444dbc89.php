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
        $__internal_9c8b45890606baa018e287ac3196c85e1e2197a773b62030eccec83dc8928f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c8b45890606baa018e287ac3196c85e1e2197a773b62030eccec83dc8928f1b->enter($__internal_9c8b45890606baa018e287ac3196c85e1e2197a773b62030eccec83dc8928f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f0a0b6ad5055561f5459e54c4d4e208bb7851da59976484b94c6ba3a44390ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a0b6ad5055561f5459e54c4d4e208bb7851da59976484b94c6ba3a44390ec1->enter($__internal_f0a0b6ad5055561f5459e54c4d4e208bb7851da59976484b94c6ba3a44390ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c8b45890606baa018e287ac3196c85e1e2197a773b62030eccec83dc8928f1b->leave($__internal_9c8b45890606baa018e287ac3196c85e1e2197a773b62030eccec83dc8928f1b_prof);

        
        $__internal_f0a0b6ad5055561f5459e54c4d4e208bb7851da59976484b94c6ba3a44390ec1->leave($__internal_f0a0b6ad5055561f5459e54c4d4e208bb7851da59976484b94c6ba3a44390ec1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ba86c8ae75f9763fd066f8797ab95eb28920b5928148f27d24060cba014e631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba86c8ae75f9763fd066f8797ab95eb28920b5928148f27d24060cba014e631->enter($__internal_0ba86c8ae75f9763fd066f8797ab95eb28920b5928148f27d24060cba014e631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d19111b7b3ca62852e087172505ac326935bd505cfa76aae0f40a339c016211e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19111b7b3ca62852e087172505ac326935bd505cfa76aae0f40a339c016211e->enter($__internal_d19111b7b3ca62852e087172505ac326935bd505cfa76aae0f40a339c016211e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d19111b7b3ca62852e087172505ac326935bd505cfa76aae0f40a339c016211e->leave($__internal_d19111b7b3ca62852e087172505ac326935bd505cfa76aae0f40a339c016211e_prof);

        
        $__internal_0ba86c8ae75f9763fd066f8797ab95eb28920b5928148f27d24060cba014e631->leave($__internal_0ba86c8ae75f9763fd066f8797ab95eb28920b5928148f27d24060cba014e631_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_503a89019c5a3263ffea73ab54e0a67fc23a7b3dd26b3b5d84a5d4cab2e6c3f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_503a89019c5a3263ffea73ab54e0a67fc23a7b3dd26b3b5d84a5d4cab2e6c3f0->enter($__internal_503a89019c5a3263ffea73ab54e0a67fc23a7b3dd26b3b5d84a5d4cab2e6c3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_377bfe731303e3da6efa2dabe5ff9f06e2729f817e925ac2e11ecf6ebc3c3ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377bfe731303e3da6efa2dabe5ff9f06e2729f817e925ac2e11ecf6ebc3c3ca1->enter($__internal_377bfe731303e3da6efa2dabe5ff9f06e2729f817e925ac2e11ecf6ebc3c3ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_377bfe731303e3da6efa2dabe5ff9f06e2729f817e925ac2e11ecf6ebc3c3ca1->leave($__internal_377bfe731303e3da6efa2dabe5ff9f06e2729f817e925ac2e11ecf6ebc3c3ca1_prof);

        
        $__internal_503a89019c5a3263ffea73ab54e0a67fc23a7b3dd26b3b5d84a5d4cab2e6c3f0->leave($__internal_503a89019c5a3263ffea73ab54e0a67fc23a7b3dd26b3b5d84a5d4cab2e6c3f0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dbef38332b7750b429b2101c461975189bfbaf29f74ec1e62d571e68d397ab21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbef38332b7750b429b2101c461975189bfbaf29f74ec1e62d571e68d397ab21->enter($__internal_dbef38332b7750b429b2101c461975189bfbaf29f74ec1e62d571e68d397ab21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e14bae05847c7333294dbea18806817e3c543ed6868401886e9a767aba455bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14bae05847c7333294dbea18806817e3c543ed6868401886e9a767aba455bdc->enter($__internal_e14bae05847c7333294dbea18806817e3c543ed6868401886e9a767aba455bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e14bae05847c7333294dbea18806817e3c543ed6868401886e9a767aba455bdc->leave($__internal_e14bae05847c7333294dbea18806817e3c543ed6868401886e9a767aba455bdc_prof);

        
        $__internal_dbef38332b7750b429b2101c461975189bfbaf29f74ec1e62d571e68d397ab21->leave($__internal_dbef38332b7750b429b2101c461975189bfbaf29f74ec1e62d571e68d397ab21_prof);

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
