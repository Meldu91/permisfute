<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_44104e43de45bcc6eaa4a0b116f360eb27d155b964a04c152b91c2562ade8d55 extends Twig_Template
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
        $__internal_bce4782bf601559e1db0eb45c7536bea76b53eac69652ca0e2b87e0beab6f28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce4782bf601559e1db0eb45c7536bea76b53eac69652ca0e2b87e0beab6f28f->enter($__internal_bce4782bf601559e1db0eb45c7536bea76b53eac69652ca0e2b87e0beab6f28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bce4782bf601559e1db0eb45c7536bea76b53eac69652ca0e2b87e0beab6f28f->leave($__internal_bce4782bf601559e1db0eb45c7536bea76b53eac69652ca0e2b87e0beab6f28f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49e2241e925865373b325893c91d2f07a50204a00def36aa022543a67c84c880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e2241e925865373b325893c91d2f07a50204a00def36aa022543a67c84c880->enter($__internal_49e2241e925865373b325893c91d2f07a50204a00def36aa022543a67c84c880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_49e2241e925865373b325893c91d2f07a50204a00def36aa022543a67c84c880->leave($__internal_49e2241e925865373b325893c91d2f07a50204a00def36aa022543a67c84c880_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
