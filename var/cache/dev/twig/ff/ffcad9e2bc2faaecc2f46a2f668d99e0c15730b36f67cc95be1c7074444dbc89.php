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
        $__internal_98515a91df051756e5f5d09f1eb69f66facd4ae5c95807254496afb477ba7f95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98515a91df051756e5f5d09f1eb69f66facd4ae5c95807254496afb477ba7f95->enter($__internal_98515a91df051756e5f5d09f1eb69f66facd4ae5c95807254496afb477ba7f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a180973b0e862b5415ec42e41088524aaa2e05b4f4debfbdf4f5d5398c12970f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a180973b0e862b5415ec42e41088524aaa2e05b4f4debfbdf4f5d5398c12970f->enter($__internal_a180973b0e862b5415ec42e41088524aaa2e05b4f4debfbdf4f5d5398c12970f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98515a91df051756e5f5d09f1eb69f66facd4ae5c95807254496afb477ba7f95->leave($__internal_98515a91df051756e5f5d09f1eb69f66facd4ae5c95807254496afb477ba7f95_prof);

        
        $__internal_a180973b0e862b5415ec42e41088524aaa2e05b4f4debfbdf4f5d5398c12970f->leave($__internal_a180973b0e862b5415ec42e41088524aaa2e05b4f4debfbdf4f5d5398c12970f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f4062914192bc513608fa7b81159aed9d5e4c6c4208158e35312c6b00c4c30b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4062914192bc513608fa7b81159aed9d5e4c6c4208158e35312c6b00c4c30b4->enter($__internal_f4062914192bc513608fa7b81159aed9d5e4c6c4208158e35312c6b00c4c30b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8d4b0b845155d95d7f9466428e6d653359f1dcb6aa387394657d48cd0f242411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4b0b845155d95d7f9466428e6d653359f1dcb6aa387394657d48cd0f242411->enter($__internal_8d4b0b845155d95d7f9466428e6d653359f1dcb6aa387394657d48cd0f242411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8d4b0b845155d95d7f9466428e6d653359f1dcb6aa387394657d48cd0f242411->leave($__internal_8d4b0b845155d95d7f9466428e6d653359f1dcb6aa387394657d48cd0f242411_prof);

        
        $__internal_f4062914192bc513608fa7b81159aed9d5e4c6c4208158e35312c6b00c4c30b4->leave($__internal_f4062914192bc513608fa7b81159aed9d5e4c6c4208158e35312c6b00c4c30b4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_70ccfa14e1916d1530f186bb9f5fc6e49036581b07dd795e7302d352ee2c5c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70ccfa14e1916d1530f186bb9f5fc6e49036581b07dd795e7302d352ee2c5c05->enter($__internal_70ccfa14e1916d1530f186bb9f5fc6e49036581b07dd795e7302d352ee2c5c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b67ebec14326e0be8a81b990b63bdaf77d9a08d16a5db26868db90c9b76e0498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67ebec14326e0be8a81b990b63bdaf77d9a08d16a5db26868db90c9b76e0498->enter($__internal_b67ebec14326e0be8a81b990b63bdaf77d9a08d16a5db26868db90c9b76e0498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b67ebec14326e0be8a81b990b63bdaf77d9a08d16a5db26868db90c9b76e0498->leave($__internal_b67ebec14326e0be8a81b990b63bdaf77d9a08d16a5db26868db90c9b76e0498_prof);

        
        $__internal_70ccfa14e1916d1530f186bb9f5fc6e49036581b07dd795e7302d352ee2c5c05->leave($__internal_70ccfa14e1916d1530f186bb9f5fc6e49036581b07dd795e7302d352ee2c5c05_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_245ba314d9317d23edfd8788a2cb0cf351776f62bf2631e8e145edeb9418fd18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245ba314d9317d23edfd8788a2cb0cf351776f62bf2631e8e145edeb9418fd18->enter($__internal_245ba314d9317d23edfd8788a2cb0cf351776f62bf2631e8e145edeb9418fd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cdfab6924391ed8c9c5067d41cca5bcd09943e833749a4cd317ebd6b22528308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdfab6924391ed8c9c5067d41cca5bcd09943e833749a4cd317ebd6b22528308->enter($__internal_cdfab6924391ed8c9c5067d41cca5bcd09943e833749a4cd317ebd6b22528308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_cdfab6924391ed8c9c5067d41cca5bcd09943e833749a4cd317ebd6b22528308->leave($__internal_cdfab6924391ed8c9c5067d41cca5bcd09943e833749a4cd317ebd6b22528308_prof);

        
        $__internal_245ba314d9317d23edfd8788a2cb0cf351776f62bf2631e8e145edeb9418fd18->leave($__internal_245ba314d9317d23edfd8788a2cb0cf351776f62bf2631e8e145edeb9418fd18_prof);

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
