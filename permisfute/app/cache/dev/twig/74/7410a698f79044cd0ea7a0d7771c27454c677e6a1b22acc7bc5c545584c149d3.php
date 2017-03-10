<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a024e11da02beacb4459de16f1d0cc9c9ea78fbb19dd76d07b02eb2080bb435c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_94e6f2df6c1132dd4d676601e4e3e1afa880f6a3da00bdf40966776ff5c9212a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e6f2df6c1132dd4d676601e4e3e1afa880f6a3da00bdf40966776ff5c9212a->enter($__internal_94e6f2df6c1132dd4d676601e4e3e1afa880f6a3da00bdf40966776ff5c9212a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94e6f2df6c1132dd4d676601e4e3e1afa880f6a3da00bdf40966776ff5c9212a->leave($__internal_94e6f2df6c1132dd4d676601e4e3e1afa880f6a3da00bdf40966776ff5c9212a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24dc2df9c251d6d099765d4d3928b656c60ae2484e11ecf8bbebd8625aa2e90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24dc2df9c251d6d099765d4d3928b656c60ae2484e11ecf8bbebd8625aa2e90c->enter($__internal_24dc2df9c251d6d099765d4d3928b656c60ae2484e11ecf8bbebd8625aa2e90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_24dc2df9c251d6d099765d4d3928b656c60ae2484e11ecf8bbebd8625aa2e90c->leave($__internal_24dc2df9c251d6d099765d4d3928b656c60ae2484e11ecf8bbebd8625aa2e90c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
