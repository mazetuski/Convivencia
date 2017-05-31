<?php

/* convivencia/admin/admin.html.twig */
class __TwigTemplate_8fa6b0701f0aa48384b49dac89de083ae4a6492b07b284ed113e367f3d5d308a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/admin/admin.html.twig", 1);
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
        $__internal_1f6d11f94a6764745cd46b2c077c6b7f9ea9f4b1c91db8b6ec42265fa069eb14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f6d11f94a6764745cd46b2c077c6b7f9ea9f4b1c91db8b6ec42265fa069eb14->enter($__internal_1f6d11f94a6764745cd46b2c077c6b7f9ea9f4b1c91db8b6ec42265fa069eb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/admin/admin.html.twig"));

        $__internal_291005001c747e67e20be70fd39cc51f13cc354f9d4b80f0edf531ffa084de45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291005001c747e67e20be70fd39cc51f13cc354f9d4b80f0edf531ffa084de45->enter($__internal_291005001c747e67e20be70fd39cc51f13cc354f9d4b80f0edf531ffa084de45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f6d11f94a6764745cd46b2c077c6b7f9ea9f4b1c91db8b6ec42265fa069eb14->leave($__internal_1f6d11f94a6764745cd46b2c077c6b7f9ea9f4b1c91db8b6ec42265fa069eb14_prof);

        
        $__internal_291005001c747e67e20be70fd39cc51f13cc354f9d4b80f0edf531ffa084de45->leave($__internal_291005001c747e67e20be70fd39cc51f13cc354f9d4b80f0edf531ffa084de45_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_610d156db000c30789307baa4f0539adb03061be3ad9c567a71be11e57afceea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_610d156db000c30789307baa4f0539adb03061be3ad9c567a71be11e57afceea->enter($__internal_610d156db000c30789307baa4f0539adb03061be3ad9c567a71be11e57afceea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66f9debe946d79057d645e03486674283567ab5d9e9ad976896f3ce16b239cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f9debe946d79057d645e03486674283567ab5d9e9ad976896f3ce16b239cc0->enter($__internal_66f9debe946d79057d645e03486674283567ab5d9e9ad976896f3ce16b239cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row cardAdminIndex w3-center\">
        <div class=\"w3-col l3\">
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_partes");
        echo "\"><span class=\"card-title center\">Partes Iniciados</span></a>
            <p>";
        // line 8
        echo twig_escape_filter($this->env, ($context["partesIniciados"] ?? $this->getContext($context, "partesIniciados")), "html", null, true);
        echo "</p>
        </div>
        <div class=\"w3-col l3\">
            <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_sanciones");
        echo "\"><span class=\"card-title center\">Sanciones Iniciadas</span></a>
            <p>";
        // line 12
        echo twig_escape_filter($this->env, ($context["sancionesIniciadas"] ?? $this->getContext($context, "sancionesIniciadas")), "html", null, true);
        echo "</p>
        </div>
        <div class=\"w3-col l3\">
            <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_diario");
        echo "\"><span class=\"card-title center\">Aula convivencia aforo</span></a>
            <p>";
        // line 16
        echo twig_escape_filter($this->env, ($context["diarioNow"] ?? $this->getContext($context, "diarioNow")), "html", null, true);
        echo "</p>
        </div>
    </div>

";
        
        $__internal_66f9debe946d79057d645e03486674283567ab5d9e9ad976896f3ce16b239cc0->leave($__internal_66f9debe946d79057d645e03486674283567ab5d9e9ad976896f3ce16b239cc0_prof);

        
        $__internal_610d156db000c30789307baa4f0539adb03061be3ad9c567a71be11e57afceea->leave($__internal_610d156db000c30789307baa4f0539adb03061be3ad9c567a71be11e57afceea_prof);

    }

    public function getTemplateName()
    {
        return "convivencia/admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  74 => 15,  68 => 12,  64 => 11,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

    <div class=\"row cardAdminIndex w3-center\">
        <div class=\"w3-col l3\">
            <a href=\"{{ path('gestion_partes') }}\"><span class=\"card-title center\">Partes Iniciados</span></a>
            <p>{{ partesIniciados }}</p>
        </div>
        <div class=\"w3-col l3\">
            <a href=\"{{ path('gestion_sanciones') }}\"><span class=\"card-title center\">Sanciones Iniciadas</span></a>
            <p>{{ sancionesIniciadas }}</p>
        </div>
        <div class=\"w3-col l3\">
            <a href=\"{{ path('show_diario') }}\"><span class=\"card-title center\">Aula convivencia aforo</span></a>
            <p>{{ diarioNow }}</p>
        </div>
    </div>

{% endblock %}
", "convivencia/admin/admin.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\app\\Resources\\views\\convivencia\\admin\\admin.html.twig");
    }
}
