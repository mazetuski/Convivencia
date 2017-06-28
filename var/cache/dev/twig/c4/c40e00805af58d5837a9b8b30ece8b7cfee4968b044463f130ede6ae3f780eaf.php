<?php

/* convivencia/index.html.twig */
class __TwigTemplate_a960d04e3f184f0698777d344c3a5d6d05ea5f0484895055a031498800eb811c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/index.html.twig", 1);
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
        $__internal_62d2cae1c3c28b1db5df1bba21232826a15a1b9b398951a519684af65ffa1e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d2cae1c3c28b1db5df1bba21232826a15a1b9b398951a519684af65ffa1e35->enter($__internal_62d2cae1c3c28b1db5df1bba21232826a15a1b9b398951a519684af65ffa1e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/index.html.twig"));

        $__internal_ca9e51ffc5e7913ce0a7f56231f9c71e5e7594a57fae976b6f4e8445614c044c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9e51ffc5e7913ce0a7f56231f9c71e5e7594a57fae976b6f4e8445614c044c->enter($__internal_ca9e51ffc5e7913ce0a7f56231f9c71e5e7594a57fae976b6f4e8445614c044c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62d2cae1c3c28b1db5df1bba21232826a15a1b9b398951a519684af65ffa1e35->leave($__internal_62d2cae1c3c28b1db5df1bba21232826a15a1b9b398951a519684af65ffa1e35_prof);

        
        $__internal_ca9e51ffc5e7913ce0a7f56231f9c71e5e7594a57fae976b6f4e8445614c044c->leave($__internal_ca9e51ffc5e7913ce0a7f56231f9c71e5e7594a57fae976b6f4e8445614c044c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9dc0ff3d3ff811a4e732456b75f0af947ca2fdc6b7b51e1059e164e8d6f3770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9dc0ff3d3ff811a4e732456b75f0af947ca2fdc6b7b51e1059e164e8d6f3770->enter($__internal_d9dc0ff3d3ff811a4e732456b75f0af947ca2fdc6b7b51e1059e164e8d6f3770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3700885b11613c7902ec215a5c8212d26433da114de583689b88a3918d077e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3700885b11613c7902ec215a5c8212d26433da114de583689b88a3918d077e19->enter($__internal_3700885b11613c7902ec215a5c8212d26433da114de583689b88a3918d077e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"wall\" id=\"intro\" style=\"background: url('";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/class.jpeg"), "html", null, true);
        echo "')\">
        <div class=\"overlay\">
            <div class=\"w3-col l4 m6 s10 w3-display-middle\">
                <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">

                    <div style=\"text-align: center; padding-top: 20px;\">
                        <img id=\"imgIntro\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo2.svg"), "html", null, true);
        echo "\"/>
                    </div>

                    ";
        // line 15
        echo "                    ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 16
            echo "                        <div class=\"w3-panel w3-pale-red w3-round-large\">
                            <p class=\"w3-center\">Credenciales inválidos</p>
                        </div>
                    ";
        }
        // line 20
        echo "
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "login"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 22
            echo "                        <div class=\"w3-panel w3-pale-green w3-round-large\">
                            <p class=\"w3-center\">";
            // line 23
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "loginError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 28
            echo "                        <div class=\"w3-panel w3-pale-red w3-round-large\">
                            <p class=\"w3-center\">";
            // line 29
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                    <div class=\"w3-row w3-section\">
                        <div class=\"w3-col\" style=\"width:50px; color: #38889B;\"><i class=\"w3-xxlarge fa fa-user\"></i>
                        </div>
                        <div class=\"w3-rest\">
                            <input class=\"w3-input w3-border\" id=\"username\" name=\"_username\" type=\"text\"
                                   placeholder=\"Usuario\">
                        </div>
                    </div>

                    <div class=\"w3-row w3-section\">
                        <div class=\"w3-col\" style=\"width:50px; color: #38889B;\"><i class=\"w3-xxlarge fa fa-key\"></i>
                        </div>
                        <div class=\"w3-rest\">
                            <input class=\"w3-input w3-border\" type=\"password\" id=\"password\" name=\"_password\"
                                   placeholder=\"Contraseña\">
                        </div>
                    </div>

                    <div class=\"w3-right-align\" style=\"color: white;\">
                        <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recuperarPassword");
        echo "\">Recuperar contraseña</a>
                    </div>

                    ";
        // line 56
        echo "                    <input type=\"hidden\" name=\"_target_path\" value=\"/alumno\"/>

                    <button style=\"background-color: #38889B\"
                            class=\"w3-button w3-block w3-section w3-ripple w3-padding w3-text-white\" type=\"submit\">
                        Entrar
                    </button>
                    ";
        // line 63
        echo "                </form>
            </div>
        </div>
    </div>


";
        
        $__internal_3700885b11613c7902ec215a5c8212d26433da114de583689b88a3918d077e19->leave($__internal_3700885b11613c7902ec215a5c8212d26433da114de583689b88a3918d077e19_prof);

        
        $__internal_d9dc0ff3d3ff811a4e732456b75f0af947ca2fdc6b7b51e1059e164e8d6f3770->leave($__internal_d9dc0ff3d3ff811a4e732456b75f0af947ca2fdc6b7b51e1059e164e8d6f3770_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 63,  145 => 56,  139 => 52,  117 => 32,  108 => 29,  105 => 28,  101 => 27,  98 => 26,  89 => 23,  86 => 22,  82 => 21,  79 => 20,  73 => 16,  70 => 15,  64 => 11,  58 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

    <div class=\"wall\" id=\"intro\" style=\"background: url('{{ asset('img/class.jpeg') }}')\">
        <div class=\"overlay\">
            <div class=\"w3-col l4 m6 s10 w3-display-middle\">
                <form action=\"{{ path('login') }}\" method=\"post\">

                    <div style=\"text-align: center; padding-top: 20px;\">
                        <img id=\"imgIntro\" src=\"{{ asset('img/logo2.svg') }}\"/>
                    </div>

                    {# Muestra el error en caso de existir#}
                    {% if error %}
                        <div class=\"w3-panel w3-pale-red w3-round-large\">
                            <p class=\"w3-center\">Credenciales inválidos</p>
                        </div>
                    {% endif %}

                    {% for flash_message in app.session.flashBag.get('login') %}
                        <div class=\"w3-panel w3-pale-green w3-round-large\">
                            <p class=\"w3-center\">{{ flash_message }}</p>
                        </div>
                    {% endfor %}

                    {% for flash_message in app.session.flashBag.get('loginError') %}
                        <div class=\"w3-panel w3-pale-red w3-round-large\">
                            <p class=\"w3-center\">{{ flash_message }}</p>
                        </div>
                    {% endfor %}

                    <div class=\"w3-row w3-section\">
                        <div class=\"w3-col\" style=\"width:50px; color: #38889B;\"><i class=\"w3-xxlarge fa fa-user\"></i>
                        </div>
                        <div class=\"w3-rest\">
                            <input class=\"w3-input w3-border\" id=\"username\" name=\"_username\" type=\"text\"
                                   placeholder=\"Usuario\">
                        </div>
                    </div>

                    <div class=\"w3-row w3-section\">
                        <div class=\"w3-col\" style=\"width:50px; color: #38889B;\"><i class=\"w3-xxlarge fa fa-key\"></i>
                        </div>
                        <div class=\"w3-rest\">
                            <input class=\"w3-input w3-border\" type=\"password\" id=\"password\" name=\"_password\"
                                   placeholder=\"Contraseña\">
                        </div>
                    </div>

                    <div class=\"w3-right-align\" style=\"color: white;\">
                        <a href=\"{{ path('recuperarPassword') }}\">Recuperar contraseña</a>
                    </div>

                    {# Ruta a la que redirige si hay éxito #}
                    <input type=\"hidden\" name=\"_target_path\" value=\"/alumno\"/>

                    <button style=\"background-color: #38889B\"
                            class=\"w3-button w3-block w3-section w3-ripple w3-padding w3-text-white\" type=\"submit\">
                        Entrar
                    </button>
                    {#<button type=\"submit\">Entrar</button>#}
                </form>
            </div>
        </div>
    </div>


{% endblock %}
", "convivencia/index.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\app\\Resources\\views\\convivencia\\index.html.twig");
    }
}
