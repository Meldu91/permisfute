<?php

/* FOSUserBundle/views/Registration/register.html.twig */
class __TwigTemplate_21f08eebc846627457597af6e36f9166dec3ce6f6d125ce3216ab77a73cd30f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle/views/Registration/register.html.twig", 1);
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
        $__internal_8db9905d127e2b21f8694699686025bf4a2da15544f18395f3a54aee8ca0e4f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db9905d127e2b21f8694699686025bf4a2da15544f18395f3a54aee8ca0e4f7->enter($__internal_8db9905d127e2b21f8694699686025bf4a2da15544f18395f3a54aee8ca0e4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle/views/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8db9905d127e2b21f8694699686025bf4a2da15544f18395f3a54aee8ca0e4f7->leave($__internal_8db9905d127e2b21f8694699686025bf4a2da15544f18395f3a54aee8ca0e4f7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c851dbdc80661e14b2ee9e4ea88c7f44597c0c3f4c9d8d5bfbcc398d11a050aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c851dbdc80661e14b2ee9e4ea88c7f44597c0c3f4c9d8d5bfbcc398d11a050aa->enter($__internal_c851dbdc80661e14b2ee9e4ea88c7f44597c0c3f4c9d8d5bfbcc398d11a050aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle/views/Registration/register.html.twig", 4)->display($context);
        
        $__internal_c851dbdc80661e14b2ee9e4ea88c7f44597c0c3f4c9d8d5bfbcc398d11a050aa->leave($__internal_c851dbdc80661e14b2ee9e4ea88c7f44597c0c3f4c9d8d5bfbcc398d11a050aa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle/views/Registration/register.html.twig";
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
", "FOSUserBundle/views/Registration/register.html.twig", "C:\\wamp\\www\\permisfute\\app\\Resources\\views\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
