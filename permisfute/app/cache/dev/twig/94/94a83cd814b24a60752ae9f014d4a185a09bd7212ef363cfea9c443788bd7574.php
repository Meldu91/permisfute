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
        $__internal_2cb862b894a3bda6d66dd84da20db66833830ef0c5781e196ef93bd452d5ae0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb862b894a3bda6d66dd84da20db66833830ef0c5781e196ef93bd452d5ae0c->enter($__internal_2cb862b894a3bda6d66dd84da20db66833830ef0c5781e196ef93bd452d5ae0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cb862b894a3bda6d66dd84da20db66833830ef0c5781e196ef93bd452d5ae0c->leave($__internal_2cb862b894a3bda6d66dd84da20db66833830ef0c5781e196ef93bd452d5ae0c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9b6505e6c4fc11c6036fa7657e9cc2c6400ec694912709d65e33fc18c9375530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6505e6c4fc11c6036fa7657e9cc2c6400ec694912709d65e33fc18c9375530->enter($__internal_9b6505e6c4fc11c6036fa7657e9cc2c6400ec694912709d65e33fc18c9375530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9b6505e6c4fc11c6036fa7657e9cc2c6400ec694912709d65e33fc18c9375530->leave($__internal_9b6505e6c4fc11c6036fa7657e9cc2c6400ec694912709d65e33fc18c9375530_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4a7043f6369651db14862c6d04e429cbdf42a13a0d2f3f7e6a77341d7d40b372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7043f6369651db14862c6d04e429cbdf42a13a0d2f3f7e6a77341d7d40b372->enter($__internal_4a7043f6369651db14862c6d04e429cbdf42a13a0d2f3f7e6a77341d7d40b372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4a7043f6369651db14862c6d04e429cbdf42a13a0d2f3f7e6a77341d7d40b372->leave($__internal_4a7043f6369651db14862c6d04e429cbdf42a13a0d2f3f7e6a77341d7d40b372_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9daa39c0a701214e78c373629a3158a1158156e7a3f5c3fc38983a2593ce1e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9daa39c0a701214e78c373629a3158a1158156e7a3f5c3fc38983a2593ce1e94->enter($__internal_9daa39c0a701214e78c373629a3158a1158156e7a3f5c3fc38983a2593ce1e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9daa39c0a701214e78c373629a3158a1158156e7a3f5c3fc38983a2593ce1e94->leave($__internal_9daa39c0a701214e78c373629a3158a1158156e7a3f5c3fc38983a2593ce1e94_prof);

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
