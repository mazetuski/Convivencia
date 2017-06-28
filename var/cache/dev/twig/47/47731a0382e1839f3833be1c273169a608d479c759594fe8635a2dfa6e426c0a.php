<?php

/* convivencia/alumno/carnets.html.twig */
class __TwigTemplate_3f64436213669d19ae0809218d3521ff1180d3ecf388af4f9f2f4a1245454ddd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/alumno/carnets.html.twig", 1);
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
        $__internal_7708ad32f9f7d1096ea3eecbbebb1c8012ae17b6835587ad3dd6484375c4f7ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7708ad32f9f7d1096ea3eecbbebb1c8012ae17b6835587ad3dd6484375c4f7ab->enter($__internal_7708ad32f9f7d1096ea3eecbbebb1c8012ae17b6835587ad3dd6484375c4f7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/alumno/carnets.html.twig"));

        $__internal_1b9932db22eaf89e3022dc3b87fdad3217a6fa0cf86902f2c6cf8778b876bc59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9932db22eaf89e3022dc3b87fdad3217a6fa0cf86902f2c6cf8778b876bc59->enter($__internal_1b9932db22eaf89e3022dc3b87fdad3217a6fa0cf86902f2c6cf8778b876bc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/alumno/carnets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7708ad32f9f7d1096ea3eecbbebb1c8012ae17b6835587ad3dd6484375c4f7ab->leave($__internal_7708ad32f9f7d1096ea3eecbbebb1c8012ae17b6835587ad3dd6484375c4f7ab_prof);

        
        $__internal_1b9932db22eaf89e3022dc3b87fdad3217a6fa0cf86902f2c6cf8778b876bc59->leave($__internal_1b9932db22eaf89e3022dc3b87fdad3217a6fa0cf86902f2c6cf8778b876bc59_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_dece27043ab60f434b5566d644a174977ce0cdf046af6e7248c82a89e6c5c91a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dece27043ab60f434b5566d644a174977ce0cdf046af6e7248c82a89e6c5c91a->enter($__internal_dece27043ab60f434b5566d644a174977ce0cdf046af6e7248c82a89e6c5c91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6645c0a66ddce4c76af9ad4f82df7e536fee72ff58fca261199c54309fa20fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6645c0a66ddce4c76af9ad4f82df7e536fee72ff58fca261199c54309fa20fec->enter($__internal_6645c0a66ddce4c76af9ad4f82df7e536fee72ff58fca261199c54309fa20fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_6645c0a66ddce4c76af9ad4f82df7e536fee72ff58fca261199c54309fa20fec->leave($__internal_6645c0a66ddce4c76af9ad4f82df7e536fee72ff58fca261199c54309fa20fec_prof);

        
        $__internal_dece27043ab60f434b5566d644a174977ce0cdf046af6e7248c82a89e6c5c91a->leave($__internal_dece27043ab60f434b5566d644a174977ce0cdf046af6e7248c82a89e6c5c91a_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_b8cffaf928e343f3c46fb57147d4e32c64aad16646ea355ae54394ff6c2ecb3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8cffaf928e343f3c46fb57147d4e32c64aad16646ea355ae54394ff6c2ecb3e->enter($__internal_b8cffaf928e343f3c46fb57147d4e32c64aad16646ea355ae54394ff6c2ecb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_99e8e454d3e91533eaa00bceb4da167e2e6cc5b3a4a2ed559bdd9e4d9284e7b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e8e454d3e91533eaa00bceb4da167e2e6cc5b3a4a2ed559bdd9e4d9284e7b9->enter($__internal_99e8e454d3e91533eaa00bceb4da167e2e6cc5b3a4a2ed559bdd9e4d9284e7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo "        <main class=\"w3-container\">
            <h1>Carnets Alumnos</h1>
            <form action=\"\">
                <div class=\"w3-row-padding\">
                    <div class=\"w3-col l3 m8 w3-section\">
                        ";
        // line 13
        echo "                        ";
        // line 14
        echo "                        ";
        // line 15
        echo "                        <select name=\"puntosFiltro\" class=\"w3-select w3-col s8 l4 m6\" id=\"carnetFilterPuntos\">
                            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["puntosSelect"] ?? $this->getContext($context, "puntosSelect")));
        foreach ($context['_seq'] as $context["_key"] => $context["puntos"]) {
            // line 17
            echo "                                ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "puntosFiltro"), "method") == $context["puntos"])) {
                // line 18
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["puntos"], "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $context["puntos"], "html", null, true);
                echo "</option>
                                ";
            } else {
                // line 20
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["puntos"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["puntos"], "html", null, true);
                echo "</option>
                                ";
            }
            // line 22
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['puntos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                        </select>
                        <input type=\"submit\" value=\"Buscar\" class=\"w3-button w3-text-white\"/>
                    </div>
                    <div class=\"w3-col m3 w3-section\">
                        <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("export_form_carnets");
        echo "\" class=\"w3-margin-right\" title=\"Exportar\"><i class=\"fa fa-download fa-2x\"></i></a>
                    </div>
                </div>

                <div class=\"w3-col m12 w3-responsive w3-section\">
                    <table class=\"tableDataCarnets stripe\" data-order='[[ 1, \"desc\" ]]'>
                        <thead>
                        <tr>
                            <th>Alumno</th>
                            <th>Puntos</th>
                            <th>Grupo</th>
                            <th>Medida</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arrayCarnetData"] ?? $this->getContext($context, "arrayCarnetData")));
        foreach ($context['_seq'] as $context["_key"] => $context["carnet"]) {
            // line 43
            echo "                            ";
            if (($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) == 0)) {
                // line 44
                echo "                                ";
                $context["colorClass"] = "w3-text-green";
                // line 45
                echo "                            ";
            } elseif ((($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) > 0) && ($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) < 7))) {
                // line 46
                echo "                                ";
                $context["colorClass"] = "text-orange";
                // line 47
                echo "                            ";
            } elseif (($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) == 7)) {
                // line 48
                echo "                                ";
                $context["colorClass"] = "w3-text-pink";
                // line 49
                echo "                            ";
            } elseif ((($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) > 7) && ($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) < 10))) {
                // line 50
                echo "                                ";
                $context["colorClass"] = "text-darkRed";
                // line 51
                echo "                            ";
            } elseif (($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) >= 10)) {
                // line 52
                echo "                                ";
                $context["colorClass"] = "w3-text-red";
                // line 53
                echo "                            ";
            } else {
                // line 54
                echo "                                ";
                $context["colorClass"] = "w3-text-black";
                // line 55
                echo "                            ";
            }
            // line 56
            echo "                            <tr class=\"";
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? $this->getContext($context, "colorClass")), "html", null, true);
            echo "\">
                                <td>
                                    <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verAlumno", array("id" => $this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
            echo "</a>
                                </td>
                                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()), "html", null, true);
            echo "</td>
                                ";
            // line 61
            if (($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "idCurso", array()) != null)) {
                // line 62
                echo "                                    <td>
                                        <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_carnets", array("like" => $this->getAttribute($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "idCurso", array()), "grupo", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "idCurso", array()), "grupo", array()), "html", null, true);
                echo "</a>
                                    </td>
                                ";
            } else {
                // line 66
                echo "                                    <td>Ninguno</td>
                                ";
            }
            // line 68
            echo "                                ";
            if ((twig_length_filter($this->env, $this->getAttribute($context["carnet"], "arraySanciones", array())) > 0)) {
                // line 69
                echo "                                    <td>
                                        ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["carnet"], "arraySanciones", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["sancion"]) {
                    // line 71
                    echo "                                            ";
                    if ((($this->getAttribute($this->getAttribute($context["sancion"], "idEstado", array()), "estado", array()) == "Iniciada") || ($this->getAttribute($this->getAttribute($context["sancion"], "idEstado", array()), "estado", array()) == "Vigente"))) {
                        // line 72
                        echo "                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idSancion" => $this->getAttribute($context["sancion"], "id", array()))), "html", null, true);
                        echo "\">
                                                (";
                        // line 73
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sancion"], "fecha", array()), "d/m/Y"), "html", null, true);
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idTipo", array()), "tipo", array()), "html", null, true);
                        echo "
                                                - ";
                        // line 74
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idEstado", array()), "estado", array()), "html", null, true);
                        echo ")</a><br/>
                                            ";
                    }
                    // line 76
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sancion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "                                    </td>
                                ";
            } else {
                // line 79
                echo "                                    ";
                if (($this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "puntos", array()) > 0)) {
                    // line 80
                    echo "                                        <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion", array("idAlumno" => $this->getAttribute($this->getAttribute($context["carnet"], "alumno", array()), "id", array()))), "html", null, true);
                    echo "\">Crear
                                                Sanción</a></td>
                                        ";
                    // line 83
                    echo "                                    ";
                } else {
                    // line 84
                    echo "                                        <td></td>
                                    ";
                }
                // line 86
                echo "                                ";
            }
            // line 87
            echo "                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carnet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                        </tbody>
                    </table>
                </div>
                ";
        // line 93
        echo "                ";
        // line 94
        echo "                ";
        // line 95
        echo "            </form>
        </main>
    ";
        
        $__internal_99e8e454d3e91533eaa00bceb4da167e2e6cc5b3a4a2ed559bdd9e4d9284e7b9->leave($__internal_99e8e454d3e91533eaa00bceb4da167e2e6cc5b3a4a2ed559bdd9e4d9284e7b9_prof);

        
        $__internal_b8cffaf928e343f3c46fb57147d4e32c64aad16646ea355ae54394ff6c2ecb3e->leave($__internal_b8cffaf928e343f3c46fb57147d4e32c64aad16646ea355ae54394ff6c2ecb3e_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/alumno/carnets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 95,  287 => 94,  285 => 93,  280 => 89,  273 => 87,  270 => 86,  266 => 84,  263 => 83,  257 => 80,  254 => 79,  250 => 77,  244 => 76,  239 => 74,  233 => 73,  228 => 72,  225 => 71,  221 => 70,  218 => 69,  215 => 68,  211 => 66,  203 => 63,  200 => 62,  198 => 61,  194 => 60,  187 => 58,  181 => 56,  178 => 55,  175 => 54,  172 => 53,  169 => 52,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  154 => 47,  151 => 46,  148 => 45,  145 => 44,  142 => 43,  138 => 42,  120 => 27,  114 => 23,  108 => 22,  100 => 20,  92 => 18,  89 => 17,  85 => 16,  82 => 15,  80 => 14,  78 => 13,  71 => 7,  53 => 6,  50 => 5,  41 => 4,  11 => 1,);
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
            <h1>Carnets Alumnos</h1>
            <form action=\"\">
                <div class=\"w3-row-padding\">
                    <div class=\"w3-col l3 m8 w3-section\">
                        {#<input type=\"text\" name=\"like\" id=\"partesSearchBar\" value=\"{{ app.request.get('like') }}\"#}
                        {#placeholder=\"Introduce fecha, alumno, curso...\" class=\"w3-input w3-col l6 m12\">#}
                        {#<i class=\"fa fa-search fa-lg fa-flip-horizontal\"></i>#}
                        <select name=\"puntosFiltro\" class=\"w3-select w3-col s8 l4 m6\" id=\"carnetFilterPuntos\">
                            {% for puntos in puntosSelect %}
                                {% if app.request.get('puntosFiltro') == puntos %}
                                    <option value=\"{{ puntos }}\" selected>{{ puntos }}</option>
                                {% else %}
                                    <option value=\"{{ puntos }}\">{{ puntos }}</option>
                                {% endif %}
                            {% endfor %}
                        </select>
                        <input type=\"submit\" value=\"Buscar\" class=\"w3-button w3-text-white\"/>
                    </div>
                    <div class=\"w3-col m3 w3-section\">
                        <a href=\"{{ path('export_form_carnets') }}\" class=\"w3-margin-right\" title=\"Exportar\"><i class=\"fa fa-download fa-2x\"></i></a>
                    </div>
                </div>

                <div class=\"w3-col m12 w3-responsive w3-section\">
                    <table class=\"tableDataCarnets stripe\" data-order='[[ 1, \"desc\" ]]'>
                        <thead>
                        <tr>
                            <th>Alumno</th>
                            <th>Puntos</th>
                            <th>Grupo</th>
                            <th>Medida</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for carnet in arrayCarnetData %}
                            {% if carnet.alumno.puntos == 0 %}
                                {% set colorClass = 'w3-text-green' %}
                            {% elseif carnet.alumno.puntos > 0 and carnet.alumno.puntos <7 %}
                                {% set colorClass = 'text-orange' %}
                            {% elseif carnet.alumno.puntos == 7 %}
                                {% set colorClass = 'w3-text-pink' %}
                            {% elseif carnet.alumno.puntos > 7 and carnet.alumno.puntos <10 %}
                                {% set colorClass = 'text-darkRed' %}
                            {% elseif carnet.alumno.puntos >= 10 %}
                                {% set colorClass = 'w3-text-red' %}
                            {% else %}
                                {% set colorClass = 'w3-text-black' %}
                            {% endif %}
                            <tr class=\"{{ colorClass }}\">
                                <td>
                                    <a href=\"{{ path('verAlumno', {'id': carnet.alumno.id}) }}\">{{ carnet.alumno.getNombreCompleto() }}</a>
                                </td>
                                <td>{{ carnet.alumno.puntos }}</td>
                                {% if carnet.alumno.idCurso != null %}
                                    <td>
                                        <a href=\"{{ path('show_carnets', {'like': carnet.alumno.idCurso.grupo}) }}\">{{ carnet.alumno.idCurso.grupo }}</a>
                                    </td>
                                {% else %}
                                    <td>Ninguno</td>
                                {% endif %}
                                {% if carnet.arraySanciones|length > 0 %}
                                    <td>
                                        {% for sancion in carnet.arraySanciones %}
                                            {% if sancion.idEstado.estado == \"Iniciada\" or sancion.idEstado.estado == \"Vigente\" %}
                                            <a href=\"{{ path('nueva_sancion', {'idSancion':sancion.id}) }}\">
                                                ({{ sancion.fecha|date('d/m/Y') }} - {{ sancion.idTipo.tipo }}
                                                - {{ sancion.idEstado.estado }})</a><br/>
                                            {% endif %}
                                        {% endfor %}
                                    </td>
                                {% else %}
                                    {% if carnet.alumno.puntos >0 %}
                                        <td><a href=\"{{ path('nueva_sancion', {'idAlumno': carnet.alumno.id}) }}\">Crear
                                                Sanción</a></td>
                                        {#<td>No sancionado(implementar crear sanción)</td>#}
                                    {% else %}
                                        <td></td>
                                    {% endif %}
                                {% endif %}
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
                {#<div class=\"paginator w3-col m12\">#}
                {#{{ knp_pagination_render(arrayCarnetData) }}#}
                {#</div>#}
            </form>
        </main>
    {% endblock %}
{% endblock %}", "convivencia/alumno/carnets.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\app\\Resources\\views\\convivencia\\alumno\\carnets.html.twig");
    }
}
