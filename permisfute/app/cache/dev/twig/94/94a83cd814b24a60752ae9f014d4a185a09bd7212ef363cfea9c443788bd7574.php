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
        $__internal_807e414ab2f5e2fd3eccc06ed9324bb9102bbf9e6ef25dd03459f1aa277bf77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807e414ab2f5e2fd3eccc06ed9324bb9102bbf9e6ef25dd03459f1aa277bf77b->enter($__internal_807e414ab2f5e2fd3eccc06ed9324bb9102bbf9e6ef25dd03459f1aa277bf77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_807e414ab2f5e2fd3eccc06ed9324bb9102bbf9e6ef25dd03459f1aa277bf77b->leave($__internal_807e414ab2f5e2fd3eccc06ed9324bb9102bbf9e6ef25dd03459f1aa277bf77b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ef0a489d93cb415e87835641de8d1cb3552a5a3ad1c79889a3d910e1f8a58d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0a489d93cb415e87835641de8d1cb3552a5a3ad1c79889a3d910e1f8a58d54->enter($__internal_ef0a489d93cb415e87835641de8d1cb3552a5a3ad1c79889a3d910e1f8a58d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ef0a489d93cb415e87835641de8d1cb3552a5a3ad1c79889a3d910e1f8a58d54->leave($__internal_ef0a489d93cb415e87835641de8d1cb3552a5a3ad1c79889a3d910e1f8a58d54_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2385d452a6ec144c2cd2e218e423981f2ddd03ac0505f1688e724a1d3e6a8cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2385d452a6ec144c2cd2e218e423981f2ddd03ac0505f1688e724a1d3e6a8cc4->enter($__internal_2385d452a6ec144c2cd2e218e423981f2ddd03ac0505f1688e724a1d3e6a8cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2385d452a6ec144c2cd2e218e423981f2ddd03ac0505f1688e724a1d3e6a8cc4->leave($__internal_2385d452a6ec144c2cd2e218e423981f2ddd03ac0505f1688e724a1d3e6a8cc4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d013b3792e20ea96810b07200a8302d73c94cc07ad93ab86121ada174988f38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d013b3792e20ea96810b07200a8302d73c94cc07ad93ab86121ada174988f38e->enter($__internal_d013b3792e20ea96810b07200a8302d73c94cc07ad93ab86121ada174988f38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d013b3792e20ea96810b07200a8302d73c94cc07ad93ab86121ada174988f38e->leave($__internal_d013b3792e20ea96810b07200a8302d73c94cc07ad93ab86121ada174988f38e_prof);

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
