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
        $__internal_4e2d0881ea801d54d51be2f85b21ba9d6922d95c9351830982754fd6c856c99b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e2d0881ea801d54d51be2f85b21ba9d6922d95c9351830982754fd6c856c99b->enter($__internal_4e2d0881ea801d54d51be2f85b21ba9d6922d95c9351830982754fd6c856c99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partesForm.html.twig"));

        $__internal_aeb439ba2ce264b4562bb729e8b8e2fd45184af39ac1b1ef48b81eb6c7f4a0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb439ba2ce264b4562bb729e8b8e2fd45184af39ac1b1ef48b81eb6c7f4a0bd->enter($__internal_aeb439ba2ce264b4562bb729e8b8e2fd45184af39ac1b1ef48b81eb6c7f4a0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partesForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e2d0881ea801d54d51be2f85b21ba9d6922d95c9351830982754fd6c856c99b->leave($__internal_4e2d0881ea801d54d51be2f85b21ba9d6922d95c9351830982754fd6c856c99b_prof);

        
        $__internal_aeb439ba2ce264b4562bb729e8b8e2fd45184af39ac1b1ef48b81eb6c7f4a0bd->leave($__internal_aeb439ba2ce264b4562bb729e8b8e2fd45184af39ac1b1ef48b81eb6c7f4a0bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_82dd1bb5e3ab3ad10ffdcff3b20df0d56a5ff9f8e2ac59003c4a53ff4aa2b38f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82dd1bb5e3ab3ad10ffdcff3b20df0d56a5ff9f8e2ac59003c4a53ff4aa2b38f->enter($__internal_82dd1bb5e3ab3ad10ffdcff3b20df0d56a5ff9f8e2ac59003c4a53ff4aa2b38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b4fe55c684452315579e30ca30b5616fc8fe58c34198dbfe4ef96f25c049b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b4fe55c684452315579e30ca30b5616fc8fe58c34198dbfe4ef96f25c049b56->enter($__internal_2b4fe55c684452315579e30ca30b5616fc8fe58c34198dbfe4ef96f25c049b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2b4fe55c684452315579e30ca30b5616fc8fe58c34198dbfe4ef96f25c049b56->leave($__internal_2b4fe55c684452315579e30ca30b5616fc8fe58c34198dbfe4ef96f25c049b56_prof);

        
        $__internal_82dd1bb5e3ab3ad10ffdcff3b20df0d56a5ff9f8e2ac59003c4a53ff4aa2b38f->leave($__internal_82dd1bb5e3ab3ad10ffdcff3b20df0d56a5ff9f8e2ac59003c4a53ff4aa2b38f_prof);

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
