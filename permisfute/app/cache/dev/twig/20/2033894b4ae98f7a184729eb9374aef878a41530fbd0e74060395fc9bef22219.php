<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_dfc7a6d2d4c53fcc9a81a4b8f683477ed84186d2ef29827664bed56c17ec06e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_edf01dfa2aad7ef83550267ee6769389fa2bf4be79eef9b9325084ba276a0dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf01dfa2aad7ef83550267ee6769389fa2bf4be79eef9b9325084ba276a0dae->enter($__internal_edf01dfa2aad7ef83550267ee6769389fa2bf4be79eef9b9325084ba276a0dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edf01dfa2aad7ef83550267ee6769389fa2bf4be79eef9b9325084ba276a0dae->leave($__internal_edf01dfa2aad7ef83550267ee6769389fa2bf4be79eef9b9325084ba276a0dae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc1d9df848d302e450e7b23df0b062923482b1fab4c3280edc905857ba92eba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc1d9df848d302e450e7b23df0b062923482b1fab4c3280edc905857ba92eba1->enter($__internal_cc1d9df848d302e450e7b23df0b062923482b1fab4c3280edc905857ba92eba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_cc1d9df848d302e450e7b23df0b062923482b1fab4c3280edc905857ba92eba1->leave($__internal_cc1d9df848d302e450e7b23df0b062923482b1fab4c3280edc905857ba92eba1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
