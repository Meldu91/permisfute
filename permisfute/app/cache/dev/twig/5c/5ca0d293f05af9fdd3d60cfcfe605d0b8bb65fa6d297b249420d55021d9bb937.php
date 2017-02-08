<?php

/* :FOSUserBundle/views/ChangePassword:changePassword.html.twig */
class __TwigTemplate_46d630f639ef3a14d1f6d08828cacfa89d0bb2cec0617675783d09d015b8c476 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", ":FOSUserBundle/views/ChangePassword:changePassword.html.twig", 1);
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
        $__internal_b2e36b1d0cbef68c5bf098f429e8ad5f12163bbbe84f9c0e5d7518254f0c39a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e36b1d0cbef68c5bf098f429e8ad5f12163bbbe84f9c0e5d7518254f0c39a0->enter($__internal_b2e36b1d0cbef68c5bf098f429e8ad5f12163bbbe84f9c0e5d7518254f0c39a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views/ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2e36b1d0cbef68c5bf098f429e8ad5f12163bbbe84f9c0e5d7518254f0c39a0->leave($__internal_b2e36b1d0cbef68c5bf098f429e8ad5f12163bbbe84f9c0e5d7518254f0c39a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b63db6b9a4d0848eca6b41ab02de781a70f911f154294b05d7cb59ce9a4810b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b63db6b9a4d0848eca6b41ab02de781a70f911f154294b05d7cb59ce9a4810b->enter($__internal_9b63db6b9a4d0848eca6b41ab02de781a70f911f154294b05d7cb59ce9a4810b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", ":FOSUserBundle/views/ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_9b63db6b9a4d0848eca6b41ab02de781a70f911f154294b05d7cb59ce9a4810b->leave($__internal_9b63db6b9a4d0848eca6b41ab02de781a70f911f154294b05d7cb59ce9a4810b_prof);

    }

    public function getTemplateName()
    {
        return ":FOSUserBundle/views/ChangePassword:changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", ":FOSUserBundle/views/ChangePassword:changePassword.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources\\views/FOSUserBundle/views/ChangePassword/changePassword.html.twig");
    }
}
