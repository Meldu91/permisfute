<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_63cb37a79ef7a8c4322183a99c66945e00527c03499c39f76ecc41dfab0a0766 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_65c2e9addeecc1f8a4ecf7d74facf9b1b9b834a115ba8e5f0742c1c8fdc71d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c2e9addeecc1f8a4ecf7d74facf9b1b9b834a115ba8e5f0742c1c8fdc71d89->enter($__internal_65c2e9addeecc1f8a4ecf7d74facf9b1b9b834a115ba8e5f0742c1c8fdc71d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65c2e9addeecc1f8a4ecf7d74facf9b1b9b834a115ba8e5f0742c1c8fdc71d89->leave($__internal_65c2e9addeecc1f8a4ecf7d74facf9b1b9b834a115ba8e5f0742c1c8fdc71d89_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91467a534ea6b8c18f9e21fa7f9c16a025c33ca9f4100c3ce1d3c9673dac3aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91467a534ea6b8c18f9e21fa7f9c16a025c33ca9f4100c3ce1d3c9673dac3aad->enter($__internal_91467a534ea6b8c18f9e21fa7f9c16a025c33ca9f4100c3ce1d3c9673dac3aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_91467a534ea6b8c18f9e21fa7f9c16a025c33ca9f4100c3ce1d3c9673dac3aad->leave($__internal_91467a534ea6b8c18f9e21fa7f9c16a025c33ca9f4100c3ce1d3c9673dac3aad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "C:\\wamp64\\www\\permisfute\\app/Resources/FOSUserBundle/views/ChangePassword/changePassword.html.twig");
    }
}
