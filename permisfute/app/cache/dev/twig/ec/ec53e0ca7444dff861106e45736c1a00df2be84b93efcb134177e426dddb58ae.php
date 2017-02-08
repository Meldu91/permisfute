<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_3ce3c38fa8aab3368f2df0f898949cc63b79ea92d818913e3d5aac2d829e4dea extends Twig_Template
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
        $__internal_74cf8d32bc87d1d589ee259593ba4378ab0ebb043e0a3f049ac34ae0176ba88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74cf8d32bc87d1d589ee259593ba4378ab0ebb043e0a3f049ac34ae0176ba88f->enter($__internal_74cf8d32bc87d1d589ee259593ba4378ab0ebb043e0a3f049ac34ae0176ba88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_74cf8d32bc87d1d589ee259593ba4378ab0ebb043e0a3f049ac34ae0176ba88f->leave($__internal_74cf8d32bc87d1d589ee259593ba4378ab0ebb043e0a3f049ac34ae0176ba88f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d98f6d9f7e61a37248d9323844b3b20339c3c90973fc173a2635bcc8bea82e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98f6d9f7e61a37248d9323844b3b20339c3c90973fc173a2635bcc8bea82e0e->enter($__internal_d98f6d9f7e61a37248d9323844b3b20339c3c90973fc173a2635bcc8bea82e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_d98f6d9f7e61a37248d9323844b3b20339c3c90973fc173a2635bcc8bea82e0e->leave($__internal_d98f6d9f7e61a37248d9323844b3b20339c3c90973fc173a2635bcc8bea82e0e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6ca94a18f7eda72af4096c2f65a79b49e3b9a39149b2cb3ac9ec2ed66c43b5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca94a18f7eda72af4096c2f65a79b49e3b9a39149b2cb3ac9ec2ed66c43b5b5->enter($__internal_6ca94a18f7eda72af4096c2f65a79b49e3b9a39149b2cb3ac9ec2ed66c43b5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6ca94a18f7eda72af4096c2f65a79b49e3b9a39149b2cb3ac9ec2ed66c43b5b5->leave($__internal_6ca94a18f7eda72af4096c2f65a79b49e3b9a39149b2cb3ac9ec2ed66c43b5b5_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_559862324b76dca0520e55cae188db92e3fb804c01eacc3f0b1f073f4a85c9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559862324b76dca0520e55cae188db92e3fb804c01eacc3f0b1f073f4a85c9cb->enter($__internal_559862324b76dca0520e55cae188db92e3fb804c01eacc3f0b1f073f4a85c9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_559862324b76dca0520e55cae188db92e3fb804c01eacc3f0b1f073f4a85c9cb->leave($__internal_559862324b76dca0520e55cae188db92e3fb804c01eacc3f0b1f073f4a85c9cb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
{{ 'resetting.email.subject'|trans }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
