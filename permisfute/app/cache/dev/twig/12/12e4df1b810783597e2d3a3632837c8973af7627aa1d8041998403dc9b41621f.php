<?php

/* FOSUserBundle/views/Registration/checkEmail.html.twig */
class __TwigTemplate_a7c6fe7edaba552b224d07b4326f793676c6a97cf9cdb06d430a86855e786f9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle/views/Registration/checkEmail.html.twig", 1);
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
        $__internal_0db50e4e8e53c0da4bc049982dbe7ca3bd12a05382ca5a4adfcedf98ed357802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db50e4e8e53c0da4bc049982dbe7ca3bd12a05382ca5a4adfcedf98ed357802->enter($__internal_0db50e4e8e53c0da4bc049982dbe7ca3bd12a05382ca5a4adfcedf98ed357802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle/views/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0db50e4e8e53c0da4bc049982dbe7ca3bd12a05382ca5a4adfcedf98ed357802->leave($__internal_0db50e4e8e53c0da4bc049982dbe7ca3bd12a05382ca5a4adfcedf98ed357802_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb99beb98fca0cdf3ca64775762ee6487ef453d4c84afa508ba213149abe5d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb99beb98fca0cdf3ca64775762ee6487ef453d4c84afa508ba213149abe5d86->enter($__internal_eb99beb98fca0cdf3ca64775762ee6487ef453d4c84afa508ba213149abe5d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_eb99beb98fca0cdf3ca64775762ee6487ef453d4c84afa508ba213149abe5d86->leave($__internal_eb99beb98fca0cdf3ca64775762ee6487ef453d4c84afa508ba213149abe5d86_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle/views/Registration/checkEmail.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle/views/Registration/checkEmail.html.twig", "C:\\wamp\\www\\permisfute\\app\\Resources\\views\\FOSUserBundle\\views\\Registration\\checkEmail.html.twig");
    }
}
