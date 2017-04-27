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
        $__internal_951e8e642c65bd384a5e68ecaccf377e51ae71ec8ed687bde2b064c7378c40bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_951e8e642c65bd384a5e68ecaccf377e51ae71ec8ed687bde2b064c7378c40bf->enter($__internal_951e8e642c65bd384a5e68ecaccf377e51ae71ec8ed687bde2b064c7378c40bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partesForm.html.twig"));

        $__internal_f9350a67542370b6078e3924f4840e5a54c56a3ba356c5d4814b116f90e484c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9350a67542370b6078e3924f4840e5a54c56a3ba356c5d4814b116f90e484c2->enter($__internal_f9350a67542370b6078e3924f4840e5a54c56a3ba356c5d4814b116f90e484c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partesForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_951e8e642c65bd384a5e68ecaccf377e51ae71ec8ed687bde2b064c7378c40bf->leave($__internal_951e8e642c65bd384a5e68ecaccf377e51ae71ec8ed687bde2b064c7378c40bf_prof);

        
        $__internal_f9350a67542370b6078e3924f4840e5a54c56a3ba356c5d4814b116f90e484c2->leave($__internal_f9350a67542370b6078e3924f4840e5a54c56a3ba356c5d4814b116f90e484c2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d5ea7c83b73457f3a6cb5b3d1001760f6dc761a238e4ad7a64e889cd4e861c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d5ea7c83b73457f3a6cb5b3d1001760f6dc761a238e4ad7a64e889cd4e861c7->enter($__internal_4d5ea7c83b73457f3a6cb5b3d1001760f6dc761a238e4ad7a64e889cd4e861c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4acaffd388158b43ba12babbfce388b5f2508edb8c02ce616354faf8efcf462b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4acaffd388158b43ba12babbfce388b5f2508edb8c02ce616354faf8efcf462b->enter($__internal_4acaffd388158b43ba12babbfce388b5f2508edb8c02ce616354faf8efcf462b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"w3-row w3-container w3-white w3-margin-bottom\">
    <h1 class=\"w3-center\">Formulario Parte</h1>

        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "w3-content formConvivencia", "id" => "parteForm")));
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
        
        $__internal_4acaffd388158b43ba12babbfce388b5f2508edb8c02ce616354faf8efcf462b->leave($__internal_4acaffd388158b43ba12babbfce388b5f2508edb8c02ce616354faf8efcf462b_prof);

        
        $__internal_4d5ea7c83b73457f3a6cb5b3d1001760f6dc761a238e4ad7a64e889cd4e861c7->leave($__internal_4d5ea7c83b73457f3a6cb5b3d1001760f6dc761a238e4ad7a64e889cd4e861c7_prof);

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

        {{ form_start(form, {'attr': {'class':'w3-content formConvivencia', 'id':'parteForm'}}) }}
        {{ form_widget(form) }}
        <input class=\"w3-button w3-block w3-section w3-teal\" type=\"submit\" name=\"registrarse\" value=\"Enviar\">
        {{ form_end(form) }}

    </div>

{% endblock %}
", "convivencia/partes/partesForm.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\app\\Resources\\views\\convivencia\\partes\\partesForm.html.twig");
    }
}
