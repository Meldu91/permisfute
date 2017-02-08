<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dfc92145ae926904e9ccf6a10e1325489dd40a1da4ce51d9c2b8b8130df88158 extends Twig_Template
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
        $__internal_f25e68858377fde5e9330b1ee746d98010176f18eaa5c883e489aac30d1d637b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25e68858377fde5e9330b1ee746d98010176f18eaa5c883e489aac30d1d637b->enter($__internal_f25e68858377fde5e9330b1ee746d98010176f18eaa5c883e489aac30d1d637b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f25e68858377fde5e9330b1ee746d98010176f18eaa5c883e489aac30d1d637b->leave($__internal_f25e68858377fde5e9330b1ee746d98010176f18eaa5c883e489aac30d1d637b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c7796f1fdbf4bee83dcba2b61b0dd7b69624a819f6e0e8e69a3bf57738b1e928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7796f1fdbf4bee83dcba2b61b0dd7b69624a819f6e0e8e69a3bf57738b1e928->enter($__internal_c7796f1fdbf4bee83dcba2b61b0dd7b69624a819f6e0e8e69a3bf57738b1e928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c7796f1fdbf4bee83dcba2b61b0dd7b69624a819f6e0e8e69a3bf57738b1e928->leave($__internal_c7796f1fdbf4bee83dcba2b61b0dd7b69624a819f6e0e8e69a3bf57738b1e928_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_43b326a268a93c4bd1a100d454ea52f5ba30c2303f30d8b63ff6e214ac4c95f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b326a268a93c4bd1a100d454ea52f5ba30c2303f30d8b63ff6e214ac4c95f0->enter($__internal_43b326a268a93c4bd1a100d454ea52f5ba30c2303f30d8b63ff6e214ac4c95f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_43b326a268a93c4bd1a100d454ea52f5ba30c2303f30d8b63ff6e214ac4c95f0->leave($__internal_43b326a268a93c4bd1a100d454ea52f5ba30c2303f30d8b63ff6e214ac4c95f0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_26fa273a9cbc8baf91def965626f2e502eb77f9b6938904a365360765ec84a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26fa273a9cbc8baf91def965626f2e502eb77f9b6938904a365360765ec84a89->enter($__internal_26fa273a9cbc8baf91def965626f2e502eb77f9b6938904a365360765ec84a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_26fa273a9cbc8baf91def965626f2e502eb77f9b6938904a365360765ec84a89->leave($__internal_26fa273a9cbc8baf91def965626f2e502eb77f9b6938904a365360765ec84a89_prof);

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
