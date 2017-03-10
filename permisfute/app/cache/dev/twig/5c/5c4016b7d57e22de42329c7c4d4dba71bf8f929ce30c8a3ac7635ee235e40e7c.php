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
        $__internal_8e427af309f8fbcfc07506f300573b06231723efe79427f3d8daac880b88af0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e427af309f8fbcfc07506f300573b06231723efe79427f3d8daac880b88af0f->enter($__internal_8e427af309f8fbcfc07506f300573b06231723efe79427f3d8daac880b88af0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e427af309f8fbcfc07506f300573b06231723efe79427f3d8daac880b88af0f->leave($__internal_8e427af309f8fbcfc07506f300573b06231723efe79427f3d8daac880b88af0f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6b1e8466a6d29b34af2d8bfa73b2fa8a5433c77bd62f5c862f65b3dd8539348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6b1e8466a6d29b34af2d8bfa73b2fa8a5433c77bd62f5c862f65b3dd8539348->enter($__internal_d6b1e8466a6d29b34af2d8bfa73b2fa8a5433c77bd62f5c862f65b3dd8539348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d6b1e8466a6d29b34af2d8bfa73b2fa8a5433c77bd62f5c862f65b3dd8539348->leave($__internal_d6b1e8466a6d29b34af2d8bfa73b2fa8a5433c77bd62f5c862f65b3dd8539348_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6031a0e21ed05407e0a37b937b69b30507b6f4ab085905bd9e7485c2d3a1c0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6031a0e21ed05407e0a37b937b69b30507b6f4ab085905bd9e7485c2d3a1c0e4->enter($__internal_6031a0e21ed05407e0a37b937b69b30507b6f4ab085905bd9e7485c2d3a1c0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6031a0e21ed05407e0a37b937b69b30507b6f4ab085905bd9e7485c2d3a1c0e4->leave($__internal_6031a0e21ed05407e0a37b937b69b30507b6f4ab085905bd9e7485c2d3a1c0e4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cf6bcbfa3ff558c9d6546881ed41e7d077e8451fec5168fbe69c121805d614e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf6bcbfa3ff558c9d6546881ed41e7d077e8451fec5168fbe69c121805d614e->enter($__internal_7cf6bcbfa3ff558c9d6546881ed41e7d077e8451fec5168fbe69c121805d614e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7cf6bcbfa3ff558c9d6546881ed41e7d077e8451fec5168fbe69c121805d614e->leave($__internal_7cf6bcbfa3ff558c9d6546881ed41e7d077e8451fec5168fbe69c121805d614e_prof);

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
