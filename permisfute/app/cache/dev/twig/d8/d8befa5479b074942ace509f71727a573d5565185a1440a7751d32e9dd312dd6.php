<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_34e3b85dd621b906100bfb4440e5b39890170485725cbbb588e0938a1999653f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_5584ec37dd88f08070c9ce921c1c3c7cf248fcb04eace1518a4ec9c9ae51989f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5584ec37dd88f08070c9ce921c1c3c7cf248fcb04eace1518a4ec9c9ae51989f->enter($__internal_5584ec37dd88f08070c9ce921c1c3c7cf248fcb04eace1518a4ec9c9ae51989f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5584ec37dd88f08070c9ce921c1c3c7cf248fcb04eace1518a4ec9c9ae51989f->leave($__internal_5584ec37dd88f08070c9ce921c1c3c7cf248fcb04eace1518a4ec9c9ae51989f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0bf8c6f5f36a47f6c314bb33f41f68f3ea51e65ef68ac9a2acc8b08f38149efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf8c6f5f36a47f6c314bb33f41f68f3ea51e65ef68ac9a2acc8b08f38149efd->enter($__internal_0bf8c6f5f36a47f6c314bb33f41f68f3ea51e65ef68ac9a2acc8b08f38149efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0bf8c6f5f36a47f6c314bb33f41f68f3ea51e65ef68ac9a2acc8b08f38149efd->leave($__internal_0bf8c6f5f36a47f6c314bb33f41f68f3ea51e65ef68ac9a2acc8b08f38149efd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/checkEmail.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\checkEmail.html.twig");
    }
}
