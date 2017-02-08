<?php

/* :FOSUserBundle/views/Resetting:reset.html.twig */
class __TwigTemplate_234c671ead5c4637c4fc28d247202607fdddcfcde844d3a207c646af93198721 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", ":FOSUserBundle/views/Resetting:reset.html.twig", 1);
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
        $__internal_d280a595380694ee6f7782b92b12a755511f7ed1ddfacf2f510e7651cf946d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d280a595380694ee6f7782b92b12a755511f7ed1ddfacf2f510e7651cf946d7b->enter($__internal_d280a595380694ee6f7782b92b12a755511f7ed1ddfacf2f510e7651cf946d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views/Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d280a595380694ee6f7782b92b12a755511f7ed1ddfacf2f510e7651cf946d7b->leave($__internal_d280a595380694ee6f7782b92b12a755511f7ed1ddfacf2f510e7651cf946d7b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26880222d437ebef22528a8bec80e7a588ea7193ffd3e4206c05d0da7e37cfe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26880222d437ebef22528a8bec80e7a588ea7193ffd3e4206c05d0da7e37cfe2->enter($__internal_26880222d437ebef22528a8bec80e7a588ea7193ffd3e4206c05d0da7e37cfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", ":FOSUserBundle/views/Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_26880222d437ebef22528a8bec80e7a588ea7193ffd3e4206c05d0da7e37cfe2->leave($__internal_26880222d437ebef22528a8bec80e7a588ea7193ffd3e4206c05d0da7e37cfe2_prof);

    }

    public function getTemplateName()
    {
        return ":FOSUserBundle/views/Resetting:reset.html.twig";
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
", ":FOSUserBundle/views/Resetting:reset.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources\\views/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
