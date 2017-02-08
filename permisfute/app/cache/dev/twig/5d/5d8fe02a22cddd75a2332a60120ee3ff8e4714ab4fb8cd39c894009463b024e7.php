<?php

/* FOSUserBundle/views/Resetting/email.txt.twig */
class __TwigTemplate_03331e8ba31dcefa265906bb8cd7e2aa6f07e4477d78d632fe1edb732f567bda extends Twig_Template
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
        $__internal_ec49d75270be904356288fed27328e8e93b9972fb7520606d2122cd7e6af615b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec49d75270be904356288fed27328e8e93b9972fb7520606d2122cd7e6af615b->enter($__internal_ec49d75270be904356288fed27328e8e93b9972fb7520606d2122cd7e6af615b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle/views/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ec49d75270be904356288fed27328e8e93b9972fb7520606d2122cd7e6af615b->leave($__internal_ec49d75270be904356288fed27328e8e93b9972fb7520606d2122cd7e6af615b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_75c6fe4ae083aaaf1a0d07a9dffd1ad31177ea785ab9178f5497bb7968aee961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c6fe4ae083aaaf1a0d07a9dffd1ad31177ea785ab9178f5497bb7968aee961->enter($__internal_75c6fe4ae083aaaf1a0d07a9dffd1ad31177ea785ab9178f5497bb7968aee961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_75c6fe4ae083aaaf1a0d07a9dffd1ad31177ea785ab9178f5497bb7968aee961->leave($__internal_75c6fe4ae083aaaf1a0d07a9dffd1ad31177ea785ab9178f5497bb7968aee961_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5dcd80d7a9c5d2e8b4414a76e0066786026015c7c33d798a7929ebfbf1f50efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dcd80d7a9c5d2e8b4414a76e0066786026015c7c33d798a7929ebfbf1f50efb->enter($__internal_5dcd80d7a9c5d2e8b4414a76e0066786026015c7c33d798a7929ebfbf1f50efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5dcd80d7a9c5d2e8b4414a76e0066786026015c7c33d798a7929ebfbf1f50efb->leave($__internal_5dcd80d7a9c5d2e8b4414a76e0066786026015c7c33d798a7929ebfbf1f50efb_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c1b70282416a1b59a6af6f19f47e835d57264aa0b2ea6468bc79dffff06ae0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b70282416a1b59a6af6f19f47e835d57264aa0b2ea6468bc79dffff06ae0ed->enter($__internal_c1b70282416a1b59a6af6f19f47e835d57264aa0b2ea6468bc79dffff06ae0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c1b70282416a1b59a6af6f19f47e835d57264aa0b2ea6468bc79dffff06ae0ed->leave($__internal_c1b70282416a1b59a6af6f19f47e835d57264aa0b2ea6468bc79dffff06ae0ed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle/views/Resetting/email.txt.twig";
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
", "FOSUserBundle/views/Resetting/email.txt.twig", "C:\\wamp\\www\\permisfute\\app\\Resources\\views\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
