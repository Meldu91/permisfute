<?php

/* :FOSUserBundle/views/Profile:show.html.twig */
class __TwigTemplate_2bfe0723d923537551350e5e345db48c97ee2a74636409119fb3e519f26aeb47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", ":FOSUserBundle/views/Profile:show.html.twig", 1);
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
        $__internal_cc32843e4e4de99ce9b6117845142f0d3fd84cb882e89256c8372e8d48dcea4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc32843e4e4de99ce9b6117845142f0d3fd84cb882e89256c8372e8d48dcea4f->enter($__internal_cc32843e4e4de99ce9b6117845142f0d3fd84cb882e89256c8372e8d48dcea4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views/Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc32843e4e4de99ce9b6117845142f0d3fd84cb882e89256c8372e8d48dcea4f->leave($__internal_cc32843e4e4de99ce9b6117845142f0d3fd84cb882e89256c8372e8d48dcea4f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ae7079d3896da7e6de3a3f22cf15013fd6b5ebe2d2849f4bcbc00ca23b91ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae7079d3896da7e6de3a3f22cf15013fd6b5ebe2d2849f4bcbc00ca23b91ce2->enter($__internal_2ae7079d3896da7e6de3a3f22cf15013fd6b5ebe2d2849f4bcbc00ca23b91ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", ":FOSUserBundle/views/Profile:show.html.twig", 4)->display($context);
        
        $__internal_2ae7079d3896da7e6de3a3f22cf15013fd6b5ebe2d2849f4bcbc00ca23b91ce2->leave($__internal_2ae7079d3896da7e6de3a3f22cf15013fd6b5ebe2d2849f4bcbc00ca23b91ce2_prof);

    }

    public function getTemplateName()
    {
        return ":FOSUserBundle/views/Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", ":FOSUserBundle/views/Profile:show.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources\\views/FOSUserBundle/views/Profile/show.html.twig");
    }
}
