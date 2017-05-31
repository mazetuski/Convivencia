<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_29efa0b5ab747b6850f69bc372974eb3a9389433cdcf76e0b40e6c61d7db44af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c49489b17cd7ce3952bff71024cf762ab139bad637d1cdb32410e88fa33cb9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c49489b17cd7ce3952bff71024cf762ab139bad637d1cdb32410e88fa33cb9a->enter($__internal_2c49489b17cd7ce3952bff71024cf762ab139bad637d1cdb32410e88fa33cb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_b7afb86670c94525c2ee4329ad61297f2f97434fa3e74df8e2388388f5cce1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7afb86670c94525c2ee4329ad61297f2f97434fa3e74df8e2388388f5cce1db->enter($__internal_b7afb86670c94525c2ee4329ad61297f2f97434fa3e74df8e2388388f5cce1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_2c49489b17cd7ce3952bff71024cf762ab139bad637d1cdb32410e88fa33cb9a->leave($__internal_2c49489b17cd7ce3952bff71024cf762ab139bad637d1cdb32410e88fa33cb9a_prof);

        
        $__internal_b7afb86670c94525c2ee4329ad61297f2f97434fa3e74df8e2388388f5cce1db->leave($__internal_b7afb86670c94525c2ee4329ad61297f2f97434fa3e74df8e2388388f5cce1db_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
