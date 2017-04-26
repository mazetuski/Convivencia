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
        $__internal_e5b61133a209b9426e55da631287c2d11f7af36b92a4223873928165defc1fa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b61133a209b9426e55da631287c2d11f7af36b92a4223873928165defc1fa9->enter($__internal_e5b61133a209b9426e55da631287c2d11f7af36b92a4223873928165defc1fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_54d7cfbce9a67f3d5c7904dd1c9e57aa7acef03433483b593da4231e0a087769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d7cfbce9a67f3d5c7904dd1c9e57aa7acef03433483b593da4231e0a087769->enter($__internal_54d7cfbce9a67f3d5c7904dd1c9e57aa7acef03433483b593da4231e0a087769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5b61133a209b9426e55da631287c2d11f7af36b92a4223873928165defc1fa9->leave($__internal_e5b61133a209b9426e55da631287c2d11f7af36b92a4223873928165defc1fa9_prof);

        
        $__internal_54d7cfbce9a67f3d5c7904dd1c9e57aa7acef03433483b593da4231e0a087769->leave($__internal_54d7cfbce9a67f3d5c7904dd1c9e57aa7acef03433483b593da4231e0a087769_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f8374d4edb984faecdd6fad28a1d98895d1ec3b9f8f36428229ee2338a9dda09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8374d4edb984faecdd6fad28a1d98895d1ec3b9f8f36428229ee2338a9dda09->enter($__internal_f8374d4edb984faecdd6fad28a1d98895d1ec3b9f8f36428229ee2338a9dda09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e8034fc41cd8f05e2d5aac5fe4e21c6b04b8e3158d51ae1970a536e61f466419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8034fc41cd8f05e2d5aac5fe4e21c6b04b8e3158d51ae1970a536e61f466419->enter($__internal_e8034fc41cd8f05e2d5aac5fe4e21c6b04b8e3158d51ae1970a536e61f466419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e8034fc41cd8f05e2d5aac5fe4e21c6b04b8e3158d51ae1970a536e61f466419->leave($__internal_e8034fc41cd8f05e2d5aac5fe4e21c6b04b8e3158d51ae1970a536e61f466419_prof);

        
        $__internal_f8374d4edb984faecdd6fad28a1d98895d1ec3b9f8f36428229ee2338a9dda09->leave($__internal_f8374d4edb984faecdd6fad28a1d98895d1ec3b9f8f36428229ee2338a9dda09_prof);

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
