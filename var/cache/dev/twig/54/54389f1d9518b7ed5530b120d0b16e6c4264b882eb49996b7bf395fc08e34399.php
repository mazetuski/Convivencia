<?php

/* base.html.twig */
class __TwigTemplate_d7fc0ce3323172d5bcb2325157f060a4f77c91b24331d4fc003d0407a1b7b3db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fdbba8dd1067626ab6ecdc2c8ae7a35543242fced07ac8a38c87f0afc85a56af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdbba8dd1067626ab6ecdc2c8ae7a35543242fced07ac8a38c87f0afc85a56af->enter($__internal_fdbba8dd1067626ab6ecdc2c8ae7a35543242fced07ac8a38c87f0afc85a56af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_69bdb714626fb4afd1f9bd679c999b731be2c0b4802f1b52ff0c4e5b43fa708b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69bdb714626fb4afd1f9bd679c999b731be2c0b4802f1b52ff0c4e5b43fa708b->enter($__internal_69bdb714626fb4afd1f9bd679c999b731be2c0b4802f1b52ff0c4e5b43fa708b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 16
        $this->loadTemplate("convivencia/header.html.twig", "base.html.twig", 16)->display($context);
        // line 17
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </body>
</html>
";
        
        $__internal_fdbba8dd1067626ab6ecdc2c8ae7a35543242fced07ac8a38c87f0afc85a56af->leave($__internal_fdbba8dd1067626ab6ecdc2c8ae7a35543242fced07ac8a38c87f0afc85a56af_prof);

        
        $__internal_69bdb714626fb4afd1f9bd679c999b731be2c0b4802f1b52ff0c4e5b43fa708b->leave($__internal_69bdb714626fb4afd1f9bd679c999b731be2c0b4802f1b52ff0c4e5b43fa708b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_24fcb2878c69438daf39b9e4fd475a997219ec1012355c30f26a6cb5ecadd503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24fcb2878c69438daf39b9e4fd475a997219ec1012355c30f26a6cb5ecadd503->enter($__internal_24fcb2878c69438daf39b9e4fd475a997219ec1012355c30f26a6cb5ecadd503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ef72a9a26ca3fd760023ea7f638c974b123e2f13885e4adbd5df0bc4d8c886c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef72a9a26ca3fd760023ea7f638c974b123e2f13885e4adbd5df0bc4d8c886c->enter($__internal_1ef72a9a26ca3fd760023ea7f638c974b123e2f13885e4adbd5df0bc4d8c886c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1ef72a9a26ca3fd760023ea7f638c974b123e2f13885e4adbd5df0bc4d8c886c->leave($__internal_1ef72a9a26ca3fd760023ea7f638c974b123e2f13885e4adbd5df0bc4d8c886c_prof);

        
        $__internal_24fcb2878c69438daf39b9e4fd475a997219ec1012355c30f26a6cb5ecadd503->leave($__internal_24fcb2878c69438daf39b9e4fd475a997219ec1012355c30f26a6cb5ecadd503_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9443645dd738ca71c50b6537b51e07cb1e171caa9bab1212675cd0f089aa64dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9443645dd738ca71c50b6537b51e07cb1e171caa9bab1212675cd0f089aa64dd->enter($__internal_9443645dd738ca71c50b6537b51e07cb1e171caa9bab1212675cd0f089aa64dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e338a3fed23f383b06b66efd472d9741292f1ca9b4e9136bbbd306d2bf920bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e338a3fed23f383b06b66efd472d9741292f1ca9b4e9136bbbd306d2bf920bd0->enter($__internal_e338a3fed23f383b06b66efd472d9741292f1ca9b4e9136bbbd306d2bf920bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/3/w3.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/estilo.css"), "html", null, true);
        echo "\">
            <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_e338a3fed23f383b06b66efd472d9741292f1ca9b4e9136bbbd306d2bf920bd0->leave($__internal_e338a3fed23f383b06b66efd472d9741292f1ca9b4e9136bbbd306d2bf920bd0_prof);

        
        $__internal_9443645dd738ca71c50b6537b51e07cb1e171caa9bab1212675cd0f089aa64dd->leave($__internal_9443645dd738ca71c50b6537b51e07cb1e171caa9bab1212675cd0f089aa64dd_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_8da5e064385ab7e249f24cb4684351215d6ea73f3a97451d005655e5738c1ca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da5e064385ab7e249f24cb4684351215d6ea73f3a97451d005655e5738c1ca9->enter($__internal_8da5e064385ab7e249f24cb4684351215d6ea73f3a97451d005655e5738c1ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e26489f4d3ed7bbcc0c5187edb7f617ac04a7ed11161968f36fdce5c23eb6542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e26489f4d3ed7bbcc0c5187edb7f617ac04a7ed11161968f36fdce5c23eb6542->enter($__internal_e26489f4d3ed7bbcc0c5187edb7f617ac04a7ed11161968f36fdce5c23eb6542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
        ";
        
        $__internal_e26489f4d3ed7bbcc0c5187edb7f617ac04a7ed11161968f36fdce5c23eb6542->leave($__internal_e26489f4d3ed7bbcc0c5187edb7f617ac04a7ed11161968f36fdce5c23eb6542_prof);

        
        $__internal_8da5e064385ab7e249f24cb4684351215d6ea73f3a97451d005655e5738c1ca9->leave($__internal_8da5e064385ab7e249f24cb4684351215d6ea73f3a97451d005655e5738c1ca9_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4dc9e665e09d445f690df256c8c6a05d5dcf6f6d2ac6f34e69fbc9c427158a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc9e665e09d445f690df256c8c6a05d5dcf6f6d2ac6f34e69fbc9c427158a02->enter($__internal_4dc9e665e09d445f690df256c8c6a05d5dcf6f6d2ac6f34e69fbc9c427158a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_99b15eb8b6810fd010802a4a53042967b1dc0944fa525f7267c23e32bbc23641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b15eb8b6810fd010802a4a53042967b1dc0944fa525f7267c23e32bbc23641->enter($__internal_99b15eb8b6810fd010802a4a53042967b1dc0944fa525f7267c23e32bbc23641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_99b15eb8b6810fd010802a4a53042967b1dc0944fa525f7267c23e32bbc23641->leave($__internal_99b15eb8b6810fd010802a4a53042967b1dc0944fa525f7267c23e32bbc23641_prof);

        
        $__internal_4dc9e665e09d445f690df256c8c6a05d5dcf6f6d2ac6f34e69fbc9c427158a02->leave($__internal_4dc9e665e09d445f690df256c8c6a05d5dcf6f6d2ac6f34e69fbc9c427158a02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 20,  125 => 18,  116 => 17,  104 => 11,  100 => 10,  96 => 8,  87 => 7,  69 => 6,  57 => 21,  54 => 20,  51 => 17,  49 => 16,  42 => 13,  40 => 7,  36 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/3/w3.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/estilo.css') }}\">
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery.min.js') }}\"></script>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% include 'convivencia/header.html.twig' %}
        {% block body %}

        {% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\app\\Resources\\views\\base.html.twig");
    }
}
