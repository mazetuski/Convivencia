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
        $__internal_0c04bf2502efdf31b1b93f8f9a6c64561ba583ac4cfc4288ab2c731a6260e8c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c04bf2502efdf31b1b93f8f9a6c64561ba583ac4cfc4288ab2c731a6260e8c9->enter($__internal_0c04bf2502efdf31b1b93f8f9a6c64561ba583ac4cfc4288ab2c731a6260e8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b6f4e6aafc6a8f7f9409e1d95190065ab877369553eafa5a64be4049e1d9cdd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6f4e6aafc6a8f7f9409e1d95190065ab877369553eafa5a64be4049e1d9cdd7->enter($__internal_b6f4e6aafc6a8f7f9409e1d95190065ab877369553eafa5a64be4049e1d9cdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0c04bf2502efdf31b1b93f8f9a6c64561ba583ac4cfc4288ab2c731a6260e8c9->leave($__internal_0c04bf2502efdf31b1b93f8f9a6c64561ba583ac4cfc4288ab2c731a6260e8c9_prof);

        
        $__internal_b6f4e6aafc6a8f7f9409e1d95190065ab877369553eafa5a64be4049e1d9cdd7->leave($__internal_b6f4e6aafc6a8f7f9409e1d95190065ab877369553eafa5a64be4049e1d9cdd7_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f0257bb02917b8601599e89cb96c336d0770e56a2f8e660691c81b979c93c58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f0257bb02917b8601599e89cb96c336d0770e56a2f8e660691c81b979c93c58->enter($__internal_9f0257bb02917b8601599e89cb96c336d0770e56a2f8e660691c81b979c93c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e054a298c15874622a78d191d027321a162e89cc7e69f3de17d721b34a024b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e054a298c15874622a78d191d027321a162e89cc7e69f3de17d721b34a024b04->enter($__internal_e054a298c15874622a78d191d027321a162e89cc7e69f3de17d721b34a024b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Convivencia";
        
        $__internal_e054a298c15874622a78d191d027321a162e89cc7e69f3de17d721b34a024b04->leave($__internal_e054a298c15874622a78d191d027321a162e89cc7e69f3de17d721b34a024b04_prof);

        
        $__internal_9f0257bb02917b8601599e89cb96c336d0770e56a2f8e660691c81b979c93c58->leave($__internal_9f0257bb02917b8601599e89cb96c336d0770e56a2f8e660691c81b979c93c58_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c1ccf80b3c18c8701772c76e4d2c74f1284931b8b555440719e6d70c633ac9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c1ccf80b3c18c8701772c76e4d2c74f1284931b8b555440719e6d70c633ac9e->enter($__internal_4c1ccf80b3c18c8701772c76e4d2c74f1284931b8b555440719e6d70c633ac9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_277ebbcfc75c74c0e0bdedcf7f55fcd4b511e1111858494ab2aa94e86fb927a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_277ebbcfc75c74c0e0bdedcf7f55fcd4b511e1111858494ab2aa94e86fb927a6->enter($__internal_277ebbcfc75c74c0e0bdedcf7f55fcd4b511e1111858494ab2aa94e86fb927a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_277ebbcfc75c74c0e0bdedcf7f55fcd4b511e1111858494ab2aa94e86fb927a6->leave($__internal_277ebbcfc75c74c0e0bdedcf7f55fcd4b511e1111858494ab2aa94e86fb927a6_prof);

        
        $__internal_4c1ccf80b3c18c8701772c76e4d2c74f1284931b8b555440719e6d70c633ac9e->leave($__internal_4c1ccf80b3c18c8701772c76e4d2c74f1284931b8b555440719e6d70c633ac9e_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_510bfa4033f9207b6a51c863dd7216e00cdcdd49c41f6ae299f8deea49806017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_510bfa4033f9207b6a51c863dd7216e00cdcdd49c41f6ae299f8deea49806017->enter($__internal_510bfa4033f9207b6a51c863dd7216e00cdcdd49c41f6ae299f8deea49806017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_834c55941cb6fda6ed8ce4be69ab828663e93c814a77361978e36ba59ebb692c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834c55941cb6fda6ed8ce4be69ab828663e93c814a77361978e36ba59ebb692c->enter($__internal_834c55941cb6fda6ed8ce4be69ab828663e93c814a77361978e36ba59ebb692c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "
        ";
        
        $__internal_834c55941cb6fda6ed8ce4be69ab828663e93c814a77361978e36ba59ebb692c->leave($__internal_834c55941cb6fda6ed8ce4be69ab828663e93c814a77361978e36ba59ebb692c_prof);

        
        $__internal_510bfa4033f9207b6a51c863dd7216e00cdcdd49c41f6ae299f8deea49806017->leave($__internal_510bfa4033f9207b6a51c863dd7216e00cdcdd49c41f6ae299f8deea49806017_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_78686ab469a3d7344153903c54476393de0e63a437a8085d2f243caae4388bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78686ab469a3d7344153903c54476393de0e63a437a8085d2f243caae4388bfb->enter($__internal_78686ab469a3d7344153903c54476393de0e63a437a8085d2f243caae4388bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ba5dd47be15ff212bcf4932739bd9b0cd521829717a9e5dc5c32db0ea0f52973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5dd47be15ff212bcf4932739bd9b0cd521829717a9e5dc5c32db0ea0f52973->enter($__internal_ba5dd47be15ff212bcf4932739bd9b0cd521829717a9e5dc5c32db0ea0f52973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ba5dd47be15ff212bcf4932739bd9b0cd521829717a9e5dc5c32db0ea0f52973->leave($__internal_ba5dd47be15ff212bcf4932739bd9b0cd521829717a9e5dc5c32db0ea0f52973_prof);

        
        $__internal_78686ab469a3d7344153903c54476393de0e63a437a8085d2f243caae4388bfb->leave($__internal_78686ab469a3d7344153903c54476393de0e63a437a8085d2f243caae4388bfb_prof);

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
