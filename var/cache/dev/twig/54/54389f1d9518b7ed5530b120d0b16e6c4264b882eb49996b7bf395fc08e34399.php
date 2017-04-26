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
        $__internal_5f35c239ba3fff8bc3bf17064acfc7dafa1174ad40fb68d70fc92ffcec81f8e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f35c239ba3fff8bc3bf17064acfc7dafa1174ad40fb68d70fc92ffcec81f8e3->enter($__internal_5f35c239ba3fff8bc3bf17064acfc7dafa1174ad40fb68d70fc92ffcec81f8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d4ad8c48011eb343cbd66b460895ff39408932cf52d159386c60dce754e7a549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ad8c48011eb343cbd66b460895ff39408932cf52d159386c60dce754e7a549->enter($__internal_d4ad8c48011eb343cbd66b460895ff39408932cf52d159386c60dce754e7a549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5f35c239ba3fff8bc3bf17064acfc7dafa1174ad40fb68d70fc92ffcec81f8e3->leave($__internal_5f35c239ba3fff8bc3bf17064acfc7dafa1174ad40fb68d70fc92ffcec81f8e3_prof);

        
        $__internal_d4ad8c48011eb343cbd66b460895ff39408932cf52d159386c60dce754e7a549->leave($__internal_d4ad8c48011eb343cbd66b460895ff39408932cf52d159386c60dce754e7a549_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c5d10d717146f3a402e7533161f731bfca38575b11be92cdfbed14960d3f236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5d10d717146f3a402e7533161f731bfca38575b11be92cdfbed14960d3f236->enter($__internal_0c5d10d717146f3a402e7533161f731bfca38575b11be92cdfbed14960d3f236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_abdea994257f02dafa7076a6397f5c0297e0cf6b47c2e854127d8bd0dc46d828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abdea994257f02dafa7076a6397f5c0297e0cf6b47c2e854127d8bd0dc46d828->enter($__internal_abdea994257f02dafa7076a6397f5c0297e0cf6b47c2e854127d8bd0dc46d828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Convivencia";
        
        $__internal_abdea994257f02dafa7076a6397f5c0297e0cf6b47c2e854127d8bd0dc46d828->leave($__internal_abdea994257f02dafa7076a6397f5c0297e0cf6b47c2e854127d8bd0dc46d828_prof);

        
        $__internal_0c5d10d717146f3a402e7533161f731bfca38575b11be92cdfbed14960d3f236->leave($__internal_0c5d10d717146f3a402e7533161f731bfca38575b11be92cdfbed14960d3f236_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b8f9d3776b51d35c99af55f16ce4e579e0de83afe7d74276f82a9712363375c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f9d3776b51d35c99af55f16ce4e579e0de83afe7d74276f82a9712363375c8->enter($__internal_b8f9d3776b51d35c99af55f16ce4e579e0de83afe7d74276f82a9712363375c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1b3d5124446ae92eff93b924dcda49a9aab6945749287f8f7409753918db1869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3d5124446ae92eff93b924dcda49a9aab6945749287f8f7409753918db1869->enter($__internal_1b3d5124446ae92eff93b924dcda49a9aab6945749287f8f7409753918db1869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1b3d5124446ae92eff93b924dcda49a9aab6945749287f8f7409753918db1869->leave($__internal_1b3d5124446ae92eff93b924dcda49a9aab6945749287f8f7409753918db1869_prof);

        
        $__internal_b8f9d3776b51d35c99af55f16ce4e579e0de83afe7d74276f82a9712363375c8->leave($__internal_b8f9d3776b51d35c99af55f16ce4e579e0de83afe7d74276f82a9712363375c8_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0c7780a62c1a5fa14c958f87277143ce53ad0508435c8ca8e7c45bef1113d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0c7780a62c1a5fa14c958f87277143ce53ad0508435c8ca8e7c45bef1113d3d->enter($__internal_c0c7780a62c1a5fa14c958f87277143ce53ad0508435c8ca8e7c45bef1113d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e12385e0fed7f862ed56718ea7618a0eff947416dda1b28f4a1cbc49f47617dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12385e0fed7f862ed56718ea7618a0eff947416dda1b28f4a1cbc49f47617dc->enter($__internal_e12385e0fed7f862ed56718ea7618a0eff947416dda1b28f4a1cbc49f47617dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "
        ";
        
        $__internal_e12385e0fed7f862ed56718ea7618a0eff947416dda1b28f4a1cbc49f47617dc->leave($__internal_e12385e0fed7f862ed56718ea7618a0eff947416dda1b28f4a1cbc49f47617dc_prof);

        
        $__internal_c0c7780a62c1a5fa14c958f87277143ce53ad0508435c8ca8e7c45bef1113d3d->leave($__internal_c0c7780a62c1a5fa14c958f87277143ce53ad0508435c8ca8e7c45bef1113d3d_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ab82796a3576b4840f8b873cd9d8f1b03a761ab1021023b159864e2432e20d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ab82796a3576b4840f8b873cd9d8f1b03a761ab1021023b159864e2432e20d5->enter($__internal_0ab82796a3576b4840f8b873cd9d8f1b03a761ab1021023b159864e2432e20d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a14e910ac933c85ca7fb14f9f1d4277c863e098656c3f7e93804c88043705d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a14e910ac933c85ca7fb14f9f1d4277c863e098656c3f7e93804c88043705d0f->enter($__internal_a14e910ac933c85ca7fb14f9f1d4277c863e098656c3f7e93804c88043705d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a14e910ac933c85ca7fb14f9f1d4277c863e098656c3f7e93804c88043705d0f->leave($__internal_a14e910ac933c85ca7fb14f9f1d4277c863e098656c3f7e93804c88043705d0f_prof);

        
        $__internal_0ab82796a3576b4840f8b873cd9d8f1b03a761ab1021023b159864e2432e20d5->leave($__internal_0ab82796a3576b4840f8b873cd9d8f1b03a761ab1021023b159864e2432e20d5_prof);

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
