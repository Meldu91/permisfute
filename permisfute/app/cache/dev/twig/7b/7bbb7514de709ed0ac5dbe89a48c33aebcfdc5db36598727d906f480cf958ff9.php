<?php

/* :FOSUserBundle/views/Group:new.html.twig */
class __TwigTemplate_a04c79f185565b94535b38febf35946fe15c4dd8ef2e3e43db1cafeed15d2f7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", ":FOSUserBundle/views/Group:new.html.twig", 1);
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
        $__internal_42c60276d64e1c8cff64c622f033d221326db3706d35cadee134a942ff6b8a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c60276d64e1c8cff64c622f033d221326db3706d35cadee134a942ff6b8a10->enter($__internal_42c60276d64e1c8cff64c622f033d221326db3706d35cadee134a942ff6b8a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views/Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42c60276d64e1c8cff64c622f033d221326db3706d35cadee134a942ff6b8a10->leave($__internal_42c60276d64e1c8cff64c622f033d221326db3706d35cadee134a942ff6b8a10_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_475eef9f4e1232056f49bb2cca38625256bade924434b597faccd8cb5ac478c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_475eef9f4e1232056f49bb2cca38625256bade924434b597faccd8cb5ac478c6->enter($__internal_475eef9f4e1232056f49bb2cca38625256bade924434b597faccd8cb5ac478c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", ":FOSUserBundle/views/Group:new.html.twig", 4)->display($context);
        
        $__internal_475eef9f4e1232056f49bb2cca38625256bade924434b597faccd8cb5ac478c6->leave($__internal_475eef9f4e1232056f49bb2cca38625256bade924434b597faccd8cb5ac478c6_prof);

    }

    public function getTemplateName()
    {
        return ":FOSUserBundle/views/Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", ":FOSUserBundle/views/Group:new.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources\\views/FOSUserBundle/views/Group/new.html.twig");
    }
}
