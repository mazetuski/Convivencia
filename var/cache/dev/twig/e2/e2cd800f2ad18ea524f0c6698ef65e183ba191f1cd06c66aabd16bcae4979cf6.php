<?php

/* convivencia/alumno/alumno.html.twig */
class __TwigTemplate_6dd729ff888b16467b263c781e03ffab35a32aae4fcd094f9f279e326782fbe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/alumno/alumno.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_657e12016482fa880b2c3e643e344300d9f96a6ea91f9a4a9985f09f1e23d330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657e12016482fa880b2c3e643e344300d9f96a6ea91f9a4a9985f09f1e23d330->enter($__internal_657e12016482fa880b2c3e643e344300d9f96a6ea91f9a4a9985f09f1e23d330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/alumno/alumno.html.twig"));

        $__internal_564e4c675a7ae6e8308b730a08e949e64b93bae81f934ad55ff2f995c11ad578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_564e4c675a7ae6e8308b730a08e949e64b93bae81f934ad55ff2f995c11ad578->enter($__internal_564e4c675a7ae6e8308b730a08e949e64b93bae81f934ad55ff2f995c11ad578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/alumno/alumno.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_657e12016482fa880b2c3e643e344300d9f96a6ea91f9a4a9985f09f1e23d330->leave($__internal_657e12016482fa880b2c3e643e344300d9f96a6ea91f9a4a9985f09f1e23d330_prof);

        
        $__internal_564e4c675a7ae6e8308b730a08e949e64b93bae81f934ad55ff2f995c11ad578->leave($__internal_564e4c675a7ae6e8308b730a08e949e64b93bae81f934ad55ff2f995c11ad578_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9599ce720adc640c821ef918708a226fd94a753f3a340793d5e98ef7ec734959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9599ce720adc640c821ef918708a226fd94a753f3a340793d5e98ef7ec734959->enter($__internal_9599ce720adc640c821ef918708a226fd94a753f3a340793d5e98ef7ec734959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac104647b4ddfc6d2337275ad229a43ec1a6095d9ec41690d6875e73441e0759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac104647b4ddfc6d2337275ad229a43ec1a6095d9ec41690d6875e73441e0759->enter($__internal_ac104647b4ddfc6d2337275ad229a43ec1a6095d9ec41690d6875e73441e0759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <main class=\"w3-container w3-margin-top\">
        ";
        // line 8
        echo "        <div class=\"row w3-center\">
            <h2 class=\"w3-center w3-padding w3-margin\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "alumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
        echo "</h2>
            <div class=\"w3-col l6 marginTopNoMobile\">
                <header class=\"w3-container marginTopNoMobile\">
                    <img class=\"w3-circle\" src=\"https://www.w3schools.com/w3css/img_avatar3.png\" style=\"width: 300px\"
                         alt=\"avatar\">
                    <h4 class=\"w3-center\">Puntos: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "alumno", array()), "puntos", array()), "html", null, true);
        echo "/12 </h4>
                </header>
                <div class=\"w3-container w3-center\">
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/EAN13.svg/220px-EAN13.svg.png\"
                         style=\"width:150px;\">
                </div>
            </div>
            <div class=\"w3-col l6\">
                <div class=\"w3-row w3-center w3-text-center widthChartMobile\">
                    <div class=\"w3-content marginBottom marginTopNoMobile\">
                        <h4>Estadísticas Totales ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "getYear", array(), "method"), "html", null, true);
        echo "</h4>
                        <canvas id=\"myChart\" width=\"400\" height=\"400\"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row w3-margin w3-padding\">
            <div class=\"w3-col l6 marginBottom\">
                <h4 class=\"w3-padding\">Partes ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "getYear", array(), "method"), "html", null, true);
        echo "</h4>
                <canvas id=\"myChart2\"></canvas>
            </div>
            <div class=\"w3-col l6 marginBottom\">
                <h4 class=\"w3-padding\">Sanciones ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "getYear", array(), "method"), "html", null, true);
        echo "</h4>
                <canvas id=\"myChart3\"></canvas>
            </div>
        </div>
        ";
        // line 40
        $context["arrMeses"] = array();
        // line 41
        echo "        ";
        $context["arrPartes"] = array();
        // line 42
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "numPartesMeses", array()));
        foreach ($context['_seq'] as $context["mes"] => $context["partesMes"]) {
            // line 43
            echo "            ";
            $context["arrMeses"] = twig_array_merge(($context["arrMeses"] ?? $this->getContext($context, "arrMeses")), array(0 => $context["mes"]));
            // line 44
            echo "            ";
            $context["arrPartes"] = twig_array_merge(($context["arrPartes"] ?? $this->getContext($context, "arrPartes")), array(0 => $context["partesMes"]));
            // line 45
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['mes'], $context['partesMes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        ";
        $context["arrMesesSanciones"] = array();
        // line 47
        echo "        ";
        $context["arrSanciones"] = array();
        // line 48
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "numSancionesMeses", array()));
        foreach ($context['_seq'] as $context["mes"] => $context["sancionesMes"]) {
            // line 49
            echo "            ";
            $context["arrMesesSanciones"] = twig_array_merge(($context["arrMesesSanciones"] ?? $this->getContext($context, "arrMesesSanciones")), array(0 => $context["mes"]));
            // line 50
            echo "            ";
            $context["arrSanciones"] = twig_array_merge(($context["arrSanciones"] ?? $this->getContext($context, "arrSanciones")), array(0 => $context["sancionesMes"]));
            // line 51
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['mes'], $context['sancionesMes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        ";
        if ((twig_length_filter($this->env, ($context["arrMeses"] ?? $this->getContext($context, "arrMeses"))) > 4)) {
            // line 53
            echo "            ";
            $context["barPercentage"] = 0.4;
            // line 54
            echo "        ";
        } else {
            // line 55
            echo "            ";
            $context["barPercentage"] = 0.2;
            // line 56
            echo "        ";
        }
        // line 57
        echo "        <script>
            var ctx = document.getElementById(\"myChart\").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "numPartes", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "numSanciones", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "numVisitasConvivencia", array()), "html", null, true);
        echo "],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.5)',
                            'rgba(153, 102, 255, 0.5)',
                            'rgba(255, 159, 64, 0.5)',
                            'rgba(153, 102, 255, 0.5)',
                            'rgba(56, 136, 155, 0.5)',
                            'rgba(75, 192, 192, 0.5)',
                            'rgba(255, 206, 86, 0.5)'
                        ],
                    }],


                    labels: [
                        'Partes',
                        'Sanciones',
                        'Visitas Aula Convivencia'
                    ]
                }
            });

            ctx = document.getElementById(\"myChart2\").getContext('2d');
            var myChart2 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ";
        // line 88
        echo twig_jsonencode_filter(($context["arrMeses"] ?? $this->getContext($context, "arrMeses")));
        echo ",
                    datasets: [
                        {
                            label: 'Partes',
                            data: ";
        // line 92
        echo twig_jsonencode_filter(($context["arrPartes"] ?? $this->getContext($context, "arrPartes")));
        echo ",
                            backgroundColor: 'rgba(56, 136, 155, 0.5)',
//                         backgroundColor: [
//                            'rgba(56, 136, 155, 0.5)',
//                            'rgba(255, 206, 86, 0.5)',
//                            'rgba(75, 192, 192, 0.5)',
//                            'rgba(153, 102, 255, 0.5)',
//                            'rgba(54, 162, 235, 0.5)',
//                            'rgba(255, 159, 64, 0.5)'
//                    ],
                        },
                        ";
        // line 104
        echo "                        ";
        // line 105
        echo "                        ";
        // line 106
        echo "                        ";
        // line 107
        echo "                        ";
        // line 108
        echo "                    ],
                },
                options: {
                    scales: {
                        xAxes: [{
                            barPercentage: ";
        // line 113
        echo twig_escape_filter($this->env, ($context["barPercentage"] ?? $this->getContext($context, "barPercentage")), "html", null, true);
        echo "
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            },
                        }],
                    }
                }
            });

            ctx = document.getElementById(\"myChart3\").getContext('2d');
            var myChart3 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ";
        // line 128
        echo twig_jsonencode_filter(($context["arrMesesSanciones"] ?? $this->getContext($context, "arrMesesSanciones")));
        echo ",
                    datasets: [
                        {
                            label: 'Sanciones',
                            data: ";
        // line 132
        echo twig_jsonencode_filter(($context["arrSanciones"] ?? $this->getContext($context, "arrSanciones")));
        echo ",
                            backgroundColor: 'rgba(153, 102, 255, 0.5)',
                        },
                    ],
                },
                options: {
                    scales: {
                        xAxes: [{
                            barPercentage: ";
        // line 140
        echo twig_escape_filter($this->env, ($context["barPercentage"] ?? $this->getContext($context, "barPercentage")), "html", null, true);
        echo "
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            },
                        }],
                    }
                }
            });

        </script>

        <div class=\"w3-row w3-padding\">
            <div class=\"w3-col contenedorCartaAlumno\">
                <div class=\"w3-card-2 cartaAlumno\">
                    <header class=\"w3-container w3-center\">
                        <h2>Historico Partes</h2>
                    </header>
                    <div class=\"w3-container\">
                        ";
        // line 160
        $context["contadorPartes"] = 0;
        // line 161
        echo "                        ";
        $context["break"] = false;
        // line 162
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "partes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["parte"]) {
            if ( !($context["break"] ?? $this->getContext($context, "break"))) {
                // line 163
                echo "                            ";
                $context["contadorPartes"] = (($context["contadorPartes"] ?? $this->getContext($context, "contadorPartes")) + 1);
                // line 164
                echo "                            <p>El ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["parte"], "fecha", array()), "d/m/Y"), "html", null, true);
                echo " tuvo una falta ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idTipo", array()), "tipo", array()), "html", null, true);
                echo "
                                , ";
                // line 165
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idProfesor", array()), "getNombreCompleto", array(), "method"), "html", null, true);
                echo " indicó: <br/>
                                ";
                // line 166
                echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "descripcion", array()), "html", null, true);
                echo "</p>
                            ";
                // line 167
                if ((($context["contadorPartes"] ?? $this->getContext($context, "contadorPartes")) > 9)) {
                    // line 168
                    echo "                                <div class=\"w3-footer w3-center\">
                                    <p>...</p>
                                    <a href=\"";
                    // line 170
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_partesAlumno", array("id" => $this->getAttribute($this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "alumno", array()), "id", array()))), "html", null, true);
                    echo "\" class=\"w3-button w3-margin\">Mostrar Todos</a>
                                </div>
                                ";
                    // line 172
                    $context["break"] = true;
                    // line 173
                    echo "                            ";
                }
                // line 174
                echo "                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "                    </div>
                </div>
                <div class=\"w3-card-2 cartaAlumno\">
                    <header class=\"w3-container w3-center\">
                        <h2>Historico Sanciones</h2>
                    </header>
                    <div class=\"w3-container\">
                        ";
        // line 182
        $context["contadorSanciones"] = 0;
        // line 183
        echo "                        ";
        $context["break"] = false;
        // line 184
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["alumnoData"] ?? $this->getContext($context, "alumnoData")), "sanciones", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["sancion"]) {
            if ( !($context["break"] ?? $this->getContext($context, "break"))) {
                // line 185
                echo "                            ";
                $context["contadorSanciones"] = (($context["contadorSanciones"] ?? $this->getContext($context, "contadorSanciones")) + 1);
                // line 186
                echo "                            <p>El ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sancion"], "fecha", array()), "d/m/Y"), "html", null, true);
                echo " tuvo una sanción de tipo ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idTipo", array()), "tipo", array()), "html", null, true);
                echo "</p>
                            ";
                // line 187
                if ((($context["contadorSanciones"] ?? $this->getContext($context, "contadorSanciones")) > 9)) {
                    // line 188
                    echo "                                <div class=\"w3-footer w3-center\">
                                    <p>...</p>
                                    <a href=\"\" class=\"w3-button w3-margin\">Mostrar Todas</a>
                                </div>
                            ";
                }
                // line 193
                echo "                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sancion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </main>


";
        
        $__internal_ac104647b4ddfc6d2337275ad229a43ec1a6095d9ec41690d6875e73441e0759->leave($__internal_ac104647b4ddfc6d2337275ad229a43ec1a6095d9ec41690d6875e73441e0759_prof);

        
        $__internal_9599ce720adc640c821ef918708a226fd94a753f3a340793d5e98ef7ec734959->leave($__internal_9599ce720adc640c821ef918708a226fd94a753f3a340793d5e98ef7ec734959_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/alumno/alumno.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 194,  389 => 193,  382 => 188,  380 => 187,  373 => 186,  370 => 185,  364 => 184,  361 => 183,  359 => 182,  350 => 175,  343 => 174,  340 => 173,  338 => 172,  333 => 170,  329 => 168,  327 => 167,  323 => 166,  319 => 165,  312 => 164,  309 => 163,  303 => 162,  300 => 161,  298 => 160,  275 => 140,  264 => 132,  257 => 128,  239 => 113,  232 => 108,  230 => 107,  228 => 106,  226 => 105,  224 => 104,  210 => 92,  203 => 88,  171 => 63,  163 => 57,  160 => 56,  157 => 55,  154 => 54,  151 => 53,  148 => 52,  142 => 51,  139 => 50,  136 => 49,  131 => 48,  128 => 47,  125 => 46,  119 => 45,  116 => 44,  113 => 43,  108 => 42,  105 => 41,  103 => 40,  96 => 36,  89 => 32,  78 => 24,  65 => 14,  57 => 9,  54 => 8,  49 => 4,  40 => 3,  11 => 1,);
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


    <main class=\"w3-container w3-margin-top\">
        {#TODO: AÑADIR NOMBRE DEL ALUMNO#}
        <div class=\"row w3-center\">
            <h2 class=\"w3-center w3-padding w3-margin\">{{ alumnoData.alumno.getNombreCompleto() }}</h2>
            <div class=\"w3-col l6 marginTopNoMobile\">
                <header class=\"w3-container marginTopNoMobile\">
                    <img class=\"w3-circle\" src=\"https://www.w3schools.com/w3css/img_avatar3.png\" style=\"width: 300px\"
                         alt=\"avatar\">
                    <h4 class=\"w3-center\">Puntos: {{ alumnoData.alumno.puntos }}/12 </h4>
                </header>
                <div class=\"w3-container w3-center\">
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/EAN13.svg/220px-EAN13.svg.png\"
                         style=\"width:150px;\">
                </div>
            </div>
            <div class=\"w3-col l6\">
                <div class=\"w3-row w3-center w3-text-center widthChartMobile\">
                    <div class=\"w3-content marginBottom marginTopNoMobile\">
                        <h4>Estadísticas Totales {{ alumnoData.getYear() }}</h4>
                        <canvas id=\"myChart\" width=\"400\" height=\"400\"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row w3-margin w3-padding\">
            <div class=\"w3-col l6 marginBottom\">
                <h4 class=\"w3-padding\">Partes {{ alumnoData.getYear() }}</h4>
                <canvas id=\"myChart2\"></canvas>
            </div>
            <div class=\"w3-col l6 marginBottom\">
                <h4 class=\"w3-padding\">Sanciones {{ alumnoData.getYear() }}</h4>
                <canvas id=\"myChart3\"></canvas>
            </div>
        </div>
        {% set arrMeses = [] %}
        {% set arrPartes = [] %}
        {% for mes, partesMes in alumnoData.numPartesMeses %}
            {% set arrMeses = arrMeses|merge([mes]) %}
            {% set arrPartes = arrPartes|merge([partesMes]) %}
        {% endfor %}
        {% set arrMesesSanciones= [] %}
        {% set arrSanciones = [] %}
        {% for mes, sancionesMes in alumnoData.numSancionesMeses %}
            {% set arrMesesSanciones = arrMesesSanciones|merge([mes]) %}
            {% set arrSanciones = arrSanciones|merge([sancionesMes]) %}
        {% endfor %}
        {% if arrMeses|length > 4 %}
            {% set barPercentage = 0.4 %}
        {% else %}
            {% set barPercentage = 0.2 %}
        {% endif %}
        <script>
            var ctx = document.getElementById(\"myChart\").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [{{ alumnoData.numPartes }}, {{ alumnoData.numSanciones }}, {{ alumnoData.numVisitasConvivencia }}],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.5)',
                            'rgba(153, 102, 255, 0.5)',
                            'rgba(255, 159, 64, 0.5)',
                            'rgba(153, 102, 255, 0.5)',
                            'rgba(56, 136, 155, 0.5)',
                            'rgba(75, 192, 192, 0.5)',
                            'rgba(255, 206, 86, 0.5)'
                        ],
                    }],


                    labels: [
                        'Partes',
                        'Sanciones',
                        'Visitas Aula Convivencia'
                    ]
                }
            });

            ctx = document.getElementById(\"myChart2\").getContext('2d');
            var myChart2 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: {{ arrMeses|json_encode|raw }},
                    datasets: [
                        {
                            label: 'Partes',
                            data: {{ arrPartes|json_encode|raw }},
                            backgroundColor: 'rgba(56, 136, 155, 0.5)',
//                         backgroundColor: [
//                            'rgba(56, 136, 155, 0.5)',
//                            'rgba(255, 206, 86, 0.5)',
//                            'rgba(75, 192, 192, 0.5)',
//                            'rgba(153, 102, 255, 0.5)',
//                            'rgba(54, 162, 235, 0.5)',
//                            'rgba(255, 159, 64, 0.5)'
//                    ],
                        },
                        {#{#}
                        {#label: 'Visitas Aula Convivencia',#}
                        {#data: {{ arrPartes|json_encode|raw }},#}
                        {#backgroundColor: 'rgba(75, 192, 192, 0.5)',#}
                        {#}#}
                    ],
                },
                options: {
                    scales: {
                        xAxes: [{
                            barPercentage: {{ barPercentage }}
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            },
                        }],
                    }
                }
            });

            ctx = document.getElementById(\"myChart3\").getContext('2d');
            var myChart3 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: {{ arrMesesSanciones|json_encode|raw }},
                    datasets: [
                        {
                            label: 'Sanciones',
                            data: {{ arrSanciones|json_encode|raw }},
                            backgroundColor: 'rgba(153, 102, 255, 0.5)',
                        },
                    ],
                },
                options: {
                    scales: {
                        xAxes: [{
                            barPercentage: {{ barPercentage }}
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            },
                        }],
                    }
                }
            });

        </script>

        <div class=\"w3-row w3-padding\">
            <div class=\"w3-col contenedorCartaAlumno\">
                <div class=\"w3-card-2 cartaAlumno\">
                    <header class=\"w3-container w3-center\">
                        <h2>Historico Partes</h2>
                    </header>
                    <div class=\"w3-container\">
                        {% set contadorPartes = 0 %}
                        {% set break = false %}
                        {% for parte in alumnoData.partes if not break %}
                            {% set contadorPartes = contadorPartes + 1 %}
                            <p>El {{ parte.fecha|date('d/m/Y') }} tuvo una falta {{ parte.idTipo.tipo }}
                                , {{ parte.idProfesor.getNombreCompleto() }} indicó: <br/>
                                {{ parte.descripcion }}</p>
                            {% if contadorPartes > 9 %}
                                <div class=\"w3-footer w3-center\">
                                    <p>...</p>
                                    <a href=\"{{ path('show_partesAlumno', {'id': alumnoData.alumno.id}) }}\" class=\"w3-button w3-margin\">Mostrar Todos</a>
                                </div>
                                {% set break = true %}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
                <div class=\"w3-card-2 cartaAlumno\">
                    <header class=\"w3-container w3-center\">
                        <h2>Historico Sanciones</h2>
                    </header>
                    <div class=\"w3-container\">
                        {% set contadorSanciones = 0 %}
                        {% set break = false %}
                        {% for sancion in alumnoData.sanciones if not break %}
                            {% set contadorSanciones = contadorSanciones + 1 %}
                            <p>El {{ sancion.fecha|date('d/m/Y') }} tuvo una sanción de tipo {{ sancion.idTipo.tipo }}</p>
                            {% if contadorSanciones > 9 %}
                                <div class=\"w3-footer w3-center\">
                                    <p>...</p>
                                    <a href=\"\" class=\"w3-button w3-margin\">Mostrar Todas</a>
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </main>


{% endblock %}
", "convivencia/alumno/alumno.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\app\\Resources\\views\\convivencia\\alumno\\alumno.html.twig");
    }
}
