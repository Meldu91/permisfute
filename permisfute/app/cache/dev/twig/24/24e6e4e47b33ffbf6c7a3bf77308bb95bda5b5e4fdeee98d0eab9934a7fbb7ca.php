<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_12f46ab6ea1aeb3972709da34a4e2ff6e8e6cb9991c24b2d532a0aadb198c230 extends Twig_Template
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
        $__internal_b505299176605cc92fd866928e9da656a7bdd61fc6ccae90b167a67a042b9eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b505299176605cc92fd866928e9da656a7bdd61fc6ccae90b167a67a042b9eaa->enter($__internal_b505299176605cc92fd866928e9da656a7bdd61fc6ccae90b167a67a042b9eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b505299176605cc92fd866928e9da656a7bdd61fc6ccae90b167a67a042b9eaa->leave($__internal_b505299176605cc92fd866928e9da656a7bdd61fc6ccae90b167a67a042b9eaa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cd6075081b4c5d9bdd814b64c7dc9fe269acf69b005cfb3048a618a335b6e596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6075081b4c5d9bdd814b64c7dc9fe269acf69b005cfb3048a618a335b6e596->enter($__internal_cd6075081b4c5d9bdd814b64c7dc9fe269acf69b005cfb3048a618a335b6e596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cd6075081b4c5d9bdd814b64c7dc9fe269acf69b005cfb3048a618a335b6e596->leave($__internal_cd6075081b4c5d9bdd814b64c7dc9fe269acf69b005cfb3048a618a335b6e596_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d4df90aab7106b6b108c29d8307f77161589829fa80a2617b41a307c1716f99f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4df90aab7106b6b108c29d8307f77161589829fa80a2617b41a307c1716f99f->enter($__internal_d4df90aab7106b6b108c29d8307f77161589829fa80a2617b41a307c1716f99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d4df90aab7106b6b108c29d8307f77161589829fa80a2617b41a307c1716f99f->leave($__internal_d4df90aab7106b6b108c29d8307f77161589829fa80a2617b41a307c1716f99f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f7474a50ad7e26f1c4d837e86690b5304babfdd5773b0b2283a4e62e11d39b09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7474a50ad7e26f1c4d837e86690b5304babfdd5773b0b2283a4e62e11d39b09->enter($__internal_f7474a50ad7e26f1c4d837e86690b5304babfdd5773b0b2283a4e62e11d39b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f7474a50ad7e26f1c4d837e86690b5304babfdd5773b0b2283a4e62e11d39b09->leave($__internal_f7474a50ad7e26f1c4d837e86690b5304babfdd5773b0b2283a4e62e11d39b09_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\permisfute\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
