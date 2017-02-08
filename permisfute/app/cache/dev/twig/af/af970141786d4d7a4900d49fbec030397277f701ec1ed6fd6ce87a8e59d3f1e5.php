<?php

/* :FOSUserBundle/views/Resetting:email.txt.twig */
class __TwigTemplate_dd5883e4715ac37c20c3514548c9bcab6d038fab6616b6a3b140af5fc781f7c5 extends Twig_Template
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
        $__internal_22046c912d1379cb90e5be7f9517e7e524064f410ebdbebf7b79cb3d95320a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22046c912d1379cb90e5be7f9517e7e524064f410ebdbebf7b79cb3d95320a2e->enter($__internal_22046c912d1379cb90e5be7f9517e7e524064f410ebdbebf7b79cb3d95320a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views/Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_22046c912d1379cb90e5be7f9517e7e524064f410ebdbebf7b79cb3d95320a2e->leave($__internal_22046c912d1379cb90e5be7f9517e7e524064f410ebdbebf7b79cb3d95320a2e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6e2141f55ade81546e8a521d030fd61fc0f4c2a725caac50412452f41c88c768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2141f55ade81546e8a521d030fd61fc0f4c2a725caac50412452f41c88c768->enter($__internal_6e2141f55ade81546e8a521d030fd61fc0f4c2a725caac50412452f41c88c768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_6e2141f55ade81546e8a521d030fd61fc0f4c2a725caac50412452f41c88c768->leave($__internal_6e2141f55ade81546e8a521d030fd61fc0f4c2a725caac50412452f41c88c768_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4ceaa483d04995aa517fe89573a9e27df3fb6969b270b4f5d439e60f47133176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ceaa483d04995aa517fe89573a9e27df3fb6969b270b4f5d439e60f47133176->enter($__internal_4ceaa483d04995aa517fe89573a9e27df3fb6969b270b4f5d439e60f47133176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4ceaa483d04995aa517fe89573a9e27df3fb6969b270b4f5d439e60f47133176->leave($__internal_4ceaa483d04995aa517fe89573a9e27df3fb6969b270b4f5d439e60f47133176_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5a0c87fe9642bc39e737b46ceb95ab6f7bf18c21ffc5dce82ad15da9868e36c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0c87fe9642bc39e737b46ceb95ab6f7bf18c21ffc5dce82ad15da9868e36c0->enter($__internal_5a0c87fe9642bc39e737b46ceb95ab6f7bf18c21ffc5dce82ad15da9868e36c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5a0c87fe9642bc39e737b46ceb95ab6f7bf18c21ffc5dce82ad15da9868e36c0->leave($__internal_5a0c87fe9642bc39e737b46ceb95ab6f7bf18c21ffc5dce82ad15da9868e36c0_prof);

    }

    public function getTemplateName()
    {
        return ":FOSUserBundle/views/Resetting:email.txt.twig";
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
", ":FOSUserBundle/views/Resetting:email.txt.twig", "C:\\wamp\\www\\permisfute\\app/Resources\\views/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
