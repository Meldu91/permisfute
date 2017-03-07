<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a8ded009679472426d048fe3649406fd6a72a011db82500ef55f964cbf9d4e82 extends Twig_Template
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
        $__internal_522c2ee8de958b3c91d784eb8900d83a5ca314a590fdcb8ed8f5e8154000a3b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_522c2ee8de958b3c91d784eb8900d83a5ca314a590fdcb8ed8f5e8154000a3b0->enter($__internal_522c2ee8de958b3c91d784eb8900d83a5ca314a590fdcb8ed8f5e8154000a3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_522c2ee8de958b3c91d784eb8900d83a5ca314a590fdcb8ed8f5e8154000a3b0->leave($__internal_522c2ee8de958b3c91d784eb8900d83a5ca314a590fdcb8ed8f5e8154000a3b0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_31e31838a89246d27341640336a05a0abe62325249bfb7e9d90e3adb080cfa15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e31838a89246d27341640336a05a0abe62325249bfb7e9d90e3adb080cfa15->enter($__internal_31e31838a89246d27341640336a05a0abe62325249bfb7e9d90e3adb080cfa15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_31e31838a89246d27341640336a05a0abe62325249bfb7e9d90e3adb080cfa15->leave($__internal_31e31838a89246d27341640336a05a0abe62325249bfb7e9d90e3adb080cfa15_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f0dffaefa55bf3042a5b8bd5a0f23c5af0f3dc04adf0c76db78d193f92c3c700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0dffaefa55bf3042a5b8bd5a0f23c5af0f3dc04adf0c76db78d193f92c3c700->enter($__internal_f0dffaefa55bf3042a5b8bd5a0f23c5af0f3dc04adf0c76db78d193f92c3c700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f0dffaefa55bf3042a5b8bd5a0f23c5af0f3dc04adf0c76db78d193f92c3c700->leave($__internal_f0dffaefa55bf3042a5b8bd5a0f23c5af0f3dc04adf0c76db78d193f92c3c700_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a137c65ab592ef956868c864a6dd70225601e5e080d324110742550e8b37aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a137c65ab592ef956868c864a6dd70225601e5e080d324110742550e8b37aa7->enter($__internal_9a137c65ab592ef956868c864a6dd70225601e5e080d324110742550e8b37aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9a137c65ab592ef956868c864a6dd70225601e5e080d324110742550e8b37aa7->leave($__internal_9a137c65ab592ef956868c864a6dd70225601e5e080d324110742550e8b37aa7_prof);

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
