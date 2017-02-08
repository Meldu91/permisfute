<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_2288cc6471866004e90f2fc1299b271f832b6b691517c1f2e43e40e38971cf25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_a989c5c0e339441bcfc14eb5d66a27cb45fff4c7c7cbd408973edca97a03f25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a989c5c0e339441bcfc14eb5d66a27cb45fff4c7c7cbd408973edca97a03f25b->enter($__internal_a989c5c0e339441bcfc14eb5d66a27cb45fff4c7c7cbd408973edca97a03f25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a989c5c0e339441bcfc14eb5d66a27cb45fff4c7c7cbd408973edca97a03f25b->leave($__internal_a989c5c0e339441bcfc14eb5d66a27cb45fff4c7c7cbd408973edca97a03f25b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72889d538c5dbba3717ff6d55d736025c6803540b69674234dbfe53d0989295f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72889d538c5dbba3717ff6d55d736025c6803540b69674234dbfe53d0989295f->enter($__internal_72889d538c5dbba3717ff6d55d736025c6803540b69674234dbfe53d0989295f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_72889d538c5dbba3717ff6d55d736025c6803540b69674234dbfe53d0989295f->leave($__internal_72889d538c5dbba3717ff6d55d736025c6803540b69674234dbfe53d0989295f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
", "@FOSUser/Group/show.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
