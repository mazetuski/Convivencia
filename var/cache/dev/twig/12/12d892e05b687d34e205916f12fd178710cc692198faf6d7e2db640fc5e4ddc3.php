<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_cd8d590ed87c3b91e9c8c7c6a93a4503ac007a38d9622590a0f77b8f12473e5c extends Twig_Template
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
        $__internal_a1dfd476a1de4d4c9dbf0bc8c5c7391296daba5fe7c080f93e303e4e39fb4778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1dfd476a1de4d4c9dbf0bc8c5c7391296daba5fe7c080f93e303e4e39fb4778->enter($__internal_a1dfd476a1de4d4c9dbf0bc8c5c7391296daba5fe7c080f93e303e4e39fb4778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7bdef3fbd3de3b0a3397f781a53cbc85ecd62e4f1f96436e0975367eea8f67af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bdef3fbd3de3b0a3397f781a53cbc85ecd62e4f1f96436e0975367eea8f67af->enter($__internal_7bdef3fbd3de3b0a3397f781a53cbc85ecd62e4f1f96436e0975367eea8f67af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1dfd476a1de4d4c9dbf0bc8c5c7391296daba5fe7c080f93e303e4e39fb4778->leave($__internal_a1dfd476a1de4d4c9dbf0bc8c5c7391296daba5fe7c080f93e303e4e39fb4778_prof);

        
        $__internal_7bdef3fbd3de3b0a3397f781a53cbc85ecd62e4f1f96436e0975367eea8f67af->leave($__internal_7bdef3fbd3de3b0a3397f781a53cbc85ecd62e4f1f96436e0975367eea8f67af_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_633c416bc5d2b97af4b0a5e7f6f85d2c41e0db6aa414ee4b7385c1c32dbf6126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_633c416bc5d2b97af4b0a5e7f6f85d2c41e0db6aa414ee4b7385c1c32dbf6126->enter($__internal_633c416bc5d2b97af4b0a5e7f6f85d2c41e0db6aa414ee4b7385c1c32dbf6126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fd541cc9f4c7eac979a3a385dd30845e23f718ad05a964500634e2582de9e4b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd541cc9f4c7eac979a3a385dd30845e23f718ad05a964500634e2582de9e4b4->enter($__internal_fd541cc9f4c7eac979a3a385dd30845e23f718ad05a964500634e2582de9e4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_fd541cc9f4c7eac979a3a385dd30845e23f718ad05a964500634e2582de9e4b4->leave($__internal_fd541cc9f4c7eac979a3a385dd30845e23f718ad05a964500634e2582de9e4b4_prof);

        
        $__internal_633c416bc5d2b97af4b0a5e7f6f85d2c41e0db6aa414ee4b7385c1c32dbf6126->leave($__internal_633c416bc5d2b97af4b0a5e7f6f85d2c41e0db6aa414ee4b7385c1c32dbf6126_prof);

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
