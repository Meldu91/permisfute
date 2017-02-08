<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_079058442b03362fa30dda9048fbb4b6a02c5262796b29aade84881b06762e96 extends Twig_Template
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
        $__internal_545d8c6f8739c420f7f5e9de5a1de715e12902e6b87090e85720f0ba130452d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545d8c6f8739c420f7f5e9de5a1de715e12902e6b87090e85720f0ba130452d3->enter($__internal_545d8c6f8739c420f7f5e9de5a1de715e12902e6b87090e85720f0ba130452d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_545d8c6f8739c420f7f5e9de5a1de715e12902e6b87090e85720f0ba130452d3->leave($__internal_545d8c6f8739c420f7f5e9de5a1de715e12902e6b87090e85720f0ba130452d3_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0700daf10056040ea1628cbd49282b1363cd260530795bc0ce81359c20ed8118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0700daf10056040ea1628cbd49282b1363cd260530795bc0ce81359c20ed8118->enter($__internal_0700daf10056040ea1628cbd49282b1363cd260530795bc0ce81359c20ed8118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0700daf10056040ea1628cbd49282b1363cd260530795bc0ce81359c20ed8118->leave($__internal_0700daf10056040ea1628cbd49282b1363cd260530795bc0ce81359c20ed8118_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8bb1903a2f970578a4f1b6bc9faaee42093ebcbe58c1a2f85c9dc320b1e853fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb1903a2f970578a4f1b6bc9faaee42093ebcbe58c1a2f85c9dc320b1e853fd->enter($__internal_8bb1903a2f970578a4f1b6bc9faaee42093ebcbe58c1a2f85c9dc320b1e853fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8bb1903a2f970578a4f1b6bc9faaee42093ebcbe58c1a2f85c9dc320b1e853fd->leave($__internal_8bb1903a2f970578a4f1b6bc9faaee42093ebcbe58c1a2f85c9dc320b1e853fd_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9e0edc3ed8a6123af093f8776376a13d5887249dd4b5716bca7461e2d3f24d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0edc3ed8a6123af093f8776376a13d5887249dd4b5716bca7461e2d3f24d55->enter($__internal_9e0edc3ed8a6123af093f8776376a13d5887249dd4b5716bca7461e2d3f24d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9e0edc3ed8a6123af093f8776376a13d5887249dd4b5716bca7461e2d3f24d55->leave($__internal_9e0edc3ed8a6123af093f8776376a13d5887249dd4b5716bca7461e2d3f24d55_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
