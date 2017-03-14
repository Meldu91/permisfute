<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_67f00715f7ff17718a3b22167a810c6cd8556cde0cf56a66da73a4b40cee2a45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_e17f97660e2dcc4323d9b3c5c91d5a84a271ed1c7d3a93a1e22b76b63dae205e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17f97660e2dcc4323d9b3c5c91d5a84a271ed1c7d3a93a1e22b76b63dae205e->enter($__internal_e17f97660e2dcc4323d9b3c5c91d5a84a271ed1c7d3a93a1e22b76b63dae205e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e17f97660e2dcc4323d9b3c5c91d5a84a271ed1c7d3a93a1e22b76b63dae205e->leave($__internal_e17f97660e2dcc4323d9b3c5c91d5a84a271ed1c7d3a93a1e22b76b63dae205e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d7665356172900e386a4eaca6827684834447eaa19a3430e6fb51eee5fff730a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7665356172900e386a4eaca6827684834447eaa19a3430e6fb51eee5fff730a->enter($__internal_d7665356172900e386a4eaca6827684834447eaa19a3430e6fb51eee5fff730a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_d7665356172900e386a4eaca6827684834447eaa19a3430e6fb51eee5fff730a->leave($__internal_d7665356172900e386a4eaca6827684834447eaa19a3430e6fb51eee5fff730a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\permisfute\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
