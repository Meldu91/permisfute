<?php

/* :FOSUserBundle/views/Resetting:checkEmail.html.twig */
class __TwigTemplate_36bb3ae63a264f3516eface093ee80b424e3ddf4f5a23d98049ae1a2fbb3933d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", ":FOSUserBundle/views/Resetting:checkEmail.html.twig", 1);
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
        $__internal_0a1ecd8ca2e9deb4fa2d804f7c2c2b0d52d52825e2730e937ca4d8bc26330b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a1ecd8ca2e9deb4fa2d804f7c2c2b0d52d52825e2730e937ca4d8bc26330b36->enter($__internal_0a1ecd8ca2e9deb4fa2d804f7c2c2b0d52d52825e2730e937ca4d8bc26330b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views/Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a1ecd8ca2e9deb4fa2d804f7c2c2b0d52d52825e2730e937ca4d8bc26330b36->leave($__internal_0a1ecd8ca2e9deb4fa2d804f7c2c2b0d52d52825e2730e937ca4d8bc26330b36_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2d5fb8eb8cbb3b49096d6994191e6f157bfb3eb3e0f65fbf2c17b6544cb3637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d5fb8eb8cbb3b49096d6994191e6f157bfb3eb3e0f65fbf2c17b6544cb3637->enter($__internal_a2d5fb8eb8cbb3b49096d6994191e6f157bfb3eb3e0f65fbf2c17b6544cb3637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_a2d5fb8eb8cbb3b49096d6994191e6f157bfb3eb3e0f65fbf2c17b6544cb3637->leave($__internal_a2d5fb8eb8cbb3b49096d6994191e6f157bfb3eb3e0f65fbf2c17b6544cb3637_prof);

    }

    public function getTemplateName()
    {
        return ":FOSUserBundle/views/Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
", ":FOSUserBundle/views/Resetting:checkEmail.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources\\views/FOSUserBundle/views/Resetting/checkEmail.html.twig");
    }
}
