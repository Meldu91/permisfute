<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_83674058b703e109811724e319db796268ce05b88763f6fa17e02b5c08c69455 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fdaa1e1a310c3e1cdc07fee56d5b92d8a65301884fb3aa87040ae3c3f2b0726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fdaa1e1a310c3e1cdc07fee56d5b92d8a65301884fb3aa87040ae3c3f2b0726->enter($__internal_1fdaa1e1a310c3e1cdc07fee56d5b92d8a65301884fb3aa87040ae3c3f2b0726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fdaa1e1a310c3e1cdc07fee56d5b92d8a65301884fb3aa87040ae3c3f2b0726->leave($__internal_1fdaa1e1a310c3e1cdc07fee56d5b92d8a65301884fb3aa87040ae3c3f2b0726_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb95ab82ee46599ba28753dd16707f0ff7241309e71008f5c0c82604ec4c4f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb95ab82ee46599ba28753dd16707f0ff7241309e71008f5c0c82604ec4c4f77->enter($__internal_bb95ab82ee46599ba28753dd16707f0ff7241309e71008f5c0c82604ec4c4f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bb95ab82ee46599ba28753dd16707f0ff7241309e71008f5c0c82604ec4c4f77->leave($__internal_bb95ab82ee46599ba28753dd16707f0ff7241309e71008f5c0c82604ec4c4f77_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_301dc1da9b42341b0fda26cb21690a20f9e7f0b1326e0ab0ff22be18fa3b0bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301dc1da9b42341b0fda26cb21690a20f9e7f0b1326e0ab0ff22be18fa3b0bec->enter($__internal_301dc1da9b42341b0fda26cb21690a20f9e7f0b1326e0ab0ff22be18fa3b0bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_301dc1da9b42341b0fda26cb21690a20f9e7f0b1326e0ab0ff22be18fa3b0bec->leave($__internal_301dc1da9b42341b0fda26cb21690a20f9e7f0b1326e0ab0ff22be18fa3b0bec_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d41362c5ca2d5a63b6f8401bca6f8dc81d29f033c70393eb0547aa4722224a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d41362c5ca2d5a63b6f8401bca6f8dc81d29f033c70393eb0547aa4722224a36->enter($__internal_d41362c5ca2d5a63b6f8401bca6f8dc81d29f033c70393eb0547aa4722224a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d41362c5ca2d5a63b6f8401bca6f8dc81d29f033c70393eb0547aa4722224a36->leave($__internal_d41362c5ca2d5a63b6f8401bca6f8dc81d29f033c70393eb0547aa4722224a36_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\permisfute\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
