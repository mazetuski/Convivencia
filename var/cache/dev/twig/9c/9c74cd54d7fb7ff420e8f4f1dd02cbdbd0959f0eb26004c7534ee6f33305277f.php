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
        $__internal_a6f4223817ca16d684c0daf58d6e13ae70df71502ac1ac353abddb6177249f77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6f4223817ca16d684c0daf58d6e13ae70df71502ac1ac353abddb6177249f77->enter($__internal_a6f4223817ca16d684c0daf58d6e13ae70df71502ac1ac353abddb6177249f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/admin/admin.html.twig"));

        $__internal_79aaaafdbd1de476984db48986d54acc4f7dc92e1ece2ceb47fc11f8ca01217a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79aaaafdbd1de476984db48986d54acc4f7dc92e1ece2ceb47fc11f8ca01217a->enter($__internal_79aaaafdbd1de476984db48986d54acc4f7dc92e1ece2ceb47fc11f8ca01217a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "convivencia/admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6f4223817ca16d684c0daf58d6e13ae70df71502ac1ac353abddb6177249f77->leave($__internal_a6f4223817ca16d684c0daf58d6e13ae70df71502ac1ac353abddb6177249f77_prof);

        
        $__internal_79aaaafdbd1de476984db48986d54acc4f7dc92e1ece2ceb47fc11f8ca01217a->leave($__internal_79aaaafdbd1de476984db48986d54acc4f7dc92e1ece2ceb47fc11f8ca01217a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfe72bdd1fb5105cd7d2335f61d328834e70aed9675040b3ce4f2127d94a05ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfe72bdd1fb5105cd7d2335f61d328834e70aed9675040b3ce4f2127d94a05ac->enter($__internal_bfe72bdd1fb5105cd7d2335f61d328834e70aed9675040b3ce4f2127d94a05ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0955c7cf79cfe2f2c7334c17eaa3c32ec1a6f6caa8ba7d7e6fa348cf0a009c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0955c7cf79cfe2f2c7334c17eaa3c32ec1a6f6caa8ba7d7e6fa348cf0a009c5->enter($__internal_b0955c7cf79cfe2f2c7334c17eaa3c32ec1a6f6caa8ba7d7e6fa348cf0a009c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

";
        
        $__internal_b0955c7cf79cfe2f2c7334c17eaa3c32ec1a6f6caa8ba7d7e6fa348cf0a009c5->leave($__internal_b0955c7cf79cfe2f2c7334c17eaa3c32ec1a6f6caa8ba7d7e6fa348cf0a009c5_prof);

        
        $__internal_bfe72bdd1fb5105cd7d2335f61d328834e70aed9675040b3ce4f2127d94a05ac->leave($__internal_bfe72bdd1fb5105cd7d2335f61d328834e70aed9675040b3ce4f2127d94a05ac_prof);

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
