<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_73a7a6e6a564a067256e36b7bd7737f2fd13d406ec2b55eb187447c5a8e4db7b extends Twig_Template
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
        $__internal_2a370a8ad01ae5e48a8c2146b90874df301d9df5bc4929a3f8f51b71f108042d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a370a8ad01ae5e48a8c2146b90874df301d9df5bc4929a3f8f51b71f108042d->enter($__internal_2a370a8ad01ae5e48a8c2146b90874df301d9df5bc4929a3f8f51b71f108042d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a370a8ad01ae5e48a8c2146b90874df301d9df5bc4929a3f8f51b71f108042d->leave($__internal_2a370a8ad01ae5e48a8c2146b90874df301d9df5bc4929a3f8f51b71f108042d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_739fadb1c9106ba38db8745e12a64312828de96101bc68ca934cbae0562ff46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739fadb1c9106ba38db8745e12a64312828de96101bc68ca934cbae0562ff46f->enter($__internal_739fadb1c9106ba38db8745e12a64312828de96101bc68ca934cbae0562ff46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_739fadb1c9106ba38db8745e12a64312828de96101bc68ca934cbae0562ff46f->leave($__internal_739fadb1c9106ba38db8745e12a64312828de96101bc68ca934cbae0562ff46f_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
