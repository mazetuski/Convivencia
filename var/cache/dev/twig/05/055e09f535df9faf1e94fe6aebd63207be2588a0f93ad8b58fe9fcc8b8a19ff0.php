<?php

/* convivencia/header.html.twig */
class __TwigTemplate_d8db84e9a7f0cbefa0c50073874c2c1c98c6ab8ae7368621a796542ea70ac7fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08d4d51d7746e02cc912d2ba1de295b8538a40a8ab6204b69ce7f7932b0ae640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08d4d51d7746e02cc912d2ba1de295b8538a40a8ab6204b69ce7f7932b0ae640->enter($__internal_08d4d51d7746e02cc912d2ba1de295b8538a40a8ab6204b69ce7f7932b0ae640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/header.html.twig"));

        $__internal_077f70bbbbcf96c0017368319eff7eafc50aef2885079448116fe5a8dfc8ea54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077f70bbbbcf96c0017368319eff7eafc50aef2885079448116fe5a8dfc8ea54->enter($__internal_077f70bbbbcf96c0017368319eff7eafc50aef2885079448116fe5a8dfc8ea54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/header.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_08d4d51d7746e02cc912d2ba1de295b8538a40a8ab6204b69ce7f7932b0ae640->leave($__internal_08d4d51d7746e02cc912d2ba1de295b8538a40a8ab6204b69ce7f7932b0ae640_prof);

        
        $__internal_077f70bbbbcf96c0017368319eff7eafc50aef2885079448116fe5a8dfc8ea54->leave($__internal_077f70bbbbcf96c0017368319eff7eafc50aef2885079448116fe5a8dfc8ea54_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_96dd9120f74673b45cab479f6484cc44b2b180784bd75a6cdbee628c07723b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96dd9120f74673b45cab479f6484cc44b2b180784bd75a6cdbee628c07723b9a->enter($__internal_96dd9120f74673b45cab479f6484cc44b2b180784bd75a6cdbee628c07723b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_68f32372fcdda4581e6e4312cb68893e76fa346b3d23d61a36aff7c20d822df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f32372fcdda4581e6e4312cb68893e76fa346b3d23d61a36aff7c20d822df3->enter($__internal_68f32372fcdda4581e6e4312cb68893e76fa346b3d23d61a36aff7c20d822df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "usuario", array(), "any", true, true)) {
            // line 3
            echo "        <header class=\"w3-container w3-teal\">
            <a href=\"";
            // line 4
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"w3-padding w3-mobile w3-left w3-hover-grey w3-xlarge\">Logout</a>
            <a href=\"";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
            echo "\"
               class=\"w3-padding w3-mobile w3-left w3-hover-grey w3-xlarge\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "usuario", array()), "html", null, true);
            echo "</a>
            ";
            // line 7
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 8
                echo "                <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("convivencia_registro");
                echo "\"
                   class=\"w3-padding w3-mobile w3-left w3-hover-grey w3-xlarge\">Registro</a>
                <a href=\"";
                // line 10
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_partes");
                echo "\"
                   class=\"w3-padding w3-mobile w3-left w3-hover-grey w3-xlarge\">Gestion Partes</a>
                <a href=\"";
                // line 12
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_sanciones");
                echo "\"
                   class=\"w3-padding w3-mobile w3-left w3-hover-grey w3-xlarge\">Gestion Sanciones</a>
            ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 15
                echo "                <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registrarAlumno");
                echo "\" class=\"w3-padding w3-mobile w3-left w3-hover-grey w3-xlarge\">Perfil</a>
            ";
            }
            // line 17
            echo "        </header>
    ";
        }
        
        $__internal_68f32372fcdda4581e6e4312cb68893e76fa346b3d23d61a36aff7c20d822df3->leave($__internal_68f32372fcdda4581e6e4312cb68893e76fa346b3d23d61a36aff7c20d822df3_prof);

        
        $__internal_96dd9120f74673b45cab479f6484cc44b2b180784bd75a6cdbee628c07723b9a->leave($__internal_96dd9120f74673b45cab479f6484cc44b2b180784bd75a6cdbee628c07723b9a_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 17,  81 => 15,  75 => 12,  70 => 10,  64 => 8,  62 => 7,  58 => 6,  54 => 5,  50 => 4,  47 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block header %}
    {% if app.user.usuario is defined %}
        <header class=\"w3-container w3-teal\">
            <a href=\"{{ path('logout') }}\" class=\"w3-padding w3-mobile w3-left w3-hover-grey w3-xlarge\">Logout</a>
            <a href=\"{{ path('index') }}\"
               class=\"w3-padding w3-mobile w3-left w3-hover-grey w3-xlarge\">{{ app.user.usuario }}</a>
            {% if is_granted('ROLE_ADMIN') %}
                <a href=\"{{ path('convivencia_registro') }}\"
                   class=\"w3-padding w3-mobile w3-left w3-hover-grey w3-xlarge\">Registro</a>
                <a href=\"{{ path('gestion_partes') }}\"
                   class=\"w3-padding w3-mobile w3-left w3-hover-grey w3-xlarge\">Gestion Partes</a>
                <a href=\"{{ path('gestion_sanciones') }}\"
                   class=\"w3-padding w3-mobile w3-left w3-hover-grey w3-xlarge\">Gestion Sanciones</a>
            {% elseif is_granted('ROLE_USER') %}
                <a href=\"{{ path('registrarAlumno') }}\" class=\"w3-padding w3-mobile w3-left w3-hover-grey w3-xlarge\">Perfil</a>
            {% endif %}
        </header>
    {% endif %}
{% endblock %}", "convivencia/header.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\app\\Resources\\views\\convivencia\\header.html.twig");
    }
}
