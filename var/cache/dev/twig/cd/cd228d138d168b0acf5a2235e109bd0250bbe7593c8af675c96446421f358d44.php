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
        $__internal_1d99e75f5bdc94d0fb44ddd3b45a96d2e5e58b658ac319dbcfd16d7db788a340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d99e75f5bdc94d0fb44ddd3b45a96d2e5e58b658ac319dbcfd16d7db788a340->enter($__internal_1d99e75f5bdc94d0fb44ddd3b45a96d2e5e58b658ac319dbcfd16d7db788a340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/header.html.twig"));

        $__internal_59ee407733a4341b4ef37e2da5261257298558188be99fb3ed593e604fa90e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ee407733a4341b4ef37e2da5261257298558188be99fb3ed593e604fa90e5a->enter($__internal_59ee407733a4341b4ef37e2da5261257298558188be99fb3ed593e604fa90e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/header.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_1d99e75f5bdc94d0fb44ddd3b45a96d2e5e58b658ac319dbcfd16d7db788a340->leave($__internal_1d99e75f5bdc94d0fb44ddd3b45a96d2e5e58b658ac319dbcfd16d7db788a340_prof);

        
        $__internal_59ee407733a4341b4ef37e2da5261257298558188be99fb3ed593e604fa90e5a->leave($__internal_59ee407733a4341b4ef37e2da5261257298558188be99fb3ed593e604fa90e5a_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_c44bab4db738f1bf488880bb2db2d08dd374bfec2689f05e0fce368a34c137f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44bab4db738f1bf488880bb2db2d08dd374bfec2689f05e0fce368a34c137f2->enter($__internal_c44bab4db738f1bf488880bb2db2d08dd374bfec2689f05e0fce368a34c137f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_66f09ca9150eb5ad18a252efb0fac895430e8080616e7204b79b500de8115528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f09ca9150eb5ad18a252efb0fac895430e8080616e7204b79b500de8115528->enter($__internal_66f09ca9150eb5ad18a252efb0fac895430e8080616e7204b79b500de8115528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "usuario", array(), "any", true, true)) {
            // line 3
            echo "        <header class=\"w3-container w3-padding\" style=\"background-color: #38889B; color: #FFFFFF\">
            <div style=\"text-align: center;\">
                <a href=\"";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"w3-padding w3-right w3-hover-grey w3-large\">Logout</a>
                <a href=\"";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
            echo "\" class=\"w3-padding w3-right w3-hover-grey w3-large\">ShikOba</a>
                <i id=\"hamburguer\" class=\"fa fa-bars fa-2x w3-padding w3-left w3-text-white\"
                   style=\"vertical-align: middle\" aria-hidden=\"true\"></i>
                <nav>
                    ";
            // line 10
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 11
                echo "                        <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carnets");
                echo "\"
                           class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\">Carnets</a>
                        <a href=\"";
                // line 13
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_partes");
                echo "\"
                           class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\">Partes</a>
                        <a href=\"";
                // line 15
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_sanciones");
                echo "\"
                           class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\">Medidas</a>
                        <a href=\"";
                // line 17
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_diario");
                echo "\"
                           class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\">Diario</a>
                        <div class=\"w3-dropdown-hover w3-padding w3-left w3-mobile w3-large\">
                            <span>Administración</span> <i class=\"fa fa-caret-down w3-text-white\"></i>
                            <div class=\"w3-dropdown-content w3-bar-block w3-card-1 azulTemaButton\">
                                <a href=\"";
                // line 22
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import");
                echo "\"
                                   class=\" w3-margin-top w3-padding w3-bar-item w3-button w3-hover-grey w3-text-white w3-mobile w3-large\">Alumnos</a>
                                <a href=\"#\"
                                   class=\"w3-padding w3-bar-item w3-button w3-hover-grey w3-text-white w3-mobile w3-large\">Profesores</a>
                                <a href=\"#\"
                                   class=\"w3-padding w3-bar-item w3-button w3-hover-grey w3-text-white w3-mobile w3-large\">Conductas</a>
                            </div>
                        </div>
                    ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 31
                echo "                        <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registrarAlumno");
                echo "\"
                           class=\"w3-padding w3-mobile w3-left w3-hover-grey w3-large\">Perfil</a>
                    ";
            }
            // line 34
            echo "                </nav>
            </div>
        </header>
    ";
        }
        
        $__internal_66f09ca9150eb5ad18a252efb0fac895430e8080616e7204b79b500de8115528->leave($__internal_66f09ca9150eb5ad18a252efb0fac895430e8080616e7204b79b500de8115528_prof);

        
        $__internal_c44bab4db738f1bf488880bb2db2d08dd374bfec2689f05e0fce368a34c137f2->leave($__internal_c44bab4db738f1bf488880bb2db2d08dd374bfec2689f05e0fce368a34c137f2_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  100 => 31,  88 => 22,  80 => 17,  75 => 15,  70 => 13,  64 => 11,  62 => 10,  55 => 6,  51 => 5,  47 => 3,  44 => 2,  26 => 1,);
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
                <a href=\"{{ path('logout') }}\" class=\"w3-padding w3-right w3-hover-grey w3-large\">Logout</a>
                <a href=\"{{ path('index') }}\" class=\"w3-padding w3-right w3-hover-grey w3-large\">ShikOba</a>
                <i id=\"hamburguer\" class=\"fa fa-bars fa-2x w3-padding w3-left w3-text-white\"
                   style=\"vertical-align: middle\" aria-hidden=\"true\"></i>
                <nav>
                    {% if is_granted('ROLE_ADMIN') %}
                        <a href=\"{{ path('show_carnets') }}\"
                           class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\">Carnets</a>
                        <a href=\"{{ path('gestion_partes') }}\"
                           class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\">Partes</a>
                        <a href=\"{{ path('gestion_sanciones') }}\"
                           class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\">Medidas</a>
                        <a href=\"{{ path('show_diario') }}\"
                           class=\"w3-padding w3-left w3-hover-grey w3-mobile w3-large\">Diario</a>
                        <div class=\"w3-dropdown-hover w3-padding w3-left w3-mobile w3-large\">
                            <span>Administración</span> <i class=\"fa fa-caret-down w3-text-white\"></i>
                            <div class=\"w3-dropdown-content w3-bar-block w3-card-1 azulTemaButton\">
                                <a href=\"{{ path('admin_import') }}\"
                                   class=\" w3-margin-top w3-padding w3-bar-item w3-button w3-hover-grey w3-text-white w3-mobile w3-large\">Alumnos</a>
                                <a href=\"#\"
                                   class=\"w3-padding w3-bar-item w3-button w3-hover-grey w3-text-white w3-mobile w3-large\">Profesores</a>
                                <a href=\"#\"
                                   class=\"w3-padding w3-bar-item w3-button w3-hover-grey w3-text-white w3-mobile w3-large\">Conductas</a>
                            </div>
                        </div>
                    {% elseif is_granted('ROLE_USER') %}
                        <a href=\"{{ path('registrarAlumno') }}\"
                           class=\"w3-padding w3-mobile w3-left w3-hover-grey w3-large\">Perfil</a>
                    {% endif %}
                </nav>
            </div>
        </header>
    {% endif %}
{% endblock %}", "convivencia/header.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\app\\Resources\\views\\convivencia\\header.html.twig");
    }
}
