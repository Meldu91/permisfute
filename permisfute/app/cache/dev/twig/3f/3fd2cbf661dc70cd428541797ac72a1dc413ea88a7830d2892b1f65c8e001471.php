<?php

/* ADesignsCalendarBundle::calendar.html.twig */
class __TwigTemplate_1b0f52c558c8f4a33d1f72dbc30ae45b42510e6d6cb847feb09c5de6c3b1c927 extends Twig_Template
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
        $__internal_89ce48e60e291be58174db97b2dfaa298fc9a85cfd6f5fcb6c06f2bf56cfae8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ce48e60e291be58174db97b2dfaa298fc9a85cfd6f5fcb6c06f2bf56cfae8c->enter($__internal_89ce48e60e291be58174db97b2dfaa298fc9a85cfd6f5fcb6c06f2bf56cfae8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ADesignsCalendarBundle::calendar.html.twig"));

        // line 1
        echo "<div id=\"calendar-holder\"></div>
";
        
        $__internal_89ce48e60e291be58174db97b2dfaa298fc9a85cfd6f5fcb6c06f2bf56cfae8c->leave($__internal_89ce48e60e291be58174db97b2dfaa298fc9a85cfd6f5fcb6c06f2bf56cfae8c_prof);

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
", "ADesignsCalendarBundle::calendar.html.twig", "C:\\wamp\\www\\permisfute\\vendor\\adesigns\\calendar-bundle\\ADesigns\\CalendarBundle/Resources/views/calendar.html.twig");
    }
}
