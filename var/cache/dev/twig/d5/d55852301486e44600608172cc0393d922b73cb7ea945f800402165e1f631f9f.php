<?php

/* convivencia/partes/partes.html.twig */
class __TwigTemplate_17195804d634d0a277ee19ba9fe6c71a9ff934f6ab734d97b7f75b838eae820c extends Twig_Template
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
        $__internal_c842296d0901c78e820cb40fbb0fe8c79017a433a1cfd0d5cc29f88e5f350a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c842296d0901c78e820cb40fbb0fe8c79017a433a1cfd0d5cc29f88e5f350a45->enter($__internal_c842296d0901c78e820cb40fbb0fe8c79017a433a1cfd0d5cc29f88e5f350a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partes.html.twig"));

        $__internal_e8e2eb4df15c8ef1a58ac3f2db47da45f1e871960d1e65ac552208afe9aea2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e2eb4df15c8ef1a58ac3f2db47da45f1e871960d1e65ac552208afe9aea2c5->enter($__internal_e8e2eb4df15c8ef1a58ac3f2db47da45f1e871960d1e65ac552208afe9aea2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c842296d0901c78e820cb40fbb0fe8c79017a433a1cfd0d5cc29f88e5f350a45->leave($__internal_c842296d0901c78e820cb40fbb0fe8c79017a433a1cfd0d5cc29f88e5f350a45_prof);

        
        $__internal_e8e2eb4df15c8ef1a58ac3f2db47da45f1e871960d1e65ac552208afe9aea2c5->leave($__internal_e8e2eb4df15c8ef1a58ac3f2db47da45f1e871960d1e65ac552208afe9aea2c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6acdd944dd38470351f68d30a0523ae47e61eb5652a0676f9dc326bc03965423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6acdd944dd38470351f68d30a0523ae47e61eb5652a0676f9dc326bc03965423->enter($__internal_6acdd944dd38470351f68d30a0523ae47e61eb5652a0676f9dc326bc03965423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e9c6907e0ba40e117f5f6512a0c379750cfae2b63eefaf8ea417662b29ec58d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9c6907e0ba40e117f5f6512a0c379750cfae2b63eefaf8ea417662b29ec58d->enter($__internal_7e9c6907e0ba40e117f5f6512a0c379750cfae2b63eefaf8ea417662b29ec58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_7e9c6907e0ba40e117f5f6512a0c379750cfae2b63eefaf8ea417662b29ec58d->leave($__internal_7e9c6907e0ba40e117f5f6512a0c379750cfae2b63eefaf8ea417662b29ec58d_prof);

        
        $__internal_6acdd944dd38470351f68d30a0523ae47e61eb5652a0676f9dc326bc03965423->leave($__internal_6acdd944dd38470351f68d30a0523ae47e61eb5652a0676f9dc326bc03965423_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_bc5f9d1df83b5b2d37dbe8305250d63fa4399ca3303987917163f7d9a8f71b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5f9d1df83b5b2d37dbe8305250d63fa4399ca3303987917163f7d9a8f71b78->enter($__internal_bc5f9d1df83b5b2d37dbe8305250d63fa4399ca3303987917163f7d9a8f71b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_05aa3863164518d92e7360f0a204f7d64391bff3b6d1af0d211c6cf90944f6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05aa3863164518d92e7360f0a204f7d64391bff3b6d1af0d211c6cf90944f6a4->enter($__internal_05aa3863164518d92e7360f0a204f7d64391bff3b6d1af0d211c6cf90944f6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "        <main class=\"w3-container\">
            <h1>Gestion Partes</h1>
            ";
        // line 9
        echo "            <form action=\"\">
                <div class=\"w3-col l6 m8 w3-section\">
                    <input class=\"w3-input w3-col l6 m12\" type=\"text\" name=\"like\" id=\"partesSearchBar\"
                           value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "like"), "method"), "html", null, true);
        echo "\" placeholder=\"Introduce fecha, alumno, curso...\">
                    <i class=\"fa fa-search fa-lg fa-flip-horizontal\"></i>
                    <div class=\"i-checks\">
                        ";
        // line 15
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "historico"), "method") == "on")) {
            // line 16
            echo "                            <input type=\"checkbox\" name=\"historico\" checked>
                        ";
        } else {
            // line 18
            echo "                            <input type=\"checkbox\" name=\"historico\">
                        ";
        }
        // line 20
        echo "                        <span> Histórico</span>
                    </div>
                    <input type=\"submit\" value=\"Buscar\" class=\"w3-button w3-text-white\"/>
                </div>
                <div class=\"w3-col m3 w3-section\">
                    ";
        // line 26
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
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partes"] ?? $this->getContext($context, "partes")));
        foreach ($context['_seq'] as $context["_key"] => $context["parte"]) {
            // line 45
            echo "                            ";
            if (($this->getAttribute($this->getAttribute($context["parte"], "idTipo", array()), "tipo", array()) == "Grave")) {
                // line 46
                echo "                                ";
                $context["colorClass"] = "w3-text-red";
                // line 47
                echo "                            ";
            } elseif (($this->getAttribute($this->getAttribute($context["parte"], "idTipo", array()), "tipo", array()) == "Leve")) {
                // line 48
                echo "                                ";
                $context["colorClass"] = "text-orange";
                // line 49
                echo "                            ";
            } else {
                // line 50
                echo "                                ";
                $context["colorClass"] = "w3-text-black";
                // line 51
                echo "                            ";
            }
            // line 52
            echo "                            ";
            if (($this->getAttribute($this->getAttribute($context["parte"], "idEstado", array()), "estado", array()) == "Caducado")) {
                // line 53
                echo "                                ";
                $context["colorClass"] = "w3-text-grey";
                // line 54
                echo "                            ";
            }
            // line 55
            echo "                            <tr class=\"";
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? $this->getContext($context, "colorClass")), "html", null, true);
            echo "\">
                                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["parte"], "fecha", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verAlumno", array("id" => $this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
            echo "</a>
                                </td>
                                ";
            // line 61
            if (($this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "idCurso", array()) != null)) {
                // line 62
                echo "                                    <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "idCurso", array()), "grupo", array()), "html", null, true);
                echo "</td>
                                ";
            } else {
                // line 64
                echo "                                    <td>Ninguno</td>
                                ";
            }
            // line 66
            echo "                                <td>
                                    <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verProfesor", array("id" => $this->getAttribute($this->getAttribute($context["parte"], "idProfesor", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idProfesor", array()), "nombre", array()), "html", null, true);
            echo "</a>
                                </td>
                                <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idTipo", array()), "tipo", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "puntos", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idEstado", array()), "estado", array()), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuevoParte");
            echo "?idParte=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "id", array()), "html", null, true);
            echo "\">editar</a></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                    </table>
                </div>
                <div class=\"paginator w3-col m12\">
                    ";
        // line 78
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["partes"] ?? $this->getContext($context, "partes")));
        echo "
                </div>
            </form>
        </main>
    ";
        
        $__internal_05aa3863164518d92e7360f0a204f7d64391bff3b6d1af0d211c6cf90944f6a4->leave($__internal_05aa3863164518d92e7360f0a204f7d64391bff3b6d1af0d211c6cf90944f6a4_prof);

        
        $__internal_bc5f9d1df83b5b2d37dbe8305250d63fa4399ca3303987917163f7d9a8f71b78->leave($__internal_bc5f9d1df83b5b2d37dbe8305250d63fa4399ca3303987917163f7d9a8f71b78_prof);

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
        return array (  230 => 78,  225 => 75,  214 => 72,  210 => 71,  206 => 70,  202 => 69,  195 => 67,  192 => 66,  188 => 64,  182 => 62,  180 => 61,  173 => 59,  168 => 57,  164 => 56,  159 => 55,  156 => 54,  153 => 53,  150 => 52,  147 => 51,  144 => 50,  141 => 49,  138 => 48,  135 => 47,  132 => 46,  129 => 45,  125 => 44,  103 => 26,  96 => 20,  92 => 18,  88 => 16,  86 => 15,  80 => 12,  75 => 9,  71 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
                <div class=\"w3-col l6 m8 w3-section\">
                    <input class=\"w3-input w3-col l6 m12\" type=\"text\" name=\"like\" id=\"partesSearchBar\"
                           value=\"{{ app.request.get('like') }}\" placeholder=\"Introduce fecha, alumno, curso...\">
                    <i class=\"fa fa-search fa-lg fa-flip-horizontal\"></i>
                    <div class=\"i-checks\">
                        {% if app.request.get('historico') == 'on' %}
                            <input type=\"checkbox\" name=\"historico\" checked>
                        {% else %}
                            <input type=\"checkbox\" name=\"historico\">
                        {% endif %}
                        <span> Histórico</span>
                    </div>
                    <input type=\"submit\" value=\"Buscar\" class=\"w3-button w3-text-white\"/>
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
                            {% if parte.idTipo.tipo == 'Grave' %}
                                {% set colorClass = 'w3-text-red' %}
                            {% elseif parte.idTipo.tipo  == 'Leve' %}
                                {% set colorClass = 'text-orange' %}
                            {% else %}
                                {% set colorClass = 'w3-text-black' %}
                            {% endif %}
                            {% if parte.idEstado.estado == 'Caducado' %}
                                {% set colorClass = 'w3-text-grey' %}
                            {% endif %}
                            <tr class=\"{{ colorClass }}\">
                                <td>{{ parte.id }}</td>
                                <td>{{ parte.fecha|date(\"d/m/Y\") }}</td>
                                <td>
                                    <a href=\"{{ path('verAlumno', {'id': parte.idAlumno.id}) }}\">{{ parte.idAlumno.getNombreCompleto() }}</a>
                                </td>
                                {% if parte.idAlumno.idCurso != null %}
                                    <td>{{ parte.idAlumno.idCurso.grupo }}</td>
                                {% else %}
                                    <td>Ninguno</td>
                                {% endif %}
                                <td>
                                    <a href=\"{{ path('verProfesor', {'id': parte.idProfesor.id}) }}\">{{ parte.idProfesor.nombre }}</a>
                                </td>
                                <td>{{ parte.idTipo.tipo }}</td>
                                <td>{{ parte.puntos }}</td>
                                <td>{{ parte.idEstado.estado }}</td>
                                <td><a href=\"{{ path('nuevoParte') }}?idParte={{ parte.id }}\">editar</a></td>
                            </tr>
                        {% endfor %}
                    </table>
                </div>
                <div class=\"paginator w3-col m12\">
                    {{ knp_pagination_render(partes) }}
                </div>
            </form>
        </main>
    {% endblock %}
{% endblock %}", "convivencia/partes/partes.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\app\\Resources\\views\\convivencia\\partes\\partes.html.twig");
    }
}
