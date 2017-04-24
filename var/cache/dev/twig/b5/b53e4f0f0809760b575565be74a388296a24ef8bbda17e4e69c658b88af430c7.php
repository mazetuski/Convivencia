<?php

/* convivencia/registro.html.twig */
class __TwigTemplate_45c216d5a56fe240c880d7647b2c4a8e0835da2b3785d8074eb0e2310c93fab2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/registro.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2566c1f422d2ffe83e29c8f5a0c79e34034be980ae97682c9f406d57baa45f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2566c1f422d2ffe83e29c8f5a0c79e34034be980ae97682c9f406d57baa45f6c->enter($__internal_2566c1f422d2ffe83e29c8f5a0c79e34034be980ae97682c9f406d57baa45f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/registro.html.twig"));

        $__internal_689c97e6498c0cfe298eb612b8f06eea2ff4bb52606f2aeeab2bc630788323e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689c97e6498c0cfe298eb612b8f06eea2ff4bb52606f2aeeab2bc630788323e1->enter($__internal_689c97e6498c0cfe298eb612b8f06eea2ff4bb52606f2aeeab2bc630788323e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/registro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2566c1f422d2ffe83e29c8f5a0c79e34034be980ae97682c9f406d57baa45f6c->leave($__internal_2566c1f422d2ffe83e29c8f5a0c79e34034be980ae97682c9f406d57baa45f6c_prof);

        
        $__internal_689c97e6498c0cfe298eb612b8f06eea2ff4bb52606f2aeeab2bc630788323e1->leave($__internal_689c97e6498c0cfe298eb612b8f06eea2ff4bb52606f2aeeab2bc630788323e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eaba57d3512eccd36bc93bd305de318c00a9f5c432f0ff9419004c6bf2ea5993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaba57d3512eccd36bc93bd305de318c00a9f5c432f0ff9419004c6bf2ea5993->enter($__internal_eaba57d3512eccd36bc93bd305de318c00a9f5c432f0ff9419004c6bf2ea5993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d42af8982f700326a7d4f1cf846836ca1fff9a56ac6d4ab336b6c0e1abba7f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42af8982f700326a7d4f1cf846836ca1fff9a56ac6d4ab336b6c0e1abba7f95->enter($__internal_d42af8982f700326a7d4f1cf846836ca1fff9a56ac6d4ab336b6c0e1abba7f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Registro</h1>
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" name=\"registrarse\" value=\"Registrarse\">
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_d42af8982f700326a7d4f1cf846836ca1fff9a56ac6d4ab336b6c0e1abba7f95->leave($__internal_d42af8982f700326a7d4f1cf846836ca1fff9a56ac6d4ab336b6c0e1abba7f95_prof);

        
        $__internal_eaba57d3512eccd36bc93bd305de318c00a9f5c432f0ff9419004c6bf2ea5993->leave($__internal_eaba57d3512eccd36bc93bd305de318c00a9f5c432f0ff9419004c6bf2ea5993_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Registro</h1>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    <input type=\"submit\" name=\"registrarse\" value=\"Registrarse\">
    {{ form_end(form) }}


{% endblock %}
", "convivencia/registro.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\app\\Resources\\views\\convivencia\\registro.html.twig");
    }
}
