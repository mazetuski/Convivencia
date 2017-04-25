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
        $__internal_a41d163685166d3585a7847264831b7ffa260717afeb0673930e4f708bc34a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a41d163685166d3585a7847264831b7ffa260717afeb0673930e4f708bc34a12->enter($__internal_a41d163685166d3585a7847264831b7ffa260717afeb0673930e4f708bc34a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e96dc4510ef2cddff39f4affa1cf146f67d4c9cb47736a3974766c75ed693e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96dc4510ef2cddff39f4affa1cf146f67d4c9cb47736a3974766c75ed693e4f->enter($__internal_e96dc4510ef2cddff39f4affa1cf146f67d4c9cb47736a3974766c75ed693e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a41d163685166d3585a7847264831b7ffa260717afeb0673930e4f708bc34a12->leave($__internal_a41d163685166d3585a7847264831b7ffa260717afeb0673930e4f708bc34a12_prof);

        
        $__internal_e96dc4510ef2cddff39f4affa1cf146f67d4c9cb47736a3974766c75ed693e4f->leave($__internal_e96dc4510ef2cddff39f4affa1cf146f67d4c9cb47736a3974766c75ed693e4f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc84b3b9ea787f162b3ff94694b662038f998b2c44c6f00d59620fe559b4cbd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc84b3b9ea787f162b3ff94694b662038f998b2c44c6f00d59620fe559b4cbd7->enter($__internal_bc84b3b9ea787f162b3ff94694b662038f998b2c44c6f00d59620fe559b4cbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6e291df30d4a5a3f0b5a22650fd2d768edbb46bb5f579c6d3aa22626b989292b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e291df30d4a5a3f0b5a22650fd2d768edbb46bb5f579c6d3aa22626b989292b->enter($__internal_6e291df30d4a5a3f0b5a22650fd2d768edbb46bb5f579c6d3aa22626b989292b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_6e291df30d4a5a3f0b5a22650fd2d768edbb46bb5f579c6d3aa22626b989292b->leave($__internal_6e291df30d4a5a3f0b5a22650fd2d768edbb46bb5f579c6d3aa22626b989292b_prof);

        
        $__internal_bc84b3b9ea787f162b3ff94694b662038f998b2c44c6f00d59620fe559b4cbd7->leave($__internal_bc84b3b9ea787f162b3ff94694b662038f998b2c44c6f00d59620fe559b4cbd7_prof);

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
