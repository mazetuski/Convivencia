<?php

/* convivencia/header.html.twig */
class __TwigTemplate_5e0cda23804493fab7790fa043712d45f683ee250062684c3f8231e0251f1da2 extends Twig_Template
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
        $__internal_8fdebf8443dff2090c3d8e45833c25462ad725fa69df2064653d2cbd90c3d0b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fdebf8443dff2090c3d8e45833c25462ad725fa69df2064653d2cbd90c3d0b9->enter($__internal_8fdebf8443dff2090c3d8e45833c25462ad725fa69df2064653d2cbd90c3d0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/header.html.twig"));

        $__internal_5829bbc0e1a7252239d06cc70e901c4f12ec3e6b1196dd2ce78e5bad83ff9663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5829bbc0e1a7252239d06cc70e901c4f12ec3e6b1196dd2ce78e5bad83ff9663->enter($__internal_5829bbc0e1a7252239d06cc70e901c4f12ec3e6b1196dd2ce78e5bad83ff9663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/header.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_8fdebf8443dff2090c3d8e45833c25462ad725fa69df2064653d2cbd90c3d0b9->leave($__internal_8fdebf8443dff2090c3d8e45833c25462ad725fa69df2064653d2cbd90c3d0b9_prof);

        
        $__internal_5829bbc0e1a7252239d06cc70e901c4f12ec3e6b1196dd2ce78e5bad83ff9663->leave($__internal_5829bbc0e1a7252239d06cc70e901c4f12ec3e6b1196dd2ce78e5bad83ff9663_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_a4668aff1e0a9cc93fa7813318720a20a730b622badc2d26952dac8cb532c97f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4668aff1e0a9cc93fa7813318720a20a730b622badc2d26952dac8cb532c97f->enter($__internal_a4668aff1e0a9cc93fa7813318720a20a730b622badc2d26952dac8cb532c97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_d918a40989de977b51205bf24dfe74335e58035015397176b825aa91a5e3d24d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d918a40989de977b51205bf24dfe74335e58035015397176b825aa91a5e3d24d->enter($__internal_d918a40989de977b51205bf24dfe74335e58035015397176b825aa91a5e3d24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "usuario", array(), "any", true, true)) {
            // line 3
            echo "        <header class=\"w3-container w3-padding\" style=\"background-color: #38889B; color: #FFFFFF\">
            <div style=\"text-align: center;\">
                <i id=\"hamburguer\" class=\"fa fa-bars fa-2x w3-padding w3-left w3-text-white\"
                   style=\"vertical-align: middle\" aria-hidden=\"true\"></i>
                <div id=\"navLeft\">
                    <a href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"
                       class=\"w3-padding w3-right w3-hover-grey w3-large w3-mobile\">Logout</a>
                    <a href=\"";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("change_password");
            echo "\"
                       class=\"w3-padding w3-right w3-hover-grey w3-large w3-mobile\">Cambiar
                        Contraseña</a>
                    <a href=\"";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
            echo "\"
                       class=\"w3-padding w3-right w3-hover-grey w3-large w3-mobile\">ShikOba</a>
                </div>
                <nav>
                    ";
            // line 17
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PROFESOR"))) {
                // line 18
                echo "                        <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carnets");
                echo "\"
                           class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\">Carnets</a>
                        <a href=\"";
                // line 20
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_partes");
                echo "\"
                           class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\">Partes</a>
                        <a href=\"";
                // line 22
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_sanciones");
                echo "\"
                           class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\">Medidas</a>
                        <a href=\"";
                // line 24
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_diario");
                echo "\"
                           class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\">Diario</a>
                        ";
                // line 26
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 27
                    echo "                            <div class=\"w3-dropdown-hover w3-padding w3-left w3-mobile w3-large\">
                                <span>Administración</span> <i class=\"fa fa-caret-down w3-text-white\"></i>
                                <div class=\"w3-dropdown-content w3-bar-block w3-card-1 azulTemaButton\">
                                    <a href=\"";
                    // line 30
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import");
                    echo "\"
                                       class=\" w3-margin-top w3-padding w3-bar-item w3-button w3-hover-grey w3-text-white w3-mobile w3-large\">Alumnos</a>
                                    <a href=\"";
                    // line 32
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import_profesor");
                    echo "\"
                                       class=\"w3-padding w3-bar-item w3-button w3-hover-grey w3-text-white w3-mobile w3-large\">Profesores</a>
                                </div>
                            </div>
                        ";
                }
                // line 37
                echo "
                    ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TUTOR")) {
                // line 39
                echo "                        <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
                echo "\"
                           class=\"w3-padding w3-mobile w3-left w3-hover-grey w3-large\">Alumnos</a>
                        ";
                // line 42
                echo "                        ";
                // line 43
                echo "                        ";
                // line 44
                echo "                    ";
            }
            // line 45
            echo "                </nav>
            </div>
        </header>
    ";
        }
        
        $__internal_d918a40989de977b51205bf24dfe74335e58035015397176b825aa91a5e3d24d->leave($__internal_d918a40989de977b51205bf24dfe74335e58035015397176b825aa91a5e3d24d_prof);

        
        $__internal_a4668aff1e0a9cc93fa7813318720a20a730b622badc2d26952dac8cb532c97f->leave($__internal_a4668aff1e0a9cc93fa7813318720a20a730b622badc2d26952dac8cb532c97f_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  132 => 45,  129 => 44,  127 => 43,  125 => 42,  119 => 39,  115 => 37,  107 => 32,  102 => 30,  97 => 27,  95 => 26,  90 => 24,  85 => 22,  80 => 20,  74 => 18,  72 => 17,  65 => 13,  59 => 10,  54 => 8,  47 => 3,  44 => 2,  26 => 1,);
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
        <header class=\"w3-container w3-padding\" style=\"background-color: #38889B; color: #FFFFFF\">
            <div style=\"text-align: center;\">
                <i id=\"hamburguer\" class=\"fa fa-bars fa-2x w3-padding w3-left w3-text-white\"
                   style=\"vertical-align: middle\" aria-hidden=\"true\"></i>
                <div id=\"navLeft\">
                    <a href=\"{{ path('logout') }}\"
                       class=\"w3-padding w3-right w3-hover-grey w3-large w3-mobile\">Logout</a>
                    <a href=\"{{ path('change_password') }}\"
                       class=\"w3-padding w3-right w3-hover-grey w3-large w3-mobile\">Cambiar
                        Contraseña</a>
                    <a href=\"{{ path('index') }}\"
                       class=\"w3-padding w3-right w3-hover-grey w3-large w3-mobile\">ShikOba</a>
                </div>
                <nav>
                    {% if (is_granted('ROLE_ADMIN') or is_granted('ROLE_PROFESOR')) %}
                        <a href=\"{{ path('show_carnets') }}\"
                           class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\">Carnets</a>
                        <a href=\"{{ path('gestion_partes') }}\"
                           class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\">Partes</a>
                        <a href=\"{{ path('gestion_sanciones') }}\"
                           class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\">Medidas</a>
                        <a href=\"{{ path('show_diario') }}\"
                           class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\">Diario</a>
                        {% if is_granted('ROLE_ADMIN') %}
                            <div class=\"w3-dropdown-hover w3-padding w3-left w3-mobile w3-large\">
                                <span>Administración</span> <i class=\"fa fa-caret-down w3-text-white\"></i>
                                <div class=\"w3-dropdown-content w3-bar-block w3-card-1 azulTemaButton\">
                                    <a href=\"{{ path('admin_import') }}\"
                                       class=\" w3-margin-top w3-padding w3-bar-item w3-button w3-hover-grey w3-text-white w3-mobile w3-large\">Alumnos</a>
                                    <a href=\"{{ path('admin_import_profesor') }}\"
                                       class=\"w3-padding w3-bar-item w3-button w3-hover-grey w3-text-white w3-mobile w3-large\">Profesores</a>
                                </div>
                            </div>
                        {% endif %}

                    {% elseif is_granted('ROLE_TUTOR') %}
                        <a href=\"{{ path('index') }}\"
                           class=\"w3-padding w3-mobile w3-left w3-hover-grey w3-large\">Alumnos</a>
                        {#{% elseif is_granted('ROLE_USER') %}#}
                        {#<a href=\"{{ path('registrarAlumno') }}\"#}
                        {#class=\"w3-padding w3-mobile w3-left w3-hover-grey w3-large\">Perfil</a>#}
                    {% endif %}
                </nav>
            </div>
        </header>
    {% endif %}
{% endblock %}", "convivencia/header.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\app\\Resources\\views\\convivencia\\header.html.twig");
    }
}
