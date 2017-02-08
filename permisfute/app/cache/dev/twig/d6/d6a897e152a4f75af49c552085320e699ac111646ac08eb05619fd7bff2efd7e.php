<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_fe848d4814f2428485c66f95a329532c65a694e2b3f74446b27ad8f86227a7d2 extends Twig_Template
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
        $__internal_805e8ca77623b1f4b355036410a37bd73752fa8df97c692fd5d54d5c7b8f9d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805e8ca77623b1f4b355036410a37bd73752fa8df97c692fd5d54d5c7b8f9d8c->enter($__internal_805e8ca77623b1f4b355036410a37bd73752fa8df97c692fd5d54d5c7b8f9d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_805e8ca77623b1f4b355036410a37bd73752fa8df97c692fd5d54d5c7b8f9d8c->leave($__internal_805e8ca77623b1f4b355036410a37bd73752fa8df97c692fd5d54d5c7b8f9d8c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6fee335d88661ced98bca93658b605d1d811c85854f622e0da67d68275ddc0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fee335d88661ced98bca93658b605d1d811c85854f622e0da67d68275ddc0e9->enter($__internal_6fee335d88661ced98bca93658b605d1d811c85854f622e0da67d68275ddc0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_6fee335d88661ced98bca93658b605d1d811c85854f622e0da67d68275ddc0e9->leave($__internal_6fee335d88661ced98bca93658b605d1d811c85854f622e0da67d68275ddc0e9_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
