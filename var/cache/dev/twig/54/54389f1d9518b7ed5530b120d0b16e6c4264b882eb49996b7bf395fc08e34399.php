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
        $__internal_eb64812cc984ac40293bd035bd8623182f34f1f1b6b52a931996902f53628df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb64812cc984ac40293bd035bd8623182f34f1f1b6b52a931996902f53628df0->enter($__internal_eb64812cc984ac40293bd035bd8623182f34f1f1b6b52a931996902f53628df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_21849987152fde5c647db2444cee5e6e76f3ff5618099db01ae9db0eeb87eb04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21849987152fde5c647db2444cee5e6e76f3ff5618099db01ae9db0eeb87eb04->enter($__internal_21849987152fde5c647db2444cee5e6e76f3ff5618099db01ae9db0eeb87eb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_eb64812cc984ac40293bd035bd8623182f34f1f1b6b52a931996902f53628df0->leave($__internal_eb64812cc984ac40293bd035bd8623182f34f1f1b6b52a931996902f53628df0_prof);

        
        $__internal_21849987152fde5c647db2444cee5e6e76f3ff5618099db01ae9db0eeb87eb04->leave($__internal_21849987152fde5c647db2444cee5e6e76f3ff5618099db01ae9db0eeb87eb04_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_90c4df0e9e33923e01cd0c5d274a0dc56c6aab4943ceca0a5fba4696553f7d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90c4df0e9e33923e01cd0c5d274a0dc56c6aab4943ceca0a5fba4696553f7d09->enter($__internal_90c4df0e9e33923e01cd0c5d274a0dc56c6aab4943ceca0a5fba4696553f7d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e5efb356da26f98f21a14accd12933548b50ba8a928098feb47296d131db3537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5efb356da26f98f21a14accd12933548b50ba8a928098feb47296d131db3537->enter($__internal_e5efb356da26f98f21a14accd12933548b50ba8a928098feb47296d131db3537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Convivencia";
        
        $__internal_e5efb356da26f98f21a14accd12933548b50ba8a928098feb47296d131db3537->leave($__internal_e5efb356da26f98f21a14accd12933548b50ba8a928098feb47296d131db3537_prof);

        
        $__internal_90c4df0e9e33923e01cd0c5d274a0dc56c6aab4943ceca0a5fba4696553f7d09->leave($__internal_90c4df0e9e33923e01cd0c5d274a0dc56c6aab4943ceca0a5fba4696553f7d09_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c51e24ce3f6ce4f693ff8df6180617859d7b637cf0733b7b76f9f75aaa107919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51e24ce3f6ce4f693ff8df6180617859d7b637cf0733b7b76f9f75aaa107919->enter($__internal_c51e24ce3f6ce4f693ff8df6180617859d7b637cf0733b7b76f9f75aaa107919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7e2bee6d9e301803128ecdd6dba60b04b443f814af1b5b14920c499b1557e622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2bee6d9e301803128ecdd6dba60b04b443f814af1b5b14920c499b1557e622->enter($__internal_7e2bee6d9e301803128ecdd6dba60b04b443f814af1b5b14920c499b1557e622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7e2bee6d9e301803128ecdd6dba60b04b443f814af1b5b14920c499b1557e622->leave($__internal_7e2bee6d9e301803128ecdd6dba60b04b443f814af1b5b14920c499b1557e622_prof);

        
        $__internal_c51e24ce3f6ce4f693ff8df6180617859d7b637cf0733b7b76f9f75aaa107919->leave($__internal_c51e24ce3f6ce4f693ff8df6180617859d7b637cf0733b7b76f9f75aaa107919_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_d59639b4a6362579564b16943796fc88e9ddc0ce2993a6480a19d5da9c25d3c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59639b4a6362579564b16943796fc88e9ddc0ce2993a6480a19d5da9c25d3c0->enter($__internal_d59639b4a6362579564b16943796fc88e9ddc0ce2993a6480a19d5da9c25d3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15888a5bc2554afefa7cb920e63d69ed5812603e62ea8af9f1c153e40535e8d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15888a5bc2554afefa7cb920e63d69ed5812603e62ea8af9f1c153e40535e8d6->enter($__internal_15888a5bc2554afefa7cb920e63d69ed5812603e62ea8af9f1c153e40535e8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
        ";
        
        $__internal_15888a5bc2554afefa7cb920e63d69ed5812603e62ea8af9f1c153e40535e8d6->leave($__internal_15888a5bc2554afefa7cb920e63d69ed5812603e62ea8af9f1c153e40535e8d6_prof);

        
        $__internal_d59639b4a6362579564b16943796fc88e9ddc0ce2993a6480a19d5da9c25d3c0->leave($__internal_d59639b4a6362579564b16943796fc88e9ddc0ce2993a6480a19d5da9c25d3c0_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a03a4f78c3a0c266a73329a00f95bdbe6abd760ff1d523c1fa44555a8e99d46b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a03a4f78c3a0c266a73329a00f95bdbe6abd760ff1d523c1fa44555a8e99d46b->enter($__internal_a03a4f78c3a0c266a73329a00f95bdbe6abd760ff1d523c1fa44555a8e99d46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b8fc027eb3ddf39bc0d61169e5848c669eb86598a3c38242d6d436c970365492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fc027eb3ddf39bc0d61169e5848c669eb86598a3c38242d6d436c970365492->enter($__internal_b8fc027eb3ddf39bc0d61169e5848c669eb86598a3c38242d6d436c970365492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b8fc027eb3ddf39bc0d61169e5848c669eb86598a3c38242d6d436c970365492->leave($__internal_b8fc027eb3ddf39bc0d61169e5848c669eb86598a3c38242d6d436c970365492_prof);

        
        $__internal_a03a4f78c3a0c266a73329a00f95bdbe6abd760ff1d523c1fa44555a8e99d46b->leave($__internal_a03a4f78c3a0c266a73329a00f95bdbe6abd760ff1d523c1fa44555a8e99d46b_prof);

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
        <title>{% block title %}Convivencia{% endblock %}</title>
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
