<?php

/* convivencia/admin/admin.html.twig */
class __TwigTemplate_e732985e17d213ee9e433a887f42fcf8a69b5a33264827eb2cdfc33a26370739 extends Twig_Template
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
        $__internal_cebbf57cfaff98195c1440b945d40e1a8435bd85abc7c0b02dce1c06fcc1b018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cebbf57cfaff98195c1440b945d40e1a8435bd85abc7c0b02dce1c06fcc1b018->enter($__internal_cebbf57cfaff98195c1440b945d40e1a8435bd85abc7c0b02dce1c06fcc1b018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/admin/admin.html.twig"));

        $__internal_2622e050f5ba18d1bfbe5a353a66c7d10ea7267acb252794330bd5d80635d269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2622e050f5ba18d1bfbe5a353a66c7d10ea7267acb252794330bd5d80635d269->enter($__internal_2622e050f5ba18d1bfbe5a353a66c7d10ea7267acb252794330bd5d80635d269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cebbf57cfaff98195c1440b945d40e1a8435bd85abc7c0b02dce1c06fcc1b018->leave($__internal_cebbf57cfaff98195c1440b945d40e1a8435bd85abc7c0b02dce1c06fcc1b018_prof);

        
        $__internal_2622e050f5ba18d1bfbe5a353a66c7d10ea7267acb252794330bd5d80635d269->leave($__internal_2622e050f5ba18d1bfbe5a353a66c7d10ea7267acb252794330bd5d80635d269_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7af56f743449692ed661ac581f73188ad573472bf6c54f917f56b3cb4da4a1b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7af56f743449692ed661ac581f73188ad573472bf6c54f917f56b3cb4da4a1b5->enter($__internal_7af56f743449692ed661ac581f73188ad573472bf6c54f917f56b3cb4da4a1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab6493a42930158b8375a3c1a83293a7a0d6356310019b2f2df9c730cc83280f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6493a42930158b8375a3c1a83293a7a0d6356310019b2f2df9c730cc83280f->enter($__internal_ab6493a42930158b8375a3c1a83293a7a0d6356310019b2f2df9c730cc83280f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

";
        
        $__internal_ab6493a42930158b8375a3c1a83293a7a0d6356310019b2f2df9c730cc83280f->leave($__internal_ab6493a42930158b8375a3c1a83293a7a0d6356310019b2f2df9c730cc83280f_prof);

        
        $__internal_7af56f743449692ed661ac581f73188ad573472bf6c54f917f56b3cb4da4a1b5->leave($__internal_7af56f743449692ed661ac581f73188ad573472bf6c54f917f56b3cb4da4a1b5_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
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


{% endblock %}
", "convivencia/admin/admin.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\app\\Resources\\views\\convivencia\\admin\\admin.html.twig");
    }
}
