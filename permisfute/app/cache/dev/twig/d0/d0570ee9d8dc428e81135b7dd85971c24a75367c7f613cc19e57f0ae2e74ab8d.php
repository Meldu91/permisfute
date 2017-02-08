<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_aa47c73f5adf2c097ad4e6c3daa6a517e16693661d1d1555498f8ef04782f2c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_871311447dad929d40e0f36914f2795db30798b906bd44ece9cee0b3269ff090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871311447dad929d40e0f36914f2795db30798b906bd44ece9cee0b3269ff090->enter($__internal_871311447dad929d40e0f36914f2795db30798b906bd44ece9cee0b3269ff090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_871311447dad929d40e0f36914f2795db30798b906bd44ece9cee0b3269ff090->leave($__internal_871311447dad929d40e0f36914f2795db30798b906bd44ece9cee0b3269ff090_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e40b6c2183198c6a289aecf5a307e152b619b3ef274946c89d5189c7c52cd90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e40b6c2183198c6a289aecf5a307e152b619b3ef274946c89d5189c7c52cd90->enter($__internal_3e40b6c2183198c6a289aecf5a307e152b619b3ef274946c89d5189c7c52cd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_3e40b6c2183198c6a289aecf5a307e152b619b3ef274946c89d5189c7c52cd90->leave($__internal_3e40b6c2183198c6a289aecf5a307e152b619b3ef274946c89d5189c7c52cd90_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
