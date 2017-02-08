<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f51bd425d6a7ff8e5dc8e23505b2480803205d5ffff93c2d9f694c43ac9e8768 extends Twig_Template
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
        $__internal_4163d43640543a773aa9e1a0eda90464c67953847bb02d4c79d5ce4a18e4593d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4163d43640543a773aa9e1a0eda90464c67953847bb02d4c79d5ce4a18e4593d->enter($__internal_4163d43640543a773aa9e1a0eda90464c67953847bb02d4c79d5ce4a18e4593d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4163d43640543a773aa9e1a0eda90464c67953847bb02d4c79d5ce4a18e4593d->leave($__internal_4163d43640543a773aa9e1a0eda90464c67953847bb02d4c79d5ce4a18e4593d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_651df2f926a871083b94f56838b3fd8f1cc99ca78d337f1b51aaca7775ab8f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651df2f926a871083b94f56838b3fd8f1cc99ca78d337f1b51aaca7775ab8f18->enter($__internal_651df2f926a871083b94f56838b3fd8f1cc99ca78d337f1b51aaca7775ab8f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_651df2f926a871083b94f56838b3fd8f1cc99ca78d337f1b51aaca7775ab8f18->leave($__internal_651df2f926a871083b94f56838b3fd8f1cc99ca78d337f1b51aaca7775ab8f18_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bb7abd537ca3245b69c8948e8c53dda6a76538292302bed9a46b70b5c74cb623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7abd537ca3245b69c8948e8c53dda6a76538292302bed9a46b70b5c74cb623->enter($__internal_bb7abd537ca3245b69c8948e8c53dda6a76538292302bed9a46b70b5c74cb623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bb7abd537ca3245b69c8948e8c53dda6a76538292302bed9a46b70b5c74cb623->leave($__internal_bb7abd537ca3245b69c8948e8c53dda6a76538292302bed9a46b70b5c74cb623_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d96dafdff8430f6a21d0a2a58c285e6e8d3517e2d5a157c85b85803b4e10a11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d96dafdff8430f6a21d0a2a58c285e6e8d3517e2d5a157c85b85803b4e10a11->enter($__internal_2d96dafdff8430f6a21d0a2a58c285e6e8d3517e2d5a157c85b85803b4e10a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2d96dafdff8430f6a21d0a2a58c285e6e8d3517e2d5a157c85b85803b4e10a11->leave($__internal_2d96dafdff8430f6a21d0a2a58c285e6e8d3517e2d5a157c85b85803b4e10a11_prof);

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
