<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_1966c5b2d7877a2ccb185723c1ea44f7abd24c8086eb76a6c5e90bfdfa752179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_9f7abcb8c3ed3ac87102a6d0b129668f41c4e1dfc209c9e3ad2302802751aaef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f7abcb8c3ed3ac87102a6d0b129668f41c4e1dfc209c9e3ad2302802751aaef->enter($__internal_9f7abcb8c3ed3ac87102a6d0b129668f41c4e1dfc209c9e3ad2302802751aaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f7abcb8c3ed3ac87102a6d0b129668f41c4e1dfc209c9e3ad2302802751aaef->leave($__internal_9f7abcb8c3ed3ac87102a6d0b129668f41c4e1dfc209c9e3ad2302802751aaef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a0856bb35fd2bf24f53462214374ae144e0e588faf75d128e0042b8f0df0814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a0856bb35fd2bf24f53462214374ae144e0e588faf75d128e0042b8f0df0814->enter($__internal_7a0856bb35fd2bf24f53462214374ae144e0e588faf75d128e0042b8f0df0814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_7a0856bb35fd2bf24f53462214374ae144e0e588faf75d128e0042b8f0df0814->leave($__internal_7a0856bb35fd2bf24f53462214374ae144e0e588faf75d128e0042b8f0df0814_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
