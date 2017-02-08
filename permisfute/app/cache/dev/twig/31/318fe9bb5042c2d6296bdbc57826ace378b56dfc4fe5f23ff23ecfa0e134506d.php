<?php

/* :FOSUserBundle/views/Group:show_content.html.twig */
class __TwigTemplate_c2d956819f63e5f85fda016bc6f8c2ad797201d92a8bcd221f42c68238e7b455 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e68b436e810a9418c4a1ae502bef53dd55b0fb07b4f9d7b8f6e2d04360f7d27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68b436e810a9418c4a1ae502bef53dd55b0fb07b4f9d7b8f6e2d04360f7d27f->enter($__internal_e68b436e810a9418c4a1ae502bef53dd55b0fb07b4f9d7b8f6e2d04360f7d27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views/Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e68b436e810a9418c4a1ae502bef53dd55b0fb07b4f9d7b8f6e2d04360f7d27f->leave($__internal_e68b436e810a9418c4a1ae502bef53dd55b0fb07b4f9d7b8f6e2d04360f7d27f_prof);

    }

    public function getTemplateName()
    {
        return ":FOSUserBundle/views/Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", ":FOSUserBundle/views/Group:show_content.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources\\views/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
