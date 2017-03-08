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
        $__internal_997c5621086228aba813577bc66b629d1662324a6f949431a00ea10065b9dbe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997c5621086228aba813577bc66b629d1662324a6f949431a00ea10065b9dbe7->enter($__internal_997c5621086228aba813577bc66b629d1662324a6f949431a00ea10065b9dbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_997c5621086228aba813577bc66b629d1662324a6f949431a00ea10065b9dbe7->leave($__internal_997c5621086228aba813577bc66b629d1662324a6f949431a00ea10065b9dbe7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aaa58fb2e3d4a4ed264ccdb7bbd7a4393dd4eec285b052511341d4587967e8d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa58fb2e3d4a4ed264ccdb7bbd7a4393dd4eec285b052511341d4587967e8d4->enter($__internal_aaa58fb2e3d4a4ed264ccdb7bbd7a4393dd4eec285b052511341d4587967e8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aaa58fb2e3d4a4ed264ccdb7bbd7a4393dd4eec285b052511341d4587967e8d4->leave($__internal_aaa58fb2e3d4a4ed264ccdb7bbd7a4393dd4eec285b052511341d4587967e8d4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8604b8c62558703bf7c59c169c34e2dd6511bf1680359762987f7b0fdb96fd9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8604b8c62558703bf7c59c169c34e2dd6511bf1680359762987f7b0fdb96fd9e->enter($__internal_8604b8c62558703bf7c59c169c34e2dd6511bf1680359762987f7b0fdb96fd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8604b8c62558703bf7c59c169c34e2dd6511bf1680359762987f7b0fdb96fd9e->leave($__internal_8604b8c62558703bf7c59c169c34e2dd6511bf1680359762987f7b0fdb96fd9e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_07884954117dbaf3f3598cc2c5b8ab0ac4b450efce6e0f2bfaf13ac96ea856ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07884954117dbaf3f3598cc2c5b8ab0ac4b450efce6e0f2bfaf13ac96ea856ac->enter($__internal_07884954117dbaf3f3598cc2c5b8ab0ac4b450efce6e0f2bfaf13ac96ea856ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_07884954117dbaf3f3598cc2c5b8ab0ac4b450efce6e0f2bfaf13ac96ea856ac->leave($__internal_07884954117dbaf3f3598cc2c5b8ab0ac4b450efce6e0f2bfaf13ac96ea856ac_prof);

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
