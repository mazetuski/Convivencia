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
        $__internal_34a5a9ea60b885bd95548b8b3e7f01cc6d82fc8411eb5cea275bef737295c6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34a5a9ea60b885bd95548b8b3e7f01cc6d82fc8411eb5cea275bef737295c6a6->enter($__internal_34a5a9ea60b885bd95548b8b3e7f01cc6d82fc8411eb5cea275bef737295c6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partes.html.twig"));

        $__internal_a47a928e6e2f874864ac2950e97959bd8aabd0b1357e7df1c6d4a36589b1f7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47a928e6e2f874864ac2950e97959bd8aabd0b1357e7df1c6d4a36589b1f7ef->enter($__internal_a47a928e6e2f874864ac2950e97959bd8aabd0b1357e7df1c6d4a36589b1f7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/partes/partes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34a5a9ea60b885bd95548b8b3e7f01cc6d82fc8411eb5cea275bef737295c6a6->leave($__internal_34a5a9ea60b885bd95548b8b3e7f01cc6d82fc8411eb5cea275bef737295c6a6_prof);

        
        $__internal_a47a928e6e2f874864ac2950e97959bd8aabd0b1357e7df1c6d4a36589b1f7ef->leave($__internal_a47a928e6e2f874864ac2950e97959bd8aabd0b1357e7df1c6d4a36589b1f7ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c15cee365e24be14bdb04e21f8f6de42d4bd14c83d0daf6484181774557d699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c15cee365e24be14bdb04e21f8f6de42d4bd14c83d0daf6484181774557d699->enter($__internal_8c15cee365e24be14bdb04e21f8f6de42d4bd14c83d0daf6484181774557d699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_47109355898cd1cc53b022109c9a624d8685ef0da22be31db744c4be32005e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47109355898cd1cc53b022109c9a624d8685ef0da22be31db744c4be32005e5d->enter($__internal_47109355898cd1cc53b022109c9a624d8685ef0da22be31db744c4be32005e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_47109355898cd1cc53b022109c9a624d8685ef0da22be31db744c4be32005e5d->leave($__internal_47109355898cd1cc53b022109c9a624d8685ef0da22be31db744c4be32005e5d_prof);

        
        $__internal_8c15cee365e24be14bdb04e21f8f6de42d4bd14c83d0daf6484181774557d699->leave($__internal_8c15cee365e24be14bdb04e21f8f6de42d4bd14c83d0daf6484181774557d699_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_2322cfbef60501e8c9b9a72298d696ec285d89e94b2de590a73f78e98ce9478e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2322cfbef60501e8c9b9a72298d696ec285d89e94b2de590a73f78e98ce9478e->enter($__internal_2322cfbef60501e8c9b9a72298d696ec285d89e94b2de590a73f78e98ce9478e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_acff0b0ff709ec3cc8e730dc366e15df8ab4aa8a040fb42d004bc3cafcb95f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acff0b0ff709ec3cc8e730dc366e15df8ab4aa8a040fb42d004bc3cafcb95f3e->enter($__internal_acff0b0ff709ec3cc8e730dc366e15df8ab4aa8a040fb42d004bc3cafcb95f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
                            <th></th>
                        </tr>
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partes"] ?? $this->getContext($context, "partes")));
        foreach ($context['_seq'] as $context["_key"] => $context["parte"]) {
            // line 34
            echo "                            <tr>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["parte"], "fecha", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verAlumno", array("id" => $this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idAlumno", array()), "nombre", array()), "html", null, true);
            echo "</a>
                                </td>
                                <td>Ninguno</td>
                                <td>
                                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verProfesor", array("id" => $this->getAttribute($this->getAttribute($context["parte"], "idProfesor", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idProfesor", array()), "nombre", array()), "html", null, true);
            echo "</a>
                                </td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idTipo", array()), "tipo", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "puntos", array()), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 46
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
        // line 49
        echo "                    </table>
                </div>
            </form>
        </main>
    ";
        
        $__internal_acff0b0ff709ec3cc8e730dc366e15df8ab4aa8a040fb42d004bc3cafcb95f3e->leave($__internal_acff0b0ff709ec3cc8e730dc366e15df8ab4aa8a040fb42d004bc3cafcb95f3e_prof);

        
        $__internal_2322cfbef60501e8c9b9a72298d696ec285d89e94b2de590a73f78e98ce9478e->leave($__internal_2322cfbef60501e8c9b9a72298d696ec285d89e94b2de590a73f78e98ce9478e_prof);

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
        return array (  155 => 49,  144 => 46,  140 => 45,  136 => 44,  129 => 42,  120 => 38,  115 => 36,  111 => 35,  108 => 34,  104 => 33,  83 => 16,  75 => 9,  71 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
