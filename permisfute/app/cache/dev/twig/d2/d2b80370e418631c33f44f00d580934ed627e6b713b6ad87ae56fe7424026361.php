<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_7ab71a165f29904affe642cb4ef8076f8b1db9fa7ea09af6ac4a5e9ff0fc2252 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_7df70f02f6d94953d249c9e660b990e0d19ee7b0a8198948f5f0d0e37335ffeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df70f02f6d94953d249c9e660b990e0d19ee7b0a8198948f5f0d0e37335ffeb->enter($__internal_7df70f02f6d94953d249c9e660b990e0d19ee7b0a8198948f5f0d0e37335ffeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7df70f02f6d94953d249c9e660b990e0d19ee7b0a8198948f5f0d0e37335ffeb->leave($__internal_7df70f02f6d94953d249c9e660b990e0d19ee7b0a8198948f5f0d0e37335ffeb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d337b43c5b0cee26d867896afedab96a13a3db0bd23abd9f9338a59b815bee67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d337b43c5b0cee26d867896afedab96a13a3db0bd23abd9f9338a59b815bee67->enter($__internal_d337b43c5b0cee26d867896afedab96a13a3db0bd23abd9f9338a59b815bee67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_d337b43c5b0cee26d867896afedab96a13a3db0bd23abd9f9338a59b815bee67->leave($__internal_d337b43c5b0cee26d867896afedab96a13a3db0bd23abd9f9338a59b815bee67_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
