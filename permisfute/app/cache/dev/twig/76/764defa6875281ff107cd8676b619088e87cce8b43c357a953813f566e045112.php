<?php

/* ADesignsCalendarBundle::calendar.html.twig */
class __TwigTemplate_65ec67890e699298ae2b7b3a5fb28af32a33cfb5321ae60dc185f01c5273f2dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a94a97b75aaee6c4d3e5004383c3046f68044bcaa76a614aafbd22ce8b9579c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94a97b75aaee6c4d3e5004383c3046f68044bcaa76a614aafbd22ce8b9579c0->enter($__internal_a94a97b75aaee6c4d3e5004383c3046f68044bcaa76a614aafbd22ce8b9579c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ADesignsCalendarBundle::calendar.html.twig"));

        // line 1
        echo "<div id=\"calendar-holder\"></div>
";
        
        $__internal_a94a97b75aaee6c4d3e5004383c3046f68044bcaa76a614aafbd22ce8b9579c0->leave($__internal_a94a97b75aaee6c4d3e5004383c3046f68044bcaa76a614aafbd22ce8b9579c0_prof);

    }

    public function getTemplateName()
    {
        return "ADesignsCalendarBundle::calendar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"calendar-holder\"></div>
", "ADesignsCalendarBundle::calendar.html.twig", "C:\\wamp64\\www\\permisfute\\vendor\\adesigns\\calendar-bundle\\ADesigns\\CalendarBundle/Resources/views/calendar.html.twig");
    }
}
