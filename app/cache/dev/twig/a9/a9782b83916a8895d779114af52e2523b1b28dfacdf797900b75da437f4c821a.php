<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_818b2a2fb7b033df19ae66a69eb43e34188c93a87f0fe7a1d524d5f3965b0fee extends Twig_Template
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
        $__internal_591f0ae1180ff22825823d611041cda73157f27272ea0bcaca5fe006983ca032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591f0ae1180ff22825823d611041cda73157f27272ea0bcaca5fe006983ca032->enter($__internal_591f0ae1180ff22825823d611041cda73157f27272ea0bcaca5fe006983ca032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_591f0ae1180ff22825823d611041cda73157f27272ea0bcaca5fe006983ca032->leave($__internal_591f0ae1180ff22825823d611041cda73157f27272ea0bcaca5fe006983ca032_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77a931141b79afa40d53e9807796993e1f27f3db0f2c0e5c86d79529c35dcf17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a931141b79afa40d53e9807796993e1f27f3db0f2c0e5c86d79529c35dcf17->enter($__internal_77a931141b79afa40d53e9807796993e1f27f3db0f2c0e5c86d79529c35dcf17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_77a931141b79afa40d53e9807796993e1f27f3db0f2c0e5c86d79529c35dcf17->leave($__internal_77a931141b79afa40d53e9807796993e1f27f3db0f2c0e5c86d79529c35dcf17_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\permisfute\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
