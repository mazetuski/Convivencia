<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_543e3ad76ece0eeb565aedc52ca43b1d6e094464e926d7c3c7bfa8f8960e76cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77f5fe42bb67748de0e18b79c0cecd41b8fdbd4d0ac02cc1e3ab86d4fd28026d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f5fe42bb67748de0e18b79c0cecd41b8fdbd4d0ac02cc1e3ab86d4fd28026d->enter($__internal_77f5fe42bb67748de0e18b79c0cecd41b8fdbd4d0ac02cc1e3ab86d4fd28026d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_986e783abe7930c1b0ba8cbeffdd755a31de4f7397b89ca6ba6288d45281d4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986e783abe7930c1b0ba8cbeffdd755a31de4f7397b89ca6ba6288d45281d4de->enter($__internal_986e783abe7930c1b0ba8cbeffdd755a31de4f7397b89ca6ba6288d45281d4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77f5fe42bb67748de0e18b79c0cecd41b8fdbd4d0ac02cc1e3ab86d4fd28026d->leave($__internal_77f5fe42bb67748de0e18b79c0cecd41b8fdbd4d0ac02cc1e3ab86d4fd28026d_prof);

        
        $__internal_986e783abe7930c1b0ba8cbeffdd755a31de4f7397b89ca6ba6288d45281d4de->leave($__internal_986e783abe7930c1b0ba8cbeffdd755a31de4f7397b89ca6ba6288d45281d4de_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd157fdce1dfdece71d132da5c1d42ab0aa2509b5397d720448fde55937bef83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd157fdce1dfdece71d132da5c1d42ab0aa2509b5397d720448fde55937bef83->enter($__internal_fd157fdce1dfdece71d132da5c1d42ab0aa2509b5397d720448fde55937bef83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4ff53887a80b056359a35fc8ae2fc7b15b5d22317ea20e2e7b1e67c63fb8a85e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff53887a80b056359a35fc8ae2fc7b15b5d22317ea20e2e7b1e67c63fb8a85e->enter($__internal_4ff53887a80b056359a35fc8ae2fc7b15b5d22317ea20e2e7b1e67c63fb8a85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_4ff53887a80b056359a35fc8ae2fc7b15b5d22317ea20e2e7b1e67c63fb8a85e->leave($__internal_4ff53887a80b056359a35fc8ae2fc7b15b5d22317ea20e2e7b1e67c63fb8a85e_prof);

        
        $__internal_fd157fdce1dfdece71d132da5c1d42ab0aa2509b5397d720448fde55937bef83->leave($__internal_fd157fdce1dfdece71d132da5c1d42ab0aa2509b5397d720448fde55937bef83_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0acda1229c310e4f068e3346b22e332a35703cfb440724eecfe1936ca266a90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0acda1229c310e4f068e3346b22e332a35703cfb440724eecfe1936ca266a90->enter($__internal_f0acda1229c310e4f068e3346b22e332a35703cfb440724eecfe1936ca266a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4830a540be7ad3b43c3b53cfa21d77780cb66a461392f4d202cf39d233a62a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4830a540be7ad3b43c3b53cfa21d77780cb66a461392f4d202cf39d233a62a1e->enter($__internal_4830a540be7ad3b43c3b53cfa21d77780cb66a461392f4d202cf39d233a62a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4830a540be7ad3b43c3b53cfa21d77780cb66a461392f4d202cf39d233a62a1e->leave($__internal_4830a540be7ad3b43c3b53cfa21d77780cb66a461392f4d202cf39d233a62a1e_prof);

        
        $__internal_f0acda1229c310e4f068e3346b22e332a35703cfb440724eecfe1936ca266a90->leave($__internal_f0acda1229c310e4f068e3346b22e332a35703cfb440724eecfe1936ca266a90_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_152b79de9e7d15e86b82131b402103fe65469ef9747e592e7fae814cd89ca227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_152b79de9e7d15e86b82131b402103fe65469ef9747e592e7fae814cd89ca227->enter($__internal_152b79de9e7d15e86b82131b402103fe65469ef9747e592e7fae814cd89ca227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_633a7bfc4a3ffa78202960c1f10a577b12eab56974b90fb7ba4d0e31be043e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633a7bfc4a3ffa78202960c1f10a577b12eab56974b90fb7ba4d0e31be043e02->enter($__internal_633a7bfc4a3ffa78202960c1f10a577b12eab56974b90fb7ba4d0e31be043e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_633a7bfc4a3ffa78202960c1f10a577b12eab56974b90fb7ba4d0e31be043e02->leave($__internal_633a7bfc4a3ffa78202960c1f10a577b12eab56974b90fb7ba4d0e31be043e02_prof);

        
        $__internal_152b79de9e7d15e86b82131b402103fe65469ef9747e592e7fae814cd89ca227->leave($__internal_152b79de9e7d15e86b82131b402103fe65469ef9747e592e7fae814cd89ca227_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\Mike\\Documents\\GitHub\\Convivencia\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
