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
        $__internal_909fdfceb950a2f3931b672ce40f37539b8e93a9a1e00ce392f48ab24f0a75cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_909fdfceb950a2f3931b672ce40f37539b8e93a9a1e00ce392f48ab24f0a75cf->enter($__internal_909fdfceb950a2f3931b672ce40f37539b8e93a9a1e00ce392f48ab24f0a75cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_65d555e98061b80025af63342580d771642d50a3bc9348871d59b8ee34c09e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d555e98061b80025af63342580d771642d50a3bc9348871d59b8ee34c09e97->enter($__internal_65d555e98061b80025af63342580d771642d50a3bc9348871d59b8ee34c09e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_909fdfceb950a2f3931b672ce40f37539b8e93a9a1e00ce392f48ab24f0a75cf->leave($__internal_909fdfceb950a2f3931b672ce40f37539b8e93a9a1e00ce392f48ab24f0a75cf_prof);

        
        $__internal_65d555e98061b80025af63342580d771642d50a3bc9348871d59b8ee34c09e97->leave($__internal_65d555e98061b80025af63342580d771642d50a3bc9348871d59b8ee34c09e97_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e34a7f8305dce905d8bf2e8d7d2b6a4c072502a0279a69d8fe1eb8aa5503d29f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e34a7f8305dce905d8bf2e8d7d2b6a4c072502a0279a69d8fe1eb8aa5503d29f->enter($__internal_e34a7f8305dce905d8bf2e8d7d2b6a4c072502a0279a69d8fe1eb8aa5503d29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_00d19476a0ed5a5847960ad2f4fc69122f2226f139403fec45d8aede768dbd2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d19476a0ed5a5847960ad2f4fc69122f2226f139403fec45d8aede768dbd2b->enter($__internal_00d19476a0ed5a5847960ad2f4fc69122f2226f139403fec45d8aede768dbd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_00d19476a0ed5a5847960ad2f4fc69122f2226f139403fec45d8aede768dbd2b->leave($__internal_00d19476a0ed5a5847960ad2f4fc69122f2226f139403fec45d8aede768dbd2b_prof);

        
        $__internal_e34a7f8305dce905d8bf2e8d7d2b6a4c072502a0279a69d8fe1eb8aa5503d29f->leave($__internal_e34a7f8305dce905d8bf2e8d7d2b6a4c072502a0279a69d8fe1eb8aa5503d29f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_76567ab1e26be1601b5345aae74763f70cd34e72370473ead472b6753460d9e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76567ab1e26be1601b5345aae74763f70cd34e72370473ead472b6753460d9e5->enter($__internal_76567ab1e26be1601b5345aae74763f70cd34e72370473ead472b6753460d9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_73405487133d6c95dc594e48a97b92cf4451eb75721ed7f48a1076cbd35339ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73405487133d6c95dc594e48a97b92cf4451eb75721ed7f48a1076cbd35339ef->enter($__internal_73405487133d6c95dc594e48a97b92cf4451eb75721ed7f48a1076cbd35339ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_73405487133d6c95dc594e48a97b92cf4451eb75721ed7f48a1076cbd35339ef->leave($__internal_73405487133d6c95dc594e48a97b92cf4451eb75721ed7f48a1076cbd35339ef_prof);

        
        $__internal_76567ab1e26be1601b5345aae74763f70cd34e72370473ead472b6753460d9e5->leave($__internal_76567ab1e26be1601b5345aae74763f70cd34e72370473ead472b6753460d9e5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f23401d329dd5937f93e0294f9f4321873ec58f8286549c8fff1d539ebd756b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f23401d329dd5937f93e0294f9f4321873ec58f8286549c8fff1d539ebd756b->enter($__internal_9f23401d329dd5937f93e0294f9f4321873ec58f8286549c8fff1d539ebd756b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_329cbc2012ef491c6a97fe9f401379ca9746394711091e175a06a2b621549508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329cbc2012ef491c6a97fe9f401379ca9746394711091e175a06a2b621549508->enter($__internal_329cbc2012ef491c6a97fe9f401379ca9746394711091e175a06a2b621549508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_329cbc2012ef491c6a97fe9f401379ca9746394711091e175a06a2b621549508->leave($__internal_329cbc2012ef491c6a97fe9f401379ca9746394711091e175a06a2b621549508_prof);

        
        $__internal_9f23401d329dd5937f93e0294f9f4321873ec58f8286549c8fff1d539ebd756b->leave($__internal_9f23401d329dd5937f93e0294f9f4321873ec58f8286549c8fff1d539ebd756b_prof);

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
