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
        $__internal_934383b11324d8217f329cbac5c28b658a97462746574bd3e6ead3a1a2f21a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934383b11324d8217f329cbac5c28b658a97462746574bd3e6ead3a1a2f21a19->enter($__internal_934383b11324d8217f329cbac5c28b658a97462746574bd3e6ead3a1a2f21a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_934383b11324d8217f329cbac5c28b658a97462746574bd3e6ead3a1a2f21a19->leave($__internal_934383b11324d8217f329cbac5c28b658a97462746574bd3e6ead3a1a2f21a19_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f3f50fc7235f6cab890c93316d792b1b965eec72e668263132985c271d0e161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3f50fc7235f6cab890c93316d792b1b965eec72e668263132985c271d0e161->enter($__internal_0f3f50fc7235f6cab890c93316d792b1b965eec72e668263132985c271d0e161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0f3f50fc7235f6cab890c93316d792b1b965eec72e668263132985c271d0e161->leave($__internal_0f3f50fc7235f6cab890c93316d792b1b965eec72e668263132985c271d0e161_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_95ddab54e01652ac28510ebabb26df890618a16ffb24a82cbd725c258f902f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ddab54e01652ac28510ebabb26df890618a16ffb24a82cbd725c258f902f14->enter($__internal_95ddab54e01652ac28510ebabb26df890618a16ffb24a82cbd725c258f902f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_95ddab54e01652ac28510ebabb26df890618a16ffb24a82cbd725c258f902f14->leave($__internal_95ddab54e01652ac28510ebabb26df890618a16ffb24a82cbd725c258f902f14_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eaf5ebf6edc1446ef073b803d9a419e55ed18c602fdd2e6766230b71bf21e6b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf5ebf6edc1446ef073b803d9a419e55ed18c602fdd2e6766230b71bf21e6b3->enter($__internal_eaf5ebf6edc1446ef073b803d9a419e55ed18c602fdd2e6766230b71bf21e6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_eaf5ebf6edc1446ef073b803d9a419e55ed18c602fdd2e6766230b71bf21e6b3->leave($__internal_eaf5ebf6edc1446ef073b803d9a419e55ed18c602fdd2e6766230b71bf21e6b3_prof);

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
