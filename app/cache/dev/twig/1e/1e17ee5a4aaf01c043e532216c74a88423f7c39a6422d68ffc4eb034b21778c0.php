<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ab5ae88c08155ed098b47ae134088af615d743600496c6a3821dc116f5e69aa7 extends Twig_Template
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
        $__internal_8fb8316bbd33bb46a029e07df4b42f744cd5526a67e97c91c7c5ad0c4bbefd95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb8316bbd33bb46a029e07df4b42f744cd5526a67e97c91c7c5ad0c4bbefd95->enter($__internal_8fb8316bbd33bb46a029e07df4b42f744cd5526a67e97c91c7c5ad0c4bbefd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fb8316bbd33bb46a029e07df4b42f744cd5526a67e97c91c7c5ad0c4bbefd95->leave($__internal_8fb8316bbd33bb46a029e07df4b42f744cd5526a67e97c91c7c5ad0c4bbefd95_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa08491fe2b29e61229bad6241cee29a5c361c6e2f22a02675469f08514cd28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa08491fe2b29e61229bad6241cee29a5c361c6e2f22a02675469f08514cd28f->enter($__internal_aa08491fe2b29e61229bad6241cee29a5c361c6e2f22a02675469f08514cd28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aa08491fe2b29e61229bad6241cee29a5c361c6e2f22a02675469f08514cd28f->leave($__internal_aa08491fe2b29e61229bad6241cee29a5c361c6e2f22a02675469f08514cd28f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba8eda9f9ec53317bb6a9fbda42f35513f32844c1e6845fdecc8adb69691065d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8eda9f9ec53317bb6a9fbda42f35513f32844c1e6845fdecc8adb69691065d->enter($__internal_ba8eda9f9ec53317bb6a9fbda42f35513f32844c1e6845fdecc8adb69691065d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ba8eda9f9ec53317bb6a9fbda42f35513f32844c1e6845fdecc8adb69691065d->leave($__internal_ba8eda9f9ec53317bb6a9fbda42f35513f32844c1e6845fdecc8adb69691065d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_115a006c967a11b26b682be2c2d04318beac2b71b24bac5114af1724018a81f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115a006c967a11b26b682be2c2d04318beac2b71b24bac5114af1724018a81f1->enter($__internal_115a006c967a11b26b682be2c2d04318beac2b71b24bac5114af1724018a81f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_115a006c967a11b26b682be2c2d04318beac2b71b24bac5114af1724018a81f1->leave($__internal_115a006c967a11b26b682be2c2d04318beac2b71b24bac5114af1724018a81f1_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\permisfute\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
