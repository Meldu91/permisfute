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
        $__internal_79a5f45b1c56f68e56258060405a78924f349f0357b110e5510ee41f3f852862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a5f45b1c56f68e56258060405a78924f349f0357b110e5510ee41f3f852862->enter($__internal_79a5f45b1c56f68e56258060405a78924f349f0357b110e5510ee41f3f852862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79a5f45b1c56f68e56258060405a78924f349f0357b110e5510ee41f3f852862->leave($__internal_79a5f45b1c56f68e56258060405a78924f349f0357b110e5510ee41f3f852862_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_71a6ad9a4907aefa241a28bcdd5d2c64b3e0c7bcd87057ef80fa77ffb78c82c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a6ad9a4907aefa241a28bcdd5d2c64b3e0c7bcd87057ef80fa77ffb78c82c4->enter($__internal_71a6ad9a4907aefa241a28bcdd5d2c64b3e0c7bcd87057ef80fa77ffb78c82c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_71a6ad9a4907aefa241a28bcdd5d2c64b3e0c7bcd87057ef80fa77ffb78c82c4->leave($__internal_71a6ad9a4907aefa241a28bcdd5d2c64b3e0c7bcd87057ef80fa77ffb78c82c4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2bfe58e09eb0cece930e3a1c972ce87e711a99560b2925c2285b29a709ce603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bfe58e09eb0cece930e3a1c972ce87e711a99560b2925c2285b29a709ce603->enter($__internal_d2bfe58e09eb0cece930e3a1c972ce87e711a99560b2925c2285b29a709ce603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d2bfe58e09eb0cece930e3a1c972ce87e711a99560b2925c2285b29a709ce603->leave($__internal_d2bfe58e09eb0cece930e3a1c972ce87e711a99560b2925c2285b29a709ce603_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b35d88c5121aa7db181470abf3a20499299ec83845a2949a7691241d443aa06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35d88c5121aa7db181470abf3a20499299ec83845a2949a7691241d443aa06b->enter($__internal_b35d88c5121aa7db181470abf3a20499299ec83845a2949a7691241d443aa06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b35d88c5121aa7db181470abf3a20499299ec83845a2949a7691241d443aa06b->leave($__internal_b35d88c5121aa7db181470abf3a20499299ec83845a2949a7691241d443aa06b_prof);

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
