<?php

/* base.html.twig */
class __TwigTemplate_0f3bc01e0d7c32ed692504668f24719394a91930d783a354961804b6c2413478 extends Twig_Template
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
        $__internal_3df821b1f94d17bbe64a7f87345299cf0ace426e7ddd70d5823233a2ba93d28b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df821b1f94d17bbe64a7f87345299cf0ace426e7ddd70d5823233a2ba93d28b->enter($__internal_3df821b1f94d17bbe64a7f87345299cf0ace426e7ddd70d5823233a2ba93d28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f1c6ba18fcbf521e1118a32a2308639b4a789af001a7b47f5592f1a26fc68d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c6ba18fcbf521e1118a32a2308639b4a789af001a7b47f5592f1a26fc68d7e->enter($__internal_f1c6ba18fcbf521e1118a32a2308639b4a789af001a7b47f5592f1a26fc68d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 34
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 37
        $this->loadTemplate("convivencia/header.html.twig", "base.html.twig", 37)->display($context);
        // line 38
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "    </body>
</html>
";
        
        $__internal_3df821b1f94d17bbe64a7f87345299cf0ace426e7ddd70d5823233a2ba93d28b->leave($__internal_3df821b1f94d17bbe64a7f87345299cf0ace426e7ddd70d5823233a2ba93d28b_prof);

        
        $__internal_f1c6ba18fcbf521e1118a32a2308639b4a789af001a7b47f5592f1a26fc68d7e->leave($__internal_f1c6ba18fcbf521e1118a32a2308639b4a789af001a7b47f5592f1a26fc68d7e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_af439bdc192d56ad10c2792cacfb211a735b08d0c02c5a7cae946f844733e117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af439bdc192d56ad10c2792cacfb211a735b08d0c02c5a7cae946f844733e117->enter($__internal_af439bdc192d56ad10c2792cacfb211a735b08d0c02c5a7cae946f844733e117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_18b2eaaa9e8b146ed31c90ecae0eb8f4693035e0b019c64098fce1a409238d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b2eaaa9e8b146ed31c90ecae0eb8f4693035e0b019c64098fce1a409238d7f->enter($__internal_18b2eaaa9e8b146ed31c90ecae0eb8f4693035e0b019c64098fce1a409238d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_18b2eaaa9e8b146ed31c90ecae0eb8f4693035e0b019c64098fce1a409238d7f->leave($__internal_18b2eaaa9e8b146ed31c90ecae0eb8f4693035e0b019c64098fce1a409238d7f_prof);

        
        $__internal_af439bdc192d56ad10c2792cacfb211a735b08d0c02c5a7cae946f844733e117->leave($__internal_af439bdc192d56ad10c2792cacfb211a735b08d0c02c5a7cae946f844733e117_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac8588e7d050d3b0cdca88fb24679c59e89589ad8f614010687e9f7df3ed1079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8588e7d050d3b0cdca88fb24679c59e89589ad8f614010687e9f7df3ed1079->enter($__internal_ac8588e7d050d3b0cdca88fb24679c59e89589ad8f614010687e9f7df3ed1079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bab47f49e249cdcf64f57c43f9a1a8b8c80dc481a8780b049cca5e7cf7dfa8fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab47f49e249cdcf64f57c43f9a1a8b8c80dc481a8780b049cca5e7cf7dfa8fa->enter($__internal_bab47f49e249cdcf64f57c43f9a1a8b8c80dc481a8780b049cca5e7cf7dfa8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            ";
        // line 9
        echo "            <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/3/w3.css\">
            ";
        // line 11
        echo "            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            ";
        // line 14
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/chosen/chosen.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datepicker/jquery-ui.min.css"), "html", null, true);
        echo "\">
            ";
        // line 17
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/iCheck/blue.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/tooltip/tooltipster.bundle.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/tooltip/tooltipster-sideTip-light.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/estilo.css"), "html", null, true);
        echo "\">

            ";
        // line 24
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 26
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tooltip/tooltipster.bundle.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/convivencia.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_bab47f49e249cdcf64f57c43f9a1a8b8c80dc481a8780b049cca5e7cf7dfa8fa->leave($__internal_bab47f49e249cdcf64f57c43f9a1a8b8c80dc481a8780b049cca5e7cf7dfa8fa_prof);

        
        $__internal_ac8588e7d050d3b0cdca88fb24679c59e89589ad8f614010687e9f7df3ed1079->leave($__internal_ac8588e7d050d3b0cdca88fb24679c59e89589ad8f614010687e9f7df3ed1079_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3ed5dfc657b29177dfe7f1cdd2509ddf27cba88daf64e314b8960e420e1fa8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ed5dfc657b29177dfe7f1cdd2509ddf27cba88daf64e314b8960e420e1fa8f->enter($__internal_b3ed5dfc657b29177dfe7f1cdd2509ddf27cba88daf64e314b8960e420e1fa8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c16aa25bc6c6481b2a25739635f17c103982f07aecc32b6c1674f665376865b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c16aa25bc6c6481b2a25739635f17c103982f07aecc32b6c1674f665376865b->enter($__internal_7c16aa25bc6c6481b2a25739635f17c103982f07aecc32b6c1674f665376865b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "
        ";
        
        $__internal_7c16aa25bc6c6481b2a25739635f17c103982f07aecc32b6c1674f665376865b->leave($__internal_7c16aa25bc6c6481b2a25739635f17c103982f07aecc32b6c1674f665376865b_prof);

        
        $__internal_b3ed5dfc657b29177dfe7f1cdd2509ddf27cba88daf64e314b8960e420e1fa8f->leave($__internal_b3ed5dfc657b29177dfe7f1cdd2509ddf27cba88daf64e314b8960e420e1fa8f_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_91c006ce39583b08c68b9873a3bf3fbffd9af1f3c1a43a619dcc80443a50344e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91c006ce39583b08c68b9873a3bf3fbffd9af1f3c1a43a619dcc80443a50344e->enter($__internal_91c006ce39583b08c68b9873a3bf3fbffd9af1f3c1a43a619dcc80443a50344e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bc7ceafba05069839e197540b55d345129d94361c19098d95c478735d3b6a736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7ceafba05069839e197540b55d345129d94361c19098d95c478735d3b6a736->enter($__internal_bc7ceafba05069839e197540b55d345129d94361c19098d95c478735d3b6a736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bc7ceafba05069839e197540b55d345129d94361c19098d95c478735d3b6a736->leave($__internal_bc7ceafba05069839e197540b55d345129d94361c19098d95c478735d3b6a736_prof);

        
        $__internal_91c006ce39583b08c68b9873a3bf3fbffd9af1f3c1a43a619dcc80443a50344e->leave($__internal_91c006ce39583b08c68b9873a3bf3fbffd9af1f3c1a43a619dcc80443a50344e_prof);

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
        return array (  189 => 41,  178 => 39,  169 => 38,  157 => 32,  151 => 29,  147 => 28,  143 => 27,  138 => 26,  133 => 24,  128 => 21,  123 => 19,  119 => 18,  114 => 17,  110 => 15,  105 => 14,  101 => 11,  98 => 9,  96 => 8,  87 => 7,  69 => 6,  57 => 42,  54 => 41,  51 => 38,  49 => 37,  42 => 34,  40 => 7,  36 => 6,  29 => 1,);
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
            {# CSS #}
            <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/3/w3.css\">
            {# Font awesome #}
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            {# Chosen css #}
            <link rel=\"stylesheet\" href=\"{{ asset('css/chosen/chosen.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/datepicker/jquery-ui.min.css') }}\">
            {#<link rel=\"stylesheet\" href=\"{{ asset('css/iCheck/custom.css') }}\">#}
            <link rel=\"stylesheet\" href=\"{{ asset('css/iCheck/blue.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/tooltip/tooltipster.bundle.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/tooltip/tooltipster-sideTip-light.min.css') }}\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.css\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/estilo.css') }}\">

            {# JAVASCRIPT #}
            <script type=\"text/javascript\" src=\"{{ asset('js/jquery.min.js') }}\"></script>
            {# Chosen js #}
            <script type=\"text/javascript\" src=\"{{ asset('js/chosen/chosen.jquery.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/datepicker/jquery-ui.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/iCheck/icheck.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/tooltip/tooltipster.bundle.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.js\"></script>
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
