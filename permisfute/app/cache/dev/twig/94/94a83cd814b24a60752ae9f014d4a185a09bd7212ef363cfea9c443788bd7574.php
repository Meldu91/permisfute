<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ba4f4e57962283b8c562830c1436d4a6454773bf2ef991c0b8eef8f3d999eee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ade4a465c09ec70d26ca12828971604b79782a1f937ded14ab52eb8701b551d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ade4a465c09ec70d26ca12828971604b79782a1f937ded14ab52eb8701b551d->enter($__internal_9ade4a465c09ec70d26ca12828971604b79782a1f937ded14ab52eb8701b551d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ade4a465c09ec70d26ca12828971604b79782a1f937ded14ab52eb8701b551d->leave($__internal_9ade4a465c09ec70d26ca12828971604b79782a1f937ded14ab52eb8701b551d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4528246d743796f3d88d5cea01164d60b9b66a0801a425840937752638ccc6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4528246d743796f3d88d5cea01164d60b9b66a0801a425840937752638ccc6d8->enter($__internal_4528246d743796f3d88d5cea01164d60b9b66a0801a425840937752638ccc6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4528246d743796f3d88d5cea01164d60b9b66a0801a425840937752638ccc6d8->leave($__internal_4528246d743796f3d88d5cea01164d60b9b66a0801a425840937752638ccc6d8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d72f1595d6cc5bb11323c348a3a2edbc12554adce53a9d25b03595e1791a909b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72f1595d6cc5bb11323c348a3a2edbc12554adce53a9d25b03595e1791a909b->enter($__internal_d72f1595d6cc5bb11323c348a3a2edbc12554adce53a9d25b03595e1791a909b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d72f1595d6cc5bb11323c348a3a2edbc12554adce53a9d25b03595e1791a909b->leave($__internal_d72f1595d6cc5bb11323c348a3a2edbc12554adce53a9d25b03595e1791a909b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_70431fa867c5b4b6874558d37c4eea7713f1d1310105d30080b0cecc8aabdb96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70431fa867c5b4b6874558d37c4eea7713f1d1310105d30080b0cecc8aabdb96->enter($__internal_70431fa867c5b4b6874558d37c4eea7713f1d1310105d30080b0cecc8aabdb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_70431fa867c5b4b6874558d37c4eea7713f1d1310105d30080b0cecc8aabdb96->leave($__internal_70431fa867c5b4b6874558d37c4eea7713f1d1310105d30080b0cecc8aabdb96_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
