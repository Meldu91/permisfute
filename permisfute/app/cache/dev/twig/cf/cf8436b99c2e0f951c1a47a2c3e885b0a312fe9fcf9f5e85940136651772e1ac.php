<?php

/* :FOSUserBundle/views/Group:list.html.twig */
class __TwigTemplate_48265ff5499c5e39e6ef9efdd38fd6ea77f1d0945a780259c801154aa6936d33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", ":FOSUserBundle/views/Group:list.html.twig", 1);
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
        $__internal_7cbf9ab33dffb0f8bac7d756f593d77bf11e9815c5e3b47dc98b633b6f5ccee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbf9ab33dffb0f8bac7d756f593d77bf11e9815c5e3b47dc98b633b6f5ccee1->enter($__internal_7cbf9ab33dffb0f8bac7d756f593d77bf11e9815c5e3b47dc98b633b6f5ccee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views/Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cbf9ab33dffb0f8bac7d756f593d77bf11e9815c5e3b47dc98b633b6f5ccee1->leave($__internal_7cbf9ab33dffb0f8bac7d756f593d77bf11e9815c5e3b47dc98b633b6f5ccee1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f998a24c7d559359228d2597a770670fe4d3daba67dc9eba6c3a09045423bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f998a24c7d559359228d2597a770670fe4d3daba67dc9eba6c3a09045423bfe->enter($__internal_7f998a24c7d559359228d2597a770670fe4d3daba67dc9eba6c3a09045423bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", ":FOSUserBundle/views/Group:list.html.twig", 4)->display($context);
        
        $__internal_7f998a24c7d559359228d2597a770670fe4d3daba67dc9eba6c3a09045423bfe->leave($__internal_7f998a24c7d559359228d2597a770670fe4d3daba67dc9eba6c3a09045423bfe_prof);

    }

    public function getTemplateName()
    {
        return ":FOSUserBundle/views/Group:list.html.twig";
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
", ":FOSUserBundle/views/Group:list.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources\\views/FOSUserBundle/views/Group/list.html.twig");
    }
}
