<?php

/* convivencia/partes/partesForm.html.twig */
class __TwigTemplate_5e8a246f60e427141866cb500e690f7ea8c5ed208668d9400db5a52f7f4981a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/partes/partesForm.html.twig", 1);
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
        $__internal_b7f17470a9748e5901d4fe813257ea99d9171e05fbaba30f70ec86e44ace2953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f17470a9748e5901d4fe813257ea99d9171e05fbaba30f70ec86e44ace2953->enter($__internal_b7f17470a9748e5901d4fe813257ea99d9171e05fbaba30f70ec86e44ace2953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partesForm.html.twig"));

        $__internal_80cf4c5b0a81976cce5050fd10c76bffbfb988c0e9c473b45b836c45fbfbd314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80cf4c5b0a81976cce5050fd10c76bffbfb988c0e9c473b45b836c45fbfbd314->enter($__internal_80cf4c5b0a81976cce5050fd10c76bffbfb988c0e9c473b45b836c45fbfbd314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partesForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7f17470a9748e5901d4fe813257ea99d9171e05fbaba30f70ec86e44ace2953->leave($__internal_b7f17470a9748e5901d4fe813257ea99d9171e05fbaba30f70ec86e44ace2953_prof);

        
        $__internal_80cf4c5b0a81976cce5050fd10c76bffbfb988c0e9c473b45b836c45fbfbd314->leave($__internal_80cf4c5b0a81976cce5050fd10c76bffbfb988c0e9c473b45b836c45fbfbd314_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_913e52b8e201a58cbcdd5df77bdbdae2847c2829f96da27e647b9dd4e6365d66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913e52b8e201a58cbcdd5df77bdbdae2847c2829f96da27e647b9dd4e6365d66->enter($__internal_913e52b8e201a58cbcdd5df77bdbdae2847c2829f96da27e647b9dd4e6365d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5fde61b30c6ebcf2bbfa2c93bc9c6503f3f6878c42522a946b2af61177470360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fde61b30c6ebcf2bbfa2c93bc9c6503f3f6878c42522a946b2af61177470360->enter($__internal_5fde61b30c6ebcf2bbfa2c93bc9c6503f3f6878c42522a946b2af61177470360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"w3-row w3-container w3-white w3-margin-bottom\">
    <h1 class=\"w3-center\">Formulario Parte</h1>

        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "w3-content formConvivencia")));
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input class=\"w3-button w3-block w3-section w3-teal\" type=\"submit\" name=\"registrarse\" value=\"Enviar\">
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    </div>

";
        
        $__internal_5fde61b30c6ebcf2bbfa2c93bc9c6503f3f6878c42522a946b2af61177470360->leave($__internal_5fde61b30c6ebcf2bbfa2c93bc9c6503f3f6878c42522a946b2af61177470360_prof);

        
        $__internal_913e52b8e201a58cbcdd5df77bdbdae2847c2829f96da27e647b9dd4e6365d66->leave($__internal_913e52b8e201a58cbcdd5df77bdbdae2847c2829f96da27e647b9dd4e6365d66_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/partes/partesForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"w3-row w3-container w3-white w3-margin-bottom\">
    <h1 class=\"w3-center\">Formulario Parte</h1>

        {{ form_start(form, {'attr': {'class':'w3-content formConvivencia'}}) }}
        {{ form_widget(form) }}
        <input class=\"w3-button w3-block w3-section w3-teal\" type=\"submit\" name=\"registrarse\" value=\"Enviar\">
        {{ form_end(form) }}

    </div>

{% endblock %}
", "convivencia/partes/partesForm.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\app\\Resources\\views\\convivencia\\partes\\partesForm.html.twig");
    }
}
