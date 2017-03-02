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
        $__internal_1b7240f26f0930e3c55b7b54a316fb8590eee952a8409ee0a09aa8241f505327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7240f26f0930e3c55b7b54a316fb8590eee952a8409ee0a09aa8241f505327->enter($__internal_1b7240f26f0930e3c55b7b54a316fb8590eee952a8409ee0a09aa8241f505327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b7240f26f0930e3c55b7b54a316fb8590eee952a8409ee0a09aa8241f505327->leave($__internal_1b7240f26f0930e3c55b7b54a316fb8590eee952a8409ee0a09aa8241f505327_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bee22f847c57f36cae866881c9e572b1baab9a5d2768bef8797cf7ee121024d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee22f847c57f36cae866881c9e572b1baab9a5d2768bef8797cf7ee121024d0->enter($__internal_bee22f847c57f36cae866881c9e572b1baab9a5d2768bef8797cf7ee121024d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bee22f847c57f36cae866881c9e572b1baab9a5d2768bef8797cf7ee121024d0->leave($__internal_bee22f847c57f36cae866881c9e572b1baab9a5d2768bef8797cf7ee121024d0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_faaaa1cb8c9eb30c8723b0fc0d2a0ee83f1069b8730949aad963ed3849841c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faaaa1cb8c9eb30c8723b0fc0d2a0ee83f1069b8730949aad963ed3849841c52->enter($__internal_faaaa1cb8c9eb30c8723b0fc0d2a0ee83f1069b8730949aad963ed3849841c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_faaaa1cb8c9eb30c8723b0fc0d2a0ee83f1069b8730949aad963ed3849841c52->leave($__internal_faaaa1cb8c9eb30c8723b0fc0d2a0ee83f1069b8730949aad963ed3849841c52_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3b1c273f891a1f05e7342ec6b2db2e80882d8ad2d6d27a17816d26b9061adfad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1c273f891a1f05e7342ec6b2db2e80882d8ad2d6d27a17816d26b9061adfad->enter($__internal_3b1c273f891a1f05e7342ec6b2db2e80882d8ad2d6d27a17816d26b9061adfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3b1c273f891a1f05e7342ec6b2db2e80882d8ad2d6d27a17816d26b9061adfad->leave($__internal_3b1c273f891a1f05e7342ec6b2db2e80882d8ad2d6d27a17816d26b9061adfad_prof);

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
