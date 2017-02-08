<?php

/* FOSUserBundle/views/Resetting/request.html.twig */
class __TwigTemplate_dd5e2e5f8c6548566d16b14aa3ac0141ccdf7b56f33aa7b7abe9c509d480864d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle/views/Resetting/request.html.twig", 1);
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
        $__internal_7ae8e9dd7cdafe914bd6604cb6ca5b5f51f76e4697963c6b0430021cf96c6b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae8e9dd7cdafe914bd6604cb6ca5b5f51f76e4697963c6b0430021cf96c6b82->enter($__internal_7ae8e9dd7cdafe914bd6604cb6ca5b5f51f76e4697963c6b0430021cf96c6b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle/views/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ae8e9dd7cdafe914bd6604cb6ca5b5f51f76e4697963c6b0430021cf96c6b82->leave($__internal_7ae8e9dd7cdafe914bd6604cb6ca5b5f51f76e4697963c6b0430021cf96c6b82_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2dfd31e9a5ac190209207f6b7fc66fcac24ecba43756323b589523526d790a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dfd31e9a5ac190209207f6b7fc66fcac24ecba43756323b589523526d790a6a->enter($__internal_2dfd31e9a5ac190209207f6b7fc66fcac24ecba43756323b589523526d790a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle/views/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_2dfd31e9a5ac190209207f6b7fc66fcac24ecba43756323b589523526d790a6a->leave($__internal_2dfd31e9a5ac190209207f6b7fc66fcac24ecba43756323b589523526d790a6a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle/views/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle/views/Resetting/request.html.twig", "C:\\wamp\\www\\permisfute\\app\\Resources\\views\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
