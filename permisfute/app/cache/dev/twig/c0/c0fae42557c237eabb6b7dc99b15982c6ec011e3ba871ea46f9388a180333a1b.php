<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_25287810513c2232f0414f55bbfdbed8af5dd5d13476172f0e31f230a1ef9b99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_0a34356598df32849c6130e70501f3f9eb79a099e34bbc20e7c1316105e6832b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a34356598df32849c6130e70501f3f9eb79a099e34bbc20e7c1316105e6832b->enter($__internal_0a34356598df32849c6130e70501f3f9eb79a099e34bbc20e7c1316105e6832b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a34356598df32849c6130e70501f3f9eb79a099e34bbc20e7c1316105e6832b->leave($__internal_0a34356598df32849c6130e70501f3f9eb79a099e34bbc20e7c1316105e6832b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a382f8bab010fe7af42bae4bf01fc45b70c54e61af1353f7d2734495851204ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a382f8bab010fe7af42bae4bf01fc45b70c54e61af1353f7d2734495851204ad->enter($__internal_a382f8bab010fe7af42bae4bf01fc45b70c54e61af1353f7d2734495851204ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_a382f8bab010fe7af42bae4bf01fc45b70c54e61af1353f7d2734495851204ad->leave($__internal_a382f8bab010fe7af42bae4bf01fc45b70c54e61af1353f7d2734495851204ad_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
