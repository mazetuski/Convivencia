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
        $__internal_b468e1788dd290888e0541b2fa144d1b088ea977c96bc0d4918d1576da9f84ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b468e1788dd290888e0541b2fa144d1b088ea977c96bc0d4918d1576da9f84ec->enter($__internal_b468e1788dd290888e0541b2fa144d1b088ea977c96bc0d4918d1576da9f84ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/header.html.twig"));

        $__internal_b9ca8c716a934505dc0623904c002f99130d8df5b0ad01adb79ff06928cb94db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ca8c716a934505dc0623904c002f99130d8df5b0ad01adb79ff06928cb94db->enter($__internal_b9ca8c716a934505dc0623904c002f99130d8df5b0ad01adb79ff06928cb94db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/header.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_b468e1788dd290888e0541b2fa144d1b088ea977c96bc0d4918d1576da9f84ec->leave($__internal_b468e1788dd290888e0541b2fa144d1b088ea977c96bc0d4918d1576da9f84ec_prof);

        
        $__internal_b9ca8c716a934505dc0623904c002f99130d8df5b0ad01adb79ff06928cb94db->leave($__internal_b9ca8c716a934505dc0623904c002f99130d8df5b0ad01adb79ff06928cb94db_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_1ea55e3eb4ca522e15ed975ee0ccda9082339afa72ed667fb36b0e689d661f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ea55e3eb4ca522e15ed975ee0ccda9082339afa72ed667fb36b0e689d661f7b->enter($__internal_1ea55e3eb4ca522e15ed975ee0ccda9082339afa72ed667fb36b0e689d661f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_84872784018aac2fecee03de0e35d4db4c695c0c533f3bd18b1ed5d7ba41c81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84872784018aac2fecee03de0e35d4db4c695c0c533f3bd18b1ed5d7ba41c81f->enter($__internal_84872784018aac2fecee03de0e35d4db4c695c0c533f3bd18b1ed5d7ba41c81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_84872784018aac2fecee03de0e35d4db4c695c0c533f3bd18b1ed5d7ba41c81f->leave($__internal_84872784018aac2fecee03de0e35d4db4c695c0c533f3bd18b1ed5d7ba41c81f_prof);

        
        $__internal_1ea55e3eb4ca522e15ed975ee0ccda9082339afa72ed667fb36b0e689d661f7b->leave($__internal_1ea55e3eb4ca522e15ed975ee0ccda9082339afa72ed667fb36b0e689d661f7b_prof);

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
