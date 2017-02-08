<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_9dd9e4889df457c84bd28af120944790c08280c0e4db42765e8ac46ef8b127e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_d29b5c5caf0144888de04d44af17e390c19ad2418ae8c90a2d15dd7adb4f4013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29b5c5caf0144888de04d44af17e390c19ad2418ae8c90a2d15dd7adb4f4013->enter($__internal_d29b5c5caf0144888de04d44af17e390c19ad2418ae8c90a2d15dd7adb4f4013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d29b5c5caf0144888de04d44af17e390c19ad2418ae8c90a2d15dd7adb4f4013->leave($__internal_d29b5c5caf0144888de04d44af17e390c19ad2418ae8c90a2d15dd7adb4f4013_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_145b963f0a15d5732640ea9231a4558517547ddcea3700d79b880ae874b7e758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145b963f0a15d5732640ea9231a4558517547ddcea3700d79b880ae874b7e758->enter($__internal_145b963f0a15d5732640ea9231a4558517547ddcea3700d79b880ae874b7e758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_145b963f0a15d5732640ea9231a4558517547ddcea3700d79b880ae874b7e758->leave($__internal_145b963f0a15d5732640ea9231a4558517547ddcea3700d79b880ae874b7e758_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
