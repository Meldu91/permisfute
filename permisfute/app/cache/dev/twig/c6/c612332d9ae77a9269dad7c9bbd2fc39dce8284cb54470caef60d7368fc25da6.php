<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_876c4c5ce6af353a31a43bd1883c59d80bf3c0fd2d0f068ca49d7a2388dedd3f extends Twig_Template
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
        $__internal_d9a8983cb26eb2d7c065bfe24ff43e58d9bf00f742c32f87390037b5c346ecfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a8983cb26eb2d7c065bfe24ff43e58d9bf00f742c32f87390037b5c346ecfc->enter($__internal_d9a8983cb26eb2d7c065bfe24ff43e58d9bf00f742c32f87390037b5c346ecfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d9a8983cb26eb2d7c065bfe24ff43e58d9bf00f742c32f87390037b5c346ecfc->leave($__internal_d9a8983cb26eb2d7c065bfe24ff43e58d9bf00f742c32f87390037b5c346ecfc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f9650e930da5d2f12bd5185a75a29fa7b4423610fb10e13f9d9d92abb23bc7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9650e930da5d2f12bd5185a75a29fa7b4423610fb10e13f9d9d92abb23bc7e9->enter($__internal_f9650e930da5d2f12bd5185a75a29fa7b4423610fb10e13f9d9d92abb23bc7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_f9650e930da5d2f12bd5185a75a29fa7b4423610fb10e13f9d9d92abb23bc7e9->leave($__internal_f9650e930da5d2f12bd5185a75a29fa7b4423610fb10e13f9d9d92abb23bc7e9_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b99d4125e273f7fe0c142f5a2011155f2a5c68cc196031f32368dfe24d586f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99d4125e273f7fe0c142f5a2011155f2a5c68cc196031f32368dfe24d586f5e->enter($__internal_b99d4125e273f7fe0c142f5a2011155f2a5c68cc196031f32368dfe24d586f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b99d4125e273f7fe0c142f5a2011155f2a5c68cc196031f32368dfe24d586f5e->leave($__internal_b99d4125e273f7fe0c142f5a2011155f2a5c68cc196031f32368dfe24d586f5e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b27cd90f83082c554d374a9bf59a37c0a291d39a8504ff8c7e7fae8216912f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27cd90f83082c554d374a9bf59a37c0a291d39a8504ff8c7e7fae8216912f48->enter($__internal_b27cd90f83082c554d374a9bf59a37c0a291d39a8504ff8c7e7fae8216912f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b27cd90f83082c554d374a9bf59a37c0a291d39a8504ff8c7e7fae8216912f48->leave($__internal_b27cd90f83082c554d374a9bf59a37c0a291d39a8504ff8c7e7fae8216912f48_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
