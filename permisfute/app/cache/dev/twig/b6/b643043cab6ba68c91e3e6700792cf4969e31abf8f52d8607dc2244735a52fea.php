<?php

/* FOSUserBundle/views/Resetting/checkEmail.html.twig */
class __TwigTemplate_5062a39a16908bbaebd0bad38ee42c46d72f84313dd9e4819477347c561de984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle/views/Resetting/checkEmail.html.twig", 1);
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
        $__internal_575956b3e1be4b52b1c1139e2ddb0497d504d59a02ccf3b39679f80616508c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575956b3e1be4b52b1c1139e2ddb0497d504d59a02ccf3b39679f80616508c79->enter($__internal_575956b3e1be4b52b1c1139e2ddb0497d504d59a02ccf3b39679f80616508c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle/views/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_575956b3e1be4b52b1c1139e2ddb0497d504d59a02ccf3b39679f80616508c79->leave($__internal_575956b3e1be4b52b1c1139e2ddb0497d504d59a02ccf3b39679f80616508c79_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a17a09363e8d7550f67bc8f4e01a5dbe3332108283c98ceaa3c2bf41ad934254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17a09363e8d7550f67bc8f4e01a5dbe3332108283c98ceaa3c2bf41ad934254->enter($__internal_a17a09363e8d7550f67bc8f4e01a5dbe3332108283c98ceaa3c2bf41ad934254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_a17a09363e8d7550f67bc8f4e01a5dbe3332108283c98ceaa3c2bf41ad934254->leave($__internal_a17a09363e8d7550f67bc8f4e01a5dbe3332108283c98ceaa3c2bf41ad934254_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle/views/Resetting/checkEmail.html.twig";
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
", "FOSUserBundle/views/Resetting/checkEmail.html.twig", "C:\\wamp\\www\\permisfute\\app\\Resources\\views\\FOSUserBundle\\views\\Resetting\\checkEmail.html.twig");
    }
}
