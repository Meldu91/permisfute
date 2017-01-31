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
        $__internal_3dad05a4d34f114d400128bb503b64e2bcb2b0736ec303b470508e583b62b474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dad05a4d34f114d400128bb503b64e2bcb2b0736ec303b470508e583b62b474->enter($__internal_3dad05a4d34f114d400128bb503b64e2bcb2b0736ec303b470508e583b62b474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dad05a4d34f114d400128bb503b64e2bcb2b0736ec303b470508e583b62b474->leave($__internal_3dad05a4d34f114d400128bb503b64e2bcb2b0736ec303b470508e583b62b474_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f381a564f11ba31d88f3c793937c729841a2eef03474cb9270f4ad6e835d0b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f381a564f11ba31d88f3c793937c729841a2eef03474cb9270f4ad6e835d0b0a->enter($__internal_f381a564f11ba31d88f3c793937c729841a2eef03474cb9270f4ad6e835d0b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f381a564f11ba31d88f3c793937c729841a2eef03474cb9270f4ad6e835d0b0a->leave($__internal_f381a564f11ba31d88f3c793937c729841a2eef03474cb9270f4ad6e835d0b0a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff200185b5e6bd8a07fa5ed216705a5a107c0a8558231db6bfdfdc50e7cc26fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff200185b5e6bd8a07fa5ed216705a5a107c0a8558231db6bfdfdc50e7cc26fb->enter($__internal_ff200185b5e6bd8a07fa5ed216705a5a107c0a8558231db6bfdfdc50e7cc26fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ff200185b5e6bd8a07fa5ed216705a5a107c0a8558231db6bfdfdc50e7cc26fb->leave($__internal_ff200185b5e6bd8a07fa5ed216705a5a107c0a8558231db6bfdfdc50e7cc26fb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_587aa68dfbe043028f5eec9872a28e8d8531eef042d54954dd5db26be391c4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_587aa68dfbe043028f5eec9872a28e8d8531eef042d54954dd5db26be391c4f6->enter($__internal_587aa68dfbe043028f5eec9872a28e8d8531eef042d54954dd5db26be391c4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_587aa68dfbe043028f5eec9872a28e8d8531eef042d54954dd5db26be391c4f6->leave($__internal_587aa68dfbe043028f5eec9872a28e8d8531eef042d54954dd5db26be391c4f6_prof);

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
