<?php

/* FOSUserBundle/views/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_ee6c9e089fb006df6adfa4317e46a97ac37fbbec6b856506e7871784ee38b202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle/views/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_600f1354337b77a37ebfca1bd63b30efbb489d94364a16e43bb43dc78ede2556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_600f1354337b77a37ebfca1bd63b30efbb489d94364a16e43bb43dc78ede2556->enter($__internal_600f1354337b77a37ebfca1bd63b30efbb489d94364a16e43bb43dc78ede2556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle/views/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_600f1354337b77a37ebfca1bd63b30efbb489d94364a16e43bb43dc78ede2556->leave($__internal_600f1354337b77a37ebfca1bd63b30efbb489d94364a16e43bb43dc78ede2556_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09e24cb4238f7ac18e9d07600cfdb2634d0889d257bbf15e0f0b087882a72a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e24cb4238f7ac18e9d07600cfdb2634d0889d257bbf15e0f0b087882a72a08->enter($__internal_09e24cb4238f7ac18e9d07600cfdb2634d0889d257bbf15e0f0b087882a72a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_09e24cb4238f7ac18e9d07600cfdb2634d0889d257bbf15e0f0b087882a72a08->leave($__internal_09e24cb4238f7ac18e9d07600cfdb2634d0889d257bbf15e0f0b087882a72a08_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle/views/Resetting/passwordAlreadyRequested.html.twig";
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
", "FOSUserBundle/views/Resetting/passwordAlreadyRequested.html.twig", "C:\\wamp\\www\\permisfute\\app\\Resources\\views\\FOSUserBundle\\views\\Resetting\\passwordAlreadyRequested.html.twig");
    }
}
