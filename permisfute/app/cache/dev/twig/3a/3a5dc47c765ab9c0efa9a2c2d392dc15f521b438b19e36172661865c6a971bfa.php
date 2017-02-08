<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d23d645f290aede17207576c415ff968556f6274202999c4b177e35051570275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_60164ded2bda90e672a14dcd5e8df94cf2baae91109355bc84254238c1c35f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60164ded2bda90e672a14dcd5e8df94cf2baae91109355bc84254238c1c35f0a->enter($__internal_60164ded2bda90e672a14dcd5e8df94cf2baae91109355bc84254238c1c35f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60164ded2bda90e672a14dcd5e8df94cf2baae91109355bc84254238c1c35f0a->leave($__internal_60164ded2bda90e672a14dcd5e8df94cf2baae91109355bc84254238c1c35f0a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34e9a5f45312cab526a0386cf40d001dcf7b2962767a8935def841b6e7cb13b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e9a5f45312cab526a0386cf40d001dcf7b2962767a8935def841b6e7cb13b5->enter($__internal_34e9a5f45312cab526a0386cf40d001dcf7b2962767a8935def841b6e7cb13b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_34e9a5f45312cab526a0386cf40d001dcf7b2962767a8935def841b6e7cb13b5->leave($__internal_34e9a5f45312cab526a0386cf40d001dcf7b2962767a8935def841b6e7cb13b5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
