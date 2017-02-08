<?php

/* FOSUserBundle/views/Profile/show.html.twig */
class __TwigTemplate_98601093c5d4739cae43a22db85ed24ea63bb94e085e1113f8ff2eff6d1d2f3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle/views/Profile/show.html.twig", 1);
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
        $__internal_f5c969a2b398e1f857dbb112e213b337b693168f01c0772daf1a3309bfab3803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c969a2b398e1f857dbb112e213b337b693168f01c0772daf1a3309bfab3803->enter($__internal_f5c969a2b398e1f857dbb112e213b337b693168f01c0772daf1a3309bfab3803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle/views/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5c969a2b398e1f857dbb112e213b337b693168f01c0772daf1a3309bfab3803->leave($__internal_f5c969a2b398e1f857dbb112e213b337b693168f01c0772daf1a3309bfab3803_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b490f1cb5024dac8fa17f8f6bbf71f8ebe4b3252a56d600e07c6d65d60190178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b490f1cb5024dac8fa17f8f6bbf71f8ebe4b3252a56d600e07c6d65d60190178->enter($__internal_b490f1cb5024dac8fa17f8f6bbf71f8ebe4b3252a56d600e07c6d65d60190178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle/views/Profile/show.html.twig", 4)->display($context);
        
        $__internal_b490f1cb5024dac8fa17f8f6bbf71f8ebe4b3252a56d600e07c6d65d60190178->leave($__internal_b490f1cb5024dac8fa17f8f6bbf71f8ebe4b3252a56d600e07c6d65d60190178_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle/views/Profile/show.html.twig";
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
", "FOSUserBundle/views/Profile/show.html.twig", "C:\\wamp\\www\\permisfute\\app\\Resources\\views\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
