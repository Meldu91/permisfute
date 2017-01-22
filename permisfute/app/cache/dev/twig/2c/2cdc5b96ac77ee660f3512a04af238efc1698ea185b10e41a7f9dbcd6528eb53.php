<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_ea4f53810200a8ab21752f50e025a09edb367c093666f77c1e89675c3d440d5f extends Twig_Template
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
        $__internal_e6384cfb7392afa1623f2289a3bb97390c5e320ea187b406fafdfe636c9efdc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6384cfb7392afa1623f2289a3bb97390c5e320ea187b406fafdfe636c9efdc0->enter($__internal_e6384cfb7392afa1623f2289a3bb97390c5e320ea187b406fafdfe636c9efdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6384cfb7392afa1623f2289a3bb97390c5e320ea187b406fafdfe636c9efdc0->leave($__internal_e6384cfb7392afa1623f2289a3bb97390c5e320ea187b406fafdfe636c9efdc0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df0f7fa63b12714d492a3ae86df6af9d55d3cd3cfb48a7eccf3f3c2dffe9cd88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0f7fa63b12714d492a3ae86df6af9d55d3cd3cfb48a7eccf3f3c2dffe9cd88->enter($__internal_df0f7fa63b12714d492a3ae86df6af9d55d3cd3cfb48a7eccf3f3c2dffe9cd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_df0f7fa63b12714d492a3ae86df6af9d55d3cd3cfb48a7eccf3f3c2dffe9cd88->leave($__internal_df0f7fa63b12714d492a3ae86df6af9d55d3cd3cfb48a7eccf3f3c2dffe9cd88_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
