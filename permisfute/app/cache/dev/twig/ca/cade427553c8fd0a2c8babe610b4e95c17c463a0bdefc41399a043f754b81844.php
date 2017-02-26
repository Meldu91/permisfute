<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4afbbf81543e48f5993220af054b3d232302def60041e721fb4252e967c82122 extends Twig_Template
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
        $__internal_1e5dbfd36008776ab9cabcf98c415f241ea204cc947ab0b7acaf8cf3c7f79fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5dbfd36008776ab9cabcf98c415f241ea204cc947ab0b7acaf8cf3c7f79fb7->enter($__internal_1e5dbfd36008776ab9cabcf98c415f241ea204cc947ab0b7acaf8cf3c7f79fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e5dbfd36008776ab9cabcf98c415f241ea204cc947ab0b7acaf8cf3c7f79fb7->leave($__internal_1e5dbfd36008776ab9cabcf98c415f241ea204cc947ab0b7acaf8cf3c7f79fb7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f99cffd45000295160a5d4b4f01b85ff8bdc252ddd1295c1fee5d93448e4653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f99cffd45000295160a5d4b4f01b85ff8bdc252ddd1295c1fee5d93448e4653->enter($__internal_5f99cffd45000295160a5d4b4f01b85ff8bdc252ddd1295c1fee5d93448e4653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5f99cffd45000295160a5d4b4f01b85ff8bdc252ddd1295c1fee5d93448e4653->leave($__internal_5f99cffd45000295160a5d4b4f01b85ff8bdc252ddd1295c1fee5d93448e4653_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_353eef8e5a36ea3ef614358156df687f673e9489c323761b99521ebeed44c8fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353eef8e5a36ea3ef614358156df687f673e9489c323761b99521ebeed44c8fd->enter($__internal_353eef8e5a36ea3ef614358156df687f673e9489c323761b99521ebeed44c8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_353eef8e5a36ea3ef614358156df687f673e9489c323761b99521ebeed44c8fd->leave($__internal_353eef8e5a36ea3ef614358156df687f673e9489c323761b99521ebeed44c8fd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4128ba04a0411e7cde1fec36275118c0132afabed541ef4d989e06a7918d299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4128ba04a0411e7cde1fec36275118c0132afabed541ef4d989e06a7918d299->enter($__internal_a4128ba04a0411e7cde1fec36275118c0132afabed541ef4d989e06a7918d299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a4128ba04a0411e7cde1fec36275118c0132afabed541ef4d989e06a7918d299->leave($__internal_a4128ba04a0411e7cde1fec36275118c0132afabed541ef4d989e06a7918d299_prof);

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
