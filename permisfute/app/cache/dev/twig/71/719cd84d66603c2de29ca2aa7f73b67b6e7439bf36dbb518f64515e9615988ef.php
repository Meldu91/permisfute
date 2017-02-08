<?php

/* FOSUserBundle/views/Registration/email.txt.twig */
class __TwigTemplate_5c82244d15e4788c73519e8de9bb812ab31c538fbb92e2cb04d31f7691ac875b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b974763377d556774918798d8b256e696bd86a1e4d04e3896127fa2bd0a7bcba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b974763377d556774918798d8b256e696bd86a1e4d04e3896127fa2bd0a7bcba->enter($__internal_b974763377d556774918798d8b256e696bd86a1e4d04e3896127fa2bd0a7bcba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle/views/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b974763377d556774918798d8b256e696bd86a1e4d04e3896127fa2bd0a7bcba->leave($__internal_b974763377d556774918798d8b256e696bd86a1e4d04e3896127fa2bd0a7bcba_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b6175f3701035fc26e7c46084153cd2da14aa76d8d941923f97ada2444a79c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6175f3701035fc26e7c46084153cd2da14aa76d8d941923f97ada2444a79c01->enter($__internal_b6175f3701035fc26e7c46084153cd2da14aa76d8d941923f97ada2444a79c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b6175f3701035fc26e7c46084153cd2da14aa76d8d941923f97ada2444a79c01->leave($__internal_b6175f3701035fc26e7c46084153cd2da14aa76d8d941923f97ada2444a79c01_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_66745c3b12f51cacbe6160091aaa2c2775043beeb1a551ebebb2004bad41ada2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66745c3b12f51cacbe6160091aaa2c2775043beeb1a551ebebb2004bad41ada2->enter($__internal_66745c3b12f51cacbe6160091aaa2c2775043beeb1a551ebebb2004bad41ada2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_66745c3b12f51cacbe6160091aaa2c2775043beeb1a551ebebb2004bad41ada2->leave($__internal_66745c3b12f51cacbe6160091aaa2c2775043beeb1a551ebebb2004bad41ada2_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_994e4ebc760695b0938194b7bc087086c262537fb71d65c4303e072c0e81ce17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_994e4ebc760695b0938194b7bc087086c262537fb71d65c4303e072c0e81ce17->enter($__internal_994e4ebc760695b0938194b7bc087086c262537fb71d65c4303e072c0e81ce17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_994e4ebc760695b0938194b7bc087086c262537fb71d65c4303e072c0e81ce17->leave($__internal_994e4ebc760695b0938194b7bc087086c262537fb71d65c4303e072c0e81ce17_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle/views/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle/views/Registration/email.txt.twig", "C:\\wamp\\www\\permisfute\\app\\Resources\\views\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
