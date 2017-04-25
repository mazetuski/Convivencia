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
        $__internal_cec5e87e8ccce53deb797741704962fe0a94741ac5acbf31145218db6164cbd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec5e87e8ccce53deb797741704962fe0a94741ac5acbf31145218db6164cbd1->enter($__internal_cec5e87e8ccce53deb797741704962fe0a94741ac5acbf31145218db6164cbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/admin/admin.html.twig"));

        $__internal_5bc8ff92abc8b22fd67fb04b030d20c1f3b07b3de21428bb2ce62efff3207e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc8ff92abc8b22fd67fb04b030d20c1f3b07b3de21428bb2ce62efff3207e77->enter($__internal_5bc8ff92abc8b22fd67fb04b030d20c1f3b07b3de21428bb2ce62efff3207e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cec5e87e8ccce53deb797741704962fe0a94741ac5acbf31145218db6164cbd1->leave($__internal_cec5e87e8ccce53deb797741704962fe0a94741ac5acbf31145218db6164cbd1_prof);

        
        $__internal_5bc8ff92abc8b22fd67fb04b030d20c1f3b07b3de21428bb2ce62efff3207e77->leave($__internal_5bc8ff92abc8b22fd67fb04b030d20c1f3b07b3de21428bb2ce62efff3207e77_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9e4da894373a7451236a673fc0b92cefa0526f7546f3979cff762d4b5dd8c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e4da894373a7451236a673fc0b92cefa0526f7546f3979cff762d4b5dd8c53->enter($__internal_d9e4da894373a7451236a673fc0b92cefa0526f7546f3979cff762d4b5dd8c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_404f7e17ae8b6a51069a08f5b06b7fb4a2c027192e95e5f2d9c0d742169c6dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404f7e17ae8b6a51069a08f5b06b7fb4a2c027192e95e5f2d9c0d742169c6dd2->enter($__internal_404f7e17ae8b6a51069a08f5b06b7fb4a2c027192e95e5f2d9c0d742169c6dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

";
        
        $__internal_404f7e17ae8b6a51069a08f5b06b7fb4a2c027192e95e5f2d9c0d742169c6dd2->leave($__internal_404f7e17ae8b6a51069a08f5b06b7fb4a2c027192e95e5f2d9c0d742169c6dd2_prof);

        
        $__internal_d9e4da894373a7451236a673fc0b92cefa0526f7546f3979cff762d4b5dd8c53->leave($__internal_d9e4da894373a7451236a673fc0b92cefa0526f7546f3979cff762d4b5dd8c53_prof);

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
