<?php

/* FOSUserBundle/views/Group/new.html.twig */
class __TwigTemplate_1c91637b085527f5cdcda166f46d832f24dad7ecd031180f0c70ca6e873f4e5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle/views/Group/new.html.twig", 1);
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
        $__internal_a692dd0e320357a42b14e4151d9d76aed5946baf369ab0c5fd78618dd84cf7ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a692dd0e320357a42b14e4151d9d76aed5946baf369ab0c5fd78618dd84cf7ee->enter($__internal_a692dd0e320357a42b14e4151d9d76aed5946baf369ab0c5fd78618dd84cf7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle/views/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a692dd0e320357a42b14e4151d9d76aed5946baf369ab0c5fd78618dd84cf7ee->leave($__internal_a692dd0e320357a42b14e4151d9d76aed5946baf369ab0c5fd78618dd84cf7ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_030105b27615abc4a229ace3cc44dfea6d92f923d6c6c9081a95507ac7ec7508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_030105b27615abc4a229ace3cc44dfea6d92f923d6c6c9081a95507ac7ec7508->enter($__internal_030105b27615abc4a229ace3cc44dfea6d92f923d6c6c9081a95507ac7ec7508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle/views/Group/new.html.twig", 4)->display($context);
        
        $__internal_030105b27615abc4a229ace3cc44dfea6d92f923d6c6c9081a95507ac7ec7508->leave($__internal_030105b27615abc4a229ace3cc44dfea6d92f923d6c6c9081a95507ac7ec7508_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle/views/Group/new.html.twig";
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
", "FOSUserBundle/views/Group/new.html.twig", "C:\\wamp\\www\\permisfute\\app\\Resources\\views\\FOSUserBundle\\views\\Group\\new.html.twig");
    }
}
