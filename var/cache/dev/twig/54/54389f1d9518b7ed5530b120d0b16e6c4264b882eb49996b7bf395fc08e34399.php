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
        $__internal_b2313939967f7f91559b6ef301480fab0332e11e0fa646849fe44581f0fc7a40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2313939967f7f91559b6ef301480fab0332e11e0fa646849fe44581f0fc7a40->enter($__internal_b2313939967f7f91559b6ef301480fab0332e11e0fa646849fe44581f0fc7a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_50bd0cd48ecb59956b7a187b19fe338bf28b1515301ab58e5b83b228a9a902a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50bd0cd48ecb59956b7a187b19fe338bf28b1515301ab58e5b83b228a9a902a1->enter($__internal_50bd0cd48ecb59956b7a187b19fe338bf28b1515301ab58e5b83b228a9a902a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 22
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 25
        $this->loadTemplate("convivencia/header.html.twig", "base.html.twig", 25)->display($context);
        // line 26
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
";
        
        $__internal_b2313939967f7f91559b6ef301480fab0332e11e0fa646849fe44581f0fc7a40->leave($__internal_b2313939967f7f91559b6ef301480fab0332e11e0fa646849fe44581f0fc7a40_prof);

        
        $__internal_50bd0cd48ecb59956b7a187b19fe338bf28b1515301ab58e5b83b228a9a902a1->leave($__internal_50bd0cd48ecb59956b7a187b19fe338bf28b1515301ab58e5b83b228a9a902a1_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_587c16094da03901f4dea10c4eb36f8c48be1995732e1e16ab3451a8879879bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_587c16094da03901f4dea10c4eb36f8c48be1995732e1e16ab3451a8879879bc->enter($__internal_587c16094da03901f4dea10c4eb36f8c48be1995732e1e16ab3451a8879879bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d09f570a421479dbbe7237c993d4546ec2dc42d31b716b89aa3d4b37afc315b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09f570a421479dbbe7237c993d4546ec2dc42d31b716b89aa3d4b37afc315b2->enter($__internal_d09f570a421479dbbe7237c993d4546ec2dc42d31b716b89aa3d4b37afc315b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Convivencia";
        
        $__internal_d09f570a421479dbbe7237c993d4546ec2dc42d31b716b89aa3d4b37afc315b2->leave($__internal_d09f570a421479dbbe7237c993d4546ec2dc42d31b716b89aa3d4b37afc315b2_prof);

        
        $__internal_587c16094da03901f4dea10c4eb36f8c48be1995732e1e16ab3451a8879879bc->leave($__internal_587c16094da03901f4dea10c4eb36f8c48be1995732e1e16ab3451a8879879bc_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_109e4bbbccbdbc0a6f0b7e89e6cc6942ae2545746ecf69328e16f92883f34381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_109e4bbbccbdbc0a6f0b7e89e6cc6942ae2545746ecf69328e16f92883f34381->enter($__internal_109e4bbbccbdbc0a6f0b7e89e6cc6942ae2545746ecf69328e16f92883f34381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_101236b48ff46c9f7f0a11884980d3b58bea0de7518ac88b543fac60fa628e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101236b48ff46c9f7f0a11884980d3b58bea0de7518ac88b543fac60fa628e1b->enter($__internal_101236b48ff46c9f7f0a11884980d3b58bea0de7518ac88b543fac60fa628e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            ";
        // line 9
        echo "            <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/3/w3.css\">
            ";
        // line 11
        echo "            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            ";
        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/chosen/chosen.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/estilo.css"), "html", null, true);
        echo "\">

            ";
        // line 17
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 19
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/convivencia.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_101236b48ff46c9f7f0a11884980d3b58bea0de7518ac88b543fac60fa628e1b->leave($__internal_101236b48ff46c9f7f0a11884980d3b58bea0de7518ac88b543fac60fa628e1b_prof);

        
        $__internal_109e4bbbccbdbc0a6f0b7e89e6cc6942ae2545746ecf69328e16f92883f34381->leave($__internal_109e4bbbccbdbc0a6f0b7e89e6cc6942ae2545746ecf69328e16f92883f34381_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_95e408e10bdfdb5e1a85c1a406138a1b049bf20a23e7be08bc452ebf9c14673b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95e408e10bdfdb5e1a85c1a406138a1b049bf20a23e7be08bc452ebf9c14673b->enter($__internal_95e408e10bdfdb5e1a85c1a406138a1b049bf20a23e7be08bc452ebf9c14673b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_944b40565d683cf5f6e35a9743780e2f2c367b54048d9d8a1942b8534194b506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944b40565d683cf5f6e35a9743780e2f2c367b54048d9d8a1942b8534194b506->enter($__internal_944b40565d683cf5f6e35a9743780e2f2c367b54048d9d8a1942b8534194b506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "
        ";
        
        $__internal_944b40565d683cf5f6e35a9743780e2f2c367b54048d9d8a1942b8534194b506->leave($__internal_944b40565d683cf5f6e35a9743780e2f2c367b54048d9d8a1942b8534194b506_prof);

        
        $__internal_95e408e10bdfdb5e1a85c1a406138a1b049bf20a23e7be08bc452ebf9c14673b->leave($__internal_95e408e10bdfdb5e1a85c1a406138a1b049bf20a23e7be08bc452ebf9c14673b_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7565946b4ea2d7a1090a89cdbacc27d7ddbb3be8abbcc2eadf94b2ed362d6b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7565946b4ea2d7a1090a89cdbacc27d7ddbb3be8abbcc2eadf94b2ed362d6b15->enter($__internal_7565946b4ea2d7a1090a89cdbacc27d7ddbb3be8abbcc2eadf94b2ed362d6b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_013c5a1984892533fd3ccc78433e0bb52b9ea42dd01a1a9e73d77aa3d3778d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013c5a1984892533fd3ccc78433e0bb52b9ea42dd01a1a9e73d77aa3d3778d06->enter($__internal_013c5a1984892533fd3ccc78433e0bb52b9ea42dd01a1a9e73d77aa3d3778d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_013c5a1984892533fd3ccc78433e0bb52b9ea42dd01a1a9e73d77aa3d3778d06->leave($__internal_013c5a1984892533fd3ccc78433e0bb52b9ea42dd01a1a9e73d77aa3d3778d06_prof);

        
        $__internal_7565946b4ea2d7a1090a89cdbacc27d7ddbb3be8abbcc2eadf94b2ed362d6b15->leave($__internal_7565946b4ea2d7a1090a89cdbacc27d7ddbb3be8abbcc2eadf94b2ed362d6b15_prof);

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
        return array (  156 => 29,  145 => 27,  136 => 26,  124 => 20,  119 => 19,  114 => 17,  109 => 14,  104 => 13,  101 => 11,  98 => 9,  96 => 8,  87 => 7,  69 => 6,  57 => 30,  54 => 29,  51 => 26,  49 => 25,  42 => 22,  40 => 7,  36 => 6,  29 => 1,);
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
        <title>{% block title %}Convivencia{% endblock %}</title>
        {% block stylesheets %}
            {# CSS #}
            <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/3/w3.css\">
            {# Font awesome #}
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            {# Chosen css #}
            <link rel=\"stylesheet\" href=\"{{ asset('css/chosen/chosen.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/estilo.css') }}\">

            {# JAVASCRIPT #}
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery.min.js') }}\"></script>
            {# Chosen js #}
            <script type=\"text/javascript\" src=\"{{ asset('js/chosen/chosen.jquery.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/convivencia.js') }}\"></script>
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
