<?php

/* FOSUserBundle/views/ChangePassword/changePassword.html.twig */
class __TwigTemplate_1e6f641131c28e7a8808d621cbd646833135116124074004a389e2a0dfc9c5aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle/views/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_5f47402cd4aaa789a2cc88d73778a8bf61f78e1ee39d80bdc1fcdae7bba80446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f47402cd4aaa789a2cc88d73778a8bf61f78e1ee39d80bdc1fcdae7bba80446->enter($__internal_5f47402cd4aaa789a2cc88d73778a8bf61f78e1ee39d80bdc1fcdae7bba80446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle/views/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f47402cd4aaa789a2cc88d73778a8bf61f78e1ee39d80bdc1fcdae7bba80446->leave($__internal_5f47402cd4aaa789a2cc88d73778a8bf61f78e1ee39d80bdc1fcdae7bba80446_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_093dcde8cd3808a984677dd2d9bd65da332d53555e48d9cd83d87c6039ed31cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093dcde8cd3808a984677dd2d9bd65da332d53555e48d9cd83d87c6039ed31cc->enter($__internal_093dcde8cd3808a984677dd2d9bd65da332d53555e48d9cd83d87c6039ed31cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle/views/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_093dcde8cd3808a984677dd2d9bd65da332d53555e48d9cd83d87c6039ed31cc->leave($__internal_093dcde8cd3808a984677dd2d9bd65da332d53555e48d9cd83d87c6039ed31cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle/views/ChangePassword/changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle/views/ChangePassword/changePassword.html.twig", "C:\\wamp\\www\\permisfute\\app\\Resources\\views\\FOSUserBundle\\views\\ChangePassword\\changePassword.html.twig");
    }
}
