<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_94e8e3205ed9da87ed1474bb9bcd810bfc37a558faa15b5255d570d1d51ccf60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_260fd5936a5c012ca608be0088a18f7854dbe5c3d6473113c666d0601fc74725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260fd5936a5c012ca608be0088a18f7854dbe5c3d6473113c666d0601fc74725->enter($__internal_260fd5936a5c012ca608be0088a18f7854dbe5c3d6473113c666d0601fc74725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_260fd5936a5c012ca608be0088a18f7854dbe5c3d6473113c666d0601fc74725->leave($__internal_260fd5936a5c012ca608be0088a18f7854dbe5c3d6473113c666d0601fc74725_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_470c1972fd8d54cdaeea09d55a55c962807d221f0819c176ab1ada2b3d8c423b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_470c1972fd8d54cdaeea09d55a55c962807d221f0819c176ab1ada2b3d8c423b->enter($__internal_470c1972fd8d54cdaeea09d55a55c962807d221f0819c176ab1ada2b3d8c423b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_470c1972fd8d54cdaeea09d55a55c962807d221f0819c176ab1ada2b3d8c423b->leave($__internal_470c1972fd8d54cdaeea09d55a55c962807d221f0819c176ab1ada2b3d8c423b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
