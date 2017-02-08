<?php

/* FOSUserBundle/views/Group/list.html.twig */
class __TwigTemplate_403d9a4fb9ba697f94864e62723a413cfbd665e070dc6a5cfacd006ce4ce3200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle/views/Group/list.html.twig", 1);
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
        $__internal_3c165a34a950be4a774b1256625468e02231ff15683f51be0172d9087b5b0467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c165a34a950be4a774b1256625468e02231ff15683f51be0172d9087b5b0467->enter($__internal_3c165a34a950be4a774b1256625468e02231ff15683f51be0172d9087b5b0467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle/views/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c165a34a950be4a774b1256625468e02231ff15683f51be0172d9087b5b0467->leave($__internal_3c165a34a950be4a774b1256625468e02231ff15683f51be0172d9087b5b0467_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8525cc10e654fb109fe032aa3ad121e69b1633938e6b7338b2c3bd5b2d0ffb70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8525cc10e654fb109fe032aa3ad121e69b1633938e6b7338b2c3bd5b2d0ffb70->enter($__internal_8525cc10e654fb109fe032aa3ad121e69b1633938e6b7338b2c3bd5b2d0ffb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle/views/Group/list.html.twig", 4)->display($context);
        
        $__internal_8525cc10e654fb109fe032aa3ad121e69b1633938e6b7338b2c3bd5b2d0ffb70->leave($__internal_8525cc10e654fb109fe032aa3ad121e69b1633938e6b7338b2c3bd5b2d0ffb70_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle/views/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle/views/Group/list.html.twig", "C:\\wamp\\www\\permisfute\\app\\Resources\\views\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
