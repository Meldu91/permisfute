<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_cf1ba08f46dbd8f8a4e91d6f5d12674f740c4234fff4aef7cd047207ba9a21c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_6f194477e28078c0de2e99531ab29fb902b575ca480856b95010f17cf843da0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f194477e28078c0de2e99531ab29fb902b575ca480856b95010f17cf843da0c->enter($__internal_6f194477e28078c0de2e99531ab29fb902b575ca480856b95010f17cf843da0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f194477e28078c0de2e99531ab29fb902b575ca480856b95010f17cf843da0c->leave($__internal_6f194477e28078c0de2e99531ab29fb902b575ca480856b95010f17cf843da0c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_158504c67d0f5145074a527abc192c196ae8daea7fc85380546da593e4ca4abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158504c67d0f5145074a527abc192c196ae8daea7fc85380546da593e4ca4abc->enter($__internal_158504c67d0f5145074a527abc192c196ae8daea7fc85380546da593e4ca4abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_158504c67d0f5145074a527abc192c196ae8daea7fc85380546da593e4ca4abc->leave($__internal_158504c67d0f5145074a527abc192c196ae8daea7fc85380546da593e4ca4abc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
