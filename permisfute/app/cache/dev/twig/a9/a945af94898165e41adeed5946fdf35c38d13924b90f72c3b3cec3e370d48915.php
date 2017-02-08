<?php

/* :FOSUserBundle/views/Registration:register.html.twig */
class __TwigTemplate_e8bf66738e738527268c9182b92f0e61b7e73c4a07ba771a409a63c299fd3748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", ":FOSUserBundle/views/Registration:register.html.twig", 1);
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
        $__internal_f7bd4bd7f63f56998b8d0206702f8fd22103e5d626dcd3a4d34d2bafcb7c4467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bd4bd7f63f56998b8d0206702f8fd22103e5d626dcd3a4d34d2bafcb7c4467->enter($__internal_f7bd4bd7f63f56998b8d0206702f8fd22103e5d626dcd3a4d34d2bafcb7c4467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views/Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7bd4bd7f63f56998b8d0206702f8fd22103e5d626dcd3a4d34d2bafcb7c4467->leave($__internal_f7bd4bd7f63f56998b8d0206702f8fd22103e5d626dcd3a4d34d2bafcb7c4467_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eca169d1313556d6d4503e21ce86c82b5d6a7c63a1da4c57b24b75147ea10b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca169d1313556d6d4503e21ce86c82b5d6a7c63a1da4c57b24b75147ea10b2a->enter($__internal_eca169d1313556d6d4503e21ce86c82b5d6a7c63a1da4c57b24b75147ea10b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", ":FOSUserBundle/views/Registration:register.html.twig", 4)->display($context);
        
        $__internal_eca169d1313556d6d4503e21ce86c82b5d6a7c63a1da4c57b24b75147ea10b2a->leave($__internal_eca169d1313556d6d4503e21ce86c82b5d6a7c63a1da4c57b24b75147ea10b2a_prof);

    }

    public function getTemplateName()
    {
        return ":FOSUserBundle/views/Registration:register.html.twig";
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
", ":FOSUserBundle/views/Registration:register.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources\\views/FOSUserBundle/views/Registration/register.html.twig");
    }
}
