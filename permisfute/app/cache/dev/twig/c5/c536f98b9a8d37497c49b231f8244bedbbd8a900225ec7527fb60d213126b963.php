<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ce80c82992fca8c7c1a8d012f14e7ef3ea6324a01eb2a0e5b41c62c9dd040e33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_6948dd2fa2fd7d5d6930376c99bf61cc11cf94a8471d4d663debbe4d30d42e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6948dd2fa2fd7d5d6930376c99bf61cc11cf94a8471d4d663debbe4d30d42e78->enter($__internal_6948dd2fa2fd7d5d6930376c99bf61cc11cf94a8471d4d663debbe4d30d42e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6948dd2fa2fd7d5d6930376c99bf61cc11cf94a8471d4d663debbe4d30d42e78->leave($__internal_6948dd2fa2fd7d5d6930376c99bf61cc11cf94a8471d4d663debbe4d30d42e78_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_54d1017f57528e52ea59e04fab5c04dca4bf5fcbe8d513864cd6610a74922e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d1017f57528e52ea59e04fab5c04dca4bf5fcbe8d513864cd6610a74922e02->enter($__internal_54d1017f57528e52ea59e04fab5c04dca4bf5fcbe8d513864cd6610a74922e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_54d1017f57528e52ea59e04fab5c04dca4bf5fcbe8d513864cd6610a74922e02->leave($__internal_54d1017f57528e52ea59e04fab5c04dca4bf5fcbe8d513864cd6610a74922e02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
