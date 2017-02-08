<?php

/* FOSUserBundle/views/Group/edit.html.twig */
class __TwigTemplate_7d6ab610a8f11e7c1a5ade7be0d4e6d851e58781e1f8d971dec2650ded59cff5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle/views/Group/edit.html.twig", 1);
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
        $__internal_646388722c49431cfbb9329c3bb398a37c7091f5cbab84229aca6450486ffed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_646388722c49431cfbb9329c3bb398a37c7091f5cbab84229aca6450486ffed2->enter($__internal_646388722c49431cfbb9329c3bb398a37c7091f5cbab84229aca6450486ffed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle/views/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_646388722c49431cfbb9329c3bb398a37c7091f5cbab84229aca6450486ffed2->leave($__internal_646388722c49431cfbb9329c3bb398a37c7091f5cbab84229aca6450486ffed2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6cbda4ab401743892c1b1f82da2651cdaf4bbbb7f9beb1b79009994d01cfa7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbda4ab401743892c1b1f82da2651cdaf4bbbb7f9beb1b79009994d01cfa7fa->enter($__internal_6cbda4ab401743892c1b1f82da2651cdaf4bbbb7f9beb1b79009994d01cfa7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle/views/Group/edit.html.twig", 4)->display($context);
        
        $__internal_6cbda4ab401743892c1b1f82da2651cdaf4bbbb7f9beb1b79009994d01cfa7fa->leave($__internal_6cbda4ab401743892c1b1f82da2651cdaf4bbbb7f9beb1b79009994d01cfa7fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle/views/Group/edit.html.twig";
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
", "FOSUserBundle/views/Group/edit.html.twig", "C:\\wamp\\www\\permisfute\\app\\Resources\\views\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
