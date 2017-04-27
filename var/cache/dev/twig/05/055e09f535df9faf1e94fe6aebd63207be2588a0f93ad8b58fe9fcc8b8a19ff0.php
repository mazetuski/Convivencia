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
        $__internal_a72a32503847402988b1a74bdcd70694eee6236e383d76daeb48911a6cfccee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72a32503847402988b1a74bdcd70694eee6236e383d76daeb48911a6cfccee0->enter($__internal_a72a32503847402988b1a74bdcd70694eee6236e383d76daeb48911a6cfccee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/header.html.twig"));

        $__internal_7a013f7684fc3e6a4b84813adb18ca158ea42c9a68bb87187972b5c87d567ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a013f7684fc3e6a4b84813adb18ca158ea42c9a68bb87187972b5c87d567ebe->enter($__internal_7a013f7684fc3e6a4b84813adb18ca158ea42c9a68bb87187972b5c87d567ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/header.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_a72a32503847402988b1a74bdcd70694eee6236e383d76daeb48911a6cfccee0->leave($__internal_a72a32503847402988b1a74bdcd70694eee6236e383d76daeb48911a6cfccee0_prof);

        
        $__internal_7a013f7684fc3e6a4b84813adb18ca158ea42c9a68bb87187972b5c87d567ebe->leave($__internal_7a013f7684fc3e6a4b84813adb18ca158ea42c9a68bb87187972b5c87d567ebe_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_f8c2da392aa0e058ab6eafa00afe0793b9118cfd48df3f085cb3a258b78feeee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c2da392aa0e058ab6eafa00afe0793b9118cfd48df3f085cb3a258b78feeee->enter($__internal_f8c2da392aa0e058ab6eafa00afe0793b9118cfd48df3f085cb3a258b78feeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_e5e1c01f7837a449a158000341fbb968b560c633c32028135c4e5747443500c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e1c01f7837a449a158000341fbb968b560c633c32028135c4e5747443500c9->enter($__internal_e5e1c01f7837a449a158000341fbb968b560c633c32028135c4e5747443500c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "usuario", array(), "any", true, true)) {
            // line 3
            echo "        <header class=\"w3-container\" style=\"background-color: #38889B; color: #FFFFFF\">
            <div style=\"text-align: center;\">
                <a href=\"";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\" class=\"w3-padding w3-mobile w3-left w3-large\">Logout</a>
                <a href=\"";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
            echo "\"
                   class=\"w3-padding w3-left w3-mobile w3-large\">";
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
                       class=\"w3-padding w3-left w3-mobile w3-large\">Registro</a>
                    <a href=\"";
                // line 11
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_partes");
                echo "\"
                       class=\"w3-padding w3-left w3-mobile w3-large\">Gestion Partes</a>
                    <a href=\"";
                // line 13
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_sanciones");
                echo "\"
                       class=\"w3-padding w3-left w3-mobile w3-large\">Gestion Sanciones</a>
                    <a href=\"";
                // line 15
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_import");
                echo "\"
                       class=\"w3-padding w3-left w3-mobile w3-large\">Gestión alumnos</a>
                ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 18
                echo "                    <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registrarAlumno");
                echo "\" class=\"w3-padding w3-mobile w3-left w3-large\">Perfil</a>
                ";
            }
            // line 20
            echo "            </div>
        </header>
    ";
        }
        
        $__internal_e5e1c01f7837a449a158000341fbb968b560c633c32028135c4e5747443500c9->leave($__internal_e5e1c01f7837a449a158000341fbb968b560c633c32028135c4e5747443500c9_prof);

        
        $__internal_f8c2da392aa0e058ab6eafa00afe0793b9118cfd48df3f085cb3a258b78feeee->leave($__internal_f8c2da392aa0e058ab6eafa00afe0793b9118cfd48df3f085cb3a258b78feeee_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  93 => 20,  87 => 18,  81 => 15,  76 => 13,  71 => 11,  65 => 9,  63 => 8,  59 => 7,  55 => 6,  51 => 5,  47 => 3,  44 => 2,  26 => 1,);
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
                <a href=\"{{ path('logout') }}\" class=\"w3-padding w3-mobile w3-left w3-large\">Logout</a>
                <a href=\"{{ path('index') }}\"
                   class=\"w3-padding w3-left w3-mobile w3-large\">{{ app.user.usuario }}</a>
                {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"{{ path('convivencia_registro') }}\"
                       class=\"w3-padding w3-left w3-mobile w3-large\">Registro</a>
                    <a href=\"{{ path('gestion_partes') }}\"
                       class=\"w3-padding w3-left w3-mobile w3-large\">Gestion Partes</a>
                    <a href=\"{{ path('gestion_sanciones') }}\"
                       class=\"w3-padding w3-left w3-mobile w3-large\">Gestion Sanciones</a>
                    <a href=\"{{ path('admin_import') }}\"
                       class=\"w3-padding w3-left w3-mobile w3-large\">Gestión alumnos</a>
                {% elseif is_granted('ROLE_USER') %}
                    <a href=\"{{ path('registrarAlumno') }}\" class=\"w3-padding w3-mobile w3-left w3-large\">Perfil</a>
                {% endif %}
            </div>
        </header>
    {% endif %}
{% endblock %}", "convivencia/header.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\app\\Resources\\views\\convivencia\\header.html.twig");
    }
}
