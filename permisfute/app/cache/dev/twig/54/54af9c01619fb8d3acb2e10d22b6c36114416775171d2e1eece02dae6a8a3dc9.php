<?php

/* :FOSUserBundle/views/Group:show.html.twig */
class __TwigTemplate_7f615fb94d601b114aba4431779f621de83ad50f8800e7e915dd43ecd184f821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", ":FOSUserBundle/views/Group:show.html.twig", 1);
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
        $__internal_b7d22171a98226a5322e4393871108a21d089c4efed7c2eecf6cbd25ced9d797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d22171a98226a5322e4393871108a21d089c4efed7c2eecf6cbd25ced9d797->enter($__internal_b7d22171a98226a5322e4393871108a21d089c4efed7c2eecf6cbd25ced9d797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views/Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7d22171a98226a5322e4393871108a21d089c4efed7c2eecf6cbd25ced9d797->leave($__internal_b7d22171a98226a5322e4393871108a21d089c4efed7c2eecf6cbd25ced9d797_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed54f639100437f76bda483ea3c8c881c2797b0dcf0e4a1561b7108fd1e00c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed54f639100437f76bda483ea3c8c881c2797b0dcf0e4a1561b7108fd1e00c58->enter($__internal_ed54f639100437f76bda483ea3c8c881c2797b0dcf0e4a1561b7108fd1e00c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", ":FOSUserBundle/views/Group:show.html.twig", 4)->display($context);
        
        $__internal_ed54f639100437f76bda483ea3c8c881c2797b0dcf0e4a1561b7108fd1e00c58->leave($__internal_ed54f639100437f76bda483ea3c8c881c2797b0dcf0e4a1561b7108fd1e00c58_prof);

    }

    public function getTemplateName()
    {
        return ":FOSUserBundle/views/Group:show.html.twig";
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
", ":FOSUserBundle/views/Group:show.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources\\views/FOSUserBundle/views/Group/show.html.twig");
    }
}
