<?php

/* FOSUserBundle/views/Group/show.html.twig */
class __TwigTemplate_402d9574e81b21589078c0e2e150d57387746aa60c7486ede3f15d03fe515ff9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle/views/Group/show.html.twig", 1);
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
        $__internal_eab7054d52981b8a2f4f7d811e7435a2a61ece991fce893e9fbf849713fd08be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab7054d52981b8a2f4f7d811e7435a2a61ece991fce893e9fbf849713fd08be->enter($__internal_eab7054d52981b8a2f4f7d811e7435a2a61ece991fce893e9fbf849713fd08be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle/views/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eab7054d52981b8a2f4f7d811e7435a2a61ece991fce893e9fbf849713fd08be->leave($__internal_eab7054d52981b8a2f4f7d811e7435a2a61ece991fce893e9fbf849713fd08be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_856960f0bc3a241f7fdcacff17915540b2a4c2e1513a1691cb44ebc804989c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856960f0bc3a241f7fdcacff17915540b2a4c2e1513a1691cb44ebc804989c5b->enter($__internal_856960f0bc3a241f7fdcacff17915540b2a4c2e1513a1691cb44ebc804989c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle/views/Group/show.html.twig", 4)->display($context);
        
        $__internal_856960f0bc3a241f7fdcacff17915540b2a4c2e1513a1691cb44ebc804989c5b->leave($__internal_856960f0bc3a241f7fdcacff17915540b2a4c2e1513a1691cb44ebc804989c5b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle/views/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle/views/Group/show.html.twig", "C:\\wamp\\www\\permisfute\\app\\Resources\\views\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
