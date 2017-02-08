<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_ac238f6453b5396d87765bd399133cab5894de63aab3d0a2f86767b513872473 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_f2b88252eeb6f7baad3d164c2cae6d06f087ffafe43b2e3148274aa77447282b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b88252eeb6f7baad3d164c2cae6d06f087ffafe43b2e3148274aa77447282b->enter($__internal_f2b88252eeb6f7baad3d164c2cae6d06f087ffafe43b2e3148274aa77447282b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2b88252eeb6f7baad3d164c2cae6d06f087ffafe43b2e3148274aa77447282b->leave($__internal_f2b88252eeb6f7baad3d164c2cae6d06f087ffafe43b2e3148274aa77447282b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_566a7abedee5b94c193c51810faad938aab8d046c2e1ebdb87d67eaa9aa60b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566a7abedee5b94c193c51810faad938aab8d046c2e1ebdb87d67eaa9aa60b99->enter($__internal_566a7abedee5b94c193c51810faad938aab8d046c2e1ebdb87d67eaa9aa60b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_566a7abedee5b94c193c51810faad938aab8d046c2e1ebdb87d67eaa9aa60b99->leave($__internal_566a7abedee5b94c193c51810faad938aab8d046c2e1ebdb87d67eaa9aa60b99_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
", "FOSUserBundle:Registration:checkEmail.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/checkEmail.html.twig");
    }
}
