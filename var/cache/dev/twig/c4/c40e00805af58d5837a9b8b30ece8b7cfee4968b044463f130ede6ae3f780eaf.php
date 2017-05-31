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
        $__internal_cbf2c4b0b8c2f8e447a046ace80be971a921ff7c4f1f4d14018f2cd3e045baa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbf2c4b0b8c2f8e447a046ace80be971a921ff7c4f1f4d14018f2cd3e045baa0->enter($__internal_cbf2c4b0b8c2f8e447a046ace80be971a921ff7c4f1f4d14018f2cd3e045baa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/index.html.twig"));

        $__internal_9ffb42e29024b350ed7e6fc4c85d92101fdd1ef9947aba8d5abf619f21ae7851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffb42e29024b350ed7e6fc4c85d92101fdd1ef9947aba8d5abf619f21ae7851->enter($__internal_9ffb42e29024b350ed7e6fc4c85d92101fdd1ef9947aba8d5abf619f21ae7851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbf2c4b0b8c2f8e447a046ace80be971a921ff7c4f1f4d14018f2cd3e045baa0->leave($__internal_cbf2c4b0b8c2f8e447a046ace80be971a921ff7c4f1f4d14018f2cd3e045baa0_prof);

        
        $__internal_9ffb42e29024b350ed7e6fc4c85d92101fdd1ef9947aba8d5abf619f21ae7851->leave($__internal_9ffb42e29024b350ed7e6fc4c85d92101fdd1ef9947aba8d5abf619f21ae7851_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4493c24c212db01ef219a27accd2baf3ceac85ffde4238d3c19b5616ceb29b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4493c24c212db01ef219a27accd2baf3ceac85ffde4238d3c19b5616ceb29b5a->enter($__internal_4493c24c212db01ef219a27accd2baf3ceac85ffde4238d3c19b5616ceb29b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fa72a4d822a3feb58912d9ffff225df38fa6f123ecf4f93f473c16cb9cf5846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa72a4d822a3feb58912d9ffff225df38fa6f123ecf4f93f473c16cb9cf5846->enter($__internal_1fa72a4d822a3feb58912d9ffff225df38fa6f123ecf4f93f473c16cb9cf5846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"wall\" id=\"intro\" style=\"background: url('";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/class.jpeg"), "html", null, true);
        echo "')\">
        <div class=\"overlay\">
            <div class=\"w3-col m4 w3-display-middle\">
                <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
                    ";
        // line 10
        echo "                    ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 11
            echo "                        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 13
        echo "                    <div style=\"text-align: center; padding-top: 20px;\">
                        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo3.png"), "html", null, true);
        echo "\"/>
                    </div>

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


                    ";
        // line 37
        echo "                    <input type=\"hidden\" name=\"_target_path\" value=\"/alumno\"/>

                    <button style=\"background-color: #38889B\"
                            class=\"w3-button w3-block w3-section w3-ripple w3-padding w3-text-white\" type=\"submit\">
                        Entrar
                    </button>
                    ";
        // line 44
        echo "                </form>
            </div>
        </div>
    </div>


";
        
        $__internal_1fa72a4d822a3feb58912d9ffff225df38fa6f123ecf4f93f473c16cb9cf5846->leave($__internal_1fa72a4d822a3feb58912d9ffff225df38fa6f123ecf4f93f473c16cb9cf5846_prof);

        
        $__internal_4493c24c212db01ef219a27accd2baf3ceac85ffde4238d3c19b5616ceb29b5a->leave($__internal_4493c24c212db01ef219a27accd2baf3ceac85ffde4238d3c19b5616ceb29b5a_prof);

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
        return array (  107 => 44,  99 => 37,  74 => 14,  71 => 13,  65 => 11,  62 => 10,  58 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
            <div class=\"w3-col m4 w3-display-middle\">
                <form action=\"{{ path('login') }}\" method=\"post\">
                    {# Muestra el error en caso de existir#}
                    {% if error %}
                        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}
                    <div style=\"text-align: center; padding-top: 20px;\">
                        <img src=\"{{ asset('img/logo3.png') }}\"/>
                    </div>

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
