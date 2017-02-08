<?php

/* :FOSUserBundle/views/Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_5a73b48bb69146eb138751a0477d28049d91dcd426475316092bc1ba4c5ff406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", ":FOSUserBundle/views/Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_44c9c98c581fb8f872108bda4df12a193997e7ce5f668a22742a97b798ac38c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c9c98c581fb8f872108bda4df12a193997e7ce5f668a22742a97b798ac38c6->enter($__internal_44c9c98c581fb8f872108bda4df12a193997e7ce5f668a22742a97b798ac38c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views/Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44c9c98c581fb8f872108bda4df12a193997e7ce5f668a22742a97b798ac38c6->leave($__internal_44c9c98c581fb8f872108bda4df12a193997e7ce5f668a22742a97b798ac38c6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_64bbd8454c5f1cf6b8ef90aa570c83569abba1c71e97d75e160fd5cb886f1321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64bbd8454c5f1cf6b8ef90aa570c83569abba1c71e97d75e160fd5cb886f1321->enter($__internal_64bbd8454c5f1cf6b8ef90aa570c83569abba1c71e97d75e160fd5cb886f1321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_64bbd8454c5f1cf6b8ef90aa570c83569abba1c71e97d75e160fd5cb886f1321->leave($__internal_64bbd8454c5f1cf6b8ef90aa570c83569abba1c71e97d75e160fd5cb886f1321_prof);

    }

    public function getTemplateName()
    {
        return ":FOSUserBundle/views/Resetting:passwordAlreadyRequested.html.twig";
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
", ":FOSUserBundle/views/Resetting:passwordAlreadyRequested.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources\\views/FOSUserBundle/views/Resetting/passwordAlreadyRequested.html.twig");
    }
}
