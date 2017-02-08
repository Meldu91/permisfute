<?php

/* FOSUserBundle/views/Registration/confirmed.html.twig */
class __TwigTemplate_b8e11c0272371544ed599988a6d82463aaa5c7561d05609cb7c27db7e38b41ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle/views/Registration/confirmed.html.twig", 1);
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
        $__internal_ebe1f93b6299134c4b91b2d7ac2a6f729b74cca1ec24b84c6d302126bb8e376c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe1f93b6299134c4b91b2d7ac2a6f729b74cca1ec24b84c6d302126bb8e376c->enter($__internal_ebe1f93b6299134c4b91b2d7ac2a6f729b74cca1ec24b84c6d302126bb8e376c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle/views/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebe1f93b6299134c4b91b2d7ac2a6f729b74cca1ec24b84c6d302126bb8e376c->leave($__internal_ebe1f93b6299134c4b91b2d7ac2a6f729b74cca1ec24b84c6d302126bb8e376c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc06a7a7167c583b2e31f9cb7779d4a2ecd6738e2981e01c7ce564b55600efe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc06a7a7167c583b2e31f9cb7779d4a2ecd6738e2981e01c7ce564b55600efe8->enter($__internal_fc06a7a7167c583b2e31f9cb7779d4a2ecd6738e2981e01c7ce564b55600efe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_fc06a7a7167c583b2e31f9cb7779d4a2ecd6738e2981e01c7ce564b55600efe8->leave($__internal_fc06a7a7167c583b2e31f9cb7779d4a2ecd6738e2981e01c7ce564b55600efe8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle/views/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle/views/Registration/confirmed.html.twig", "C:\\wamp\\www\\permisfute\\app\\Resources\\views\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
