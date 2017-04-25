<?php

/* convivencia/partes/partes.html.twig */
class __TwigTemplate_2b67a9e6509f010bf0c4280141ac2532ff7593d908640778c2842c8cee266c0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/partes/partes.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f97b30b571144671b56a6385912bf8567807279b5eda0ac3fc5f8c74449ca1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f97b30b571144671b56a6385912bf8567807279b5eda0ac3fc5f8c74449ca1f->enter($__internal_9f97b30b571144671b56a6385912bf8567807279b5eda0ac3fc5f8c74449ca1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partes.html.twig"));

        $__internal_9a3fd246bc4de8d1c87fa31c84d66b2c7070301bc251d6bdee2175710c118162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3fd246bc4de8d1c87fa31c84d66b2c7070301bc251d6bdee2175710c118162->enter($__internal_9a3fd246bc4de8d1c87fa31c84d66b2c7070301bc251d6bdee2175710c118162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f97b30b571144671b56a6385912bf8567807279b5eda0ac3fc5f8c74449ca1f->leave($__internal_9f97b30b571144671b56a6385912bf8567807279b5eda0ac3fc5f8c74449ca1f_prof);

        
        $__internal_9a3fd246bc4de8d1c87fa31c84d66b2c7070301bc251d6bdee2175710c118162->leave($__internal_9a3fd246bc4de8d1c87fa31c84d66b2c7070301bc251d6bdee2175710c118162_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e2a760c472ae45e4d5004abc461d3d392f6420e645a543fb40ede632656568b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e2a760c472ae45e4d5004abc461d3d392f6420e645a543fb40ede632656568b->enter($__internal_5e2a760c472ae45e4d5004abc461d3d392f6420e645a543fb40ede632656568b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e957cc50de4d650b36da98bd31be7f8331c66b08e1ee0e5c72e8551cdd8a4182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e957cc50de4d650b36da98bd31be7f8331c66b08e1ee0e5c72e8551cdd8a4182->enter($__internal_e957cc50de4d650b36da98bd31be7f8331c66b08e1ee0e5c72e8551cdd8a4182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_e957cc50de4d650b36da98bd31be7f8331c66b08e1ee0e5c72e8551cdd8a4182->leave($__internal_e957cc50de4d650b36da98bd31be7f8331c66b08e1ee0e5c72e8551cdd8a4182_prof);

        
        $__internal_5e2a760c472ae45e4d5004abc461d3d392f6420e645a543fb40ede632656568b->leave($__internal_5e2a760c472ae45e4d5004abc461d3d392f6420e645a543fb40ede632656568b_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_592427f78b8580784a023f3440400440d5b169cc49703e86a667d99eb1a08efc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_592427f78b8580784a023f3440400440d5b169cc49703e86a667d99eb1a08efc->enter($__internal_592427f78b8580784a023f3440400440d5b169cc49703e86a667d99eb1a08efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f3746e16097b32dc462042896c68f1613087b48561b9218e06165b7260a6a778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3746e16097b32dc462042896c68f1613087b48561b9218e06165b7260a6a778->enter($__internal_f3746e16097b32dc462042896c68f1613087b48561b9218e06165b7260a6a778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "        <main class=\"w3-container\">
            <h1>Gestion Partes</h1>
            ";
        // line 9
        echo "            <form action=\"\">
                <div class=\"w3-col m3 w3-section\">
                    <input type=\"text\" name=\"like\" id=\"partesSearchBar\"> <i
                            class=\"fa fa-search fa-lg fa-flip-horizontal\"></i> <input type=\"submit\" value=\"Buscar\" class=\"w3-button w3-text-white\"/>
                </div>
                <div class=\"w3-col m3 w3-section\">
                    ";
        // line 16
        echo "                    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte");
        echo "\" class=\"w3-margin-right\" title=\"Nuevo Parte\"><i
                                class=\"fa fa-plus-circle fa-2x\"></i></a>
                    <a href=\"#\" class=\"w3-margin-right\" title=\"Exportar\"><i class=\"fa fa-download fa-2x\"></i></a>
                    <a href=\"#\" class=\"w3-margin-right\" title=\"Importar\"><i class=\"fa fa-upload fa-2x\"></i></a>
                </div>
                <div class=\"w3-col m12 w3-responsive w3-section\">
                    <table class=\"w3-table-all w3-centered w3-margin-top\">
                        <tr>
                            <th>NumParte</th>
                            <th>Fecha</th>
                            <th>Alumno</th>
                            <th>Curso</th>
                            <th>Profesor</th>
                            <th>Tipo</th>
                            <th>Puntos</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partes"] ?? $this->getContext($context, "partes")));
        foreach ($context['_seq'] as $context["_key"] => $context["parte"]) {
            // line 35
            echo "                            <tr>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["parte"], "fecha", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verAlumno", array("id" => $this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "nombre", array()), "html", null, true);
            echo "</a>
                                </td>
                                <td>Ninguno</td>
                                <td>
                                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verProfesor", array("id" => $this->getAttribute($this->getAttribute($context["parte"], "idProfesor", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idProfesor", array()), "nombre", array()), "html", null, true);
            echo "</a>
                                </td>
                                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idTipo", array()), "tipo", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "puntos", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idEstado", array()), "estado", array()), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte");
            echo "?idParte=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "id", array()), "html", null, true);
            echo "\">edit</a></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                    </table>
                </div>
            </form>
        </main>
    ";
        
        $__internal_f3746e16097b32dc462042896c68f1613087b48561b9218e06165b7260a6a778->leave($__internal_f3746e16097b32dc462042896c68f1613087b48561b9218e06165b7260a6a778_prof);

        
        $__internal_592427f78b8580784a023f3440400440d5b169cc49703e86a667d99eb1a08efc->leave($__internal_592427f78b8580784a023f3440400440d5b169cc49703e86a667d99eb1a08efc_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/partes/partes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 51,  149 => 48,  145 => 47,  141 => 46,  137 => 45,  130 => 43,  121 => 39,  116 => 37,  112 => 36,  109 => 35,  105 => 34,  83 => 16,  75 => 9,  71 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    {% block header %}
        <main class=\"w3-container\">
            <h1>Gestion Partes</h1>
            {#TODO: ajustar form#}
            <form action=\"\">
                <div class=\"w3-col m3 w3-section\">
                    <input type=\"text\" name=\"like\" id=\"partesSearchBar\"> <i
                            class=\"fa fa-search fa-lg fa-flip-horizontal\"></i> <input type=\"submit\" value=\"Buscar\" class=\"w3-button w3-text-white\"/>
                </div>
                <div class=\"w3-col m3 w3-section\">
                    {#TODO: enlaces#}
                    <a href=\"{{ path('nuevoParte') }}\" class=\"w3-margin-right\" title=\"Nuevo Parte\"><i
                                class=\"fa fa-plus-circle fa-2x\"></i></a>
                    <a href=\"#\" class=\"w3-margin-right\" title=\"Exportar\"><i class=\"fa fa-download fa-2x\"></i></a>
                    <a href=\"#\" class=\"w3-margin-right\" title=\"Importar\"><i class=\"fa fa-upload fa-2x\"></i></a>
                </div>
                <div class=\"w3-col m12 w3-responsive w3-section\">
                    <table class=\"w3-table-all w3-centered w3-margin-top\">
                        <tr>
                            <th>NumParte</th>
                            <th>Fecha</th>
                            <th>Alumno</th>
                            <th>Curso</th>
                            <th>Profesor</th>
                            <th>Tipo</th>
                            <th>Puntos</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                        {% for parte in partes %}
                            <tr>
                                <td>{{ parte.id }}</td>
                                <td>{{ parte.fecha|date(\"d/m/Y\") }}</td>
                                <td>
                                    <a href=\"{{ path('verAlumno', {'id': parte.idAlumno.id}) }}\">{{ parte.idAlumno.nombre }}</a>
                                </td>
                                <td>Ninguno</td>
                                <td>
                                    <a href=\"{{ path('verProfesor', {'id': parte.idProfesor.id}) }}\">{{ parte.idProfesor.nombre }}</a>
                                </td>
                                <td>{{ parte.idTipo.tipo }}</td>
                                <td>{{ parte.puntos }}</td>
                                <td>{{ parte.idEstado.estado }}</td>
                                <td><a href=\"{{ path('nuevoParte') }}?idParte={{ parte.id }}\">edit</a></td>
                            </tr>
                        {% endfor %}
                    </table>
                </div>
            </form>
        </main>
    {% endblock %}
{% endblock %}", "convivencia/partes/partes.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\app\\Resources\\views\\convivencia\\partes\\partes.html.twig");
    }
}
