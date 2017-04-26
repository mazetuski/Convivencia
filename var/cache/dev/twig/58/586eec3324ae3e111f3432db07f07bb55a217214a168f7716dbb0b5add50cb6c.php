<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_baa0a1e5df265db1d5a6cba22fad89d051f2f9bbfb236606bef95fd0e743bdb5 extends Twig_Template
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
        $__internal_ec2c1f9550ff97e2834799fb5fdc74d9c580141a0e499747d85496fb8d73d2eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec2c1f9550ff97e2834799fb5fdc74d9c580141a0e499747d85496fb8d73d2eb->enter($__internal_ec2c1f9550ff97e2834799fb5fdc74d9c580141a0e499747d85496fb8d73d2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_5fc8f1f9379cf7001d7404d073cdf7ce8efda45933b82c257f18a80d5e146e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc8f1f9379cf7001d7404d073cdf7ce8efda45933b82c257f18a80d5e146e29->enter($__internal_5fc8f1f9379cf7001d7404d073cdf7ce8efda45933b82c257f18a80d5e146e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_ec2c1f9550ff97e2834799fb5fdc74d9c580141a0e499747d85496fb8d73d2eb->leave($__internal_ec2c1f9550ff97e2834799fb5fdc74d9c580141a0e499747d85496fb8d73d2eb_prof);

        
        $__internal_5fc8f1f9379cf7001d7404d073cdf7ce8efda45933b82c257f18a80d5e146e29->leave($__internal_5fc8f1f9379cf7001d7404d073cdf7ce8efda45933b82c257f18a80d5e146e29_prof);

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
