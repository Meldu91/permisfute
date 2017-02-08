<?php

/* FOSUserBundle/views/Profile/edit.html.twig */
class __TwigTemplate_7faeaa5a21d53dd790d6e03dfb77149360c5cf5de7c6f26491ab4b3b213fbb69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle/views/Profile/edit.html.twig", 1);
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
        $__internal_dc0153bdb1b142dcbb5fb92b5128d347bd03c335ca84df20ede2eb0c931a09b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0153bdb1b142dcbb5fb92b5128d347bd03c335ca84df20ede2eb0c931a09b7->enter($__internal_dc0153bdb1b142dcbb5fb92b5128d347bd03c335ca84df20ede2eb0c931a09b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle/views/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc0153bdb1b142dcbb5fb92b5128d347bd03c335ca84df20ede2eb0c931a09b7->leave($__internal_dc0153bdb1b142dcbb5fb92b5128d347bd03c335ca84df20ede2eb0c931a09b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb9c10aa025744813425491bed1db88a2f89eed0974879edc67bb2b8a714dc6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9c10aa025744813425491bed1db88a2f89eed0974879edc67bb2b8a714dc6b->enter($__internal_eb9c10aa025744813425491bed1db88a2f89eed0974879edc67bb2b8a714dc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle/views/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_eb9c10aa025744813425491bed1db88a2f89eed0974879edc67bb2b8a714dc6b->leave($__internal_eb9c10aa025744813425491bed1db88a2f89eed0974879edc67bb2b8a714dc6b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle/views/Profile/edit.html.twig";
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
", "FOSUserBundle/views/Profile/edit.html.twig", "C:\\wamp\\www\\permisfute\\app\\Resources\\views\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
