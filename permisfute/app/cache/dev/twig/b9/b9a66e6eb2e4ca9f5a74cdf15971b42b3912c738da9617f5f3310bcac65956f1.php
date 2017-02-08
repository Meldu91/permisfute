<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_1789d8fdb053f4dd6e73d06fcbb3e9f5a45a05989843fd66ccb956ce4739c0a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_d28df45394b449d0fc0e02509db878f1a59d91bf76e02611759787aeea01d4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28df45394b449d0fc0e02509db878f1a59d91bf76e02611759787aeea01d4a0->enter($__internal_d28df45394b449d0fc0e02509db878f1a59d91bf76e02611759787aeea01d4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d28df45394b449d0fc0e02509db878f1a59d91bf76e02611759787aeea01d4a0->leave($__internal_d28df45394b449d0fc0e02509db878f1a59d91bf76e02611759787aeea01d4a0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b51d46b4d134bb754f406a74ca1e9c94b3a153d6e95144c51e6d8ffc6c2f88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b51d46b4d134bb754f406a74ca1e9c94b3a153d6e95144c51e6d8ffc6c2f88e->enter($__internal_6b51d46b4d134bb754f406a74ca1e9c94b3a153d6e95144c51e6d8ffc6c2f88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_6b51d46b4d134bb754f406a74ca1e9c94b3a153d6e95144c51e6d8ffc6c2f88e->leave($__internal_6b51d46b4d134bb754f406a74ca1e9c94b3a153d6e95144c51e6d8ffc6c2f88e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>{{ 'resetting.password_already_requested'|trans }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\passwordAlreadyRequested.html.twig");
    }
}
