<?php

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_35d02f664adf1a5ad0e7b4017c996d4c722f003d0424568eb6fe0e85a1cbd394 extends Twig_Template
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
        $__internal_e27a3b4fcfbd1f287bbb0c504b5b0b26674aa0c9b5bcd51d3d8446bfb5c51828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27a3b4fcfbd1f287bbb0c504b5b0b26674aa0c9b5bcd51d3d8446bfb5c51828->enter($__internal_e27a3b4fcfbd1f287bbb0c504b5b0b26674aa0c9b5bcd51d3d8446bfb5c51828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_e27a3b4fcfbd1f287bbb0c504b5b0b26674aa0c9b5bcd51d3d8446bfb5c51828->leave($__internal_e27a3b4fcfbd1f287bbb0c504b5b0b26674aa0c9b5bcd51d3d8446bfb5c51828_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ value|date(field_options.format) }}
", "@EasyAdmin/default/field_date.html.twig", "C:\\wamp64\\www\\permisfute\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_date.html.twig");
    }
}
