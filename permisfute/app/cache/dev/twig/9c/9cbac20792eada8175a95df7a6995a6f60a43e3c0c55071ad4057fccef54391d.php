<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d631b4ed3802c8e822901f4a01023af1f2e2d0ffedab930690a464ea451d63cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_10ad5a70bdc3d4b24a98ac77223d0e0e8f4a075e25ecf85650ca8d4b07ab8aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ad5a70bdc3d4b24a98ac77223d0e0e8f4a075e25ecf85650ca8d4b07ab8aec->enter($__internal_10ad5a70bdc3d4b24a98ac77223d0e0e8f4a075e25ecf85650ca8d4b07ab8aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10ad5a70bdc3d4b24a98ac77223d0e0e8f4a075e25ecf85650ca8d4b07ab8aec->leave($__internal_10ad5a70bdc3d4b24a98ac77223d0e0e8f4a075e25ecf85650ca8d4b07ab8aec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c7bac137a6fddc81de695f19950aa5c3c3fb9098f3c07cb87edcfcd70c70754e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7bac137a6fddc81de695f19950aa5c3c3fb9098f3c07cb87edcfcd70c70754e->enter($__internal_c7bac137a6fddc81de695f19950aa5c3c3fb9098f3c07cb87edcfcd70c70754e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c7bac137a6fddc81de695f19950aa5c3c3fb9098f3c07cb87edcfcd70c70754e->leave($__internal_c7bac137a6fddc81de695f19950aa5c3c3fb9098f3c07cb87edcfcd70c70754e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_caaee2e0be063f6fa758fc13596b299dc792935a277e5916f620d1811a35aefd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caaee2e0be063f6fa758fc13596b299dc792935a277e5916f620d1811a35aefd->enter($__internal_caaee2e0be063f6fa758fc13596b299dc792935a277e5916f620d1811a35aefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_caaee2e0be063f6fa758fc13596b299dc792935a277e5916f620d1811a35aefd->leave($__internal_caaee2e0be063f6fa758fc13596b299dc792935a277e5916f620d1811a35aefd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_228b398a482c8bc4ab69310eb96ccf6da30e9a5399c7b60f161c34fae911b551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_228b398a482c8bc4ab69310eb96ccf6da30e9a5399c7b60f161c34fae911b551->enter($__internal_228b398a482c8bc4ab69310eb96ccf6da30e9a5399c7b60f161c34fae911b551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_228b398a482c8bc4ab69310eb96ccf6da30e9a5399c7b60f161c34fae911b551->leave($__internal_228b398a482c8bc4ab69310eb96ccf6da30e9a5399c7b60f161c34fae911b551_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
