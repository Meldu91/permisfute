<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_417d1705a62910244932e83db39a02bf77682d339b8c7f10461e81bd88326839 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_76f570a87bd9c80d9392f3ae87c01c4bf6c818f16dfe1e73b632188775b6e0e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f570a87bd9c80d9392f3ae87c01c4bf6c818f16dfe1e73b632188775b6e0e0->enter($__internal_76f570a87bd9c80d9392f3ae87c01c4bf6c818f16dfe1e73b632188775b6e0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76f570a87bd9c80d9392f3ae87c01c4bf6c818f16dfe1e73b632188775b6e0e0->leave($__internal_76f570a87bd9c80d9392f3ae87c01c4bf6c818f16dfe1e73b632188775b6e0e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58dfb22d271718ebf13d6262046d8d4d07fe093b4f53bda4924c916c8973b74c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58dfb22d271718ebf13d6262046d8d4d07fe093b4f53bda4924c916c8973b74c->enter($__internal_58dfb22d271718ebf13d6262046d8d4d07fe093b4f53bda4924c916c8973b74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_58dfb22d271718ebf13d6262046d8d4d07fe093b4f53bda4924c916c8973b74c->leave($__internal_58dfb22d271718ebf13d6262046d8d4d07fe093b4f53bda4924c916c8973b74c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
