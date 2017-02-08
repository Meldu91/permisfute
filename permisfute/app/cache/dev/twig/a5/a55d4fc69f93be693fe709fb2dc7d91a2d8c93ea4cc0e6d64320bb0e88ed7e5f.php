<?php

/* FOSUserBundle/views/Resetting/reset.html.twig */
class __TwigTemplate_3d0b8e2f50f741276a4f9877bfe4b6ebb2742bb101d8093f7decce7d4dfc222d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle/views/Resetting/reset.html.twig", 1);
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
        $__internal_8f74fb6f64a17769ee8fd35b6046d4124d05683dc5b9ac7cf2f9c09b624dd91d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f74fb6f64a17769ee8fd35b6046d4124d05683dc5b9ac7cf2f9c09b624dd91d->enter($__internal_8f74fb6f64a17769ee8fd35b6046d4124d05683dc5b9ac7cf2f9c09b624dd91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle/views/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f74fb6f64a17769ee8fd35b6046d4124d05683dc5b9ac7cf2f9c09b624dd91d->leave($__internal_8f74fb6f64a17769ee8fd35b6046d4124d05683dc5b9ac7cf2f9c09b624dd91d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6937dda928147e924da1335bc9289d9796f80c7353a8fcfdcb48e770d95ef979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6937dda928147e924da1335bc9289d9796f80c7353a8fcfdcb48e770d95ef979->enter($__internal_6937dda928147e924da1335bc9289d9796f80c7353a8fcfdcb48e770d95ef979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle/views/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_6937dda928147e924da1335bc9289d9796f80c7353a8fcfdcb48e770d95ef979->leave($__internal_6937dda928147e924da1335bc9289d9796f80c7353a8fcfdcb48e770d95ef979_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle/views/Resetting/reset.html.twig";
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
", "FOSUserBundle/views/Resetting/reset.html.twig", "C:\\wamp\\www\\permisfute\\app\\Resources\\views\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
