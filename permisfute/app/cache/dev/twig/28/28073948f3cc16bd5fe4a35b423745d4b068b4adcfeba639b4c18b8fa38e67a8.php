<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_1da5da9cf6fc54687c232cf532830279d2dd166ec5719978cd38c195af99b8c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_3c540d6907a0e578b392159462617b14598d7b70ac0e8dcae3cbb52e91fe408e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c540d6907a0e578b392159462617b14598d7b70ac0e8dcae3cbb52e91fe408e->enter($__internal_3c540d6907a0e578b392159462617b14598d7b70ac0e8dcae3cbb52e91fe408e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c540d6907a0e578b392159462617b14598d7b70ac0e8dcae3cbb52e91fe408e->leave($__internal_3c540d6907a0e578b392159462617b14598d7b70ac0e8dcae3cbb52e91fe408e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a70fc6ae62d81055f09d42ee8744ffd8d297f7649547bf37c5e4633d7252eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a70fc6ae62d81055f09d42ee8744ffd8d297f7649547bf37c5e4633d7252eee->enter($__internal_0a70fc6ae62d81055f09d42ee8744ffd8d297f7649547bf37c5e4633d7252eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_0a70fc6ae62d81055f09d42ee8744ffd8d297f7649547bf37c5e4633d7252eee->leave($__internal_0a70fc6ae62d81055f09d42ee8744ffd8d297f7649547bf37c5e4633d7252eee_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
", "@FOSUser/Resetting/checkEmail.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\checkEmail.html.twig");
    }
}
