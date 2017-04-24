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
        $__internal_bacd9a93697c1041bf789d7d62c6ba5eb609abcad2adf138643f191a4365a7b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bacd9a93697c1041bf789d7d62c6ba5eb609abcad2adf138643f191a4365a7b6->enter($__internal_bacd9a93697c1041bf789d7d62c6ba5eb609abcad2adf138643f191a4365a7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/admin/admin.html.twig"));

        $__internal_36bcbdfbdb1c16124ac2827c4854361ae188b707a9d9d7e3f730bda9ddd6e058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36bcbdfbdb1c16124ac2827c4854361ae188b707a9d9d7e3f730bda9ddd6e058->enter($__internal_36bcbdfbdb1c16124ac2827c4854361ae188b707a9d9d7e3f730bda9ddd6e058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bacd9a93697c1041bf789d7d62c6ba5eb609abcad2adf138643f191a4365a7b6->leave($__internal_bacd9a93697c1041bf789d7d62c6ba5eb609abcad2adf138643f191a4365a7b6_prof);

        
        $__internal_36bcbdfbdb1c16124ac2827c4854361ae188b707a9d9d7e3f730bda9ddd6e058->leave($__internal_36bcbdfbdb1c16124ac2827c4854361ae188b707a9d9d7e3f730bda9ddd6e058_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e92b6d7c4f942dd15ebee12a4b21154a70655a0411cfd02b412f2f2d96e0a1a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e92b6d7c4f942dd15ebee12a4b21154a70655a0411cfd02b412f2f2d96e0a1a2->enter($__internal_e92b6d7c4f942dd15ebee12a4b21154a70655a0411cfd02b412f2f2d96e0a1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db2c6f253e705cde48399ed818f9e002af64c86df2baaeefce01703fa282f59c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2c6f253e705cde48399ed818f9e002af64c86df2baaeefce01703fa282f59c->enter($__internal_db2c6f253e705cde48399ed818f9e002af64c86df2baaeefce01703fa282f59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

";
        
        $__internal_db2c6f253e705cde48399ed818f9e002af64c86df2baaeefce01703fa282f59c->leave($__internal_db2c6f253e705cde48399ed818f9e002af64c86df2baaeefce01703fa282f59c_prof);

        
        $__internal_e92b6d7c4f942dd15ebee12a4b21154a70655a0411cfd02b412f2f2d96e0a1a2->leave($__internal_e92b6d7c4f942dd15ebee12a4b21154a70655a0411cfd02b412f2f2d96e0a1a2_prof);

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
