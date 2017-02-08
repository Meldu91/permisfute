<?php

/* :FOSUserBundle/views/Group:new_content.html.twig */
class __TwigTemplate_da53fe30f8dcf644635a81b11fd8419ac66ca4a5d84cb9768c78162f6d4a4bdb extends Twig_Template
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
        $__internal_2c4cf4ed8f9c4897f32fdc6d70d40385f1ff4325b5d9125fcd8d5f38b8ace666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4cf4ed8f9c4897f32fdc6d70d40385f1ff4325b5d9125fcd8d5f38b8ace666->enter($__internal_2c4cf4ed8f9c4897f32fdc6d70d40385f1ff4325b5d9125fcd8d5f38b8ace666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views/Group:new_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_new\">
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_2c4cf4ed8f9c4897f32fdc6d70d40385f1ff4325b5d9125fcd8d5f38b8ace666->leave($__internal_2c4cf4ed8f9c4897f32fdc6d70d40385f1ff4325b5d9125fcd8d5f38b8ace666_prof);

    }

    public function getTemplateName()
    {
        return ":FOSUserBundle/views/Group:new_content.html.twig";
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

<form action=\"{{ path('fos_user_group_new') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_group_new\">
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
</form>
", ":FOSUserBundle/views/Group:new_content.html.twig", "C:\\wamp\\www\\permisfute\\app/Resources\\views/FOSUserBundle/views/Group/new_content.html.twig");
    }
}
