<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_6f159f7aa0bf32313f5acbd9f03da302abbaab7f84df3525d0981de9ba528049 extends Twig_Template
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
        $__internal_ffabadfdf2263348c60a08a62943eea5dd28c7384b35a5192894aba2329cc857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffabadfdf2263348c60a08a62943eea5dd28c7384b35a5192894aba2329cc857->enter($__internal_ffabadfdf2263348c60a08a62943eea5dd28c7384b35a5192894aba2329cc857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffabadfdf2263348c60a08a62943eea5dd28c7384b35a5192894aba2329cc857->leave($__internal_ffabadfdf2263348c60a08a62943eea5dd28c7384b35a5192894aba2329cc857_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e38fe003a5fb8a8444e12ac70cce8370c5f5326f0eb16ea0895ab9d31b7580c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e38fe003a5fb8a8444e12ac70cce8370c5f5326f0eb16ea0895ab9d31b7580c->enter($__internal_8e38fe003a5fb8a8444e12ac70cce8370c5f5326f0eb16ea0895ab9d31b7580c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8e38fe003a5fb8a8444e12ac70cce8370c5f5326f0eb16ea0895ab9d31b7580c->leave($__internal_8e38fe003a5fb8a8444e12ac70cce8370c5f5326f0eb16ea0895ab9d31b7580c_prof);

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
