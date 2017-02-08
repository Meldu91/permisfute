<?php

/* :FOSUserBundle/views/Registration:email.txt.twig */
class __TwigTemplate_2afe96639ec01f9e9b31dcf7c7c55ed900b397abd339eb766e591f7f8329d4a5 extends Twig_Template
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
        $__internal_224624d29b61c39ae0ec82af02a35ea6255141769a114cd4f816ff2432729824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224624d29b61c39ae0ec82af02a35ea6255141769a114cd4f816ff2432729824->enter($__internal_224624d29b61c39ae0ec82af02a35ea6255141769a114cd4f816ff2432729824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views/Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_224624d29b61c39ae0ec82af02a35ea6255141769a114cd4f816ff2432729824->leave($__internal_224624d29b61c39ae0ec82af02a35ea6255141769a114cd4f816ff2432729824_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dec8917b0617741af6efdca6d9589c7b1fb0844782884e3bc560a20caa98e592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec8917b0617741af6efdca6d9589c7b1fb0844782884e3bc560a20caa98e592->enter($__internal_dec8917b0617741af6efdca6d9589c7b1fb0844782884e3bc560a20caa98e592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_dec8917b0617741af6efdca6d9589c7b1fb0844782884e3bc560a20caa98e592->leave($__internal_dec8917b0617741af6efdca6d9589c7b1fb0844782884e3bc560a20caa98e592_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bbb873a9183267bcb036229d5e2b323ab89cdfdc9f75710f6e24b144df03a19f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb873a9183267bcb036229d5e2b323ab89cdfdc9f75710f6e24b144df03a19f->enter($__internal_bbb873a9183267bcb036229d5e2b323ab89cdfdc9f75710f6e24b144df03a19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bbb873a9183267bcb036229d5e2b323ab89cdfdc9f75710f6e24b144df03a19f->leave($__internal_bbb873a9183267bcb036229d5e2b323ab89cdfdc9f75710f6e24b144df03a19f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_769a1247571764915e6606f53d90ef624d7acdda0116b6a8eac5da6eeeb423df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769a1247571764915e6606f53d90ef624d7acdda0116b6a8eac5da6eeeb423df->enter($__internal_769a1247571764915e6606f53d90ef624d7acdda0116b6a8eac5da6eeeb423df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_769a1247571764915e6606f53d90ef624d7acdda0116b6a8eac5da6eeeb423df->leave($__internal_769a1247571764915e6606f53d90ef624d7acdda0116b6a8eac5da6eeeb423df_prof);

    }

    public function getTemplateName()
    {
        return ":FOSUserBundle/views/Registration:email.txt.twig";
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
", ":FOSUserBundle/views/Registration:email.txt.twig", "C:\\wamp\\www\\permisfute\\app/Resources\\views/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
