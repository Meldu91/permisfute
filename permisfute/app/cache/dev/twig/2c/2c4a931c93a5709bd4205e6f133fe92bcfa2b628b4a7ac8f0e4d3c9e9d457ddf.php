<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_0455ab84e75e6d7bdde33e21c180897f50c662a5d7c855499593144de5bfb345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_30aec6c8f8dd0a95bb103da3b0d301a5f76554b79cf6f4e4dc6c1985aa8f6347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30aec6c8f8dd0a95bb103da3b0d301a5f76554b79cf6f4e4dc6c1985aa8f6347->enter($__internal_30aec6c8f8dd0a95bb103da3b0d301a5f76554b79cf6f4e4dc6c1985aa8f6347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30aec6c8f8dd0a95bb103da3b0d301a5f76554b79cf6f4e4dc6c1985aa8f6347->leave($__internal_30aec6c8f8dd0a95bb103da3b0d301a5f76554b79cf6f4e4dc6c1985aa8f6347_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd44e7911fff8b0808585eec365a04b7f8814ba18fd67a2437a13d02294e17d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd44e7911fff8b0808585eec365a04b7f8814ba18fd67a2437a13d02294e17d5->enter($__internal_fd44e7911fff8b0808585eec365a04b7f8814ba18fd67a2437a13d02294e17d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_fd44e7911fff8b0808585eec365a04b7f8814ba18fd67a2437a13d02294e17d5->leave($__internal_fd44e7911fff8b0808585eec365a04b7f8814ba18fd67a2437a13d02294e17d5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
