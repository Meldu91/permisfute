<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_6fb8593e9320e5579bad5f3272293e700670a540ce1234041246564c92f82eb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_531bdbe0f0aac5bc3bc6fef12c3e353205f9928b1b7a004f8bcc05c0c48063c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531bdbe0f0aac5bc3bc6fef12c3e353205f9928b1b7a004f8bcc05c0c48063c8->enter($__internal_531bdbe0f0aac5bc3bc6fef12c3e353205f9928b1b7a004f8bcc05c0c48063c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_531bdbe0f0aac5bc3bc6fef12c3e353205f9928b1b7a004f8bcc05c0c48063c8->leave($__internal_531bdbe0f0aac5bc3bc6fef12c3e353205f9928b1b7a004f8bcc05c0c48063c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2cb01966b69dfa7a66f7925588651154845513c0aaa0f74ca16c3490a86df9f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb01966b69dfa7a66f7925588651154845513c0aaa0f74ca16c3490a86df9f7->enter($__internal_2cb01966b69dfa7a66f7925588651154845513c0aaa0f74ca16c3490a86df9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_2cb01966b69dfa7a66f7925588651154845513c0aaa0f74ca16c3490a86df9f7->leave($__internal_2cb01966b69dfa7a66f7925588651154845513c0aaa0f74ca16c3490a86df9f7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
", "@FOSUser/ChangePassword/changePassword.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\changePassword.html.twig");
    }
}
