<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_272ab9a74fa57a57116322bca59fe5c70533e5afe93a6b6a4b970b4611779c86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fde432adadfa2a1c7a45a62791aa0271017980b49dd2cfcffcc7f47985e29e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fde432adadfa2a1c7a45a62791aa0271017980b49dd2cfcffcc7f47985e29e6->enter($__internal_7fde432adadfa2a1c7a45a62791aa0271017980b49dd2cfcffcc7f47985e29e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_163ada50e73dbb059b47ed47dfbd5d8a1c429b736e00c0616a79f79bd2bf7a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163ada50e73dbb059b47ed47dfbd5d8a1c429b736e00c0616a79f79bd2bf7a4d->enter($__internal_163ada50e73dbb059b47ed47dfbd5d8a1c429b736e00c0616a79f79bd2bf7a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fde432adadfa2a1c7a45a62791aa0271017980b49dd2cfcffcc7f47985e29e6->leave($__internal_7fde432adadfa2a1c7a45a62791aa0271017980b49dd2cfcffcc7f47985e29e6_prof);

        
        $__internal_163ada50e73dbb059b47ed47dfbd5d8a1c429b736e00c0616a79f79bd2bf7a4d->leave($__internal_163ada50e73dbb059b47ed47dfbd5d8a1c429b736e00c0616a79f79bd2bf7a4d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7375ab4bdd6cf2eba4f7660f62633c329869c367e23194e736218ba55e4803b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7375ab4bdd6cf2eba4f7660f62633c329869c367e23194e736218ba55e4803b1->enter($__internal_7375ab4bdd6cf2eba4f7660f62633c329869c367e23194e736218ba55e4803b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_32e3e3cdc6796d2ca072520a1338165623a4efd8ece6fe60f3c48c354b2d500b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e3e3cdc6796d2ca072520a1338165623a4efd8ece6fe60f3c48c354b2d500b->enter($__internal_32e3e3cdc6796d2ca072520a1338165623a4efd8ece6fe60f3c48c354b2d500b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_32e3e3cdc6796d2ca072520a1338165623a4efd8ece6fe60f3c48c354b2d500b->leave($__internal_32e3e3cdc6796d2ca072520a1338165623a4efd8ece6fe60f3c48c354b2d500b_prof);

        
        $__internal_7375ab4bdd6cf2eba4f7660f62633c329869c367e23194e736218ba55e4803b1->leave($__internal_7375ab4bdd6cf2eba4f7660f62633c329869c367e23194e736218ba55e4803b1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
