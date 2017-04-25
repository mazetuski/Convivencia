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
        $__internal_b8cb822c72f5bcae14388567772ae7a0e67d09c3e8b1e81f0e714a3ac64fb32e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8cb822c72f5bcae14388567772ae7a0e67d09c3e8b1e81f0e714a3ac64fb32e->enter($__internal_b8cb822c72f5bcae14388567772ae7a0e67d09c3e8b1e81f0e714a3ac64fb32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/index.html.twig"));

        $__internal_209764ed3a544df84a7ae4f9e5393bbab1bd490e81b2daabd7917590460c1828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_209764ed3a544df84a7ae4f9e5393bbab1bd490e81b2daabd7917590460c1828->enter($__internal_209764ed3a544df84a7ae4f9e5393bbab1bd490e81b2daabd7917590460c1828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8cb822c72f5bcae14388567772ae7a0e67d09c3e8b1e81f0e714a3ac64fb32e->leave($__internal_b8cb822c72f5bcae14388567772ae7a0e67d09c3e8b1e81f0e714a3ac64fb32e_prof);

        
        $__internal_209764ed3a544df84a7ae4f9e5393bbab1bd490e81b2daabd7917590460c1828->leave($__internal_209764ed3a544df84a7ae4f9e5393bbab1bd490e81b2daabd7917590460c1828_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_94fa301dbe6918697b4febaa7a6eb637a5f928280ebd65c9b4fa687cae98f014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94fa301dbe6918697b4febaa7a6eb637a5f928280ebd65c9b4fa687cae98f014->enter($__internal_94fa301dbe6918697b4febaa7a6eb637a5f928280ebd65c9b4fa687cae98f014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed6c064bd098863cab44869b9f0bda7024cec32447b04f9b5167e853e0d3fec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6c064bd098863cab44869b9f0bda7024cec32447b04f9b5167e853e0d3fec5->enter($__internal_ed6c064bd098863cab44869b9f0bda7024cec32447b04f9b5167e853e0d3fec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"w3-col s12 w3-center\">
            <form action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\" class=\"w3-container w3-card-4 w3-light-grey w3-display-middle\">
                ";
        // line 8
        echo "                ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 9
            echo "                    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 11
        echo "                <div style=\"text-align: center; padding-top: 20px;\">
                    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/img/logo3.png"), "html", null, true);
        echo "\" />
                </div>

                <div class=\"w3-row w3-section\">
                    <div class=\"w3-col\" style=\"width:50px; color: #38889B;\"><i class=\"w3-xxlarge fa fa-user\"></i></div>
                    <div class=\"w3-rest\">
                        <input class=\"w3-input w3-border\" id=\"username\" name=\"_username\" type=\"text\" placeholder=\"Usuario\">
                    </div>
                </div>

                <div class=\"w3-row w3-section\">
                    <div class=\"w3-col\" style=\"width:50px; color: #38889B;\"><i class=\"w3-xxlarge fa fa-key\"></i></div>
                    <div class=\"w3-rest\">
                        <input class=\"w3-input w3-border\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Contraseña\">
                    </div>
                </div>


                ";
        // line 31
        echo "                <input type=\"hidden\" name=\"_target_path\" value=\"/convivencia/alumno\" />

                <button style=\"background-color: #38889B\" class=\"w3-button w3-block w3-section w3-ripple w3-padding w3-text-white\" type=\"submit\">Entrar</button>
                ";
        // line 35
        echo "            </form>
        <div>
    </div>

";
        
        $__internal_ed6c064bd098863cab44869b9f0bda7024cec32447b04f9b5167e853e0d3fec5->leave($__internal_ed6c064bd098863cab44869b9f0bda7024cec32447b04f9b5167e853e0d3fec5_prof);

        
        $__internal_94fa301dbe6918697b4febaa7a6eb637a5f928280ebd65c9b4fa687cae98f014->leave($__internal_94fa301dbe6918697b4febaa7a6eb637a5f928280ebd65c9b4fa687cae98f014_prof);

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
        return array (  95 => 35,  90 => 31,  69 => 12,  66 => 11,  60 => 9,  57 => 8,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"row\">
        <div class=\"w3-col s12 w3-center\">
            <form action=\"{{ path('login') }}\" method=\"post\" class=\"w3-container w3-card-4 w3-light-grey w3-display-middle\">
                {# Muestra el error en caso de existir#}
                {% if error %}
                    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
                <div style=\"text-align: center; padding-top: 20px;\">
                    <img src=\"{{ asset('bundles/img/logo3.png') }}\" />
                </div>

                <div class=\"w3-row w3-section\">
                    <div class=\"w3-col\" style=\"width:50px; color: #38889B;\"><i class=\"w3-xxlarge fa fa-user\"></i></div>
                    <div class=\"w3-rest\">
                        <input class=\"w3-input w3-border\" id=\"username\" name=\"_username\" type=\"text\" placeholder=\"Usuario\">
                    </div>
                </div>

                <div class=\"w3-row w3-section\">
                    <div class=\"w3-col\" style=\"width:50px; color: #38889B;\"><i class=\"w3-xxlarge fa fa-key\"></i></div>
                    <div class=\"w3-rest\">
                        <input class=\"w3-input w3-border\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Contraseña\">
                    </div>
                </div>


                {# Ruta a la que redirige si hay éxito #}
                <input type=\"hidden\" name=\"_target_path\" value=\"/convivencia/alumno\" />

                <button style=\"background-color: #38889B\" class=\"w3-button w3-block w3-section w3-ripple w3-padding w3-text-white\" type=\"submit\">Entrar</button>
                {#<button type=\"submit\">Entrar</button>#}
            </form>
        <div>
    </div>

{% endblock %}
", "convivencia/index.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\app\\Resources\\views\\convivencia\\index.html.twig");
    }
}
