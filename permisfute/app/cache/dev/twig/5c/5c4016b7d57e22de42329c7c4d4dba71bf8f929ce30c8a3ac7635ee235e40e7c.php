<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6101ec86e1e5f0f60aefcf620eb792bc668a18af3f6a841d5fc5d822c00576c5 extends Twig_Template
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
        $__internal_4fe04b6cc42ef5f794ef1e0de9cc1c675f2d0401e9392d1375b341579960416c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe04b6cc42ef5f794ef1e0de9cc1c675f2d0401e9392d1375b341579960416c->enter($__internal_4fe04b6cc42ef5f794ef1e0de9cc1c675f2d0401e9392d1375b341579960416c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fe04b6cc42ef5f794ef1e0de9cc1c675f2d0401e9392d1375b341579960416c->leave($__internal_4fe04b6cc42ef5f794ef1e0de9cc1c675f2d0401e9392d1375b341579960416c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe044ed157f15f717a59b63520c9ad281778eb3c94dbdb4067343e976736aaf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe044ed157f15f717a59b63520c9ad281778eb3c94dbdb4067343e976736aaf9->enter($__internal_fe044ed157f15f717a59b63520c9ad281778eb3c94dbdb4067343e976736aaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fe044ed157f15f717a59b63520c9ad281778eb3c94dbdb4067343e976736aaf9->leave($__internal_fe044ed157f15f717a59b63520c9ad281778eb3c94dbdb4067343e976736aaf9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0356e7d3196c508e7c1b4bb2be1f29a70b2a8c4bf7904c1725a28d3e163457b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0356e7d3196c508e7c1b4bb2be1f29a70b2a8c4bf7904c1725a28d3e163457b->enter($__internal_b0356e7d3196c508e7c1b4bb2be1f29a70b2a8c4bf7904c1725a28d3e163457b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b0356e7d3196c508e7c1b4bb2be1f29a70b2a8c4bf7904c1725a28d3e163457b->leave($__internal_b0356e7d3196c508e7c1b4bb2be1f29a70b2a8c4bf7904c1725a28d3e163457b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f366dd2cb68f7b8122c9734ce66c3a514105a215187485eaffadc5e9ae5eb4fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f366dd2cb68f7b8122c9734ce66c3a514105a215187485eaffadc5e9ae5eb4fd->enter($__internal_f366dd2cb68f7b8122c9734ce66c3a514105a215187485eaffadc5e9ae5eb4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f366dd2cb68f7b8122c9734ce66c3a514105a215187485eaffadc5e9ae5eb4fd->leave($__internal_f366dd2cb68f7b8122c9734ce66c3a514105a215187485eaffadc5e9ae5eb4fd_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
