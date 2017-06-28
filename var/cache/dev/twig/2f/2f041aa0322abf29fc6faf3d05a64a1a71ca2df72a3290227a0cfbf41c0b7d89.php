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
        $__internal_51280212005737dbd0a03b7ac768368acffe579ed379e6911e3a0b8d434d137f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51280212005737dbd0a03b7ac768368acffe579ed379e6911e3a0b8d434d137f->enter($__internal_51280212005737dbd0a03b7ac768368acffe579ed379e6911e3a0b8d434d137f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/admin/admin.html.twig"));

        $__internal_f2f13ce57ccf3f0d2f67f4aab5afaf94f1e39a70bc0c406ba1031394a9ca8ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f13ce57ccf3f0d2f67f4aab5afaf94f1e39a70bc0c406ba1031394a9ca8ad9->enter($__internal_f2f13ce57ccf3f0d2f67f4aab5afaf94f1e39a70bc0c406ba1031394a9ca8ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51280212005737dbd0a03b7ac768368acffe579ed379e6911e3a0b8d434d137f->leave($__internal_51280212005737dbd0a03b7ac768368acffe579ed379e6911e3a0b8d434d137f_prof);

        
        $__internal_f2f13ce57ccf3f0d2f67f4aab5afaf94f1e39a70bc0c406ba1031394a9ca8ad9->leave($__internal_f2f13ce57ccf3f0d2f67f4aab5afaf94f1e39a70bc0c406ba1031394a9ca8ad9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_16060721684b4c5b4c41632215be4a573520ee2ede936e4a7478da02aba281ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16060721684b4c5b4c41632215be4a573520ee2ede936e4a7478da02aba281ef->enter($__internal_16060721684b4c5b4c41632215be4a573520ee2ede936e4a7478da02aba281ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_51454dccae6df241690eef02b81c21f2a3596bbc1e70228f5580643468f0b0db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51454dccae6df241690eef02b81c21f2a3596bbc1e70228f5580643468f0b0db->enter($__internal_51454dccae6df241690eef02b81c21f2a3596bbc1e70228f5580643468f0b0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_51454dccae6df241690eef02b81c21f2a3596bbc1e70228f5580643468f0b0db->leave($__internal_51454dccae6df241690eef02b81c21f2a3596bbc1e70228f5580643468f0b0db_prof);

        
        $__internal_16060721684b4c5b4c41632215be4a573520ee2ede936e4a7478da02aba281ef->leave($__internal_16060721684b4c5b4c41632215be4a573520ee2ede936e4a7478da02aba281ef_prof);

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
