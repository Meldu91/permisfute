<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_6f159f7aa0bf32313f5acbd9f03da302abbaab7f84df3525d0981de9ba528049 extends Twig_Template
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
        $__internal_ce1d2104ac652a400ed9e619b8eff2c86d107e94b0ba6ba88a93dd7487aeba4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1d2104ac652a400ed9e619b8eff2c86d107e94b0ba6ba88a93dd7487aeba4d->enter($__internal_ce1d2104ac652a400ed9e619b8eff2c86d107e94b0ba6ba88a93dd7487aeba4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce1d2104ac652a400ed9e619b8eff2c86d107e94b0ba6ba88a93dd7487aeba4d->leave($__internal_ce1d2104ac652a400ed9e619b8eff2c86d107e94b0ba6ba88a93dd7487aeba4d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_27004e8bf5e484d2a2b37c5cc6f3d6fe600621a2f618ebfab7537707401086b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27004e8bf5e484d2a2b37c5cc6f3d6fe600621a2f618ebfab7537707401086b6->enter($__internal_27004e8bf5e484d2a2b37c5cc6f3d6fe600621a2f618ebfab7537707401086b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_27004e8bf5e484d2a2b37c5cc6f3d6fe600621a2f618ebfab7537707401086b6->leave($__internal_27004e8bf5e484d2a2b37c5cc6f3d6fe600621a2f618ebfab7537707401086b6_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\permisfute\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
