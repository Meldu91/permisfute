<?php

/* :FOSUserBundle/views/Group:edit.html.twig */
class __TwigTemplate_ae0489eb7a5675f82f1d3f38e4d7b9f790239974816402cdf48d31b8306b7200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", ":FOSUserBundle/views/Group:edit.html.twig", 1);
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
        $__internal_768e9e21e81c4b8900b151f97c850ad66a59c727bbed0d2f7543ec2ef23fc95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768e9e21e81c4b8900b151f97c850ad66a59c727bbed0d2f7543ec2ef23fc95d->enter($__internal_768e9e21e81c4b8900b151f97c850ad66a59c727bbed0d2f7543ec2ef23fc95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views/Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_768e9e21e81c4b8900b151f97c850ad66a59c727bbed0d2f7543ec2ef23fc95d->leave($__internal_768e9e21e81c4b8900b151f97c850ad66a59c727bbed0d2f7543ec2ef23fc95d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80d9692090a7d6f7b85ba253cbad14ffb573af8b58a593411f59bd4d165e5d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d9692090a7d6f7b85ba253cbad14ffb573af8b58a593411f59bd4d165e5d8f->enter($__internal_80d9692090a7d6f7b85ba253cbad14ffb573af8b58a593411f59bd4d165e5d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", ":FOSUserBundle/views/Group:edit.html.twig", 4)->display($context);
        
        $__internal_80d9692090a7d6f7b85ba253cbad14ffb573af8b58a593411f59bd4d165e5d8f->leave($__internal_80d9692090a7d6f7b85ba253cbad14ffb573af8b58a593411f59bd4d165e5d8f_prof);

    }

    public function getTemplateName()
    {
        return ":FOSUserBundle/views/Group:edit.html.twig";
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
", ":FOSUserBundle/views/Group:edit.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources\\views/FOSUserBundle/views/Group/edit.html.twig");
    }
}
