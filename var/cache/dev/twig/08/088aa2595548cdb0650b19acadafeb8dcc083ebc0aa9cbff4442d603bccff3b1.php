<?php

/* convivencia/sanciones/sanciones.html.twig */
class __TwigTemplate_9aa051633e926c1ef195f9baa72207bb2645a28835b1e4c946c6fe69442553ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/sanciones/sanciones.html.twig", 1);
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
        $__internal_94ed2a72ea53c7f77bf2e703970e539c927e7d3124f7a677a86b2e0d98496b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94ed2a72ea53c7f77bf2e703970e539c927e7d3124f7a677a86b2e0d98496b67->enter($__internal_94ed2a72ea53c7f77bf2e703970e539c927e7d3124f7a677a86b2e0d98496b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/sanciones/sanciones.html.twig"));

        $__internal_f7c8e8917d86d851814c506f5fbef12de44fdf4be53594986c90f556b46d4e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c8e8917d86d851814c506f5fbef12de44fdf4be53594986c90f556b46d4e46->enter($__internal_f7c8e8917d86d851814c506f5fbef12de44fdf4be53594986c90f556b46d4e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/sanciones/sanciones.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94ed2a72ea53c7f77bf2e703970e539c927e7d3124f7a677a86b2e0d98496b67->leave($__internal_94ed2a72ea53c7f77bf2e703970e539c927e7d3124f7a677a86b2e0d98496b67_prof);

        
        $__internal_f7c8e8917d86d851814c506f5fbef12de44fdf4be53594986c90f556b46d4e46->leave($__internal_f7c8e8917d86d851814c506f5fbef12de44fdf4be53594986c90f556b46d4e46_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_435e5fadfa5ff06b7171728f414479d7d7548b60bd75ad9b07f15b28fcfdf117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_435e5fadfa5ff06b7171728f414479d7d7548b60bd75ad9b07f15b28fcfdf117->enter($__internal_435e5fadfa5ff06b7171728f414479d7d7548b60bd75ad9b07f15b28fcfdf117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39b6a0ea019180764371fd52aa6e87d60504af2dc6ac0f92fab8e981e975896f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b6a0ea019180764371fd52aa6e87d60504af2dc6ac0f92fab8e981e975896f->enter($__internal_39b6a0ea019180764371fd52aa6e87d60504af2dc6ac0f92fab8e981e975896f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_39b6a0ea019180764371fd52aa6e87d60504af2dc6ac0f92fab8e981e975896f->leave($__internal_39b6a0ea019180764371fd52aa6e87d60504af2dc6ac0f92fab8e981e975896f_prof);

        
        $__internal_435e5fadfa5ff06b7171728f414479d7d7548b60bd75ad9b07f15b28fcfdf117->leave($__internal_435e5fadfa5ff06b7171728f414479d7d7548b60bd75ad9b07f15b28fcfdf117_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_14cd57f3edbc739aca82f523c7be92ac149f1c2cea097f7e6dddb43f05d362ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14cd57f3edbc739aca82f523c7be92ac149f1c2cea097f7e6dddb43f05d362ab->enter($__internal_14cd57f3edbc739aca82f523c7be92ac149f1c2cea097f7e6dddb43f05d362ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_971608da14466e2ebc75f70b12aae17c4b5076e968f1d61260ab2f14a1c64bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971608da14466e2ebc75f70b12aae17c4b5076e968f1d61260ab2f14a1c64bc7->enter($__internal_971608da14466e2ebc75f70b12aae17c4b5076e968f1d61260ab2f14a1c64bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo "        <main class=\"w3-container\">
            <h1>Gestion Sanciones</h1>
            ";
        // line 10
        echo "            <form action=\"\">
                <div class=\"w3-col l6 m8 w3-section\">
                    <input type=\"text\" class=\"w3-input w3-col l6 m12\" name=\"like\" id=\"partesSearchBar\"
                           value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "like"), "method"), "html", null, true);
        echo "\" placeholder=\"Introduce fecha, alumno, curso...\">
                    <i class=\" fa fa-search fa-lg fa-flip-horizontal\"></i>
                    <div class=\"i-checks\">
                        ";
        // line 16
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "historico"), "method") == "on")) {
            // line 17
            echo "                            <input type=\"checkbox\" name=\"historico\" checked>
                        ";
        } else {
            // line 19
            echo "                            <input type=\"checkbox\" name=\"historico\">
                        ";
        }
        // line 21
        echo "                        <span> Histórico</span>
                    </div>
                    <input type=\"submit\" value=\"Buscar\" class=\"w3-button w3-text-white\"/>
                </div>
                <div class=\"w3-col m3 w3-section\">
                    ";
        // line 27
        echo "                    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion");
        echo "\" class=\"w3-margin-right\" title=\"Nueva Sanción\"><i
                                class=\"fa fa-plus-circle fa-2x\"></i></a>
                    <a href=\"#\" class=\"w3-margin-right\" title=\"Exportar\"><i class=\"fa fa-download fa-2x\"></i></a>
                    <a href=\"#\" class=\"w3-margin-right\" title=\"Importar\"><i class=\"fa fa-upload fa-2x\"></i></a>
                </div>
                <div class=\"w3-col m12 w3-responsive w3-section\">
                    <table class=\"w3-table-all w3-centered w3-margin-top\">
                        <tr>
                            <th>NumSanción</th>
                            <th>Fecha</th>
                            <th>Alumno</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Final</th>
                            <th>Tipo</th>
                            <th>Puntos</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sanciones"] ?? $this->getContext($context, "sanciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["sancion"]) {
            // line 46
            echo "                            <tr>
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["sancion"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sancion"], "fecha", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verAlumno", array("id" => $this->getAttribute($this->getAttribute($context["sancion"], "idAlumno", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idAlumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
            echo "</a>
                                </td>
                                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sancion"], "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sancion"], "fechaFinal", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idTipo", array()), "tipo", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["sancion"], "puntosRecuperados", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idEstado", array()), "estado", array()), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nueva_sancion");
            echo "?idSancion=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sancion"], "id", array()), "html", null, true);
            echo "\">editar</a></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sancion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    </table>
                </div>
                <div class=\"paginator w3-col m12\">
                    ";
        // line 63
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["sanciones"] ?? $this->getContext($context, "sanciones")));
        echo "
                </div>
            </form>
        </main>
    ";
        
        $__internal_971608da14466e2ebc75f70b12aae17c4b5076e968f1d61260ab2f14a1c64bc7->leave($__internal_971608da14466e2ebc75f70b12aae17c4b5076e968f1d61260ab2f14a1c64bc7_prof);

        
        $__internal_14cd57f3edbc739aca82f523c7be92ac149f1c2cea097f7e6dddb43f05d362ab->leave($__internal_14cd57f3edbc739aca82f523c7be92ac149f1c2cea097f7e6dddb43f05d362ab_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/sanciones/sanciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 63,  179 => 60,  168 => 57,  164 => 56,  160 => 55,  156 => 54,  152 => 53,  148 => 52,  141 => 50,  136 => 48,  132 => 47,  129 => 46,  125 => 45,  103 => 27,  96 => 21,  92 => 19,  88 => 17,  86 => 16,  80 => 13,  75 => 10,  71 => 7,  53 => 6,  50 => 5,  41 => 4,  11 => 1,);
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
            <h1>Gestion Sanciones</h1>
            {#TODO: ajustar form#}
            <form action=\"\">
                <div class=\"w3-col l6 m8 w3-section\">
                    <input type=\"text\" class=\"w3-input w3-col l6 m12\" name=\"like\" id=\"partesSearchBar\"
                           value=\"{{ app.request.get('like') }}\" placeholder=\"Introduce fecha, alumno, curso...\">
                    <i class=\" fa fa-search fa-lg fa-flip-horizontal\"></i>
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
                    <a href=\"{{ path('nueva_sancion') }}\" class=\"w3-margin-right\" title=\"Nueva Sanción\"><i
                                class=\"fa fa-plus-circle fa-2x\"></i></a>
                    <a href=\"#\" class=\"w3-margin-right\" title=\"Exportar\"><i class=\"fa fa-download fa-2x\"></i></a>
                    <a href=\"#\" class=\"w3-margin-right\" title=\"Importar\"><i class=\"fa fa-upload fa-2x\"></i></a>
                </div>
                <div class=\"w3-col m12 w3-responsive w3-section\">
                    <table class=\"w3-table-all w3-centered w3-margin-top\">
                        <tr>
                            <th>NumSanción</th>
                            <th>Fecha</th>
                            <th>Alumno</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Final</th>
                            <th>Tipo</th>
                            <th>Puntos</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                        {% for sancion in sanciones %}
                            <tr>
                                <td>{{ sancion.id }}</td>
                                <td>{{ sancion.fecha|date(\"d/m/Y\") }}</td>
                                <td>
                                    <a href=\"{{ path('verAlumno', {'id': sancion.idAlumno.id}) }}\">{{ sancion.idAlumno.getNombreCompleto() }}</a>
                                </td>
                                <td>{{ sancion.fechaInicio|date(\"d/m/Y\") }}</td>
                                <td>{{ sancion.fechaFinal|date(\"d/m/Y\") }}</td>
                                <td>{{ sancion.idTipo.tipo }}</td>
                                <td>{{ sancion.puntosRecuperados }}</td>
                                <td>{{ sancion.idEstado.estado }}</td>
                                <td><a href=\"{{ path('nueva_sancion') }}?idSancion={{ sancion.id }}\">editar</a></td>
                            </tr>
                        {% endfor %}
                    </table>
                </div>
                <div class=\"paginator w3-col m12\">
                    {{ knp_pagination_render(sanciones) }}
                </div>
            </form>
        </main>
    {% endblock %}
{% endblock %}", "convivencia/sanciones/sanciones.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\app\\Resources\\views\\convivencia\\sanciones\\sanciones.html.twig");
    }
}
