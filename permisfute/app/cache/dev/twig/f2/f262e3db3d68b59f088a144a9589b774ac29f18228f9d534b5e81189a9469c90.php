<?php

/* :FOSUserBundle/views/Profile:edit.html.twig */
class __TwigTemplate_b1f0796527eb07c08da9e24e3040cdb5fb76eebe24119a108c34bf6461347337 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", ":FOSUserBundle/views/Profile:edit.html.twig", 1);
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
        $__internal_d3e21a52362bc4a8af35d4f6b75e283378854074841209342e6062a0d4804c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e21a52362bc4a8af35d4f6b75e283378854074841209342e6062a0d4804c31->enter($__internal_d3e21a52362bc4a8af35d4f6b75e283378854074841209342e6062a0d4804c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views/Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3e21a52362bc4a8af35d4f6b75e283378854074841209342e6062a0d4804c31->leave($__internal_d3e21a52362bc4a8af35d4f6b75e283378854074841209342e6062a0d4804c31_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d7fbaf188a5252f6ff668404d8bf658c1e2f0a3e4eec7179bf00f0a83bcb1ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7fbaf188a5252f6ff668404d8bf658c1e2f0a3e4eec7179bf00f0a83bcb1ef->enter($__internal_6d7fbaf188a5252f6ff668404d8bf658c1e2f0a3e4eec7179bf00f0a83bcb1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", ":FOSUserBundle/views/Profile:edit.html.twig", 4)->display($context);
        
        $__internal_6d7fbaf188a5252f6ff668404d8bf658c1e2f0a3e4eec7179bf00f0a83bcb1ef->leave($__internal_6d7fbaf188a5252f6ff668404d8bf658c1e2f0a3e4eec7179bf00f0a83bcb1ef_prof);

    }

    public function getTemplateName()
    {
        return ":FOSUserBundle/views/Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", ":FOSUserBundle/views/Profile:edit.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources\\views/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
