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
            'spinner' => array($this, 'block_spinner'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d4c887257c452aafa09725af85b157ccfe66b4f7e6a1c7c632497847de9eb43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d4c887257c452aafa09725af85b157ccfe66b4f7e6a1c7c632497847de9eb43->enter($__internal_9d4c887257c452aafa09725af85b157ccfe66b4f7e6a1c7c632497847de9eb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_53cbd534e3ce45ba4377d6c567b3278c3b2bf8200a64724bb27d24653d73c6c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53cbd534e3ce45ba4377d6c567b3278c3b2bf8200a64724bb27d24653d73c6c5->enter($__internal_53cbd534e3ce45ba4377d6c567b3278c3b2bf8200a64724bb27d24653d73c6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 45
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    ";
        // line 48
        $this->displayBlock('spinner', $context, $blocks);
        // line 56
        echo "        ";
        $this->loadTemplate("convivencia/header.html.twig", "base.html.twig", 56)->display($context);
        // line 57
        echo "
        ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "    </body>
</html>
";
        
        $__internal_9d4c887257c452aafa09725af85b157ccfe66b4f7e6a1c7c632497847de9eb43->leave($__internal_9d4c887257c452aafa09725af85b157ccfe66b4f7e6a1c7c632497847de9eb43_prof);

        
        $__internal_53cbd534e3ce45ba4377d6c567b3278c3b2bf8200a64724bb27d24653d73c6c5->leave($__internal_53cbd534e3ce45ba4377d6c567b3278c3b2bf8200a64724bb27d24653d73c6c5_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4366c30a41660febbeb0ac041733dff6ce693054d845b953b07711d081766a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4366c30a41660febbeb0ac041733dff6ce693054d845b953b07711d081766a7a->enter($__internal_4366c30a41660febbeb0ac041733dff6ce693054d845b953b07711d081766a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5df3bc2c84b37aab37b952a327fdc5cc9a850279e13ae301a525c10204300c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df3bc2c84b37aab37b952a327fdc5cc9a850279e13ae301a525c10204300c36->enter($__internal_5df3bc2c84b37aab37b952a327fdc5cc9a850279e13ae301a525c10204300c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5df3bc2c84b37aab37b952a327fdc5cc9a850279e13ae301a525c10204300c36->leave($__internal_5df3bc2c84b37aab37b952a327fdc5cc9a850279e13ae301a525c10204300c36_prof);

        
        $__internal_4366c30a41660febbeb0ac041733dff6ce693054d845b953b07711d081766a7a->leave($__internal_4366c30a41660febbeb0ac041733dff6ce693054d845b953b07711d081766a7a_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_28e9ed181a74c863a4b813a2adeddd2304f21aafee7b7b4c9ca103a8159fa269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28e9ed181a74c863a4b813a2adeddd2304f21aafee7b7b4c9ca103a8159fa269->enter($__internal_28e9ed181a74c863a4b813a2adeddd2304f21aafee7b7b4c9ca103a8159fa269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0354ec853a4f557189a6c17b373d2612efc25f1cfe86e7cdcb402b1800b7f773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0354ec853a4f557189a6c17b373d2612efc25f1cfe86e7cdcb402b1800b7f773->enter($__internal_0354ec853a4f557189a6c17b373d2612efc25f1cfe86e7cdcb402b1800b7f773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            ";
        // line 9
        echo "            <link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/3/w3.css\">
            ";
        // line 12
        echo "            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            ";
        // line 15
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/chosen/chosen.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/datepicker/jquery-ui.min.css"), "html", null, true);
        echo "\">
            ";
        // line 18
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/iCheck/blue.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/tooltip/tooltipster.bundle.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/tooltip/tooltipster-sideTip-light.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.15/css/jquery.dataTables.css\">
            ";
        // line 24
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fileInput/component.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.14.4/daterangepicker.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/estilo.css"), "html", null, true);
        echo "\">

            ";
        // line 29
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 31
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tooltip/tooltipster.bundle.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.js\"></script>
            <script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.15/js/jquery.dataTables.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fileInput/custom-file-input.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 40
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.14.4/jquery.daterangepicker.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepickerrang.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/convivencia.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_0354ec853a4f557189a6c17b373d2612efc25f1cfe86e7cdcb402b1800b7f773->leave($__internal_0354ec853a4f557189a6c17b373d2612efc25f1cfe86e7cdcb402b1800b7f773_prof);

        
        $__internal_28e9ed181a74c863a4b813a2adeddd2304f21aafee7b7b4c9ca103a8159fa269->leave($__internal_28e9ed181a74c863a4b813a2adeddd2304f21aafee7b7b4c9ca103a8159fa269_prof);

    }

    // line 48
    public function block_spinner($context, array $blocks = array())
    {
        $__internal_54d8f7ce7c8cb91dc6f625073aa760130111b0aedf89602ee1d5201ad7a04cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d8f7ce7c8cb91dc6f625073aa760130111b0aedf89602ee1d5201ad7a04cf6->enter($__internal_54d8f7ce7c8cb91dc6f625073aa760130111b0aedf89602ee1d5201ad7a04cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spinner"));

        $__internal_6a42e8240318b8f307e530f582772324347035b0bfc3792480fbfcc9a5638c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a42e8240318b8f307e530f582772324347035b0bfc3792480fbfcc9a5638c07->enter($__internal_6a42e8240318b8f307e530f582772324347035b0bfc3792480fbfcc9a5638c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spinner"));

        // line 49
        echo "        <div class=\"w3-center\">
        <div class=\"loaderIntro\"></div>
        </div>
        <div class=\"containerLoader\">
            <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/white.png"), "html", null, true);
        echo "\" alt=\"\">
        </div>
    ";
        
        $__internal_6a42e8240318b8f307e530f582772324347035b0bfc3792480fbfcc9a5638c07->leave($__internal_6a42e8240318b8f307e530f582772324347035b0bfc3792480fbfcc9a5638c07_prof);

        
        $__internal_54d8f7ce7c8cb91dc6f625073aa760130111b0aedf89602ee1d5201ad7a04cf6->leave($__internal_54d8f7ce7c8cb91dc6f625073aa760130111b0aedf89602ee1d5201ad7a04cf6_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb6cc148512134d54412a641b326a4c5d054e67de29760020d7be7bf87bdb3ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6cc148512134d54412a641b326a4c5d054e67de29760020d7be7bf87bdb3ae->enter($__internal_cb6cc148512134d54412a641b326a4c5d054e67de29760020d7be7bf87bdb3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6ed75fbd69b992fca0763264dffffa5d5633db3d30c4cf0dbee169af55c4bbbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed75fbd69b992fca0763264dffffa5d5633db3d30c4cf0dbee169af55c4bbbf->enter($__internal_6ed75fbd69b992fca0763264dffffa5d5633db3d30c4cf0dbee169af55c4bbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 59
        echo "
        ";
        
        $__internal_6ed75fbd69b992fca0763264dffffa5d5633db3d30c4cf0dbee169af55c4bbbf->leave($__internal_6ed75fbd69b992fca0763264dffffa5d5633db3d30c4cf0dbee169af55c4bbbf_prof);

        
        $__internal_cb6cc148512134d54412a641b326a4c5d054e67de29760020d7be7bf87bdb3ae->leave($__internal_cb6cc148512134d54412a641b326a4c5d054e67de29760020d7be7bf87bdb3ae_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2246c6f21f79f29400ae3c2ba59d0a8974e8d0dcc79f23a4e13f4ccd0d8aa15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2246c6f21f79f29400ae3c2ba59d0a8974e8d0dcc79f23a4e13f4ccd0d8aa15d->enter($__internal_2246c6f21f79f29400ae3c2ba59d0a8974e8d0dcc79f23a4e13f4ccd0d8aa15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6ecc360eaf208a97aeb0bedaccc4fac40ac0b51f774bd7eeb8bcb1b8ee11847f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ecc360eaf208a97aeb0bedaccc4fac40ac0b51f774bd7eeb8bcb1b8ee11847f->enter($__internal_6ecc360eaf208a97aeb0bedaccc4fac40ac0b51f774bd7eeb8bcb1b8ee11847f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6ecc360eaf208a97aeb0bedaccc4fac40ac0b51f774bd7eeb8bcb1b8ee11847f->leave($__internal_6ecc360eaf208a97aeb0bedaccc4fac40ac0b51f774bd7eeb8bcb1b8ee11847f_prof);

        
        $__internal_2246c6f21f79f29400ae3c2ba59d0a8974e8d0dcc79f23a4e13f4ccd0d8aa15d->leave($__internal_2246c6f21f79f29400ae3c2ba59d0a8974e8d0dcc79f23a4e13f4ccd0d8aa15d_prof);

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
        return array (  248 => 61,  237 => 59,  228 => 58,  215 => 53,  209 => 49,  200 => 48,  188 => 43,  184 => 42,  178 => 40,  174 => 38,  167 => 34,  163 => 33,  159 => 32,  154 => 31,  149 => 29,  144 => 26,  138 => 24,  132 => 20,  128 => 19,  123 => 18,  119 => 16,  114 => 15,  110 => 12,  104 => 9,  102 => 8,  93 => 7,  75 => 6,  63 => 62,  60 => 61,  58 => 58,  55 => 57,  52 => 56,  50 => 48,  43 => 45,  41 => 7,  37 => 6,  30 => 1,);
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
            <link rel=\"stylesheet\" href={{ asset('css/normalize.css') }}>
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
            <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.15/css/jquery.dataTables.css\">
            {#<link rel=\"stylesheet\" href=\"{{ asset('css/fileInput/demo.css') }}\">#}
            <link rel=\"stylesheet\" href=\"{{ asset('css/fileInput/component.css') }}\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.14.4/daterangepicker.min.css\">
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
            <script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.15/js/jquery.dataTables.js\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/fileInput/custom-file-input.js') }}\"></script>
            {#<script type=\"text/javascript\" src=\"{{ asset('js/fileInput/jquery.custom-file-input.js') }}\"></script>#}
            <script type=\"text/javascript\" src=\"{{ asset('js/moment.min.js') }}\"></script>
            <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.14.4/jquery.daterangepicker.min.js\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/datepickerrang.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('js/convivencia.js') }}\"></script>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
    {% block spinner %}
        <div class=\"w3-center\">
        <div class=\"loaderIntro\"></div>
        </div>
        <div class=\"containerLoader\">
            <img src=\"{{ asset('img/white.png') }}\" alt=\"\">
        </div>
    {% endblock %}
        {% include 'convivencia/header.html.twig' %}

        {% block body %}

        {% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\app\\Resources\\views\\base.html.twig");
    }
}
