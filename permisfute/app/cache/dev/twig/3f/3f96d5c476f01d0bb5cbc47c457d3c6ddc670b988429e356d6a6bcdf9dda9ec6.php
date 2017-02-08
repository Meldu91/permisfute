<?php

/* :FOSUserBundle/views/Registration:checkEmail.html.twig */
class __TwigTemplate_0cfa93044dd9103ab17a38a6d7212633e96095c7879d5e84d7f4b27af01119be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", ":FOSUserBundle/views/Registration:checkEmail.html.twig", 1);
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
        $__internal_e2a73640bfcb48e8ff942d4421ca46d78868f87ec0ad5291f7b44657585e0a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a73640bfcb48e8ff942d4421ca46d78868f87ec0ad5291f7b44657585e0a46->enter($__internal_e2a73640bfcb48e8ff942d4421ca46d78868f87ec0ad5291f7b44657585e0a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views/Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2a73640bfcb48e8ff942d4421ca46d78868f87ec0ad5291f7b44657585e0a46->leave($__internal_e2a73640bfcb48e8ff942d4421ca46d78868f87ec0ad5291f7b44657585e0a46_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dca0c0abf7419b4a28285c5ea002320ab0f57ac20e153766ac15f4994b5e2b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca0c0abf7419b4a28285c5ea002320ab0f57ac20e153766ac15f4994b5e2b2f->enter($__internal_dca0c0abf7419b4a28285c5ea002320ab0f57ac20e153766ac15f4994b5e2b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_dca0c0abf7419b4a28285c5ea002320ab0f57ac20e153766ac15f4994b5e2b2f->leave($__internal_dca0c0abf7419b4a28285c5ea002320ab0f57ac20e153766ac15f4994b5e2b2f_prof);

    }

    public function getTemplateName()
    {
        return ":FOSUserBundle/views/Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", ":FOSUserBundle/views/Registration:checkEmail.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources\\views/FOSUserBundle/views/Registration/checkEmail.html.twig");
    }
}
