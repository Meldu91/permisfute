<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f6bf205595034d0cbe620e969a12bd1c1178d162e87874782b49129fad6897f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f323487a84ac91dadd9b48bc9e688e6c3b5a4082265617016026f100ef6c19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f323487a84ac91dadd9b48bc9e688e6c3b5a4082265617016026f100ef6c19a->enter($__internal_6f323487a84ac91dadd9b48bc9e688e6c3b5a4082265617016026f100ef6c19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f323487a84ac91dadd9b48bc9e688e6c3b5a4082265617016026f100ef6c19a->leave($__internal_6f323487a84ac91dadd9b48bc9e688e6c3b5a4082265617016026f100ef6c19a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec57b2d27235e987a4122a7ad63f347e2303211310f206dfe885bd0110a865ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec57b2d27235e987a4122a7ad63f347e2303211310f206dfe885bd0110a865ad->enter($__internal_ec57b2d27235e987a4122a7ad63f347e2303211310f206dfe885bd0110a865ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ec57b2d27235e987a4122a7ad63f347e2303211310f206dfe885bd0110a865ad->leave($__internal_ec57b2d27235e987a4122a7ad63f347e2303211310f206dfe885bd0110a865ad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
