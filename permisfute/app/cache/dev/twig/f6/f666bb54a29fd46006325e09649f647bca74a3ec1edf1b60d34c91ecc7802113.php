<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_7ca5ae4f033b9e4bda9dd8b63f3b09479ebbbddf00da650e98b4d51a3ccde6d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_645411064203bbeec712ff38826f448990401abb26cfa1e2d63db2d2abcc9f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_645411064203bbeec712ff38826f448990401abb26cfa1e2d63db2d2abcc9f7e->enter($__internal_645411064203bbeec712ff38826f448990401abb26cfa1e2d63db2d2abcc9f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_645411064203bbeec712ff38826f448990401abb26cfa1e2d63db2d2abcc9f7e->leave($__internal_645411064203bbeec712ff38826f448990401abb26cfa1e2d63db2d2abcc9f7e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9adb447c2221acc994630a096b5272497dc2a006e82a1ae109b4fe3a044d854b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9adb447c2221acc994630a096b5272497dc2a006e82a1ae109b4fe3a044d854b->enter($__internal_9adb447c2221acc994630a096b5272497dc2a006e82a1ae109b4fe3a044d854b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9adb447c2221acc994630a096b5272497dc2a006e82a1ae109b4fe3a044d854b->leave($__internal_9adb447c2221acc994630a096b5272497dc2a006e82a1ae109b4fe3a044d854b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
