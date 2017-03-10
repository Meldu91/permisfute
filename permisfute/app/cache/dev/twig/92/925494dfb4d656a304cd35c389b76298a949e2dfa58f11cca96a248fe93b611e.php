<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_436e0b2d75352296ac5ff84cfbfe0c46e77679e1d20e75cc604642bd47f01539 extends Twig_Template
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
        $__internal_f69617393b56f95073901b7960bc81d58ac729026a5dfc1d1b4a684a8907d5d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69617393b56f95073901b7960bc81d58ac729026a5dfc1d1b4a684a8907d5d6->enter($__internal_f69617393b56f95073901b7960bc81d58ac729026a5dfc1d1b4a684a8907d5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f69617393b56f95073901b7960bc81d58ac729026a5dfc1d1b4a684a8907d5d6->leave($__internal_f69617393b56f95073901b7960bc81d58ac729026a5dfc1d1b4a684a8907d5d6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fa009601d0ec7deba9341c6bb4521cbe4d86af9a00bc5f2440d5ed5c69e46e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa009601d0ec7deba9341c6bb4521cbe4d86af9a00bc5f2440d5ed5c69e46e18->enter($__internal_fa009601d0ec7deba9341c6bb4521cbe4d86af9a00bc5f2440d5ed5c69e46e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fa009601d0ec7deba9341c6bb4521cbe4d86af9a00bc5f2440d5ed5c69e46e18->leave($__internal_fa009601d0ec7deba9341c6bb4521cbe4d86af9a00bc5f2440d5ed5c69e46e18_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_80ee99165b0ba50feb26982f801433f85073c28986c9ff5a27308aaf34be4d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ee99165b0ba50feb26982f801433f85073c28986c9ff5a27308aaf34be4d4a->enter($__internal_80ee99165b0ba50feb26982f801433f85073c28986c9ff5a27308aaf34be4d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_80ee99165b0ba50feb26982f801433f85073c28986c9ff5a27308aaf34be4d4a->leave($__internal_80ee99165b0ba50feb26982f801433f85073c28986c9ff5a27308aaf34be4d4a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fba68e6c62e6e123daee965cbaf70f974add7a7ac80a3fed14742483253be9a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba68e6c62e6e123daee965cbaf70f974add7a7ac80a3fed14742483253be9a8->enter($__internal_fba68e6c62e6e123daee965cbaf70f974add7a7ac80a3fed14742483253be9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fba68e6c62e6e123daee965cbaf70f974add7a7ac80a3fed14742483253be9a8->leave($__internal_fba68e6c62e6e123daee965cbaf70f974add7a7ac80a3fed14742483253be9a8_prof);

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
