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
        $__internal_6c8115ed0f53e80d2311507d7debf24492113d9947cef7534b44c057c2ac4d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c8115ed0f53e80d2311507d7debf24492113d9947cef7534b44c057c2ac4d2c->enter($__internal_6c8115ed0f53e80d2311507d7debf24492113d9947cef7534b44c057c2ac4d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/header.html.twig"));

        $__internal_1ef33f83ee3228cce48cb6eb2991a1e0160567910b068a18fcb3d5c77219504d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef33f83ee3228cce48cb6eb2991a1e0160567910b068a18fcb3d5c77219504d->enter($__internal_1ef33f83ee3228cce48cb6eb2991a1e0160567910b068a18fcb3d5c77219504d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/header.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_6c8115ed0f53e80d2311507d7debf24492113d9947cef7534b44c057c2ac4d2c->leave($__internal_6c8115ed0f53e80d2311507d7debf24492113d9947cef7534b44c057c2ac4d2c_prof);

        
        $__internal_1ef33f83ee3228cce48cb6eb2991a1e0160567910b068a18fcb3d5c77219504d->leave($__internal_1ef33f83ee3228cce48cb6eb2991a1e0160567910b068a18fcb3d5c77219504d_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_604cfd676fc888badf44a75e3ffc1a885dabc55ed73db00efd7449a23b1358a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604cfd676fc888badf44a75e3ffc1a885dabc55ed73db00efd7449a23b1358a4->enter($__internal_604cfd676fc888badf44a75e3ffc1a885dabc55ed73db00efd7449a23b1358a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_ae366b2c021e7c968cef8faf7f2c77d913b08c4a34fa7ac95c32294d637b2f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae366b2c021e7c968cef8faf7f2c77d913b08c4a34fa7ac95c32294d637b2f18->enter($__internal_ae366b2c021e7c968cef8faf7f2c77d913b08c4a34fa7ac95c32294d637b2f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "usuario", array(), "any", true, true)) {
            // line 3
            echo "        <header class=\"w3-container\" style=\"background-color: #38889B; color: #FFFFFF\">
            <div style=\"text-align: center;\">
                <a href=\"";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"w3-padding w3-mobile w3-xlarge\">Logout</a>
                <a href=\"";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
            echo "\"
                   class=\"w3-padding w3-mobile w3-xlarge\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "usuario", array()), "html", null, true);
            echo "</a>
                ";
            // line 8
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 9
                echo "                    <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("convivencia_registro");
                echo "\"
                       class=\"w3-padding w3-mobile w3-xlarge\">Registro</a>
                    <a href=\"";
                // line 11
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_partes");
                echo "\"
                       class=\"w3-padding w3-mobile w3-xlarge\">Gestion Partes</a>
                    <a href=\"";
                // line 13
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_sanciones");
                echo "\"
                       class=\"w3-padding w3-mobile w3-xlarge\">Gestion Sanciones</a>
                ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 16
                echo "                    <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registrarAlumno");
                echo "\" class=\"w3-padding w3-mobile w3-left w3-xlarge\">Perfil</a>
                ";
            }
            // line 18
            echo "            </div>
        </header>
    ";
        }
        
        $__internal_ae366b2c021e7c968cef8faf7f2c77d913b08c4a34fa7ac95c32294d637b2f18->leave($__internal_ae366b2c021e7c968cef8faf7f2c77d913b08c4a34fa7ac95c32294d637b2f18_prof);

        
        $__internal_604cfd676fc888badf44a75e3ffc1a885dabc55ed73db00efd7449a23b1358a4->leave($__internal_604cfd676fc888badf44a75e3ffc1a885dabc55ed73db00efd7449a23b1358a4_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  82 => 16,  76 => 13,  71 => 11,  65 => 9,  63 => 8,  59 => 7,  55 => 6,  51 => 5,  47 => 3,  44 => 2,  26 => 1,);
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
        <header class=\"w3-container\" style=\"background-color: #38889B; color: #FFFFFF\">
            <div style=\"text-align: center;\">
                <a href=\"{{ path('logout') }}\" class=\"w3-padding w3-mobile w3-xlarge\">Logout</a>
                <a href=\"{{ path('index') }}\"
                   class=\"w3-padding w3-mobile w3-xlarge\">{{ app.user.usuario }}</a>
                {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{ path('convivencia_registro') }}\"
                       class=\"w3-padding w3-mobile w3-xlarge\">Registro</a>
                    <a href=\"{{ path('gestion_partes') }}\"
                       class=\"w3-padding w3-mobile w3-xlarge\">Gestion Partes</a>
                    <a href=\"{{ path('gestion_sanciones') }}\"
                       class=\"w3-padding w3-mobile w3-xlarge\">Gestion Sanciones</a>
                {% elseif is_granted('ROLE_USER') %}
                    <a href=\"{{ path('registrarAlumno') }}\" class=\"w3-padding w3-mobile w3-left w3-xlarge\">Perfil</a>
                {% endif %}
            </div>
        </header>
    {% endif %}
{% endblock %}", "convivencia/header.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\app\\Resources\\views\\convivencia\\header.html.twig");
    }
}
