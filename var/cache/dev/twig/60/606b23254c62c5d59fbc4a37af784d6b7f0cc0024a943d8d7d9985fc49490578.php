<?php

/* convivencia/index.html.twig */
class __TwigTemplate_4402f2266f074200210c930dc043c33ecf16a0519747057703ff2b141bce493d extends Twig_Template
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
        $__internal_e123e9545ad9d8a9464bc0a609cfd78c1d8f5aadfbfa53f3dfa3534daee27aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e123e9545ad9d8a9464bc0a609cfd78c1d8f5aadfbfa53f3dfa3534daee27aca->enter($__internal_e123e9545ad9d8a9464bc0a609cfd78c1d8f5aadfbfa53f3dfa3534daee27aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/index.html.twig"));

        $__internal_49d7eef7f4e5382bdb98aa3bb710fd088d9e00e6ada384f4e2a7f4e41db28d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d7eef7f4e5382bdb98aa3bb710fd088d9e00e6ada384f4e2a7f4e41db28d8e->enter($__internal_49d7eef7f4e5382bdb98aa3bb710fd088d9e00e6ada384f4e2a7f4e41db28d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e123e9545ad9d8a9464bc0a609cfd78c1d8f5aadfbfa53f3dfa3534daee27aca->leave($__internal_e123e9545ad9d8a9464bc0a609cfd78c1d8f5aadfbfa53f3dfa3534daee27aca_prof);

        
        $__internal_49d7eef7f4e5382bdb98aa3bb710fd088d9e00e6ada384f4e2a7f4e41db28d8e->leave($__internal_49d7eef7f4e5382bdb98aa3bb710fd088d9e00e6ada384f4e2a7f4e41db28d8e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a57566519f9f731489301accb6b9b6f13c93f8e8948839d24e13fa005c4686a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a57566519f9f731489301accb6b9b6f13c93f8e8948839d24e13fa005c4686a->enter($__internal_5a57566519f9f731489301accb6b9b6f13c93f8e8948839d24e13fa005c4686a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_48b152e10f1e66a3e0e7214877d86da87b1319f64d7e86525bfe8139921a4f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b152e10f1e66a3e0e7214877d86da87b1319f64d7e86525bfe8139921a4f67->enter($__internal_48b152e10f1e66a3e0e7214877d86da87b1319f64d7e86525bfe8139921a4f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div id=\"login\">
        <form action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\" class=\"w3-container w3-card-4 w3-light-grey w3-text-teal w3-display-middle\">
            ";
        // line 8
        echo "            ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 9
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 11
        echo "            <h1 class=\"w3-center\">Proyecto Convivencia</h1>
            <h2 class=\"w3-center\">Logo</h2>

            <div class=\"w3-row w3-section\">
                <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-user\"></i></div>
                <div class=\"w3-rest\">
                    <input class=\"w3-input w3-border\" id=\"username\" name=\"_username\" type=\"text\" placeholder=\"Usuario\">
                </div>
            </div>

            <div class=\"w3-row w3-section\">
                <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-key\"></i></div>
                <div class=\"w3-rest\">
                    <input class=\"w3-input w3-border\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Contraseña\">
                </div>
            </div>


            ";
        // line 30
        echo "            <input type=\"hidden\" name=\"_target_path\" value=\"/convivencia/alumno\" />

            <button class=\"w3-button w3-block w3-section w3-teal w3-ripple w3-padding\" type=\"submit\">Entrar</button>
            ";
        // line 34
        echo "        </form>
    </div>


";
        
        $__internal_48b152e10f1e66a3e0e7214877d86da87b1319f64d7e86525bfe8139921a4f67->leave($__internal_48b152e10f1e66a3e0e7214877d86da87b1319f64d7e86525bfe8139921a4f67_prof);

        
        $__internal_5a57566519f9f731489301accb6b9b6f13c93f8e8948839d24e13fa005c4686a->leave($__internal_5a57566519f9f731489301accb6b9b6f13c93f8e8948839d24e13fa005c4686a_prof);

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
        return array (  91 => 34,  86 => 30,  66 => 11,  60 => 9,  57 => 8,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

    <div id=\"login\">
        <form action=\"{{ path('login') }}\" method=\"post\" class=\"w3-container w3-card-4 w3-light-grey w3-text-teal w3-display-middle\">
            {# Muestra el error en caso de existir#}
            {% if error %}
                <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}
            <h1 class=\"w3-center\">Proyecto Convivencia</h1>
            <h2 class=\"w3-center\">Logo</h2>

            <div class=\"w3-row w3-section\">
                <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-user\"></i></div>
                <div class=\"w3-rest\">
                    <input class=\"w3-input w3-border\" id=\"username\" name=\"_username\" type=\"text\" placeholder=\"Usuario\">
                </div>
            </div>

            <div class=\"w3-row w3-section\">
                <div class=\"w3-col\" style=\"width:50px\"><i class=\"w3-xxlarge fa fa-key\"></i></div>
                <div class=\"w3-rest\">
                    <input class=\"w3-input w3-border\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Contraseña\">
                </div>
            </div>


            {# Ruta a la que redirige si hay éxito #}
            <input type=\"hidden\" name=\"_target_path\" value=\"/convivencia/alumno\" />

            <button class=\"w3-button w3-block w3-section w3-teal w3-ripple w3-padding\" type=\"submit\">Entrar</button>
            {#<button type=\"submit\">Entrar</button>#}
        </form>
    </div>


{% endblock %}
", "convivencia/index.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\app\\Resources\\views\\convivencia\\index.html.twig");
    }
}
