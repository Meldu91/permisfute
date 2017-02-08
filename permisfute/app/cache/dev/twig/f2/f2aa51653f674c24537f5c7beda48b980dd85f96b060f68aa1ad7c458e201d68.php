<?php

/* :FOSUserBundle/views/Resetting:request.html.twig */
class __TwigTemplate_af50463090d328df0f1696f26cbf4d751a02e9ab1f9af1715a30e13856241137 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", ":FOSUserBundle/views/Resetting:request.html.twig", 1);
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
        $__internal_c1718d8d8cef826cb4f8e36020235109dc766b6a991a5531b06a9b8a580aaaea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1718d8d8cef826cb4f8e36020235109dc766b6a991a5531b06a9b8a580aaaea->enter($__internal_c1718d8d8cef826cb4f8e36020235109dc766b6a991a5531b06a9b8a580aaaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views/Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1718d8d8cef826cb4f8e36020235109dc766b6a991a5531b06a9b8a580aaaea->leave($__internal_c1718d8d8cef826cb4f8e36020235109dc766b6a991a5531b06a9b8a580aaaea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df7d2277326b045a7e38958b5b821f8d478f8606d80ec2bf34c42fd63cffcdbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df7d2277326b045a7e38958b5b821f8d478f8606d80ec2bf34c42fd63cffcdbd->enter($__internal_df7d2277326b045a7e38958b5b821f8d478f8606d80ec2bf34c42fd63cffcdbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", ":FOSUserBundle/views/Resetting:request.html.twig", 4)->display($context);
        
        $__internal_df7d2277326b045a7e38958b5b821f8d478f8606d80ec2bf34c42fd63cffcdbd->leave($__internal_df7d2277326b045a7e38958b5b821f8d478f8606d80ec2bf34c42fd63cffcdbd_prof);

    }

    public function getTemplateName()
    {
        return ":FOSUserBundle/views/Resetting:request.html.twig";
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
", ":FOSUserBundle/views/Resetting:request.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources\\views/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
