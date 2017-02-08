<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_5dba35a3437dc4d9f195020e20f279d563bb8cb2c0d249897510f6cdc20c50fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_f779f54e915f45ef82fdc1f1cc4a541814a2897e210feadd31772217a78e9d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f779f54e915f45ef82fdc1f1cc4a541814a2897e210feadd31772217a78e9d71->enter($__internal_f779f54e915f45ef82fdc1f1cc4a541814a2897e210feadd31772217a78e9d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f779f54e915f45ef82fdc1f1cc4a541814a2897e210feadd31772217a78e9d71->leave($__internal_f779f54e915f45ef82fdc1f1cc4a541814a2897e210feadd31772217a78e9d71_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_943bead17de3b417244c2ef2a9e00495940b0e3049579f52ab2134bf6ec71077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943bead17de3b417244c2ef2a9e00495940b0e3049579f52ab2134bf6ec71077->enter($__internal_943bead17de3b417244c2ef2a9e00495940b0e3049579f52ab2134bf6ec71077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_943bead17de3b417244c2ef2a9e00495940b0e3049579f52ab2134bf6ec71077->leave($__internal_943bead17de3b417244c2ef2a9e00495940b0e3049579f52ab2134bf6ec71077_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
