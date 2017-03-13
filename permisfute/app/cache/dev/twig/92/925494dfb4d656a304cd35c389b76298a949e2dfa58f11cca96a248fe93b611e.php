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
        $__internal_3f3ce83c7c1731207601ba958022bbf548d21b336f62a2c4850446b7508d6541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3ce83c7c1731207601ba958022bbf548d21b336f62a2c4850446b7508d6541->enter($__internal_3f3ce83c7c1731207601ba958022bbf548d21b336f62a2c4850446b7508d6541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f3ce83c7c1731207601ba958022bbf548d21b336f62a2c4850446b7508d6541->leave($__internal_3f3ce83c7c1731207601ba958022bbf548d21b336f62a2c4850446b7508d6541_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cce15f572e7ea3b4631b73dc2b0d1582be58c84b1abd6309b925387ebfa6d675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce15f572e7ea3b4631b73dc2b0d1582be58c84b1abd6309b925387ebfa6d675->enter($__internal_cce15f572e7ea3b4631b73dc2b0d1582be58c84b1abd6309b925387ebfa6d675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cce15f572e7ea3b4631b73dc2b0d1582be58c84b1abd6309b925387ebfa6d675->leave($__internal_cce15f572e7ea3b4631b73dc2b0d1582be58c84b1abd6309b925387ebfa6d675_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3214fec0935c5b5dbcf6ba70a86b86246a28dd22172debdb1588a2f63ce8f8ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3214fec0935c5b5dbcf6ba70a86b86246a28dd22172debdb1588a2f63ce8f8ac->enter($__internal_3214fec0935c5b5dbcf6ba70a86b86246a28dd22172debdb1588a2f63ce8f8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3214fec0935c5b5dbcf6ba70a86b86246a28dd22172debdb1588a2f63ce8f8ac->leave($__internal_3214fec0935c5b5dbcf6ba70a86b86246a28dd22172debdb1588a2f63ce8f8ac_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_263217b0b5987972c2f9701a3f3b7648cf312714b00db22f7669bfac154373d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263217b0b5987972c2f9701a3f3b7648cf312714b00db22f7669bfac154373d2->enter($__internal_263217b0b5987972c2f9701a3f3b7648cf312714b00db22f7669bfac154373d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_263217b0b5987972c2f9701a3f3b7648cf312714b00db22f7669bfac154373d2->leave($__internal_263217b0b5987972c2f9701a3f3b7648cf312714b00db22f7669bfac154373d2_prof);

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
