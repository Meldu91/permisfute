<?php

/* FOSUserBundle/views/Group/edit_content.html.twig */
class __TwigTemplate_07470a227086f8e8f767d3b9f8ea4d8d0e7e0e08d6f62df2d4c7cb187cd033cc extends Twig_Template
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
        $__internal_5f5d8a7e1b6b5e3ae196ec6bb19d43fbff64ac011794016f23d2485e5da918b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5d8a7e1b6b5e3ae196ec6bb19d43fbff64ac011794016f23d2485e5da918b2->enter($__internal_5f5d8a7e1b6b5e3ae196ec6bb19d43fbff64ac011794016f23d2485e5da918b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle/views/Group/edit_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) ? $context["group_name"] : $this->getContext($context, "group_name")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_edit\">
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_5f5d8a7e1b6b5e3ae196ec6bb19d43fbff64ac011794016f23d2485e5da918b2->leave($__internal_5f5d8a7e1b6b5e3ae196ec6bb19d43fbff64ac011794016f23d2485e5da918b2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle/views/Group/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 4,  25 => 3,  22 => 2,);
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

<form action=\"{{ path('fos_user_group_edit', {'groupName': group_name} ) }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_group_edit\">
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle/views/Group/edit_content.html.twig", "C:\\wamp\\www\\permisfute\\app\\Resources\\views\\FOSUserBundle\\views\\Group\\edit_content.html.twig");
    }
}
