<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_44104e43de45bcc6eaa4a0b116f360eb27d155b964a04c152b91c2562ade8d55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f1401a448352156f9230bfe1458a01877a1f9b441d137946e58bef1abcc1deab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1401a448352156f9230bfe1458a01877a1f9b441d137946e58bef1abcc1deab->enter($__internal_f1401a448352156f9230bfe1458a01877a1f9b441d137946e58bef1abcc1deab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1401a448352156f9230bfe1458a01877a1f9b441d137946e58bef1abcc1deab->leave($__internal_f1401a448352156f9230bfe1458a01877a1f9b441d137946e58bef1abcc1deab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_901bf140353289af1fe8686c0649dec63e09c9cd8ca2a9ebb0f01c4713e2b094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901bf140353289af1fe8686c0649dec63e09c9cd8ca2a9ebb0f01c4713e2b094->enter($__internal_901bf140353289af1fe8686c0649dec63e09c9cd8ca2a9ebb0f01c4713e2b094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_901bf140353289af1fe8686c0649dec63e09c9cd8ca2a9ebb0f01c4713e2b094->leave($__internal_901bf140353289af1fe8686c0649dec63e09c9cd8ca2a9ebb0f01c4713e2b094_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
