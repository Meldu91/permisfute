<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_30e2777817c95e136dea5d5fbd71d3d3f3bcaa900212b038e575be7bc2ae5339 extends Twig_Template
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
        $__internal_4eebcc619726ac3c87814ff5656aceba071996f302c5e374d6fc6446209e2daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eebcc619726ac3c87814ff5656aceba071996f302c5e374d6fc6446209e2daa->enter($__internal_4eebcc619726ac3c87814ff5656aceba071996f302c5e374d6fc6446209e2daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4eebcc619726ac3c87814ff5656aceba071996f302c5e374d6fc6446209e2daa->leave($__internal_4eebcc619726ac3c87814ff5656aceba071996f302c5e374d6fc6446209e2daa_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8968675cd9ffbbcc55214d10d94e5537d13d7ea6f30dba3b0c6f43c74adfea6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8968675cd9ffbbcc55214d10d94e5537d13d7ea6f30dba3b0c6f43c74adfea6e->enter($__internal_8968675cd9ffbbcc55214d10d94e5537d13d7ea6f30dba3b0c6f43c74adfea6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8968675cd9ffbbcc55214d10d94e5537d13d7ea6f30dba3b0c6f43c74adfea6e->leave($__internal_8968675cd9ffbbcc55214d10d94e5537d13d7ea6f30dba3b0c6f43c74adfea6e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
